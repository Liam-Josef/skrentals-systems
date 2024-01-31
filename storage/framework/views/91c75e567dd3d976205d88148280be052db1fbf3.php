<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.office-master','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('office-master'); ?>
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
        <title>Reschedule <?php echo e($reschedule->last); ?> <?php echo e($reschedule->first); ?> | <?php echo e($application->name); ?></title>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('app_name'); ?>
        <?php echo e($application->name); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('favicon'); ?>
        <?php echo e(asset('storage/'. $application->favicon)); ?>

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


    <?php $__env->startSection('page_title'); ?>
        <div class="row">
            <div class="col-sm-2">
                <form action="<?php echo e(route('reschedule.reschedule_cancel', $reschedule->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <input type="hidden" value="<?php echo e($reschedule->id); ?>" name="reschedule_id">

                    <button class="btn btn-primary-red mt-2" type="submit">
                        <h3 class="mt-2">
                            <i class="fa fa-chevron-circle-left"></i> Schedule
                        </h3>
                    </button>
                </form>
            </div>
            <div class="col-sm-10">
                <h1>Reschedule: <span>

                <small><?php echo e($reschedule->quantity); ?> x</small>
                        <?php $__currentLoopData = $durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($duration->id == $reschedule->orig_duration_id): ?>
                                <?php echo e($duration->abbreviation); ?>

                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($type->name); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            | <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($booking->first); ?> <?php echo e($booking->last); ?></span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </h1>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
    <!-- RENTAL INFORMATION -->
        <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mb-4 my-3 shadow">
                <div class="card-header">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6">
                            <h3 class="card-title">Rental Information  </h3>
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <h3 class="card-title text-right status"><?php echo e($booking->status); ?> </h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <!-- Rental Information -->
                    <div class="card-rental-info">
                        <div class="row">
                            <!-- Renter Info -->
                            <div class="col-sm-4">
                                <div class="area-box">
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">Vehicle:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">
                                                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php echo e($type->name); ?>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">Rental Date:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item"><?php echo e(\Carbon\Carbon::parse($booking->activity_date_start)->format('M d, Y h:i A')); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">Ticket List:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item"><?php echo e($booking->quantity); ?>x
                                                <?php $__currentLoopData = $durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($duration->id == $reschedule->orig_duration_id): ?>
                                                        <?php echo e($duration->name); ?>

                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php echo e($type->name); ?>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">Payment Status:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">
                                                <?php if($booking->total_owed > 0): ?>
                                                    <span class="text-red">COLLECT PAYMENT ( $
                                                    <?php
                                                        echo number_format($booking->total_owed, 2);
                                                    ?>
                                                                    )</span>
                                                <?php else: ?>
                                                    Paid
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">Charged at Booking:</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="item">$ <?php echo e($booking->total_cost); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">Booking Fee:</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="item" id="originalFee">$ <?php echo e($booking->fees); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                </div>
                            </div>
                            <!-- /Renter Info -->
                            <div class="col-sm-4">
                                <div class="area-box">
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">Vehicle:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">
                                                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php echo e($type->name); ?>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">New Rental Date:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item"><?php echo e(\Carbon\Carbon::parse($reschedule->activity_date_end)->format('D, M. d, Y h:i A')); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">New Ticket List:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item"><?php echo e($reschedule->quantity); ?>x
                                                <?php $__currentLoopData = $durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($duration->id == $reschedule->duration_id): ?>
                                                        <?php echo e($duration->name); ?>

                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php echo e($type->name); ?>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">New Pay Status:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">
                                                <?php
                                                    $cost = $reschedule->cost_per;
                                                    $quantity = $reschedule->quantity;
                                                    $oldQuantity = $reschedule->orig_quantity;
                                                    $oldTotal = $reschedule->orig_cost_per;
                                                    $oldFees = $reschedule->orig_fees;

                                                    $oqTotalDiff = $oldTotal * $oldQuantity;
                                                    $cqTotalDiff = $cost * $quantity;

                                                    $difference = $cqTotalDiff - $oqTotalDiff;
                                                    $diffTotal = $difference - $oldFees;


                                                    if ($oqTotalDiff < $cqTotalDiff) {
                                                        echo ('<span class="text-red">Collect &nbsp; $ '. $difference . '</span>');
                                                    } else {
                                                        echo ('<span class="text-black">Overpaid &nbsp; $ '. $difference . '</span>');
                                                    };

                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">New Total:</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="item">$
                                                <?php
                                                    $cost = $reschedule->cost_per;
                                                    $quantity = $reschedule->quantity;

                                                    $cqTotal = $cost * $quantity;

                                                    echo ($cqTotal);

                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                </div>
                            </div>
                            <!-- Rental Info -->
                            <div class="col-sm-4">
                                <div class="area-box">
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">First Name:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item"><?php echo e($booking->first); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">Last Name:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item"><?php echo e($booking->last); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">Email:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item"><?php echo e($booking->email); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">Phone:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item"><?php echo e($booking->phone = substr($booking->phone, 2)); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">Zip Code:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item"><?php echo e($booking->zip_code); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->

                                </div>
                            </div>
                            <!-- /Rental Info -->
                        </div>
                    </div>
                    <!-- /Rental Information -->
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <!-- /RENTAL INFORMATION -->

        <!-- Booking Step 5 - Confirmation -->
        <div class="card shadow mb-4 my-3">
            <div class="card-header">
                <h3><span>Reschedule:</span> Confirmation</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <!-- Change Date -->
                        <div class="row mb-3">
                            <div class="col-sm-11">
                                <form action="<?php echo e(route('bucket.update_date', $reschedule)); ?>" id="bookStage2" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field("PUT"); ?>
                                    <div class="form-group mt-4">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="rental_date">Change Rental Date</label>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="text-right"><?php echo e(Carbon\Carbon::parse($reschedule->rental_date)->format('D, M d, Y')); ?></h6>
                                            </div>
                                        </div>
                                        <input type="text" class="hidden" name="rental_time" value="00:00:00">
                                        <?php $__currentLoopData = $durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input type="text" class="hidden" name="duration_id" value="<?php echo e($duration->id); ?>">
                                            <input type="text" class="hidden" name="duration_name" value="<?php echo e($duration->name); ?>">
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <input type="text" class="hidden" name="activity_date_start" value="">
                                        <input type="text" class="hidden" name="activity_date_end" value=" ">
                                        <input type="text" class="hidden" name="type_id" value="<?php echo e($type->id); ?>">
                                        <input type="text" class="hidden" name="type_name" value="<?php echo e($type->slug); ?>">
                                        <input type="text" class="form-control datepicker rentalDate" name="rental_date" id="datepicker" value="<?php echo e($reschedule->rental_date); ?>" placeholder="Select Date">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /Change Date -->

                        <!-- Change Buttons -->
                        <div class="row mb-3">
                            <div class="col-sm-11 mb-3">
                                <form action="<?php echo e(route('reschedule.change_duration', $reschedule)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field("PUT"); ?>
                                    <?php $__currentLoopData = $durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($duration->id == $reschedule->duration_id): ?>
                                            <input type="text" class="hidden" name="duration_id" value="<?php echo e($duration->id); ?>">
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <button type="submit" class="btn btn-outline-primary text-black btn-100"><small>Change</small> &nbsp;<b>Duration</b></button>
                                </form>
                            </div>
                            <div class="col-sm-11 mb-3">
                                <a href="<?php echo e(route('office.reschedule_booking_time', $reschedule)); ?>" class="btn btn-outline-primary text-black  btn-100"><small>Change</small> &nbsp; <b>Time</b></a>
                            </div>
                            <div class="col-sm-11 mb-3">
                                <a href="<?php echo e(route('office.reschedule_booking_additions', $reschedule)); ?>" class="btn btn-outline-primary text-black btn-100"><small>Change</small> &nbsp; <b>Additions</b></a>
                            </div>
                        </div>
                        <!-- /Change Buttons -->
                    </div>
                    <div class="col-sm-8">
                        <div class="row mt-4">
                            <h2 class="text-center">
                                <?php echo e($reschedule->quantity); ?>x
                                <?php $__currentLoopData = $durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($duration->id == $reschedule->orig_duration_id): ?>
                                        <?php echo e($duration->name); ?>

                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($type->name); ?><span class="text-gray-500">(s)</span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </h2>

                            <div class="col-sm-6">
                                <h2 class=" ">
                                    <span class="text-gray-500"> START: </span><?php echo e(\Carbon\Carbon::parse($reschedule->activity_date_start)->format('D, M. d, Y')); ?>

                                    <br>
                                    <span class="text-gray-500"> FROM: </span> <?php echo e(\Carbon\Carbon::parse($reschedule->activity_date_start)->format('h:i A')); ?>

                                </h2>
                            </div>
                            <div class="col-sm-6">
                                <h2 class="  text-right">
                                    <?php echo e(\Carbon\Carbon::parse($reschedule->activity_date_end)->format('D, M. d, Y')); ?> <span class="text-gray-500"> :END </span>
                                    <br>
                                    <?php echo e(\Carbon\Carbon::parse($reschedule->activity_date_end)->format('h:i A')); ?> <span class="text-gray-500"> :TO </span>
                                </h2>
                            </div>

                        </div>
                        <div class="row mt-5">
                            <div class="col-sm-5">
                                <!-- ROW TOTAL -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <h1 class=" text-right"><span class="text-gray-500">$</span>
                                            <span id="total1out">
                                            <?php
                                                echo number_format($reschedule->total_cost, 2);
                                            ?>
                                        </span>
                                        </h1>
                                        <h3 class="text-right"><?php

                                                if ($oqTotalDiff < $cqTotalDiff) {
                                                    echo ('<span class="text-red">Collect &nbsp; $ '. $difference . '</span>');
                                                } else {
                                                    echo ('<span class="text-black">Overpaid &nbsp; $ '. $difference . '</span>');
                                                };

                                            ?></h3>
                                    </div>
                                </div>
                                <!-- /ROW TOTAL -->
                            </div>

                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col-3 text-right">

                                        <!-- ROW 1 Unit Price-->
                                        <h4 class="">$ <span id="durCost"><?php echo e($reschedule->cost_per); ?></span></h4>
                                        <!-- ROW 1 Unit Price-->

                                        <!-- ROW 2 Quantity -->
                                        <h4 class=""><span class="text-gray-500">x</span> <span id="quantity1out"><?php echo e($reschedule->quantity); ?></span></h4>
                                        <!-- ROW 2 Quantity -->

                                        <!-- ROW 2 Quantity -->
                                        <?php if($duration->hour == '1'): ?>
                                            <h4 class=""><span class="text-gray-500">x</span> <span id="duration1out"><?php echo e($reschedule->hour); ?></span></h4>
                                    <?php else: ?>

                                    <?php endif; ?>
                                    <!-- ROW 2 Quantity -->

                                        <!-- ROW 3 Fees -->
                                        <h4 class="">
                                            <span class="text-gray-500">+</span>
                                            <span id="fee1out">
                                            <?php
                                                echo number_format($reschedule->fees, 2);
                                            ?>
                                            </span>
                                                </h4>
                                        <!-- ROW 3 Fees -->

                                    </div>
                                    <div class="col-9">
                                        <!-- ROW 1 Unit Price -->
                                        <h4 class="">
                                            <span class="text-gray-500">each</span>
                                            <?php echo e($type->name); ?>

                                            <span class="text-gray-500">for</span>
                                            <?php echo e($duration->hour); ?>

                                            <span class="text-gray-500">hour(s)</span>
                                        </h4>
                                        <!-- ROW 1 Unit Price -->

                                        <!-- ROW 2 Quantity -->
                                        <h4 class="">
                                            <?php echo e($type->name); ?><span class="text-gray-500">(s)</span>
                                        </h4>
                                        <!-- ROW 2 Quantity -->

                                        <!-- ROW 2 Quantity -->
                                        <?php if($duration->hour == '1'): ?>
                                            <h4 class="">
                                                Hour<span class="text-gray-500">(s)</span>
                                            </h4>
                                    <?php else: ?>

                                    <?php endif; ?>
                                    <!-- ROW 2 Quantity -->

                                        <!-- ROW 23 Quantity -->
                                        <h4 class="">
                                            Processing <span class="text-gray-500">&</span> Taxes
                                        </h4>
                                        <!-- ROW 23 Quantity -->
                                    </div>
                                </div>
                                </div>
                            </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- /Booking Step 5 - Confirmation -->

        <!-- CHECK IN BUTTONS -->
        <div class="card mt-4 mb-5 shadow">
            <div class="modal-footer">
                <div class="row width-100">
                    <div class="col-sm-4">
                        <button class="btn btn-outline-primary" type="button" data-toggle="modal" data-target="#cancel_rental<?php echo e($reschedule->id); ?>">CANCEL RESCHEDULE</button>
                    </div>
                    <div class="col-sm-4">

                    </div>
                    <div class="col-sm-4">
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#confirmationModal<?php echo e($reschedule->id); ?>">Reschedule Reservation</a>
                    </div>

                </div>

            </div>
        </div>
        <!-- /CHECK IN BUTTONS -->


        <form action="<?php echo e(route('office.checkInRental', $reschedule->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>


            <div class="modal fade checkin-modal" id="checkin<?php echo e($reschedule->id); ?>" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">

                </div>
            </div>
        </form>

        <!-- Confirmation Modal -->
        <div class="modal fade" id="confirmationModal<?php echo e($reschedule->id); ?>" tabindex="-1" role="dialog" aria-labelledby="bookNow" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Book a <span><?php echo e($type->name); ?></span></h3>
                    </div>
                    <form action="<?php echo e(route('office.reschedule_book', $reschedule)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field("PUT"); ?>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="cardText">
                                        <div class="container">
                                            <div class="row">
                                                <?php
                                                    $start_date = \Carbon\Carbon::parse($reschedule->activity_date_start);
                                                    $now = \Carbon\Carbon::now();
                                                    $diff = $start_date->diffInDays($now);
                                                    if ($diff < 5) {
                                                ?>
                                                <h4>
                                                    Same method used during booking will be charged<span class="text-white"> upon submission</span>.
                                                </h4>

                                                <h1 class="text-center">
                                                    <?php
                                                        if ($oqTotalDiff < $cqTotalDiff) {
                                                            echo ('<span class="text-white">Collect <br /> $ '. $difference . '</span>');
                                                        } else {
                                                            echo ('<span class="text-white">Refund <br /> $ '. $difference . '</span>');
                                                        };

                                                    ?>
                                                </h1>

                                                <?php
                                                    } else {
                                                ?>
                                                <h4>
                                                   Payment will be automatic on
                                                    <span class="text-white">
                                                                    <?php echo e(\Carbon\Carbon::parse($reschedule->activity_date_start)->subDays(5)->format('D, M. d, Y')); ?>

                                                    </span>
                                                    <br>
                                                    <small>(5 days prior to the rental)</small>
                                                    <br>
                                                    <small><span class="text-white"><em>Using the card entered during booking</em></span></small>
                                                </h4>

                                                <?php

                                                    }
                                                ?>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="hidden">
                                    <input type="text" class="" name="ticket_list" value="<?php echo e($reschedule->quantity); ?>x <?php echo e($duration->name); ?> <?php echo e($type->name); ?>">
                                    <input type="text" class="" name="type_id" value="<?php echo e($type->id); ?>">
                                    <?php if($duration->id == $reschedule->duration_id): ?>
                                        <input type="text" class="" name="duration_id" value="<?php echo e($duration->id); ?>">
                                    <?php endif; ?>
                                    <input type="text" class="" name="hour" value="<?php echo e($reschedule->hour); ?>">
                                    <input type="text" class="" name="activity_date_start" value="<?php echo e($reschedule->activity_date_start); ?>">
                                    <input type="text" class="" name="activity_date_end" value="<?php echo e($reschedule->activity_date_end); ?>">
                                    <input type="text" class="" name="quantity" value="<?php echo e($reschedule->quantity); ?>">
                                    <input type="text" class="" name="cost_per" value="<?php echo e($reschedule->cost_per); ?>">
                                    <input type="text" class="" name="additions" value="<?php echo e($reschedule->additions); ?>">
                                    
                                    <input type="text" class="" name="taxes" value="<?php echo e($reschedule->taxes); ?>">
                                    <input type="text" class="" name="total_cost" value="<?php echo e($reschedule->total_cost); ?>">
                                    <input type="text" class="" name="total_paid" value="<?php echo e($reschedule->total_paid); ?>">
                                    <input type="text" class="form-control" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
                                    <input type="text" class="" name="total_owed"
                                           <?php
                                               if ($oqTotalDiff < $cqTotalDiff) {
                                                               echo ('value="'. $difference . '"');
                                                           } else {

                                                           };
                                           ?>
                                           value="<?php echo e($reschedule->total_owed); ?>">
                                    <input type="text" class="" name="activity_item" value="<?php echo e($type->slug); ?>">
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-12">
                                    <button class="btn btn-book btn-sm p-2" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">

                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-secondary btn-modal" type="button" data-dismiss="modal">CLOSE</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Confirmation Modal -->


        <!-- Cancel Rental Modal -->
        <div class="modal fade" id="cancel_rental<?php echo e($reschedule->id); ?>" tabindex="-1" role="dialog" aria-labelledby="cancelModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <h4 class="mb-4">Are you sure you want to cancel this reschedule:</h4>
                                    <h3><span><?php echo e($booking->first); ?> <?php echo e($booking->last); ?></span> <br> <?php echo e($booking->activity_item); ?></h3>
                                    <h5><?php echo e($reschedule->id); ?></h5>
                                    <p class="italic mt-4">This action can NOT be undone!</p>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">NEVERMIND...</button>

                            <form action="<?php echo e(route('reschedule.reschedule_cancel', $booking)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>

                                <input type="hidden" value="<?php echo e($reschedule->id); ?>" name="reschedule_id">

                                <button class="btn btn-primary-red" type="submit">CANCEL RESCHEDULE</button>
                            </form>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
        <!-- /Cancel Rental Modal -->



    <?php $__env->stopSection(); ?>




    <?php $__env->startSection('scripts'); ?>
    <!-- Page level plugins -->
        <script src="<?php echo e(asset('vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>

        <!-- Page level custom scripts -->
        <script src="<?php echo e(asset('js/demo/datatables-scripts.js')); ?>"></script>

        <script>
            $(document).ready(function() {
                $('#officeSchedule').addClass('hidden');
            });
            $(document).ready(function() {
                $('.datepicker').datepicker('show');
            });

        </script>
        <script>

            $(document).ready(function() {

                $('.datepicker').datepicker('show');
            });
            $(function() {
                $date = $( "#datepicker" ).datepicker("getDate");
                $('#datepicker').datepicker({
                    changeMonth: true,
                    changeYear: true,
                    numberOfMonths: 3,
                    showButtonPanel: true,
                    dateFormat: "yy-mm-dd",
                    altField: "#alternate",
                    altFormat: "DD, MM d, yy",
                    onSelect: function() {
                        // $date = $("#datepicker").datepicker({ dateFormat: 'dd-mm-yy' }).val();
                        //
                        // $('.results').html($date);

                        $('#bookStage2').submit(); // <-- SUBMIT

                    }
                });
            });

            jQuery(function(){
                jQuery('#quantity1').click();
            });

        </script>
    <?php $__env->stopSection(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/office/reschedule-5-confirmation.blade.php ENDPATH**/ ?>