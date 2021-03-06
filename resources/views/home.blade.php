@extends('layouts.app')
@section('title', 'Home Page')

@section('content')
    <!-- section -->
    <div class="section tabbar_menu">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <div class="tab_menu">
                        <ul>
                            <li><a href="#"><span class="icon"><img src="{{ asset('images/i5.png') }}" alt="#" /></span><span>Location</span></a></li>
                            <li><a href="#"><span class="icon"><img src="{{ asset('images/i6.png') }}" alt="#" /></span><span>Call us</span></a></li>
                            <li><a href="#"><span class="icon"><img src="{{ asset('images/i7.png') }}" alt="#" /></span><span>Email</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section margin-top_50">
        <div class="container">
            <div class="row">
                <div class="col-md-6 layout_padding_2">
                    <div class="full">
                        <div class="heading_main text_align_left">
                            <h2><span>Welcome To</span> Talent Rise</h2>
                        </div>
                        <div class="full">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                        </div>
                        <div class="full">
                            <a class="hvr-radial-out button-theme" href="#">About more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="full">
                        <img src="{{ asset('images/img2.png') }}" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                            <h2><span>Popular </span>Talents</h2>
                        </div>
                    </div>
                </div>
                @foreach($trainers as $trainer)
                    <div class="col-md-3">
                        <a href="{{ route('trainer_show', $trainer->id) }}">
                        <div class="full blog_img_popular">
                            <img class="img-responsive" src="{{ $trainer->image }}" alt="#" />
                            <h4>{{ $trainer->name }}</h4>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section margin-top_50 silver_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="full float-right_img">
                        <img src="{{ asset('images/img6.png') }}" alt="#" />
                    </div>
                </div>
                <div class="col-md-6 layout_padding_2">
                    <div class="full">
                        <div class="heading_main text_align_left">
                            <h2><span>Apply for Admission</span></h2>
                        </div>
                        <div class="full">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                        </div>
                        <div class="full">
                            <a class="hvr-radial-out button-theme" href="#">Apply</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->

    <!-- section -->
    <div class="section layout_padding padding_bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                            <h2><span>Trainings</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($trainings as $training)
                    <div class="col-md-3">
                        <a href="{{ route('training_show', $training->id) }}">
                            <div class="full blog_img_popular">
                                <img class="img-responsive" src="{{ $training->image }}" alt="#" />
                                <h4>{{ $training->name }}</h4>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section layout_padding padding_bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                            <h2><span>Contact</span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section contact_section" style="background:#12385b;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="full float-right_img">
                        <img src="{{ asset('images/img10.png') }}" alt="#">
                    </div>
                </div>
                <div class="layout_padding col-lg-6 col-md-6 col-sm-12">
                    <div class="contact_form">
                        <form action="contact.html">
                            <fieldset>
                                <div class="full field">
                                    <input type="text" placeholder="Your Name" name="your name" />
                                </div>
                                <div class="full field">
                                    <input type="email" placeholder="Email Address" name="Email" />
                                </div>
                                <div class="full field">
                                    <input type="phn" placeholder="Phone Number" name="Phone number" />
                                </div>
                                <div class="full field">
                                    <textarea placeholder="Massage"></textarea>
                                </div>
                                <div class="full field">
                                    <div class="center"><button>Send</button></div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
@endsection
