<!--Add Vehicle Modal -->
<div class="modal fade" id="addVehicle" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="modal_rental_title" class="modal-title"><span>Add a Vehicle </span></h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

                <form method="post" action="<?php echo e(route('vehicle.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('POST'); ?>

                    <div class="row">
                        <div class="col-4 col-sm-2">
                            <div class="form-group">
                                <label for="internal_vehicle_id">Identifier</label>
                                <input type="text" name="internal_vehicle_id" id="internal_vehicle_id" class="form-control <?php $__errorArgs = ['internal_vehicle_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" />
                                <div>
                                    <?php $__errorArgs = ['internal_vehicle_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span><strong><?php echo e($message); ?></strong></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-8 col-sm-10">
                            <div class="form-group">
                                <label for="vehicle_type">Type</label>
                                <select name="vehicle_type" id="vehicle_type" class="form-control <?php $__errorArgs = ['vehicle_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <option value="SeaDoo">SeaDoo</option>
                                    <option value="Pontoon">Pontoon</option>
                                    <option value="Scarab">Scarab</option>
                                    <option value="Spyder">Spyder</option>
                                    <option value="SkiDoo">SkiDoo</option>
                                    <option value="Aluminum">Aluminum</option>
                                    <option value="SUP">Stand Up Paddleboard</option>
                                    <option value="Kayak">Kayak</option>
                                    <option value="Segway">Segway</option>
                                </select>
                                <div>
                                    <?php $__errorArgs = ['vehicle_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span><strong><?php echo e($message); ?></strong></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 col-sm-2">
                            <div class="form-group">
                                <label for="year">Year</label>
                                <input type="text" name="year" id="year" class="form-control <?php $__errorArgs = ['year'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" />
                                <div>
                                    <?php $__errorArgs = ['year'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span><strong><?php echo e($message); ?></strong></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-8 col-sm-10">
                            <div class="form-group">
                                <label for="model">Model</label>
                                <select name="model" id="model" class="form-control <?php $__errorArgs = ['model'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <option value="GTX Pro">GTX Pro</option>
                                    <option value="Starcraft EX 22">Starcraft EX 22</option>
                                    <option value="Scarab 215">Scarab 215</option>
                                    <option value="Spyder RT-S">Spyder RT-S</option>
                                    <option value="Summit 154">Summit 154</option>
                                    <option value="BackCountry 154">BackCountry 154</option>
                                    <option value="Yamaha">Yamaha</option>
                                    <option value="Segway i2">Segway i2</option>
                                    <option value="Single Kayak">Single Kayak</option>
                                    <option value="Double Kayak">Double Kayak</option>
                                    <option value="Stand Up Paddleboard">Stand Up Paddleboard</option>
                                </select>
                                <div>
                                    <?php $__errorArgs = ['model'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span><strong><?php echo e($message); ?></strong></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <div class="form-group">
                                <label for="vin">VIN</label>
                                <input type="text" name="vin" id="vin" class="form-control <?php $__errorArgs = ['vin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" />
                                <div>
                                    <?php $__errorArgs = ['vin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span><strong><?php echo e($message); ?></strong></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="location">Location</label>
                                <select name="location" id="location" class="form-control <?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <option value="Dock">Dock</option>
                                    <option value="Island">Island</option>
                                    <option value="Service">Service</option>
                                    <option value="Zeta">Zeta</option>
                                    <option value="Incoming">Incoming</option>
                                </select>
                                <div>
                                    <?php $__errorArgs = ['location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span><strong><?php echo e($message); ?></strong></span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                    </div>




                    <input type="hidden" name="or_number" id="or_number" class="form-control" />
                    <input type="hidden" name="hours_updated" id="hours_updated" class="form-control" />
                    <input type="hidden" name="current_hours" id="current_hours" class="form-control" />
                    <input type="hidden" name="expected_hours" id="expected_hours" class="form-control" />
                    <input type="hidden" name="remaining_hours" id="remaining_hours" class="form-control" />
                    <input type="hidden" name="previous_hours" id="previous_hours" class="form-control" />
                    <input type="hidden" name="last_serviced" id="last_serviced" class="form-control" />
                    <input type="hidden" name="launched" id="launched" class="form-control" />
                    <input type="hidden" name="status" id="status" class="form-control" />
                    <input type="hidden" name="is_active" id="is_active" class="form-control" />







                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                        <button type="submit" class="btn btn-primary">Create Vehicle</button>
                    </div>
                </form>


            </div>

        </div>
    </div>
</div>
<!-- /Add Vehicle Modal -->
<?php /**PATH /var/www/rentalguru.systems/rg-website/resources/views/components/admin/modals/add-vehicle.blade.php ENDPATH**/ ?>