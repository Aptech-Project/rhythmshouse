<!-- ') }} -->

<?php $__env->startSection('title', 'RhythmHouse | Contact'); ?>
<?php $__env->startSection('content'); ?>
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Map Begin -->
    <div class="map">
        <div class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.137185838718!2d106.64811831532077!3d10.800803361695412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752985e05cde31%3A0xf6fb355d0cf418a4!2sScetpa%20L%C3%AA%20Trung%20Ngh%C4%A9a!5e0!3m2!1svi!2s!4v1596016396112!5m2!1svi!2s"
                height="585" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
    <!-- Map End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact__address">
                        <div class="section-title">
                            <h2>Contact info</h2>
                        </div>
                        <p>We’re here to help and answer any question you might have. We look forward to hearing from you</p>
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <h5>Address</h5>
                                <p>46a Le Trung Nghia Street (Scetpa Building)</p>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <h5>Hotline</h5>
                                <span>1-677-124-44227</span>
                                <span>1-688-356-66889</span>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <h5>Email</h5>
                                <p>rhythmhouse@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo e(asset('img/musicnote.jpg')); ?>" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
<?php $__env->stopSection(); ?>
<!-- Write function here -->
<?php $__env->startSection('function'); ?>
<script>
    $(document).ready(function(){
        $("#contact").addClass("active");
        $("header:first").addClass("header--normal");
        $("footer:first").addClass("footer--normal");
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\rhythmhouse\branches\dev\resources\views/web/contact.blade.php ENDPATH**/ ?>