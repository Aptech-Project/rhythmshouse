@extends('web.layout.header')
@section('title', 'RhythmHouse | Register')
@section('content')
<style>



    * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    body {
        color: #333;
        font-size: 13px;
        margin: 0;
    }

    input,
    textarea,
    select,
    button {
        color: #333;
        font-size: 13px;
    }

    p,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    ul {
        margin: 0;
    }

    img {
        max-width: 100%;
    }

    ul {
        padding-left: 0;
        margin-bottom: 0;
    }

    a:hover {
        text-decoration: none;
    }

    :focus {
        outline: none;
    }

    .wrapper {
        width: 100%;
        min-height: 100vh;
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
    }

    .inner {
        padding: 20px;
        background: #fff;
        width: 1000px;
        margin: auto;
        display: flex;
        margin-top: 20px;
        margin-bottom: 20px;
        border-radius: 5px;
    }

    .inner form {
        width: 100%;
        padding-top: 36px;
        padding-left: 45px;
        padding-right: 45px;
    }

    .inner h3 {
        text-transform: uppercase;
        font-size: 25px;
        text-align: center;
        margin-bottom: 28px;
    }

    .form-group {
        display: flex;
    }

    .form-group input {
        width: 100%;
    }

    .form-group input:first-child {
        margin-right: 25px;
    }

    .form-wrapper {
        position: relative;
    }

    .form-wrapper i {
        position: absolute;
        bottom: 9px;
        right: 0;
    }

    .form-control {
        border: 1px solid #333;
        border-top: none;
        border-right: none;
        border-left: none;
        display: block;
        width: 100%;
        height: 30px;
        padding: 0;
        margin-bottom: 10px;
    }

    input {
        border-radius: 0;
    }

    .form-control::-webkit-input-placeholder {
        font-size: 13px;
        color: gray;
    }

    .btn-default {
        background-color: yellowgreen;
        width: 30%;
        color: white;
    }

    .btn-danger {
        width: 30%;
        color: white;
    }

    .form-control::-moz-placeholder {
        font-size: 13px;
        color: gray;
    }

    .form-control:-ms-input-placeholder {
        font-size: 13px;
        color: gray;
    }

    .form-control:-moz-placeholder {
        font-size: 13px;
        color: gray;
    }

    select {
        -moz-appearance: none;
        -webkit-appearance: none;
        cursor: pointer;
        padding-left: 20px;
    }

    select option[value=""][disabled] {
        display: none;
    }

    button {
        border: none;
        width: 164px;
        height: 40px;
        margin: auto;
        margin-top: 10px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0;
        background: #333;
        font-size: 15px;
        color: #fff;
        vertical-align: middle;
        -webkit-transform: perspective(1px) translateZ(0);
        transform: perspective(1px) translateZ(0);
        -webkit-transition-duration: 0.3s;
        transition-duration: 0.3s;
    }

    button i {
        margin-left: 10px;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
    }

    button:hover i,
    button:focus i,
    button:active i {
        -webkit-animation-name: hvr-icon-wobble-horizontal;
        animation-name: hvr-icon-wobble-horizontal;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
        -webkit-animation-iteration-count: 1;
        animation-iteration-count: 1;
    }

    label {
        color: Black;
        margin-top: 5px;
        font-weight: bold;
    }

    @-webkit-keyframes hvr-icon-wobble-horizontal {
        16.65% {
            -webkit-transform: translateX(6px);
            transform: translateX(6px);
        }

        33.3% {
            -webkit-transform: translateX(-5px);
            transform: translateX(-5px);
        }

        49.95% {
            -webkit-transform: translateX(4px);
            transform: translateX(4px);
        }

        66.6% {
            -webkit-transform: translateX(-2px);
            transform: translateX(-2px);
        }

        83.25% {
            -webkit-transform: translateX(1px);
            transform: translateX(1px);
        }

        100% {
            -webkit-transform: translateX(0);
            transform: translateX(0);
        }
    }

    @keyframes hvr-icon-wobble-horizontal {
        16.65% {
            -webkit-transform: translateX(6px);
            transform: translateX(6px);
        }

        33.3% {
            -webkit-transform: translateX(-5px);
            transform: translateX(-5px);
        }

        49.95% {
            -webkit-transform: translateX(4px);
            transform: translateX(4px);
        }

        66.6% {
            -webkit-transform: translateX(-2px);
            transform: translateX(-2px);
        }

        83.25% {
            -webkit-transform: translateX(1px);
            transform: translateX(1px);
        }

        100% {
            -webkit-transform: translateX(0);
            transform: translateX(0);
        }
    }

    @media (max-width: 1199px) {
        .wrapper {
            background-position: right center;
        }
    }

    @media (max-width: 991px) {
        .inner form {
            padding-top: 10px;
            padding-left: 30px;
            padding-right: 30px;
        }
    }

    @media (max-width: 767px) {
        .inner {
            display: block;
        }

        .inner .image-holder {
            width: 100%;
        }

        .inner form {
            width: 100%;
            padding: 40px 0 30px;
        }

        button {
            margin-top: 60px;
        }

        .btn-default {
            width: 100%;
            background-color: #B10DC9;
            font-weight: bold;
        }
}



