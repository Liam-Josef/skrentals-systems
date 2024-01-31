<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <?php if(Auth::check()): ?>
            <div class="sidebar-header">
                <!-- Sidebar - Brand -->
                    <a class="sidebar-brand d-flex align-items-center justify-content-center mt-5 mb-3" href="<?php echo e(route('home.index')); ?>">
                        <div class="sidebar-brand-icon">
                            <img src=" <?php echo e(asset('storage/app-images/M7AS6bo6gOSp4T9dpivOcFp8rk28m0K5vQs5jKpb.png')); ?>" alt="SK Watercraft Admin Logo" class="img-responsive" />
                        </div>
                    </a>
            </div>

            <div class="row">
                <div class="col-12">
                    <ul class="list-unstyled components">
                        <?php if(auth()->user()->userHasRole('Admin')): ?>
                            <li class="nav-item smaller mt-1">
                                <a class="nav-link" href="<?php echo e(route('admin.index')); ?>">Admin Dashboard</a>
                            </li>
                        <?php endif; ?>
                        <?php if(!auth()->user()->userHasRole('Service') && !auth()->user()->userHasRole('Zapier')): ?>
                            <li class="">
                                <a class="" href="<?php echo e(route('team.index')); ?>">Team Dashboard</a>
                            </li>
                        <?php endif; ?>
                        <?php if(auth()->user()->userHasRole('Office')): ?>
                            <li class="<?php echo e(Request::is('team/office*') ? 'active' : ''); ?>">
                                <a href="#officeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                    Office
                                </a>
                                <!-- Dropdown - User Information -->
                                <ul class="collapse list-unstyled right <?php echo e(Request::is('team/office*') ? 'show' : ''); ?>" id="officeSubmenu">
                                    <li>
                                        <a class="<?php echo e(Request::is('team/office/index*') ? 'active' : ''); ?>" href="<?php echo e(route('office.index')); ?>">
                                            Schedule
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="<?php echo e(route('office.precheckin')); ?>">
                                            Pre-Check In
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="<?php echo e(route('office.rentalHistory')); ?>">
                                            Rental History
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="<?php echo e(route('office.customers')); ?>">
                                            Customers
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="<?php echo e(route('office.coc')); ?>">
                                            Change of Condition
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                        <?php if(auth()->user()->userHasRole('Dock')): ?>
                            <li class=" <?php echo e(Request::is('team/dock*') ? 'active' : ''); ?>">
                                <a  href="#dockSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                    Dock
                                </a>
                                <!-- Dropdown - User Information -->
                                <ul class="collapse list-unstyled right <?php echo e(Request::is('team/dock*') ? 'show' : ''); ?>" id="dockSubmenu">
                                    <li>
                                        <a class="" href="<?php echo e(route('dock.departing')); ?>">
                                            Departing
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="<?php echo e(route('dock.returning')); ?>">
                                            Returning
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="#" data-toggle="modal" data-target="#office_precheck">
                                            Office Pre-Check
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?php echo e(route('dock.hourCounts')); ?>">
                                            Hour Counts
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                        <?php if(!auth()->user()->userHasRole('Service')): ?>
                            <li class="nav-item smaller mt-1 <?php echo e(Request::is('team/runnerview/index*') ? 'active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(route('runnerview.index')); ?>">Master View</a>
                            </li>
                        <?php endif; ?>
                        <li>
                            <!-- Nav Item - User Information -->
                            <div class="row mt-5">
                                <div class="col-12">
                                    <a href="#userSubmenu" data-toggle="collapse" aria-expanded="false" class="text-center width-100">
                                        <h4 class="text-center width-100">
                                            <i class="fa fa-user"></i>
                                            <br>
                                            <?php if(Auth::check()): ?>
                                                <?php echo e(auth()->user()->firstname); ?>

                                            <?php endif; ?>
                                        </h4>
                                    </a>
                                </div>
                            </div>
                            <ul class="collapse list-unstyled right" id="userSubmenu">
                                <li>
                                    <?php if(!auth()->user()->userHasRole('Service')): ?>
                                        <a class="text-center" href="<?php echo e(route('team.profile', auth()->user()->id)); ?>">
                                            Profile
                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        </a>
                                    <?php endif; ?>
                                </li>
                                <li>
                                    <a class="text-center" href="#" data-toggle="modal" data-target="#logoutModal">
                                        Logout
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>




                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </ul>

                    <?php else: ?>
                        <form method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="row mb-3">
                                <label for="email" class="col-form-label text-md-end"><?php echo e(__('Email Address')); ?></label>

                                <div class="col-12">
                                    <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-form-label text-md-end"><?php echo e(__('Password')); ?></label>

                                <div class="col-12">
                                    <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">

                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="row mb-3" style="display: none !important;">
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                        <label class="form-check-label" for="remember">
                                            <?php echo e(__('Remember Me')); ?>

                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-12">

                                    <button type="submit" class="btn btn-primary width-100">
                                        <?php echo e(__('Login')); ?>

                                    </button>
                                    <?php if(Route::has('password.request')): ?>
                                        
                                        <a class="btn btn-link text-right width-100 text-gray-300" href="mailto:liam.skrentals@gmail.com">
                                            <?php echo e(__('Forgot Your Password?')); ?>

                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        <?php endif; ?>
    </nav>

</div>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/components/team/team-sidebar-mobile.blade.php ENDPATH**/ ?>