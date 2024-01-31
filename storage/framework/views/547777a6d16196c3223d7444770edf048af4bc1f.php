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
        <h1>Office</h1>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('browser_title'); ?>
        <title>Office | <?php echo e($application->name); ?></title>
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
        <div class="row">
            <ul class="nav nav-tabs nav-justified mb-3 dock-depart" id="runnerView" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="view-scarab-tab" data-toggle="tab" href="#all-tab" role="tab" aria-controls="all-tab"
                       aria-selected="true">
                        All
                    </a>
                </li>

                <?php if($rentalTypeScarab): ?>
                    <li class="nav-item">
                        <a class="nav-link" id="view-scarab-tab" data-toggle="tab" href="#scarab-tab" role="tab" aria-controls="scarab-tab"
                           aria-selected="true">
                            Scarab
                        </a>
                    </li>
                <?php endif; ?>

                <?php if($rentalTypePontoon): ?>
                    <li class="nav-item">
                        <a class="nav-link" id="view-pontoon-tab" data-toggle="tab" href="#pontoon-tab" role="tab" aria-controls="pontoon-tab"
                           aria-selected="true">
                            Pontoon
                        </a>
                    </li>
                <?php endif; ?>

                <?php if($rentalTypeSeaDoo): ?>
                    <li class="nav-item">
                        <a class="nav-link" id="view-seadoo-tab" data-toggle="tab" href="#seadoo-tab" role="tab" aria-controls="seadoo-tab"
                           aria-selected="true">
                            SeaDoo
                        </a>
                    </li>
                <?php endif; ?>

                <?php if($rentalTypeAluminum): ?>
                    <li class="nav-item">
                        <a class="nav-link" id="view-aluminum-tab" data-toggle="tab" href="#aluminum-tab" role="tab" aria-controls="aluminum-tab"
                           aria-selected="true">
                            Aluminum
                        </a>
                    </li>
                <?php endif; ?>

                <?php if($rentalTypeSup): ?>
                    <li class="nav-item">
                        <a class="nav-link" id="view-sup-tab" data-toggle="tab" href="#paddleboard-tab" role="tab" aria-controls="sup-tab"
                           aria-selected="true">
                            SUP
                        </a>
                    </li>
                <?php endif; ?>


                <?php if($rentalTypeKayak): ?>
                    <li class="nav-item">
                        <a class="nav-link" id="view-kayak-tab" data-toggle="tab" href="#kayak-tab" role="tab" aria-controls="kayak-tab"
                           aria-selected="true">
                            Kayak
                        </a>
                    </li>
                <?php endif; ?>

                <?php if($rentalTypeSpyder): ?>
                    <li class="nav-item">
                        <a class="nav-link" id="view-spyder-tab" data-toggle="tab" href="#spyder-tab" role="tab" aria-controls="spyder-tab"
                           aria-selected="true">
                            Spyder
                        </a>
                    </li>
                <?php endif; ?>

                <?php if($rentalTypeSegway): ?>
                    <li class="nav-item">
                        <a class="nav-link" id="view-segway-tab" data-toggle="tab" href="#segway-tab" role="tab" aria-controls="segway-tab"
                           aria-selected="true">
                            Segway
                        </a>
                    </li>
                <?php endif; ?>

                <?php if($rentalTypeRenegade or $rentalTypeSummit): ?>
                    <li class="nav-item">
                        <a class="nav-link" id="view-skidoo-tab" data-toggle="tab" href="#skidoo-tab" role="tab" aria-controls="skidoo-tab"
                           aria-selected="true">
                            SkiDoo
                        </a>
                    </li>
                <?php endif; ?>

            </ul>
        </div>

        <div class="row">
            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="all-tab" role="tabpanel" aria-labelledby="all-tab">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2 class="section-title">Departing</h2>

                            <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($booking->status == 'Pre-Check' && strpos($booking->activity_date_start, $today) !== false): ?>
                                    <div class="card mb-4 shadow card-od card-dark">
                                        <div class="card-header">
                                            <h3>
                                                <a href="#"
                                                   class="rental-modal"
                                                   data-toggle="modal"
                                                   data-target="#rental_checkin<?php echo e($booking->id); ?>"
                                                   data-id="<?php echo e($booking->id); ?>" >
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <div class="header-left">

                                                            </div>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <div class="header-right">
                                                                <?php echo e($booking->last); ?>, <?php echo e($booking->first); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></h3>
                                        </div>
                                        <div class="office card-body">
                                            <div class="row">
                                                <div class="col-6 col-sm-4">
                                                    <div class="body-left">
                                                        <h4 class="card-title text-center">
                                                            <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($type->id == $booking->type_id): ?>
                                                                    <?php echo e($type->name); ?>

                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </h4>
                                                        <h2 class="card-duration text-center">

                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4">
                                                    <div class="body-center">
                                                        <h3 class="text-center text-uppercase"><?php echo e($booking->status); ?></h3>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="body-right">
                                                        <a class="btn-tel" href="tel:<?php echo e($booking->phone); ?>"><?php echo e($booking->phone); ?></a>
                                                        <a href="<?php echo e(route('office.show', $booking->id)); ?>" class="btn btn-primary-red btn-modal">Check In</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            <!-- Departing Time TODO get rid of (0)4:30 PM -->
                                            <h4>
                                                <!-- Duration Add Time -->
                                                <?php echo e($launchTime = \Carbon\Carbon::parse($booking->activity_date_start)->format('h:i A')); ?>

                                                -
                                            <?php echo e($newLaunch = \Carbon\Carbon::parse($booking->activity_date_end)->format('h:i A')); ?>

                                            <!-- /Duration Add Time -->


                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if($booking->status == '' && strpos($booking->activity_date_start, $today) !== false): ?>
                                    <div class="card mb-4 shadow card-od card-dark">
                                        <div class="card-header">
                                            <h3>
                                                <a href="#"
                                                   class="rental-modal"
                                                   data-toggle="modal"
                                                   data-target="#rental_checkin<?php echo e($booking->id); ?>"
                                                   data-id="<?php echo e($booking->id); ?>" >
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <div class="header-left">

                                                            </div>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <div class="header-right">
                                                                <?php echo e($booking->last); ?>, <?php echo e($booking->first); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></h3>
                                        </div>
                                        <div class="office card-body">
                                            <div class="row">
                                                <div class="col-6 col-sm-4">
                                                    <div class="body-left">
                                                        <h4 class="card-title text-center">
                                                            <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($type->id == $booking->type_id): ?>
                                                                    <?php echo e($type->name); ?>

                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </h4>
                                                        <h2 class="card-duration text-center">
                                                            <!-- Rental Duration UPDATED -->
                                                            <?php if($booking->hour == '1'): ?>
                                                                1 Hr
                                                            <?php endif; ?>
                                                            <?php if($booking->hour == '2'): ?>
                                                                2 Hr
                                                            <?php endif; ?>
                                                            <?php if($booking->hour == '3'): ?>
                                                                3 Hr
                                                            <?php endif; ?>
                                                            <?php if($booking->hour == '4'): ?>
                                                                HD
                                                            <?php endif; ?>
                                                            <?php if($booking->hour == '8'): ?>
                                                                FD
                                                            <?php endif; ?>
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4">
                                                    <div class="body-center">
                                                        <h3 class="text-center text-uppercase"><?php echo e($booking->status); ?></h3>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="body-right">
                                                        <a class="btn-tel" href="tel:<?php echo e($booking->phone); ?>"><?php echo e($booking->phone); ?></a>
                                                        <a href="<?php echo e(route('office.show', $booking->id)); ?>" class="btn btn-primary-red btn-modal" >Check In</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            <!-- Departing Time TODO get rid of (0)4:30 PM -->
                                            <h4>
                                                <!-- Duration Add Time -->
                                                <?php echo e($launchTime = \Carbon\Carbon::parse($booking->activity_date_start)->format('h:i A')); ?>

                                                -
                                            <?php echo e($newLaunch = \Carbon\Carbon::parse($booking->activity_date_end)->format('h:i A')); ?>

                                            <!-- /Duration Add Time -->
                                            </h4>
                                            <!-- /Departing Time -->


                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                        <div class="col-sm-6">
                            <h2 class="section-title">Returning</h2>
                            <?php $__currentLoopData = $rentalReturn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($rental->status == 'On Dock' && strpos($rental->activity_date, $today) !== false): ?>
                                    <div class="card mb-4 shadow card-od card-dark">
                                        <div class="card-header">
                                            <h3><a href="#"
                                                   class="returning"
                                                   data-toggle="modal"
                                                   data-target="#returning<?php echo e($rental->id); ?>"
                                                   data-id="<?php echo e($rental->id); ?>">
                                                    <div class="row">
                                                        <div class="col-4 col-sm-4">
                                                            <div class="header-left">
                                                                #<?php echo e($rental->invoice_number); ?>

                                                            </div>
                                                        </div>
                                                        <div class="col-8 col-sm-8">
                                                            <div class="header-right">
                                                                <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></h3>
                                        </div>
                                        <div class="office card-body">
                                            <div class="row">
                                                <div class="col-6 col-sm-4">
                                                    <div class="body-left">
                                                        <h4 class="card-title text-center">
                                                            <?php if($rental->activity_item == 'Scarab 215'): ?>
                                                                Scarab
                                                            <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Scarab') !== false): ?>
                                                                Scarab
                                                            <?php elseif($rental->activity_item == '23ft. Pontoon Boat'): ?>
                                                                Pontoon
                                                            <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Pontoon') !== false): ?>
                                                                Pontoon
                                                            <?php elseif($rental->activity_item == 'Renegade BC 600ETec'): ?>
                                                                Renegade
                                                            <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Renegade') !== false): ?>
                                                                Renegade
                                                            <?php elseif($rental->activity_item == 'Summit 154 SP'): ?>
                                                                Summit
                                                            <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Summit') !== false): ?>
                                                                Summit
                                                            <?php elseif($rental->activity_item == '14ft. Aluminum Boat'): ?>
                                                                Aluminum
                                                            <?php elseif($rental->activity_item == 'Kayak Single'): ?>
                                                                Single Kayak
                                                            <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Kayak Single') !== false): ?>
                                                                Single Kayak
                                                            <?php elseif($rental->activity_item == 'Double Kayak'): ?>
                                                                Double Kayak
                                                            <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Double Kayak') !== false): ?>
                                                                Double Kayak
                                                            <?php elseif($rental->activity_item == 'Stand Up Paddleboard'): ?>
                                                                SUP
                                                            <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Stand Up') !== false): ?>
                                                                SUP
                                                            <?php elseif($rental->activity_item == 'Segway i2'): ?>
                                                                Segway
                                                            <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Segway') !== false): ?>
                                                                Segway
                                                            <?php elseif($rental->activity_item == 'Spyder RT-S SE6'): ?>
                                                                Spyder
                                                            <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Spyder') !== false): ?>
                                                                Spyder
                                                            <?php elseif($rental->activity_item == 'SeaDoo'): ?>
                                                                SeaDoo
                                                            <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- SeaDoo') !== false): ?>
                                                                SeaDoo
                                                            <?php else: ?>
                                                                <br>

                                                            <?php endif; ?>
                                                        </h4>
                                                        <h2 class="card-duration text-center">
                                                            <?php $__currentLoopData = $rental->vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php echo e($rental_vehicle->internal_vehicle_id); ?>

                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4">
                                                    <div class="body-center">
                                                        <h3 class="text-center text-uppercase"><?php echo e($rental->status); ?></h3>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="body-right">
                                                        <a class="btn-tel" href="tel:<?php echo e($rental->phone); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="body-right returning">
                                                <h4 class="text-center">
                                                    <!-- Duration Add Time -->
                                                    <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                    -
                                                    <!-- UPDATED -->
                                                <?php if(strpos($rental->ticket_list, '1 hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '1 Hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '2 hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '2 Hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '3 hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '3 Hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '4 hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '4 Hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '8 Hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '8 hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '9 Hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '9 hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, 'Full Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, 'Half Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '1 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '2 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '2 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '3 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '3 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '4 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '4 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '5 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '5 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '6 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '6 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '7 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '7 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '8 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '8 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '9 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '9 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '10 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '10 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '11 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '11 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '12 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '12 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '13 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '13 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '14 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '14 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <!-- /UPDATED -->
                                                    <!-- /Duration Add Time -->
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if($rental->status == 'COC' && strpos($rental->activity_date, $today) !== false): ?>
                                    <div class="card mb-4 shadow card-od card-dark">
                                        <div class="card-header">
                                            <h3><a href="#"
                                                   class="returning"
                                                   data-toggle="modal"
                                                   data-target="#returning<?php echo e($rental->id); ?>"
                                                   data-id="<?php echo e($rental->id); ?>">
                                                    <div class="row">
                                                        <div class="col-4 col-sm-4">
                                                            <div class="header-left">
                                                                #<?php echo e($rental->invoice_number); ?>

                                                            </div>
                                                        </div>
                                                        <div class="col-8 col-sm-8">
                                                            <div class="header-right">
                                                                <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></h3>
                                        </div>
                                        <div class="office card-body">
                                            <div class="row">
                                                <div class="col-6 col-sm-4">
                                                    <div class="body-left">
                                                        <h4 class="card-title text-center">
                                                            <?php if($rental->activity_item == 'Scarab 215'): ?>
                                                                Scarab
                                                            <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Scarab') !== false): ?>
                                                                Scarab
                                                            <?php elseif($rental->activity_item == '23ft. Pontoon Boat'): ?>
                                                                Pontoon
                                                            <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Pontoon') !== false): ?>
                                                                Pontoon
                                                            <?php elseif($rental->activity_item == 'Renegade BC 600ETec'): ?>
                                                                Renegade
                                                            <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Renegade') !== false): ?>
                                                                Renegade
                                                            <?php elseif($rental->activity_item == 'Summit 154 SP'): ?>
                                                                Summit
                                                            <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Summit') !== false): ?>
                                                                Summit
                                                            <?php elseif($rental->activity_item == '14ft. Aluminum Boat'): ?>
                                                                Aluminum
                                                            <?php elseif($rental->activity_item == 'Kayak Single'): ?>
                                                                Single Kayak
                                                            <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Kayak Single') !== false): ?>
                                                                Single Kayak
                                                            <?php elseif($rental->activity_item == 'Double Kayak'): ?>
                                                                Double Kayak
                                                            <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Double Kayak') !== false): ?>
                                                                Double Kayak
                                                            <?php elseif($rental->activity_item == 'Stand Up Paddleboard'): ?>
                                                                SUP
                                                            <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Stand Up') !== false): ?>
                                                                SUP
                                                            <?php elseif($rental->activity_item == 'Segway i2'): ?>
                                                                Segway
                                                            <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Segway') !== false): ?>
                                                                Segway
                                                            <?php elseif($rental->activity_item == 'Spyder RT-S SE6'): ?>
                                                                Spyder
                                                            <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Spyder') !== false): ?>
                                                                Spyder
                                                            <?php elseif($rental->activity_item == 'SeaDoo'): ?>
                                                                SeaDoo
                                                            <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- SeaDoo') !== false): ?>
                                                                SeaDoo
                                                            <?php else: ?>
                                                                <br>

                                                            <?php endif; ?>
                                                        </h4>
                                                        <h2 class="card-duration text-center">
                                                            <?php $__currentLoopData = $rental->vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php echo e($rental_vehicle->internal_vehicle_id); ?>

                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4">
                                                    <div class="body-center">
                                                        <h3 class="text-center text-uppercase"><?php echo e($rental->status); ?></h3>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="body-right">
                                                        <a class="btn-tel" href="tel:<?php echo e($rental->phone); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="body-right returning">
                                                <h4 class="text-center">
                                                    <!-- Duration Add Time -->
                                                    <?php echo e($launchTime = \Carbon\Carbon::parse($rental->activity_date)->format('h:i A')); ?>

                                                    -
                                                    <!-- UPDATED -->
                                                <?php if(strpos($rental->ticket_list, '1 hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '1 Hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '2 hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '2 Hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '3 hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '3 Hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '4 hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '4 Hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '8 Hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '8 hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '9 Hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '9 hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, 'Full Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, 'Half Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '1 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '1 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '2 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '2 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '3 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '3 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '4 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '4 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '5 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '5 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '6 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '6 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '7 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '7 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '8 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '8 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '9 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '9 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '10 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '10 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '11 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '11 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '12 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '12 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '13 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '13 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '14 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '14 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <!-- /UPDATED -->
                                                    <!-- /Duration Add Time -->
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if($rental->status == 'Clear' && strpos($rental->activity_date, $today) !== false): ?>
                                    <div class="card mb-4 shadow card-od card-dark">
                                        <div class="card-header">
                                            <h3><a href="#"
                                                   class="returning"
                                                   data-toggle="modal"
                                                   data-target="#returning<?php echo e($rental->id); ?>"
                                                   data-id="<?php echo e($rental->id); ?>">
                                                    <div class="row">
                                                        <div class="col-4 col-sm-4">
                                                            <div class="header-left">
                                                                #<?php echo e($rental->invoice_number); ?>

                                                            </div>
                                                        </div>
                                                        <div class="col-8 col-sm-8">
                                                            <div class="header-right">
                                                                <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></h3>
                                        </div>
                                        <div class="office card-body">
                                            <div class="row">
                                                <div class="col-6 col-sm-4">
                                                    <div class="body-left">
                                                        <h4 class="card-title text-center">
                                                            <?php if($rental->activity_item == 'Scarab 215'): ?>
                                                                Scarab
                                                            <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Scarab') !== false): ?>
                                                                Scarab
                                                            <?php elseif($rental->activity_item == '23ft. Pontoon Boat'): ?>
                                                                Pontoon
                                                            <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Pontoon') !== false): ?>
                                                                Pontoon
                                                            <?php elseif($rental->activity_item == 'Renegade BC 600ETec'): ?>
                                                                Renegade
                                                            <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Renegade') !== false): ?>
                                                                Renegade
                                                            <?php elseif($rental->activity_item == 'Summit 154 SP'): ?>
                                                                Summit
                                                            <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Summit') !== false): ?>
                                                                Summit
                                                            <?php elseif($rental->activity_item == '14ft. Aluminum Boat'): ?>
                                                                Aluminum
                                                            <?php elseif($rental->activity_item == 'Kayak Single'): ?>
                                                                Single Kayak
                                                            <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Kayak Single') !== false): ?>
                                                                Single Kayak
                                                            <?php elseif($rental->activity_item == 'Double Kayak'): ?>
                                                                Double Kayak
                                                            <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Double Kayak') !== false): ?>
                                                                Double Kayak
                                                            <?php elseif($rental->activity_item == 'Stand Up Paddleboard'): ?>
                                                                SUP
                                                            <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Stand Up') !== false): ?>
                                                                SUP
                                                            <?php elseif($rental->activity_item == 'Segway i2'): ?>
                                                                Segway
                                                            <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Segway') !== false): ?>
                                                                Segway
                                                            <?php elseif($rental->activity_item == 'Spyder RT-S SE6'): ?>
                                                                Spyder
                                                            <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Spyder') !== false): ?>
                                                                Spyder
                                                            <?php elseif($rental->activity_item == 'SeaDoo'): ?>
                                                                SeaDoo
                                                            <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- SeaDoo') !== false): ?>
                                                                SeaDoo
                                                            <?php else: ?>
                                                                <br>

                                                            <?php endif; ?>
                                                        </h4>
                                                        <h2 class="card-duration text-center">
                                                            <?php $__currentLoopData = $rental->vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php echo e($rental_vehicle->internal_vehicle_id); ?>

                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4">
                                                    <div class="body-center">
                                                        <h3 class="text-center text-uppercase"><?php echo e($rental->status); ?></h3>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="body-right">
                                                        <a class="btn-tel" href="tel:<?php echo e($rental->phone); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="body-right returning">
                                                <h4 class="text-center">
                                                    <!-- Duration Add Time -->
                                                    <?php echo e($launchTime = \Carbon\Carbon::parse($rental->activity_date)->format('h:i A')); ?>

                                                    -
                                                    <!-- UPDATED -->
                                                <?php if(strpos($rental->ticket_list, '1 hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '1 Hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '2 hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '2 Hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '3 hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '3 Hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '4 hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '4 Hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '8 Hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '8 hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '9 Hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '9 hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, 'Full Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, 'Half Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '1 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '1 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '2 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '2 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '3 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '3 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '4 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '4 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '5 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '5 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '6 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '6 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '7 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '7 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '8 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '8 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '9 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '9 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '10 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '10 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '11 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '11 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '12 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '12 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '13 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '13 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '14 day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A (m/d)')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '14 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A (m/d)')); ?>

                                                <?php endif; ?>
                                                <!-- /UPDATED -->
                                                    <!-- /Duration Add Time -->
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if($rental->status == 'On Water' && strpos($rental->activity_date, $today) !== false): ?>
                                    <div class="card mb-4 shadow card-od card-dark">
                                        <div class="card-header">
                                            <h3><a href="#"
                                                   class="returning"
                                                   data-toggle="modal"
                                                   data-target="#returning<?php echo e($rental->id); ?>"
                                                   data-id="<?php echo e($rental->id); ?>">
                                                    <div class="row">
                                                        <div class="col-4 col-sm-4">
                                                            <div class="header-left">
                                                                #<?php echo e($rental->invoice_number); ?>

                                                            </div>
                                                        </div>
                                                        <div class="col-8 col-sm-8">
                                                            <div class="header-right">
                                                                <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></h3>
                                        </div>
                                        <div class="office card-body">
                                            <div class="row">
                                                <div class="col-6 col-sm-4">
                                                    <div class="body-left">
                                                        <h4 class="card-title text-center">
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
                                                                <br>

                                                            <?php endif; ?>
                                                        </h4>
                                                        <h2 class="card-duration text-center">
                                                            <?php $__currentLoopData = $rental->vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php echo e($rental_vehicle->internal_vehicle_id); ?>

                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4">
                                                    <div class="body-center">
                                                        <h3 class="text-center text-uppercase"><?php echo e($rental->status); ?></h3>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="body-right">
                                                        <a class="btn-tel" href="tel:<?php echo e($rental->phone); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="body-right returning">
                                                <h4 class="text-center">
                                                    <!-- Duration Add Time -->
                                                    <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                    -
                                                    <!-- UPDATED -->
                                                <?php if(strpos($rental->ticket_list, '1 hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '1 Hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '2 hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '2 Hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '3 hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '3 Hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '4 hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '4 Hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '8 Hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '8 hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '9 Hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')); ?>

                                                <?php elseif(strpos($rental->ticket_list, '9 hour') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, 'Full Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, 'Half Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '1 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '2 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '3 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '4 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '5 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '6 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '7 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '8 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '9 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '10 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '11 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '12 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '13 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '14 Day') !== false): ?>
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')); ?>

                                                <?php endif; ?>
                                                <!-- /UPDATED -->
                                                    <!-- /Duration Add Time -->
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>

                <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="tab-pane fade show" id="<?php echo e($type->slug); ?>-tab" role="tabpanel" aria-labelledby="<?php echo e($type->slug); ?>-tab">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2 class="section-title">Departing <span><small>(<?php echo e($type->name); ?>)</small></span></h2>
                                <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($booking->status == 'Pre-Check' && strpos($booking->activity_date_start, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#"
                                                       class="rental-modal"
                                                       data-toggle="modal"
                                                       data-target="#rental_checkin<?php echo e($booking->id); ?>"
                                                       data-id="<?php echo e($booking->id); ?>" >
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <div class="header-left">

                                                                </div>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <div class="header-right">
                                                                    <?php echo e($booking->last_name); ?>, <?php echo e($booking->first_name); ?>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a></h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-6 col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center">
                                                                <?php echo e($type->name); ?>

                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                <!-- Rental Duration UPDATED -->
                                                                <?php if($booking->hour == '1'): ?>
                                                                    1 Hr
                                                                <?php endif; ?>
                                                                <?php if($booking->hour == '2'): ?>
                                                                    2 Hr
                                                                <?php endif; ?>
                                                                <?php if($booking->hour == '3'): ?>
                                                                    3 Hr
                                                                <?php endif; ?>
                                                                <?php if($booking->hour == '4'): ?>
                                                                    HD
                                                                <?php endif; ?>
                                                                <?php if($booking->hour == '8'): ?>
                                                                    FD
                                                            <?php endif; ?>
                                                            <!-- /Rental Duration -->
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-sm-4">
                                                        <div class="body-center">
                                                            <h3 class="text-center text-uppercase"><?php echo e($booking->status); ?></h3>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4">
                                                        <div class="body-right">
                                                            <a class="btn-tel" href="tel:<?php echo e($booking->phone); ?>"><?php echo e($booking->phone); ?></a>
                                                            <a href="<?php echo e(route('office.show', $booking->id)); ?>" class="btn btn-primary-red btn-modal" >Check In</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer text-center">
                                                <!-- Departing Time TODO get rid of (0)4:30 PM -->
                                                <h4>
                                                    <!-- Duration Add Time -->
                                                    <?php echo e($launchTime = \Carbon\Carbon::parse($booking->activity_date_start)->format('h:i A')); ?>

                                                    -
                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($booking->activity_date_end)->format('h:i A')); ?>

                                                    <!-- /Duration Add Time -->
                                                </h4>
                                                <!-- /Departing Time -->


                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if($booking->status == '' && strpos($booking->activity_date_start, $today) !== false): ?>
                                       <?php if($booking->type_id == $type->id): ?>
                                                <div class="card mb-4 shadow card-od card-dark">
                                                    <div class="card-header">
                                                        <h3>
                                                            <a href="#"
                                                               class="rental-modal"
                                                               data-toggle="modal"
                                                               data-target="#rental_checkin<?php echo e($booking->id); ?>"
                                                               data-id="<?php echo e($booking->id); ?>" >
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <div class="header-left">

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <div class="header-right">
                                                                            <?php echo e($booking->last); ?>, <?php echo e($booking->first); ?>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a></h3>
                                                    </div>
                                                    <div class="office card-body">
                                                        <div class="row">
                                                            <div class="col-6 col-sm-4">
                                                                <div class="body-left">
                                                                    <h4 class="card-title text-center">
                                                                        <?php echo e($type->name); ?>

                                                                    </h4>
                                                                    <h2 class="card-duration text-center">
                                                                        <!-- Rental Duration UPDATED -->
                                                                        <?php if($booking->hour == '1'): ?>
                                                                            1 Hr
                                                                        <?php endif; ?>
                                                                        <?php if($booking->hour == '2'): ?>
                                                                            2 Hr
                                                                        <?php endif; ?>
                                                                        <?php if($booking->hour == '3'): ?>
                                                                            3 Hr
                                                                        <?php endif; ?>
                                                                        <?php if($booking->hour == '4'): ?>
                                                                            HD
                                                                        <?php endif; ?>
                                                                        <?php if($booking->hour == '8'): ?>
                                                                            FD
                                                                    <?php endif; ?>
                                                                    <!-- /Rental Duration -->
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-sm-4">
                                                                <div class="body-center">
                                                                    <h3 class="text-center text-uppercase"><?php echo e($booking->status); ?></h3>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-4">
                                                                <div class="body-right">
                                                                    <a class="btn-tel" href="tel:<?php echo e($booking->phone); ?>"><?php echo e($booking->phone); ?></a>
                                                                    <a href="<?php echo e(route('office.show', $booking->id)); ?>" class="btn btn-primary-red btn-modal" >Check In</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer text-center">
                                                        <!-- Departing Time TODO get rid of (0)4:30 PM -->
                                                        <h4>
                                                            <!-- Duration Add Time -->
                                                            <?php echo e($launchTime = \Carbon\Carbon::parse($booking->activity_date_start)->format('h:i A')); ?>

                                                            -
                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($booking->activity_date_end)->format('h:i A')); ?>

                                                        <!-- /Duration Add Time -->
                                                        </h4>
                                                        <!-- /Departing Time -->


                                                    </div>
                                                </div>
                                       <?php endif; ?>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="col-sm-6">
                                <h2 class="section-title">Returning <span><small>(Scarabs)</small></span></h2>
                                <?php $__currentLoopData = $rentalReturn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="card mb-4 shadow card-od card-dark">
                                        <div class="card-header">
                                            <h3><a href="#"
                                                   class="returning"
                                                   data-toggle="modal"
                                                   data-target="#returning<?php echo e($rental->id); ?>"
                                                   data-id="<?php echo e($rental->id); ?>">
                                                    <div class="row">
                                                        <div class="col-4 col-sm-4">
                                                            <div class="header-left">
                                                                #<?php echo e($rental->invoice_number); ?>

                                                            </div>
                                                        </div>
                                                        <div class="col-8 col-sm-8">
                                                            <div class="header-right">
                                                                <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></h3>
                                        </div>
                                        <div class="office card-body">
                                            <div class="row">
                                                <div class="col-6 col-sm-4">
                                                    <div class="body-left">
                                                        <h4 class="card-title text-center">
                                                            <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($type->id == $rental->type_id): ?>
                                                                    <?php echo e($type->name); ?>

                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </h4>
                                                        <h2 class="card-duration text-center">
                                                            <?php $__currentLoopData = $rental->vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php echo e($rental_vehicle->internal_vehicle_id); ?>

                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4">
                                                    <div class="body-center">
                                                        <h3 class="text-center text-uppercase"><?php echo e($rental->status); ?></h3>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="body-right">
                                                        <a class="btn-tel" href="tel:<?php echo e($rental->phone); ?>"><?php echo e($rental->phone); ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="body-right returning">
                                                <h4 class="text-center">
                                                    <!-- Duration Add Time -->
                                                    <?php echo e(\Carbon\Carbon::parse($rental->activity_date_start)->format('h:i A')); ?>

                                                    -

                                                    <?php echo e(\Carbon\Carbon::parse($rental->activity_date_end)->format('h:i A')); ?>

                                                    <!-- /Duration Add Time -->
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>
        </div>


        <div class="row">

        <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <!-- Check in Modal -->
                <div class="modal fade" id="rental_checkin<?php echo e($booking->id); ?>" tabindex="-1" role="dialog" aria-labelledby="rental_checkinModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 id="modal_rental_title" class="modal-title"><span>Check In: </span>
                                    <small>
                                        <!-- Rental Duration UPDATED -->
                                        <?php if($booking->hour < '4'): ?>
                                                <?php echo e($booking->hour); ?> Hr
                                            <?php elseif($booking->hour >= '4' && $booking->hour < '8'): ?>
                                                HD
                                            <?php else: ?>
                                        <?php endif; ?>
                                        <?php if($booking->hour == '8'): ?>
                                            FD
                                            <?php else: ?>
                                        <?php endif; ?>

                                    </small>
                                    <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($type->id == $booking->type_id): ?>
                                            <?php echo e($type->name); ?>

                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    | <?php echo e($booking->first); ?> <?php echo e($booking->last); ?> &nbsp;
                                    <span class="status">
                                                <?php if($booking->status == 'Pre-Check'): ?>
                                            |
                                        <?php endif; ?>
                                                &nbsp; <?php echo e($booking->status); ?></span>
                                </h3>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <!-- Rental Information -->
                                <!-- Modal Section Title -->
                                <div class="row mt-3">
                                    <div class="col-sm-12">
                                        <h4 class="modal-section-title">Booking Information</h4>
                                        <hr class="rounded" />
                                    </div>
                                </div>
                                <!-- /Modal Section Title -->

                                <!-- /Rental Information -->
                                <div class="modal-rental-info">
                                    <div class="row">
                                        <!-- Renter Info -->
                                        <div class="col-6">
                                            <div class="area-box">
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">First Name:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item"><?php echo e($booking->first); ?></p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">Last Name:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item"><?php echo e($booking->last); ?></p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">Email:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item"><?php echo e($booking->email); ?></p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">Phone:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item"><?php echo e($booking->phone); ?></p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">Zip Code:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item"><?php echo e($booking->zip_code); ?></p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">Notes:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item"><?php echo e($booking->customer_notes); ?></p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                            </div>
                                        </div>
                                        <!-- /Renter Info -->
                                        <!-- Rental Info -->
                                        <div class="col-6 mobile-border">
                                            <div class="area-box">
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">Booking ID:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item"><?php echo e($booking->id); ?></p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">Vehicle:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item">
                                                           <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($type->id == $booking->type_id): ?>
                                                                    <?php echo e($type->name); ?>

                                                                <?php endif; ?>
                                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">Payment Status:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item">
                                                        <?php if($booking->total_owed == '0'): ?>
                                                            Paid
                                                            <?php else: ?>
                                                           <h3 class="text-yellow"> Collect Payment ( $ <?php echo e($booking->total_owed); ?> )</h3>
                                                            <?php endif; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->

                                                <!-- PreCheck by -->
                                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>




























                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <!-- /PreCheck by -->
                                            </div>
                                        </div>
                                        <!-- /Rental Info -->
                                    </div>

                                </div>
                                <!-- /Rental Information -->


                                <!-- Customer Info -->
                                <?php $__currentLoopData = $booking->customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="modal-customer-info mt-5">
                                        <!-- Modal Section Title -->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h4 class="modal-section-title">Customer Info</h4>
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="<?php echo e(route('office.customerProfile', $rental_customer->id)); ?>" class="btn btn-outline-primary text-white btn-right">View Customer</a>
                                            </div>
                                            <div class="col-sm-12">
                                                <hr class="rounded" />
                                            </div>
                                        </div>
                                        <!-- /Modal Section Title -->

                                        <div class="row">
                                            <div class="col-6 col-sm-4">

                                                <div class="row">
                                                    <div class="col-sm-12">

                                                        <!-- Item -->
                                                        <div class="row">
                                                            <div class="col-sm-5">
                                                                <p class="modal-item-title">
                                                                    First Name
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <p class="modal-item">
                                                                    <?php echo e($rental_customer->first_name); ?>

                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!-- /Item -->

                                                        <!-- Item -->
                                                        <div class="row">
                                                            <div class="col-sm-5">
                                                                <p class="modal-item-title">
                                                                    Last Name
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <p class="modal-item">
                                                                    <?php echo e($rental_customer->last_name); ?>

                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!-- /Item -->

                                                        <!-- Item -->
                                                        <div class="row">
                                                            <div class="col-sm-5">
                                                                <p class="modal-item-title">
                                                                    Phone
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <p class="modal-item">
                                                                    <?php echo e($rental_customer->phone); ?>

                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!-- /Item -->

                                                        <!-- Item -->
                                                        <div class="row">
                                                            <div class="col-sm-5">
                                                                <p class="modal-item-title">
                                                                    Email
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <p class="modal-item">
                                                                    <?php echo e($rental_customer->email); ?>

                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!-- /Item -->

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-6 mobile-border col-sm-4">

                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <p class="modal-item-title">
                                                            License State
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <p class="modal-item">
                                                            <?php echo e($rental_customer->driver_license_state); ?>

                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->

                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <p class="modal-item-title">
                                                            License Number
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <p class="modal-item">
                                                            <?php echo e($rental_customer->driver_license_number); ?>

                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->

                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <p class="modal-item-title">
                                                            D.O.B
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <p class="modal-item">
                                                            <?php echo e(\Carbon\Carbon::parse($rental_customer->birth_date)->format('m/d/Y')); ?>

                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->

                                            </div>

                                            <div class="col-sm-4">

                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <img class="img-responsive" src="<?php echo e(asset('storage/' . $rental_customer->license_front)); ?>" height="auto" width="100%">
                                                    </div>
                                                </div>
                                                <!-- /Item -->

                                            </div>
                                        </div>


                                    </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <!-- /Customer Info -->

                            </div>
                            <div class="modal-footer">
                              <div class="row width-100">
                                  <div class="col-sm-4">
                                      <button class="btn btn-secondary btn-100" type="button" data-dismiss="modal">CLOSE</button>
                                  </div>
                                  <div class="col-sm-4">
                                      <a href="<?php echo e(route('office.update_booking', $booking)); ?>" class="btn btn-outline-primary btn-100 text-white">Update</a>
                                  </div>
                                  <div class="col-sm-4">
                                      <a href="<?php echo e(route('office.show', $booking->id)); ?>" class="btn btn-primary-red btn-modal btn-100">CHECK IN</a>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Check in Modal -->

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




        <?php $__currentLoopData = $rentalReturn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


            <!-- Returning Modal -->
                <div class="modal fade" id="returning<?php echo e($rental->id); ?>" tabindex="-1" role="dialog" aria-labelledby="returningModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 id="modal_rental_title" class="modal-title left">
                                                 <span class="gray">
                                                     <?php if(strpos($rental->ticket_list, '1x') !== false): ?>
                                                         1x
                                                     <?php endif; ?>
                                                     <?php if(strpos($rental->ticket_list, '2x') !== false): ?>
                                                         2x
                                                     <?php endif; ?>
                                                     <?php if(strpos($rental->ticket_list, '3x') !== false): ?>
                                                         3x
                                                     <?php endif; ?>
                                                     <?php if(strpos($rental->ticket_list, '4x') !== false): ?>
                                                         4x
                                                     <?php endif; ?>
                                                     <?php if(strpos($rental->ticket_list, '5x') !== false): ?>
                                                         5x
                                                     <?php endif; ?>
                                                     <?php if(strpos($rental->ticket_list, '6x') !== false): ?>
                                                         6x
                                                     <?php endif; ?>
                                                     <?php if(strpos($rental->ticket_list, '7x') !== false): ?>
                                                         7x
                                                     <?php endif; ?>
                                                     <?php if(strpos($rental->ticket_list, '8x') !== false): ?>
                                                         8x
                                                     <?php endif; ?>
                                                     <?php if(strpos($rental->ticket_list, '9x') !== false): ?>
                                                         9x
                                                     <?php endif; ?>
                                                     <?php if(strpos($rental->ticket_list, '10x') !== false): ?>
                                                         10x
                                                     <?php endif; ?>
                                                 </span>
                                    <span class="large">
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
                                            <br>

                                        <?php endif; ?>
                                                    </span>
                                    <span class="gray">
                                                        <?php $__currentLoopData = $rental->vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            ( <?php echo e($rental_vehicle->internal_vehicle_id); ?> ) &nbsp;
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </span>
                                    &nbsp;
                                    <?php echo e($rental->first_name); ?> <?php echo e($rental->last_name); ?>  &nbsp;
                                    <span class="status">| &nbsp;
                                            <?php if($rental->status == 'COC'): ?>
                                            Change of Condition
                                        <?php else: ?>
                                            <?php echo e($rental->status); ?>

                                        <?php endif; ?>
                                            </span></h3>

                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <!-- Rental Information -->
                                <!-- Modal Section Title -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h4 class="modal-section-title">Rental Information</h4>
                                    </div>
                                    <div class="hidden-xs col-sm-6">
                                        <a href="#" class="btn btn-primary btn-right" data-toggle="modal" data-target="#rentalUpdate<?php echo e($rental->id); ?>">Update Rental</a>
                                    </div>
                                    <div class="col-sm-12">
                                        <hr class="rounded mt-0" />
                                    </div>
                                </div>
                                <!-- /Modal Section Title -->

                                <div class="modal-rental-info">
                                    <div class="row">
                                        <!-- Renter Info -->
                                        <div class="col-6 col-sm-4">
                                            <div class="area-box">
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">First Name:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item"><?php echo e($rental->first_name); ?></p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">Last Name:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item"><?php echo e($rental->last_name); ?></p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">Email:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item"><?php echo e($rental->email); ?></p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">Phone:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item"><?php echo e($rental->phone); ?></p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">Zip Code:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item"><?php echo e($rental->zip_code); ?></p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">Notes:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item"><?php echo e($rental->customer_notes); ?></p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                            </div>
                                        </div>
                                        <!-- /Renter Info -->
                                        <!-- Rental Info -->
                                        <div class="col-6 col-sm-4">
                                            <div class="area-box center">
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <p class="modal-item-title">Invoice:</p>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="modal-item">#<?php echo e($rental->invoice_number); ?></p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <p class="modal-item-title">Booking ID:</p>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="modal-item"><?php echo e($rental->booking_id); ?></p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <p class="modal-item-title">Vehicle:</p>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="modal-item"><?php echo e($rental->activity_item); ?></p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <p class="modal-item-title">Payment Status:</p>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="modal-item"><?php echo e($rental->payment_status); ?></p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->

                                                <!-- Item -->
                                                <?php if($rental->toy_fee == ''): ?>

                                                <?php else: ?>
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <p class="modal-item-title">Toy Fee:</p>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <p class="modal-item">$<?php echo e($rental->toy_fee); ?> (<?php echo e($rental->toy_fee_type); ?>)</p>
                                                        </div>
                                                    </div>

                                                <?php endif; ?>
                                            <!-- /Item -->

                                                <!-- Item -->
                                                <?php if($rental->trailer_fee == ''): ?>

                                                <?php else: ?>
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <p class="modal-item-title">Trailer Fee:</p>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <p class="modal-item">$<?php echo e($rental->trailer_fee); ?> (<?php echo e($rental->trailer_fee_type); ?>)</p>
                                                        </div>
                                                    </div>

                                                <?php endif; ?>
                                            <!-- /Item -->

                                                <!-- Item -->
                                                <?php if($rental->late_fee == ''): ?>

                                                <?php else: ?>
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <p class="modal-item-title">Late Fee:</p>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <p class="modal-item">$<?php echo e($rental->late_fee); ?> (<?php echo e($rental->late_fee_type); ?>)</p>
                                                        </div>
                                                    </div>

                                                <?php endif; ?>
                                            <!-- /Item -->

                                                <!-- Item -->
                                                <?php if($rental->no_wake_fee == ''): ?>

                                                <?php else: ?>
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <p class="modal-item-title">No Wake Fee:</p>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <p class="modal-item">$<?php echo e($rental->no_wake_fee); ?> (<?php echo e($rental->no_wake_fee_type); ?>)</p>
                                                        </div>
                                                    </div>

                                                <?php endif; ?>
                                            <!-- /Item -->

                                                <!-- Item -->
                                                <?php if($rental->cleaning_fee == ''): ?>

                                                <?php else: ?>
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <p class="modal-item-title">Cleaning Fee:</p>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <p class="modal-item">$<?php echo e($rental->cleaning_fee); ?> (<?php echo e($rental->cleaning_fee_type); ?>)</p>
                                                        </div>
                                                    </div>

                                                <?php endif; ?>
                                            <!-- /Item -->

                                                <!-- Item -->
                                                <?php if($rental->sar_fee == ''): ?>

                                                <?php else: ?>
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <p class="modal-item-title">Search & Rescue Fee:</p>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <p class="modal-item">$<?php echo e($rental->sar_fee); ?> (<?php echo e($rental->sar_fee_type); ?>)</p>
                                                        </div>
                                                    </div>

                                            <?php endif; ?>
                                            <!-- /Item -->



                                            </div>
                                        </div>
                                        <!-- /Rental Info -->
                                        <!-- Vehicle Info -->
                                        <div class="col-12 col-sm-4">
                                            <div class="visible-xs row">
                                                <div class="col-sm-12">
                                                    <h4 class="modal-section-title">Rental</h4>
                                                    <hr class="rounded" />
                                                </div>
                                            </div>

                                            <div class="area-box">
                                                <div class="row">

                                                    <!-- PreCheck by -->
                                                <?php if($rental->precheck_by !== ''): ?>
                                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($rental->precheck_by == $user->id): ?>
                                                            <!-- Item -->
                                                                <div class="col-6 col-sm-12">
                                                                    <div class="row">
                                                                        <div class="col-sm-5">
                                                                            <p class="modal-item-title">Pre-Check By:</p>
                                                                        </div>
                                                                        <div class="col-sm-7">
                                                                            <p class="modal-item"><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /Item -->
                                                                <!-- Item -->
                                                                <div class="col-6 col-sm-12">
                                                                    <div class="row">
                                                                        <div class="col-sm-5">
                                                                            <p class="modal-item-title">Pre-Check Time:</p>
                                                                        </div>
                                                                        <div class="col-sm-7">
                                                                            <p class="modal-item">
                                                                                <?php echo e(\Carbon\Carbon::parse($rental->precheck_time)->format('h:i A')); ?>

                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /Item -->
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                                <!-- /PreCheck by -->


                                                    <!-- Checked in by -->
                                                    <?php if($rental->check_in_by == ''): ?>
                                                        &nbsp;
                                                    <?php else: ?>
                                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($rental->check_in_by == $user->id): ?>
                                                            <!-- Item -->
                                                                <div class="col-6 col-sm-12">
                                                                    <div class="row">
                                                                        <div class="col-sm-5">
                                                                            <p class="modal-item-title">Checked In By:</p>
                                                                        </div>
                                                                        <div class="col-sm-7">
                                                                            <p class="modal-item"><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /Item -->
                                                                <!-- Item -->
                                                                <div class="col-6 col-sm-12">
                                                                    <div class="row">
                                                                        <div class="col-sm-5">
                                                                            <p class="modal-item-title">Check In Time:</p>
                                                                        </div>
                                                                        <div class="col-sm-7">
                                                                            <p class="modal-item">
                                                                                <?php echo e(\Carbon\Carbon::parse($rental->check_in_time)->format('h:i A')); ?>

                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /Item -->
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                <!-- /Checked in by -->

                                                    <!-- Launched by -->
                                                    <?php if($rental->launched_by == ''): ?>
                                                        &nbsp;
                                                    <?php else: ?>
                                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($rental->launched_by == $user->id): ?>
                                                            <!-- Item -->
                                                                <div class="col-6 col-sm-12">
                                                                    <div class="row">
                                                                        <div class="col-sm-5">
                                                                            <p class="modal-item-title">Launched By:</p>
                                                                        </div>
                                                                        <div class="col-sm-7">
                                                                            <p class="modal-item"><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /Item -->
                                                                <!-- Item -->
                                                                <div class="col-6 col-sm-12">
                                                                    <div class="row">
                                                                        <div class="col-sm-5">
                                                                            <p class="modal-item-title">Launch Time:</p>
                                                                        </div>
                                                                        <div class="col-sm-7">
                                                                            <p class="modal-item">
                                                                                <?php echo e(\Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                                
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /Item -->
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                <!-- /Launched by -->

                                                    <!-- Cleared by -->
                                                    <?php if($rental->cleared_by == ''): ?>
                                                        &nbsp;
                                                <?php else: ?>
                                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($rental->cleared_by == $user->id): ?>
                                                            <!-- Item -->
                                                                <div class="col-6 col-sm-12">
                                                                    <div class="row">
                                                                        <div class="col-sm-5">
                                                                            <p class="modal-item-title">Cleared By:</p>
                                                                        </div>
                                                                        <div class="col-sm-7">
                                                                            <p class="modal-item"><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /Item -->
                                                                <!-- Item -->
                                                                <div class="col-6 col-sm-12">
                                                                    <div class="row">
                                                                        <div class="col-sm-5">
                                                                            <p class="modal-item-title">Clear Time:</p>
                                                                        </div>
                                                                        <div class="col-sm-7">
                                                                            <p class="modal-item">
                                                                                <?php echo e(\Carbon\Carbon::parse($rental->cleared_time)->format('h:i A')); ?>

                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /Item -->
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                                <!-- /Cleared by -->

                                                </div>
                                            </div>


                                        </div>
                                        <!-- /Vehicle Info -->
                                    </div>

                                </div>
                                <!-- /Rental Information -->



                                <!-- COC Info -->
                                <?php if($rental->status == 'COC'): ?>

                                    <div class="modal-coc-info mt-5">
                                        <!-- Modal Section Title -->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h4 class="modal-section-title">Change of Condition</h4>
                                            </div>
                                            <div class="hidden-xs col-sm-6">
                                                <a href="#" class="btn btn-primary btn-right" data-toggle="modal" data-target="#cocUpdate<?php echo e($rental->id); ?>">Update COC</a>
                                            </div>
                                            <div class="col-sm-12">
                                                <hr class="rounded mt-0" />
                                            </div>
                                        </div>
                                        <!-- /Modal Section Title -->

                                        <div class="row">

                                            <div class="col-sm-6">
                                                <img class="img-responsive" src="<?php echo e(asset('storage/' . $rental->image_1)); ?>" height="150px" width="auto">
                                            </div>
                                            <div class="col-sm-6">
                                                <h3><?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($rental->coc_vehicle == $vehicle->id): ?>
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
                                                                <br>

                                                            <?php endif; ?>
                                                            <span><?php echo e($vehicle->internal_vehicle_id); ?></span>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></h3>
                                                <p class="card-text">
                                                    <?php echo e($rental->incident); ?>

                                                </p>
                                            </div>

                                        </div>

                                    </div>
                                <?php endif; ?>
                            <!-- /COC Info -->

                                <!-- Customer Info -->
                                <?php $__currentLoopData = $rental->customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="modal-customer-info mt-5">
                                        <!-- Modal Section Title -->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h4 class="modal-section-title">Customer Info</h4>
                                            </div>
                                            <div class="hidden-xs col-sm-6">
                                                <a href="<?php echo e(route('office.customerProfile', $rental_customer->id)); ?>" class="btn btn-outline-primary text-white btn-right">View Customer</a>
                                            </div>
                                            <div class="col-sm-12">
                                                <hr class="rounded mt-0" />
                                            </div>
                                        </div>
                                        <!-- /Modal Section Title -->

                                        <div class="row">
                                            <div class="col-6 col-sm-4">

                                                <div class="row">
                                                    <div class="col-sm-12">

                                                        <!-- Item -->
                                                        <div class="row">
                                                            <div class="col-sm-5">
                                                                <p class="modal-item-title">
                                                                    First Name
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <p class="modal-item">
                                                                    <?php echo e($rental_customer->first_name); ?>

                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!-- /Item -->

                                                        <!-- Item -->
                                                        <div class="row">
                                                            <div class="col-sm-5">
                                                                <p class="modal-item-title">
                                                                    Last Name
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <p class="modal-item">
                                                                    <?php echo e($rental_customer->last_name); ?>

                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!-- /Item -->

                                                        <!-- Item -->
                                                        <div class="row">
                                                            <div class="col-sm-5">
                                                                <p class="modal-item-title">
                                                                    Phone
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <p class="modal-item">
                                                                    <?php echo e($rental_customer->phone); ?>

                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!-- /Item -->

                                                        <!-- Item -->
                                                        <div class="row">
                                                            <div class="col-sm-5">
                                                                <p class="modal-item-title">
                                                                    Email
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <p class="modal-item">
                                                                    <?php echo e($rental_customer->email); ?>

                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!-- /Item -->

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-6 mobile-border col-sm-4">

                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <p class="modal-item-title">
                                                            License State
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <p class="modal-item">
                                                            <?php echo e($rental_customer->driver_license_state); ?>

                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->

                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <p class="modal-item-title">
                                                            License Number
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <p class="modal-item">
                                                            <?php echo e($rental_customer->driver_license_number); ?>

                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->

                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <p class="modal-item-title">
                                                            D.O.B
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <p class="modal-item">
                                                            <?php echo e(\Carbon\Carbon::parse($rental_customer->birth_date)->format('m/d/Y')); ?>

                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->

                                            </div>

                                            <div class="col-12 col-sm-4">

                                                <!-- Item -->
                                                <div class="row mt-2">
                                                    <div class="col-sm-12">
                                                        <img class="img-responsive" src="<?php echo e(asset('storage/' . $rental_customer->license_front)); ?>" height="auto" width="100%">
                                                    </div>
                                                </div>
                                                <!-- /Item -->

                                            </div>
                                        </div>


                                    </div>
                                    <div class="row visible-xs">
                                        <div class="col-12">
                                            <a href="<?php echo e(route('office.customerProfile', $rental_customer->id)); ?>" class="btn btn-primary btn-right btn-100 mt-5 mb-5">View Customer</a>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">CLOSE</button>
                                
                            </div>
                            <!-- /Customer Info -->


                        </div>
                    </div>
                </div>
                <!-- /Returning Modal -->


                <!-- Update Rental Modal -->
                <div class="modal fade" id="rentalUpdate<?php echo e($rental->id); ?>" tabindex="-1" role="dialog" aria-labelledby="rentalUpdateModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3><span>Update: </span> Rental</h3>
                            </div>
                            <form action="<?php echo e(route('rental.updateRental', $rental)); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>

                                <div class="modal-body">

                                    <div class="row">
                                        <div class="col-sm-1">&nbsp;</div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="cleaning_fee"><h5>Cleaning Fee&nbsp;</h5></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <h5 class="text-right">
                                                            <span>$</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" name="cleaning_fee" placeholder="75-$150">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <select id="cleaning_fee_type" name="cleaning_fee_type" style="width: 100%;">
                                                <option value="blank" default> Payment Type</option>
                                                <option value="Visa">Visa</option>
                                                <option value="MasterCard">MasterCard</option>
                                                <option value="Cash">Cash</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-1">&nbsp;</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-1">&nbsp;</div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="late_fee"><h5>Late Fee &nbsp;</h5></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <h5 class="text-right">
                                                            <span>$</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" name="late_fee" placeholder="135/hr">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <select id="late_fee_type" name="late_fee_type" style="width: 100%;">
                                                    <option value="blank" default> Payment Type</option>
                                                    <option value="Visa">Visa</option>
                                                    <option value="MasterCard">MasterCard</option>
                                                    <option value="Cash">Cash</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">&nbsp;</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-1">&nbsp;</div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="no_wake_fee"><h5>No Wake Fee   &nbsp;</h5></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <h5 class="text-right">
                                                            <span>$</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" name="no_wake_fee" placeholder="100">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <select id="no_wake_fee_type" name="no_wake_fee_type" style="width: 100%;">
                                                    <option value="blank" default> Payment Type</option>
                                                    <option value="Visa">Visa</option>
                                                    <option value="MasterCard">MasterCard</option>
                                                    <option value="Cash">Cash</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">&nbsp;</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-1">&nbsp;</div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="sar_fee"><h5>Search & Rescue Fee &nbsp;</h5></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <h5 class="text-right">
                                                            <span>$</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" name="sar_fee" placeholder="135/hr">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <select id="sar_fee_type" name="sar_fee_type" style="width: 100%;">
                                                <option value="blank" default> Payment Type</option>
                                                <option value="Visa">Visa</option>
                                                <option value="MasterCard">MasterCard</option>
                                                <option value="Cash">Cash</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-1">&nbsp;</div>
                                    </div>



                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                                    <button class="btn btn-primary" type="submit">update Rental</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Update Rental Modal -->


                <!-- Update COC Modal -->
                <div class="modal fade" id="cocUpdate<?php echo e($rental->id); ?>" tabindex="-1" role="dialog" aria-labelledby="cocUpdateModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3><span>Update: </span> COC</h3>
                            </div>
                            <form action="<?php echo e(route('rental.rentalCocUpdate', $rental)); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>

                                <div class="modal-body">

                                    <div class="form-group">
                                        <label for="incident">Update Incident Description</label>
                                        <textarea name="incident" id="incident" cols="30" rows="5"><?php echo e($rental->incident); ?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="image_1">Update Image</label>
                                        <input type="file" class="form-control" name="image_1">
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                                    <button class="btn btn-primary" type="submit">update COC</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Update COC Modal -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        </div>


    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('sidebar'); ?>

    <!-- R ecent Announcement Widget -->
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
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/office/main.blade.php ENDPATH**/ ?>