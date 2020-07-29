<!-- {{ asset('') }} -->
@extends('web.layout.header')
@section('title', 'RhythmHouse | Home')
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

    <!-- Product Pic Begin -->
    <div class="about-pic">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 p-0">
                            <img src="{{ asset('img/about/ap-1.jpg') }}" alt="">
                            <img src="{{ asset('img/about/ap-2.jpg') }}" alt="">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 p-0">
                            <img src="{{ asset('img/about/ap-3.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 p-0">
                            <img src="{{ asset('img/about/ap-4.jpg') }}" alt="">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 p-0">
                            <img src="{{ asset('img/about/ap-5.jpg') }}" alt="">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 p-0">
                            <img src="{{ asset('img/about/ap-6.jpg') }}" alt="">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 p-0">
                            <img src="{{ asset('img/about/ap-7.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Pic End -->

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
        $("header:first").addClass("header--normal");
        $("footer:first").addClass("footer--normal");
    });
</script>
@endsection
