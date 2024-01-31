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
                                                <p class="item"><?php echo e(\Carbon\Carbon::parse($booking->activity_date_start)->format('M d, Y')); ?></p>
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
                                                <p class="item"><?php echo e(\Carbon\Carbon::parse($reschedule->activity_date_start)->format('M d, Y')); ?></p>
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

        <!-- Booking Step 3 Time -->
        <div class="card shadow mb-4 my-3">
            <div class="card-header">
                <h3><span>Reschedule:</span> Select Time</h3>
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
                                            <?php if($duration->id == $reschedule->duration_id): ?>
                                                <input type="text" class="hidden" name="duration_id" value="<?php echo e($duration->id); ?>">
                                                <input type="text" class="hidden" name="duration_name" value="<?php echo e($duration->name); ?>">
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            <div class="col-sm-11">
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
                        </div>
                        <!-- /Change Buttons -->

                        <!-- PHP HELPER -->
                        <!-- PHP Variables -->
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <!-- PHP Variables -->
                        <!-- PHP Vehicle Script -->
                        <div class="">
                            
                        </div>
                        <!-- PHP Vehicle Script -->
                        <!-- PHP HELPER -->
                    </div>
                    <div class="col-sm-8">
                        <div class="row">

                            



                            <br>
                            <!-- Time Buttons -->
                            <?php $__currentLoopData = $durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($duration->id == $reschedule->duration_id): ?>

                                    <div class="row">
                                        <?php $__currentLoopData = $availabils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $availabil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($duration->availabils->contains($availabil)): ?>

                                                <?php
                                                    $availMinIncrem  = $availabil->start_min_increm;
                                                    $availStartTime  = $availabil->start_time;
                                                    $availEndTime  = $availabil->end_time;
                                                    $availTime = \Carbon\Carbon::parse($availStartTime)->format('H:i:s');
                                                    $availStartP = \Carbon\Carbon::parse($availStartTime)->format('H:i:s');
                                                    $availEndP = \Carbon\Carbon::parse($availEndTime)->format('H:i:s');
                                                    $availStartIncrem = \Carbon\Carbon::parse($availEndP)->diffInMinutes($availStartP);
                                                    $diffMinDiv = $availStartIncrem / $availMinIncrem + 1;

                                                    $repStr = \Carbon\Carbon::parse($availabil->start_time)->format('h:i A');
                                                    $repStr0 = \Carbon\Carbon::parse($repStr)->addMinute($availMinIncrem)->format('h:i A');
                                                    $repStr1 = \Carbon\Carbon::parse($repStr0)->addMinute($availMinIncrem)->format('h:i A');
                                                    $repStr2 = \Carbon\Carbon::parse($repStr1)->addMinute($availMinIncrem)->format('h:i A');
                                                    $repStr3 = \Carbon\Carbon::parse($repStr2)->addMinute($availMinIncrem)->format('h:i A');

                                                    $phpFormatStr = \Carbon\Carbon::parse($availabil->start_time)->format('H:i:s');
                                                    $phpFormatStr0 = \Carbon\Carbon::parse($repStr)->addMinute($availMinIncrem)->format('H:i:s');
                                                    $phpFormatStr1 = \Carbon\Carbon::parse($repStr0)->addMinute($availMinIncrem)->format('H:i:s');
                                                    $phpFormatStr2 = \Carbon\Carbon::parse($repStr1)->addMinute($availMinIncrem)->format('H:i:s');
                                                    $phpFormatStr3 = \Carbon\Carbon::parse($repStr2)->addMinute($availMinIncrem)->format('H:i:s');

                                                    $formatStr = \Carbon\Carbon::parse($repStr)->format('H.i');
                                                    $formatStr0 = \Carbon\Carbon::parse($repStr0)->format('H.i');
                                                    $formatStr1 = \Carbon\Carbon::parse($repStr1)->format('H.i');
                                                    $formatStr2 = \Carbon\Carbon::parse($repStr2)->format('H.i');
                                                    $formatStr3 = \Carbon\Carbon::parse($repStr3)->format('H.i');


                                                ?>


                                                <?php if($diffMinDiv >= '1'): ?>
                                                    <div class="col-6 col-sm-3 timeBtn" data-my-variable="<?php echo e($formatStr); ?>">
                                                        <form action="<?php echo e(route('reschedule.update_time', $reschedule)); ?>" method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field("PUT"); ?>
                                                            <input type="text" class="hidden" name="activity_date_start" value="<?php echo e($reschedule->rental_date); ?> <?php echo e($phpFormatStr); ?>">
                                                            <input type="text" class="hidden" name="activity_date_end" value="<?php echo e(\Carbon\Carbon::parse($phpFormatStr)->addHour($duration->hour)); ?>">
                                                            <input type="text" class="hidden" name="avail_id" value="<?php echo e($availabil->id); ?>">
                                                            <input type="text" class="hidden" name="rental_time" value="<?php echo e($phpFormatStr); ?>">
                                                            <?php
                                                                echo "<button class='btn btn-book width-100' type='submit'>$repStr</button>" ;
                                                            ?>

                                                        </form>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if($diffMinDiv >= '2'): ?>
                                                    <div class="col-6 col-sm-3 timeBtn" data-my-variable="<?php echo e($formatStr0); ?>">
                                                        <form action="<?php echo e(route('reschedule.update_time', $reschedule)); ?>" method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field("PUT"); ?>
                                                            <input type="text" class="hidden" name="activity_date_start" value="<?php echo e($reschedule->rental_date); ?> <?php echo e($phpFormatStr0); ?>">
                                                            <input type="text" class="hidden" name="activity_date_end" value="<?php echo e(\Carbon\Carbon::parse($phpFormatStr0)->addHour($duration->hour)); ?>">

                                                            <input type="text" class="hidden" name="rental_time" value="<?php echo e($phpFormatStr0); ?>">
                                                            <?php
                                                                echo "<button class='btn btn-book width-100' type='submit'>$repStr0</button>" ;
                                                            ?>
                                                        </form>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if($diffMinDiv >= '3'): ?>
                                                    <div class="col-6 col-sm-3 timeBtn" data-my-variable="<?php echo e($formatStr1); ?>">
                                                        <form action="<?php echo e(route('reschedule.update_time', $reschedule)); ?>" method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field("PUT"); ?>
                                                            <input type="text" class="hidden" name="activity_date_start" value="<?php echo e($reschedule->rental_date); ?> <?php echo e($phpFormatStr1); ?>">
                                                            <input type="text" class="hidden" name="activity_date_end" value="<?php echo e(\Carbon\Carbon::parse($phpFormatStr1)->addHour($duration->hour)); ?>">

                                                            <input type="text" class="hidden" name="rental_time" value="<?php echo e($phpFormatStr1); ?>">
                                                            <?php
                                                                echo "<button class='btn btn-book width-100' type='submit'>$repStr1</button>" ;
                                                            ?>
                                                        </form>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if($diffMinDiv >= '4'): ?>
                                                    <div class="col-6 col-sm-3 timeBtn" data-my-variable="<?php echo e($formatStr2); ?>">
                                                        <form action="<?php echo e(route('reschedule.update_time', $reschedule)); ?>" method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field("PUT"); ?>
                                                            <input type="text" class="hidden" name="activity_date_start" value="<?php echo e($reschedule->rental_date); ?> <?php echo e($phpFormatStr2); ?>">
                                                            <input type="text" class="hidden" name="activity_date_end" value="<?php echo e(\Carbon\Carbon::parse($phpFormatStr2)->addHour($duration->hour)); ?>">

                                                            <input type="text" class="hidden" name="rental_time" value="<?php echo e($phpFormatStr2); ?>">
                                                            <?php
                                                                echo "<button class='btn btn-book width-100' type='submit'>$repStr2</button>" ;
                                                            ?>
                                                        </form>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if($diffMinDiv >= '5'): ?>
                                                    <div class="col-6 col-sm-3 timeBtn" data-my-variable="<?php echo e($formatStr3); ?>">
                                                        <form action="<?php echo e(route('reschedule.update_time', $reschedule)); ?>" method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field("PUT"); ?>
                                                            <input type="text" class="hidden" name="activity_date_start" value="<?php echo e($reschedule->rental_date); ?> <?php echo e($phpFormatStr3); ?>">
                                                            <input type="text" class="hidden" name="activity_date_end" value="<?php echo e(\Carbon\Carbon::parse($phpFormatStr3)->addHour($duration->hour)); ?>">

                                                            <input type="text" class="hidden" name="rental_time" value="<?php echo e($phpFormatStr3); ?>">
                                                            <?php
                                                                echo "<button class='btn btn-book width-100' type='submit'>$repStr3</button>" ;
                                                            ?>
                                                        </form>
                                                    </div>
                                                <?php endif; ?>

                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>


                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!-- /Time Buttons -->

                            <br><br>


                            
                            
                            
                            
                            

                            <br><br>



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Booking Step 3 Time -->

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
            $(document).ready(function() {


                let totalOut = document.getElementById('addition1out');
                let total1Out = document.getElementById('total1out');
                let inputQtyFuel = document.getElementById('fuelQty');
                let inputQtyToy = document.getElementById('toyQty');
                var inputCostToy = $(".toyCost").data("my-variable");
                var inputCostFuel = $(".fuelCost").data("my-variable");
                var totalCost = $(".totalIn").data("my-variable");


                inputQtyFuel.onkeyup = function () {
                    var fuelQty = inputQtyFuel.value;
                    var fuelTotal = inputCostFuel * fuelQty;
                    var toyQty = inputQtyToy.value;
                    var toyTotal = inputCostToy * toyQty;

                    $('.totalCostFuel').html(fuelTotal);
                    $('input.grandFuel').val(fuelTotal);

                    $('.totalCostToy').html(toyTotal);
                    $('input.grandToy').val(toyTotal);

                    grandTotal = fuelTotal + toyTotal;

                    totalOut.innerHTML = grandTotal;

                    grandMaster = grandTotal + totalCost;

                    total1Out.innerHTML = grandMaster;
                    totalOut.innerHTML = grandTotal;
                    // alert(fuelTotal);
                }
                inputQtyFuel.onclick = function () {
                    var fuelQty = inputQtyFuel.value;
                    var fuelTotal = inputCostFuel * fuelQty;
                    var toyQty = inputQtyToy.value;
                    var toyTotal = inputCostToy * toyQty;

                    $('.totalCostFuel').html(fuelTotal);
                    $('input.grandFuel').val(fuelTotal);

                    $('.totalCostToy').html(toyTotal);
                    $('input.grandToy').val(toyTotal);

                    grandTotal = fuelTotal + toyTotal;

                    totalOut.innerHTML = grandTotal;

                    grandMaster = grandTotal + totalCost;

                    total1Out.innerHTML = grandMaster;
                    totalOut.innerHTML = grandTotal;
                    // alert(fuelTotal);
                }

                inputQtyToy.onkeyup = function () {
                    var fuelQty = inputQtyFuel.value;
                    var fuelTotal = inputCostFuel * fuelQty;
                    var toyQty = inputQtyToy.value;
                    var toyTotal = inputCostToy * toyQty;

                    $('.totalCostFuel').html(fuelTotal);
                    $('input.grandFuel').val(fuelTotal);

                    $('.totalCostToy').html(toyTotal);
                    $('input.grandToy').val(toyTotal);

                    grandTotal = fuelTotal + toyTotal;

                    totalOut.innerHTML = grandTotal;

                    grandMaster = grandTotal + totalCost;

                    total1Out.innerHTML = grandMaster;
                    // alert(toyTotal);
                }
                inputQtyToy.onclick = function () {
                    var fuelQty = inputQtyFuel.value;
                    var fuelTotal = inputCostFuel * fuelQty;
                    var toyQty = inputQtyToy.value;
                    var toyTotal = inputCostToy * toyQty;

                    $('.totalCostFuel').html(fuelTotal);
                    $('input.grandFuel').val(fuelTotal);

                    $('.totalCostToy').html(toyTotal);
                    $('input.grandToy').val(toyTotal);

                    grandTotal = fuelTotal + toyTotal;

                    totalOut.innerHTML = grandTotal;

                    grandMaster = grandTotal + totalCost;

                    total1Out.innerHTML = grandMaster;
                    // alert(toyTotal);
                }

                jQuery(function(){
                    jQuery('#fuelQty').click();
                    jQuery('#ToyQty').click();
                });

                $(document).ready(function() {

                    $('.datepicker').datepicker('show');
                    $('.dynamicAvail').addClass('hidden');
                });



            });
        </script>

        <script>
            $(function() {
                $date = $( "#datepicker" ).datepicker("getDate");
                $('#datepicker').datepicker({
                    changeMonth: true,
                    changeYear: true,
                    numberOfMonths: 3,
                    showButtonPanel: true,
                    dateFormat: "yy-mm-dd",
                    value: "yy-mm-dd",
                    altField: "#alternate",
                    altFormat: "DD, MM d, yy",
                    onSelect: function() {
                        $date = $("#datepicker").datepicker({ dateFormat: 'dd-mm-yy' }).val();

                        $('.rentalDate').append('<input id="datepicker" value=' + $date  + '>');

                        $('#bookStage1').submit(); // <-- SUBMIT

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
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/office/reschedule-3-time.blade.php ENDPATH**/ ?>