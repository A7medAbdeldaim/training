<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>CBRS | @yield('title', 'Home Page')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('new/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('new/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i') }}" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('new/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('new/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('new/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('new/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('new/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('new/vendor/line-awesome/css/line-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('new/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('new/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('new/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('new/css/style.css') }}" rel="stylesheet">

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center {{ request()->routeIs('home') ? 'header-transparent' : '' }} ">
    <div class="container d-flex justify-content-between">

        <nav class="nav-menu">
            <ul>
                <li class=""><a href="{{ route('login') }}">Login</a></li>
                <li class=""><a href="{{ route('register') }}">Register</a></li>
            </ul>
        </nav>

        <div class="logo">
            <h1 class="text-light"><a href="{{ route('home') }}">CBRS</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="{{ asset('new/img/logo.png') }}" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block float-right">
            <ul>
                <li class="drop-down"><a href="">Categories</a>
                    <ul>
                        <li class="drop-down"><a href="#">Cars</a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li class="drop-down"><a href="#">Bikes</a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->

@if (request()->routeIs('home'))
    <section id="hero" class="d-flex flex-column justify-content-end align-items-center" style='background-image: url("{{ asset('images/slider2.jpg') }}"); background-size: cover'>
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

        <!-- Slide 1 -->
        <div class="carousel-item active">`
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>CBRS</span></h2>
                <p class="animate__animated fanimate__adeInUp">Best Bikes and Cars Rental System</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">Start Now</h2>
                <p class="animate__animated animate__fadeInUp">Start now using the website.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
            <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
            <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)"></use>
        </g>
        <g class="wave2">
            <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)"></use>
        </g>
        <g class="wave3">
            <use xlink:href="#wave-path" x="50" y="9" fill="#fff"></use>
        </g>
    </svg>

</section><!-- End Hero -->
@endif

<main id="main" style="margin-top: 40px">
    @yield('content')
</main>

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <h3>CBRS</h3>
        <div class="social-links">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
        <div class="copyright">
            &copy; Copyright. All Rights Reserved
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('new/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('new/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('new/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('new/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('new/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('new/vendor/venobox/venobox.min.js') }}"></script>
<script src="{{ asset('new/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('new/vendor/aos/aos.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('new/js/main.js') }}"></script>

</body>

</html>
