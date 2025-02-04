<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/polindra21.png')); ?>" />

    <!-- TITLE -->
    <title>SIKI POLINDRA | Dosen | Dashbord</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="<?php echo e(asset('assets-user/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="<?php echo e(asset('assets-user/css/style.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets-user/css/dark-style.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets-user/css/transparent-style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets-user/css/skin-modes.css')); ?>" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="<?php echo e(asset('assets-user/css/icons.css')); ?>" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo e(asset('assets-user/colors/color1.css')); ?>" />
    <?php echo $__env->yieldContent('css'); ?>
    <base href="<?php echo e(asset('assets-user')); ?>/">

</head>

<body class="app sidebar-mini ltr light-mode">

    <!-- GLOBAL-LOADER -->
    
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!-- app-Header -->
            <?php echo $__env->make('dosen.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- /app-Header -->

            <!--APP-SIDEBAR-->
            <?php echo $__env->make('dosen.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!--app-content open-->
            <?php echo $__env->make('dosen.layout.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--app-content close-->

        </div>

        <!-- FOOTER -->
        <?php echo $__env->make('dosen.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- FOOTER END -->

    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="<?php echo e(asset('assets-user/js/jquery.min.js')); ?>"></script>

    <!-- BOOTSTRAP JS -->
    <script src="<?php echo e(asset('assets-user/plugins/bootstrap/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets-user/plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>

    <!-- SPARKLINE JS-->
    <script src="<?php echo e(asset('assets-user/js/jquery.sparkline.min.js')); ?>"></script>

    <!-- Sticky js -->
    <script src="<?php echo e(asset('assets-user/js/sticky.js')); ?>"></script>


    <!-- SIDEBAR JS -->
    <script src="<?php echo e(asset('assets-user/plugins/sidebar/sidebar.js')); ?>"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="<?php echo e(asset('assets-user/plugins/p-scroll/perfect-scrollbar.js')); ?>"></script>
    <script src="<?php echo e(asset('assets-user/plugins/p-scroll/pscroll.js')); ?>"></script>
    <script src="<?php echo e(asset('assets-user/plugins/p-scroll/pscroll-1.js')); ?>"></script>


    <!-- INTERNAL SELECT2 JS -->
    <script src="<?php echo e(asset('assets-user/plugins/select2/select2.full.min.js')); ?>"></script>

    <!-- INTERNAL Data tables js-->
    <script src="<?php echo e(asset('assets-user/plugins/datatable/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets-user/plugins/datatable/js/dataTables.bootstrap5.js')); ?>"></script>
    <script src="<?php echo e(asset('assets-user/plugins/datatable/dataTables.responsive.min.js')); ?>"></script>

    <!-- INTERNAL APEXCHART JS -->
    <script src="<?php echo e(asset('assets-user/js/apexcharts.js')); ?>"></script>
    <script src="<?php echo e(asset('assets-user/plugins/apexchart/irregular-data-series.js')); ?>"></script>



    <!-- INTERNAL Flot JS -->
    <script src="<?php echo e(asset('assets-user/plugins/flot/jquery.flot.js')); ?>"></script>
    <script src="<?php echo e(asset('assets-user/plugins/flot/jquery.flot.fillbetween.js')); ?>"></script>
    <script src="<?php echo e(asset('assets-user/plugins/flot/chart.flot.sampledata.js')); ?>"></script>
    <script src="<?php echo e(asset('assets-user/plugins/flot/dashboard.sampledata.js')); ?>"></script>

    

    <!-- SIDE-MENU JS-->
    <script src="<?php echo e(asset('assets-user/plugins/sidemenu/sidemenu.js')); ?>"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="<?php echo e(asset('assets-user/js/index1.js')); ?>"></script>

    <!-- Color Theme js -->
    <script src="<?php echo e(asset('assets-user/js/themeColors.js')); ?>"></script>

    <!-- CUSTOM JS -->
    <script src="<?php echo e(asset('assets-user/js/custom.js')); ?>"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


</body>

</html><?php /**PATH D:\coolyeah\proyek_ki_polindra\proyek2\resources\views/dosen/index.blade.php ENDPATH**/ ?>