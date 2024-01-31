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

        Kayak & SUP Rentals | <?php echo e($application->name); ?>

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
                <h1 class="page-title">Kayak & Paddleboard Rentals</h1>
                <div class="breadcrumbs">
                    <p>
                        <a href="<?php echo e(route('home.index')); ?>" class="link">Home </a>
                        <i class="fa fa-chevron-right"></i> Rentals <i class="fa fa-chevron-right"></i> Kayak & SUP Rentals
                    </p>
                </div>
                <!-- /Title -->

                <div class="row">
                    <div class="col-sm-4">
                        <!-- Single Info -->
                        <?php $__currentLoopData = $single_kayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kayak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img src="<?php echo e(asset('storage/' . $kayak->image)); ?>" alt="<?php echo e($kayak->img_alt); ?>" class="page-img" />
                            <?php if($kayak->description != ''): ?>
                                <h2 class="section-header"><?php echo e($kayak->description); ?></h2>
                            <?php else: ?>
                                <h2 class="section-header"><?php echo e($kayak->name); ?></h2>
                            <?php endif; ?>

                            <?php if($kayak->has('durations')): ?>
                                <?php $__currentLoopData = $kayak->durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <p class="text-center">
                                        <?php if($duration->has('prices')): ?>
                                            <?php $__currentLoopData = $duration->prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($duration->id == $price->duration_id && $kayak->id == $price->type_id): ?>
                                                    $<?php echo e($price->amount); ?> -
                                                    <?php echo e($duration->name); ?> ( <?php echo e($duration->hour); ?> hour
                                                    <?php if($price->notes != ''): ?>
                                                        - <?php echo e($price->notes); ?>

                                                    <?php endif; ?>
                                                 )
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </p>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                No Duration
                            <?php endif; ?>

                            <p class="text-center">
                                +$40/day each additional day
                            </p>

                            <a href="<?php echo e(route('home.book_rental', $kayak)); ?>" class="btn btn-book-3">Click to Book Now</a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!-- /Single Info -->
                    </div>
                    <div class="col-sm-4">
                        <!-- Double Info -->
                        <?php $__currentLoopData = $double_kayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kayak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img src="<?php echo e(asset('storage/' . $kayak->image)); ?>" alt="<?php echo e($kayak->img_alt); ?>" class="page-img" />
                            <?php if($kayak->description != ''): ?>
                                <h2 class="section-header"><?php echo e($kayak->description); ?></h2>
                            <?php else: ?>
                                <h2 class="section-header"><?php echo e($kayak->name); ?></h2>
                            <?php endif; ?>

                            <?php if($kayak->has('durations')): ?>
                                <?php $__currentLoopData = $kayak->durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <p class="text-center">
                                        <?php if($duration->has('prices')): ?>
                                            <?php $__currentLoopData = $duration->prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($duration->id == $price->duration_id && $kayak->id == $price->type_id): ?>
                                                    $<?php echo e($price->amount); ?> -
                                                    <?php echo e($duration->name); ?> ( <?php echo e($duration->hour); ?> hour
                                                    <?php if($price->notes != ''): ?>
                                                        - <?php echo e($price->notes); ?>

                                                    <?php endif; ?>
                                                 )
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </p>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                No Duration
                            <?php endif; ?>

                            <p class="text-center">
                                +$40/day each additional day
                            </p>

                            <a href="<?php echo e(route('home.book_rental', $kayak)); ?>" class="btn btn-book-3">Click to Book Now</a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!-- /Double Info -->
                    </div>
                    <div class="col-sm-4">
                        <!-- Paddleboard Info -->
                        <?php $__currentLoopData = $paddleboard; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kayak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img src="<?php echo e(asset('storage/' . $kayak->image)); ?>" alt="<?php echo e($kayak->img_alt); ?>" class="page-img" />
                            <?php if($kayak->description != ''): ?>
                                <h2 class="section-header"><?php echo e($kayak->description); ?></h2>
                            <?php else: ?>
                                <h2 class="section-header"><?php echo e($kayak->name); ?></h2>
                            <?php endif; ?>

                            <?php if($kayak->has('durations')): ?>
                                <?php $__currentLoopData = $kayak->durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <p class="text-center">
                                        <?php if($duration->has('prices')): ?>
                                            <?php $__currentLoopData = $duration->prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($duration->id == $price->duration_id && $kayak->id == $price->type_id): ?>
                                                    $<?php echo e($price->amount); ?> -
                                                    <?php echo e($duration->name); ?> ( <?php echo e($duration->hour); ?> hour
                                                    <?php if($price->notes != ''): ?>
                                                        - <?php echo e($price->notes); ?>

                                                    <?php endif; ?>
                                                 )
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </p>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                No Duration
                            <?php endif; ?>

                            <p class="text-center">
                                +$40/day each additional day
                            </p>

                            <a href="<?php echo e(route('home.book_rental', $kayak)); ?>" class="btn btn-book-3">Click to Book Now</a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!-- /Paddleboard Info -->
                    </div>
                </div>


                <p class="large text-center">
                    LOCATION: 250 SE DIVISION PLACE PORTLAND OR 97202
                </p>
                <p class="large text-center">
                    HOURS OF OPERATION: 9:30AM-7:00PM
                </p>
                <p class="med text-center">
                    7 DAYS A WEEK (DURING SUMMER)
                </p>
                <h3 class="large text-center mt-5 text-primary">
                    HOW IT WORKS
                </h3>
                <h4 class="text-yellow">
                    Getting Here
                </h4>
                <p>
                    Customers will come to 250 SE Division Place in Portland on the Willamette River three blocks South of OMSI.
                    Our dock and operation is located on the East bank of the Willamette River between the Ross Island Bridge and the
                    Tilikum Crossing, one block south of the OMSI Max Station.  Our Rental Office is the Red Shed located at the entrance
                    of the parking lot for Polaris of Portland/SKNW Powersports dealership.
                </p>
                <h4 class="text-yellow">
                    PARKING
                </h4>
                <p>
                    Parking is limited! We recommend carpooling and/or using ride-share services such as Uber and Lyft. Customer may
                    park along buildings in the Division Place 'alley' wherever you find an open spot, but please be respectful of
                    the neighboring businesses down here to not block access to gates, garage doors, etc.  We have been asked NOT to
                    park in The Dealership parking lot during their business hours Tuesday thru Saturday.  Outside our Division Place
                    'alley' surrounding blocks are Zone G -  Free 2hr parking Mon-Fri, with no limits on weekends!  There are also
                    surrounding parking lots from OMSI to the Train Museum on days they are closed for additional options.  Come to
                    the Rental Office for direction if need additional help.
                </p>
                <h4 class="text-yellow">
                    CHECKING IN
                </h4>
                <p>
                    We recommend dropping off items you do not wish to carry and using our carts at the Rental Office (Red Shed) before parking.
                    Customers are to stay near the parking lot and NOT go down to our dock until instructed to do so by staff.  Once parked,
                    just walk up to our Rental Office where we do all the paper work; asking for identification, collect rental fee, damage
                    deposit (carbon copy of card), sign waivers, etc. This will require the cardholder for the rental to be present.
                </p>
                <h4 class="text-yellow">
                    DAMAGE DEPOSIT
                </h4>
                <p class="">
                    An imprint of your credit/debit card will be taken, as well as a pre-authorization for the listed damage deposit amount,
                    verifying the funds and freezing them for up to 5 business days. Some modern “security cards” no longer come with raised
                    lettering, making them un-imprint able. Without the imprint, we cannot Pre-Authorize and must treat the deposit card as
                    we would cash. Pre-Auth deposits require half the amount of the listed damage deposit, refunding the deposit upon safe return of the Snowmobile.
                </p>
                <h4 class="text-yellow">
                    ARRIVING AT THE DOCK
                </h4>
                <p class="">
                    From here, we will escort customers down to the dock and provide all safety related items (life jackets, throw cushions, etc.)
                    and we have charts of the river to view out surrounding waterways. We encourage customers to wear foot protection and appropriate
                    clothing based upon conditions.  All operators are then taken down to the equipment to be rented.  Staff will at this time review
                    our safety check out list covering operational topics, condition of equipment, safety items location, overview of rules and laws,
                    and items to avoid damage.
                </p>
                <p>
                    From our dock near Downtown Portland it is a 20-45 minute ride depending upon conditions and which craft your rent to reach
                    the Columbia River or Oregon City Falls.  We have been doing watercraft rentals since 1994.  Our fleet is one of the nicest
                    you will find anywhere in this region of the country.  Happy boating!
                </p>
                <h4 class="text-yellow">
                    CANCELLATIONS
                </h4>
                <p class="pb-5">
                    Customers have up to 5 days / 120 hrs before the rental to cancel. If you cancel before 5 days prior to the rental date we do
                    not charge you any penalty, but once we are within 5 days of the scheduled rental and you decide to cancel we then charge $100
                    or half of the rental fee which ever one is greater.
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
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/home/kayak.blade.php ENDPATH**/ ?>