@extends('layouts.guest.app')

@section('title', 'Data Logistik Bencana')

@section('content')
<div class="container container-box">

    {{-- Header --}}
    <div class="p-4 bg-primary text-white header-bar">
        <h4 class="mb-0">
            <i class="fa fa-boxes-stacked"></i>
            Data Logistik Bencana
        </h4>
    </div>

    {{-- Body --}}
    <div class="p-4">

        @if($logistik->count())
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Satuan</th>
                            <th>Stok</th>
                            <th>Sumber</th>
                            <th>Kejadian</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($logistik as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_barang }}</td>
                                <td>
                                    <span class="badge">
                                        {{ $item->satuan }}
                                    </span>
                                </td>
                                <td>{{ $item->stok }}</td>
                                <td>{{ $item->sumber ?? '-' }}</td>
                                <td>
                                    {{ $item->kejadianBencana->jenis_bencana ?? '-' }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="alert alert-warning text-center">
                Data logistik belum tersedia.
            </div>
        @endif

        {{-- Tombol --}}
        <div class="text-end">
            <a href="{{ url('dashboard') }}" class="btn btn-back">
                <i class="fa fa-arrow-left"></i> Kembali
            </a>
        </div>

    </div>
</div>
@endsection
