@extends('admin.layout.header')
@section('title', 'Users index')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>User Management Table</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">DataTables</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">DataTable with minimal features & hover style</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="user" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Birthday</th>
                                <th>Phone Number</th>
                                <th>Role</th>
                                <th>Img1</th>
                                <th>Img2</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $us)
                            <tr>
                                <td>{{ $us->id }}</td>
                                <td>{{ $us->name }}</td>
                                <td>{{ $us->email}}</td>
                                <td>{{ $us->username}}</td>
                                <td>{{ $us->address}}</td>
                                <td>{{ $us->birthday}}</td>
                                <td>{{ $us->phonenumber}}</td>
                                <td>{{ $us->role}}</td>
                                <td class="text-center"><img width="100px" src="{{ url('images/'.$us->img1) }}"/></td>
                                <td class="text-center"><img width="100px" src="{{ url('images/'.$us->img2) }}"/></td>
                                <td class="text-right">
                                    <a class="btn btn-primary btn-sm" href="{{ url('admin/user/userDetail/'.$us->id) }}">
                                        <i class="fas fa-folder"></i>
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
$(function() {
    $('#user').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
    });
});
</script>
@endsection