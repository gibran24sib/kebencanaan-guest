@extends('layouts.guest.app')

@section('content')
<div class="container mt-4">
    <h4 class="mb-3">Tambah Distribusi Logistik</h4>

    <form action="{{ route('distribusi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label>Logistik ID</label>
            <input type="number" name="logistik_id" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Posko ID</label>
            <input type="number" name="posko_id" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Tanggal Distribusi</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Jumlah</label>
            <input type="number" name="jumlah" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Penerima</label>
            <input type="text" name="penerima" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Bukti Distribusi</label>
            <input type="file" name="bukti_distribusi" class="form-control">
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('distribusi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
