<!-- {{ asset('') }} -->
@extends('web.layout.header') @section('title', 'RhythmHouse | Product') @section('content')
<!-- Breadcrumb Begin -->
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
.body-order{
    display: flex;
    padding-left: 50px;

}
.content-header{
    display: inline;
}
.content-input{
    margin: 0px !important;
    width: 400px;
}

</style>
<div >
    <section class="content-header" style="display:block;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Orders </h2>
                    <br>
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
<div class="body-order">
<div class=" content-input">
    <form id="formOrder" action="{{ url('web/postOrder') }}" method="post">
        {{-- @foreach($user as $u) --}}
        {{ csrf_field() }}
    <section class="content">
        <div class="">
            <div class="col-12">
                <div class="card">
                    
                    <!-- /.card-header -->
                    <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputPassword1">User Name</label>
                                <input type="text" class="form-control" name="username" id="exampleInput"  id="name" value="{{$user->name}}">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Phone</label>
                            <input type="text" class="form-control" name="phonenumber" id="phonenumber" value="{{$user->phonenumber}}">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="text" class="form-control" name="email" id="email" value="{{$user->email}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Address</label>
                                <input type="text" class="form-control"  name="address" id="address" value="{{$user->address}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Paymentmethod</label>
                                <select name="paymentmethod"  class="form-control" id="cars">
                                    <option value="1">SHIP COD</option>
                                    {{-- <option value="2">Saab</option>
                                    <option value="3">Opel</option> --}}
                                  </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Note</label>
                                <textarea type="text" class="form-control" name="note"  id="note" value=""></textarea>
                            </div>
 
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
</div>
<div class="">
    <!-- Main content -->
    <section class="content" style="width: 120%;">
        <div class="">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Cart Detail</h3>
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
                                @foreach($cartAll as $c)
                                <tr>
                                    <td class="">{{$c->id}}</td>
                                    <td class="cart-pic first-row"><img style="width: 30px;height:30px" src="{{ url('images/'.$c->image ) }} " alt=""></td>
                                    <td class="">
                                        {{$c->name}}
                                    </td>
                                    <td class="">{{$c->price}}</td>
                                    <td class="">{{$c->quanity}}</td>
                                    <td class="total-price">{{$c->price*$c->quanity}}</td>
                                    
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
                                    <li class="cart-total" id="submitOrder"><span><button type="submit" class="btn btn-primary">Order</button></span></li>
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
    </section>
</form>
</div>
</div>
</div>
  
@endsection

<!-- Write function here -->
@section('function')
<script>
    $(document).ready(function () {
        // $("#product").addClass("active");
        $("header:first").addClass("header--normal");
        $("footer:first").addClass("footer--normal");
    });
</script>
@endsection
