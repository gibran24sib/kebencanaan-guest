@extends('layouts.guest.app')

@section('content')
<div class="container">

    <div class="d-flex justify-content-between mb-3">
        <h3>Data Donasi</h3>
        <a href="{{ route('donasi.create') }}" class="btn btn-primary">+ Tambah Donasi</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Donatur</th>
                <th>Jenis</th>
                <th>Nilai Donasi</th>
                <th>Kejadian</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($donasi as $d)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $d->donatur_name }}</td>
                    <td>{{ $d->jenis }}</td>
                    <td>Rp {{ number_format($d->nilai) }}</td>
                    <td>
                        {{ $d->kejadian->jenis_bencana ?? 'Tidak ada data' }}
                        ({{ $d->kejadian->lokasi_text ?? '-' }})
                    </td>
                    <td>
                        <a href="{{ route('donasi.detail', $d->donasi_id) }}" class="btn btn-sm btn-info">
                            Detail
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Belum ada donasi</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>
@endsection
