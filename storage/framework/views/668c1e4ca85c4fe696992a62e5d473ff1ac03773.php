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
            SeaDoo Rentals | <?php echo e($application->name); ?>

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
                <h1 class="page-title">Sea-Doo Rentals</h1>
                <div class="breadcrumbs">
                    <p>
                        <a href="<?php echo e(route('home.index')); ?>" class="link">Home </a>
                        <i class="fa fa-chevron-right"></i> Rentals <i class="fa fa-chevron-right"></i> Sea-Doo Rentals
                    </p>
                </div>
                <!-- /Title -->

                <!-- SeaDoo Info -->
                <?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <img src="<?php echo e(asset('storage/' . $type->image)); ?>" alt="<?php echo e($type->img_alt); ?>" class="page-img" />
                    <?php if($type->description != ''): ?>
                        <h2 class="section-header"><?php echo e($type->description); ?></h2>
                    <?php else: ?>
                        <h2 class="section-header"><?php echo e($type->name); ?></h2>
                    <?php endif; ?>

                    <?php if($type->has('durations')): ?>
                        <?php $__currentLoopData = $type->durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p class="text-center">
                                <?php if($duration->has('prices')): ?>
                                    <?php $__currentLoopData = $duration->prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($duration->id == $price->duration_id && $type->id == $price->type_id): ?>
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
                        Ask Us About Our Multiple Day Discounts
                    </p>

                    <a href="<?php echo e(route('home.book_rental', $type)); ?>" class="btn btn-book">Click to Book Now</a>

                    <p class="text-center">
                        $2000 Damage Deposit per unit.  Life Vests and required Safety items are provided.  Capacity 2 adults 1 child maximum 19 gallon fuel tank.  All Hourly rentals include fuel.  Half Day and Full Day rentals DO NOT include fuel.
                    </p>

                    <p class="text-center">
                        Drivers License or Photo identification with address are required upon rental.  MUST BE 18 or OVER to rent.  We offer trailer-a-way for Multi-day Rentals.  Boaters Education card are NOT required.
                    </p>

                    <p class="text-center">
                        Alcohol consumption while operating a motor vehicle is PROHIBITED on the water. A designated driver is required on all vehicles with alcohol.
                    </p>

                    <p class="text-center">
                        Call <a href="tel:503-284-6447" class="text-primary">(503)284-64478</a>
                    </p>

                    <img src="<?php echo e(asset('/storage/app-images/sea-doo-seadoo-pg.png')); ?>" alt="Two people riding on a SeaDoo" class="page-img img-responsive" />

                    <iframe width="100%" height="450" src="https://www.youtube.com/embed/uhNCJLRKVVw?si=zSBLMc5lfVx20-fD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                    <img src="<?php echo e(asset('/storage/app-images/sea-doo-seadoo-pg-2.png')); ?>" alt="Two people riding on a SeaDoo" class="page-img img-responsive" />

                    <iframe width="100%" height="450" src="https://www.youtube.com/embed/JHfKdNDfzF0?si=xt6QXDi9uop7I7tl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

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
                        Customers will come to 250 SE Division Place in Portland on the Willamette River three blocks South of OMSI.  Our dock and operation is located on the East bank of the Willamette River between the Ross Island Bridge and the Tilikum Crossing, one block south of the OMSI Max Station.  Our Rental Office is the Red Shed located at the entrance of the parking lot for Polaris of Portland/SKNW Powersports dealership.
                    </p>
                    <h4 class="text-yellow">
                        PARKING
                    </h4>
                    <p>
                        Parking is limited! We recommend carpooling and/or using ride-share services such as Uber and Lyft. Customer may park along buildings in the Division Place 'alley' wherever you find an un-marked spot, but please be respectful of the neighboring businesses down here to not block access to gates, garage doors, etc.  We have been asked NOT to park in The Dealership parking lot during their business hours Tuesday thru Saturday.  Outside our Division Place 'alley' surrounding blocks are Zone G -  Free 2hr parking Mon-Fri, with no limits on weekends!  There are also surrounding parking lots from OMSI to the Train Museum on days they are closed for additional options.  Come to the Rental Office for direction if you need additional help.
                    </p>
                    <h4 class="text-yellow">
                        CHECKING IN
                    </h4>
                    <p>
                        We recommend dropping off items you do not wish to carry and using our carts at the Rental Office (Red Shed) before parking.  Customers are to stay near the parking lot and NOT go down to our dock until instructed to do so by staff.  Once parked, just walk up to our Rental Office where we do all the paper work; asking for identification, collect rental fee, damage deposit (verify funds available $500-$2000 depending upon model), sign waivers, fill out a form for OSMB, etc. This will require the cardholder for the rental, as well as any additional drivers to be present.
                    </p>
                    <p>
                        Alcohol consumption while operating a motor vehicle is PROHIBITED on the water. A designated driver is required on all vehicles with alcohol.
                    </p>
                    <h4 class="text-yellow">
                        DAMAGE DEPOSIT
                    </h4>
                    <p>
                        An imprint of your credit/debit card will be taken, as well as a pre-authorization for the listed damage deposit amount, verifying the funds and freezing them for up to 5 business days. Some modern “security cards” no longer come with raised lettering, making them un-imprint able. Without the imprint, we cannot Pre-Authorize and must treat the deposit card as we would cash. Pre-Auth deposits require half the amount of the listed damage deposit, refunding the deposit upon safe return of the vessel.
                    </p>

                    <h4 class="text-yellow">
                        ARRIVING AT THE DOCK
                    </h4>
                    <p>
                        We recommend dropping off items you do not wish to carry and using our carts at the Rental Office (Red Shed) before parking.  Customers are to stay near the parking lot and NOT go down to our dock until instructed to do so by staff.  Once parked, just walk up to our Rental Office where we do all the paper work; asking for identification, collect rental fee, damage deposit (verify funds available $500-$2000 depending upon model), sign waivers, fill out a form for OSMB, etc. This will require the cardholder for the rental, as well as any additional drivers to be present.
                    </p>
                    <p>
                        From our dock near Downtown Portland it is a 20-45 minute ride depending upon conditions and which craft your rent to reach the Columbia River or Oregon City Falls.  We have been doing watercraft rentals since 1994.  Our fleet is one of the nicest you will find anywhere in this region of the country.  Happy boating!
                    </p>
                    <h4 class="text-yellow">
                        CANCELLATIONS
                    </h4>
                    <p class="pb-5 mb-0">
                        Customers have up to 5 days / 120 hrs before the rental to cancel. If you cancel before 5 days prior to the rental date we do not charge you any penalty, but once we are within 5 days of the scheduled rental and you decide to cancel we then charge $100 or half of the rental fee which ever one is greater.
                    </p>




                    <div class="modal fade mt-5" id="booknow<?php echo e($type->id); ?>" tabindex="-1" role="dialog" aria-labelledby="bookNow" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3>Book a <span><?php echo e($type->name); ?></span></h3>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label for="rental_date">Rental Date</label>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" id="alternate" class="form-control-plaintext">
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control datepicker rentalDate" id="datepicker">
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="div1" class="dynamicAvail">
                                                <div class="results"></div>
                                                <div class="row">


                                                    <?php echo e($seadooHD); ?>





                                                    <?php

