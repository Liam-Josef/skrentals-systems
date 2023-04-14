<x-office-master>
    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection


        @foreach($applications as $application)
        @section('page_title')
            <h1>Change of Condition</h1>
        @endsection

        @section('browser_title')
            <title>Change of Condition | {{$application->name}}</title>
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

    <!-- COC Table -->
    <div class="card my-3 shadow mb-4">
                <div class="row">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered li-link-table " id="cocRentalTable">
                                <thead>
                                    <tr>
                                        <th>
                                            <span class="visible-xs-table">&nbsp;</span>
                                            <div class="row hidden-xs-flex">
                                                <div class="col-sm-1">&nbsp;</div>
                                                <div class="col-sm-2">Vehicle</div>
                                                <div class="col-sm-2 col-md-1">Date</div>
                                                <div class="col-sm-3">Incident</div>
                                                <div class="col-sm-2 col-md-1">Customer</div>
                                                <div class="hidden-sm col-md-2 text-center">Phone</div>
                                                <div class="hidden-sm col-md-1">Cleared</div>
                                                <div class="col-sm-2 col-md-1 text-center">Status</div>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($rentals as $rental)
                                    <tr>
                                        <td>
                                            <a href="{{route('office.rentalProfile', $rental)}}" class="table-li-link">
                                                <div class="">
                                                    <div class="row">
                                                        <div class="col-sm-1">
                                                            <img class="img-responsive" src="{{asset('storage/' . $rental->image_1)}}" height="auto" width="100%" />
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <p class="sm-lg sm-red">
                                                                @if($rental->activity_item == 'Scarab 215')
                                                                    Scarab
                                                                @elseif($rental->activity_item == '23ft. Pontoon Boat')
                                                                    Pontoon
                                                                @elseif($rental->activity_item == '23ft. Pontoon Boat')
                                                                    Pontoon
                                                                @elseif($rental->activity_item == 'Renegade BC 600ETec')
                                                                    Renegade
                                                                @elseif($rental->activity_item == 'Summit 154 SP')
                                                                    Summit
                                                                @elseif($rental->activity_item == '14ft. Aluminum Boat')
                                                                    Aluminum
                                                                @elseif($rental->activity_item == 'Kayak Single')
                                                                    Single Kayak
                                                                @elseif($rental->activity_item == 'Double Kayak')
                                                                    Double Kayak
                                                                @elseif($rental->activity_item == 'Stand Up Paddleboard')
                                                                    SUP
                                                                @elseif($rental->activity_item == 'Segway i2')
                                                                    Segway
                                                                @elseif($rental->activity_item == 'Spyder RT-S SE6')
                                                                    Spyder
                                                                @elseif($rental->activity_item == 'SeaDoo')
                                                                    SeaDoo
                                                                @else
                                                                    <br />

                                                                @endif
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-2 col-md-1">
                                                            <p class="sm-md">
                                                                {{ \Carbon\Carbon::parse( $rental->activity_date )->format('m/d/y') }}
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <p>
                                                                {{$rental->incident}}
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-2 col-md-1">
                                                            <p class="sm-md">
                                                                {{$rental->last_name}}
                                                            </p>
                                                        </div>
                                                        <div class="hidden-sm col-md-2">
                                                            <a href="tel:{{$rental->phone}}" class="text-link-mobile">
                                                                {{$rental->phone = substr($rental->phone, 2)}}
                                                            </a>
                                                        </div>
                                                        <div class="hidden-sm col-md-1">
                                                            <p class="text-xs-center">
                                                                @foreach($users as $user)
                                                                    @if($rental->cleared_by == $user->id)
                                                                        {{$user->firstname}}
                                                                    @endif
                                                                @endforeach
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-2 col-md-1">
                                                            <p class="sm-md sm-red text-sm-center sm-mt" style="text-align:center">
                                                                {{$rental->coc_status}}
                                                            </p>
                                                        </div>
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
