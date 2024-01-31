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

        About Us | <?php echo e($application->name); ?>

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
                <h1 class="page-title"> About Us</h1>
                <div class="breadcrumbs">
                    <p>
                        <a href="<?php echo e(route('home.index')); ?>" class="link">Home </a>
                        <i class="fa fa-chevron-right"></i> Operation Info <i class="fa fa-chevron-right"></i>  About Us
                    </p>
                </div>
                <!-- /Title -->

                <div class="row">

                    <div class="col-sm-3">
                        <img src="<?php echo e(asset('/storage/app-images/original-location.jpg')); ?>" alt="Sk Watercraft Rentals second location on Marine Dr" class="img-responsive mt-3">
                    </div>
                    <div class="col-sm-9">
                        <p class="mt-0">
                            Our origin into renting personal watercraft began in the Spring of 1994, when Shawn started SK Jet Ski Rentals renting two personal watercraft to his
                            fraternity at Oregon State University. The business grew from just one fraternity to include many fraternities of both Oregon State and U of O, and
                            then onto the general public. Our fleet went from two, to six, to eleven, to seventeen, into the mid-thirty’s! By 1998, we were the largest rental
                            operation in the State of Oregon with three locations around the Portland Area (Columbia River, Hagg Lake, and Wilsonville).
                        </p>
                    </div>

                    <div class="col-12">
                        <p>
                            SK Watercraft Rentals, Inc. is the business name today, is still renting personal watercraft on the Columbia River just as we did in the mid-1990's.
                            But now we have added to our services with rentals of 21ft Ski Boats, Pontoon Boats, Fishing Boats, Can-am Spyder Roadster, and Segway Rentals along
                            the Portland Waterfront.  In the winter we rent Ski-doo Snowmobiles.  We offer many recreational activities to enjoy the outdoors here in Oregon.
                        </p>
                    </div>

                    <div class="col-sm-9">
                        <p>
                            We also do Corporate Events!  From the simple gathering of 20 to very large events with thousands with full staff at a site of your choice as well.
                        </p>
                        <p>
                            We have now been in operation for over 25yrs!  Thank you for our customers continued support.
                        </p>
                        <p>
                            In a continuous expansion of services to our customers, we have added another online website to our portfolio.
                            <br>
                            <a href="http://www.sourcepowersports.com/" target="_blank">  Source Powersports offers a full selection of BRP replacement parts and accessories for Ski-Doo snowmobiles and Sea-Doo watercraft.</a>
                        </p>

                    </div>
                    <div class="col-sm-3">
                        ]<img src="<?php echo e(asset('/storage/app-images/original-sk.jpg')); ?>" alt="Sk Watercraft Rentals original location on Marine Dr" class="img-responsive mt-3">
                    </div>

                </div>

                <p class="pb-5">
                   &nbsp;
                </p>
            </div>
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
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/home/about-us.blade.php ENDPATH**/ ?>