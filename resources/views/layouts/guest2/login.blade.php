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
            background: linear-gradient(135deg, #0d1b2a, #415a77, #e0e1dd);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Poppins', sans-serif;
        }

        .login-card {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0px 8px 30px rgba(13, 27, 42, 0.25);
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            animation: fadeIn 0.6s ease-in-out;
            border: 2px solid #e0e1dd;
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

        h3 {
            font-weight: 700;
            text-align: center;
            margin-bottom: 1.5rem;
            color: #0d1b2a;
        }

        .form-control {
            border-radius: 10px;
            border: 1px solid #cfd4da;
        }

        .form-control:focus {
            box-shadow: 0 0 8px rgba(65, 90, 119, 0.5);
            border-color: #415a77;
        }

        .btn-primary {
            background: linear-gradient(90deg, #0d1b2a, #415a77);
            border: none;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(90deg, #1b263b, #778da9);
            transform: translateY(-2px);
        }

        .error-box {
            background-color: #e0e1dd;
            color: #0d1b2a;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 15px;
            border: 1px solid #778da9;
        }

        p.footer {
            text-align: center;
            color: #415a77;
            font-size: 0.9rem;
            margin-top: 1rem;
        }

        p.footer b {
            color: #0d1b2a;
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
