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
                        <i class="fa fa-chevron-right"></i> Additions
                    </p>
                </div>
                <!-- /Title -->

                <!-- Page Info -->
                <img src="<?php echo e(asset('storage/' . $type->image)); ?>" alt="<?php echo e($type->img_alt); ?>" class="page-img" />
                <?php if($type->description != ''): ?>
                     <?php $__currentLoopData = $durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <h2 class="section-header"><?php echo e($duration->name); ?> <?php echo e($type->name); ?> Rental</h2>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <h3 class="text-center">Additions</h3>
                    <?php else: ?>
                     <?php $__currentLoopData = $durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <h2 class="section-header"><?php echo e($duration->name); ?> <?php echo e($type->name); ?> Rental</h2>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <h3 class="text-center">Additions</h3>
                 <?php endif; ?>
                <!-- /Page Info -->

                <!-- Booking Step 4 - Additions -->
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
                                            <input type="text" class="hidden" name="duration_id" value="<?php echo e($duration->id); ?>">
                                            <input type="text" class="hidden" name="duration_name" value="<?php echo e($duration->name); ?>">
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <input type="text" class="hidden" name="activity_date_start" value="">
                                        <input type="text" class="hidden" name="activity_date_end" value=" ">
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
                            <div class="col-sm-11 mb-3">
                                <form action="<?php echo e(route('bucket.changeDuration', $bucket)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field("PUT"); ?>
                                    <?php $__currentLoopData = $durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($duration->id == $bucket->duration_id): ?>
                                            <input type="text" class="hidden" name="duration_id" value="<?php echo e($duration->id); ?>">
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <button type="submit" class="btn btn-outline-primary text-white btn-100"><small>Change</small> &nbsp; <b>Duration</b></button>
                                </form>
                            </div>
                            <div class="col-sm-11 mb-3">
                                    <a href="<?php echo e(route('home.book_rental_time', $bucket)); ?>" class="btn btn-outline-primary text-white btn-100"><small>Change</small> &nbsp; <b>Time</b></a>
                            </div>
                        </div>
                        <!-- /Change Buttons -->
                    </div>
                    <div class="col-sm-8">
                        <div class="row mt-4">

                            <div class="col-sm-6">
                                <h2 class="text-white">
                                   <span class="text-gray-500"> START: </span><?php echo e(\Carbon\Carbon::parse($bucket->activity_date_start)->format('D, M. d, Y')); ?>

                                    <br>
                                    <span class="text-gray-500"> FROM: </span> <?php echo e(\Carbon\Carbon::parse($bucket->activity_date_start)->format('h:i A')); ?>

                                </h2>
                            </div>
                            <div class="col-sm-6">
                                <h2 class="text-white text-right">
                                    <?php echo e(\Carbon\Carbon::parse($bucket->activity_date_end)->format('D, M. d, Y')); ?> <span class="text-gray-500"> :END </span>
                                    <br>
                                    <?php echo e(\Carbon\Carbon::parse($bucket->activity_date_end)->format('h:i A')); ?> <span class="text-gray-500"> :TO </span>
                                </h2>
                            </div>

                        </div>

                       <div class="col-8">
                           <!-- Booking Calculator -->
                           <div class="row mt-5">

                               <!-- Calculator -->
                               <div class="col-3 col-sm-5 text-right">
                               <?php $__currentLoopData = $prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <?php if($price->type_id == $bucket->type_id && $price->duration_id == $bucket->duration_id): ?>

                                       <!-- ROW 1 Unit Price-->
                                           <h4 class="text-white">$ <span id="durCost"><?php echo e($price->amount); ?></span></h4>
                                           <!-- ROW 1 Unit Price-->

                                           <!-- ROW 2 Quantity -->
                                           <h4 class="text-white"><span class="text-gray-500">x</span> <span id="quantity1out">1</span></h4>
                                           <!-- ROW 2 Quantity -->

                                           <!-- ROW 2 Quantity -->
                                           <?php if($duration->hour == '1'): ?>
                                               <h4 class="text-white"><span class="text-gray-500">x</span> <span id="duration1out">1</span></h4>
                                           <?php else: ?>

                                           <?php endif; ?>
                                       <!-- ROW 2 Quantity -->

                                       <!-- ROW 3 Fees -->
                                       <h4 class="text-white">
                                           <span class="text-gray-500">+</span>
                                           <span id="fee1out">
                                                <?php $__currentLoopData = $websites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $website): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                   <?php
                                                       $percent = '.0'.$website->fee_percent;

                                                       $cost = $price->amount;
                                                       $fee = $percent;
                                                       $total0 = $cost * $fee;

                                                        echo number_format($total0, 2);
                                                   ?>
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </span>
                                       </h4>
                                       <!-- ROW 3 Fees -->

                                       <?php endif; ?>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               </div>
                               <!-- /Calculator -->
                               <!-- Calculator Text -->
                               <div class="col-8 col-sm-7">
                               <?php $__currentLoopData = $prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <?php if($price->type_id == $bucket->type_id && $price->duration_id == $bucket->duration_id): ?>

                                       <!-- ROW 1 Unit Price -->
                                           <h4 class="text-white">
                                               <span class="text-gray-500">each</span>
                                               <?php echo e($type->name); ?>

                                               <span class="text-gray-500">for</span>
                                               <?php echo e($duration->hour); ?>

                                               <span class="text-gray-500">hour(s)</span>
                                           </h4>
                                           <!-- ROW 1 Unit Price -->

                                           <!-- ROW 2 Quantity -->
                                           <h4 class="text-white">
                                               <?php echo e($type->name); ?><span class="text-gray-500">(s)</span>
                                           </h4>
                                           <!-- ROW 2 Quantity -->

                                           <!-- ROW 2 Quantity -->
                                           <?php if($duration->hour == '1'): ?>
                                               <h4 class="text-white">
                                                   Hour<span class="text-gray-500">(s)</span>
                                               </h4>
                                           <?php else: ?>

                                           <?php endif; ?>
                                       <!-- ROW 2 Quantity -->

                                           <!-- ROW 23 Quantity -->
                                           <h4 class="text-white">
                                               Processing <span class="text-gray-500">&</span> Taxes
                                           </h4>
                                           <!-- ROW 23 Quantity -->

                                       <?php endif; ?>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               </div>
                               <!-- /Calculator Text -->
                           </div>
                       </div>

                        <!-- Calculator Total -->
                        <div class="row mt-3">
                            <div class="col-8">
                                <h3 class="text-white text-center"><span class="text-gray-500">$</span>
                                    <span id="total1out">
                                <?php
                                    $totalE = $cost + $total0;
                                    echo number_format($totalE, 2);
                                ?>
                            </span>
                                </h3>
                            </div>
                        </div>
                        <!-- /Calculator Total -->
                        <!-- /Booking Calculator -->
                    </div>
                </div>




                <!-- Booking Request -->
                <div class="row mt-5 mb-5">
                    <div class="
                        <?php if($duration->hour == '1'): ?>
                            col-sm-8 offset-sm-2
                        <?php else: ?>
                            col-sm-6 offset-sm-3
                        <?php endif; ?>
                        ">
                        <div class="reqText">
                            <div class="row">
                                <div class="col-sm-3 pl-0 pr-0">
                                    <h3 class="text-center">
                                        I &nbsp; want
                                    </h3>
                                </div>
                                <div class="col-6 offset-3 col-sm-2 offset-sm-0 pl-sm-0 pr-sm-0">
                                    <input id="quantity1" type="number" class="form-control" placeholder="# of <?php echo e($type->name); ?>'s" value="1" min="1" max="<?php echo e($type->quantity); ?>">
                                </div>
                                <div class="
                                     <?php if($duration->hour == '1'): ?>
                                    col-sm-4
                        <?php else: ?>
                                    col-sm-7
                        <?php endif; ?>
                                    pl-0 pr-0">
                                    <h3 class="text-center">
                                        <?php if(strpos($duration->name, 'SeaDoo') !== false): ?>
                                            Half Day
                                        <?php else: ?>
                                            <?php if($duration->hour == '1'): ?>
                                            <?php else: ?>
                                                <span class="text-white"><?php echo e($duration->name); ?></span>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                        &nbsp;
                                        <span class="text-white"><?php echo e($type->name); ?><span class="text-gray-500"><small>(s)</small></span>
                                             <?php if($duration->hour == '1'): ?>
                                                &nbsp; for
                                            <?php else: ?>
                                            <?php endif; ?>
                                            </span>
                                    </h3>
                                </div>
                                <?php if($duration->hour == '1'): ?>
                                    <div class="col-6 offset-3 col-sm-2 offset-sm-0 pl-sm-0 pr-sm-0">
                                        <input id="duration1" type="number" class="form-control" placeholder="Quantity of Duration" value="1" min="1" max="<?php echo e($type->quantity); ?>">
                                    </div>
                                    <div class="col-sm-1">
                                        <h3 class="text-center">
                                            hours
                                        </h3>
                                    </div>
                                <?php else: ?>

                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Booking Request -->


                <!-- Next Button -->
                <form action="<?php echo e(route('home.book_rental_additions', $bucket)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field("PUT"); ?>

                    <input type="text" class="bookQty hidden" name="quantity" value="1">
                    <?php $__currentLoopData = $prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($price->type_id == $bucket->type_id && $price->duration_id == $bucket->duration_id): ?>
                            <input type="text" class="bookCost hidden" name="cost_per" value="<?php echo e($price->amount); ?>">
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $websites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $website): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <input type="text" class="bookFee hidden" name="fees" value="<?php
                            $percent = '.0'.$website->fee_percent;

                            $cost = $price->amount;
                            $fee = $percent;
                            $total0 = $cost * $fee;

                             echo number_format($total0, 2);
                        ?>
                            ">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <input type="text" class="bookHrs hidden" name="hour"
                           <?php if($type->slug == 'seadoo' && $bucket->hour < '4'): ?>
                           value="1"
                           <?php else: ?>
                           value="<?php echo e($duration->hour); ?>"
                        <?php endif; ?>
                    >
                    <input type="text" class="bookTotal hidden" name="total_cost" value="<?php
                        $totalE = $cost + $total0;
                        echo number_format($totalE, 2);
                    ?>
                    ">
                    <input type="text" class=" hidden" name="activity_date_start" value="<?php echo e($bucket->activity_date_start); ?>">
                    <input type="text" class=" hidden" name="activity_date_end" value="<?php echo e($bucket->activity_date_end); ?>">
                    <input type="text" class=" hidden" name="end_time" value="<?php echo e(\Carbon\Carbon::parse($bucket->activity_date_end)->format('H:i:s')); ?>">
                    <button class="btn btn-book btn-sm mt-53 p-2" type="submit">Next</button>
                </form>
                <!-- /Next Button -->



                <!-- Additions -->






















































                <!-- /Additions -->


                <!-- /Booking Step 4 - Additions -->





            </div>
        </div>
    <?php $__env->stopSection(); ?>



    <?php $__env->startSection('scripts'); ?>
        <script src="<?php echo e(asset('js/sb-admin-2.js')); ?>"></script>

        <script>

            $(document).ready(function() {

                let input = document.getElementById('quantity1');
                let out = document.getElementById('quantity1out');
                let durInput = document.getElementById('duration1');
                let durOut = document.getElementById('duration1out');
                // let hrInput = document.getElementById('hrQuantity1');
                var durCost = $("#durCost").html();


                input.onkeyup = function () {
                    out.innerHTML = input.value;
                    newI = input.value;

                    total = durCost * newI;
                    console.log(total);

                    fee1 = total * .05;
                    fee = fee1.toFixed(2);
                    console.log(fee);

                    newTotal1 = total + fee1;

                    newTotal = newTotal1.toFixed(2);
                    total1out.innerHTML = newTotal;

                    fee1out.innerHTML = fee;
                    $('input.durInput').val('1');
                    $('input.bookQty').val(newI);
                    $('input.bookFee').val(fee);
                    $('input.bookTotal').val(newTotal);
                }
                input.onclick = function () {
                    out.innerHTML = input.value;
                    newI = input.value;

                    total = durCost * newI;
                    console.log(total);

                    fee1 = total * .05;
                    fee = fee1.toFixed(2);
                    console.log(fee);

                    newTotal1 = total + fee1;

                    newTotal = newTotal1.toFixed(2);
                    total1out.innerHTML = newTotal;

                    fee1out.innerHTML = fee;
                    $('input.durInput').val('1');
                    $('input.bookQty').val(newI);
                    $('input.bookFee').val(fee);
                    $('input.bookTotal').val(newTotal);
                }

                durInput.onkeyup = function () {
                    durOut.innerHTML = durInput.value;
                    newI = input.value;
                    newD = durInput.value;

                    total1 = durCost * newI;
                    total = total1 * newD;
                    console.log(total);

                    fee1 = total * .05;
                    fee = fee1.toFixed(2);
                    console.log(fee);

                    newTotal1 = total + fee1;

                    newTotal = newTotal1.toFixed(2);
                    total1out.innerHTML = newTotal;

                    fee1out.innerHTML = fee;
                    $('input.bookHrs').val(newD);
                    $('input.bookTotal').val(newTotal);
                }
                durInput.onclick = function () {
                    durOut.innerHTML = durInput.value;
                    newI = input.value;
                    newD = durInput.value;

                    total1 = durCost * newI;
                    total = total1 * newD;
                    console.log(total);

                    fee1 = total * .05;
                    fee = fee1.toFixed(2);
                    console.log(fee);

                    newTotal1 = total + fee1;

                    newTotal = newTotal1.toFixed(2);
                    total1out.innerHTML = newTotal;

                    fee1out.innerHTML = fee;
                    $('input.bookHrs').val(newD);
                    $('input.bookTotal').val(newTotal);
                }
                // $("#total1out").text(newTotal);


                // // var addCost = $("#addCost").html();
                //
                //
                // $('.addCost').onclick(function() {
                //
                //
                //     // var start_time = $(".startTimeFormat").data("my-variable");
                //     // var availIncrem = "15";
                //     // var availIncrem = $('.availIncrem').html();
                //
                //     // var total = start_time + (availIncrem * 10000);
                //     //
                //     // alert(total);
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



            });


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


                // var availVehicles = $(".whatever").data("my-variable");


            });

        </script>
    <?php $__env->stopSection(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/home/book-rental-4.blade.php ENDPATH**/ ?>