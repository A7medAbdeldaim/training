@extends('layouts.app')
@section('title', 'Show Car')

@section('content')

    <!-- ======= About Section ======= -->
    <div class="container" style="margin-top: 150px; margin-bottom: 150px">
        <div class="row">
            <div class="col-4">
                <img src="{{ $car->image }}" width="100%">
                <hr>
                <p><b>Seller: </b>{{ $car->user->name }}</p>
                @if ($car->type == 0)
                    <a href="#" class="btn btn-success btn-block">Rent</a>
                @else
                    <a href="#" class="btn btn-primary btn-block">Buy</a>
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
@endsection
