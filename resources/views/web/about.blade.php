<!-- ') }} -->
@extends('web.layout.header')
@section('title', 'RhythmHouse | About')
@section('content')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>About</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Skills Section Begin -->
    <section class="skills spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="skills__content" style="height:600px">
                        <div class="section-title">
                            <h2>RhythmHouse</h2>
                            <h1>DJ’s skill</h1>
                        </div>
                        <p>Rhythm House is a music store in the city which offers not only music but introduces event too. 
                        We caters to almost all the age groups by providing the CDs, latest pop music collection for teenagers etc.</p>
                        <div class="skill__bar__item">
                            <p>Pop</p>
                            <div id="bar1" class="barfiller">
                                <span class="tip"></span>
                                <span class="fill" data-percentage="34"></span>
                            </div>
                        </div>
                        <div class="skill__bar__item">
                            <p>Classic</p>
                            <div id="bar2" class="barfiller">
                                <span class="tip"></span>
                                <span class="fill" data-percentage="28"></span>
                            </div>
                        </div>
                        <div class="skill__bar__item">
                            <p>Other</p>
                            <div id="bar3" class="barfiller">
                                <span class="tip"></span>
                                <span class="fill" data-percentage="38"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="skills__video set-bg" data-setbg="{{ asset('img/skill-video.jpg') }}" style="height:600px">
                        <a href="https://www.youtube.com/watch?v=S19UcWdOA-I?autoplay=1" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Skills Section End -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about__pic">
                        <img src="{{ asset('img/about/about.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__text">
                        <div class="section-title">
                            <h2>Music a form of expression</h2>
                            <h1>Pop Love</h1>
                        </div>
                        <p>Music is a strong form of expression, and through music many emotions can be shown whether that be happy, sad, or angry . Music gives you the opportunity to express yourself without using words of your own instead the emotions of a complex song or a simple love song to do so.</p>
                        <a href="#" class="primary-btn">MUSIC ZONE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- About Pic Begin -->
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
    <!-- About Pic End -->

    <!-- About Services Section Begin -->
    <section class="about-services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <h2>Our Music Suit</h2>
                        <h1>Best service</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="about__services__item">
                        <div class="about__services__item__pic set-bg" data-setbg="{{ asset('img/services/as-1.jpg') }}">
                            <div class="icon">
                                <img src="{{ asset('img/services/as-icon-1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="about__services__item__text">
                            <h4>Wedding</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="about__services__item">
                        <div class="about__services__item__pic set-bg" data-setbg="{{ asset('img/services/as-2.jpg') }}">
                            <div class="icon">
                                <img src="{{ asset('img/services/as-icon-2.png') }}" alt="">
                            </div>
                        </div>
                        <div class="about__services__item__text">
                            <h4>Clubs and bar</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="about__services__item">
                        <div class="about__services__item__pic set-bg" data-setbg="{{ asset('img/services/as-3.jpg') }}">
                            <div class="icon">
                                <img src="{{ asset('img/services/as-icon-3.png') }}" alt="">
                            </div>
                        </div>
                        <div class="about__services__item__text">
                            <h4>Corporate events</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Services Section End -->
@endsection
<!-- Write function here -->
@section('function')
<script>
    $(document).ready(function(){
        $("#about").addClass("active");
        $("header:first").addClass("header--normal");
        $("footer:first").addClass("footer--normal");
    });
</script>
@endsection