<!-- <?php echo e(asset(' ')); ?> -->
<!-- Header Section Begin -->
<style>
.dropdown {
    background-color: rgba(112, 0, 175, 0.8);
    width: 170px !important;
    border-bottom-right-radius: 10px !important;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px !important;
}
</style>
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div class="header__logo">
                    <a href="<?php echo e(url('web/index')); ?>"><span
                            style="font-weight:30px; font-size: 30px; color: white">RhythmHouse</span></a>
                </div>
            </div>
            <div class="col-lg-10 col-md-10">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li id="home"><a href="<?php echo e(url('web/index')); ?>">Home</a></li>
                            <li id="about"><a href="<?php echo e(url('web/about')); ?>">About</a></li>
                            <li id="product"><a href="<?php echo e(url('web/product')); ?>">Product</a></li>
                            <li id="event"><a href="<?php echo e(url('web/event')); ?>">Event</a></li>
                            <li id="membership"><a href="<?php echo e(url('web/membership')); ?>">Membership</a></li>
                            <li id="contact"><a href="<?php echo e(url('web/contact')); ?>">Contact</a></li>
                            <?php if(auth()->guard()->guest()): ?>
                            <li style="padding-left:0px;"><a href="<?php echo e(url('web/login')); ?>"><i class="fa fa-sign-in"
                                        aria-hidden="true"></i>&nbsp;Login</i></a></li>
                            <?php if(Route::has('register')): ?>
                            <li style="padding-left:-50px;"><a href="<?php echo e(url('web/register')); ?>"><i
                                        class="fa fa-sign-out"></i>&nbsp; Register</a></li>
                            <?php endif; ?>
                            <?php else: ?>
                            <li><a id="cart" href="<?php echo e(url('web/cart')); ?>"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a href="<?php echo e(url('')); ?>"><i
                                        class="fa fa-user-circle"></i>&nbsp;<?php echo e(Auth::user()->name); ?></a>
                                <ul class="dropdown" aria-labelledby="navbarDropdown">
                                    <li><a href=""><i class="fa fa-id-card"></i>&nbsp;Profile</a></li>
                                    <li><a href=""><i class="fa fa-edit"></i>&nbsp;Edit</a></li>
                                    <?php if(Auth::user()->role=='admin'): ?>

                                    <li><a href="<?php echo e(url('admin/index')); ?>"><i class="fa fa-tasks"></i>&nbsp;Manager
                                            Admin</a></li>
                                    <?php endif; ?>
                                    <li><a href="<?php echo e(route('logout')); ?>"><i class="fa fa-sign-out"></i>&nbsp;Log Out</a>
                                    </li>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                        style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </ul>
                            </li>
                            <?php endif; ?>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header Section End --><?php /**PATH D:\Xampp\htdocs\rhythmhouse\branches\dev\resources\views/web/layout/nav-bar.blade.php ENDPATH**/ ?>