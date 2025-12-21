@extends('layouts.guest.app')

@section('content')

@php
    use Illuminate\Support\Str;
@endphp

<div class="container py-4">

    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Detail Donasi</h4>
        </div>

        <div class="card-body">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="mb-3">
                <p class="mb-1"><b>Donatur:</b> {{ $donasi->donatur_name }}</p>
                <p class="mb-1"><b>Jenis Donasi:</b> {{ $donasi->jenis }}</p>
                <p class="mb-1">
                    <b>Nilai Donasi:</b>
                    <span class="text-success">Rp {{ number_format($donasi->nilai) }}</span>
                </p>
            </div>

            <hr>

            <h5 class="mb-3">Bukti Donasi</h5>

            <div class="row">
                @foreach($media as $m)
                    <div class="col-md-3 col-sm-6 mb-4">

                        <div class="card border rounded shadow-sm p-2 text-center">

                            {{-- Jika file adalah gambar --}}
                            @if(Str::contains($m->mime_type, 'image'))
                                <img src="{{ asset('storage/donasi/'.$m->file_name) }}"
                                     class="img-fluid rounded mb-2"
                                     style="max-height: 180px; object-fit: cover;">

                            {{-- Jika file PDF atau DOCX --}}
                            @else
                                <div class="py-3">
                                    <i class="bi bi-file-earmark-text" style="font-size:40px;"></i>
                                </div>

                                <a href="{{ asset('storage/donasi/'.$m->file_name) }}"
                                   target="_blank"
                                   class="btn btn-outline-primary btn-sm">
                                   Lihat Dokumen ({{ strtoupper($m->mime_type) }})
                                </a>
                            @endif

                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

</div>
@endsection
