@extends('admin.layout.header')
@section('title', 'category list')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Category List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Category List</li>
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
                    <form class="form-inline" style="padding: 20px" role="form" action="{{ url('admin/category/postCategoryCreate') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <label for="txt-name">Add Category</label>
                        <div class="form-group mx-sm-3 mb-2">
                            <input type="text" class="form-control" name="categoryname" placeholder="Input Category Name">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Add</button>
                    </form>
                    <!-- /.add category -->
                    <div class="card-header">
                        <h3 class="card-title">All Category</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="category" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Category Id</th>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($category as $c)
                            <tr>
                                <td>{{ $c->id }}</td>
                                <td>{{ $c->categoryname }}</td>
                                <td class="text-center">
                                    <a class="btn btn-info btn-sm" href="{{ url('admin/category/categoryUpdate/'.$c->id) }}">
                                        <i class="fas fa-pencil-alt"></i> Edit
                                    </a>
                                    &ensp;
                                    <!-- <a class="btn btn-danger btn-sm" href="{{ url('admin/category/categoryDelete/'.$c->id) }}">
                                        <i class="fas fa-trash"></i> Hide
                                    </a> -->
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
            $('#category').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>
@endsection
