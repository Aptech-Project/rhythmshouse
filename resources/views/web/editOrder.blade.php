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
                    <h2>Orders Detail Edit</h2>
                    <br>
                </div>
                <div class="col-sm-6">
                   
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
<div class="body-order" style="    padding-left: 20%;">
<div class=" content-input">
    <form id="formOrder" action="{{ url('web/postEditOrder') }}" method="post">
        {{-- @foreach($user as $u) --}}
        {{ csrf_field() }}
    <section class="content">
        <div class="">
            <div class="col-12">
                <div class="card" style="width:200%">
                    
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if (count($errors) > 0)
                        <div class="form-group" style="display: none;">
                            <label for="exampleInputPassword1">Id</label>
                            <input type="text" class="form-control" name="id" id="id" value="{{old("id")}}">
                            
                        </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{old('name')}}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Phone</label>
                                <input type="text" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" id="phonenumber" value="{{old('phonenumber')}}">
                                @error('phonenumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{old('email')}}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Address</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror"  name="address" id="address" value="{{old('address')}}">
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Paymentmethod</label>
                                <select name="paymentmethod" disabled  class="form-control" id="cars">
                                    <option value="1">SHIP COD</option>
                                    {{-- <option value="2">Saab</option>
                                    <option value="3">Opel</option> --}}
                                  </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Status</label>
                                <select name="status" id="status" class="form-control" >
                                    @if(old('status')=='1')
                                    <option selected>Processing</option>
                                    <option value="2">Canceled</option>
                                    @else
                                    <option selected>Canceled</option>
                                    <option value="1">Processing</option>
                                    @endif
                                  </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Note</label>
                                <textarea type="text" class="form-control" name="note"  id="note" value="{{old('note')}}">{{old('note')}}</textarea>
                            </div>
                        @else
                        <div class="form-group" style="display: none;">
                            <label for="exampleInputPassword1">Id</label>
                            <input type="text" class="form-control" name="id" id="id" value="{{$order->id}}">
                            
                        </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{$order->receiver}}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Phone</label>
                                <input type="text" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" name="phonenumber" id="phonenumber" value="{{$order->phonenumber}}">
                                @error('phonenumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{$order->email}}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Address</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror"  name="address" id="address" value="{{$order->address}}">
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Paymentmethod</label>
                                <select name="paymentmethod" disabled  class="form-control" id="cars">
                                    <option value="1">SHIP COD</option>
                                    {{-- <option value="2">Saab</option>
                                    <option value="3">Opel</option> --}}
                                  </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Status</label>
                                <select name="status" id="status" class="form-control" >
                                    <option value="1">Processing</option>
                                    <option value="2">Canceled</option>
                                  </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Note</label>
                                <textarea type="text" class="form-control" name="note"  id="note" value="">{{$order->note}}</textarea>
                            </div>
                        @endif
                        
                            <button type="submit" class="btn btn-primary">Save</button>
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
<div class="">
    <!-- Main content -->

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
