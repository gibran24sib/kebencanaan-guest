<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Login')</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    {{-- Custom CSS --}}
    <style>
        body {
            background: linear-gradient(135deg, #ffb6c1, #f4a8ce, #ffc0cb);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
        }

        .login-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0px 8px 30px rgba(255, 105, 180, 0.3);
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            animation: fadeIn 0.6s ease-in-out;
            border: 2px solid #ffe6f0;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h3 {
            font-weight: 700;
            text-align: center;
            margin-bottom: 1.5rem;
            color: #ff4da6;
        }

        .form-control {
            border-radius: 10px;
            border: 1px solid #ffcce0;
        }

        .form-control:focus {
            box-shadow: 0 0 8px rgba(255, 105, 180, 0.5);
            border-color: #ff66b2;
        }

        .btn-primary {
            background: linear-gradient(90deg, #ff66b2, #ff99cc);
            border: none;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(90deg, #ff80bf, #ffb6c1);
            transform: translateY(-2px);
        }

        .error-box {
            background-color: #ffe6eb;
            color: #b30059;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 15px;
            border: 1px solid #ff99cc;
        }

        p.footer {
            text-align: center;
            color: #b30059;
            font-size: 0.9rem;
            margin-top: 1rem;
        }

        p.footer b {
            color: #ff4da6;
        }
    </style>
</head>

<body>
    <div class="login-card">
        {{-- Konten Halaman --}}
        @yield('content')

        {{-- Footer --}}
        <p class="footer">
            © {{ date('Y') }} <b>Sistem Login Lucu</b> — by Kamu <i class="bi bi-heart-fill text-danger"></i>
        </p>
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
