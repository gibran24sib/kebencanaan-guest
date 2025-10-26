<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Warga</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Custom CSS --}}
    <style>
        body {
            background: linear-gradient(135deg, #ffb347, #ffcc33, #a8e063);
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
        }

        .card {
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            animation: fadeIn 0.7s ease;
        }

        .card-header {
            background: linear-gradient(90deg, #27ae60, #f39c12);
            color: #fff;
            text-align: center;
            font-weight: 600;
        }

        .table {
            border-radius: 15px;
            overflow: hidden;
        }

        th {
            background-color: #27ae60;
            color: #fff;
            text-align: center;
        }

        td {
            vertical-align: middle !important;
        }

        tr:hover {
            background-color: #fff8e1 !important;
            transition: all 0.3s ease;
        }

        .btn {
            border-radius: 10px;
        }

        .btn-success {
            background-color: #27ae60;
            border: none;
        }

        .btn-warning {
            background-color: #f39c12;
            border: none;
            color: #fff;
        }

        .btn-danger {
            background-color: #e74c3c;
            border: none;
        }

        .alert {
            border-radius: 10px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

    <div class="container py-5">
        <a href="{{ route('dashboard.index') }}" class="btn btn-warning text-white fw-bold">
            ⬅️ Kembali
        </a>
        <div class="card shadow-lg border-0">
            <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                <h3 class="mb-0">📋 Data Warga</h3>
                <a href="{{ route('warga.create') }}" class="btn btn-warning text-white fw-bold">
                    ➕ Tambah Data
                </a>
            </div>

            <div class="card-body bg-light">

                {{-- Flash Message --}}
                @if (session('success'))
                    <div class="alert alert-success">
                        ✅ {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        ❌ {{ session('error') }}
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-bordered table-striped align-middle text-center">
                        <thead class="table-success">
                            <tr>
                                <th>No</th>
                                <th>No KTP</th>
                                <th>Nama</th>
                                <th>Gender</th>
                                <th>Agama</th>
                                <th>Pekerjaan</th>
                                <th>Telepon</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($warga as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->no_ktp }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->gender }}</td>
                                    <td>{{ $item->agama }}</td>
                                    <td>{{ $item->pekerjaan }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->email }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-muted text-center py-3">Belum ada data warga.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
