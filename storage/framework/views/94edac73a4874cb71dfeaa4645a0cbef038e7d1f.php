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
                                            <p class="item"><?php echo e($booking->quantity); ?>x
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
                                                    $oldTotal = $reschedule->orig_cost_per;
                                                    $oldFees = $reschedule->orig_fees;

                                                    $oqTotalDiff = $oldTotal * $quantity;
                                                    $cqTotalDiff = $cost * $quantity;

                                                    $difference = $oqTotalDiff - $cqTotalDiff;
                                                    $diffTotal = $difference - $oldFees;


                                                    if ($oqTotalDiff < $cqTotalDiff) {
                                                        echo ('<span class="text-red">Collect $ '. $difference . '</span>');
                                                    } else {
                                                        echo ('<span class="text-black">Overpaid $ '. $difference . '</span>');
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

        <!-- Booking Step 4 - Additions -->
        <div class="card shadow mb-4 my-3">
            <div class="card-header">
                <h3>
                    <h3><span>Reschedule:</span> Select Additions</h3>
                </h3>
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
                                <a href="<?php echo e(route('office.reschedule_booking_time', $reschedule)); ?>" class="btn btn-outline-primary text-black btn-100"><small>Change</small> &nbsp; <b>Time</b></a>
                            </div>
                        </div>
                        <!-- /Change Buttons -->

                    </div>
                    <div class="col-sm-8">
                        <div class="row mt-4">

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

                        <div class="col-8">
                            <!-- Booking Calculator -->
                            <div class="row mt-5">

                                <!-- Calculator -->
                                <div class="col-3 col-sm-5 text-right">
                                <?php $__currentLoopData = $prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($price->type_id == $reschedule->type_id && $price->duration_id == $reschedule->duration_id): ?>

                                        <!-- ROW 1 Unit Price-->
                                            <h4 class=" ">$ <span id="durCost"><?php echo e($price->amount); ?></span></h4>
                                            <!-- ROW 1 Unit Price-->

                                            <!-- ROW 2 Quantity -->
                                            <h4 class=" "><span class="text-gray-500">x</span> <span id="quantity1out">1</span></h4>
                                            <!-- ROW 2 Quantity -->

                                            <!-- ROW 2 Quantity -->
                                            <?php if($duration->hour == '1'): ?>
                                                <h4 class=" "><span class="text-gray-500">x</span> <span id="duration1out">1</span></h4>
                                            <?php else: ?>

                                            <?php endif; ?>
                                        <!-- ROW 2 Quantity -->

                                            <!-- ROW 3 Fees -->
                                            <h4 class=" ">
                                                <span class="text-gray-500">+</span>
                                                <span id="fee1out">
                                                <?php $__currentLoopData = $websites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $website): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php
                                                            $percent = '.0'.$website->fee_percent;

                                                            $cost = $price->amount;
                                                            $fee = $percent;
                                                            $total0 = $cost * $fee;

                                                             echo number_format($total0, 2);
                                                        ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </span>
                                            </h4>
                                            <!-- ROW 3 Fees -->

                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <!-- /Calculator -->
                                <!-- Calculator Text -->
                                <div class="col-8 col-sm-7">
                                <?php $__currentLoopData = $prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($price->type_id == $reschedule->type_id && $price->duration_id == $reschedule->duration_id): ?>

                                        <!-- ROW 1 Unit Price -->
                                            <h4 class=" ">
                                                <span class="text-gray-500">each</span>
                                                <?php echo e($type->name); ?>

                                                <span class="text-gray-500">for</span>
                                                <?php echo e($duration->hour); ?>

                                                <span class="text-gray-500">hour(s)</span>
                                            </h4>
                                            <!-- ROW 1 Unit Price -->

                                            <!-- ROW 2 Quantity -->
                                            <h4 class=" ">
                                                <?php echo e($type->name); ?><span class="text-gray-500">(s)</span>
                                            </h4>
                                            <!-- ROW 2 Quantity -->

                                            <!-- ROW 2 Quantity -->
                                            <?php if($duration->hour == '1'): ?>
                                                <h4 class=" ">
                                                    Hour<span class="text-gray-500">(s)</span>
                                                </h4>
                                            <?php else: ?>

                                            <?php endif; ?>
                                        <!-- ROW 2 Quantity -->

                                            <!-- ROW 23 Quantity -->
                                            <h4 class=" ">
                                                Processing <span class="text-gray-500">&</span> Taxes
                                            </h4>
                                            <!-- ROW 23 Quantity -->

                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <!-- /Calculator Text -->
                            </div>
                        </div>

                        <!-- Calculator Total -->
                        <div class="row mt-3">
                            <div class="col-8">
                                <h3 class="  text-center"><span class="text-gray-500">$</span>
                                    <span id="total1out">
                                <?php
                                    $totalE = $cost + $total0;
                                    echo number_format($totalE, 2);
                                ?>
                            </span>
                                </h3>
                            </div>
                        </div>
                        <!-- /Calculator Total -->
                        <!-- /Booking Calculator -->
                    </div>
                </div>



                <!-- Booking Request -->
                <div class="row mt-5 mb-5">
                    <div class="
                        <?php if($duration->hour == '1'): ?>
                        col-sm-8 offset-sm-2
