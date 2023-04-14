<x-admin-master>

    @section('styles')

    @endsection


        @foreach($applications as $application)

            @section('page_title')
                <h1>{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}} Details</h1>
            @endsection

            @section('browser_title')
                <title>{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}} Details | {{$application->name}}</title>
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
        <h1>Vehicle Profile <span>{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</span></h1>

            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <h6 class="text-gray-900"><span class="text-dk-red">Year: &nbsp;</span> {{$vehicle->year}} </h6>
                    <h6 class="text-gray-900"><span class="text-dk-red">Vehicle Model: &nbsp;</span> {{$vehicle->model}} </h6>
                    <h6 class="text-gray-900"><span class="text-dk-red">VIN: &nbsp;</span> {{$vehicle->vin}} </h6>
                    <h6 class="text-gray-900"><span class="text-dk-red">Hours to Service: &nbsp;</span> {{$vehicle->remaining_hours}} </h6>
                    {{--                                    <h6 class="text-white"><span class="text-gray-600">Hours Updated: &nbsp;</span> {{Carbon\Carbon::parse($vehicle->remaining_hours)->format('m / d / y')}} </h6>--}}
                </div>
                <div class="col-sm-6 col-md-8">
                    <div class="row">

                        <div class="col-sm-4">
                            <div class="card shadow">
                                <div class="card-body text-center">
                                    <h5 class="text-dark">Rental's</h5>
                                    @if($vehicleRentals)
                                        <h3 class="text-dk-red">{{$vehicleRentals}}</h3>
                                    @else
                                        <h3 class="text-dk-red">0</h3>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card shadow">
                                <div class="card-body text-center">
                                    <h5 class="text-dark">COC's</h5>
                                    @if($vehicleCoc)
                                        <h3 class="text-dk-red">{{$vehicleCoc}}</h3>
                                    @else
                                        <h3 class="text-dk-red">0</h3>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card shadow">
                                <div class="card-body text-center">
                                    <h5 class="text-dark">Maintenance's</h5>
                                    @if($vehicleService)
                                        <h3 class="text-dk-red">{{$vehicleService}}</h3>
                                    @else
                                        <h3 class="text-dk-red">0</h3>
                                    @endif
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12">
                    <h3 class="mt-3 mb-2">Maintenance History</h3>
                </div>
                @foreach($maintenances as $maintenance)
                    @if($vehicle->id == $maintenance->vehicle_id)

                        <div class="col-12">
                            <div class="card shadow mb-4 profile-history">
                                <!-- Card Header - Accordion -->
                                <a href="#collapseCard{{$maintenance->id}}" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCard{{$maintenance->id}}">
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
                                <div class="collapse" id="collapseCard{{$maintenance->id}}">
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
                                                <h6> <span class="text-dk-red">Descripion: &nbsp; </span>{{$maintenance->description}}</h6>
                                                <h6> <span class="text-dk-red">Submitted By: &nbsp; </span>
                                                    @foreach($users as $user)
                                                        @if($user->id == $maintenance->submitted_by)
                                                            {{$user->firstname}} {{$user->lastname}}
                                                        @endif
                                                    @endforeach
                                                </h6>
                                                <h6> <span class="text-dk-red">Date Submitted: &nbsp; </span>{{Carbon\Carbon::parse($maintenance->date_sumitted)->format('m / d / y')}}</h6>
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

                                                @if($maintenance->service_notes == '')

                                                @else
                                                    <h6> <span class="text-dk-red">Service Notes: &nbsp; </span>{{$maintenance->service_notes}}</h6>
                                                @endif

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



    @endsection


    @section('scripts')

    @endsection



</x-admin-master>
