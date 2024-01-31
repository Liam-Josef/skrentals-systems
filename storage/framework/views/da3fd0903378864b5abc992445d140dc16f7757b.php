<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.team-master','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('team-master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <?php $__env->startSection('styles'); ?>
        <link href="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
    <?php $__env->stopSection(); ?>

    <?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php $__env->startSection('browser_title'); ?>
            <?php if(!auth()->user()->userHasRole('Service')): ?>
                <title>Dashboard | <?php echo e($application->name); ?></title>
            <?php elseif(auth()->user()->userHasRole('Service')): ?>
                <h1>Service Requests | <?php echo e($application->name); ?></h1>
            <?php endif; ?>
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

        <?php $__env->startSection('page_title'); ?>
            <?php if(!auth()->user()->userHasRole('Service')): ?>
                <h1>Team Dashboard</h1>
            <?php elseif(auth()->user()->userHasRole('Service')): ?>
                <h1>Service Requests</h1>
            <?php endif; ?>
        <?php $__env->stopSection(); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    <?php if(!auth()->user()->userHasRole('Service')): ?>

    <?php $__env->startSection('content'); ?>

    <!-- Today's Rentals -->
        <div class="card shadow mt-4 my-3">
            <!-- Bar Chart -->
            <div class="card-header">
                <h3>Rentals Today</h3>
            </div>

            <div class="row">
                <div class="col-12 col-sm-4">
                    <?php if($rentalCounts): ?>
                        <div class="card shadow m-3">
                            <div class="card-body text-center">
                                <h4>Total Rentals</h4>
                                <h2 class="text-dk-red"><?php echo e($rentalCounts); ?></h2>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="card shadow m-3">
                            <div class="card-body text-center">
                                <h4>Total Rentals</h4>
                                <h2 class="text-dk-red"><?php echo e($rentalCounts); ?></h2>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="col-12 col-sm-8">
                    <div class="row">
                        <?php if($scarabCount): ?>
                            <div class="col-12  col-md-4">
                                <div class="card shadow m-3">
                                    <div class="card-body text-center">
                                        <h4>Scarab</h4>
                                        <h2 class="text-dk-red"><?php echo e($scarabCount); ?></h2>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="col-12  col-md-4">
                                <div class="card shadow m-3">
                                    <div class="card-body text-center">
                                        <h4>Scarab</h4>
                                        <h2 class="text-dk-red"><?php echo e($scarabCount); ?></h2>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if($pontoonCount): ?>
                            <div class="col-12 col-md-4">
                                <div class="card shadow m-3">
                                    <div class="card-body text-center">
                                        <h4>Pontoon</h4>
                                        <h2 class="text-dk-red"><?php echo e($pontoonCount); ?></h2>
                                    </div>
                                </div>
                            </div>
                            <?php else: ?>
                                <div class="col-12 col-md-4">
                                    <div class="card shadow m-3">
                                        <div class="card-body text-center">
                                            <h4>Pontoon</h4>
                                            <h2 class="text-dk-red">0</h2>
                                        </div>
                                    </div>
                                </div>
                        <?php endif; ?>

                        <?php if($seadooCount): ?>
                            <div class="col-12 col-md-4">
                                <div class="card shadow m-3">
                                    <div class="card-body text-center">
                                        <h4>SeaDoo</h4>
                                        <h2 class="text-dk-red"><?php echo e($seadooCount); ?></h2>
                                    </div>
                                </div>
                            </div>
                            <?php else: ?>
                                <div class="col-12 col-md-4">
                                    <div class="card shadow m-3">
                                        <div class="card-body text-center">
                                            <h4>SeaDoo</h4>
                                            <h2 class="text-dk-red">0</h2>
                                        </div>
                                    </div>
                                </div>
                        <?php endif; ?>

                        <?php if($supCount): ?>
                            <div class="col-12 col-md-4">
                                <div class="card shadow m-3">
                                    <div class="card-body text-center">
                                        <h4>SUP</h4>
                                        <h2 class="text-dk-red"><?php echo e($supCount); ?></h2>
                                    </div>
                                </div>
                            </div>
                            <?php else: ?>
                                <div class="col-12 col-md-4">
                                    <div class="card shadow m-3">
                                        <div class="card-body text-center">
                                            <h4>SUP</h4>
                                            <h2 class="text-dk-red"><?php echo e($supCount); ?></h2>
                                        </div>
                                    </div>
                                </div>
                        <?php endif; ?>

                        <?php if($kayakCount): ?>
                            <div class="col-12 col-md-4">
                                <div class="card shadow m-3">
                                    <div class="card-body text-center">
                                        <h4>Kayak</h4>
                                        <h2 class="text-dk-red"><?php echo e($kayakCount); ?></h2>
                                    </div>
                                </div>
                            </div>
                            <?php else: ?>
                                <div class="col-12 col-md-4">
                                    <div class="card shadow m-3">
                                        <div class="card-body text-center">
                                            <h4>Kayak</h4>
                                            <h2 class="text-dk-red"><?php echo e($kayakCount); ?></h2>
                                        </div>
                                    </div>
                                </div>
                        <?php endif; ?>

                        <?php if($spyderCount): ?>
                            <div class="col-12 col-md-4">
                                <div class="card shadow m-3">
                                    <div class="card-body text-center">
                                        <h4>Spyder</h4>
                                        <h2 class="text-dk-red"><?php echo e($spyderCount); ?></h2>
                                    </div>
                                </div>
                            </div>
                            <?php else: ?>
                                <div class="col-12 col-md-4">
                                    <div class="card shadow m-3">
                                        <div class="card-body text-center">
                                            <h4>Spyder</h4>
                                            <h2 class="text-dk-red"><?php echo e($spyderCount); ?></h2>
                                        </div>
                                    </div>
                                </div>
                        <?php endif; ?>

                        <?php if($segwayCount): ?>
                            <div class="col-12 col-md-4">
                                <div class="card shadow m-3">
                                    <div class="card-body text-center">
                                        <h4>Segway</h4>
                                        <h2 class="text-dk-red"><?php echo e($segwayCount); ?></h2>
                                    </div>
                                </div>
                            </div>
                            <?php else: ?>
                                <div class="col-12 col-md-4">
                                    <div class="card shadow m-3">
                                        <div class="card-body text-center">
                                            <h4>Segway</h4>
                                            <h2 class="text-dk-red"><?php echo e($segwayCount); ?></h2>
                                        </div>
                                    </div>
                                </div>
                        <?php endif; ?>

                        <?php if($backcountryCount): ?>
                            <div class="col-12 col-md-4">
                                <div class="card shadow m-3">
                                    <div class="card-body text-center">
                                        <h4>BC</h4>
                                        <h2 class="text-dk-red"><?php echo e($backcountryCount); ?></h2>
                                    </div>
                                </div>
                            </div>
                            <?php else: ?>
                                <div class="col-12 col-md-4">
                                    <div class="card shadow m-3">
                                        <div class="card-body text-center">
                                            <h4>BC</h4>
                                            <h2 class="text-dk-red"><?php echo e($backcountryCount); ?></h2>
                                        </div>
                                    </div>
                                </div>
                        <?php endif; ?>

                        <?php if($summitCount): ?>
                            <div class="col-12 col-md-4">
                                <div class="card shadow m-3">
                                    <div class="card-body text-center">
                                        <h4>Summit</h4>
                                        <h2 class="text-dk-red"><?php echo e($summitCount); ?></h2>
                                    </div>
                                </div>
                            </div>
                            <?php else: ?>
                                <div class="col-12 col-md-4">
                                    <div class="card shadow m-3">
                                        <div class="card-body text-center">
                                            <h4>Summit</h4>
                                            <h2 class="text-dk-red"><?php echo e($summitCount); ?></h2>
                                        </div>
                                    </div>
                                </div>
                        <?php endif; ?>

                        <?php if($alumCount): ?>
                            <div class="col-12 col-md-4">
                                <div class="card shadow m-3">
                                    <div class="card-body text-center">
                                        <h4>Alum</h4>
                                        <h2 class="text-dk-red"><?php echo e($alumCount); ?></h2>
                                    </div>
                                </div>
                            </div>
                            <?php else: ?>
                                <div class="col-12 col-md-4">
                                    <div class="card shadow m-3">
                                        <div class="card-body text-center">
                                            <h4>Alum</h4>
                                            <h2 class="text-dk-red"><?php echo e($alumCount); ?></h2>
                                        </div>
                                    </div>
                                </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>


        </div>
        <!-- /Today's Rentals -->


        <!-- Change of Condition -->
        <div class="card shadow my-3 mt-4">
            <div class="card-header">
                <h3>Change of Conditions</h3>
            </div>
            <div class="card-body p-3">

                <?php if($cocRentalCount > 0): ?>
                    <?php $__currentLoopData = $cocRental; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="coc-item">
                            <div class="row">
                                <div class="col-4 col-sm-2">
                                    <h5 class="mt-2">#<?php echo e($rental->invoice_number); ?></h5>
                                </div>
                                <div class="col-8 col-sm-2">
                                    <h5 class="mt-2 text-red sm-md float-sm-right">
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
                                    </h5>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <h5 class="coc-incident mt-2"><?php echo e($rental->incident); ?></h5>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <h5 class="mt-2"><?php echo e($rental->phone = substr($rental->phone, 2)); ?></h5>
                                </div>
                                <div class="col-12 col-sm-2">
                                    <a href="<?php echo e(route('office.rentalProfile', $rental)); ?>" class="btn btn-primary align-right">View</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <h1 class="text-center text-gray">Damage-Free Day...</h1>
                <?php endif; ?>

            </div>
        </div>
        <!-- /Change of Condition -->

        <!-- Employee Roster -->
        <div class="card shadow mt-4 my-3">
            <!-- Bar Chart -->
            <div class="card-header">
                <h3>Employee Roster</h3>
            </div>

            <div class="card-body p-3">

                <?php if($userCount > 0): ?>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="coc-item">
                            <div class="row">
                                <div class="col-6 col-sm-3">
                                    <h5 class="mt-2"><?php echo e($user->firstname); ?></h5>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <h5 class="mt-2"><?php echo e($user->lastname); ?></h5>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <h5 class="mt-2"><a href="tel:<?php echo e($user->phone); ?>"><?php echo e($user->phone); ?></a></h5>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <h5 class="coc-incident mt-2"><a href="mailto:<?php echo e($user->email); ?>"><?php echo e($user->email); ?></a></h5>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <h1 class="text-center text-black">Module Malfunction... Please contact <a href="mailto:support@rentalguru.us">RentalGuru</a></h1>
                <?php endif; ?>

            </div>
        </div>
        <!-- /Employee Roster -->


    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('sidebar-post'); ?>
        <div class="card mt-4 shadow mb-4">
            <div class="card-header">
                <h3>Announcements</h3>
            </div>
            <div class="card-body">
                <ul class="navbar-nav sidebar-post accordion my-4 shadow" id="accordionSidebar">

                    <!-- Nav Item - Pages Collapse Menu -->
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAnnouncements<?php echo e($post->id); ?>" aria-expanded="true" aria-controls="collapseAnnouncements<?php echo e($post->id); ?>">
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
            </div>
        </div>

        <div class="card shadow mb-4">
                <div class="card-header">
                    <h3>Submit <span>Service Request</span></h3>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-12">
                            <!-- Vehicle List -->
                            <ul class="nav nav-tabs nav-justified mb-3 dock-depart sidebar-tab-list" id="runnerView" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="view-seadoo-tab" data-toggle="tab" href="#seadoo-tab" role="tab" aria-controls="seadoo-tab"
                                       aria-selected="true">
                                        SeaDoo
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="view-pontoon-tab" data-toggle="tab" href="#pontoon-tab" role="tab" aria-controls="pontoon-tab"
                                       aria-selected="true">
                                        Pontoon
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="view-scarab-tab" data-toggle="tab" href="#scarab-tab" role="tab" aria-controls="scarab-tab"
                                       aria-selected="true">
                                        Scarab
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Vehicle List Content -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="seadoo-tab" role="tabpanel" aria-labelledby="seadoo-tab">
                            <form action="<?php echo e(route('maintenance.submitMaintReqOffice')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="service_type">Select Request Type</label>
                                            <select name="service_type" id="service_type" class="form-control">
                                                <option value="Repair">Repair</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="vehicle_id">Select SeaDoo</label>
                                                <select name="vehicle_id" id="vehicle_id" class="form-control">
                                                    <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option id="<?php echo e($vehicle->id); ?>" value="<?php echo e($vehicle->id); ?>"> <?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row hidden">
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="description">Request Description</label>
                                            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="image">Attach an Image</label>
                                            <input type="file" name="image" id="image" class="form-control" accept="image/*"/>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="vehicle_type" value="SeaDoo">
                                <div class="modal-footer">
                                    <input type="hidden" name="is_active" value="0">
                                    <input type="hidden" name="status" value="Created">
                                    <input type="hidden" name="internal_vehicle_id" value="Ac">
                                    <input type="hidden" name="submitted_by" value="<?php echo e(auth()->user()->id); ?>">
                                    <input type="hidden" name="date_submitted" value="<?php echo e($dateNow); ?>">
                                    <button class="btn btn-primary-red" type="submit">Submit Request</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade show" id="pontoon-tab" role="tabpanel" aria-labelledby="pontoon-tab">
                            <form action="<?php echo e(route('maintenance.submitMaintReqOffice')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="service_type">Select Request Type</label>
                                            <select name="service_type" id="service_type" class="form-control">
                                                <option value="Repair">Repair</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="vehicle_id">Select Pontoon</label>
                                                <select name="vehicle_id" id="vehicle_id" class="form-control">
                                                    <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option id="<?php echo e($vehicle->id); ?>" value="<?php echo e($vehicle->id); ?>"> <?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row hidden">
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="description">Request Description</label>
                                            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="image">Attach an Image</label>
                                            <input type="file" name="image" id="image" class="form-control" accept="image/*" />
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="vehicle_type" value="23ft. Pontoon Boat">
                                <div class="modal-footer">
                                    <input type="hidden" name="is_active" value="0">
                                    <input type="hidden" name="status" value="Created">
                                    <input type="hidden" name="internal_vehicle_id" value="Z">
                                    <input type="hidden" name="submitted_by" value="<?php echo e(auth()->user()->id); ?>">
                                    <input type="hidden" name="date_submitted" value="<?php echo e($dateNow); ?>">
                                    <button class="btn btn-primary-red" type="submit">Submit Request</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade show" id="scarab-tab" role="tabpanel" aria-labelledby="scarab-tab">
                            <form action="<?php echo e(route('maintenance.submitMaintReqAdmin')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="service_type">Select Request Type</label>
                                            <select name="service_type" id="service_type" class="form-control">
                                                <option value="Repair">Repair</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="vehicle_id">Select Scarab</label>
                                                <select name="vehicle_id" id="vehicle_id" class="form-control">
                                                    <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option id="<?php echo e($vehicle->id); ?>" value="<?php echo e($vehicle->id); ?>"> <?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row hidden">
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="description">Request Description</label>
                                            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="image">Attach an Image</label>
                                            <input type="file" name="image" class="form-control" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="vehicle_type" value="Scarab 215">
                                <div class="modal-footer">
                                    <input type="hidden" name="is_active" value="0">
                                    <input type="hidden" name="status" value="Created">
                                    <input type="hidden" name="internal_vehicle_id" value="Z">
                                    <input type="hidden" name="submitted_by" value="<?php echo e(auth()->user()->id); ?>">
                                    <input type="hidden" name="date_submitted" value="<?php echo e($dateNow); ?>">
                                    <button class="btn btn-primary-red" type="submit">Submit Request</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
    <?php $__env->stopSection(); ?>

    <?php endif; ?>



<!-- Service Section -->
    <?php if(auth()->user()->userHasRole('Service')): ?>

        <?php $__env->startSection('content'); ?>

             <!-- Service Requests -->
            <div class="row">

                <div class="col-6 col-sm-3">
                    <div class="card shadow mt-3">
                        <div class="card-header">
                            <h3 class="text-center">Active Requests</h3>
                        </div>
                        <div class="card-body">
                            <?php if($serviceTotalCount): ?>
                                <h1 class="text-red text-center"><?php echo e($serviceTotalCount); ?></h1>
                            <?php else: ?>
                                <h1 class="text-red text-center">0</h1>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-3">
                    <div class="card shadow mt-3">
                        <div class="card-header">
                            <h3 class="text-center">New Requests</h3>
                        </div>
                        <div class="card-body">
                            <?php if($serviceNewCount): ?>
                                <h1 class="text-red text-center"><?php echo e($serviceNewCount); ?></h1>
                            <?php else: ?>
                                <h1 class="text-red text-center">0</h1>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-3">
                    <div class="card shadow mt-3">
                        <div class="card-header">
                            <h3 class="text-center">Need Invoice</h3>
                        </div>
                        <div class="card-body">
                            <?php if($serviceInvoiceCount): ?>
                                <h1 class="text-red text-center"><?php echo e($serviceInvoiceCount); ?></h1>
                            <?php else: ?>
                                <h1 class="text-red text-center">0</h1>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-3">
                    <div class="card shadow mt-3">
                        <div class="card-header">
                            <h3 class="text-center">Awaiting Approval</h3>
                        </div>
                        <div class="card-body">
                            <?php if($serviceAppCount): ?>
                                <h1 class="text-red text-center"><?php echo e($serviceAppCount); ?></h1>
                            <?php else: ?>
                                <h1 class="text-red text-center">0</h1>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /Service Requests -->


            <!-- New Requests -->
            <div class="card shadow my-3">
                <div class="card-header">
                    <h3>New Requests</h3>
                </div>
                <div class="card-body p-3">

                    <?php if($serviceNewCount): ?>
                        <?php $__currentLoopData = $serviceInvReq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="coc-item">
                                <div class="row mb-3">
                                    <div class="col-4 col-sm-2">
                                        <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($service->vehicle_id == $vehicle->id): ?>
                                                <h5 class="mt-2"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></h5>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <div class="col-8 col-sm-2">
                                        <h5 class="mt-2 sm-lg sm-red">
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    

    
    
    
                                        </h5>
                                    </div>
                                    <div class="hidden-xs col-sm-3">
                                        <h5 class="coc-incident mt-2"><?php echo e($service->description); ?></h5>
                                    </div>
                                    <div class="col-6 col-sm-3">

                                    </div>
                                    <div class="col-6 col-sm-2">
                                        <a href="#" class="btn btn-primary align-right" data-toggle="modal" data-target="#serviceModal<?php echo e($service->id); ?>">View</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Service Modal -->
                            <div class="modal fade" id="serviceModal<?php echo e($service->id); ?>" tabindex="-1" role="dialog" aria-labelledby="cocIntake" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($service->vehicle_id == $vehicle->id): ?>
                                                    <h3><span><?php echo e($vehicle->vehicle_type); ?> </span> (<?php echo e($vehicle->internal_vehicle_id); ?>)</h3>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <?php if($service->image == ''): ?>
                                                        <img class="img-responsive" src="<?php echo e(asset('storage/' . 'images/no-image.jpg')); ?>" height="auto" width="100%" />
                                                    <?php else: ?>
                                                        <img class="img-responsive" src="<?php echo e(asset('storage/' . $service->image)); ?>" height="auto" width="100%" />
                                                    <?php endif; ?>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5>Status: &nbsp;</h5>
                                                        </div>
                                                        <div class="col-6">
                                                            <h5><span><?php echo e($service->status); ?></span></h5>
                                                        </div>
                                                    </div>
                                                    <?php if($service->rental_invoice == ''): ?>

                                                    <?php else: ?>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5>Rental Invoice: &nbsp;</h5>
                                                        </div>
                                                        <div class="col-6">
                                                            <h5><span>#<?php echo e($service->rental_invoice); ?></span></h5>
                                                        </div>
                                                    </div>
                                                    <?php endif; ?>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5>VIN: &nbsp;</h5>
                                                        </div>
                                                        <div class="col-6">
                                                            <h5>
                                                                 <span>
                                                                        <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                         <?php if($vehicle->id == $service->vehicle_id): ?>
                                                                             <?php echo e($vehicle->vin); ?>

                                                                         <?php endif; ?>
                                                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </span>
                                                            </h5>
                                                        </div>
                                                    </div>

                                                    <br />

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5>Recent Hours: &nbsp;</h5>
                                                        </div>
                                                        <div class="col-6">
                                                            <h5>
                                                                 <span>
                                                                     <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                         <?php if($vehicle->id == $service->vehicle_id): ?>
                                                                             <?php echo e($vehicle->current_hours); ?>

                                                                         <?php endif; ?>
                                                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </span>
                                                            </h5>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5> Hours Updated: &nbsp;</h5>
                                                        </div>
                                                        <div class="col-6">
                                                            <h5>
                                                                <span>
                                                                    <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php if($vehicle->id == $service->vehicle_id): ?>
                                                                            <?php echo e(\Carbon\Carbon::parse($vehicle->hours_updated)->format('M d, Y')); ?>

                                                                        <?php endif; ?>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </span>
                                                            </h5>
                                                        </div>
                                                    </div>

                                                    <br />

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5>Submitted By: &nbsp;</h5>
                                                        </div>
                                                        <div class="col-6">
                                                            <h5><span>
                                                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                                        <?php if($user->id == $service->submitted_by): ?>
                                                                            <?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?>

                                                                        <?php endif; ?>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </span></h5>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5>Date Submitted: &nbsp;</h5>
                                                        </div>
                                                        <div class="col-6">
                                                            <h5><span><?php echo e(\Carbon\Carbon::parse($service->date_submitted)->format('M d, Y')); ?></span></h5>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5>Service Type: &nbsp;</h5>
                                                        </div>
                                                        <div class="col-6">
                                                            <h5>
                                                                <?php echo e($service->service_type); ?>

                                                            </h5>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5>Service Description: &nbsp;</h5>
                                                        </div>
                                                        <div class="col-6">
                                                            <h5>
                                                                <?php echo e($service->description); ?>

                                                            </h5>
                                                        </div>
                                                    </div>


                                                    <?php if($service->invoice): ?>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5>Date Invoice Submitted: &nbsp;</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <h5><span><?php echo e(\Carbon\Carbon::parse($service->date_invoiced)->format('M d, Y')); ?></span></h5>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5>Invoice Submitted By: &nbsp;</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <h5>
                                                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php if($service->invoiced_by == $user->id): ?>
                                                                            <span><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></span>
                                                                        <?php endif; ?>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php if($service->status == 'Completed'): ?>

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5>Date Completed: &nbsp;</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <h5><span><?php echo e(\Carbon\Carbon::parse($service->date_completed)->format('M d, Y')); ?></span></h5>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5>Invoice Accepted By: &nbsp;</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <h5>
                                                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php if($service->approved_by == $user->id): ?>
                                                                            <span><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></span>
                                                                        <?php endif; ?>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    <?php endif; ?>

                                                    <div class="row mt-5">
                                                        <div class="col-12">
                                                            <?php if(auth()->user()->userHasRole('Service') && $service->status == 'Created'): ?>
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <h5>Accept Service Job?</h5>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <form action="<?php echo e(route('maintenance.acceptMaintReqCoc', $service)); ?>" method="post">
                                                                            <?php echo csrf_field(); ?>
                                                                            <?php echo method_field('PUT'); ?>
                                                                            <div class="form-group width-100">
                                                                                <button type="submit" class="btn btn-primary width-100 p-3">Yes</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <form action="#" method="post">
                                                                            <?php echo csrf_field(); ?>
                                                                            <?php echo method_field('PUT'); ?>
                                                                            <div class="form-group width-100">
                                                                                <button type="submit" class="btn btn-secondary width-100 p-3">No</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            <?php elseif(auth()->user()->userHasRole('Admin') && $service->status == 'Created'): ?>
                                                                <h5>Waiting for Service to Accept...</h5>
                                                            <?php endif; ?>


                                                            <?php if(auth()->user()->userHasRole('Service') && $service->status == 'In Service'): ?>
                                                                <form action="<?php echo e(route('maintenance.attachInvoice', $service)); ?>" method="post" enctype="multipart/form-data">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('PUT'); ?>
                                                                    <div class="form-group">
                                                                        <label for="service_notes">Service Notes: </label>
                                                                        <textarea name="service_notes" id="service_notes" cols="30" rows="5"><?php echo e($service->service_notes); ?></textarea>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <label for="service_invoice">Invoice Number</label>
                                                                            <input type="text" class="form-control" name="service_invoice" value="<?php echo e($service->service_invoice); ?>">
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <label for="invoice">Upload Invoice - <small><?php echo e($service->service_invoice); ?>.pdf</small></label>
                                                                            <input type="file" class="form-control" name="invoice">
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden" class="form-control" name="invoiced_by" value="<?php echo e(auth()->user()->id); ?>">
                                                                    <input type="hidden" class="form-control" name="date_invoiced" value="<?php echo e($dateNow); ?>">
                                                                    <button type="submit" class="btn btn-primary width-100 p-3 mt-3">Attach Invoice</button>
                                                                </form>
                                                            <?php elseif(auth()->user()->userHasRole('Admin') && $service->status == 'In Service'): ?>
                                                                <h5>Waiting for the Service Invoice</h5>
                                                            <?php endif; ?>

                                                            <?php if($service->status == 'Completed'): ?>
                                                                <form action="<?php echo e(route('maintenance.updateInvoice', $service)); ?>" method="post" enctype="multipart/form-data">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('PUT'); ?>
                                                                    <div class="form-group">
                                                                        <label for="service_notes">Service Notes: </label>
                                                                        <textarea name="service_notes" id="service_notes" cols="30" rows="5"><?php echo e($service->service_notes); ?></textarea>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <label for="service_invoice">Invoice Number</label>
                                                                            <input type="text" class="form-control" name="service_invoice" value="<?php echo e($service->service_invoice); ?>">
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <label for="invoice">Upload Invoice - <small><?php echo e($service->service_invoice); ?>.pdf</small></label>
                                                                            <input type="file" class="form-control" name="invoice">
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden" class="form-control" name="invoiced_by" value="<?php echo e(auth()->user()->id); ?>">
                                                                    <input type="hidden" class="form-control" name="date_invoiced" value="<?php echo e($dateNow); ?>">
                                                                    <button type="submit" class="btn btn-primary width-100 p-3 mt-3">Update</button>
                                                                </form>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Service Modal -->

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <h1 class="text-center text-gray">No New Requests</h1>
                    <?php endif; ?>


                </div>
            </div>
            <!-- /New Requests -->


            <!-- All Requests -->
            <div class="card my-3 shadow mb-4 service">
                <div class="row">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered li-link-table" id="maintRentalTable">
                                <thead>
                                    <tr>
                                        <th>
                                            <span class="visible-xs-table">&nbsp;</span>
                                            <div class="row hidden-xs-flex">
                                                <div class="col-sm-1">Image</div>
                                                <div class="col-sm-1">Date</div>
                                                <div class="col-sm-2">Vehicle Type</div>
                                                <div class="col-sm-1">Vehicle ID</div>
                                                <div class="col-sm-2">Description</div>
                                                <div class="col-sm-1">Service Invoice #</div>
                                                <div class="col-sm-1">Service Type</div>
                                                <div class="col-sm-1 text-center pr-0">Status</div>
                                                <div class="col-sm-2 text-center pr-0">&nbsp;</div>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $__currentLoopData = $maintenances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <a href="#" class="table-li-link" data-toggle="modal" data-target="#maintModal<?php echo e($maintenance->id); ?>">
                                                    <div class="row">
                                                        <div class="col-sm-1">
                                                            <?php if($maintenance->image == ''): ?>

                                                            <?php else: ?>
                                                                <img class="img-responsive" src="<?php echo e(asset('storage/' . $maintenance->image)); ?>" height="auto" width="100%" />
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <p>
                                                                <?php echo e(\Carbon\Carbon::parse( $maintenance->date )->format('m/d/y')); ?>

                                                            </p>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <p>
                                                                <?php echo e($maintenance->vehicle_type); ?>

                                                            </p>
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <p class="sm-md">
                                                            <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($maintenance->vehicle_id == $vehicle->id): ?>
                                                                        <?php echo e($vehicle->internal_vehicle_id); ?>

                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <?php echo e($maintenance->description); ?>

                                                        </div>
                                                        <div class="col-sm-1">
                                                            <p class="xs-center">
                                                                <?php echo e($maintenance->service_invoice); ?>

                                                            </p>
                                                        </div>
                                                        <div class="col-sm-1 pr-0">
                                                            <p>
                                                                <?php echo e($maintenance->service_type); ?>

                                                            </p>
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <p><?php echo e($maintenance->status); ?></p>
                                                        </div>
                                                        <div class="col-sm-2 pl-0">
                                                            <div class="form-div">
                                                                <?php if($maintenance->status == 'Created'): ?>
                                                                    <h4 class="text-red">Need to Accept</h4>
                                                                <?php elseif($maintenance->invoice == ''): ?>
                                                                    <h4 class="text-gray-700">Upload Invoice</h4>
                                                                <?php elseif($maintenance->status == 'Invoice Submitted'): ?>
                                                                    <h4 class="text-gray-600">Invoice Waiting Approval</h4>
                                                                <?php else: ?>
                                                                    <h4 class="text-gray-400"></h4>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                            </table>

                            <?php $__currentLoopData = $maintenances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maintenance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <!-- Maint Modal -->
                                <div class="modal fade" id="maintModal<?php echo e($maintenance->id); ?>" tabindex="-1" role="dialog" aria-labelledby="cocIntake" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($service->vehicle_id == $vehicle->id): ?>
                                                        <h3><span><?php echo e($vehicle->vehicle_type); ?> </span> (<?php echo e($vehicle->internal_vehicle_id); ?>)</h3>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <?php if($maintenance->image == ''): ?>
                                                            <img class="img-responsive" src="<?php echo e(asset('storage/' . 'images/no-image.jpg')); ?>" height="auto" width="100%" />
                                                        <?php else: ?>
                                                            <img class="img-responsive" src="<?php echo e(asset('storage/' . $maintenance->image)); ?>" height="auto" width="100%" />
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5>Status: &nbsp;</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <h5><span><?php echo e($maintenance->status); ?></span></h5>
                                                            </div>
                                                        </div>
                                                        <?php if($maintenance->rental_invoice == ''): ?>
                                                            <?php else: ?>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <h5>Rental Invoice: &nbsp;</h5>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h5><span>#<?php echo e($maintenance->rental_invoice); ?></span></h5>
                                                                </div>
                                                            </div>
                                                        <?php endif; ?>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5>VIN: &nbsp;</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <h5>
                                                                         <span>
                                                                                <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                 <?php if($vehicle->id == $maintenance->vehicle_id): ?>
                                                                                     <?php echo e($vehicle->vin); ?>

                                                                                 <?php endif; ?>
                                                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </span>
                                                                </h5>
                                                            </div>
                                                        </div>

                                                        <br />

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5>Recent Hours: &nbsp;</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <h5>
                                                                         <span>
                                                                                <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                 <?php if($vehicle->id == $maintenance->vehicle_id): ?>
                                                                                     <?php echo e($vehicle->current_hours); ?>

                                                                                 <?php endif; ?>
                                                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            </span>
                                                                </h5>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5> Hours Updated: &nbsp;</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <h5>
                                                                        <span>
                                                                                <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <?php if($vehicle->id == $maintenance->vehicle_id): ?>
                                                                                    <?php echo e(\Carbon\Carbon::parse($vehicle->hours_updated)->format('M d, Y')); ?>

                                                                                <?php endif; ?>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            </span>
                                                                </h5>
                                                            </div>
                                                        </div>

                                                        <br />

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5>Submitted By: &nbsp;</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <h5><span>
                                                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                                            <?php if($user->id == $service->submitted_by): ?>
                                                                                <?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?>

                                                                            <?php endif; ?>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </span></h5>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5>Date Submitted: &nbsp;</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <h5><span><?php echo e(\Carbon\Carbon::parse($maintenance->date_submitted)->format('M d, Y')); ?></span></h5>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5>Service Type: &nbsp;</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <h5>
                                                                    <?php echo e($maintenance->service_type); ?>

                                                                </h5>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5>Service Description: &nbsp;</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <h5>
                                                                    <?php echo e($maintenance->description); ?>

                                                                </h5>
                                                            </div>
                                                        </div>


                                                        <?php if($maintenance->invoice): ?>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <h5>Date Invoice Submitted: &nbsp;</h5>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h5><span><?php echo e(\Carbon\Carbon::parse($maintenance->date_invoiced)->format('M d, Y')); ?></span></h5>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <h5>Invoice Submitted By: &nbsp;</h5>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h5>
                                                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php if($maintenance->invoiced_by == $user->id): ?>
                                                                                <span><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></span>
                                                                            <?php endif; ?>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        <?php endif; ?>
                                                        <?php if($maintenance->status == 'Completed'): ?>

                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <h5>Date Completed: &nbsp;</h5>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h5><span><?php echo e(\Carbon\Carbon::parse($maintenance->date_completed)->format('M d, Y')); ?></span></h5>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <h5>Invoice Accepted By: &nbsp;</h5>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h5>
                                                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php if($maintenance->approved_by == $user->id): ?>
                                                                                <span><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></span>
                                                                            <?php endif; ?>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        <?php endif; ?>

                                                        <div class="row mt-5">
                                                            <div class="col-12">
                                                                <?php if($maintenance->status == 'Created'): ?>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <h5>Accept Service Job?</h5>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <form action="<?php echo e(route('maintenance.acceptMaintReqCoc', $maintenance)); ?>" method="post">
                                                                                <?php echo csrf_field(); ?>
                                                                                <?php echo method_field('PUT'); ?>
                                                                                <div class="form-group width-100">
                                                                                    <button type="submit" class="btn btn-primary width-100 p-3">Yes</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <form action="#" method="post">
                                                                                <?php echo csrf_field(); ?>
                                                                                <?php echo method_field('PUT'); ?>
                                                                                <div class="form-group width-100">
                                                                                    <button type="submit" class="btn btn-secondary width-100 p-3">No</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                <?php elseif($maintenance->invoice == ''): ?>
                                                                    <form action="<?php echo e(route('maintenance.attachInvoice', $maintenance)); ?>" method="post" enctype="multipart/form-data">
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php echo method_field('PUT'); ?>
                                                                        <div class="form-group">
                                                                            <label for="service_notes">Service Notes: </label>
                                                                            <textarea name="service_notes" id="service_notes" cols="30" rows="5"><?php echo e($maintenance->service_notes); ?></textarea>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-4">
                                                                                <label for="service_invoice">Invoice Number</label>
                                                                                <input type="text" class="form-control" name="service_invoice" value="<?php echo e($maintenance->service_invoice); ?>">
                                                                            </div>
                                                                            <div class="col-8">
                                                                                <label for="invoice">Upload Invoice - <small><?php echo e($maintenance->service_invoice); ?>.pdf</small></label>
                                                                                <input type="file" class="form-control" name="invoice">
                                                                            </div>
                                                                        </div>
                                                                        <input type="hidden" class="form-control" name="invoiced_by" value="<?php echo e(auth()->user()->id); ?>">
                                                                        <input type="hidden" class="form-control" name="date_invoiced" value="<?php echo e($dateNow); ?>">
                                                                        <button type="submit" class="btn btn-primary width-100 p-3 mt-3">Attach Invoice</button>
                                                                    </form>
                                                                <?php else: ?>
                                                                    <form action="<?php echo e(route('maintenance.updateInvoice', $maintenance)); ?>" method="post" enctype="multipart/form-data">
                                                                        <?php echo csrf_field(); ?>
                                                                        <?php echo method_field('PUT'); ?>
                                                                        <div class="form-group">
                                                                            <label for="service_notes">Service Notes: </label>
                                                                            <textarea name="service_notes" id="service_notes" cols="30" rows="5"><?php echo e($maintenance->service_notes); ?></textarea>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-4">
                                                                                <label for="service_invoice">Invoice Number</label>
                                                                                <input type="text" class="form-control" name="service_invoice" value="<?php echo e($maintenance->service_invoice); ?>">
                                                                            </div>
                                                                            <div class="col-8">
                                                                                <label for="invoice">Upload Invoice - <small><?php echo e($maintenance->service_invoice); ?>.pdf</small></label>
                                                                                <input type="file" class="form-control" name="invoice">
                                                                            </div>
                                                                        </div>
                                                                        <input type="hidden" class="form-control" name="invoiced_by" value="<?php echo e(auth()->user()->id); ?>">
                                                                        <input type="hidden" class="form-control" name="date_invoiced" value="<?php echo e($dateNow); ?>">
                                                                        <button type="submit" class="btn btn-primary width-100 p-3 mt-3">Update</button>
                                                                    </form>

                                                                <?php endif; ?>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Maint Modal -->

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /All Requests -->

        <?php $__env->stopSection(); ?>

    <?php endif; ?>


    <!-- Zapier Integration -->
     <?php if(auth()->user()->userHasRole('zapier')): ?>
         <?php $__env->startSection('zap-content'); ?>
            <div class="card shadow mt-4 mb-5">
                <div class="card-body">
                    <form method="post" action="<?php echo e(route('rental.addRental')); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <div class="row">


                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="booking_id">Booking ID</label>
                                    <input type="text" class="form-control" name="booking_id">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="purchase_type">Purchase Type</label>
                                    <input type="text" class="form-control" name="purchase_type">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="purchase_date">Purchase Date</label>
                                    <input type="text" class="form-control" name="purchase_date">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="activity_date">Activity Date</label>
                                    <input type="text" class="form-control" name="activity_date">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="activity_item">Activity Item</label>
                                    <input type="text" class="form-control" name="activity_item">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control" name="first_name">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control" name="last_name">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="zip_code">Zip Code</label>
                                    <input type="text" class="form-control" name="zip_code">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="payment_type">Payment Type</label>
                                    <input type="text" class="form-control" name="payment_type">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="payment_status">Payment Status</label>
                                    <input type="text" class="form-control" name="payment_status">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="ticket_list">Ticket List</label>
                                    <input type="text" class="form-control" name="ticket_list">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" name="phone">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="source">Source</label>
                                    <input type="text" class="form-control" name="source">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="list_price">List Price</label>
                                    <input type="text" class="form-control" name="list_price">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="total_discount_amount">Total Discount</label>
                                    <input type="text" class="form-control" name="total_discount_amount">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="customer_fees">Customer Fee's</label>
                                    <input type="text" class="form-control" name="customer_fees">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="total_charge">Total Charge</label>
                                    <input type="text" class="form-control" name="total_charge">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <input type="text" class="form-control" name="status">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="customer_notes">Customer Notes</label>
                                    <textarea type="text" class="form-control" name="customer_notes"></textarea>
                                </div>
                            </div>

                            <input type="hidden" name="precheck_by" value="0">
                            <button class="btn btn-primary" type="submit">Submit</button>

                        </div>
                    </form>
                </div>
            </div>
        <?php $__env->stopSection(); ?>
    <?php endif; ?>
    <!-- /Zapier Integration -->





    <?php $__env->startSection('scripts'); ?>
    <!-- Page level plugins -->
        <script src="<?php echo e(asset('vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/chart.js/Chart.min.js')); ?>"></script>


        <!-- Page level custom scripts -->
        <script src="<?php echo e(asset('js/demo/datatables-scripts.js')); ?>"></script>
        <script src="<?php echo e(asset('js/demo/chart-bar-scripts.js')); ?>"></script>

        <script type="text/javascript">
            $( document ).ready(function() {
                // $('ul#accordionSidebar li:first-child a.nav-link').toggleClass('active');
                $('ul#accordionSidebar li:first-child a.nav-link').removeClass('collapsed');
                $('ul#accordionSidebar li:first-child .collapse').addClass('show');
            });
        </script>
    <?php $__env->stopSection(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /var/www/skrentals.systems/sk-website/resources/views/team/index.blade.php ENDPATH**/ ?>