<x-admin-master>

    @section('styles')

    @endsection


        @foreach($applications as $application)

        @section('page_title')
            <h1>Maintenance Chart</h1>
        @endsection

        @section('browser_title')
            <title>Maintenance Chart | {{$application->name}}</title>
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
                <h1>Maintenance Chart</h1>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <!-- Vehicle List -->
                <ul class="nav nav-tabs nav-justified dock-depart sidebar-tab-list" id="runnerView" role="tablist">
                    <li class="nav-item mb-2">
                        <a class="nav-link active" id="view-seadoo-tab" data-toggle="tab" href="#seadoo-tab" role="tab" aria-controls="seadoo-tab"
                           aria-selected="true">
                            SeaDoo
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link" id="view-pontoon-tab" data-toggle="tab" href="#pontoon-tab" role="tab" aria-controls="pontoon-tab"
                           aria-selected="true">
                            Pontoon
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link" id="view-scarab-tab" data-toggle="tab" href="#scarab-tab" role="tab" aria-controls="scarab-tab"
                           aria-selected="true">
                            Scarab
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link" id="view-spyder-tab" data-toggle="tab" href="#spyder-tab" role="tab" aria-controls="spyder-tab"
                           aria-selected="true">
                            Spyder
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link" id="view-skidoo-tab" data-toggle="tab" href="#skidoo-tab" role="tab" aria-controls="skidoo-tab"
                           aria-selected="true">
                            SkiDoo
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row mb-5">
            <div class="hidden-xs col-sm-12">
                <div class="row">
                    <div class="col-sm-2">
                        <p class="mb-0 text-center"><span class="font-bolder">Vehicle</span></p>
                    </div>
                    <div class="col-sm-2">
                        <p class="mb-0 text-center"><span class="font-bolder">VIN</span></p>
                    </div>
                    <div class="col-sm-2">
                        <p class="mb-0 text-center"><span class="font-bolder">Hours Updated</span></p>
                    </div>
                    <div class="col-3 col-sm-1">
                        <p class="mb-0 text-center"><span class="font-bolder">Current</span></p>
                    </div>
                    <div class="col-3 col-sm-1">
                        <p class="mb-0 text-center"><span class="font-bolder">Expected</span></p>
                    </div>
                    <div class="col-3 col-sm-1">
                        <p class="mb-0 text-center"><span class="font-bolder">Remaining</span></p>
                    </div>
                    <div class="col-3 col-sm-1">
                        <p class="mb-0 text-center"><span class="font-bolder">Previous</span></p>
                    </div>
                    <div class="col-sm-2">
                        <p class="mb-0 text-center"><span class="font-weight-bolder">Location</span></p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="seadoo-tab" role="tabpanel" aria-labelledby="seadoo-tab">

                        @foreach($vehicleSeaDoo as $vehicle)
                            <div class="card shadow mt-0 my-2">
                                <a href="#" class="card-link" data-toggle="modal" data-target="#maintChart{{$vehicle->id}}">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <p class="mb-0 visible-xs text-center text-dk-red large">{{$vehicle->vehicle_type}} <span class="font-bolder">{{$vehicle->internal_vehicle_id}}</span></p>
                                                <p class="mb-0 hidden-xs text-center">{{$vehicle->vehicle_type}} <span class="font-bolder">{{$vehicle->internal_vehicle_id}}</span></p>
                                            </div>
                                            <div class="col-sm-2">
                                                <p class="mb-0 visible-xs text-center text-gray medium">{{$vehicle->vin}}</p>
                                                <p class="mb-0 hidden-xs text-center">{{$vehicle->vin}}</p>
                                            </div>
                                            <div class="col-sm-2">
                                                <p class="mb-0 visible-xs mt-2 mb-3"><span class="font-weight-bolder">Hours Updated: </span> {{Carbon\Carbon::parse($vehicle->hours_updated)->format('m / d / y')}}</p>
                                                <p class="mb-0 hidden-xs text-center">{{Carbon\Carbon::parse($vehicle->hours_updated)->format('m / d / y')}}</p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Current</p>
                                                <p class="mb-0 visible-xs text-center">{{$vehicle->current_hours}}</p>

                                                <p class="mb-0 hidden-xs text-center">{{$vehicle->current_hours}}</p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Expected</p>
                                                <p class="mb-0 visible-xs text-center">{{$vehicle->expected_hours}}</p>

                                                <p class="mb-0 hidden-xs text-center">{{$vehicle->expected_hours}}</p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Remaining</p>
                                                <p class="mb-0 visible-xs text-center">{{$vehicle->remaining_hours}}</p>

                                                <p class="mb-0 hidden-xs text-center">{{$vehicle->remaining_hours}}</p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Previous</p>
                                                <p class="mb-0 visible-xs text-center">{{$vehicle->previous_hours}}</p>

                                                <p class="mb-0 hidden-xs text-center">{{$vehicle->previous_hours}}</p>
                                            </div>
                                            <div class="col-sm-2">
                                                @if($vehicle->launched == '1')
                                                    <p class="mb-0 visible-xs text-center font-weight-bold large text-gray-400">On Rental</p>
                                                    <p class="mb-0 hidden-xs text-center">On Rental</p>
                                                @else
                                                    <p class="mb-0 visible-xs text-center font-weight-bold large text-gray-400">{{$vehicle->location}}</p>
                                                    <p class="mb-0 hidden-xs text-center">{{$vehicle->location}}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                    <div class="tab-pane fade show" id="pontoon-tab" role="tabpanel" aria-labelledby="pontoon-tab">

                        @foreach($vehiclePontoon as $vehicle)
                            <div class="card shadow mt-0 my-2">
                                <a href="#" class="card-link" data-toggle="modal" data-target="#maintChart{{$vehicle->id}}">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <p class="mb-0 visible-xs text-center text-dk-red large">{{$vehicle->vehicle_type}} <span class="font-bolder">{{$vehicle->internal_vehicle_id}}</span></p>
                                                <p class="mb-0 hidden-xs text-center">{{$vehicle->vehicle_type}} <span class="font-bolder">{{$vehicle->internal_vehicle_id}}</span></p>
                                            </div>
                                            <div class="col-sm-2">
                                                <p class="mb-0 visible-xs text-center text-gray medium">{{$vehicle->vin}}</p>
                                                <p class="mb-0 hidden-xs text-center">{{$vehicle->vin}}</p>
                                            </div>
                                            <div class="col-sm-2">
                                                <p class="mb-0 visible-xs mt-2 mb-3"><span class="font-weight-bolder">Hours Updated: </span> {{Carbon\Carbon::parse($vehicle->hours_updated)->format('m / d / y')}}</p>
                                                <p class="mb-0 hidden-xs text-center">{{Carbon\Carbon::parse($vehicle->hours_updated)->format('m / d / y')}}</p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Current</p>
                                                <p class="mb-0 visible-xs text-center">{{$vehicle->current_hours}}</p>

                                                <p class="mb-0 hidden-xs text-center">{{$vehicle->current_hours}}</p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Expected</p>
                                                <p class="mb-0 visible-xs text-center">{{$vehicle->expected_hours}}</p>

                                                <p class="mb-0 hidden-xs text-center">{{$vehicle->expected_hours}}</p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Remaining</p>
                                                <p class="mb-0 visible-xs text-center">{{$vehicle->remaining_hours}}</p>

                                                <p class="mb-0 hidden-xs text-center">{{$vehicle->remaining_hours}}</p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Previous</p>
                                                <p class="mb-0 visible-xs text-center">{{$vehicle->previous_hours}}</p>

                                                <p class="mb-0 hidden-xs text-center">{{$vehicle->previous_hours}}</p>
                                            </div>
                                            <div class="col-sm-2">
                                                @if($vehicle->launched == '1')
                                                    <p class="mb-0 visible-xs text-center font-weight-bold large text-gray-400">On Rental</p>
                                                    <p class="mb-0 hidden-xs text-center">On Rental</p>
                                                @else
                                                    <p class="mb-0 visible-xs text-center font-weight-bold large text-gray-400">{{$vehicle->location}}</p>
                                                    <p class="mb-0 hidden-xs text-center">{{$vehicle->location}}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                    <div class="tab-pane fade show" id="scarab-tab" role="tabpanel" aria-labelledby="scarab-tab">

                        @foreach($vehicleScarab as $vehicle)
                            <div class="card shadow mt-0 my-2">
                                <a href="#" class="card-link" data-toggle="modal" data-target="#maintChart{{$vehicle->id}}">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <p class="mb-0 visible-xs text-center text-dk-red large">{{$vehicle->vehicle_type}} <span class="font-bolder">{{$vehicle->internal_vehicle_id}}</span></p>
                                                <p class="mb-0 hidden-xs text-center">{{$vehicle->vehicle_type}} <span class="font-bolder">{{$vehicle->internal_vehicle_id}}</span></p>
                                            </div>
                                            <div class="col-sm-2">
                                                <p class="mb-0 visible-xs text-center text-gray medium">{{$vehicle->vin}}</p>
                                                <p class="mb-0 hidden-xs text-center">{{$vehicle->vin}}</p>
                                            </div>
                                            <div class="col-sm-2">
                                                <p class="mb-0 visible-xs mt-2 mb-3"><span class="font-weight-bolder">Hours Updated: </span> {{Carbon\Carbon::parse($vehicle->hours_updated)->format('m / d / y')}}</p>
                                                <p class="mb-0 hidden-xs text-center">{{Carbon\Carbon::parse($vehicle->hours_updated)->format('m / d / y')}}</p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Current</p>
                                                <p class="mb-0 visible-xs text-center">{{$vehicle->current_hours}}</p>

                                                <p class="mb-0 hidden-xs text-center">{{$vehicle->current_hours}}</p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Expected</p>
                                                <p class="mb-0 visible-xs text-center">{{$vehicle->expected_hours}}</p>

                                                <p class="mb-0 hidden-xs text-center">{{$vehicle->expected_hours}}</p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Remaining</p>
                                                <p class="mb-0 visible-xs text-center">{{$vehicle->remaining_hours}}</p>

                                                <p class="mb-0 hidden-xs text-center">{{$vehicle->remaining_hours}}</p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Previous</p>
                                                <p class="mb-0 visible-xs text-center">{{$vehicle->previous_hours}}</p>

                                                <p class="mb-0 hidden-xs text-center">{{$vehicle->previous_hours}}</p>
                                            </div>
                                            <div class="col-sm-2">
                                                @if($vehicle->launched == '1')
                                                    <p class="mb-0 visible-xs text-center font-weight-bold large text-gray-400">On Rental</p>
                                                    <p class="mb-0 hidden-xs text-center">On Rental</p>
                                                @else
                                                    <p class="mb-0 visible-xs text-center font-weight-bold large text-gray-400">{{$vehicle->location}}</p>
                                                    <p class="mb-0 hidden-xs text-center">{{$vehicle->location}}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                    <div class="tab-pane fade show" id="spyder-tab" role="tabpanel" aria-labelledby="spyder-tab">

                        @foreach($vehicleSpyder as $vehicle)
                            <div class="card shadow mt-0 my-2">
                                <a href="#" class="card-link" data-toggle="modal" data-target="#maintChart{{$vehicle->id}}">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <p class="mb-0 visible-xs text-center text-dk-red large">{{$vehicle->vehicle_type}} <span class="font-bolder">{{$vehicle->internal_vehicle_id}}</span></p>
                                                <p class="mb-0 hidden-xs text-center">{{$vehicle->vehicle_type}} <span class="font-bolder">{{$vehicle->internal_vehicle_id}}</span></p>
                                            </div>
                                            <div class="col-sm-2">
                                                <p class="mb-0 visible-xs text-center text-gray medium">{{$vehicle->vin}}</p>
                                                <p class="mb-0 hidden-xs text-center">{{$vehicle->vin}}</p>
                                            </div>
                                            <div class="col-sm-2">
                                                <p class="mb-0 visible-xs mt-2 mb-3"><span class="font-weight-bolder">Hours Updated: </span> {{Carbon\Carbon::parse($vehicle->hours_updated)->format('m / d / y')}}</p>
                                                <p class="mb-0 hidden-xs text-center">{{Carbon\Carbon::parse($vehicle->hours_updated)->format('m / d / y')}}</p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Current</p>
                                                <p class="mb-0 visible-xs text-center">{{$vehicle->current_hours}}</p>

                                                <p class="mb-0 hidden-xs text-center">{{$vehicle->current_hours}}</p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Expected</p>
                                                <p class="mb-0 visible-xs text-center">{{$vehicle->expected_hours}}</p>

                                                <p class="mb-0 hidden-xs text-center">{{$vehicle->expected_hours}}</p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Remaining</p>
                                                <p class="mb-0 visible-xs text-center">{{$vehicle->remaining_hours}}</p>

                                                <p class="mb-0 hidden-xs">{{$vehicle->remaining_hours}}</p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Previous</p>
                                                <p class="mb-0 visible-xs text-center">{{$vehicle->previous_hours}}</p>

                                                <p class="mb-0 hidden-xs text-center">{{$vehicle->previous_hours}}</p>
                                            </div>
                                            <div class="col-sm-2">
                                                @if($vehicle->launched == '1')
                                                    <p class="mb-0 visible-xs text-center font-weight-bold large text-gray-400">On Rental</p>
                                                    <p class="mb-0 hidden-xs text-center">On Rental</p>
                                                @else
                                                    <p class="mb-0 visible-xs text-center font-weight-bold large text-gray-400">{{$vehicle->location}}</p>
                                                    <p class="mb-0 hidden-xs text-center">{{$vehicle->location}}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                    <div class="tab-pane fade show" id="skidoo-tab" role="tabpanel" aria-labelledby="skidoo-tab">

                        @foreach($vehicleSkiDoo as $vehicle)
                            <div class="card shadow mt-0 my-2">
                                <a href="#" class="card-link" data-toggle="modal" data-target="#maintChart{{$vehicle->id}}">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <p class="mb-0 visible-xs text-center text-dk-red large">{{$vehicle->vehicle_type}} <span class="font-bolder">{{$vehicle->internal_vehicle_id}}</span></p>
                                                <p class="mb-0 hidden-xs text-center">{{$vehicle->vehicle_type}} <span class="font-bolder">{{$vehicle->internal_vehicle_id}}</span></p>
                                            </div>
                                            <div class="col-sm-2">
                                                <p class="mb-0 visible-xs text-center text-gray medium">{{$vehicle->vin}}</p>
                                                <p class="mb-0 hidden-xs text-center">{{$vehicle->vin}}</p>
                                            </div>
                                            <div class="col-sm-2">
                                                <p class="mb-0 visible-xs mt-2 mb-3"><span class="font-weight-bolder">Hours Updated: </span> {{Carbon\Carbon::parse($vehicle->hours_updated)->format('m / d / y')}}</p>
                                                <p class="mb-0 hidden-xs text-center">{{Carbon\Carbon::parse($vehicle->hours_updated)->format('m / d / y')}}</p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Current</p>
                                                <p class="mb-0 visible-xs text-center">{{$vehicle->current_hours}}</p>

                                                <p class="mb-0 hidden-xs text-center">{{$vehicle->current_hours}}</p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Expected</p>
                                                <p class="mb-0 visible-xs text-center">{{$vehicle->expected_hours}}</p>

                                                <p class="mb-0 hidden-xs text-center">{{$vehicle->expected_hours}}</p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Remaining</p>
                                                <p class="mb-0 visible-xs text-center">{{$vehicle->remaining_hours}}</p>

                                                <p class="mb-0 hidden-xs text-center">{{$vehicle->remaining_hours}}</p>
                                            </div>
                                            <div class="col-3 col-sm-1">
                                                <p class="mb-0 visible-xs text-center font-weight-bold">Previous</p>
                                                <p class="mb-0 visible-xs text-center">{{$vehicle->previous_hours}}</p>

                                                <p class="mb-0 hidden-xs text-center">{{$vehicle->previous_hours}}</p>
                                            </div>
                                            <div class="col-sm-2">
                                                @if($vehicle->launched == '1')
                                                    <p class="mb-0 visible-xs text-center font-weight-bold large text-gray-400">On Rental</p>
                                                    <p class="mb-0 hidden-xs text-center">On Rental</p>
                                                @else
                                                    <p class="mb-0 visible-xs text-center font-weight-bold large text-gray-400">{{$vehicle->location}}</p>
                                                    <p class="mb-0 hidden-xs text-center">{{$vehicle->location}}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>



        @foreach($vehicles as $vehicle)
            <!-- Maintenance Chart Modal -->
            <div class="modal fade" id="maintChart{{$vehicle->id}}" tabindex="-1" role="dialog" aria-labelledby="viewInvoice" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h3><span>{{$vehicle->vehicle_type}}</span>
                                {{$vehicle->internal_vehicle_id}}
                                <span class="text-gray-500">&nbsp;
                                    (
                                    @if($vehicle->launched == '1')
                                        On Rental
                                    @else
                                        {{$vehicle->location}}
                                    @endif
                                    )
                                    &nbsp;</span></h3>
                        </div>

                        <div class="modal-body">

                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <h6 class="text-white"><span class="text-gray-600">Year: &nbsp;</span> {{$vehicle->year}} </h6>
                                    <h6 class="text-white"><span class="text-gray-600">Vehicle Model: &nbsp;</span> {{$vehicle->model}} </h6>
                                    <h6 class="text-white"><span class="text-gray-600">VIN: &nbsp;</span> {{$vehicle->vin}} </h6>
                                    <h6 class="text-white"><span class="text-gray-600">Hours to Service: &nbsp;</span> {{$vehicle->remaining_hours}} </h6>
{{--                                    <h6 class="text-white"><span class="text-gray-600">Hours Updated: &nbsp;</span> {{Carbon\Carbon::parse($vehicle->remaining_hours)->format('m / d / y')}} </h6>--}}
                                </div>
                                <div class="col-sm-6 col-md-8">
                                    <div class="row">

                                        <div class="col-sm-4 mr-0">
                                            <div class="card shadow mb-2">
                                                <div class="card-body text-center">
                                                    <h5 class="text-dark">Current</h5>
                                                    <h3 class="text-dk-red">{{$vehicle->current_hours}}</h3>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 mr-0">
                                            <div class="card shadow mb-2">
                                                <div class="card-body text-center">
                                                    <h5 class="text-dark">Expected</h5>
                                                    <h3 class="text-dk-red">{{$vehicle->expected_hours}}</h3>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 mr-0">
                                            <div class="card shadow mb-2">
                                                <div class="card-body text-center">
                                                    <h5 class="text-dark">Remaining</h5>
                                                    <h3 class="text-dk-red">{{$vehicle->remaining_hours}}</h3>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-12">
                                    <h3 class="text-white mt-3 mb-2">Maintenance History</h3>
                                </div>
                                @foreach($maintenances as $maintenance)
                                    @if($vehicle->id == $maintenance->vehicle_id)

                                        <div class="col-12">
                                            <div class="card shadow mb-4">
                                                <!-- Card Header - Accordion -->
                                                <a href="#collapseCardExample" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                                    <div class="row">
                                                        <div class="col-6 col-sm-3">
                                                            {{Carbon\Carbon::parse($maintenance->created_at)->format('M d, Y')}}
                                                        </div>
                                                        <div class="col-12 col-sm-4">
                                                            {{$maintenance->description}}
                                                        </div>
                                                        <div class="col-6 col-sm-2">
                                                            <p class="font-weight-bolder">{{$maintenance->service_type}}</p>
                                                        </div>
                                                        <div class="col-6 col-sm-3">
                                                            {{$maintenance->status}}
                                                        </div>

                                                    </div>
                                                </a>
                                                <!-- Card Content - Collapse -->
                                                <div class="collapse" id="collapseCardExample">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                @if($maintenance->coc_image == '')
                                                                    <img src="{{asset('storage/' . 'images/no-image.jpg')}}" alt="Service Request Image" class="img-responsive">
                                                                @else
                                                                    <img src="{{asset('storage/' . $maintenance->image)}}" alt="Service Request Image" class="img-responsive">
                                                                @endif
                                                            </div>
                                                            <div class="col-sm-6">
                                                                {{--                                                        @foreach($maintenances as $maintenance)--}}
                                                                {{--                                                            @if($maintenance->rental_invoice == $rental->invoice_number)--}}
                                                                @foreach($vehicles as $vehicle)
                                                                    @if($maintenance->vehicle_id == $vehicle->id)
                                                                        <h6>
                                                                            <span class="text-dk-red">Vehicle: &nbsp; </span>
                                                                            {{$vehicle->vehicle_type}}
                                                                            {{$vehicle->internal_vehicle_id}}
                                                                        </h6>
                                                                        <h6>
                                                                            <span class="text-dk-red">VIN: &nbsp; </span>
                                                                            {{$vehicle->vin}}
                                                                        </h6>
                                                                    @endif
                                                                @endforeach
                                                                <h6> <span class="text-dk-red">Submitted By: &nbsp; </span>
                                                                    @foreach($users as $user)
                                                                        @if($user->id == $maintenance->submitted_by)
                                                                            {{$user->firstname}} {{$user->lastname}}
                                                                        @endif
                                                                    @endforeach
                                                                </h6>
                                                                <h6> <span class="text-dk-red">Date Submitted: &nbsp; </span>{{Carbon\Carbon::parse($maintenance->date_sumitted)->format('m / d / y')}}</h6>
                                                                <h6>
                                                                    <span class="text-dk-red">Hours: &nbsp; </span>
                                                                    {{$maintenance->service_hours}}
                                                                </h6>
                                                                @if($maintenance->invoiced_by == '')

                                                                @else
                                                                    <h6> <span class="text-dk-red">Service Invoice #: &nbsp; </span>{{$maintenance->service_invoice}}</h6>
                                                                    <h6> <span class="text-dk-red">Invoiced By: &nbsp; </span>
                                                                        @foreach($users as $user)
                                                                            @if($user->id == $maintenance->invoiced_by)
                                                                                {{$user->firstname}} {{$user->lastname}}
                                                                            @endif
                                                                        @endforeach
                                                                    </h6>
                                                                    <h6> <span class="text-dk-red">Invoice Submitted: &nbsp; </span>{{Carbon\Carbon::parse($maintenance->date_invoiced)->format('m / d / y')}}</h6>
                                                                @endif

                                                                @if($maintenance->service_notes == '')

                                                                @else
                                                                    <h6> <span class="text-dk-red">Service Notes: &nbsp; </span>{{$maintenance->service_notes}}</h6>
                                                                @endif

                                                                @if($maintenance->approved_by == '')

                                                                @else
                                                                    <h6> <span class="text-dk-red">Approved Invoice: &nbsp; </span>
                                                                        @foreach($users as $user)
                                                                            @if($user->id == $maintenance->approved_by)
                                                                                {{$user->firstname}} {{$user->lastname}}
                                                                            @endif
                                                                        @endforeach
                                                                    </h6>
                                                                    <h6> <span class="text-dk-red">Invoice Submitted: &nbsp; </span>{{Carbon\Carbon::parse($maintenance->date_invoiced)->format('m / d / y')}}</h6>
                                                                @endif

                                                                <h6> <span class="text-dk-red">Descripion: &nbsp; </span>{{$maintenance->description}}</h6>

                                                            </div>
                                                        </div>
                                                        @if($maintenance->invoice == '')
                                                        @else
                                                            <div class="row mt-5">
                                                                <iframe src="{{asset('storage/' . $maintenance->invoice)}}" style="width: 100%;height: 800px;border: none;"></iframe>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    @endif
                                @endforeach

                            </div>

                        </div>

                        <div class="modal-footer">
                            <a href="{{route('vehicle.view', $vehicle->id)}}" class="btn btn-primary btn-right btn-modal mr-3">View Vehicle</a>
                            <button class="btn btn-secondary btn-right btn-modal" type="button" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
        <!-- /Maintenance Chart Modal -->


    @endsection


    @section('scripts')

    @endsection



</x-admin-master>
