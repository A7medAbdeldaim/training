@extends('templates.admin_layout')
@section('title', 'Edit Car')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Car</h1>
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
                                <h3 class="card-title">Edit a Car</h3>
                            </div>
                            @include('templates.errors')
                            <form role="form" action="{{ route('admin.cars.update', $car->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                {{ method_field('PATCH') }}
                                <div class="card-body col-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" class="form-control"
                                               placeholder="Enter Car Name" name="name"
                                               value="{{$car->name}}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="type">Type</label>
                                        <select id="type" class="form-control"
                                               name="type" required>
                                            <option selected value="0">For Rent</option>
{{--                                            <option value="1">For Sell</option>--}}
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select id="status" class="form-control"
                                                name="status" required>
                                            <option {{ $car->status ? 'selected' : '' }} value="1">Rented</option>
                                            <option {{ $car->status == 0 ? 'selected' : '' }} value="0">Available for Rent</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea name="description" class="form-control" id="description">{{$car->description}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="number" id="price" class="form-control"
                                               placeholder="Enter price" name="price"
                                               value="{{$car->price}}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="model">Model</label>
                                        <input type="text" id="model" class="form-control"
                                               placeholder="Enter model" name="model"
                                               value="{{$car->model}}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" id="image" class="form-control"
                                               name="image"
                                               value="{{$car->image}}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="category_id">Category</label>
                                        <select id="category_id" class="form-control"
                                                name="category_id" required>
                                            @foreach(App\Models\Category::where('type', 1)->get() as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="color">Color</label>
                                        <input type="text" id="color" class="form-control"
                                               placeholder="Enter color" name="color"
                                               value="{{$car->color}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="engine_displacement">Engine Displacement</label>
                                        <input type="text" id="engine_displacement" class="form-control"
                                               placeholder="Enter Engine Displacement" name="engine_displacement"
                                               value="{{$car->engine_displacement}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="max_power">Max Power</label>
                                        <input type="text" id="max_power" class="form-control"
                                               placeholder="Enter Max Power" name="max_power"
                                               value="{{$car->max_power}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="max_torq">Max Torque</label>
                                        <input type="text" id="max_torq" class="form-control"
                                               placeholder="Enter Max Torque" name="max_torq"
                                               value="{{$car->max_torq}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="no_cylinder">Number of Cylinder</label>
                                        <input type="text" id="no_cylinder" class="form-control"
                                               placeholder="Enter Number of Cylinder" name="no_cylinder"
                                               value="{{$car->no_cylinder}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="no_gears">Number of Gears</label>
                                        <input type="text" id="no_gears" class="form-control"
                                               placeholder="Enter Number Gears" name="no_gears"
                                               value="{{$car->no_gears}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="seat_height">Seat Height</label>
                                        <input type="text" id="seat_height" class="form-control"
                                               placeholder="Enter Seat Height" name="seat_height"
                                               value="{{$car->seat_height}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="ground_clearance">Ground Clearance</label>
                                        <input type="text" id="ground_clearance" class="form-control"
                                               placeholder="Enter Ground Clearance" name="ground_clearance"
                                               value="{{$car->ground_clearance}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="weight">Weight</label>
                                        <input type="text" id="weight" class="form-control"
                                               placeholder="Enter Weight" name="weight"
                                               value="{{$car->weight}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="tank_capacity">Tank Capacity</label>
                                        <input type="text" id="tank_capacity" class="form-control"
                                               placeholder="Enter Tank Capacity" name="tank_capacity"
                                               value="{{$car->tank_capacity}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="mileage">Mileage</label>
                                        <input type="text" id="mileage" class="form-control"
                                               placeholder="Enter Mileage" name="mileage"
                                               value="{{$car->mileage}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="top_speed">Top Speed</label>
                                        <input type="text" id="top_speed" class="form-control"
                                               placeholder="Enter Top Speed" name="top_speed"
                                               value="{{$car->top_speed}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="fuel_type">Fuel Type</label>
                                        <input type="text" id="fuel_type" class="form-control"
                                               placeholder="Enter Fuel Type" name="fuel_type"
                                               value="{{$car->fuel_type}}">
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success btn-block">Edit Car</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

