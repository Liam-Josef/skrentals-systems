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
        <link href="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
    <?php $__env->stopSection(); ?>


        <?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php $__env->startSection('page_title'); ?>
            <h1>Maintenance</h1>
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('browser_title'); ?>
            <title>Maintenance | <?php echo e($application->name); ?></title>
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
                <h1>Maintenance</h1>
            </div>
        </div>

        <div class="row mt-3">

            <div class="col-sm-3">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <h5 class="text-dark">Created</h5>
                        <?php if($createdCount): ?>
                            <h3 class="text-dk-red"><?php echo e($createdCount); ?></h3>
                        <?php else: ?>
                            <h3 class="text-dk-red">0</h3>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <h5 class="text-dark">In Service</h5>
                        <?php if($serviceCount): ?>
                            <h3 class="text-dk-red"><?php echo e($serviceCount); ?></h3>
                        <?php else: ?>
                            <h3 class="text-dk-red">0</h3>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <h5 class="text-dark">Invoice Submitted</h5>
                        <?php if($invoiceCount): ?>
                            <h3 class="text-dk-red"><?php echo e($invoiceCount); ?></h3>
                        <?php else: ?>
                            <h3 class="text-dk-red">0</h3>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <h5 class="text-dark">Completed</h5>
                        <?php if($completedCount): ?>
                            <h3 class="text-dk-red"><?php echo e($completedCount); ?></h3>
                        <?php else: ?>
                            <h3 class="text-dk-red">0</h3>
                        <?php endif; ?>
                    </div>
                </div>
            </div>


        </div>


        <div class="row mt-3">
            <div class="col-md-7">
                <h2 class="text-gray-500 mt-4 mb-2 text-center">Within the Past Week</h2>

                <?php $__currentLoopData = $activeMaintenanceWeek; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card shadow mt-0 my-2 serv-req-card">
                        <a href="#" class="card-link" data-toggle="modal" data-target="#activeMaint<?php echo e($maintenance->id); ?>">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($vehicle->id == $maintenance->vehicle_id): ?>
                                                <p>
                                                    <?php echo e($vehicle->vehicle_type); ?>

                                                    <span class="font-weight-bold"><?php echo e($vehicle->internal_vehicle_id); ?></span>
                                                </p>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <div class="col-4">
                                        <?php echo e($maintenance->description); ?>

                                    </div>
                                    <div class="col-3">
                                        <p class="font-weight-bolder"><?php echo e($maintenance->service_type); ?></p>
                                    </div>
                                    <div class="col-2">
                                        <?php echo e($maintenance->status); ?>

                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            <div class="col-md-5">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <h3>Submit <span>Service Request</span></h3>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-12">
                                <!-- Vehicle List -->
                                <ul class="nav nav-tabs nav-justified mb-3 dock-depart sidebar-tab-list" id="runnerView" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="view-seadoo-tab" data-toggle="tab" href="#seadoo-tab" role="tab" aria-controls="seadoo-tab"
                                           aria-selected="true">
                                            SeaDoo
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="view-pontoon-tab" data-toggle="tab" href="#pontoon-tab" role="tab" aria-controls="pontoon-tab"
                                           aria-selected="true">
                                            Pontoon
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="view-scarab-tab" data-toggle="tab" href="#scarab-tab" role="tab" aria-controls="scarab-tab"
                                           aria-selected="true">
                                            Scarab
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Vehicle List Content -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="seadoo-tab" role="tabpanel" aria-labelledby="seadoo-tab">
                                <form action="<?php echo e(route('maintenance.submitMaintReqAdmin')); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="service_type">Select Request Type</label>
                                                <select name="service_type" id="service_type" class="form-control">
                                                    <option value="Service">Service</option>
                                                    <option value="Repair">Repair</option>
                                                    <option value="COC">COC</option>
                                                    <option value="Summerize">Summerize</option>
                                                    <option value="Winterize">Winterize</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="vehicle_id">Select SeaDoo</label>
                                                    <select name="vehicle_id" id="vehicle_id" class="form-control">
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option id="<?php echo e($vehicle->id); ?>" value="<?php echo e($vehicle->id); ?>"> <?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row hidden">
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="description">Request Description</label>
                                                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="image">Attach an Image</label>
                                                <input type="file" name="image" id="image" class="form-control" accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="vehicle_type" value="SeaDoo">
                                    <div class="modal-footer">
                                        <input type="hidden" name="is_active" value="0">
                                        <input type="hidden" name="status" value="Created">
                                        <input type="hidden" name="internal_vehicle_id" value="Z">
                                        <input type="hidden" name="submitted_by" value="<?php echo e(auth()->user()->id); ?>">
                                        <input type="hidden" name="date_submitted" value="<?php echo e($dateNow); ?>">
                                        <button class="btn btn-primary-red" type="submit">Submit Request</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade show" id="pontoon-tab" role="tabpanel" aria-labelledby="pontoon-tab">
                                <form action="<?php echo e(route('maintenance.submitMaintReqAdmin')); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="service_type">Select Request Type</label>
                                                <select name="service_type" id="service_type" class="form-control">
                                                    <option value="Service">Service</option>
                                                    <option value="Repair">Repair</option>
                                                    <option value="COC">COC</option>
                                                    <option value="Summerize">Summerize</option>
                                                    <option value="Winterize">Winterize</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="vehicle_id">Select Pontoon</label>
                                                    <select name="vehicle_id" id="vehicle_id" class="form-control">
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option id="<?php echo e($vehicle->id); ?>" value="<?php echo e($vehicle->id); ?>"> <?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row hidden">
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="description">Request Description</label>
                                                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="image">Attach an Image</label>
                                                <input type="file" name="image" id="image" class="form-control" accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="vehicle_type" value="23ft. Pontoon Boat">
                                    <div class="modal-footer">
                                        <input type="hidden" name="is_active" value="0">
                                        <input type="hidden" name="status" value="Created">
                                        <input type="hidden" name="internal_vehicle_id" value="Z">
                                        <input type="hidden" name="submitted_by" value="<?php echo e(auth()->user()->id); ?>">
                                        <input type="hidden" name="date_submitted" value="<?php echo e($dateNow); ?>">
                                        <button class="btn btn-primary-red" type="submit">Submit Request</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade show" id="scarab-tab" role="tabpanel" aria-labelledby="scarab-tab">
                                <form action="<?php echo e(route('maintenance.submitMaintReqAdmin')); ?>" method="post" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="service_type">Select Request Type</label>
                                                <select name="service_type" id="service_type" class="form-control">
                                                    <option value="Service">Service</option>
                                                    <option value="Repair">Repair</option>
                                                    <option value="COC">COC</option>
                                                    <option value="Summerize">Summerize</option>
                                                    <option value="Winterize">Winterize</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="vehicle_id">Select Scarab</label>
                                                    <select name="vehicle_id" id="vehicle_id" class="form-control">
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option id="<?php echo e($vehicle->id); ?>" value="<?php echo e($vehicle->id); ?>"> <?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row hidden">
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="description">Request Description</label>
                                                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="image">Attach an Image</label>
                                                <input type="file" name="image" id="image" class="form-control" accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="vehicle_type" value="Scarab 215">
                                    <div class="modal-footer">
                                        <input type="hidden" name="is_active" value="0">
                                        <input type="hidden" name="status" value="Created">
                                        <input type="hidden" name="internal_vehicle_id" value="Z">
                                        <input type="hidden" name="submitted_by" value="<?php echo e(auth()->user()->id); ?>">
                                        <input type="hidden" name="date_submitted" value="<?php echo e($dateNow); ?>">
                                        <button class="btn btn-primary-red" type="submit">Submit Request</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="row mt-3 mb-5">
            <div class="col-sm-6">
                <h2 class="text-gray-500 mt-4 mb-2 text-center">Over 7 Days Old</h2>

                <?php $__currentLoopData = $activeMaintenance7days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card shadow mt-0 my-2 serv-req-card">
                        <a href="#" class="card-link" data-toggle="modal" data-target="#activeMaint<?php echo e($maintenance->id); ?>">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($vehicle->id == $maintenance->vehicle_id): ?>
                                                <p>
                                                    <?php echo e($vehicle->vehicle_type); ?>

                                                    <span class="font-weight-bold"><?php echo e($vehicle->internal_vehicle_id); ?></span>
                                                </p>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <div class="col-4">
                                        <?php echo e($maintenance->description); ?>

                                    </div>
                                    <div class="col-2">
                                        <p class="font-weight-bolder"><?php echo e($maintenance->service_type); ?></p>
                                    </div>
                                    <div class="col-3">
                                        <?php echo e($maintenance->status); ?>

                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

            <div class="col-sm-6">
                <h2 class="text-gray-500 mt-4 mb-2 text-center">Over 14 Days Old</h2>

                <?php $__currentLoopData = $activeMaintenance14days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card shadow mt-0 my-2 serv-req-card">
                        <a href="#" class="card-link" data-toggle="modal" data-target="#activeMaint<?php echo e($maintenance->id); ?>">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($vehicle->id == $maintenance->vehicle_id): ?>
                                                <p>
                                                    <?php echo e($vehicle->vehicle_type); ?>

                                                    <span class="font-weight-bold"><?php echo e($vehicle->internal_vehicle_id); ?></span>
                                                </p>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <div class="col-4">
                                        <?php echo e($maintenance->description); ?>

                                    </div>
                                    <div class="col-2">
                                        <p class="font-weight-bolder"><?php echo e($maintenance->service_type); ?></p>
                                    </div>
                                    <div class="col-3">
                                        <?php echo e($maintenance->status); ?>

                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>


       <?php $__currentLoopData = $activeMaintenance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- Active Maintenance Modal -->
            <div class="modal fade" id="activeMaint<?php echo e($maintenance->id); ?>" tabindex="-1" role="dialog" aria-labelledby="viewInvoice" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                                <div class="modal-header">
                                    <h3><span>Service Request: </span><?php echo e($maintenance->description); ?> <span>| <?php echo e($maintenance->status); ?></span></h3>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <?php if($maintenance->coc_image == ''): ?>
                                                <img src="<?php echo e(asset('storage/' . 'images/no-image.jpg')); ?>" alt="Service Request Image" class="img-responsive">
                                            <?php else: ?>
                                                <img src="<?php echo e(asset('storage/' . $maintenance->image)); ?>" alt="Service Request Image" class="img-responsive">
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-6">
                                            
                                            
                                            <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($maintenance->vehicle_id == $vehicle->id): ?>
                                                    <h6>
                                                        <span class="text-white">Vehicle: &nbsp; </span>
                                                        <?php echo e($vehicle->vehicle_type); ?>

                                                        <?php echo e($vehicle->internal_vehicle_id); ?>

                                                    </h6>
                                                    <h6>
                                                        <span class="text-white">VIN: &nbsp; </span>
                                                        <?php echo e($vehicle->vin); ?>

                                                    </h6>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <h6>
                                                <span class="text-white">Hours: &nbsp; </span>
                                                <?php echo e($maintenance->service_hours); ?>

                                            </h6>
                                            <h6> <span class="text-white">Description: &nbsp; </span><?php echo e($maintenance->description); ?></h6>
                                            <h6> <span class="text-white">Service Invoice #: &nbsp; </span><?php echo e($maintenance->service_invoice); ?></h6>
                                            <h6> <span class="text-white">Submitted By: &nbsp; </span>
                                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($user->id == $maintenance->submitted_by): ?>
                                                        <?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?>

                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </h6>
                                            <h6> <span class="text-white">Date Submitted: &nbsp; </span><?php echo e(Carbon\Carbon::parse($maintenance->date_sumitted)->format('m / d / y')); ?></h6>
                                            <?php if($maintenance->invoiced_by == ''): ?>

                                            <?php else: ?>
                                                <h6> <span class="text-white">Invoiced By: &nbsp; </span>
                                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($user->id == $maintenance->invoiced_by): ?>
                                                            <?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?>

                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </h6>
                                                <h6> <span class="text-white">Invoice Submitted: &nbsp; </span><?php echo e(Carbon\Carbon::parse($maintenance->date_invoiced)->format('m / d / y')); ?></h6>
                                            <?php endif; ?>

                                            <?php if($maintenance->approved_by == ''): ?>

                                            <?php else: ?>
                                                <h6> <span class="text-white">Approved Invoice: &nbsp; </span>
                                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($user->id == $maintenance->approved_by): ?>
                                                            <?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?>

                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </h6>
                                                <h6> <span class="text-white">Invoice Submitted: &nbsp; </span><?php echo e(Carbon\Carbon::parse($maintenance->date_invoiced)->format('m / d / y')); ?></h6>
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
                                <div class="modal-footer">
                                    <?php if($maintenance->status == 'Created'): ?>
                                        <h3 class="text-center text-lt-red">Waiting for Service to Accept...</h3>
                                        <button class="btn btn-secondary btn-right btn-modal" type="button" data-dismiss="modal">Close</button>
                                    <?php endif; ?>

                                    <?php if($maintenance->status == 'In Service'): ?>
                                        <h3 class="text-center text-lt-red">Waiting for Service Invoice</h3>
                                        <button class="btn btn-secondary btn-right btn-modal" type="button" data-dismiss="modal">Close</button>
                                    <?php endif; ?>





                                    <?php if($maintenance->status == 'Invoice Submitted'): ?>
                                        <button class="btn btn-secondary btn-right btn-modal" type="button" data-dismiss="modal">Cancel</button>

                                        <form action="<?php echo e(route('maintenance.acceptMaintInvoice', $maintenance)); ?>" method="post" class="width-100" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>

                                            <div class="form-group width-100">
                                                <input type="hidden" class="form-group" name="approved_by" value="<?php echo e(auth()->user()->id); ?>"/>
                                                <input type="hidden" class="form-group" name="date_approved" value="<?php echo e($dateNow); ?>"/>
                                                <input type="hidden" class="form-group" name="status" value="Completed"/>
                                                <button class="btn btn-primary btn-modal btn-right" type="submit">Accept Invoice & Close</button>
                                            </div>
                                        </form>
                                    <?php endif; ?>

                                </div>
                            </div>
                </div>
            </div>
            <!-- /Active Maintenance Modal -->
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/admin/maintenance/index.blade.php ENDPATH**/ ?>