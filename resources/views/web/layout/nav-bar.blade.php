<!-- {{ asset(' ') }} -->
<!-- Header Section Begin -->
<style>
.dropdown {
    background-color: rgba(112, 0, 175, 0.8);
    width: 170px !important;
    border-bottom-right-radius: 10px !important;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px !important;
}
.count-prodct{
    position: absolute;
    right: -8px;
    top: -1px;
    height: 15px;
    width: 15px;
    background: #e7ab3c;
    color: #ffffff;
    border-radius: 50%;
    font-size: 11px;
    font-weight: 700;
    text-align: center;
    line-height: 15px;
}
</style>
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div class="header__logo">
                    <a href="{{ url('web/index') }}"><span
                            style="font-weight:30px; font-size: 30px; color: white">RhythmHouse</span></a>
                </div>
            </div>
            <div class="col-lg-10 col-md-10">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li id="home"><a href="{{ url('web/index') }}">Home</a></li>
                            <li id="about"><a href="{{ url('web/about') }}">About</a></li>
                            <li id="product"><a href="{{ url('web/product') }}">Product</a></li>
                            <li id="event"><a href="{{ url('web/event') }}">Event</a></li>
                            <li id="membership"><a href="{{ url('web/membership') }}">Membership</a></li>
                            <li id="contact"><a href="{{ url('web/contact') }}">Contact</a></li>
                            @guest
                            <li style="padding-left:0px;"><a href="{{ url('web/login') }}"><i class="fa fa-sign-in"
                                        aria-hidden="true"></i>&nbsp;Login</i></a></li>
                            @if (Route::has('register'))
                            <li style="padding-left:-50px;"><a href="{{ url('web/register') }}"><i
                                        class="fa fa-sign-out"></i>&nbsp; Register</a></li>
                            @endif
                            @else
                            <li><a id="cart" href="{{ url('web/cart/'.Auth::user()->id) }}"><i class="fa fa-shopping-cart"></i><span class="count-prodct">1</span></a></li>
                            <li><a href="{{ url('web/profile') }}"><i
                                        class="fa fa-user-circle"></i>&nbsp;{{ Auth::user()->name }}</a>
                                <ul class="dropdown" aria-labelledby="navbarDropdown">
                                    <li><a href="{{ url('web/profile') }}"><i class="fa fa-id-card"></i>&nbsp;Profile</a></li>
                                    <li><a href=""><i class="fa fa-edit"></i>&nbsp;Edit</a></li>
                                    @if(Auth::user()->role=='admin')

                                    <li><a href="{{url('admin/index')}}"><i class="fa fa-tasks"></i>&nbsp;Manager
                                            Admin</a></li>
                                    @endif
                                    <li><a href="{{ route('logout')}}"><i class="fa fa-sign-out"></i>&nbsp;Log Out</a>
                                    </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                            @endguest

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header Section End -->