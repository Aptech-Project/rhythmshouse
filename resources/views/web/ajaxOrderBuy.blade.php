<form id="formOrder" style="display:flex" action="{{ url('web/postOrderBuyNow') }}" method="post">
    <div class=" content-input" >
            {{-- @foreach($user as $u) --}}
            {{ csrf_field() }}
        <section class="content">
            <div class="">
                <div class="col-12" id="list-cart">
                    <div class="card">
                        
                        <!-- /.card-header -->
                        <div class="card-body">
                          @if (count($errors) > 0)
                            <div class="form-group">
                                <label for="exampleInputPassword1">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"  id="name" value="{{old('name')}}">
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
                                <select name="paymentmethod"  class="form-control" id="cars">
                                    <option value="1">SHIP COD</option>
                                    {{-- <option value="2">Saab</option>
                                    <option value="3">Opel</option> --}}
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Note</label>
                                <textarea type="text" class="form-control @error('note') is-invalid @enderror" name="note"  id="note" value="{{old('note')}}">{{old('note')}}</textarea>
                            </div>
                          @else
                            <div class="form-group">
                                <label for="exampleInputPassword1">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"  id="name" value="{{$user->name}}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Phone</label>
                                <input type="text" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" id="phonenumber" value="{{$user->phonenumber}}">
                                @error('phonenumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{$user->email}}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Address</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror"  name="address" id="address" value="{{$user->address}}">
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
                                <textarea type="text" class="form-control @error('note') is-invalid @enderror" name="note"  id="note" value=""></textarea>
                                @error('note')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            @endif
    
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
        <section class="content" style="width: 100%;min-width: 845px;">
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
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach($newProduct as $c) --}}
                                    <tr>
                                        <td class="">{{$newProduct->id}}</td>
                                        <td class="cart-pic first-row"><img style="width: 30px;height:30px" src="{{ url('images/'.$newProduct->image ) }} " alt=""></td>
                                        <td class="">
                                            {{$newProduct->name}}
                                        </td>
                                        <td class="">{{$newProduct->price}}</td>

                                        <td style="text-align: center">
                                            <div class ="pro-qty" style="display: flex;">
                                                
                                                <a id = "{{$newProduct->id}}">{{$quanity}}</a>

                                            </div>
                                        </td>
                                        <td class="total-price">{{$newProduct->price*$quanity}}</td>
                                        <td class="close-td first-row"><a href="{{ url('web/index') }}" class="ti-close">Delete</a></td>
                                    </tr>
                                    {{-- @endforeach --}}
                                </tbody>
                                <input type="text" class="form-control" style="display: none;" name="productid" id="productid"  value="{{$newProduct->id}}">
                                <input type="text" class="form-control" style="display: none;" name="quanity" id="quanity" value="{{$quanity}}">                                </table>
                        </div>
                        <div class="row" style="margin-right: 10px">
                            <div class="col-lg-4 offset-lg-8">
                                <div class="proceed-checkout">
                                    
                                    <ul>
                                        <li class="cart-total" id ='buynow'>Total <span>{{$newProduct->price*$quanity}}</span></li>
                                        <li class="cart-total" id="submitOrder"><span><button type="submit" class="btn btn-primary">Order</button></span></li>
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
        </section>
    </div>
</form>