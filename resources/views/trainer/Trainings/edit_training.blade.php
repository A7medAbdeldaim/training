@extends('templates.admin_layout')
@section('title', 'Edit Training')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Training</h1>
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
                                <h3 class="card-title">Edit a New Training</h3>
                            </div>
                            @include('templates.errors')
                            <form role="form" action="{{ route('trainers.trainings.update', $training->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                {{ method_field('PATCH') }}
                                <div class="card-body col-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" class="form-control"
                                               placeholder="Enter Training Name" name="name"
                                               value="{{ $training->name }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea id="description" class="form-control"
                                                  placeholder="Enter Training Email" name="description" required>
                                            {{ $training->description }}
                                        </textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="category_id">Category</label>
                                        <select class="form-control" id="category_id"
                                                name="category_id"
                                                required>
                                            @foreach($categories as $category)
                                                @if ($category->id == $training->category_id)
                                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                                    @continue
                                                @endif
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="trainer_id">Trainer</label>
                                        <select class="form-control" id="trainer_id"
                                                name="trainer_id"
                                                required>
                                            @foreach($trainers as $trainer)
                                                @if ($trainer->id == $training->trainer_id)
                                                    <option value="{{ $trainer->id }}" selected>{{ $trainer->name }}</option>
                                                    @continue
                                                @endif
                                                <option value="{{ $trainer->id }}">{{ $trainer->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="number" id="price" class="form-control"
                                               placeholder="Enter Training Price" name="price"
                                               value="{{ $training->price }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" id="image" class="form-control"
                                               name="image"
                                               value="{{ $training->image }}">
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success btn-block">Edit Training</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

