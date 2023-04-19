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
                <h1>Service <span class="small text-gray-700">(Writer View)</span></h1>
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
                                                <div class="col-sm-1">Submitted</div>
                                                <div class="col-sm-2">Vehicle</div>
                                                <div class="col-sm-2">Description</div>
                                                <div class="col-sm-1">R / O</div>
                                                <div class="col-sm-2">Submitted By</div>
                                                <div class="col-sm-1 text-center pr-0">Status</div>
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
                                                            <p class="sm-md">
                                                                @foreach($vehicles as $vehicle)
                                                                    @if($maintenance->vehicle_id == $vehicle->id)
                                                                        {{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}
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
                                                            <div class="form-div" style="text-align: right">
                                                                <a href="#" class="table-li-link" data-toggle="modal" data-target="#maintModal{{$maintenance->id}}">
                                                                    @if($maintenance->status == 'Created')
                                                                        <h4 class="text-red">Need to Accept</h4>
                                                                    @elseif($maintenance->invoice == '')
                                                                        @if($maintenance->status == 'Rejected')
                                                                            &nbsp;
                                                                        @else
                                                                            <h4 class="text-gray-700">Upload Invoice</h4>
                                                                        @endif
                                                                    @elseif($maintenance->status == 'Invoice Submitted')
                                                                        <h4 class="text-gray-600">R/O Waiting Approval</h4>
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
                                <span>
                                    @foreach($vehicles as $vehicle)
                                        @if($maintenance->vehicle_id == $vehicle->id)
                                            {{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}
                                        @endif
                                    @endforeach
                                </span>
                                | {{$maintenance->service_type}}

                            </h3>
                            @if($maintenance->service_invoice != '')
                                <span>R / O: {{$maintenance->service_invoice}} </span>
                                @else
                            @endif
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
                                    <h6> <span class="text-white">Status: &nbsp; </span>{{$maintenance->status}}</h6>
                                    @if($maintenance->rental_invoice == '')
                                        @else
                                            <h6> <span class="text-white">Rental Invoice: &nbsp; </span>{{$maintenance->rental_invoice}}</h6>
                                    @endif
                                    <h6> <span class="text-white">Request Type: &nbsp; </span>{{$maintenance->service_type}}</h6>
                                    <h6> <span class="text-white">VIN: &nbsp; </span>
                                        @foreach($vehicles as $vehicle)
                                            @if($vehicle->id == $maintenance->vehicle_id)
                                                {{$vehicle->vin}}
                                            @endif
                                        @endforeach
                                    </h6>
                                    <h6> <span class="text-white">Vehicle Location: &nbsp; </span>
                                        @foreach($vehicles as $vehicle)
                                            @if($vehicle->id == $maintenance->vehicle_id)
                                                {{$vehicle->location}}
                                            @endif
                                        @endforeach
                                    </h6>
                                    <h6> <span class="text-white">Description: &nbsp; </span>{{$maintenance->description}}</h6>

                                    <br />

                                    <h6> <span class="text-white">Hours: &nbsp; </span>
                                        @if($maintenance->service_hours == '')
                                            @foreach($vehicles as $vehicle)
                                                @if($vehicle->id == $maintenance->vehicle_id)
                                                    {{$vehicle->current_hours}}
                                                    <br>
                                                    <small>( Vehicle Hours at last check on {{\Carbon\Carbon::parse($vehicle->hours_updated)->format('M d, Y')}} )</small>
                                                @endif
                                            @endforeach
                                        @elseif($maintenance->service_hours == '')
                                            {{$maintenance->service_hours}}
                                        @else
                                            No Hours Recorded...
                                        @endif
                                    </h6>

                                    <br />

                                    <h6> <span class="text-white">Request Submitted: &nbsp; </span>{{\Carbon\Carbon::parse($maintenance->date_submitted)->format('M d, Y')}}</h6>
                                    <h6> <span class="text-white">Submitted By: &nbsp; </span>
                                        @foreach($users as $user)
                                            @if($maintenance->submitted_by == $user->id)
                                                <span>{{$user->firstname}} {{$user->lastname}}</span>
                                            @endif
                                        @endforeach
                                    </h6>
                                    @if($maintenance->denied_by != '')
                                        <h6> <span class="text-white">Request Rejected: &nbsp; </span>{{\Carbon\Carbon::parse($maintenance->deny_date)->format('M d, Y')}}/h6>
                                        <h6> <span class="text-white">Rejected By: &nbsp; </span>
                                            @foreach($users as $user)
                                                @if($user->id == $maintenance->denied_by)
                                                    <h5><span>{{$user->firstname}} {{$user->lastname}}</span></h5>
                                                @endif
                                            @endforeach
                                        </h6>
                                        <h6> <span class="text-white">Rejection Explaination: &nbsp; </span>{{$maintenance->serv_deny_reason}}</h6>
                                    @endif

                                    @if($maintenance->invoice)
                                        <h6> <span class="text-white">Date R/O Submitted: &nbsp; </span><span>{{\Carbon\Carbon::parse($maintenance->date_invoiced)->format('M d, Y')}}</span></h6>
                                        <h6> <span class="text-white">R/O Submitted By: &nbsp; </span>
                                            @foreach($users as $user)
                                                @if($maintenance->invoiced_by == $user->id)
                                                    <span>{{$user->firstname}} {{$user->lastname}}</span>
                                                @endif
                                            @endforeach
                                        </h6>
                                    @endif

                                    @if($maintenance->status == 'Completed')

                                        <h6> <span class="text-white">Description: &nbsp; </span>{{$maintenance->description}}</h6>
                                        <h6> <span class="text-white">Date Completed: &nbsp; </span>{{\Carbon\Carbon::parse($maintenance->date_completed)->format('M d, Y')}}</h6>
                                        <h6> <span class="text-white">Invoice Accepted By: &nbsp; </span>
                                            @foreach($users as $user)
                                                @if($maintenance->approved_by == $user->id)
                                                    <span>{{$user->firstname}} {{$user->lastname}}</span>
                                                @endif
                                            @endforeach
                                        </h6>
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
                                                        <a href="#" class="btn btn-secondary width-100 p-3" data-toggle="modal" data-target="#reject_modal{{$maintenance->id}}">No</a>
                                                    </div>
                                                </div>
                                            @endif


                                            @if($maintenance->status == 'In Service')
                                                <form action="{{route('maintenance.attachInvoiceAdmin', $maintenance)}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group">
                                                        <label for="service_notes"><h5><span>Service Notes:</span></h5></label>
                                                        <textarea name="service_notes" id="service_notes" cols="30" rows="5">{{$maintenance->service_notes}}</textarea>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <label for="service_invoice"><h5><span>R / O</span></h5></label>
                                                            <input type="text" class="form-control" name="service_invoice" value="{{$maintenance->service_invoice}}">
                                                        </div>
                                                        <div class="col-8">
                                                            <label for="invoice"><h5><span>Upload Invoice</span> - <small>{{$maintenance->service_invoice}}.pdf (required)</small></h5></label>
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
                                                        <label for="service_notes"><h5><span>Service Notes:</span></h5> </label>
                                                        <textarea name="service_notes" id="service_notes" cols="30" rows="5">{{$maintenance->service_notes}}</textarea>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <label for="service_invoice"><h5><span>R / O</span></h5> </label>
                                                            <input type="text" class="form-control" name="service_invoice" value="{{$maintenance->service_invoice}}">
                                                        </div>
                                                        <div class="col-8">
                                                            <label for="invoice"><h5><span>Upload Invoice</span>- <small>{{$maintenance->service_invoice}}.pdf</small></h5></label>
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

                            @if($maintenance->invoiced_by != '')
                                <div class="row mt-5">
                                    <iframe src="{{asset('storage/' . $maintenance->invoice)}}" style="width: 100%;height: 800px;border: none;"></iframe>
                                </div>
                            @endif
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Maint Modal -->

            <!-- Service Reject Modal -->
            @foreach($maintenances as $maintenance)
                <div class="modal fade" id="reject_modal{{$maintenance->id}}" tabindex="-1" role="dialog" aria-labelledby="viewInvoice" aria-hidden="true">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">

                                @foreach($vehicles as $vehicle)
                                    @if($vehicle->id == $maintenance->vehicle_id)
                                        <h3>Deny Request for: <span>{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</span></h3>
                                    @endif
                                @endforeach
                            </div>
                            <form method="post" action="{{route('maintenance.reqDeny', $maintenance)}}">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    @if($maintenance->image == '')
                                        <img class="img-responsive" src="{{asset('storage/images/no-image.jpg')}}" height="auto" width="100%" />
                                    @else
                                        <img class="img-responsive" src="{{asset('storage/' . $maintenance->image)}}" height="auto" width="100%" />
                                    @endif

                                        <div class="form-group">
                                            <label for="serv_deny_reason">
                                                <h3 class="mt-3">Rejection Explanation</h3>
                                            </label>
                                            <textarea class="form-control" name="serv_deny_reason" id="serv_deny_reason" width="100%" rows="10" placeholder="Enter reason for denial"></textarea>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" class="form-control" name="denied_by" value="{{auth()->user()->id}}">
                                    <input type="hidden" class="" id="status" name="status" value="Rejected">
                                    <input type="hidden" class="" id="deny_date" name="deny_date" value="{{$dateNow}}">
                                    <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancel </button>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- /Service Reject Modal -->

            <!-- View Invoice Modal -->
            <div class="modal fade" id="viewInvoice{{$maintenance->id}}" tabindex="-1" role="dialog" aria-labelledby="viewInvoice" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">

                            <h3>
                                <span>R / O: {{$maintenance->service_invoice}} </span>
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
                                    <h6> <span class="text-white">Description: &nbsp; </span>{{$maintenance->description}}</h6>
                                    <h6> <span class="text-white">R / O &nbsp; </span>{{$maintenance->service_invoice}}</h6>
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
                                        <h6> <span class="text-white">R/O Submitted: &nbsp; </span>{{Carbon\Carbon::parse($maintenance->date_invoiced)->format('m / d / y')}}</h6>
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
                                        <h6> <span class="text-white">R/O Submitted: &nbsp; </span>{{Carbon\Carbon::parse($maintenance->date_invoiced)->format('m / d / y')}}</h6>
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
