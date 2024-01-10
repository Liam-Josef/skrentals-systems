<x-admin-master>

    @section('browser_title')
        <title>Add Announcement | SK Watercraft Rentals</title>
    @endsection

    @section('logo_horizontal_1')
        {{asset('storage/'. $application->logo_horizontal_1)}}
    @endsection
    @section('logo_horizontal_2')
        {{asset('storage/'. $application->logo_horizontal_2)}}
    @endsection
    @section('logo_square_1')
        {{asset('storage/'. $application->logo_square_1)}}
    @endsection
    @section('logo_square_2')
        {{asset('storage/'. $application->logo_square_2)}}
    @endsection
    @section('favicon')
        {{asset('storage/'. $application->favicon)}}
    @endsection


    @section('content')
        <div class="row">
            <div class="col-12">
                <h1>Make an Announcement</h1>
            </div>
        </div>

        <form method="POST" action="{{route('post.store')}}" enctype="multipart/form-data">
            @csrf
            <div class=""form-group">
                <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="" aria-describedby="" placeholder="Enter Title" />
            </div>
            <div class="form-group">
                <label for="file">Upload an Image</label>
                <input type="file" class="form-control-file" name="post_image" id="post_image" />
            </div>
            <div class="form-group">
                <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Submit Announcement</button>
        </form>
    @endsection
</x-admin-master>
