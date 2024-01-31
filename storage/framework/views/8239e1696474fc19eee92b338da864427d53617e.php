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
            <title>Returning</title>
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('browser_title'); ?>
            <title>Returning | <?php echo e($application->name); ?></title>
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
                Returning <span class="hidden-xs-contents">Rentals</span>
        </h1>


        <div class="row">


            <!-- Returning -->
            <!-- Returning Tab List -->
            <ul class="nav nav-tabs nav-justified mb-3 dock-depart" id="runnerView" role="tablist">

                <li class="nav-item">
                    <a class="nav-link active" id="view-all-tab" data-toggle="tab" href="#all-tab" role="tab" aria-controls="all-tab"
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

            <!-- Returning Tab Content -->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="all-tab" role="tabpanel" aria-labelledby="all-tab">

                    <div class="offset-sm-2 col-sm-8">
                        <h2 class="section-title">All Returning Rentals</h2>
                        <?php $__currentLoopData = $rentalReturn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="status-section">
                                <?php if($rental->status === 'On Dock' && strpos($rental->activity_date, $today) !== false): ?>
                                    <div class="card mb-4 shadow card-od card-dark">
                                        <div class="card-header">
                                            <h3>
                                                <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                    <div class="row">
                                                         <div class="col-12 col-sm-3">
                                                            <div class="header-left">
                                                                #<?php echo e($rental->invoice_number); ?>

                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-9">
                                                            <div class="header-right">
                                                                <h4 class="">
                                                                    <span>Launched: </span>
                                                                    <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                    <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                    <span>Due: </span>
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
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="office card-body">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="body-left">
                                                        <h4 class="card-title text-center mt-2">
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
                                                <div class="col-sm-8">
                                                    <div class="body-center">
                                                        <div class="row">
                                                            <div class="col-sm-4 pl-0">
                                                                &nbsp;
                                                            </div>
                                                            <div class="col-sm-4 pl-0 mobile-padding">
                                                                <button href="#" data-toggle="modal" data-target="#clearModal<?php echo e($rental->id); ?>" class="btn btn-clear btn-dock">Clear</button>
                                                            </div>
                                                            <div class="col-sm-4 pl-0 mobile-padding">
                                                                <a href="#" data-toggle="modal" data-target="#cocModal<?php echo e($rental->id); ?>" class="btn btn-coc btn-dock">COC</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <h4>
                                                    <span class="left">
                                                        <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    </span>
                                                <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                            </h4>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="status-section">
                                <?php if($rental->status == 'On Water' && strpos($rental->activity_date, $today) !== false): ?>
                                    <div class="card mb-4 shadow card-od card-dark">
                                        <div class="card-header">
                                            <h3>
                                                <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                    <div class="row">
                                                         <div class="col-12 col-sm-3">
                                                            <div class="header-left">
                                                                #<?php echo e($rental->invoice_number); ?>

                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-9">
                                                            <div class="header-right">
                                                                <h4 class="">
                                                                    <span>Launched: </span>
                                                                    <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                    <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                    <span>Due: </span>
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
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="office card-body">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="body-left">
                                                        <h4 class="card-title text-center mt-2">
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
                                                <div class="col-sm-8">
                                                    <div class="body-center">
                                                        <div class="row">
                                                            <div class="col-sm-4 pl-0 mobile-padding">
                                                                <form action="<?php echo e(route('dock.vehicleOnDock', $rental->id)); ?>" method="post">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('PUT'); ?>
                                                                    
                                                                    <input type="hidden" value="On Dock" name="status">
                                                                    <button class="btn btn-on-deck btn-dock" type="submit">On Dock</button>
                                                                </form>
                                                            </div>
                                                            <div class="col-sm-4 pl-0 mobile-padding">
                                                                <a href="#" data-toggle="modal" data-target="#clearModal<?php echo e($rental->id); ?>" class="btn btn-clear btn-dock">Clear</a>
                                                            </div>
                                                            <div class="col-sm-4 pl-0 mobile-padding">
                                                                <a href="#" data-toggle="modal" data-target="#cocModal<?php echo e($rental->id); ?>" class="btn btn-coc btn-dock">COC</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <h4>
                                                    <span class="left">
                                                        <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    </span>
                                                <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                            </h4>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>


                            <div class="status-section">
                                <?php if($rental->status == 'COC' && strpos($rental->activity_date, $today) !== false): ?>
                                    <div class="card mb-4 shadow card-od card-dark">
                                        <div class="card-header">
                                            <h3>
                                                <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                    <div class="row">
                                                         <div class="col-12 col-sm-3">
                                                            <div class="header-left">
                                                                #<?php echo e($rental->invoice_number); ?>

                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-9">
                                                            <div class="header-right">
                                                                <h4 class="">
                                                                    <span>Launched: </span>
                                                                    <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                    <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                    <span>Due: </span>
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
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="office card-body">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="body-left">
                                                        <h4 class="card-title text-center mt-2">
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
                                                <div class="col-12 col-sm-6">
                                                    <div class="body-center">
                                                        <div class="row">
                                                            <div class="col-sm-12 pl-0 pt-2">
                                                                <h2 class="dock rental-status text-uppercase text-sm-center"><?php echo e($rental->status); ?></h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <h4>
                                                    <span class="left">
                                                        <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    </span>
                                                <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                            </h4>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>


                            <div class="status-section">
                                <?php if($rental->status == 'Clear' && strpos($rental->activity_date, $today) !== false): ?>
                                    <div class="card mb-4 shadow card-od card-dark">
                                        <div class="card-header">
                                            <h3>
                                                <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                    <div class="row">
                                                         <div class="col-12 col-sm-3">
                                                            <div class="header-left">
                                                                #<?php echo e($rental->invoice_number); ?>

                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-9">
                                                            <div class="header-right">
                                                                <h4 class="">
                                                                    <span>Launched: </span>
                                                                    <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                    <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                    <span>Due: </span>
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
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="office card-body">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="body-left">
                                                        <h4 class="card-title text-center mt-2">
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
                                                <div class="col-12 col-sm-6">
                                                    <div class="body-center">
                                                        <div class="row">
                                                            <div class="col-sm-12 pl-0 pt-2">
                                                                <h2 class="dock rental-status text-uppercase"><?php echo e($rental->status); ?></h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <h4>
                                                    <span class="left">
                                                        <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    </span>
                                                <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                            </h4>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <?php if($rentalTypeScarab): ?>
                    <div class="tab-pane fade show" id="scarab-tab" role="tabpanel" aria-labelledby="scarab-tab">

                        <div class="offset-sm-2 col-sm-8">
                            <h2 class="section-title">Scarabs</h2>
                            <?php $__currentLoopData = $rentalReturnScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="status-section">
                                    <?php if($rental->status === 'On Dock' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <button href="#" data-toggle="modal" data-target="#clearModal<?php echo e($rental->id); ?>" class="btn btn-clear btn-dock">Clear</button>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal<?php echo e($rental->id); ?>" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                                    <span class="left">
                                                        <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="status-section">
                                    <?php if($rental->status == 'On Water' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <form action="<?php echo e(route('dock.vehicleOnDock', $rental->id)); ?>" method="post">
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php echo method_field('PUT'); ?>
                                                                        
                                                                        <input type="hidden" value="On Dock" name="status">
                                                                        <button class="btn btn-on-deck btn-dock" type="submit">On Dock</button>
                                                                    </form>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#clearModal<?php echo e($rental->id); ?>" class="btn btn-clear btn-dock">Clear</a>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal<?php echo e($rental->id); ?>" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                                    <span class="left">
                                                        <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>


                                <div class="status-section">
                                    <?php if($rental->status == 'COC' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                   <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase"><?php echo e($rental->status); ?></h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                                    <span class="left">
                                                        <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>


                                <div class="status-section">
                                    <?php if($rental->status == 'Clear' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                   <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase"><?php echo e($rental->status); ?></h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                                    <span class="left">
                                                        <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if($rentalTypePontoon): ?>
                    <div class="tab-pane fade show" id="pontoon-tab" role="tabpanel" aria-labelledby="pontoon-tab">

                    <div class="offset-sm-2 col-sm-8">
                        <h2 class="section-title">Pontoons</h2>
                        <?php $__currentLoopData = $rentalReturnPontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="status-section">
                                <?php if($rental->status === 'On Dock' && strpos($rental->activity_date, $today) !== false): ?>
                                    <div class="card mb-4 shadow card-od card-dark">
                                        <div class="card-header">
                                            <h3>
                                                <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                    <div class="row">
                                                         <div class="col-12 col-sm-3">
                                                            <div class="header-left">
                                                                #<?php echo e($rental->invoice_number); ?>

                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-9">
                                                            <div class="header-right">
                                                                <h4 class="">
                                                                    <span>Launched: </span>
                                                                    <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                    <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                    <span>Due: </span>
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
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="office card-body">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="body-left">
                                                        <h4 class="card-title text-center mt-2">
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
                                                <div class="col-sm-8">
                                                    <div class="body-center">
                                                        <div class="row">
                                                            <div class="col-sm-4 pl-0">
                                                                &nbsp;
                                                            </div>
                                                            <div class="col-sm-4 pl-0 mobile-padding">
                                                                <button href="#" data-toggle="modal" data-target="#clearModal<?php echo e($rental->id); ?>" class="btn btn-clear btn-dock">Clear</button>
                                                            </div>
                                                            <div class="col-sm-4 pl-0 mobile-padding">
                                                                <a href="#" data-toggle="modal" data-target="#cocModal<?php echo e($rental->id); ?>" class="btn btn-coc btn-dock">COC</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <h4>
                                                    <span class="left">
                                                        <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    </span>
                                                <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                            </h4>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="status-section">
                                <?php if($rental->status == 'On Water' && strpos($rental->activity_date, $today) !== false): ?>
                                    <div class="card mb-4 shadow card-od card-dark">
                                        <div class="card-header">
                                            <h3>
                                                <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                    <div class="row">
                                                         <div class="col-12 col-sm-3">
                                                            <div class="header-left">
                                                                #<?php echo e($rental->invoice_number); ?>

                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-9">
                                                            <div class="header-right">
                                                                <h4 class="">
                                                                    <span>Launched: </span>
                                                                    <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                    <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                    <span>Due: </span>
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
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="office card-body">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="body-left">
                                                        <h4 class="card-title text-center mt-2">
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
                                                <div class="col-sm-8">
                                                    <div class="body-center">
                                                        <div class="row">
                                                            <div class="col-sm-4 pl-0 mobile-padding">
                                                                <form action="<?php echo e(route('dock.vehicleOnDock', $rental->id)); ?>" method="post">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('PUT'); ?>
                                                                    
                                                                    <input type="hidden" value="On Dock" name="status">
                                                                    <button class="btn btn-on-deck btn-dock" type="submit">On Dock</button>
                                                                </form>
                                                            </div>
                                                            <div class="col-sm-4 pl-0 mobile-padding">
                                                                <a href="#" data-toggle="modal" data-target="#clearModal<?php echo e($rental->id); ?>" class="btn btn-clear btn-dock">Clear</a>
                                                            </div>
                                                            <div class="col-sm-4 pl-0 mobile-padding">
                                                                <a href="#" data-toggle="modal" data-target="#cocModal<?php echo e($rental->id); ?>" class="btn btn-coc btn-dock">COC</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <h4>
                                                    <span class="left">
                                                        <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    </span>
                                                <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                            </h4>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>


                            <div class="status-section">
                                <?php if($rental->status == 'COC' && strpos($rental->activity_date, $today) !== false): ?>
                                    <div class="card mb-4 shadow card-od card-dark">
                                        <div class="card-header">
                                            <h3>
                                                <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                    <div class="row">
                                                         <div class="col-12 col-sm-3">
                                                            <div class="header-left">
                                                                #<?php echo e($rental->invoice_number); ?>

                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-9">
                                                            <div class="header-right">
                                                                <h4 class="">
                                                                    <span>Launched: </span>
                                                                    <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                    <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                    <span>Due: </span>
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
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="office card-body">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="body-left">
                                                        <h4 class="card-title text-center mt-2">
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
                                                <div class="col-12 col-sm-6">
                                                    <div class="body-center">
                                                        <div class="row">
                                                            <div class="col-sm-12 pl-0 pt-2">
                                                                <h2 class="dock rental-status text-uppercase"><?php echo e($rental->status); ?></h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <h4>
                                                    <span class="left">
                                                        <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    </span>
                                                <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                            </h4>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>


                            <div class="status-section">
                                <?php if($rental->status == 'Clear' && strpos($rental->activity_date, $today) !== false): ?>
                                    <div class="card mb-4 shadow card-od card-dark">
                                        <div class="card-header">
                                            <h3>
                                                <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                    <div class="row">
                                                         <div class="col-12 col-sm-3">
                                                            <div class="header-left">
                                                                #<?php echo e($rental->invoice_number); ?>

                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-9">
                                                            <div class="header-right">
                                                                <h4 class="">
                                                                    <span>Launched: </span>
                                                                    <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                    <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                    <span>Due: </span>
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
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="office card-body">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="body-left">
                                                        <h4 class="card-title text-center mt-2">
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
                                                <div class="col-12 col-sm-6">
                                                    <div class="body-center">
                                                        <div class="row">
                                                            <div class="col-sm-12 pl-0 pt-2">
                                                                <h2 class="dock rental-status text-uppercase"><?php echo e($rental->status); ?></h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <h4>
                                                    <span class="left">
                                                        <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                    </span>
                                                <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                            </h4>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php endif; ?>

                <?php if($rentalTypeSeaDoo): ?>
                    <div class="tab-pane fade show" id="seadoo-tab" role="tabpanel" aria-labelledby="seadoo-tab">

                        <div class="offset-sm-2 col-sm-8">
                            <h2 class="section-title">SeaDoos</h2>
                            <?php $__currentLoopData = $rentalReturnSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="status-section">
                                    <?php if($rental->status === 'On Dock' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <button href="#" data-toggle="modal" data-target="#clearModal<?php echo e($rental->id); ?>" class="btn btn-clear btn-dock">Clear</button>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal<?php echo e($rental->id); ?>" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                                <span class="left">
                                                    <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="status-section">
                                    <?php if($rental->status == 'On Water' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <form action="<?php echo e(route('dock.vehicleOnDock', $rental->id)); ?>" method="post">
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php echo method_field('PUT'); ?>
                                                                        
                                                                        <input type="hidden" value="On Dock" name="status">
                                                                        <button class="btn btn-on-deck btn-dock" type="submit">On Dock</button>
                                                                    </form>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#clearModal<?php echo e($rental->id); ?>" class="btn btn-clear btn-dock">Clear</a>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal<?php echo e($rental->id); ?>" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                                <span class="left">
                                                    <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>


                                <div class="status-section">
                                    <?php if($rental->status == 'COC' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                   <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase"><?php echo e($rental->status); ?></h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                                <span class="left">
                                                    <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>


                                <div class="status-section">
                                    <?php if($rental->status == 'Clear' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                   <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase"><?php echo e($rental->status); ?></h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                                <span class="left">
                                                    <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                                </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if($rentalTypeSup): ?>
                    <div class="tab-pane fade show" id="sup-tab" role="tabpanel" aria-labelledby="sup-tab">

                        <div class="offset-sm-2 col-sm-8">
                            <h2 class="section-title">SUPs</h2>
                            <?php $__currentLoopData = $rentalReturnSup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="status-section">
                                    <?php if($rental->status === 'On Dock' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <button href="#" data-toggle="modal" data-target="#clearModal<?php echo e($rental->id); ?>" class="btn btn-clear btn-dock">Clear</button>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal<?php echo e($rental->id); ?>" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                            <span class="left">
                                                <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                            </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="status-section">
                                    <?php if($rental->status == 'On Water' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <form action="<?php echo e(route('dock.vehicleOnDock', $rental->id)); ?>" method="post">
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php echo method_field('PUT'); ?>
                                                                        
                                                                        <input type="hidden" value="On Dock" name="status">
                                                                        <button class="btn btn-on-deck btn-dock" type="submit">On Dock</button>
                                                                    </form>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#clearModal<?php echo e($rental->id); ?>" class="btn btn-clear btn-dock">Clear</a>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal<?php echo e($rental->id); ?>" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                            <span class="left">
                                                <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                            </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>


                                <div class="status-section">
                                    <?php if($rental->status == 'COC' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                   <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase"><?php echo e($rental->status); ?></h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                            <span class="left">
                                                <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                            </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>


                                <div class="status-section">
                                    <?php if($rental->status == 'Clear' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                   <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase"><?php echo e($rental->status); ?></h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                            <span class="left">
                                                <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                            </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if($rentalTypeKayak): ?>
                    <div class="tab-pane fade show" id="kayak-tab" role="tabpanel" aria-labelledby="kayak-tab">

                        <div class="offset-sm-2 col-sm-8">
                            <h2 class="section-title">Kayaks</h2>
                            <?php $__currentLoopData = $rentalReturnKayak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="status-section">
                                    <?php if($rental->status === 'On Dock' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <button href="#" data-toggle="modal" data-target="#clearModal<?php echo e($rental->id); ?>" class="btn btn-clear btn-dock">Clear</button>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal<?php echo e($rental->id); ?>" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                        <span class="left">
                                            <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                        </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="status-section">
                                    <?php if($rental->status == 'On Water' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <form action="<?php echo e(route('dock.vehicleOnDock', $rental->id)); ?>" method="post">
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php echo method_field('PUT'); ?>
                                                                        
                                                                        <input type="hidden" value="On Dock" name="status">
                                                                        <button class="btn btn-on-deck btn-dock" type="submit">On Dock</button>
                                                                    </form>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#clearModal<?php echo e($rental->id); ?>" class="btn btn-clear btn-dock">Clear</a>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal<?php echo e($rental->id); ?>" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                        <span class="left">
                                            <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                        </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>


                                <div class="status-section">
                                    <?php if($rental->status == 'COC' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                   <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase"><?php echo e($rental->status); ?></h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                        <span class="left">
                                            <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                        </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>


                                <div class="status-section">
                                    <?php if($rental->status == 'Clear' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                   <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase"><?php echo e($rental->status); ?></h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                        <span class="left">
                                            <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                        </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if($rentalTypeSpyder): ?>
                    <div class="tab-pane fade show" id="spyder-tab" role="tabpanel" aria-labelledby="spyder-tab">

                        <div class="offset-sm-2 col-sm-8">
                            <h2 class="section-title">Spyders</h2>
                            <?php $__currentLoopData = $rentalReturnSpyder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="status-section">
                                    <?php if($rental->status === 'On Dock' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <button href="#" data-toggle="modal" data-target="#clearModal<?php echo e($rental->id); ?>" class="btn btn-clear btn-dock">Clear</button>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal<?php echo e($rental->id); ?>" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                    <span class="left">
                                        <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                    </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="status-section">
                                    <?php if($rental->status == 'On Water' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <form action="<?php echo e(route('dock.vehicleOnDock', $rental->id)); ?>" method="post">
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php echo method_field('PUT'); ?>
                                                                        
                                                                        <input type="hidden" value="On Dock" name="status">
                                                                        <button class="btn btn-on-deck btn-dock" type="submit">On Dock</button>
                                                                    </form>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#clearModal<?php echo e($rental->id); ?>" class="btn btn-clear btn-dock">Clear</a>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal<?php echo e($rental->id); ?>" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                    <span class="left">
                                        <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                    </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>


                                <div class="status-section">
                                    <?php if($rental->status == 'COC' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                   <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase"><?php echo e($rental->status); ?></h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                    <span class="left">
                                        <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                    </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>


                                <div class="status-section">
                                    <?php if($rental->status == 'Clear' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                   <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase"><?php echo e($rental->status); ?></h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                    <span class="left">
                                        <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                    </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if($rentalTypeSegway): ?>
                    <div class="tab-pane fade show" id="segway-tab" role="tabpanel" aria-labelledby="segway-tab">

                        <div class="offset-sm-2 col-sm-8">
                            <h2 class="section-title">Segways</h2>
                            <?php $__currentLoopData = $rentalReturnSegway; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="status-section">
                                    <?php if($rental->status === 'On Dock' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <button href="#" data-toggle="modal" data-target="#clearModal<?php echo e($rental->id); ?>" class="btn btn-clear btn-dock">Clear</button>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal<?php echo e($rental->id); ?>" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                <span class="left">
                                    <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="status-section">
                                    <?php if($rental->status == 'On Water' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <form action="<?php echo e(route('dock.vehicleOnDock', $rental->id)); ?>" method="post">
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php echo method_field('PUT'); ?>
                                                                        
                                                                        <input type="hidden" value="On Dock" name="status">
                                                                        <button class="btn btn-on-deck btn-dock" type="submit">On Dock</button>
                                                                    </form>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#clearModal<?php echo e($rental->id); ?>" class="btn btn-clear btn-dock">Clear</a>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal<?php echo e($rental->id); ?>" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                <span class="left">
                                    <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>


                                <div class="status-section">
                                    <?php if($rental->status == 'COC' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                   <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase"><?php echo e($rental->status); ?></h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                <span class="left">
                                    <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>


                                <div class="status-section">
                                    <?php if($rental->status == 'Clear' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                   <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase"><?php echo e($rental->status); ?></h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                <span class="left">
                                    <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if($rentalTypeSkiDoo): ?>
                    <div class="tab-pane fade show" id="skidoo-tab" role="tabpanel" aria-labelledby="skidoo-tab">

                        <div class="offset-sm-2 col-sm-8">
                            <h2 class="section-title">Snowmobiles</h2>
                            <?php $__currentLoopData = $rentalReturnSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="status-section">
                                    <?php if($rental->status === 'On Dock' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <button href="#" data-toggle="modal" data-target="#clearModal<?php echo e($rental->id); ?>" class="btn btn-clear btn-dock">Clear</button>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal<?php echo e($rental->id); ?>" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                            <span class="left">
                                <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                            </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="status-section">
                                    <?php if($rental->status == 'On Water' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <form action="<?php echo e(route('dock.vehicleOnDock', $rental->id)); ?>" method="post">
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php echo method_field('PUT'); ?>
                                                                        
                                                                        <input type="hidden" value="On Dock" name="status">
                                                                        <button class="btn btn-on-deck btn-dock" type="submit">On Dock</button>
                                                                    </form>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#clearModal<?php echo e($rental->id); ?>" class="btn btn-clear btn-dock">Clear</a>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal<?php echo e($rental->id); ?>" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                            <span class="left">
                                <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                            </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>


                                <div class="status-section">
                                    <?php if($rental->status == 'COC' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                   <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase"><?php echo e($rental->status); ?></h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                            <span class="left">
                                <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                            </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>


                                <div class="status-section">
                                    <?php if($rental->status == 'Clear' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                   <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase"><?php echo e($rental->status); ?></h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                            <span class="left">
                                <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                            </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if($rentalTypeAluminum): ?>
                    <div class="tab-pane fade show" id="aluminum-tab" role="tabpanel" aria-labelledby="aluminum-tab">

                        <div class="offset-sm-2 col-sm-8">
                            <h2 class="section-title">Aluminum Boat</h2>
                            <?php $__currentLoopData = $rentalReturnAluminum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="status-section">
                                    <?php if($rental->status === 'On Dock' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <button href="#" data-toggle="modal" data-target="#clearModal<?php echo e($rental->id); ?>" class="btn btn-clear btn-dock">Clear</button>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal<?php echo e($rental->id); ?>" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                        <span class="left">
                            <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                        </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <div class="status-section">
                                    <?php if($rental->status == 'On Water' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <form action="<?php echo e(route('dock.vehicleOnDock', $rental->id)); ?>" method="post">
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php echo method_field('PUT'); ?>
                                                                        
                                                                        <input type="hidden" value="On Dock" name="status">
                                                                        <button class="btn btn-on-deck btn-dock" type="submit">On Dock</button>
                                                                    </form>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#clearModal<?php echo e($rental->id); ?>" class="btn btn-clear btn-dock">Clear</a>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal<?php echo e($rental->id); ?>" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                            <span class="left">
                                                <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                                            </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>


                                <div class="status-section">
                                    <?php if($rental->status == 'COC' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                    <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase"><?php echo e($rental->status); ?></h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                        <span class="left">
                            <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                        </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>


                                <div class="status-section">
                                    <?php if($rental->status == 'Clear' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock<?php echo e($rental->id); ?>">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #<?php echo e($rental->invoice_number); ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        <?php echo e($launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A')); ?>

                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
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
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                    <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase"><?php echo e($rental->status); ?></h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                        <span class="left">
                            <h4 class="dark-card-name"> <?php echo e($rental->last_name); ?>, <?php echo e($rental->first_name); ?></h4>
                        </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:<?php echo e($rental->phone = substr($rental->phone, 1)); ?>"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
            <!-- /Returning -->

        </div>





    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('sidebar'); ?>

        <?php $__currentLoopData = $rentalReturn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                                            <p class="modal-item"><?php echo e($rental->phone = substr($rental->phone, 0)); ?></p>
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
                                                <!-- Launched by -->
                                                <?php if($rental->launched_by == ''): ?>
                                                    &nbsp;
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
                                    <!-- /Rental Info -->
                                </div>

                            </div>
                            <!-- /Rental Information -->

                            <!-- COC Info -->
                            <?php if($rental->status == 'COC'): ?>

                                <div class="modal-coc-info">
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
                                            <h3>
                                                <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </h3>
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
                            <?php if($rental->status == 'On Water'): ?>
                                <button class="btn btn-danger" data-toggle="modal" data-target="#changeVehicle<?php echo e($rental->id); ?>">Change Vehicle</button>
                            <?php elseif($rental->status == 'On Dock'): ?>
                                <button class="btn btn-primary-red btn-modal" data-toggle="modal" data-target="#changeVehicle<?php echo e($rental->id); ?>">Change Vehicle</button>
                            <?php else: ?>

                            <?php endif; ?>
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
             <!-- /Dock Modal -->


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
                                 <input type="file" class="form-control" name="image_1" id="image_1" accept="image/*" capture="camera">
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

             <!-- Clear Modal -->
             <div class="modal fade" id="clearModal<?php echo e($rental->id); ?>" tabindex="-1" role="dialog" aria-labelledby="clearModalLabel" aria-hidden="true">
                 <div class="modal-dialog
                                <?php if(strpos($rental->ticket_list, '1x') !== false): ?>
                     modal-md
    <?php else: ?>
                     modal-lg
    <?php endif; ?>

                     " role="document">
                 <?php if(strpos($rental->ticket_list, '1x') !== false): ?>
                     <!-- Single Vehicle Rental -->
                         <div class="modal-content">


                             <div class="modal-header">
                                 <h3 class="modal-title" id="clearModalLabel">Clear Vehicle:

                                     <span>
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
                                         <?php $__currentLoopData = $rental->vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <?php echo e($rental_vehicle->internal_vehicle_id); ?>

                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                     </span>
                                 </h3>
                                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">×</span>
                                 </button>
                             </div>
                             <form action="<?php echo e(route('dock.vehicleClear', $rental->id)); ?>" method="post">
                                 <?php echo csrf_field(); ?>
                                 <?php echo method_field('PUT'); ?>
                                 <div class="modal-body">

                                     <div class="row">
                                         <div class="col-sm-6">
                                             <div class="form-group">
                                                 <label for="cleared_by">Select Yourself...</label>
                                                 <select name="cleared_by" id="cleared_by" class="form-control">
                                                     <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                         <option value="<?php echo e($user->id); ?>"><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></option>
                                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="col-sm-6">
                                             <div class="form-group">
                                                 <label for="customer_notes">Notes:</label>
                                                 <textarea name="customer_notes" id="customer_notes" cols="30"
                                                           rows="8"><?php echo e($rental->customer_notes); ?></textarea>
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                                 <div class="modal-footer">
                                     <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>

                                     
                                     <input type="hidden" value="Clear" name="status">
                                     <input type="hidden" value="<?php echo e($dateNow); ?>" name="cleared_time">
                                     <button class="btn btn-primary" type="submit">CLEAR VEHICLE</button>
                                 </div>
                             </form>
                         </div>
                         <!-- /Single Vehicle Rental -->

                 <?php else: ?>
                     <!-- Multi Vehicle Rental -->
                         <div class="modal-content">

                             <div class="modal-header">
                                 <h3 class="modal-title" id="clearModalLabel">Clear Vehicles</h3>
                                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">×</span>
                                 </button>
                             </div>
                             <div class="modal-body">
                                 <div class="row">
                                     <div class="col-sm-6">
                                         <label for="vehicle">Clear Vehicle</label>
                                         <?php $__currentLoopData = $rental->vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                             <div class="row mb-3">
                                                 <div class="col-sm-6">
                                                     <h3>
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
                                                         <?php echo e($rental_vehicle->internal_vehicle_id); ?>

                                                     </h3>
                                                 </div>
                                                 <div class="col-sm-6">
                                                     <form method="post" action="<?php echo e(route('dock.detachVehicleOne', $rental_vehicle->id)); ?>">
                                                         <?php echo csrf_field(); ?>
                                                         <?php echo method_field('PUT'); ?>
                                                         <input type="hidden" name="vehicle" value="<?php echo e($rental_vehicle->id); ?>">
                                                         <button  class="btn btn-danger align-right"
                                                                  <?php if($rental_vehicle->launched == '0'): ?>
                                                                  hidden
                                                                  <?php endif; ?>
                                                                  type="submit">Clear Vehicle</button>
                                                     </form>
                                                 </div>
                                             </div>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                     </div>

                                     <div class="col-sm-6">
                                         <form action="<?php echo e(route('dock.vehicleClearMulti', $rental->id)); ?>" method="post">
                                             <?php echo csrf_field(); ?>
                                             <?php echo method_field('PUT'); ?>

                                             <div class="form-group">
                                                 <label for="customer_notes">Rental Notes</label>
                                                 <textarea name="customer_notes" id="customer_notes" cols="30" rows="5"><?php echo e($rental->customer_notes); ?></textarea>
                                             </div>

                                             <div class="form-group">
                                                 <label for="cleared_by">Select Yourself...</label>
                                                 <select name="cleared_by" id="cleared_by" class="form-control">
                                                     <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                         <option value="<?php echo e($user->id); ?>"><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></option>
                                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                 </select>
                                             </div>

                                             <input type="hidden" value="Clear" name="status">
                                             <input type="hidden" value="<?php echo e($dateNow); ?>" name="cleared_time">

                                             <div class="modal-footer border-top-0">
                                                 <button class="btn btn-secondary btn-multi" type="button" data-dismiss="modal">CANCEL</button>
                                                         <button class="btn btn-primary btn-multi
                                                            <?php $__currentLoopData = $rental->vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                 <?php if($rental_vehicle->launched == '1'): ?>
                                                                     hidden
                                                                    <?php endif; ?>
                                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                             " type="submit">CLEAR RENTAL
                                                         </button>
                                             </div>


                                         </form>
                                     </div>
                                 </div>
                             </div>

                         </div>
                         <!-- /Multi Vehicle Rental -->

                     <?php endif; ?>

                 </div>
             </div>
             <!--/ Clear Modal -->

             <!-- COC Modal -->
             <div class="modal fade" id="cocModal<?php echo e($rental->id); ?>" tabindex="-1" role="dialog" aria-labelledby="cocModalLabel" aria-hidden="true">
                 <div class="modal-dialog" role="document">
                     <!-- COC Single Form -->
                     <?php if(strpos($rental->ticket_list, '1x') !== false): ?>
                         <form action="<?php echo e(route('dock.vehicleCOC', $rental)); ?>" method="post" enctype="multipart/form-data" class="addCustomer-form">
                             <?php echo csrf_field(); ?>
                             <?php echo method_field('PUT'); ?>
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h3 class="modal-title" id="launchModalLabel">Change of Condition:
                                         <span>
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
                                             <?php $__currentLoopData = $rental->vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php echo e($rental_vehicle->vehicle_type); ?> <?php echo e($rental_vehicle->internal_vehicle_id); ?>

                                                 <input type="hidden" name="coc_vehicle" value="<?php echo e($rental_vehicle->id); ?>">
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                                <label for="cleared_by">Select Yourself...</label>
                                                <select name="cleared_by" id="cleared_by" class="form-control">
                                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($user->id); ?>"><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="image_1">Upload Image <em>(Required)</em></label>
                                                <input type="file" class="form-control" name="image_1" id="image_1" accept="image/*" capture="camera">
                                            </div>

                                            <div class="form-group mt-4">
                                                <div class="row">
                                                    <div class="col-6">
                                                            <label for="coc_hours">Vehicle Hour Count <em>(Req)</em> </label>
                                                    </div>
                                                    <div class="col-6">
                                                            <input type="text" class="form-control" name="coc_hours" id="coc_hours" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="incident">Incident Information <em>(Required)</em></label>
                                                <textarea name="incident" id="incident" cols="30" rows="10" width="100% !important;"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                 </div>
                                 <div class="modal-footer">
                                     <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                                     <input type="hidden" value="COC" name="status">
                                     
                                     <input type="hidden" name="last_four" value="0000">
                                     <input type="hidden" name="coc_status" value="New">
                                     <input type="hidden" value="<?php echo e($dateNow); ?>" name="cleared_time">
                                     <button class="btn btn-primary" type="submit">SUBMIT COC</button>
                                 </div>
                             </div>
                         </form>

                         <!-- COC Multi Form -->
                     <?php else: ?>

                         <div class="modal-content">
                             <div class="modal-header">
                                 <h3 class="modal-title" id="launchModalLabel">Change of Condition </h3>
                                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">×</span>
                                 </button>
                             </div>
                             <div class="modal-body">
                             </div>
                             <form action="<?php echo e(route('dock.vehicleCOC', $rental)); ?>" method="post" enctype="multipart/form-data" class="addCustomer-form">
                                 <?php echo csrf_field(); ?>
                                 <?php echo method_field('PUT'); ?>
                                 <div class="modal-body">
                                     <div class="row">

                                         <?php $__currentLoopData = $rental->vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                             <?php if($rental_vehicle->launched == true): ?>
                                                 <div class="row mb-3">
                                                     <div class="col-sm-6">
                                                         <h3>
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
                                                             <?php echo e($rental_vehicle->internal_vehicle_id); ?>

                                                         </h3>
                                                     </div>
                                                     <div class="col-sm-6">
                                                         <input type="hidden" name="vehicle" value="<?php echo e($rental_vehicle->id); ?>">
                                                         <input type="hidden" name="coc_vehicle" value="<?php echo e($rental_vehicle->id); ?>">
                                                     </div>
                                                 </div>
                                             <?php endif; ?>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                         <div class="col-sm-12">
                                             <div class="form-group">
                                                 <label for="image_1">Upload Image <em>(Required)</em></label>
                                                 <input type="file" class="form-control" name="image_1" id="image_1" accept="image/*" capture="camera">
                                             </div>

                                             <div class="form-group">
                                                 <label for="incident">Incident Information <em>(Required)</em></label>
                                                 <textarea name="incident" id="incident" cols="30" rows="10" width="100% !important;"></textarea>
                                             </div>

                                             <div class="form-group">
                                                 <label for="cleared_by">Select Yourself...</label>
                                                 <select name="cleared_by" id="cleared_by" class="form-control">
                                                     <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                         <option value="<?php echo e($user->id); ?>"><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></option>
                                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                 </select>
                                             </div>

                                             <div class="form-group mt-4">
                                                 <div class="row">
                                                     <div class="col-6">
                                                         <label for="coc_hours">Vehicle Hour Count <em>(Req)</em> </label>
                                                     </div>
                                                     <div class="col-6">
                                                         <input type="text" class="form-control" name="coc_hours" id="coc_hours" />
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                                 <div class="modal-footer">
                                     <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                                     <input type="hidden" value="COC" name="status">
                                     <input type="hidden" name="last_four" value="0000">
                                     <input type="hidden" name="coc_status" value="New">
                                     <input type="hidden" value="<?php echo e($dateNow); ?>" name="cleared_time">
                                     <button class="btn btn-primary" type="submit">SUBMIT COC</button>
                                 </div>

                             </form>

                         </div>
                         <!-- /COC Multi Form -->
                     <?php endif; ?>
                 </div>
             </div>
             <!-- COC Modal -->

             <!-- Change Vehicle Modal -->
            <div class="modal fade" id="changeVehicle<?php echo e($rental->id); ?>" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3>Change Vehicle: <span><?php echo e($rental->first_name); ?> <?php echo e($rental->last_name); ?></span></h3>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-sm-12">
                                    <h4>1. Select New Vehicle</h4>
                                    <hr class="rounded">
                                </div>
                            </div>
                            <form method="post" action="<?php echo e(route('dock.changeVehicle', $rental)); ?>">

                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>

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
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">Choose VEHICLE</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="customer_notes">Customer Notes</label>
                                        <textarea name="customer_notes" id="customer_notes" cols="30" rows="5"
                                                  class="form-control mb-3"><?php echo e($rental->customer_notes); ?></textarea>
                                    </div>
                                </div>


                            </form>

                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="white">2. Remove Vehicle</h4>
                                    <hr class="rounded">
                                </div>
                            </div>
                            <?php $__currentLoopData = $rental->vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <?php if($rental_vehicle->launched == true): ?>
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <h3>
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
                                                <?php echo e($rental_vehicle->internal_vehicle_id); ?>

                                            </h3>
                                        </div>
                                        <div class="col-6">
                                            <form method="post" action="<?php echo e(route('dock.detachVehicleChange', $rental->id)); ?>">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('PUT'); ?>
                                                <input type="hidden" name="vehicle" value="<?php echo e($rental_vehicle->id); ?>">
                                                <input type="hidden" name="rental" value="<?php echo e($rental->id); ?>">
                                                <button  class="btn btn-danger align-right"
                                                         <?php if($rental_vehicle->launched == '0'): ?>
                                                         hidden
                                                         <?php endif; ?>
                                                         type="submit">Remove Vehicle</button>
                                            </form>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                        <div class="modal-footer border-top-0">
                            <button class="btn btn-secondary btn-multi" type="button" data-dismiss="modal">CANCEL</button>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /Change Vehicle Modal -->
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
                                                <!-- Rental Duration -->
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
    <?php $__env->stopSection(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/dock/returning.blade.php ENDPATH**/ ?>