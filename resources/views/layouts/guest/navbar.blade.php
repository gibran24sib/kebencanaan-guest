<!-- Navbar Start -->
<div class="container-fluid bg-secondary px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="nav-bar">
        <nav class="navbar navbar-expand-lg bg-primary navbar-dark px-4 py-lg-0">
            <h4 class="d-lg-none m-0">Menu</h4>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav me-auto">
                    <a href="dashboard" class="nav-item nav-link active">Home</a>
                    <a href="warga" class="nav-item nav-link">Warga</a>
                    <a href="posko" class="nav-item nav-link">Posko</a>
                    <a href="user" class="nav-item nav-link">User</a>
                </div>
                <div class="d-none d-lg-flex ms-auto">
                    @if (session('success'))
                        <div class="alert alert-success mt-3">{{ session('success') }}</div>
                    @endif

                    <p class="mt-3">Anda berhasil login!</p>
                    <a class="btn btn-square btn-dark ms-2" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-dark ms-2" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-dark ms-2" href=""><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
