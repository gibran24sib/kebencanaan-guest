<?php

namespace App\Http\Controllers;

use App\Models\DistribusiLogistik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DistribusiLogistikController extends Controller
{
    /**
     * Tampilkan semua data distribusi
     */
    public function index()
    {
        $data = DistribusiLogistik::latest()->get();
        return view('pages.distribusi.index', compact('data'));
    }

    /**
     * Form tambah distribusi
     */
    public function create()
    {
        return view('pages.distribusi.create');
    }

    /**
     * Simpan data distribusi
     */
    public function store(Request $request)
    {
        $request->validate([
            'logistik_id' => 'required|integer',
            'posko_id' => 'required|integer',
            'tanggal' => 'required|date',
            'jumlah' => 'required|integer|min:1',
            'penerima' => 'required|string|max:255',
            'bukti_distribusi' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('bukti_distribusi')) {
            $data['bukti_distribusi'] =
                $request->file('bukti_distribusi')->store('distribusi_logistik', 'public');
        }

        DistribusiLogistik::create($data);

        return redirect()->route('distribusi.index')
            ->with('success', 'Data distribusi berhasil ditambahkan');
    }

    /**
     * Detail distribusi
     */
    public function show($id)
    {
        $data = DistribusiLogistik::findOrFail($id);
        return view('pages.distribusi.show', compact('data'));
    }

    /**
     * Form edit distribusi
     */
    public function edit($id)
    {
        $data = DistribusiLogistik::findOrFail($id);
        return view('pages.distribusi.edit', compact('data'));
    }

    /**
     * Update data distribusi
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'logistik_id' => 'required|integer',
            'posko_id' => 'required|integer',
            'tanggal' => 'required|date',
            'jumlah' => 'required|integer|min:1',
            'penerima' => 'required|string|max:255',
            'bukti_distribusi' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048'
        ]);

        $data = DistribusiLogistik::findOrFail($id);
        $input = $request->all();

        if ($request->hasFile('bukti_distribusi')) {
            if ($data->bukti_distribusi) {
                Storage::disk('public')->delete($data->bukti_distribusi);
            }

            $input['bukti_distribusi'] =
                $request->file('bukti_distribusi')->store('distribusi_logistik', 'public');
        }

        $data->update($input);

        return redirect()->route('distribusi.index')
            ->with('success', 'Data distribusi berhasil diperbarui');
    }

    /**
     * Hapus data distribusi
     */
    public function destroy($id)
    {
        $data = DistribusiLogistik::findOrFail($id);

        if ($data->bukti_distribusi) {
            Storage::disk('public')->delete($data->bukti_distribusi);
        }

        $data->delete();

        return redirect()->route('distribusi.index')
            ->with('success', 'Data distribusi berhasil dihapus');
    }
}
