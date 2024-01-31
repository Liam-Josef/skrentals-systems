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
            <h1>Service</h1>
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('browser_title'); ?>
            <title>Service | <?php echo e($application->name); ?></title>
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
                <h1>Service <span class="small text-gray-700">(This is the View the Service Writer see's)</span></h1>

            </div>
        </div>

        <div class="row mt-3 mb-5">
            <div class="col-12">
                <div class="card shadow">
                    <div class="row">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered li-link-table" id="maintRentalTable">
                                    <thead>
                                    <tr>
                                        <th>
                                            <span class="visible-xs-table">&nbsp;</span>
                                            <div class="row hidden-xs-flex">
                                                <div class="col-sm-1">Image</div>
                                                <div class="col-sm-1">Submitted</div>
                                                <div class="col-sm-2">Vehicle</div>
                                                <div class="col-sm-2">Description</div>
                                                <div class="col-sm-1">R / O</div>
                                                <div class="col-sm-2">Submitted By</div>
                                                <div class="col-sm-1 text-center pr-0">Status</div>
                                            </div>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $activeMaintenance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <a href="#" class="table-li-link" data-toggle="modal" data-target="#maintModal<?php echo e($maintenance->id); ?>">
                                                    <div class="row">
                                                        <div class="col-sm-1">
                                                            <?php if($maintenance->image == ''): ?>
                                                                <img class="img-responsive" src="<?php echo e(asset('storage/images/no-image.jpg')); ?>" height="auto" width="100%" />
                                                            <?php else: ?>
                                                                <img class="img-responsive" src="<?php echo e(asset('storage/' . $maintenance->image)); ?>" height="auto" width="100%" />
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <p>
                                                                <?php echo e(\Carbon\Carbon::parse( $maintenance->date )->format('m/d/y')); ?>

                                                            </p>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <p class="sm-md">
                                                                <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if($maintenance->vehicle_id == $vehicle->id): ?>
                                                                        <?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?>

                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <?php echo e($maintenance->description); ?>

                                                        </div>
                                                        <div class="col-sm-1">
                                                            <p class="xs-center">
                                                                <a href="#" data-toggle="modal" data-target="#viewInvoice<?php echo e($maintenance->id); ?>"><?php echo e($maintenance->service_invoice); ?></a>
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-1 pr-0">
                                                            <p>
                                                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if($maintenance->submitted_by == $user->id): ?>
                                                                        <?php echo e($user->firstname); ?>

                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-div" style="text-align: right">
                                                                <a href="#" class="table-li-link" data-toggle="modal" data-target="#maintModal<?php echo e($maintenance->id); ?>">

                                                                    <?php if($maintenance->status == 'Created'): ?>
                                                                        <h4 class="text-red">Need to Accept</h4>
                                                                    <?php elseif($maintenance->invoice == ''): ?>
                                                                        <?php if($maintenance->status == 'Rejected'): ?>
                                                                            &nbsp;
                                                                        <?php else: ?>
                                                                            <h4 class="text-gray-700">Upload Invoice</h4>
                                                                        <?php endif; ?>
                                                                    <?php elseif($maintenance->status == 'Invoice Submitted'): ?>
                                                                        <h4 class="text-gray-600">R/O Waiting Approval</h4>
                                                                    <?php else: ?>
                                                                        <h4 class="text-gray-400">Completed</h4>
                                                                    <?php endif; ?>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php $__currentLoopData = $maintenances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Maint Modal -->
            <div class="modal fade" id="maintModal<?php echo e($maintenance->id); ?>" tabindex="-1" role="dialog" aria-labelledby="cocIntake" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3>
                                <span>
                                    <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($maintenance->vehicle_id == $vehicle->id): ?>
                                            <?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?>

                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </span>
                                | <?php echo e($maintenance->service_type); ?>


                            </h3>
                            <?php if($maintenance->service_invoice != ''): ?>
                                <span>R / O: <?php echo e($maintenance->service_invoice); ?> </span>
                                <?php else: ?>
                            <?php endif; ?>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <?php if($maintenance->image == ''): ?>
                                    <?php else: ?>
                                        <img class="img-responsive" src="<?php echo e(asset('storage/' . $maintenance->image)); ?>" height="auto" width="100%" />
                                    <?php endif; ?>
                                </div>
                                <div class="col-sm-6">
                                    <h6> <span class="text-white">Status: &nbsp; </span><?php echo e($maintenance->status); ?></h6>
                                    <?php if($maintenance->rental_invoice == ''): ?>
                                        <?php else: ?>
                                            <h6> <span class="text-white">Rental Invoice: &nbsp; </span><?php echo e($maintenance->rental_invoice); ?></h6>
                                    <?php endif; ?>
                                    <h6> <span class="text-white">Request Type: &nbsp; </span><?php echo e($maintenance->service_type); ?></h6>
                                    <h6> <span class="text-white">VIN: &nbsp; </span>
                                        <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($vehicle->id == $maintenance->vehicle_id): ?>
                                                <?php echo e($vehicle->vin); ?>

                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </h6>
                                    <h6> <span class="text-white">Vehicle Location: &nbsp; </span>
                                        <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($vehicle->id == $maintenance->vehicle_id): ?>
                                                <?php echo e($vehicle->location); ?>

                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </h6>
                                    <h6> <span class="text-white">Description: &nbsp; </span><?php echo e($maintenance->description); ?></h6>

                                    <br />

                                    <h6> <span class="text-white">Hours: &nbsp; </span>
                                        <?php if($maintenance->service_hours == ''): ?>
                                            <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($vehicle->id == $maintenance->vehicle_id): ?>
                                                    <?php echo e($vehicle->current_hours); ?>

                                                    <br>
                                                    <small>( Vehicle Hours at last check on <?php echo e(\Carbon\Carbon::parse($vehicle->hours_updated)->format('M d, Y')); ?> )</small>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php elseif($maintenance->service_hours != ''): ?>
                                            <?php echo e($maintenance->service_hours); ?>

                                        <?php else: ?>
                                            No Hours Recorded...
                                        <?php endif; ?>
                                    </h6>

                                    <br />

                                    <h6> <span class="text-white">Request Submitted: &nbsp; </span><?php echo e(\Carbon\Carbon::parse($maintenance->date_submitted)->format('M d, Y')); ?></h6>
                                    <h6> <span class="text-white">Submitted By: &nbsp; </span>
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($maintenance->submitted_by == $user->id): ?>
                                                <span><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></span>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </h6>
                                    <?php if($maintenance->denied_by != ''): ?>
                                        <h6> <span class="text-white">Request Rejected: &nbsp; </span><?php echo e(\Carbon\Carbon::parse($maintenance->deny_date)->format('M d, Y')); ?>/h6>
                                        <h6> <span class="text-white">Rejected By: &nbsp; </span>
                                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($user->id == $maintenance->denied_by): ?>
                                                    <h5><span><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></span></h5>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </h6>
                                        <h6> <span class="text-white">Rejection Explaination: &nbsp; </span><?php echo e($maintenance->serv_deny_reason); ?></h6>
                                    <?php endif; ?>

                                    <?php if($maintenance->invoice): ?>
                                        <h6> <span class="text-white">Date R/O Submitted: &nbsp; </span><span><?php echo e(\Carbon\Carbon::parse($maintenance->date_invoiced)->format('M d, Y')); ?></span></h6>
                                        <h6> <span class="text-white">R/O Submitted By: &nbsp; </span>
                                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($maintenance->invoiced_by == $user->id): ?>
                                                    <span><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></span>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </h6>
                                    <?php endif; ?>

                                    <?php if($maintenance->status == 'Completed'): ?>

                                        <h6> <span class="text-white">Description: &nbsp; </span><?php echo e($maintenance->description); ?></h6>
                                        <h6> <span class="text-white">Date Completed: &nbsp; </span><?php echo e(\Carbon\Carbon::parse($maintenance->date_completed)->format('M d, Y')); ?></h6>
                                        <h6> <span class="text-white">Invoice Accepted By: &nbsp; </span>
                                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($maintenance->approved_by == $user->id): ?>
                                                    <span><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></span>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </h6>
                                    <?php endif; ?>

                                    <div class="row mt-5">
                                        <div class="col-12">
                                            <?php if($maintenance->status == 'Created'): ?>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h5>Accept Service Job?</h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <form action="<?php echo e(route('maintenance.acceptMaintReqAdmin', $maintenance)); ?>" method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>
                                                            <div class="form-group width-100">
                                                                <button type="submit" class="btn btn-primary width-100 p-3">Yes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="col-6">
                                                        <a href="#" class="btn btn-secondary width-100 p-3" data-dismiss="modal" data-toggle="modal" data-target="#reject_modal<?php echo e($maintenance->id); ?>">No</a>
                                                    </div>
                                                </div>
                                            <?php endif; ?>


                                            <?php if($maintenance->status == 'In Service'): ?>
                                                <form action="<?php echo e(route('maintenance.attachInvoiceAdmin', $maintenance)); ?>" method="post" enctype="multipart/form-data">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('PUT'); ?>
                                                    <div class="form-group">
                                                        <label for="service_notes"><h5><span>Service Notes:</span></h5></label>
                                                        <textarea name="service_notes" id="service_notes" cols="30" rows="5"><?php echo e($maintenance->service_notes); ?></textarea>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <label for="service_invoice"><h5><span>R / O</span></h5></label>
                                                            <input type="text" class="form-control" name="service_invoice" value="<?php echo e($maintenance->service_invoice); ?>">
                                                        </div>
                                                        <div class="col-8">
                                                            <label for="invoice"><h5><span>Upload Invoice</span> - <small><?php echo e($maintenance->service_invoice); ?>.pdf (required)</small></h5></label>
                                                            <input type="file" class="form-control" name="invoice">
                                                        </div>
                                                    </div>
                                                    <input type="hidden" class="form-control" name="invoiced_by" value="<?php echo e(auth()->user()->id); ?>">
                                                    <input type="hidden" class="form-control" name="date_invoiced" value="<?php echo e($dateNow); ?>">
                                                    <button type="submit" class="btn btn-primary width-100 p-3 mt-3">Attach Invoice</button>
                                                </form>
                                            <?php endif; ?>

                                            <?php if($maintenance->status == 'Completed'): ?>
                                                <form action="<?php echo e(route('maintenance.updateInvoiceAdmin', $maintenance)); ?>" method="post" enctype="multipart/form-data">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('PUT'); ?>
                                                    <div class="form-group">
                                                        <label for="service_notes"><h5><span>Service Notes:</span></h5> </label>
                                                        <textarea name="service_notes" id="service_notes" cols="30" rows="5"><?php echo e($maintenance->service_notes); ?></textarea>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <label for="service_invoice"><h5><span>R / O</span></h5> </label>
                                                            <input type="text" class="form-control" name="service_invoice" value="<?php echo e($maintenance->service_invoice); ?>">
                                                        </div>
                                                        <div class="col-8">
                                                            <label for="invoice"><h5><span>Upload Invoice</span>- <small><?php echo e($maintenance->service_invoice); ?>.pdf</small></h5></label>
                                                            <input type="file" class="form-control" name="invoice">
                                                        </div>
                                                    </div>
                                                    <input type="hidden" class="form-control" name="invoiced_by" value="<?php echo e(auth()->user()->id); ?>">
                                                    <input type="hidden" class="form-control" name="date_invoiced" value="<?php echo e($dateNow); ?>">
                                                    <button type="submit" class="btn btn-primary width-100 p-3 mt-3">Update</button>
                                                </form>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <?php if($maintenance->invoiced_by != ''): ?>
                                <div class="row mt-5">
                                    <iframe src="<?php echo e(asset('storage/' . $maintenance->invoice)); ?>" style="width: 100%;height: 800px;border: none;"></iframe>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Maint Modal -->

            <!-- Service Reject Modal -->
            <?php $__currentLoopData = $maintenances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="modal fade" id="reject_modal<?php echo e($maintenance->id); ?>" tabindex="-1" role="dialog" aria-labelledby="viewInvoice" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">

                                <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($vehicle->id == $maintenance->vehicle_id): ?>
                                        <h3>Deny Request for: <span><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></span></h3>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <form method="post" action="<?php echo e(route('maintenance.reqDeny', $maintenance)); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <?php if($maintenance->image == ''): ?>
                                                <img class="img-responsive" src="<?php echo e(asset('storage/images/no-image.jpg')); ?>" height="auto" width="100%" />
                                            <?php else: ?>
                                                <img class="img-responsive" src="<?php echo e(asset('storage/' . $maintenance->image)); ?>" height="auto" width="100%" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="serv_deny_reason">
                                                    <h3 class="mt-3">Rejection Explanation</h3>
                                                </label>
                                                <textarea class="form-control" name="serv_deny_reason" id="serv_deny_reason" width="100%" rows="10" placeholder="Enter reason for denial"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" class="form-control" name="denied_by" value="<?php echo e(auth()->user()->id); ?>">
                                    <input type="hidden" class="" id="status" name="status" value="Rejected">
                                    <input type="hidden" class="" id="deny_date" name="deny_date" value="<?php echo e($dateNow); ?>">
                                    <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancel </button>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- /Service Reject Modal -->

            <!-- View Invoice Modal -->
            <div class="modal fade" id="viewInvoice<?php echo e($maintenance->id); ?>" tabindex="-1" role="dialog" aria-labelledby="viewInvoice" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">

                            <h3>
                                <span>R / O: <?php echo e($maintenance->service_invoice); ?> </span>
                                | <?php echo e($maintenance->service_type); ?>

                                <span> |
                                    <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($maintenance->vehicle_id == $vehicle->id): ?>
                                            <?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?>

                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </span>
                            </h3>

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
                                    <h6> <span class="text-white">R / O &nbsp; </span><?php echo e($maintenance->service_invoice); ?></h6>
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
                                        <h6> <span class="text-white">R/O Submitted: &nbsp; </span><?php echo e(Carbon\Carbon::parse($maintenance->date_invoiced)->format('m / d / y')); ?></h6>
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
                                        <h6> <span class="text-white">R/O Submitted: &nbsp; </span><?php echo e(Carbon\Carbon::parse($maintenance->date_invoiced)->format('m / d / y')); ?></h6>
                                    <?php endif; ?>

                                </div>
                            </div>
                            <div class="row mt-3">
                                <iframe src="<?php echo e(asset('storage/' . $maintenance->invoice)); ?>" style="width: 100%;height: 800px;border: none;"></iframe>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary btn-modal" type="button" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Invoice Modal -->
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
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/admin/maintenance/service.blade.php ENDPATH**/ ?>