<x-service-master>

    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">


    @endsection

        @foreach($applications as $application)
        @section('page_title')
            <title>Service Requests</title>
        @endsection

        @section('browser_title')
            <title>Service Requests | {{$application->name}}</title>
        @endsection

        @section('app_name')
            {{$application->name}}
        @endsection

        @section('favicon')
            {{asset('storage/'. $application->favicon)}}
        @endsection

        @section('logo-square-1')
            {{asset('storage/'. $application->logo_square_1)}}
        @endsection

        @section('logo-square-2')
            {{asset('storage/'. $application->logo_square_2)}}
        @endsection

        @section('logo-horizontal-1')
            {{asset('storage/'. $application->logo_horizontal_1)}}
        @endsection

        @section('logo-horizontal-2')
            {{asset('storage/'. $application->logo_horizontal_1)}}
        @endsection

        @section('navbar-operations')
            @if($application->operations_name == '')
                Operations
            @else
                {{$application->operations_name}}
            @endif
        @endsection

        @endforeach

    @section('content')

        <div class="card shadow my-4">
           <div class="row">
               <div class="card-body">
                   <div class="table-responsive service">
                       <table class="table table-bordered li-link-table" id="maintRentalTable">
                           <thead>
                           <tr>
                               <th>
                                   <span class="visible-xs-table">&nbsp;</span>
                                   <div class="row hidden-xs-table">
                                       <div class="col-sm-1">Image</div>
                                       <div class="col-sm-1">Date</div>
                                       <div class="col-sm-2">Vehicle Type</div>
                                       <div class="col-sm-1">Vehicle ID</div>
                                       <div class="col-sm-2">Description</div>
                                       <div class="col-sm-1">Service Invoice #</div>
                                       <div class="col-sm-1">Submitted By</div>
                                       <div class="col-sm-1 text-center pr-0">Status</div>
                                       <div class="col-sm-2 text-center pr-0">&nbsp;</div>
                                   </div>
                               </th>
                           </tr>
                           </thead>
                           <tbody>

                           @foreach($maintenances as $maintenance)
                               <tr>
                                   <td>
                                       <a href="#" class="table-li-link" data-toggle="modal" data-target="#maintModal{{$maintenance->id}}">
                                           <div class="row">
                                               <div class="col-sm-1">
                                                   <img class="img-responsive" src="{{asset('storage/' . $maintenance->image)}}" height="auto" width="100%" />
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
                                                       {{$maintenance->internal_vehicle_id}}
                                                   </p>
                                               </div>
                                               <div class="col-sm-2">
                                                   {{$maintenance->description}}
                                               </div>
                                               <div class="col-sm-1">
                                                   <p class="xs-center">
                                                       {{$maintenance->service_invoice}}
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
                                                       @if($maintenance->status == 'Created')
                                                           <h4 class="text-red">Need to Accept</h4>
                                                       @elseif($maintenance->invoice == '')
                                                           <h4 class="text-gray-700">Upload Invoice</h4>
                                                       @elseif($maintenance->status == 'Invoice Submitted')
                                                           <h4 class="text-gray-600">Invoice Waiting Approval</h4>
                                                       @else
                                                           <h4 class="text-gray-400"></h4>
                                                       @endif
                                                   </div>
                                               </div>
                                           </div>
                                       </a>
                                   </td>
                               </tr>
                           @endforeach

                           </tbody>
                       </table>
                   @foreach($maintenances as $maintenance)
                       <!-- COC Intake Modal -->
                           <div class="modal fade" id="maintModal{{$maintenance->id}}" tabindex="-1" role="dialog" aria-labelledby="cocIntake" aria-hidden="true">
                               <div class="modal-dialog modal-lg" role="document">
                                   <div class="modal-content">
                                       <div class="modal-header">
                                           <h3><span>{{$maintenance->vehicle_type}} </span> ({{$maintenance->internal_vehicle_id}})</h3>
                                       </div>
                                       <div class="modal-body">
                                           <div class="row">
                                               <div class="col-sm-6">
                                                   <img class="img-responsive" src="{{asset('storage/' . $maintenance->image)}}" height="auto" width="100%" />
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
                                                   <div class="row">
                                                       <div class="col-6">
                                                           <h5>Rental Invoice: &nbsp;</h5>
                                                       </div>
                                                       <div class="col-6">
                                                           <h5><span>#{{$maintenance->rental_invoice}}</span></h5>
                                                       </div>
                                                   </div>
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
                                                           <h5>Recent Hours: &nbsp;</h5>
                                                       </div>
                                                       <div class="col-6">
                                                           <h5>
                                                                     <span>
                                                                            @foreach($vehicles as $vehicle)
                                                                             @if($vehicle->id == $maintenance->vehicle_id)
                                                                                 {{$vehicle->current_hours}}
                                                                             @endif
                                                                         @endforeach
                                                                        </span>
                                                           </h5>
                                                       </div>
                                                   </div>

                                                   <div class="row">
                                                       <div class="col-6">
                                                           <h5> Hours Updated: &nbsp;</h5>
                                                       </div>
                                                       <div class="col-6">
                                                           <h5>
                                                                    <span>
                                                                            @foreach($vehicles as $vehicle)
                                                                            @if($vehicle->id == $maintenance->vehicle_id)
                                                                                {{\Carbon\Carbon::parse($vehicle->hours_updated)->format('M d, Y')}}
                                                                            @endif
                                                                        @endforeach
                                                                        </span>
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
                                                                       @if($maintenance->submitted_by == $user->id)
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
                                                                       @if($maintenance->submitted_by == $user->id)
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
                                                                       <form action="{{route('maintenance.acceptMaintReqCoc', $maintenance)}}" method="post">
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
                                                           @elseif($maintenance->invoice == '')
                                                               <form action="{{route('maintenance.attachInvoice', $maintenance)}}" method="post" enctype="multipart/form-data">
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
                                                           @else
                                                               <form action="{{route('maintenance.updateInvoice', $maintenance)}}" method="post" enctype="multipart/form-data">
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
                           <!-- /COC Intake Modal -->

                       @endforeach
                   </div>
               </div>
           </div>
        </div>


    @endsection

    @section('sidebar-post')

    @endsection

        @section('scripts')
        <!-- Page level plugins -->
            <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

            <!-- Page level custom scripts -->
            <script src="{{asset('js/demo/datatables-scripts.js')}}"></script>
        @endsection

</x-service-master>
