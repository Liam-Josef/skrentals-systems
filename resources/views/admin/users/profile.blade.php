<x-admin-master>

    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection

        @foreach($applications as $application)

            @section('page_title')
                <h1>Employee Profile - {{$user->firstname}} {{$user->lastname}}</h1>
            @endsection

            @section('browser_title')
                <title>Employee Profile - {{$user->firstname}} {{$user->lastname}} | {{$application->name}}</title>
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
                <h1>
                    Employee Profile &nbsp;
                    <span>
                        <small>{{$user->firstname}} {{$user->lastname}}</small>
                        <small class="text-gray-700">
                            (
                             @foreach($roles as $role)
                                @if($user->roles->contains($role))
                                    @if($role->name == 'Office' && $role->name != 'Dock')
                                        {{$role->name}}&nbsp;
                                        @elseif($role->name == 'Dock' && $role->name != 'Office')
                                        {{$role->name}}&nbsp;
                                    @elseif($role->name == 'Admin')
                                        {{$role->name}}&nbsp;
                                    @endif
                                @endif
                            @endforeach
                            )
                        </small>
                    </span>
                </h1>
            </div>
        </div>

        <div class="row">
            <!-- Main Content -->
            <div class="col-sm-9">

                <div class="card format shadow mt-4 mb-4">
                    <div class="card-header">
                        <h3>Employee Information</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-4">
                                        <h4 class="lighter-title">Phone</h4>
                                    </div>
                                    <div class="col-8">
                                        <a href="tel:{{$user->phone}}" class="visible-xs">
                                            <h4 class="lighter">
                                                {{$user->phone}}
                                            </h4>
                                        </a>
                                        <h4 class="lighter hidden-xs">
                                            {{$user->phone}}
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-3">
                                        <h4 class="lighter-title">Email</h4>
                                    </div>
                                    <div class="col-8 p-0">
                                        <a href="mailto:{{$user->email}}">
                                            <h4 class="lighter">
                                                {{$user->email}}
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                @if($rentalCoc or $rentalCocCleared)
                    <div class="card format shadow mb-4">
                        <div class="card-header">
                            <h3>Change of Conditions</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="cocRentalTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Activity Item</th>
                                        <th>Activity Date</th>
                                        <th>COC Incident</th>
                                        <th>{{$user->firstname}}'s Interaction</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($rentals as $rental)
                                        @if($rental->status == 'COC' && $rental->launched_by == $user->id)
                                            <tr>
                                                <td class="no-border-right"><img src="{{asset('storage/' . $rental->image_1)}}" class="img-table"></td>
                                                <td class="no-border-right">
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
                                                </td>
                                                <td class="no-border-right">{{ \Carbon\Carbon::parse( $rental->activity_date )->format('M d' . ', '. 'Y') }}</td>
                                                <td class="no-border-right">{{$rental->incident}}</td>
                                                <td class="no-border-right">
                                                    @if($rental->launched_by == $user->id)
                                                        Launched
                                                        @else
                                                            Checked In
                                                    @endif
                                                </td>
                                                <td class="no-border-right">{{$rental->coc_status}}</td>
                                                <td class="">
                                                    <a href="{{route('rental.show', $rental)}}" class="btn btn-primary">View</a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach

                                    @foreach($rentals as $rental)
                                        @if($rental->status == 'COC' && $rental->cleared_by == $user->id)
                                            <tr>
                                                <td class="no-border-right"><img src="{{asset('storage/' . $rental->image_1)}}" class="img-table"></td>
                                                <td class="no-border-right">
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
                                                </td>
                                                <td class="no-border-right">{{ \Carbon\Carbon::parse( $rental->activity_date )->format('M d' . ', '. 'Y') }}</td>
                                                <td class="no-border-right">{{$rental->incident}}</td>
                                                <td class="no-border-right">
                                                    @if($rental->cleared_by == $user->id)
                                                        Cleared
                                                    @else
                                                        Checked_In
                                                    @endif
                                                </td>
                                                <td class="no-border-right">{{$rental->coc_status}}</td>
                                                <td class="">
                                                    <a href="{{route('rental.show', $rental)}}" class="btn btn-primary">View</a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <!-- /Main Content -->

            <!-- Sidebar -->
            <div class="col-sm-3">

                <div class="card format shadow card-dark text-center mb-4">
                    <div class="card-header">
                        <h4>Rentals Checked In</h4>
                    </div>
                    <div class="card-body">
                        @if($rentalCheckedIn)
                             <h1 class="text-white">{{$rentalCheckedIn}}</h1>
                        @else
                             <h1 class="text-white">0</h1>
                        @endif
                    </div>
                </div>

                <div class="card format shadow card-dark text-center mb-4">
                    <div class="card-header">
                        <h4>Rentals Launched</h4>
                    </div>
                    <div class="card-body">
                        @if($rentalLaunched)
                            <h1 class="text-white">{{$rentalLaunched}}</h1>
                        @else
                            <h1 class="text-white">0</h1>
                        @endif
                    </div>
                </div>

                <div class="card format shadow card-dark text-center mb-4">
                    <div class="card-header">
                        <h4>Rentals Cleared</h4>
                    </div>
                    <div class="card-body">
                        @if($rentalCleared)
                            <h1 class="text-white">{{$rentalCleared}}</h1>
                        @else
                            <h1 class="text-white">0</h1>
                        @endif
                    </div>
                </div>

                <div class="card format shadow card-dark text-center mb-4">
                    <div class="card-header">
                        <h4>Launched COC's</h4>
                    </div>
                    <div class="card-body">
                        @if($rentalCoc)
                            <h1 class="text-white">{{$rentalCoc}}</h1>
                        @else
                            <h1 class="text-white">0</h1>
                        @endif
                    </div>
                </div>

                <div class="card format shadow card-dark text-center mb-4">
                    <div class="card-header">
                        <h4>Cleared COC's</h4>
                    </div>
                    <div class="card-body">
                        @if($rentalClearCoc)
                            <h1 class="text-white">{{$rentalClearCoc}}</h1>
                        @else
                            <h1 class="text-white">0</h1>
                        @endif
                    </div>
                </div>

            </div>
            <!-- /Sidebar -->
        </div>

    @endsection

    @section('scripts')
    <!-- Page level plugins -->
        <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('js/demo/datatables-scripts.js')}}"></script>
    @endsection

</x-admin-master>
