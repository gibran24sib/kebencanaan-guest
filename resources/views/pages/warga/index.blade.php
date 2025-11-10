@extends('layouts.guest.app')

@section('title', 'Data Warga')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="{{ route('dashboard.index') }}" class="btn btn-success fw-bold">
            <i class="bi bi-arrow-left-circle"></i> Kembali
        </a>
        <a href="{{ route('warga.create') }}" class="btn btn-warning text-white fw-bold">
            <i class="bi bi-plus-circle"></i> Tambah Data
        </a>
    </div>

    <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
        <div class="card-header text-white fw-semibold"
             style="background: linear-gradient(90deg, #27ae60, #f39c12);">
            <i class="bi bi-people-fill me-2"></i> Data Warga
        </div>

        <div class="card-body bg-light">
            {{-- Flash Message --}}
            @if (session('success'))
                <div class="alert alert-success rounded-3">
                    <i class="bi bi-check-circle me-2"></i> {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger rounded-3">
                    <i class="bi bi-x-circle me-2"></i> {{ session('error') }}
                </div>
            @endif

            {{-- List Card Warga --}}
            <div class="row g-4">
                @forelse ($warga as $item)
                    <div class="col-md-4 col-lg-3">
                        <div class="card border-0 shadow-sm text-center p-3 h-100"
                             style="border-radius: 15px; transition: all 0.3s ease;">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($item->nama) }}&background=27ae60&color=fff"
                                 alt="{{ $item->nama }}" class="rounded-circle mx-auto mb-3"
                                 width="70" height="70" style="border: 3px solid #27ae60; object-fit: cover;">
                            <h5 class="fw-semibold mb-0">{{ $item->nama }}</h5>
                            <p class="text-muted mb-1 small">{{ $item->pekerjaan }}</p>
                            <span class="badge bg-success">{{ $item->agama }}</span>
                            <div class="mt-3 small text-secondary">
                                <p class="mb-1"><i class="bi bi-gender-ambiguous me-1"></i>{{ $item->gender }}</p>
                                <p class="mb-1"><i class="bi bi-telephone me-1"></i>{{ $item->phone }}</p>
                                <p class="mb-1"><i class="bi bi-envelope me-1"></i>{{ $item->email }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center text-muted py-5">
                        <i class="bi bi-info-circle"></i> Belum ada data warga.
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
