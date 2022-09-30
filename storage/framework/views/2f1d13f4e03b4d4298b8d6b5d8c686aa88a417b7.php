<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo e(asset('nice')); ?>/assets/img/favicon.png" rel="icon">
    <link href="<?php echo e(asset('nice')); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo e(asset('nice')); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('nice')); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo e(asset('nice')); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('nice')); ?>/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?php echo e(asset('nice')); ?>/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?php echo e(asset('nice')); ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo e(asset('nice')); ?>/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo e(asset('nice')); ?>/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <main>
        <div class="container">

            <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
                <h5><?php echo $__env->yieldContent('code'); ?></h5>
                <h6><?php echo $__env->yieldContent('message'); ?></h6>
                <img src="<?php echo e(asset('nice')); ?>/assets/img/not-found.svg" class="img-fluid" alt="Page Not Found">
                <br>
                <a class="btn" href="<?php echo e(route('home')); ?>">Back to home</a>
                <br>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                    Designed by <a href="#">Muhammad Farhan Al-Ghifari</a>
                </div>
            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo e(asset('nice')); ?>/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?php echo e(asset('nice')); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(asset('nice')); ?>/assets/vendor/chart.js/chart.min.js"></script>
    <script src="<?php echo e(asset('nice')); ?>/assets/vendor/echarts/echarts.min.js"></script>
    <script src="<?php echo e(asset('nice')); ?>/assets/vendor/quill/quill.min.js"></script>
    <script src="<?php echo e(asset('nice')); ?>/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?php echo e(asset('nice')); ?>/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?php echo e(asset('nice')); ?>/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo e(asset('nice')); ?>/assets/js/main.js"></script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\contoh_spatie\resources\views/errors/minimal.blade.php ENDPATH**/ ?>