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
        Photo Gallery | <?php echo e($application->name); ?>

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
                <h1 class="page-title">Photo Gallery</h1>
                <div class="breadcrumbs">
                    <p>
                        <a href="<?php echo e(route('home.index')); ?>" class="link">Home </a>
                        <i class="fa fa-chevron-right"></i> Customer Corner <i class="fa fa-chevron-right"></i>  Photo Gallery
                    </p>
                </div>
                <!-- /Title -->

               <!-- Photo Gallery -->
                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-12 d-flex justify-content-center mb-5">

                        <ul class="nav nav-tabs nav-justified mb-3 dock-depart sidebar-tab-list" id="runnerView" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="view-gallery-tab" data-toggle="tab" href="#gallery-tab" role="tab" aria-controls="gallery-tab"
                                   aria-selected="true">
                                    Gallery
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="view-office-tab" data-toggle="tab" href="#office-tab" role="tab" aria-controls="office-tab"
                                   aria-selected="true">
                                    Office
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="view-dock-tab" data-toggle="tab" href="#dock-tab" role="tab" aria-controls="dock-tab"
                                   aria-selected="true">
                                    Docks
                                </a>
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!-- Gallery Tab Content -->
                <div class="tab-content" id="myTabContent">

                    <!-- Gallery -->
                    <div class="tab-pane fade show active" id="gallery-tab" role="tabpanel" aria-labelledby="gallery-tab">

                        <!-- Grid row -->
                        <div class="gallery" id="gallery">

                            <!-- Gallery Image -->
                            <div class="mb-3 pics animation all 2">
                                <img class="img-fluid" src="<?php echo e(asset('storage/app-images/gallery-1.jpg')); ?>" alt="Card image cap">
                            </div>
                            <!-- Gallery Image -->
                            <!-- Gallery Image -->
                            <div class="mb-3 pics animation all 2">
                                <img class="img-fluid" src="<?php echo e(asset('storage/app-images/gallery-2.jpg')); ?>" alt="Card image cap">
                            </div>
                            <!-- Gallery Image -->
                            <!-- Gallery Image -->
                            <div class="mb-3 pics animation all 2">
                                <img class="img-fluid" src="<?php echo e(asset('storage/app-images/gallery-3.jpg')); ?>" alt="Card image cap">
                            </div>
                            <!-- Gallery Image -->
                            <!-- Gallery Image -->
                            <div class="mb-3 pics animation all 2">
                                <img class="img-fluid" src="<?php echo e(asset('storage/app-images/gallery-4.jpg')); ?>" alt="Card image cap">
                            </div>
                            <!-- Gallery Image -->
                        </div>
                        <!-- Grid row -->
                    </div>
                    <!-- /Gallery -->
                    <!-- Rental Office -->
                    <div class="tab-pane fade show" id="office-tab" role="tabpanel" aria-labelledby="office-tab">
                        <div class="gallery" id="gallery">
                            <!-- Gallery Image -->
                            <div class="mb-3 pics animation all 2">
                                <img class="img-fluid" src="<?php echo e(asset('storage/app-images/office-4.jpg')); ?>" alt="Card image cap">
                            </div>
                            <!-- Gallery Image -->
                            <!-- Gallery Image -->
                            <div class="mb-3 pics animation all 2">
                                <img class="img-fluid" src="<?php echo e(asset('storage/app-images/office-1.jpg')); ?>" alt="Card image cap">
                            </div>
                            <!-- Gallery Image -->
                            <div class="mb-3 pics animation all 2">
                                <img class="img-fluid" src="<?php echo e(asset('storage/app-images/gallery-office.jpg')); ?>" alt="Card image cap">
                            </div>
                            <!-- Gallery Image -->
                            <!-- Gallery Image -->
                            <div class="mb-3 pics animation all 2">
                                <img class="img-fluid" src="<?php echo e(asset('storage/app-images/office-2.jpg')); ?>" alt="Card image cap">
                            </div>
                            <!-- Gallery Image -->
                            <!-- Gallery Image -->
                            <div class="mb-3 pics animation all 2">
                                <img class="img-fluid" src="<?php echo e(asset('storage/app-images/office-3.jpg')); ?>" alt="Card image cap">
                            </div>
                            <!-- Gallery Image -->
                        </div>
                    </div>
                    <!-- /Rental Office -->
                    <!-- Dock -->
                    <div class="tab-pane fade show" id="dock-tab" role="tabpanel" aria-labelledby="dock-tab">
                        <div class="gallery" id="gallery">
                            <!-- Gallery Image -->
                            <div class="mb-3 pics animation all 2">
                                <img class="img-fluid" src="<?php echo e(asset('storage/app-images/dock-1.jpg')); ?>" alt="Card image cap">
                            </div>
                            <!-- Gallery Image -->
                            <!-- Gallery Image -->
                            <div class="mb-3 pics animation all 2">
                                <img class="img-fluid" src="<?php echo e(asset('storage/app-images/dock-2.jpg')); ?>" alt="Card image cap">
                            </div>
                            <!-- Gallery Image -->
                        </div>
                    </div>
                    <!-- /Dock -->

                </div>
                <!-- /Gallery Tab Content -->


               <!-- /Photo Gallery -->
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
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/home/gallery.blade.php ENDPATH**/ ?>