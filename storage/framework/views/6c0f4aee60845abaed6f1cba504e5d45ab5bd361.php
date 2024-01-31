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
        <h1> <?php if($booking->invoice_number == ''): ?>
                <?php echo e($booking->booking_id); ?>

            <?php else: ?>
                #<?php echo e($booking->invoice_number); ?>

            <?php endif; ?> - <?php echo e($booking->first); ?> <?php echo e($booking->last); ?></h1>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('browser_title'); ?>
        <title>
            <?php if($booking->invoice_number == ''): ?>
                <?php echo e($booking->booking_id); ?>

            <?php else: ?>
                #<?php echo e($booking->invoice_number); ?>

            <?php endif; ?> - <?php echo e($booking->first_name); ?> <?php echo e($booking->last_name); ?> | <?php echo e($application->name); ?>

        </title>
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
            <div class="col-sm-3">
                <a href="<?php echo e(route('rental.index')); ?>">
                   <h3>
                       <i class="fa fa-chevron-circle-left"></i> Calendar
                   </h3>
                </a>
            </div>
            <div class="col-sm-6">
                <h1 class="text-center">Booking:
                    <span>
                        <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($type->name); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       |  <?php echo e($booking->last); ?>, <?php echo e($booking->first); ?>

                    </span>
                </h1>
            </div>
            <div class="col-sm-3">
                <h1 class="text-right mt-1">

                   <?php echo e(\Carbon\Carbon::parse($booking->activity_start_date)->format('M, d, Y')); ?>

                </h1>
            </div>
        </div>


        <!-- CUSTOMER INFORMATION -->
        <div class="card mb-4 shadow">
            <div class="card-header">
                <h3 class="card-title">
                    <?php $__currentLoopData = $durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($duration->name); ?> Rental
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     <span>from</span>
                        <?php echo e(\Carbon\Carbon::parse($booking->activity_date_start)->format('h:i A')); ?>

                    <span>to</span>
                        <?php echo e(\Carbon\Carbon::parse($booking->activity_date_end)->format('h:i A')); ?>

                </h3>
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-12">
                        <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <img src="<?php echo e(asset('storage/'. $type->image)); ?>" alt="<?php echo e($type->img_alt); ?>" class="img-responsive">
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-4 mt-3">
                                <a href="#" class="btn btn-outline-primary btn-100" data-toggle="modal" data-target="#cancel<?php echo e($booking->id); ?>">Cancel Booking</a>
                            </div>
                            <div class="col-sm-4 mt-3">

                            </div>
                            <div class="col-sm-4 mt-3">
                                <a href="#" class="btn btn-outline-secondary btn-100">Edit Booking</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- /CUSTOMER INFORMATION -->



        <!-- Cancel Booking Modal -->
        <div class="modal fade" id="cancel<?php echo e($booking->id); ?>" tabindex="-1" role="dialog" aria-labelledby="cancelModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg mt-0" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Cancel: <?php echo e($booking->last); ?></h3>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <div class="row width-100">
                            <div class="col-6">
                                <button class="btn btn-secondary btn-100" type="button" data-dismiss="modal">close</button>
                            </div>
                            <div class="col-6">
                                <form action="<?php echo e(route('booking.cancel', $booking)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field("PUT"); ?>
                                    <button class="btn btn-primary btn-100" type="submit">Cancel Booking</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Cancel Booking Modal -->



    <?php $__env->stopSection(); ?>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/admin/rentals/booking.blade.php ENDPATH**/ ?>