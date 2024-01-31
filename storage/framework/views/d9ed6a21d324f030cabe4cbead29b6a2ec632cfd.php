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
        <?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                        <i class="fa fa-chevron-right"></i> Reserve
                    </p>
                </div>
                <!-- /Title -->

                <!-- Page Info -->
                <img src="<?php echo e(asset('storage/' . $type->image)); ?>" alt="<?php echo e($type->img_alt); ?>" class="page-img" />
                <?php if($type->description != ''): ?>
                    <?php $__currentLoopData = $durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <h2 class="section-header"><?php echo e($duration->name); ?> <?php echo e($type->name); ?> Rental</h2>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <h3 class="text-center">Finalize Booking</h3>
                <?php else: ?>
                    <?php $__currentLoopData = $durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <h2 class="section-header"><?php echo e($duration->name); ?> <?php echo e($type->name); ?> Rental</h2>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <h3 class="text-center">Finalize Booking</h3>
                <?php endif; ?>
                <!-- /Page Info -->

                <!-- Booking Step 5 Customer Info -->
                <div class="row">
                    <div class="col-sm-4">
                        <!-- Change Date -->
                        <div class="row mb-4">
                            <div class="col-sm-11">
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
                                        <input type="text" class="hidden" name="type_id" value="<?php echo e($type->id); ?>">
                                        <input type="text" class="hidden" name="type_name" value="<?php echo e($type->slug); ?>">
                                        <input type="text" class="form-control datepicker rentalDate" name="rental_date" id="datepicker" value="<?php echo e($bucket->rental_date); ?>" placeholder="Select Date">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /Change Date -->

                        <!-- Change Buttons -->
                        <div class="row mb-3">
                            <div class="col-sm-11 mb-3">
                                <form action="<?php echo e(route('bucket.changeDuration', $bucket)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field("PUT"); ?>
                                    <?php $__currentLoopData = $durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($duration->id == $bucket->duration_id): ?>
                                            <input type="text" class="hidden" name="duration_id" value="<?php echo e($duration->id); ?>">
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <button type="submit" class="btn btn-outline-primary text-white btn-100"><small>Change</small> &nbsp; <b>Duration</b></button>
                                </form>
                            </div>
                            <div class="col-sm-11 mb-3">
                                <a href="<?php echo e(route('home.book_rental_time', $bucket)); ?>" class="btn btn-outline-primary text-white btn-100"><small>Change</small> &nbsp; <b>Time</b></a>
                            </div>
                            <div class="col-sm-11 mb-3">
                                <a href="<?php echo e(route('home.book_rental_info', $bucket)); ?>" class="btn btn-outline-primary text-white btn-100"><small>Change</small> &nbsp; <b>Additions</b></a>
                            </div>
                        </div>
                        <!-- /Change Buttons -->
                    </div>
                    <div class="col-sm-8">
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
                        <div class="row mt-3">
                            <div class="col-sm-6">

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="customer_first">First</label>
                                            <input type="text" class="form-control <?php $__errorArgs = ['customer_first'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " name="customer_first" id="pageFirst">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="customer_last">Last</label>
                                            <input type="text" class="form-control <?php $__errorArgs = ['customer_last'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " name="customer_last" id="pageLast">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " name="email" id="pageEmail">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " name="phone" id="pagePhone">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="customer_notes">Notes</label>
                                            
                                            <input type="text" class="form-control <?php $__errorArgs = ['customer_notes'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " name="customer_notes" id="pageNotes">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
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

                    </div>
                </div>



                <!-- Next Button -->
                <div class="row mt-5">
                    <div class="col-12">
                        <a href="#" class="btn btn-book btn-sm p-2" data-toggle="modal" data-target="#confirmationModal">Payment</a>
                    </div>
                </div>
                <!-- /Next Button -->

                <!-- Confirmation Modal -->
                <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="bookNow" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3>Book a <span><?php echo e($type->name); ?></span></h3>
                            </div>
                            <form action="<?php echo e(route('home.book_rental_customer', $bucket)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field("PUT"); ?>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="cardText">
                                                <div class="container">
                                                    <div class="row">
                                                        <?php
                                                            $start_date = \Carbon\Carbon::parse($bucket->activity_date_start);
                                                            $now = \Carbon\Carbon::now();
                                                            $diff = $start_date->diffInDays($now);
                                                            if ($diff < 5) {
                                                        ?>
                                                            <h4>
                                                                Your Card will be charged<span class="text-white"> upon submission</span>.
                                                            </h4>
                                                            <h5 class="text-gray-600">
                                                                Our <span class="text-white">Cancellation Policy</span>:<br> Bookings made within 5 days prior to the rental start date will be charged upon booking.
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
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <h4>
                                                                Your Card will be charged on
                                                                <span class="text-white">
                                                                    <?php echo e(\Carbon\Carbon::parse($bucket->activity_date_start)->subDays(5)->format('D, M. d, Y')); ?>

                                                                </span>
                                                                <small>(5 days prior to your rental)</small>
                                                            </h4>
                                                            <h5 class="text-gray-500">
                                                                If your card is declined, you will be notified and will have until 8pm on <?php echo e(\Carbon\Carbon::parse($bucket->activity_date_start)->subDays(5)->format('D, M. d, Y')); ?> to complete the payment.
                                                            </h5>
                                                            <h5 class="text-gray-600">
                                                                Any declined payments that are not updated by 8pm on <?php echo e(\Carbon\Carbon::parse($bucket->activity_date_start)->subDays(5)->format('D, M. d, Y')); ?> will forfeit the booking which will result in cancellation with no fee.
                                                            </h5>
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
                                                        <?php

                                                        }
                                                        ?>
                                                    </div>
                                                    <label for="card_number" class=" mt-4">Card Info <small><em>*ALL fields Required</em></small></label>
                                                    <div class="row">
                                                        <input type="number" class="form-control modalInput mt-3 width-98 validate <?php $__errorArgs = ['num_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " maxlength="4" required placeholder="0000" name="num_1">
                                                        <input type="number" class="form-control modalInput mt-3 width-98 validate <?php $__errorArgs = ['num_2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " maxlength="4" required placeholder="0000" name="num_2">
                                                        <input type="number" class="form-control modalInput mt-3 width-98 validate <?php $__errorArgs = ['num_3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " maxlength="4" required placeholder="0000" name="num_3">
                                                        <input type="number" class="form-control modalInput mt-3 width-98 validate <?php $__errorArgs = ['num_4'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " maxlength="4" required placeholder="0000" name="num_4">
                                                        <input type="number" class="form-control modalInput mt-3 col-1 offset-1 validate <?php $__errorArgs = ['month'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " maxlength="2" required placeholder="MO" name="month">
                                                        <input type="number" class="form-control modalInput mt-3 col-1 validate <?php $__errorArgs = ['year'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " maxlength="2" required placeholder="YR" name="year">
                                                        <input type="number" class="form-control modalInput mt-3 col-2 offset-1 validate <?php $__errorArgs = ['cvc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " maxlength="3" required placeholder="CVC" name="cvc">
                                                        <input type="number" class="form-control modalInput mt-3 col-3 offset-1 validate <?php $__errorArgs = ['zip_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " maxlength="5" required placeholder="Zip Code" name="zip_code">
                                                        <input type="text" class="form-control modalInput col-12 mt-4 width-100 <?php $__errorArgs = ['card_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " maxlength="60" placeholder="Name on Card" name="card_name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="hidden">
                                            <input type="text" class="form-control" name="customer_ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
                                            <input type="text" class="form-control" name="customer_first" id="modalFirst">
                                            <input type="text" class="form-control" name="customer_last" id="modalLast">
                                            <input type="text" class="form-control" name="email" id="modalEmail">
                                            <input type="text" class="form-control" name="phone" id="modalPhone">
                                            <input type="text" class="form-control" name="customer_notes" id="modalNotes">
                                            <input type="text" class="" name="ticket_list" value="<?php echo e($bucket->quantity); ?>x <?php echo e($duration->name); ?> <?php echo e($type->name); ?>">
                                            <input type="text" class="" name="bucket_id" value="<?php echo e($bucket->id); ?>">
                                            <input type="text" class="" name="type_id" value="<?php echo e($type->id); ?>">
                                            <input type="text" class="" name="duration_id" value="<?php echo e($duration->id); ?>">
                                            <input type="text" class="" name="hour" value="<?php echo e($bucket->hour); ?>">
                                            <input type="text" class="" name="activity_date_start" value="<?php echo e($bucket->activity_date_start); ?>">
                                            <input type="text" class="" name="activity_date_end" value="<?php echo e($bucket->activity_date_end); ?>">
                                            <input type="text" class="" name="quantity" value="<?php echo e($bucket->quantity); ?>">
                                            <input type="text" class="" name="cost_per" value="<?php echo e($bucket->cost_per); ?>">
                                            <input type="text" class="" name="additions" value="<?php echo e($bucket->additions); ?>">
                                            <input type="text" class="" name="fees" value="<?php echo e($bucket->fees); ?>">
                                            <input type="text" class="" name="taxes" value="<?php echo e($bucket->taxes); ?>">
                                            <input type="text" class="" name="total_cost" value="<?php echo e($bucket->total_cost); ?>">
                                            <input type="text" class="" name="total_paid" value="<?php echo e($bucket->total_paid); ?>">
                                            <input type="text" class="" name="total_owed" value="<?php echo e($bucket->total_owed); ?>">
                                            <input type="text" class="" name="activity_item" value="<?php echo e($type->slug); ?>">
                                        </div>
                                    </div>

                                        <div class="row mt-5">
                                            <div class="col-12">
                                                <button class="btn btn-book btn-sm p-2" type="submit">Book <?php echo e($type->name); ?></button>
                                            </div>
                                        </div>
                                    </div>
                                <div class="modal-footer">
                                        <h5 class="text-gray-600">
                                            Upon submission, you agree to pay the amount of
                                            $ <span id="total1out">
                                            <?php
                                                echo number_format($bucket->total_cost, 2);
                                            ?>
                                        </span>

                                            <?php
                                                if ($diff < 5) {
                                            ?>
                                            today, <?php echo e(\Carbon\Carbon::now()->format('D, M. d, Y')); ?>

                                            <?php
                                                } else {
                                            ?>
                                           on <?php echo e(\Carbon\Carbon::parse($bucket->activity_date_start)->subDays(5)->format('D, M. d, Y')); ?>

                                            <?php

                                                }
                                            ?>

                                            in agreement with our
                                            <a href="<?php echo e(route('home.merchant_agreement')); ?>" class="text-yellow">Merchant Agreement</a> and
                                            <a href="<?php echo e(route('home.privacy_policy')); ?>" class="text-yellow">Privacy Policy</a>.
                                        </h5>
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

                <!-- /Booking Step 5 Customer Info -->





            </div>
        </div>
    <?php $__env->stopSection(); ?>



    <?php $__env->startSection('scripts'); ?>
        <script src="<?php echo e(asset('js/sb-admin-2.js')); ?>"></script>

        <script>

            $(document).ready(function() {

                let inputFirst = document.getElementById('pageFirst');
                let outFirst = document.getElementById('modalFirst');
                let inputLast = document.getElementById('pageLast');
                let outLast = document.getElementById('modalLast');
                let inputEmail = document.getElementById('pageEmail');
                let outEmail = document.getElementById('modalEmail');
                let inputPhone = document.getElementById('pagePhone');
                let outPhone = document.getElementById('modalPhone');
                let inputNotes = document.getElementById('pageNotes');
                let outNotes = document.getElementById('modalNotes');
                let inputZip = document.getElementById('pageZip');
                let outZip = document.getElementById('modalZip');


                inputFirst.onkeyup = function () {
                    outFirst.value = inputFirst.value;
                }
                inputLast.onkeyup = function () {
                    outLast.value = inputLast.value;
                }
                inputEmail.onkeyup = function () {
                    outEmail.value = inputEmail.value;
                }
                inputPhone.onkeyup = function () {
                    outPhone.value = inputPhone.value;
                }
                inputNotes.onkeyup = function () {
                    outNotes.value = inputNotes.value;
                }
                inputZip.onkeyup = function () {
                    outZip.value = inputZip.value;
                }



            });

            $(document).ready(function() {
                $(".modalInput").each(function () {
                   $(this).keyup(function () {
                       if (this.value.length === this.maxLength) {
                           $(this).next('.row>.modalInput').focus();
                       }
                   });
                });
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

        </script>
    <?php $__env->stopSection(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/home/book-rental-5.blade.php ENDPATH**/ ?>