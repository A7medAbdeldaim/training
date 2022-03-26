@extends('templates.admin_layout')
@section('title', 'Add Lesson')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Lesson</h1>
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
                                <h3 class="card-title">Add a New Lesson</h3>
                            </div>
                            @include('templates.errors')
                            <form role="form" action="{{ route('admin.lessons.store', ['training_id' => $training->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body col-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" class="form-control"
                                               placeholder="Enter Lesson Name" name="name"
                                               value="{{old('name')}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea id="description" class="form-control"
                                                  placeholder="Enter Lesson Description" name="description" required>
                                            {{old('description')}}
                                        </textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" id="image" class="form-control"
                                               name="image"
                                               value="{{old('image')}}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="video">Video</label>
                                        <input type="file" id="video" class="form-control"
                                               name="video"
                                               value="{{old('video')}}" required>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success btn-block">Add Lesson</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

