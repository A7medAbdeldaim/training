@extends('templates.admin_layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Trainers</h1>
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
                                    Trainers
                                    <span class="float-right">
                                        <a href="{{ route('admin.trainers.create') }}" class="btn btn-sm btn-success">
                                            <i class="fa fa-plus-circle"></i> Add Trainer
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
                                        <th>Date</th>
                                        <th>Control</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($trainers as $k=>$trainer)
                                        <tr>
                                            <td>{{ (++$k) }}</td>
                                            <td>{{ $trainer->name }}</td>
                                            <td>{{ \Carbon\Carbon::parse($trainer->created_at)->format('M d, Y') }}</td>
                                            <td>
                                                <a href="{{ route('admin.trainers.edit', $trainer->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                                <a href="{{ route('admin.trainers.destroy', $trainer->id) }}" class="btn btn-sm btn-danger">Delete</a>
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
