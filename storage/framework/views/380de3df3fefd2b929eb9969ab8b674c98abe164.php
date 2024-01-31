<nav class="navbar navbar-expand-lg navbar-dark bg-gradient-secondary fixed-top team-header">
    <div class="container-fluid">
        <div class="team-header">
            <a class="navbar-brand" href="<?php echo e(route('home.index')); ?>">
                <img src="<?php echo $__env->yieldContent('logo-horizontal-2'); ?>" alt="RentalGuru Logo Light" />
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <?php if(!auth()->user()->userHasRole('Service') && !auth()->user()->userHasRole('Zapier')): ?>
                    <li class="nav-item smaller mt-1 <?php echo e(Request::is('/*') ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(route('team.index')); ?>">Dashboard</a>
                    </li>
                <?php endif; ?>
                <?php if(auth()->user()->userHasRole('Office')): ?>
                    <li class="nav-item smaller mt-1 <?php echo e(Request::is('team/office*') ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(route('office.index')); ?>">Office</a>
                    </li>
                <?php endif; ?>
                <?php if(auth()->user()->userHasRole('Operations')): ?>
                    <li class="nav-item dropdown no-arrow mt-1">
                        <a class="nav-link dropdown-toggle" href="#" id="operationsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Operations
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="operationsDropdown">

                                <a class="dropdown-item" href="<?php echo e(route('dock.departing')); ?>">
                                  Departing
                                </a>

                                <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="<?php echo e(route('dock.returning')); ?>">
                                Returning
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#office_precheck">
                                Office Pre-Check
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="<?php echo e(route('dock.hourCounts')); ?>">
                               Hour Counts
                            </a>


                        </div>
                    </li>

                <?php endif; ?>

                <?php if(!auth()->user()->userHasRole('Service')): ?>
                    <li class="nav-item smaller mt-1 <?php echo e(Request::is('team/runnerview/index*') ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(route('runnerview.index')); ?>">Master View</a>
                    </li>
                <?php endif; ?>
                <?php if(auth()->user()->userHasRole('Admin')): ?>
                    <li class="nav-item smaller mt-1">
                        <a class="nav-link" href="<?php echo e(route('admin.index')); ?>">Admin</a>
                    </li>
                <?php endif; ?>

                <div class="topbar-divider d-none d-sm-block"></div>

                <?php if(Auth::check()): ?>
                <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle nav-user-link pt-1" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 smaller">
                                <?php if(Auth::check()): ?>
                                    <?php echo e(auth()->user()->firstname); ?>

                                <?php endif; ?>
                            </span>
                            <img class="img-profile rounded-circle hidden-xs-inline" src="<?php echo e(auth()->user()->avatar); ?>" height="25px" width="25px" />
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <?php if(!auth()->user()->userHasRole('Service')): ?>
                                <a class="dropdown-item" href="<?php echo e(route('team.profile', auth()->user()->id)); ?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                            <?php endif; ?>
                            
                            
                            
                            
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                <?php else: ?>
                        <li class="nav-item dropdown no-arrow pt-05rem">
                            <a class="nav-link dropdown-toggle nav-user-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-none d-lg-inline text-gray-600 smaller">
                                Login
                            </span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-item">
                                    <form method="POST" action="<?php echo e(route('login')); ?>">
                                        <?php echo csrf_field(); ?>

                                        <div class="row mb-3">
                                            <label for="email" class="col-md-4 col-form-label text-md-end"><?php echo e(__('Email Address')); ?></label>

                                            <div class="col-md-6">
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
                                            <label for="password" class="col-md-4 col-form-label text-md-end"><?php echo e(__('Password')); ?></label>

                                            <div class="col-md-6">
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
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                                    <label class="form-check-label" for="remember">
                                                        <?php echo e(__('Remember Me')); ?>

                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-0">
                                            <div class="col-md-8">

                                                <?php if(Route::has('password.request')): ?>
                                                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                                        <?php echo e(__('Forgot Your Password?')); ?>

                                                    </a>
                                                <?php endif; ?>
                                                <button type="submit" class="btn btn-primary">
                                                    <?php echo e(__('Login')); ?>

                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH /var/www/skrentals.systems/sk-website/resources/views/components/team/header/team-header.blade.php ENDPATH**/ ?>