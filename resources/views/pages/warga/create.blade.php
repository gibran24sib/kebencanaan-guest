@extends('layouts.guest.app')

@section('content')

<div class="container py-5">

    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('warga.index') }}" class="btn btn-success">
            <i class="bi bi-arrow-left-circle"></i> Kembali
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-header bg-success text-white fw-bold">
            <i class="bi bi-person-plus"></i> Tambah Data Warga
        </div>

        <div class="card-body">

            <form action="{{ route('warga.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">No KTP</label>
                    <input type="text" name="no_ktp" class="form-control"
                           value="{{ old('no_ktp') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control"
                           value="{{ old('nama') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Gender</label>
                    <select name="gender" class="form-select" required>
                        <option value="">-- Pilih --</option>
                        <option value="Laki-laki"
                            {{ old('gender')=='Laki-laki'?'selected':'' }}>
                            Laki-laki
                        </option>
                        <option value="Perempuan"
                            {{ old('gender')=='Perempuan'?'selected':'' }}>
                            Perempuan
                        </option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Pekerjaan</label>
                    <input type="text" name="pekerjaan" class="form-control"
                           value="{{ old('pekerjaan') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Agama</label>
                    <select name="agama" class="form-select" required>
                        <option value="">-- Pilih --</option>
                        <option {{ old('agama')=='Islam'?'selected':'' }}>Islam</option>
                        <option {{ old('agama')=='Kristen'?'selected':'' }}>Kristen</option>
                        <option {{ old('agama')=='Katolik'?'selected':'' }}>Katolik</option>
                        <option {{ old('agama')=='Hindu'?'selected':'' }}>Hindu</option>
                        <option {{ old('agama')=='Buddha'?'selected':'' }}>Buddha</option>
                        <option {{ old('agama')=='Konghucu'?'selected':'' }}>Konghucu</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nomor HP</label>
                    <input type="text" name="phone" class="form-control"
                           value="{{ old('phone') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control"
                           value="{{ old('email') }}" required>
                </div>

                <button class="btn btn-success w-100 fw-bold">
                    <i class="bi bi-save"></i> Simpan Data
                </button>

            </form>

        </div>
    </div>
</div>

@endsection
