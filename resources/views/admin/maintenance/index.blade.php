<x-admin-master>

    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection


        @foreach($applications as $application)

        @section('page_title')
            <h1>Maintenance</h1>
        @endsection

        @section('browser_title')
            <title>Maintenance | {{$application->name}}</title>
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
                <h1>Maintenance</h1>
            </div>
        </div>

        <div class="row mt-3">

            <div class="col-sm-3">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <h5 class="text-dark">Created</h5>
                        @if($createdCount)
                            <h3 class="text-dk-red">{{$createdCount}}</h3>
                        @else
                            <h3 class="text-dk-red">0</h3>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <h5 class="text-dark">In Service</h5>
                        @if($serviceCount)
                            <h3 class="text-dk-red">{{$serviceCount}}</h3>
                        @else
                            <h3 class="text-dk-red">0</h3>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <h5 class="text-dark">Invoice Submitted</h5>
                        @if($invoiceCount)
                            <h3 class="text-dk-red">{{$invoiceCount}}</h3>
                        @else
                            <h3 class="text-dk-red">0</h3>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <h5 class="text-dark">Completed</h5>
                        @if($completedCount)
                            <h3 class="text-dk-red">{{$completedCount}}</h3>
                        @else
                            <h3 class="text-dk-red">0</h3>
                        @endif
                    </div>
                </div>
            </div>


        </div>


        <div class="row mt-3">
            <div class="col-md-7">
                <h2 class="text-gray-500 mt-4 mb-2 text-center">Within the Past Week</h2>

                @foreach($activeMaintenanceWeek as $maintenance)
                    <div class="card shadow mt-0 my-2 serv-req-card">
                        <a href="#" class="card-link" data-toggle="modal" data-target="#activeMaint{{$maintenance->id}}">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        @foreach($vehicles as $vehicle)
                                            @if($vehicle->id == $maintenance->vehicle_id)
                                                <p>
                                                    {{$vehicle->vehicle_type}}
                                                    <span class="font-weight-bold">{{$vehicle->internal_vehicle_id}}</span>
                                                </p>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="col-4">
                                        {{$maintenance->description}}
                                    </div>
                                    <div class="col-3">
                                        <p class="font-weight-bolder">{{$maintenance->service_type}}</p>
                                    </div>
                                    <div class="col-2">
                                        {{$maintenance->status}}
                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
            <div class="col-md-5">
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
                                        <div class="col-sm-6">
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
                                        <div class="col-sm-6">
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
                                        <div class="col-sm-6">
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
                                        <div class="col-sm-6">
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
                                        <div class="col-sm-6">
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
                                        <div class="col-sm-6">
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


        <div class="row mt-3 mb-5">
            <div class="col-sm-6">
                <h2 class="text-gray-500 mt-4 mb-2 text-center">Over 7 Days Old</h2>

                @foreach($activeMaintenance7days as $maintenance)
                    <div class="card shadow mt-0 my-2 serv-req-card">
                        <a href="#" class="card-link" data-toggle="modal" data-target="#activeMaint{{$maintenance->id}}">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        @foreach($vehicles as $vehicle)
                                            @if($vehicle->id == $maintenance->vehicle_id)
                                                <p>
                                                    {{$vehicle->vehicle_type}}
                                                    <span class="font-weight-bold">{{$vehicle->internal_vehicle_id}}</span>
                                                </p>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="col-4">
                                        {{$maintenance->description}}
                                    </div>
                                    <div class="col-2">
                                        <p class="font-weight-bolder">{{$maintenance->service_type}}</p>
                                    </div>
                                    <div class="col-3">
                                        {{$maintenance->status}}
                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>

            <div class="col-sm-6">
                <h2 class="text-gray-500 mt-4 mb-2 text-center">Over 14 Days Old</h2>

                @foreach($activeMaintenance14days as $maintenance)
                    <div class="card shadow mt-0 my-2 serv-req-card">
                        <a href="#" class="card-link" data-toggle="modal" data-target="#activeMaint{{$maintenance->id}}">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        @foreach($vehicles as $vehicle)
                                            @if($vehicle->id == $maintenance->vehicle_id)
                                                <p>
                                                    {{$vehicle->vehicle_type}}
                                                    <span class="font-weight-bold">{{$vehicle->internal_vehicle_id}}</span>
                                                </p>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="col-4">
                                        {{$maintenance->description}}
                                    </div>
                                    <div class="col-2">
                                        <p class="font-weight-bolder">{{$maintenance->service_type}}</p>
                                    </div>
                                    <div class="col-3">
                                        {{$maintenance->status}}
                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>


       @foreach($activeMaintenance as $maintenance)
            <!-- Active Maintenance Modal -->
            <div class="modal fade" id="activeMaint{{$maintenance->id}}" tabindex="-1" role="dialog" aria-labelledby="viewInvoice" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                                <div class="modal-header">
                                    <h3><span>Service Request: </span>{{$maintenance->description}} <span>| {{$maintenance->status}}</span></h3>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-6">
                                            @if($maintenance->coc_image == '')
                                                <img src="{{asset('storage/' . 'images/no-image.jpg')}}" alt="Service Request Image" class="img-responsive">
                                            @else
                                                <img src="{{asset('storage/' . $maintenance->image)}}" alt="Service Request Image" class="img-responsive">
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
                                                @endif
                                            @endforeach
                                            <h6>
                                                <span class="text-white">Hours: &nbsp; </span>
                                                {{$maintenance->service_hours}}
                                            </h6>
                                            <h6> <span class="text-white">Description: &nbsp; </span>{{$maintenance->description}}</h6>
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
                                    @if($maintenance->invoice == '')
                                        @else
                                        <div class="row mt-5">
                                            <iframe src="{{asset('storage/' . $maintenance->invoice)}}" style="width: 100%;height: 800px;border: none;"></iframe>
                                        </div>
                                    @endif
                                </div>
                                <div class="modal-footer">
                                    @if($maintenance->status == 'Created')
                                        <h3 class="text-center text-lt-red">Waiting for Service to Accept...</h3>
                                        <button class="btn btn-secondary btn-right btn-modal" type="button" data-dismiss="modal">Close</button>
                                    @endif

                                    @if($maintenance->status == 'In Service')
                                        <h3 class="text-center text-lt-red">Waiting for Service Invoice</h3>
                                        <button class="btn btn-secondary btn-right btn-modal" type="button" data-dismiss="modal">Close</button>
                                    @endif





                                    @if($maintenance->status == 'Invoice Submitted')
                                        <button class="btn btn-secondary btn-right btn-modal" type="button" data-dismiss="modal">Cancel</button>

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
                                    @endif

                                </div>
                            </div>
                </div>
            </div>
            <!-- /Active Maintenance Modal -->
       @endforeach
    @endsection


    @section('scripts')
    <!-- Page level plugins -->
        <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('js/demo/datatables-scripts.js')}}"></script>
    @endsection



</x-admin-master>
