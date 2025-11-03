@extends('layouts.guest2.app')

@section('title', isset($posko) ? 'Edit Posko Bencana' : 'Tambah Posko Bencana')

@section('content')
<div class="container mt-4">
    <h2 class="text-center fw-bold text-success mb-4">
        <i class="bi bi-building-fill"></i>
        {{ isset($posko) ? 'Edit Data Posko' : 'Tambah Data Posko' }}
    </h2>

    <form method="POST" enctype="multipart/form-data"
          action="{{ isset($posko) ? route('posko.update', $posko->posko_id) : route('posko.store') }}">
        @csrf
        @if(isset($posko))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label class="form-label">
                <i class="bi bi-123"></i> Kejadian ID
            </label>
            <input type="number" name="kejadian_id" class="form-control"
                   value="{{ old('kejadian_id', $posko->kejadian_id ?? '') }}">
            @error('kejadian_id') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">
                <i class="bi bi-house-door-fill"></i> Nama Posko
            </label>
            <input type="text" name="nama" class="form-control"
                   value="{{ old('nama', $posko->nama ?? '') }}">
            @error('nama') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">
                <i class="bi bi-geo-alt-fill"></i> Alamat
            </label>
            <textarea name="alamat" class="form-control">{{ old('alamat', $posko->alamat ?? '') }}</textarea>
            @error('alamat') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">
                <i class="bi bi-telephone-fill"></i> Kontak
            </label>
            <input type="text" name="kontak" class="form-control"
                   value="{{ old('kontak', $posko->kontak ?? '') }}">
            @error('kontak') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">
                <i class="bi bi-person-fill-gear"></i> Penanggung Jawab
            </label>
            <input type="text" name="penanggung_jawab" class="form-control"
                   value="{{ old('penanggung_jawab', $posko->penanggung_jawab ?? '') }}">
            @error('penanggung_jawab') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">
                <i class="bi bi-image-fill"></i> Foto Posko
            </label>
            <input type="file" name="foto" class="form-control">
            @if(isset($posko) && $posko->foto)
                <img src="{{ asset('storage/' . $posko->foto) }}" width="120" class="mt-2 rounded border">
            @endif
            @error('foto') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="d-flex justify-content-between">
            <a href="{{ route('posko.index') }}" class="btn btn-secondary px-4">
                <i class="bi bi-arrow-left-circle"></i> Kembali
            </a>
            <button type="submit" class="btn btn-success px-4">
                <i class="bi bi-save2-fill"></i> Simpan
            </button>
        </div>
    </form>
</div>
@endsection

@push('styles')
<style>
    body {
        background: linear-gradient(135deg, #a5d6a7 0%, #fff8e1 100%);
        background-attachment: fixed;
        background-size: cover;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    form {
        background: rgba(255, 255, 255, 0.95);
        padding: 30px;
        border-radius: 16px;
        box-shadow: 0 8px 25px rgba(76, 175, 80, 0.2);
        backdrop-filter: blur(6px);
        margin-bottom: 60px;
        border: 1px solid #c8e6c9;
    }

    .btn-success {
        background-color: #43a047;
        border-color: #388e3c;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .btn-success:hover {
        background-color: #2e7d32;
        transform: scale(1.05);
    }

    .btn-secondary {
        background-color: #ffa726;
        border-color: #fb8c00;
        color: #fff;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .btn-secondary:hover {
        background-color: #fb8c00;
        transform: scale(1.05);
    }
</style>
@endpush
