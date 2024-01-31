<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.team-master','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('team-master'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

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


    <?php $__env->startSection('browser_title'); ?>
        <title><?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?> | SK Watercraft Rentals</title>
    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('styles'); ?>
        <link href="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('page_title'); ?>
        <div class="row">
            <div class="col-sm-12">
                <h1><span>Employee Profile:</span> <?php echo e($user->firstname); ?> <?php echo e($user->lastname); ?> <small>(<?php echo e($user->username); ?>)</small></h1>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content-right'); ?>

        <div class="card format shadow mt-4 mb-4">
            <div class="card-header">
                <h3>Employee Information</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-4">
                                <h4 class="lighter-title">Phone</h4>
                            </div>
                            <div class="col-8">
                                <h4 class="lighter">
                                    <?php echo e($user->phone); ?>

                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-3">
                                <h4 class="lighter-title">Email</h4>
                            </div>
                            <div class="col-8">
                                <h4 class="lighter">
                                    <?php echo e($user->email); ?>

                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card format shadow mb-4">
            <div class="card-header">
                <h3>Update Information</h3>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('team.updateUser', $user->id)); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <div class="row">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" name="firstname" class="form-control" value="<?php echo e($user->firstname); ?>" disabled>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" name="lastname" class="form-control" value="<?php echo e($user->lastname); ?>" disabled>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($user->phone); ?>">
                                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($user->email); ?>">
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="format-div">
                                    <div class="mb-4">
                                        <img class="img-profile" src="<?php echo e($user->avatar); ?>" width="60%" height="auto">
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="avatar" class="form-control-file" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-primary btn-right" type="submit">Update Info</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>

        <div class="card format shadow mb-4">
                <div class="card-header">
                    <h3>Change Password &nbsp; &nbsp;
                    <span class="m-0 font-weight-bold text-white text-right">
                        <small>
                            <?php if(session('password-updated')): ?>
                                <?php echo e(session('password-updated')); ?>

                            <?php endif; ?>
                        </small>
                    </span>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('team.updatePassword', $user->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <div class="row">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" >
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="password-confirm">Confirm Password</label>
                                    <input type="password" name="password_confirmation" id="password-confirm" class="form-control <?php $__errorArgs = ['password-confirm'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <?php $__errorArgs = ['password-confirm'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">Update Password</button>
                        </div>


                    </form>
                </div>
            </div>

        <div class="card format mb-4 visible-sm">
            <div class="modal-footer">
                <div class="row">
                    <div class="col-12">
                        <form action="/logout" method="post">
                            <?php echo csrf_field(); ?>
                            <button class="btn btn-primary-red">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>



    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('sidebar'); ?>

        <div class="card format shadow card-dark text-center mb-4">
            <div class="card-header">
                <h3>Rentals Checked In</h3>
            </div>
            <div class="card-body">
                <?php if($rentalCheckedIn): ?>
                    <h1 class="text-white"><?php echo e($rentalCheckedIn); ?></h1>
                <?php else: ?>
                    <h1 class="text-white">0</h1>
                <?php endif; ?>
            </div>
        </div>

        <div class="card format shadow card-dark text-center mb-4">
            <div class="card-header">
                <h3>Rentals Launched</h3>
            </div>
            <div class="card-body">
                <?php if($rentalLaunched): ?>
                    <h1 class="text-white"><?php echo e($rentalLaunched); ?></h1>
                <?php else: ?>
                    <h1 class="text-white">0</h1>
                <?php endif; ?>
            </div>
        </div>

        <div class="card format shadow card-dark text-center mb-4">
            <div class="card-header">
                <h3>Rentals Cleared</h3>
            </div>
            <div class="card-body">
                <?php if($rentalCleared): ?>
                    <h1 class="text-white"><?php echo e($rentalCleared); ?></h1>
                <?php else: ?>
                    <h1 class="text-white">0</h1>
                <?php endif; ?>
            </div>
        </div>

    <?php $__env->stopSection(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/team/profile.blade.php ENDPATH**/ ?>