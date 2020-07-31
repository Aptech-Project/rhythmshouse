@extends('admin.layout.header')
@section('title', 'parter dept')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Partner Dept</h1>
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
                        <table id="dept" class="table table-bordered table-hover" style="text-align: center">
                            <thead>
                            <tr>
                                <th>PartnerName</th>
                                <th>EventId</th>
                                <th>EventName</th>
                                <th>RegisterDate</th>
                                <th>Views</th> 
                                <th>Total Dept</th>
                                <th>Has paid</th>
                                
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($dept as $e)
                            <tr>
                                <td>{{ $e->username }}</td>
                                <td>{{ $e->id }}</td>
                                <td>{{ $e->name }}</td>
                                <td>{{ $e->registerdate }}</td>
                                <td>{{ $e->views }}</td>
                                <td>${{ $e->totaldept }}</td>
                                <td>${{ $e->haspaid }}</td>
                                
                                <td class="text-center">  
                                    <a class="btn btn-info btn-sm" href="{{ url('admin/revenue/deptUpdate/'.$e->id) }}">
                                        <i class="fas fa-pencil-alt"></i> Update
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
            $('#dept').DataTable({
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