//                                                    $unit_id = (isset($_POST['name'])) ? $_POST['name'] : 'Not Yet...';

                                                    if (isset($_POST["name"])):
                                                        $unit_id = $_POST["name"];
                                                    else:
                                                        $unit_id = 'Not Yet...';
                                                    endif;

                                                    $unit_id

                                                    ?>
                                                    <div id="<?= $unit_id; ?>">
                                                        <?= $unit_id; ?>
                                                    </div>



                                                    <?php $__currentLoopData = $buckets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bucket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($bucket->rental_date == $unit_id ): ?>
                                                            <?php echo e($seadooHD); ?>

                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


























                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">

                                </div>
                            </div>
                        </div>
                    </div>




                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <!-- /SeaDoo Info -->

            </div>
        </div>
    <?php $__env->stopSection(); ?>



    <?php $__env->startSection('scripts'); ?>
        <script src="<?php echo e(asset('js/sb-admin-2.js')); ?>"></script>

        <script>
            $(document).ready(function() {

                $('.datepicker').datepicker('show');
                $('.dynamicAvail').addClass('hidden');
            });
            $(function() {
                $date = $( "#datepicker" ).datepicker("getDate");
                $('#datepicker').datepicker({
                    changeMonth: true,
                    changeYear: true,
                    numberOfMonths: 3,
                    showButtonPanel: true,
                    dateFormat: "yy-m-dd",
                    altField: "#alternate",
                    altFormat: "DD, MM d, yy",
                    onSelect: function() {
                        $date = $("#datepicker").datepicker({ dateFormat: 'dd-mm-yy' }).val();

                        $('.results').html($date);

                        $('.dynamicAvail').append('<div id= ' + $date  + '>');

                        var unit_id = $date;

                        console.log(unit_id);
                        $.ajax({
                            url: '/rentals/sea-doo-rentals',
                            type: 'POST',
                            data: {name: unit_id},
                            success: function(data){
                                console.log(data);
                            }
                        });

                    }
                });
            });




        </script>
    <?php $__env->stopSection(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/home/seadoo.blade.php ENDPATH**/ ?>