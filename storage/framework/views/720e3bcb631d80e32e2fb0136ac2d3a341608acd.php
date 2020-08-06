<!-- ') }} -->

<?php $__env->startSection('title', 'RhythmHouse | Membership'); ?>
<?php $__env->startSection('content'); ?>
<section class="content">
    <div class="container">        
            <!-- Offers content -->
            <div class="center set-bg spad" style="margin-top: 10vw; margin-bottom: 5vw; background-color:#F6F6F6; opacity: 0.9">
                <!--Title-->
                <div style="font-size: 3vw; padding: 3vw; margin-top: -1vw;margin-bottom: -1vw;text-align: center;
                            font-family: Gravitas One;font-weight: 700;text-shadow: 10px 10px 10px #909090;
                            font-size: 2.5vw">
                    Membership Offers
                </div>
                <!--Content-->
                <div class="row">
                    <div class="col-md-6" style="text-align: center">
                        <img src="<?php echo e(asset('img/competition-AE.jpg')); ?>" width="70%">
                    </div>
                    <div class="col-md-6" style="vertical-align: middle text-align: center">
                        <div class="membership-offers">
                            <img src="<?php echo e(asset('img/bullet.png')); ?>" width="5%">&nbsp;Have a chance to Win an American Epic companion book & Collector's music boxset.<br><br>
                            <img src="<?php echo e(asset('img/bullet.png')); ?>" width="5%">&nbsp;Get 50% pay off ticket for the first oder.<br><br>
                            <img src="<?php echo e(asset('img/bullet.png')); ?>" width="5%">&nbsp;Instant Savings are loaded directly to your membership card within 72 hours.<br><br>
                            <img src="<?php echo e(asset('img/bullet.png')); ?>" width="5%">&nbsp;Instant Savings expire 30 days after membership activation.<br>
                        </div>
                    </div>
                </div>
                    <hr style="border: 2px solid #31BC1C; margin: 2vw 7vw; border-radius: 3px;">
                    <p style="font-family: Oswald; font-size: 2vw; color: #005E9B; text-align: center">Enjoy these and more exclusive member benefits</p>
                    <table style="margin: 2vw auto;width: 100%;text-align: center;font-size: 1vw;font-family: Kotta One;">
                        <tbody>
                        <tr>
                            <td width="20%">
                                <img src="<?php echo e(asset('img/icon_clubpickup.jpg')); ?>"><br>
                                <strong>Club Pickup</strong><br>
                                Order online, pick up at the club. Done!<br>
                            </td>
                            <td width="20%">
                                <img src="<?php echo e(asset('img/icon_satisfaction.jpg')); ?>"><br>
                                <strong>100% Satisfaction</strong><br>
                                Not your thing? Cancel any time for a full refund.<br>
                            </td>
                            <td width="20%">
                                <img src="<?php echo e(asset('img/icon_scango.jpg')); ?>"><br>
                                <strong>Complimentary Card</strong><br>
                                A card for you and a card for one other.<br>
                            </td>
                            <td width="20%">
                                <img src="<?php echo e(asset('img/icon_wholesale.jpg')); ?>"><br>
                                <strong>Exclusive Values</strong><br>
                                Find member-only savings and prices on bulk items and more.<br>
                            </td>
                            <td width="20%">
                                <img src="<?php echo e(asset('img/icon_savings.jpg')); ?>"><br>
                                <strong>Instant Savings</strong><br>
                                Get extra offers on top of already low prices.<br>
                            </td>
                            
                        </tr>
                        </tbody>
                    </table>
                    <div style="text-align: center">
                        <button class="btn btn-info" style="width: 12vw;margin-top: 3vw;color: white;font-size: 1.5vw;text-shadow: 1px 1px 1px #909090;">
                            Register Now
                        </button><br>
                        <a href="#" data-toggle="modal" data-target="#">Already a member? Login now</a><br><br><br>
                    </div>
            <!--./offers content-->
        
    </div>

</section>
<?php $__env->stopSection(); ?>
<!-- Write function here -->
<?php $__env->startSection('function'); ?>
<script>
    $(document).ready(function(){
        $("#membership").addClass("active");
        $("header:first").addClass("header--normal");
        $("footer:first").addClass("footer--normal");
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\rhythmhouse\branches\dev\resources\views/web/membership.blade.php ENDPATH**/ ?>