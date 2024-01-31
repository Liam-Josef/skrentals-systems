<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(route('admin.index')); ?>">
            <img src="<?php echo $__env->yieldContent('logo-horizontal-1'); ?>" alt="SK Watercraft Rentals" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item smaller <?php echo e(Request::is('team/index*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('team.index')); ?>">Home</a>
                </li>
                <li class="nav-item smaller dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="rentalsDropdown" href="#">Rentals</a>
                    <!-- Dropdown - Rental Menu -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="rentalsDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            SeaDoo Rentals
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Boat Rentals
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                            Segway Rentals
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                            Spyder Rentals
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                            Snowmobile Rentals
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                            Kayak & Paddleboard Rentals
                        </a>
                    </div>
                </li>
                <li class="nav-item smaller <?php echo e(Request::is('/operation-info*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('home.about_us')); ?>">Operation Info</a>
                </li>
                <li class="nav-item smaller <?php echo e(Request::is('/customer-corner*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="#">Customer Corner</a>
                </li>
                <li class="nav-item smaller <?php echo e(Request::is('/contact-us*') ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(route('home.contact')); ?>">Contact Us</a>
                </li>


                    <li class="nav-item smaller dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="teamDropdown">Team</a>
                    <!-- Dropdown - Team Menu -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="teamDropdown">
                        <a class="dropdown-item" href="<?php echo e(route('team.index')); ?>">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Dashboard
                        </a>
                        <a class="dropdown-item" href="<?php echo e(route('office.index')); ?>">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Office
                        </a>
                        <a class="dropdown-item" href="<?php echo e(route('dock.index')); ?>">
                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                            Dock
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>





                <?php if(Auth::check()): ?>
                    <?php if(auth()->user()->userHasRole('Admin', 'Office Dock 1')): ?>
                    <li class="nav-item smaller">
                        <a class="nav-link" href="<?php echo e(route('admin.index')); ?>">Admin</a>
                    </li>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if(Auth::check()): ?> <!-- This one -->
                <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle nav-user-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none name-format text-gray-600 large">
                                <?php if(Auth::check()): ?>
                                    <?php echo e(auth()->user()->firstname); ?>

                                <?php endif; ?>
                            </span>
                            <img class="img-profile rounded-circle" src="<?php echo e(auth()->user()->avatar); ?>" height="25px" width="25px" />
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                <?php else: ?>
                    <li class="nav-item smaller">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/components/home/home-header.blade.php ENDPATH**/ ?>