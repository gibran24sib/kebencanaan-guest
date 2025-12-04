<?php
namespace App\Http\Controllers;

use App\Models\DonasiBencana;
use App\Models\KejadianBencana;
use App\Models\Media;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    // ==============================
    // HALAMAN LIST DONASI
    // ==============================
    public function index()
    {
        // Eager loading relasi kejadian
        $donasi = DonasiBencana::with('kejadian')->get();

        return view('pages.donasi.index', compact('donasi'));
    }

    // ==============================
    // HALAMAN FORM INPUT DONASI
    // ==============================
    public function create()
    {
        $kejadian = KejadianBencana::all();
        return view('pages.donasi.create', compact('kejadian'));
    }

    // ==============================
    // SIMPAN DONASI + UPLOAD FILE
    // ==============================
    public function store(Request $request)
    {
        $request->validate([
            'kejadian_id'  => 'required|exists:kejadian_bencana,kejadian_id',
            'donatur_name' => 'required|string|max:255',
            'jenis'        => 'required|string|max:100',
            'nilai'        => 'required|numeric',
            'files.*'      => 'nullable|file|mimes:jpg,jpeg,png,pdf,docx|max:5120',
        ]);

        // SIMPAN DATA DONASI
        $donasi = DonasiBencana::create([
            'kejadian_id'  => $request->kejadian_id,
            'donatur_name' => $request->donatur_name,
            'jenis'        => $request->jenis,
            'nilai'        => $request->nilai,
        ]);

        $donasi_id = $donasi->donasi_id;

        // UPLOAD FILE MULTIPLE
        if ($request->hasFile('files')) {

            $sort = 1;

            foreach ($request->file('files') as $file) {

                $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

                $path = $file->storeAs('donasi', $filename, 'public');

                Media::create([
                    'ref_table'  => 'donasi_bencana',
                    'ref_id'     => $donasi_id,
                    'file_name'  => $filename,
                    'mime_type'  => $file->getClientMimeType(),
                    'sort_order' => $sort++,
                    'caption'    => null,
                ]);
            }
        }

        return redirect()->route('donasi.detail', $donasi_id)
            ->with('success', 'Donasi berhasil ditambahkan!');
    }

    // ==============================
    // HALAMAN DETAIL DONASI
    // ==============================
    public function detail($id)
    {
        $donasi = DonasiBencana::findOrFail($id);

        $media = Media::where('ref_table', 'donasi_bencana')
            ->where('ref_id', $id)
            ->orderBy('sort_order')
            ->get();

        return view('pages.donasi.detail', compact('donasi', 'media'));
    }
}
