<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Warga</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Custom Style --}}
    <style>
        body {
            background: linear-gradient(135deg, #ffb347, #ffcc33, #a8e063);
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
        }

        .card {
            border: none;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.15);
            animation: fadeIn 0.6s ease-in-out;
        }

        .card-header {
            background: linear-gradient(90deg, #f39c12, #27ae60);
            color: #fff;
            text-align: center;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .form-control, .form-select {
            border-radius: 10px;
            border: 1.5px solid #ccc;
            transition: all 0.3s;
        }

        .form-control:focus, .form-select:focus {
            border-color: #27ae60;
            box-shadow: 0 0 6px rgba(39, 174, 96, 0.5);
        }

        label {
            font-weight: 500;
            color: #444;
        }

        .btn-success {
            background-color: #27ae60;
            border: none;
            border-radius: 10px;
            transition: all 0.3s;
        }

        .btn-success:hover {
            background-color: #2ecc71;
            transform: scale(1.05);
        }

        .btn-secondary {
            border-radius: 10px;
        }

        .alert {
            border-radius: 10px;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="col-lg-6 col-md-8 col-sm-10 mx-auto">
        <div class="card">
            <div class="card-header py-3">
                <h4 class="mb-0">🧾 Form Tambah Data Warga</h4>
            </div>
            <div class="card-body bg-white p-4">

                {{-- Alert Error --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>⚠ Terjadi Kesalahan:</strong>
                        <ul class="mt-2 mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- Alert Success --}}
                @if (session('success'))
                    <div class="alert alert-success">
                        ✅ {{ session('success') }}
                    </div>
                @endif

                {{-- Form Input --}}
                <form action="{{ route('warga.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="no_ktp" class="form-label">Nomor KTP</label>
                        <input type="text" name="no_ktp" id="no_ktp" class="form-control" placeholder="Masukkan Nomor KTP" required>
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Lengkap" required>
                    </div>

                    <div class="mb-3">
                        <label for="gender" class="form-label">Jenis Kelamin</label>
                        <select name="gender" id="gender" class="form-select" required>
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="agama" class="form-label">Agama</label>
                        <select name="agama" id="agama" class="form-select" required>
                            <option value="">-- Pilih Agama --</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                        <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" placeholder="Masukkan Pekerjaan" required>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Nomor Telepon</label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Masukkan Nomor Telepon Aktif" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Alamat Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="contoh: warga@gmail.com" required>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-success px-4 me-2">💾 Simpan</button>
                        <a href="{{ route('warga.index') }}" class="btn btn-secondary px-4">↩ Kembali</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

{{-- Bootstrap JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
