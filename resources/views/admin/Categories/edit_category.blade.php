@extends('templates.admin_layout')
@section('title', 'Edit Category')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Category</h1>
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
                                <h3 class="card-title">Edit a New Category</h3>
                            </div>
                            @include('templates.errors')
                            <form role="form" action="{{ route('admin.categories.update', $category->id) }}" method="post">
                                @csrf
                                {{ method_field('PATCH') }}
                                <div class="card-body col-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" class="form-control"
                                               placeholder="Enter Category Name" name="name"
                                               value="{{$category->name}}" required>
                                    </div>
                                </div>

                                <div class="card-body col-6">
                                    <div class="form-group">
                                        <label for="type">Type</label>
                                        <select id="type" class="form-control" name="type">
                                            <option value=0>Bike</option>
                                            <option value=1>Car</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success btn-block">Edit Category</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

