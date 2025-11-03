<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Sistem Posko Bencana</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to bottom right, #6dd34d, #f6a31b);
            min-height: 100vh;
        }
        .navbar {
            background: linear-gradient(90deg, #43a047, #fb8c00);
        }
        .navbar-brand, .nav-link {
            color: white !important;
            font-weight: 600;
        }
        .footer {
            background: #2e7d32;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 40px;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    {{-- Header --}}
    @include('layouts.guest2.header')

    {{-- Konten utama --}}
    <main class="container my-4">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.guest2.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
