@extends('layouts.guest2.app')

@section('title', 'Tambah Data Pelanggan')

@section('content')
    <div class="container mt-4">
        <a href="{{ route('pelanggan.index') }}" class="btn btn-success mb-3">
            <i class="bi bi-arrow-left-circle"></i> Kembali
        </a>

        <div class="bg-light rounded shadow-sm p-4">
            <h2 class="text-center text-success fw-bold mb-4">
                <i class="bi bi-person-plus-fill"></i> Tambah Data Pelanggan
            </h2>

            @if(session('success'))
                <div class="alert alert-success">
                    <i class="bi bi-check-circle"></i> {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <i class="bi bi-exclamation-triangle"></i> Terjadi kesalahan!
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('pelanggan.store') }}">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="fw-semibold text-success">
                            <i class="bi bi-person-fill"></i> Nama Depan
                        </label>
                        <input type="text" name="first_name" class="form-control border-success-subtle"
                               value="{{ old('first_name') }}" required>
                        @error('first_name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="fw-semibold text-success">
                            <i class="bi bi-person-fill"></i> Nama Belakang
                        </label>
                        <input type="text" name="last_name" class="form-control border-success-subtle"
                               value="{{ old('last_name') }}">
                        @error('last_name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label class="fw-semibold text-success">
                        <i class="bi bi-calendar3"></i> Tanggal Lahir
                    </label>
                    <input type="date" name="birthday" class="form-control border-success-subtle"
                           value="{{ old('birthday') }}">
                    @error('birthday') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="fw-semibold text-success">
                        <i class="bi bi-gender-ambiguous"></i> Jenis Kelamin
                    </label>
                    <select name="gender" class="form-select border-success-subtle">
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Perempuan</option>
                        <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Lainnya</option>
                    </select>
                    @error('gender') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="fw-semibold text-success">
                        <i class="bi bi-envelope-fill"></i> Email
                    </label>
                    <input type="email" name="email" class="form-control border-success-subtle"
                           value="{{ old('email') }}">
                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-4">
                    <label class="fw-semibold text-success">
                        <i class="bi bi-telephone-fill"></i> No. Telepon
                    </label>
                    <input type="text" name="phone" class="form-control border-success-subtle"
                           value="{{ old('phone') }}">
                    @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-save2-fill"></i> Simpan
                    </button>
                    <a href="{{ route('pelanggan.index') }}" class="btn btn-warning text-white">
                        <i class="bi bi-x-circle"></i> Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
