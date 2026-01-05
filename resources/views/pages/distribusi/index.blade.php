@extends('layouts.guest.app')

@section('content')
<div class="container mt-4">
    <h4 class="mb-3">Data Distribusi Logistik</h4>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('distribusi.create') }}" class="btn btn-primary mb-3">
        + Tambah Distribusi
    </a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Penerima</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>{{ $item->penerima }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>
                        <a href="{{ route('distribusi.show', $item->distribusi_id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('distribusi.edit', $item->distribusi_id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('distribusi.destroy', $item->distribusi_id) }}"
                              method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus data ini?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Data belum tersedia</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