<?php else: ?>
                        col-sm-6 offset-sm-3
<?php endif; ?>
                        ">
                        <div class="reqText">
                            <div class="row">
                                <div class="col-sm-3 pl-0 pr-0">
                                    <h3 class="text-center">
                                        QTY:
                                    </h3>
                                </div>
                                <div class="col-6 offset-3 col-sm-2 offset-sm-0 pl-sm-0 pr-sm-0">
                                    <input id="quantity1" type="number" class="form-control" placeholder="# of <?php echo e($type->name); ?>'s" value="<?php echo e($reschedule->quantity); ?>" min="1" max="<?php echo e($type->quantity); ?>">
                                </div>
                                <div class="
                                     <?php if($duration->hour == '1'): ?>
                                    col-sm-4
<?php else: ?>
                                    col-sm-7
<?php endif; ?>
                                    pl-0 pr-0">
                                    <h3 class="text-center">
                                        <?php if(strpos($duration->name, 'SeaDoo') !== false): ?>
                                            Half Day
                                        <?php else: ?>
                                            <?php if($duration->hour == '1'): ?>
                                            <?php else: ?>
                                                <span class=" "><?php echo e($duration->name); ?></span>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        &nbsp;
                                        <span class=" "><?php echo e($type->name); ?><span class="text-gray-500"><small>(s)</small></span>
                                             <?php if($duration->hour == '1'): ?>
                                                &nbsp; for
                                            <?php else: ?>
                                            <?php endif; ?>
                                            </span>
                                    </h3>
                                </div>
                                <?php if($duration->hour == '1'): ?>
                                    <div class="col-6 offset-3 col-sm-2 offset-sm-0 pl-sm-0 pr-sm-0">
                                        <input id="duration1" type="number" class="form-control" placeholder="Quantity of Duration" value="1" min="1" max="<?php echo e($type->quantity); ?>">
                                    </div>
                                    <div class="col-sm-1">
                                        <h3 class="text-center">
                                            hours
                                        </h3>
                                    </div>
                                <?php else: ?>

                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Booking Request -->


                <!-- Next Button -->
                <form action="<?php echo e(route('office.book_rental_additions', $reschedule)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("PUT"); ?>

                    <input type="text" class="bookQty hidden" name="quantity" value="1">
                    <?php $__currentLoopData = $prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($price->type_id == $reschedule->type_id && $price->duration_id == $reschedule->duration_id): ?>
                            <input type="text" class="bookCost hidden" name="cost_per" value="<?php echo e($price->amount); ?>">
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $websites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $website): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <input type="text" class="bookFee hidden" name="fees" value="<?php
                            $percent = '.0'.$website->fee_percent;

                            $cost = $price->amount;
                            $fee = $percent;
                            $total0 = $cost * $fee;

                             echo number_format($total0, 2);
                        ?>
                            ">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <input type="text" class="bookHrs hidden" name="hour"
                           <?php if($type->slug == 'seadoo' && $reschedule->hour < '4'): ?>
                           value="1"
                           <?php else: ?>
                           value="<?php echo e($duration->hour); ?>"
                        <?php endif; ?>
                    >
                    <input type="text" class="bookTotal hidden" name="total_cost" value="<?php
                        $totalE = $cost + $total0;
                        echo number_format($totalE, 2);
                    ?>
                        ">
                    <input type="text" class=" hidden" name="activity_date_start" value="<?php echo e($reschedule->activity_date_start); ?>">
                    <input type="text" class=" hidden" name="activity_date_end" value="<?php echo e($reschedule->activity_date_end); ?>">
                    <input type="text" class=" hidden" name="end_time" value="<?php echo e(\Carbon\Carbon::parse($reschedule->activity_date_end)->format('H:i:s')); ?>">
                    <button class="btn btn-book btn-sm mt-53 p-2" type="submit">Next</button>
                </form>
                <!-- /Next Button -->
            </div>
        </div>
        <!-- /Booking Step 4 - Additions -->

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

                    let input = document.getElementById('quantity1');
                    let out = document.getElementById('quantity1out');
                    let durInput = document.getElementById('duration1');
                    let durOut = document.getElementById('duration1out');
                    // let hrInput = document.getElementById('hrQuantity1');
                    var durCost = $("#durCost").html();


                    input.onkeyup = function () {
                    out.innerHTML = input.value;
                    newI = input.value;

                    total = durCost * newI;
                    console.log(total);

                    fee1 = total * 0.00;
                    fee = fee1.toFixed(2);
                    console.log(fee);

                    newTotal1 = total + fee1;

                    newTotal = newTotal1.toFixed(2);
                    total1out.innerHTML = newTotal;

                    fee1out.innerHTML = fee;
                    $('input.durInput').val('1');
                    $('input.bookQty').val(newI);
                    $('input.bookFee').val(fee);
                    $('input.bookTotal').val(newTotal);
                }
                    input.onclick = function () {
                    out.innerHTML = input.value;
                    newI = input.value;

                    total = durCost * newI;
                    console.log(total);

                    fee1 = total * 0.00;
                    fee = fee1.toFixed(2);
                    console.log(fee);

                    newTotal1 = total + fee1;

                    newTotal = newTotal1.toFixed(2);
                    total1out.innerHTML = newTotal;

                    fee1out.innerHTML = fee;
                    $('input.durInput').val('1');
                    $('input.bookQty').val(newI);
                    $('input.bookFee').val(fee);
                    $('input.bookTotal').val(newTotal);
                }

                    durInput.onkeyup = function () {
                    durOut.innerHTML = durInput.value;
                    newI = input.value;
                    newD = durInput.value;

                    total1 = durCost * newI;
                    total = total1 * newD;
                    console.log(total);

                    fee1 = total * 0.00;
                    fee = fee1.toFixed(2);
                    console.log(fee);

                    newTotal1 = total + fee1;

                    newTotal = newTotal1.toFixed(2);
                    total1out.innerHTML = newTotal;

                    fee1out.innerHTML = fee;
                    $('input.bookHrs').val(newD);
                    $('input.bookTotal').val(newTotal);
                }
                    durInput.onclick = function () {
                    durOut.innerHTML = durInput.value;
                    newI = input.value;
                    newD = durInput.value;

                    total1 = durCost * newI;
                    total = total1 * newD;
                    console.log(total);

                    fee1 = total * 0.00;
                    fee = fee1.toFixed(2);
                    console.log(fee);

                    newTotal1 = total + fee1;

                    newTotal = newTotal1.toFixed(2);
                    total1out.innerHTML = newTotal;

                    fee1out.innerHTML = fee;
                    $('input.bookHrs').val(newD);
                    $('input.bookTotal').val(newTotal);
                }
                    // $("#total1out").text(newTotal);


                    // // var addCost = $("#addCost").html();
                    //
                    //
                    // $('.addCost').onclick(function() {
                    //
                    //
                    //     // var start_time = $(".startTimeFormat").data("my-variable");
                    //     // var availIncrem = "15";
                    //     // var availIncrem = $('.availIncrem').html();
                    //
                    //     // var total = start_time + (availIncrem * 10000);
                    //     //
                    //     // alert(total);
                    //
                    //
                    //     $( this ).each(function() {
                    //
                    //         $('<button class="btn btn-book" name="rental_time" value="' + $( this ).html() + '" id="' + $( this ).html() + '"> ' + $( this ).html() + ' </button> <br>').appendTo("#newTimes"); //appendTo: Append at inside bottom
                    //
                    //     });
                    //
                    //
                    // });



                });


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
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/office/reschedule-4-additions.blade.php ENDPATH**/ ?>