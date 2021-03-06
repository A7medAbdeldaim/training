@extends('layouts.app')
@section('title', 'Show Bike')

@section('content')

    <!-- ======= About Section ======= -->
    <div class="container" style="margin-top: 150px; margin-bottom: 150px">
        <div class="row">
            <div class="col-4">
                <img src="{{ $bike->image }}" width="100%">
                <hr>
                <p><b>Seller: </b>{{ $bike->user->name }}</p>
                @if ($bike->type == 0)
                    <a href="#" class="btn btn-success btn-block">Rent</a>
                @else
                    <a href="#" class="btn btn-primary btn-block">Buy</a>
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
@endsection
