@extends('layouts.guest.app')

@section('content')
<div class="container">

    <h3>Tambah Donasi</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('donasi.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Pilih Kejadian</label>
        <select name="kejadian_id" class="form-control" required>
            <option value="">-- pilih kejadian --</option>
            @foreach($kejadian as $k)
                <option value="{{ $k->kejadian_id }}">
                    {{ $k->jenis_bencana }} - {{ $k->lokasi_text }}
                </option>
            @endforeach
        </select>
        <br>

        <label>Nama Donatur</label>
        <input type="text" name="donatur_name" class="form-control" required>

        <label>Jenis Donasi</label>
        <input type="text" name="jenis" class="form-control" required>

        <label>Nilai Donasi</label>
        <input type="number" name="nilai" class="form-control" required>

        <label>Upload Bukti (boleh banyak)</label>
        <input type="file" name="files[]" multiple class="form-control">

        <br>
        <button class="btn btn-primary">Simpan</button>
    </form>

</div>
@endsection
