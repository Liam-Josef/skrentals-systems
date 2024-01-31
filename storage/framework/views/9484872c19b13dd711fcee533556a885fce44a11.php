<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.office-master','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('office-master'); ?>
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
                <h1>Rental History</h1>
            <?php $__env->stopSection(); ?>

            <?php $__env->startSection('browser_title'); ?>
                <title>Rental History | <?php echo e($application->name); ?></title>
            <?php $__env->stopSection(); ?>

            <?php $__env->startSection('app_name'); ?>
                <?php echo e($application->name); ?>

            <?php $__env->stopSection(); ?>

        <?php $__env->startSection('favicon'); ?>
            <?php echo e(asset('storage/'. $application->favicon)); ?>

        <?php $__env->stopSection(); ?>

            <?php $__env->startSection('logo-square-1'); ?>
                <?php echo e(asset('storage/'. $application->logo_square_1)); ?>

            <?php $__env->stopSection(); ?>

            <?php $__env->startSection('logo-square-2'); ?>
                <?php echo e(asset('storage/'. $application->logo_square_2)); ?>

            <?php $__env->stopSection(); ?>

            <?php $__env->startSection('logo-horizontal-1'); ?>
                <?php echo e(asset('storage/'. $application->logo_horizontal_1)); ?>

            <?php $__env->stopSection(); ?>

            <?php $__env->startSection('logo-horizontal-2'); ?>
                <?php echo e(asset('storage/'. $application->logo_horizontal_1)); ?>

            <?php $__env->stopSection(); ?>

            <?php $__env->startSection('navbar-operations'); ?>
                <?php if($application->operations_name == ''): ?>
                    Operations
                <?php else: ?>
                    <?php echo e($application->operations_name); ?>

                <?php endif; ?>
            <?php $__env->stopSection(); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    <?php $__env->startSection('content'); ?>

        <!-- Rentals Table -->
        <div class="card my-3 shadow mb-4">
            <div class="row">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered li-link-table" id="maintRentalTable">
                            <thead>
                                <tr>
                                    <th>
                                        <span class="visible-xs-table">&nbsp;</span>
                                        <div class="row hidden-xs-flex">
                                            <div class="col-sm-2 col-md-1">Invoice</div>
                                            <div class="col-sm-2 col-md-1">Vehicle</div>
                                            <div class="col-sm-2">Date</div>
                                            <div class="hidden-sm col-md-1">Last Name</div>
                                            <div class="col-sm-3 col-md-2">Email</div>
                                            <div class="col-sm-2">Phone</div>
                                            <div class="col-sm-1 text-center pr-0">Status</div>
                                            <div class="hidden-sm col-md-2 text-center pr-0">Customer Notes</div>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $__currentLoopData = $rentals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <a href="<?php echo e(route('office.rentalProfile', $rental)); ?>" class="table-li-link">
                                                <div class="row">
                                                    <div class="col-6 col-sm-2 col-md-1">
                                                        <p>
                                                            #<?php echo e($rental->invoice_number); ?>

                                                        </p>
                                                    </div>
                                                    <div class="col-6 col-sm-2 col-md-1">
                                                        <p class="sm-md">
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
                                                    <div class="col-sm-2">
                                                        <p>
                                                            <?php echo e(\Carbon\Carbon::parse( $rental->activity_date )->format('M d' . ', '. 'Y')); ?>

                                                        </p>
                                                    </div>
                                                    <div class="hidden-sm col-md-2">
                                                        <p>
                                                            <?php echo e($rental->last_name); ?>

                                                        </p>
                                                    </div>
                                                    <div class="visible-xs">
                                                        <p class="sm-lg">
                                                            <?php echo e($rental->last_name); ?>

                                                        </p>
                                                    </div>
                                                    <div class="col-sm-3 col-md-1">
                                                        <p class="xs-center">
                                                            <?php echo e($rental->email); ?>

                                                        </p>
                                                    </div>
                                                    <div class="col-sm-2 pr-0">
                                                        <p class="">
                                                            <?php echo e($rental->phone = substr($rental->phone, 2)); ?>

                                                        </p>
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <p class="sm-red text-center-small">
                                                            <?php echo e($rental->status); ?>

                                                        </p>
                                                    </div>
                                                    <div class="hidden-sm visible-xs col-md-2 pl-0">
                                                        <p>
                                                            <?php echo e($rental->customer_notes); ?>

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
        </div>

    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('sidebar'); ?>
        <!-- Recent Announcement Widget -->
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card my-4 shadow">
                    <h5 class="card-header text-center"><?php echo e($post->title); ?></h5>
                    <div class="card-body">
                        <?php echo e(Str::limit($post->body, '200', '...')); ?>

                    </div>
                    <a href="<?php echo e(route('post', $post->id)); ?>" class="btn btn-primary-red">Read More</a>
                </div>
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
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/office/rental-history.blade.php ENDPATH**/ ?>