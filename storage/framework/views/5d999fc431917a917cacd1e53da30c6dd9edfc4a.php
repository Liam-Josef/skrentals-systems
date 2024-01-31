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

    <?php $__env->startSection('browser_title'); ?>
        <title>Move Vehicle | <?php echo e($application->name); ?></title>
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

    <?php $__env->startSection('page_title'); ?>
        <h1>Move Vehicle</h1>
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
                <h1>Move Vehicle</h1>
            </div>
        </div>

        <!-- Hour Counts -->
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="card shadow card-dark mb-4">
                    <div class="card-header">
                        <!-- Departing Tablist -->
                        <ul class="nav nav-tabs nav-justified dock-depart" id="runnerView" role="tablist">
                            <li class="nav-item mb-0">
                                <a class="nav-link active" id="view-seadoo-tab" data-toggle="tab" href="#seadoo-tab" role="tab" aria-controls="seadoo-tab"
                                   aria-selected="true">
                                    SeaDoo
                                </a>
                            </li>
                            <li class="nav-item mb-0">
                                <a class="nav-link" id="view-pontoon-tab" data-toggle="tab" href="#pontoon-tab" role="tab" aria-controls="pontoon-tab"
                                   aria-selected="true">
                                    Pontoon
                                </a>
                            </li>
                            <li class="nav-item mb-0">
                                <a class="nav-link" id="view-scarab-tab" data-toggle="tab" href="#scarab-tab" role="tab" aria-controls="scarab-tab"
                                   aria-selected="true">
                                    Scarab
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show" id="scarab-tab" role="tabpanel" aria-labelledby="scarab-tab">

                                <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <div class="row mb-3">
                                        <div class="col-3">
                                            <a href="<?php echo e(route('vehicle.view', $vehicle->id)); ?>">
                                                <h4 class="text-white"><?php echo e($vehicle->vehicle_type); ?>&nbsp;<?php echo e($vehicle->internal_vehicle_id); ?></h4>
                                            </a>
                                        </div>
                                        <div class="col-3">
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#to_service_modal<?php echo e($vehicle->id); ?>"
                                                <?php if($vehicle->location == 'Service'): ?>
                                                    hidden
                                                    <?php elseif($vehicle->location == 'On Water'): ?>
                                                    hidden
                                                    <?php elseif($vehicle->location == 'Incoming'): ?>
                                                    hidden
                                                    <?php else: ?>
                                                <?php endif; ?>
                                            >To Service</button>
                                        </div>
                                        <div class="col-3">
                                            <form method="post" action="<?php echo e(route('vehicle.updateLocation', $vehicle)); ?>">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('PUT'); ?>

                                                <input type="hidden" name="location" id="location" value="Dock" />
                                                <input type="hidden" name="location_timestamp" id="location_timestamp" value="<?php echo e(\Carbon\Carbon::now()->format('Y-m-d H:m:s')); ?>" />

                                                <button class="btn btn-secondary" type="submit"
                                                        <?php if($vehicle->location == 'Dock'): ?>
                                                        hidden
                                                        <?php elseif($vehicle->location == 'On Water'): ?>
                                                        hidden
                                                    <?php endif; ?>
                                                >&nbsp;To Dock&nbsp;</button>
                                            </form>
                                        </div>
                                        <div class="col-3">
                                            <h4 class="text-white"><?php echo e($vehicle->location); ?></h4>
                                        </div>

                                        <hr class="rounded mt-3 text-lt-red" />
                                    </div>

                                    <hr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                            <div class="tab-pane fade show" id="pontoon-tab" role="tabpanel" aria-labelledby="pontoon-tab">
                                <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="row mb-3">
                                        <div class="col-3">
                                            <a href="<?php echo e(route('vehicle.view', $vehicle->id)); ?>">
                                                <h4 class="text-white"><?php echo e($vehicle->vehicle_type); ?>&nbsp;<?php echo e($vehicle->internal_vehicle_id); ?></h4>
                                            </a>
                                        </div>
                                        <div class="col-3">
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#to_service_modal<?php echo e($vehicle->id); ?>"
                                                    <?php if($vehicle->location == 'Service'): ?>
                                                    hidden
                                                    <?php elseif($vehicle->location == 'On Water'): ?>
                                                    hidden
                                                    <?php elseif($vehicle->location == 'Incoming'): ?>
                                                    hidden
                                            <?php else: ?>
                                                <?php endif; ?>
                                            >To Service</button>
                                        </div>
                                        <div class="col-3">
                                            <form method="post" action="<?php echo e(route('vehicle.updateLocation', $vehicle)); ?>">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('PUT'); ?>

                                                <input type="hidden" name="location" id="location" value="Dock" />
                                                <input type="hidden" name="location_timestamp" id="location_timestamp" value="<?php echo e(\Carbon\Carbon::now()->format('Y-m-d H:m:s')); ?>" />

                                                <button class="btn btn-secondary" type="submit"
                                                        <?php if($vehicle->location == 'Dock'): ?>
                                                        hidden
                                                        <?php elseif($vehicle->location == 'On Water'): ?>
                                                        hidden
                                                        <?php else: ?>
                                                        <?php endif; ?>
                                                >&nbsp;To Dock&nbsp;</button>
                                            </form>
                                        </div>
                                        <div class="col-3">
                                            <h4 class="text-white"><?php echo e($vehicle->location); ?></h4>
                                        </div>

                                        <hr class="rounded mt-3 text-lt-red" />
                                    </div>



                                    <hr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="tab-pane fade show active" id="seadoo-tab" role="tabpanel" aria-labelledby="seadoo-tab">
                                <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="row mb-3">
                                        <div class="col-3">
                                            <a href="<?php echo e(route('vehicle.view', $vehicle->id)); ?>">
                                                <h4 class="text-white"><?php echo e($vehicle->vehicle_type); ?>&nbsp;<?php echo e($vehicle->internal_vehicle_id); ?></h4>
                                            </a>
                                        </div>
                                        <div class="col-3">
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#to_service_modal<?php echo e($vehicle->id); ?>"
                                                    <?php if($vehicle->location == 'Service'): ?>
                                                    hidden
                                                    <?php elseif($vehicle->location == 'On Water'): ?>
                                                    hidden
                                                    <?php elseif($vehicle->location == 'Incoming'): ?>
                                                    hidden
                                            <?php else: ?>
                                                <?php endif; ?>
                                            >To Service</button>
                                        </div>
                                        <div class="col-3">
                                            <form method="post" action="<?php echo e(route('vehicle.updateLocation', $vehicle)); ?>">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('PUT'); ?>

                                                <input type="hidden" name="location" id="location" value="Dock" />
                                                <input type="hidden" name="location_timestamp" id="location_timestamp" value="<?php echo e(\Carbon\Carbon::now()->format('Y-m-d H:m:s')); ?>" />

                                                <button class="btn btn-secondary" type="submit"
                                                        <?php if($vehicle->location == 'Dock'): ?>
                                                        hidden
                                                        <?php elseif($vehicle->location == 'On Water'): ?>
                                                        hidden
                                                <?php else: ?>
                                                    <?php endif; ?>
                                                >&nbsp;To Dock&nbsp;</button>
                                            </form>
                                        </div>
                                        <div class="col-3">
                                            <h4 class="text-gray-400 bold"><?php echo e($vehicle->location); ?></h4>
                                        </div>

                                        <hr class="rounded mt-3 text-lt-red" />
                                    </div>



                                    <hr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Hour Counts -->


        <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="modal fade" id="to_service_modal<?php echo e($vehicle->id); ?>" tabindex="-1" role="dialog" aria-labelledby="launchModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="launchModalLabel">Send vehicle to <span>Service</span></h3>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="<?php echo e(route('vehicle.updateLocation', $vehicle)); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>

                                <div class="row mt-3">
                                    <div class="col-6">
                                        <div class="form-group">

                                            <input class="form-control" type="text" name="current_hours" id="current_hours"  placeholder="Enter Hours - <?php echo e($vehicle->current_hours); ?> " />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <input type="hidden" name="location" id="location" value="Service" />
                                        <input type="hidden" name="location_timestamp" id="location_timestamp" value="<?php echo e(\Carbon\Carbon::now()->format('Y-m-d H:m:s')); ?>" />
                                        <input type="hidden" class="form-control" name="hours_updated" value="<?php echo e($dateNow); ?>" />
                                        <button class="btn btn-primary width-100" type="submit"
                                        >Send To Service</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <form action="#" method="post">
                                <?php echo csrf_field(); ?>
                                <button class="btn btn-danger">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('scripts'); ?>

    <?php $__env->stopSection(); ?>



 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/admin/vehicles/to-service.blade.php ENDPATH**/ ?>