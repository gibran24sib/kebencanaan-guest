<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Dashboard Posko</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #a8e063, #56ab2f);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
        }

        .login-box {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 400px;
            padding: 2.5rem 2rem;
            animation: fadeIn 0.6s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h3 {
            text-align: center;
            color: #2e7d32;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .form-label {
            font-weight: 500;
            color: #388e3c;
        }

        .form-control {
            border-radius: 10px;
            border: 1px solid #c8e6c9;
        }

        .form-control:focus {
            border-color: #66bb6a;
            box-shadow: 0 0 8px rgba(102, 187, 106, 0.3);
        }

        .btn-success {
            background: linear-gradient(90deg, #43a047, #66bb6a);
            border: none;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-success:hover {
            background: linear-gradient(90deg, #388e3c, #81c784);
            transform: translateY(-2px);
        }

        .footer-text {
            text-align: center;
            color: #4e4e4e;
            font-size: 0.9rem;
            margin-top: 1.5rem;
        }
    </style>
</head>

<body>
    <div class="login-box">
        <div class="text-center mb-3">
            <h3><i class="bi bi-box-arrow-in-right"></i> Login</h3>
        </div>

        {{-- Pesan Error --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="m-0 ps-3">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Form Login --}}
        <form action="{{ url('/auth/login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label"><i class="bi bi-envelope-fill"></i> Email</label>
                <input type="email" class="form-control" id="email" name="email"
                       placeholder="Masukkan email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label"><i class="bi bi-lock-fill"></i> Password</label>
                <input type="password" class="form-control" id="password" name="password"
                       placeholder="Masukkan password" required>
            </div>

            <button type="submit" class="btn btn-success w-100 mt-2">
                <i class="bi bi-box-arrow-in-right"></i> Login
            </button>
        </form>

        <p class="footer-text mt-4">
            © {{ date('Y') }} <b>Dashboard Posko</b>. Semua hak dilindungi.
        </p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
