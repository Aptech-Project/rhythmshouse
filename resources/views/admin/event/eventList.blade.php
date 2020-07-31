@extends('admin.layout.header')
@section('title', 'event index')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Event Management </h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="event" class="table table-bordered table-hover" style="text-align: center">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>FromDate</th> 
                                <th>ToDate</th>                            
                                <th>Status</th>
                                <th>Views</th>
                                <th>Total Dept</th>
                                <th>UserName</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($events as $e)
                            <tr>
                                <td style="vertical-align: middle">{{ $e->id }}</td>
                                <td style="vertical-align: middle">{{ $e->name }}</td>
                                <td style="vertical-align: middle">{{ $e->fromdate }}</td>
                                <td style="vertical-align: middle">{{ $e->todate }}</td>
                                <td style="vertical-align: middle">{{ $e->status }}</td>
                                <td style="vertical-align: middle">{{ $e->views }}</td>
                                <td style="vertical-align: middle">${{ $e->totaldept }}</td>
                                <td style="vertical-align: middle">{{ $e->username }}</td>
                                <td class="text-center">
                                    <a class="btn btn-primary btn-sm" href="{{ url('admin/event/eventView/'.$e->id) }}">
                                        <i class="fas fa-eye"></i> 
                                    </a><br><br>
                                    <a class="btn btn-info btn-sm" href="{{ url('admin/event/eventUpdate/'.$e->id) }}">
                                        <i class="fas fa-pencil-alt"></i> 
                                    </a><br><br>
                                    <a class="btn btn-danger btn-sm" href="{{ url('admin/event/deleteEvent/'.$e->id) }}">
                                        <i class="fas fa-trash"></i> 
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection
@section('script-section')
    <script>
        $(function () {
            $('#event').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
            });
        });
    </script>
@endsection
