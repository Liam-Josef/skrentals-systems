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
                <h1><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?> Details</h1>
            <?php $__env->stopSection(); ?>

            <?php $__env->startSection('browser_title'); ?>
                <title><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?> Details | <?php echo e($application->name); ?></title>
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
            <div class="col-sm-10">
                <h1>Vehicle Profile <span><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></span> <small class="text-gray-700">( <?php echo e($vehicle->location); ?> )</small></h1>
            </div>
            <div class="col-sm-2">
                <?php if($vehicle->location == 'Dock'): ?>
                    <form method="post" action="<?php echo e(route('vehicle.updateLocation', $vehicle)); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <input type="hidden" name="location" id="location" value="Service" />
                        <input type="hidden" name="location_timestamp" id="location_timestamp" value="<?php echo e(\Carbon\Carbon::now()->format('Y-m-d H:m:s')); ?>" />

                        <button class="btn btn-secondary" type="submit">Move to Service</button>
                    </form>
                    <?php elseif($vehicle->location == 'Service'): ?>
                    <form method="post" action="<?php echo e(route('vehicle.updateLocation', $vehicle)); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <input type="hidden" name="location" id="location" value="Dock" />
                        <input type="hidden" name="location_timestamp" id="location_timestamp" value="<?php echo e(\Carbon\Carbon::now()->format('Y-m-d H:m:s')); ?>" />

                        <button class="btn btn-secondary" type="submit">Move to Dock</button>
                    </form>
                    <?php else: ?>
                    &nbsp;
                <?php endif; ?>
            </div>
        </div>


            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <h6 class="text-gray-900"><span class="text-dk-red">Year: &nbsp;</span> <?php echo e($vehicle->year); ?> </h6>
                    <h6 class="text-gray-900"><span class="text-dk-red">Vehicle Model: &nbsp;</span> <?php echo e($vehicle->model); ?> </h6>
                    <h6 class="text-gray-900"><span class="text-dk-red">VIN: &nbsp;</span> <?php echo e($vehicle->vin); ?> </h6>
                    <h6 class="text-gray-900"><span class="text-dk-red">Hours to Service: &nbsp;</span> <?php echo e($vehicle->remaining_hours); ?> </h6>
                    <h6 class="text-gray-900"><span class="text-dk-red">Notes: &nbsp;</span> <?php echo e($vehicle->notes); ?> </h6>
                    
                </div>
                <div class="col-sm-6 col-md-8">
                    <div class="row">

                        <div class="col-sm-4">
                            <div class="card shadow">
                                <div class="card-body text-center">
                                    <h5 class="text-dark">Rental's</h5>
                                    <?php if($vehicleRentals): ?>
                                        <h3 class="text-dk-red"><?php echo e($vehicleRentals); ?></h3>
                                    <?php else: ?>
                                        <h3 class="text-dk-red">0</h3>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card shadow">
                                <div class="card-body text-center">
                                    <h5 class="text-dark">COC's</h5>
                                    <?php if($vehicleCoc): ?>
                                        <h3 class="text-dk-red"><?php echo e($vehicleCoc); ?></h3>
                                    <?php else: ?>
                                        <h3 class="text-dk-red">0</h3>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card shadow">
                                <div class="card-body text-center">
                                    <h5 class="text-dark">Maintenance's</h5>
                                    <?php if($vehicleService): ?>
                                        <h3 class="text-dk-red"><?php echo e($vehicleService); ?></h3>
                                    <?php else: ?>
                                        <h3 class="text-dk-red">0</h3>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12">
                    <h3 class="mt-3 mb-2">Maintenance History</h3>
                </div>
                <?php $__currentLoopData = $maintenances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($vehicle->id == $maintenance->vehicle_id): ?>

                        <div class="col-12">
                            <div class="card shadow mb-4 profile-history">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCard<?php echo e($maintenance->id); ?>" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCard<?php echo e($maintenance->id); ?>">
                                    <div class="row">
                                        <div class="col-6 col-sm-3">
                                            <?php echo e(Carbon\Carbon::parse($maintenance->created_at)->format('M d, Y')); ?>

                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <?php echo e($maintenance->description); ?>

                                        </div>
                                        <div class="col-6 col-sm-2">
                                            <p class="font-weight-bolder"><?php echo e($maintenance->service_type); ?></p>
                                        </div>
                                        <div class="col-6 col-sm-3">
                                            <?php echo e($maintenance->status); ?>

                                        </div>

                                    </div>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse" id="collapseCard<?php echo e($maintenance->id); ?>">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <?php if($maintenance->coc_image == ''): ?>
                                                    <img src="<?php echo e(asset('storage/' . 'images/no-image.jpg')); ?>" alt="Service Request Image" class="img-responsive">
                                                <?php else: ?>
                                                    <img src="<?php echo e(asset('storage/' . $maintenance->image)); ?>" alt="Service Request Image" class="img-responsive">
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-sm-6">
                                                <h6> <span class="text-dk-red">Descripion: &nbsp; </span><?php echo e($maintenance->description); ?></h6>
                                                <h6> <span class="text-dk-red">Submitted By: &nbsp; </span>
                                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($user->id == $maintenance->submitted_by): ?>
                                                            <?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?>

                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </h6>
                                                <h6> <span class="text-dk-red">Date Submitted: &nbsp; </span><?php echo e(Carbon\Carbon::parse($maintenance->date_sumitted)->format('m / d / y')); ?></h6>
                                                <?php if($maintenance->invoiced_by == ''): ?>

                                                <?php else: ?>
                                                    <h6> <span class="text-dk-red">Service Invoice #: &nbsp; </span><?php echo e($maintenance->service_invoice); ?></h6>
                                                    <h6> <span class="text-dk-red">Invoiced By: &nbsp; </span>
                                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($user->id == $maintenance->invoiced_by): ?>
                                                                <?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?>

                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </h6>
                                                    <h6> <span class="text-dk-red">Invoice Submitted: &nbsp; </span><?php echo e(Carbon\Carbon::parse($maintenance->date_invoiced)->format('m / d / y')); ?></h6>
                                                <?php endif; ?>

                                                <?php if($maintenance->approved_by == ''): ?>

                                                <?php else: ?>
                                                    <h6> <span class="text-dk-red">Approved Invoice: &nbsp; </span>
                                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($user->id == $maintenance->approved_by): ?>
                                                                <?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?>

                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </h6>
                                                    <h6> <span class="text-dk-red">Invoice Submitted: &nbsp; </span><?php echo e(Carbon\Carbon::parse($maintenance->date_invoiced)->format('m / d / y')); ?></h6>
                                                <?php endif; ?>

                                                <?php if($maintenance->service_notes == ''): ?>

                                                <?php else: ?>
                                                    <h6> <span class="text-dk-red">Service Notes: &nbsp; </span><?php echo e($maintenance->service_notes); ?></h6>
                                                <?php endif; ?>

                                            </div>
                                        </div>
                                        <?php if($maintenance->invoice == ''): ?>
                                        <?php else: ?>
                                            <div class="row mt-5">
                                                <iframe src="<?php echo e(asset('storage/' . $maintenance->invoice)); ?>" style="width: 100%;height: 800px;border: none;"></iframe>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>



    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('scripts'); ?>

    <?php $__env->stopSection(); ?>



 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/admin/vehicles/profile.blade.php ENDPATH**/ ?>