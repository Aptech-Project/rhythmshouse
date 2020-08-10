@extends('admin.layout.header')
@section('title', 'Order Detail')
@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Orders Detail</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Orders Detail</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                
                <!-- /.card-header -->
                <div class="card-body">
                    <form >
                        
                        <div class="form-group">
                          <label for="exampleInputEmail1">ID</label>
                          <input type="text" class="form-control" disabled id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $order->id }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Date</label>
                          <input type="text" class="form-control" disabled id="exampleInputPassword1" value="{{ $order->date }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">User Name</label>
                            <input type="text" class="form-control" disabled id="exampleInputPassword1" value="{{ $order->receiver }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="text" class="form-control" disabled id="exampleInputPassword1" value="{{ $order->email }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Address</label>
                            <input type="text" class="form-control" disabled id="exampleInputPassword1" value="{{ $order->address }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Phone</label>
                            <input type="text" class="form-control" disabled id="exampleInputPassword1" value="{{ $order->phonenumber }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Note</label>
                            <textarea type="text" class="form-control" disabled id="exampleInputPassword1" value="{{ $order->note }}"></textarea>
                        </div>
                        <a href="{{ url('admin/orderdetail/'.$order->id) }}" type="button" class="btn btn-primary">Edit</a>
                      </form>
                
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Thông tin đơn hàng</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="product" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Product ID</th>
                            <th>Image</th>
                            <th class="">Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($orderDetail as $or)
                            <tr>
                                <td class="">{{ $or->id}}</td>
                                <td class="cart-pic first-row"><img style="width: 30px;height:30px" src="{{ url('images/'.$or->image ) }} "  alt=""></td>
                                <td class="">
                                    {{ $or->name}}
                                </td>
                                <td class="">${{ $or->price}}</td>
                                <td class="">{{ $or->quantity}}</td>
                             <td class="total-price">${{ $or->price* $or->quantity}}</td>
                                
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
                <div class="row" style="margin-right: 10px">
                    <div class="col-lg-4 offset-lg-8">
                        <div class="proceed-checkout">
                            @foreach($totalPrice as $p)
                            <ul>
                            <li class="cart-total">Total <span>${{$p}}</span></li>
                            </ul>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
<style>
    .proceed-checkout ul {
	border: 2px solid #ebebeb;
	background: #f3f3f3;
	padding-left: 25px;
	padding-right: 25px;
	padding-top: 16px;
	padding-bottom: 20px;
}

.proceed-checkout ul li {
	list-style: none;
	font-size: 16px;
	font-weight: 700;
	color: #252525;
	text-transform: uppercase;
	overflow: hidden;
}

.proceed-checkout ul li.subtotal {
	font-weight: 400;
	text-transform: capitalize;
	border-bottom: 1px solid #ffffff;
	padding-bottom: 14px;
}

.proceed-checkout ul li.subtotal span {
	font-weight: 700;
}

.proceed-checkout ul li.cart-total {
	padding-top: 10px;
}

.proceed-checkout ul li.cart-total span {
	color: #e7ab3c;
}

.proceed-checkout ul li span {
	float: right;
}

.proceed-checkout .proceed-btn {
	font-size: 14px;
	font-weight: 700;
	color: #ffffff;
	background: #252525;
	text-transform: uppercase;
	padding: 15px 25px 14px 25px;
	display: block;
	text-align: center;
}    
</style>
</section>

@endsection
