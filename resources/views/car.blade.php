@extends('layouts.app')
@section('title', 'Show Car')

@section('content')

    <!-- ======= About Section ======= -->
    <div class="container" style="margin-top: 150px; margin-bottom: 150px">

        <div class="section-title" data-aos="zoom-out">
            <h2>{{ $car->category->name ?? '' }}</h2>
            <p>{{ $car->name }}</p>
        </div>

        <div class="row">
            <div class="col-4">
                <img src="{{ $car->image }}" width="100%">
                <hr>
                <p><b>Seller: </b>{{ $car->user->name }}</p>
                @if ($car->status == 1)
                    <a data-target="#rent_car" data-toggle="modal" class="btn btn-success btn-block">Rent</a>
                @else
                    <a href="#" class="btn btn-primary btn-block">Rented</a>
                @endif
            </div>
            <div class="col-8">
                <p><b>Description:</b></p>
                <p>{{ $car->description }}</p>

                <p><b>Price: </b>{{ $car->price ?? '-' }}</p>
                <p><b>Model: </b>{{ $car->model ?? '-' }}</p>
                <p><b>Color: </b>{{ $car->color ?? '-' }}</p>
                <p><b>Ground Clearance: </b>{{ $car->ground_clearance ?? '-' }}</p>
                <p><b>Category: </b>{{ $car->category->name ?? '-' }}</p>
                <p><b>Type: </b>{{ $car->type_name ?? '-' }}</p>
                <p><b>Engine Displacement: </b>{{ $car->engine_displacement ?? '-' }}</p>
                <p><b>Max Power: </b>{{ $car->max_power ?? '-' }}</p>
                <p><b>Max Torque: </b>{{ $car->max_torq ?? '-' }}</p>
                <p><b>No Cylinder: </b>{{ $car->no_cylinder ?? '-' }}</p>
                <p><b>No Gears: </b>{{ $car->no_gears ?? '-' }}</p>
                <p><b>Seat Height: </b>{{ $car->seat_height ?? '-' }}</p>
                <p><b>Weight: </b>{{ $car->weight ?? '-' }}</p>
                <p><b>Tank Capacity: </b>{{ $car->tank_capacity ?? '-' }}</p>
                <p><b>Mileage: </b>{{ $car->mileage ?? '-' }}</p>
                <p><b>Top Speed: </b>{{ $car->top_speed ?? '-' }}</p>
                <p><b>Fuel Type: </b>{{ $car->fuel_type ?? '-' }}</p>
            </div>
        </div>
    </div>

    <div class="modal fade" id="rent_car">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title align-items-end">Rent a Car
                        </h3>
                    </div>
                    <!-- form start -->
                    <form role="form"
                          action="{{ route('cars.rent', $car->id) }}"
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
