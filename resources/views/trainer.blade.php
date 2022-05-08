@extends('layouts.app')
@section('title', 'Trainer')

@section('content')

    <section class="inner_banner" style="margin-top:100px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="full">
                        <h3>Trainer: {{ $trainer->name }}</h3>
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
                        <img style="width: 100%" src="{{ $trainer->image }}" alt="#">
                    </div>
                    <hr>
                    <a class="btn btn-block btn-primary" href="tel:{{ $trainer->phone }}">Call Trainer</a>
                    @if (auth('trainees')->check())
                        <a class="btn btn-block btn-primary" data-toggle="modal" data-target="#chatModal" href="#">Message Trainer</a>
                    @else
                        <a class="btn btn-block btn-primary btn-disabled">Message Trainer</a>
                    @endif
                </div>

                <div class="col-lg-9 col-md-9 col-sm-12" style="background: #fff; padding: 30px 20px; border-radius: 10px; box-shadow: 1px 2px 3px #aaa">
                    <div class="contact_form">
                        <h3>Trainer Name: </h3>
                        <p>{{ $trainer->name }}</p>

                        <h3>Email: </h3>
                        <p>{{ $trainer->email }}</p>

                        <h3>Phone: </h3>
                        <p>{{ $trainer->phone }}</p>

                        <h3>Address: </h3>
                        <p>{{ $trainer->address }}</p>

                        <h3>Bio: </h3>
                        <p>{{ $trainer->bio }}</p>

                        <h3>Video: </h3>
                        <p>
                            <video controls>
                                <source src="{{ $trainer->video }}" type="video/mp4">
                            </video>
                        </p>

                        <h3>Map: </h3>
                        <div id="map" style="margin: 0"></div>

                        <script>
                            function initMap() {
                                var test = {lat: <?php echo $trainer->lat ?>, lng: <?php echo $trainer->lng ?>};
                                var map = new google.maps.Map(document.getElementById('map'), {
                                    zoom: 14,
                                    center: test
                                });

                                var initialLocation = new google.maps.LatLng(<?php echo $trainer->lat ?>, <?php echo $trainer->lng ?>);
                                var marker = new google.maps.Marker({
                                    position: initialLocation,
                                    map: map,
                                });
                            }
                        </script>
                        <script async defer
                                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIjKTaPmPv4vhexgPV2l48rEK5YBjceMk&callback=initMap">
                        </script>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">

                <div class="col-12">
                    <div class="full">
                        <h3>Courses:</h3>

                        <div class="row">
                            @foreach($trainer->courses as $course)
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <a href="{{ route('training_show', $course->id) }}">
                                        <div class="full blog_img_popular">
                                            <img class="img-responsive" src="{{ $course->image }}" alt="#">
                                            <h4>{{ $course->name }}</h4>
                                            <p>{{ $course->description }}</p>
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

    <div class="modal fade" id="chatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Send Message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('send_message', ['target_id' => $trainer->id]) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class=" field">
                                <textarea class="form-control" name="message" placeholder="Massage"></textarea>
                                <span style="float:right"><button class="btn btn-primary"
                                                                  type="submit">Send</button></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
