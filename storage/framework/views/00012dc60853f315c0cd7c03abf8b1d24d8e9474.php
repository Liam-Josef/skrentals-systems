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
            <h1> <?php if($rental->invoice_number == ''): ?>
                    <?php echo e($rental->booking_id); ?>

                <?php else: ?>
                    #<?php echo e($rental->invoice_number); ?>

                <?php endif; ?> - <?php echo e($rental->first_name); ?> <?php echo e($rental->last_name); ?></h1>
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('browser_title'); ?>
            <title>
                <?php if($rental->invoice_number == ''): ?>
                    <?php echo e($rental->booking_id); ?>

                <?php else: ?>
                    #<?php echo e($rental->invoice_number); ?>

                <?php endif; ?> - <?php echo e($rental->first_name); ?> <?php echo e($rental->last_name); ?> | <?php echo e($application->name); ?>

            </title>
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
                <div class="col-sm-8">
                    <h1>
                <span>
                <?php if(strpos($rental->ticket_list, '1 hour') !== false): ?>
                        1 Hr
                    <?php endif; ?>
                    <?php if(strpos($rental->ticket_list, '2 hour') !== false): ?>
                        2 Hr
                    <?php endif; ?>
                    <?php if(strpos($rental->ticket_list, '3 hour') !== false): ?>
                        3 Hr
                    <?php endif; ?>
                    <?php if(strpos($rental->ticket_list, '4 hour') !== false): ?>
                        HD
                    <?php endif; ?>
                    <?php if(strpos($rental->ticket_list, '8 hour') !== false): ?>
                        FD
                    <?php endif; ?>
                    <?php if(strpos($rental->ticket_list, '9 hour') !== false): ?>
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

                        <?php endif; ?>
                        <span> | <?php echo e($rental->first_name); ?> <?php echo e($rental->last_name); ?></span></h1>
                </div>
                <div class="col-sm-4">
                    <h1 class="text-right mt-1">

                        <?php if($rental->invoice_number == ''): ?>
                            &nbsp;
                        <?php else: ?>
                            #<?php echo e($rental->invoice_number); ?>

                        <?php endif; ?>
                    </h1>
                </div>
            </div>
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
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="item-title">Booking ID:</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="item"><?php echo e($rental->booking_id); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="item-title">Vehicle:</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="item"><?php echo e($rental->activity_item); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="item-title">Rental Date:</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="item"><?php echo e(\Carbon\Carbon::parse($rental->activity_date)->format('M d, Y')); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="item-title">Ticket List:</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="item"><?php echo e($rental->ticket_list); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="item-title">Purchase Type:</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="item"><?php echo e($rental->purchase_type); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="item-title">Payment Status:</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="item"><?php echo e($rental->payment_status); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="item-title">Total Charge:</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="item"><?php echo e($rental->total_charge); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->

                                    <!-- Item -->
                                    <?php if($rental->toy_fee == ''): ?>

                                    <?php else: ?>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="item-title">Toy Fee:</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="item">$<?php echo e($rental->toy_fee); ?> (<?php echo e($rental->toy_fee_type); ?>)</p>
                                            </div>
                                        </div>

                                    <?php endif; ?>
                                <!-- /Item -->

                                    <!-- Item -->
                                    <?php if($rental->trailer_fee == ''): ?>

                                    <?php else: ?>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="item-title">Trailer Fee:</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="item">$<?php echo e($rental->trailer_fee); ?> (<?php echo e($rental->trailer_fee_type); ?>)</p>
                                            </div>
                                        </div>

                                    <?php endif; ?>
                                <!-- /Item -->

                                    <!-- Item -->
                                    <?php if($rental->late_fee == ''): ?>

                                    <?php else: ?>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="item-title">Late Fee:</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="item">$<?php echo e($rental->late_fee); ?> (<?php echo e($rental->late_fee_type); ?>)</p>
                                            </div>
                                        </div>

                                    <?php endif; ?>
                                <!-- /Item -->

                                    <!-- Item -->
                                    <?php if($rental->no_wake_fee == ''): ?>

                                    <?php else: ?>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="item-title">No Wake Fee:</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="item">$<?php echo e($rental->no_wake_fee); ?> (<?php echo e($rental->no_wake_fee_type); ?>)</p>
                                            </div>
                                        </div>

                                    <?php endif; ?>
                                <!-- /Item -->

                                    <!-- Item -->
                                    <?php if($rental->cleaning_fee == ''): ?>

                                    <?php else: ?>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="item-title">Cleaning Fee:</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="item">$<?php echo e($rental->cleaning_fee); ?> (<?php echo e($rental->cleaning_fee_type); ?>)</p>
                                            </div>
                                        </div>

                                    <?php endif; ?>
                                <!-- /Item -->

                                    <!-- Item -->
                                    <?php if($rental->sar_fee == ''): ?>

                                    <?php else: ?>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="item-title">Search & Rescue Fee:</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="item">$<?php echo e($rental->sar_fee); ?> (<?php echo e($rental->sar_fee_type); ?>)</p>
                                            </div>
                                        </div>

                                <?php endif; ?>
                                <!-- /Item -->

                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="item-title">Notes:</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="item"><?php echo e($rental->customer_notes); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                </div>
                            </div>
                            <!-- /Renter Info -->
                            <!-- Rental Info -->
                            <div class="col-sm-6">
                                <div class="area-box">
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-3">
                                            <p class="item-title">First Name:</p>
                                        </div>
                                        <div class="col-sm-7">
                                            <p class="item"><?php echo e($rental->first_name); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-3">
                                            <p class="item-title">Last Name:</p>
                                        </div>
                                        <div class="col-sm-7">
                                            <p class="item"><?php echo e($rental->last_name); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-3">
                                            <p class="item-title">Email:</p>
                                        </div>
                                        <div class="col-sm-7">
                                            <p class="item"><?php echo e($rental->email); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-3">
                                            <p class="item-title">Phone:</p>
                                        </div>
                                        <div class="col-sm-7">
                                            <p class="item"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-3">
                                            <p class="item-title">Zip Code:</p>
                                        </div>
                                        <div class="col-sm-7">
                                            <p class="item"><?php echo e($rental->zip_code); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                <?php $__currentLoopData = $rental->vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!-- Item -->
                                        <div class="row">
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-3">
                                                <p class="item-title">Vehicle:</p>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="item">
                                                    <?php echo e($rental_vehicle->vehicle_type); ?>

                                                    <?php echo e($rental_vehicle->internal_vehicle_id); ?>

                                                </p>
                                            </div>
                                        </div>
                                        <!-- /Item -->

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <!-- PreCheck by -->
                                <?php if($rental->precheck_by !== ''): ?>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($rental->precheck_by == $user->id): ?>
                                            <!-- Item -->
                                                <div class="col-6 col-sm-12">
                                                    <div class="row">
                                                        <div class="col-sm-2"></div>
                                                        <div class="col-sm-3">
                                                            <p class="item-title">Pre-Checked By:</p>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <p class="item"><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></p>
                                                        </div>
                                                    </div>
                                                    <!-- /Item -->
                                                    <!-- Item -->
                                                    <div class="row">
                                                        <div class="col-md-2"></div>
                                                        <div class="col-sm-3">
                                                            <p class="item-title">Pre-Checked Time:</p>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <p class="item">
                                                                <?php echo e(\Carbon\Carbon::parse($rental->precheck_time)->format('F j, Y - h:i:s A')); ?>

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                <!-- /PreCheck by -->

                                <!-- Checked in by -->
                                    <?php if($rental->check_in_by == ''): ?>
                                        &nbsp;
                                    <?php else: ?>
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($rental->check_in_by == $user->id): ?>
                                            <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-2"></div>
                                                    <div class="col-sm-3">
                                                        <p class="item-title">Checked In By:</p>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="item"><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-2"></div>
                                                    <div class="col-sm-3">
                                                        <p class="item-title">Check In Time:</p>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="item">
                                                            <?php echo e(\Carbon\Carbon::parse($rental->check_in_time)->format('F j, Y - h:i:s A')); ?>

                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                <!-- /Checked in by -->

                                    <!-- Launched by -->
                                    <?php if($rental->launched_by == ''): ?>
                                        &nbsp;
                                    <?php else: ?>
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($rental->launched_by == $user->id): ?>
                                            <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-2"></div>
                                                    <div class="col-sm-3">
                                                        <p class="item-title">Launched By:</p>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="item"><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-2"></div>
                                                    <div class="col-sm-3">
                                                        <p class="item-title">Launch Time:</p>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="item">
                                                            <?php echo e(\Carbon\Carbon::parse($rental->launched_time)->format('F j, Y - h:i:s A')); ?>

                                                            
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                <!-- /Launched by -->

                                    <!-- Cleared by -->
                                    <?php if($rental->cleared_by == ''): ?>
                                        &nbsp;
                                <?php else: ?>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($rental->cleared_by == $user->id): ?>
                                            <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-2"></div>
                                                    <div class="col-sm-3">
                                                        <p class="item-title">Cleared By:</p>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="item"><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-2"></div>
                                                    <div class="col-sm-3">
                                                        <p class="item-title">Clear Time:</p>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="item">
                                                            <?php echo e(\Carbon\Carbon::parse($rental->cleared_time)->format('F j, Y - h:i:s A')); ?>

                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                <!-- /Cleared by -->

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
                </div>

                <div class="card-body">
                    <?php $__currentLoopData = $rental->customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($rental_customer->customer_id == $rental->customer_id): ?>

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
                                                        <p class="item"><?php echo e(\Carbon\Carbon::parse($rental_customer->birth_date)->format('M d, Y')); ?></p>
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
                                                        <p class="item"><?php echo e($rental_customer->address_1); ?></p>
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
                                                        <p class="item"><?php echo e($rental_customer->city); ?></p>
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
                                                        <p class="item"><?php echo e($rental_customer->state); ?></p>
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
                                                        <p class="item"><?php echo e($rental_customer->zip_code); ?></p>
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
                                                        <p class="item"><?php echo e($rental_customer->driver_license_state); ?></p>
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
                                                        <p class="item"><?php echo e($rental_customer->driver_license_number); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Item -->

                                        </div>

                                    </div>
                                </div>

                                <div class="col-sm-6 offset-sm-3 col-md-4 offset-md-0">
                                    <div class="mb-4 mt-4">
                                        <?php if($rental_customer->license_front == 'null'): ?>
                                            &nbsp;
                                        <?php else: ?>
                                            <img class="img-responsive" src="<?php echo e(asset('storage/' . $rental_customer->license_front)); ?>" height="150px" width="auto"  alt="<?php echo e($rental_customer->first_name); ?> <?php echo e($rental_customer->last_name); ?> License not uploaded yet... "/>
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
                                           data-target="#customer_update<?php echo e($rental_customer->id); ?>">Update Customer</a>

                                        <a href="<?php echo e(route('customers.profile.view', $rental_customer->id)); ?>" class="btn btn-primary">
                                            View Customer
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Update Customer Modal -->
                            <div class="modal fade" id="customer_update<?php echo e($rental_customer->id); ?>" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
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
                                                                    <label for="driver_license_state">Driver License State</label>
                                                                    <input type="text" class="form-control" name="driver_license_state" value="<?php echo e($rental_customer->driver_license_state); ?>">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="form-group">
                                                                    <label for="driver_license_number">Driver License Number</label>
                                                                    <input type="text" class="form-control" name="driver_license_number" value="<?php echo e($rental_customer->driver_license_number); ?>">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="birth_date">Birthdate</label>
                                                                    <input type="text" class="form-control" name="birth_date" value="<?php echo e($rental_customer->birth_date); ?>">
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
                            <h3>Customer not added yet...</h3>
                        <?php endif; ?>


                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

            </div>
            <!-- /CUSTOMER INFORMATION -->


            <!-- COC INFORMATION -->
            <?php if($rental->status == 'COC'): ?>
                <div class="card mb-4 shadow">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3 class="card-title">Change of Condition</h3>
                            </div>
                            <div class="col-sm-6">
                                <h3 class="card-title vehicle text-right">
                                    <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($rental->coc_vehicle == $vehicle->id): ?>
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
                                                <br>

                                            <?php endif; ?>
                                            <span><?php echo e($vehicle->internal_vehicle_id); ?></span>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <span class="text-gray-600">&nbsp; | &nbsp; <?php echo e($rental->coc_status); ?></span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="area-box">
                            <div class="row">

                                <div class="col-sm-4">
                                    <img class="img-responsive" src="<?php echo e(asset('storage/' . $rental->image_1)); ?>" height="150px" width="auto">
                                </div>
                                <div class="col-sm-5">
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">Incident:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item"><?php echo e($rental->incident); ?></p>
                                        </div>
                                    </div>
                                    <!-- /Item -->

                                <?php $__currentLoopData = $maintenances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($maintenance->rental_invoice == $rental->invoice_number): ?>
                                        <!-- /Item -->
                                            <?php if($maintenance->date_submitted): ?>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <p class="item-title">Date Submitted:</p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p class="item"><?php echo e(\Carbon\Carbon::parse($maintenance->date_submitted)->format('M d, Y')); ?></p>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <p class="item-title">Submitted By:</p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p class="item">
                                                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($maintenance->submitted_by == $user->id): ?>
                                                                    <span><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></span>
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                            <?php if($maintenance->invoice): ?>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <p class="item-title">Date Invoice Submitted:</p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p class="item"><?php echo e(\Carbon\Carbon::parse($maintenance->date_invoiced)->format('M d, Y')); ?></p>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <p class="item-title">Invoice Submitted By:</p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p class="item">
                                                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($maintenance->invoiced_by == $user->id): ?>
                                                                    <span><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></span>
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            <?php else: ?>
                                            <?php endif; ?>
                                            <?php if($maintenance->status == 'Completed'): ?>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <p class="item-title">Date Completed:</p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p class="item"><?php echo e(\Carbon\Carbon::parse($maintenance->date_completed)->format('M d, Y')); ?></p>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <p class="item-title">Invoice Accepted By:</p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p class="item">
                                                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($maintenance->approved_by == $user->id): ?>
                                                                    <span><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></span>
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            <?php endif; ?>



                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <div class="col-sm-3">
                                    <!-- /Item -->
                                <?php $__currentLoopData = $maintenances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($maintenance->rental_invoice == $rental->invoice_number && $maintenance->service_status !== ''): ?>
                                        <!-- Item -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="item-title">Service Status:</p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="item text-right text-red"><?php echo e($maintenance->status); ?></p>
                                                </div>
                                            </div>
                                            <!-- /Item -->
                                            <!-- Item -->
                                            <?php if($maintenance->invoice): ?>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <p class="item-title">R/O: </p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="item"><?php echo e($maintenance->service_invoice); ?></p>
                                                    </div>
                                                </div>
                                            <?php else: ?>
                                            <?php endif; ?>
                                        <!-- /Item -->
                                            <!-- Item -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="item-title">Service Notes:</p>
                                                </div>
                                                <div class="col-12">
                                                    <p class="item"><?php echo e($maintenance->service_notes); ?></p>
                                                </div>
                                            </div>
                                            <!-- /Item -->
                                            <?php if($maintenance->date_invoiced): ?>
                                                <a href="#" class="btn btn-primary auto-height align-right mt-3" data-toggle="modal" data-target="#invoiceModal">View Invoice</a>
                                            <?php endif; ?>
                                        <?php else: ?>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="modal-footer pb-0">
                                        <a class="btn btn-primary-red"
                                           href="#"
                                           class="customer-update-modal"
                                           data-toggle="modal"
                                           data-target="#cocUpdate">Update COC</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <!-- /COC INFORMATION -->

            <!-- Update COC Modal -->
            <div class="modal fade" id="cocUpdate" tabindex="-1" role="dialog" aria-labelledby="cocUpdateModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3><span>Update: </span> COC</h3>
                        </div>
                        <form action="<?php echo e(route('rental.rentalCocUpdate', $rental)); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>

                            <div class="modal-body">

                                <div class="form-group">
                                    <label for="incident">Update Incident Description</label>
                                    <textarea name="incident" id="incident" cols="30" rows="5"><?php echo e($rental->incident); ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="image_1">Update Image</label>
                                    <input type="file" class="form-control" name="image_1">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                                <button class="btn btn-primary" type="submit">update COC</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Invoice Modal -->
            <div class="modal fade" id="invoiceModal" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg mt-0" role="document">
                    <?php $__currentLoopData = $maintenances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($maintenance->rental_invoice == $rental->invoice_number): ?>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3><span>Change of Condition: </span> Service Invoice #<?php echo e($maintenance->service_invoice); ?></h3>
                                </div>
                                <div class="modal-body">
                                             <iframe src="<?php echo e(asset('storage/' . $maintenance->invoice)); ?>" style="width: 100%;height: 800px;border: none;"></iframe>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">close</button>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <!-- /Invoice Modal -->



        <?php $__env->stopSection(); ?>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/admin/rentals/show.blade.php ENDPATH**/ ?>