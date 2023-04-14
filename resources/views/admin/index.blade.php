<x-admin-master>

    @section('styles')

    @endsection


    @foreach($applications as $application)

        @section('browser_title')
            @if(!auth()->user()->userHasRole('Service'))
                <title>Admin Dashboard | {{$application->name}}</title>
            @elseif(auth()->user()->userHasRole('Service'))
                <title>Service Requests | {{$application->name}}</title>
            @endif
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
            @if(!auth()->user()->userHasRole('Service'))
                <h1>Admin Dashboard</h1>
            @elseif(auth()->user()->userHasRole('Service'))
                <h1>Service Requests</h1>
            @endif
        @endsection

        @section('admin_footer')
            <footer class="sticky-footer bg-dark">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>{{$application->name}} | Copyright &copy; {{Carbon\Carbon::now()->format('Y')}}</span>
                    </div>
                </div>
            </footer>
        @endsection

        @section('app_name')
            {{$application->name}}
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
        <h1 class="h3 mb-4 text-gray-800">Admin Dashboard</h1>
        <div class="row">
            <div class="col-md-8">

                <div class="row">
                    <div class="col-12 col-sm-3">
                        <div class="card shadow my-3">
                            <div class="card-header pl-0 pr-0">
                                <h6 class="text-center text-white mt-1">Employee's</h6>
                            </div>
                            <div class="card-body">
                                <h6 class="font-gray-500 text-center">Active</h6>
                                @if($activeEmp)
                                    <h2 class="text-dk-red text-center">{{$activeEmp}}</h2>
                                @else
                                    <h2 class="text-dk-red text-center">0</h2>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-3">
                        <div class="card shadow my-3">
                            <div class="card-header pl-0 pr-0">
                                <h6 class="text-center text-white mt-1">COC's</h6>
                            </div>
                            <div class="card-body">
                                <h6 class="font-gray-500 text-center">Active</h6>
                                @if($activeCoc)
                                    <h2 class="text-dk-red text-center">{{$activeCoc}}</h2>
                                @else
                                    <h2 class="text-dk-red text-center">0</h2>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-3">
                        <div class="card shadow my-3">
                            <div class="card-header pl-0 pr-0">
                                <h6 class="text-center text-white mt-1">Service <span class="hidden-sm-contents">Requests</span></h6>
                            </div>
                            <div class="card-body">
                                <h6 class="font-gray-500 text-center">Active</h6>
                                @if($activeService)
                                    <h2 class="text-dk-red text-center">{{$activeService}}</h2>
                                @else
                                    <h2 class="text-dk-red text-center">0</h2>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-3">
                        <div class="card shadow my-3">
                            <div class="card-header pl-0 pr-0">
                                <h6 class="text-center text-white mt-1">Rentals</h6>
                            </div>
                            <div class="card-body">
                                <h6 class="font-gray-500 text-center">Today</h6>
                                @if($activeRentals)
                                    <h2 class="text-dk-red text-center">{{$activeRentals}}</h2>
                                @else
                                    <h2 class="text-dk-red text-center">0</h2>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Service Requests TODO - Complete if statements for different buttons -->
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <h3><span>Service </span>Request Actions</h3>
                    </div>
                    <div class="card-body p-3">

                        <!-- Submit COC to Service - Rental -->
                        @if($serviceReqCocNewCount > 0)
                            @foreach($serviceReqCocNew as $rental)
                                <div class="coc-item">
                                    <a href="#" class="service-link" data-toggle="modal" data-target="#serviceModal{{$rental->id}}">
                                        <div class="row">
                                            <div class="col-8 col-sm-2">
                                                <h6 class="mt-2">
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
                                                        <br>

                                                    @endif
                                                    @foreach($vehicles as $vehicle)
                                                        @if($vehicle->id == $rental->coc_vehicle)
                                                            {{$vehicle->internal_vehicle_id}}
                                                        @endif
                                                    @endforeach
                                                </h6>
                                            </div>
                                            <div class="col-4 col-sm-2">
                                                <h6 class="mt-2 text-red">{{$rental->coc_status}}</h6>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <h6 class="coc-incident mt-2">{{$rental->incident}}</h6>
                                            </div>
                                            <div class="col-12 col-sm-2">
                                                <h6 class="mt-2 text-gray-500">COC</h6>
                                            </div>
                                            <div class="col-6 col-sm-2">
                                                @if($rental->status == 'COC' && $rental->coc_status == 'New')
                                                    <a href="#" class="btn btn-primary-red width-100 height-auto" data-toggle="modal" data-target="#serviceModal{{$rental->id}}">Intake</a>
                                                @elseif($rental->status == 'COC' && $rental->coc_status == 'Service')
                                                    <form method="post" action="{{route('coc.attachRental', $rental)}}" enctype="multipart/form-data">
                                                        @method('PUT')
                                                        @csrf
                                                        <input type="hidden" name="rental" value="{{$rental->id}}">
                                                        <input type="hidden" class="form-control" name="image" value="{{$rental->image_1}}" accept="image/*">
                                                        <input type="hidden" name="maintenance" value="
                                                        @foreach($maintenances as $maintenance)
                                                        @if($maintenance->rental_invoice == $rental->invoice_number)
                                                        {{$maintenance->id}}
                                                        @endif
                                                        @endforeach
                                                            ">

                                                        <button class="btn btn-primary-red width-100 height-auto"
                                                                @foreach($rental->maintenances as $rental_maintenance)
                                                                {{$rental_maintenance->rental_id}}
                                                                @if($rental_maintenance->rental_invoice == $rental->invoice_number)
                                                                hidden
                                                            @endif
                                                            @endforeach
                                                        >Submit</button>
                                                    </form>
                                                @endif
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <!-- Service Modal -->
                                <div class="modal fade" id="serviceModal{{$rental->id}}" tabindex="-1" role="dialog" aria-labelledby="cocIntake" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3><span>Rental COC - #{{$rental->invoice_number}}</span> |
                                                    @foreach($vehicles as $vehicle)
                                                        @if($rental->coc_vehicle == $vehicle->id)
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
                                                                <br>

                                                            @endif
                                                            {{$vehicle->internal_vehicle_id}}
                                                        @endif
                                                    @endforeach
                                                    | <span> New</span>
                                                </h3>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <img class="img-responsive" src="{{asset('storage/' . $rental->image_1)}}" height="auto" width="100%" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <h6> <span class="text-white">Status: &nbsp; </span>{{$rental->coc_status}}</h6>
                                                        <h6> <span class="text-white">Rental Date: &nbsp; </span>{{Carbon\Carbon::parse($rental->activity_date)->format('m / d / y')}}</h6>
                                                        <h6> <span class="text-white">Rental Invoice #: &nbsp; </span>{{$rental->invoice_number}}</h6>
                                                        <h6> <span class="text-white">Found By: &nbsp; </span>
                                                            @foreach($users as $user)
                                                                @if($rental->cleared_by == $user->id)
                                                                    {{$user->firstname}} {{$user->lastname}}
                                                                @endif
                                                            @endforeach
                                                        </h6>
                                                        @foreach($vehicles as $vehicle)
                                                            @if($rental->coc_vehicle == $vehicle->id)
                                                                <h6>
                                                                    <span class="text-white">Vehicle: &nbsp; </span>
                                                                    {{$vehicle->vehicle_type}}
                                                                    {{$vehicle->internal_vehicle_id}}
                                                                </h6>
                                                                <h6>
                                                                    <span class="text-white">VIN: &nbsp; </span>
                                                                    {{$vehicle->vin}}
                                                                </h6>
                                                                <h6>
                                                                    <span class="text-white">HOURS: &nbsp; </span>
                                                                    {{$vehicle->current_hours}}
                                                                </h6>
                                                            @endif
                                                        @endforeach
                                                        <h6> <span class="text-white">Description: &nbsp; </span>{{$rental->incident}}</h6>

                                                        <div class="row mt-5">
                                                            <div class="col-12">
                                                                @if($rental->coc_status == 'New')
                                                                    <form action="{{route('coc.intakeCoc', $rental->id)}}" method="post" class="width-100" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="row">
                                                                            <div class="col-6">
                                                                                <textarea name="description" id="description" cols="30" rows="5">{{$rental->incident}}</textarea>
                                                                            </div>
                                                                            <div class="col-6">

                                                                                <input type="file" class="form-control mb-3" name="image_1" id="image_1" value="{{$rental->image_1}}" />

                                                                                <div class="form-group">
                                                                                    <label for="last_four">Last 4 of Card(s) <em>- Required *</em></label>
                                                                                    <input type="text" name="last_four" class="form-control mb-3" placeholder="Last 4 of CC">
                                                                                </div>




                                                                                <div class="row mt-5">
                                                                                    <div class="form-group width-100">
                                                                                        <input type="hidden" class="form-group" name="vehicle_type" value="{{$rental->activity_item}}"/>
                                                                                        <input type="hidden" class="form-group" name="internal_vehicle_id" value="
                                                                                    @foreach($rental->vehicles as $rental_vehicle)
                                                                                        @if($rental->coc_vehicle == $rental_vehicle->id)
                                                                                        {{$rental_vehicle->internal_vehicle_id}}
                                                                                        @endif
                                                                                        @endforeach
                                                                                            "/>
                                                                                        <input type="hidden" class="form-control" name="coc_status" value="Service">
                                                                                        <input type="hidden" class="form-control" name="status" value="Created">
                                                                                        <input type="hidden" class="form-control" name="rental_invoice" value="{{$rental->invoice_number}}">
                                                                                        @if(Auth::check())
                                                                                            <input type="hidden" value="{{auth()->user()->id}}" name="submitted_by">
                                                                                        @endif
                                                                                        <input type="hidden" value="{{$dateNow}}" name="date_submitted">
                                                                                        <input type="hidden" class="form-control" name="rental_id" value="{{$rental->id}}">
                                                                                        {{--                                                    <input type="hidden" class="form-control" name="image" value="coc-images/{{$rental->image_1}}">--}}
                                                                                        <input type="hidden" class="form-control" name="maint_active" value="1">
                                                                                        <input type="hidden" class="form-control" name="service_type" value="COC">
                                                                                        <input type="hidden" class="form-control" name="current_hours" value="
                                                                                        @foreach($rental->vehicles as $rental_vehicle)
                                                                                            @if($rental->coc_vehicle == $rental_vehicle->id)
                                                                                            {{$rental_vehicle->current_hours}}
                                                                                            @endif
                                                                                        @endforeach
                                                                                        ">
                                                                                        <input type="hidden" class="form-control" name="vehicle_id" value="
                                                                                      @foreach($rental->vehicles as $rental_vehicle)
                                                                                        @if($rental->coc_vehicle == $rental_vehicle->id)
                                                                                        {{$rental_vehicle->id}}
                                                                                        @endif
                                                                                        @endforeach
                                                                                            ">
                                                                                        <div class="row">
                                                                                            <div class="col-12">

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <div class="row mt-2">
                                                                                {{--                                                                        TODO - QuickBooks - COC - Create Customer Invoice--}}
                                                                                <form action="" method="post" class="width-100">
                                                                                    @csrf
                                                                                    @method('PUT')

                                                                                    <div class="form-group">
                                                                                        <label for="" class="hidden"></label>
                                                                                        <input type="hidden" class="form-group" name=""/>
                                                                                        <button class="btn btn-outline-primary btn-right width-100 mr-3" type="submit">Create Customer Invoice</button>
                                                                                    </div>
                                                                                </form>
                                                                                <button class="btn btn-primary width-100 btn-right" type="submit">Send to Service</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                @elseif($rental->status == 'Billing')
                                                                    <form action="{{route('coc.cocComplete', $rental)}}" method="post" class="width-100">
                                                                        @csrf
                                                                        @method('PUT')

                                                                        <div class="form-group width-100">
                                                                            <label for="" class="hidden"></label>
                                                                            <input type="hidden" class="form-group" name=""/>
                                                                            <button class="btn btn-primary width-100" type="submit">Create Customer Invoice</button>
                                                                        </div>
                                                                    </form>
                                                                @endif
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancel </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Service Modal -->
                            @endforeach
                        @endif
                        <!-- /Submit COC to Service - Rental -->

                        <!-- Finalize Submit COC to Service - Rental -->
                        @if($serviceReqCocServCount > 0)
                            @foreach($serviceReqCocServ as $rental)
                                <div class="coc-item
                                     @foreach($rental->maintenances as $rental_maintenance)
                                {{$rental_maintenance->rental_id}}
                                @if($rental_maintenance->rental_invoice == $rental->invoice_number)
                                    hidden
