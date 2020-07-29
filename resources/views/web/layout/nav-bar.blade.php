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
                            <li class="active"><a href="{{ url('web/index') }}">Home</a></li>
                            <li><a href="{{ url('web/about') }}">About</a></li>
                            <li><a href="{{ url('web/product') }}">Product</a></li>
                            <li><a href="{{ url('web/event') }}">Event</a></li>
                            <li><a href="{{ url('web/membership') }}">Membership</a></li>
                            <li><a href="{{ url('web/contact') }}">Contact</a></li>
                            <!-- <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./about.html">About</a></li>
                                    <li><a href="./blog.html">Blog</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </nav>
                    <div class="header__right__social">
                        <a href="{{ url('') }}"><i class="fa fa-user-circle"></i></a>
                        <a href="{{ url('') }}"><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header Section End -->