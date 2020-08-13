<!-- ') }} -->
@extends('web.layout.header')
@section('title', 'RhythmHouse | 404')
@section('content')
<link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">
<link type="text/css" rel="stylesheet"href="{{ asset('css/404.css') }}" />
<div id="notfound">
    <div class="notfound">
        <div class="notfound-404"></div>
        <h1>404</h1>
        <h2>Oops! Page Not Be Found</h2>
        <p>Sorry but the page you are looking for does not exist, have been removed. name changed or is temporarily unavailable</p>
        <a href="{{ url('web/index') }}">Back to homepage</a>
    </div>
</div>
@endsection
<!-- Write function here -->
@section('function')
<script>
    $(document).ready(function(){
        // $("#membership").addClass("active");
        $("header:first").addClass("header--normal");
        $("footer:first").addClass("footer--normal");
    });
</script>
@endsection