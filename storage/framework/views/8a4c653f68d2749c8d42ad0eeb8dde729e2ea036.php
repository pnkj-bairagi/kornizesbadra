<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('assets/backend')); ?>/img/favicon.png">
        <link rel="stylesheet" href="<?php echo e(asset('assets/backend')); ?>/css/pace.css">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Kornizesbadra.com</title>
        <!-- CSS -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600" rel="stylesheet" type="text/css">
        <link href="<?php echo e(asset('assets/backend')); ?>/vendors/material-icons/material-icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo e(asset('assets/backend')); ?>/vendors/mono-social-icons/monosocialiconsfont.css" rel="stylesheet" type="text/css">
        <link href="<?php echo e(asset('assets/backend')); ?>/vendors/feather-icons/feather.css" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jqvmap.min.css" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.18/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
        <?php echo $__env->yieldPushContent('page-styles'); ?>
        <link href="<?php echo e(asset('assets/backend')); ?>/css/style.css" rel="stylesheet" type="text/css">
        <!-- Head Libs -->
        <script src="<?php echo e(asset('assets/backend')); ?>/js/modernizr.min.js"></script>
        <script data-pace-options='{ "ajax": false, "selectors": [ "img" ]}' src="<?php echo e(asset('assets/backend')); ?>/js/pace.min.js"></script>
    </head>
    
    <body class="sidebar-light sidebar-expand navbar-brand-dark">
        <div id="wrapper" class="wrapper">
            <?php echo $__env->make('Backend.admin.layout.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="content-wrapper">
                <?php echo $__env->make('Backend.admin.layout.includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                
                <?php echo $__env->yieldContent('main-content'); ?>
            </div>
            <!-- /.content-wrapper -->
            <?php echo $__env->make('Backend.admin.layout.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <!--/ #wrapper -->
        <!-- Scripts -->
        <style>
            h6.page-title-heading
            {
                width:100%;
            }
        </style>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/2.7.9/metisMenu.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/perfect-scrollbar.min.js"></script>
        <script src="<?php echo e(asset('assets/backend')); ?>/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/1.9.2/countUp.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jquery.vmap.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.usa.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.18/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo e(asset('assets/backend')); ?>/js/template.js"></script>
        <script src="<?php echo e(asset('assets/backend')); ?>/js/custom.js"></script>
    </body>
</html><?php /**PATH /home3/iweblhrx/public_html/kornizesbadra/resources/views/Backend/admin/layout/app.blade.php ENDPATH**/ ?>