<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Warga - Dashboard Posko</title>

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

        .container {
            padding: 30px;
        }

        .btn {
            font-size: 16px;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .btn-success {
            background: linear-gradient(90deg, #43a047, #66bb6a);
            border: none;
        }

        .btn-warning {
            background: #f39c12;
            border: none;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            margin-bottom: 20px;
        }

        .card img {
            max-width: 100px;
            max-height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #27ae60;
        }

        .card-body {
            padding: 1.5rem;
        }

        .card-header {
            background: linear-gradient(90deg, #27ae60, #f39c12);
            color: white;
            font-weight: bold;
        }

        .card-footer {
            text-align: center;
            color: #4e4e4e;
        }

        .badge {
            font-size: 12px;
            margin: 0 5px;
        }

        .text-muted {
            color: #757575;
        }

        .tag-container {
            display: flex;
            flex-wrap: wrap;
            margin-top: 10px;
        }

        .tag-container .badge {
            margin: 5px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .col-md-4 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <a href="{{ route('dashboard.index') }}" class="btn btn-success fw-bold">
            <i class="bi bi-arrow-left-circle"></i> Kembali
        </a>
        <a href="{{ route('warga.create') }}" class="btn btn-warning text-white fw-bold">
            <i class="bi bi-plus-circle"></i> Tambah Data
        </a>
    </div>

    <div class="row g-4">
        @forelse ($warga as $item)
            <div class="col-md-4 col-lg-3">
                <div class="card border-0 shadow-sm text-center p-3 h-100">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode($item->nama) }}&background=27ae60&color=fff"
                         alt="{{ $item->nama }}" class="rounded-circle mx-auto mb-3"
                         width="100" height="100">
                    <h5 class="fw-semibold mb-0">{{ $item->nama }}</h5>
                    <p class="text-muted mb-1 small">{{ $item->pekerjaan }}</p>
                    <span class="badge bg-success">{{ $item->agama }}</span>

                    <!-- Tag Section -->
                    <div class="tag-container">
                        <span class="badge bg-info">{{ $item->gender }}</span>
                        <span class="badge bg-primary">{{ $item->phone }}</span>
                        <span class="badge bg-secondary">{{ $item->email }}</span>
                    </div>
                </div>
            </div>
        @empty
            <div class="text-center text-muted py-5">
                <i class="bi bi-info-circle"></i> Belum ada data warga.
            </div>
        @endforelse
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
