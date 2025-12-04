<?php

namespace App\Http\Controllers;

use App\Models\KejadianBencana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KejadianBencanaController extends Controller
{
    /**
     * Tampilkan semua data kejadian bencana (dengan search, filter, pagination).
     */
    public function index(Request $request)
    {
        $query = KejadianBencana::query();

        // Search
        if ($request->search) {
            $query->where('jenis_bencana', 'like', '%' . $request->search . '%')
                  ->orWhere('lokasi_text', 'like', '%' . $request->search . '%');
        }

        // Filter Jenis Bencana
        if ($request->jenis_bencana) {
            $query->where('jenis_bencana', $request->jenis_bencana);
        }

        // Filter Status
        if ($request->status_kejadian) {
            $query->where('status_kejadian', $request->status_kejadian);
        }

        $kejadian = $query->latest()->paginate(6)->withQueryString();

        return view('pages.kejadian.index', compact('kejadian'));
    }

    public function create()
    {
        return view('pages.kejadian.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_bencana' => 'required|string|max:100',
            'tanggal' => 'required|date',
            'lokasi_text' => 'required|string',
            'rt' => 'nullable|string|max:5',
            'rw' => 'nullable|string|max:5',
            'dampak' => 'nullable|string',
            'status_kejadian' => 'required|string|max:50',
            'keterangan' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $fotoPath = null;

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('kejadian_bencana', 'public');
        }

        KejadianBencana::create([
            'jenis_bencana' => $request->jenis_bencana,
            'tanggal' => $request->tanggal,
            'lokasi_text' => $request->lokasi_text,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'dampak' => $request->dampak,
            'status_kejadian' => $request->status_kejadian,
            'keterangan' => $request->keterangan,
            'foto' => $fotoPath,
        ]);

        return redirect()->route('kejadian.index')->with('success', 'Data kejadian berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kejadian = KejadianBencana::findOrFail($id);
        return view('pages.kejadian.edit', compact('kejadian'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_bencana' => 'required|string|max:100',
            'tanggal' => 'required|date',
            'lokasi_text' => 'required|string',
            'rt' => 'nullable|string|max:5',
            'rw' => 'nullable|string|max:5',
            'dampak' => 'nullable|string',
            'status_kejadian' => 'required|string|max:50',
            'keterangan' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $kejadian = KejadianBencana::findOrFail($id);

        if ($request->hasFile('foto')) {
            if ($kejadian->foto && Storage::disk('public')->exists($kejadian->foto)) {
                Storage::disk('public')->delete($kejadian->foto);
            }

            $fotoPath = $request->file('foto')->store('kejadian_bencana', 'public');
        } else {
            $fotoPath = $kejadian->foto;
        }

        $kejadian->update([
            'jenis_bencana' => $request->jenis_bencana,
            'tanggal' => $request->tanggal,
            'lokasi_text' => $request->lokasi_text,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'dampak' => $request->dampak,
            'status_kejadian' => $request->status_kejadian,
            'keterangan' => $request->keterangan,
            'foto' => $fotoPath,
        ]);

        return redirect()->route('kejadian.index')->with('success', 'Data kejadian berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $kejadian = KejadianBencana::findOrFail($id);

        if ($kejadian->foto && Storage::disk('public')->exists($kejadian->foto)) {
            Storage::disk('public')->delete($kejadian->foto);
        }

        $kejadian->delete();

        return redirect()->route('kejadian.index')->with('success', 'Data kejadian berhasil dihapus.');
    }
}
