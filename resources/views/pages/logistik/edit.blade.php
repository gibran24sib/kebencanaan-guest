@extends('layouts.guest.app')

@section('title', 'Edit Logistik Bencana')

@section('content')
<div class="container">
    <div class="container-box col-lg-8">

        <div class="header-bar bg-dark text-white p-3">
            <h4 class="mb-0">
                <i class="fa fa-pen"></i> Edit Logistik Bencana
            </h4>
        </div>

        <div class="p-4">
            <form action="{{ route('logistik-bencana.update', $logistik->logistik_id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label fw-bold">Kejadian Bencana</label>
                    <select name="kejadian_id" class="form-control">
                        @foreach ($kejadian as $item)
                            <option value="{{ $item->kejadian_id }}"
                                {{ $logistik->kejadian_id == $item->kejadian_id ? 'selected' : '' }}>
                                {{ $item->jenis_bencana }} - {{ $item->tanggal }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control"
                        value="{{ old('nama_barang', $logistik->nama_barang) }}">
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Satuan</label>
                        <input type="text" name="satuan" class="form-control"
                            value="{{ old('satuan', $logistik->satuan) }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Stok</label>
                        <input type="number" name="stok" class="form-control"
                            value="{{ old('stok', $logistik->stok) }}">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Sumber</label>
                    <input type="text" name="sumber" class="form-control"
                        value="{{ old('sumber', $logistik->sumber) }}">
                </div>

                <div class="text-end">
                    <a href="{{ route('logistik.index') }}" class="btn btn-back">
                        <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-add">
                        <i class="fa fa-save"></i> Update
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
