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
            <h1>Maintenance Chart</h1>
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('browser_title'); ?>
            <title>Maintenance Chart | <?php echo e($application->name); ?></title>
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
                <h1>Maintenance Chart</h1>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <!-- Vehicle List -->
                <ul class="nav nav-tabs nav-justified dock-depart sidebar-tab-list" id="runnerView" role="tablist">
                    <li class="nav-item mb-2">
                        <a class="nav-link active" id="view-seadoo-tab" data-toggle="tab" href="#seadoo-tab" role="tab" aria-controls="seadoo-tab"
                           aria-selected="true">
                            SeaDoo
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link" id="view-pontoon-tab" data-toggle="tab" href="#pontoon-tab" role="tab" aria-controls="pontoon-tab"
                           aria-selected="true">
                            Pontoon
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link" id="view-scarab-tab" data-toggle="tab" href="#scarab-tab" role="tab" aria-controls="scarab-tab"
                           aria-selected="true">
                            Scarab
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link" id="view-spyder-tab" data-toggle="tab" href="#spyder-tab" role="tab" aria-controls="spyder-tab"
                           aria-selected="true">
                            Spyder
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link" id="view-skidoo-tab" data-toggle="tab" href="#skidoo-tab" role="tab" aria-controls="skidoo-tab"
                           aria-selected="true">
                            SkiDoo
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row mb-5">
            <div class="hidden-xs col-sm-12">
                <div class="row">
                    <div class="col-sm-2">
                        <p class="mb-0 text-center"><span class="font-bolder">Vehicle</span></p>
                    </div>
                    <div class="col-sm-2">
                        <p class="mb-0 text-center"><span class="font-bolder">VIN</span></p>
                    </div>
                    <div class="col-sm-2">
                        <p class="mb-0 text-center"><span class="font-bolder">Hours Updated</span></p>
                    </div>
                    <div class="col-3 col-sm-1">
                        <p class="mb-0 text-center"><span class="font-bolder">Current</span></p>
                    </div>
                    <div class="col-3 col-sm-1">
                        <p class="mb-0 text-center"><span class="font-bolder">Expected</span></p>
                    </div>
                    <div class="col-3 col-sm-1">
                        <p class="mb-0 text-center"><span class="font-bolder">Remaining</span></p>
                    </div>
                    <div class="col-3 col-sm-1">
                        <p class="mb-0 text-center"><span class="font-bolder">Previous</span></p>
                    </div>
                    <div class="col-sm-2">
                        <p class="mb-0 text-center"><span class="font-weight-bolder">Location</span></p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="seadoo-tab" role="tabpanel" aria-labelledby="seadoo-tab">

                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="card shadow mt-0 my-2">
                                <a href="#" class="card-link" data-toggle="modal" data-target="#maintChart<?php echo e($vehicle->id); ?>">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <p class="mb-0 visible-xs text-center text-dk-red large"><?php echo e($vehicle->vehicle_type); ?> <span class="font-bolder"><?php echo e($vehicle->internal_vehicle_id); ?></span></p>
                                                <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->vehicle_type); ?> <span class="font-bolder"><?php echo e($vehicle->internal_vehicle_id); ?></span></p>
                                            </div>
                                            <div class="col-sm-2">
                                                <p class="mb-0 visible-xs text-center text-gray medium"><?php echo e($vehicle->vin); ?></p>
                                                <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->vin); ?></p>
                                            </div>
                                            <div class="col-sm-2">
                                                <p class="mb-0 visible-xs mt-2 mb-3"><span class="font-weight-bolder">Hours Updated: </span> <?php echo e(Carbon\Carbon::parse($vehicle->hours_updated)->format('m / d / y')); ?></p>
                                                <p class="mb-0 hidden-xs text-center"><?php echo e(Carbon\Carbon::parse($vehicle->hours_updated)->format('m / d / y')); ?></p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Current</p>
                                                <p class="mb-0 visible-xs text-center"><?php echo e($vehicle->current_hours); ?></p>

                                                <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->current_hours); ?></p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Expected</p>
                                                <p class="mb-0 visible-xs text-center"><?php echo e($vehicle->expected_hours); ?></p>

                                                <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->expected_hours); ?></p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Remaining</p>
                                                <p class="mb-0 visible-xs text-center"><?php echo e($vehicle->remaining_hours); ?></p>

                                                <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->remaining_hours); ?></p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Previous</p>
                                                <p class="mb-0 visible-xs text-center"><?php echo e($vehicle->previous_hours); ?></p>

                                                <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->previous_hours); ?></p>
                                            </div>
                                            <div class="col-sm-2">
                                                <?php if($vehicle->launched == '1'): ?>
                                                    <p class="mb-0 visible-xs text-center font-weight-bold large text-gray-400">On Rental</p>
                                                    <p class="mb-0 hidden-xs text-center">On Rental</p>
                                                <?php else: ?>
                                                    <p class="mb-0 visible-xs text-center font-weight-bold large text-gray-400"><?php echo e($vehicle->location); ?></p>
                                                    <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->location); ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                    <div class="tab-pane fade show" id="pontoon-tab" role="tabpanel" aria-labelledby="pontoon-tab">

                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="card shadow mt-0 my-2">
                                <a href="#" class="card-link" data-toggle="modal" data-target="#maintChart<?php echo e($vehicle->id); ?>">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <p class="mb-0 visible-xs text-center text-dk-red large"><?php echo e($vehicle->vehicle_type); ?> <span class="font-bolder"><?php echo e($vehicle->internal_vehicle_id); ?></span></p>
                                                <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->vehicle_type); ?> <span class="font-bolder"><?php echo e($vehicle->internal_vehicle_id); ?></span></p>
                                            </div>
                                            <div class="col-sm-2">
                                                <p class="mb-0 visible-xs text-center text-gray medium"><?php echo e($vehicle->vin); ?></p>
                                                <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->vin); ?></p>
                                            </div>
                                            <div class="col-sm-2">
                                                <p class="mb-0 visible-xs mt-2 mb-3"><span class="font-weight-bolder">Hours Updated: </span> <?php echo e(Carbon\Carbon::parse($vehicle->hours_updated)->format('m / d / y')); ?></p>
                                                <p class="mb-0 hidden-xs text-center"><?php echo e(Carbon\Carbon::parse($vehicle->hours_updated)->format('m / d / y')); ?></p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Current</p>
                                                <p class="mb-0 visible-xs text-center"><?php echo e($vehicle->current_hours); ?></p>

                                                <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->current_hours); ?></p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Expected</p>
                                                <p class="mb-0 visible-xs text-center"><?php echo e($vehicle->expected_hours); ?></p>

                                                <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->expected_hours); ?></p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Remaining</p>
                                                <p class="mb-0 visible-xs text-center"><?php echo e($vehicle->remaining_hours); ?></p>

                                                <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->remaining_hours); ?></p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Previous</p>
                                                <p class="mb-0 visible-xs text-center"><?php echo e($vehicle->previous_hours); ?></p>

                                                <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->previous_hours); ?></p>
                                            </div>
                                            <div class="col-sm-2">
                                                <?php if($vehicle->launched == '1'): ?>
                                                    <p class="mb-0 visible-xs text-center font-weight-bold large text-gray-400">On Rental</p>
                                                    <p class="mb-0 hidden-xs text-center">On Rental</p>
                                                <?php else: ?>
                                                    <p class="mb-0 visible-xs text-center font-weight-bold large text-gray-400"><?php echo e($vehicle->location); ?></p>
                                                    <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->location); ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                    <div class="tab-pane fade show" id="scarab-tab" role="tabpanel" aria-labelledby="scarab-tab">

                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="card shadow mt-0 my-2">
                                <a href="#" class="card-link" data-toggle="modal" data-target="#maintChart<?php echo e($vehicle->id); ?>">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <p class="mb-0 visible-xs text-center text-dk-red large"><?php echo e($vehicle->vehicle_type); ?> <span class="font-bolder"><?php echo e($vehicle->internal_vehicle_id); ?></span></p>
                                                <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->vehicle_type); ?> <span class="font-bolder"><?php echo e($vehicle->internal_vehicle_id); ?></span></p>
                                            </div>
                                            <div class="col-sm-2">
                                                <p class="mb-0 visible-xs text-center text-gray medium"><?php echo e($vehicle->vin); ?></p>
                                                <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->vin); ?></p>
                                            </div>
                                            <div class="col-sm-2">
                                                <p class="mb-0 visible-xs mt-2 mb-3"><span class="font-weight-bolder">Hours Updated: </span> <?php echo e(Carbon\Carbon::parse($vehicle->hours_updated)->format('m / d / y')); ?></p>
                                                <p class="mb-0 hidden-xs text-center"><?php echo e(Carbon\Carbon::parse($vehicle->hours_updated)->format('m / d / y')); ?></p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Current</p>
                                                <p class="mb-0 visible-xs text-center"><?php echo e($vehicle->current_hours); ?></p>

                                                <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->current_hours); ?></p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Expected</p>
                                                <p class="mb-0 visible-xs text-center"><?php echo e($vehicle->expected_hours); ?></p>

                                                <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->expected_hours); ?></p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Remaining</p>
                                                <p class="mb-0 visible-xs text-center"><?php echo e($vehicle->remaining_hours); ?></p>

                                                <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->remaining_hours); ?></p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Previous</p>
                                                <p class="mb-0 visible-xs text-center"><?php echo e($vehicle->previous_hours); ?></p>

                                                <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->previous_hours); ?></p>
                                            </div>
                                            <div class="col-sm-2">
                                                <?php if($vehicle->launched == '1'): ?>
                                                    <p class="mb-0 visible-xs text-center font-weight-bold large text-gray-400">On Rental</p>
                                                    <p class="mb-0 hidden-xs text-center">On Rental</p>
                                                <?php else: ?>
                                                    <p class="mb-0 visible-xs text-center font-weight-bold large text-gray-400"><?php echo e($vehicle->location); ?></p>
                                                    <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->location); ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                    <div class="tab-pane fade show" id="spyder-tab" role="tabpanel" aria-labelledby="spyder-tab">

                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="card shadow mt-0 my-2">
                                <a href="#" class="card-link" data-toggle="modal" data-target="#maintChart<?php echo e($vehicle->id); ?>">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <p class="mb-0 visible-xs text-center text-dk-red large"><?php echo e($vehicle->vehicle_type); ?> <span class="font-bolder"><?php echo e($vehicle->internal_vehicle_id); ?></span></p>
                                                <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->vehicle_type); ?> <span class="font-bolder"><?php echo e($vehicle->internal_vehicle_id); ?></span></p>
                                            </div>
                                            <div class="col-sm-2">
                                                <p class="mb-0 visible-xs text-center text-gray medium"><?php echo e($vehicle->vin); ?></p>
                                                <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->vin); ?></p>
                                            </div>
                                            <div class="col-sm-2">
                                                <p class="mb-0 visible-xs mt-2 mb-3"><span class="font-weight-bolder">Hours Updated: </span> <?php echo e(Carbon\Carbon::parse($vehicle->hours_updated)->format('m / d / y')); ?></p>
                                                <p class="mb-0 hidden-xs text-center"><?php echo e(Carbon\Carbon::parse($vehicle->hours_updated)->format('m / d / y')); ?></p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Current</p>
                                                <p class="mb-0 visible-xs text-center"><?php echo e($vehicle->current_hours); ?></p>

                                                <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->current_hours); ?></p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Expected</p>
                                                <p class="mb-0 visible-xs text-center"><?php echo e($vehicle->expected_hours); ?></p>

                                                <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->expected_hours); ?></p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Remaining</p>
                                                <p class="mb-0 visible-xs text-center"><?php echo e($vehicle->remaining_hours); ?></p>

                                                <p class="mb-0 hidden-xs"><?php echo e($vehicle->remaining_hours); ?></p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Previous</p>
                                                <p class="mb-0 visible-xs text-center"><?php echo e($vehicle->previous_hours); ?></p>

                                                <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->previous_hours); ?></p>
                                            </div>
                                            <div class="col-sm-2">
                                                <?php if($vehicle->launched == '1'): ?>
                                                    <p class="mb-0 visible-xs text-center font-weight-bold large text-gray-400">On Rental</p>
                                                    <p class="mb-0 hidden-xs text-center">On Rental</p>
                                                <?php else: ?>
                                                    <p class="mb-0 visible-xs text-center font-weight-bold large text-gray-400"><?php echo e($vehicle->location); ?></p>
                                                    <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->location); ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                    <div class="tab-pane fade show" id="skidoo-tab" role="tabpanel" aria-labelledby="skidoo-tab">

                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="card shadow mt-0 my-2">
                                <a href="#" class="card-link" data-toggle="modal" data-target="#maintChart<?php echo e($vehicle->id); ?>">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <p class="mb-0 visible-xs text-center text-dk-red large"><?php echo e($vehicle->vehicle_type); ?> <span class="font-bolder"><?php echo e($vehicle->internal_vehicle_id); ?></span></p>
                                                <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->vehicle_type); ?> <span class="font-bolder"><?php echo e($vehicle->internal_vehicle_id); ?></span></p>
                                            </div>
                                            <div class="col-sm-2">
                                                <p class="mb-0 visible-xs text-center text-gray medium"><?php echo e($vehicle->vin); ?></p>
                                                <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->vin); ?></p>
                                            </div>
                                            <div class="col-sm-2">
                                                <p class="mb-0 visible-xs mt-2 mb-3"><span class="font-weight-bolder">Hours Updated: </span> <?php echo e(Carbon\Carbon::parse($vehicle->hours_updated)->format('m / d / y')); ?></p>
                                                <p class="mb-0 hidden-xs text-center"><?php echo e(Carbon\Carbon::parse($vehicle->hours_updated)->format('m / d / y')); ?></p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Current</p>
                                                <p class="mb-0 visible-xs text-center"><?php echo e($vehicle->current_hours); ?></p>

                                                <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->current_hours); ?></p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Expected</p>
                                                <p class="mb-0 visible-xs text-center"><?php echo e($vehicle->expected_hours); ?></p>

                                                <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->expected_hours); ?></p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Remaining</p>
                                                <p class="mb-0 visible-xs text-center"><?php echo e($vehicle->remaining_hours); ?></p>

                                                <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->remaining_hours); ?></p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Previous</p>
                                                <p class="mb-0 visible-xs text-center"><?php echo e($vehicle->previous_hours); ?></p>

                                                <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->previous_hours); ?></p>
                                            </div>
                                            <div class="col-sm-2">
                                                <?php if($vehicle->launched == '1'): ?>
                                                    <p class="mb-0 visible-xs text-center font-weight-bold large text-gray-400">On Rental</p>
                                                    <p class="mb-0 hidden-xs text-center">On Rental</p>
                                                <?php else: ?>
                                                    <p class="mb-0 visible-xs text-center font-weight-bold large text-gray-400"><?php echo e($vehicle->location); ?></p>
                                                    <p class="mb-0 hidden-xs text-center"><?php echo e($vehicle->location); ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>
        </div>



        <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- Maintenance Chart Modal -->
            <div class="modal fade" id="maintChart<?php echo e($vehicle->id); ?>" tabindex="-1" role="dialog" aria-labelledby="viewInvoice" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h3><span><?php echo e($vehicle->vehicle_type); ?></span>
                                <?php echo e($vehicle->internal_vehicle_id); ?>

                                <span class="text-gray-500">&nbsp;
                                    (
                                    <?php if($vehicle->launched == '1'): ?>
                                        On Rental
                                    <?php else: ?>
                                        <?php echo e($vehicle->location); ?>

                                    <?php endif; ?>
                                    )
                                    &nbsp;</span></h3>
                        </div>

                        <div class="modal-body">

                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <h6 class="text-white"><span class="text-gray-600">Year: &nbsp;</span> <?php echo e($vehicle->year); ?> </h6>
                                    <h6 class="text-white"><span class="text-gray-600">Vehicle Model: &nbsp;</span> <?php echo e($vehicle->model); ?> </h6>
                                    <h6 class="text-white"><span class="text-gray-600">VIN: &nbsp;</span> <?php echo e($vehicle->vin); ?> </h6>
                                    <h6 class="text-white"><span class="text-gray-600">Hours to Service: &nbsp;</span> <?php echo e($vehicle->remaining_hours); ?> </h6>

                                </div>
                                <div class="col-sm-6 col-md-8">
                                    <div class="row">

                                        <div class="col-sm-4 mr-0">
                                            <div class="card shadow mb-2">
                                                <div class="card-body text-center">
                                                    <h5 class="text-dark">Current</h5>
                                                    <h3 class="text-dk-red"><?php echo e($vehicle->current_hours); ?></h3>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 mr-0">
                                            <div class="card shadow mb-2">
                                                <div class="card-body text-center">
                                                    <h5 class="text-dark">Expected</h5>
                                                    <h3 class="text-dk-red"><?php echo e($vehicle->expected_hours); ?></h3>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 mr-0">
                                            <div class="card shadow mb-2">
                                                <div class="card-body text-center">
                                                    <h5 class="text-dark">Remaining</h5>
                                                    <h3 class="text-dk-red"><?php echo e($vehicle->remaining_hours); ?></h3>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <h3 class="text-white mt-3 mb-2">Maintenance History</h3>
                                </div>
                                <?php $__currentLoopData = $maintenances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($vehicle->id == $maintenance->vehicle_id): ?>

                                        <div class="col-12">
                                            <div class="card shadow mb-4">
                                                <!-- Card Header - Accordion -->
                                                <a href="#collapseCardExample" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
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
                                                <div class="collapse" id="collapseCardExample">
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
                                                                
                                                                
                                                                <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if($maintenance->vehicle_id == $vehicle->id): ?>
                                                                        <h6>
                                                                            <span class="text-dk-red">Vehicle: &nbsp; </span>
                                                                            <?php echo e($vehicle->vehicle_type); ?>

                                                                            <?php echo e($vehicle->internal_vehicle_id); ?>

                                                                        </h6>
                                                                        <h6>
                                                                            <span class="text-dk-red">VIN: &nbsp; </span>
                                                                            <?php echo e($vehicle->vin); ?>

                                                                        </h6>
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <h6> <span class="text-dk-red">Submitted By: &nbsp; </span>
                                                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php if($user->id == $maintenance->submitted_by): ?>
                                                                            <?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?>

                                                                        <?php endif; ?>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </h6>
                                                                <h6> <span class="text-dk-red">Date Submitted: &nbsp; </span><?php echo e(Carbon\Carbon::parse($maintenance->date_sumitted)->format('m / d / y')); ?></h6>
                                                                <h6>
                                                                    <span class="text-dk-red">Hours: &nbsp; </span>
                                                                    <?php echo e($maintenance->service_hours); ?>

                                                                </h6>
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

                                                                <?php if($maintenance->service_notes == ''): ?>

                                                                <?php else: ?>
                                                                    <h6> <span class="text-dk-red">Service Notes: &nbsp; </span><?php echo e($maintenance->service_notes); ?></h6>
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

                                                                <h6> <span class="text-dk-red">Descripion: &nbsp; </span><?php echo e($maintenance->description); ?></h6>

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

                        </div>

                        <div class="modal-footer">
                            <a href="<?php echo e(route('vehicle.view', $vehicle->id)); ?>" class="btn btn-primary btn-right btn-modal mr-3">View Vehicle</a>
                            <button class="btn btn-secondary btn-right btn-modal" type="button" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!-- /Maintenance Chart Modal -->


    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('scripts'); ?>

    <?php $__env->stopSection(); ?>



 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/admin/maintenance/maintenance-chart.blade.php ENDPATH**/ ?>