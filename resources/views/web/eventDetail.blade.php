<!-- {{ asset('') }} -->
@extends('web.layout.header')
@section('title', 'RhythmHouse | Event')
@section('content')
    <!-- Tours Section Begin -->
    <section class="tours spad" id="main">
        <div class="container">
            <div class="row">
                <!--main content-->                  
                <div class="col-lg-6">                  
                    <div class="tours__item__text">
                        <h2>{{ $eventD->name }}</h2>
                        <div class="tours__text__widget">
                            <ul>
                                <li>
                                    <i class="fa fa-clock-o"></i>
                                    <span><b style="color: indigo">From: </b>{{$eventD->fromdate}}</span>
                                    <span><b style="color: indigo">To: </b>{{$eventD->todate}}</span>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    {{$eventD->address}}
                                </li>
                                <li>
                                    <i class="fa fa-circle"></i>
                                    <b style="color: indigo">Type: </b>
                                    {{$eventD->type}}
                                </li>
                                <li>
                                    <i class="fa fa-circle"></i>
                                    <b style="color: indigo">Artist: </b>
                                    {{$eventD->artist}}
                                </li>
                            </ul>
                            <div class="price">$ {{$eventD->ticketprice}}</div>
                        </div>
                        <div class="tours__text__desc">
                            <p>{{$eventD->description}}</p>
                        </div>
                        <a href="{{ url($eventD->url1) }}" class="primary-btn border-btn" target="_blank">Get Ticket >>>></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tours__item__pic">
                        <img src="{{ url('images/'.$eventD->url2) }}" alt="">
                    </div>
                </div>
                <!--/.main content-->
                <div class="col-lg-12 order-lg-8">
                    <div class="pagination__links">
                    <a href="#">>>>>Become Our Partner To Advertise Your Event</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tours Section End --> 
@endsection

<!-- Write function here -->
@section('function')
<script>
    $(document).ready(function(){
        $("#event").addClass("active");
        $("header:first").addClass("header--normal");
        $("footer:first").addClass("footer--normal");
    });
</script>
@endsection