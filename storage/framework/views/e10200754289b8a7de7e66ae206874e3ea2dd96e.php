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
                <title>Office | <?php echo e($application->name); ?></title>
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
            <h1>Check In: <span>

                    <small><?php echo e($booking->quantity); ?> x</small>
                 <?php $__currentLoopData = $durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <?php echo e($duration->abbreviation); ?>

                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                   <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <?php echo e($type->name); ?>

                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    | <?php echo e($booking->first); ?> <?php echo e($booking->last); ?></span></h1>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
        <!-- RENTAL INFORMATION -->
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
                        <div class="col-sm-6">
                            <div class="area-box">
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="item-title">Booking ID:</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="item"><?php echo e($booking->id); ?></p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="item-title">Vehicle:</p>
                                    </div>
                                    <div class="col-sm-9">
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
                                    <div class="col-sm-3">
                                        <p class="item-title">Rental Date:</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="item"><?php echo e(\Carbon\Carbon::parse($booking->activity_date_start)->format('M d, Y')); ?></p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="item-title">Ticket List:</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="item"><?php echo e($booking->quantity); ?>x
                                            <?php $__currentLoopData = $durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php echo e($duration->name); ?>

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
                                    <div class="col-sm-3">
                                        <p class="item-title">Purchase Type:</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="item"><?php echo e($booking->purchase_type); ?></p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="item-title">Payment Status:</p>
                                    </div>
                                    <div class="col-sm-9">
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
                                    <div class="col-sm-3">
                                        <p class="item-title">Total Charge:</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="item"><?php echo e($booking->total_cost); ?></p>
                                    </div>
                                </div>
                                <!-- /Item -->
                            </div>
                        </div>
                        <!-- /Renter Info -->
                        <div class="col-sm-1">
                            <div class="area-box">

                            </div>
                        </div>
                        <!-- Rental Info -->
                        <div class="col-sm-5">
                            <div class="area-box">
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-3">
                                        <p class="item-title">First Name:</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="item"><?php echo e($booking->first); ?></p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-3">
                                        <p class="item-title">Last Name:</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="item"><?php echo e($booking->last); ?></p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-3">
                                        <p class="item-title">Email:</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="item"><?php echo e($booking->email); ?></p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-3">
                                        <p class="item-title">Phone:</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="item"><?php echo e($booking->phone = substr($booking->phone, 2)); ?></p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-3">
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
        <!-- /RENTAL INFORMATION -->


        <!-- CUSTOMER INFORMATION -->
        <div class="card mb-4 shadow">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-8">
                        <h3 class="card-title">Customer Information</h3>
                        <p class="card-title-sub">This is the info for the person doing the deposit...</p>
                    </div>
                    <div class="col-sm-4">
                        <?php $__currentLoopData = $booking->customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking_customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($booking_customer->customer_id == $booking->customer_id): ?>
                                <form method="post" action="<?php echo e(route('office.customer.detach', $booking)); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>

                                    <input type="hidden" name="customer" value="<?php echo e($booking_customer->id); ?>">
                                    <button  class="btn btn-outline-primary align-right mt-3 text-white"
                                             <?php if(!$booking->customers->contains($booking_customer)): ?>
                                             hidden
                                             <?php endif; ?>
                                             type="submit">Change Customer</button>
                                </form>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <?php $__currentLoopData = $booking->customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking_customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($booking_customer->customer_id == $booking->customer_id): ?>

                        <div class="row">
                            <!-- Renter Info -->
                            <div class="col-sm-4">
                                <div class="area-box">
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">First Name:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item"><?php echo e($booking_customer->first_name); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">Last Name:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item"><?php echo e($booking_customer->last_name); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">Email:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item"><?php echo e($booking_customer->email); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">Phone:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item"><?php echo e($booking_customer->phone); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">Birth Date:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item"><?php echo e(\Carbon\Carbon::parse($booking_customer->birth_date)->format('M d, Y')); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->

                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">How Heard:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item"><?php echo e($booking_customer->how_heard); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                </div>
                            </div>
                            <!-- /Renter Info -->

                            <!-- Rental Info -->
                            <div class="col-sm-4">
                                <div class="area-box">
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">Address</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item"><?php echo e($booking_customer->address_1); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">City:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item"><?php echo e($booking_customer->city); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">State:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item"><?php echo e($booking_customer->state); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">Zip Code:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item"><?php echo e($booking_customer->zip_code); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->

                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">License State:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item"><?php echo e($booking_customer->driver_license_state); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->

                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">License Number:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item"><?php echo e($booking_customer->driver_license_number); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="mb-4">
                                    <?php if($booking_customer->license_front == 'null'): ?>
                                        &nbsp;
                                    <?php else: ?>
                                        <img class="img-responsive" src="<?php echo e(asset('storage/' . $booking_customer->license_front)); ?>" height="150px" width="auto"  alt="<?php echo e($booking_customer->first_name); ?> <?php echo e($booking_customer->last_name); ?> License not uploaded yet... "/>
                                    <?php endif; ?>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="modal-footer pb-0">
                                        <div class="row width-100">
                                            <div class="col-sm-4 offset-sm-8">
                                                <a class="btn btn-secondary"
                                                   <?php if(!$booking->customers->contains($booking_customer)): ?>
                                                   hidden
                                                   <?php endif; ?>
                                                   href="#"
                                                   class="customer-update-modal"
                                                   data-toggle="modal"
                                                   data-target="#customer_update<?php echo e($booking_customer->id); ?>">Update Customer</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- /Rental Info -->
                        </div>

                        <!-- Update Customer Modal -->
                        <div class="modal fade" id="customer_update<?php echo e($booking_customer->id); ?>" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="<?php echo e(route('office.updateCustomer', $booking_customer->id)); ?>" enctype="multipart/form-data" class="addCustomer-form">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="first_name">First Name</label>
                                                        <input type="text" class="form-control <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="first_name" value="<?php echo e($booking_customer->first_name); ?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="last_name">Last Name</label>
                                                        <input type="text" class="form-control <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="last_name" value="<?php echo e($booking_customer->last_name); ?>">
                                                        <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span><?php echo e($message); ?></span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="phone">Phone Number</label>
                                                        <input type="text" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="phone" value="<?php echo e($booking_customer->phone); ?>">
                                                        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span><?php echo e($message); ?></span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="text" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e($booking_customer->email); ?>">
                                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span><?php echo e($message); ?></span>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="address_1">Address</label>
                                                        <input type="text" class="form-control " name="address_1" value="<?php echo e($booking_customer->address_1); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- Left Side -->
                                                <div class="col-sm-6">

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label for="city">City</label>
                                                                <input type="text" class="form-control" name="city" value="<?php echo e($booking_customer->city); ?>">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <label for="state">State</label>
                                                                <input type="text" class="form-control" name="state" value="<?php echo e($booking_customer->state); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label for="zip_code">Zip Code</label>
                                                                <input type="text" class="form-control" name="zip_code" value="<?php echo e($booking_customer->zip_code); ?>">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label for="driver_license_state">Driver License State</label>
                                                                <input type="text" class="form-control" name="driver_license_state" value="<?php echo e($booking_customer->driver_license_state); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <label for="driver_license_number">Driver License Number</label>
                                                                <input type="text" class="form-control" name="driver_license_number" value="<?php echo e($booking_customer->driver_license_number); ?>">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label for="birth_date">Birthdate</label>
                                                                <input type="date" class="form-control" name="birth_date" value="<?php echo e($booking_customer->birth_date); ?>">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">

                                                    </div>

                                                </div>
                                                <!-- /Left Side -->

                                                <!-- Right Side -->
                                                <div class="col-sm-6">
                                                    <div class="col-sm-12">
                                                        <div class="form-group mb-4">
                                                            <label for="license_front">Driver License Front</label>
                                                            <input type="file" class="form-control" name="license_front">
                                                        </div>
                                                        <div class="mb-4">
                                                            <img class="img-responsive" src="<?php echo e(asset('storage/' . $booking_customer->license_front)); ?>" height="150px" width="auto">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Right Side -->
                                            </div>



                                            <div class="modal-footer">
                                                <div class="row width-100">
                                                    <div class="col-6">
                                                        <button class="btn btn-secondary width-100" type="button" data-dismiss="modal">Close</button>
                                                    </div>
                                                    <div class="col-6">
                                                        <button class="btn btn-primary width-100" type="submit">UPDATE CUSTOMER</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Update Customer Modal -->
                        <!-- /Update Customer Modal -->



                    <?php else: ?>
                        NOT WORKING!
                    <?php endif; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

            <div class="row
                <?php $__currentLoopData = $booking->customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking_customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($booking_customer->customer_id == $booking->customer_id): ?>
                hidden
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                ">
                <div class="col-sm-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="search-customer-tab" data-toggle="tab" href="#search-customer" role="tab" aria-controls="search-customer"
                               aria-selected="true">Returning Customer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="add-customer-tab" data-toggle="tab" href="#add-customer" role="tab" aria-controls="add-customer"
                               aria-selected="false">New Customer</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active search-customer" id="search-customer" role="tabpanel" aria-labelledby="search-customer-tab">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="rentalCustomersTable" width="100% !important;" cellspacing="0">
                                                <thead>
                                                <tr>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th class="hidden-xs-table">Email</th>
                                                    <th class="hidden-xs-table">Phone</th>
                                                    
                                                    
                                                    <th>&nbsp;</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td class="no-border-right"><?php echo e($customer->first_name); ?></td>
                                                        <td class="no-border-right"><?php echo e($customer->last_name); ?></td>
                                                        <td class="no-border-right hidden-xs-table"><?php echo e($customer->email); ?></td>
                                                        <td class="no-border-right hidden-xs-table"><?php echo e($customer->phone); ?></td>
                                                        
                                                        
                                                        <td class="no-border-right">
                                                            <form method="post" action="<?php echo e(route('office.customer.attach', $booking)); ?>">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('PUT'); ?>

                                                                <input type="hidden" name="customer" value="<?php echo e($customer->id); ?>">
                                                                <input type="hidden" name="booking_id" value="<?php echo e($booking->id); ?>">
                                                                <button
                                                                    class="btn btn-secondary"
                                                                    <?php if($booking->customers->contains($customer)): ?>
                                                                    disabled
                                                                    <?php endif; ?>
                                                                    type="submit">Select</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="add-customer" role="tabpanel" aria-labelledby="add-customer-tab">
                            <div class="card-form">
                                <form method="post" action="<?php echo e(route('office.customer.storeNew', $booking)); ?>" enctype="multipart/form-data" class="addCustomer-form">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="first_name">First Name</label>
                                                <input type="text" class="form-control <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="first_name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="last_name">Last Name</label>
                                                <input type="text" class="form-control <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="last_name">
                                                <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span><?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="phone">Phone Number</label>
                                                <input type="text" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="phone">
                                                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span><?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="text" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email">
                                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span><?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="address_1">Address</label>
                                                <input type="text" class="form-control " name="address_1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Left Side -->
                                        <div class="col-sm-6">

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="city">City</label>
                                                        <input type="text" class="form-control" name="city">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label for="state">State</label>
                                                        <select id="state" name="state" class="form-control <?php $__errorArgs = ['state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                                            <option value="Oregon">Oregon</option>
                                                            <option value="Washington">Washington</option>
                                                            <option value="California">California</option>
                                                            <option default>-----</option>
                                                            <option value="Alabama">Alabama</option>
                                                            <option value="Alaska">Alaska</option>
                                                            <option value="arizona">Arizona</option>
                                                            <option value="Arkansas">Arkansas</option>
                                                            <option value="Colorado">Colorado</option>
                                                            <option value="Connecticut">Connecticut</option>
                                                            <option value="Delaware">Delaware</option>
                                                            <option value="Florida">Florida</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Hawaii">Hawaii</option>
                                                            <option value="Idaho">Idaho</option>
                                                            <option value="Illinois">Illinois</option>
                                                            <option value="Indiana">Indiana</option>
                                                            <option value="Iowa">Iowa</option>
                                                            <option value="Kansas">Kansas</option>
                                                            <option value="Kentucky">Kentucky</option>
                                                            <option value="Louisiana">Louisiana</option>
                                                            <option value="Maine">Maine</option>
                                                            <option value="Maryland">Maryland</option>
                                                            <option value="Massachusetts">Massachusetts</option>
                                                            <option value="Michigan">Michigan</option>
                                                            <option value="Minnesota">Minnesota</option>
                                                            <option value="Mississippi">Mississippi</option>
                                                            <option value="Missouri">Missouri</option>
                                                            <option value="Montana">Montana</option>
                                                            <option value="Nebraska">Nebraska</option>
                                                            <option value="Nevada">Nevada</option>
                                                            <option value="New Hampshire">New Hampshire</option>
                                                            <option value="New Jersey">New Jersey</option>
                                                            <option value="New Mexico">New Mexico</option>
                                                            <option value="New York">New York</option>
                                                            <option value="North Carolina">North Carolina</option>
                                                            <option value="North Dakota">North Dakota</option>
                                                            <option value="Ohio">Ohio</option>
                                                            <option value="Oklahoma">Oklahoma</option>
                                                            <option value="Pennsylvania">Pennsylvania</option>
                                                            <option value="Rhode Island">Rhode Island</option>
                                                            <option value="South Carolina">South Carolina</option>
                                                            <option value="South Dakota">South Dakota</option>
                                                            <option value="Tennessee">Tennessee</option>
                                                            <option value="Texas">Texas</option>
                                                            <option value="Utah">Utah</option>
                                                            <option value="Vermont">Vermont</option>
                                                            <option value="West Virgina">West Virgina</option>
                                                            <option value="Wisconsin">Wisconsin</option>
                                                            <option value="Wyoming">Wyoming</option>
                                                            <option value="Not Available">N/A - Use Address Section</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="zip_code">Zip Code</label>
                                                        <input type="text" class="form-control" name="zip_code">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- /Left Side -->

                                        <!-- Right Side -->
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="driver_license_state">Driver License State</label>
                                                        <select id="driver_license_state" name="driver_license_state" class="form-control <?php $__errorArgs = ['driver_license_state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                                            <option value="Oregon">Oregon</option>
                                                            <option value="Washington">Washington</option>
                                                            <option value="California">California</option>
                                                            <option default>-----</option>
                                                            <option value="Alabama">Alabama</option>
                                                            <option value="Alaska">Alaska</option>
                                                            <option value="arizona">Arizona</option>
                                                            <option value="Arkansas">Arkansas</option>
                                                            <option value="Colorado">Colorado</option>
                                                            <option value="Connecticut">Connecticut</option>
                                                            <option value="Delaware">Delaware</option>
                                                            <option value="Florida">Florida</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Hawaii">Hawaii</option>
                                                            <option value="Idaho">Idaho</option>
                                                            <option value="Illinois">Illinois</option>
                                                            <option value="Indiana">Indiana</option>
                                                            <option value="Iowa">Iowa</option>
                                                            <option value="Kansas">Kansas</option>
                                                            <option value="Kentucky">Kentucky</option>
                                                            <option value="Louisiana">Louisiana</option>
                                                            <option value="Maine">Maine</option>
                                                            <option value="Maryland">Maryland</option>
                                                            <option value="Massachusetts">Massachusetts</option>
                                                            <option value="Michigan">Michigan</option>
                                                            <option value="Minnesota">Minnesota</option>
                                                            <option value="Mississippi">Mississippi</option>
                                                            <option value="Missouri">Missouri</option>
                                                            <option value="Montana">Montana</option>
                                                            <option value="Nebraska">Nebraska</option>
                                                            <option value="Nevada">Nevada</option>
                                                            <option value="New Hampshire">New Hampshire</option>
                                                            <option value="New Jersey">New Jersey</option>
                                                            <option value="New Mexico">New Mexico</option>
                                                            <option value="New York">New York</option>
                                                            <option value="North Carolina">North Carolina</option>
                                                            <option value="North Dakota">North Dakota</option>
                                                            <option value="Ohio">Ohio</option>
                                                            <option value="Oklahoma">Oklahoma</option>
                                                            <option value="Pennsylvania">Pennsylvania</option>
                                                            <option value="Rhode Island">Rhode Island</option>
                                                            <option value="South Carolina">South Carolina</option>
                                                            <option value="South Dakota">South Dakota</option>
                                                            <option value="Tennessee">Tennessee</option>
                                                            <option value="Texas">Texas</option>
                                                            <option value="Utah">Utah</option>
                                                            <option value="Vermont">Vermont</option>
                                                            <option value="West Virgina">West Virgina</option>
                                                            <option value="Wisconsin">Wisconsin</option>
                                                            <option value="Wyoming">Wyoming</option>
                                                            <option value="Not Available">N/A - Use Address Section</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="driver_license_number">Driver License Number</label>
                                                        <input type="text" class="form-control" name="driver_license_number">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="birth_date">Birth Date</label>
                                                        <input type="date" class="form-control" name="birth_date">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="how_heard">How Heard</label>
                                                        <input type="text" class="form-control" name="how_heard">
                                                    </div>
                                                </div>
                                                <input type="hidden" class="form-control" name="license_front" value="Add license in Pre-Check">





                                            </div>
                                        </div>
                                        <!-- /Right Side -->
                                    </div>



                                    <div class="modal-footer">
                                        



                                        <button  class="btn btn-danger" type="submit">ADD CUSTOMER</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /CUSTOMER INFORMATION -->

        <!-- ADDITIONAL -->
        <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mb-4 my-3 shadow">
                <div class="card-header">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6">
                            <h3 class="card-title">Additions</h3>
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <h3 class="text-right">
                                $ <?php
                                    $deposit = '1000';
                                    $qty = $booking->quantity;

                                    $total_dep = $deposit * $qty;
                                    echo ($total_dep);
                                ?>
                                <span class="text-gray-500">Pre-Auth</span>
                                <small>OR</small>
                                $ <?php
                                    $depositSale = '2000';
                                    $qtySale = $booking->quantity;

                                    $total_depSale = $depositSale * $qtySale;
                                    echo ($total_depSale);
                                ?>
                                <span class="text-gray-500">Sale</span>
                            </h3>

                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-sm-5 pt-3">
                                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <?php $__currentLoopData = $additions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $addition): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($addition->slug == 'fuel'): ?>

                                            <div class="row additionRow
                                                <?php if($type->slug == 'seadoo' && $booking->hour < '4'): ?>
                                                    hidden
                                                <?php elseif($type->slug == 'pontoon' && $booking->hour <= '5'): ?>
                                                    hidden
                                                <?php elseif($type->slug == 'segway'): ?>
                                                    hidden
                                                <?php endif; ?>
                                                ">
                                                <div class="col-8 col-sm-6">
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <h4><?php echo e($addition->name); ?></h4>
                                                        </div>
                                                        <div class="col-4">
                                                            <h4><?php echo e($addition->cost); ?></h4>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="col-1 col-sm-2">
                                                    <input type="number" class="form-control mb-3" id="fuelQty" name="fuel_count" placeholder="Qty" min="0" max="<?php echo e($addition->quantity); ?>"
                                                            <?php if($type->slug == 'seadoo' && $booking->hour < '4'): ?>
                                                               value="0"
                                                            <?php elseif($type->slug == 'pontoon' && $booking->hour < '5'): ?>
                                                             value="0"
                                                            <?php else: ?>
                                                            value="<?php echo e($type->fuel_capacity); ?>"
                                                           <?php endif; ?>
                                                            ">

                                                    <div id="fuelCost" class="hidden fuelCost" data-my-variable="<?php echo e($addition->cost); ?>"></div>

                                                    <input type="text" class="hidden grandFuel" name="fuel_deposit">
                                                </div>
                                                <div class="col-sm-2">
                                                    <h3>$ <span class="totalCostFuel"></span></h3>
                                                </div>
                                                <div class="col-sm-2">
                                                    <select name="fuel_deposit_type" id="fuel_deposit_type">
                                                        <option default>-Payment Method-</option>
                                                        <option value="visa">Sale</option>
                                                        <option value="pre-auth">Pre-Auth</option>
                                                        <option value="cash">Cash</option>
                                                    </select>
                                                </div>
                                            </div>
                                        <?php else: ?>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                                        <?php $__currentLoopData = $additions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $addition): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($addition->slug == 'toy-package'): ?>

                                                <div class="row additionRow
                                                 <?php if($type->slug != 'scarab'): ?>
                                                    hidden
                                                <?php endif; ?>
                                                    ">
                                                    <div class="col-8 col-sm-6">
                                                        <div class="row">
                                                            <div class="col-8">
                                                                <h4><?php echo e($addition->name); ?></h4>
                                                            </div>
                                                            <div class="col-4">
                                                                <h4><?php echo e($addition->cost); ?></h4>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                    <div class="col-1 col-sm-2">
                                                        <input type="number" class="form-control mb-3 <?php if($type->slug != 'scarab'): ?> hidden <?php endif; ?>" id="toyQty" name="toy_count" placeholder="Qty" min="0" max="<?php echo e($addition->quantity); ?>" value="0">
                                                        <div id="toyID" class="hidden"><?php echo e($addition->id); ?></div>
                                                        <div id="toyCost" class="hidden toyCost" data-my-variable="<?php echo e($addition->cost); ?>"></div>

                                                        <input type="text" class="hidden grandToy" name="toy_fee">
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <h3>$ <span class="totalCostToy"></span></h3>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <select name="fuel_deposit_type" id="fuel_deposit_type" class="fuel_deposit_type hidden">
                                                            <option default>-Payment Method-</option>
                                                            <option value="visa">Sale</option>
                                                            <option value="pre-auth">Pre-Auth</option>
                                                            <option value="cash">Cash</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            <?php else: ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>






                        </div>
                        <div class="col-sm-3 pt-3">


                        </div>
                        <div class="col-sm-4">
                            <div class="row mt-3">

                                <div class="col-3 text-right">

                                    <!-- ROW 1 Unit Price-->
                                    <h4 class="">$ <span id="durCost"><?php echo e($booking->cost_per); ?></span></h4>
                                    <!-- ROW 1 Unit Price-->

                                    <!-- ROW 2 Quantity -->
                                    <h4 class=""><span class="text-gray-500">x</span> <span id="quantity1out"><?php echo e($booking->quantity); ?></span></h4>
                                    <!-- ROW 2 Quantity -->

                                    <!-- ROW 2 Duration -->
                                    <?php if($duration->hour == '1'): ?>
                                        <h4 class=""><span class="text-gray-500">x</span> <span id="duration1out"><?php echo e($booking->hour); ?></span></h4>
                                    <?php else: ?>

                                    <?php endif; ?>
                                    <!-- ROW 2 Duration -->

                                <!-- ROW 2 Additions -->
                                    <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($type->id == $booking->type_id): ?>
                                            <?php if($type->slug == 'seadoo' && $duration->hour <= '4'): ?>

                                                <?php elseif($type->slug == 'pontoon' && $duration->hour <= '5'): ?>

                                            <?php else: ?>
                                                <h4 class=""><span class="text-gray-500">$</span> <span id="addition1out">0</span></h4>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <!-- ROW 2 Additions -->


                                    <!-- ROW 3 Fees -->
                                    <h4 class="">
                                        <span class="text-gray-500">$</span>
                                        <span id="fee1out" class="text-gray-400">
                                    <?php
                                        echo number_format($booking->fees, 2);
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
                                    <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($type->id == $booking->type_id): ?>
                                            <?php if($type->slug == 'seadoo' && $duration->hour <= '4'): ?>

                                            <?php elseif($type->slug == 'pontoon' && $duration->hour <= '5'): ?>

                                            <?php else: ?>
                                                <h4 class="">
                                                    Addition <span class="text-gray-500">(s)</span>
                                                </h4>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <!-- ROW 23 Quantity -->

                                    <!-- ROW 23 Quantity -->
                                    <h4 class="text-gray-400">
                                        Processing <span class="text-gray-400">&</span> Taxes
                                    </h4>
                                    <!-- ROW 23 Quantity -->
                                </div>
                            </div>
                            <!-- ROW TOTAL -->
                            <div class="row mt-3">
                                <div class="col-12">
                                    <h3 class="text-center"><span class="text-gray-500">$</span>
                                        <span class="totalIn" data-my-variable="<?php echo e($booking->total_cost); ?>"></span>
                                        <span id="total1out">
                                        <?php
                                            echo number_format($booking->total_cost, 2);
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
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!-- /ADDITIONAL -->

        <!-- CHECK IN BUTTONS -->
        <div class="card mt-4 mb-5 shadow">
            <div class="modal-footer">
                <div class="row width-100">
                    <div class="col-sm-3">
                        <button class="btn btn-outline-primary" type="button" data-toggle="modal" data-target="#cancel_rental<?php echo e($booking->id); ?>">CANCEL RENTAL</button>
                    </div>
                    <div class="col-sm-3">
                        <a href="<?php echo e(route('office.reschedule_booking', $booking)); ?>" class="btn btn-outline-secondary" type="button">RESCHEDULE</a>
                    </div>
                    <div class="col-sm-3">
                        <a href="<?php echo e(route('office.update_booking', $booking)); ?>" class="btn btn-outline-secondary" type="button">UPDATE</a>
                    </div>
                    <div class="col-sm-3">
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#checkin<?php echo e($booking->id); ?>">CHECK IN</button>
                    </div>

                </div>

            </div>
        </div>
        <!-- /CHECK IN BUTTONS -->


        <form action="<?php echo e(route('office.checkInRental', $booking->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>


            <div class="modal fade checkin-modal" id="checkin<?php echo e($booking->id); ?>" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">

                </div>
            </div>
        </form>


        <!-- Cancel Rental Modal -->
        <div class="modal fade" id="cancel_rental<?php echo e($booking->id); ?>" tabindex="-1" role="dialog" aria-labelledby="cancelModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h4 class="mb-4">Are you sure you want to cancel:</h4>
                                <h3><span><?php echo e($booking->first_name); ?> <?php echo e($booking->last_name); ?></span> <br> <?php echo e($booking->activity_item); ?></h3>
                                <h5><?php echo e($booking->booking_id); ?></h5>
                                <p class="italic mt-4">This action can NOT be undone!</p>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">NEVERMIND...</button>

                        <form action="<?php echo e(route('office.cancelRental', $booking->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>

                            <?php if(Auth::check()): ?>
                                <input type="hidden" value="<?php echo e(auth()->user()->id); ?>" name="check_in_by">
                            <?php endif; ?>
                            <input type="hidden" value="<?php echo e($dateNow); ?>" name="check_in_time">
                            <input type="hidden" value="Canceled" name="status">

                            <button class="btn btn-primary-red" type="submit">CANCEL RENTAL</button>
                        </form>
                    </div>
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
                    $('.fuel_deposit_type').removeClass('hidden');

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
                    $('.fuel_deposit_type').removeClass('hidden');

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



            });
        </script>
    <?php $__env->stopSection(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/office/checkin.blade.php ENDPATH**/ ?>