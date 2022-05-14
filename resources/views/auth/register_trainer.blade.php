@extends('layouts.auth_layout')
@section('title', 'Register')

@section('content')
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <!-- <div class="col-md-6 order-md-2">
                  <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
                </div> -->
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="form-block">
                                <div class="mb-4">
                                    <h3>Sign up in <strong>Training</strong> as a Trainer</h3>
                                </div>
                                @include('layouts.errors')

                                <form action="{{ route('trainers.register') }}" method="post">
                                    @csrf
                                    <div class="form-group first">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="name"
                                        value="{{ old('name') }}">

                                    </div>
                                    <div class="form-group first">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                        value="{{ old('email') }}">

                                    </div>

                                    <div class="form-group first">
                                        <label for="phone" style="display: block">Phone</label>
                                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="" value="{{ old('phone')}}">

                                    </div>
                                    <div class="form-group last mb-4">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>

                                    <div class="form-group last mb-4">
                                        <label for="password">Re-Enter Password</label>
                                        <input type="password" class="form-control" id="password" name="password_confirmation">
                                    </div>

                                    <p>Select your location on map</p>
                                    <div id="map" style="margin: 0"></div>

                                    <script>

                                        function initMap() {
                                            var test = {lat: -25.363, lng: 131.044};
                                            var map = new google.maps.Map(document.getElementById('map'), {
                                                zoom: 14,
                                                center: test
                                            });

                                            navigator.geolocation.getCurrentPosition(function(position) {
                                                // Center on user's current location if geolocation prompt allowed
                                                var initialLocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                                                map.setCenter(initialLocation);
                                                map.setZoom(13);

                                                var marker = new google.maps.Marker({
                                                    position: initialLocation,
                                                    map: map,
                                                    draggable: true,
                                                });

                                                document.getElementById("lat").value = initialLocation.lat();
                                                document.getElementById("lng").value = initialLocation.lng();

                                                google.maps.event.addListener(marker, 'dragend', function (marker) {
                                                    var latLng = marker.latLng;
                                                    currentLatitude = latLng.lat();
                                                    currentLongitude = latLng.lng();
                                                    document.getElementById("lat").value = currentLatitude;
                                                    document.getElementById("lng").value = currentLongitude;
                                                });
                                            }, function(positionError) {
                                                // User denied geolocation prompt - default to Chicago
                                                map.setCenter(new google.maps.LatLng(39.8097343, -98.5556199));
                                                map.setZoom(5);
                                            });


                                        }
                                    </script>
                                    <script async defer
                                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIjKTaPmPv4vhexgPV2l48rEK5YBjceMk&callback=initMap">
                                    </script>

                                    <div class="form-group">
                                        <label for="lat">Latitude</label>
                                        <input type="text" id="lat" class="form-control"
                                               placeholder="Enter Trainer Latitude" name="lat"
                                               value="{{old('lat')}}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="lng">Longitude</label>
                                        <input type="text" id="lng" class="form-control"
                                               placeholder="Enter Trainer Longitude" name="lng"
                                               value="{{old('lng')}}" required>
                                    </div>

                                    <input type="submit" value="SignUp" class="btn btn-pill text-white btn-block btn-primary">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
