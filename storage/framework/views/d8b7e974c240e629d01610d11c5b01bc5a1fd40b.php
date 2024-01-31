<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.runnerview-master','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('runnerview-master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php $__env->startSection('styles'); ?>

    <?php $__env->stopSection(); ?>

        <?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $__env->startSection('page_title'); ?>
                <title>Departing</title>
            <?php $__env->stopSection(); ?>

            <?php $__env->startSection('browser_title'); ?>
                <title>Departing | <?php echo e($application->name); ?></title>
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
        <h1>Runner View</h1>

          <div class="row">
              <!-- Pre-Check -->
              <ul class="nav nav-tabs nav-justified mb-3" id="runnerView" role="tablist">
                  <li class="nav-item">
                      <a class="nav-link active" id="view-office-tab" data-toggle="tab" href="#office-tab" role="tab" aria-controls="office-tab"
                         aria-selected="true">Office</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" id="view-dock-tab" data-toggle="tab" href="#dock-tab" role="tab" aria-controls="dock-tab"
                         aria-selected="false">Dock</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" id="view-cleared-tab" data-toggle="tab" href="#cleared-tab" role="tab" aria-controls="cleared-tab"
                         aria-selected="false">Cleared</a>
                  </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="office-tab" role="tabpanel" aria-labelledby="office-tab">
                     <div class="row">
                         <div class="col-sm-6">
                            <h2 class="text-dark text-center">Pre-Checkin</h2>
                             <?php $__currentLoopData = $rentals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <?php if($rental->status == 'Pre-Check' && strpos($rental->activity_date, $today) !== false): ?>
                                     <div class="card shadow my-1 mb-2">
                                         <a href="#" class="runnerview-box">
                                             <div class="card-header">
                                                 <div class="row">
                                                     <div class="col-3 col-sm-2">
                                                         <h4 class="text-center text-red">
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
                                                         </h4>
                                                     </div>
                                                     <div class="col-8 col-sm-3 pl-0 pr-0">
                                                         <h4>
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
                                          </span>
                                                         </h4>
                                                     </div>
                                                     <div class="col-12 col-sm-7">
                                                         <div class="row">
                                                             <div class="visible-xs col-1"></div>
                                                             <div class="col-5 col-lg-7">
                                                                 <h4 class="text-right font-weight-lighter">Scheduled:</h4>
                                                             </div>
                                                             <div class="col-6 col-lg-5">
                                                                 <h4 class="text-center text-gray-500">
                                                                     <?php echo e($launchTime = \Carbon\Carbon::parse($rental->activity_date)->format('h:i a')); ?>

                                                                 </h4>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="card-body">
                                                 <div class="row">
                                                     <div class="col-sm-12">
                                                         <h2 class="text-center font-weight-bolder"><?php echo e($rental->first_name); ?> <?php echo e($rental->last_name); ?></h2>
                                                     </div>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                 <?php endif; ?>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </div>
                         <div class="col-sm-6">
                            <h2 class="text-dark text-center">Checked In</h2>
                             <?php $__currentLoopData = $rentals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <?php if($rental->status == 'Checked In' && strpos($rental->activity_date, $today) !== false): ?>
                                     <div class="card shadow my-1 mb-2">
                                         <a href="#" class="runnerview-box" data-toggle="modal" data-target="#rental_modal<?php echo e($rental->id); ?>">
                                             <div class="card-header">
                                                 <div class="row">
                                                     <div class="col-3 col-sm-2">
                                                         <h4 class="text-center text-red">
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
                                                         </h4>
                                                     </div>
                                                     <div class="col-8 col-sm-3 pl-0 pr-0">
                                                         <h4>
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
                                                                     <br />

                                                                 <?php endif; ?>
                                          </span>
                                                         </h4>
                                                     </div>
                                                     <div class="col-12 col-sm-7">
                                                         <div class="row">
                                                             <div class="visible-xs col-1"></div>
                                                             <div class="col-5 col-lg-7">
                                                                 <h4 class="text-right font-weight-lighter">Check In:</h4>
                                                             </div>
                                                             <div class="col-6 col-lg-5">
                                                                 <h4 class="text-center text-gray-500">
                                                                     <?php echo e(\Carbon\Carbon::parse($rental->check_in_time)->format('h:i a')); ?>

                                                                 </h4>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="card-body">
                                                 <div class="row">
                                                     <div class="col-sm-12">
                                                         <h2 class="text-center font-weight-bolder"><?php echo e($rental->first_name); ?> <?php echo e($rental->last_name); ?></h2>
                                                     </div>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                 <?php endif; ?>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="dock-tab" role="tabpanel" aria-labelledby="dock-tab">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2 class="text-dark text-center">On Water</h2>
                                <?php $__currentLoopData = $rentals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($rental->status == 'On Water' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card shadow my-1 mb-2">
                                            <a href="#" class="runnerview-box" data-toggle="modal" data-target="#rental_modal<?php echo e($rental->id); ?>">
                                                <div class="card-header">
                                                    <div class="row">
                                                        <div class="col-3 col-sm-2">
                                                            <h4 class="text-center text-red">
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
                                                            </h4>
                                                        </div>
                                                        <div class="col-8 col-sm-3 pl-0 pr-0">
                                                            <h4>
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
                                          </span>
                                                            </h4>
                                                        </div>
                                                        <div class="col-12 col-sm-7">
                                                            <div class="row">
                                                                <div class="visible-xs col-1"></div>
                                                                <div class="col-5 col-lg-7">
                                                                    <h4 class="text-right font-weight-lighter">Due:</h4>
                                                                </div>
                                                                <div class="col-6 col-lg-5">
                                                                    <h4 class="text-center text-gray-500">
                                                                        <h4 class="text-center text-gray-500">
                                                                            <!-- UPDATED -->
                                                                                <?php if(strpos($rental->ticket_list, '1 hour') !== false): ?>
                                                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(1)->format('h:i a')); ?>

                                                                                <?php elseif(strpos($rental->ticket_list, '1 Hour') !== false): ?>
                                                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(1)->format('h:i a')); ?>

                                                                                <?php endif; ?>
                                                                                <?php if(strpos($rental->ticket_list, '2 hour') !== false): ?>
                                                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(2)->format('h:i a')); ?>

                                                                                <?php elseif(strpos($rental->ticket_list, '2 Hour') !== false): ?>
                                                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(2)->format('h:i a')); ?>

                                                                                <?php endif; ?>
                                                                                <?php if(strpos($rental->ticket_list, '3 hour') !== false): ?>
                                                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(3)->format('h:i a')); ?>

                                                                                <?php elseif(strpos($rental->ticket_list, '3 Hour') !== false): ?>
                                                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(3)->format('h:i a')); ?>

                                                                                <?php endif; ?>
                                                                                <?php if(strpos($rental->ticket_list, '4 hour') !== false): ?>
                                                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(4)->format('h:i a')); ?>

                                                                                <?php elseif(strpos($rental->ticket_list, '4 Hour') !== false): ?>
                                                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(4)->format('h:i a')); ?>

                                                                                <?php endif; ?>
                                                                                <?php if(strpos($rental->ticket_list, '8 Hour') !== false): ?>
                                                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(8)->format('h:i a')); ?>

                                                                                <?php elseif(strpos($rental->ticket_list, '8 hour') !== false): ?>
                                                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(8)->format('h:i a')); ?>

                                                                                <?php endif; ?>
                                                                                <?php if(strpos($rental->ticket_list, '9 Hour') !== false): ?>
                                                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(9)->format('h:i a')); ?>

                                                                                <?php elseif(strpos($rental->ticket_list, '9 hour') !== false): ?>
                                                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(9)->format('h:i a')); ?>

                                                                                <?php endif; ?>
                                                                                <?php if(strpos($rental->ticket_list, 'Full Day') !== false): ?>
                                                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(8)->format('h:i a')); ?>

                                                                                <?php endif; ?>
                                                                                <?php if(strpos($rental->ticket_list, 'Half Day') !== false): ?>
                                                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(4)->format('h:i a')); ?>

                                                                                <?php endif; ?>
                                                                                <?php if(strpos($rental->ticket_list, '1 Day') !== false): ?>
                                                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(24)->format('h:i a')); ?>

                                                                                <?php endif; ?>
                                                                                <?php if(strpos($rental->ticket_list, '2 Day') !== false): ?>
                                                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(2)->format('h:i a')); ?>

                                                                                <?php endif; ?>
                                                                                <?php if(strpos($rental->ticket_list, '3 Day') !== false): ?>
                                                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(3)->format('h:i a')); ?>

                                                                                <?php endif; ?>
                                                                                <?php if(strpos($rental->ticket_list, '4 Day') !== false): ?>
                                                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(4)->format('h:i a')); ?>

                                                                                <?php endif; ?>
                                                                                <?php if(strpos($rental->ticket_list, '5 Day') !== false): ?>
                                                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(5)->format('h:i a')); ?>

                                                                                <?php endif; ?>
                                                                                <?php if(strpos($rental->ticket_list, '6 Day') !== false): ?>
                                                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(6)->format('h:i a')); ?>

                                                                                <?php endif; ?>
                                                                                <?php if(strpos($rental->ticket_list, '7 Day') !== false): ?>
                                                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(7)->format('h:i a')); ?>

                                                                                <?php endif; ?>
                                                                                <?php if(strpos($rental->ticket_list, '8 Day') !== false): ?>
                                                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(8)->format('h:i a')); ?>

                                                                                <?php endif; ?>
                                                                                <?php if(strpos($rental->ticket_list, '9 Day') !== false): ?>
                                                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(9)->format('h:i a')); ?>

                                                                                <?php endif; ?>
                                                                                <?php if(strpos($rental->ticket_list, '10 Day') !== false): ?>
                                                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(10)->format('h:i a')); ?>

                                                                                <?php endif; ?>
                                                                                <?php if(strpos($rental->ticket_list, '11 Day') !== false): ?>
                                                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(11)->format('h:i a')); ?>

                                                                                <?php endif; ?>
                                                                                <?php if(strpos($rental->ticket_list, '12 Day') !== false): ?>
                                                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(12)->format('h:i a')); ?>

                                                                                <?php endif; ?>
                                                                                <?php if(strpos($rental->ticket_list, '13 Day') !== false): ?>
                                                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(13)->format('h:i a')); ?>

                                                                                <?php endif; ?>
                                                                                <?php if(strpos($rental->ticket_list, '14 Day') !== false): ?>
                                                                                    <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(14)->format('h:i a')); ?>

                                                                                <?php endif; ?>
                                                                                <!-- /UPDATED -->
                                                                        </h4>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <h2 class="text-center font-weight-bolder"><?php echo e($rental->first_name); ?> <?php echo e($rental->last_name); ?></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="col-sm-6">
                                <h2 class="text-dark text-center">On Dock</h2>
                                <?php $__currentLoopData = $rentals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($rental->status == 'On Dock' && strpos($rental->activity_date, $today) !== false): ?>
                                        <div class="card shadow my-1 mb-2">
                                            <a href="#" class="runnerview-box" data-toggle="modal" data-target="#rental_modal<?php echo e($rental->id); ?>">
                                                <div class="card-header">
                                                    <div class="row">
                                                        <div class="col-3 col-sm-2">
                                                            <h4 class="text-center text-red">
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
                                                            </h4>
                                                        </div>
                                                        <div class="col-8 col-sm-3 pl-0 pr-0">
                                                            <h4>
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
                                          </span>
                                                            </h4>
                                                        </div>
                                                        <div class="col-12 col-sm-7">
                                                            <div class="row">
                                                                <div class="visible-xs col-1"></div>
                                                                <div class="col-5 col-lg-7">
                                                                    <h4 class="text-right font-weight-lighter">Due:</h4>
                                                                </div>
                                                                <div class="col-6 col-lg-5">
                                                                    <h4 class="text-center text-gray-500">
                                                                        <h4 class="text-center text-gray-500">
                                                                            <!-- UPDATED -->
                                                                        <?php if(strpos($rental->ticket_list, '1 hour') !== false): ?>
                                                                            <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(1)->format('h:i a')); ?>

                                                                        <?php elseif(strpos($rental->ticket_list, '1 Hour') !== false): ?>
                                                                            <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(1)->format('h:i a')); ?>

                                                                        <?php endif; ?>
                                                                        <?php if(strpos($rental->ticket_list, '2 hour') !== false): ?>
                                                                            <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(2)->format('h:i a')); ?>

                                                                        <?php elseif(strpos($rental->ticket_list, '2 Hour') !== false): ?>
                                                                            <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(2)->format('h:i a')); ?>

                                                                        <?php endif; ?>
                                                                        <?php if(strpos($rental->ticket_list, '3 hour') !== false): ?>
                                                                            <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(3)->format('h:i a')); ?>

                                                                        <?php elseif(strpos($rental->ticket_list, '3 Hour') !== false): ?>
                                                                            <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(3)->format('h:i a')); ?>

                                                                        <?php endif; ?>
                                                                        <?php if(strpos($rental->ticket_list, '4 hour') !== false): ?>
                                                                            <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(4)->format('h:i a')); ?>

                                                                        <?php elseif(strpos($rental->ticket_list, '4 Hour') !== false): ?>
                                                                            <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(4)->format('h:i a')); ?>

                                                                        <?php endif; ?>
                                                                        <?php if(strpos($rental->ticket_list, '8 Hour') !== false): ?>
                                                                            <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(8)->format('h:i a')); ?>

                                                                        <?php elseif(strpos($rental->ticket_list, '8 hour') !== false): ?>
                                                                            <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(8)->format('h:i a')); ?>

                                                                        <?php endif; ?>
                                                                        <?php if(strpos($rental->ticket_list, '9 Hour') !== false): ?>
                                                                            <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(9)->format('h:i a')); ?>

                                                                        <?php elseif(strpos($rental->ticket_list, '9 hour') !== false): ?>
                                                                            <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(9)->format('h:i a')); ?>

                                                                        <?php endif; ?>
                                                                        <?php if(strpos($rental->ticket_list, 'Full Day') !== false): ?>
                                                                            <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(8)->format('h:i a')); ?>

                                                                        <?php endif; ?>
                                                                        <?php if(strpos($rental->ticket_list, 'Half Day') !== false): ?>
                                                                            <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(4)->format('h:i a')); ?>

                                                                        <?php endif; ?>
                                                                        <?php if(strpos($rental->ticket_list, '1 Day') !== false): ?>
                                                                            <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(24)->format('h:i a')); ?>

                                                                        <?php endif; ?>
                                                                        <?php if(strpos($rental->ticket_list, '2 Day') !== false): ?>
                                                                            <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(2)->format('h:i a')); ?>

                                                                        <?php endif; ?>
                                                                        <?php if(strpos($rental->ticket_list, '3 Day') !== false): ?>
                                                                            <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(3)->format('h:i a')); ?>

                                                                        <?php endif; ?>
                                                                        <?php if(strpos($rental->ticket_list, '4 Day') !== false): ?>
                                                                            <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(4)->format('h:i a')); ?>

                                                                        <?php endif; ?>
                                                                        <?php if(strpos($rental->ticket_list, '5 Day') !== false): ?>
                                                                            <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(5)->format('h:i a')); ?>

                                                                        <?php endif; ?>
                                                                        <?php if(strpos($rental->ticket_list, '6 Day') !== false): ?>
                                                                            <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(6)->format('h:i a')); ?>

                                                                        <?php endif; ?>
                                                                        <?php if(strpos($rental->ticket_list, '7 Day') !== false): ?>
                                                                            <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(7)->format('h:i a')); ?>

                                                                        <?php endif; ?>
                                                                        <?php if(strpos($rental->ticket_list, '8 Day') !== false): ?>
                                                                            <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(8)->format('h:i a')); ?>

                                                                        <?php endif; ?>
                                                                        <?php if(strpos($rental->ticket_list, '9 Day') !== false): ?>
                                                                            <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(9)->format('h:i a')); ?>

                                                                        <?php endif; ?>
                                                                        <?php if(strpos($rental->ticket_list, '10 Day') !== false): ?>
                                                                            <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(10)->format('h:i a')); ?>

                                                                        <?php endif; ?>
                                                                        <?php if(strpos($rental->ticket_list, '11 Day') !== false): ?>
                                                                            <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(11)->format('h:i a')); ?>

                                                                        <?php endif; ?>
                                                                        <?php if(strpos($rental->ticket_list, '12 Day') !== false): ?>
                                                                            <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(12)->format('h:i a')); ?>

                                                                        <?php endif; ?>
                                                                        <?php if(strpos($rental->ticket_list, '13 Day') !== false): ?>
                                                                            <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(13)->format('h:i a')); ?>

                                                                        <?php endif; ?>
                                                                        <?php if(strpos($rental->ticket_list, '14 Day') !== false): ?>
                                                                            <?php echo e($newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(14)->format('h:i a')); ?>

                                                                        <?php endif; ?>
                                                                        <!-- /UPDATED -->
                                                                        </h4>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <h2 class="text-center font-weight-bolder"><?php echo e($rental->first_name); ?> <?php echo e($rental->last_name); ?></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                  </div>
                  <div class="tab-pane fade" id="cleared-tab" role="tabpanel" aria-labelledby="cleared-tab">
                      <div class="row">
                          <div class="col-sm-6">
                              <h2 class="text-dark text-center">Clear</h2>
                              <?php $__currentLoopData = $rentals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <?php if($rental->status == 'Clear' && strpos($rental->activity_date, $today) !== false): ?>
                                      <div class="card shadow my-1 mb-2">
                                          <a href="#" class="runnerview-box" data-toggle="modal" data-target="#rental_modal<?php echo e($rental->id); ?>">
                                              <div class="card-header">
                                                  <div class="row">
                                                      <div class="col-3 col-sm-2">
                                                          <h4 class="text-center text-red">
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
                                                          </h4>
                                                      </div>
                                                      <div class="col-8 col-sm-3 pl-0 pr-0">
                                                          <h4>
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
                                          </span>
                                                          </h4>
                                                      </div>
                                                      <div class="col-12 col-sm-7">
                                                          <div class="visible-xs col-1"></div>
                                                          <div class="row">
                                                              <div class="col-5 col-lg-7">
                                                                  <h4 class="text-right font-weight-lighter">Cleared:</h4>
                                                              </div>
                                                              <div class="col-6 col-lg-5">
                                                                  <h4 class="text-center text-gray-500">
                                                                      <?php echo e(\Carbon\Carbon::parse($rental->cleared_time)->format('h:i a')); ?>

                                                                  </h4>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="card-body">
                                                  <div class="row">
                                                      <div class="col-sm-12">
                                                          <h2 class="text-center font-weight-bolder"><?php echo e($rental->first_name); ?> <?php echo e($rental->last_name); ?></h2>
                                                      </div>
                                                  </div>
                                              </div>
                                          </a>
                                      </div>
                                  <?php endif; ?>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </div>
                          <div class="col-sm-6">
                              <h2 class="text-dark text-center">Change of Condition</h2>
                              <?php $__currentLoopData = $rentals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <?php if($rental->status == 'COC' && strpos($rental->activity_date, $today) !== false): ?>
                                      <div class="card shadow my-1 mb-2">
                                          <a href="#" class="runnerview-box" data-toggle="modal" data-target="#rental_modal<?php echo e($rental->id); ?>">
                                              <div class="card-header">
                                                  <div class="row">
                                                      <div class="col-3 col-sm-2">
                                                          <h4 class="text-center text-red">
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
                                                          </h4>
                                                      </div>
                                                      <div class="col-8 col-sm-3 pl-0 pr-0">
                                                          <h4>
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
                                          </span>
                                                          </h4>
                                                      </div>
                                                      <div class="col-12 col-sm-7">
                                                          <div class="row">
                                                              <div class="visible-xs col-1"></div>
                                                              <div class="col-5 col-lg-7">
                                                                  <h4 class="text-right font-weight-lighter">Cleared:</h4>
                                                              </div>
                                                              <div class="col-6 col-lg-5">
                                                                  <h4 class="text-center text-gray-500">
                                                                      <?php echo e(\Carbon\Carbon::parse($rental->cleared_time)->format('h:i a')); ?>

                                                                  </h4>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="card-body">
                                                  <div class="row">
                                                      <div class="col-sm-12">
                                                          <h2 class="text-center font-weight-bolder"><?php echo e($rental->first_name); ?> <?php echo e($rental->last_name); ?></h2>
                                                      </div>
                                                  </div>
                                              </div>
                                          </a>
                                      </div>
                                  <?php endif; ?>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- /Pre-Check -->
          </div>

        <?php $__currentLoopData = $rentals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Rental Modal -->
        <div class="modal fade" id="rental_modal<?php echo e($rental->id); ?>" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 id="modal_rental_title" class="modal-title text-red">
                            <?php echo e($rental->first_name); ?> <?php echo e($rental->last_name); ?>

                            <span>  | </span>
                            <span class="small gray">
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
                        <span>

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
                        </span>

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
                        </span>

                         <span class="text-gray-700">
                             <?php if($rental->launched_by): ?>
                                 <?php $__currentLoopData = $rental->vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rental_vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     ( <?php echo e($rental_vehicle->internal_vehicle_id); ?> )&nbsp;
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             <?php endif; ?>
                         </span>
                        </h3>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <!-- Modal Item -->
                        <?php if($rental->check_in_by): ?>
                            <div class="rental-modal-item">
                                <div class="row">
                                    <div class="col-6">
                                        <h3 class="text-gray-600">Checked In By:</h3>
                                    </div>
                                    <div class="col-6">
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($rental->check_in_by == $user->id): ?>
                                                 <h3><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></h3>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="rental-modal-item">
                                <div class="row">
                                    <div class="col-6">
                                        <h3 class="text-gray-600">Checked In Time:</h3>
                                    </div>
                                    <div class="col-6">
                                        <h3><?php echo e(\Carbon\Carbon::parse($rental->check_in_time)->format('h:m a')); ?></h3>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <!-- /Modal Item -->

                        <!-- Modal Item -->
                        <?php if($rental->launched_by): ?>
                            <hr class="rounded">
                            <div class="rental-modal-item">
                                <div class="row">
                                    <div class="col-6">
                                        <h3 class="text-gray-600">Checked In By:</h3>
                                    </div>
                                    <div class="col-6">
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($rental->launched_by == $user->id): ?>
                                                <h3><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></h3>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="rental-modal-item">
                                <div class="row">
                                    <div class="col-6">
                                        <h3 class="text-gray-600">Launch Time:</h3>
                                    </div>
                                    <div class="col-6">
                                        <h3><?php echo e(\Carbon\Carbon::parse($rental->launched_time)->format('h:m a')); ?></h3>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <!-- /Modal Item -->

                        <!-- Modal Item -->
                        <?php if($rental->cleared_by): ?>
                            <hr class="rounded">
                            <div class="rental-modal-item">
                                <div class="row">
                                    <div class="col-6">
                                        <h3 class="text-gray-600">Checked In By:</h3>
                                    </div>
                                    <div class="col-6">
                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($rental->cleared_by == $user->id): ?>
                                                <h3><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?></h3>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="rental-modal-item">
                                <div class="row">
                                    <div class="col-6">
                                        <h3 class="text-gray-600">Launch Time:</h3>
                                    </div>
                                    <div class="col-6">
                                        <h3><?php echo e(\Carbon\Carbon::parse($rental->cleared_time)->format('h:m a')); ?></h3>
                                    </div>
                                </div>
                            </div>
                    <?php endif; ?>
                    <!-- /Modal Item -->


                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Rental Modal -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('scripts'); ?>

    <?php $__env->stopSection(); ?>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /var/www/skrentals.systems/sk-website/resources/views/runnerview/index.blade.php ENDPATH**/ ?>