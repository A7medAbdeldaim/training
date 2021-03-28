@extends('layouts.app')
@section('title', 'Home Page')

@section('content')
    <!-- MENU SECTION END-->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>About</h2>
                <p>Who we are</p>
            </div>

            <div class="row content" data-aos="fade-up">
                <div class="col-lg-6">
                    <p>
                        The website works to facilitate the rent of bicycles and cars through the web site.
                        Bicycle's or car's owners can add their bicycles or cars and add price of rent for each bicycles or cars.
                        Our website provide this service (rent of bicycles or cars) for users which will use our web site, each user before rent any bicycles or cars will know all information about this bicycles or cars which are (model of bicycles or cars, price of rent/hour,
                    </p>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                         available or not, bicycle's owner name or car's owner name).
                        Our website provide this service for our users which users can search by area then our website will appear all available cars or bicycles to rent.
                    </p>
                    <a href="{{ route('about') }}" class="btn-learn-more">Learn More</a>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>Services</h2>
                <p>What we do offer</p>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="icon-box" data-aos="zoom-in-left">
                        <div class="icon"><i class="las la-basketball-ball" style="color: #ff689b;"></i></div>
                        <h4 class="title"><a href="">Cars Rental</a></h4>
                        <p class="description">Allow the people to rental there’s car and bikes</p>
                    </div>
                </div>
                <div class="col-md-6 mt-5 mt-md-0">
                    <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
                        <div class="icon"><i class="las la-book" style="color: #e9bf06;"></i></div>
                        <h4 class="title"><a href="">Bikes Rental</a></h4>
                        <p class="description">website cost effective and innovative To help the customer And provide a helpful service</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>Rental</h2>
                <p>Latest Coming</p>
            </div>

            <ul id="portfolio-flters" class="d-flex justify-content-end" data-aos="fade-up">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-car2">Cars</li>
                <li data-filter=".filter-bike2">Bikes</li>
            </ul>

            <div class="row portfolio-container" data-aos="fade-up">
                @foreach($cars as $car)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-car2">
                        <a href="{{ route('cars.show', $car->id) }}">
                            <div class="portfolio-img">
                                <img src="{{ $car->image }}" class="img-fluid" alt="">
                            </div>
                            <div class="portfolio-info">
                                <h4>{{ $car->name }}</h4>
                                <p>{{ \Illuminate\Support\Str::limit($car->description, 50) }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach

                @foreach($bikes as $bike)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-bike2">
                        <a href="{{ route('bikes.show', $bike->id) }}">
                            <div class="portfolio-img">
                                <img src="{{ $bike->image }}" class="img-fluid" alt="">
                            </div>
                            <div class="portfolio-info">
                                <h4>{{ $bike->name }}</h4>
                                <p>{{ \Illuminate\Support\Str::limit($bike->description, 50) }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </div>

            <div class="row mt-5">

                <div class="col-lg-4" data-aos="fade-right">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Location:</h4>
                            <p>Military City, Ahad Rafidah 62415, Saudi Arabia</p>
                        </div>

                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p>Ebtisam.moh101@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Call:</h4>
                            <p>+966 0563519542</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                       data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                       placeholder="Your Email" data-rule="email"
                                       data-msg="Please enter a valid email"/>
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                   data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"/>
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                                      data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center">
                            <button type="button" onclick="alert('Your message has been sent. Thank you!')">Send Message</button>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

@endsection
