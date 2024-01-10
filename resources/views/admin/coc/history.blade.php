<x-admin-master>

    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection


        @foreach($applications as $application)

        @section('page_title')
            <h1>COC History</h1>
        @endsection

        @section('browser_title')
            <title>COC History | {{$application->name}}</title>
        @endsection

        @section('logo-square')
            <img src="{{asset('storage/'. $application->logo_square_1)}}" alt="{{$application->name}} Logo" height="30px" width="auto">
        @endsection

        @section('logo-horizontal')
            <img src="{{asset('storage/'. $application->logo_horizontal_1)}}" alt="{{$application->name}} Logo" height="30px" width="auto">
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

        @section('analytic_links')
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/index*') ? 'collapsed' : '' }}" href="#" data-toggle="collapse" data-target="#collapseAnalytics" aria-expanded="" aria-controls="collapseAnalytics">
                    <i class="fas fa-fw fa-solid fa-code-branch"></i>
                    <span>Analytics</span>
                </a>
                <div id="collapseAnalytics" class="collapse" aria-labelledby="headingAnalytics" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <h6 class="collapse-header">Google Analytics: </h6>
                        @if($application->analytic_link_1 != '')
                            <a class="collapse-item" href="{{$application->analytic_link_1}}" target="_blank">Analytics <span class="text-primary">Main</span></a>
                        @endif
                        @if($application->analytic_link_2 != '')
                            <a class="collapse-item" href="{{$application->analytic_link_2}}" target="_blank"><span class="text-primary">Reports</span> Snapshot</a>
                        @endif
                        @if($application->analytic_link_3 != '')
                            <a class="collapse-item" href="{{$application->analytic_link_3}}" target="_blank"><span class="text-primary">Acquisition</span> Overview</a>
                        @endif
                        @if($application->analytic_link_4 != '')
                            <a class="collapse-item" href="{{$application->analytic_link_4}}" target="_blank"><span class="text-primary">Engagement</span> Overview</a>
                        @endif
                        @if($application->analytic_link_5 != '')
                            <a class="collapse-item" href="{{$application->analytic_link_5}}" target="_blank"><span class="text-primary">Demographics</span> Overview</a>
                        @endif
                    </div>
                </div>
            </li>
        @endsection

        @endforeach


    @section('content')
        <div class="row">
           <div class="col-12">
               <h1>COC History</h1>
           </div>
        </div>

        <!-- Rentals Table -->
        <div class="card my-3 shadow">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered li-link-table" id="maintRentalTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>
                                        <span class="visible-xs-table">&nbsp;</span>
                                        <div class="row hidden-xs-flex">
                                            <div class="col-sm-1">Image</div>
                                            <div class="col-sm-1">Vehicle</div>
                                            <div class="col-sm-1">Date</div>
                                            <div class="col-sm-2">Incident</div>
                                            <div class="col-sm-2">Last Name</div>
                                            <div class="col-sm-3">Email / Phone</div>
                                            <div class="col-sm-1">Status</div>
                                            <div class="col-sm-1"></div>
                                        </div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($rentalComplete as $rental)
                                    @if($rental->coc_status == 'Complete')
                                        <tr>
                                            <td>
                                                <a href="{{route('rental.show', $rental)}}" class="table-li-link">
                                                    <div class="row">
                                                        <div class="col-sm-1">
                                                            <img class="img-responsive" src="{{asset('storage/' . $rental->image_1)}}" height="auto" width="100%" />
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <p class="sm-lg">
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
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <p>
                                                                {{ \Carbon\Carbon::parse( $rental->activity_date )->format('m/d/y') }}
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <p>
                                                                {{$rental->incident}}
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <p class="sm-md">
                                                                {{$rental->last_name}}
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <p class="xs-center">
                                                                {{$rental->phone}} <br />
                                                                <a href="mailto:{{$rental->email}}" class="text-link">{{$rental->email}}</a>
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <p>
                                                                <span class="visible-xs">Status: &nbsp; </span><span class="sm-md">{{$rental->coc_status}}</span>
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <a href="{{route('rental.show', $rental)}}" class="btn btn-primary">
                                                                View
                                                            </a>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @foreach($rentals as $rental)
            @if($rental->status == 'Complete')
            @endif
        @endforeach

    @endsection

    @section('sidebar')

    @endsection


    @section('scripts')
    <!-- Page level plugins -->
        <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('js/demo/datatables-scripts.js')}}"></script>
    @endsection



</x-admin-master>
