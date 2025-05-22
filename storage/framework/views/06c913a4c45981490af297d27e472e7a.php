<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RVIMIN</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo e(url('lib/owlcarousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')); ?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo e(url('css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo e(url('css/style.css')); ?>" rel="stylesheet">
</head>

<body>

    <?php if(auth()->guard()->check()): ?>
    <!-- Sidebar Start -->
        <?php echo $__env->make('admin.layout._sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Sidebar End -->

    <!-- Content Start -->
        <!-- Navbar Start -->
            <?php echo $__env->make('admin.layout._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Navbar End -->
    <?php endif; ?>
    
            <?php echo $__env->yieldContent('content'); ?>

    <?php if(auth()->guard()->check()): ?>
        <!-- Footer Start -->
            <?php echo $__env->make('admin.layout._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Footer End -->
    <?php endif; ?>

    <!-- Content End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(url('lib/chart/chart.min.js')); ?>"></script>
    <script src="<?php echo e(url('lib/easing/easing.min.js')); ?>"></script>
    <script src="<?php echo e(url('lib/waypoints/waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(url('lib/owlcarousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(url('lib/tempusdominus/js/moment.min.js')); ?>"></script>
    <script src="<?php echo e(url('lib/tempusdominus/js/moment-timezone.min.js')); ?>"></script>
    <script src="<?php echo e(url('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>

    <!-- Template Javascript -->
    <script src="<?php echo e(url('js/main.js')); ?>"></script>
</body>

</html><?php /**PATH D:\Laravel-Crud\project-rvi\resources\views/admin/layout/app.blade.php ENDPATH**/ ?>