<x-admin-master>

    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection


        @foreach($applications as $application)

        @section('page_title')
            <h1>Active COC's</h1>
        @endsection

        @section('browser_title')
            <title>Active COC's | {{$application->name}}</title>
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
                   <h1>Active COC's</h1>
               </div>
           </div>

            <!-- Rentals Table -->
            <div class="card my-3 shadow">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered li-link-table" id="maintRentalTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>
                                                <span class="visible-xs-table">&nbsp;</span>
                                                <div class="row hidden-xs-flex">
                                                    <div class="col-sm-1">Image</div>
                                                    <div class="col-sm-1">Vehicle</div>
                                                    <div class="col-sm-1">Date</div>
                                                    <div class="col-sm-2">Incident</div>
                                                    <div class="col-sm-1">Last Name</div>
                                                    <div class="col-sm-3">Email / Phone</div>
                                                    <div class="col-sm-1 text-center pr-0">Status</div>
                                                    <div class="col-sm-1 pl-0">&nbsp;</div>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($rentalNew as $rental)
                                        @if($rental->status == 'COC' && $rental->coc_status == 'New')
                                            <tr>
                                                <td>
                                                    <a href="{{route('rental.show', $rental)}}" class="table-li-link">
                                                        <div class="row">
                                                            <div class="col-sm-1">
                                                                <img class="img-responsive" src="{{asset('storage/' . $rental->image_1)}}" height="auto" width="100%" />
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <p class="sm-lg">
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
                                                            </p>
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <p>
                                                                    {{ \Carbon\Carbon::parse( $rental->activity_date )->format('m/d/y') }}
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <p>
                                                                    {{$rental->incident}}
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-1">
                                                               <p class="sm-md">
                                                                   {{$rental->last_name}}
                                                               </p>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="xs-center">
                                                                    {{$rental->phone}} <br />
                                                                    <a href="mailto:{{$rental->email}}" class="text-link">{{$rental->email}}</a>
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-1 pr-0">
                                                                <p>
                                                                    <span class="visible-xs text-center">Status: &nbsp; </span><span class="sm-md text-center">{{$rental->coc_status}}</span>
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-2 pl-0">
                                                                <a href="#" class="btn btn-primary-red width-100 height-auto" data-toggle="modal" data-target="#cocIntake{{$rental->id}}">Intake</a>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach

                                    @foreach($rentalService as $rental)
                                        @if($rental->status == 'COC' && $rental->coc_status == 'Service')
                                            <tr>
                                                <td>
                                                    <a href="{{route('rental.show', $rental)}}" class="table-li-link">
                                                        <div class="row">
                                                            <div class="col-sm-1">
                                                                <img class="img-responsive" src="{{asset('storage/' . $rental->image_1)}}" height="auto" width="100%" />
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <p class="sm-lg">
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
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <p>
                                                                    {{ \Carbon\Carbon::parse( $rental->activity_date )->format('m/d/y') }}
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <p>
                                                                    {{$rental->incident}}
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <p class="sm-md">
                                                                    {{$rental->last_name}}
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="xs-center">
                                                                    {{substr($rental->phone, 2)}} <br />
                                                                    <a href="mailto:{{$rental->email}}" class="text-link">{{$rental->email}}</a>
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-1 pr-0">
                                                                <p>
                                                                    <span class="visible-xs text-center">Status: &nbsp; </span><span class="sm-md text-center">{{$rental->coc_status}}</span>
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-2 pl-0">

                                                                    <form method="post" action="{{route('coc.attachRental', $rental)}}">
                                                                        @method('PUT')
                                                                        @csrf
                                                                        <input type="hidden" name="rental" value="{{$rental->id}}">
                                                                        <input type="hidden" class="form-control" name="image" value="{{$rental->image_1}}">
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


                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach

                                    @foreach($rentalInvoice as $rental)
                                        @if($rental->status == 'COC' && $rental->coc_status == 'Invoice Submitted')
                                            <tr>
                                                <td>
                                                    <a href="{{route('rental.show', $rental)}}" class="table-li-link">
                                                        <div class="row">
                                                            <div class="col-sm-1">
                                                                <img class="img-responsive" src="{{asset('storage/' . $rental->image_1)}}" height="auto" width="100%" />
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <p class="sm-lg">
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
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <p>
                                                                    {{ \Carbon\Carbon::parse( $rental->activity_date )->format('m/d/y') }}
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <p>
                                                                    {{$rental->incident}}
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <p class="sm-md">
                                                                    {{$rental->last_name}}
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="xs-center">
                                                                    {{$rental->phone}} <br />
                                                                    <a href="mailto:{{$rental->email}}" class="text-link">{{$rental->email}}</a>
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-1 pr-0">
                                                                <p>
                                                                    <span class="visible-xs text-center">Status: &nbsp; </span><span class="sm-md text-center">{{$rental->coc_status}}</span>
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-2 pl-0">
                                                                <a href="#" class="btn btn-primary width-100 height-auto" data-toggle="modal" data-target="#viewInvoice{{$rental->id}}">Invoice</a>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach

                                    @foreach($rentalBilling as $rental)
                                        @if($rental->status == 'COC' && $rental->coc_status == 'Billing')
                                            <tr>
                                                <td>
                                                    <a href="{{route('rental.show', $rental)}}" class="table-li-link">
                                                        <div class="row">
                                                            <div class="col-sm-1">
                                                                <img class="img-responsive" src="{{asset('storage/' . $rental->image_1)}}" height="auto" width="100%" />
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <p class="sm-lg">
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
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <p>
                                                                    {{ \Carbon\Carbon::parse( $rental->activity_date )->format('m/d/y') }}
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <p>
                                                                    {{$rental->incident}}
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <p class="sm-md">
                                                                    {{$rental->last_name}}
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <p class="xs-center">
                                                                    {{$rental->phone}} <br />
                                                                    <a href="mailto:{{$rental->email}}" class="text-link">{{$rental->email}}</a>
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-1 pr-0">
                                                                <p>
                                                                    <span class="visible-xs text-center">Status: &nbsp; </span><span class="sm-md text-center">{{$rental->coc_status}}</span>
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-2 pl-0">
                                                                <a href="#" class="btn btn-primary-red width-100 height-auto" data-toggle="modal" data-target="#finalize{{$rental->id}}">Complete</a>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        @foreach($rentals as $rental)
            @if($rental->status == 'COC')
                <!-- COC Intake Modal -->
                <div class="modal fade" id="cocIntake{{$rental->id}}" tabindex="-1" role="dialog" aria-labelledby="cocIntake" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3><span>Intake: </span>Change of Condition <span class="small">| {{$rental->last_name}}</span></h3>
                            </div>
                            <div class="modal-body">

                                <form action="{{route('coc.intakeCoc', $rental->id)}}" method="post" class="width-100" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-6">
                                            <h4> <span class="lighter text-white">#{{$rental->invoice_number}}</span> <small>{{$rental->activity_item}}</small></h4>
                                            <textarea name="description" id="description" cols="30" rows="5">{{$rental->incident}}</textarea>
                                            <input type="file" class="form-control" name="image_1" id="image_1" value="{{$rental->image_1}}" />
                                        </div>
                                        <div class="col-6">
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
                                                    <input type="hidden" class="form-control" name="vehicle_id" value="
                                                        @foreach($rental->vehicles as $rental_vehicle)
                                                            @if($rental->coc_vehicle == $rental_vehicle->id)
                                                               {{$rental_vehicle->id}}
                                                            @endif
                                                        @endforeach
                                                        ">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <input type="text" name="last_four" class="form-control" placeholder="Last 4 of CC">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button class="btn btn-primary width-100" type="submit">Send to Service</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                {{--                                                                        TODO - QuickBooks - COC - Create Customer Invoice--}}
                                                <form action="" method="post" class="width-100">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="form-group">
                                                        <label for="" class="hidden"></label>
                                                        <input type="hidden" class="form-group" name=""/>
                                                        <button class="btn btn-outline-primary btn-right width-100" type="submit">Create Customer Invoice</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /COC Intake Modal -->

                <!-- Invoice Modal -->
                <div class="modal fade" id="viewInvoice{{$rental->id}}" tabindex="-1" role="dialog" aria-labelledby="viewInvoice" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3><span>Service Invoice: </span>Change of Condition</h3>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-1">
                                        <h4 class="lighter text-white">#{{$rental->invoice_number}}</h4>
                                    </div>
                                    <div class="col-8 col-md-2">
                                        <h4>{{$rental->activity_item}}</h4>
                                    </div>
                                    <div class="col-2">
                                        <h4 class="text-white">
                                           @foreach($vehicles as $vehicle)
                                                @if($rental->coc_vehicle == $vehicle->id)
                                                    {{$vehicle->internal_vehicle_id}}
                                                @endif
                                            @endforeach
                                        </h4>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="row">
                                            <div class="col-2">
                                                <h4 class="lighter">{{$rental->last_name}}</h4>
                                            </div>
                                            <div class="col-10">
                                                <h4 class="lighter text-white text-right">{{substr($rental->phone, 2)}} | {{$rental->email}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
{{--                                    <img class="img-responsive" src="{{asset('storage/' . $maintenance->image)}}" height="auto" width="100%" />--}}
                                   @foreach($maintenances as $maintenance)
                                       @if($maintenance->rental_invoice == $rental->invoice_number)
                                            <iframe src="{{asset('storage/' . $maintenance->invoice)}}" style="width: 100%;height: 800px;border: none;"></iframe>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary btn-right btn-modal" type="button" data-dismiss="modal">CANCEL</button>
                                @foreach($maintenances as $maintenance)
                                    @if($maintenance->rental_invoice == $rental->invoice_number)
                                        @if($maintenance->status !== 'Completed')
                                            <form action="{{route('coc.acceptInvoice', $rental)}}" method="post" class="width-100">
                                                @csrf
                                                @method('PUT')

                                                <div class="form-group width-100">
                                                    <label for="" class="hidden"></label>
                                                    <input type="hidden" class="form-group" name="approved_by" value="{{auth()->user()->id}}"/>
                                                    <input type="hidden" class="form-group" name="date_approved" value="{{$dateNow}}"/>
                                                    <button class="btn btn-primary btn-modal btn-right" type="submit">Accept Invoice & Close</button>
                                                </div>
                                            </form>
                                        @endif
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Invoice Modal -->

                <!-- Finalize Modal -->
                <div class="modal fade" id="finalize{{$rental->id}}" tabindex="-1" role="dialog" aria-labelledby="finalize" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3><span>Finalize: </span>Change of Condition</h3>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-6">
                                        <h4 class="lighter text-white">#{{$rental->invoice_number}}</h4>
                                        <h4>{{$rental->activity_item}}</h4>
                                        <h4 class="lighter">{{$rental->last_name}}</h4>
                                    </div>
                                    <div class="col-6">
                                        <div class="row">
                                            {{--                                                                        TODO - QuickBooks - COC - Create Customer Invoice--}}
                                            <form action="{{route('coc.cocComplete', $rental)}}" method="post" class="width-100">
                                                @csrf
                                                @method('PUT')

                                                <div class="form-group width-100">
                                                    <label for="" class="hidden"></label>
                                                    <input type="hidden" class="form-group" name=""/>
                                                    <button class="btn btn-primary width-100" type="submit">Create Customer Invoice</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Finalize Modal -->
            @endif
        @endforeach

    @endsection

        @section('sidebar')

        @endsection


    @section('scripts')
        <!-- Page level plugins -->
            <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

            <!-- Page level custom scripts -->
            <script src="{{asset('js/demo/datatables-scripts.js')}}"></script>
    @endsection



</x-admin-master>
