@extends('layouts.guest.app')

@section('title', 'Tambah Logistik Bencana')

@section('content')
<div class="container">
    <div class="container-box col-lg-8">

        <div class="header-bar bg-dark text-white p-3">
            <h4 class="mb-0">
                <i class="fa fa-box"></i> Tambah Logistik Bencana
            </h4>
        </div>

        <div class="p-4">
            <form action="{{ route('logistik-bencana.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-bold">Kejadian Bencana</label>
                    <select name="kejadian_id" class="form-control" required>
                        <option value="">-- Pilih Kejadian --</option>
                        @foreach ($kejadian as $item)
                            <option value="{{ $item->kejadian_id }}">
                                {{ $item->jenis_bencana }} - {{ $item->tanggal }}
                            </option>
                        @endforeach
                    </select>
                    @error('kejadian_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" value="{{ old('nama_barang') }}">
                    @error('nama_barang')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Satuan</label>
                        <input type="text" name="satuan" class="form-control" value="{{ old('satuan') }}">
                        @error('satuan')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Stok</label>
                        <input type="number" name="stok" class="form-control" value="{{ old('stok', 0) }}">
                        @error('stok')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Sumber</label>
                    <input type="text" name="sumber" class="form-control" value="{{ old('sumber') }}">
                </div>

                <div class="text-end">
                    <a href="{{ route('logistik-bencana.index') }}" class="btn btn-back">
                        <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-add">
                        <i class="fa fa-save"></i> Simpan
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
