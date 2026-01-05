@extends('layouts.guest.app')

@section('content')
<div class="container mt-4">
    <h4 class="mb-3">Edit Distribusi Logistik</h4>

    <form action="{{ route('distribusi.update', $data->distribusi_id) }}"
          method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Logistik ID</label>
            <input type="number" name="logistik_id" class="form-control"
                   value="{{ $data->logistik_id }}" required>
        </div>

        <div class="mb-3">
            <label>Posko ID</label>
            <input type="number" name="posko_id" class="form-control"
                   value="{{ $data->posko_id }}" required>
        </div>

        <div class="mb-3">
            <label>Tanggal Distribusi</label>
            <input type="date" name="tanggal" class="form-control"
                   value="{{ $data->tanggal }}" required>
        </div>

        <div class="mb-3">
            <label>Jumlah</label>
            <input type="number" name="jumlah" class="form-control"
                   value="{{ $data->jumlah }}" required>
        </div>

        <div class="mb-3">
            <label>Penerima</label>
            <input type="text" name="penerima" class="form-control"
                   value="{{ $data->penerima }}" required>
        </div>

        <div class="mb-3">
            <label>Bukti Distribusi</label>
            <input type="file" name="bukti_distribusi" class="form-control">
            @if ($data->bukti_distribusi)
                <small>
                    File saat ini:
                    <a href="{{ asset('storage/'.$data->bukti_distribusi) }}" target="_blank">
                        Lihat
                    </a>
                </small>
            @endif
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('distribusi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
