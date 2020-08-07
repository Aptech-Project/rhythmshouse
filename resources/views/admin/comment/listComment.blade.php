@extends('admin.layout.header')
@section('title', 'Order Detail')
@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>List FeedBack</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Lists FeedBack</li>
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
                            <th class="">Product</th>
                            <th>User Name FeedBack</th>
                            <th>Rate</th>
                            <th>Date</th>
                            <th>FeedBack</th>
                            <th>Content Reply </th>
                            <th>Reply</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="">1</td>
                                <td class="">
                                    David Guetta Miami Ultra
                                </td>
                                <td class="">Phong</td>
                                <td class="">5</td>
                                <td class="total-price">2020-07-28 23:19:00</td>
                                <td class="" style="color:blue;"> Sản phẩm tốt</i></td>
                                <td class="""> Cảm ơn bạn</td>
                                <td class="" style="color:blue;">Reply </td>
                                <td class=""><i class="fas fa-trash"></i> Delete</i></td>
                            </tr>
                            <tr>
                                <td class="">2</td>
                                <td class="">
                                    David Guetta Miami Ultra
                                </td>
                                <td class="">Phong</td>
                                <td class="">5</td>
                                <td class="total-price">2020-07-28 23:19:00</td>
                                <td class="" style="color:blue;"> Sản phẩm tốt</i></td>
                                <td class="""> Cảm ơn bạn</td>
                                <td class="" style="color:blue;">Reply </td>
                                <td class=""><i class="fas fa-trash"></i> Delete</i></td>
                            </tr><tr>
                                <td class="">3</td>
                                <td class="">
                                    David Guetta Miami Ultra
                                </td>
                                <td class="">Phong</td>
                                <td class="">5</td>
                                <td class="total-price">2020-07-28 23:19:00</td>
                                <td class="" style="color:blue;"> Sản phẩm tốt</i></td>
                                <td class="""> Cảm ơn bạn</td>
                                <td class="" style="color:blue;" >Reply </td>
                                <td class=""><i class="fas fa-trash"></i> Delete</i></td>
                            </tr><tr>
                                <td class="">4</td>
                                <td class="">
                                    David Guetta Miami Ultra
                                </td>
                                <td class="">Phong</td>
                                <td class="" >5</td>
                                <td class="total-price">2020-07-28 23:19:00</td>
                                <td class="" style="color:blue;"> Sản phẩm tốt</i></td>
                                <td class="""> Cảm ơn bạn</td>
                                <td class="" style="color:blue;">Reply </td>
                                <td class=""><i class="fas fa-trash"></i> Delete</i></td>
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
