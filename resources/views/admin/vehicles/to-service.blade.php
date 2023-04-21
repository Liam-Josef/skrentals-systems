<x-admin-master>

    @section('styles')

    @endsection


    @foreach($applications as $application)

    @section('browser_title')
        <title>Move Vehicle | {{$application->name}}</title>
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

    @section('page_title')
        <h1>Move Vehicle</h1>
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
                <h1>Move Vehicle</h1>
            </div>
        </div>

        <!-- Hour Counts -->
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="card shadow card-dark mb-4">
                    <div class="card-header">
                        <!-- Departing Tablist -->
                        <ul class="nav nav-tabs nav-justified dock-depart" id="runnerView" role="tablist">
                            <li class="nav-item mb-0">
                                <a class="nav-link active" id="view-seadoo-tab" data-toggle="tab" href="#seadoo-tab" role="tab" aria-controls="seadoo-tab"
                                   aria-selected="true">
                                    SeaDoo
                                </a>
                            </li>
                            <li class="nav-item mb-0">
                                <a class="nav-link" id="view-pontoon-tab" data-toggle="tab" href="#pontoon-tab" role="tab" aria-controls="pontoon-tab"
                                   aria-selected="true">
                                    Pontoon
                                </a>
                            </li>
                            <li class="nav-item mb-0">
                                <a class="nav-link" id="view-scarab-tab" data-toggle="tab" href="#scarab-tab" role="tab" aria-controls="scarab-tab"
                                   aria-selected="true">
                                    Scarab
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show" id="scarab-tab" role="tabpanel" aria-labelledby="scarab-tab">

                                @foreach($vehicleScarab as $vehicle)

                                    <div class="row mb-3">
                                        <div class="col-3">
                                            <a href="{{route('vehicle.view', $vehicle->id)}}">
                                                <h4 class="text-white">{{$vehicle->vehicle_type}}&nbsp;{{$vehicle->internal_vehicle_id}}</h4>
                                            </a>
                                        </div>
                                        <div class="col-3">
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#to_service_modal{{$vehicle->id}}"
                                                @if($vehicle->location == 'Service')
                                                    hidden
                                                    @elseif($vehicle->location == 'On Water')
                                                    hidden
                                                    @elseif($vehicle->location == 'Incoming')
                                                    hidden
                                                    @else
                                                @endif
                                            >To Service</button>
                                        </div>
                                        <div class="col-3">
                                            <form method="post" action="{{route('vehicle.updateLocation', $vehicle)}}">
                                                @csrf
                                                @method('PUT')

                                                <input type="hidden" name="location" id="location" value="Dock" />
                                                <input type="hidden" name="location_timestamp" id="location_timestamp" value="{{\Carbon\Carbon::now()->format('Y-m-d H:m:s')}}" />

                                                <button class="btn btn-secondary" type="submit"
                                                        @if($vehicle->location == 'Dock')
                                                        hidden
                                                        @elseif($vehicle->location == 'On Water')
                                                        hidden
                                                    @endif
                                                >&nbsp;To Dock&nbsp;</button>
                                            </form>
                                        </div>
                                        <div class="col-3">
                                            <h4 class="text-white">{{$vehicle->location}}</h4>
                                        </div>

                                        <hr class="rounded mt-3 text-lt-red" />
                                    </div>

                                    <hr>
                                @endforeach

                            </div>
                            <div class="tab-pane fade show" id="pontoon-tab" role="tabpanel" aria-labelledby="pontoon-tab">
                                @foreach($vehiclePontoon as $vehicle)
                                    <div class="row mb-3">
                                        <div class="col-3">
                                            <a href="{{route('vehicle.view', $vehicle->id)}}">
                                                <h4 class="text-white">{{$vehicle->vehicle_type}}&nbsp;{{$vehicle->internal_vehicle_id}}</h4>
                                            </a>
                                        </div>
                                        <div class="col-3">
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#to_service_modal{{$vehicle->id}}"
                                                    @if($vehicle->location == 'Service')
                                                    hidden
                                                    @elseif($vehicle->location == 'On Water')
                                                    hidden
                                                    @elseif($vehicle->location == 'Incoming')
                                                    hidden
                                            @else
                                                @endif
                                            >To Service</button>
                                        </div>
                                        <div class="col-3">
                                            <form method="post" action="{{route('vehicle.updateLocation', $vehicle)}}">
                                                @csrf
                                                @method('PUT')

                                                <input type="hidden" name="location" id="location" value="Dock" />
                                                <input type="hidden" name="location_timestamp" id="location_timestamp" value="{{\Carbon\Carbon::now()->format('Y-m-d H:m:s')}}" />

                                                <button class="btn btn-secondary" type="submit"
                                                        @if($vehicle->location == 'Dock')
                                                        hidden
                                                        @elseif($vehicle->location == 'On Water')
                                                        hidden
                                                        @else
                                                        @endif
                                                >&nbsp;To Dock&nbsp;</button>
                                            </form>
                                        </div>
                                        <div class="col-3">
                                            <h4 class="text-white">{{$vehicle->location}}</h4>
                                        </div>

                                        <hr class="rounded mt-3 text-lt-red" />
                                    </div>



                                    <hr>
                                @endforeach
                            </div>
                            <div class="tab-pane fade show active" id="seadoo-tab" role="tabpanel" aria-labelledby="seadoo-tab">
                                @foreach($vehicleSeaDoo as $vehicle)
                                    <div class="row mb-3">
                                        <div class="col-3">
                                            <a href="{{route('vehicle.view', $vehicle->id)}}">
                                                <h4 class="text-white">{{$vehicle->vehicle_type}}&nbsp;{{$vehicle->internal_vehicle_id}}</h4>
                                            </a>
                                        </div>
                                        <div class="col-3">
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#to_service_modal{{$vehicle->id}}"
                                                    @if($vehicle->location == 'Service')
                                                    hidden
                                                    @elseif($vehicle->location == 'On Water')
                                                    hidden
                                                    @elseif($vehicle->location == 'Incoming')
                                                    hidden
                                            @else
                                                @endif
                                            >To Service</button>
                                        </div>
                                        <div class="col-3">
                                            <form method="post" action="{{route('vehicle.updateLocation', $vehicle)}}">
                                                @csrf
                                                @method('PUT')

                                                <input type="hidden" name="location" id="location" value="Dock" />
                                                <input type="hidden" name="location_timestamp" id="location_timestamp" value="{{\Carbon\Carbon::now()->format('Y-m-d H:m:s')}}" />

                                                <button class="btn btn-secondary" type="submit"
                                                        @if($vehicle->location == 'Dock')
                                                        hidden
                                                        @elseif($vehicle->location == 'On Water')
                                                        hidden
                                                @else
                                                    @endif
                                                >&nbsp;To Dock&nbsp;</button>
                                            </form>
                                        </div>
                                        <div class="col-3">
                                            <h4 class="text-gray-400 bold">{{$vehicle->location}}</h4>
                                        </div>

                                        <hr class="rounded mt-3 text-lt-red" />
                                    </div>



                                    <hr>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Hour Counts -->


        @foreach($vehicles as $vehicle)
            <div class="modal fade" id="to_service_modal{{$vehicle->id}}" tabindex="-1" role="dialog" aria-labelledby="launchModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="launchModalLabel">Send vehicle to <span>Service</span></h3>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{route('vehicle.updateLocation', $vehicle)}}">
                                @csrf
                                @method('PUT')

                                <div class="row mt-3">
                                    <div class="col-6">
                                        <div class="form-group">
{{--                                            <label for="current_hours">Enter Hours</label>--}}
                                            <input class="form-control" type="text" name="current_hours" id="current_hours"  placeholder="Enter Hours - {{$vehicle->current_hours}} " />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <input type="hidden" name="location" id="location" value="Service" />
                                        <input type="hidden" name="location_timestamp" id="location_timestamp" value="{{\Carbon\Carbon::now()->format('Y-m-d H:m:s')}}" />
                                        <input type="hidden" class="form-control" name="hours_updated" value="{{$dateNow}}" />
                                        <button class="btn btn-primary width-100" type="submit"
                                        >Send To Service</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <form action="#" method="post">
                                @csrf
                                <button class="btn btn-danger">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach



    @endsection


    @section('scripts')

    @endsection



</x-admin-master>
