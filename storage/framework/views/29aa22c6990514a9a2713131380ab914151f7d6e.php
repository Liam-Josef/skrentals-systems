<nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>













    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->



















        <!-- Nav Item - Employee Portal -->
        <li class="nav-item no-arrow mx-1">
            <a href="<?php echo e(route('team.index')); ?>" class="nav-link" id="" role="button">
                <i class="fas fa-anchor fa-fw"></i>&nbsp;Team Portal
            </a>
        </li>
        <!-- Nav Item - Alerts -->
















































        <!-- Nav Item - Messages -->























































        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle nav-user-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 large">
                    <?php if(Auth::check()): ?>
                        <?php echo e(auth()->user()->firstname); ?>

                    <?php endif; ?>
                </span>
                <img class="img-profile rounded-circle" src="<?php echo e(auth()->user()->avatar); ?>">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo e(route('user.profile.show', auth()->user())); ?>">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>








                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>
<?php /**PATH /var/www/rentalguru.systems/rg-website/resources/views/components/admin/header/admin-header.blade.php ENDPATH**/ ?>