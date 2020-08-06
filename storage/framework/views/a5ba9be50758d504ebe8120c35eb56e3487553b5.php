
<?php $__env->startSection('title', 'RhythmHouse | Register'); ?>
<?php $__env->startSection('content'); ?>
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

    @keyframes  hvr-icon-wobble-horizontal {
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
                    <form class="form-horizontal" action="<?php echo e(route('register')); ?>" enctype="multipart/form-data"
                        method="post" style="color: antiquewhite;" style="text-align: center;">
                        <?php echo e(csrf_field()); ?>

                        <h2 style="text-align:center; "><b>Register</b></h2><br>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="email" style="text-align: left;"><i
                                    class="fa fa-envelope" aria-hidden="true"></i>&nbsp;Email :*</label>
                            <div class="col-sm-9">
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('email')); ?>" required autocomplete="email" placeholder="Enter email"
                                    name="email">
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="username" style="text-align: left;"><i
                                    class="fa fa-user"></i>&nbsp;UserName :*</label>
                            <div class="col-sm-9">
                                <input id="username" type="text" class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Enter Username"
                                    name="username">
                                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-5" for="password" style="text-align: left;"><i
                                    class="fa fa-lock" aria-hidden="true"></i>&nbsp;Password :*</label>
                            <div class="col-sm-9">
                                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  required autocomplete="new-password" placeholder="Enter password"
                                    name="password">
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                                <input type="text" id="address" class="form-control <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="address" value="<?php echo e(old('address')); ?>" required autocomplete="address" id="address" name="address">
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="birthday" style="text-align: left;"><i
                                    class="fa fa-birthday-cake" aria-hidden="true"></i>&nbsp;Birthday :</label>
                            <div class="col-sm-9">
                                <input type="date" id="birthday" class="form-control <?php $__errorArgs = ['birthday'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="birthday" value="<?php echo e(old('birthday')); ?>" required autocomplete="birthday" id="birthday" name="birthday">
                                <?php $__errorArgs = ['birthday'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="name" style="text-align: left;"><i
                                    class="fa fa-male" aria-hidden="true"></i>&nbsp;Name :</label>
                            <div class="col-sm-9">
                                <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus placeholder="Enter Your Name" name="name">
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-5" for="phonenumber" style="text-align: left;"><i
                                    class="fa fa-phone" aria-hidden="true"></i>&nbsp;Phone Number :</label>
                            <div class="col-sm-9">
                                <input id="phonenumber" type="text"  type="text" class="form-control <?php $__errorArgs = ['phonenumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="phonenumber" value="<?php echo e(old('phonenumber')); ?>" required autocomplete="phonenumber" placeholder="Enter Phone Number">
                                <?php $__errorArgs = ['phonenumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-default">Register</button><br>
                                <p>You have an Account </p> <a href="<?php echo e(url('web/login')); ?>">Login now !</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('function'); ?>
<script>
$(document).ready(function() {
    // $("#membership").addClass("active");
    $("header:first").addClass("header--normal");
    $("footer:first").addClass("footer--normal");
});
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script-section'); ?>
<script src="<?php echo e(asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')); ?>"></script>

<script type="text/javascript">
$(document).ready(function() {
    bsCustomFileInput.init();
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\rhythmhouse\branches\dev\resources\views/web/register.blade.php ENDPATH**/ ?>