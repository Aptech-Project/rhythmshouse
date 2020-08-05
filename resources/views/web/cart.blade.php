@extends('web.layout.header')
@section('title', 'RhythmHouse | Cart')
@section('content')
<link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/css/elegant-icons.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad" style="margin-bottom: 547px;margin-top:92px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table" id="list-cart">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Save</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cartdetail as $c)
                                    <tr>
                                        <td class="cart-pic first-row"><img style="width: 170px;height:170px" src="{{ url('img/discography/'.$c->image ) }} " alt=""></td>
                                        <td class="cart-title first-row">
                                            <h5>{{ $c -> name }}</h5>
                                        </td>
                                        <td class="p-price first-row">{{ $c -> price }}</td>
                                        <td class="qua-col first-row">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                <input type="text" value="{{$c->quanity}}">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-price first-row">{{ $c -> price * $c->quanity}}</td>
                                        <td class="close-td first-row"><i class="ti-close"></i></td>
                                        <td class="close-td first-row""><i class="ti-save"></i></td>
                                    </tr>
                                
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 offset-lg-8">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Subtotal <span>$240.00</span></li>
                                    <li class="cart-total">Total <span>$240.00</span></li>
                                </ul>
                                <a href="#" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
           <!-- Js Plugins -->
           <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
           <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
           <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
           <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
           <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
           <script src="{{ asset('assets/js/jquery.zoom.min.js') }}"></script>
           <script src="{{ asset('assets/js/jquery.dd.min.js') }}"></script>
           <script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
           {{-- <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script> --}}
           <script src="{{ asset('assets/js/main.js') }}"></script>
   
@endsection

<!-- Write function here -->
@section('function')
<script>
    $(document).ready(function(){
        $("#cart").addClass("active");
    });
</script>
@endsection
