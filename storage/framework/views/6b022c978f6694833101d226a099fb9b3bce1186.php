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
            <h1>Active COC's</h1>
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('browser_title'); ?>
            <title>Active COC's | <?php echo e($application->name); ?></title>
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
                   <h1>Active COC's</h1>
               </div>
           </div>

            <!-- Rentals Table -->
            <div class="card my-3 shadow">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered li-link-table" id="maintRentalTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>
                                                <span class="visible-xs-table">&nbsp;</span>
                                                <div class="row hidden-xs-flex">
                                                    <div class="col-sm-1">Image</div>
                                                    <div class="col-sm-1">Vehicle</div>
                                                    <div class="col-sm-1">Date</div>
                                                    <div class="col-sm-2">Incident</div>
                                                    <div class="col-sm-1">Last Name</div>
                                                    <div class="col-sm-3">Email / Phone</div>
                                                    <div class="col-sm-1 text-center pr-0">Status</div>
                                                    <div class="col-sm-1 pl-0">&nbsp;</div>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $rentalNew; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($rental->status == 'COC' && $rental->coc_status == 'New'): ?>
                                            <tr>
                                                <td>
                                                    <a href="<?php echo e(route('rental.show', $rental)); ?>" class="table-li-link">
                                                        <div class="row">
                                                            <div class="col-sm-1">
                                                                <img class="img-responsive" src="<?php echo e(asset('storage/' . $rental->image_1)); ?>" height="auto" width="100%" />
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <p class="sm-lg">
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
                                                            <div class="col-sm-1">
                                                                <p>
                                                                    <?php echo e(\Carbon\Carbon::parse( $rental->activity_date )->format('m/d/y')); ?>

                                                                </p>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <p>
                                                                    <?php echo e($rental->incident); ?>

                                                                </p>
                                                            </div>
                                                            <div class="col-sm-1">
                                                               <p class="sm-md">
                                                                   <?php echo e($rental->last_name); ?>

                                                               </p>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="xs-center">
                                                                    <?php echo e($rental->phone); ?> <br />
                                                                    <a href="mailto:<?php echo e($rental->email); ?>" class="text-link"><?php echo e($rental->email); ?></a>
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-1 pr-0">
                                                                <p>
                                                                    <span class="visible-xs text-center">Status: &nbsp; </span><span class="sm-md text-center"><?php echo e($rental->coc_status); ?></span>
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-2 pl-0">
                                                                <a href="#" class="btn btn-primary-red width-100 height-auto" data-toggle="modal" data-target="#cocIntake<?php echo e($rental->id); ?>">Intake</a>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <?php $__currentLoopData = $rentalService; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($rental->status == 'COC' && $rental->coc_status == 'Service'): ?>
                                            <tr>
                                                <td>
                                                    <a href="<?php echo e(route('rental.show', $rental)); ?>" class="table-li-link">
                                                        <div class="row">
                                                            <div class="col-sm-1">
                                                                <img class="img-responsive" src="<?php echo e(asset('storage/' . $rental->image_1)); ?>" height="auto" width="100%" />
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <p class="sm-lg">
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
                                                            <div class="col-sm-1">
                                                                <p>
                                                                    <?php echo e(\Carbon\Carbon::parse( $rental->activity_date )->format('m/d/y')); ?>

                                                                </p>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <p>
                                                                    <?php echo e($rental->incident); ?>

                                                                </p>
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <p class="sm-md">
                                                                    <?php echo e($rental->last_name); ?>

                                                                </p>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="xs-center">
                                                                    <?php echo e(substr($rental->phone, 2)); ?> <br />
                                                                    <a href="mailto:<?php echo e($rental->email); ?>" class="text-link"><?php echo e($rental->email); ?></a>
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-1 pr-0">
                                                                <p>
                                                                    <span class="visible-xs text-center">Status: &nbsp; </span><span class="sm-md text-center"><?php echo e($rental->coc_status); ?></span>
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-2 pl-0">

                                                                    <form method="post" action="<?php echo e(route('coc.attachRental', $rental)); ?>">
                                                                        <?php echo method_field('PUT'); ?>
                                                                        <?php echo csrf_field(); ?>
                                                                        <input type="hidden" name="rental" value="<?php echo e($rental->id); ?>">
                                                                        <input type="hidden" class="form-control" name="image" value="<?php echo e($rental->image_1); ?>">
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


                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <?php $__currentLoopData = $rentalInvoice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($rental->status == 'COC' && $rental->coc_status == 'Invoice Submitted'): ?>
                                            <tr>
                                                <td>
                                                    <a href="<?php echo e(route('rental.show', $rental)); ?>" class="table-li-link">
                                                        <div class="row">
                                                            <div class="col-sm-1">
                                                                <img class="img-responsive" src="<?php echo e(asset('storage/' . $rental->image_1)); ?>" height="auto" width="100%" />
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <p class="sm-lg">
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
                                                            <div class="col-sm-1">
                                                                <p>
                                                                    <?php echo e(\Carbon\Carbon::parse( $rental->activity_date )->format('m/d/y')); ?>

                                                                </p>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <p>
                                                                    <?php echo e($rental->incident); ?>

                                                                </p>
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <p class="sm-md">
                                                                    <?php echo e($rental->last_name); ?>

                                                                </p>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="xs-center">
                                                                    <?php echo e($rental->phone); ?> <br />
                                                                    <a href="mailto:<?php echo e($rental->email); ?>" class="text-link"><?php echo e($rental->email); ?></a>
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-1 pr-0">
                                                                <p>
                                                                    <span class="visible-xs text-center">Status: &nbsp; </span><span class="sm-md text-center"><?php echo e($rental->coc_status); ?></span>
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-2 pl-0">
                                                                <a href="#" class="btn btn-primary width-100 height-auto" data-toggle="modal" data-target="#viewInvoice<?php echo e($rental->id); ?>">Invoice</a>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <?php $__currentLoopData = $rentalBilling; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($rental->status == 'COC' && $rental->coc_status == 'Billing'): ?>
                                            <tr>
                                                <td>
                                                    <a href="<?php echo e(route('rental.show', $rental)); ?>" class="table-li-link">
                                                        <div class="row">
                                                            <div class="col-sm-1">
                                                                <img class="img-responsive" src="<?php echo e(asset('storage/' . $rental->image_1)); ?>" height="auto" width="100%" />
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <p class="sm-lg">
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
                                                            <div class="col-sm-1">
                                                                <p>
                                                                    <?php echo e(\Carbon\Carbon::parse( $rental->activity_date )->format('m/d/y')); ?>

                                                                </p>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <p>
                                                                    <?php echo e($rental->incident); ?>

                                                                </p>
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <p class="sm-md">
                                                                    <?php echo e($rental->last_name); ?>

                                                                </p>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="xs-center">
                                                                    <?php echo e($rental->phone); ?> <br />
                                                                    <a href="mailto:<?php echo e($rental->email); ?>" class="text-link"><?php echo e($rental->email); ?></a>
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-1 pr-0">
                                                                <p>
                                                                    <span class="visible-xs text-center">Status: &nbsp; </span><span class="sm-md text-center"><?php echo e($rental->coc_status); ?></span>
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-2 pl-0">
                                                                <a href="#" class="btn btn-primary-red width-100 height-auto" data-toggle="modal" data-target="#finalize<?php echo e($rental->id); ?>">Complete</a>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        <?php $__currentLoopData = $rentals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($rental->status == 'COC'): ?>
                <!-- COC Intake Modal -->
                <div class="modal fade" id="cocIntake<?php echo e($rental->id); ?>" tabindex="-1" role="dialog" aria-labelledby="cocIntake" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3><span>Intake: </span>Change of Condition <span class="small">| <?php echo e($rental->last_name); ?></span></h3>
                            </div>
                            <div class="modal-body">

                                <form action="<?php echo e(route('coc.intakeCoc', $rental->id)); ?>" method="post" class="width-100" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <div class="row">
                                        <div class="col-6">
                                            <h4> <span class="lighter text-white">#<?php echo e($rental->invoice_number); ?></span> <small><?php echo e($rental->activity_item); ?></small></h4>
                                            <textarea name="description" id="description" cols="30" rows="5"><?php echo e($rental->incident); ?></textarea>
                                            <input type="file" class="form-control" name="image_1" id="image_1" value="<?php echo e($rental->image_1); ?>" />
                                        </div>
                                        <div class="col-6">
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
                                                    <input type="hidden" class="form-control" name="vehicle_id" value="
                                                        <?php $__currentLoopData = $rental->vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($rental->coc_vehicle == $rental_vehicle->id): ?>
                                                               <?php echo e($rental_vehicle->id); ?>

                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        ">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <input type="text" name="last_four" class="form-control" placeholder="Last 4 of CC">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button class="btn btn-primary width-100" type="submit">Send to Service</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                
                                                <form action="" method="post" class="width-100">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('PUT'); ?>

                                                    <div class="form-group">
                                                        <label for="" class="hidden"></label>
                                                        <input type="hidden" class="form-group" name=""/>
                                                        <button class="btn btn-outline-primary btn-right width-100" type="submit">Create Customer Invoice</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /COC Intake Modal -->

                <!-- Invoice Modal -->
                <div class="modal fade" id="viewInvoice<?php echo e($rental->id); ?>" tabindex="-1" role="dialog" aria-labelledby="viewInvoice" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3><span>Service Invoice: </span>Change of Condition</h3>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-1">
                                        <h4 class="lighter text-white">#<?php echo e($rental->invoice_number); ?></h4>
                                    </div>
                                    <div class="col-8 col-md-2">
                                        <h4><?php echo e($rental->activity_item); ?></h4>
                                    </div>
                                    <div class="col-2">
                                        <h4 class="text-white">
                                           <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($rental->coc_vehicle == $vehicle->id): ?>
                                                    <?php echo e($vehicle->internal_vehicle_id); ?>

                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </h4>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="row">
                                            <div class="col-2">
                                                <h4 class="lighter"><?php echo e($rental->last_name); ?></h4>
                                            </div>
                                            <div class="col-10">
                                                <h4 class="lighter text-white text-right"><?php echo e(substr($rental->phone, 2)); ?> | <?php echo e($rental->email); ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                   <?php $__currentLoopData = $maintenances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <?php if($maintenance->rental_invoice == $rental->invoice_number): ?>
                                            <iframe src="<?php echo e(asset('storage/' . $maintenance->invoice)); ?>" style="width: 100%;height: 800px;border: none;"></iframe>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary btn-right btn-modal" type="button" data-dismiss="modal">CANCEL</button>
                                <?php $__currentLoopData = $maintenances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($maintenance->rental_invoice == $rental->invoice_number): ?>
                                        <?php if($maintenance->status !== 'Completed'): ?>
                                            <form action="<?php echo e(route('coc.acceptInvoice', $rental)); ?>" method="post" class="width-100">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('PUT'); ?>

                                                <div class="form-group width-100">
                                                    <label for="" class="hidden"></label>
                                                    <input type="hidden" class="form-group" name="approved_by" value="<?php echo e(auth()->user()->id); ?>"/>
                                                    <input type="hidden" class="form-group" name="date_approved" value="<?php echo e($dateNow); ?>"/>
                                                    <button class="btn btn-primary btn-modal btn-right" type="submit">Accept Invoice & Close</button>
                                                </div>
                                            </form>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Invoice Modal -->

                <!-- Finalize Modal -->
                <div class="modal fade" id="finalize<?php echo e($rental->id); ?>" tabindex="-1" role="dialog" aria-labelledby="finalize" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3><span>Finalize: </span>Change of Condition</h3>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-6">
                                        <h4 class="lighter text-white">#<?php echo e($rental->invoice_number); ?></h4>
                                        <h4><?php echo e($rental->activity_item); ?></h4>
                                        <h4 class="lighter"><?php echo e($rental->last_name); ?></h4>
                                    </div>
                                    <div class="col-6">
                                        <div class="row">
                                            
                                            <form action="<?php echo e(route('coc.cocComplete', $rental)); ?>" method="post" class="width-100">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('PUT'); ?>

                                                <div class="form-group width-100">
                                                    <label for="" class="hidden"></label>
                                                    <input type="hidden" class="form-group" name=""/>
                                                    <button class="btn btn-primary width-100" type="submit">Create Customer Invoice</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Finalize Modal -->
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php $__env->stopSection(); ?>

        <?php $__env->startSection('sidebar'); ?>

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
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/admin/coc/current.blade.php ENDPATH**/ ?>