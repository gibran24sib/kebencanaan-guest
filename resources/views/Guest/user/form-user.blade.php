<!DOCTYPE html>
<html>
<head>
    <title>Form User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to bottom right, #f1f8e9, #fffde7);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        h2 {
            color: #1b5e20;
            font-weight: bold;
            margin-bottom: 25px;
            text-align: center;
        }

        label {
            font-weight: 600;
            color: #2e7d32;
        }

        input.form-control {
            border: 1px solid #a5d6a7;
            border-radius: 6px;
            transition: 0.3s;
        }

        input.form-control:focus {
            border-color: #388e3c;
            box-shadow: 0 0 6px #a5d6a7;
        }

        .btn-success {
            background-color: #2e7d32;
            border-color: #2e7d32;
        }

        .btn-success:hover {
            background-color: #1b5e20;
            border-color: #1b5e20;
        }

        .btn-secondary {
            background-color: #ffb300;
            border-color: #ffb300;
            color: #fff;
        }

        .btn-secondary:hover {
            background-color: #ffa000;
            border-color: #ffa000;
            color: #fff;
        }

        small.text-danger {
            font-size: 0.9em;
        }

        form {
            background: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 3px 8px rgba(0,0,0,0.1);
            max-width: 500px;
            margin: 40px auto;
        }
    </style>
</head>
<body>

    <h2>{{ isset($user) ? 'Edit Data User' : 'Tambah User Baru' }}</h2>

    <form method="POST" action="{{ isset($user) ? route('user.update', $user->id) : route('user.store') }}">
        @csrf
        @if(isset($user))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label>Nama Lengkap</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $user->name ?? '') }}" required>
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $user->email ?? '') }}" required>
            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" {{ isset($user) ? '' : 'required' }}>
            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label>Verifikasi Password</label>
            <input type="password" name="password_confirmation" class="form-control" {{ isset($user) ? '' : 'required' }}>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
    </form>

</body>
</html>
