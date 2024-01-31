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
                <h1>Customers</h1>
            <?php $__env->stopSection(); ?>

            <?php $__env->startSection('browser_title'); ?>
                <title>Customers | <?php echo e($application->name); ?></title>
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

        <!-- Customers Table -->
        <div class="card my-3 shadow mb-4 mobile-transparent">
                <div class="row">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered li-link-table " id="maintRentalTable">
                                <thead>
                                <tr>
                                    <th>
                                        <span class="visible-xs-table">&nbsp;</span>
                                        <div class="row hidden-xs-flex">
                                            <div class="col-sm-2">First Name</div>
                                            <div class="col-sm-3">Last Name</div>
                                            <div class="col-sm-4 text-center">Email</div>
                                            <div class="col-sm-3 text-center">Phone</div>

                                        </div>
                                    </th>

                                </tr>
                                </thead>
                                <tbody>

                                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <a href="<?php echo e(route('office.customerProfile', $customer->id)); ?>" class="table-li-link">
                                                <div class="dk-back">
                                                    <div class="row">
                                                    <div class="col-6 col-sm-2">
                                                        <h5 class="sm-md">
                                                            <?php echo e($customer->first_name); ?>

                                                        </h5>
                                                    </div>
                                                    <div class="col-6 col-sm-3">
                                                       <h5 class="sm-md">
                                                           <?php echo e($customer->last_name); ?>

                                                       </h5>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <a href="mailto:<?php echo e($customer->email); ?>" class="btn-tel gray" style="height:auto !important;"><?php echo e($customer->email); ?></a>

                                                    </div>
                                                        <span class="visible-xs"></span>
                                                    <div class="col-sm-3">
                                                        <a href="tel:<?php echo e($customer->phone); ?>" class="btn-tel" style="height:auto !important;"><?php echo e($customer->phone); ?></a>
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
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/office/customers.blade.php ENDPATH**/ ?>