/*# sourceMappingURL=style.css.map */
</style>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
<script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
<section>
    <div class="wrapper" style="background-image: url('../../public/img/hero-bg.png');">
        <div class="inner">
            <div class="row">
                <div class="col-sm-5">
                    <img src="../../public/img/about/ap-6.jpg" alt="" style="padding-top:100px;padding-left:20px">
                </div>
                <div class="col-sm-7" style="padding-left:10px">
                    <form class="form-horizontal" action="{{ route('register') }}" enctype="multipart/form-data"
                        method="post" style="color: antiquewhite;" style="text-align: center;">
                        {{ csrf_field() }}
                        <h2 style="text-align:center; "><b>Register</b></h2><br>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="email" style="text-align: left;"><i
                                    class="fa fa-envelope" aria-hidden="true"></i>&nbsp;Email :*</label>
                            <div class="col-sm-9">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter email"
                                    name="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="username" style="text-align: left;"><i
                                    class="fa fa-user"></i>&nbsp;UserName :*</label>
                            <div class="col-sm-9">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Enter Username"
                                    name="username">
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-5" for="password" style="text-align: left;"><i
                                    class="fa fa-lock" aria-hidden="true"></i>&nbsp;Password :*</label>
                            <div class="col-sm-9">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"  required autocomplete="new-password" placeholder="Enter password"
                                    name="password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="pwd2" style="text-align: left;"><i
                                    class="fa fa-lock" aria-hidden="true"></i>&nbsp;Confirm Password :*</label>
                            <div class="col-sm-9">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="address" style="text-align: left;"><i
                                    class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Address :</label>
                            <div class="col-sm-9">
                                <input type="text" id="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" id="address" name="address">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="birthday" style="text-align: left;"><i
                                    class="fa fa-birthday-cake" aria-hidden="true"></i>&nbsp;Birthday :</label>
                            <div class="col-sm-9">
                                <input type="date" id="birthday" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" required autocomplete="birthday" id="birthday" name="birthday">
                                @error('birthday')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="name" style="text-align: left;"><i
                                    class="fa fa-male" aria-hidden="true"></i>&nbsp;Name :</label>
                            <div class="col-sm-9">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Your Name" name="name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="phonenumber" style="text-align: left;"><i
                                    class="fa fa-phone" aria-hidden="true"></i>&nbsp;Phone Number :</label>
                            <div class="col-sm-9">
                                <input id="phonenumber" type="text" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" value="{{ old('phonenumber') }}" required autocomplete="phonenumber" placeholder="Enter Phone Number">
                                @error('phonenumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-default">Register</button><br>
                                <p>You have an Account </p> <a href="{{ url('web/login') }}">Login now !</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
@section('function')
<script>
$(document).ready(function() {
    // $("#membership").addClass("active");
    $("header:first").addClass("header--normal");
    $("footer:first").addClass("footer--normal");
});
</script>
@endsection
@section('script-section')
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

<script type="text/javascript">
$(document).ready(function() {
    bsCustomFileInput.init();
});
</script>
@endsection