<x-office-master>
    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection


        @foreach($applications as $application)
            @section('page_title')
                <h1>Customers</h1>
            @endsection

            @section('browser_title')
                <title>Customers | {{$application->name}}</title>
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


    @section('content')

        <!-- Customers Table -->
        <div class="card my-3 shadow mb-4 mobile-transparent">
                <div class="row">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered li-link-table " id="maintRentalTable">
                                <thead>
                                <tr>
                                    <th>
                                        <span class="visible-xs-table">&nbsp;</span>
                                        <div class="row hidden-xs-flex">
                                            <div class="col-sm-2">First Name</div>
                                            <div class="col-sm-3">Last Name</div>
                                            <div class="col-sm-4 text-center">Email</div>
                                            <div class="col-sm-3 text-center">Phone</div>
{{--                                            <div class="col-sm-1"># of Rentals</div>--}}
                                        </div>
                                    </th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($customers as $customer)
                                    <tr>
                                        <td>
                                            <a href="{{route('office.customerProfile', $customer->id)}}" class="table-li-link">
                                                <div class="dk-back">
                                                    <div class="row">
                                                    <div class="col-6 col-sm-2">
                                                        <h5 class="sm-md">
                                                            {{$customer->first_name}}
                                                        </h5>
                                                    </div>
                                                    <div class="col-6 col-sm-3">
                                                       <h5 class="sm-md">
                                                           {{$customer->last_name}}
                                                       </h5>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <a href="mailto:{{$customer->email}}" class="btn-tel gray" style="height:auto !important;">{{$customer->email}}</a>

                                                    </div>
                                                        <span class="visible-xs"></span>
                                                    <div class="col-sm-3">
                                                        <a href="tel:{{$customer->phone}}" class="btn-tel" style="height:auto !important;">{{$customer->phone}}</a>
                                                    </div>
{{--                                                    <div class="col-sm-1">--}}
{{--                                                        <p class="sm-lg">--}}
{{--                                                            <span class="visible-xs lighter sm-dark">--}}
{{--                                                                # of Rentals--}}
{{--                                                            </span>--}}
{{--                                                            3*--}}
{{--                                                        </p>--}}
{{--                                                    </div>--}}
                                                </div>
                                                </div>
                                            </a>
                                        </td>

                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


    @endsection

    @section('sidebar')
        <!-- Recent Announcement Widget -->
            @foreach($posts as $post)
                <div class="card my-4 shadow">
                    <h5 class="card-header text-center">{{$post->title}}</h5>
                    <div class="card-body">
                        {{Str::limit($post->body, '200', '...')}}
                    </div>
                    <a href="{{route('post', $post->id)}}" class="btn btn-primary-red">Read More</a>
                </div>
            @endforeach
    @endsection


    @section('scripts')
        <!-- Page level plugins -->
            <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

            <!-- Page level custom scripts -->
            <script src="{{asset('js/demo/datatables-scripts.js')}}"></script>
    @endsection


</x-office-master>
