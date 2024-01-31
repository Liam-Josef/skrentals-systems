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
            <h1>Cancelled Bookings</h1>
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('browser_title'); ?>
            <title>Cancelled Bookings | <?php echo e($application->name); ?></title>
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
               <h1>Cancelled Bookings</h1>
           </div>
       </div>

        <!-- Rentals Table -->
        <div class="card shadow mb-4 my-3">
            <div class="card-header py-3 text-center">
                <h6 class="m-0 font-weight-bold text-white">
                    <span style="color:transparent">SK</span>
                    <?php if(session('rental-deleted')): ?>
                        <?php echo e(session('rental-deleted')); ?>

                    <?php endif; ?>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="rentalsTodayTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>
                                <span class="visible-xs-table">&nbsp;</span>
                                <div class="row hidden-xs-flex">
                                    <div class="col-sm-1">Booking ID</div>
                                    <div class="col-sm-3">Vehicle</div>
                                    <div class="col-sm-1">Date</div>
                                    <div class="col-sm-1">First</div>
                                    <div class="col-sm-1">Last</div>
                                    <div class="col-sm-2">Email</div>
                                    <div class="col-sm-2">Phone</div>
                                    <div class="col-sm-1">Status</div>
                                </div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php $__currentLoopData = $rentals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr>
                                   <td>
                                       <a href="<?php echo e(route('rental.show', $rental)); ?>" class="table-li-link">
                                           <div class="row">
                                               <div class="col-sm-1">
                                                   <p>
                                                       <?php echo e($rental->booking_id); ?>

                                                   </p>
                                               </div>
                                               <div class="col-sm-3">
                                                   <p>
                                                           <span>
                                               <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                   <?php if($type->id == $rental->type_id): ?>
                                                       <?php echo e($type->name); ?>

                                                   <?php endif; ?>
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                          </span>
                                                   </p>
                                               </div>
                                               <div class="col-sm-1">
                                                   <p class="sm-md">
                                                       <?php echo e(\Carbon\Carbon::parse( $rental->activity_date )->format('M d' . ', '. 'Y')); ?>

                                                   </p>
                                               </div>
                                               <div class="col-sm-1">
                                                   <?php echo e($rental->first); ?>

                                                   <span class="hidden">
                                                           <?php echo e(Str::lower($rental->first)); ?>

                                                       </span>
                                               </div>
                                               <div class="col-sm-1">
                                                   <p class="xs-center">
                                                       <?php echo e($rental->last); ?>

                                                       <span class="hidden">
                                                           <?php echo e(Str::lower($rental->last)); ?>

                                                       </span>
                                                   </p>
                                               </div>
                                               <div class="col-sm-2">
                                                   <p>
                                                       <?php echo e($rental->email); ?>

                                                   </p>
                                               </div>
                                               <div class="col-sm-2">
                                                   <p>
                                                       <?php echo e($rental->phone = substr($rental->phone, 2)); ?>

                                                   </p>
                                               </div>
                                               <div class="col-sm-1">
                                                   <p>
                                                       <?php echo e($rental->status); ?>

                                                       <span class="hidden">
                                                           <?php echo e(Str::lower($rental->status)); ?>

                                                       </span>
                                                   </p>
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
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/admin/rentals/cancelled-bookings.blade.php ENDPATH**/ ?>