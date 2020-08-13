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
<style>
    .footer.spad {
        padding-top: 300px;
    padding-bottom: 60px;
    
}
.proceed-checkout a:not([href]):hover{
        color: red;   
    }
</style>
<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" id="list-cart">
                <div class="cart-table">
                    <table class="">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th class="p-name">Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cartAll as $c)
                            <tr style="border:1px solid #ebebeb !important;">
                                <td class="cart-pic first-row"><img style="width: 90px;height:90px"
                                        src="{{ url('images/'.$c->image ) }} " alt=""></td>
                                <td class="cart-title first-row">
                                    <h5>{{ $c -> name }}</h5>
                                </td>
                                <td class="p-price first-row">{{ $c -> price }}</td>
                                <td class="qua-col first-row">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input id="{{$c->id}}" type="text" value="{{$c->quanity}}">
                                        </div>
                                    </div>
                                </td>
                                <td class="p-price first-row">${{ $c -> price * $c->quanity}}</td>
                                {{-- <td class="close-td first-row"><a href="{{ url('web/cart/delete/'.$c->id) }}"
                                class="ti-close"></a></td> --}}
                                <td class="close-td first-row"><i onclick="deleteCartItem( {{ $c->id }} )"
                                        class="ti-close"></i></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 offset-lg-8">
                        <div class="proceed-checkout">
                            @foreach($totalPrice as $p)
                            <ul>
                                <li class="cart-total">Total <span> ${{ $p }}</span></li>
                            </ul>
                            @if($p==0)
                            <a onclick="checkCart()" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            @else
                            <a href="{{ url('web/order') }}" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Js Plugins -->
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>

{{-- <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script> --}}
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
    var proQty = $('.pro-qty');
                proQty.prepend('<span class="dec qtybtn">-</span>');
                proQty.append('<span class="inc qtybtn">+</span>');
                    proQty.on('click', '.qtybtn', function () {
                    var $button = $(this);
                    var oldValue = $button.parent().find('input').val();
                    var id = $button.parent().find('input').attr('id');
                    
                    if ($button.hasClass('inc')) {
                        var newVal = parseFloat(oldValue) + 1;
                    } else {
                        // Don't allow decrementing below zero
                        if (oldValue > 1) {
                            var newVal = parseFloat(oldValue) - 1;
                        } else {
                            newVal = 1;
                                alertify.success('Click x button to remove this product');
                        }
                    }
                    $button.parent().find('input').val(newVal);
                    getAjax(id,newVal)
                    });
                function getAjax(id,newVal){
                    $.ajax({
                       url:'changeQuanity/'+id+'/'+newVal,
                       type:'Get',
                    }).done(function(data){
                        $("#list-cart").empty();
                        $("#list-cart").html(data);
                        showIconPlus();
                    })
                }

                function showIconPlus() {
                    var proQty = $('.pro-qty');
                    proQty.prepend('<span class="dec qtybtn">-</span>');
                    proQty.append('<span class="inc qtybtn">+</span>');
                    proQty.on('click', '.qtybtn', function () {
                        var $button = $(this);
                        var oldValue = $button.parent().find('input').val();
                        var id = $button.parent().find('input').attr('id');
                        if ($button.hasClass('inc')) {
                            var newVal = parseFloat(oldValue) + 1;
                        } else {
                            // Don't allow decrementing below zero
                            if (oldValue > 1) {
                                var newVal = parseFloat(oldValue) - 1;
                            } else {
                                newVal = 1;
                                alertify.success('Click x button to remove this product');
                            }
                        }
                        $button.parent().find('input').val(newVal);
                        getAjax(id,newVal)
                    });
                }

               function deleteCartItem(id){
                   console.log(id);
                   $.ajax({
                       url:'delete/'+id ,
                       type:'Get',
                   }).done(function(data){
                        $("#list-cart").empty();
                        $("#list-cart").html(data);
                        showIconPlus();
                   })
               };
               
</script>
@endsection

<!-- Write function here -->
@section('function')
<script>
    $(document).ready(function(){
        $("#cart").addClass("active");
        $("header:first").addClass("header--normal");
        $("footer:first").addClass("footer--normal");
    });
    function checkCart(){
        // alert("Please add prodcut")
        alertify.success('Please add prodcut');
    }
</script>
@endsection