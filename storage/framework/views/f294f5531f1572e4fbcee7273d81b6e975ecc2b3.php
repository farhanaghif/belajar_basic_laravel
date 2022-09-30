<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Hann | Belajar</title>
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

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="<?php echo e(route('home')); ?>" class="logo d-flex align-items-center">
                <img src="<?php echo e(asset('nice')); ?>/assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">NiceAdmin</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                
                <?php if(auth()->guard()->guest()): ?>
                    <?php if(Route::has('login')): ?>
                    <?php endif; ?>
                    <?php if(Route::has('register')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                        </li>
                    <?php endif; ?>
                <?php else: ?>
                    <li class="nav-item dropdown pe-3">

                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                            data-bs-toggle="dropdown">
                            <img src="<?php echo e(asset('nice')); ?>/assets/img/profile-img.jpg" alt="Profile"
                                class="rounded-circle">
                            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo e(Auth::user()->name); ?></span>
                        </a><!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6><?php echo e(Auth::user()->name); ?></h6>
                                <span>Web Developer</span>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                    <i class="bi bi-person"></i>
                                    <span>My Profile</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                    <i class="bi bi-gear"></i>
                                    <span>Account Settings</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                    <i class="bi bi-question-circle"></i>
                                    <span>Need Help?</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Sign Out</span>
                                </a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </li>

                        </ul><!-- End Profile Dropdown Items -->
                    </li><!-- End Profile Nav -->
                <?php endif; ?>

                
            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-heading">Fitur Admin</li>

            <li class="nav-item">
                <a class="nav-link <?php echo e(Request()->routeIs('dashboard') ? '' : 'collapsed'); ?>"
                    href="<?php echo e(route('dashboard')); ?>">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link <?php echo e(Request()->routeIs('project*') ? '' : 'collapsed'); ?>"
                    href="<?php echo e(route('project.index')); ?>">
                    <i class="bi bi-menu-button-wide"></i>
                    <span>Project</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?php echo e(Request()->routeIs('task') ? '' : 'collapsed'); ?>" href="<?php echo e(route('task')); ?>">
                    <i class="bi bi-card-checklist"></i>
                    <span>Task</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?php echo e(Request()->routeIs('video*') ? '' : 'collapsed'); ?>"
                    href="<?php echo e(route('video')); ?>">
                    <i class="bi bi-collection-play-fill"></i>
                    <span>Video</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?php echo e(Request()->routeIs('article') ? '' : 'collapsed'); ?>"
                    href="<?php echo e(route('article')); ?>">
                    <i class="bi bi-card-heading"></i>
                    <span>Article</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?php echo e(Request()->routeIs('post*') ? '' : 'collapsed'); ?>"
                    href="<?php echo e(route('post.index')); ?>">
                    <i class="bi bi-cloud-upload"></i>
                    <span>Posts</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?php echo e(Request()->routeIs('activity') ? '' : 'collapsed'); ?>"
                    href="<?php echo e(route('activity')); ?>">
                    <i class="bi bi-clock-history"></i>
                    <span>Activity Log</span>
                </a>
            </li>
            

        </ul>

    </aside><!-- End Sidebar-->
    <main id="main" class="main">
        <?php echo $__env->yieldContent('content'); ?>
    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="#">Muhammad Farhan Al-Ghifari</a>
        </div>
    </footer><!-- Akhir Footer -->

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
<?php /**PATH C:\xampp\htdocs\contoh_spatie\resources\views/layouts/app-nice.blade.php ENDPATH**/ ?>