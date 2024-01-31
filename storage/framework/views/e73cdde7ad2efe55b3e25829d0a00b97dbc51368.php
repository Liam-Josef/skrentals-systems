<!-- Heading -->
<div class="sidebar-heading hidden-xs">
    Employees
</div>


<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item <?php echo e(Request::is('admin/posts*') ? 'active' : ''); ?>">
    <a class="nav-link <?php echo e(Request::is(['admin/index*', 'admin/roles*', 'admin/rentals*', 'admin/users*', 'admin/maintenance*', 'admin/coc*', 'admin/customers*', 'admin/training*', 'admin/dev*']) ? 'collapsed' : ''); ?> " href="#" data-toggle="collapse" data-target="#collapseAnnouncements" aria-expanded="true" aria-controls="collapseAnnouncements">
        <i class="fa-solid fa-bullhorn"></i>
        <span class="hidden-xs-contents">Announcements</span>
        <span class="visible-xs">Announce</span>
    </a>
    <div id="collapseAnnouncements" class="collapse <?php echo e(Request::is('admin/posts*') ? 'show' : ''); ?>" aria-labelledby="headingAnnouncements" data-parent="#accordionSidebar">
        <div class="py-2 collapse-inner rounded">
            <h6 class="collapse-header">Announcements Menu:</h6>
            <a class="collapse-item <?php echo e(Request::is('admin/posts/index*') ? 'active' : ''); ?>" href="<?php echo e(route('post.index')); ?>">View Announcements</a>
            <a class="collapse-item" href="#" data-toggle="modal" data-target="#createPost">Create Announcement</a>
        </div>
    </div>
</li>

<?php if(auth()->user()->userHasRole('Admin')): ?>
    <!-- Nav Item - Tables -->
    <li class="nav-item <?php echo e(Request::is('admin/users*') ? 'active' : ''); ?>">
        <a class="nav-link <?php echo e(Request::is(['admin/index*', 'admin/roles*', 'admin/rentals*', 'admin/posts*', 'admin/maintenance*', 'admin/coc*', 'admin/customers*', 'admin/training*', 'admin/vehicles*', 'admin/dev*']) ? 'collapsed' : ''); ?>" href="#" data-toggle="collapse" data-target="#collapseEmployees" aria-expanded="true" aria-controls="collapseEmployees">
            
            <i class="fa-solid fa-people-group"></i>
            <span class="hidden-xs-contents">Employee's</span>
            <span class="visible-xs">Employee</span>
        </a>
        <div id="collapseEmployees" class="collapse <?php echo e(Request::is('admin/users*') ? 'show' : ''); ?>" aria-labelledby="headingEmployees" data-parent="#accordionSidebar">
            <div class=" py-2 collapse-inner rounded">
                <h6 class="collapse-header">Employee Menu:</h6>
                <a class="collapse-item <?php echo e(Request::is('admin/users/index*') ? 'active' : ''); ?>" href="<?php echo e(route('users.index')); ?>">View Employees</a>
                <a class="collapse-item" href="#" data-toggle="modal" data-target="#addEmployee">Add Employee</a>
                <a class="inactive collapse-item <?php echo e(Request::is('admin/users/damage-reports*') ? 'active' : ''); ?>" href="<?php echo e(route('users.damage-reports')); ?>">Damage Reports</a>
            </div>
        </div>
    </li>
<?php endif; ?>



<?php if(auth()->user()->userHasRole('Admin')): ?>
    <!-- Nav Item - Tables -->
    <li class="nav-item <?php echo e(Request::is('admin/training*') ? 'active' : ''); ?>">
        <a class="nav-link <?php echo e(Request::is(['admin/index*', 'admin/roles*', 'admin/rentals*', 'admin/posts*', 'admin/maintenance*', 'admin/coc*', 'admin/customers*', 'admin/users*', 'admin/vehicles*', 'admin/dev*']) ? 'collapsed' : ''); ?>" href="#" data-toggle="collapse" data-target="#collapseTraining" aria-expanded="true" aria-controls="collapseTraining">
            
            <i class="fa-solid fa-circle-radiation"></i>
            <span>Training</span>
        </a>
        <div id="collapseTraining" class="collapse <?php echo e(Request::is('admin/training*') ? 'show' : ''); ?>" aria-labelledby="headingVehicles" data-parent="#accordionSidebar">
            <div class="py-2 collapse-inner rounded">
                <h6 class="collapse-header">Training Menu:</h6>
                <a class="inactive collapse-item <?php echo e(Request::is('admin/training/index*') ? 'active' : ''); ?>" href="<?php echo e(route('training.index')); ?>">Training Stats</a>
            </div>
        </div>
    </li>
<?php endif; ?>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/components/admin/sidebar/employees.blade.php ENDPATH**/ ?>