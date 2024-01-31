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

    <?php $__env->stopSection(); ?>


        <?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $__env->startSection('page_title'); ?>
            <h1>Pre-Check</h1>
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('browser_title'); ?>
            <title>Pre-Checkin | <?php echo e($application->name); ?></title>
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('app_name'); ?>
            <?php echo e($application->name); ?>

        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('favicon'); ?>
            <?php echo e(asset('storage/'. $application->favicon)); ?>

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
    <div class="mt-3" style="min-height: 700px">

        <div class="row">
            <!-- Precheck Tablist -->
            <ul class="nav nav-tabs nav-justified mb-3 dock-depart" id="runnerView" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="view-all-depart-tab" data-toggle="tab" href="#all-depart-tab" role="tab" aria-controls="all-depart-tab"
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
                        <a class="nav-link" id="view-sup-tab" data-toggle="tab" href="#sup-tab" role="tab" aria-controls="sup-tab"
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

                <?php if($rentalTypeSkiDoo): ?>
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
                <div class="tab-pane fade show active" id="all-depart-tab" role="tabpanel" aria-labelledby="all-depart-tab">

                    <?php $__currentLoopData = $rentalPrecheck; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($rental->status == '' && strpos($rental->activity_date, $today) !== false): ?>

                            <div class="card mb-4 shadow card-od pre-check-card" >
                                <div class="card-body precheckin">
                                    <div class="row">
                                        <div class="col-12 col-sm-2">
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
                                                    <!-- Rental Duration UPDATED -->
                                                    <?php if(strpos($rental->ticket_list, '1 Hour') !== false): ?>
                                                        1 Hr
                                                    <?php elseif(strpos($rental->ticket_list, '1 hour') !== false): ?>
                                                        1 Hr
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '2 hour') !== false): ?>
                                                        2 Hr
                                                    <?php elseif(strpos($rental->ticket_list, '2 Hour') !== false): ?>
                                                        2 Hr
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '3 Hour') !== false): ?>
                                                        3 Hr
                                                    <?php elseif(strpos($rental->ticket_list, '3 hour') !== false): ?>
                                                        3 Hr
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '4 Hour') !== false): ?>
                                                        HD
                                                    <?php elseif(strpos($rental->ticket_list, '4 hour') !== false): ?>
                                                        HD
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '8 Hour') !== false): ?>
                                                        FD
                                                    <?php elseif(strpos($rental->ticket_list, '8 hour') !== false): ?>
                                                        FD
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '9 Hour') !== false): ?>
                                                        FD
                                                    <?php elseif(strpos($rental->ticket_list, '9 hour') !== false): ?>
                                                        FD
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, 'Full Day') !== false): ?>
                                                        FD
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, 'Half Day') !== false): ?>
                                                        HD
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '1 d') !== false): ?>
                                                        1 D
                                                    <?php elseif(strpos($rental->ticket_list, '1 D') !== false): ?>
                                                        1 D
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '2 d') !== false): ?>
                                                        2 D
                                                    <?php elseif(strpos($rental->ticket_list, '2 D') !== false): ?>
                                                        2 D
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '3 d') !== false): ?>
                                                        3 D
                                                    <?php elseif(strpos($rental->ticket_list, '3 D') !== false): ?>
                                                        3 D
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '4 d') !== false): ?>
                                                        4 D
                                                    <?php elseif(strpos($rental->ticket_list, '4 D') !== false): ?>
                                                        4 D
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '5 d') !== false): ?>
                                                        5 D
                                                    <?php elseif(strpos($rental->ticket_list, '5 D') !== false): ?>
                                                        5 D
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '6 d') !== false): ?>
                                                        6 D
                                                    <?php elseif(strpos($rental->ticket_list, '6 D') !== false): ?>
                                                        6 D
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '7 d') !== false): ?>
                                                        7 D
                                                    <?php elseif(strpos($rental->ticket_list, '7 D') !== false): ?>
                                                        7 D
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '8 d') !== false): ?>
                                                        8 D
                                                    <?php elseif(strpos($rental->ticket_list, '8 D') !== false): ?>
                                                        8 D
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '9 d') !== false): ?>
                                                        9 D
                                                    <?php elseif(strpos($rental->ticket_list, '9 D') !== false): ?>
                                                        9 D
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '10 d') !== false): ?>
                                                        10 D
                                                    <?php elseif(strpos($rental->ticket_list, '10 D') !== false): ?>
                                                        10 D
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '11 d') !== false): ?>
                                                        11 D
                                                    <?php elseif(strpos($rental->ticket_list, '11 D') !== false): ?>
                                                        11 D
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '12 d') !== false): ?>
                                                        12 D
                                                    <?php elseif(strpos($rental->ticket_list, '12 D') !== false): ?>
                                                        12 D
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '13 d') !== false): ?>
                                                        13 D
                                                    <?php elseif(strpos($rental->ticket_list, '13 D') !== false): ?>
                                                        13 D
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '14 d') !== false): ?>
                                                        14 D
                                                    <?php elseif(strpos($rental->ticket_list, '14 D') !== false): ?>
                                                        14 D
                                                <?php endif; ?>
                                                <!-- /Rental Duration -->
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="body-center text-center">
                                                <h2><?php echo e($rental->first_name); ?> <?php echo e($rental->last_name); ?> <br />
                                                    <span>
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
                                                    </span>
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="body-right text-right">
                                                <a href="<?php echo e(route('office.precheckShow', $rental->id)); ?>" class="btn btn-primary" >Pre-Check</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

                <div class="tab-pane fade show" id="scarab-tab" role="tabpanel" aria-labelledby="scarab-tab">

                    <?php $__currentLoopData = $rentalScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div class="card mb-4 shadow card-od pre-check-card" >
                                <div class="card-body precheckin">
                                    <div class="row">
                                        <div class="col-12 col-sm-2">
                                            <div class="body-left">
                                                <h4 class="card-title text-center">
                                                    <?php if($rental->activity_item == 'Scarab 215'): ?>
                                                        Scarab
                                                    <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Scarab') !== false): ?>
                                                        Scarab
                                                    <?php else: ?>
                                                        <br>

                                                    <?php endif; ?>
                                                </h4>
                                                <h2 class="card-duration text-center">
                                                    <!-- Rental Duration UPDATED -->
                                                    <?php if(strpos($rental->ticket_list, '1 Hour') !== false): ?>
                                                        1 Hr
                                                    <?php elseif(strpos($rental->ticket_list, '1 hour') !== false): ?>
                                                        1 Hr
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '2 hour') !== false): ?>
                                                        2 Hr
                                                    <?php elseif(strpos($rental->ticket_list, '2 Hour') !== false): ?>
                                                        2 Hr
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '3 Hour') !== false): ?>
                                                        3 Hr
                                                    <?php elseif(strpos($rental->ticket_list, '3 hour') !== false): ?>
                                                        3 Hr
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '4 Hour') !== false): ?>
                                                        HD
                                                    <?php elseif(strpos($rental->ticket_list, '4 hour') !== false): ?>
                                                        HD
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '8 Hour') !== false): ?>
                                                        FD
                                                    <?php elseif(strpos($rental->ticket_list, '8 hour') !== false): ?>
                                                        FD
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '9 Hour') !== false): ?>
                                                        FD
                                                    <?php elseif(strpos($rental->ticket_list, '9 hour') !== false): ?>
                                                        FD
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, 'Full Day') !== false): ?>
                                                        FD
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, 'Half Day') !== false): ?>
                                                        HD
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '1 d') !== false): ?>
                                                        1 D
                                                    <?php elseif(strpos($rental->ticket_list, '1 D') !== false): ?>
                                                        1 D
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '2 d') !== false): ?>
                                                        2 D
                                                    <?php elseif(strpos($rental->ticket_list, '2 D') !== false): ?>
                                                        2 D
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '3 d') !== false): ?>
                                                        3 D
                                                    <?php elseif(strpos($rental->ticket_list, '3 D') !== false): ?>
                                                        3 D
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '4 d') !== false): ?>
                                                        4 D
                                                    <?php elseif(strpos($rental->ticket_list, '4 D') !== false): ?>
                                                        4 D
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '5 d') !== false): ?>
                                                        5 D
                                                    <?php elseif(strpos($rental->ticket_list, '5 D') !== false): ?>
                                                        5 D
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '6 d') !== false): ?>
                                                        6 D
                                                    <?php elseif(strpos($rental->ticket_list, '6 D') !== false): ?>
                                                        6 D
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '7 d') !== false): ?>
                                                        7 D
                                                    <?php elseif(strpos($rental->ticket_list, '7 D') !== false): ?>
                                                        7 D
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '8 d') !== false): ?>
                                                        8 D
                                                    <?php elseif(strpos($rental->ticket_list, '8 D') !== false): ?>
                                                        8 D
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '9 d') !== false): ?>
                                                        9 D
                                                    <?php elseif(strpos($rental->ticket_list, '9 D') !== false): ?>
                                                        9 D
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '10 d') !== false): ?>
                                                        10 D
                                                    <?php elseif(strpos($rental->ticket_list, '10 D') !== false): ?>
                                                        10 D
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '11 d') !== false): ?>
                                                        11 D
                                                    <?php elseif(strpos($rental->ticket_list, '11 D') !== false): ?>
                                                        11 D
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '12 d') !== false): ?>
                                                        12 D
                                                    <?php elseif(strpos($rental->ticket_list, '12 D') !== false): ?>
                                                        12 D
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '13 d') !== false): ?>
                                                        13 D
                                                    <?php elseif(strpos($rental->ticket_list, '13 D') !== false): ?>
                                                        13 D
                                                    <?php endif; ?>
                                                    <?php if(strpos($rental->ticket_list, '14 d') !== false): ?>
                                                        14 D
                                                    <?php elseif(strpos($rental->ticket_list, '14 D') !== false): ?>
                                                        14 D
                                                <?php endif; ?>
                                                <!-- /Rental Duration -->
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="body-center text-center">
                                                <h2><?php echo e($rental->first_name); ?> <?php echo e($rental->last_name); ?> <br />
                                                    <span>
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
                                                    </span>
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="body-right text-right">
                                                <a href="<?php echo e(route('office.precheckShow', $rental->id)); ?>" class="btn btn-primary" >Pre-Check</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>


                <div class="tab-pane fade show" id="pontoon-tab" role="tabpanel" aria-labelledby="pontoon-tab">

                    <?php $__currentLoopData = $rentalPontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="card mb-4 shadow card-od pre-check-card" >
                            <div class="card-body precheckin">
                                <div class="row">
                                    <div class="col-12 col-sm-2">
                                        <div class="body-left">
                                            <h4 class="card-title text-center">
                                                <?php if($rental->activity_item == '23ft. Pontoon Boat'): ?>
                                                    Pontoon
                                                <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Pontoon') !== false): ?>
                                                    Pontoon
                                                <?php else: ?>
                                                    <br>

                                                <?php endif; ?>
                                            </h4>
                                            <h2 class="card-duration text-center">
                                                <!-- Rental Duration UPDATED -->
                                                <?php if(strpos($rental->ticket_list, '1 Hour') !== false): ?>
                                                    1 Hr
                                                <?php elseif(strpos($rental->ticket_list, '1 hour') !== false): ?>
                                                    1 Hr
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '2 hour') !== false): ?>
                                                    2 Hr
                                                <?php elseif(strpos($rental->ticket_list, '2 Hour') !== false): ?>
                                                    2 Hr
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '3 Hour') !== false): ?>
                                                    3 Hr
                                                <?php elseif(strpos($rental->ticket_list, '3 hour') !== false): ?>
                                                    3 Hr
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '4 Hour') !== false): ?>
                                                    HD
                                                <?php elseif(strpos($rental->ticket_list, '4 hour') !== false): ?>
                                                    HD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '8 Hour') !== false): ?>
                                                    FD
                                                <?php elseif(strpos($rental->ticket_list, '8 hour') !== false): ?>
                                                    FD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '9 Hour') !== false): ?>
                                                    FD
                                                <?php elseif(strpos($rental->ticket_list, '9 hour') !== false): ?>
                                                    FD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, 'Full Day') !== false): ?>
                                                    FD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, 'Half Day') !== false): ?>
                                                    HD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '1 d') !== false): ?>
                                                    1 D
                                                <?php elseif(strpos($rental->ticket_list, '1 D') !== false): ?>
                                                    1 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '2 d') !== false): ?>
                                                    2 D
                                                <?php elseif(strpos($rental->ticket_list, '2 D') !== false): ?>
                                                    2 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '3 d') !== false): ?>
                                                    3 D
                                                <?php elseif(strpos($rental->ticket_list, '3 D') !== false): ?>
                                                    3 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '4 d') !== false): ?>
                                                    4 D
                                                <?php elseif(strpos($rental->ticket_list, '4 D') !== false): ?>
                                                    4 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '5 d') !== false): ?>
                                                    5 D
                                                <?php elseif(strpos($rental->ticket_list, '5 D') !== false): ?>
                                                    5 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '6 d') !== false): ?>
                                                    6 D
                                                <?php elseif(strpos($rental->ticket_list, '6 D') !== false): ?>
                                                    6 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '7 d') !== false): ?>
                                                    7 D
                                                <?php elseif(strpos($rental->ticket_list, '7 D') !== false): ?>
                                                    7 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '8 d') !== false): ?>
                                                    8 D
                                                <?php elseif(strpos($rental->ticket_list, '8 D') !== false): ?>
                                                    8 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '9 d') !== false): ?>
                                                    9 D
                                                <?php elseif(strpos($rental->ticket_list, '9 D') !== false): ?>
                                                    9 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '10 d') !== false): ?>
                                                    10 D
                                                <?php elseif(strpos($rental->ticket_list, '10 D') !== false): ?>
                                                    10 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '11 d') !== false): ?>
                                                    11 D
                                                <?php elseif(strpos($rental->ticket_list, '11 D') !== false): ?>
                                                    11 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '12 d') !== false): ?>
                                                    12 D
                                                <?php elseif(strpos($rental->ticket_list, '12 D') !== false): ?>
                                                    12 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '13 d') !== false): ?>
                                                    13 D
                                                <?php elseif(strpos($rental->ticket_list, '13 D') !== false): ?>
                                                    13 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '14 d') !== false): ?>
                                                    14 D
                                                <?php elseif(strpos($rental->ticket_list, '14 D') !== false): ?>
                                                    14 D
                                            <?php endif; ?>
                                            <!-- /Rental Duration -->
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="body-center text-center">
                                            <h2><?php echo e($rental->first_name); ?> <?php echo e($rental->last_name); ?> <br />
                                                <span>
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
                                                    </span>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="body-right text-right">
                                            <a href="<?php echo e(route('office.precheckShow', $rental->id)); ?>" class="btn btn-primary" >Pre-Check</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

                <div class="tab-pane fade show" id="seadoo-tab" role="tabpanel" aria-labelledby="seadoo-tab">

                    <?php $__currentLoopData = $rentalSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="card mb-4 shadow card-od pre-check-card" >
                            <div class="card-body precheckin">
                                <div class="row">
                                    <div class="col-12 col-sm-2">
                                        <div class="body-left">
                                            <h4 class="card-title text-center">
                                                <?php if($rental->activity_item == 'SeaDoo'): ?>
                                                    SeaDoo
                                                <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- SeaDoo') !== false): ?>
                                                    SeaDoo
                                                <?php else: ?>
                                                    <br>

                                                <?php endif; ?>
                                            </h4>
                                            <h2 class="card-duration text-center">
                                                <!-- Rental Duration UPDATED -->
                                                <?php if(strpos($rental->ticket_list, '1 Hour') !== false): ?>
                                                    1 Hr
                                                <?php elseif(strpos($rental->ticket_list, '1 hour') !== false): ?>
                                                    1 Hr
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '2 hour') !== false): ?>
                                                    2 Hr
                                                <?php elseif(strpos($rental->ticket_list, '2 Hour') !== false): ?>
                                                    2 Hr
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '3 Hour') !== false): ?>
                                                    3 Hr
                                                <?php elseif(strpos($rental->ticket_list, '3 hour') !== false): ?>
                                                    3 Hr
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '4 Hour') !== false): ?>
                                                    HD
                                                <?php elseif(strpos($rental->ticket_list, '4 hour') !== false): ?>
                                                    HD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '8 Hour') !== false): ?>
                                                    FD
                                                <?php elseif(strpos($rental->ticket_list, '8 hour') !== false): ?>
                                                    FD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '9 Hour') !== false): ?>
                                                    FD
                                                <?php elseif(strpos($rental->ticket_list, '9 hour') !== false): ?>
                                                    FD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, 'Full Day') !== false): ?>
                                                    FD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, 'Half Day') !== false): ?>
                                                    HD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '1 d') !== false): ?>
                                                    1 D
                                                <?php elseif(strpos($rental->ticket_list, '1 D') !== false): ?>
                                                    1 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '2 d') !== false): ?>
                                                    2 D
                                                <?php elseif(strpos($rental->ticket_list, '2 D') !== false): ?>
                                                    2 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '3 d') !== false): ?>
                                                    3 D
                                                <?php elseif(strpos($rental->ticket_list, '3 D') !== false): ?>
                                                    3 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '4 d') !== false): ?>
                                                    4 D
                                                <?php elseif(strpos($rental->ticket_list, '4 D') !== false): ?>
                                                    4 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '5 d') !== false): ?>
                                                    5 D
                                                <?php elseif(strpos($rental->ticket_list, '5 D') !== false): ?>
                                                    5 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '6 d') !== false): ?>
                                                    6 D
                                                <?php elseif(strpos($rental->ticket_list, '6 D') !== false): ?>
                                                    6 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '7 d') !== false): ?>
                                                    7 D
                                                <?php elseif(strpos($rental->ticket_list, '7 D') !== false): ?>
                                                    7 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '8 d') !== false): ?>
                                                    8 D
                                                <?php elseif(strpos($rental->ticket_list, '8 D') !== false): ?>
                                                    8 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '9 d') !== false): ?>
                                                    9 D
                                                <?php elseif(strpos($rental->ticket_list, '9 D') !== false): ?>
                                                    9 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '10 d') !== false): ?>
                                                    10 D
                                                <?php elseif(strpos($rental->ticket_list, '10 D') !== false): ?>
                                                    10 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '11 d') !== false): ?>
                                                    11 D
                                                <?php elseif(strpos($rental->ticket_list, '11 D') !== false): ?>
                                                    11 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '12 d') !== false): ?>
                                                    12 D
                                                <?php elseif(strpos($rental->ticket_list, '12 D') !== false): ?>
                                                    12 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '13 d') !== false): ?>
                                                    13 D
                                                <?php elseif(strpos($rental->ticket_list, '13 D') !== false): ?>
                                                    13 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '14 d') !== false): ?>
                                                    14 D
                                                <?php elseif(strpos($rental->ticket_list, '14 D') !== false): ?>
                                                    14 D
                                            <?php endif; ?>
                                            <!-- /Rental Duration -->
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="body-center text-center">
                                            <h2><?php echo e($rental->first_name); ?> <?php echo e($rental->last_name); ?> <br />
                                                <span>
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
                                                    </span>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="body-right text-right">
                                            <a href="<?php echo e(route('office.precheckShow', $rental->id)); ?>" class="btn btn-primary" >Pre-Check</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

                <div class="tab-pane fade show" id="segway-tab" role="tabpanel" aria-labelledby="segway-tab">

                    <?php $__currentLoopData = $rentalSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="card mb-4 shadow card-od pre-check-card" >
                            <div class="card-body precheckin">
                                <div class="row">
                                    <div class="col-12 col-sm-2">
                                        <div class="body-left">
                                            <h4 class="card-title text-center">
                                                <?php if($rental->activity_item == 'Segway i2'): ?>
                                                    Segway
                                                <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Segway') !== false): ?>
                                                    Segway
                                                <?php else: ?>
                                                    <br>

                                                <?php endif; ?>
                                            </h4>
                                            <h2 class="card-duration text-center">
                                                <!-- Rental Duration UPDATED -->
                                                <?php if(strpos($rental->ticket_list, '1 Hour') !== false): ?>
                                                    1 Hr
                                                <?php elseif(strpos($rental->ticket_list, '1 hour') !== false): ?>
                                                    1 Hr
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '2 hour') !== false): ?>
                                                    2 Hr
                                                <?php elseif(strpos($rental->ticket_list, '2 Hour') !== false): ?>
                                                    2 Hr
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '3 Hour') !== false): ?>
                                                    3 Hr
                                                <?php elseif(strpos($rental->ticket_list, '3 hour') !== false): ?>
                                                    3 Hr
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '4 Hour') !== false): ?>
                                                    HD
                                                <?php elseif(strpos($rental->ticket_list, '4 hour') !== false): ?>
                                                    HD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '8 Hour') !== false): ?>
                                                    FD
                                                <?php elseif(strpos($rental->ticket_list, '8 hour') !== false): ?>
                                                    FD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '9 Hour') !== false): ?>
                                                    FD
                                                <?php elseif(strpos($rental->ticket_list, '9 hour') !== false): ?>
                                                    FD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, 'Full Day') !== false): ?>
                                                    FD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, 'Half Day') !== false): ?>
                                                    HD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '1 d') !== false): ?>
                                                    1 D
                                                <?php elseif(strpos($rental->ticket_list, '1 D') !== false): ?>
                                                    1 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '2 d') !== false): ?>
                                                    2 D
                                                <?php elseif(strpos($rental->ticket_list, '2 D') !== false): ?>
                                                    2 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '3 d') !== false): ?>
                                                    3 D
                                                <?php elseif(strpos($rental->ticket_list, '3 D') !== false): ?>
                                                    3 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '4 d') !== false): ?>
                                                    4 D
                                                <?php elseif(strpos($rental->ticket_list, '4 D') !== false): ?>
                                                    4 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '5 d') !== false): ?>
                                                    5 D
                                                <?php elseif(strpos($rental->ticket_list, '5 D') !== false): ?>
                                                    5 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '6 d') !== false): ?>
                                                    6 D
                                                <?php elseif(strpos($rental->ticket_list, '6 D') !== false): ?>
                                                    6 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '7 d') !== false): ?>
                                                    7 D
                                                <?php elseif(strpos($rental->ticket_list, '7 D') !== false): ?>
                                                    7 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '8 d') !== false): ?>
                                                    8 D
                                                <?php elseif(strpos($rental->ticket_list, '8 D') !== false): ?>
                                                    8 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '9 d') !== false): ?>
                                                    9 D
                                                <?php elseif(strpos($rental->ticket_list, '9 D') !== false): ?>
                                                    9 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '10 d') !== false): ?>
                                                    10 D
                                                <?php elseif(strpos($rental->ticket_list, '10 D') !== false): ?>
                                                    10 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '11 d') !== false): ?>
                                                    11 D
                                                <?php elseif(strpos($rental->ticket_list, '11 D') !== false): ?>
                                                    11 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '12 d') !== false): ?>
                                                    12 D
                                                <?php elseif(strpos($rental->ticket_list, '12 D') !== false): ?>
                                                    12 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '13 d') !== false): ?>
                                                    13 D
                                                <?php elseif(strpos($rental->ticket_list, '13 D') !== false): ?>
                                                    13 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '14 d') !== false): ?>
                                                    14 D
                                                <?php elseif(strpos($rental->ticket_list, '14 D') !== false): ?>
                                                    14 D
                                            <?php endif; ?>
                                            <!-- /Rental Duration -->
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="body-center text-center">
                                            <h2><?php echo e($rental->first_name); ?> <?php echo e($rental->last_name); ?> <br />
                                                <span>
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
                                                    </span>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="body-right text-right">
                                            <a href="<?php echo e(route('office.precheckShow', $rental->id)); ?>" class="btn btn-primary" >Pre-Check</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

                <div class="tab-pane fade show" id="spyder-tab" role="tabpanel" aria-labelledby="spyder-tab">

                    <?php $__currentLoopData = $rentalSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="card mb-4 shadow card-od pre-check-card" >
                            <div class="card-body precheckin">
                                <div class="row">
                                    <div class="col-12 col-sm-2">
                                        <div class="body-left">
                                            <h4 class="card-title text-center">
                                                <?php if($rental->activity_item == 'Spyder RT-S SE6'): ?>
                                                    Spyder
                                                <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Spyder') !== false): ?>
                                                    Spyder
                                                <?php else: ?>
                                                    <br>

                                                <?php endif; ?>
                                            </h4>
                                            <h2 class="card-duration text-center">
                                                <!-- Rental Duration UPDATED -->
                                                <?php if(strpos($rental->ticket_list, '1 Hour') !== false): ?>
                                                    1 Hr
                                                <?php elseif(strpos($rental->ticket_list, '1 hour') !== false): ?>
                                                    1 Hr
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '2 hour') !== false): ?>
                                                    2 Hr
                                                <?php elseif(strpos($rental->ticket_list, '2 Hour') !== false): ?>
                                                    2 Hr
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '3 Hour') !== false): ?>
                                                    3 Hr
                                                <?php elseif(strpos($rental->ticket_list, '3 hour') !== false): ?>
                                                    3 Hr
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '4 Hour') !== false): ?>
                                                    HD
                                                <?php elseif(strpos($rental->ticket_list, '4 hour') !== false): ?>
                                                    HD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '8 Hour') !== false): ?>
                                                    FD
                                                <?php elseif(strpos($rental->ticket_list, '8 hour') !== false): ?>
                                                    FD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '9 Hour') !== false): ?>
                                                    FD
                                                <?php elseif(strpos($rental->ticket_list, '9 hour') !== false): ?>
                                                    FD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, 'Full Day') !== false): ?>
                                                    FD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, 'Half Day') !== false): ?>
                                                    HD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '1 d') !== false): ?>
                                                    1 D
                                                <?php elseif(strpos($rental->ticket_list, '1 D') !== false): ?>
                                                    1 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '2 d') !== false): ?>
                                                    2 D
                                                <?php elseif(strpos($rental->ticket_list, '2 D') !== false): ?>
                                                    2 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '3 d') !== false): ?>
                                                    3 D
                                                <?php elseif(strpos($rental->ticket_list, '3 D') !== false): ?>
                                                    3 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '4 d') !== false): ?>
                                                    4 D
                                                <?php elseif(strpos($rental->ticket_list, '4 D') !== false): ?>
                                                    4 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '5 d') !== false): ?>
                                                    5 D
                                                <?php elseif(strpos($rental->ticket_list, '5 D') !== false): ?>
                                                    5 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '6 d') !== false): ?>
                                                    6 D
                                                <?php elseif(strpos($rental->ticket_list, '6 D') !== false): ?>
                                                    6 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '7 d') !== false): ?>
                                                    7 D
                                                <?php elseif(strpos($rental->ticket_list, '7 D') !== false): ?>
                                                    7 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '8 d') !== false): ?>
                                                    8 D
                                                <?php elseif(strpos($rental->ticket_list, '8 D') !== false): ?>
                                                    8 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '9 d') !== false): ?>
                                                    9 D
                                                <?php elseif(strpos($rental->ticket_list, '9 D') !== false): ?>
                                                    9 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '10 d') !== false): ?>
                                                    10 D
                                                <?php elseif(strpos($rental->ticket_list, '10 D') !== false): ?>
                                                    10 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '11 d') !== false): ?>
                                                    11 D
                                                <?php elseif(strpos($rental->ticket_list, '11 D') !== false): ?>
                                                    11 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '12 d') !== false): ?>
                                                    12 D
                                                <?php elseif(strpos($rental->ticket_list, '12 D') !== false): ?>
                                                    12 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '13 d') !== false): ?>
                                                    13 D
                                                <?php elseif(strpos($rental->ticket_list, '13 D') !== false): ?>
                                                    13 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '14 d') !== false): ?>
                                                    14 D
                                                <?php elseif(strpos($rental->ticket_list, '14 D') !== false): ?>
                                                    14 D
                                            <?php endif; ?>
                                            <!-- /Rental Duration -->
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="body-center text-center">
                                            <h2><?php echo e($rental->first_name); ?> <?php echo e($rental->last_name); ?> <br />
                                                <span>
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
                                                    </span>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="body-right text-right">
                                            <a href="<?php echo e(route('office.precheckShow', $rental->id)); ?>" class="btn btn-primary" >Pre-Check</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

                <div class="tab-pane fade show" id="kayak-tab" role="tabpanel" aria-labelledby="kayak-tab">

                    <?php $__currentLoopData = $rentalKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="card mb-4 shadow card-od pre-check-card" >
                            <div class="card-body precheckin">
                                <div class="row">
                                    <div class="col-12 col-sm-2">
                                        <div class="body-left">
                                            <h4 class="card-title text-center">
                                                <?php if($rental->activity_item == 'Kayak Single'): ?>
                                                    Single Kayak
                                                <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Kayak Single') !== false): ?>
                                                    Single Kayak
                                                <?php elseif($rental->activity_item == 'Double Kayak'): ?>
                                                    Double Kayak
                                                <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Double Kayak') !== false): ?>
                                                    Double Kayak
                                                <?php else: ?>
                                                    <br>

                                                <?php endif; ?>
                                            </h4>
                                            <h2 class="card-duration text-center">
                                                <!-- Rental Duration UPDATED -->
                                                <?php if(strpos($rental->ticket_list, '1 Hour') !== false): ?>
                                                    1 Hr
                                                <?php elseif(strpos($rental->ticket_list, '1 hour') !== false): ?>
                                                    1 Hr
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '2 hour') !== false): ?>
                                                    2 Hr
                                                <?php elseif(strpos($rental->ticket_list, '2 Hour') !== false): ?>
                                                    2 Hr
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '3 Hour') !== false): ?>
                                                    3 Hr
                                                <?php elseif(strpos($rental->ticket_list, '3 hour') !== false): ?>
                                                    3 Hr
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '4 Hour') !== false): ?>
                                                    HD
                                                <?php elseif(strpos($rental->ticket_list, '4 hour') !== false): ?>
                                                    HD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '8 Hour') !== false): ?>
                                                    FD
                                                <?php elseif(strpos($rental->ticket_list, '8 hour') !== false): ?>
                                                    FD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '9 Hour') !== false): ?>
                                                    FD
                                                <?php elseif(strpos($rental->ticket_list, '9 hour') !== false): ?>
                                                    FD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, 'Full Day') !== false): ?>
                                                    FD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, 'Half Day') !== false): ?>
                                                    HD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '1 d') !== false): ?>
                                                    1 D
                                                <?php elseif(strpos($rental->ticket_list, '1 D') !== false): ?>
                                                    1 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '2 d') !== false): ?>
                                                    2 D
                                                <?php elseif(strpos($rental->ticket_list, '2 D') !== false): ?>
                                                    2 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '3 d') !== false): ?>
                                                    3 D
                                                <?php elseif(strpos($rental->ticket_list, '3 D') !== false): ?>
                                                    3 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '4 d') !== false): ?>
                                                    4 D
                                                <?php elseif(strpos($rental->ticket_list, '4 D') !== false): ?>
                                                    4 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '5 d') !== false): ?>
                                                    5 D
                                                <?php elseif(strpos($rental->ticket_list, '5 D') !== false): ?>
                                                    5 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '6 d') !== false): ?>
                                                    6 D
                                                <?php elseif(strpos($rental->ticket_list, '6 D') !== false): ?>
                                                    6 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '7 d') !== false): ?>
                                                    7 D
                                                <?php elseif(strpos($rental->ticket_list, '7 D') !== false): ?>
                                                    7 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '8 d') !== false): ?>
                                                    8 D
                                                <?php elseif(strpos($rental->ticket_list, '8 D') !== false): ?>
                                                    8 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '9 d') !== false): ?>
                                                    9 D
                                                <?php elseif(strpos($rental->ticket_list, '9 D') !== false): ?>
                                                    9 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '10 d') !== false): ?>
                                                    10 D
                                                <?php elseif(strpos($rental->ticket_list, '10 D') !== false): ?>
                                                    10 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '11 d') !== false): ?>
                                                    11 D
                                                <?php elseif(strpos($rental->ticket_list, '11 D') !== false): ?>
                                                    11 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '12 d') !== false): ?>
                                                    12 D
                                                <?php elseif(strpos($rental->ticket_list, '12 D') !== false): ?>
                                                    12 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '13 d') !== false): ?>
                                                    13 D
                                                <?php elseif(strpos($rental->ticket_list, '13 D') !== false): ?>
                                                    13 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '14 d') !== false): ?>
                                                    14 D
                                                <?php elseif(strpos($rental->ticket_list, '14 D') !== false): ?>
                                                    14 D
                                            <?php endif; ?>
                                            <!-- /Rental Duration -->
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="body-center text-center">
                                            <h2><?php echo e($rental->first_name); ?> <?php echo e($rental->last_name); ?> <br />
                                                <span>
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
                                                    </span>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="body-right text-right">
                                            <a href="<?php echo e(route('office.precheckShow', $rental->id)); ?>" class="btn btn-primary" >Pre-Check</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

                <div class="tab-pane fade show" id="sup-tab" role="tabpanel" aria-labelledby="sup-tab">

                    <?php $__currentLoopData = $rentalSup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="card mb-4 shadow card-od pre-check-card" >
                            <div class="card-body precheckin">
                                <div class="row">
                                    <div class="col-12 col-sm-2">
                                        <div class="body-left">
                                            <h4 class="card-title text-center">
                                                <?php if($rental->activity_item == 'Stand Up Paddleboard'): ?>
                                                    SUP
                                                <?php elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Stand Up') !== false): ?>
                                                    SUP
                                                <?php else: ?>
                                                    <br>

                                                <?php endif; ?>
                                            </h4>
                                            <h2 class="card-duration text-center">
                                                <!-- Rental Duration UPDATED -->
                                                <?php if(strpos($rental->ticket_list, '1 Hour') !== false): ?>
                                                    1 Hr
                                                <?php elseif(strpos($rental->ticket_list, '1 hour') !== false): ?>
                                                    1 Hr
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '2 hour') !== false): ?>
                                                    2 Hr
                                                <?php elseif(strpos($rental->ticket_list, '2 Hour') !== false): ?>
                                                    2 Hr
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '3 Hour') !== false): ?>
                                                    3 Hr
                                                <?php elseif(strpos($rental->ticket_list, '3 hour') !== false): ?>
                                                    3 Hr
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '4 Hour') !== false): ?>
                                                    HD
                                                <?php elseif(strpos($rental->ticket_list, '4 hour') !== false): ?>
                                                    HD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '8 Hour') !== false): ?>
                                                    FD
                                                <?php elseif(strpos($rental->ticket_list, '8 hour') !== false): ?>
                                                    FD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '9 Hour') !== false): ?>
                                                    FD
                                                <?php elseif(strpos($rental->ticket_list, '9 hour') !== false): ?>
                                                    FD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, 'Full Day') !== false): ?>
                                                    FD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, 'Half Day') !== false): ?>
                                                    HD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '1 d') !== false): ?>
                                                    1 D
                                                <?php elseif(strpos($rental->ticket_list, '1 D') !== false): ?>
                                                    1 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '2 d') !== false): ?>
                                                    2 D
                                                <?php elseif(strpos($rental->ticket_list, '2 D') !== false): ?>
                                                    2 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '3 d') !== false): ?>
                                                    3 D
                                                <?php elseif(strpos($rental->ticket_list, '3 D') !== false): ?>
                                                    3 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '4 d') !== false): ?>
                                                    4 D
                                                <?php elseif(strpos($rental->ticket_list, '4 D') !== false): ?>
                                                    4 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '5 d') !== false): ?>
                                                    5 D
                                                <?php elseif(strpos($rental->ticket_list, '5 D') !== false): ?>
                                                    5 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '6 d') !== false): ?>
                                                    6 D
                                                <?php elseif(strpos($rental->ticket_list, '6 D') !== false): ?>
                                                    6 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '7 d') !== false): ?>
                                                    7 D
                                                <?php elseif(strpos($rental->ticket_list, '7 D') !== false): ?>
                                                    7 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '8 d') !== false): ?>
                                                    8 D
                                                <?php elseif(strpos($rental->ticket_list, '8 D') !== false): ?>
                                                    8 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '9 d') !== false): ?>
                                                    9 D
                                                <?php elseif(strpos($rental->ticket_list, '9 D') !== false): ?>
                                                    9 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '10 d') !== false): ?>
                                                    10 D
                                                <?php elseif(strpos($rental->ticket_list, '10 D') !== false): ?>
                                                    10 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '11 d') !== false): ?>
                                                    11 D
                                                <?php elseif(strpos($rental->ticket_list, '11 D') !== false): ?>
                                                    11 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '12 d') !== false): ?>
                                                    12 D
                                                <?php elseif(strpos($rental->ticket_list, '12 D') !== false): ?>
                                                    12 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '13 d') !== false): ?>
                                                    13 D
                                                <?php elseif(strpos($rental->ticket_list, '13 D') !== false): ?>
                                                    13 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '14 d') !== false): ?>
                                                    14 D
                                                <?php elseif(strpos($rental->ticket_list, '14 D') !== false): ?>
                                                    14 D
                                            <?php endif; ?>
                                            <!-- /Rental Duration -->
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="body-center text-center">
                                            <h2><?php echo e($rental->first_name); ?> <?php echo e($rental->last_name); ?> <br />
                                                <span>
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
                                                    </span>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="body-right text-right">
                                            <a href="<?php echo e(route('office.precheckShow', $rental->id)); ?>" class="btn btn-primary" >Pre-Check</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

                <div class="tab-pane fade show" id="aluminum-tab" role="tabpanel" aria-labelledby="aluminum-tab">

                    <?php $__currentLoopData = $rentalAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="card mb-4 shadow card-od pre-check-card" >
                            <div class="card-body precheckin">
                                <div class="row">
                                    <div class="col-12 col-sm-2">
                                        <div class="body-left">
                                            <h4 class="card-title text-center">
                                                <?php if(strpos($rental->activity_item, 'Aluminum')): ?>
                                                    Aluminum
                                                <?php else: ?>
                                                    <br>

                                                <?php endif; ?>
                                            </h4>
                                            <h2 class="card-duration text-center">
                                                <!-- Rental Duration UPDATED -->
                                                <?php if(strpos($rental->ticket_list, '1 Hour') !== false): ?>
                                                    1 Hr
                                                <?php elseif(strpos($rental->ticket_list, '1 hour') !== false): ?>
                                                    1 Hr
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '2 hour') !== false): ?>
                                                    2 Hr
                                                <?php elseif(strpos($rental->ticket_list, '2 Hour') !== false): ?>
                                                    2 Hr
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '3 Hour') !== false): ?>
                                                    3 Hr
                                                <?php elseif(strpos($rental->ticket_list, '3 hour') !== false): ?>
                                                    3 Hr
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '4 Hour') !== false): ?>
                                                    HD
                                                <?php elseif(strpos($rental->ticket_list, '4 hour') !== false): ?>
                                                    HD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '8 Hour') !== false): ?>
                                                    FD
                                                <?php elseif(strpos($rental->ticket_list, '8 hour') !== false): ?>
                                                    FD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '9 Hour') !== false): ?>
                                                    FD
                                                <?php elseif(strpos($rental->ticket_list, '9 hour') !== false): ?>
                                                    FD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, 'Full Day') !== false): ?>
                                                    FD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, 'Half Day') !== false): ?>
                                                    HD
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '1 d') !== false): ?>
                                                    1 D
                                                <?php elseif(strpos($rental->ticket_list, '1 D') !== false): ?>
                                                    1 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '2 d') !== false): ?>
                                                    2 D
                                                <?php elseif(strpos($rental->ticket_list, '2 D') !== false): ?>
                                                    2 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '3 d') !== false): ?>
                                                    3 D
                                                <?php elseif(strpos($rental->ticket_list, '3 D') !== false): ?>
                                                    3 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '4 d') !== false): ?>
                                                    4 D
                                                <?php elseif(strpos($rental->ticket_list, '4 D') !== false): ?>
                                                    4 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '5 d') !== false): ?>
                                                    5 D
                                                <?php elseif(strpos($rental->ticket_list, '5 D') !== false): ?>
                                                    5 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '6 d') !== false): ?>
                                                    6 D
                                                <?php elseif(strpos($rental->ticket_list, '6 D') !== false): ?>
                                                    6 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '7 d') !== false): ?>
                                                    7 D
                                                <?php elseif(strpos($rental->ticket_list, '7 D') !== false): ?>
                                                    7 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '8 d') !== false): ?>
                                                    8 D
                                                <?php elseif(strpos($rental->ticket_list, '8 D') !== false): ?>
                                                    8 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '9 d') !== false): ?>
                                                    9 D
                                                <?php elseif(strpos($rental->ticket_list, '9 D') !== false): ?>
                                                    9 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '10 d') !== false): ?>
                                                    10 D
                                                <?php elseif(strpos($rental->ticket_list, '10 D') !== false): ?>
                                                    10 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '11 d') !== false): ?>
                                                    11 D
                                                <?php elseif(strpos($rental->ticket_list, '11 D') !== false): ?>
                                                    11 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '12 d') !== false): ?>
                                                    12 D
                                                <?php elseif(strpos($rental->ticket_list, '12 D') !== false): ?>
                                                    12 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '13 d') !== false): ?>
                                                    13 D
                                                <?php elseif(strpos($rental->ticket_list, '13 D') !== false): ?>
                                                    13 D
                                                <?php endif; ?>
                                                <?php if(strpos($rental->ticket_list, '14 d') !== false): ?>
                                                    14 D
                                                <?php elseif(strpos($rental->ticket_list, '14 D') !== false): ?>
                                                    14 D
                                            <?php endif; ?>
                                            <!-- /Rental Duration -->
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="body-center text-center">
                                            <h2><?php echo e($rental->first_name); ?> <?php echo e($rental->last_name); ?> <br />
                                                <span>
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
                                                    </span>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="body-right text-right">
                                            <a href="<?php echo e(route('office.precheckShow', $rental->id)); ?>" class="btn btn-primary" >Pre-Check</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>

            </div>






        </div>

    </div>

    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('sidebar'); ?>

        <!-- Instruction Widget -->
        <div class="card my-4 shadow">
            <h5 class="card-header text-center">Customer ID Required</h5>
            <div class="card-body">
                <p>
                    You will be asking for the ID of the person who will be providing the deposit.
                </p>
            </div>
        </div>

        <!-- Pre-Check Widget -->
        <div class="card my-4 shadow">
            <h5 class="card-header text-center">Pre-Checked In</h5>
            <?php if($rentalPreCheckShowCount > 0): ?>
                <?php $__currentLoopData = $rentalPreCheckShow; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h3 class="text-red"><?php echo e($rental->last_name); ?></h3>
                            </div>
                            <div class="col-6">
                                <h6 class="mt-2">
                                    <!-- Rental Duration UPDATED -->
                                    <span class="gray">
                                    <?php if(strpos($rental->ticket_list, '1 Hour') !== false): ?>
                                            1 Hr
                                        <?php elseif(strpos($rental->ticket_list, '1 hour') !== false): ?>
                                            1 Hr
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '2 hour') !== false): ?>
                                            2 Hr
                                        <?php elseif(strpos($rental->ticket_list, '2 Hour') !== false): ?>
                                            2 Hr
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '3 Hour') !== false): ?>
                                            3 Hr
                                        <?php elseif(strpos($rental->ticket_list, '3 hour') !== false): ?>
                                            3 Hr
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '4 Hour') !== false): ?>
                                            HD
                                        <?php elseif(strpos($rental->ticket_list, '4 hour') !== false): ?>
                                            HD
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '8 Hour') !== false): ?>
                                            FD
                                        <?php elseif(strpos($rental->ticket_list, '8 hour') !== false): ?>
                                            FD
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '9 Hour') !== false): ?>
                                            FD
                                        <?php elseif(strpos($rental->ticket_list, '9 hour') !== false): ?>
                                            FD
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, 'Full Day') !== false): ?>
                                            FD
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, 'Half Day') !== false): ?>
                                            HD
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '1 Day') !== false): ?>
                                            1 D
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '2 Day') !== false): ?>
                                            2 D
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '3 Day') !== false): ?>
                                            3 D
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '4 Day') !== false): ?>
                                            4 D
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '5 Day') !== false): ?>
                                            5 D
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '6 Day') !== false): ?>
                                            6 D
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '7 Day') !== false): ?>
                                            7 D
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '8 Day') !== false): ?>
                                            8 D
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '9 Day') !== false): ?>
                                            9 D
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '10 Day') !== false): ?>
                                            10 D
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '11 Day') !== false): ?>
                                            11 D
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '12 Day') !== false): ?>
                                            12 D
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '13 Day') !== false): ?>
                                            13 D
                                        <?php endif; ?>
                                        <?php if(strpos($rental->ticket_list, '14 Day') !== false): ?>
                                            14 D
                                        <?php endif; ?>
                                </span>

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

                                    <?php endif; ?></h6>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php elseif($rentalPreCheckShowCount <= 0): ?>
                       <div class="card-body">
                           <div class="row">
                               <div class="col-12">
                                   <div class="row">
                                       <div class="col-12">
                                           <h3 class="text-center text-red">Nothing Pre-Checked</h3>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
            <?php endif; ?>
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
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/office/precheckin.blade.php ENDPATH**/ ?>