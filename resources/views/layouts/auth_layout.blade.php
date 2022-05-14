<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('build/css/intlTelInput.css') }}">

    <title>@yield('title', 'Training')</title>
</head>
<body>

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
<br>
<br>
<br>
<br>

@yield('content')

<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

<script src="{{ asset('build/js/intlTelInput.js') }}"></script>
<script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
        // allowDropdown: false,
        // autoHideDialCode: false,
        // autoPlaceholder: "off",
        // dropdownContainer: document.body,
        // excludeCountries: ["us"],
        // formatOnDisplay: false,
        // geoIpLookup: function(callback) {
        //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
        //     var countryCode = (resp && resp.country) ? resp.country : "";
        //     callback(countryCode);
        //   });
        // },
        // hiddenInput: "full_number",
        // initialCountry: "auto",
        // localizedCountries: { 'de': 'Deutschland' },
        // nationalMode: false,
        // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
        // placeholderNumberType: "MOBILE",
        // preferredCountries: ['cn', 'jp'],
        // separateDialCode: true,
        utilsScript: "{{ asset('build/js/utils.js') }}",
    });
</script>
</body>
</html>
