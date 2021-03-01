<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>CBRS | @yield('title', 'CBRS')</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
<div class="navbar navbar-inverse set-radius-zero" >
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="nav-link navbar-brand" href="{{ route('home') }}">
                <h3 style="margin: 0">CBRS</h3>
                <span>Car and Bikes Rental System</span>
            </a>

        </div>


        <div class="right-div">
            @auth
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="text-danger pull-right" style="border: none; background: transparent;">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="text-primary">Login</a>
                <span class="pl-2 pr-2">|</span>
                <a href="{{ route('register') }}" class="text-primary">Register</a>
            @endauth
        </div>
    </div>
</div>
<!-- LOGO HEADER END-->
<section class="menu-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="navbar-collapse collapse ">
                    <ul id="menu-top" class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('bikes.all') }}" >Bikes</a></li>

                        <li><a href="{{ route('cars.all') }}">Cars</a></li>
                        <li>
                            <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">Seller Area<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Add Bike</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Add Car</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('about') }}">About</a></li>

                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

@yield('content')

<!-- CONTENT-WRAPPER SECTION END-->
<section class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            </div>

        </div>
    </div>
</section>
<!-- FOOTER SECTION END-->
<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
<!-- CORE JQUERY  -->
<script src="{{ asset('js/jquery-1.10.2.js') }}"></script>
<!-- BOOTSTRAP SCRIPTS  -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- CUSTOM SCRIPTS  -->
<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
