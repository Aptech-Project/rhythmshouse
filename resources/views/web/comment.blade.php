<!-- ') }} -->
@extends('web.layout.header')
@section('title', 'RhythmHouse | Membership')
@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');

    body {
        background-color: #F4F4F4 !important
    }

    h3 {
        margin-top: 2%;
        margin-left: 27%;
        font-family: 'Manrope', sans-serif;
        font-weight: bold
    }

    .card {
        border: none;
        border-radius: 20px;
        padding: 20px;
        margin-bottom: 40px
    }

    img {
        border-radius: 10px;
        padding-right: 5px;
        width: 60px;
        height: 55px
    }

    img:hover {
        cursor: pointer
    }

    .round .align-self-start {
        border-radius: 100%;
        width: 45px;
        height: 40px
    }

    .media .comment {
        background: #F4F4F4;
        border: none;
        border-radius: 10px
    }

    h6.user {
        color: #5C5C5C;
        font-size: 15px !important;
        padding-left: 15px !important;
        margin-bottom: 0
    }

    h6.user:hover {
        cursor: pointer;
        text-decoration: underline
    }

    p.text {
        margin-bottom: 0;
        color: #8A8A8A !important;
        font-size: 14px
    }

    .ml-auto {
        margin-right: 10px
    }

    p .reply {
        color: #5C5C5C;
        font-size: 15px
    }

    @media screen and (min-width: 576px) {
        .comment {
            width: 470px !important
        }
    }
</style>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
<script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
<script type='text/javascript'></script>

<Section>
    <div class="container">
        <div class="row ">
            <h3>My FeedBack</h3>
        </div>
    </div>
    <div class="container mt-1 d-flex justify-content-center">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <ul class="list-unstyled">
                        <!--FIRST LIST ITEM-->
                        <li class="media"> <span class="round pt-2"><img
                                    src="https://img.icons8.com/bubbles/100/000000/groups.png"
                                    class="align-self-start mr-3"></span>
                            <div class="media-body">
                                <div class="row d-flex">
                                    <h6 class="user pt-2">Michael Andrews</h6>
                                    <div class="ml-auto">
                                        <p class="text">3m</p>
                                    </div>
                                </div>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <p class="text">Sản phẩm tốt</p>
                                
                        </li>
                        <!--SECOND LIST ITEM-->
                        <li class="media my-5"> <span class="round"> <img
                                    src="https://img.icons8.com/bubbles/100/000000/lock-female-user.png"
                                    class="align-self-start mr-3"> </span>
                            <div class="media-body">
                                <div class="row d-flex">
                                    <h6 class="user">Craig Carder</h6>
                                    <div class="ml-auto">
                                        <p class="text">9m</p>
                                    </div>
                                </div>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <p class="text">Giao Hàng nhanh</p>
                            </div>
                        </li>
                        <!--THIRD LIST ITEM-->
                        
                        <!--FOURTH LIST ITEM-->
                        <li class="media my-5"> <span class="round"><img
                                    src="https://img.icons8.com/office/100/000000/user-group-man-man--v1.png"
                                    class="align-self-start mr-3"></span>
                            <div class="media-body">
                                <div class="row d-flex">
                                    <h6 class="user">Giana Ekstrom Bothman</h6>
                                    <div class="ml-auto">
                                        <p class="text">2h</p>
                                    </div>
                                </div>
                                <p class="text">Giao hàng chậm</p>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <div class="media mt-3 comment"> <a href="#"><img
                                            src="https://img.icons8.com/bubbles/100/000000/lock-male-user.png"
                                            class="align-self-center mr-1"></a>
                                    <div class="media-body">
                                        <div class="row d-flex">
                                            <h6 class="user">Giana Ekstrom Bothman</h6>
                                           
                                        </div>
                                        <p class="reply">Xin lỗi vì sự bất tiện này </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!--FIFTH LIST ITEM-->
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</Section>
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