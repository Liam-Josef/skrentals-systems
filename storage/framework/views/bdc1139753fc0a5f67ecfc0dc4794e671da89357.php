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
        <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            Book a <?php echo e($type->name); ?> Rental | <?php echo e($application->name); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        Book a Rental | <?php echo e($application->name); ?>

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
                <h1 class="page-title"><?php echo e($type->name); ?> Rentals</h1>
                <div class="breadcrumbs">
                    <p>
                        <a href="<?php echo e(route('home.index')); ?>" class="link">Home </a>
                        <i class="fa fa-chevron-right"></i> Rentals
                        <i class="fa fa-chevron-right"></i> <?php echo e($type->name); ?> Rentals
                        <i class="fa fa-chevron-right"></i> Booking
                        <i class="fa fa-chevron-right"></i> Confirmation
                    </p>
                </div>
                <!-- /Title -->

                <!-- SeaDoo Info -->
              <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <img src="<?php echo e(asset('storage/' . $type->image)); ?>" alt="<?php echo e($type->img_alt); ?>" class="page-img" />
                    <?php if($type->description != ''): ?>
                        <h2 class="section-header"><?php echo e($type->description); ?></h2>
                        <h3 class="text-center">Select Time</h3>
                    <?php else: ?>
                        <h2 class="section-header"><?php echo e($type->name); ?></h2>
                        <h3 class="text-center">Select Time</h3>
                <?php endif; ?>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            <!-- Booking Step 2 -->
                <div class="row">
                    <div class="col-sm-4 hidden">
                        <div class="col-11">
                            <form action="<?php echo e(route('bucket.update_date', $bucket)); ?>" id="bookStage2" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field("PUT"); ?>
                                <div class="form-group mt-4">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="rental_date">Change Rental Date</label>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="text-right"><?php echo e(Carbon\Carbon::parse($bucket->rental_date)->format('D, M d, Y')); ?></h6>
                                        </div>
                                    </div>
                                    <input type="text" class="hidden" name="rental_time" value="00:00:00">
                                    <?php $__currentLoopData = $durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <input type="text" class="hidden" name="duration_id" value="<?php echo e($duration->id); ?>">
                                        <input type="text" class="hidden" name="duration_name" value="<?php echo e($duration->name); ?>">
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <input type="text" class="hidden" name="activity_date_start" value="">
                                    <input type="text" class="hidden" name="activity_date_end" value=" ">
                                    <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <input type="text" class="hidden" name="type_id" value="<?php echo e($type->id); ?>">
                                        <input type="text" class="hidden" name="type_name" value="<?php echo e($type->slug); ?>">
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <input type="text" class="form-control datepicker rentalDate" name="rental_date" id="datepicker" value="<?php echo e($bucket->rental_date); ?>" placeholder="Select Date">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-10 offset-sm-1">
                        <div class="row mt-4">

                            <div class="col-sm-6">
                                <h2 class="text-white">
                                    <span class="text-gray-500"> START: </span><?php echo e(\Carbon\Carbon::parse($bucket->activity_date_start)->format('D, M. d, Y')); ?>

                                    <br>
                                    <span class="text-gray-500"> FROM: </span> <?php echo e(\Carbon\Carbon::parse($bucket->activity_date_start)->format('h:i A')); ?>

                                </h2>
                            </div>
                            <div class="col-sm-6">
                                <h2 class="text-white text-right">
                                    <?php echo e(\Carbon\Carbon::parse($bucket->activity_date_end)->format('D, M. d, Y')); ?> <span class="text-gray-500"> :END </span>
                                    <br>
                                    <?php echo e(\Carbon\Carbon::parse($bucket->activity_date_end)->format('h:i A')); ?> <span class="text-gray-500"> :TO </span>
                                </h2>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-sm-7 offset-sm-1">

                        <div class="row">
                            <div class="col-12">
                                <h3 class="text-large text-white">RESERVATION CONFIRMED</h3>
                            </div>
                            <div class="col-12">
                                <h4><?php echo e($bucket->customer_first); ?> <?php echo e($bucket->customer_last); ?></h4>
                            </div>
                           <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-12">
                                    <h4><?php echo e($booking->email); ?></h4>
                                    <h4><?php echo e($booking->phone); ?></h4>
                                </div>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-12">
                                <p>Call if you have questions..</p>
                            </div>
                            <div class="col-12 mb-3">
                                <h5>You will receive a confirmation email in your inbox.</h5>
                            </div>
                            <div class="col-12">
                                <h4>
                                    Our <span class="text-white">Cancellation Policy</span>:
                                </h4>
                                <h5 class="text-gray-600">
                                    Bookings made within 5 days prior to the rental will be charged upon booking.
                                </h5>
                                <h5 class="text-gray-600">
                                    Bookings submitted more than <span class="text-gray-400">5 days prior</span> to the rental start date will automatically be charged once the 5 day window occurs.
                                </h5>
                                <h5 class="text-gray-600">
                                    Bookings cancelled <span class="text-gray-400">before</span> payment is made will forfeit the booking which will result in cancellation with <span class="text-gray-400">no fee</span>.
                                </h5>
                                <h5 class="text-gray-600">
                                    ANY bookings cancelled <span class="text-gray-400">after</span> the payment is made will forfeit <span class="text-gray-400">50% of the booking total or $100</span> (whichever is greater).
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row mt-5">

                            <div class="col-3 text-right">

                                <!-- ROW 1 Unit Price-->
                                <h4 class="text-white">$ <span id="durCost"><?php echo e($bucket->cost_per); ?></span></h4>
                                <!-- ROW 1 Unit Price-->

                                <!-- ROW 2 Quantity -->
                                <h4 class="text-white"><span class="text-gray-500">x</span> <span id="quantity1out"><?php echo e($bucket->quantity); ?></span></h4>
                                <!-- ROW 2 Quantity -->

                                <!-- ROW 2 Quantity -->
                                <?php if($duration->hour == '1'): ?>
                                    <h4 class="text-white"><span class="text-gray-500">x</span> <span id="duration1out"><?php echo e($bucket->hour); ?></span></h4>
                            <?php else: ?>

                            <?php endif; ?>
                            <!-- ROW 2 Quantity -->

                                <!-- ROW 3 Fees -->
                                <h4 class="text-white">
                                    <span class="text-gray-500">+</span>
                                    <span id="fee1out">
                                    <?php
                                        echo number_format($bucket->fees, 2);
                                    ?>
                                    </span>
                                </h4>
                                <!-- ROW 3 Fees -->

                            </div>
                            <div class="col-9">
                                <!-- ROW 1 Unit Price -->
                                <h4 class="text-white">
                                    <span class="text-gray-500">each</span>
                                    <?php echo e($type->name); ?>

                                    <span class="text-gray-500">for</span>
                                    <?php echo e($duration->hour); ?>

                                    <span class="text-gray-500">hour(s)</span>
                                </h4>
                                <!-- ROW 1 Unit Price -->

                                <!-- ROW 2 Quantity -->
                                <h4 class="text-white">
                                    <?php echo e($type->name); ?><span class="text-gray-500">(s)</span>
                                </h4>
                                <!-- ROW 2 Quantity -->

                                <!-- ROW 2 Quantity -->
                                <?php if($duration->hour == '1'): ?>
                                    <h4 class="text-white">
                                        Hour<span class="text-gray-500">(s)</span>
                                    </h4>
                            <?php else: ?>

                            <?php endif; ?>
                            <!-- ROW 2 Quantity -->

                                <!-- ROW 23 Quantity -->
                                <h4 class="text-white">
                                    Processing <span class="text-gray-500">&</span> Taxes
                                </h4>
                                <!-- ROW 23 Quantity -->
                            </div>
                        </div>
                        <!-- ROW TOTAL -->
                        <div class="row mt-3">
                            <div class="col-12">
                                <h3 class="text-white text-center"><span class="text-gray-500">$</span>
                                    <span id="total1out">
                                        <?php
                                            echo number_format($bucket->total_cost, 2);
                                        ?>
                                    </span>
                                </h3>
                            </div>
                        </div>
                        <!-- ROW TOTAL -->
                    </div>
                </div>
                <!-- /Booking Step 2 -->


                <!-- Map -->
                <div class="row mt-5">
                    <div class="col-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2796.2581926564567!2d-122.66595542372379!3d45.504880871074576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5495a6741f42449f%3A0x8c31bef24cb809db!2sSK%20Watercraft%20Rentals!5e0!3m2!1sen!2sus!4v1706269968778!5m2!1sen!2sus" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <!-- /Map -->





            </div>
        </div>
    <?php $__env->stopSection(); ?>



    <?php $__env->startSection('scripts'); ?>
        <script src="<?php echo e(asset('js/sb-admin-2.js')); ?>"></script>

        <script>

            $(document).ready(function() {

             //
            });

        </script>
    <?php $__env->stopSection(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/home/book-rental-6.blade.php ENDPATH**/ ?>