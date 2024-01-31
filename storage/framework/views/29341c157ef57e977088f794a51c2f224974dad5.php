<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dock-master','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dock-master'); ?>
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
            <title>Departing</title>
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('browser_title'); ?>
            <title>Departing | <?php echo e($application->name); ?></title>
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

    <?php $__env->startSection('dock_sidebar'); ?>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card my-4 shadow">
                <h5 class="card-header text-center"><?php echo e($post->title); ?></h5>
                <div class="card-body">
                    <?php echo e(Str::limit($post->body, '200', '...')); ?>

                </div>
                <a href="<?php echo e(route('post', $post->id)); ?>" class="btn btn-secondary">Read More</a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('content'); ?>
        <h1>
            <?php if(auth()->user()->userHasRole('Dock')): ?>
                <button type="button" class="btn btn-dk-sidebar" data-toggle="modal" data-target="#dockSidebar">
                    <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
                </button>
            <?php endif; ?>
                Departing <span class="hidden-xs-contents">Rentals</span>
        </h1>


        <div class="row">
            <!-- Departing Tablist -->
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
                <div class="tab-pane fade show active" id="all-depart-tab" role="tabpanel" aria-labelledby="all-depart-tab">

                    <div class="offset-sm-2 col-sm-8">
                        <h2 class="section-title">All Departing Rentals</h2>

                        <?php $__currentLoopData = $rentalDepart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($rental->status == 'Checked In' && strpos($rental->activity_date, $today) !== false): ?>
                                <div class="card mb-4 shadow card-od card-dark">
                                    <div class="card-header">
                                        <h3>
                                            <a href="#" class="departing" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                <div class="row">
                                                    <div class="col-4 col-sm-3">
                                                        <div class="header-left">
                                                            #<?php echo e($rental->invoice_number); ?>

                                                        </div>
                                                    </div>
                                                    <div class="col-8 col-sm-9">
                                                        <div class="header-right">
                                                            <h4 class="rental-time">
                                                                Checked in:
                                                                <span class="time">
                                                                  <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->check_in_time)->format('h:i A')); ?>

                                                                 </span>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="dock card-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="body-left">
                                                    <h4 class="card-title-name text-center visible-xs"><?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    <h4 class="card-title text-center mt-2">
                                                        <?php if(strpos($rental->ticket_list, '1x') !== false): ?>

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
                                            <div class="col-sm-4">
                                                <div class="body-center">
                                                    <a href="#" data-toggle="modal" data-target="#launchModal<?php echo e($rental->id); ?>" class="btn btn-launch">Launch</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="body-right">
                                                    <h4 class="card-title-name hidden-xs"><?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    <a class="btn-tel rent-depart" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                </div>
                <div class="tab-pane fade show" id="scarab-tab" role="tabpanel" aria-labelledby="scarab-tab">

                    <div class="offset-sm-2 col-sm-8">
                        <h2 class="section-title">Scarabs</h2>

                        <?php $__currentLoopData = $rentalDepartScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($rental->status == 'Checked In' && strpos($rental->activity_date, $today) !== false): ?>
                                <div class="card mb-4 shadow card-od card-dark">
                                    <div class="card-header">
                                        <h3>
                                            <a href="#" class="departing" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                <div class="row">
                                                    <div class="col-4 col-sm-3">
                                                        <div class="header-left">
                                                            #<?php echo e($rental->invoice_number); ?>

                                                        </div>
                                                    </div>
                                                    <div class="col-8 col-sm-9">
                                                        <div class="header-right">
                                                            <h4 class="rental-time">
                                                                Checked in:
                                                                <span class="time">
                                                                  <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->check_in_time)->format('h:i A')); ?>

                                                                 </span>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="dock card-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="body-left">
                                                    <h4 class="card-title-name text-center visible-xs"><?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    <h4 class="card-title text-center mt-2">
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
                                            <div class="col-sm-4">
                                                <div class="body-center">
                                                    <a href="#" data-toggle="modal" data-target="#launchModal<?php echo e($rental->id); ?>" class="btn btn-launch">Launch</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="body-right">
                                                    <h4 class="card-title-name hidden-xs"><?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    <a class="btn-tel rent-depart" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                </div>

                <div class="tab-pane fade show" id="pontoon-tab" role="tabpanel" aria-labelledby="pontoon-tab">

                    <div class="offset-sm-2 col-sm-8">
                        <h2 class="section-title">Pontoons</h2>

                        <?php $__currentLoopData = $rentalDepartPontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($rental->status == 'Checked In' && strpos($rental->activity_date, $today) !== false): ?>
                                <div class="card mb-4 shadow card-od card-dark">
                                    <div class="card-header">
                                        <h3>
                                            <a href="#" class="departing" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                <div class="row">
                                                    <div class="col-4 col-sm-3">
                                                        <div class="header-left">
                                                            #<?php echo e($rental->invoice_number); ?>

                                                        </div>
                                                    </div>
                                                    <div class="col-8 col-sm-9">
                                                        <div class="header-right">
                                                            <h4 class="rental-time">
                                                                Checked in:
                                                                <span class="time">
                                                                  <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->check_in_time)->format('h:i A')); ?>

                                                                 </span>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="dock card-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="body-left">
                                                    <h4 class="card-title-name text-center visible-xs"><?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    <h4 class="card-title text-center mt-2">
                                                        <?php if(strpos($rental->ticket_list, '1x') !== false): ?>

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
                                            <div class="col-sm-4">
                                                <div class="body-center">
                                                    <a href="#" data-toggle="modal" data-target="#launchModal<?php echo e($rental->id); ?>" class="btn btn-launch">Launch</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="body-right">
                                                    <h4 class="card-title-name hidden-xs"><?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    <a class="btn-tel rent-depart" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>

                </div>

                <div class="tab-pane fade show" id="seadoo-tab" role="tabpanel" aria-labelledby="seadoo-tab">

                    <div class="offset-sm-2 col-sm-8">
                        <h2 class="section-title">SeaDoos</h2>

                        <?php $__currentLoopData = $rentalDepartSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($rental->status == 'Checked In' && strpos($rental->activity_date, $today) !== false): ?>
                                <div class="card mb-4 shadow card-od card-dark">
                                    <div class="card-header">
                                        <h3>
                                            <a href="#" class="departing" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                <div class="row">
                                                    <div class="col-4 col-sm-3">
                                                        <div class="header-left">
                                                            #<?php echo e($rental->invoice_number); ?>

                                                        </div>
                                                    </div>
                                                    <div class="col-8 col-sm-9">
                                                        <div class="header-right">
                                                            <h4 class="rental-time">
                                                                Checked in:
                                                                <span class="time">
                                                                  <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->check_in_time)->format('h:i A')); ?>

                                                                 </span>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="dock card-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="body-left">
                                                    <h4 class="card-title-name text-center visible-xs"><?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    <h4 class="card-title text-center mt-2">
                                                        <?php if(strpos($rental->ticket_list, '1x') !== false): ?>

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
                                                        <!-- Rental Duration -->
                                                         <!-- Rental Duration UPDATED -->
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
                                            <div class="col-sm-4">
                                                <div class="body-center">
                                                    <a href="#" data-toggle="modal" data-target="#launchModal<?php echo e($rental->id); ?>" class="btn btn-launch">Launch</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="body-right">
                                                    <h4 class="card-title-name hidden-xs"><?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    <a class="btn-tel rent-depart" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="tab-pane fade show" id="aluminum-tab" role="tabpanel" aria-labelledby="aluminum-tab">

                    <div class="offset-sm-2 col-sm-8">
                        <h2 class="section-title">Aluminum Boat</h2>

                        <?php $__currentLoopData = $rentalDepartAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($rental->status == 'Checked In' && strpos($rental->activity_date, $today) !== false): ?>
                                <div class="card mb-4 shadow card-od card-dark">
                                    <div class="card-header">
                                        <h3>
                                            <a href="#" class="departing" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                <div class="row">
                                                    <div class="col-4 col-sm-3">
                                                        <div class="header-left">
                                                            #<?php echo e($rental->invoice_number); ?>

                                                        </div>
                                                    </div>
                                                    <div class="col-8 col-sm-9">
                                                        <div class="header-right">
                                                            <h4 class="rental-time">
                                                                Checked in:
                                                                <span class="time">
                                                                  <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->check_in_time)->format('h:i A')); ?>

                                                                 </span>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="dock card-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="body-left">
                                                    <h4 class="card-title-name text-center visible-xs"><?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    <h4 class="card-title text-center mt-2">
                                                        <?php if(strpos($rental->ticket_list, '1x') !== false): ?>

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
                                            <div class="col-sm-4">
                                                <div class="body-center">
                                                    <a href="#" data-toggle="modal" data-target="#launchModal<?php echo e($rental->id); ?>" class="btn btn-launch">Launch</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="body-right">
                                                    <h4 class="card-title-name hidden-xs"><?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    <a class="btn-tel rent-depart" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="tab-pane fade show" id="sup-tab" role="tabpanel" aria-labelledby="sup-tab">

                    <div class="offset-sm-2 col-sm-8">
                        <h2 class="section-title">Stand Up Paddleboards</h2>

                        <?php $__currentLoopData = $rentalDepartSup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($rental->status == 'Checked In' && strpos($rental->activity_date, $today) !== false): ?>
                                <div class="card mb-4 shadow card-od card-dark">
                                    <div class="card-header">
                                        <h3>
                                            <a href="#" class="departing" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                <div class="row">
                                                    <div class="col-4 col-sm-3">
                                                        <div class="header-left">
                                                            #<?php echo e($rental->invoice_number); ?>

                                                        </div>
                                                    </div>
                                                    <div class="col-8 col-sm-9">
                                                        <div class="header-right">
                                                            <h4 class="rental-time">
                                                                Checked in:
                                                                <span class="time">
                                                                  <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->check_in_time)->format('h:i A')); ?>

                                                                 </span>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="dock card-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="body-left">
                                                    <h4 class="card-title-name text-center visible-xs"><?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    <h4 class="card-title text-center mt-2">
                                                        <?php if(strpos($rental->ticket_list, '1x') !== false): ?>

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
                                            <div class="col-sm-4">
                                                <div class="body-center">
                                                    <a href="#" data-toggle="modal" data-target="#launchModal<?php echo e($rental->id); ?>" class="btn btn-launch">Launch</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="body-right">
                                                    <h4 class="card-title-name hidden-xs"><?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    <a class="btn-tel rent-depart" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="tab-pane fade show" id="kayak-tab" role="tabpanel" aria-labelledby="kayak-tab">

                    <div class="offset-sm-2 col-sm-8">
                        <h2 class="section-title">Kayaks</h2>

                        <?php $__currentLoopData = $rentalDepartKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($rental->status == 'Checked In' && strpos($rental->activity_date, $today) !== false): ?>
                                <div class="card mb-4 shadow card-od card-dark">
                                    <div class="card-header">
                                        <h3>
                                            <a href="#" class="departing" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                <div class="row">
                                                    <div class="col-4 col-sm-3">
                                                        <div class="header-left">
                                                            #<?php echo e($rental->invoice_number); ?>

                                                        </div>
                                                    </div>
                                                    <div class="col-8 col-sm-9">
                                                        <div class="header-right">
                                                            <h4 class="rental-time">
                                                                Checked in:
                                                                <span class="time">
                                                                  <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->check_in_time)->format('h:i A')); ?>

                                                                 </span>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="dock card-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="body-left">
                                                    <h4 class="card-title-name text-center visible-xs"><?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    <h4 class="card-title text-center mt-2">
                                                        <?php if(strpos($rental->ticket_list, '1x') !== false): ?>

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
                                            <div class="col-sm-4">
                                                <div class="body-center">
                                                    <a href="#" data-toggle="modal" data-target="#launchModal<?php echo e($rental->id); ?>" class="btn btn-launch">Launch</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="body-right">
                                                    <h4 class="card-title-name hidden-xs"><?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    <a class="btn-tel rent-depart" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="tab-pane fade show" id="spyder-tab" role="tabpanel" aria-labelledby="spyder-tab">

                    <div class="offset-sm-2 col-sm-8">
                        <h2 class="section-title">Spyders</h2>

                        <?php $__currentLoopData = $rentalDepartSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($rental->status == 'Checked In' && strpos($rental->activity_date, $today) !== false): ?>
                                <div class="card mb-4 shadow card-od card-dark">
                                    <div class="card-header">
                                        <h3>
                                            <a href="#" class="departing" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                <div class="row">
                                                    <div class="col-4 col-sm-3">
                                                        <div class="header-left">
                                                            #<?php echo e($rental->invoice_number); ?>

                                                        </div>
                                                    </div>
                                                    <div class="col-8 col-sm-9">
                                                        <div class="header-right">
                                                            <h4 class="rental-time">
                                                                Checked in:
                                                                <span class="time">
                                                                  <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->check_in_time)->format('h:i A')); ?>

                                                                 </span>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="dock card-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="body-left">
                                                    <h4 class="card-title-name text-center visible-xs"><?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    <h4 class="card-title text-center mt-2">
                                                        <?php if(strpos($rental->ticket_list, '1x') !== false): ?>

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
                                            <div class="col-sm-4">
                                                <div class="body-center">
                                                    <a href="#" data-toggle="modal" data-target="#launchModal<?php echo e($rental->id); ?>" class="btn btn-launch">Launch</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="body-right">
                                                    <h4 class="card-title-name hidden-xs"><?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    <a class="btn-tel rent-depart" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>

                <div class="tab-pane fade show" id="segway-tab" role="tabpanel" aria-labelledby="segway-tab">

                    <div class="offset-sm-2 col-sm-8">
                        <h2 class="section-title">Segways</h2>

                        <?php $__currentLoopData = $rentalDepartSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($rental->status == 'Checked In' && strpos($rental->activity_date, $today) !== false): ?>
                                <div class="card mb-4 shadow card-od card-dark">
                                    <div class="card-header">
                                        <h3>
                                            <a href="#" class="departing" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                <div class="row">
                                                    <div class="col-4 col-sm-3">
                                                        <div class="header-left">
                                                            #<?php echo e($rental->invoice_number); ?>

                                                        </div>
                                                    </div>
                                                    <div class="col-8 col-sm-9">
                                                        <div class="header-right">
                                                            <h4 class="rental-time">
                                                                Checked in:
                                                                <span class="time">
                                                                  <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->check_in_time)->format('h:i A')); ?>

                                                                 </span>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="dock card-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="body-left">
                                                    <h4 class="card-title-name text-center visible-xs"><?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    <h4 class="card-title text-center mt-2">
                                                        <?php if(strpos($rental->ticket_list, '1x') !== false): ?>

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
                                            <div class="col-sm-4">
                                                <div class="body-center">
                                                    <a href="#" data-toggle="modal" data-target="#launchModal<?php echo e($rental->id); ?>" class="btn btn-launch">Launch</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="body-right">
                                                    <h4 class="card-title-name hidden-xs"><?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    <a class="btn-tel rent-depart" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <div class="tab-pane fade show" id="skidoo-tab" role="tabpanel" aria-labelledby="skidoo-tab">

                    <div class="offset-sm-2 col-sm-8">
                        <h2 class="section-title">Snowmobiles</h2>

                        <?php $__currentLoopData = $rentalDepartSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($rental->status == 'Checked In' && strpos($rental->activity_date, $today) !== false): ?>
                                <div class="card mb-4 shadow card-od card-dark">
                                    <div class="card-header">
                                        <h3>
                                            <a href="#" class="departing" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                <div class="row">
                                                    <div class="col-4 col-sm-3">
                                                        <div class="header-left">
                                                            #<?php echo e($rental->invoice_number); ?>

                                                        </div>
                                                    </div>
                                                    <div class="col-8 col-sm-9">
                                                        <div class="header-right">
                                                            <h4 class="rental-time">
                                                                Checked in:
                                                                <span class="time">
                                                                  <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->check_in_time)->format('h:i A')); ?>

                                                                 </span>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="dock card-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="body-left">
                                                    <h4 class="card-title-name text-center visible-xs"><?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    <h4 class="card-title text-center mt-2">
                                                        <?php if(strpos($rental->ticket_list, '1x') !== false): ?>

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
                                            <div class="col-sm-4">
                                                <div class="body-center">
                                                    <a href="#" data-toggle="modal" data-target="#launchModal<?php echo e($rental->id); ?>" class="btn btn-launch">Launch</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="body-right">
                                                    <h4 class="card-title-name hidden-xs"><?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    <a class="btn-tel rent-depart" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>

                </div>


            </div>


        </div>





    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('sidebar'); ?>

    <?php $__currentLoopData = $rentalDepart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Launch Modal // Controller 2 -->
        <form method="post" action="<?php echo e(route('dock.launchRental', $rental)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <!-- Launch Modal - Step 1 - Staff Info -->
            <div class="modal fade" id="launchModal<?php echo e($rental->id); ?>" tabindex="-1" role="dialog" aria-labelledby="launchModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="launchModalLabel">
                                    <?php echo e($rental->first_name); ?> <?php echo e($rental->last_name); ?>

                                    <span>
                                                    |
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
                                                </span>
                                </h3>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="vehicle">Select Vehicle</label>
                                            <select name="vehicle" id="vehicle" class="form-control mb-3">
                                                <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                    <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>

                                                <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                    <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>

                                                <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                    <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>

                                                <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                    <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>

                                                <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                    <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>

                                                <?php if(strpos($rental->activity_item, 'Renegade') !== false): ?>
                                                    <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>

                                                <?php if(strpos($rental->activity_item, 'Summit') !== false): ?>
                                                    <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>

                                                <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                    <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>

                                                <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                    <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>

                                                <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                    <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>

                                            </select>

                                            <?php if(strpos($rental->ticket_list, '2x') !== false): ?>
                                                <label for="vehicle1">Select Second Vehicle</label>
                                                <select name="vehicle1" id="vehicle1" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>
                                            <?php endif; ?>

                                            <?php if(strpos($rental->ticket_list, '3x') !== false): ?>
                                                <label for="vehicle1">Select Second Vehicle</label>
                                                <select name="vehicle1" id="vehicle1" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle2">Select Third Vehicle</label>
                                                <select name="vehicle2" id="vehicle2" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>
                                            <?php endif; ?>

                                            <?php if(strpos($rental->ticket_list, '4x') !== false): ?>
                                                <label for="vehicle1">Select Second Vehicle</label>
                                                <select name="vehicle1" id="vehicle1" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle2">Select Third Vehicle</label>
                                                <select name="vehicle2" id="vehicle2" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle3">Select Fourth Vehicle</label>
                                                <select name="vehicle3" id="vehicle3" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>
                                            <?php endif; ?>

                                            <?php if(strpos($rental->ticket_list, '5x') !== false): ?>
                                                <label for="vehicle1">Select Second Vehicle</label>
                                                <select name="vehicle1" id="vehicle1" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle2">Select Third Vehicle</label>
                                                <select name="vehicle2" id="vehicle2" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle3">Select Fourth Vehicle</label>
                                                <select name="vehicle3" id="vehicle3" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle4">Select Fifth Vehicle</label>
                                                <select name="vehicle4" id="vehicle4" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>
                                            <?php endif; ?>

                                            <?php if(strpos($rental->ticket_list, '6x') !== false): ?>
                                                <label for="vehicle1">Select Second Vehicle</label>
                                                <select name="vehicle1" id="vehicle1" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle2">Select Third Vehicle</label>
                                                <select name="vehicle2" id="vehicle2" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle3">Select Fourth Vehicle</label>
                                                <select name="vehicle3" id="vehicle3" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle4">Select Fifth Vehicle</label>
                                                <select name="vehicle4" id="vehicle4" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle5">Select Sixth Vehicle</label>
                                                <select name="vehicle5" id="vehicle5" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>
                                            <?php endif; ?>

                                            <?php if(strpos($rental->ticket_list, '7x') !== false): ?>
                                                <label for="vehicle1">Select Second Vehicle</label>
                                                <select name="vehicle1" id="vehicle1" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle2">Select Third Vehicle</label>
                                                <select name="vehicle2" id="vehicle2" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle3">Select Fourth Vehicle</label>
                                                <select name="vehicle3" id="vehicle3" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle4">Select Fifth Vehicle</label>
                                                <select name="vehicle4" id="vehicle4" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle5">Select Sixth Vehicle</label>
                                                <select name="vehicle5" id="vehicle5" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle6">Select Seventh Vehicle</label>
                                                <select name="vehicle6" id="vehicle6" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>
                                            <?php endif; ?>

                                            <?php if(strpos($rental->ticket_list, '8x') !== false): ?>
                                                <label for="vehicle1">Select Second Vehicle</label>
                                                <select name="vehicle1" id="vehicle1" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle2">Select Third Vehicle</label>
                                                <select name="vehicle2" id="vehicle2" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle3">Select Fourth Vehicle</label>
                                                <select name="vehicle3" id="vehicle3" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle4">Select Fifth Vehicle</label>
                                                <select name="vehicle4" id="vehicle4" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle5">Select Sixth Vehicle</label>
                                                <select name="vehicle5" id="vehicle5" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle6">Select Seventh Vehicle</label>
                                                <select name="vehicle6" id="vehicle6" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle7">Select Eighth Vehicle</label>
                                                <select name="vehicle7" id="vehicle7" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>
                                            <?php endif; ?>

                                            <?php if(strpos($rental->ticket_list, '9x') !== false): ?>
                                                <label for="vehicle1">Select Second Vehicle</label>
                                                <select name="vehicle1" id="vehicle1" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle2">Select Third Vehicle</label>
                                                <select name="vehicle2" id="vehicle2" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle3">Select Fourth Vehicle</label>
                                                <select name="vehicle3" id="vehicle3" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle4">Select Fifth Vehicle</label>
                                                <select name="vehicle4" id="vehicle4" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle5">Select Sixth Vehicle</label>
                                                <select name="vehicle5" id="vehicle5" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle6">Select Seventh Vehicle</label>
                                                <select name="vehicle6" id="vehicle6" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle7">Select Eighth Vehicle</label>
                                                <select name="vehicle7" id="vehicle7" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle8">Select Ninth Vehicle</label>
                                                <select name="vehicle8" id="vehicle8" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                            <?php endif; ?>

                                            <?php if(strpos($rental->ticket_list, '10x') !== false): ?>
                                                <label for="vehicle1">Select Second Vehicle</label>
                                                <select name="vehicle1" id="vehicle1" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle2">Select Third Vehicle</label>
                                                <select name="vehicle2" id="vehicle2" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle3">Select Fourth Vehicle</label>
                                                <select name="vehicle3" id="vehicle3" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle4">Select Fifth Vehicle</label>
                                                <select name="vehicle4" id="vehicle4" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle5">Select Sixth Vehicle</label>
                                                <select name="vehicle5" id="vehicle5" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle6">Select Seventh Vehicle</label>
                                                <select name="vehicle6" id="vehicle6" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle7">Select Eighth Vehicle</label>
                                                <select name="vehicle7" id="vehicle7" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle8">Select Ninth Vehicle</label>
                                                <select name="vehicle8" id="vehicle8" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>

                                                <label for="vehicle9">Select Tenth Vehicle</label>
                                                <select name="vehicle9" id="vehicle9" class="form-control mb-3">

                                                    <?php if(strpos($rental->activity_item, 'Scarab') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SeaDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Pontoon') !== false): ?>
                                                        <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Spyder') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Aluminum') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'SkiDoo') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Segway') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Stand') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleStand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if(strpos($rental->activity_item, 'Kayak') !== false): ?>
                                                        <?php $__currentLoopData = $vehicleKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>
                                            <?php endif; ?>

                                        </div>
                                        <div class="form-group">
                                            <label for="launched_by">Select Yourself...</label>
                                            <select name="launched_by" id="launched_by" class="form-control">
                                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($user->id); ?>"><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="customer_notes">Customer Notes</label>
                                        <textarea name="customer_notes" id="customer_notes" cols="30" rows="10"
                                                  class="form-control mb-3"><?php echo e($rental->customer_notes); ?></textarea>
                                    </div>
                                </div>
                                <input type="hidden" value="On Water" name="status">


                                <div class="modal-footer">
                                    <input type="hidden" value="<?php echo e($dateNow); ?>" name="launched_time">
                                    <button class="btn btn-secondary btn-left" type="button" data-toggle="modal" data-dismiss="modal">CANCEL</button>
                                    <button class="btn btn-primary-red btn-modal" type="button" data-toggle="modal" data-dismiss="modal" data-target="#launchModal-2<?php echo e($rental->id); ?>">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- /Launch Modal - Step 1 - Staff Info -->

            <!-- Launch Modal - Step 2 - Customer Info -->
            <div class="modal fade" id="launchModal-2<?php echo e($rental->id); ?>" tabindex="-1" role="dialog" aria-labelledby="launchModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="launchModalLabel">
                                <?php echo e($rental->first_name); ?> <?php echo e($rental->last_name); ?>

                                <span>
                                                |
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
                                            </span>
                            </h3>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <form class="signature-pad-form" action="#" method="POST">
                                            <h3>Customer Agrees to: </h3>

                                            <ul class="customer-agree-list">
                                                <li class="mb-3">
                                                    <h5>
                                                        Pay a Damage Deposit which will be applied toward the repair or replacement of any
                                                        damaged or missing equipment. The customer understands they are fully responsible for
                                                        the full amount of damage done to the equipment even if it exceeds the deposit.
                                                    </h5>
                                                </li>
                                                <li class="mb-3">
                                                    <h5>
                                                        If there is any failure of equipment due to the customer negligence or error the full rental
                                                        fee will still be charged. We charge $135/hr for a Flooded Engine & $135/hr for a Search & Rescue.
                                                    </h5>
                                                </li>
                                                <li>
                                                    <h5>
                                                        Other fees: We charge $100 for breaking the slow no wake zone! We charge $135/hr for returning late or
                                                        after hours of the business - Ask our staff when you are due back!
                                                    </h5>
                                                </li>
                                            </ul>

                                            <p><b>Signature</b></p>
                                            <canvas height="40" width="300" class="signature-pad"></canvas>
                                            <p><a href="#" class="clear-button">Clear</a></p>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary-red" type="submit">SUBMIT</button>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <input type="hidden" value="On Water" name="status">
                                <input type="hidden" value="<?php echo e($dateNow); ?>" name="launched_time">
                                <button class="btn btn-secondary btn-left" type="button" data-toggle="modal" data-dismiss="modal">CANCEL</button>
                                <a href="#" class="btn btn-info" type="button" data-toggle="modal" data-dismiss="modal" data-target="#launchModal<?php echo e($rental->id); ?>">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Launch Modal - Step 2 - Customer Info -->



        </form>

        <!-- Dock Modal -->
        <div class="modal fade" id="dock<?php echo e($rental->id); ?>" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 id="modal_rental_title" class="modal-title"><span><?php echo e($rental->activity_item); ?></span> | <?php echo e($rental->first_name); ?> <?php echo e($rental->last_name); ?> &nbsp;
                            <span class="status">
                                    |
                                        &nbsp; <?php echo e($rental->status); ?></span></h3>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <!-- /Rental Information -->
                        <div class="modal-rental-info">
                            <div class="row">
                                <!-- Renter Info -->
                                <div class="col-sm-6">
                                    <div class="area-box">
                                        <h4 class="modal-section-title">Customer Info</h4>
                                        <div class="row">
                                            <!-- Item -->
                                            <div class="col-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">First Name:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item"><?php echo e($rental->first_name); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Item -->
                                            <!-- Item -->
                                            <div class="col-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">Last Name:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item"><?php echo e($rental->last_name); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Item -->
                                            <!-- Item -->
                                            <div class="col-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">Phone:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item"><?php echo e($rental->phone); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Item -->
                                            <!-- Item -->
                                            <div class="col-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">Zip Code:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item"><?php echo e($rental->zip_code); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Item -->
                                            <!-- Item -->
                                            <div class="col-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">Notes:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item"><?php echo e($rental->customer_notes); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Item -->
                                        </div>

                                    </div>
                                </div>
                                <!-- /Renter Info -->
                                <!-- Rental Info -->
                                <div class="col-sm-6">
                                    <div class="area-box">
                                        <h4 class="modal-section-title">Rental Info</h4>
                                        <div class="row">
                                            <!-- PreCheck by -->
                                            <?php if($rental->precheck_by == ''): ?>
                                                &nbsp;
                                            <?php else: ?>
                                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($rental->check_in_by == $user->id): ?>
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
                                        </div>
                                    </div>
                                </div>
                                <!-- /Rental Info -->
                            </div>

                        </div>
                        <!-- /Rental Information -->

                        <!-- COC Info -->
                        <?php if($rental->status == 'COC'): ?>

                            <div class="modal-coc-info">
                                <!-- Modal Section Title -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="modal-section-title">Change of Condition</h4>
                                        <hr class="rounded" />
                                    </div>
                                </div>
                                <!-- /Modal Section Title -->

                                <div class="row">

                                    <div class="col-sm-6">
                                        <img class="img-responsive" src="<?php echo e(asset('storage/' . $rental->image_1)); ?>" height="150px" width="auto" alt="COC <?php echo e($rental->booking_id); ?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <h3><?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($rental->coc_vehicle == $vehicle->id): ?>
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

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Dock Modal -->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    <!-- Office Pre-Check Modal -->
    <div class="modal fade" id="office_precheck" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 id="modal_rental_title" class="modal-title">Office <span>Pre-Check </span></h3>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body office-pre-check">

                    <!-- Rental Information -->

                    <?php if($officePrecheckCount > 0): ?>
                            <?php $__currentLoopData = $officePrecheck; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="office-pre-check-line">
                                <div class="row">
                                    <div class="col-3 col-sm-2">
                                        <h3 class="red">
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
                                        </h3>
                                    </div>
                                    <div class="col-9 col-sm-4">
                                        <h3 class="white">
                                    <span>
                                        <?php if(strpos($rental->ticket_list, '1x') !== false): ?>

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
                                        </h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3>
                                            <?php echo e($rental->first_name); ?>  <?php echo e($rental->last_name); ?>

                                        </h3>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php elseif($officePrecheckCount <= 0): ?>
                        <h3 class="text-center text-gray-400">Nothing Pre-Checked In...</h3>
                    <?php endif; ?>


                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Office Pre-Check Modal -->



    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('scripts'); ?>
    <!-- Page level plugins -->
        <script src="<?php echo e(asset('vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>

        <!-- Page level custom scripts -->
        <script src="<?php echo e(asset('js/demo/datatables-scripts.js')); ?>"></script>
        <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
    <?php $__env->stopSection(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/dock/departing.blade.php ENDPATH**/ ?>