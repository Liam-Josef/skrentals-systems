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
        <?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            Book a <?php echo e($type->name); ?> Rental | <?php echo e($application->name); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        Book a Rental | <?php echo e($application->name); ?>

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
                <h1 class="page-title"><?php echo e($type->name); ?> Rentals</h1>
                <div class="breadcrumbs">
                    <p>
                        <a href="<?php echo e(route('home.index')); ?>" class="link">Home </a>
                        <i class="fa fa-chevron-right"></i> Rentals
                        <i class="fa fa-chevron-right"></i> <?php echo e($type->name); ?> Rentals
                        <i class="fa fa-chevron-right"></i> Booking
                        <i class="fa fa-chevron-right"></i> Duration
                    </p>
                </div>
                <!-- /Title -->

                <!-- SeaDoo Info -->
                <img src="<?php echo e(asset('storage/' . $type->image)); ?>" alt="<?php echo e($type->img_alt); ?>" class="page-img" />
                <?php if($type->description != ''): ?>
                    <h2 class="section-header"><?php echo e($type->description); ?></h2>
                    <h3 class="text-center">Select Duration for <span class="text-white"> <?php echo e(Carbon\Carbon::parse($bucket->rental_date)->format('D, M d, Y')); ?></span></h3>
                <?php else: ?>
                    <h2 class="section-header"><?php echo e($type->name); ?></h2>
                    <h3 class="text-center">Select Duration for <span class="text-white"> <?php echo e(Carbon\Carbon::parse($bucket->rental_date)->format('D, M d, Y')); ?></span></h3>
                <?php endif; ?>


                <!-- Booking Step 2 Duration -->
                <div class="row">
                    <div class="col-sm-4">
                        <!-- Change Date -->
                        <div class="row">
                            <div class="col-sm-11">
                                <form action="<?php echo e(route('bucket.update_date', $bucket)); ?>" id="bookStage2" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field("PUT"); ?>
                                    <div class="form-group mt-4">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="rental_date">Change Rental Date</label>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="text-right"><?php echo e(Carbon\Carbon::parse($bucket->rental_date)->format('D, M d, Y')); ?></h6>
                                            </div>
                                        </div>
                                        <input type="text" class="hidden" name="rental_time" value="00:00:00">
                                        <input type="text" class="hidden" name="duration_id" value="0">
                                        <input type="text" class="hidden" name="duration_name" value="none">
                                        <input type="text" class="hidden" name="type_id" value="<?php echo e($type->id); ?>">
                                        <input type="text" class="hidden" name="type_name" value="<?php echo e($type->slug); ?>">
                                        <input type="text" class="form-control datepicker rentalDate" name="rental_date" id="datepicker" value="<?php echo e($bucket->rental_date); ?>" placeholder="Select Date">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /Change Date -->
                    </div>
                    <div class="col-sm-8">
                        <div class="row">



                            <?php $__currentLoopData = $durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($type->durations->contains($duration)): ?>

                                        <div class="col-sm-4">
                                            <form action="<?php echo e(route('bucket.duration', $bucket)); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('PUT'); ?>
                                                <input type="text" class="hidden" name="duration_id" value="<?php echo e($duration->id); ?>">
                                                <input type="text" class="hidden" name="duration_name" value="<?php echo e($duration->slug); ?>">
                                                <input type="text" class="hidden" name="hour" value="<?php echo e($duration->hour); ?>">

                                                <?php $__currentLoopData = $duration->availabils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $durAvail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <input type="text" class="hidden" name="avail_id" value="<?php echo e($durAvail->id); ?>">
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <button class="btn btn-book" type="submit">

                                                    <?php if(strpos($duration->name, 'SeaDoo') !== false): ?>
                                                        Half Day
                                                    <?php else: ?>
                                                       <?php echo e($duration->name); ?>

                                                    <?php endif; ?>
                                                </button>
                                            </form>

                                        </div>

                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                </div>
                <!-- /Booking Step 2 Duration -->

                <!-- Info Section -->






















































                <!-- /Info Section -->




            </div>
        </div>
    <?php $__env->stopSection(); ?>



    <?php $__env->startSection('scripts'); ?>
        <script src="<?php echo e(asset('js/sb-admin-2.js')); ?>"></script>

        <script>
            $(document).ready(function() {
                $('.datepicker').datepicker('show');
            });
            $(function() {
                $date = $( "#datepicker" ).datepicker("getDate");
                $('#datepicker').datepicker({
                    changeMonth: true,
                    changeYear: true,
                    numberOfMonths: 3,
                    showButtonPanel: true,
                    dateFormat: "yy-mm-dd",
                    altField: "#alternate",
                    altFormat: "DD, MM d, yy",
                    onSelect: function() {
                        // $date = $("#datepicker").datepicker({ dateFormat: 'dd-mm-yy' }).val();
                        //
                        // $('.results').html($date);

                        $('#bookStage2').submit(); // <-- SUBMIT

                    }
                });
            });




        </script>
    <?php $__env->stopSection(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/home/book-rental-2.blade.php ENDPATH**/ ?>