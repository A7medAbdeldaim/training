@extends('templates.admin_layout')
@section('title', 'Edit Lesson')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Lesson</h1>
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
                                <h3 class="card-title">Edit a New Lesson</h3>
                            </div>
                            @include('templates.errors')
                            <form role="form" action="{{ route('admin.lessons.update', ['id' =>$lesson->id, 'training_id' => $training->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                {{ method_field('PATCH') }}
                                <div class="card-body col-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" class="form-control"
                                               placeholder="Enter Lesson Name" name="name"
                                               value="{{ $lesson->name }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea id="description" class="form-control"
                                                  placeholder="Enter Lesson Email" name="description" required>
                                            {{ $lesson->description }}
                                        </textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" id="image" class="form-control"
                                               name="image"
                                               value="{{ $lesson->image }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="video">Video</label>
                                        <input type="file" id="video" class="form-control"
                                               name="video"
                                               value="{{ $lesson->video }}">
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success btn-block">Edit Lesson</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

