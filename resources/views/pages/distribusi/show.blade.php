@extends('layouts.guest.app')

@section('content')
<div class="container mt-4">
    <h4 class="mb-3">Detail Distribusi Logistik</h4>

    <table class="table table-bordered">
        <tr>
            <th>Tanggal</th>
            <td>{{ $data->tanggal }}</td>
        </tr>
        <tr>
            <th>Penerima</th>
            <td>{{ $data->penerima }}</td>
        </tr>
        <tr>
            <th>Jumlah</th>
            <td>{{ $data->jumlah }}</td>
        </tr>
        <tr>
            <th>Bukti Distribusi</th>
            <td>
                @if ($data->bukti_distribusi)
                    <a href="{{ asset('storage/'.$data->bukti_distribusi) }}" target="_blank">
                        Lihat File
                    </a>
                @else
                    -
                @endif
            </td>
        </tr>
    </table>

    <a href="{{ route('distribusi.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
