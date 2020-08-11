@extends('admin.layout.header')
@section('title', 'product index')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Product List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Product List</li>
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
                        <h3 class="card-title">All product in page</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="productList" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Product Name</th>
                                <th>Artist</th>
                                <th>Author</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $p)
                            <tr>
                                <td width="10%">{{ $p->id }}</td>
                                <td width="15%">{{ $p->name }}</td>
                                <td width="15%">{{ $p->artist }}</td>
                                <td width="15%">{{ $p->author }}</td>
                                <td width="5%">{{ $p->price }}</td>
                                <td class="text-center"><img width="100px" src="{{ url('images/'.$p->image) }}"/></td>
                                <td class="text-center">
                                    <a class="btn btn-primary btn-sm" href="{{ url('admin/product/productDetail/'.$p->id) }}">
                                        <i class="fas fa-folder"></i> View
                                    </a>
                                    <a class="btn btn-info btn-sm" href="{{ url('admin/product/productUpdate/'.$p->id) }}">
                                        <i class="fas fa-pencil-alt"></i> Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="{{ url('admin/product/productDelete/'.$p->id) }}">
                                        <i class="fas fa-trash"></i> Hide
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
            $('#productList').DataTable({
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
