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
                    {{-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Orders Detail</li> --}}
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
                    <form>
                        <div class="form-group">
                            <label for="exampleInputPassword1">User Name</label>
                            <input type="text" class="form-control"  id="exampleInputPassword1" value="Phong">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Phone</label>
                          <input type="text" class="form-control"  id="exampleInputPassword1" value="0366624443">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="text" class="form-control"  id="exampleInputPassword1" value="phong@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Address</label>
                            <input type="text" class="form-control"  id="exampleInputPassword1" value="Tân Bình, Hồ Chí Minh">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Note</label>
                            <textarea type="text" class="form-control"  id="exampleInputPassword1" value="2020-07-28 23:19:00"></textarea>
                        </div>
                        {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
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
                            <tr>
                                <td class="">1</td>
                                <td class="cart-pic first-row"><img style="width: 30px;height:30px" src="{{ asset('img/discography/disco-1.jpg' ) }} " alt=""></td>
                                <td class="">
                                    UNTOLD FESTIVAL 2020
                                </td>
                                <td class="">$60.00</td>
                                <td class="">2</td>
                                <td class="total-price">$60.00</td>
                                
                            </tr>
                            <tr>
                                <td class="">2</td>
                                <td class="cart-pic first-row"><img style="width: 30px;height:30px" src="{{ asset('img/discography/disco-1.jpg' ) }} " alt=""></td>
                                <td class="">
                                    UNTOLD FESTIVAL 2020
                                </td>
                                <td class="">$60.00</td>
                                <td class="">3</td>
                                <td class="total-price">$60.00</td>
                                
                            </tr>
                            <tr>
                                <td class="">3</td>
                                <td class="cart-pic first-row"><img style="width: 30px;height:30px" src="{{ asset('img/discography/disco-1.jpg' ) }} " alt=""></td>
                                <td class="">
                                    UNTOLD FESTIVAL 2020
                                </td>
                                <td class="">$60.00</td>
                                <td class="">2</td>
                                <td class="total-price">$60.00</td>
                                
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
                <div class="row" style="margin-right: 10px">
                    <div class="col-lg-4 offset-lg-8">
                        <div class="proceed-checkout">
                            <ul>
                                <li class="subtotal">Subtotal <span>$240.00</span></li>
                                <li class="cart-total">Total <span>$240.00</span></li>
                                <li class="cart-total"><span><button type="submit" class="btn btn-primary">Đặt hàng</button></span></li>


                            </ul>
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
