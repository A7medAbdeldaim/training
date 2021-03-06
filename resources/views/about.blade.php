@extends('layouts.app')
@section('title', 'About')

@section('content')

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
@endsection
