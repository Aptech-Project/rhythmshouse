<!-- {{ asset('') }} -->
@extends('web.layout.header') @section('title', 'RhythmHouse | Product') @section('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                    <span>Product</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Video Section Begin -->
<section class="videos spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title center-title">
                    <h2>Latest Releases</h2>
                    <h1>On trending</h1>
                </div>
                <div class="row">
                    <div class="videos__slider owl-carousel">
                        @foreach($lastestProducts as $p)
                        <div class="col-lg-3">
                            <div class="videos__item">
                                <a href="{{ url('web/productDetail/'.$p->id) }}">
                                    <div class="videos__item__pic set-bg" data-setbg="{{ url('images/'.$p->image) }}"></div>
                                </a>
                                <div class="videos__item__text">
                                    <h5>{{$p->name}}</h5>
                                    <ul>
                                        <li>{{$p->price}} $</li>
                                        <li>{{$p->artist}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Video Section End -->

<!-- Product Section Begin -->
<section class="discography spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title center-title">
                    <h2>Music List</h2>
                    <h1>Discography</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Sidebar start -->
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="col">
                    <!-- sidebar-search start-->
                    <br />
                    <div class="sidebar-search">
                        <form role="form" action="{{ url('web/index') }}" method="post" enctype="multipart/form-data">
                            <div class="input-group">
                                <input type="text" class="form-control search-menu" placeholder="Search..."/>
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                    <button type="submit" class="btn btn-light" style="padding: 0px;"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </span>
                                </div>
                            </div>  
                        </form>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-9" style="padding:0px">
                            @foreach($categories as $c)
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a href="{{ url('web/product/'.$c->categoryname) }}">
                                        {{$c->categoryname}}
                                    </a>
                                </li>
                            </ul>
                            @endforeach
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3" style="padding:0px">
                            @foreach($songCountByCategories as $sc)
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center" style="padding-left:15px">
                                    <span class=" badge-primary badge-pill">{{$sc->total}}</span>
                                </li>
                            </ul>
                            @endforeach
                        </div>
                    </div>
                    <!-- Category end -->
                </div>
            </div>
            <!-- Sidebar end -->
            <!-- Product list start -->
            <div class="col-lg-9 col-md-9 col-sm-9">
                @foreach($products as $p)
                <div class="row product-row">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <a href="{{ url('web/productDetail/'.$p->id) }}">
                            <img src="{{ url('images/'.$p->image) }}" width=280px/>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="song-artist">{{$p->artist}}</div>
                        <a href="{{ url('web/productDetail/'.$p->id) }}" style="color: #3a3a3a;"><div class="song-title">{{$p->name}}</div></a>
                        <img src="{{ asset('img/line2.png') }}"/>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 center">
                        <p style="font-family: Luckiest Guy; color: #006600; text-shadow: 1px 1px 1px white; font-size: 20px" class="center">Price: {{$p->price}}$</p>
                        <a href="#"><img src="{{ asset('img/buynow.png') }}" style="width:150px" alt="" /></a>
                        @if (Auth::User())
                            <a  onclick="addCart({{$p->id}})" >
                                <img src="{{ asset('img/addtocart.png') }}" style="width:150px" alt="" />
                            </a>
                        @else
                            <a  onclick="checklogin()" >
                                <img src="{{ asset('img/addtocart.png') }}" style="width:150px" alt="" />
                            </a>
                        @endif
                    </div>
                    
                    <!-- <div class="col-lg-12">
                        <div class="pagination__links">
                            <a href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">Next</a>
                        </div>
                    </div> -->
                </div>
                <br>
                @endforeach
                Showing {{($products->currentPage()-1)* $products->perPage()+($products->total() ? 1:0)}} to {{($products->currentPage()-1)*$products->perPage()+count($products)}}  of  {{$products->total()}}  Songs
                <div style="padding-left:36%">{{$products->links()}}</div>
            </div>
            <!-- Product list end -->
        </div>
    </div>
</section>
<!-- Product Section End -->
<script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
@endsection

<!-- Write function here -->
@section('function')
<script>
    $(document).ready(function () {
        $("#product").addClass("active");
        $("header:first").addClass("header--normal");
        $("footer:first").addClass("footer--normal");
    });
    function addCart($id){
        $.ajax({
            url: 'cart/addCart/'+$id,
            type: 'GET',
        }).done(function(response){
            console.log(response);
            var proCart = $('#cart');
            console.log(proCart);
            // proCart.append('<span id="countCart"class="count-prodct">'+response+'</span>');
            // $('#countCart').text(response);
            alertify.success('Add product success');
        })
    }
    function checklogin(){
    alertify.success('Please Login');
  }
</script>
@endsection
