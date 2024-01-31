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
            <h1>App Info</h1>
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('browser_title'); ?>
            <title>App | <?php echo e($website->name); ?></title>
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

            <h1><span class="text-primary">App</span> Info</h1>


            <?php $__currentLoopData = $websites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $website): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form action="<?php echo e(route('admin.dev.siteInfo.update', $website->id)); ?>" method="post" enctype="multipart/form-data">
                    <div class="card shadow mb-3">
                        <div class="card-header">
                            <h3 class="mb-0">Contact Info</h3>
                        </div>
                        <div class="card-body">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PATCH'); ?>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">App Name</label>
                                        <input type="text" class="form-control" name="name" id="name" value="<?php echo e($website->name); ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6 hidden-xs">
                                    &nbsp;
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" value="<?php echo e($website->email); ?>">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" name="phone" id="phone" value="<?php echo e($website->phone); ?>">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="country">Country</label>
                                        <input type="text" class="form-control" name="country" id="country" value="<?php echo e($website->country); ?>">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="address_line_1">Address 1</label>
                                        <input type="text" class="form-control" name="address_line_1" id="address_line_1" value="<?php echo e($website->address_line_1); ?>">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="address_line_2">Address 2</label>
                                        <input type="text" class="form-control" name="address_line_2" id="address_line_2" value="<?php echo e($website->address_line_2); ?>">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" name="city" id="city" value="<?php echo e($website->city); ?>">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-2">
                                    <div class="form-group">
                                        <label for="state">State</label>
                                        <input type="text" class="form-control" name="state" id="state" value="<?php echo e($website->state); ?>">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-2">
                                    <div class="form-group">
                                        <label for="zip">Zip</label>
                                        <input type="text" class="form-control" name="zip" id="zip" value="<?php echo e($website->zip); ?>">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card shadow mb-3">
                        <div class="card-header">
                            <h3 class="mb-0">Social Links</h3>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="facebook">Facebook</label>
                                        <input type="text" class="form-control" name="facebook" id="facebook" value="<?php echo e($website->facebook); ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="instagram">Instagram</label>
                                        <input type="text" class="form-control" name="instagram" id="instagram" value="<?php echo e($website->instagram); ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="tiktok">TikTok</label>
                                        <input type="text" class="form-control" name="tiktok" id="tiktok" value="<?php echo e($website->tiktok); ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="linkedin">LinkedIn</label>
                                        <input type="text" class="form-control" name="linkedin" id="linkedin" value="<?php echo e($website->linkedin); ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="twitter">Twitter</label>
                                        <input type="text" class="form-control" name="twitter" id="twitter" value="<?php echo e($website->twitter); ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="google">Google Plus</label>
                                        <input type="text" class="form-control" name="google" id="google" value="<?php echo e($website->google); ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="youtube">Youtube</label>
                                        <input type="text" class="form-control" name="youtube" id="youtube" value="<?php echo e($website->youtube); ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="vimeo">Vimeo</label>
                                        <input type="text" class="form-control" name="vimeo" id="vimeo" value="<?php echo e($website->vimeo); ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="etsy">Etsy</label>
                                        <input type="text" class="form-control" name="etsy" id="etsy" value="<?php echo e($website->etsy); ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="website_url">Website URL</label>
                                        <input type="text" class="form-control" name="website_url" id="website_url" value="<?php echo e($website->website_url); ?>">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card shadow mb-3">
                        <div class="card-header">
                            <h3 class="mb-0">Images</h3>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-sm-6 col-lg-3">
                                    <div class="form-group">
                                        <label for="logo_square_1">Square Logo 1</label>
                                        <input type="file" class="form-control-file" name="logo_square_1" id="logo_square_1">
                                        <img src="<?php echo e(asset('storage/'. $website->logo_square_1)); ?>" alt="<?php echo e($website->name); ?>" height="auto" class="img-responsive mt-3">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="form-group">
                                        <label for="logo_square_2">Square Logo 2</label>
                                        <input type="file" class="form-control-file" name="logo_square_2" id="logo_square_2">
                                        <img src="<?php echo e(asset('storage/'. $website->logo_square_2)); ?>" alt="<?php echo e($website->name); ?>" height="auto" class="img-responsive mt-3">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="form-group">
                                        <label for="logo_horizontal_1">Square Horizontal 1</label>
                                        <input type="file" class="form-control-file" name="logo_horizontal_1" id="logo_horizontal_1">
                                        <img src="<?php echo e(asset('storage/'. $website->logo_horizontal_1)); ?>" alt="<?php echo e($website->name); ?>" height="auto" class="img-responsive mt-3">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="form-group">
                                        <label for="logo_horizontal_2">Square Horizontal 2</label>
                                        <input type="file" class="form-control-file" name="logo_horizontal_2" id="logo_horizontal_2">
                                        <img src="<?php echo e(asset('storage/'. $website->logo_horizontal_2)); ?>" alt="<?php echo e($website->name); ?>" height="auto" class="img-responsive mt-3">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="form-group">
                                        <label for="favicon">Favicon</label>
                                        <input type="file" class="form-control-file" name="favicon" id="favicon">
                                        <img src="<?php echo e(asset('storage/'. $website->favicon)); ?>" alt="<?php echo e($website->name); ?>" height="auto" class="img-responsive mt-3">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card shadow mb-3">
                        <div class="card-header">
                            <h3 class="mb-0">Analytics</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="analytics" class="hidden">Analytics</label>
                                        <textarea name="analytics" id="analytics" cols="30" rows="3" class="form-control"><?php echo e($website->analytics); ?></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="google_link_1" class="">Analytics</label>
                                        <textarea name="google_link_1" id="google_link_1" cols="30" rows="3" class="form-control"><?php echo e($website->google_link_1); ?></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="google_link_2" class="">Analytics</label>
                                        <textarea name="google_link_2" id="google_link_2" cols="30" rows="3" class="form-control"><?php echo e($website->google_link_2); ?></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="google_link_3" class="">Analytics</label>
                                        <textarea name="google_link_3" id="google_link_3" cols="30" rows="3" class="form-control"><?php echo e($website->google_link_3); ?></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="google_link_4" class="">Analytics</label>
                                        <textarea name="google_link_4" id="google_link_4" cols="30" rows="3" class="form-control"><?php echo e($website->google_link_4); ?></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="google_link_5" class="">Analytics</label>
                                        <textarea name="google_link_5" id="google_link_5" cols="30" rows="3" class="form-control"><?php echo e($website->google_link_5); ?></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card shadow mb-5">
                        <div class="card-footer">
                            <button class="btn btn-primary btn-right" type="submit">Update</button>
                        </div>
                    </div>


                </form>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        <?php $__env->stopSection(); ?>


    <?php $__env->startSection('scripts'); ?>

    <?php $__env->stopSection(); ?>



 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/admin/dev/site-info.blade.php ENDPATH**/ ?>