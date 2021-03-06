@extends('templates.admin_layout')
@section('title', 'Add Trainee')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Trainee</h1>
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
                                <h3 class="card-title">Add a New Trainee</h3>
                            </div>
                            @include('templates.errors')
                            <form role="form" action="{{ route('admin.trainees.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body col-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" class="form-control"
                                               placeholder="Enter Trainee Name" name="name"
                                               value="{{old('name')}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" class="form-control"
                                               placeholder="Enter Trainee Email" name="email"
                                               value="{{old('email')}}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Trainee Password</label>
                                        <input type="password" class="form-control" id="password"
                                               placeholder="Trainee Password" name="password"
                                               required>
                                    </div>
                                    <div class="form-group">
                                        <label
                                            for="confirm_password">Re-enter Trainee Password</label>
                                        <input type="password" class="form-control" id="confirm_password"
                                               placeholder="Re-enter Trainee Password"
                                               name="password_confirmation" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" id="image" class="form-control"
                                               name="image"
                                               value="{{old('image')}}" required>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success btn-block">Add Trainee</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

