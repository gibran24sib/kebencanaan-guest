<!DOCTYPE html>
<html>

<head>
    <title>Data Posko Bencana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* 🌿 Background utama dengan gradasi hijau-oranye lembut */
        body {
            background: linear-gradient(135deg, #a5d6a7 0%, #fff8e1 100%);
            background-attachment: fixed;
            background-size: cover;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #2e7d32;
        }

        /* Card putih di tengah */
        .container {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(6px);
            padding: 30px 40px;
            border-radius: 16px;
            box-shadow: 0 8px 25px rgba(76, 175, 80, 0.2);
            margin-top: 60px;
            margin-bottom: 60px;
        }

        h2 {
            color: #1b5e20;
            font-weight: 700;
            margin-bottom: 25px;
            text-align: center;
            text-shadow: 1px 1px 2px #c8e6c9;
        }

        /* Tombol umum */
        .btn {
            transition: all 0.3s ease-in-out;
            border-radius: 8px;
            font-weight: 500;
            box-shadow: 0 2px 4px rgba(46, 125, 50, 0.2);
        }

        .btn-primary {
            background-color: #43a047;
            border-color: #388e3c;
        }

        .btn-primary:hover {
            background-color: #2e7d32;
            border-color: #1b5e20;
            transform: scale(1.05);
        }

        .btn-warning {
            background-color: #ffa726;
            border-color: #fb8c00;
            color: #fff;
        }

        .btn-warning:hover {
            background-color: #fb8c00;
            border-color: #ef6c00;
            color: #fff;
            transform: scale(1.05);
        }

        .btn-danger {
            background-color: #e64a19;
            border-color: #d84315;
        }

        .btn-danger:hover {
            background-color: #d84315;
            border-color: #bf360c;
            transform: scale(1.05);
        }

        /* Tabel */
        table {
            background-color: #ffffff;
            border: 1px solid #c8e6c9;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 3px 6px rgba(60, 179, 113, 0.15);
        }

        thead {
            background: linear-gradient(90deg, #43a047, #66bb6a);
            color: white;
            text-align: center;
            font-weight: 600;
        }

        tbody tr:nth-child(even) {
            background-color: #f1f8e9;
        }

        tbody tr:hover {
            background-color: #fffde7;
            transition: background-color 0.3s ease;
        }

        tbody td {
            vertical-align: middle;
        }

        img {
            border-radius: 8px;
            border: 2px solid #c8e6c9;
            transition: transform 0.2s ease;
        }

        img:hover {
            transform: scale(1.1);
        }

        /* Alert sukses */
        .alert-success {
            background-color: #dcedc8;
            border-color: #c5e1a5;
            color: #33691e;
            font-weight: 500;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(76, 175, 80, 0.2);
        }
    </style>
</head>

<body>

    <div class="container mt-4">
        <h2>Data Posko Bencana</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('dashboard.index') }}" class="btn btn-primary mb-3">⬅️ Kembali</a>
        <a href="{{ route('posko.create') }}" class="btn btn-primary mb-3">➕ Tambah Posko</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kontak</th>
                    <th>Penanggung Jawab</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posko as $p)
                    <tr>
                        <td>{{ $p->posko_id }}</td>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->alamat }}</td>
                        <td>{{ $p->kontak }}</td>
                        <td>{{ $p->penanggung_jawab }}</td>
                        <td>
                            @if ($p->foto)
                                <img src="{{ asset('storage/' . $p->foto) }}" width="80">
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
