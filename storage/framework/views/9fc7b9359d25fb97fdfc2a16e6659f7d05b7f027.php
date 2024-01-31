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
            <h1>COC Stats</h1>
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('browser_title'); ?>
            <title>COC Stats | <?php echo e($application->name); ?></title>
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
                <h1>COC Stats</h1>
            </div>
        </div>

       <!-- Stats -->
        <div class="row">


            <div class="col-12 col-sm-3">

                <!-- OLD -->













                <div class="card shadow mt-3">
                    <div class="card-body text-center">
                        <h5 class="text-dark">New</h5>
                        <?php if($serviceNewCount): ?>
                            <h3 class="text-dk-red"><?php echo e($serviceNewCount); ?></h3>
                        <?php else: ?>
                            <h3 class="text-dk-red">0</h3>
                        <?php endif; ?>
                    </div>
                </div>

                <?php $__currentLoopData = $serviceNew; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card shadow mt-3">
                        <div class="card-body">
                            <a href="<?php echo e(route('rental.show', $rental)); ?>" class="stat-link">
                                <div class="row">

                                    <div class="col-12">
                                        <img class="img-responsive" src="<?php echo e(asset('storage/' . $rental->image_1)); ?>" height="auto" width="100%" />
                                    </div>
                                    <div class="col-12">
                                        <h3 class="mt-3">
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
                                                <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($rental->coc_vehicle == $vehicle->id): ?>
                                                        <?php echo e($vehicle->internal_vehicle_id); ?>

                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </h3>
                                        <h4>#<?php echo e($rental->invoice_number); ?> <span>| <?php echo e($rental->last_name); ?></span></h4>
                                        <h5><?php echo e($rental->coc_status); ?></h5>
                                        <h4><span class="small"><?php echo e(\Carbon\Carbon::parse($rental->activity_date)->format('M d, Y')); ?></span></h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="col-12 col-sm-3">
                <div class="card shadow mt-3">
                    <div class="card-body text-center">
                        <h5 class="text-dark">In Service</h5>
                        <?php if($serviceInCount): ?>
                            <h3 class="text-dk-red"><?php echo e($serviceInCount); ?></h3>
                        <?php else: ?>
                            <h3 class="text-dk-red">0</h3>
                        <?php endif; ?>
                    </div>
                </div>

                <?php $__currentLoopData = $serviceService; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card shadow mt-3">
                        <div class="card-body">
                            <a href="<?php echo e(route('rental.show', $rental)); ?>" class="stat-link">
                                <div class="row">

                                    <div class="col-12">
                                        <img class="img-responsive" src="<?php echo e(asset('storage/' . $rental->image_1)); ?>" height="auto" width="100%" />
                                    </div>
                                    <div class="col-12">
                                        <h3 class="mt-3">
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
                                            <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($rental->coc_vehicle == $vehicle->id): ?>
                                                    <?php echo e($vehicle->internal_vehicle_id); ?>

                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </h3>
                                        <h4>#<?php echo e($rental->invoice_number); ?> <span>| <?php echo e($rental->last_name); ?></span></h4>
                                        <h5><?php echo e($rental->coc_status); ?></h5>
                                        <h4><span class="small"><?php echo e(\Carbon\Carbon::parse($rental->activity_date)->format('M d, Y')); ?></span></h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="col-12 col-sm-3">
                <div class="card shadow mt-3">
                    <div class="card-body text-center">
                        <h5 class="text-dark">Invoice Submitted</h5>
                        <?php if($serviceInvAprCount): ?>
                            <h3 class="text-dk-red"><?php echo e($serviceInvAprCount); ?></h3>
                        <?php else: ?>
                            <h3 class="text-dk-red">0</h3>
                        <?php endif; ?>
                    </div>
                </div>

                <?php $__currentLoopData = $serviceInvApr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card shadow mt-3">
                        <div class="card-body">
                            <a href="<?php echo e(route('rental.show', $rental)); ?>" class="stat-link">
                                <div class="row">

                                    <div class="col-12">
                                        <img class="img-responsive" src="<?php echo e(asset('storage/' . $rental->image_1)); ?>" height="auto" width="100%" />
                                    </div>
                                    <div class="col-12">
                                        <h3 class="mt-3">
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
                                            <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($rental->coc_vehicle == $vehicle->id): ?>
                                                    <?php echo e($vehicle->internal_vehicle_id); ?>

                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </h3>
                                        <h4>#<?php echo e($rental->invoice_number); ?> <span>| <?php echo e($rental->last_name); ?></span></h4>
                                        <h5><?php echo e($rental->coc_status); ?></h5>
                                        <h4><span class="small"><?php echo e(\Carbon\Carbon::parse($rental->activity_date)->format('M d, Y')); ?></span></h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="col-12 col-sm-3">
                <div class="card shadow mt-3">
                    <div class="card-body text-center">
                        <h5 class="text-dark">Waiting on Customer</h5>
                        <?php if($serviceBillCount): ?>
                            <h3 class="text-dk-red"><?php echo e($serviceBillCount); ?></h3>
                        <?php else: ?>
                            <h3 class="text-dk-red">0</h3>
                        <?php endif; ?>
                    </div>
                </div>


                <?php $__currentLoopData = $serviceBill; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card shadow mt-3">
                        <div class="card-body">
                            <a href="<?php echo e(route('rental.show', $rental)); ?>" class="stat-link">
                                <div class="row">

                                    <div class="col-12">
                                        <img class="img-responsive" src="<?php echo e(asset('storage/' . $rental->image_1)); ?>" height="auto" width="100%" />
                                    </div>
                                    <div class="col-12">
                                        <h3 class="mt-3">
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
                                            <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($rental->coc_vehicle == $vehicle->id): ?>
                                                    <?php echo e($vehicle->internal_vehicle_id); ?>

                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </h3>
                                        <h4>#<?php echo e($rental->invoice_number); ?> <span>| <?php echo e($rental->last_name); ?></span></h4>
                                        <h5><?php echo e($rental->coc_status); ?></h5>
                                        <h4><span class="small"><?php echo e(\Carbon\Carbon::parse($rental->activity_date)->format('M d, Y')); ?></span></h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>
        <!-- /Stats -->

    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('scripts'); ?>

    <?php $__env->stopSection(); ?>



 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/admin/coc/index.blade.php ENDPATH**/ ?>