<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin-master','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin-master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <?php $__env->startSection('styles'); ?>

    <?php $__env->stopSection(); ?>



        <?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php $__env->startSection('page_title'); ?>
                <h1>Customer: <?php echo e($customer->first_name); ?> <?php echo e($customer->last_name); ?> Profile</h1>
            <?php $__env->stopSection(); ?>

            <?php $__env->startSection('browser_title'); ?>
                <title>Customer: <?php echo e($customer->first_name); ?> <?php echo e($customer->last_name); ?> Profile | <?php echo e($application->name); ?></title>
            <?php $__env->stopSection(); ?>

            <?php $__env->startSection('logo-square'); ?>
                <img src="<?php echo e(asset('storage/'. $application->logo_square_1)); ?>" alt="<?php echo e($application->name); ?> Logo" height="30px" width="auto">
            <?php $__env->stopSection(); ?>

            <?php $__env->startSection('logo-horizontal'); ?>
                <img src="<?php echo e(asset('storage/'. $application->logo_horizontal_1)); ?>" alt="<?php echo e($application->name); ?> Logo" height="30px" width="auto">
            <?php $__env->stopSection(); ?>

        <?php $__env->startSection('logo_horizontal_1'); ?>
            <?php echo e(asset('storage/'. $application->logo_horizontal_1)); ?>

        <?php $__env->stopSection(); ?>
        <?php $__env->startSection('logo_horizontal_2'); ?>
            <?php echo e(asset('storage/'. $application->logo_horizontal_2)); ?>

        <?php $__env->stopSection(); ?>
        <?php $__env->startSection('logo_square_1'); ?>
            <?php echo e(asset('storage/'. $application->logo_square_1)); ?>

        <?php $__env->stopSection(); ?>
        <?php $__env->startSection('logo_square_2'); ?>
            <?php echo e(asset('storage/'. $application->logo_square_2)); ?>

        <?php $__env->stopSection(); ?>
        <?php $__env->startSection('favicon'); ?>
            <?php echo e(asset('storage/'. $application->favicon)); ?>

        <?php $__env->stopSection(); ?>

            <?php $__env->startSection('analytic_links'); ?>
                <li class="nav-item">
                    <a class="nav-link <?php echo e(Request::is('admin/index*') ? 'collapsed' : ''); ?>" href="#" data-toggle="collapse" data-target="#collapseAnalytics" aria-expanded="" aria-controls="collapseAnalytics">
                        <i class="fas fa-fw fa-solid fa-code-branch"></i>
                        <span>Analytics</span>
                    </a>
                    <div id="collapseAnalytics" class="collapse" aria-labelledby="headingAnalytics" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">

                            <h6 class="collapse-header">Google Analytics: </h6>
                            <?php if($application->analytic_link_1 != ''): ?>
                                <a class="collapse-item" href="<?php echo e($application->analytic_link_1); ?>" target="_blank">Analytics <span class="text-primary">Main</span></a>
                            <?php endif; ?>
                            <?php if($application->analytic_link_2 != ''): ?>
                                <a class="collapse-item" href="<?php echo e($application->analytic_link_2); ?>" target="_blank"><span class="text-primary">Reports</span> Snapshot</a>
                            <?php endif; ?>
                            <?php if($application->analytic_link_3 != ''): ?>
                                <a class="collapse-item" href="<?php echo e($application->analytic_link_3); ?>" target="_blank"><span class="text-primary">Acquisition</span> Overview</a>
                            <?php endif; ?>
                            <?php if($application->analytic_link_4 != ''): ?>
                                <a class="collapse-item" href="<?php echo e($application->analytic_link_4); ?>" target="_blank"><span class="text-primary">Engagement</span> Overview</a>
                            <?php endif; ?>
                            <?php if($application->analytic_link_5 != ''): ?>
                                <a class="collapse-item" href="<?php echo e($application->analytic_link_5); ?>" target="_blank"><span class="text-primary">Demographics</span> Overview</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </li>
            <?php $__env->stopSection(); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    <?php $__env->startSection('content'); ?>
        <div class="row">
            <div class="col-12">
                <h1>Customer: <span><?php echo e($customer->first_name); ?> <?php echo e($customer->last_name); ?></span></h1>
            </div>
        </div>

        <!-- CUSTOMER INFORMATION -->
        <div class="card mb-4 my-3 shadow">
            <div class="card-header">
                <h3 class="card-title">Customer Information</h3>
            </div>

            <div class="card-body">
                    <div class="row">
                    <!-- Renter Info -->
                    <div class="col-sm-6 col-md-4">
                        <div class="area-box">
                            <div class="row">

                                <!-- Item -->
                                <div class="col-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">First Name:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item"><?php echo e($customer->first_name); ?></p>
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
                                            <p class="item"><?php echo e($customer->last_name); ?></p>
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
                                            <p class="item"><?php echo e($customer->email); ?></p>
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
                                            <p class="item"><?php echo e($customer->phone); ?></p>
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
                                            <p class="item"><?php echo e(\Carbon\Carbon::parse($customer->birth_date)->format('M d, Y')); ?></p>
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
                                            <p class="item"><?php echo e($customer->how_heard); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Item -->

                            </div>

                        </div>
                    </div>
                    <!-- /Renter Info -->

                    <!-- Rental Info -->
                    <div class="col-sm-6 col-md-4">
                        <div class="area-box">
                            <div class="row">

                                <!-- Item -->
                                <div class="col-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <p class="item-title">Address</p>
                                        </div>
                                        <div class="col-sm-6 col-md-8">
                                            <p class="item"><?php echo e($customer->address_1); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="col-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <p class="item-title">City:</p>
                                        </div>
                                        <div class="col-sm-6 col-md-8">
                                            <p class="item"><?php echo e($customer->city); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="col-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <p class="item-title">State:</p>
                                        </div>
                                        <div class="col-sm-6 col-md-8">
                                            <p class="item"><?php echo e($customer->state); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="col-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <p class="item-title">Zip Code:</p>
                                        </div>
                                        <div class="col-sm-6 col-md-8">
                                            <p class="item"><?php echo e($customer->zip_code); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="col-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <p class="item-title">License State:</p>
                                        </div>
                                        <div class="col-sm-6 col-md-8">
                                            <p class="item"><?php echo e($customer->driver_license_state); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="col-6 col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <p class="item-title">License Number:</p>
                                        </div>
                                        <div class="col-sm-6 col-md-8">
                                            <p class="item"><?php echo e($customer->driver_license_number); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Item -->

                            </div>

                        </div>
                    </div>

                    <div class="col-sm-6 offset-sm-3 col-md-4 offset-md-0">
                        <div class="mb-4 mt-4">
                            <?php if($customer->license_front == 'null'): ?>
                                &nbsp;
                            <?php else: ?>
                                <img class="img-responsive" src="<?php echo e(asset('storage/' . $customer->license_front)); ?>" height="150px" width="auto"  alt="<?php echo e($customer->first_name); ?> <?php echo e($customer->last_name); ?> License not uploaded yet... "/>
                            <?php endif; ?>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-sm-12">
                            <div class="modal-footer pb-0">


                            </div>
                        </div>
                    </div>
                    <!-- /Rental Info -->
                </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="modal-footer pb-0">
                                    <a class="btn btn-secondary"
                                       href="#"
                                       class="customer-update-modal"
                                       data-toggle="modal"
                                       data-target="#customer_update<?php echo e($customer->id); ?>">Update Customer</a>


                                </div>
                            </div>
                        </div>

                        <!-- Update Customer Modal -->
                        <div class="modal fade" id="customer_update<?php echo e($customer->id); ?>" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="<?php echo e(route('office.updateCustomer', $customer->id)); ?>" enctype="multipart/form-data" class="addCustomer-form">
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
unset($__errorArgs, $__bag); ?>" name="first_name" value="<?php echo e($customer->first_name); ?>">
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
unset($__errorArgs, $__bag); ?>" name="last_name" value="<?php echo e($customer->last_name); ?>">
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
unset($__errorArgs, $__bag); ?>" name="phone" value="<?php echo e($customer->phone); ?>">
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
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e($customer->email); ?>">
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
                                                        <input type="text" class="form-control " name="address_1" value="<?php echo e($customer->address_1); ?>">
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
                                                                <input type="text" class="form-control" name="city" value="<?php echo e($customer->city); ?>">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <label for="state">State</label>
                                                                <input type="text" class="form-control" name="state" value="<?php echo e($customer->state); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label for="zip_code">Zip Code</label>
                                                                <input type="text" class="form-control" name="zip_code" value="<?php echo e($customer->zip_code); ?>">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label for="driver_license_state">Driver License State</label>
                                                                <input type="text" class="form-control" name="driver_license_state" value="<?php echo e($customer->driver_license_state); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <label for="driver_license_number">Driver License Number</label>
                                                                <input type="text" class="form-control" name="driver_license_number" value="<?php echo e($customer->driver_license_number); ?>">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label for="birth_date">Birthdate</label>
                                                                <input type="text" class="form-control" name="birth_date" value="<?php echo e($customer->birth_date); ?>">
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
                                                            <img class="img-responsive" src="<?php echo e(asset('storage/' . $customer->license_front)); ?>" height="150px" width="auto">
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


            </div>

        </div>
        <!-- /CUSTOMER INFORMATION -->

        <!-- CUSTOMER RENTALS -->
         <div class="card mb-4 shadow">
             <div class="card-header">
                 <h3 class="card-title">Rental History</h3>
             </div>

             <div class="card-body">
                 <div class="area-box border-bottom-1">
                     <div class="row">
                         <div class="col-sm-2">
                             <p class="item-title">Booking ID</p>
                         </div>
                         <div class="col-sm-2">
                             <p class="item-title">Activity Item</p>
                         </div>
                         <div class="col-sm-3">
                             <p class="item-title">Reservation Name</p>
                         </div>
                         <div class="col-sm-4">
                             <p class="item-title">Rental Status</p>
                         </div>
                         <div class="col-sm-1"></div>
                     </div>
                 </div>
                <?php $__currentLoopData = $rentals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <div class="area-box rental-history-item">
                             <div class="row">
                                 <div class="col-sm-2">
                                     <p class="item pt-2"><?php echo e($rental->booking_id); ?></p>
                                 </div>
                                 <div class="col-sm-2">
                                     <p class="item pt-2">
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
                                     </p>
                                 </div>
                                 <div class="col-sm-3">
                                     <p class="item pt-2">
                                         <?php echo e($rental->first_name); ?> <?php echo e($rental->last_name); ?>

                                     </p>
                                 </div>
                                 <div class="col-sm-4">
                                     <div class="row">
                                         <div class="col-sm-4">
                                             <p class="item pt-2"><?php echo e($rental->status); ?></p>
                                         </div>
                                         <div class="col-sm-8">
                                             <?php if($rental->coc_status == ''): ?>
                                                 &nbsp;
                                             <?php else: ?>
                                                 <div class="row">
                                                     <div class="col-sm-6">
                                                         <p class="item pt-2">COC Status:</p>
                                                     </div>
                                                     <div class="col-sm-6">
                                                         <p class="item pt-2"><?php echo e($rental->coc_status); ?></p>
                                                     </div>
                                                 </div>
                                             <?php endif; ?>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-sm-1">
                                     <a href="<?php echo e(route('rental.show', $rental)); ?>" class="btn btn-primary">View</a>
                                 </div>
                             </div>
                         </div>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             </div>
         </div>
        <!-- /CUSTOMER RENTALS -->

    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('scripts'); ?>

    <?php $__env->stopSection(); ?>



 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/admin/customers/profile.blade.php ENDPATH**/ ?>