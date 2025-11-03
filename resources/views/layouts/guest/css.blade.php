<!-- Favicon -->
<link href="{{ asset('assets-guest/img/favicon.ico') }}" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600;700&family=Open+Sans&display=swap"
    rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="{{ asset('assets-guest/lib/animate/animate.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets-guest/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="{{ asset('assets-guest/css/bootstrap.min.css') }}" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="{{ asset('assets-guest/css/style.css') }}" rel="stylesheet">
<style>
     /* 🌿 Latar belakang seperti Data Warga */
        body {
            background: linear-gradient(to bottom right, #6dd34d, #f6a31b);
            min-height: 100vh;
            margin: 0;
        }

        .container-box {
            background: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            padding: 0;
            margin: 40px auto;
            overflow: hidden;
        }

        /* .header-bar {
            background: linear-gradient(90deg, #43a047, #fb8c00);
            color: white;
            padding: 15px 25px;
            font-size: 1.5rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: space-between;
        } */

         .header-bar i {
            margin-right: 10px;
        }

        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 3px 8px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            background: white;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.15);
        }

        .circle {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: #43a047;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            font-size: 20px;
            margin: 0 auto 10px;
        }

        .btn-back {
            background: #43a047;
            color: white;
            font-weight: 600;
            border-radius: 8px;
            margin-top: 20px;
        }

        .btn-add {
            background: #fb8c00;
            color: white;
            font-weight: 600;
            border-radius: 8px;
            margin-top: 20px;
        }

        .btn-back:hover, .btn-add:hover {
            transform: scale(1.05);
        }

        .card-body {
            text-align: center;
        }

        .badge {
            background-color: #43a047;
            color: white;
            font-size: 0.75rem;
            padding: 5px 10px;
            border-radius: 12px;
        }

        img {
            border-radius: 8px;
            margin-top: 10px;
            max-width: 100%;
        }
    .floating-whatsapp {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 25px;
        right: 25px;
        background: linear-gradient(135deg, #2e7d32, #ffb300);
        color: white;
        border-radius: 50%;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        z-index: 1000;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        animation: pulse 2s infinite;
    }

    .floating-whatsapp:hover {
        transform: scale(1.1);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
    }

    .whatsapp-icon {
        width: 35px;
        height: 35px;
        margin-top: 12px;
    }
     img:hover {
            transform: scale(1.1);
        }

        small.text-danger {
            font-size: 0.9em;
        }

        /* Container keseluruhan */
        .container {
            background: transparent;
        }

    @keyframes pulse {
        0% { box-shadow: 0 0 0 0 rgba(46, 125, 50, 0.4); }
        70% { box-shadow: 0 0 0 15px rgba(46, 125, 50, 0); }
        100% { box-shadow: 0 0 0 0 rgba(46, 125, 50, 0); }
    }


</style>
