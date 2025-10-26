<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to bottom right, #f1f8e9, #fffde7);
        }
        h2 {
            text-align: center;
            color: #2e7d32;
            margin-top: 25px;
            font-weight: bold;
        }
        table th {
            background-color: #388e3c;
            color: white;
        }
        .btn-success { background-color: #2e7d32; border-color: #2e7d32; }
        .btn-warning { background-color: #ffb300; border-color: #ffb300; color: #fff; }
        .btn-danger { background-color: #d32f2f; border-color: #d32f2f; }
        .btn-success:hover { background-color: #1b5e20; }
    </style>
</head>
<body>

<div class="container mt-4">
    <h2>Data User</h2>
    <a href="{{ route('dashboard.index') }}" class="btn btn-success mb-3">← Kembali </a>
    <a href="{{ route('user.create') }}" class="btn btn-success mb-3">+ Tambah User</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                </tr>
            @empty
                <tr><td colspan="4" class="text-center">Belum ada data user</td></tr>
            @endforelse
        </tbody>
    </table>
</div>

</body>
</html>
