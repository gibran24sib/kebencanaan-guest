<?php

namespace App\Http\Controllers;

use App\Models\LogistikBencana;
use Illuminate\Http\Request;

class LogistikBencanaController extends Controller
{
    /**
     * =========================
     * API SECTION
     * =========================
     */

    // GET /api/logistik-bencana
    public function index()
    {
        $logistik = LogistikBencana::with('kejadianBencana')->get();
        return response()->json($logistik);
    }

    // POST /api/logistik-bencana
    public function store(Request $request)
    {
        $request->validate([
            // ⛔ SESUAIKAN DENGAN PK YANG BENAR
            'kejadian_id' => 'required|exists:kejadian_bencana,kejadian_id',
            'nama_barang' => 'required|string|max:100',
            'satuan' => 'required|string|max:50',
            'stok' => 'required|integer|min:0',
            'sumber' => 'nullable|string|max:100',
        ]);

        $logistik = LogistikBencana::create($request->all());
        return response()->json($logistik, 201);
    }

    // GET /api/logistik-bencana/{id}
    public function show(string $id)
    {
        $logistik = LogistikBencana::with('kejadianBencana')->findOrFail($id);
        return response()->json($logistik);
    }

    // PUT /api/logistik-bencana/{id}
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kejadian_id' => 'exists:kejadian_bencana,kejadian_id',
            'nama_barang' => 'string|max:100',
            'satuan' => 'string|max:50',
            'stok' => 'integer|min:0',
            'sumber' => 'nullable|string|max:100',
        ]);

        $logistik = LogistikBencana::findOrFail($id);
        $logistik->update($request->all());

        return response()->json($logistik);
    }

    // DELETE /api/logistik-bencana/{id}
    public function destroy(string $id)
    {
        $logistik = LogistikBencana::findOrFail($id);
        $logistik->delete();

        return response()->json(null, 204);
    }

    /**
     * =========================
     * WEB SECTION (BLADE)
     * =========================
     */

    // GET /logistik
    public function pageIndex()
    {
        $logistik = LogistikBencana::with('kejadianBencana')->get();
        return view('pages.logistik.index', compact('logistik'));
    }
}
