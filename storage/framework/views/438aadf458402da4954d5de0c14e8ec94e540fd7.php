<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.admin-master','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin-master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <?php $__env->startSection('styles'); ?>

    <?php $__env->stopSection(); ?>


    <?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php $__env->startSection('browser_title'); ?>
            <?php if(!auth()->user()->userHasRole('Service')): ?>
                <title>Admin Dashboard | <?php echo e($application->name); ?></title>
            <?php elseif(auth()->user()->userHasRole('Service')): ?>
                <title>Service Requests | <?php echo e($application->name); ?></title>
            <?php endif; ?>
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
            <?php if(!auth()->user()->userHasRole('Service')): ?>
                <h1>Admin Dashboard</h1>
            <?php elseif(auth()->user()->userHasRole('Service')): ?>
                <h1>Service Requests</h1>
            <?php endif; ?>
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('admin_footer'); ?>
            <footer class="sticky-footer bg-dark">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span><?php echo e($application->name); ?> | Copyright &copy; <?php echo e(Carbon\Carbon::now()->format('Y')); ?></span>
                    </div>
                </div>
            </footer>
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('app_name'); ?>
            <?php echo e($application->name); ?>

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
        <h1 class="h3 mb-4 text-gray-800">Admin Dashboard</h1>
        <div class="row">
            <div class="col-md-8">

                <div class="row">
                    <div class="col-12 col-sm-3">
                        <div class="card shadow my-3">
                            <div class="card-header pl-0 pr-0">
                                <h6 class="text-center text-white mt-1">Employee's</h6>
                            </div>
                            <div class="card-body">
                                <h6 class="font-gray-500 text-center">Active</h6>
                                <?php if($activeEmp): ?>
                                    <h2 class="text-dk-red text-center"><?php echo e($activeEmp); ?></h2>
                                <?php else: ?>
                                    <h2 class="text-dk-red text-center">0</h2>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-3">
                        <div class="card shadow my-3">
                            <div class="card-header pl-0 pr-0">
                                <h6 class="text-center text-white mt-1">COC's</h6>
                            </div>
                            <div class="card-body">
                                <h6 class="font-gray-500 text-center">Active</h6>
                                <?php if($activeCoc): ?>
                                    <h2 class="text-dk-red text-center"><?php echo e($activeCoc); ?></h2>
                                <?php else: ?>
                                    <h2 class="text-dk-red text-center">0</h2>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-3">
                        <div class="card shadow my-3">
                            <div class="card-header pl-0 pr-0">
                                <h6 class="text-center text-white mt-1">Service <span class="hidden-sm-contents">Requests</span></h6>
                            </div>
                            <div class="card-body">
                                <h6 class="font-gray-500 text-center">Active</h6>
                                <?php if($activeService): ?>
                                    <h2 class="text-dk-red text-center"><?php echo e($activeService); ?></h2>
                                <?php else: ?>
                                    <h2 class="text-dk-red text-center">0</h2>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-3">
                        <div class="card shadow my-3">
                            <div class="card-header pl-0 pr-0">
                                <h6 class="text-center text-white mt-1">Rentals</h6>
                            </div>
                            <div class="card-body">
                                <h6 class="font-gray-500 text-center">Today</h6>
                                <?php if($activeRentals): ?>
                                    <h2 class="text-dk-red text-center"><?php echo e($activeRentals); ?></h2>
                                <?php else: ?>
                                    <h2 class="text-dk-red text-center">0</h2>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Service Requests TODO - Complete if statements for different buttons -->
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <h3><span>Service </span>Request Actions</h3>
                    </div>
                    <div class="card-body p-3">

                        <!-- Submit COC to Service - Rental -->
                        <?php if($serviceReqCocNewCount > 0): ?>
                            <?php $__currentLoopData = $serviceReqCocNew; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="coc-item">
                                    <a href="#" class="service-link" data-toggle="modal" data-target="#serviceModal<?php echo e($rental->id); ?>">
                                        <div class="row">
                                            <div class="col-8 col-sm-2">
                                                <h6 class="mt-2">
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
                                                    <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($vehicle->id == $rental->coc_vehicle): ?>
                                                            <?php echo e($vehicle->internal_vehicle_id); ?>

                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </h6>
                                            </div>
                                            <div class="col-4 col-sm-2">
                                                <h6 class="mt-2 text-red"><?php echo e($rental->coc_status); ?></h6>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <h6 class="coc-incident mt-2"><?php echo e($rental->incident); ?></h6>
                                            </div>
                                            <div class="col-12 col-sm-2">
                                                <h6 class="mt-2 text-gray-500">COC</h6>
                                            </div>
                                            <div class="col-6 col-sm-2">
                                                <?php if($rental->status == 'COC' && $rental->coc_status == 'New'): ?>
                                                    <a href="#" class="btn btn-primary-red width-100 height-auto" data-toggle="modal" data-target="#serviceModal<?php echo e($rental->id); ?>">Intake</a>
                                                <?php elseif($rental->status == 'COC' && $rental->coc_status == 'Service'): ?>
                                                    <form method="post" action="<?php echo e(route('coc.attachRental', $rental)); ?>" enctype="multipart/form-data">
                                                        <?php echo method_field('PUT'); ?>
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="rental" value="<?php echo e($rental->id); ?>">
                                                        <input type="hidden" class="form-control" name="image" value="<?php echo e($rental->image_1); ?>" accept="image/*">
                                                        <input type="hidden" name="maintenance" value="
                                                        <?php $__currentLoopData = $maintenances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($maintenance->rental_invoice == $rental->invoice_number): ?>
                                                        <?php echo e($maintenance->id); ?>

                                                        <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            ">

                                                        <button class="btn btn-primary-red width-100 height-auto"
                                                                <?php $__currentLoopData = $rental->maintenances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php echo e($rental_maintenance->rental_id); ?>

                                                                <?php if($rental_maintenance->rental_invoice == $rental->invoice_number): ?>
                                                                hidden
                                                            <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        >Submit</button>
                                                    </form>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <!-- Service Modal -->
                                <div class="modal fade" id="serviceModal<?php echo e($rental->id); ?>" tabindex="-1" role="dialog" aria-labelledby="cocIntake" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3><span>Rental COC - #<?php echo e($rental->invoice_number); ?></span> |
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
                                                            <?php echo e($vehicle->internal_vehicle_id); ?>

                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    | <span> New</span>
                                                </h3>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <img class="img-responsive" src="<?php echo e(asset('storage/' . $rental->image_1)); ?>" height="auto" width="100%" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <h6> <span class="text-white">Status: &nbsp; </span><?php echo e($rental->coc_status); ?></h6>
                                                        <h6> <span class="text-white">Rental Date: &nbsp; </span><?php echo e(Carbon\Carbon::parse($rental->activity_date)->format('m / d / y')); ?></h6>
                                                        <h6> <span class="text-white">Rental Invoice #: &nbsp; </span><?php echo e($rental->invoice_number); ?></h6>
                                                        <h6> <span class="text-white">Found By: &nbsp; </span>
                                                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($rental->cleared_by == $user->id): ?>
                                                                    <?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?>

                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </h6>
                                                        <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($rental->coc_vehicle == $vehicle->id): ?>
                                                                <h6>
                                                                    <span class="text-white">Vehicle: &nbsp; </span>
                                                                    <?php echo e($vehicle->vehicle_type); ?>

                                                                    <?php echo e($vehicle->internal_vehicle_id); ?>

                                                                </h6>
                                                                <h6>
                                                                    <span class="text-white">VIN: &nbsp; </span>
                                                                    <?php echo e($vehicle->vin); ?>

                                                                </h6>
                                                                <h6>
                                                                    <span class="text-white">HOURS: &nbsp; </span>
                                                                    <?php echo e($vehicle->current_hours); ?>

                                                                </h6>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <h6> <span class="text-white">Description: &nbsp; </span><?php echo e($rental->incident); ?></h6>

                                                        <div class="row mt-5">
                                                            <div class="col-12">
                                                                <?php if($rental->coc_status == 'New'): ?>
                                                                    <form action="<?php echo e(route('coc.intakeCoc', $rental->id)); ?>" method="post" class="width-100" enctype="multipart/form-data">
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php echo method_field('PUT'); ?>
                                                                        <div class="row">
                                                                            <div class="col-6">
                                                                                <textarea name="description" id="description" cols="30" rows="5"><?php echo e($rental->incident); ?></textarea>
                                                                            </div>
                                                                            <div class="col-6">

                                                                                <input type="file" class="form-control mb-3" name="image_1" id="image_1" value="<?php echo e($rental->image_1); ?>" />

                                                                                <div class="form-group">
                                                                                    <label for="last_four">Last 4 of Card(s) <em>- Required *</em></label>
                                                                                    <input type="text" name="last_four" class="form-control mb-3" placeholder="Last 4 of CC">
                                                                                </div>




                                                                                <div class="row mt-5">
                                                                                    <div class="form-group width-100">
                                                                                        <input type="hidden" class="form-group" name="vehicle_type" value="<?php echo e($rental->activity_item); ?>"/>
                                                                                        <input type="hidden" class="form-group" name="internal_vehicle_id" value="
                                                                                    <?php $__currentLoopData = $rental->vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <?php if($rental->coc_vehicle == $rental_vehicle->id): ?>
                                                                                        <?php echo e($rental_vehicle->internal_vehicle_id); ?>

                                                                                        <?php endif; ?>
                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                            "/>
                                                                                        <input type="hidden" class="form-control" name="coc_status" value="Service">
                                                                                        <input type="hidden" class="form-control" name="status" value="Created">
                                                                                        <input type="hidden" class="form-control" name="rental_invoice" value="<?php echo e($rental->invoice_number); ?>">
                                                                                        <?php if(Auth::check()): ?>
                                                                                            <input type="hidden" value="<?php echo e(auth()->user()->id); ?>" name="submitted_by">
                                                                                        <?php endif; ?>
                                                                                        <input type="hidden" value="<?php echo e($dateNow); ?>" name="date_submitted">
                                                                                        <input type="hidden" class="form-control" name="rental_id" value="<?php echo e($rental->id); ?>">
                                                                                        
                                                                                        <input type="hidden" class="form-control" name="maint_active" value="1">
                                                                                        <input type="hidden" class="form-control" name="service_type" value="COC">
                                                                                        <input type="hidden" class="form-control" name="current_hours" value="
                                                                                        <?php $__currentLoopData = $rental->vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                            <?php if($rental->coc_vehicle == $rental_vehicle->id): ?>
                                                                                            <?php echo e($rental_vehicle->current_hours); ?>

                                                                                            <?php endif; ?>
                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                        ">
                                                                                        <input type="hidden" class="form-control" name="vehicle_id" value="
                                                                                      <?php $__currentLoopData = $rental->vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <?php if($rental->coc_vehicle == $rental_vehicle->id): ?>
                                                                                        <?php echo e($rental_vehicle->id); ?>

                                                                                        <?php endif; ?>
                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                            ">
                                                                                        <div class="row">
                                                                                            <div class="col-12">

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <div class="row mt-2">
                                                                                
                                                                                <form action="" method="post" class="width-100">
                                                                                    <?php echo csrf_field(); ?>
                                                                                    <?php echo method_field('PUT'); ?>

                                                                                    <div class="form-group">
                                                                                        <label for="" class="hidden"></label>
                                                                                        <input type="hidden" class="form-group" name=""/>
                                                                                        <button class="btn btn-outline-primary btn-right width-100 mr-3" type="submit">Create Customer Invoice</button>
                                                                                    </div>
                                                                                </form>
                                                                                <button class="btn btn-primary width-100 btn-right" type="submit">Send to Service</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                <?php elseif($rental->status == 'Billing'): ?>
                                                                    <form action="<?php echo e(route('coc.cocComplete', $rental)); ?>" method="post" class="width-100">
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php echo method_field('PUT'); ?>

                                                                        <div class="form-group width-100">
                                                                            <label for="" class="hidden"></label>
                                                                            <input type="hidden" class="form-group" name=""/>
                                                                            <button class="btn btn-primary width-100" type="submit">Create Customer Invoice</button>
                                                                        </div>
                                                                    </form>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancel </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Service Modal -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <!-- /Submit COC to Service - Rental -->

                        <!-- Finalize Submit COC to Service - Rental -->
                        <?php if($serviceReqCocServCount > 0): ?>
                            <?php $__currentLoopData = $serviceReqCocServ; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="coc-item
                                     <?php $__currentLoopData = $rental->maintenances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($rental_maintenance->rental_id); ?>

                                <?php if($rental_maintenance->rental_invoice == $rental->invoice_number): ?>
                                    hidden
