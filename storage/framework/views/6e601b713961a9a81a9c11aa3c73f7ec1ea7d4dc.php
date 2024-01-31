<!-- Heading -->
<div class="sidebar-heading hidden-xs">
    Fleet
</div>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item <?php echo e(Request::is('admin/maintenance*') ? 'active' : ''); ?>">
    <a class="nav-link <?php echo e(Request::is('admin/index*', ['admin/roles*', 'admin/rentals*', 'admin/users*', 'admin/posts*', 'admin/coc*', 'admin/customers*', 'admin/training*', 'admin/vehicles*']) ? 'collapsed' : ''); ?>" href="#" data-toggle="collapse" data-target="#collapseMaintenance" aria-expanded="true" aria-controls="collapseMaintenance">
        <i class="fas fa-fw fa-wrench"></i>
        <span class="hidden-xs-contents">Maintenance</span>
        <span class="visible-xs">Maint</span>
    </a>
    <div id="collapseMaintenance" class="collapse <?php echo e(Request::is('admin/maintenance*') ? 'show' : ''); ?>" aria-labelledby="headingMaintenance" data-parent="#accordionSidebar">
        <div class="py-2 collapse-inner rounded">
            <h6 class="collapse-header">Maintenance Log Menu:</h6>
            <a class="collapse-item <?php echo e(Request::is('admin/maintenance/index*') ? 'active' : ''); ?>" href="<?php echo e(route('maintenance.index')); ?>">Maintenance</a>
            <a class="collapse-item <?php echo e(Request::is('admin/maintenance/chart*') ? 'active' : ''); ?>" href="<?php echo e(route('maintenance.chart')); ?>">Maintenance Chart</a>
            <a class="collapse-item <?php echo e(Request::is('admin/maintenance/service*') ? 'active' : ''); ?>" href="<?php echo e(route('maintenance.service')); ?>">Service</a>
            <a class="inactive collapse-item <?php echo e(Request::is('admin/maintenance/hour-counts*') ? 'active' : ''); ?>" href="<?php echo e(route('maintenance.hours')); ?>">Hour Counts</a>
        </div>
    </div>
</li>

<?php if(auth()->user()->userHasRole('Admin')): ?>
    <!-- Nav Item - Tables -->
    <li class="nav-item <?php echo e(Request::is('admin/vehicles*') ? 'active' : ''); ?>">
        <a class="nav-link <?php echo e(Request::is('admin/index*', ['admin/roles*', 'admin/rentals*', 'admin/posts*', 'admin/maintenance*', 'admin/coc*', 'admin/customers*', 'admin/users*', 'admin/training*']) ? 'collapsed' : ''); ?>" href="#" data-toggle="collapse" data-target="#collapseVehicles" aria-expanded="true" aria-controls="collapseVehicles">
            
            <i class="fa-solid fa-ferry"></i>
            <span>Vehicles</span>
        </a>
        <div id="collapseVehicles" class="collapse <?php echo e(Request::is('admin/vehicles*') ? 'show' : ''); ?>" aria-labelledby="headingVehicles" data-parent="#accordionSidebar">
            <div class="py-2 collapse-inner rounded">
                <h6 class="collapse-header">Vehicle Menu"</h6>
                <a class="collapse-item <?php echo e(Request::is('admin/vehicles/index*') ? 'active' : ''); ?>" href="<?php echo e(route('vehicle.index')); ?>">Vehicles</a>
                <a class="collapse-item" href="#" data-toggle="modal" data-target="#addVehicle">Add Vehicle</a>
            </div>
        </div>
    </li>
<?php endif; ?>
<?php /**PATH /var/www/skrentals.systems/sk-website/resources/views/components/admin/sidebar/vehicles.blade.php ENDPATH**/ ?>