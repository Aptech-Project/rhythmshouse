@extends('web.layout.header')
@section('title', 'RhythmHouse | My Favorite')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header container">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-10">
                <h1>Favorite List</h1>
            </div>
            <div class="col-sm-2">
                <a href="{{ url('web/product/')}}">
                    <button style="width: 12vw;margin-top: 3vw;color: black;font-size: 1.5vw; background-color:white; border-color: indigo">
                        Browse All Products
                    </button><br>
                </a>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <h3 style="color: indigo"><b>My Favorite Product List</b></h3><br>
                    <table id="productList" class="table table-bordered table-hover" style="text-align: center">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Product Name</th>
                            <th>Artist</th>
                            <th>Author</th>
                            <th>Price</th>
                            <th>Image</th>
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
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
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
@section('function')
<script>
    $(document).ready(function(){
        $("header:first").addClass("header--normal");
        $("footer:first").addClass("footer--normal");
        $("#productList").DataTable({
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
