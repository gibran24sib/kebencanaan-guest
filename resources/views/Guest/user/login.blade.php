<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom right, #e8f5e9, #c8e6c9);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            height: 100vh;
        }

        .login-container {
            max-width: 400px;
            margin: 60px auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        h2 {
            color: #2e7d32;
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }

        label {
            color: #388e3c;
            font-weight: 600;
        }

        input.form-control {
            border: 1px solid #a5d6a7;
            transition: 0.3s;
        }

        input.form-control:focus {
            border-color: #2e7d32;
            box-shadow: 0 0 6px #a5d6a7;
        }

        .btn-success {
            background-color: #2e7d32;
            border-color: #2e7d32;
            width: 100%;
        }

        .btn-success:hover {
            background-color: #1b5e20;
        }

        .alert {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('login.store') }}">
        @csrf

        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="email"
                   class="form-control" placeholder="Masukkan email"
                   value="{{ old('email') }}" required>
            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" name="password" id="password"
                   class="form-control" placeholder="Masukkan password" required>
            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button type="submit" class="btn btn-success">Login</button>
    </form>
</div>

</body>
</html>
