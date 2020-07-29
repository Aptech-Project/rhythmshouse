<!-- {{ asset('') }} -->
@extends('web.layout.header')
@section('title', 'RhythmHouse | Product')
@section('content')
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

        <!-- Services Section Begin -->
        <section class="services">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="services__left set-bg" data-setbg="{{ asset('img/services/service-left.jpg') }}">
                        <a href="https://www.youtube.com/watch?v=JGwWNGJdvx8" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="row services__list">
                        <div class="col-lg-6 p-0 order-lg-1 col-md-6 order-md-1">
                            <div class="service__item deep-bg">
                                <img src="{{ asset('img/services/service-1.png') }}" alt="">
                                <h4>Wedding</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 order-lg-2 col-md-6 order-md-2">
                            <div class="service__item">
                                <img src="{{ asset('img/services/service-2.png') }}" alt="">
                                <h4>Clubs and bar</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 order-lg-4 col-md-6 order-md-4">
                            <div class="service__item deep-bg">
                                <img src="{{ asset('img/services/service-4.png') }}" alt="">
                                <h4>DJ lessons</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 order-lg-3 col-md-6 order-md-3">
                            <div class="service__item">
                                <img src="{{ asset('img/services/service-3.png') }}" alt="">
                                <h4>Corporate events</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Product Section Begin -->
    <section class="discography spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <h2>Latest Releases</h2>
                        <h1>Discography</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="discography__item">
                        <div class="discography__item__pic">
                            <img src="{{ asset('img/discography/disco-1.jpg') }}" alt="">
                        </div>
                        <div class="discography__item__text">
                            <span>$ 52.00</span>
                            <h4>EDM Party Electro House</h4>
                            <a href="#"><img src="{{ asset('img/discography/link-1.jpg') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('img/discography/link-2.jpg') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="discography__item">
                        <div class="discography__item__pic">
                            <img src="{{ asset('img/discography/disco-2.jpg') }}" alt="">
                        </div>
                        <div class="discography__item__text">
                            <span>$ 52.00</span>
                            <h4>EDM Party Electro House</h4>
                            <a href="#"><img src="{{ asset('img/discography/link-1.jpg') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('img/discography/link-2.jpg') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="discography__item">
                        <div class="discography__item__pic">
                            <img src="{{ asset('img/discography/disco-3.jpg') }}" alt="">
                        </div>
                        <div class="discography__item__text">
                            <span>$ 52.00</span>
                            <h4>EDM Party Electro House</h4>
                            <a href="#"><img src="{{ asset('img/discography/link-1.jpg') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('img/discography/link-2.jpg') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="discography__item">
                        <div class="discography__item__pic">
                            <img src="{{ asset('img/discography/disco-4.jpg') }}" alt="">
                        </div>
                        <div class="discography__item__text">
                            <span>$ 52.00</span>
                            <h4>EDM Party Electro House</h4>
                            <a href="#"><img src="{{ asset('img/discography/link-1.jpg') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('img/discography/link-2.jpg') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="discography__item">
                        <div class="discography__item__pic">
                            <img src="{{ asset('img/discography/disco-5.jpg') }}" alt="">
                        </div>
                        <div class="discography__item__text">
                            <span>$ 52.00</span>
                            <h4>EDM Party Electro House</h4>
                            <a href="#"><img src="{{ asset('img/discography/link-1.jpg') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('img/discography/link-2.jpg') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="discography__item">
                        <div class="discography__item__pic">
                            <img src="{{ asset('img/discography/disco-6.jpg') }}" alt="">
                        </div>
                        <div class="discography__item__text">
                            <span>$ 52.00</span>
                            <h4>EDM Party Electro House</h4>
                            <a href="#"><img src="{{ asset('img/discography/link-1.jpg') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('img/discography/link-2.jpg') }}" alt=""></a>
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
    </section>
    <!-- Product Section End -->
@endsection

<!-- Write function here -->
@section('function')
<script>
    $(document).ready(function(){
        $("#product").addClass("active");
        $("header:first").addClass("header--normal");
        $("footer:first").addClass("footer--normal");
    });
</script>
@endsection
