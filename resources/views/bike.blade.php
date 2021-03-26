@extends('layouts.app')
@section('title', 'Show Bike')

@section('content')

    <!-- ======= About Section ======= -->
    <div class="container" style="margin-top: 150px; margin-bottom: 150px">

        <div class="section-title" data-aos="zoom-out">
            <h2>{{ $car->category->name }}</h2>
            <p>{{ $car->name }}</p>
        </div>

        <div class="row">
            <div class="col-4">
                <img src="{{ $bike->image }}" width="100%">
                <hr>
                <p><b>Seller: </b>{{ $bike->user->name }}</p>
                @if ($bike->status == 1)
                    <a href="#" data-target="#rent_bike" data-toggle="modal" class="btn btn-success btn-block">Rent</a>
                @else
                    <a href="#" class="btn btn-primary btn-block">Rented</a>
                @endif
            </div>
            <div class="col-8">
                <p><b>Description:</b></p>
                <p>{{ $bike->description }}</p>

                <p><b>Price: </b>{{ $bike->price ?? '-' }}</p>
                <p><b>Model: </b>{{ $bike->model ?? '-' }}</p>
                <p><b>Color: </b>{{ $bike->color ?? '-' }}</p>
                <p><b>Ground Clearance: </b>{{ $bike->ground_clearance ?? '-' }}</p>
                <p><b>Category: </b>{{ $bike->category->name ?? '-' }}</p>
                <p><b>Type: </b>{{ $bike->type_name ?? '-' }}</p>
                <p><b>Engine Displacement: </b>{{ $bike->engine_displacement ?? '-' }}</p>
                <p><b>Max Power: </b>{{ $bike->max_power ?? '-' }}</p>
                <p><b>Max Torque: </b>{{ $bike->max_torq ?? '-' }}</p>
                <p><b>No Cylinder: </b>{{ $bike->no_cylinder ?? '-' }}</p>
                <p><b>No Gears: </b>{{ $bike->no_gears ?? '-' }}</p>
                <p><b>Seat Height: </b>{{ $bike->seat_height ?? '-' }}</p>
                <p><b>Weight: </b>{{ $bike->weight ?? '-' }}</p>
                <p><b>Tank Capacity: </b>{{ $bike->tank_capacity ?? '-' }}</p>
                <p><b>Mileage: </b>{{ $bike->mileage ?? '-' }}</p>
                <p><b>Top Speed: </b>{{ $bike->top_speed ?? '-' }}</p>
            </div>
        </div>
    </div>

    <div class="modal fade" id="rent_bike">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title align-items-end">Rent a Bike</h3>
                    </div>
                    <!-- form start -->
                    <form role="form"
                          action="{{ route('bikes.rent', $bike->id) }}"
                          method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="card_name">Card Holder Name</label>
                                <input type="text" id="card_name"
                                       placeholder="Enter Card Holder Name"
                                       class="form-control" name="card_name" required>
                            </div>

                            <div class="form-group">
                                <label for="card">Card Number</label>
                                <input type="text" id="card"
                                       placeholder="Enter Card Number"
                                       class="form-control" name="card" required>
                            </div>

                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="exp">Expiration Date</label>
                                    <input type="text" id="exp"
                                           placeholder="Enter Expiration Date"
                                           class="form-control" name="exp" required>
                                </div>

                                <div class="form-group col-6">
                                    <label for="cvv">CVV</label>
                                    <input type="text" id="cvv"
                                           placeholder="Enter CVV"
                                           class="form-control" name="card" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="from">Date From</label>
                                <input type="date" id="from"
                                       class="form-control" name="from" required>
                            </div>

                            <div class="form-group">
                                <label for="date_to">Date To</label>
                                <input type="date" id="date_to"
                                       class="form-control" name="date_to" required>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success col-md-12">Pay & Rent</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
