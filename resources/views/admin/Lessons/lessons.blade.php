@extends('templates.admin_layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1> Lessons</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title w-100">
                                     Lessons
                                    <span class="float-right">
                                        <a href="{{ route('admin.lessons.create', ['training_id' => $training->id]) }}" class="btn btn-sm btn-success">
                                            <i class="fa fa-plus-circle"></i> Add Lesson
                                        </a>
                                    </span>
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Training Name</th>
                                        <th>Control</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($lessons as $k=>$lesson)
                                        <tr>
                                            <td>{{ (++$k) }}</td>
                                            <td>{{ $lesson->name }}</td>
                                            <td>{{ $lesson->training->name }}</td>
                                            <td>
                                                <a href="{{ route('admin.lessons.edit', ['id' => $lesson->id, 'training_id' => $training->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                                                <a href="{{ route('admin.lessons.destroy', ['id' => $lesson->id, 'training_id' => $training->id]) }}" class="btn btn-sm btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@endsection
