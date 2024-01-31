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
        <link href="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
    <?php $__env->stopSection(); ?>



    <?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>




        <?php $__env->startSection('browser_title'); ?>
            <?php echo e($application->name); ?>

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
        <?php echo $__env->yieldContent('page_title'); ?>

            <div id="carouselIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo e(asset('/storage/app-images/people-riding-seadoo.jpg')); ?>" class="d-block w-100" alt="People riding on a SeaDoo">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo e(asset('/storage/app-images/people-on-pontoon.jpg')); ?>" class="d-block w-100" alt="People riding on a Pontoon Boat">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo e(asset('/storage/app-images/scarab-on-water.jpg')); ?>" class="d-block w-100" alt="People riding on a Scarab Jetboat">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo e(asset('/storage/app-images/snowmobile.jpg')); ?>" class="d-block w-100" alt="A man riding on a snowmobile">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo e(asset('/storage/app-images/women-on-kayaks.jpg')); ?>" class="d-block w-100" alt="2 women sitting on kayaks">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo e(asset('/storage/app-images/spyders-driving-on-road.jpg')); ?>" class="d-block w-100" alt="3 Spyder motorcycles driving down the road">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselIndicators" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselIndicators" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>




            <style>
                .img-1 {
                    background-image: url("<?php echo e(asset('/storage/app-images/sm-1-people-riding-seadoo.jpg')); ?>");
                }
                .img-2 {
                    background-image: url("<?php echo e(asset('/storage/app-images/sm-2-scarab.jpg')); ?>");
                }
                .img-3 {
                    background-image: url("<?php echo e(asset('/storage/app-images/sm-3-kayaks.jpg')); ?>");
                }
                .img-4 {
                    background-image: url("<?php echo e(asset('/storage/app-images/sm-4-pontoons.jpg')); ?>");
                }
                .img-5 {
                    background-image: url("<?php echo e(asset('/storage/app-images/sm-5-segways.jpg')); ?>");
                }
                .img-6 {
                    background-image: url("<?php echo e(asset('/storage/app-images/sm-6-snowmobile.jpg')); ?>");
                }
                .map {
                    background-image: url("<?php echo e(asset('/storage/app-images/map.jpg')); ?>");
                }
                .sled {
                    background-image: url("<?php echo e(asset('/storage/app-images/sled.jpg')); ?>");
                }
                .main-body {
                    background-image: url("<?php echo e(asset('/storage/app-images/home-background.jpg')); ?>");
                }
            </style>
        <div class="main-body">
            <div class="container main home">
                <div class="cont-top">
                    <div class="row">
                        <div class="col-12">
                            <h3>
                                <i class="fa fa-map-marker"></i>
                                250 SE Division Place</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 img">
                        <a class="img-back img-1" href="<?php echo e(route('home.seadoo')); ?>">
                            <div class="overlay"></div>
                            <span class="img-text">
                                Sea-Doo
                                <span class="hover-text">
                                    Rentals
                                    <i class="fa fa-angle-double-right"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-6 img">
                        <a class="img-back img-2" href="<?php echo e(route('home.boat')); ?>">
                            <div class="overlay"></div>
                            <span class="img-text">
                                Jet Boat
                                <span class="hover-text">
                                    Rentals
                                    <i class="fa fa-angle-double-right"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-6 img">
                        <a class="img-back img-3" href="<?php echo e(route('home.kayak')); ?>">
                            <div class="overlay"></div>
                            <span class="img-text">
                                Kayak/Stand-up Paddleboard
                                <span class="hover-text">
                                    Rentals
                                    <i class="fa fa-angle-double-right"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-6 img">
                        <a class="img-back img-4" href="<?php echo e(route('home.boat')); ?>">
                            <div class="overlay"></div>
                            <span class="img-text">
                                Pontoon Boat
                                <span class="hover-text">
                                    Rentals
                                    <i class="fa fa-angle-double-right"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-6 img">
                        <a class="img-back img-5" href="<?php echo e(route('home.spyder')); ?>">
                            <div class="overlay"></div>
                            <span class="img-text">
                                2 Wheel On-Road
                                <span class="hover-text">
                                    Rentals
                                    <i class="fa fa-angle-double-right"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-6 img">
                        <a class="img-back img-6" href="<?php echo e(route('home.snowmobile')); ?>">
                            <div class="overlay"></div>
                            <span class="img-text">
                                Snowmobile
                                <span class="hover-text">
                                    Rentals
                                    <i class="fa fa-angle-double-right"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-12 img">
                        <a class="img-back map" href="<?php echo e(route('home.maps')); ?>">
                            <div class="overlay"></div>
                            <span class="img-text">
                                Map &
                                <span class="hover-text">
                                    Hours
                                    <i class="fa fa-angle-double-right"></i>
                                </span>
                            </span>
                        </a>
                    </div>

                </div>

                <div class="row">
                    <div class="col-12">
                        <h1 class="border-bottom-5">Welcome to SK Watercraft Rentals</h1>
                        <p class="text-center">
                            SK Watercraft Rentals - <a href="tel:503-284-6447">503-284-6447</a>
                        </p>
                        <p>
                            We offer Watercraft Rentals, Jet Ski's Rentals / WaveRunner Rentals / Sea-Doo Rentals.
                        </p>
                        <p>
                            We Rent Pontoon Boats, Ski Boats, Fishing Boats.  Pontoon Boat Rentals, Runabout Boat Rentals, Aluminum Fishing Boat rentals near downtown Portland Oregon.  Walk down to our dock and Go!
                        </p>
                        <p>
                            Located in Portland Oregon on the Willamette River. We are open 7 days a week from 9:30am-7:00pm during the summer (Mid-June - Mid-Sept).  We still rent early and late season by appointment only. We also offer rentals of Pontoon Boats, Ski Boats, Fishing Boats!  Stand up Paddle Boards SUPs, Kayak Rentals.
                        </p>
                        <p>
                            Snowmobile Rentals are offered during the winter. Trailer a Snowmobile up to a snow covered winter wonderland and make tracks where ever your adventure takes you.  We also rent the Can-am Spyder Roadsters.
                        </p>
                        <p class="yellow text-center">
                            We Do Corporate & Group Events!
                        </p>
                        <p class="text-center">
                            COME JOIN THE FUN ANY TIME OF YEAR!!
                        </p>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-6 img">
                        <a class="img-back sled" href="mailto:info@skwatercraftrentals.com">
                            <div class="overlay"></div>
                            <span class="sled-text">
                               <h3> Reservation & Info Request</h3>
                               <h4>
                                   Click to email us
                                <br><br>or
                                <br><br>call us at
                                <br><br><i class="fa fa-phone"></i> (503)284-6447</h4>
                            </span>
                        </a>
                    </div>
                    <div class="col-sm-6">

                        <a href="<?php echo e(route('home.snowmobile')); ?>" class="btn btn-large btn-primary width-100 mt-5">
                            <h1>Book Now</h1>
                        </a>
                        <a href="#" class="btn btn-large btn-primary width-100 mt-5">
                            <h1>Gift Card</h1>
                        </a>

                    </div>
                </div>
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
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/home/index.blade.php ENDPATH**/ ?>