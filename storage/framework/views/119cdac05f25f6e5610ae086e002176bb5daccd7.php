<footer class="py-5 bg-dark">
    <div class="container">
        <img src="<?php echo $__env->yieldContent('logo-square-2'); ?>" alt="" class="img-responsive img-square" />
        <p class="m-0 text-center text-white"><span><?php echo $__env->yieldContent('app_name'); ?></span> | Copyright &copy; <?php echo e(Carbon\Carbon::now()->format('Y')); ?></p>
    </div>
</footer>



<div class="mobile-nav visible-sm">
    <div class="container">
        <div class="row text-center">
            <div class="col-2 pl-0 pr-0 b-l b-r">
               <a href="<?php echo e(route('team.index')); ?>" class="fa-button <?php echo e(Request::is('/*') ? 'active' : ''); ?>">
                   <i class="fa fa-tachometer-alt fa-1x"></i>
                   <span>Dash</span>
               </a>
            </div>
            <?php if(auth()->user()->userHasRole('Office')): ?>
                <div class="col-2 pl-0 pr-0 b-r">
                    <a href="<?php echo e(route('office.index')); ?>" class="fa-button <?php echo e(Request::is('team/office/index*') ? 'active' : ''); ?>">
                        <i class="fa fa-paperclip fa-1x"></i>
                        <span>Office</span>
                    </a>
                </div>
            <?php endif; ?>
            <?php if(auth()->user()->userHasRole('Dock')): ?>
                <div class="col-2 pl-0 pr-0 b-r">
                    <a href="<?php echo e(route('dock.departing')); ?>" class="fa-button <?php echo e(Request::is('team/dock/*') ? 'active' : ''); ?>">
                        <i class="fa fa-anchor fa-1x"></i>
                        <span>Dock</span>
                    </a>
                </div>
            <?php endif; ?>
            <div class="col-2 pl-0 pr-0 b-r">
                <a href="<?php echo e(route('runnerview.index')); ?>" class="fa-button <?php echo e(Request::is('team/runnerview/index*') ? 'active' : ''); ?>">
                    <i class="fa fa-clipboard fa-1x"></i>
                    <span>Run</span>
                </a>
            </div>
            <?php if(auth()->user()->userHasRole('Admin')): ?>
                <div class="col-2 pl-0 pr-0 b-r">
                    <a href="<?php echo e(route('admin.index')); ?>" class="fa-button <?php echo e(Request::is('admin/index*') ? 'active' : ''); ?>">
                        <i class="fa fa-user-secret fa-1x"></i>
                        <span>Admin</span>
                    </a>
                </div>
            <?php endif; ?>
            <div class="col-2 pl-0 pr-0 b-r">
                <a href="<?php echo e(route('team.profile', auth()->user()->id)); ?>" class="fa-button <?php echo e(Request::is('team/'. auth()->user()->id . '/profile') ? 'active' : ''); ?>">
                    <i class="fa fa-user fa-1x"></i>
                    <span>User</span>
                </a>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/skrentals.systems/sk-website/resources/views/components/footer.blade.php ENDPATH**/ ?>