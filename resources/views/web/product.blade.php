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
                        <div class="col-lg-3">
                            <div class="videos__item">
                                <div class="videos__item__pic set-bg" data-setbg="{{ asset('img/videos/videos-1.jpg') }}">
                                    <!-- <a href="https://www.youtube.com/watch?v=yJg-Y5byMMw?autoplay=1" class="play-btn video-popup"><i class="fa fa-play"></i></a> -->
                                </div>
                                <div class="videos__item__text">
                                    <h5>Electric Love Festival 2019 - The Opening Ceremony</h5>
                                    <ul>
                                        <li>12.00 $</li>
                                        <li>Dec 17, 2019</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="videos__item">
                                <div class="videos__item__pic set-bg" data-setbg="{{ asset('img/videos/videos-2.jpg') }}">
                                    <!-- <a href="https://www.youtube.com/watch?v=K4DyBUG242c?autoplay=1" class="play-btn video-popup"><i class="fa fa-play"></i></a> -->
                                </div>
                                <div class="videos__item__text">
                                    <h5>Tiësto - Live Electric Daisy Carnival Las Vegas 2019</h5>
                                    <ul>
                                        <li>15.00 $</li>
                                        <li>Dec 17, 2019</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="videos__item">
                                <div class="videos__item__pic set-bg" data-setbg="{{ asset('img/videos/videos-3.jpg') }}">
                                    <!-- <a href="https://www.youtube.com/watch?v=3nQNiWdeH2Q?autoplay=1" class="play-btn video-popup"><i class="fa fa-play"></i></a> -->
                                </div>
                                <div class="videos__item__text">
                                    <h5>Martin Garrix - Live @ Ultra Music Festival Miami 2019</h5>
                                    <ul>
                                        <li>19.00 $</li>
                                        <li>Dec 17, 2019</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="videos__item">
                                <div class="videos__item__pic set-bg" data-setbg="{{ asset('img/videos/videos-4.jpg') }}">
                                    <!-- <a href="https://www.youtube.com/watch?v=Srqs4CitU2U?autoplay=1" class="play-btn video-popup"><i class="fa fa-play"></i></a> -->
                                </div>
                                <div class="videos__item__text">
                                    <h5>Armin van Buuren live at Tomorrowland 2019</h5>
                                    <ul>
                                        <li>21 $</li>
                                        <li>Dec 17, 2019</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="videos__item">
                                <div class="videos__item__pic set-bg" data-setbg="{{ asset('img/videos/videos-3.jpg') }}">
                                    <!-- <a href="https://www.youtube.com/watch?v=vBGiFtb8Rpw?autoplay=1" class="play-btn video-popup"><i class="fa fa-play"></i></a> -->
                                </div>
                                <div class="videos__item__text">
                                    <h5>Martin Garrix - Live @ Ultra Music Festival Miami 2019</h5>
                                    <ul>
                                        <li>11 $</li>
                                        <li>Dec 17, 2019</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
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
                        <div>
                            <div class="input-group">
                                <input type="text" class="form-control search-menu" placeholder="Search..." />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <!-- sidebar-search end-->
                    <!-- Category start -->
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color: black; font-size: 19px;">
                                        Category Group #1
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    #1
                                </div>
                                <div class="card-body">
                                    #2
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color: black; font-size: 19px;">
                                        Category Group #2
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    #1
                                </div>
                                <div class="card-body">
                                    #2
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color: black; font-size: 19px;">
                                        Category Group #3
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                    #1
                                </div>
                                <div class="card-body">
                                    #2
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Category end -->
                </div>
            </div>
            <!-- Sidebar end -->
            <!-- Product list start -->
            <div class="col-lg-9 col-md-9 col-sm-9">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="discography__item">
                            <div class="discography__item__pic">
                                <img src="{{ asset('img/discography/disco-1.jpg') }}" alt="" />
                            </div>
                            <div class="discography__item__text">
                                <span>$ 52.00</span>
                                <h4>EDM Party Electro House</h4>
                                <a href="#"><img src="{{ asset('img/buynow.png') }}" style="width:85px" alt="" /></a>
                                <a href="#"><img src="{{ asset('img/addtocart.png') }}" style="width:85px" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="discography__item">
                            <div class="discography__item__pic">
                                <img src="{{ asset('img/discography/disco-2.jpg') }}" alt="" />
                            </div>
                            <div class="discography__item__text">
                                <span>$ 52.00</span>
                                <h4>EDM Party Electro House</h4>
                                <a href="#"><img src="{{ asset('img/buynow.png') }}" style="width:85px" alt="" /></a>
                                <a href="#"><img src="{{ asset('img/addtocart.png') }}" style="width:85px" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="discography__item">
                            <div class="discography__item__pic">
                                <img src="{{ asset('img/discography/disco-3.jpg') }}" alt="" />
                            </div>
                            <div class="discography__item__text">
                                <span>$ 52.00</span>
                                <h4>EDM Party Electro House</h4>
                                <a href="#"><img src="{{ asset('img/buynow.png') }}" style="width:85px" alt="" /></a>
                                <a href="#"><img src="{{ asset('img/addtocart.png') }}" style="width:85px" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="discography__item">
                            <div class="discography__item__pic">
                                <img src="{{ asset('img/discography/disco-4.jpg') }}" alt="" />
                            </div>
                            <div class="discography__item__text">
                                <span>$ 52.00</span>
                                <h4>EDM Party Electro House</h4>
                                <a href="#"><img src="{{ asset('img/buynow.png') }}" style="width:85px" alt="" /></a>
                                <a href="#"><img src="{{ asset('img/addtocart.png') }}" style="width:85px" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="discography__item">
                            <div class="discography__item__pic">
                                <img src="{{ asset('img/discography/disco-5.jpg') }}" alt="" />
                            </div>
                            <div class="discography__item__text">
                                <span>$ 52.00</span>
                                <h4>EDM Party Electro House</h4>
                                <a href="#"><img src="{{ asset('img/buynow.png') }}" style="width:85px" alt="" /></a>
                                <a href="#"><img src="{{ asset('img/addtocart.png') }}" style="width:85px" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="discography__item">
                            <div class="discography__item__pic">
                                <img src="{{ asset('img/discography/disco-6.jpg') }}" alt="" />
                            </div>
                            <div class="discography__item__text">
                                <span>$ 52.00</span>
                                <h4>EDM Party Electro House</h4>
                                <a href="#"><img src="{{ asset('img/buynow.png') }}" style="width:85px" alt="" /></a>
                                <a href="#"><img src="{{ asset('img/addtocart.png') }}" style="width:85px" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="pagination__links">
                            <a href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">Next</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product list end -->
        </div>
    </div>
</section>
<!-- Product Section End -->
@endsection

<!-- Write function here -->
@section('function')
<script>
    $(document).ready(function () {
        $("#product").addClass("active");
        $("header:first").addClass("header--normal");
        $("footer:first").addClass("footer--normal");
    });
</script>
@endsection
