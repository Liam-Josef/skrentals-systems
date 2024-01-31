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
            <title>Hour Counts</title>
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('browser_title'); ?>
            <title>Hour Counts | <?php echo e($application->name); ?></title>
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









    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('content'); ?>
        <h1>
            <?php if(auth()->user()->userHasRole('Dock')): ?>
                <button type="button" class="btn btn-dk-sidebar" data-toggle="modal" data-target="#dockSidebar">
                    <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
                </button>
            <?php endif; ?>
                Hour Counts
        </h1>



       <div class="row">
           <div class="col-12 col-sm-1"></div>
           <div class="col-12 col-sm-10">
               <div class="card shadow card-dark mb-4">
                   <div class="card-header">
                       <!-- Departing Tablist -->
                       <ul class="nav nav-tabs nav-justified dock-depart" id="runnerView" role="tablist">
                           <li class="nav-item mb-0">
                               <a class="nav-link active" id="view-pontoon-tab" data-toggle="tab" href="#pontoon-tab" role="tab" aria-controls="pontoon-tab"
                                  aria-selected="true">
                                   Pont<span class="hidden-xs-inline">oon</span>
                               </a>
                           </li>
                           <li class="nav-item mb-0">
                               <a class="nav-link" id="view-scarab-tab" data-toggle="tab" href="#scarab-tab" role="tab" aria-controls="scarab-tab"
                                  aria-selected="true">
                                   Scarab
                               </a>
                           </li>
                           <li class="nav-item mb-0">
                               <a class="nav-link" id="view-seadoo-tab" data-toggle="tab" href="#seadoo-tab" role="tab" aria-controls="seadoo-tab"
                                  aria-selected="true">
                                   SeaDoo
                               </a>
                           </li>
                           <li class="nav-item mb-0">
                               <a class="nav-link" id="view-skidoo-tab" data-toggle="tab" href="#skidoo-tab" role="tab" aria-controls="skidoo-tab"
                                  aria-selected="true">
                                   SkiDoo
                               </a>
                           </li>
                       </ul>
                   </div>
                   <div class="card-body">
                       <div class="tab-content" id="myTabContent">
                           <div class="tab-pane fade show" id="scarab-tab" role="tabpanel" aria-labelledby="scarab-tab">

                               <?php $__currentLoopData = $vehicleScarab; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <form method="post" action="<?php echo e(route('vehicle.updateHours', $vehicle)); ?>">
                                       <?php echo csrf_field(); ?>
                                       <?php echo method_field('PUT'); ?>
                                       <div class="row">
                                           <div class="col-sm-1"></div>
                                           <div class="col-sm-5"><h3 class="text-white text-center mt-1"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></h3></div>
                                           <span class="hidden"><?php echo e($updatedDate = \Carbon\Carbon::now()->addDay()); ?></span>
                                           <?php if(strpos($vehicle->hours_updated, $today) !== false): ?>
                                                <div class="col-sm-3">
                                                    <h3 class="mt-1">  <?php echo e($vehicle->current_hours); ?></h3>
                                                </div>
                                               <?php else: ?>
                                               <div class="col-6 col-sm-1">
                                                   <input type="number" class="form-control visible-sm" name="current_hours" value="<?php echo e($vehicle->current_hours); ?>" />
                                                   <input type="text" class="form-control hidden-sm" name="current_hours" value="<?php echo e($vehicle->current_hours); ?>" />
                                                   <input type="hidden" class="form-control" name="hours_updated" value="<?php echo e($dateNow); ?>" />
                                                   <input type="hidden" class="form-control" name="id" value="<?php echo e($vehicle->id); ?>" />
                                               </div>
                                               <div class="col-6 col-sm-2">
                                                   <button type="submit" class="btn btn-primary-red">Update</button>
                                               </div>
                                           <?php endif; ?>

                                           <div class="col-sm-2">
                                               <?php if($vehicle->launched == '1'): ?>
                                                   <h4 class="mt-2">( On Rental )</h4>
                                               <?php endif; ?>
                                           </div>
                                           <hr class="rounded mt-3" />
                                       </div>
                                   </form>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                           </div>
                           <div class="tab-pane fade show active" id="pontoon-tab" role="tabpanel" aria-labelledby="pontoon-tab">
                               <?php $__currentLoopData = $vehiclePontoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <form method="post" action="<?php echo e(route('vehicle.updateHours', $vehicle)); ?>">
                                   <?php echo csrf_field(); ?>
                                   <?php echo method_field('PUT'); ?>
                                   <div class="row">
                                       <div class="col-sm-1"></div>
                                       <div class="col-sm-5"><h3 class="text-white text-center mt-1"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></h3></div>
                                       <span class="hidden"><?php echo e($updatedDate = \Carbon\Carbon::now()->addDay()); ?></span>
                                       <?php if(strpos($vehicle->hours_updated, $today) !== false): ?>
                                           <div class="col-sm-3">
                                               <h3 class="mt-1">  <?php echo e($vehicle->current_hours); ?></h3>
                                           </div>
                                       <?php else: ?>
                                           <div class="col-6 col-sm-1">
                                               <input type="number" class="form-control visible-sm" name="current_hours" value="<?php echo e($vehicle->current_hours); ?>" />
                                               <input type="text" class="form-control hidden-sm" name="current_hours" value="<?php echo e($vehicle->current_hours); ?>" />
                                               <input type="hidden" class="form-control" name="hours_updated" value="<?php echo e(Carbon\Carbon::now('PST')); ?>" />
                                               <input type="hidden" class="form-control" name="id" value="<?php echo e($vehicle->id); ?>" />
                                           </div>
                                           <div class="col-6 col-sm-2">
                                               <button type="submit" class="btn btn-primary-red">Update</button>
                                           </div>
                                       <?php endif; ?>

                                       <div class="col-sm-2">
                                           <?php if($vehicle->launched == '1'): ?>
                                               <h4 class="mt-2">( On Rental )</h4>
                                           <?php endif; ?>
                                       </div>
                                       <hr class="rounded mt-3" />
                                   </div>
                               </form>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </div>
                           <div class="tab-pane fade show" id="seadoo-tab" role="tabpanel" aria-labelledby="seadoo-tab">
                               <?php $__currentLoopData = $vehicleSeaDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <form method="post" action="<?php echo e(route('vehicle.updateHours', $vehicle)); ?>">
                                   <?php echo csrf_field(); ?>
                                   <?php echo method_field('PUT'); ?>
                                   <div class="row">
                                       <div class="col-sm-1"></div>
                                       <div class="col-sm-5"><h3 class="text-white text-center mt-1"><?php echo e($vehicle->vehicle_type); ?> <?php echo e($vehicle->internal_vehicle_id); ?></h3></div>
                                       <span class="hidden"><?php echo e($updatedDate = \Carbon\Carbon::now()->addDay()); ?></span>
                                       <?php if(strpos($vehicle->hours_updated, $today) !== false): ?>
                                           <div class="col-sm-3">
                                               <h3 class="mt-1">  <?php echo e($vehicle->current_hours); ?></h3>
                                           </div>
                                       <?php else: ?>
                                           <div class="col-6 col-sm-1">
                                               <input type="number" class="form-control visible-sm" name="current_hours" value="<?php echo e($vehicle->current_hours); ?>" />
                                               <input type="text" class="form-control hidden-sm" name="current_hours" value="<?php echo e($vehicle->current_hours); ?>" />
                                               <input type="hidden" class="form-control" name="hours_updated" value="<?php echo e(Carbon\Carbon::now('PST')); ?>" />
                                               <input type="hidden" class="form-control" name="id" value="<?php echo e($vehicle->id); ?>" />
                                           </div>
                                           <div class="col-6 col-sm-2">
                                               <button type="submit" class="btn btn-primary-red">Update</button>
                                           </div>
                                       <?php endif; ?>

                                       <div class="col-sm-2">
                                           <?php if($vehicle->launched == '1'): ?>
                                               <h4 class="mt-2">( On Rental )</h4>
                                           <?php endif; ?>
                                       </div>
                                       <hr class="rounded mt-3" />
                                   </div>
                               </form>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </div>
                           <div class="tab-pane fade show" id="skidoo-tab" role="tabpanel" aria-labelledby="skidoo-tab">
                               <?php $__currentLoopData = $vehicleSkiDoo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <form method="post" action="<?php echo e(route('vehicle.updateHours', $vehicle)); ?>">
                                       <?php echo csrf_field(); ?>
                                       <?php echo method_field('PUT'); ?>
                                       <div class="row">
                                           <div class="col-sm-1"></div>
                                           <div class="col-sm-5"><h3 class="text-white text-center mt-1"><?php echo e($vehicle->model); ?> <?php echo e($vehicle->internal_vehicle_id); ?></h3></div>
                                           <span class="hidden"><?php echo e($updatedDate = \Carbon\Carbon::now()->addDay()); ?></span>
                                           <?php if(strpos($vehicle->hours_updated, $today) !== false): ?>
                                               <div class="col-sm-3">
                                                   <h3 class="mt-1">  <?php echo e($vehicle->current_hours); ?></h3>
                                               </div>
                                           <?php else: ?>
                                               <div class="col-6 col-sm-1">
                                                   <input type="number" class="form-control visible-sm" name="current_hours" value="<?php echo e($vehicle->current_hours); ?>" />
                                                   <input type="text" class="form-control hidden-sm" name="current_hours" value="<?php echo e($vehicle->current_hours); ?>" />
                                                   <input type="hidden" class="form-control" name="hours_updated" value="<?php echo e(Carbon\Carbon::now('PST')); ?>" />
                                                   <input type="hidden" class="form-control" name="id" value="<?php echo e($vehicle->id); ?>" />
                                               </div>
                                               <div class="col-6 col-sm-2">
                                                   <button type="submit" class="btn btn-primary-red">Update</button>
                                               </div>
                                           <?php endif; ?>

                                           <div class="col-sm-2">
                                               <?php if($vehicle->launched == '1'): ?>
                                                   <h4 class="mt-2">( On Rental )</h4>
                                               <?php endif; ?>
                                           </div>
                                           <hr class="rounded mt-3" />
                                       </div>
                                   </form>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>




    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('sidebar'); ?>

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
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/dock/hour-counts.blade.php ENDPATH**/ ?>