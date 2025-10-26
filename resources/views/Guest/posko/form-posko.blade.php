<!DOCTYPE html>
<html>
<head>
    <title>Form Posko Bencana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* 🌿 Background lembut hijau-oranye */
        body {
            background: linear-gradient(135deg, #a5d6a7 0%, #fff8e1 100%);
            background-attachment: fixed;
            background-size: cover;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #2e7d32;
        }

        /* Card utama form */
        form {
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 8px 25px rgba(76, 175, 80, 0.2);
            backdrop-filter: blur(6px);
            margin-top: 40px;
            margin-bottom: 60px;
            border: 1px solid #c8e6c9;
        }

        h2 {
            color: #1b5e20;
            font-weight: 700;
            margin-bottom: 25px;
            text-align: center;
            text-shadow: 1px 1px 2px #c8e6c9;
        }

        label {
            font-weight: 600;
            color: #2e7d32;
        }

        input.form-control,
        textarea.form-control {
            border: 1px solid #a5d6a7;
            border-radius: 8px;
            transition: all 0.3s ease;
            background-color: #f9fff8;
        }

        input.form-control:focus,
        textarea.form-control:focus {
            border-color: #43a047;
            box-shadow: 0 0 6px rgba(67, 160, 71, 0.4);
            background-color: #ffffff;
        }

        /* Tombol utama (hijau) */
        .btn-success {
            background-color: #43a047;
            border-color: #388e3c;
            transition: all 0.3s ease-in-out;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(67, 160, 71, 0.3);
        }

        .btn-success:hover {
            background-color: #2e7d32;
            border-color: #1b5e20;
            transform: scale(1.05);
        }

        /* Tombol kembali (oranye) */
        .btn-secondary {
            background-color: #ffa726;
            border-color: #fb8c00;
            color: #fff;
            transition: all 0.3s ease-in-out;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(255, 152, 0, 0.3);
        }

        .btn-secondary:hover {
            background-color: #fb8c00;
            border-color: #ef6c00;
            color: #fff;
            transform: scale(1.05);
        }

        img {
            border-radius: 8px;
            border: 2px solid #c8e6c9;
            margin-top: 5px;
            transition: transform 0.2s ease;
        }

        img:hover {
            transform: scale(1.1);
        }

        small.text-danger {
            font-size: 0.9em;
        }

        /* Container keseluruhan */
        .container {
            background: transparent;
        }
    </style>
</head>
<body class="container mt-4">

<h2>{{ isset($posko) ? 'Edit Data Posko' : 'Tambah Data Posko' }}</h2>

<form method="POST" enctype="multipart/form-data"
      action="{{ isset($posko) ? route('posko.update', $posko->posko_id) : route('posko.store') }}">
    @csrf

    <div class="mb-3">
        <label>Kejadian ID</label>
        <input type="number" name="kejadian_id" class="form-control" value="{{ old('kejadian_id', $posko->kejadian_id ?? '') }}">
        @error('kejadian_id') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3">
        <label>Nama Posko</label>
        <input type="text" name="nama" class="form-control" value="{{ old('nama', $posko->nama ?? '') }}">
        @error('nama') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control">{{ old('alamat', $posko->alamat ?? '') }}</textarea>
        @error('alamat') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3">
        <label>Kontak</label>
        <input type="text" name="kontak" class="form-control" value="{{ old('kontak', $posko->kontak ?? '') }}">
        @error('kontak') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3">
        <label>Penanggung Jawab</label>
        <input type="text" name="penanggung_jawab" class="form-control" value="{{ old('penanggung_jawab', $posko->penanggung_jawab ?? '') }}">
        @error('penanggung_jawab') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mb-3">
        <label>Foto Posko</label>
        <input type="file" name="foto" class="form-control">
        @if(isset($posko) && $posko->foto)
            <img src="{{ asset('storage/'.$posko->foto) }}" width="100" class="mt-2">
        @endif
        @error('foto') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="{{ route('posko.index') }}" class="btn btn-secondary">Kembali</a>

</form>

</body>
</html>
