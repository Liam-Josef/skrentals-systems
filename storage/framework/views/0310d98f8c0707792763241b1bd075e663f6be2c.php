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
                        <i class="fa fa-chevron-right"></i> Time
                    </p>
                </div>
                <!-- /Title -->

                <!-- Page Info -->
                <img src="<?php echo e(asset('storage/' . $type->image)); ?>" alt="<?php echo e($type->img_alt); ?>" class="page-img" />
                <?php if($type->description != ''): ?>
                    <h2 class="section-header"><?php echo e($type->description); ?></h2>
                    <h3 class="text-center">
                        <?php $__currentLoopData = $durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span class="text-white"><?php echo e($duration->name); ?></span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            on <span class="text-white"><?php echo e(Carbon\Carbon::parse($bucket->rental_date)->format('D, M d, Y')); ?></span>
                    </h3>
                <?php else: ?>
                    <h2 class="section-header"><?php echo e($type->name); ?></h2>
                    <h3 class="text-center">Select Rental Time - <?php $__currentLoopData = $durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span class="text-white"><?php echo e($duration->name); ?></span>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        on <span class="text-white"><?php echo e(Carbon\Carbon::parse($bucket->rental_date)->format('D, M d, Y')); ?></span>
                    </h3>
                <?php endif; ?>
                <!-- /Page Info -->


                <!-- Booking Step 3 Time -->
                <div class="row">
                    <div class="col-sm-4">
                        <!-- Change Date -->
                        <div class="row mb-3">
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
                                        <?php $__currentLoopData = $durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($duration->id == $bucket->duration_id): ?>
                                                <input type="text" class="hidden" name="duration_id" value="<?php echo e($duration->id); ?>">
                                                <input type="text" class="hidden" name="duration_name" value="<?php echo e($duration->name); ?>">
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <input type="text" class="hidden" name="type_id" value="<?php echo e($type->id); ?>">
                                        <input type="text" class="hidden" name="type_name" value="<?php echo e($type->slug); ?>">
                                        <input type="text" class="form-control datepicker rentalDate" name="rental_date" id="datepicker" value="<?php echo e($bucket->rental_date); ?>" placeholder="Select Date">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /Change Date -->

                        <!-- Change Buttons -->
                        <div class="row mb-3">
                            <div class="col-sm-11">
                                <form action="<?php echo e(route('bucket.changeDuration', $bucket)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field("PUT"); ?>
                                    <?php $__currentLoopData = $durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($duration->id == $bucket->duration_id): ?>
                                             <input type="text" class="hidden" name="duration_id" value="<?php echo e($duration->id); ?>">
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <button type="submit" class="btn btn-outline-primary text-white btn-100"><small>Change</small> &nbsp;<b>Duration</b></button>
                                </form>
                            </div>
                        </div>
                        <!-- /Change Buttons -->

                        <!-- PHP HELPER -->
                            <!-- PHP Variables -->

























                            <!-- PHP Variables -->
                            <!-- PHP Vehicle Script -->
                            <div class="">

                            </div>
                            <!-- PHP Vehicle Script -->
                        <!-- PHP HELPER -->
                    </div>
                    <div class="col-sm-8">
                        <div class="row">

                            



                            <br>
                                <!-- Time Buttons -->
                            <?php $__currentLoopData = $durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($duration->id == $bucket->duration_id): ?>

                                    <div class="row">
                                        <?php $__currentLoopData = $availabils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $availabil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($duration->availabils->contains($availabil)): ?>

                                                <?php
                                                    $availMinIncrem  = $availabil->start_min_increm;
                                                    $availStartTime  = $availabil->start_time;
                                                    $availEndTime  = $availabil->end_time;
                                                    $availTime = \Carbon\Carbon::parse($availStartTime)->format('H:i:s');
                                                    $availStartP = \Carbon\Carbon::parse($availStartTime)->format('H:i:s');
                                                    $availEndP = \Carbon\Carbon::parse($availEndTime)->format('H:i:s');
                                                    $availStartIncrem = \Carbon\Carbon::parse($availEndP)->diffInMinutes($availStartP);
                                                    $diffMinDiv = $availStartIncrem / $availMinIncrem + 1;

                                                    $repStr = \Carbon\Carbon::parse($availabil->start_time)->format('h:i A');
                                                    $repStr0 = \Carbon\Carbon::parse($repStr)->addMinute($availMinIncrem)->format('h:i A');
                                                    $repStr1 = \Carbon\Carbon::parse($repStr0)->addMinute($availMinIncrem)->format('h:i A');
                                                    $repStr2 = \Carbon\Carbon::parse($repStr1)->addMinute($availMinIncrem)->format('h:i A');
                                                    $repStr3 = \Carbon\Carbon::parse($repStr2)->addMinute($availMinIncrem)->format('h:i A');

                                                    $phpFormatStr = \Carbon\Carbon::parse($availabil->start_time)->format('H:i:s');
                                                    $phpFormatStr0 = \Carbon\Carbon::parse($repStr)->addMinute($availMinIncrem)->format('H:i:s');
                                                    $phpFormatStr1 = \Carbon\Carbon::parse($repStr0)->addMinute($availMinIncrem)->format('H:i:s');
                                                    $phpFormatStr2 = \Carbon\Carbon::parse($repStr1)->addMinute($availMinIncrem)->format('H:i:s');
                                                    $phpFormatStr3 = \Carbon\Carbon::parse($repStr2)->addMinute($availMinIncrem)->format('H:i:s');

                                                    $formatStr = \Carbon\Carbon::parse($repStr)->format('H.i');
                                                    $formatStr0 = \Carbon\Carbon::parse($repStr0)->format('H.i');
                                                    $formatStr1 = \Carbon\Carbon::parse($repStr1)->format('H.i');
                                                    $formatStr2 = \Carbon\Carbon::parse($repStr2)->format('H.i');
                                                    $formatStr3 = \Carbon\Carbon::parse($repStr3)->format('H.i');


                                                ?>


                                                <?php if($diffMinDiv >= '1'): ?>
                                                    <div class="col-6 col-sm-3 timeBtn" data-my-variable="<?php echo e($formatStr); ?>">
                                                        <form action="<?php echo e(route('bucket.update_time', $bucket)); ?>" method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field("PUT"); ?>
                                                            <input type="text" class="hidden" name="activity_date_start" value="<?php echo e($bucket->rental_date); ?> <?php echo e($phpFormatStr); ?>">
                                                            <input type="text" class="hidden" name="activity_date_end" value="<?php echo e(\Carbon\Carbon::parse($phpFormatStr)->addHour($duration->hour)); ?>">
                                                            <input type="text" class="hidden" name="avail_id" value="<?php echo e($availabil->id); ?>">
                                                            <input type="text" class="hidden" name="rental_time" value="<?php echo e($phpFormatStr); ?>">
                                                            <?php
                                                                echo "<button class='btn btn-book width-100' type='submit'>$repStr</button>" ;
                                                            ?>

                                                        </form>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if($diffMinDiv >= '2'): ?>
                                                    <div class="col-6 col-sm-3 timeBtn" data-my-variable="<?php echo e($formatStr0); ?>">
                                                        <form action="<?php echo e(route('bucket.update_time', $bucket)); ?>" method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field("PUT"); ?>
                                                            <input type="text" class="hidden" name="activity_date_start" value="<?php echo e($bucket->rental_date); ?> <?php echo e($phpFormatStr0); ?>">
                                                            <input type="text" class="hidden" name="activity_date_end" value="<?php echo e(\Carbon\Carbon::parse($phpFormatStr0)->addHour($duration->hour)); ?>">
                                                            <input type="text" class="hidden" name="avail_id" value="<?php echo e($availabil->id); ?>">
                                                            <input type="text" class="hidden" name="rental_time" value="<?php echo e($phpFormatStr0); ?>">
                                                            <?php
                                                                echo "<button class='btn btn-book width-100' type='submit'>$repStr0</button>" ;
                                                            ?>
                                                        </form>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if($diffMinDiv >= '3'): ?>
                                                    <div class="col-6 col-sm-3 timeBtn" data-my-variable="<?php echo e($formatStr1); ?>">
                                                        <form action="<?php echo e(route('bucket.update_time', $bucket)); ?>" method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field("PUT"); ?>
                                                            <input type="text" class="hidden" name="activity_date_start" value="<?php echo e($bucket->rental_date); ?> <?php echo e($phpFormatStr1); ?>">
                                                            <input type="text" class="hidden" name="activity_date_end" value="<?php echo e(\Carbon\Carbon::parse($phpFormatStr1)->addHour($duration->hour)); ?>">
                                                            <input type="text" class="hidden" name="avail_id" value="<?php echo e($availabil->id); ?>">
                                                            <input type="text" class="hidden" name="rental_time" value="<?php echo e($phpFormatStr1); ?>">
                                                            <?php
                                                                echo "<button class='btn btn-book width-100' type='submit'>$repStr1</button>" ;
                                                            ?>
                                                        </form>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if($diffMinDiv >= '4'): ?>
                                                    <div class="col-6 col-sm-3 timeBtn" data-my-variable="<?php echo e($formatStr2); ?>">
                                                        <form action="<?php echo e(route('bucket.update_time', $bucket)); ?>" method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field("PUT"); ?>
                                                            <input type="text" class="hidden" name="activity_date_start" value="<?php echo e($bucket->rental_date); ?> <?php echo e($phpFormatStr2); ?>">
                                                            <input type="text" class="hidden" name="activity_date_end" value="<?php echo e(\Carbon\Carbon::parse($phpFormatStr2)->addHour($duration->hour)); ?>">
                                                            <input type="text" class="hidden" name="avail_id" value="<?php echo e($availabil->id); ?>">
                                                            <input type="text" class="hidden" name="rental_time" value="<?php echo e($phpFormatStr2); ?>">
                                                            <?php
                                                                echo "<button class='btn btn-book width-100' type='submit'>$repStr2</button>" ;
                                                            ?>
                                                        </form>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if($diffMinDiv >= '5'): ?>
                                                    <div class="col-6 col-sm-3 timeBtn" data-my-variable="<?php echo e($formatStr3); ?>">
                                                        <form action="<?php echo e(route('bucket.update_time', $bucket)); ?>" method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field("PUT"); ?>
                                                            <input type="text" class="hidden" name="activity_date_start" value="<?php echo e($bucket->rental_date); ?> <?php echo e($phpFormatStr3); ?>">
                                                            <input type="text" class="hidden" name="activity_date_end" value="<?php echo e(\Carbon\Carbon::parse($phpFormatStr3)->addHour($duration->hour)); ?>">
                                                            <input type="text" class="hidden" name="avail_id" value="<?php echo e($availabil->id); ?>">
                                                            <input type="text" class="hidden" name="rental_time" value="<?php echo e($phpFormatStr3); ?>">
                                                            <?php
                                                                echo "<button class='btn btn-book width-100' type='submit'>$repStr3</button>" ;
                                                            ?>
                                                        </form>
                                                    </div>
                                                <?php endif; ?>

                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>


                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <!-- /Time Buttons -->

                            <br><br>








                            <br><br>



                        </div>
                    </div>
                </div>
                <!-- /Booking Step 3 Time -->





























































            </div>
        </div>
    <?php $__env->stopSection(); ?>



    <?php $__env->startSection('scripts'); ?>
        <script src="<?php echo e(asset('js/sb-admin-2.js')); ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment.min.js" integrity="sha512-hUhvpC5f8cgc04OZb55j0KNGh4eh7dLxd/dPSJ5VyzqDWxsayYbojWyl5Tkcgrmb/RVKCRJI1jNlRbVP4WWC4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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

            $(document).ready(function() {

                var availVehicles = $(".whatever").data("my-variable");
                var availIncrem = $('.availIncrem').html();
                var minDiff = $('.minDiff').html();
                var a = 5;
                var b = 10;
                var c = 2;
                var d = 3;

                var total = availIncrem * minDiff;

                if (availVehicles < 1) {
                    $('.timeBtn').addClass(".hidden");
                }

                // alert(availVehicles);

                // $('.startTime').each(function() {
                //     var start_time = $(".startTimeFormat").data("my-variable");
                //     var availIncrem = "15";
                //     // var availIncrem = $('.availIncrem').html();
                //
                //     var total = start_time + (availIncrem * 10000);
                //
                //     alert(total);
                //
                //
                //     $( this ).each(function() {
                //
                //         $('<button class="btn btn-book" name="rental_time" value="' + $( this ).html() + '" id="' + $( this ).html() + '"> ' + $( this ).html() + ' </button> <br>').appendTo("#newTimes"); //appendTo: Append at inside bottom
                //
                //     });
                //
                //
                // });




                // $(".timeBtn").on("load", function(){
                //     $(this).addClass('hidden');
                // });


                // $('.startTime').each(function() {
                //
                //     $( this ).each(function() {
                //         $availIncrem = $('.availIncrem').html();
                //         $startTime = $('.start_time').html();
                //         $startDateTime = $('.start_date_time').html();
                //         $endTime = $('.end_time').html();
                //         $minDiff = $('.minDiff').html();
                //
                //         // $newDateTime = moment($startDateTime, "YYYY-MM-DD hh:mm:ss").add(10, 'minutes').format('hh:mm:ss');
                //
                //         alert($startDateTime);
                //
                //         // var currentDateTime = moment().add(10, 'minutes')
                //         //     .format('hh:mm:ss');
                //         // console.log(currentDateTime);
                //
                //
                //
                //         $('<div id="' + $( this ).html() + '"> ' + $( this ).html() + ' </div> <br>').appendTo("#newTimes"); //appendTo: Append at inside bottom
                //
                //     });
                //
                //
                // });






            });

            // Works!
            //
            // $('.startTime').each(function() {
            //
            //     $( this ).each(function() {
            //         $hour = $('.varHour').html();
            //
            //         $('<div id="' + $( this ).html() + '"> ' + $( this ).html() + ' </div> <br>' +
            //             '<div id="' + $( this ).html() + '"> ' + $( this ).html() + ' </div> <br>' +
            //             '<div id="' + $( this ).html() + '"> ' + $( this ).html() + ' </div> <br>').appendTo("#newTimes"); //appendTo: Append at inside bottom
            //
            //     });
            //
            //
            // });


            // WORKS!
            // $startT = $('.startTime').each(function() {
            //
            //     $('<div> ' + $( this ).html() + ' </div>').appendTo("#newTimes"); //appendTo: Append at inside bottom
            //
            //
            // });



            // $(document).ready(function() {
            //     $("#button").click(function() {
            //         var paraId = "firstpara";
            //         var spanId = "span";
            //         $("#" + paraId).append($("#" + spanId).html());
            //     });
            // })



        </script>
    <?php $__env->stopSection(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/home/book-rental-3.blade.php ENDPATH**/ ?>