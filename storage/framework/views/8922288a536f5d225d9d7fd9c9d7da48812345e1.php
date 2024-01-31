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
                <title>Hour Counts | <?php echo e($application->name); ?></title>
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
                <h1>Hour Counts</h1>
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
                <h1>Hour Counts</h1>
            </div>
        </div>

        <!-- Hour Counts -->
        <div class="row" >
            <div class="col-12">
                <div class="card shadow card-dark mb-4">
                    <div class="card-header">
                        <!-- Departing Tablist -->
                        <ul class="nav nav-tabs nav-justified dock-depart" id="runnerView" role="tablist">
                            <li class="nav-item mb-0">
                                <a class="nav-link active" id="view-pontoon-tab" data-toggle="tab" href="#pontoon-tab" role="tab" aria-controls="pontoon-tab"
                                   aria-selected="true">
                                    Pont<span class="hidden-xs-inline">oon</span>
                                </a>
                            </li>
                            <li class="nav-item mb-0">
                                <a class="nav-link" id="view-scarab-tab" data-toggle="tab" href="#scarab-tab" role="tab" aria-controls="scarab-tab"
                                   aria-selected="true">
                                    Scarab
                                </a>
                            </li>
                            <li class="nav-item mb-0">
                                <a class="nav-link" id="view-seadoo-tab" data-toggle="tab" href="#seadoo-tab" role="tab" aria-controls="seadoo-tab"
                                   aria-selected="true">
                                    SeaDoo
                                </a>
                            </li>
                            <li class="nav-item mb-0">
                                <a class="nav-link" id="view-skidoo-tab" data-toggle="tab" href="#skidoo-tab" role="tab" aria-controls="skidoo-tab"
                                   aria-selected="true">
                                    SkiDoo
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show" id="scarab-tab" role="tabpanel" aria-labelledby="scarab-tab">

                                <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <form method="post" action="<?php echo e(route('vehicle.updateHours', $vehicle)); ?>">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        <div class="row">
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-5"><h3 class="text-white text-center mt-1"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></h3></div>
                                            <span class="hidden"><?php echo e($updatedDate = \Carbon\Carbon::now()->addDay()); ?></span>
                                            <?php if(strpos($vehicle->hours_updated, $today) !== false): ?>
                                                <div class="col-sm-3">
                                                    <h3 class="mt-1">  <?php echo e($vehicle->current_hours); ?></h3>
                                                </div>
                                            <?php else: ?>
                                                <div class="col-6 col-sm-1">
                                                    <input type="number" class="form-control visible-sm" name="current_hours" value="<?php echo e($vehicle->current_hours); ?>" />
                                                    <input type="text" class="form-control hidden-sm" name="current_hours" value="<?php echo e($vehicle->current_hours); ?>" />
                                                    <input type="hidden" class="form-control" name="hours_updated" value="<?php echo e($dateNow); ?>" />
                                                    <input type="hidden" class="form-control" name="id" value="<?php echo e($vehicle->id); ?>" />
                                                </div>
                                                <div class="col-6 col-sm-2">
                                                    <button type="submit" class="btn btn-primary-red">Update</button>
                                                </div>
                                            <?php endif; ?>

                                            <div class="col-sm-2">
                                                <?php if($vehicle->launched == '1'): ?>
                                                    <h4 class="mt-2">( On Rental )</h4>
                                                <?php endif; ?>
                                            </div>
                                            <hr class="rounded mt-3" />
                                        </div>
                                    </form>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                            <div class="tab-pane fade show active" id="pontoon-tab" role="tabpanel" aria-labelledby="pontoon-tab">
                                <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <form method="post" action="<?php echo e(route('vehicle.updateHours', $vehicle)); ?>">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        <div class="row">
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-5"><h3 class="text-white text-center mt-1"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></h3></div>
                                            <span class="hidden"><?php echo e($updatedDate = \Carbon\Carbon::now()->addDay()); ?></span>
                                            <?php if(strpos($vehicle->hours_updated, $today) !== false): ?>
                                                <div class="col-sm-3">
                                                    <h3 class="mt-1">  <?php echo e($vehicle->current_hours); ?></h3>
                                                </div>
                                            <?php else: ?>
                                                <div class="col-6 col-sm-1">
                                                    <input type="number" class="form-control visible-sm" name="current_hours" value="<?php echo e($vehicle->current_hours); ?>" />
                                                    <input type="text" class="form-control hidden-sm" name="current_hours" value="<?php echo e($vehicle->current_hours); ?>" />
                                                    <input type="hidden" class="form-control" name="hours_updated" value="<?php echo e(Carbon\Carbon::now('PST')); ?>" />
                                                    <input type="hidden" class="form-control" name="id" value="<?php echo e($vehicle->id); ?>" />
                                                </div>
                                                <div class="col-6 col-sm-2">
                                                    <button type="submit" class="btn btn-primary-red">Update</button>
                                                </div>
                                            <?php endif; ?>

                                            <div class="col-sm-2">
                                                <?php if($vehicle->launched == '1'): ?>
                                                    <h4 class="mt-2">( On Rental )</h4>
                                                <?php endif; ?>
                                            </div>
                                            <hr class="rounded mt-3" />
                                        </div>
                                    </form>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="tab-pane fade show" id="seadoo-tab" role="tabpanel" aria-labelledby="seadoo-tab">
                                <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <form method="post" action="<?php echo e(route('vehicle.updateHours', $vehicle)); ?>">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        <div class="row">
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-5"><h3 class="text-white text-center mt-1"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></h3></div>
                                            <span class="hidden"><?php echo e($updatedDate = \Carbon\Carbon::now()->addDay()); ?></span>
                                            <?php if(strpos($vehicle->hours_updated, $today) !== false): ?>
                                                <div class="col-sm-3">
                                                    <h3 class="mt-1">  <?php echo e($vehicle->current_hours); ?></h3>
                                                </div>
                                            <?php else: ?>
                                                <div class="col-6 col-sm-1">
                                                    <input type="number" class="form-control visible-sm" name="current_hours" value="<?php echo e($vehicle->current_hours); ?>" />
                                                    <input type="text" class="form-control hidden-sm" name="current_hours" value="<?php echo e($vehicle->current_hours); ?>" />
                                                    <input type="hidden" class="form-control" name="hours_updated" value="<?php echo e(Carbon\Carbon::now('PST')); ?>" />
                                                    <input type="hidden" class="form-control" name="id" value="<?php echo e($vehicle->id); ?>" />
                                                </div>
                                                <div class="col-6 col-sm-2">
                                                    <button type="submit" class="btn btn-primary-red">Update</button>
                                                </div>
                                            <?php endif; ?>

                                            <div class="col-sm-2">
                                                <?php if($vehicle->launched == '1'): ?>
                                                    <h4 class="mt-2">( On Rental )</h4>
                                                <?php endif; ?>
                                            </div>
                                            <hr class="rounded mt-3" />
                                        </div>
                                    </form>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="tab-pane fade show" id="skidoo-tab" role="tabpanel" aria-labelledby="skidoo-tab">
                                <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <form method="post" action="<?php echo e(route('vehicle.updateHours', $vehicle)); ?>">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        <div class="row">
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-5"><h3 class="text-white text-center mt-1"><?php echo e($vehicle->model); ?> <?php echo e($vehicle->internal_vehicle_id); ?></h3></div>
                                            <span class="hidden"><?php echo e($updatedDate = \Carbon\Carbon::now()->addDay()); ?></span>
                                            <?php if(strpos($vehicle->hours_updated, $today) !== false): ?>
                                                <div class="col-sm-3">
                                                    <h3 class="mt-1">  <?php echo e($vehicle->current_hours); ?></h3>
                                                </div>
                                            <?php else: ?>
                                                <div class="col-6 col-sm-1">
                                                    <input type="number" class="form-control visible-sm" name="current_hours" value="<?php echo e($vehicle->current_hours); ?>" />
                                                    <input type="text" class="form-control hidden-sm" name="current_hours" value="<?php echo e($vehicle->current_hours); ?>" />
                                                    <input type="hidden" class="form-control" name="hours_updated" value="<?php echo e(Carbon\Carbon::now('PST')); ?>" />
                                                    <input type="hidden" class="form-control" name="id" value="<?php echo e($vehicle->id); ?>" />
                                                </div>
                                                <div class="col-6 col-sm-2">
                                                    <button type="submit" class="btn btn-primary-red">Update</button>
                                                </div>
                                            <?php endif; ?>

                                            <div class="col-sm-2">
                                                <?php if($vehicle->launched == '1'): ?>
                                                    <h4 class="mt-2">( On Rental )</h4>
                                                <?php endif; ?>
                                            </div>
                                            <hr class="rounded mt-3" />
                                        </div>
                                    </form>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Hour Counts -->


    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('scripts'); ?>

    <?php $__env->stopSection(); ?>



 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/admin/maintenance/hour-counts.blade.php ENDPATH**/ ?>