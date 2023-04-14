<x-admin-master>

    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection


        @foreach($applications as $application)

        @section('page_title')
            <h1>Service</h1>
        @endsection

        @section('browser_title')
            <title>Service | {{$application->name}}</title>
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
                <h1>Service</h1>
            </div>
        </div>

        <div class="row mt-3 mb-5">
            <div class="col-12">
                <div class="card shadow">
                    <div class="row">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered li-link-table" id="maintRentalTable">
                                    <thead>
                                    <tr>
                                        <th>
                                            <span class="visible-xs-table">&nbsp;</span>
                                            <div class="row hidden-xs-flex">
                                                <div class="col-sm-1">Image</div>
                                                <div class="col-sm-1">Date</div>
                                                <div class="col-sm-2">Vehicle Type</div>
                                                <div class="col-sm-1">ID</div>
                                                <div class="col-sm-2">Description</div>
                                                <div class="col-sm-1">Invoice</div>
                                                <div class="col-sm-2">Submitted By</div>
                                                <div class="col-sm-1 text-center pr-0">Status</div>
                                                <div class="col-sm-1 text-center pr-0">&nbsp;</div>
                                            </div>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($activeMaintenance as $maintenance)
                                        <tr>
                                            <td>
                                                <a href="#" class="table-li-link" data-toggle="modal" data-target="#maintModal{{$maintenance->id}}">
                                                    <div class="row">
                                                        <div class="col-sm-1">
                                                            @if($maintenance->image == '')
                                                                <img class="img-responsive" src="{{asset('storage/images/no-image.jpg')}}" height="auto" width="100%" />
                                                            @else
                                                                <img class="img-responsive" src="{{asset('storage/' . $maintenance->image)}}" height="auto" width="100%" />
                                                            @endif
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <p>
                                                                {{ \Carbon\Carbon::parse( $maintenance->date )->format('m/d/y') }}
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <p>
                                                                {{$maintenance->vehicle_type}}
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <p class="sm-md">
                                                                @foreach($vehicles as $vehicle)
                                                                    @if($maintenance->vehicle_id == $vehicle->id)
                                                                        {{$vehicle->internal_vehicle_id}}
                                                                    @endif
                                                                @endforeach
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            {{$maintenance->description}}
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <p class="xs-center">
                                                                <a href="#" data-toggle="modal" data-target="#viewInvoice{{$maintenance->id}}">{{$maintenance->service_invoice}}</a>
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-1 pr-0">
                                                            <p>
                                                                @foreach($users as $user)
                                                                    @if($maintenance->submitted_by == $user->id)
                                                                        {{$user->firstname}}
                                                                    @endif
                                                                @endforeach
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <p>{{$maintenance->status}}</p>
                                                        </div>
                                                        <div class="col-sm-2 pl-0">
                                                            <div class="form-div">
                                                                <a href="#" class="table-li-link" data-toggle="modal" data-target="#maintModal{{$maintenance->id}}">
                                                                    @if($maintenance->status == 'Created')
                                                                        <h4 class="text-red">Need to Accept</h4>
                                                                    @elseif($maintenance->invoice == '')
                                                                        <h4 class="text-gray-700">Upload Invoice</h4>
                                                                    @elseif($maintenance->status == 'Invoice Submitted')
                                                                        <h4 class="text-gray-600">Invoice Waiting Approval</h4>
                                                                    @else
                                                                        <h4 class="text-gray-400">Completed</h4>
                                                                    @endif
                                                                </a>
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
            </div>
        </div>

        @foreach($maintenances as $maintenance)
        <!-- Maint Modal -->
            <div class="modal fade" id="maintModal{{$maintenance->id}}" tabindex="-1" role="dialog" aria-labelledby="cocIntake" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3>
                                <span>Service Invoice: #{{$maintenance->service_invoice}} </span>
                                | {{$maintenance->service_type}}
                                <span> |
                                    @foreach($vehicles as $vehicle)
                                        @if($maintenance->vehicle_id == $vehicle->id)
                                            {{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}
                                        @endif
                                    @endforeach
                                </span>
                            </h3>

                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    @if($maintenance->image == '')
                                        <img class="img-responsive" src="{{asset('storage/images/no-image.jpg')}}" height="auto" width="100%" />
                                    @else
                                        <img class="img-responsive" src="{{asset('storage/' . $maintenance->image)}}" height="auto" width="100%" />
                                    @endif
                                </div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5>Status: &nbsp;</h5>
                                        </div>
                                        <div class="col-6">
                                            <h5><span>{{$maintenance->status}}</span></h5>
                                        </div>
                                    </div>
                                    @if($maintenance->rental_invoice == '')
                                    @else
                                        <div class="row">
                                            <div class="col-6">
                                                <h5>Rental Invoice: &nbsp;</h5>
                                            </div>
                                            <div class="col-6">
                                                <h5><span>#{{$maintenance->rental_invoice}}</span></h5>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-6">
                                            <h5>VIN: &nbsp;</h5>
                                        </div>
                                        <div class="col-6">
                                            <h5>
                                                                 <span>
                                                                        @foreach($vehicles as $vehicle)
                                                                         @if($vehicle->id == $maintenance->vehicle_id)
                                                                             {{$vehicle->vin}}
                                                                         @endif
                                                                     @endforeach
                                                                </span>
                                            </h5>
                                        </div>
                                    </div>

                                    <br />

                                    <div class="row">
                                        <div class="col-6">
                                            <h5>Hours: &nbsp;</h5>
                                        </div>
                                        <div class="col-6">
                                            <h5>
                                             {{$maintenance->service_hours}}
                                            </h5>
                                        </div>
                                    </div>

                                    <br />

                                    <div class="row">
                                        <div class="col-6">
                                            <h5>Date Submitted: &nbsp;</h5>
                                        </div>
                                        <div class="col-6">
                                            <h5><span>{{\Carbon\Carbon::parse($maintenance->date_submitted)->format('M d, Y')}}</span></h5>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <h5>Submitted By: &nbsp;</h5>
                                        </div>
                                        <div class="col-6">
                                            <h5>
                                                @foreach($users as $user)
                                                    @if($maintenance->submitted_by == $user->id)
                                                        <span>{{$user->firstname}} {{$user->lastname}}</span>
                                                    @endif
                                                @endforeach
                                            </h5>
                                        </div>
                                    </div>


                                    @if($maintenance->invoice)
                                        <div class="row">
                                            <div class="col-6">
                                                <h5>Date Invoice Submitted: &nbsp;</h5>
                                            </div>
                                            <div class="col-6">
                                                <h5><span>{{\Carbon\Carbon::parse($maintenance->date_invoiced)->format('M d, Y')}}</span></h5>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <h5>Invoice Submitted By: &nbsp;</h5>
                                            </div>
                                            <div class="col-6">
                                                <h5>
                                                    @foreach($users as $user)
                                                        @if($maintenance->invoiced_by == $user->id)
                                                            <span>{{$user->firstname}} {{$user->lastname}}</span>
                                                        @endif
                                                    @endforeach
                                                </h5>
                                            </div>
                                        </div>
                                    @endif
                                    @if($maintenance->status == 'Completed')

                                        <div class="row">
                                            <div class="col-6">
                                                <h5>Date Completed: &nbsp;</h5>
                                            </div>
                                            <div class="col-6">
                                                <h5><span>{{\Carbon\Carbon::parse($maintenance->date_completed)->format('M d, Y')}}</span></h5>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <h5>Invoice Accepted By: &nbsp;</h5>
                                            </div>
                                            <div class="col-6">
                                                <h5>
                                                    @foreach($users as $user)
                                                        @if($maintenance->approved_by == $user->id)
                                                            <span>{{$user->firstname}} {{$user->lastname}}</span>
                                                        @endif
                                                    @endforeach
                                                </h5>
                                            </div>
                                        </div>
                                    @endif

                                    <div class="row mt-5">
                                        <div class="col-12">
                                            @if($maintenance->status == 'Created')
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h5>Accept Service Job?</h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <form action="{{route('maintenance.acceptMaintReqAdmin', $maintenance)}}" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-group width-100">
                                                                <button type="submit" class="btn btn-primary width-100 p-3">Yes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="col-6">
                                                        <form action="#" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-group width-100">
                                                                <button type="submit" class="btn btn-secondary width-100 p-3">No</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            @endif


                                            @if($maintenance->status == 'In Service')
                                                <form action="{{route('maintenance.attachInvoiceAdmin', $maintenance)}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group">
                                                        <label for="service_notes">Service Notes: </label>
                                                        <textarea name="service_notes" id="service_notes" cols="30" rows="5">{{$maintenance->service_notes}}</textarea>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <label for="service_invoice">Invoice Number</label>
                                                            <input type="text" class="form-control" name="service_invoice" value="{{$maintenance->service_invoice}}">
                                                        </div>
                                                        <div class="col-8">
                                                            <label for="invoice">Upload Invoice - <small>{{$maintenance->service_invoice}}.pdf</small></label>
                                                            <input type="file" class="form-control" name="invoice">
                                                        </div>
                                                    </div>
                                                    <input type="hidden" class="form-control" name="invoiced_by" value="{{auth()->user()->id}}">
                                                    <input type="hidden" class="form-control" name="date_invoiced" value="{{$dateNow}}">
                                                    <button type="submit" class="btn btn-primary width-100 p-3 mt-3">Attach Invoice</button>
                                                </form>
                                            @endif

                                            @if($maintenance->status == 'Completed')
                                                <form action="{{route('maintenance.updateInvoiceAdmin', $maintenance)}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group">
                                                        <label for="service_notes">Service Notes: </label>
                                                        <textarea name="service_notes" id="service_notes" cols="30" rows="5">{{$maintenance->service_notes}}</textarea>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <label for="service_invoice">Invoice Number</label>
                                                            <input type="text" class="form-control" name="service_invoice" value="{{$maintenance->service_invoice}}">
                                                        </div>
                                                        <div class="col-8">
                                                            <label for="invoice">Upload Invoice - <small>{{$maintenance->service_invoice}}.pdf</small></label>
                                                            <input type="file" class="form-control" name="invoice">
                                                        </div>
                                                    </div>
                                                    <input type="hidden" class="form-control" name="invoiced_by" value="{{auth()->user()->id}}">
                                                    <input type="hidden" class="form-control" name="date_invoiced" value="{{$dateNow}}">
                                                    <button type="submit" class="btn btn-primary width-100 p-3 mt-3">Update</button>
                                                </form>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Maint Modal -->

            <!-- Invoice Modal -->
            <div class="modal fade" id="viewInvoice{{$maintenance->id}}" tabindex="-1" role="dialog" aria-labelledby="viewInvoice" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">

                            <h3>
                                <span>Service Invoice: #{{$maintenance->service_invoice}} </span>
                                | {{$maintenance->service_type}}
                                <span> |
                                    @foreach($vehicles as $vehicle)
                                        @if($maintenance->vehicle_id == $vehicle->id)
                                            {{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}
                                        @endif
                                    @endforeach
                                </span>
                            </h3>

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
                            <div class="row mt-3">
                                <iframe src="{{asset('storage/' . $maintenance->invoice)}}" style="width: 100%;height: 800px;border: none;"></iframe>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary btn-modal" type="button" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Invoice Modal -->
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
