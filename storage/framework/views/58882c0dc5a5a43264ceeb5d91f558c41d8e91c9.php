<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home-master','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('home-master'); ?>
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
        <h1>Book Now</h1>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('browser_title'); ?>
        Book Now | <?php echo e($application->name); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('meta_description'); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('navbar_rental_type'); ?>
        Our
        <?php if($application->rental_type != ''): ?>
            <?php echo e($application->rental_type); ?>

        <?php else: ?>
            Rentals
        <?php endif; ?>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('favicon'); ?>
        <?php echo e(asset('storage/'. $application->favicon)); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('app_name'); ?>
        <?php echo e($application->name); ?>

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
        <?php echo $__env->yieldContent('page_title'); ?>




    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('sidebar-post'); ?>
        <ul class="navbar-nav sidebar-post accordion my-4 shadow" id="accordionSidebar">

            <!-- Nav Item - Pages Collapse Menu -->
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="nav-item bg-gradient-secondary">
                    <a class="nav-link collapsed bg-gradient-secondary" href="#" data-toggle="collapse" data-target="#collapseAnnouncements<?php echo e($post->id); ?>" aria-expanded="true" aria-controls="collapseAnnouncements<?php echo e($post->id); ?>">
                        <span><?php echo e($post->title); ?></span>
                    </a>
                    <div id="collapseAnnouncements<?php echo e($post->id); ?>" class="collapse" aria-labelledby="headingAnnouncements" data-parent="#accordionSidebar">
                        <div class="bg-white pt-2 collapse-inner rounded">
                            <div class="collapse-body">
                                <?php echo e(Str::limit($post->body, '200', '...')); ?>


                                <img class="card-img-top mt-2" src="<?php echo e($post->post_image); ?>" alt="<?php echo e($post->title); ?>">

                                <a href="<?php echo e(route('post', $post->id)); ?>" class="btn btn-primary btn-100 mt-2">Read More</a>

                            </div>

                            <div class="collapse-footer mt-2">
                                <div class="row">
                                    <div class="col-xs-7 col-sm-7 col-md-7">
                                        <span><?php echo e($post->created_at->diffForHumans()); ?></span>
                                    </div>
                                    <div class="col-xs-5 col-xs-5 col-md-5">
                                        <span class="text-primary"><?php echo e($post->user->firstname); ?> <?php echo e($post->user->lastname); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </ul>


        <!-- Side Widget -->
        <div class="card my-4 shadow">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
                You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
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
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/home/book-now.blade.php ENDPATH**/ ?>