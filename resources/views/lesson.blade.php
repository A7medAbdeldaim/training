@extends('layouts.app')
@section('title', 'Lesson')

@section('content')

    <section class="inner_banner" style="margin-top:100px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="full">
                        <h3>Lesson: {{ $lesson->name }}</h3>
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
                <div class="col-lg-12"
                     style="background: #fff; padding: 30px 20px; border-radius: 10px; box-shadow: 1px 2px 3px #aaa">
                    <div class="contact_form">
                        <h3>Lesson Name: </h3>
                        <p>{{ $lesson->name }}</p>

                        <h3>Description: </h3>
                        <p>{{ $lesson->description }}</p>

                        <h3>Lesson: </h3>
                        <div class="row">
                            <video controls>
                                <source src="{{ $lesson->video }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
@endsection
