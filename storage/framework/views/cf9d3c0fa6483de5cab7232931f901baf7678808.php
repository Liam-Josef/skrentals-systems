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
        <link href="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
    <?php $__env->stopSection(); ?>


        <?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php $__env->startSection('page_title'); ?>
            <h1>Announcements</h1>
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('browser_title'); ?>
            <title>Announcemenets | <?php echo e($application->name); ?></title>
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('logo-square'); ?>
            <img src="<?php echo e(asset('storage/'. $application->logo_square_1)); ?>" alt="<?php echo e($application->name); ?> Logo" height="30px" width="auto">
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('logo-horizontal'); ?>
            <img src="<?php echo e(asset('storage/'. $application->logo_horizontal_1)); ?>" alt="<?php echo e($application->name); ?> Logo" height="30px" width="auto">
        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('logo_horizontal_1'); ?>
            <?php echo e(asset('storage/'. $application->logo_horizontal_1)); ?>

        <?php $__env->stopSection(); ?>
        <?php $__env->startSection('logo_horizontal_2'); ?>
            <?php echo e(asset('storage/'. $application->logo_horizontal_2)); ?>

        <?php $__env->stopSection(); ?>
        <?php $__env->startSection('logo_square_1'); ?>
            <?php echo e(asset('storage/'. $application->logo_square_1)); ?>

        <?php $__env->stopSection(); ?>
        <?php $__env->startSection('logo_square_2'); ?>
            <?php echo e(asset('storage/'. $application->logo_square_2)); ?>

        <?php $__env->stopSection(); ?>
        <?php $__env->startSection('favicon'); ?>
            <?php echo e(asset('storage/'. $application->favicon)); ?>

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
                        <?php if($application->analytic_link_1 != ''): ?>
                            <a class="collapse-item" href="<?php echo e($application->analytic_link_1); ?>" target="_blank">Analytics <span class="text-primary">Main</span></a>
                        <?php endif; ?>
                        <?php if($application->analytic_link_2 != ''): ?>
                            <a class="collapse-item" href="<?php echo e($application->analytic_link_2); ?>" target="_blank"><span class="text-primary">Reports</span> Snapshot</a>
                        <?php endif; ?>
                        <?php if($application->analytic_link_3 != ''): ?>
                            <a class="collapse-item" href="<?php echo e($application->analytic_link_3); ?>" target="_blank"><span class="text-primary">Acquisition</span> Overview</a>
                        <?php endif; ?>
                        <?php if($application->analytic_link_4 != ''): ?>
                            <a class="collapse-item" href="<?php echo e($application->analytic_link_4); ?>" target="_blank"><span class="text-primary">Engagement</span> Overview</a>
                        <?php endif; ?>
                        <?php if($application->analytic_link_5 != ''): ?>
                            <a class="collapse-item" href="<?php echo e($application->analytic_link_5); ?>" target="_blank"><span class="text-primary">Demographics</span> Overview</a>
                        <?php endif; ?>
                    </div>
                </div>
            </li>
        <?php $__env->stopSection(); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    <?php $__env->startSection('content'); ?>
        <div class="row">
            <div class="col-12">
                <h1>Announcements</h1>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">












            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="postTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>
                                    <span class="visible-xs-table">&nbsp;</span>
                                    <div class="row hidden-xs-flex">
                                        <div class="col-sm-3">Title</div>
                                        <div class="col-sm-1">Image</div>
                                        <div class="col-sm-3">Submitted By</div>
                                        <div class="col-sm-3">Created</div>
                                        <div class="col-sm-2">Update</div>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <a href="#" class="table-li-link" data-target="#viewPost<?php echo e($post->id); ?>" data-toggle="modal">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="sm-md">
                                                    <?php echo e($post->title); ?>

                                                </p>
                                            </div>
                                            <div class="col-sm-1">
                                                <img class="responsive" height="40px" src="<?php echo e($post->post_image); ?>" alt="<?php echo e($post->title); ?>" />
                                            </div>
                                            <div class="col-sm-3">
                                                <p>
                                                    <?php echo e($post->user->firstname); ?> <?php echo e($post->user->lastname); ?>

                                                </p>
                                            </div>
                                            <div class="col-sm-3">
                                                <p>
                                                    <?php echo e($post->created_at->diffForHumans()); ?>

                                                </p>
                                            </div>
                                            <div class="col-sm-2">
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view', $post)): ?>
                                                    <a href="#" class="btn btn-primary-red height-auto" data-target="#updatePost<?php echo e($post->id); ?>" data-toggle="modal">Update</a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </a>
                                </td>
                            </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- View Announcement Modal -->
                <div class="modal fade" id="viewPost<?php echo e($post->id); ?>" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 id="modal_rental_title" class="modal-title"><span class="white"><?php echo e($post->title); ?></span></h3>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">

                              <div class="row">
                                  <div class="col-sm-12">
                                      <img height="100" src="<?php echo e($post->post_image); ?>" alt="<?php echo e($post->title); ?>" class="img-responsive img-thumbnail">
                                  </div>
                              </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="text-center mt-3">
                                        <?php echo e($post->body); ?>

                                    </h4>
                                </div>
                            </div>


                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">CLOSE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /View Announcement Modal -->

                <!-- Update Announcement Modal -->
                <div class="modal fade" id="updatePost<?php echo e($post->id); ?>" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3><span>Update: </span><?php echo e($post->title); ?></h3>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form method="POST" action="<?php echo e(route('post.update', $post->id)); ?>" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PATCH'); ?>
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" class="form-control" id="" aria-describedby="" placeholder="Enter Title" value="<?php echo e($post->title); ?>" />
                                        </div>
                                    <br />

                                    <div class="form-group">
                                        <textarea name="body" id="body" cols="30" rows="10" class="form-control"><?php echo e($post->body); ?></textarea>
                                    </div>

                                    <div class="form-group mt-5">
                                        <div><img height="100" src="<?php echo e($post->post_image); ?>" alt="<?php echo e($post->title); ?>" class="img-responsive"></div>
                                        <label for="post_image">Upload an Image</label>
                                        <input type="file" class="form-control" name="post_image" id="post_image" />
                                    </div>


                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                                        <button class="btn btn-primary" type="submit">Submit Announcement</button>
                                    </div>

                                </form>



                            </div>

                        </div>
                    </div>
                </div>
                <!-- /Update Announcement Modal -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('scripts'); ?>
        <!-- Page level plugins -->
        <script src="<?php echo e(asset('vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
        <script src="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>

        <!-- Page level custom scripts -->
        <script src="<?php echo e(asset('js/demo/datatables-scripts.js')); ?>"></script>
    <?php $__env->stopSection(); ?>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/admin/posts/index.blade.php ENDPATH**/ ?>