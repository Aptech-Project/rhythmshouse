@extends('admin.layout.header')
@section('title', 'Order Detail')
@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>List Orders</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Lists Orders</li>
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
                    <table id="product" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th class="">Date Order</th>
                            <th>Status</th>
                            <th>Total</th>
                            <th>Delete</th>
                            <th>Edit</th>
                            <th>Detail</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $o)
                            <tr>
                                <td class="">{{ $o->id }}</td>
                                <td class="">
                                    {{ $o->date}}
                                </td>
                                <td class="">{{ $o->status }}</td>
                                <td class="total-price">{{ $o->total_price }}</td>
                                <td id="deleteOrder" class=""><i class="fas fa-trash"></i> Delete</i></td>
                                <td id="editOrder" class="" style="color: blue;"><i class="fas fa-pencil-alt"></i> Edit</td>
                                <td id="viewOrder" class="" style="color: blue;"><i class="fas fa-folder"></i> View</td>
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
</section>

@endsection
