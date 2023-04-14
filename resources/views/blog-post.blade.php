<x-team-master>

    <!-- Page Level Styles -->
    @section('styles')

    @endsection

    @foreach($applications as $application)
    @section('page_title')
        <title>Office</title>
    @endsection

    @section('app_name')
        {{$application->name}}
    @endsection

    @section('favicon')
        {{asset('storage/'. $application->favicon)}}
    @endsection

    @section('logo-square-1')
        {{asset('storage/'. $application->logo_square_1)}}
    @endsection

    @section('logo-square-2')
        {{asset('storage/'. $application->logo_square_2)}}
    @endsection

    @section('logo-horizontal-1')
        {{asset('storage/'. $application->logo_horizontal_1)}}
    @endsection

    @section('logo-horizontal-2')
        {{asset('storage/'. $application->logo_horizontal_1)}}
    @endsection

    @section('navbar-operations')
        @if($application->operations_name == '')
            Operations
        @else
            {{$application->operations_name}}
        @endif
    @endsection

    @endforeach


    @section('browser_title')
        <title>{{$post->title}} | SK Watercraft Rentals</title>
    @endsection


    @section('content')
        <div class="card shadow mt-4">
            <!-- Title -->
            <div class="card-header">
                <h3><span>Announcement: </span>{{$post->title}}</h3>
            </div>
           <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <!-- Author -->
                        <p class="lead">
                            by
                            <a href="#">{{$post->user->firstname}} {{$post->user->lastname}}</a>
                        </p>
                    </div>
                    <div class="col-6">
                        <!-- Date/Time -->
                        <p class="text-right">Posted on {{$post->created_at->diffForHumans()}}</p>
                    </div>
                </div>

               <hr>

               <!-- Post Content -->
               <p class="lead">{{$post->body}}</p>


               <hr>

               <!-- Preview Image -->
               <img class="img-fluid rounded" src="{{$post->post_image}}" alt="">


           </div>
        </div>


    @endsection

        @section('sidebar-post')




            <!-- Posts Widget -->
            @foreach($posts as $post)
                <div class="card my-4 shadow">
                    <h5 class="card-header">{{$post->title}}</h5>
                    <div class="card-body">
                        {{Str::limit($post->body, '100', '...')}}
                            <br />
                        <a href="{{route('post', $post->id)}}" class="btn btn-primary btn-100 mt-2">Read More</a>
                    </div>
                </div>
            @endforeach

        @endsection


    <!-- Page Level Scripts -->
    @section('scripts')

    @endsection

</x-team-master>
