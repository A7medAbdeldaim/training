<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>CBRS | @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />
    <link href="{{ asset('new/css/templatemo-style.css') }}" rel="stylesheet" />
</head>

<body>

<div class="container">
    <!-- Top box -->
    <!-- Logo & Site Name -->
    <div class="placeholder">
        <div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/slider4.jpg') }}">
            <div class="tm-header">
                <div class="row tm-header-inner">
                    <div class="col-md-6 col-12">
                        <div class="tm-site-text-box">
                            <h1 class="tm-site-title">CBRS</h1>
                            <h6 class="tm-site-description">Car and Bikes Rental System</h6>
                        </div>
                    </div>
                    <nav class="col-md-6 col-12 tm-nav">
                        <ul class="tm-nav-ul">
                            <li class="tm-nav-li"><a href="{{ route('home') }}" class="tm-nav-link active">Home</a></li>
                            <li class="tm-nav-li"><a href="{{ route('about') }}" class="tm-nav-link">About</a></li>
                            <li class="tm-nav-li"><a href="{{ route('bikes.all') }}" class="tm-nav-link">Bikes</a></li>
                            <li class="tm-nav-li"><a href="{{ route('cars.all') }}" class="tm-nav-link">Cars</a></li>
                            @auth
                                <li class="tm-nav-li">
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit" class="tm-nav-link">Logout</button>
                                    </form>
                                </li>
                            @else
                                <li class="tm-nav-li"><a href="{{ route('login') }}" class="tm-nav-link">Login</a></li>
                                <li class="tm-nav-li"><a href="{{ route('register') }}" class="tm-nav-link">Register</a></li>
                            @endauth
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <main>
        <header class="row tm-welcome-section">
            <h2 class="col-12 text-center tm-section-title">Welcome to CBRS</h2>
            <p class="col-12 text-center">Car and Bikes Rental System</p>
        </header>

        @yield('content')

    </main>

    <footer class="tm-footer text-center">
        <p>Copyright &copy; Received</p>
    </footer>
</div>
<script src="{{ asset('new/js/jquery.min.js') }}"></script>
<script src="{{ asset('new/js/parallax.min.js') }}"></script>
<script>
    $(document).ready(function(){
        // Handle click on paging links
        $('.tm-paging-link').click(function(e){
            e.preventDefault();

            var page = $(this).text().toLowerCase();
            $('.tm-gallery-page').addClass('hidden');
            $('#tm-gallery-page-' + page).removeClass('hidden');
            $('.tm-paging-link').removeClass('active');
            $(this).addClass("active");
        });
    });
</script>
</body>
</html>
