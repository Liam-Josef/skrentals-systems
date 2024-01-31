<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php echo $__env->yieldContent('browser_title'); ?>

    <link rel="icon" href="<?php echo $__env->yieldContent('favicon'); ?>">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('css/blog-home.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <!-- Custom fonts for this template-->
    <link href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')); ?>" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo e(asset('css/sb-admin-2.css')); ?>" rel="stylesheet">


    <?php echo $__env->yieldContent('styles'); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-V2HB7CGVTH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-V2HB7CGVTH');
    </script>
</head>

<body style="padding-right :0px !important;">

<!-- Navigation -->
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.team.header.team-header','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('team.header.team-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<!-- Page Content -->
<div class="container-fluid">
    <div class="page-min-height">
        <div class="row">

    <?php echo $__env->yieldContent('page_title'); ?>
    <!-- Dock/Office Sidebar Widgets Column -->
        <div class="col-md-2">
            <div class="row">
                <div class="col-sm-6 col-md-12">
                    <ul class="navbar-nav sidebar-post accordion my-3 shadow" id="accordionSidebar">

                        <li class="nav-item bg-dark mb-2">
                            <a href="<?php echo e(route('office.index')); ?>" class="nav-link collapsed bg-dark <?php echo e(Request::is('team/office/index*') ? 'dkred disabled' : ''); ?>">
                                <span>Office Schedule</span>
                            </a>
                        </li>

                        <li class="nav-item bg-dark mb-2">
                            <a href="<?php echo e(route('office.precheckin')); ?>" class="nav-link collapsed bg-dark <?php echo e(Request::is('team/office/precheckin*') ? 'dkred disabled' : ''); ?>">
                                <span>Pre - Check In</span>
                            </a>
                        </li>

                        <li class="nav-item bg-dark mb-2">
                            <a href="<?php echo e(route('office.rentalHistory')); ?>" class="nav-link collapsed bg-dark <?php echo e(Request::is('team/office/rental-history*') ? 'dkred disabled' : ''); ?>">
                                <span>Rental History</span>
                            </a>
                        </li>

                        <li class="nav-item bg-dark mb-2">
                            <a href="<?php echo e(route('office.customers')); ?>" class="nav-link collapsed bg-dark <?php echo e(Request::is('team/office/customers*') ? 'dkred disabled' : ''); ?> <?php echo e(Request::is('team/office/customer*') ? 'dkred' : ''); ?>">
                                <span>Customers</span>
                            </a>
                        </li>

                        <li class="nav-item bg-dark mb-2">
                            <a href="<?php echo e(route('office.coc')); ?>" class="nav-link collapsed bg-dark <?php echo e(Request::is('team/office/coc*') ? 'dkred disabled' : ''); ?>">
                                <span>Change of Condition</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="col-sm-6 col-md-12">
                    <?php echo $__env->yieldContent('sidebar'); ?>
                </div>
            </div>






        </div>
        <!-- Dock/Office Entries Column -->
        <div class="col-md-10">
            <div class="">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>

    </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.footer','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<!-- Logout Modal-->
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal.logout','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal.logout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<!-- Bootstrap core JavaScript -->
<script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

<!-- Page level custom scripts -->
<?php echo $__env->yieldContent('scripts'); ?>

</body>

</html>
<?php /**PATH /var/www/skrentals.systems/sk-website/resources/views/components/office-master.blade.php ENDPATH**/ ?>