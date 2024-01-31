<!--Create Post Modal -->
<div class="modal fade" id="createPost" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3><span>Create </span> <span class="text-white">an</span> Announcement</h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

                <form method="POST"
                      <?php if(auth()->user()->userHasRole('Admin')): ?>
                        action="<?php echo e(route('post.store')); ?>"
                      <?php elseif(auth()->user()->userHasRole('Supervisor')): ?>
                        action="<?php echo e(route('post.sup.store')); ?>"
                      <?php endif; ?>
                      enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control format" id="" aria-describedby="" placeholder="Enter Title" />
                            </div>
                            <div class="form-group">
                                <label for="file">Upload an Image</label>
                                <input type="file" class="form-control format" name="post_image" id="post_image" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <textarea name="body" id="body" cols="30" rows="10" class="form-control format"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <?php if(auth()->user()->userHasRole('Supervisor')): ?>
                            <input type="text" class="hidden" name="sup_approval" id="sup_approval" value="Pending">
                        <?php endif; ?>
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                        <button class="btn btn-primary" type="submit">Submit Announcement</button>
                    </div>

                </form>


            </div>

        </div>
    </div>
</div>
<!-- /Create Post Modal -->
<?php /**PATH C:\Users\liamj\dev-projects\sk-website\resources\views/components/admin/modals/create-post.blade.php ENDPATH**/ ?>