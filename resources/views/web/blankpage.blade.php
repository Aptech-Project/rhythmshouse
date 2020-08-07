<!-- ') }} -->
@extends('web.layout.header')
@section('title', 'RhythmHouse | Membership')
@section('content')

@endsection
<!-- Write function here -->
@section('function')
<script>
    $(document).ready(function(){
        $("#membership").addClass("active");
        $("header:first").addClass("header--normal");
        $("footer:first").addClass("footer--normal");
    });
</script>
@endsection