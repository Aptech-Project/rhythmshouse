<!-- {{ asset('') }} -->
@extends('web.layout.header') @section('title', 'RhythmHouse | Product') @section('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                    <span>Product Detail</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Product Detail</h2>
                        <h1>Music blog</h1>
                    </div>
                    <div class="blog__large">
                        <div class="blog__large__pic set-bg" data-setbg="{{ asset('img/blog/large-item.jpg') }}" style="height:600px">
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                        <div class="blog__large__text">
                            <span style="font-size:30px">23$</span>
                            <h4>River Flow in You</h4>
                            <p>Lorem ipsum dolor consectetur adipiscing eiusmod tempor incididunt ut labore et dolore
                            </p>
                            <div class="discography__item__text">
                                <a href="#"><img src="{{ asset('img/buynow.png') }}" style="width:200px" alt="" /></a>
                                <a href="#"><img src="{{ asset('img/addtocart.png') }}" style="width:200px" alt="" /></a>
                            </div>
                            <div class="blog__large__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li>By <span>Erna O’Conner</span></li>
                                            <li>Dec 17, 2019</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul class="right__widget">
                                            <li>230 Purchases</li>
                                            <li>18 Feedbacks</li>
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
