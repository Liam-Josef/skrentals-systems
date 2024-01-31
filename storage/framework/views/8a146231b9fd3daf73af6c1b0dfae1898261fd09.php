<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.office-master','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('office-master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>



    <?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php $__env->startSection('page_title'); ?>
            <h1>Pre-Check - <?php echo e($rental->first_name); ?> <?php echo e($rental->last_name); ?></h1>
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('browser_title'); ?>
            <title>Pre-Check - <?php echo e($rental->first_name); ?> <?php echo e($rental->last_name); ?> | <?php echo e($application->name); ?></title>
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


    <?php $__env->startSection('styles'); ?>
        <link href="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('page_title'); ?>
            <h1>Pre-Check:
                <span>
                    <!-- Rental Duration UPDATED -->
                    <?php if(strpos($rental->ticket_list, '1 Hour') !== false): ?>
                        1 Hr
                    <?php elseif(strpos($rental->ticket_list, '1 hour') !== false): ?>
                        1 Hr
                    <?php endif; ?>
                    <?php if(strpos($rental->ticket_list, '2 hour') !== false): ?>
                        2 Hr
                    <?php elseif(strpos($rental->ticket_list, '2 Hour') !== false): ?>
                        2 Hr
                    <?php endif; ?>
                    <?php if(strpos($rental->ticket_list, '3 Hour') !== false): ?>
                        3 Hr
                    <?php elseif(strpos($rental->ticket_list, '3 hour') !== false): ?>
                        3 Hr
                    <?php endif; ?>
                    <?php if(strpos($rental->ticket_list, '4 Hour') !== false): ?>
                        HD
                    <?php elseif(strpos($rental->ticket_list, '4 hour') !== false): ?>
                        HD
                    <?php endif; ?>
                    <?php if(strpos($rental->ticket_list, '8 Hour') !== false): ?>
                        FD
                    <?php elseif(strpos($rental->ticket_list, '8 hour') !== false): ?>
                        FD
                    <?php endif; ?>
                    <?php if(strpos($rental->ticket_list, '9 Hour') !== false): ?>
                        FD
                    <?php elseif(strpos($rental->ticket_list, '9 hour') !== false): ?>
                        FD
                    <?php endif; ?>
                    <?php if(strpos($rental->ticket_list, 'Full Day') !== false): ?>
                        FD
                    <?php endif; ?>
                    <?php if(strpos($rental->ticket_list, 'Half Day') !== false): ?>
                        HD
                    <?php endif; ?>
                    <?php if(strpos($rental->ticket_list, '1 Day') !== false): ?>
                        1 D
                    <?php endif; ?>
                    <?php if(strpos($rental->ticket_list, '2 Day') !== false): ?>
                        2 D
                    <?php endif; ?>
                    <?php if(strpos($rental->ticket_list, '3 Day') !== false): ?>
                        3 D
                    <?php endif; ?>
                    <?php if(strpos($rental->ticket_list, '4 Day') !== false): ?>
                        4 D
                    <?php endif; ?>
                    <?php if(strpos($rental->ticket_list, '5 Day') !== false): ?>
                        5 D
                    <?php endif; ?>
                    <?php if(strpos($rental->ticket_list, '6 Day') !== false): ?>
                        6 D
                    <?php endif; ?>
                    <?php if(strpos($rental->ticket_list, '7 Day') !== false): ?>
                        7 D
                    <?php endif; ?>
                    <?php if(strpos($rental->ticket_list, '8 Day') !== false): ?>
                        8 D
                    <?php endif; ?>
                    <?php if(strpos($rental->ticket_list, '9 Day') !== false): ?>
                        9 D
                    <?php endif; ?>
                    <?php if(strpos($rental->ticket_list, '10 Day') !== false): ?>
                        10 D
                    <?php endif; ?>
                    <?php if(strpos($rental->ticket_list, '11 Day') !== false): ?>
                        11 D
                    <?php endif; ?>
                    <?php if(strpos($rental->ticket_list, '12 Day') !== false): ?>
                        12 D
                    <?php endif; ?>
                    <?php if(strpos($rental->ticket_list, '13 Day') !== false): ?>
                        13 D
                    <?php endif; ?>
                    <?php if(strpos($rental->ticket_list, '14 Day') !== false): ?>
                        14 D
                    <?php endif; ?>

                    <?php if($rental->activity_item == 'Scarab 215'): ?>
                        Scarab
                    <?php elseif($rental->activity_item == '23ft. Pontoon Boat'): ?>
                        Pontoon
                    <?php elseif($rental->activity_item == '23ft. Pontoon Boat'): ?>
                        Pontoon
                    <?php elseif($rental->activity_item == 'Renegade BC 600ETec'): ?>
                        Renegade
                    <?php elseif($rental->activity_item == 'Summit 154 SP'): ?>
                        Summit
                    <?php elseif($rental->activity_item == '14ft. Aluminum Boat'): ?>
                        Aluminum
                    <?php elseif($rental->activity_item == 'Kayak Single'): ?>
                        Single Kayak
                    <?php elseif($rental->activity_item == 'Double Kayak'): ?>
                        Double Kayak
                    <?php elseif($rental->activity_item == 'Stand Up Paddleboard'): ?>
                        SUP
                    <?php elseif($rental->activity_item == 'Segway i2'): ?>
                        Segway
                    <?php elseif($rental->activity_item == 'Spyder RT-S SE6'): ?>
                        Spyder
                    <?php elseif($rental->activity_item == 'SeaDoo'): ?>
                        SeaDoo
                    <?php else: ?>
                        <br />

                    <?php endif; ?>
                    | <?php echo e($rental->first_name); ?> <?php echo e($rental->last_name); ?></span>
            </h1>
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
                        <h3 class="card-title text-right status"><?php echo e($rental->status); ?> </h3>
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
                                <div class="row">
                                    <!-- Item -->
                                    <div class="col-6 col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p class="item-title">Booking ID:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item"><?php echo e($rental->booking_id); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">Vehicle:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item"><?php echo e($rental->activity_item); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">Rental Date:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item"><?php echo e(\Carbon\Carbon::parse($rental->activity_date)->format('M d, Y')); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="col-6 col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p class="item-title">Ticket List:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item"><?php echo e($rental->ticket_list); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="col-6 col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p class="item-title">Purchase Type:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item"><?php echo e($rental->purchase_type); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="col-6 col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p class="item-title">Payment Status:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item"><?php echo e($rental->payment_status); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <div class="col-6 col-sm-12">
                                        <!-- Item -->
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p class="item-title">Total Charge:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item"><?php echo e($rental->total_charge); ?></p>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                    </div>
                                </div>

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
                                <div class="row">
                                    <!-- Item -->
                                    <div class="col-6 col-sm-12">
                                        <div class="row">
                                            <div class="hidden-sm col-md-1"></div>
                                            <div class="col-sm-4 col-md-3">
                                                <p class="item-title">First Name:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item"><?php echo e($rental->first_name); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                   <div class="col-6 col-sm-12">
                                       <div class="row">
                                           <div class="hidden-sm col-sm-1"></div>
                                           <div class="col-sm-4 col-md-3">
                                               <p class="item-title">Last Name:</p>
                                           </div>
                                           <div class="col-sm-8">
                                               <p class="item"><?php echo e($rental->last_name); ?></p>
                                           </div>
                                       </div>
                                   </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="col-6 col-sm-12">
                                        <div class="row">
                                            <div class="hidden-sm col-sm-1"></div>
                                            <div class="col-sm-4 col-md-3">
                                                <p class="item-title">Email:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item"><?php echo e($rental->email); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="col-6 col-sm-12">
                                        <div class="row">
                                            <div class="hidden-sm col-sm-1"></div>
                                            <div class="col-sm-4 col-md-3">
                                                <p class="item-title">Phone:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="col-6 col-sm-12">
                                        <div class="row">
                                            <div class="hidden-sm col-sm-1"></div>
                                            <div class="col-sm-4 col-md-3">
                                                <p class="item-title">Zip Code:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item"><?php echo e($rental->zip_code); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                </div>

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
                <h3 class="card-title">Customer Information</h3>
                <p class="card-title-sub">This is the info for the person doing the deposit...</p>
            </div>

            <div class="card-body">
                <?php $__currentLoopData = $rental->customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($rental_customer->customer_id == $rental->customer_id): ?>

                        <div class="row">
                            <!-- Renter Info -->
                            <div class="col-sm-4">
                                <div class="area-box">
                                   <div class="row">

                                       <!-- Item -->
                                       <div class="col-6 col-sm-12">
                                           <div class="row">
                                               <div class="col-sm-4">
                                                   <p class="item-title">First Name:</p>
                                               </div>
                                               <div class="col-sm-8">
                                                   <p class="item"><?php echo e($rental_customer->first_name); ?></p>
                                               </div>
                                           </div>
                                       </div>
                                       <!-- /Item -->
                                       <!-- Item -->
                                       <div class="col-6 col-sm-12">
                                           <div class="row">
                                               <div class="col-sm-4">
                                                   <p class="item-title">Last Name:</p>
                                               </div>
                                               <div class="col-sm-8">
                                                   <p class="item"><?php echo e($rental_customer->last_name); ?></p>
                                               </div>
                                           </div>
                                       </div>
                                       <!-- /Item -->
                                       <!-- Item -->
                                       <div class="col-6 col-sm-12">
                                           <div class="row">
                                               <div class="col-sm-4">
                                                   <p class="item-title">Email:</p>
                                               </div>
                                               <div class="col-sm-8">
                                                   <p class="item"><?php echo e($rental_customer->email); ?></p>
                                               </div>
                                           </div>
                                       </div>
                                       <!-- /Item -->
                                       <!-- Item -->
                                       <div class="col-6 col-sm-12">
                                           <div class="row">
                                               <div class="col-sm-4">
                                                   <p class="item-title">Phone:</p>
                                               </div>
                                               <div class="col-sm-8">
                                                   <p class="item"><?php echo e($rental_customer->phone); ?></p>
                                               </div>
                                           </div>
                                       </div>
                                       <!-- /Item -->
                                       <!-- Item -->
                                       <div class="col-6 col-sm-12">
                                           <div class="row">
                                               <div class="col-sm-4">
                                                   <p class="item-title">Birth Date:</p>
                                               </div>
                                               <div class="col-sm-8">
                                                   <p class="item"><?php echo e($rental_customer->birth_date); ?></p>
                                               </div>
                                           </div>
                                       </div>
                                       <!-- /Item -->
                                       <!-- Item -->
                                       <div class="col-6 col-sm-12">
                                           <div class="row">
                                               <div class="col-sm-4">
                                                   <p class="item-title">How Heard:</p>
                                               </div>
                                               <div class="col-sm-8">
                                                   <p class="item"><?php echo e($rental_customer->how_heard); ?></p>
                                               </div>
                                           </div>
                                       </div>
                                       <!-- /Item -->

                                   </div>

                                </div>
                            </div>
                            <!-- /Renter Info -->

                            <!-- Rental Info -->
                            <div class="col-sm-4">
                                <div class="area-box">
                                    <div class="row">

                                        <!-- Item TODO - Dynamic customer address-->
                                        <div class="col-6 col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <p class="item-title">Address</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <p class="item"><?php echo e($rental_customer->address_1); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                        <div class="col-6 col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <p class="item-title">City:</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <p class="item"><?php echo e($rental_customer->city); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                        <div class="col-6 col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <p class="item-title">State:</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <p class="item"><?php echo e($rental_customer->state); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                        <div class="col-6 col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <p class="item-title">Zip Code:</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <p class="item"><?php echo e($rental_customer->zip_code); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                       <div class="col-6 col-sm-12">
                                           <div class="row">
                                               <div class="col-sm-4">
                                                   <p class="item-title">License State:</p>
                                               </div>
                                               <div class="col-sm-8">
                                                   <p class="item"><?php echo e($rental_customer->driver_license_state); ?></p>
                                               </div>
                                           </div>
                                       </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                        <div class="col-6 col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <p class="item-title">License Number:</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <p class="item"><?php echo e($rental_customer->driver_license_number); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Item -->

                                    </div>

                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="mb-4">
                                    <?php if($rental_customer->license_front == 'null'): ?>
                                        &nbsp;
                                    <?php else: ?>
                                        <img class="img-responsive" src="<?php echo e(asset('storage/' . $rental_customer->license_front)); ?>" height="150px" width="auto"  alt="<?php echo e($rental_customer->first_name); ?> <?php echo e($rental_customer->last_name); ?>"/>
                                    <?php endif; ?>
                                </div>
                            </div>





                            <div class="">
                                <div class="col-sm-12">
                                    <div class="modal-footer pb-0">
                                        <a class="btn btn-secondary"
                                           <?php if(!$rental->customers->contains($rental_customer)): ?>
                                           hidden
                                           <?php endif; ?>
                                           href="#"
                                           class="customer-update-modal"
                                           data-toggle="modal"
                                           data-target="#customer_update<?php echo e($rental_customer->id); ?>">Update Customer</a>
                                        <?php $__currentLoopData = $rental->customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($rental_customer->customer_id == $rental->customer_id): ?>
                                                <form method="post" action="<?php echo e(route('office.customer.detach', $rental)); ?>">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('PUT'); ?>

                                                    <input type="hidden" name="customer" value="<?php echo e($rental_customer->id); ?>">
                                                    <button class="btn btn-primary-red align-right"
                                                             <?php if(!$rental->customers->contains($rental_customer)): ?>
                                                             hidden
                                                             <?php endif; ?>
                                                             type="submit">Change Customer</button>
                                                </form>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                            <!-- /Rental Info -->
                        </div>

                        <!-- Update Customer Modal -->
                        <div class="modal fade" id="customer_update<?php echo e($rental_customer->id); ?>" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3>Update: <span><?php echo e($rental_customer->first_name); ?> <?php echo e($rental_customer->last_name); ?></span></h3>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="<?php echo e(route('office.updateCustomer', $rental_customer->id)); ?>" enctype="multipart/form-data" class="addCustomer-form">
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
unset($__errorArgs, $__bag); ?>" name="first_name" value="<?php echo e($rental_customer->first_name); ?>">
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
unset($__errorArgs, $__bag); ?>" name="last_name" value="<?php echo e($rental_customer->last_name); ?>">
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
unset($__errorArgs, $__bag); ?>" name="phone" value="<?php echo e($rental_customer->phone); ?>">
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
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e($rental_customer->email); ?>">
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
                                                        <input type="text" class="form-control " name="address_1" value="<?php echo e($rental_customer->address_1); ?>">
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
                                                                <input type="text" class="form-control" name="city" value="<?php echo e($rental_customer->city); ?>">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <label for="state">State</label>
                                                                <input type="text" class="form-control" name="state" value="<?php echo e($rental_customer->state); ?>">
                                                                <!-- TODO - Add Select -  If rental customer state = state value - then create default selected item -->

                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label for="zip_code">Zip Code</label>
                                                                <input type="text" class="form-control" name="zip_code" value="<?php echo e($rental_customer->zip_code); ?>">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label for="driver_license_state">DL State</label>
                                                                <input type="text" class="form-control" name="driver_license_state" value="<?php echo e($rental_customer->driver_license_state); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <label for="driver_license_number">DL Number</label>
                                                                <input type="text" class="form-control" name="driver_license_number" value="<?php echo e($rental_customer->driver_license_number); ?>">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label for="birth_date">Birthdate</label>
                                                                <input type="date" class="form-control" name="birth_date" value="<?php echo e($rental_customer->birth_date); ?>">
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
                                                            <input type="file" class="form-control" name="license_front" id="license_front" accept="image/*" capture="camera">
                                                        </div>
                                                        <div class="mb-4">
                                                            <img class="img-responsive" src="<?php echo e(asset('storage/' . $rental_customer->license_front)); ?>" height="150px" width="auto">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Right Side -->
                                            </div>



                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                                                <form action="#" method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <button  class="btn btn-primary" type="submit">UPDATE CUSTOMER</button>
                                                </form>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Update Customer Modal -->



                    <?php else: ?>
                        NOT WORKING!
                    <?php endif; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

            <div class="row
                <?php $__currentLoopData = $rental->customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($rental_customer->customer_id == $rental->customer_id): ?>
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
                        <div class="tab-pane fade show active" id="search-customer" role="tabpanel" aria-labelledby="search-customer-tab">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="rentalCustomersTable" width="100% !important;" cellspacing="0">
                                                <thead>
                                                <tr>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <!-- Remved hidden-xs-table -->
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
                                                        <!-- Remved hidden-xs-table -->
                                                        <td class="no-border-right hidden-xs-table"><?php echo e($customer->email); ?></td>
                                                        <td class="no-border-right hidden-xs-table"><?php echo e($customer->phone); ?></td>
                                                        <td>
                                                            <form method="post" action="<?php echo e(route('office.customer.attach', $rental)); ?>">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field('PUT'); ?>

                                                                <input type="hidden" name="customer" value="<?php echo e($customer->id); ?>">
                                                                <button
                                                                    class="btn btn-secondary"
                                                                    <?php if($rental->customers->contains($customer)): ?>
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
                                <form method="post" action="<?php echo e(route('office.customer.store', $rental)); ?>" enctype="multipart/form-data" class="addCustomer-form">
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
                                                <div class="col-sm-6">
                                                    <div class="form-group mb-4">
                                                        <label for="license_front">Driver License Front (required)</label>
                                                        <input type="file" class="form-control" name="license_front">
                                                    </div>
                                                </div>
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


        <!-- CHECK IN BUTTONS -->
        <div class="card mt-4 mb-5 shadow">
            <div class="modal-footer">
                <form action="<?php echo e(route('office.rentalStatusPreCheck', $rental->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    
                    <input type="hidden" value="Pre-Check" name="status">
                    <input type="hidden" value="<?php echo e($dateNow); ?>" name="precheck_time">
                    <?php if(Auth::check()): ?>
                        <input type="hidden" value="<?php echo e(auth()->user()->id); ?>" name="precheck_by">
                    <?php endif; ?>
                    <button class="btn btn-primary" type="submit">PRE-CHECK</button>
                </form>
            </div>
        </div>
        <!-- /CHECK IN BUTTONS -->



    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('sidebar'); ?>
    <!-- Pre-Check Widget -->
        <div class="card my-4 shadow">
            <h5 class="card-header text-center">Pre-Checked In</h5>
            <?php if($rentalPreCheckShowCount > 0): ?>
                <?php $__currentLoopData = $rentalPreCheckShow; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <h3 class="text-red"><?php echo e($rental->last_name); ?></h3>
                            </div>
                            <div class="col-4">
                                <h6 class="mt-2">
                                    <!-- Rental Duration UPDATED -->
                                    <span class="gray">
                                <?php if(strpos($rental->ticket_list, '1 Hour') !== false): ?>
                                            1 Hr
                                        <?php elseif(strpos($rental->ticket_list, '1 hour') !== false): ?>
                                            1 Hr
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '2 hour') !== false): ?>
                                            2 Hr
                                        <?php elseif(strpos($rental->ticket_list, '2 Hour') !== false): ?>
                                            2 Hr
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '3 Hour') !== false): ?>
                                            3 Hr
                                        <?php elseif(strpos($rental->ticket_list, '3 hour') !== false): ?>
                                            3 Hr
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '4 Hour') !== false): ?>
                                            HD
                                        <?php elseif(strpos($rental->ticket_list, '4 hour') !== false): ?>
                                            HD
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '8 Hour') !== false): ?>
                                            FD
                                        <?php elseif(strpos($rental->ticket_list, '8 hour') !== false): ?>
                                            FD
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '9 Hour') !== false): ?>
                                            FD
                                        <?php elseif(strpos($rental->ticket_list, '9 hour') !== false): ?>
                                            FD
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, 'Full Day') !== false): ?>
                                            FD
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, 'Half Day') !== false): ?>
                                            HD
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '1 Day') !== false): ?>
                                            1 D
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '2 Day') !== false): ?>
                                            2 D
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '3 Day') !== false): ?>
                                            3 D
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '4 Day') !== false): ?>
                                            4 D
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '5 Day') !== false): ?>
                                            5 D
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '6 Day') !== false): ?>
                                            6 D
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '7 Day') !== false): ?>
                                            7 D
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '8 Day') !== false): ?>
                                            8 D
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '9 Day') !== false): ?>
                                            9 D
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '10 Day') !== false): ?>
                                            10 D
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '11 Day') !== false): ?>
                                            11 D
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '12 Day') !== false): ?>
                                            12 D
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '13 Day') !== false): ?>
                                            13 D
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '14 Day') !== false): ?>
                                            14 D
                                        <?php endif; ?>
                            </span>

                                    <?php if($rental->activity_item == 'Scarab 215'): ?>
                                        Scarab
                                    <?php elseif($rental->activity_item == '23ft. Pontoon Boat'): ?>
                                        Pontoon
                                    <?php elseif($rental->activity_item == '23ft. Pontoon Boat'): ?>
                                        Pontoon
                                    <?php elseif($rental->activity_item == 'Renegade BC 600ETec'): ?>
                                        Renegade
                                    <?php elseif($rental->activity_item == 'Summit 154 SP'): ?>
                                        Summit
                                    <?php elseif($rental->activity_item == '14ft. Aluminum Boat'): ?>
                                        Aluminum
                                    <?php elseif($rental->activity_item == 'Kayak Single'): ?>
                                        Single Kayak
                                    <?php elseif($rental->activity_item == 'Double Kayak'): ?>
                                        Double Kayak
                                    <?php elseif($rental->activity_item == 'Stand Up Paddleboard'): ?>
                                        SUP
                                    <?php elseif($rental->activity_item == 'Segway i2'): ?>
                                        Segway
                                    <?php elseif($rental->activity_item == 'Spyder RT-S SE6'): ?>
                                        Spyder
                                    <?php elseif($rental->activity_item == 'SeaDoo'): ?>
                                        SeaDoo
                                    <?php else: ?>
                                        <br />

                                    <?php endif; ?></h6>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php elseif($rentalPreCheckShowCount <= 0): ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="text-center text-red">Nothing Pre-Checked</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    <?php $__env->stopSection(); ?>




    <?php $__env->startSection('scripts'); ?>
    <!-- Page level plugins -->
        <script src="<?php echo e(asset('vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>

        <!-- Page level custom scripts -->
        <script src="<?php echo e(asset('js/demo/datatables-scripts.js')); ?>"></script>
    <?php $__env->stopSection(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/office/precheck/show.blade.php ENDPATH**/ ?>