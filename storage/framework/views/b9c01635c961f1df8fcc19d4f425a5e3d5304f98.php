<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin-master','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin-master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <?php $__env->startSection('styles'); ?>

    <?php $__env->stopSection(); ?>


    <?php $__currentLoopData = $websites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $website): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <?php $__env->startSection('page_title'); ?>
        <h1>Rental Settings</h1>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('browser_title'); ?>
        <title>Rental Settings | <?php echo e($website->name); ?></title>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('logo-square'); ?>
        <img src="<?php echo e(asset('storage/'. $website->logo_square_1)); ?>" alt="<?php echo e($website->name); ?> Logo" height="30px" width="auto">
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('logo-horizontal'); ?>
        <img src="<?php echo e(asset('storage/'. $website->logo_horizontal_1)); ?>" alt="<?php echo e($website->name); ?> Logo" height="30px" width="auto">
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('logo_horizontal_1'); ?>
        <?php echo e(asset('storage/'. $website->logo_horizontal_1)); ?>

    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('logo_horizontal_2'); ?>
        <?php echo e(asset('storage/'. $website->logo_horizontal_2)); ?>

    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('logo_square_1'); ?>
        <?php echo e(asset('storage/'. $website->logo_square_1)); ?>

    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('logo_square_2'); ?>
        <?php echo e(asset('storage/'. $website->logo_square_2)); ?>

    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('favicon'); ?>
        <?php echo e(asset('storage/'. $website->favicon)); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('analytic_tag'); ?>
        <?php echo e($website->analytic_link_1); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('analytic_links'); ?>
        <li class="nav-item">
            <a class="nav-link <?php echo e(Request::is('admin/index*') ? 'collapsed' : ''); ?>" href="#" data-toggle="collapse" data-target="#collapseAnalytics" aria-expanded="" aria-controls="collapseAnalytics">
                <i class="fas fa-fw fa-solid fa-code-branch"></i>
                <span>Analytics</span>
            </a>
            <div id="collapseAnalytics" class="collapse" aria-labelledby="headingAnalytics" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">

                    <h6 class="collapse-header">Google Analytics: </h6>
                    
                    
                    
                    <?php if($website->analytic_link_2 != ''): ?>
                        <a class="collapse-item" href="<?php echo e($website->analytic_link_2); ?>" target="_blank"><span class="text-primary">Reports</span> Snapshot</a>
                    <?php endif; ?>
                    <?php if($website->analytic_link_3 != ''): ?>
                        <a class="collapse-item" href="<?php echo e($website->analytic_link_3); ?>" target="_blank"><span class="text-primary">Acquisition</span> Overview</a>
                    <?php endif; ?>
                    <?php if($website->analytic_link_4 != ''): ?>
                        <a class="collapse-item" href="<?php echo e($website->analytic_link_4); ?>" target="_blank"><span class="text-primary">Engagement</span> Overview</a>
                    <?php endif; ?>
                    <?php if($website->analytic_link_5 != ''): ?>
                        <a class="collapse-item" href="<?php echo e($website->analytic_link_5); ?>" target="_blank"><span class="text-primary">Demographics</span> Overview</a>
                    <?php endif; ?>
                </div>
            </div>
        </li>
    <?php $__env->stopSection(); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    <?php $__env->startSection('content'); ?>

        <h1>Duration: <span class="text-primary"><?php echo e($duration->name); ?></span> Settings</h1>

        <!-- Rental Durations -->
        <div class="card shadow mb-3">
            <div class="card-header">
                <h3 class="mb-0">Rental Duration Settings</h3>
            </div>
            <div class="card-body">

                <div class="row">
                    <form action="<?php echo e(route('duration.update', $duration)); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="name" class="">Name</label>
                                        <input type="text" class="form-control" name="name" value="<?php echo e($duration->name); ?>" aria-label="duration_name">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="hour" class="">Hours</label>
                                        <input type="number" class="form-control" name="hour" value="<?php echo e($duration->hour); ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="day" class="">Days</label>
                                        <input type="number" class="form-control" name="day" value="<?php echo e($duration->day); ?>">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="night" class="">Nights</label>
                                        <input type="number" class="form-control" name="night" value="<?php echo e($duration->night); ?>">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="form-group">
                                        <label for="before_hour" class="">Buffer Before Hours</label>
                                        <input type="number" class="form-control" name="before_hour" value="<?php echo e($duration->before_hour); ?>">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="form-group">
                                        <label for="before_minute" class="">Buffer Before Minutes</label>
                                        <input type="number" class="form-control" name="before_minute" value="<?php echo e($duration->before_minute); ?>">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="form-group">
                                        <label for="after_hour" class="">Buffer After Hours</label>
                                        <input type="number" class="form-control" name="after_hour" value="<?php echo e($duration->after_hour); ?>">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="form-group">
                                        <label for="after_minute" class="">Buffer After Minutes</label>
                                        <input type="number" class="form-control" name="after_minute" value="<?php echo e($duration->after_minute); ?>">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancel </button>
                            <button class="btn btn-primary" type="submit">Update </button>


                        </div>
                    </form>
                </div>

            </div>
            <div class="card-footer">

            </div>
        </div>
        <!-- /Rental Durations -->

        <!-- Rental Duration Availability -->
        <div class="row">
            <div class="col-sm-4">
                <div class="card shadow mb-3">
                    <div class="card-header">
                        <h3 class="mb-0"><span><?php echo e($duration->name); ?></span> Availabilies</h3>
                    </div>
                    <div class="card-body">
                       <?php $__currentLoopData = $availabils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $availabil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <?php if(!$duration->availabils->contains($availabil)): ?>



                                <?php else: ?>
                                    <div class="card shadow mb-3">
                                        <a href="#" class="card-body" data-toggle="modal" data-target="#availabilModal<?php echo e($availabil->id); ?>">
                                           <h4 class="text-center text-secondary-dk">
                                               Repeats
                                               <?php if($availabil->repeat_day == '1'): ?>
                                                   DAILY
                                               <?php elseif($availabil->repeat_day == '0'): ?>
                                                   WEEKLY
                                               <?php endif; ?>
                                               every <?php echo e($availabil->start_min_increm); ?> min
                                               <br>
                                               from <?php echo e(\Carbon\Carbon::parse($availabil->start_time)->format('h:i A')); ?>

                                               to <?php echo e(\Carbon\Carbon::parse($availabil->end_time)->format('h:i A')); ?>

                                           </h4>
                                        </a>
                                    </div>

                                <?php endif; ?>

                                <!-- Edit Availability Modal -->
                                <div class="modal fade mt-5" id="availabilModal<?php echo e($availabil->id); ?>" tabindex="-1" role="dialog" aria-labelledby="availabilModal" aria-hidden="true">
                                    <div class="modal-dialog modal-md" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3>Edit:
                                                    <span>
                                                         Repeats
                                                        <?php if($availabil->repeat_day == '1'): ?>
                                                            DAILY
                                                        <?php elseif($availabil->repeat_day == '0'): ?>
                                                            WEEKLY
                                                        <?php endif; ?>
                                                           every <?php echo e($availabil->start_min_increm); ?> min
                                                           from <?php echo e(\Carbon\Carbon::parse($availabil->start_time)->format('h:i A')); ?>

                                                           to <?php echo e(\Carbon\Carbon::parse($availabil->end_time)->format('h:i A')); ?>

                                                    </span>
                                                </h3>
                                            </div>
                                            <form action="<?php echo e(route('availabil.update', $availabil)); ?>" method="post" enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('PUT'); ?>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h4 class="text-secondary">
                                                                <em>This will effect all durations with this availability</em>
                                                            </h4>
                                                        </div>
                                                    </div>

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="form-group mt-2">
                                                                    <label for="start_min_increm">Start Increments (Min)</label>
                                                                    <br>
                                                                    <select name="start_min_increm" id="start_min_increm" class="form-control">
                                                                        <option value="15"
                                                                            <?php if($availabil->start_min_increm == '15'): ?>
                                                                                selected
                                                                            <?php endif; ?>
                                                                        >15 Minutes</option>
                                                                        <option value="30"
                                                                            <?php if($availabil->start_min_increm == '30'): ?>
                                                                                selected
                                                                            <?php endif; ?>
                                                                        >30 Minutes</option>
                                                                        <option value="60"
                                                                            <?php if($availabil->start_min_increm == '60'): ?>
                                                                                selected
                                                                            <?php endif; ?>
                                                                        >60 Minutes</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group mb-0">
                                                                    <div class="row">
                                                                        <div class="col-3">
                                                                            <input type="radio" class="form-control" name="repeat_day" id="repeat_day" value="1"
                                                                               <?php if($availabil->repeat_day == '1'): ?>
                                                                                   checked
                                                                               <?php endif; ?>
                                                                            >
                                                                        </div>
                                                                        <div class="col-9">
                                                                            <label for="repeat_day">
                                                                                <h5 class="mt-2">Repeat Daily</h5>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-3">
                                                                            <input type="radio" class="form-control" name="repeat_day" id="repeat_day" value="0"
                                                                               <?php if($availabil->repeat_day == '0'): ?>
                                                                                   checked
                                                                               <?php endif; ?>
                                                                            >
                                                                        </div>
                                                                        <div class="col-9">
                                                                            <label for="repeat_day">
                                                                                <h5 class="mt-2">Repeat Weekly <br>
                                                                                    <span class="text-secondary">
                                                                                        <em>(in development)</em>
                                                                                    </span>
                                                                                </h5>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <label for="start_time">Between</label>
                                                                <input type="time" class="form-control" name="start_time" value="<?php echo e($availabil->start_time); ?>">
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="end_time">And</label>
                                                                <input type="time" class="form-control" name="end_time" value="<?php echo e($availabil->end_time); ?>">
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                   <div class="row mt-3 width-100">
                                                       <div class="col-sm-4">
                                                           <button class="btn btn-secondary width-100" type="button" data-dismiss="modal">CANCEL</button>
                                                       </div>
                                                       <div class="col-sm-4">
                                                           <?php if($duration->availabils->contains($availabil)): ?>
                                                               <a href="#" class="btn btn-outline-secondary width-100" data-dismiss="modal" data-toggle="modal" data-target="#availabilDetach<?php echo e($availabil->id); ?>">Detach</a>
                                                           <?php else: ?>
                                                               &nbsp;

                                                           <?php endif; ?>
                                                       </div>
                                                       <div class="col-sm-4">
                                                           <button class="btn btn-primary width-100 btn-right" type="submit">Update</button>
                                                       </div>
                                                   </div>
                                               </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Edit Availability Modal -->

                                <!-- Availability Detach Confirmation Modal -->
                                <div class="modal fade mt-5" id="availabilDetach<?php echo e($availabil->id); ?>" tabindex="-1" role="dialog" aria-labelledby="availabilDetach" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3>
                                                    Detach from
                                                    <span><?php echo e($duration->name); ?></span>
                                                </h3>
                                            </div>
                                            <div class="modal-body">
                                                <h4>Are you sure you want to detach:
                                                    <span class="text-white">
                                                         Repeats
                                                        <?php if($availabil->repeat_day == '1'): ?>
                                                                    DAILY
                                                                <?php elseif($availabil->repeat_day == '0'): ?>
                                                                    WEEKLY
                                                                <?php endif; ?>
                                                           every <?php echo e($availabil->start_min_increm); ?> min
                                                           from <?php echo e(\Carbon\Carbon::parse($availabil->start_time)->format('h:i A')); ?>

                                                           to <?php echo e(\Carbon\Carbon::parse($availabil->end_time)->format('h:i A')); ?>

                                                    </span>
                                                </h4>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="row mt-3 width-100">
                                                    <div class="col-6">
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                                                    </div>
                                                    <div class="col-6">
                                                        <form action="<?php echo e(route('duration.detachAvail', $duration)); ?>" method="post">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('PUT'); ?>
                                                            <input type="text" class="hidden" name="availabil_id" value="<?php echo e($availabil->id); ?>">
                                                            <button class="btn btn-primary width-100 btn-right" type="submit">Detach</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Availability Detach Confirmation Modal -->

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </div>
                </div>
            </div>
            <div class="col-sm-8">

                <div class="row">
                    <div class="col-sm-6">
                        <div class="card shadow mb-3">
                            <div class="card-header">
                                <h3 class="mb-0">Add Availability</h3>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo e(route('availabil.store', $duration)); ?>" method="post" enctype="multipart/form-data" id="addAvail">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group mt-2">
                                                <label for="start_min_increm">Start Increments (Min)</label>
                                                <br>
                                                <select name="start_min_increm" id="start_min_increm" class="form-control">
                                                    <option value="15" default>15 Minutes</option>
                                                    <option value="30">30 Minutes</option>
                                                    <option value="60">60 Minutes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                           <div class="form-group mb-0">
                                               <div class="row">
                                                   <div class="col-3">
                                                       <input type="radio" class="form-control" name="repeat_day" id="repeat_day" value="1" checked>
                                                   </div>
                                                   <div class="col-9">
                                                       <label for="repeat_day">
                                                           <h5 class="mt-2">Repeat Daily</h5>
                                                       </label>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="form-group">
                                               <div class="row">
                                                   <div class="col-3">
                                                       <input type="radio" class="form-control" name="repeat_day" id="drepeat_dayay" value="0">
                                                   </div>
                                                   <div class="col-9">
                                                       <label for="repeat_day">
                                                           <h5 class="mt-2">Repeat Weekly</h5>
                                                       </label>
                                                   </div>
                                               </div>
                                           </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="start_time">Between</label>
                                            <input type="time" class="form-control" name="start_time">
                                        </div>
                                        <div class="col-6">
                                            <label for="end_time">And</label>
                                            <input type="time" class="form-control" name="end_time">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <input type="text" class="hidden" name="duration_id" value="<?php echo e($duration->id); ?>">
                                            <input type="text" class="hidden" name="repeat_week" value="0">
                                            <button class="btn btn-primary btn-right" type="submit">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card shadow mb-3">
                            <div class="card-header">
                                <h3 class="mb-0">Attach Availability</h3>
                            </div>
                            <div class="card-body">
                                <?php $__currentLoopData = $availabils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $availabil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <?php if($duration->availabils->contains($availabil)): ?>



                                    <?php else: ?>
                                            <a href="#" class="btn btn-outline-primary-black width-100 mb-3" data-toggle="modal" data-target="#availabilChooseModal<?php echo e($availabil->id); ?>">
                                                Repeats
                                                <?php if($availabil->repeat_day == '1'): ?>
                                                    DAILY
                                                <?php elseif($availabil->repeat_day == '0'): ?>
                                                    WEEKLY
                                                <?php endif; ?>
                                                every <?php echo e($availabil->start_min_increm); ?> min
                                                <br>
                                                from <?php echo e(\Carbon\Carbon::parse($availabil->start_time)->format('h:i A')); ?>

                                                to <?php echo e(\Carbon\Carbon::parse($availabil->end_time)->format('h:i A')); ?>

                                                <br>
                                                <?php $__currentLoopData = $availabil->durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $availabil_duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <span class="text-secondary"><?php echo e($availabil_duration->name); ?></span>  &nbsp;
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </a>

                                    <?php endif; ?>

                                    <!-- Availability Attach Confirmation Modal -->
                                    <div class="modal fade mt-5" id="availabilChooseModal<?php echo e($availabil->id); ?>" tabindex="-1" role="dialog" aria-labelledby="availabilityModal" aria-hidden="true">
                                        <div class="modal-dialog modal-sm" role="document">
                                            <div class="modal-content width-100">
                                                <div class="modal-header">
                                                    <h3>
                                                        Repeats
                                                        <span>
                                                                    <?php if($availabil->repeat_day == '1'): ?>
                                                                DAILY
                                                            <?php elseif($availabil->repeat_day == '0'): ?>
                                                                WEEKLY
                                                            <?php endif; ?>
                                                                    every <?php echo e($availabil->start_min_increm); ?> min
                                                                    from <?php echo e(\Carbon\Carbon::parse($availabil->start_time)->format('h:i A')); ?>

                                                                    to <?php echo e(\Carbon\Carbon::parse($availabil->end_time)->format('h:i A')); ?>

                                                    </span>
                                                    </h3>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <h4>Attached to:</h4>
                                                            <ul class="text-white">
                                                                <?php $__currentLoopData = $duration->types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <li>
                                                                        <?php echo e($duration_type->name); ?>

                                                                    </li>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer width-100">
                                                    <div class="row mt-3 width-100">
                                                        <div class="col-12">
                                                            <button class="btn btn-secondary width-100 mb-3 btn-center" type="button" data-dismiss="modal">CANCEL</button>
                                                        </div>
                                                        <div class="col-12">
                                                            <a href="#" class="btn btn-outline-secondary width-100 mb-3 btn-center" data-dismiss="modal" data-toggle="modal" data-target="#availabilModal<?php echo e($availabil->id); ?>">Edit Availability</a>
                                                        </div>
                                                        <div class="col-12">
                                                            <form action="<?php echo e(route('duration.attachAvail', $duration)); ?>" method="post">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field("PUT"); ?>
                                                                <input type="text" class="hidden" name="availabil_id" value="<?php echo e($availabil->id); ?>">
                                                                <button class="btn btn-primary width-100 mb-3 btn-center" type="submit">
                                                                    Attach to <?php echo e($duration->name); ?>

                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Availability Attach Confirmation Modal -->
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /Rental Duration Availability -->

    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('scripts'); ?>


    <?php $__env->stopSection(); ?>



 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/admin/rentals/duration-settings.blade.php ENDPATH**/ ?>