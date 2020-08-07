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
                            <tr>
                                <td class="">1</td>
                                <td class="">
                                    2020-07-28 23:19:00
                                </td>
                                <td class="">Chưa giao</td>
                                <td class="total-price">$240.00</td>
                                <td class=""><i class="fas fa-trash"></i> Delete</i></td>
                                <td class="" style="color: blue;"><i class="fas fa-pencil-alt"></i> Edit</td>
                                <td class="" style="color: blue;"><i class="fas fa-folder"></i> View</td>
                            </tr>
                            <tr>
                                <td class="">2</td>
                                <td class="">
                                    2020-07-28 23:19:00
                                </td>
                                <td class="">Đã giao</td>
                                <td class="total-price">$240.00</td>
                                <td class="close-td "><i class="fas fa-trash"></i> Delete</i></td>
                                <td class="close-td ""><i class="fas fa-pencil-alt"></i> Edit</td>
                                <td class="" style="color: blue;"><i class="fas fa-folder"></i> View</td>
                            </tr>
                            <tr>
                                <td class="">3</td>
                                <td class="">
                                    2020-07-28 23:19:00
                                </td>
                                <td class="">Chưa giao</td>
                                <td class="total-price ">$240.00</td>
                                <td class="close-td "><i class="fas fa-trash"></i> Delete</i></td>
                                <td class="close-td "style="color: blue;"><i class="fas fa-pencil-alt"></i> Edit</td>
                                <td class="" style="color: blue;"><i class="fas fa-folder"></i> View</td>
                            </tr>
                            <tr>
                                <td class="">4</td>
                                <td class="">
                                    2020-07-28 23:19:00
                                </td>
                                <td class="">Chưa giao</td>
                                <td class="total-price ">$240.00</td>
                                <td class="close-td " ><i class="fas fa-trash"></i> Delete</i></td>
                                <td class="close-td "style="color: blue;"><i class="fas fa-pencil-alt"></i> Edit</td>
                                <td class="" style="color: blue;"><i class="fas fa-folder"></i> View</td>
                            </tr>
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
