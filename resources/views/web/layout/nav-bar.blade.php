<!-- {{ asset(' ') }} -->
<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div class="header__logo">
                    <a href="{{ url('web/index') }}"><span style="font-weight:30px; font-size: 30px; color: white">RhythmHouse</span></a>
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
                            <!-- <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./about.html">About</a></li>
                                    <li><a href="./blog.html">Blog</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </nav>
                    @if (Session::has('logined'))
                    <div class="header__right__social">
                        <a href="{{ url('') }}"><i class="fa fa-user-circle"></i>&nbsp;{{session()->get('tk')}}</a>
                        <a id="cart" href="{{ url('web/cart') }}"><i class="fa fa-shopping-cart"></i></a>
                        {{-- @dd(Session::get('logined')); --}}
                    </div>
                    @else
                    <div class="header__right__social">
                        <a href="{{ url('web/login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Login</i></a>
                        <a href="{{ url('web/register')}}"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;Register</i></a>
                        <a id="cart" href="{{ url('web/cart') }}"><i class="fa fa-shopping-cart"></i></a>
                    </div>
                    @endif
                    
                
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header Section End -->