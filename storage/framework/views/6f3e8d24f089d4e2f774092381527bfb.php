<div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>RVIMIN</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="<?php echo e(asset('storage/img/' . auth()->user()->image)); ?>" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"></h6>
                        <?php if(auth()->user()->name): ?>
                        <span><?php echo e(auth()->user()->name); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="<?php echo e(route('dashboard')); ?>" class="nav-item nav-link <?php echo e(request()->segment(1) == 'dashboard' ? 'active':''); ?>"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="<?php echo e(route('about-us')); ?>" class="nav-item nav-link <?php echo e(request()->segment(1) == 'about-us' ? 'active':''); ?>"><i class="fa fa-user me-2"></i>About Us</a>
                    <a href="<?php echo e(route('services')); ?>" class="nav-item nav-link <?php echo e(request()->segment(1) == 'services' ? 'active':''); ?>"><i class="fa fa-cog me-2"></i>Services</a>
                    <a href="<?php echo e(route('blog')); ?>" class="nav-item nav-link <?php echo e(request()->segment(1) == 'blog' ? 'active':''); ?>"><i class="fa fa-blog me-2"></i>Blog</a>
                    <a href="" class="nav-item nav-link"><i class="fa fa-file me-2"></i>Resume</a>
                    <a href="<?php echo e(route('work')); ?>" class="nav-item nav-link <?php echo e(request()->segment(1) == 'work' ? 'active':''); ?>"><i class="fas fa-tasks me-2"></i>Works</a>
                    <a href="<?php echo e(route('contactform')); ?>" class="nav-item nav-link <?php echo e(request()->segment(1) == 'contact-form' ? 'active':''); ?>"><i class="fa fa-keyboard me-2"></i>Contact Form</a>
                   
                    
                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End --><?php /**PATH D:\Laravel-Crud\project-rvi\resources\views/admin/layout/_sidebar.blade.php ENDPATH**/ ?>