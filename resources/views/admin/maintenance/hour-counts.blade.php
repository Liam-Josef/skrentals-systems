<x-admin-master>

    @section('styles')

    @endsection


    @foreach($applications as $application)

        @section('browser_title')
                <title>Hour Counts | {{$application->name}}</title>
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
                <h1>Hour Counts</h1>
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
                <h1>Hour Counts</h1>
            </div>
        </div>

        <!-- Hour Counts -->
        <div class="row" >
            <div class="col-12">
                <div class="card shadow card-dark mb-4">
                    <div class="card-header">
                        <!-- Departing Tablist -->
                        <ul class="nav nav-tabs nav-justified dock-depart" id="runnerView" role="tablist">
                            <li class="nav-item mb-0">
                                <a class="nav-link active" id="view-pontoon-tab" data-toggle="tab" href="#pontoon-tab" role="tab" aria-controls="pontoon-tab"
                                   aria-selected="true">
                                    Pont<span class="hidden-xs-inline">oon </span>
                                </a>
                            </li>
                            <li class="nav-item mb-0">
                                <a class="nav-link" id="view-scarab-tab" data-toggle="tab" href="#scarab-tab" role="tab" aria-controls="scarab-tab"
                                   aria-selected="true">
                                    Scarab
                                </a>
                            </li>
                            <li class="nav-item mb-0">
                                <a class="nav-link" id="view-seadoo-tab" data-toggle="tab" href="#seadoo-tab" role="tab" aria-controls="seadoo-tab"
                                   aria-selected="true">
                                    SeaDoo
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show" id="scarab-tab" role="tabpanel" aria-labelledby="scarab-tab">

                                @foreach($vehicleScarab as $vehicle)
                                    <form method="post" action="{{route('vehicle.updateHours', $vehicle)}}">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-5"><h3 class="text-white text-center mt-1">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</h3></div>
                                            <span class="hidden">{{$updatedDate = \Carbon\Carbon::now()->addDay()}}</span>
                                            @if(strpos($vehicle->hours_updated, $today) !== false)
                                                <div class="col-sm-3">
                                                    <h3 class="mt-1">  {{$vehicle->current_hours}}</h3>
                                                </div>
                                            @else
                                                <div class="col-6 col-sm-1">
                                                    <input type="text" class="form-control" name="current_hours" value="{{$vehicle->current_hours}}" />
                                                    <input type="hidden" class="form-control" name="hours_updated" value="{{$dateNow}}" />
                                                    <input type="hidden" class="form-control" name="id" value="{{$vehicle->id}}" />
                                                </div>
                                                <div class="col-6 col-sm-2">
                                                    <button type="submit" class="btn btn-primary-red">Update</button>
                                                </div>
                                            @endif

                                            <div class="col-sm-2">
                                                @if($vehicle->launched == '1')
                                                    <h4 class="mt-2">( On Rental )</h4>
                                                @endif
                                            </div>
                                            <hr class="rounded mt-3" />
                                        </div>
                                    </form>
                                @endforeach

                            </div>
                            <div class="tab-pane fade show active" id="pontoon-tab" role="tabpanel" aria-labelledby="pontoon-tab">
                                @foreach($vehiclePontoon as $vehicle)
                                    <form method="post" action="{{route('vehicle.updateHours', $vehicle)}}">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-5"><h3 class="text-white text-center mt-1">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</h3></div>
                                            <span class="hidden">{{$updatedDate = \Carbon\Carbon::now()->addDay()}}</span>
                                            @if(strpos($vehicle->hours_updated, $today) !== false)
                                                <div class="col-sm-3">
                                                    <h3 class="mt-1">  {{$vehicle->current_hours}}</h3>
                                                </div>
                                            @else
                                                <div class="col-6 col-sm-1">
                                                    <input type="text" class="form-control" name="current_hours" value="{{$vehicle->current_hours}}" />
                                                    <input type="hidden" class="form-control" name="hours_updated" value="{{Carbon\Carbon::now('PST')}}" />
                                                    <input type="hidden" class="form-control" name="id" value="{{$vehicle->id}}" />
                                                </div>
                                                <div class="col-6 col-sm-2">
                                                    <button type="submit" class="btn btn-primary-red">Update</button>
                                                </div>
                                            @endif

                                            <div class="col-sm-2">
                                                @if($vehicle->launched == '1')
                                                    <h4 class="mt-2">( On Rental )</h4>
                                                @endif
                                            </div>
                                            <hr class="rounded mt-3" />
                                        </div>
                                    </form>
                                @endforeach
                            </div>
                            <div class="tab-pane fade show" id="seadoo-tab" role="tabpanel" aria-labelledby="seadoo-tab">
                                @foreach($vehicleSeaDoo as $vehicle)
                                    <form method="post" action="{{route('vehicle.updateHours', $vehicle)}}">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-5"><h3 class="text-white text-center mt-1">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</h3></div>
                                            <span class="hidden">{{$updatedDate = \Carbon\Carbon::now()->addDay()}}</span>
                                            @if(strpos($vehicle->hours_updated, $today) !== false)
                                                <div class="col-sm-3">
                                                    <h3 class="mt-1">  {{$vehicle->current_hours}}</h3>
                                                </div>
                                            @else
                                                <div class="col-6 col-sm-1">
                                                    <input type="text" class="form-control" name="current_hours" value="{{$vehicle->current_hours}}" />
                                                    <input type="hidden" class="form-control" name="hours_updated" value="{{Carbon\Carbon::now('PST')}}" />
                                                    <input type="hidden" class="form-control" name="id" value="{{$vehicle->id}}" />
                                                </div>
                                                <div class="col-6 col-sm-2">
                                                    <button type="submit" class="btn btn-primary-red">Update</button>
                                                </div>
                                            @endif

                                            <div class="col-sm-2">
                                                @if($vehicle->launched == '1')
                                                    <h4 class="mt-2">( On Rental )</h4>
                                                @endif
                                            </div>
                                            <hr class="rounded mt-3" />
                                        </div>
                                    </form>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Hour Counts -->


    @endsection


    @section('scripts')

    @endsection



</x-admin-master>
