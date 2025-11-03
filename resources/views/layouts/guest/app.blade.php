<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Charitize - Charity Organization Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Charitize - Charity Organization Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

<!-- CSS Start -->
@include('layouts.guest.css')
<!-- CSS End -->

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

<!-- Topbar Start -->
@include('layouts.guest.topbar')
<!-- Topbar End -->

<!-- Navbar Start -->
@include('layouts.guest.navbar')
<!-- Navbar End -->

@yield('content')

<!-- Footer Start -->
@include('layouts.guest.footer')
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top">
    <i class="bi bi-arrow-up"></i>
</a>

<!-- Floating WhatsApp Button -->
<a href="https://wa.me/6281234567890?text=Halo%20Admin,%20saya%20ingin%20bertanya."
   class="floating-whatsapp"
   target="_blank"
   title="Hubungi via WhatsApp">
    <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp" class="whatsapp-icon">
</a>



<!-- JavaScript Libraries -->
@include('layouts.guest.js')
```

</body>
</html>
