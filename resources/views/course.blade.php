@extends('layouts.app')
@section('title', 'Training')

@section('content')

    <section class="inner_banner" style="margin-top:100px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="full">
                        <h3>Training: {{ $course->name }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end section -->

    <!-- section -->
    <div class="section layout_padding contact_section" style="background:#f6f6f6;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="" style="background: #fff; padding: 30px 20px; border-radius: 10px; box-shadow: 1px 2px 3px #aaa">
                        <img style="width: 100%" src="{{ $course->image }}" alt="#">
                    </div>
                    <hr>
                    <a class="btn btn-block btn-primary" href="#" onclick="alert('You\'ve been enrolled in this training successfully')">Enroll</a>

                </div>

                <div class="col-lg-9 col-md-9 col-sm-12" style="background: #fff; padding: 30px 20px; border-radius: 10px; box-shadow: 1px 2px 3px #aaa">
                    <div class="contact_form">
                        <h3>Training Name: </h3>
                        <p>{{ $course->name }}</p>

                        <h3>Description: </h3>
                        <p>{{ $course->description }}</p>

                        <h3>Rating: </h3>
                        <p>{{ $course->rating }} / 5</p>

                        <h3>Price: </h3>
                        <p>{{ $course->price }}</p>

                        <h3>Lessons: </h3>
                        <div class="row">
                            @foreach($course->lessons as $lesson)
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <a href="#">
                                        <div class="full blog_img_popular">
                                            <img class="img-responsive" src="{{ $lesson->image }}" alt="#">
                                            <h4>{{ $lesson->name }}</h4>
                                            <p>{{ $lesson->description }}</p>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
@endsection
