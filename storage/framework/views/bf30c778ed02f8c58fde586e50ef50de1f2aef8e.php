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
            <h1><?php echo e($type->name); ?> Settings</h1>
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('browser_title'); ?>
            <title><?php echo e($type->name); ?> Settings | <?php echo e($website->name); ?></title>
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

        <h1><span class="text-primary"><?php echo e($type->name); ?></span> Settings</h1>

        <!-- Rental Durations -->
        <div class="card shadow mb-3">
            <div class="card-header">
                <h3 class="mb-0"><?php echo e($type->name); ?> Durations</h3>
            </div>
            <div class="card-body">


                <div class="row">
                    <div class="col-sm-6">
                        <h3>Add Duration</h3>
                        <form action="<?php echo e(route('type.duration', $type)); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="name" class="form-control" name="name" id="name">
                            </div>
                            <div class="form-group">
                                <label for="is_active">Is Active</label>
                                <select name="is_active" id="is_active">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                            <button class="btn btn-primary btn-right" type="submit">Add</button>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <h3>Select Duration</h3>
                        <?php $__currentLoopData = $durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <a href="#" class="card shadow mt-0 my-2 width-100
                                    <?php if($type->durations->contains($duration)): ?>
                                        hidden
                                    <?php endif; ?>
                                    " type="submit" data-toggle="modal" data-target="#durationModal<?php echo e($duration->id); ?>">
                                    <div class="card-body">
                                        <div class="row">
                                           <div class="col-4">
                                               <h3 class="mb-0"><?php echo e($duration->name); ?></h3>
                                           </div>
                                            <div class="col-8">
                                                <span class="text-secondary">
                                                    <?php $__currentLoopData = $duration->availabils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $availabil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        Repeats
                                                        <?php if($availabil->repeat_day == '1'): ?>
                                                            DAILY
                                                        <?php elseif($availabil->repeat_day == '0'): ?>
                                                            WEEKLY
                                                        <?php endif; ?>
                                                        every <?php echo e($availabil->start_min_increm); ?> min
                                                        from <?php echo e(\Carbon\Carbon::parse($availabil->start_time)->format('h:i A')); ?>

                                                        to <?php echo e(\Carbon\Carbon::parse($availabil->end_time)->format('h:i A')); ?>

                                                        <br>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            <!-- Duration Modal -->
                            <div class="modal fade mt-5" id="durationModal<?php echo e($duration->id); ?>" tabindex="-1" role="dialog" aria-labelledby="durationModal" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3>
                                                <?php echo e($duration->name); ?>

                                            </h3>
                                        </div>
                                        <div class="modal-body">
                                           <div class="row">
                                               <div class="col-sm-6">
                                                   <h4>Availabilities:</h4>
                                                   <ul>
                                                       <?php $__currentLoopData = $duration->availabils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $availabil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                           <li>
                                                               Repeats
                                                               <?php if($availabil->repeat_day == '1'): ?>
                                                                   DAILY
                                                               <?php elseif($availabil->repeat_day == '0'): ?>
                                                                   WEEKLY
                                                               <?php endif; ?>
                                                               every <?php echo e($availabil->start_min_increm); ?> min
                                                               from <?php echo e(\Carbon\Carbon::parse($availabil->start_time)->format('h:i A')); ?>

                                                               to <?php echo e(\Carbon\Carbon::parse($availabil->end_time)->format('h:i A')); ?>

                                                           </li>
                                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   </ul>
                                               </div>
                                               <div class="col-sm-6">
                                                   <h4>Attached to:</h4>
                                                   <ul>
                                                       <?php $__currentLoopData = $duration->types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                           <li>
                                                              <?php echo e($duration_type->name); ?>

                                                           </li>
                                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   </ul>
                                               </div>
                                           </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="row mt-3 width-100">
                                                <div class="col-sm-4">
                                                    <button class="btn btn-secondary width-100" type="button" data-dismiss="modal">CANCEL</button>
                                                </div>
                                                <div class="col-sm-4">
                                                    <a href="<?php echo e(route('rental.duration_settings', $duration)); ?>" class="btn btn-outline-secondary width-100">Edit Duration</a>
                                                </div>
                                                <div class="col-sm-4">
                                                    <form method="post" action="<?php echo e(route('attach.duration', $type)); ?>" class="
                                                        <?php if($type->durations->contains($duration)): ?>
                                                            hidden
                                                        <?php endif; ?>
                                                        ">
                                                        <?php echo method_field('PUT'); ?>
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="duration" value="<?php echo e($duration->id); ?>">

                                                        <button class="btn btn-primary" type="submit">
                                                            Attach Duration to <?php echo e($type->name); ?>

                                                        </button>


                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Duration Modal -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
            </div>
        </div>
        <!-- /Rental Durations -->


        <!-- Rental Pricing -->
        <div class="card shadow mb-3">
            <div class="card-header">
                <h3 class="mb-0"><?php echo e($type->name); ?> Duration Pricing</h3>
            </div>
            <div class="card-body">
                <div class="row">
                   <?php $__currentLoopData = $durations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php if($type->durations->contains($duration)): ?>
                            <div class="card shadow mt-0 my-2 width-100">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <h2 ><?php echo e($duration->name); ?></h2>
                                        </div>

                                        <div class="col-sm-4">
                                            <?php if($duration->has('prices')): ?>

                                                <?php $__currentLoopData = $duration->prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($duration->id == $price->duration_id && $type->id == $price->type_id): ?>
                                                        <form method="post" action="<?php echo e(route('price.update', $price)); ?>">
                                                            <?php echo method_field('PUT'); ?>
                                                            <?php echo csrf_field(); ?>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <input type="number" min="0.00" step="0.01" name="amount" placeholder="$$" class="form-control" value="<?php echo e($price->amount); ?>" />
                                                                </div>
                                                                <div class="col-6">
                                                                    <input type="text" class="hidden" name="duration_id" value="<?php echo e($duration->id); ?>">
                                                                    <input type="text" class="hidden" name="type_id" value="<?php echo e($type->id); ?>">
                                                                    <button class="btn btn-secondary" type="submit">Update Price</button>
                                                                </div>
                                                            </div>

                                                        </form>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>

                                            <form method="post" action="<?php echo e(route('price.store.attach', $duration)); ?>" class="
                                                 <?php if($duration->has('prices')): ?>
                                                    <?php $__currentLoopData = $duration->prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($duration->id == $price->duration_id && $type->id == $price->type_id): ?>
                                                            hidden
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                                ">
                                                <?php echo method_field('PUT'); ?>
                                                <?php echo csrf_field(); ?>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <input type="number" min="0.00" step="0.50" name="amount" placeholder="Enter Price" class="form-control" />
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="hidden" name="duration_id" value="<?php echo e($duration->id); ?>">
                                                        <input type="hidden" name="type_id" value="<?php echo e($type->id); ?>">
                                                        <button class="btn btn-primary" type="submit">Add Price</button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>

                                        <div class="col-sm-3">
                                            <?php if($duration->has('prices')): ?>

                                                <?php $__currentLoopData = $duration->prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($duration->id == $price->duration_id && $type->id == $price->type_id): ?>
                                                        <form method="post" action="<?php echo e(route('price.note', $price)); ?>">
                                                            <?php echo method_field('PUT'); ?>
                                                            <?php echo csrf_field(); ?>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <input type="text" name="notes" placeholder="Add price note..." class="form-control" value="<?php echo e($price->notes); ?>" />
                                                                </div>
                                                                <div class="col-6">
                                                                    <?php if($price->notes != ''): ?>
                                                                        <button class="btn btn-outline-secondary" type="submit">Update Note</button>
                                                                    <?php else: ?>
                                                                        <button class="btn btn-outline-secondary" type="submit">Add Note</button>
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>

                                                        </form>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </div>

                                        <div class="col-sm-2">
                                            <a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#durationDetach<?php echo e($duration->id); ?>">Detach</a>
                                        </div>


                                        <div class="col-sm-1">
                                            <?php $__currentLoopData = $prices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $price): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($price->duration_id == $duration->id && $price->type_id == $type->id): ?>
                                                    <h3 class="mt-2 text-primary">
                                                        $<?php echo e($price->amount); ?>

                                                    </h3>
                                                <?php else: ?>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Duration Detach Confirmation Modal -->
                            <div class="modal fade mt-5" id="durationDetach<?php echo e($duration->id); ?>" tabindex="-1" role="dialog" aria-labelledby="availabilDetach" aria-hidden="true">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3>
                                                Detach from
                                                <span><?php echo e($type->name); ?></span>
                                            </h3>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Are you sure you want to detach:
                                                <span class="text-white">
                                                    <?php echo e($duration->name); ?>

                                                </span>
                                            </h4>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="row mt-3 width-100">
                                                <div class="col-6">
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                                                </div>
                                                <div class="col-6">
                                                    <form action="<?php echo e(route('type.detachDuration', $duration)); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('PUT'); ?>

                                                        <input type="text" class="hidden" name="type_id" value="<?php echo e($type->id); ?>">
                                                        <button class="btn btn-primary width-100 btn-right" type="submit">Detach</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Duration Detach Confirmation Modal -->
                           <?php endif; ?>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>
        </div>
        <!-- /Rental Pricing -->

        <!-- Rental Type Info -->
        <div class="card shadow mb-3">
            <div class="card-header">
                <h3 class="mb-0"><?php echo e($type->name); ?> Info</h3>
            </div>
            <div class="card-body">


                <div class="row">
                    <form action="<?php echo e(route('type.update', $type)); ?>" method="post" enctype="multipart/form-data" class="width-100">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="name" id="name" value="<?php echo e($type->name); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <input type="text" class="form-control" name="description" id="description" value="<?php echo e($type->description); ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="booking_buffer_hr">Hour Buffer</label>
                                            <div class="row">
                                                <div class="col-9 pr-0">
                                                    <input type="number" class="form-control" name="booking_buffer_hr" id="booking_buffer_hr" value="<?php echo e($type->booking_buffer_hr); ?>">
                                                </div>
                                                <div class="col-3">
                                                    <h3>hrs</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="quantity">Quantity</label>
                                            <input type="number" class="form-control" name="quantity" id="quantity" value="<?php echo e($type->quantity); ?>">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="capacity_count">Capacity Count</label>
                                            <div class="row">
                                                <div class="col-9 pr-0">
                                                    <input type="number" class="form-control" name="capacity_count" id="capacity_count" value="<?php echo e($type->capacity_count); ?>">
                                                </div>
                                                <div class="col-3">
                                                    <h3>lbs</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="weight_capacity">Weight Capacity</label>
                                            <div class="row">
                                                <div class="col-9 pr-0">
                                                    <input type="number" class="form-control" name="weight_capacity" id="weight_capacity" value="<?php echo e($type->weight_capacity); ?>">
                                                </div>
                                                <div class="col-3">
                                                    <h3>lbs</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="image"><?php echo e($type->name); ?> Image</label>
                                            <input type="file" class="form-control-file" name="image">
                                        </div>
                                        <div class="col-6">
                                            <img class="img-center mt-3 width-100" src="<?php echo e(asset('storage/' . $type->image)); ?>" width="60%" height="auto" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="img_alt">Image Alt Text</label>
                                    <input type="text" class="form-control" name="img_alt" value="<?php echo e($type->img_alt); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h3 class="mt-4">Additional Info</h3>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="cancel_policy">Cancellation Policy</label>
                                    <textarea name="cancel_policy" id="cancel_policy" cols="30" rows="5"><?php echo e($type->cancel_policy); ?></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mt-3">
                                    <label for="pickup_details">Pickup Details</label>
                                    <input type="text" class="form-control" name="pickup_details" id="pickup_details" value="<?php echo e($type->pickup_details); ?>">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="pickup_address">Pickup Address</label>
                                    <input type="text" class="form-control" name="pickup_address" id="pickup_address" value="<?php echo e($type->pickup_address); ?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="what_to_know">What to Know</label>
                                    <textarea name="what_to_know" id="what_to_know" cols="30" rows="5"><?php echo e($type->what_to_know); ?></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="what_to_bring">What to Bring</label>
                                    <textarea name="what_to_bring" id="what_to_bring" cols="30" rows="5"><?php echo e($type->what_to_bring); ?></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="suggested_attire">Suggested Attire</label>
                                    <textarea name="suggested_attire" id="suggested_attire" cols="30" rows="2"><?php echo e($type->suggested_attire); ?></textarea>
                                </div>
                            </div>


                        </div>


                        <div class="row">
                            <div class="col-6">
                                <label for="is_active">Active </label>
                                <select name="is_active" id="is_active">
                                    <option value="1"
                                        <?php if($type->is_active == '1'): ?>
                                            selected
                                        <?php endif; ?>
                                    >Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <input type="text" class="hidden" name="archive" value="0">
                                <button class="btn btn-primary btn-right" type="submit">Update</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- /Rental Type Info -->

        <!-- Additions -->
        <div class="row">
            <div class="col-sm-4">
                <div class="card shadow mb-3">
                    <div class="card-header">
                        <h3 class="mb-0"><span><?php echo e($type->name); ?></span> Additions</h3>
                    </div>
                    <div class="card-body">
                        <?php $__currentLoopData = $additions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $addition): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <?php if(!$type->additions->contains($addition)): ?>
                                
                                
                                
                            <?php else: ?>
                                <div class="card shadow mb-3">
                                    <a href="#" class="card-body" data-toggle="modal" data-target="#additionModal<?php echo e($addition->id); ?>">
                                        <h4 class="text-center text-secondary-dk">
                                            <?php echo e($addition->name); ?>











                                        </h4>
                                    </a>
                                </div>

                            <?php endif; ?>

                        <!-- Edit Addition Modal -->
                            <div class="modal fade mt-5" id="additionModal<?php echo e($addition->id); ?>" tabindex="-1" role="dialog" aria-labelledby="additionModal" aria-hidden="true">
                                <div class="modal-dialog modal-md" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3>Edit: <?php echo e($addition->name); ?>












                                            </h3>
                                        </div>
                                        <form action="<?php echo e(route('addition.update', $addition)); ?>" method="post" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>

                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h4 class="text-secondary">
                                                                <em>This will effect all Rental types with this addition</em>
                                                            </h4>
                                                        </div>
                                                    </div>

                                                    <div class="row">

                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="name">Addition Name</label>
                                                                <input type="text" class="form-control" name="name" value="<?php echo e($addition->name); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="cost">Cost</label>
                                                                <input type="number" class="form-control" name="cost" value="<?php echo e($addition->cost); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="description">Description</label>
                                                                <textarea class="form-control" name="description" id="" cols="30" rows="5"><?php echo e($addition->description); ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="quantity">Quantity</label>
                                                                <input type="number" class="form-control" name="quantity" value="<?php echo e($addition->quantity); ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="image">Image</label>
                                                                <input type="file" class="form-control-file" name="image">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-2 mt-2">
                                                                        <select name="visible" id="visible" class="form-control">
                                                                            <option name="visible" value="1">Yes</option>
                                                                            <option name="visible" value="0"
                                                                            <?php if($addition->visible == '0'): ?>
                                                                                selected
                                                                            <?php endif; ?>
                                                                            >No</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-10">
                                                                        <label for="visible">
                                                                            <span class="text-white">Select if you want customers to be able to reserve this at booking</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="row mt-3 width-100">
                                                        <div class="col-sm-4">
                                                            <button class="btn btn-secondary width-100" type="button" data-dismiss="modal">CANCEL</button>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <?php if($type->additions->contains($addition)): ?>
                                                                <a href="#" class="btn btn-outline-secondary width-100" data-dismiss="modal" data-toggle="modal" data-target="#additionDetach<?php echo e($addition->id); ?>">Detach</a>
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
                            <!-- /Edit Addition Modal -->

                            <!-- Addition Detach Confirmation Modal -->
                            <div class="modal fade mt-5" id="additionDetach<?php echo e($addition->id); ?>" tabindex="-1" role="dialog" aria-labelledby="availabilDetach" aria-hidden="true">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3>
                                                Detach from
                                                <span><?php echo e($type->name); ?></span>
                                            </h3>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Are you sure you want to detach:
                                                <span class="text-white">
                                                    <?php echo e($addition->name); ?>

                                                </span>
                                            </h4>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="row mt-3 width-100">
                                                <div class="col-6">
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                                                </div>
                                                <div class="col-6">
                                                    <form action="<?php echo e(route('type.detachAddition', $addition)); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('PUT'); ?>
                                                        <input type="text" class="hidden" name="type_id" value="<?php echo e($type->id); ?>">
                                                        <button class="btn btn-primary width-100 btn-right" type="submit">Detach</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Addition Detach Confirmation Modal -->

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </div>
                </div>
            </div>
            <div class="col-sm-8">

                <div class="row">
                    <div class="col-sm-6">
                        <div class="card shadow mb-3">
                            <div class="card-header">
                                <h3 class="mb-0">Add Addition</h3>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo e(route('addition.store')); ?>" method="post" enctype="multipart/form-data" id="addAddition">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>

                                    <div class="row">

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="name">Addition Name</label>
                                                <input type="text" class="form-control" name="name">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="cost">Cost</label>
                                                <input type="number" class="form-control" name="cost">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea class="form-control" name="description" id="" cols="30" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="quantity">Quantity</label>
                                                <input type="number" class="form-control" name="quantity">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="image">Image</label>
                                                <input type="file" class="form-control-file" name="image">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-2 mt-2">
                                                        <select name="visible" id="visible">
                                                            <option value="1" default>Yes</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-10">
                                                        <label for="visible">Select if you want customers to be able to reserve this at booking</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <input type="text" class="hidden" name="type_id" value="<?php echo e($type->id); ?>">
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
                                <h3 class="mb-0">Attach Addition</h3>
                            </div>
                            <div class="card-body">
                                <?php $__currentLoopData = $additions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $addition): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <?php if($type->additions->contains($addition)): ?>
                                        
                                        
                                        
                                    <?php else: ?>
                                        <a href="#" class="btn btn-outline-primary-black width-100 mb-3" data-toggle="modal" data-target="#additionChooseModal<?php echo e($addition->id); ?>">
                                            <?php echo e($addition->name); ?>

                                            <br>
                                            <?php $__currentLoopData = $addition->types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $addition_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <span class="text-secondary"><?php echo e($addition_type->name); ?></span>  &nbsp;
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </a>

                                    <?php endif; ?>

                                <!-- Availability Attach Confirmation Modal -->
                                    <div class="modal fade mt-5" id="additionChooseModal<?php echo e($addition->id); ?>" tabindex="-1" role="dialog" aria-labelledby="additionModal" aria-hidden="true">
                                        <div class="modal-dialog modal-sm" role="document">
                                            <div class="modal-content width-100">
                                                <div class="modal-header">
                                                    <h3>
                                                       <?php echo e($addition->name); ?>

                                                    </h3>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <h4>Attached to:</h4>
                                                            <ul class="text-white">
                                                                <?php $__currentLoopData = $addition->types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $addition_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <li>
                                                                        <?php echo e($addition_type->name); ?>

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
                                                            <a href="#" class="btn btn-outline-secondary width-100 mb-3 btn-center" data-dismiss="modal" data-toggle="modal" data-target="#additionModal<?php echo e($addition->id); ?>">Edit Addition</a>
                                                        </div>
                                                        <div class="col-12">
                                                            <form action="<?php echo e(route('type.attachAddition', $addition)); ?>" method="post">
                                                                <?php echo csrf_field(); ?>
                                                                <?php echo method_field("PUT"); ?>

                                                                <input type="text" class="hidden" name="type_id" value="<?php echo e($type->id); ?>">
                                                                <button class="btn btn-primary width-100 mb-3 btn-center" type="submit">
                                                                    Attach to <?php echo e($type->name); ?>

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
        <!-- /Additions -->



    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('scripts'); ?>
            <script>

                $(document).ready(function(){
                //     $('#v-pills-tab li:first-child button').tab('active') // Select first tab
                // });

                // $('#v-pills-tabContent li:first-child button').tab('active') // Select first tab
                $('#v-pills-tab li button').on('click', function (event) {
                    event.preventDefault()
                    $(this).toggleClass('show')
                    $(this).toggleClass('active')
                })
            </script>


    <?php $__env->stopSection(); ?>



 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/admin/types/settings.blade.php ENDPATH**/ ?>