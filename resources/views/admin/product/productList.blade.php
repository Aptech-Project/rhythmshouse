@extends('admin.layout.header')
@section('title', 'Rhythm House | Product List')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>All Products</h1>
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
                        <table id="productList" class="table table-bordered table-hover" style="text-align: center">
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
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
            });
        });
    </script>

    <script>
        var status = document.getElementById("evt-status").value;
        var remaining = document.getElementById("evt-remaining").value;
        function alertcancel() {
                alert("If Status is Canceled and Remaining is $0 => It's has been deleted. Else it will not");       
        }
    </script>
@endsection