@endif
                                @endforeach
                                    ">
                                    <a href="#" class="service-link" data-toggle="modal" data-target="#serviceModal{{$rental->id}}">
                                        <div class="row">
                                            <div class="col-8 col-sm-2">
                                                <h6 class="mt-2">
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
                                                        <br>

                                                    @endif
                                                    @foreach($vehicles as $vehicle)
                                                        @if($vehicle->id == $rental->coc_vehicle)
                                                            {{$vehicle->internal_vehicle_id}}
                                                        @endif
                                                    @endforeach
                                                </h6>
                                            </div>

                                            <div class="col-4 col-sm-2">
                                                <h6 class="mt-2 text-red">{{$rental->coc_status}}</h6>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <h6 class="coc-incident mt-2">{{$rental->incident}}</h6>
                                            </div>

                                            <div class="col-12 col-sm-2">
                                                @foreach($maintenances as $maintenance)
                                                    @if($rental->invoice_number == $maintenance->rental_invoice)
                                                        <h6 class="mt-2 text-gray-500">{{$maintenance->service_type}}</h6>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <div class="col-6 col-sm-2">
                                                {{--                                            TODO - Creat Maintenance profile--}}
                                                @if($rental->status == 'COC' && $rental->coc_status == 'New')
                                                    <a href="#" class="btn btn-primary width-100 height-auto" data-toggle="modal" data-target="#serviceModal{{$rental->id}}">Intake</a>
                                                @elseif($rental->status == 'COC' && $rental->coc_status == 'Service')
                                                    <form method="post" action="{{route('coc.attachRental', $rental)}}" enctype="multipart/form-data">
                                                        @method('PUT')
                                                        @csrf
                                                        <input type="hidden" name="rental" value="{{$rental->id}}">
                                                        <input type="hidden" class="form-control" name="image" value="{{$rental->image_1}}" accept="image/*">
                                                        <input type="hidden" name="maintenance" value="
                                                                       @foreach($maintenances as $maintenance)
                                                        @if($maintenance->rental_invoice == $rental->invoice_number)
                                                        {{$maintenance->id}}
                                                        @endif
                                                        @endforeach
                                                            ">

                                                        <button class="btn btn-primary-red width-100 height-auto"
                                                                @foreach($rental->maintenances as $rental_maintenance)
                                                                {{$rental_maintenance->rental_id}}
                                                                @if($rental_maintenance->rental_invoice == $rental->invoice_number)
                                                                hidden
                                                            @endif
                                                            @endforeach
                                                        >Submit</button>
                                                    </form>
                                                @elseif($rental->status == 'COC' && $rental->coc_status == 'Billing')
                                                    <a href="#" class="btn btn-primary width-100 height-auto" data-toggle="modal" data-target="#serviceModal{{$rental->id}}">Billing</a>
                                                @endif
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <!-- Service Modal -->
                                <div class="modal fade" id="serviceModal{{$rental->id}}" tabindex="-1" role="dialog" aria-labelledby="cocIntake" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3><span>Rental COC - #{{$rental->invoice_number}}</span> |
                                                    @foreach($vehicles as $vehicle)
                                                        @if($rental->coc_vehicle == $vehicle->id)
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
                                                                <br>

                                                            @endif
                                                            {{$vehicle->internal_vehicle_id}}
                                                        @endif
                                                    @endforeach
                                                    | <span> New</span>
                                                </h3>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <img class="img-responsive" src="{{asset('storage/' . $rental->image_1)}}" height="auto" width="100%" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <h6> <span class="text-white">Status: &nbsp; </span>{{$rental->coc_status}}</h6>
                                                        <h6> <span class="text-white">Rental Date: &nbsp; </span>{{Carbon\Carbon::parse($rental->activity_date)->format('m / d / y')}}</h6>
                                                        <h6> <span class="text-white">Rental Invoice #: &nbsp; </span>{{$rental->invoice_number}}</h6>
                                                        <h6> <span class="text-white">Found By: &nbsp; </span>
                                                            @foreach($users as $user)
                                                                @if($rental->cleared_by == $user->id)
                                                                    {{$user->firstname}} {{$user->lastname}}
                                                                @endif
                                                            @endforeach
                                                        </h6>
                                                        @foreach($vehicles as $vehicle)
                                                            @if($rental->coc_vehicle == $vehicle->id)
                                                                <h6>
                                                                    <span class="text-white">Vehicle: &nbsp; </span>
                                                                    {{$vehicle->vehicle_type}}
                                                                    {{$vehicle->internal_vehicle_id}}
                                                                </h6>
                                                                <h6>
                                                                    <span class="text-white">VIN: &nbsp; </span>
                                                                    {{$vehicle->vin}}
                                                                </h6>
                                                                <h6>
                                                                    <span class="text-white">HOURS: &nbsp; </span>
                                                                    {{$vehicle->current_hours}}
                                                                </h6>
                                                            @endif
                                                        @endforeach
                                                        <h6> <span class="text-white">Description: &nbsp; </span>{{$rental->incident}}</h6>

                                                        <div class="row mt-5">
                                                            <div class="col-12">
                                                                @if($rental->coc_status == 'New')
                                                                    <form action="{{route('coc.intakeCoc', $rental->id)}}" method="post" class="width-100" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="row">
                                                                            <div class="col-6">
                                                                                <textarea name="description" id="description" cols="30" rows="5">{{$rental->incident}}</textarea>
                                                                            </div>
                                                                            <div class="col-6">

                                                                                <input type="file" class="form-control mb-3" name="image_1" id="image_1" value="{{$rental->image_1}}" />

                                                                                <div class="form-group">
                                                                                    <label for="last_four">Last 4 of Card(s) <em>- Required *</em></label>
                                                                                    <input type="text" name="last_four" class="form-control mb-3" placeholder="Last 4 of CC">
                                                                                </div>




                                                                                <div class="row mt-5">
                                                                                    <div class="form-group width-100">
                                                                                        <input type="hidden" class="form-group" name="vehicle_type" value="{{$rental->activity_item}}"/>
                                                                                        <input type="hidden" class="form-group" name="internal_vehicle_id" value="
                                                                                    @foreach($rental->vehicles as $rental_vehicle)
                                                                                        @if($rental->coc_vehicle == $rental_vehicle->id)
                                                                                        {{$rental_vehicle->internal_vehicle_id}}
                                                                                        @endif
                                                                                        @endforeach
                                                                                            "/>
                                                                                        <input type="hidden" class="form-control" name="coc_status" value="Service">
                                                                                        <input type="hidden" class="form-control" name="status" value="Created">
                                                                                        <input type="hidden" class="form-control" name="rental_invoice" value="{{$rental->invoice_number}}">
                                                                                        @if(Auth::check())
                                                                                            <input type="hidden" value="{{auth()->user()->id}}" name="submitted_by">
                                                                                        @endif
                                                                                        <input type="hidden" value="{{$dateNow}}" name="date_submitted">
                                                                                        <input type="hidden" class="form-control" name="rental_id" value="{{$rental->id}}">
                                                                                        {{--                                                    <input type="hidden" class="form-control" name="image" value="coc-images/{{$rental->image_1}}">--}}
                                                                                        <input type="hidden" class="form-control" name="maint_active" value="1">
                                                                                        <input type="hidden" class="form-control" name="service_type" value="COC">
                                                                                        <input type="hidden" class="form-control" name="current_hours" value="
                                                                                        @foreach($rental->vehicles as $rental_vehicle)
                                                                                        @if($rental->coc_vehicle == $rental_vehicle->id)
                                                                                        {{$rental_vehicle->current_hours}}
                                                                                        @endif
                                                                                        @endforeach
                                                                                            ">
                                                                                        <input type="hidden" class="form-control" name="vehicle_id" value="
                                                                                      @foreach($rental->vehicles as $rental_vehicle)
                                                                                        @if($rental->coc_vehicle == $rental_vehicle->id)
                                                                                        {{$rental_vehicle->id}}
                                                                                        @endif
                                                                                        @endforeach
                                                                                            ">
                                                                                        <div class="row">
                                                                                            <div class="col-12">

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <div class="row mt-2">
                                                                                {{--                                                                        TODO - QuickBooks - COC - Create Customer Invoice--}}
                                                                                <form action="" method="post" class="width-100">
                                                                                    @csrf
                                                                                    @method('PUT')

                                                                                    <div class="form-group">
                                                                                        <label for="" class="hidden"></label>
                                                                                        <input type="hidden" class="form-group" name=""/>
                                                                                        <button class="btn btn-outline-primary btn-right width-100 mr-3" type="submit">Create Customer Invoice</button>
                                                                                    </div>
                                                                                </form>
                                                                                <button class="btn btn-primary width-100 btn-right" type="submit">Send to Service</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                @elseif($rental->status == 'Billing')
                                                                    <form action="{{route('coc.cocComplete', $rental)}}" method="post" class="width-100">
                                                                        @csrf
                                                                        @method('PUT')

                                                                        <div class="form-group width-100">
                                                                            <label for="" class="hidden"></label>
                                                                            <input type="hidden" class="form-group" name=""/>
                                                                            <button class="btn btn-primary width-100" type="submit">Create Customer Invoice</button>
                                                                        </div>
                                                                    </form>
                                                                @endif
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary btn-right btn-modal" data-dismiss="modal" aria-label="Close">Cancel </button>
                                                <form method="post" action="{{route('coc.attachRental', $rental)}}" enctype="multipart/form-data">
                                                    @method('PUT')
                                                    @csrf
                                                    <input type="hidden" name="rental" value="{{$rental->id}}">
                                                    <input type="hidden" class="form-control" name="image" value="{{$rental->image_1}}" accept="image/*">
                                                    <input type="hidden" name="maintenance" value="
                                                                       @foreach($maintenances as $maintenance)
                                                    @if($maintenance->rental_invoice == $rental->invoice_number)
                                                    {{$maintenance->id}}
                                                    @endif
                                                    @endforeach
                                                        ">

                                                    <button class="btn btn-primary-red width-100 btn-right"
                                                            @foreach($rental->maintenances as $rental_maintenance)
                                                            {{$rental_maintenance->rental_id}}
                                                            @if($rental_maintenance->rental_invoice == $rental->invoice_number)
                                                            hidden
                                                        @endif
                                                        @endforeach
                                                    >Submit to Service</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Service Modal -->
                            @endforeach
                        @endif
                        <!-- /Finalize Submit COC to Service - Rental -->

                        <!-- Submit Request to Service - Maintenance -->
                        @if($serviceReqAcceptCount > 0)
                            @foreach($serviceReqAccept as $maintenance)
                                <div class="coc-item">
                                    <div class="row">
                                        <a href="#" class="service-link" data-toggle="modal" data-target="#repairModal{{$maintenance->id}}">
                                            <div class="col-8 col-sm-2">
                                                <h6 class="mt-2">
                                                    @if($maintenance->vehicle_type == 'Scarab 215')
                                                        Scarab
                                                    @elseif($maintenance->vehicle_type == '23ft. Pontoon Boat')
                                                        Pontoon
                                                    @elseif($maintenance->vehicle_type == '23ft. Pontoon Boat')
                                                        Pontoon
                                                    @elseif($maintenance->vehicle_type == 'Renegade BC 600ETec')
                                                        Renegade
                                                    @elseif($maintenance->vehicle_type == 'Summit 154 SP')
                                                        Summit
                                                    @elseif($maintenance->vehicle_type == '14ft. Aluminum Boat')
                                                        Aluminum
                                                    @elseif($maintenance->vehicle_type == 'Kayak Single')
                                                        Single Kayak
                                                    @elseif($maintenance->vehicle_type == 'Double Kayak')
                                                        Double Kayak
                                                    @elseif($maintenance->vehicle_type == 'Stand Up Paddleboard')
                                                        SUP
                                                    @elseif($maintenance->vehicle_type == 'Segway i2')
                                                        Segway
                                                    @elseif($maintenance->vehicle_type == 'Spyder RT-S SE6')
                                                        Spyder
                                                    @elseif($maintenance->vehicle_type == 'SeaDoo')
                                                        SeaDoo
                                                    @else
                                                        <br>
                                                        {{$maintenance->vehicle_type}}

                                                    @endif
                                                    @foreach($vehicles as $vehicle)
                                                        @if($vehicle->id == $maintenance->vehicle_id)
                                                            {{$vehicle->internal_vehicle_id}}
                                                        @endif
                                                    @endforeach
                                                </h6>
                                            </div>
                                            <div class="col-4 col-sm-2">
                                                <h6 class="mt-2 text-red">{{$maintenance->status}}</h6>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <h6 class="coc-incident mt-2">{{$maintenance->description}}</h6>
                                            </div>
                                            <div class="col-12 col-sm-2">
                                                <h6 class="mt-2 text-gray-500">{{$maintenance->service_type}}</h6>
                                            </div>
                                            <div class="col-6 col-sm-2">
                                                <a href="#" class="btn btn-primary-red width-100 height-auto" data-toggle="modal" data-target="#repairModal{{$maintenance->id}}">Submit</a>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <!-- Submit Service Req Modal -->
                                <div class="modal fade" id="repairModal{{$maintenance->id}}" tabindex="-1" role="dialog" aria-labelledby="viewInvoice" aria-hidden="true">
                                    <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h3>Submit <span>Service Request</span></h3>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        @if($maintenance->image == '')
                                                            <img src="{{asset('storage/' . 'images/no-image.jpg')}}" alt="Service Request Image" class="img-responsive">
                                                        @else
                                                            <img src="{{asset('storage/' . $maintenance->image)}}" alt="Service Request Image" class="img-responsive">
                                                        @endif
                                                    </div>
                                                    <div class="col-6">
                                                        <h6> <span class="text-white">Descripion: &nbsp; </span>{{$maintenance->description}}</h6>
                                                        <h6> <span class="text-white">Submitted By: &nbsp; </span>
                                                            @foreach($users as $user)
                                                                @if($user->id == $maintenance->submitted_by)
                                                                    {{$user->firstname}} {{$user->lastname}}
                                                                @endif
                                                            @endforeach
                                                        </h6>
                                                        <h6> <span class="text-white">Submitted Date: &nbsp; </span>{{Carbon\Carbon::parse($maintenance->date_sumitted)->format('m / d / y')}}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary btn-right btn-modal" type="button" data-dismiss="modal">CANCEL</button>
                                                <form action="{{route('maintenance.submitServiceReqAdmin', $maintenance)}}" method="post" class="width-100" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="form-group width-100">
                                                        <input type="hidden" class="form-group" name="submitted_by" value="{{auth()->user()->id}}"/>
                                                        <input type="hidden" class="form-group" name="date_submitted" value="{{$dateNow}}"/>
                                                        <input type="hidden" class="form-group" name="image" value="images/rentalLogo_new_square-m.png"/>
                                                        <input type="hidden" class="form-control" name="vehicle_id" value="{{$maintenance->vehicle_id}}">
                                                        <input type="hidden" class="form-control" name="is_active" value="1">
                                                        @foreach($vehicles as $vehicle)
                                                            @if($maintenance->vehicle_id == $vehicle->id)
                                                                <input type="hidden" class="form-control" name="internal_vehicle_id" value="{{$vehicle->internal_vehicle_id}}">
                                                            @endif
                                                        @endforeach
                                                        <button class="btn btn-primary-red btn-right" type="submit">Submit to Service</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Submit Service Req Modal -->
                            @endforeach
                        @endif
                        <!-- /Submit Request to Service - Maintenance -->

                        <!-- Finalize Billing - Rental -->
                        @if($serviceReqCocBillingCount > 0)
                            @foreach($serviceReqCocBilling as $rental)
                                <div class="coc-item">
                                    <div class="row">
                                        <a href="#" class="service-link" data-toggle="modal" data-target="#billingModal{{$rental->id}}">
                                            <div class="col-8 col-sm-2">
                                                <h6 class="mt-2">
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
                                                        <br>

                                                    @endif
                                                    @foreach($vehicles as $vehicle)
                                                        @if($vehicle->id == $rental->coc_vehicle)
                                                            {{$vehicle->internal_vehicle_id}}
                                                        @endif
                                                    @endforeach
                                                </h6>
                                            </div>

                                            <div class="col-4 col-sm-2">
                                                <h6 class="mt-2 text-red">{{$rental->coc_status}}</h6>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <h6 class="coc-incident mt-2">{{$rental->incident}}</h6>
                                            </div>
                                            <div class="col-12 col-sm-2">
                                                @foreach($maintenances as $maintenance)
                                                    @if($rental->invoice_number == $maintenance->rental_invoice)
                                                        <h6 class="mt-2 text-gray-500">{{$maintenance->service_type}}</h6>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <div class="col-6 col-sm-2">
                                                @if($rental->status == 'COC' && $rental->coc_status == 'Billing')
                                                    <a href="#" class="btn btn-primary width-100 height-auto" data-toggle="modal" data-target="#billingModal{{$rental->id}}">Billing</a>
                                                @endif
                                            </div>
                                        </a>
                                    </div>
                                </div>


                                <!-- Billing Modal -->
                                <div class="modal fade" id="billingModal{{$rental->id}}" tabindex="-1" role="dialog" aria-labelledby="viewInvoice" aria-hidden="true">
                                    <div class="modal-dialog modal-xl" role="document">
                                        @foreach($maintenances as $maintenance)
                                            @if($maintenance->rental_invoice == $rental->invoice_number)
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3><span>Service Invoice: </span>{{$rental->incident}}</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                @if($rental->coc_image == '')
                                                                    <img src="{{asset('storage/' . 'images/no-image.jpg')}}" alt="Service Request Image" class="img-responsive">
                                                                @else
                                                                    <img src="{{asset('storage/' . $rental->coc_image)}}" alt="Service Request Image" class="img-responsive">
                                                                @endif
                                                            </div>
                                                            <div class="col-6">
        {{--                                                        @foreach($maintenances as $maintenance)--}}
        {{--                                                            @if($maintenance->rental_invoice == $rental->invoice_number)--}}
                                                                        @foreach($vehicles as $vehicle)
                                                                            @if($maintenance->vehicle_id == $vehicle->id)
                                                                                <h6>
                                                                                    <span class="text-white">Vehicle: &nbsp; </span>
                                                                                    {{$vehicle->vehicle_type}}
                                                                                    {{$vehicle->internal_vehicle_id}}
                                                                                </h6>
                                                                                <h6>
                                                                                    <span class="text-white">VIN: &nbsp; </span>
                                                                                    {{$vehicle->vin}}
                                                                                </h6>
                                                                                <h6>
                                                                                    <span class="text-white">HOURS: &nbsp; </span>
                                                                                    {{$vehicle->current_hours}}
                                                                                </h6>
                                                                            @endif
                                                                        @endforeach
                                                                        <h6> <span class="text-white">Descripion: &nbsp; </span>{{$maintenance->description}}</h6>
                                                                        <h6> <span class="text-white">Service Invoice #: &nbsp; </span>{{$maintenance->service_invoice}}</h6>
                                                                        <h6> <span class="text-white">Submitted By: &nbsp; </span>
                                                                            @foreach($users as $user)
                                                                                @if($user->id == $maintenance->submitted_by)
                                                                                    {{$user->firstname}} {{$user->lastname}}
                                                                                @endif
                                                                            @endforeach
                                                                        </h6>
                                                                        <h6> <span class="text-white">Date Submitted: &nbsp; </span>{{Carbon\Carbon::parse($maintenance->date_sumitted)->format('m / d / y')}}</h6>
                                                                        @if($maintenance->invoiced_by == '')

                                                                        @else
                                                                            <h6> <span class="text-white">Invoiced By: &nbsp; </span>
                                                                                @foreach($users as $user)
                                                                                    @if($user->id == $maintenance->invoiced_by)
                                                                                        {{$user->firstname}} {{$user->lastname}}
                                                                                    @endif
                                                                                @endforeach
                                                                            </h6>
                                                                            <h6> <span class="text-white">Invoice Submitted: &nbsp; </span>{{Carbon\Carbon::parse($maintenance->date_invoiced)->format('m / d / y')}}</h6>
                                                                        @endif

                                                                        @if($maintenance->approved_by == '')

                                                                        @else
                                                                            <h6> <span class="text-white">Approved Invoice: &nbsp; </span>
                                                                                @foreach($users as $user)
                                                                                    @if($user->id == $maintenance->approved_by)
                                                                                        {{$user->firstname}} {{$user->lastname}}
                                                                                    @endif
                                                                                @endforeach
                                                                            </h6>
                                                                            <h6> <span class="text-white">Invoice Submitted: &nbsp; </span>{{Carbon\Carbon::parse($maintenance->date_invoiced)->format('m / d / y')}}</h6>
                                                                        @endif

                                                            </div>
                                                        </div>
                                                        <div class="row mt-5">
                                                            <iframe src="{{asset('storage/' . $maintenance->invoice)}}" style="width: 100%;height: 800px;border: none;"></iframe>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary btn-right btn-modal" type="button" data-dismiss="modal">CANCEL</button>
                                                        <form action="{{route('maintenance.acceptMaintInvoice', $maintenance)}}" method="post" class="width-100" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')

                                                            <div class="form-group width-100">
                                                                <input type="hidden" class="form-group" name="approved_by" value="{{auth()->user()->id}}"/>
                                                                <input type="hidden" class="form-group" name="date_approved" value="{{$dateNow}}"/>
                                                                <input type="hidden" class="form-group" name="status" value="Completed"/>
                                                                <button class="btn btn-primary btn-modal btn-right" type="submit">Accept Invoice & Close</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <!-- /Billing Modal -->
                            @endforeach
                        @endif
                        <!-- /Finalize Billing - Rental -->


                        <!-- Finalize Billing - Maintenance -->
                        @if($serviceReqInvoiceCount > 0)
                            @foreach($serviceReqInvoice as $maintenance)
                                <div class="coc-item">
                                    <div class="row">
                                        <a href="#" class="service-link" data-toggle="modal" data-target="#viewInvoice{{$maintenance->id}}">
                                            <div class="col-8 col-sm-2">
                                                <h6 class="mt-2">
                                                    @if($maintenance->vehicle_type == 'Scarab 215')
                                                        Scarab
                                                    @elseif($maintenance->vehicle_type == '23ft. Pontoon Boat')
                                                        Pontoon
                                                    @elseif($maintenance->vehicle_type == '23ft. Pontoon Boat')
                                                        Pontoon
                                                    @elseif($maintenance->vehicle_type == 'Renegade BC 600ETec')
                                                        Renegade
                                                    @elseif($maintenance->vehicle_type == 'Summit 154 SP')
                                                        Summit
                                                    @elseif($maintenance->vehicle_type == '14ft. Aluminum Boat')
                                                        Aluminum
                                                    @elseif($maintenance->vehicle_type == 'Kayak Single')
                                                        Single Kayak
                                                    @elseif($maintenance->vehicle_type == 'Double Kayak')
                                                        Double Kayak
                                                    @elseif($maintenance->vehicle_type == 'Stand Up Paddleboard')
                                                        SUP
                                                    @elseif($maintenance->vehicle_type == 'Segway i2')
                                                        Segway
                                                    @elseif($maintenance->vehicle_type == 'Spyder RT-S SE6')
                                                        Spyder
                                                    @elseif($maintenance->vehicle_type == 'SeaDoo')
                                                        SeaDoo
                                                    @else
                                                        <br>
                                                        {{$maintenance->vehicle_type}}

                                                    @endif
                                                    @foreach($vehicles as $vehicle)
                                                        @if($vehicle->id == $maintenance->vehicle_id)
                                                            {{$vehicle->internal_vehicle_id}}
                                                        @endif
                                                    @endforeach
                                                </h6>
                                            </div>
                                            <div class="col-4 col-sm-2">
                                                <h6 class="mt-2 text-red">{{$maintenance->status}}</h6>
                                            </div>
                                            <div class="col-12 col-sm-4">
                                                <h6 class="coc-incident mt-2">{{$maintenance->description}}</h6>
                                            </div>
                                            <div class="col-12 col-sm-2">
                                                <h6 class="mt-2 text-gray-500">{{$maintenance->service_type}}</h6>
                                            </div>
                                        </a>
                                        <div class="col-6 col-sm-2">
                                            {{--                                            TODO - Maintenance Invoice Button--}}
                                            <a href="#" class="btn btn-primary-red width-100 height-auto" data-toggle="modal" data-target="#viewInvoice{{$maintenance->id}}">Invoice</a>
                                        </div>
                                    </div>
                                </div>


                                <!-- Invoice Modal -->
                                <div class="modal fade" id="viewInvoice{{$maintenance->id}}" tabindex="-1" role="dialog" aria-labelledby="viewInvoice" aria-hidden="true">
                                    <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3><span>Service Invoice: </span>{{$maintenance->service_type}}</h3>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        @if($maintenance->image == '')
                                                            <img src="{{asset('storage/' . 'images/no-image.jpg')}}" alt="Service Request Image" class="img-responsive">
                                                        @else
                                                            <img src="{{asset('storage/' . $maintenance->image)}}" alt="Service Request Image" class="img-responsive">
                                                        @endif
                                                    </div>
                                                    <div class="col-6">


                                                            @foreach($vehicles as $vehicle)
                                                                @if($maintenance->vehicle_id == $vehicle->id)
                                                                <h6>
                                                                    <span class="text-white">Vehicle: &nbsp; </span>
                                                                    {{$vehicle->vehicle_type}}
                                                                    {{$vehicle->internal_vehicle_id}}
                                                                </h6>
                                                                @endif
                                                            @endforeach
                                                        <h6> <span class="text-white">Descripion: &nbsp; </span>{{$maintenance->description}}</h6>
                                                        <h6> <span class="text-white">Service Invoice #: &nbsp; </span>{{$maintenance->service_invoice}}</h6>
                                                        <h6> <span class="text-white">Submitted By: &nbsp; </span>
                                                            @foreach($users as $user)
                                                                @if($user->id == $maintenance->submitted_by)
                                                                    {{$user->firstname}} {{$user->lastname}}
                                                                @endif
                                                            @endforeach
                                                        </h6>
                                                        <h6> <span class="text-white">Date Submitted: &nbsp; </span>{{Carbon\Carbon::parse($maintenance->date_sumitted)->format('m / d / y')}}</h6>
                                                        @if($maintenance->invoiced_by == '')

                                                                @else
                                                                    <h6> <span class="text-white">Invoiced By: &nbsp; </span>
                                                                        @foreach($users as $user)
                                                                            @if($user->id == $maintenance->invoiced_by)
                                                                                {{$user->firstname}} {{$user->lastname}}
                                                                            @endif
                                                                        @endforeach
                                                                    </h6>
                                                                    <h6> <span class="text-white">Invoice Submitted: &nbsp; </span>{{Carbon\Carbon::parse($maintenance->date_invoiced)->format('m / d / y')}}</h6>
                                                        @endif

                                                        @if($maintenance->service_notes == '')

                                                        @else
                                                            <h6> <span class="text-white">Service Notes: &nbsp; </span> </h6>
                                                            <h6> {{$maintenance->service_notes}}</h6>
                                                        @endif

                                                        @if($maintenance->approved_by == '')

                                                        @else
                                                            <h6> <span class="text-white">Approved Invoice: &nbsp; </span>
                                                                @foreach($users as $user)
                                                                    @if($user->id == $maintenance->approved_by)
                                                                        {{$user->firstname}} {{$user->lastname}}
                                                                    @endif
                                                                @endforeach
                                                            </h6>
                                                            <h6> <span class="text-white">Invoice Submitted: &nbsp; </span>{{Carbon\Carbon::parse($maintenance->date_invoiced)->format('m / d / y')}}</h6>
                                                        @endif

                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <iframe src="{{asset('storage/' . $maintenance->invoice)}}" style="width: 100%;height: 800px;border: none;"></iframe>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary btn-right btn-modal" type="button" data-dismiss="modal">CANCEL</button>
                                                <form action="{{route('maintenance.acceptMaintInvoice', $maintenance)}}" method="post" class="width-100" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="form-group width-100">
                                                        <input type="hidden" class="form-group" name="approved_by" value="{{auth()->user()->id}}"/>
                                                        <input type="hidden" class="form-group" name="date_approved" value="{{$dateNow}}"/>
                                                        <input type="hidden" class="form-group" name="status" value="Completed"/>
                                                        <button class="btn btn-primary btn-modal btn-right" type="submit">Accept Invoice & Close</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Invoice Modal -->
                            @endforeach
                        @endif
                        <!-- /Finalize Billing - Maintenance -->

                        @if(!$serviceReqCocNewCount && !$serviceReqCocBillingCount && !$serviceReqCocServCount && !$serviceReqInvoiceCount)
                            <h1 class="text-center text-gray">All Service Requests are Complete</h1>
                        @endif




                    </div>
                </div>
                <!-- /Service Requests -->

            </div>
            <div class="col-md-4">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <h3>Submit <span>Service Request</span></h3>
                    </div>
                    <div class="card-body">

                            <div class="row">
                                <div class="col-12">
                                    <!-- Vehicle List -->
                                    <ul class="nav nav-tabs nav-justified mb-3 dock-depart sidebar-tab-list" id="runnerView" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="view-seadoo-tab" data-toggle="tab" href="#seadoo-tab" role="tab" aria-controls="seadoo-tab"
                                               aria-selected="true">
                                                SeaDoo
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="view-pontoon-tab" data-toggle="tab" href="#pontoon-tab" role="tab" aria-controls="pontoon-tab"
                                               aria-selected="true">
                                                Pontoon
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="view-scarab-tab" data-toggle="tab" href="#scarab-tab" role="tab" aria-controls="scarab-tab"
                                               aria-selected="true">
                                                Scarab
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Vehicle List Content -->
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="seadoo-tab" role="tabpanel" aria-labelledby="seadoo-tab">
                                    <form action="{{route('maintenance.submitMaintReqAdmin')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="service_type">Select Request Type</label>
                                                    <select name="service_type" id="service_type" class="form-control">
                                                        <option value="Service">Service</option>
                                                        <option value="Repair">Repair</option>
                                                        <option value="COC">COC</option>
                                                        <option value="Summerize">Summerize</option>
                                                        <option value="Winterize">Winterize</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="vehicle_id">Select SeaDoo</label>
                                                        <select name="vehicle_id" id="vehicle_id" class="form-control">
                                                            @foreach($vehicleSeaDoo as $vehicle)
                                                                <option id="{{$vehicle->id}}" value="{{$vehicle->id}}"> {{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row hidden">
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="description">Request Description</label>
                                                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="image">Attach an Image</label>
                                                    <input type="file" name="image" id="image" class="form-control" accept="image/*">
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="vehicle_type" value="SeaDoo">
                                        <div class="modal-footer">
                                            <input type="hidden" name="is_active" value="0">
                                            <input type="hidden" name="status" value="Created">
                                            <input type="hidden" name="internal_vehicle_id" value="Z">
                                            <input type="hidden" name="submitted_by" value="{{auth()->user()->id}}">
                                            <input type="hidden" name="date_submitted" value="{{$dateNow}}">
                                            <button class="btn btn-primary-red" type="submit">Submit Request</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade show" id="pontoon-tab" role="tabpanel" aria-labelledby="pontoon-tab">
                                    <form action="{{route('maintenance.submitMaintReqAdmin')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="service_type">Select Request Type</label>
                                                    <select name="service_type" id="service_type" class="form-control">
                                                        <option value="Service">Service</option>
                                                        <option value="Repair">Repair</option>
                                                        <option value="COC">COC</option>
                                                        <option value="Summerize">Summerize</option>
                                                        <option value="Winterize">Winterize</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="vehicle_id">Select Pontoon</label>
                                                        <select name="vehicle_id" id="vehicle_id" class="form-control">
                                                            @foreach($vehiclePontoon as $vehicle)
                                                                <option id="{{$vehicle->id}}" value="{{$vehicle->id}}"> {{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row hidden">
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="description">Request Description</label>
                                                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="image">Attach an Image</label>
                                                    <input type="file" name="image" id="image" class="form-control" accept="image/*">
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="vehicle_type" value="23ft. Pontoon Boat">
                                        <div class="modal-footer">
                                            <input type="hidden" name="is_active" value="0">
                                            <input type="hidden" name="status" value="Created">
                                            <input type="hidden" name="internal_vehicle_id" value="Z">
                                            <input type="hidden" name="submitted_by" value="{{auth()->user()->id}}">
                                            <input type="hidden" name="date_submitted" value="{{$dateNow}}">
                                            <button class="btn btn-primary-red" type="submit">Submit Request</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade show" id="scarab-tab" role="tabpanel" aria-labelledby="scarab-tab">
                                    <form action="{{route('maintenance.submitMaintReqAdmin')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="service_type">Select Request Type</label>
                                                    <select name="service_type" id="service_type" class="form-control">
                                                        <option value="Service">Service</option>
                                                        <option value="Repair">Repair</option>
                                                        <option value="COC">COC</option>
                                                        <option value="Summerize">Summerize</option>
                                                        <option value="Winterize">Winterize</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="vehicle_id">Select Scarab</label>
                                                        <select name="vehicle_id" id="vehicle_id" class="form-control">
                                                            @foreach($vehicleScarab as $vehicle)
                                                                <option id="{{$vehicle->id}}" value="{{$vehicle->id}}"> {{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row hidden">
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="description">Request Description</label>
                                                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="image">Attach an Image</label>
                                                    <input type="file" name="image" id="image" class="form-control" accept="image/*">
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="vehicle_type" value="Scarab 215">
                                        <div class="modal-footer">
                                            <input type="hidden" name="is_active" value="0">
                                            <input type="hidden" name="status" value="Created">
                                            <input type="hidden" name="internal_vehicle_id" value="Z">
                                            <input type="hidden" name="submitted_by" value="{{auth()->user()->id}}">
                                            <input type="hidden" name="date_submitted" value="{{$dateNow}}">
                                            <button class="btn btn-primary-red" type="submit">Submit Request</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    @endsection


    @section('scripts')

    @endsection

</x-admin-master>
