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
                        <div class="blog__large__pic set-bg center" data-setbg="{{ url('images/'.$p->image) }}" style="width:400px">
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                        <div class="blog__large__text center">
                            <div class="song-title" width="50%">{{$p->name}}</div>
                        </div>
                    </div>
                </div>
            </div>
        <div>
            <!-- Media player start -->
            <div class="row" style="padding-left:320px">
                <div class="col-lg-12 p-0">
                    <div class="track__content">
                        <div class="single_player_container">
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_1"
                                data-url="{{ asset('music-files/mylove.mp3') }}"></div>
                            <div class="jp-audio jp_container_1" role="application" aria-label="media player">
                                <div class="jp-gui jp-interface">
                                    <!-- Player Controls -->
                                    <div class="player_controls_box">
                                        <button class="jp-play player_button" tabindex="0"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class="player_bars">
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                                <div>
                                                    <div class="jp-play-bar">
                                                        <div class="jp-current-time" role="timer" aria-label="time">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class="jp-volume-controls">
                                        <button class="jp-mute" tabindex="0"><i
                                                class="fa fa-volume-down"></i></button>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Media player end -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <div class="col-md-10 offset-md-1 product-detail">{{$p->description}}</div>
                            <div class="discography__item__text">
                            <p style="font-family: Luckiest Guy; color: #006600; text-shadow: 1px 1px 1px white; font-size: 20px" class="center">Price: {{$p->price}}$</p>
                                <a href="#"><img src="{{ asset('img/buynow.png') }}" style="width:200px" alt="" /></a>
                                <a href="#"><img src="{{ asset('img/addtocart.png') }}" style="width:200px" alt="" /></a>
                            </div>
                            <div class="blog__large__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li>By <span>{{$p->artist}}</span></li>
                                            <li>Author <span>{{$p->author}}</span></li>
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
