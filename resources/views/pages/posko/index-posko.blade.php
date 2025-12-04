@extends('layouts.guest2.app')

@section('title', 'Data Posko Bencana')

@section('content')
    <a href="{{ route('dashboard.index') }}" class="btn btn-success">
        <i class="bi bi-arrow-left-circle"></i> Kembali
    </a>
    <a href="{{ route('posko.create') }}" class="btn btn-warning float-end">
        <i class="bi bi-plus-circle"></i> Tambah Posko
    </a>

    <div class="container-box mt-4 bg-light rounded shadow-sm p-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="fw-bold text-success">
                <i class="bi bi-building"></i> Data Posko Bencana
            </h4>
        </div>

        <!-- SEARCH & FILTER -->
        <form method="GET" action="{{ route('posko.index') }}" class="row mb-4">

            <div class="col-md-4">
                <input type="text" name="search" class="form-control"
                       placeholder="Cari nama posko / alamat / kontak / PJ..."
                       value="{{ request('search') }}">
            </div>

            <div class="col-md-4">
                <select name="kejadian_id" class="form-control">
                    <option value="">-- Semua Kejadian --</option>
                    @foreach($kejadian as $k)
                        <option value="{{ $k->kejadian_id }}"
                            {{ request('kejadian_id') == $k->kejadian_id ? 'selected' : '' }}>
                            {{ $k->nama_kejadian }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-2">
                <button class="btn btn-primary w-100">
                    <i class="bi bi-search"></i> Cari
                </button>
            </div>

            <div class="col-md-2">
                <a href="{{ route('posko.index') }}" class="btn btn-danger w-100">
                    <i class="bi bi-x-circle"></i> Reset
                </a>
            </div>
        </form>

        <div class="row">
            @foreach ($posko as $p)
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body text-center">
                            <div class="rounded-circle bg-success text-white fw-bold d-flex align-items-center justify-content-center mx-auto mb-2"
                                 style="width:70px; height:70px;">
                                {{ strtoupper(substr($p->nama, 0, 2)) }}
                            </div>
                            <h5 class="fw-bold">{{ $p->nama }}</h5>
                            <p class="text-muted mb-1">
                                <i class="bi bi-geo-alt-fill text-success"></i> Alamat: {{ $p->alamat }}
                            </p>
                            <p class="text-muted mb-1">
                                <i class="bi bi-telephone-fill text-primary"></i> Kontak: {{ $p->kontak }}
                            </p>
                            <p class="text-muted mb-2">
                                <i class="bi bi-person-fill text-warning"></i>
                                Penanggung Jawab: <strong>{{ $p->penanggung_jawab }}</strong>
                            </p>
                            @if ($p->foto)
                                <img src="{{ asset('storage/' . $p->foto) }}" class="img-fluid rounded" alt="Foto Posko">
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- PAGINATION -->
        <div class="d-flex justify-content-center mt-3">
            {{ $posko->links() }}
        </div>

    </div>
@endsection
