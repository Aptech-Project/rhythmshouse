@extends('web.layout.header')
@section('title', 'RhythmHouse | Register Partner')
@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    body{
        background-image: url('../../public/img/hero-bg.png');
    }
    .emp-profile {
        padding: 3%;
        margin-top: 3%;
        margin-bottom: 3%;
        border-radius: 0.5rem;
        background: #fff;
    }
    .profile-img {
        text-align: center;
    }

    .profile-img img {
        width: 70%;
        height: 100%;
    }

    .profile-img .file {
        position: relative;
        overflow: hidden;
        margin-top: -20%;
        width: 70%;
        border: none;
        border-radius: 0;
        font-size: 15px;
        background: #212529b8;
    }

    .profile-img .file input {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
    }

    .profile-head h5 {
        color: #333;
    }

    .profile-head h6 {
        color: #0062cc;
    }

    .profile-edit-btn {
        background-color:black;
        border: none;
        border-radius: 1.5rem;
        width: 70%;
        padding: 2%;
        font-weight: 600;
        color: white;
        cursor: pointer;
    }

    .proile-rating {
        font-size: 12px;
        color: #818182;
        margin-top: 5%;
    }

    .proile-rating span {
        color: #495057;
        font-size: 15px;
        font-weight: 600;
    }

    .profile-head .nav-tabs {
        margin-bottom: 5%;
    }

    .profile-head .nav-tabs .nav-link {
        font-weight: 600;
        border: none;
    }

    .profile-head .nav-tabs .nav-link.active {
        border: none;
        border-bottom: 2px solid #0062cc;
    }

    .profile-work {
        padding: 14%;
        margin-top: -15%;
    }

    .profile-work p {
        font-size: 17px;
        color: #818182;
        font-weight: 600;
        margin-top: 5%;
    }

    .profile-work a {
        text-decoration: none;
        color: #495057;
        font-weight: 600;
        font-size: 14px;
    }

    .profile-work ul {
        list-style: none;
    }

    .profile-tab label {
        font-weight: 600;
    }

    .profile-tab p {
        color: black;
}
</style>
<div class="container emp-profile">
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog"
                        alt="" />
                    <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input type="file" name="file" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <h5>
                    {{ Auth::user()->name }}
                    </h5>
                    <h6>
                    {{ Auth::user()->email }}
                    </h6>
                    <p>Rank 8/10</p><br>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link " id="home-tab" data-toggle="tab" href="#profiletab" role="tab" aria-controls="home" aria-selected="false">Sign up as a partner</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                    <p><i class="fa fa-house-user"></i>Personal Information</p>
                    <a href="{{ url('web/profile') }}"></i> Profile</a><br /><br />
                    <a href=""></i>Sign up as a partner</a><br /><br />
                    <p>Action</p>
                    <a href="{{ route('logout')}}">Logout</a>
                </div>
            </div>
            <div class="col-md-8">
            <div class="tab-content profile-tab" id="myTabContent">
                <div class="tab-pane fade show active" id="profiletab" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                        <form action="{{ url('web/updatePartner') }}" method="post">
                        {{ csrf_field() }}
                            <h4 style="text-transform: uppercase;">Terms and Conditions for parties working with our website</h4>
                            <p>Please read the terms carefully if you agree to click on the last registration to become our partner</p>
                            <h5>I. About the necessary conditions to become a partner of us</h5>
                            <p>1. Partner needs to be a member of the site.</p>
                            <p>2. Partners need to comply with our community standards.</p>
                            <p>+ The event posted up must be completely accurate, not exploited, not violating the law.</p>
                            <p>+ We hope to protect viewers, creators and especially minors. That's why we have rules about child safety, pornography and nudity, and self-destruction.</p>
                            <p>+ Take these rules seriously. If a creator acts on and / or off the site that harms the user, community, employees or the ecosystem of the website, we may take action based on a number of factors including, but is not limited to the severity of the action and whether the harmful behavior is repeated many times. The handler will go from lightly suspending creator privileges to account termination most heavily.</p>
                            <p>If you violate the above community standards you will have your account locked out permanently.</p>
                            <h5>II. About the rights and obligations of the parties</h5>
                            <p>1. Partner <br>Partners will be posted by our website promoting events that partners provide, and are allowed to mediate transactions through the website.</p>
                            <p>2. About us <br>- We must be entitled to 5% of the partner's profit <br>- We reserve the right to close your account and events if they violate the community guidelines from the website</p>
                            <div class="form-group">
                                <div class="col-sm-16">
                                <input type="checkbox" name="checkbox" id="option" value="{{old('option')}}" required>&nbsp;I agree with all of the above terms <br>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <br><br><button type="submit" class="btn btn-danger">Sign up as a Partner</button><br>
                                </div>
                            </div>
                            <div>
                                <input id="role" value="partner" readonly type="hidden" name="role">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
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