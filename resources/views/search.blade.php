@extends('layouts.app')
@section('title', 'Search')

@section('content')

    <section id="search" class="about">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>Search</h2>
            </div>

{{--            <div class="row">--}}
{{--                <form action="" method="post" class="form-inline col-12 mb-5">--}}
{{--                    @csrf--}}

{{--                    <div class="col-4 form-group">--}}
{{--                        <input class="form-control w-100" type="text" placeholder="Enter Search Keyword" name="search">--}}
{{--                    </div>--}}

{{--                    <div class="col-4 form-group">--}}
{{--                        <select name="type" class="form-control w-100">--}}
{{--                            <option value="1">Book Name</option>--}}
{{--                            <option value="2">Training Name</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}

{{--                    <div class="col-4 form-group">--}}
{{--                        <button type="submit" class="btn btn-success btn-block">--}}
{{--                            Search--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}

            <div id="map"></div>

            <script>

                function initMap() {
                    var test = {lat: -25.363, lng: 131.044};
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 14,
                        center: test
                    });

                    var locations = <?php print_r(json_encode($trainers)) ?>;

                    navigator.geolocation.getCurrentPosition(function(position) {
                        // Center on user's current location if geolocation prompt allowed
                        var initialLocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                        map.setCenter(initialLocation);
                        map.setZoom(13);

                        $.each( locations, function( index, value ){
                            var marker = new google.maps.Marker({
                                // position:  {lat: value.lat, lng: value.lng},
                                position:  {lat: Number(value.lat), lng: Number(value.lng)},
                                map: map,
                                title: value.name,
                            });
                            addInfoWindow(marker, '<div class="map-info-window">' +
                                '<h3><a href="/trainer_show/' + value.id + '">Trainer Name: ' + value.name + '</a></h3>' +
                                '<p>Email: ' + value.email + '</p>' +
                                '<p>Phone: ' + value.phone + '</p>' +
                                '<p>Address: ' + value.address + '</p>' +
                                '</div>');
                        });

                    }, function(positionError) {
                        // User denied geolocation prompt - default to Chicago
                        map.setCenter(new google.maps.LatLng(39.8097343, -98.5556199));
                        map.setZoom(5);
                    });


                }

                function addInfoWindow(marker, message) {
                    var infoWindow = new google.maps.InfoWindow({
                        content: message
                    });

                    google.maps.event.addListener(marker, 'click', function () {
                        infoWindow.open(map, marker);
                    });
                }
            </script>
            <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIjKTaPmPv4vhexgPV2l48rEK5YBjceMk&callback=initMap">
            </script>

            <div class="row content">
{{--                @foreach($books as $book)--}}
{{--                    <div class="col-lg-4 col-md-6 portfolio-item filter-car2">--}}
{{--                        <a href="{{ route('books.show', $book->id) }}">--}}
{{--                            <div class="portfolio-img">--}}
{{--                                <img src="{{ $book->image }}" class="img-fluid" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="portfolio-info">--}}
{{--                                <h4>{{ $book->name }}</h4>--}}
{{--                                <p>{{ \Illuminate\Support\Str::limit($book->description_en, 50) }}</p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
            </div>

        </div>
    </section><!-- End About Section -->
@endsection
