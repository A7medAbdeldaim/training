@extends('templates.admin_layout')
@section('title', 'Edit Trainer')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Trainer</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Edit a New Trainer</h3>
                            </div>
                            @include('templates.errors')
                            <form role="form" action="{{ route('admin.trainers.update', $trainer->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                {{ method_field('PATCH') }}
                                <div class="card-body col-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" class="form-control"
                                               placeholder="Enter Trainer Name" name="name"
                                               value="{{$trainer->name}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" class="form-control"
                                               placeholder="Enter Trainer Email" name="email"
                                               value="{{$trainer->email}}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Trainer Password</label>
                                        <input type="password" class="form-control" id="password"
                                               placeholder="Trainer Password" name="password"
                                               required>
                                    </div>
                                    <div class="form-group">
                                        <label
                                            for="confirm_password">Re-enter Trainer Password</label>
                                        <input type="password" class="form-control" id="confirm_password"
                                               placeholder="Re-enter Trainer Password"
                                               name="password_confirmation" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" id="image" class="form-control"
                                               name="image"
                                               value="{{$trainer->image}}" required>
                                    </div>

                                    <p>Select your location on map</p>
                                    <div id="map"></div>

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
                                               value="{{$trainer->lat}}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="lng">Longitude</label>
                                        <input type="text" id="lng" class="form-control"
                                               placeholder="Enter Trainer Longitude" name="lng"
                                               value="{{$trainer->lng}}" required>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success btn-block">Edit Trainer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

