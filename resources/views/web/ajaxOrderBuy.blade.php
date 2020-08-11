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
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Name</label>
                                    <input type="text" class="form-control" name="username"  id="name" value="{{$user->name}}">
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
        <section class="content" style="width: 100%;">
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