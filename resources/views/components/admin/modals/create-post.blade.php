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
                      @if(auth()->user()->userHasRole('Admin'))
                        action="{{route('post.store')}}"
                      @elseif(auth()->user()->userHasRole('Supervisor'))
                        action="{{route('post.sup.store')}}"
                      @endif
                      enctype="multipart/form-data">
                    @csrf
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
                        @if(auth()->user()->userHasRole('Supervisor'))
                            <input type="text" class="hidden" name="sup_approval" id="sup_approval" value="Pending">
                        @endif
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                        <button class="btn btn-primary" type="submit">Submit Announcement</button>
                    </div>

                </form>


            </div>

        </div>
    </div>
</div>
<!-- /Create Post Modal -->
