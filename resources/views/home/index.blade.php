<x-home-master>

    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection



    @foreach($applications as $application)
        @section('page_title')
            <h1>{{$application->name}}</h1>
        @endsection

        @section('browser_title')
            <title>Dashboard | {{$application->name}}
            </title>
        @endsection

        @section('navbar_rental_type')
            Our
            @if($application->rental_type != '')
                {{$application->rental_type}}
            @else
                Rentals
            @endif
        @endsection

        @section('favicon')
            {{asset('storage/'. $application->favicon)}}
        @endsection

        @section('app_name')
            {{$application->name}}
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

    @section('content')
        @yield('page_title')

        <div class="card mb-4 shadow">
            <div class="card-header">
                <h3>Announcement Title Teext</h3>
            </div>
            <img class="card-img-top" src="" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">Something Title</h2>
                <p class="card-text">ASHDOJASDO WDIAD AIDS OSJDO ASDO JSODJAS:DO JSO S</p>
            </div>
            <div class="card-footer text-muted">
                Posted on 1/1/111
                <a href="#">Link Text</a>
            </div>
        </div>


    @endsection

    @section('sidebar-post')
        <ul class="navbar-nav sidebar-post accordion my-4 shadow" id="accordionSidebar">

            <!-- Nav Item - Pages Collapse Menu -->
            @foreach($posts as $post)
                <li class="nav-item bg-gradient-secondary">
                    <a class="nav-link collapsed bg-gradient-secondary" href="#" data-toggle="collapse" data-target="#collapseAnnouncements{{$post->id}}" aria-expanded="true" aria-controls="collapseAnnouncements{{$post->id}}">
                        <span>{{$post->title}}</span>
                    </a>
                    <div id="collapseAnnouncements{{$post->id}}" class="collapse" aria-labelledby="headingAnnouncements" data-parent="#accordionSidebar">
                        <div class="bg-white pt-2 collapse-inner rounded">
                            <div class="collapse-body">
                                {{Str::limit($post->body, '200', '...')}}

                                <img class="card-img-top mt-2" src="{{$post->post_image}}" alt="{{$post->title}}">

                                <a href="{{route('post', $post->id)}}" class="btn btn-primary btn-100 mt-2">Read More</a>

                            </div>

                            <div class="collapse-footer mt-2">
                                <div class="row">
                                    <div class="col-xs-7 col-sm-7 col-md-7">
                                        <span>{{$post->created_at->diffForHumans()}}</span>
                                    </div>
                                    <div class="col-xs-5 col-xs-5 col-md-5">
                                        <span class="text-primary">{{$post->user->firstname}} {{$post->user->lastname}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach

        </ul>




        <!-- Search Widget -->
        <div class="card my-4 shadow">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
                </div>
            </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4 shadow">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#">Web Design</a>
                            </li>
                            <li>
                                <a href="#">HTML</a>
                            </li>
                            <li>
                                <a href="#">Freebies</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#">JavaScript</a>
                            </li>
                            <li>
                                <a href="#">CSS</a>
                            </li>
                            <li>
                                <a href="#">Tutorials</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4 shadow">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
                You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
        </div>

    @endsection

    @section('scripts')
    <!-- Page level plugins -->
        <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('js/demo/datatables-scripts.js')}}"></script>
    @endsection

</x-home-master>
