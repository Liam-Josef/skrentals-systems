<x-admin-master>

    @section('styles')

    @endsection


        @foreach($applications as $application)

        @section('page_title')
            <h1>COC Stats</h1>
        @endsection

        @section('browser_title')
            <title>COC Stats | {{$application->name}}</title>
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
                <h1>COC Stats</h1>
            </div>
        </div>

       <!-- Stats -->
        <div class="row">


            <div class="col-12 col-sm-3">

                <!-- OLD -->
{{--                <div class="card shadow mt-3">--}}
{{--                    <div class="card-header">--}}
{{--                        <h4 class="text-center">Waiting on Customer</h4>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        @if($serviceBillCount)--}}
{{--                            <h1 class="text-red text-center">{{$serviceBillCount}}</h1>--}}
{{--                        @else--}}
{{--                            <h1 class="text-red text-center">0</h1>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="card shadow mt-3">
                    <div class="card-body text-center">
                        <h5 class="text-dark">New</h5>
                        @if($serviceNewCount)
                            <h3 class="text-dk-red">{{$serviceNewCount}}</h3>
                        @else
                            <h3 class="text-dk-red">0</h3>
                        @endif
                    </div>
                </div>

                @foreach($serviceNew as $rental)
                    <div class="card shadow mt-3">
                        <div class="card-body">
                            <a href="{{route('rental.show', $rental)}}" class="stat-link">
                                <div class="row">

                                    <div class="col-12">
                                        <img class="img-responsive" src="{{asset('storage/' . $rental->image_1)}}" height="auto" width="100%" />
                                    </div>
                                    <div class="col-12">
                                        <h3 class="mt-3">
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
                                                @foreach($vehicles as $vehicle)
                                                    @if($rental->coc_vehicle == $vehicle->id)
                                                        {{$vehicle->internal_vehicle_id}}
                                                    @endif
                                                @endforeach
                                        </h3>
                                        <h4>#{{$rental->invoice_number}} <span>| {{$rental->last_name}}</span></h4>
                                        <h5>{{$rental->coc_status}}</h5>
                                        <h4><span class="small">{{\Carbon\Carbon::parse($rental->activity_date)->format('M d, Y')}}</span></h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-12 col-sm-3">
                <div class="card shadow mt-3">
                    <div class="card-body text-center">
                        <h5 class="text-dark">In Service</h5>
                        @if($serviceInCount)
                            <h3 class="text-dk-red">{{$serviceInCount}}</h3>
                        @else
                            <h3 class="text-dk-red">0</h3>
                        @endif
                    </div>
                </div>

                @foreach($serviceService as $rental)
                    <div class="card shadow mt-3">
                        <div class="card-body">
                            <a href="{{route('rental.show', $rental)}}" class="stat-link">
                                <div class="row">

                                    <div class="col-12">
                                        <img class="img-responsive" src="{{asset('storage/' . $rental->image_1)}}" height="auto" width="100%" />
                                    </div>
                                    <div class="col-12">
                                        <h3 class="mt-3">
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
                                            @foreach($vehicles as $vehicle)
                                                @if($rental->coc_vehicle == $vehicle->id)
                                                    {{$vehicle->internal_vehicle_id}}
                                                @endif
                                            @endforeach
                                        </h3>
                                        <h4>#{{$rental->invoice_number}} <span>| {{$rental->last_name}}</span></h4>
                                        <h5>{{$rental->coc_status}}</h5>
                                        <h4><span class="small">{{\Carbon\Carbon::parse($rental->activity_date)->format('M d, Y')}}</span></h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-12 col-sm-3">
                <div class="card shadow mt-3">
                    <div class="card-body text-center">
                        <h5 class="text-dark">Invoice Submitted</h5>
                        @if($serviceInvAprCount)
                            <h3 class="text-dk-red">{{$serviceInvAprCount}}</h3>
                        @else
                            <h3 class="text-dk-red">0</h3>
                        @endif
                    </div>
                </div>

                @foreach($serviceInvApr as $rental)
                    <div class="card shadow mt-3">
                        <div class="card-body">
                            <a href="{{route('rental.show', $rental)}}" class="stat-link">
                                <div class="row">

                                    <div class="col-12">
                                        <img class="img-responsive" src="{{asset('storage/' . $rental->image_1)}}" height="auto" width="100%" />
                                    </div>
                                    <div class="col-12">
                                        <h3 class="mt-3">
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
                                            @foreach($vehicles as $vehicle)
                                                @if($rental->coc_vehicle == $vehicle->id)
                                                    {{$vehicle->internal_vehicle_id}}
                                                @endif
                                            @endforeach
                                        </h3>
                                        <h4>#{{$rental->invoice_number}} <span>| {{$rental->last_name}}</span></h4>
                                        <h5>{{$rental->coc_status}}</h5>
                                        <h4><span class="small">{{\Carbon\Carbon::parse($rental->activity_date)->format('M d, Y')}}</span></h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-12 col-sm-3">
                <div class="card shadow mt-3">
                    <div class="card-body text-center">
                        <h5 class="text-dark">Waiting on Customer</h5>
                        @if($serviceBillCount)
                            <h3 class="text-dk-red">{{$serviceBillCount}}</h3>
                        @else
                            <h3 class="text-dk-red">0</h3>
                        @endif
                    </div>
                </div>


                @foreach($serviceBill as $rental)
                    <div class="card shadow mt-3">
                        <div class="card-body">
                            <a href="{{route('rental.show', $rental)}}" class="stat-link">
                                <div class="row">

                                    <div class="col-12">
                                        <img class="img-responsive" src="{{asset('storage/' . $rental->image_1)}}" height="auto" width="100%" />
                                    </div>
                                    <div class="col-12">
                                        <h3 class="mt-3">
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
                                            @foreach($vehicles as $vehicle)
                                                @if($rental->coc_vehicle == $vehicle->id)
                                                    {{$vehicle->internal_vehicle_id}}
                                                @endif
                                            @endforeach
                                        </h3>
                                        <h4>#{{$rental->invoice_number}} <span>| {{$rental->last_name}}</span></h4>
                                        <h5>{{$rental->coc_status}}</h5>
                                        <h4><span class="small">{{\Carbon\Carbon::parse($rental->activity_date)->format('M d, Y')}}</span></h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        <!-- /Stats -->

    @endsection


    @section('scripts')

    @endsection



</x-admin-master>
