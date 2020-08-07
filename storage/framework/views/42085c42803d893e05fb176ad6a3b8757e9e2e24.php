<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/barfiller.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/nowfont.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/rockville.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/magnific-popup.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/slicknav.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" type="text/css">
    <!-- HaiDuong css -->
    <link rel="stylesheet" href="<?php echo e(asset('css/haiduong.css')); ?>" type="text/css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css')); ?>">
    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Gravitas One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Luckiest Guy" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kotta One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Great Vibes" rel="stylesheet">
</head>

<body>
    <!-- Page Preloader -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Navbar -->
    <?php echo $__env->make('web.layout.nav-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- /.navbar -->

    <div class="content-wrapper">
        <?php echo $__env->yieldContent('content'); ?>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php echo $__env->make('web.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <!-- Js Plugins -->
    <script src="<?php echo e(asset('js/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.nicescroll.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.barfiller.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.countdown.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.slicknav.js')); ?>"></script>
    <script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
    <!-- Music Plugin -->
    <script src="<?php echo e(asset('js/jquery.jplayer.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jplayerInit.js')); ?>"></script>
    <!-- DataTables -->
    <script src="<?php echo e(asset('plugins/datatables/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')); ?>"></script>
</body>
<?php echo $__env->yieldContent('function'); ?>
</html>
<?php /**PATH D:\Xampp\htdocs\rhythmhouse\branches\dev\resources\views/web/layout/header.blade.php ENDPATH**/ ?>