<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>@yield('title', 'Rise Talent')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="{{ asset('css/pogo-slider.min.css') }}" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

<!-- LOADER -->
<div id="preloader">
    <div class="loader">
        <img src="{{ asset('images/loader.gif') }}" alt="#" />
    </div>
</div>
<!-- end loader -->
<!-- END LOADER -->

<!-- Start header -->
<header class="top-header">
    <nav class="navbar header-nav navbar-expand-lg" style="background-color:#4d555e">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('images/5d3c9abaa4512_thumb900.jpg') }}" alt="image"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                <ul class="navbar-nav">
                    <li><a class="nav-link active" style="color: #fff;" href="{{ route('home')}}">Home</a></li>
                    <li><a class="nav-link" style="color: #fff;" href="{{ route('about')}}">About</a></li>
{{--                    <li><a class="nav-link" style="color: #fff;" href="{{ route('home')}}">Talents</a></li>--}}
                    <li><a class="nav-link" style="color: #fff;" href="{{ route('contact_us')}}">Contact us</a></li>

                    @if (auth('trainees')->check())
                        <li><a class="nav-link" style="color: #fff;" href="{{ route('search')}}">Search</a></li>
                        <li class="">
                            <a href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff">
                                <span class="sr-only">Toggle Dropdown</span>
                                {{ auth('trainees')->user()->name }}
                            </a>
                            <div class="dropdown-menu">
{{--                                <a class="text-dark" href="{{ route('profile') }}">Profile</a>--}}
{{--                                <div class="dropdown-divider"></div>--}}
                                <a class="text-dark" onclick="submit_form()" href="#">Logout</a>
                            </div>
                        </li>
                        <form id="logout_form" class="d-none" method="post" action="{{ route('logout') }}">
                            @csrf
                        </form>
                        <script>
                            function submit_form() {
                                document.getElementById('logout_form').submit();
                            }
                        </script>
                    @elseif (auth('trainers')->check())
                        <li><a class="nav-link" style="color: #fff;" href="{{ route('trainers.trainings')}}">Dashboard</a></li>
                        <li class="">
                            <a href="#" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff">
                                <span class="sr-only">Toggle Dropdown</span>
                                {{ auth('trainers')->user()->name }}
                            </a>
                            <div class="dropdown-menu" style="left: auto;">
                                <a class="text-dark" href="{{ route('profile') }}">Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="nav-link" onclick="submit_form()" href="#">Logout</a>
                            </div>
                        </li>
                        <form id="logout_form" class="d-none" method="post" action="{{ route('logout') }}">
                            @csrf
                        </form>
                        <script>
                            function submit_form() {
                                document.getElementById('logout_form').submit();
                            }
                        </script>
                    @else
                        <li><a class="nav-link" style="color: #fff;" href="{{ route('login') }}">Login</a></li>
                        <li><a class="nav-link" style="color: #fff;" href="{{ route('register') }}">Register</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End header -->

@if (request()->routeIs('home'))
    <!-- Start Banner -->
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" style="background-image:url({{ asset('images/banner_img.png') }});">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3><span span class="theme_color">You only have know one thing</span><br>you can learn anything</h3>
                                        <h4>Free Educations</h4>
                                        <br>
                                        <div class="full center">
                                            <a class="contact_bt" href="{{ route('search') }}">Start Learning Talent</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image:url({{ asset('images/banner_img2.png') }});">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3><span span class="theme_color">You only have know one thing</span><br>you can learn anything</h3>
                                        <h4>Free Educations</h4>
                                        <br>
                                        <div class="full center">
                                            <a class="contact_bt" href="{{ route('search') }}">Start your Talent</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .pogoSlider -->
            </div>
        </div>
    </div>
    <!-- End Banner -->
@endif

<div>
    @yield('content')
</div>

<!-- Start Footer -->
<footer class="footer-box">
    <div class="container">

        <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="footer_blog">
                    <div class="full margin-bottom_30">
                        <img src="{{ asset('images/5d3c9abaa4512_thumb900.jpg') }}" alt="#" />
                    </div>
                    <div class="full white_fonts">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="footer_blog full white_fonts">
                    <h3>Newsletter</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                    <div class="newsletter_form">
                        <form action="index.html">
                            <input type="email" placeholder="Your Email" name="#" required />
                            <button>Submit</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</footer>
<!-- End Footer -->

<a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

<!-- ALL JS FILES -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- ALL PLUGINS -->
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/jquery.pogo-slider.min.js') }}"></script>
<script src="{{ asset('js/slider-index.js') }}"></script>
<script src="{{ asset('js/smoothscroll.js') }}"></script>
<script src="{{ asset('js/form-validator.min.js') }}"></script>
<script src="{{ asset('js/contact-form-script.js') }}"></script>
<script src="{{ asset('js/isotope.min.js') }}"></script>
<script src="{{ asset('js/images-loded.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script>
    /* counter js */

    (function ($) {
        $.fn.countTo = function (options) {
            options = options || {};

            return $(this).each(function () {
                // set options for current element
                var settings = $.extend({}, $.fn.countTo.defaults, {
                    from:            $(this).data('from'),
                    to:              $(this).data('to'),
                    speed:           $(this).data('speed'),
                    refreshInterval: $(this).data('refresh-interval'),
                    decimals:        $(this).data('decimals')
                }, options);

                // how many times to update the value, and how much to increment the value on each update
                var loops = Math.ceil(settings.speed / settings.refreshInterval),
                    increment = (settings.to - settings.from) / loops;

                // references & variables that will change with each update
                var self = this,
                    $self = $(this),
                    loopCount = 0,
                    value = settings.from,
                    data = $self.data('countTo') || {};

                $self.data('countTo', data);

                // if an existing interval can be found, clear it first
                if (data.interval) {
                    clearInterval(data.interval);
                }
                data.interval = setInterval(updateTimer, settings.refreshInterval);

                // initialize the element with the starting value
                render(value);

                function updateTimer() {
                    value += increment;
                    loopCount++;

                    render(value);

                    if (typeof(settings.onUpdate) == 'function') {
                        settings.onUpdate.call(self, value);
                    }

                    if (loopCount >= loops) {
                        // remove the interval
                        $self.removeData('countTo');
                        clearInterval(data.interval);
                        value = settings.to;

                        if (typeof(settings.onComplete) == 'function') {
                            settings.onComplete.call(self, value);
                        }
                    }
                }

                function render(value) {
                    var formattedValue = settings.formatter.call(self, value, settings);
                    $self.html(formattedValue);
                }
            });
        };

        $.fn.countTo.defaults = {
            from: 0,               // the number the element should start at
            to: 0,                 // the number the element should end at
            speed: 1000,           // how long it should take to count between the target numbers
            refreshInterval: 100,  // how often the element should be updated
            decimals: 0,           // the number of decimal places to show
            formatter: formatter,  // handler for formatting the value before rendering
            onUpdate: null,        // callback method for every time the element is updated
            onComplete: null       // callback method for when the element finishes updating
        };

        function formatter(value, settings) {
            return value.toFixed(settings.decimals);
        }
    }(jQuery));

    jQuery(function ($) {
        // custom formatting example
        $('.count-number').data('countToOptions', {
            formatter: function (value, options) {
                return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
            }
        });

        // start all the timers
        $('.timer').each(count);

        function count(options) {
            var $this = $(this);
            options = $.extend({}, options || {}, $this.data('countToOptions') || {});
            $this.countTo(options);
        }
    });
</script>
</body>

</html>
