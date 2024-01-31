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
                <h1>Employee Profile - <?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></h1>
            <?php $__env->stopSection(); ?>

            <?php $__env->startSection('browser_title'); ?>
                <title>Employee Profile - <?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?> | <?php echo e($application->name); ?></title>
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
                <h1>
                    Employee Profile &nbsp;
                    <span>
                        <small><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></small>
                        <small class="text-gray-700">
                            (
                             <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($user->roles->contains($role)): ?>
                                    <?php if($role->name == 'Office' && $role->name != 'Dock'): ?>
                                        <?php echo e($role->name); ?>&nbsp;
                                        <?php elseif($role->name == 'Dock' && $role->name != 'Office'): ?>
                                        <?php echo e($role->name); ?>&nbsp;
                                    <?php elseif($role->name == 'Admin'): ?>
                                        <?php echo e($role->name); ?>&nbsp;
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            )
                        </small>
                    </span>
                </h1>
            </div>
        </div>

        <div class="row">
            <!-- Main Content -->
            <div class="col-sm-9">

                <div class="card format shadow mt-4 mb-4">
                    <div class="card-header">
                        <h3>Employee Information</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-4">
                                        <h4 class="lighter-title">Phone</h4>
                                    </div>
                                    <div class="col-8">
                                        <a href="tel:<?php echo e($user->phone); ?>" class="visible-xs">
                                            <h4 class="lighter">
                                                <?php echo e($user->phone); ?>

                                            </h4>
                                        </a>
                                        <h4 class="lighter hidden-xs">
                                            <?php echo e($user->phone); ?>

                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-3">
                                        <h4 class="lighter-title">Email</h4>
                                    </div>
                                    <div class="col-8 p-0">
                                        <a href="mailto:<?php echo e($user->email); ?>">
                                            <h4 class="lighter">
                                                <?php echo e($user->email); ?>

                                            </h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <?php if($rentalCoc or $rentalCocCleared): ?>
                    <div class="card format shadow mb-4">
                        <div class="card-header">
                            <h3>Change of Conditions</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="cocRentalTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Activity Item</th>
                                        <th>Activity Date</th>
                                        <th>COC Incident</th>
                                        <th><?php echo e($user->firstname); ?>'s Interaction</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $rentals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($rental->status == 'COC' && $rental->launched_by == $user->id): ?>
                                            <tr>
                                                <td class="no-border-right"><img src="<?php echo e(asset('storage/' . $rental->image_1)); ?>" class="img-table"></td>
                                                <td class="no-border-right">
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
                                                </td>
                                                <td class="no-border-right"><?php echo e(\Carbon\Carbon::parse( $rental->activity_date )->format('M d' . ', '. 'Y')); ?></td>
                                                <td class="no-border-right"><?php echo e($rental->incident); ?></td>
                                                <td class="no-border-right">
                                                    <?php if($rental->launched_by == $user->id): ?>
                                                        Launched
                                                        <?php else: ?>
                                                            Checked In
                                                    <?php endif; ?>
                                                </td>
                                                <td class="no-border-right"><?php echo e($rental->coc_status); ?></td>
                                                <td class="">
                                                    <a href="<?php echo e(route('rental.show', $rental)); ?>" class="btn btn-primary">View</a>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <?php $__currentLoopData = $rentals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($rental->status == 'COC' && $rental->cleared_by == $user->id): ?>
                                            <tr>
                                                <td class="no-border-right"><img src="<?php echo e(asset('storage/' . $rental->image_1)); ?>" class="img-table"></td>
                                                <td class="no-border-right">
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
                                                </td>
                                                <td class="no-border-right"><?php echo e(\Carbon\Carbon::parse( $rental->activity_date )->format('M d' . ', '. 'Y')); ?></td>
                                                <td class="no-border-right"><?php echo e($rental->incident); ?></td>
                                                <td class="no-border-right">
                                                    <?php if($rental->cleared_by == $user->id): ?>
                                                        Cleared
                                                    <?php else: ?>
                                                        Checked_In
                                                    <?php endif; ?>
                                                </td>
                                                <td class="no-border-right"><?php echo e($rental->coc_status); ?></td>
                                                <td class="">
                                                    <a href="<?php echo e(route('rental.show', $rental)); ?>" class="btn btn-primary">View</a>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <!-- /Main Content -->

            <!-- Sidebar -->
            <div class="col-sm-3">

                <div class="card format shadow card-dark text-center mb-4">
                    <div class="card-header">
                        <h4>Rentals Checked In</h4>
                    </div>
                    <div class="card-body">
                        <?php if($rentalCheckedIn): ?>
                             <h1 class="text-white"><?php echo e($rentalCheckedIn); ?></h1>
                        <?php else: ?>
                             <h1 class="text-white">0</h1>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="card format shadow card-dark text-center mb-4">
                    <div class="card-header">
                        <h4>Rentals Launched</h4>
                    </div>
                    <div class="card-body">
                        <?php if($rentalLaunched): ?>
                            <h1 class="text-white"><?php echo e($rentalLaunched); ?></h1>
                        <?php else: ?>
                            <h1 class="text-white">0</h1>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="card format shadow card-dark text-center mb-4">
                    <div class="card-header">
                        <h4>Rentals Cleared</h4>
                    </div>
                    <div class="card-body">
                        <?php if($rentalCleared): ?>
                            <h1 class="text-white"><?php echo e($rentalCleared); ?></h1>
                        <?php else: ?>
                            <h1 class="text-white">0</h1>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="card format shadow card-dark text-center mb-4">
                    <div class="card-header">
                        <h4>Launched COC's</h4>
                    </div>
                    <div class="card-body">
                        <?php if($rentalCoc): ?>
                            <h1 class="text-white"><?php echo e($rentalCoc); ?></h1>
                        <?php else: ?>
                            <h1 class="text-white">0</h1>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="card format shadow card-dark text-center mb-4">
                    <div class="card-header">
                        <h4>Cleared COC's</h4>
                    </div>
                    <div class="card-body">
                        <?php if($rentalClearCoc): ?>
                            <h1 class="text-white"><?php echo e($rentalClearCoc); ?></h1>
                        <?php else: ?>
                            <h1 class="text-white">0</h1>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
            <!-- /Sidebar -->
        </div>

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
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/admin/users/profile.blade.php ENDPATH**/ ?>