<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home-master','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home-master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <?php $__env->startSection('styles'); ?>

    <?php $__env->stopSection(); ?>

    <?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <?php $__env->startSection('browser_title'); ?>
        Know Before You Go | <?php echo e($application->name); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('meta_description'); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('navbar_rental_type'); ?>
        Our
        <?php if($application->rental_type != ''): ?>
            <?php echo e($application->rental_type); ?>

        <?php else: ?>
            Rentals
        <?php endif; ?>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('favicon'); ?>
        <?php echo e(asset('storage/'. $application->favicon)); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('app_name'); ?>
        <?php echo e($application->name); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('logo-square-1'); ?>
        <?php echo e(asset('storage/'. $application->logo_square_1)); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('logo-square-2'); ?>
        <?php echo e(asset('storage/'. $application->logo_square_2)); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('logo-horizontal-1'); ?>
        <?php echo e(asset('storage/'. $application->logo_horizontal_1)); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('logo-horizontal-2'); ?>
        <?php echo e(asset('storage/'. $application->logo_horizontal_1)); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('navbar-operations'); ?>
        <?php if($application->operations_name == ''): ?>
            Operations
        <?php else: ?>
            <?php echo e($application->operations_name); ?>

        <?php endif; ?>
    <?php $__env->stopSection(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php $__env->startSection('content'); ?>
        <style>
            .main-body {
                background-image: url("<?php echo e(asset('/storage/app-images/home-background.jpg')); ?>");
            }
        </style>

        <div class="main-body">
            <div class="container main">

                <!-- Title -->
                <h1 class="page-title">Know Before You Go</h1>
                <div class="breadcrumbs">
                    <p>
                        <a href="<?php echo e(route('home.index')); ?>" class="link">Home </a>
                        <i class="fa fa-chevron-right"></i> Customer Corner <i class="fa fa-chevron-right"></i>  Know Before You Go
                    </p>
                </div>
                <!-- /Title -->

                <!-- Know Before You Go -->
                <div class="row">
                    <div class="col-12">
                       <div class="div-border-5 mt-4">
                           <h2 class="section-header-left border-bottom-5">INFORMATION</h2>
                       </div>
                    </div>
                    <div class="col-12">
                        <p>
                            <a href="http://www.boatus.org/oregon/" target="_blank"> Online Boaters Safety Course! </a>
                        </p>
                        <p>
                            <a href="https://www.accuweather.com/en/us/portland-or/97209/daily-weather-forecast/350473" target="_blank">Today's Weather in Portland, OR! </a>
                        </p>
                        <p>
                            <a href="https://geo.maps.arcgis.com/apps/webappviewer/index.html?id=841da68081294bb2a6b50f93b1a12f05" target="_blank">Interactive Boaters Map! </a>
                        </p>
                        <p>
                            <a href="https://water.weather.gov/ahps2/hydrograph.php?wfo=pqr&gage=prto3" target="_blank">Willamette River Levels </a>
                        </p>
                        <p>
                            <a href="https://tidesandcurrents.noaa.gov/noaatidepredictions.html?id=9440083" target="_blank">Columbia River Levels </a>
                        </p>
                        <p>
                            <a href="https://www.portland.gov/parks/docks" target="_blank">Boat Launches  </a>
                        </p>
                    </div>
                </div>
                <!-- /Know Before You Go -->
            </div>
    <?php $__env->stopSection(); ?>



    <?php $__env->startSection('scripts'); ?>

    <?php $__env->stopSection(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/home/know.blade.php ENDPATH**/ ?>