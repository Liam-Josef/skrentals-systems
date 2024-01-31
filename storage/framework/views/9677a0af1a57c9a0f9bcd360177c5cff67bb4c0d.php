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

    <?php $__env->stopSection(); ?>

    <?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <?php $__env->startSection('browser_title'); ?>
        Contact Us | <?php echo e($application->name); ?>

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
        <style>
            .main-body {
                background-image: url("<?php echo e(asset('/storage/app-images/home-background.jpg')); ?>");
            }
        </style>

        <div class="main-body">
            <div class="container main">

                <!-- Title -->
                <h1 class="page-title">Contact Us</h1>
                <div class="breadcrumbs">
                    <p>
                        <a href="<?php echo e(route('home.index')); ?>" class="link">Home </a>
                        <i class="fa fa-chevron-right"></i>  Contact Us
                    </p>
                </div>
                <!-- /Title -->

                <!-- Contact Us -->
                    <div class="row">
                        <div class="col-sm-8">

                            <p>
                                Contact SK Watercraft Rentals for more information about SeaDoo, Scarab JetBoats,
                                Starcraft Pontoons, SkiDoo Snowmobiles, Segways, & more for rent in Portland,
                                Oregon. Call <a href="tel:503-284-6447">503-284-6447</a> for more information.
                            </p>

                            <form action="#">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>

                                <div class="form-group">
                                    <label for="name" class="hidden">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="hidden">Phone</label>
                                    <input type="text" class="form-control" id="phone" placeholder="Phone">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="hidden">Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="zip" class="hidden">Zip Code</label>
                                    <input type="text" class="form-control" id="zip" placeholder="Zip Code">
                                </div>
                                <div class="form-group">
                                    <label for="comments" class="hidden">Zip Code</label>
                                    <textarea name="comments" id="comments" cols="30" rows="5" placeholder="Comments"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="comments" class="hidden">Zip Code</label>
                                    <input type="checkbox"> Subscribe to our Newsletter for special offers and promotions!
                                </div>

                                <button class="btn btn-primary">Submie</button>

                            </form>
                        </div>
                        <div class="col-sm-4">

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2796.2580059083953!2d-122.66595542326291!3d45.50488463072251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5495a6741f42449f%3A0x8c31bef24cb809db!2sSK%20Watercraft%20Rentals!5e0!3m2!1sen!2sus!4v1704523560579!5m2!1sen!2sus"
                                    width="100%" height="150" style="border:0; margin-bottom: 20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                            <!-- Company Info -->
                            <div class="card side-card">
                                <div class="card-header">
                                    <h3>Store Information</h3>
                                </div>

                                <div class="card-body">
                                    <div class="gray b-bottom">
                                        <div class="row">
                                            <div class="col-4">
                                                <p>
                                                    Address:
                                                </p>
                                            </div>
                                            <div class="col-8">
                                                <p>
                                                    250 SE Division Pl
                                                    <br>
                                                    Portland, OR 97202
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="white b-bottom">
                                        <div class="row">
                                            <div class="col-4">
                                                <p>
                                                    Phone:
                                                </p>
                                            </div>
                                            <div class="col-8">
                                                <p>
                                                    <a href="tel:503-284-6447">(503)284-6447</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Company Info -->

                            <!-- Store Hours -->
                            <div class="card side-card mt-3">
                                <div class="card-header">
                                    <h3>Store Information</h3>
                                </div>
                                <div class="card-body">
                                    <div class="gray b-bottom">
                                        <div class="row">
                                            <div class="col-4">
                                                <p>
                                                    Mon
                                                </p>
                                            </div>
                                            <div class="col-8">
                                                <p>
                                                    9:30 AM - 7:00 PM
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="white b-bottom">
                                        <div class="row">
                                            <div class="col-4">
                                                <p>
                                                    Tue
                                                </p>
                                            </div>
                                            <div class="col-8">
                                                <p>
                                                    9:30 AM - 7:00 PM
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gray b-bottom">
                                        <div class="row">
                                            <div class="col-4">
                                                <p>
                                                    Wed
                                                </p>
                                            </div>
                                            <div class="col-8">
                                                <p>
                                                    9:30 AM - 7:00 PM
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="white b-bottom">
                                        <div class="row">
                                            <div class="col-4">
                                                <p>
                                                    Thurs
                                                </p>
                                            </div>
                                            <div class="col-8">
                                                <p>
                                                    9:30 AM - 7:00 PM
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gray b-bottom">
                                        <div class="row">
                                            <div class="col-4">
                                                <p>
                                                    Fri
                                                </p>
                                            </div>
                                            <div class="col-8">
                                                <p>
                                                    9:30 AM - 7:00 PM
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="white b-bottom">
                                        <div class="row">
                                            <div class="col-4">
                                                <p>
                                                    Sat
                                                </p>
                                            </div>
                                            <div class="col-8">
                                                <p>
                                                    9:30 AM - 7:00 PM
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gray">
                                        <div class="row">
                                            <div class="col-4">
                                                <p>
                                                    Sun
                                                </p>
                                            </div>
                                            <div class="col-8">
                                                <p>
                                                    9:30 AM - 7:00 PM
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Store Hours -->
                        </div>
                    </div>
                <!-- /Contact Us -->
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
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/home/contact.blade.php ENDPATH**/ ?>