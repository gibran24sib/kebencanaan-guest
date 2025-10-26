<?php

namespace App\Http\Controllers;

use App\Models\PoskoBencana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PoskoBencanaController extends Controller
{
    /**
     * Tampilkan semua data posko bencana
     */
    public function index()
    {
        $data['posko'] = PoskoBencana::all();
        // View path disesuaikan: resources/views/Guest/posko/index-posko.blade.php
        return view('Guest.posko.index-posko', $data);
    }

    /**
     * Form tambah data posko
     */
    public function create()
    {
        // View path disesuaikan: resources/views/Guest/posko/form-posko.blade.php
        return view('Guest.posko.form-posko');
    }

    /**
     * Simpan data baru ke database
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kejadian_id' => 'required|integer',
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string',
            'kontak' => 'required|string|max:20',
            'penanggung_jawab' => 'required|string|max:100',
            'foto' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('foto_posko', 'public');
        }

        PoskoBencana::create($validated);

        return redirect()->route('posko.index')->with('success', 'Data posko berhasil ditambahkan!');
    }

    /**
     * Form edit data posko
     */
    public function edit($id)
    {
        $posko = PoskoBencana::findOrFail($id);
        return view('Guest.posko.form-posko', compact('posko'));
    }

    /**
     * Update data posko
     */
    public function update(Request $request, $id)
    {
        $posko = PoskoBencana::findOrFail($id);

        $validated = $request->validate([
            'kejadian_id' => 'required|integer',
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string',
            'kontak' => 'required|string|max:20',
            'penanggung_jawab' => 'required|string|max:100',
            'foto' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            if ($posko->foto && Storage::disk('public')->exists($posko->foto)) {
                Storage::disk('public')->delete($posko->foto);
            }
            $validated['foto'] = $request->file('foto')->store('foto_posko', 'public');
        }

        $posko->update($validated);

        return redirect()->route('posko.index')->with('success', 'Data posko berhasil diperbarui!');
    }

    /**
     * Hapus data posko
     */
    public function destroy($id)
    {
        $posko = PoskoBencana::findOrFail($id);

        if ($posko->foto && Storage::disk('public')->exists($posko->foto)) {
            Storage::disk('public')->delete($posko->foto);
        }

        $posko->delete();

        return redirect()->route('posko.index')->with('success', 'Data posko berhasil dihapus!');
    }
}
