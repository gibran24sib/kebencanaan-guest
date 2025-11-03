<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warga;

class WargaController extends Controller
{
    public function index()
    {
        $warga = Warga::all();
        return view('pages.warga.index', compact('warga'));
    }

    public function create()
    {
        return view('pages.warga.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_ktp' => 'required|unique:warga,no_ktp',
            'nama' => 'required|string|max:100',
            'gender' => 'required|string',
            'agama' => 'required|string',
            'pekerjaan' => 'required|string',
            'phone' => 'required|string|max:15',
            'email' => 'required|email',
        ]);

        $data = [
            'no_ktp' => $request->no_ktp,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            'phone' => $request->phone,
            'email' => $request->email,
        ];

        // ✅ Simpan data tanpa timestamps
        Warga::create($data);

        return redirect()->route('warga.index')->with('success', 'Data warga berhasil disimpan!');
    }

    public function edit($id)
    {
        $warga = Warga::findOrFail($id);
        return view('pages.warga.create', compact('warga'));
    }

    public function update(Request $request, $id)
    {
        $warga = Warga::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:100',
            'gender' => 'required|string',
            'agama' => 'required|string',
            'pekerjaan' => 'required|string',
            'phone' => 'required|string|max:15',
            'email' => 'required|email',
        ]);

        $warga->update($request->all());

        return redirect()->route('warga.index')->with('success', 'Data warga berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $warga = Warga::findOrFail($id);
        $warga->delete();
        return redirect()->route('warga.index')->with('success', 'Data warga berhasil dihapus!');
    }
}
