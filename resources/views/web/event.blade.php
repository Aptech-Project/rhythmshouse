<!-- {{ asset('') }} -->
@extends('web.layout.header')
@section('title', 'RhythmHouse | Event')
@section('content')
     <!-- Countdown Section Begin -->
    <section class="countdown countdown--page spad set-bg" data-setbg="{{ asset('img/countdown-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="countdown__text">
                        <h1>{{ $eventtop->name }}</h1>
                        <h4>Music festival start in</h4>
                    </div>
                    <div class="countdown__timer">
                        <div class="countdown__item">
                            <span id="days"></span>
                            <p>days</p>
                        </div>
                        <div class="countdown__item">
                            <span id="hours"></span>
                            <p>hours</p>
                        </div>
                        <div class="countdown__item">
                            <span id="minutes"></span>
                            <p>minutes</p>
                        </div>
                        <div class="countdown__item">
                            <span id="seconds"></span>
                            <p>seconds</p>
                        </div>
                    </div>
                    <div class="buy__tickets">
                        <a href="{{ url('web/eventClick/'.$eventtop->id) }}" class="primary-btn">More Details >>>></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Countdown Section End -->

    <!-- Tours Section Begin -->
    <section class="tours spad" id="main">
        <div class="container">
            <div class="row">
                <!--main content-->   
                @foreach ($event as $e)                
                <div class="col-lg-6">                  
                    <div class="tours__item__text">
                        <h2>{{ $e->name }}</h2>
                        <div class="tours__text__widget">
                            <ul>
                                <li>
                                    <i class="fa fa-clock-o"></i>
                                    <span><b style="color: indigo">From: </b>{{$e->fromdate}}</span>
                                    <span><b style="color: indigo">To: </b>{{$e->todate}}</span>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    {{$e->address}}
                                </li>
                                <li>
                                    <i class="fa fa-circle"></i>
                                    <b style="color: indigo">Type: </b>
                                    {{$e->type}}
                                </li>
                                <li>
                                    <i class="fa fa-circle"></i>
                                    <b style="color: indigo">Artist: </b>
                                    {{$e->artist}}
                                </li>
                            </ul>
                            <div class="price">$ {{$e->ticketprice}}</div>
                        </div>
                        <a href="{{ url('web/eventClick/'.$e->id) }}" class="primary-btn border-btn">More Details >>>></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tours__item__pic">
                        <img src="{{ url('images/'.$e->url2) }}" alt="">
                    </div>
                </div>
                @endforeach
                <!--/.main content-->
                <div class="col-lg-12 order-lg-7">
                    <div class="pagination justify-content-center pagination-lg">
                        {{ $event->render() }}
                    </div> 
                </div>
                <div class="col-lg-12 order-lg-8">
                    <div class="pagination__links">
                    <a href="{{ url('web/profile') }}">>>>>Become Our Partner To Advertise Your Event</a>
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
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("{{ $eventtop->fromdate }}").getTime();
    
    // Update the count down every 1 second
    var x = setInterval(function() {
    
      // Get today's date and time
      var now = new Date().getTime();
        
      // Find the distance between now and the count down date
      var distance = countDownDate - now;
        
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
      // Output the result in an element with id="demo"
      document.getElementById("days").innerHTML = days ;
      document.getElementById("hours").innerHTML = hours ;
      document.getElementById("minutes").innerHTML = minutes ;
      document.getElementById("seconds").innerHTML = seconds ;
        
      // If the count down is over, write some text 
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
</script>
@endsection