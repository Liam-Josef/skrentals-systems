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


    <?php $__currentLoopData = $websites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $website): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <?php $__env->startSection('page_title'); ?>
        <h1>Rental Settings</h1>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('browser_title'); ?>
        <title>Rental Settings | <?php echo e($website->name); ?></title>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('logo-square'); ?>
        <img src="<?php echo e(asset('storage/'. $website->logo_square_1)); ?>" alt="<?php echo e($website->name); ?> Logo" height="30px" width="auto">
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('logo-horizontal'); ?>
        <img src="<?php echo e(asset('storage/'. $website->logo_horizontal_1)); ?>" alt="<?php echo e($website->name); ?> Logo" height="30px" width="auto">
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('logo_horizontal_1'); ?>
        <?php echo e(asset('storage/'. $website->logo_horizontal_1)); ?>

    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('logo_horizontal_2'); ?>
        <?php echo e(asset('storage/'. $website->logo_horizontal_2)); ?>

    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('logo_square_1'); ?>
        <?php echo e(asset('storage/'. $website->logo_square_1)); ?>

    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('logo_square_2'); ?>
        <?php echo e(asset('storage/'. $website->logo_square_2)); ?>

    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('favicon'); ?>
        <?php echo e(asset('storage/'. $website->favicon)); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('analytic_tag'); ?>
        <?php echo e($website->analytic_link_1); ?>

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
                    
                    
                    
                    <?php if($website->analytic_link_2 != ''): ?>
                        <a class="collapse-item" href="<?php echo e($website->analytic_link_2); ?>" target="_blank"><span class="text-primary">Reports</span> Snapshot</a>
                    <?php endif; ?>
                    <?php if($website->analytic_link_3 != ''): ?>
                        <a class="collapse-item" href="<?php echo e($website->analytic_link_3); ?>" target="_blank"><span class="text-primary">Acquisition</span> Overview</a>
                    <?php endif; ?>
                    <?php if($website->analytic_link_4 != ''): ?>
                        <a class="collapse-item" href="<?php echo e($website->analytic_link_4); ?>" target="_blank"><span class="text-primary">Engagement</span> Overview</a>
                    <?php endif; ?>
                    <?php if($website->analytic_link_5 != ''): ?>
                        <a class="collapse-item" href="<?php echo e($website->analytic_link_5); ?>" target="_blank"><span class="text-primary">Demographics</span> Overview</a>
                    <?php endif; ?>
                </div>
            </div>
        </li>
    <?php $__env->stopSection(); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    <?php $__env->startSection('content'); ?>

        <h1><span class="text-primary">Rental</span> Settings</h1>


        <!-- Rental Types -->
        <div class="card shadow mb-3">
                <div class="card-header">
                    <h3 class="mb-0">Rental Types</h3>
                </div>
                <div class="card-body">


                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Add Rental Type</h3>
                            <form action="<?php echo e(route('type.store')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="name" class="form-control" name="name" value="<?php echo e($website->name); ?>" aria-label="type_name">
                                </div>
                                <div class="form-group">
                                    <label for="is_active">Is Active</label>
                                    <select name="is_active" id="is_active">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary btn-right" type="submit">Add</button>
                            </form>
                        </div>
                        <div class="col-sm-6">
                            <h3>Select for Settings</h3>
                            <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="card shadow mt-0 my-2">
                                    <a href="<?php echo e(route('type.settings', $type->id)); ?>" class="card-link nav-link">
                                        <div class="card-body p-2">
                                            <div class="row">
                                                <h3 class="mb-0"><?php echo e($type->name); ?></h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                </div>
                <div class="card-footer">

                </div>
            </div>
        <!-- /Rental Types -->

        <!-- Rental Durations -->
        <div class="card shadow mb-3">
            <div class="card-header">
                <h3 class="mb-0">Rental Duration Settings</h3>
            </div>
            <div class="card-body">


                <div class="row">
                    <div class="col-sm-6">
                        <h3>Add Duration</h3>
                        <form action="<?php echo e(route('duration.store')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="name" class="form-control" name="name">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="hour">Hour Duration</label>
                                        <input type="number" class="form-control" name="hour">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group mt-4">
                                        <label for="is_active">Is Active</label>
                                        <select name="is_active" id="is_active">
                                            <option value="1" selected>Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-right" type="submit">Add</button>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <h3>Edit Duration</h3>
                        <?php $__currentLoopData = $durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="card shadow mt-0 my-2">
                                <a href="<?php echo e(route('rental.duration_settings', $duration)); ?>" class="card-link nav-link ">
                                    <div class="card-body">
                                        <div class="row">
                                            <h2 class="mb-0"><?php echo e($duration->name); ?></h2>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>
            <div class="card-footer">

            </div>
        </div>
        <!-- /Rental Durations -->
    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('scripts'); ?>

    <?php $__env->stopSection(); ?>


        <form action="<?php echo e(route('duration.update', $duration)); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="modal-body">

                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="name" class="">Name</label>
                            <input type="text" class="form-control" name="name" value="<?php echo e($duration->name); ?>" aria-label="duration_name">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="hour" class="">Hours</label>
                            <input type="number" class="form-control" name="hour" value="<?php echo e($duration->hour); ?>">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="day" class="">Days</label>
                            <input type="number" class="form-control" name="day" value="<?php echo e($duration->day); ?>">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="night" class="">Nights</label>
                            <input type="number" class="form-control" name="night" value="<?php echo e($duration->night); ?>">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="before_hour" class="">Buffer Before Hours</label>
                            <input type="number" class="form-control" name="before_hour" value="<?php echo e($duration->before_hour); ?>">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="before_minute" class="">Buffer Before Minutes</label>
                            <input type="number" class="form-control" name="before_minute" value="<?php echo e($duration->before_minute); ?>">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="after_hour" class="">Buffer After Hours</label>
                            <input type="number" class="form-control" name="after_hour" value="<?php echo e($duration->after_hour); ?>">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="after_minute" class="">Buffer After Minutes</label>
                            <input type="number" class="form-control" name="after_minute" value="<?php echo e($duration->after_minute); ?>">
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancel </button>
                <button class="btn btn-primary" type="submit">Update </button>


            </div>
        </form>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/admin/rentals/rental-settings.blade.php ENDPATH**/ ?>