<?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    ">
                                    <a href="#" class="service-link" data-toggle="modal" data-target="#serviceModal<?php echo e($rental->id); ?>">
                                        <div class="row">
                                            <div class="col-8 col-sm-2">
                                                <h6 class="mt-2">
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
                                                    <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($vehicle->id == $rental->coc_vehicle): ?>
                                                            <?php echo e($vehicle->internal_vehicle_id); ?>

                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </h6>
                                            </div>

                                            <div class="col-4 col-sm-2">
                                                <h6 class="mt-2 text-red"><?php echo e($rental->coc_status); ?></h6>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <h6 class="coc-incident mt-2"><?php echo e($rental->incident); ?></h6>
                                            </div>

                                            <div class="col-12 col-sm-2">
                                                <?php $__currentLoopData = $maintenances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($rental->invoice_number == $maintenance->rental_invoice): ?>
                                                        <h6 class="mt-2 text-gray-500"><?php echo e($maintenance->service_type); ?></h6>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                            <div class="col-6 col-sm-2">
                                                
                                                <?php if($rental->status == 'COC' && $rental->coc_status == 'New'): ?>
                                                    <a href="#" class="btn btn-primary width-100 height-auto" data-toggle="modal" data-target="#serviceModal<?php echo e($rental->id); ?>">Intake</a>
                                                <?php elseif($rental->status == 'COC' && $rental->coc_status == 'Service'): ?>
                                                    <form method="post" action="<?php echo e(route('coc.attachRental', $rental)); ?>" enctype="multipart/form-data">
                                                        <?php echo method_field('PUT'); ?>
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="rental" value="<?php echo e($rental->id); ?>">
                                                        <input type="hidden" class="form-control" name="image" value="<?php echo e($rental->image_1); ?>" accept="image/*">
                                                        <input type="hidden" name="maintenance" value="
                                                                       <?php $__currentLoopData = $maintenances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($maintenance->rental_invoice == $rental->invoice_number): ?>
                                                        <?php echo e($maintenance->id); ?>

                                                        <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            ">

                                                        <button class="btn btn-primary-red width-100 height-auto"
                                                                <?php $__currentLoopData = $rental->maintenances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php echo e($rental_maintenance->rental_id); ?>

                                                                <?php if($rental_maintenance->rental_invoice == $rental->invoice_number): ?>
                                                                hidden
                                                            <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        >Submit</button>
                                                    </form>
                                                <?php elseif($rental->status == 'COC' && $rental->coc_status == 'Billing'): ?>
                                                    <a href="#" class="btn btn-primary width-100 height-auto" data-toggle="modal" data-target="#serviceModal<?php echo e($rental->id); ?>">Billing</a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <!-- Service Modal -->
                                <div class="modal fade" id="serviceModal<?php echo e($rental->id); ?>" tabindex="-1" role="dialog" aria-labelledby="cocIntake" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3><span>Rental COC - #<?php echo e($rental->invoice_number); ?></span> |
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
                                                            <?php echo e($vehicle->internal_vehicle_id); ?>

                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    | <span> New</span>
                                                </h3>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <img class="img-responsive" src="<?php echo e(asset('storage/' . $rental->image_1)); ?>" height="auto" width="100%" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <h6> <span class="text-white">Status: &nbsp; </span><?php echo e($rental->coc_status); ?></h6>
                                                        <h6> <span class="text-white">Rental Date: &nbsp; </span><?php echo e(Carbon\Carbon::parse($rental->activity_date)->format('m / d / y')); ?></h6>
                                                        <h6> <span class="text-white">Rental Invoice #: &nbsp; </span><?php echo e($rental->invoice_number); ?></h6>
                                                        <h6> <span class="text-white">Found By: &nbsp; </span>
                                                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($rental->cleared_by == $user->id): ?>
                                                                    <?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?>

                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </h6>
                                                        <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($rental->coc_vehicle == $vehicle->id): ?>
                                                                <h6>
                                                                    <span class="text-white">Vehicle: &nbsp; </span>
                                                                    <?php echo e($vehicle->vehicle_type); ?>

                                                                    <?php echo e($vehicle->internal_vehicle_id); ?>

                                                                </h6>
                                                                <h6>
                                                                    <span class="text-white">VIN: &nbsp; </span>
                                                                    <?php echo e($vehicle->vin); ?>

                                                                </h6>
                                                                <h6>
                                                                    <span class="text-white">HOURS: &nbsp; </span>
                                                                    <?php echo e($vehicle->current_hours); ?>

                                                                </h6>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <h6> <span class="text-white">Description: &nbsp; </span><?php echo e($rental->incident); ?></h6>

                                                        <div class="row mt-5">
                                                            <div class="col-12">
                                                                <?php if($rental->coc_status == 'New'): ?>
                                                                    <form action="<?php echo e(route('coc.intakeCoc', $rental->id)); ?>" method="post" class="width-100" enctype="multipart/form-data">
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php echo method_field('PUT'); ?>
                                                                        <div class="row">
                                                                            <div class="col-6">
                                                                                <textarea name="description" id="description" cols="30" rows="5"><?php echo e($rental->incident); ?></textarea>
                                                                            </div>
                                                                            <div class="col-6">

                                                                                <input type="file" class="form-control mb-3" name="image_1" id="image_1" value="<?php echo e($rental->image_1); ?>" />

                                                                                <div class="form-group">
                                                                                    <label for="last_four">Last 4 of Card(s) <em>- Required *</em></label>
                                                                                    <input type="text" name="last_four" class="form-control mb-3" placeholder="Last 4 of CC">
                                                                                </div>




                                                                                <div class="row mt-5">
                                                                                    <div class="form-group width-100">
                                                                                        <input type="hidden" class="form-group" name="vehicle_type" value="<?php echo e($rental->activity_item); ?>"/>
                                                                                        <input type="hidden" class="form-group" name="internal_vehicle_id" value="
                                                                                    <?php $__currentLoopData = $rental->vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <?php if($rental->coc_vehicle == $rental_vehicle->id): ?>
                                                                                        <?php echo e($rental_vehicle->internal_vehicle_id); ?>

                                                                                        <?php endif; ?>
                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                            "/>
                                                                                        <input type="hidden" class="form-control" name="coc_status" value="Service">
                                                                                        <input type="hidden" class="form-control" name="status" value="Created">
                                                                                        <input type="hidden" class="form-control" name="rental_invoice" value="<?php echo e($rental->invoice_number); ?>">
                                                                                        <?php if(Auth::check()): ?>
                                                                                            <input type="hidden" value="<?php echo e(auth()->user()->id); ?>" name="submitted_by">
                                                                                        <?php endif; ?>
                                                                                        <input type="hidden" value="<?php echo e($dateNow); ?>" name="date_submitted">
                                                                                        <input type="hidden" class="form-control" name="rental_id" value="<?php echo e($rental->id); ?>">
                                                                                        
                                                                                        <input type="hidden" class="form-control" name="maint_active" value="1">
                                                                                        <input type="hidden" class="form-control" name="service_type" value="COC">
                                                                                        <input type="hidden" class="form-control" name="current_hours" value="
                                                                                        <?php $__currentLoopData = $rental->vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <?php if($rental->coc_vehicle == $rental_vehicle->id): ?>
                                                                                        <?php echo e($rental_vehicle->current_hours); ?>

                                                                                        <?php endif; ?>
                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                            ">
                                                                                        <input type="hidden" class="form-control" name="vehicle_id" value="
                                                                                      <?php $__currentLoopData = $rental->vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <?php if($rental->coc_vehicle == $rental_vehicle->id): ?>
                                                                                        <?php echo e($rental_vehicle->id); ?>

                                                                                        <?php endif; ?>
                                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                            ">
                                                                                        <div class="row">
                                                                                            <div class="col-12">

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <div class="row mt-2">
                                                                                
                                                                                <form action="" method="post" class="width-100">
                                                                                    <?php echo csrf_field(); ?>
                                                                                    <?php echo method_field('PUT'); ?>

                                                                                    <div class="form-group">
                                                                                        <label for="" class="hidden"></label>
                                                                                        <input type="hidden" class="form-group" name=""/>
                                                                                        <button class="btn btn-outline-primary btn-right width-100 mr-3" type="submit">Create Customer Invoice</button>
                                                                                    </div>
                                                                                </form>
                                                                                <button class="btn btn-primary width-100 btn-right" type="submit">Send to Service</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                <?php elseif($rental->status == 'Billing'): ?>
                                                                    <form action="<?php echo e(route('coc.cocComplete', $rental)); ?>" method="post" class="width-100">
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php echo method_field('PUT'); ?>

                                                                        <div class="form-group width-100">
                                                                            <label for="" class="hidden"></label>
                                                                            <input type="hidden" class="form-group" name=""/>
                                                                            <button class="btn btn-primary width-100" type="submit">Create Customer Invoice</button>
                                                                        </div>
                                                                    </form>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary btn-right btn-modal" data-dismiss="modal" aria-label="Close">Cancel </button>
                                                <form method="post" action="<?php echo e(route('coc.attachRental', $rental)); ?>" enctype="multipart/form-data">
                                                    <?php echo method_field('PUT'); ?>
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="rental" value="<?php echo e($rental->id); ?>">
                                                    <input type="hidden" class="form-control" name="image" value="<?php echo e($rental->image_1); ?>" accept="image/*">
                                                    <input type="hidden" name="maintenance" value="
                                                                       <?php $__currentLoopData = $maintenances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($maintenance->rental_invoice == $rental->invoice_number): ?>
                                                    <?php echo e($maintenance->id); ?>

                                                    <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        ">

                                                    <button class="btn btn-primary-red width-100 btn-right"
                                                            <?php $__currentLoopData = $rental->maintenances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php echo e($rental_maintenance->rental_id); ?>

                                                            <?php if($rental_maintenance->rental_invoice == $rental->invoice_number): ?>
                                                            hidden
                                                        <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    >Submit to Service</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Service Modal -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <!-- /Finalize Submit COC to Service - Rental -->

                        <!-- Submit Request to Service - Maintenance -->
                        <?php if($serviceReqAcceptCount > 0): ?>
                            <?php $__currentLoopData = $serviceReqAccept; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="coc-item">
                                    <div class="row">
                                        <a href="#" class="service-link" data-toggle="modal" data-target="#repairModal<?php echo e($maintenance->id); ?>">
                                            <div class="col-8 col-sm-2">
                                                <h6 class="mt-2">
                                                    <?php if($maintenance->vehicle_type == 'Scarab 215'): ?>
                                                        Scarab
                                                    <?php elseif($maintenance->vehicle_type == '23ft. Pontoon Boat'): ?>
                                                        Pontoon
                                                    <?php elseif($maintenance->vehicle_type == '23ft. Pontoon Boat'): ?>
                                                        Pontoon
                                                    <?php elseif($maintenance->vehicle_type == 'Renegade BC 600ETec'): ?>
                                                        Renegade
                                                    <?php elseif($maintenance->vehicle_type == 'Summit 154 SP'): ?>
                                                        Summit
                                                    <?php elseif($maintenance->vehicle_type == '14ft. Aluminum Boat'): ?>
                                                        Aluminum
                                                    <?php elseif($maintenance->vehicle_type == 'Kayak Single'): ?>
                                                        Single Kayak
                                                    <?php elseif($maintenance->vehicle_type == 'Double Kayak'): ?>
                                                        Double Kayak
                                                    <?php elseif($maintenance->vehicle_type == 'Stand Up Paddleboard'): ?>
                                                        SUP
                                                    <?php elseif($maintenance->vehicle_type == 'Segway i2'): ?>
                                                        Segway
                                                    <?php elseif($maintenance->vehicle_type == 'Spyder RT-S SE6'): ?>
                                                        Spyder
                                                    <?php elseif($maintenance->vehicle_type == 'SeaDoo'): ?>
                                                        SeaDoo
                                                    <?php else: ?>
                                                        <br>
                                                        <?php echo e($maintenance->vehicle_type); ?>


                                                    <?php endif; ?>
                                                    <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($vehicle->id == $maintenance->vehicle_id): ?>
                                                            <?php echo e($vehicle->internal_vehicle_id); ?>

                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </h6>
                                            </div>
                                            <div class="col-4 col-sm-2">
                                                <h6 class="mt-2 text-red"><?php echo e($maintenance->status); ?></h6>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <h6 class="coc-incident mt-2"><?php echo e($maintenance->description); ?></h6>
                                            </div>
                                            <div class="col-12 col-sm-2">
                                                <h6 class="mt-2 text-gray-500"><?php echo e($maintenance->service_type); ?></h6>
                                            </div>
                                            <div class="col-6 col-sm-2">
                                                <a href="#" class="btn btn-primary-red width-100 height-auto" data-toggle="modal" data-target="#repairModal<?php echo e($maintenance->id); ?>">Submit</a>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <!-- Submit Service Req Modal -->
                                <div class="modal fade" id="repairModal<?php echo e($maintenance->id); ?>" tabindex="-1" role="dialog" aria-labelledby="viewInvoice" aria-hidden="true">
                                    <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h3>Submit <span>Service Request</span></h3>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <?php if($maintenance->image == ''): ?>
                                                            <img src="<?php echo e(asset('storage/' . 'images/no-image.jpg')); ?>" alt="Service Request Image" class="img-responsive">
                                                        <?php else: ?>
                                                            <img src="<?php echo e(asset('storage/' . $maintenance->image)); ?>" alt="Service Request Image" class="img-responsive">
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="col-6">
                                                        <h6> <span class="text-white">Descripion: &nbsp; </span><?php echo e($maintenance->description); ?></h6>
                                                        <h6> <span class="text-white">Submitted By: &nbsp; </span>
                                                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($user->id == $maintenance->submitted_by): ?>
                                                                    <?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?>

                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </h6>
                                                        <h6> <span class="text-white">Submitted Date: &nbsp; </span><?php echo e(Carbon\Carbon::parse($maintenance->date_sumitted)->format('m / d / y')); ?></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary btn-right btn-modal" type="button" data-dismiss="modal">CANCEL</button>
                                                <form action="<?php echo e(route('maintenance.submitServiceReqAdmin', $maintenance)); ?>" method="post" class="width-100" enctype="multipart/form-data">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('PUT'); ?>

                                                    <div class="form-group width-100">
                                                        <input type="hidden" class="form-group" name="submitted_by" value="<?php echo e(auth()->user()->id); ?>"/>
                                                        <input type="hidden" class="form-group" name="date_submitted" value="<?php echo e($dateNow); ?>"/>
                                                        <input type="hidden" class="form-group" name="image" value="images/rentalLogo_new_square-m.png"/>
                                                        <input type="hidden" class="form-control" name="vehicle_id" value="<?php echo e($maintenance->vehicle_id); ?>">
                                                        <input type="hidden" class="form-control" name="is_active" value="1">
                                                        <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($maintenance->vehicle_id == $vehicle->id): ?>
                                                                <input type="hidden" class="form-control" name="internal_vehicle_id" value="<?php echo e($vehicle->internal_vehicle_id); ?>">
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <button class="btn btn-primary-red btn-right" type="submit">Submit to Service</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Submit Service Req Modal -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <!-- /Submit Request to Service - Maintenance -->

                        <!-- Finalize Billing - Rental -->
                        <?php if($serviceReqCocBillingCount > 0): ?>
                            <?php $__currentLoopData = $serviceReqCocBilling; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="coc-item">
                                    <div class="row">
                                        <a href="#" class="service-link" data-toggle="modal" data-target="#billingModal<?php echo e($rental->id); ?>">
                                            <div class="col-8 col-sm-2">
                                                <h6 class="mt-2">
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
                                                    <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($vehicle->id == $rental->coc_vehicle): ?>
                                                            <?php echo e($vehicle->internal_vehicle_id); ?>

                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </h6>
                                            </div>

                                            <div class="col-4 col-sm-2">
                                                <h6 class="mt-2 text-red"><?php echo e($rental->coc_status); ?></h6>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <h6 class="coc-incident mt-2"><?php echo e($rental->incident); ?></h6>
                                            </div>
                                            <div class="col-12 col-sm-2">
                                                <?php $__currentLoopData = $maintenances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($rental->invoice_number == $maintenance->rental_invoice): ?>
                                                        <h6 class="mt-2 text-gray-500"><?php echo e($maintenance->service_type); ?></h6>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                            <div class="col-6 col-sm-2">
                                                <?php if($rental->status == 'COC' && $rental->coc_status == 'Billing'): ?>
                                                    <a href="#" class="btn btn-primary width-100 height-auto" data-toggle="modal" data-target="#billingModal<?php echo e($rental->id); ?>">Billing</a>
                                                <?php endif; ?>
                                            </div>
                                        </a>
                                    </div>
                                </div>


                                <!-- Billing Modal -->
                                <div class="modal fade" id="billingModal<?php echo e($rental->id); ?>" tabindex="-1" role="dialog" aria-labelledby="viewInvoice" aria-hidden="true">
                                    <div class="modal-dialog modal-xl" role="document">
                                        <?php $__currentLoopData = $maintenances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($maintenance->rental_invoice == $rental->invoice_number): ?>
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3><span>Service Invoice: </span><?php echo e($rental->incident); ?></h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <?php if($rental->coc_image == ''): ?>
                                                                    <img src="<?php echo e(asset('storage/' . 'images/no-image.jpg')); ?>" alt="Service Request Image" class="img-responsive">
                                                                <?php else: ?>
                                                                    <img src="<?php echo e(asset('storage/' . $rental->coc_image)); ?>" alt="Service Request Image" class="img-responsive">
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
                                                                                <h6>
                                                                                    <span class="text-white">HOURS: &nbsp; </span>
                                                                                    <?php echo e($vehicle->current_hours); ?>

                                                                                </h6>
                                                                            <?php endif; ?>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        <h6> <span class="text-white">Descripion: &nbsp; </span><?php echo e($maintenance->description); ?></h6>
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
                                                        <div class="row mt-5">
                                                            <iframe src="<?php echo e(asset('storage/' . $maintenance->invoice)); ?>" style="width: 100%;height: 800px;border: none;"></iframe>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary btn-right btn-modal" type="button" data-dismiss="modal">CANCEL</button>
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
                                                    </div>
                                                </div>

                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                                <!-- /Billing Modal -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <!-- /Finalize Billing - Rental -->


                        <!-- Finalize Billing - Maintenance -->
                        <?php if($serviceReqInvoiceCount > 0): ?>
                            <?php $__currentLoopData = $serviceReqInvoice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="coc-item">
                                    <div class="row">
                                        <a href="#" class="service-link" data-toggle="modal" data-target="#viewInvoice<?php echo e($maintenance->id); ?>">
                                            <div class="col-8 col-sm-2">
                                                <h6 class="mt-2">
                                                    <?php if($maintenance->vehicle_type == 'Scarab 215'): ?>
                                                        Scarab
                                                    <?php elseif($maintenance->vehicle_type == '23ft. Pontoon Boat'): ?>
                                                        Pontoon
                                                    <?php elseif($maintenance->vehicle_type == '23ft. Pontoon Boat'): ?>
                                                        Pontoon
                                                    <?php elseif($maintenance->vehicle_type == 'Renegade BC 600ETec'): ?>
                                                        Renegade
                                                    <?php elseif($maintenance->vehicle_type == 'Summit 154 SP'): ?>
                                                        Summit
                                                    <?php elseif($maintenance->vehicle_type == '14ft. Aluminum Boat'): ?>
                                                        Aluminum
                                                    <?php elseif($maintenance->vehicle_type == 'Kayak Single'): ?>
                                                        Single Kayak
                                                    <?php elseif($maintenance->vehicle_type == 'Double Kayak'): ?>
                                                        Double Kayak
                                                    <?php elseif($maintenance->vehicle_type == 'Stand Up Paddleboard'): ?>
                                                        SUP
                                                    <?php elseif($maintenance->vehicle_type == 'Segway i2'): ?>
                                                        Segway
                                                    <?php elseif($maintenance->vehicle_type == 'Spyder RT-S SE6'): ?>
                                                        Spyder
                                                    <?php elseif($maintenance->vehicle_type == 'SeaDoo'): ?>
                                                        SeaDoo
                                                    <?php else: ?>
                                                        <br>
                                                        <?php echo e($maintenance->vehicle_type); ?>


                                                    <?php endif; ?>
                                                    <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($vehicle->id == $maintenance->vehicle_id): ?>
                                                            <?php echo e($vehicle->internal_vehicle_id); ?>

                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </h6>
                                            </div>
                                            <div class="col-4 col-sm-2">
                                                <h6 class="mt-2 text-red"><?php echo e($maintenance->status); ?></h6>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <h6 class="coc-incident mt-2"><?php echo e($maintenance->description); ?></h6>
                                            </div>
                                            <div class="col-12 col-sm-2">
                                                <h6 class="mt-2 text-gray-500"><?php echo e($maintenance->service_type); ?></h6>
                                            </div>
                                        </a>
                                        <div class="col-6 col-sm-2">
                                            
                                            <a href="#" class="btn btn-primary-red width-100 height-auto" data-toggle="modal" data-target="#viewInvoice<?php echo e($maintenance->id); ?>">Invoice</a>
                                        </div>
                                    </div>
                                </div>


                                <!-- Invoice Modal -->
                                <div class="modal fade" id="viewInvoice<?php echo e($maintenance->id); ?>" tabindex="-1" role="dialog" aria-labelledby="viewInvoice" aria-hidden="true">
                                    <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3><span>Service Invoice: </span><?php echo e($maintenance->service_type); ?></h3>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <?php if($maintenance->image == ''): ?>
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
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <h6> <span class="text-white">Descripion: &nbsp; </span><?php echo e($maintenance->description); ?></h6>
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

                                                        <?php if($maintenance->service_notes == ''): ?>

                                                        <?php else: ?>
                                                            <h6> <span class="text-white">Service Notes: &nbsp; </span> </h6>
                                                            <h6> <?php echo e($maintenance->service_notes); ?></h6>
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
                                                <div class="row mt-5">
                                                    <iframe src="<?php echo e(asset('storage/' . $maintenance->invoice)); ?>" style="width: 100%;height: 800px;border: none;"></iframe>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary btn-right btn-modal" type="button" data-dismiss="modal">CANCEL</button>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Invoice Modal -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <!-- /Finalize Billing - Maintenance -->

                        <?php if(!$serviceReqCocNewCount && !$serviceReqCocBillingCount && !$serviceReqCocServCount && !$serviceReqInvoiceCount): ?>
                            <h1 class="text-center text-gray">All Service Requests are Complete</h1>
                        <?php endif; ?>




                    </div>
                </div>
                <!-- /Service Requests -->

            </div>
            <div class="col-md-4">
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
                                            <div class="col-lg-6">
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
                                            <div class="col-lg-6">
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
                                            <div class="col-lg-6">
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
                                            <div class="col-lg-6">
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
                                            <div class="col-lg-6">
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
                                            <div class="col-lg-6">
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
    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('scripts'); ?>

    <?php $__env->stopSection(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /var/www/rentalguru.systems/rg-website/resources/views/admin/index.blade.php ENDPATH**/ ?>