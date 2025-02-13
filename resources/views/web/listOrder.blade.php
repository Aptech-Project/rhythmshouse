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
                    {{-- <h2>Orders List</h2> --}}
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

<div class="">
    <!-- Main content -->
    <section class="content" style="width: 150%;">
        <div class="">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Orders List</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="product" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Receiver</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Total</th>
                                <th>Detail</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($order as $c)
                                <tr>
                                    <td class="">{{$c->id}}</td>
                                    <td class="">{{$c->receiver}}</td>
                                    <td class="">{{$c->date}}</td>
                                    <td class="">{{$c->status}}</td>
                                    <td class="total-price">{{$c->totalmoney}}</td>
                                    <td style="color:blue" class="cart-total"><a href="{{ url('web/orderdetail/'.$c->id) }}">Click</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row" style="margin-right: 10px">
                        <div class="col-lg-4 offset-lg-8">
                            <div class="proceed-checkout">
                                {{-- @foreach($order as $p)
                                <ul>
                                    <li class="cart-total">Total <span>${{$ptotalmoney}}</span></li>
                                </ul>
                                @endforeach --}}
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
