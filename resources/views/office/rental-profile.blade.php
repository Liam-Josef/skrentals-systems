<x-office-master>

    @foreach($applications as $application)
        @section('page_title')
            <h1>Rental Profile
                @if($rental->invoice_number == '')
                    {{$rental->booking_id}}
                @else
                    #{{$rental->invoice_number}}
                @endif - {{$rental->first_name}} {{$rental->last_name}}
            </h1>
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

    @section('browser_title')
        <title>@if($rental->invoice_number == '')
                {{$rental->booking_id}}
            @else
                #{{$rental->invoice_number}}
            @endif - {{$rental->first_name}} {{$rental->last_name}} | SK Watercraft Rentals</title>
    @endsection


    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection


    @section('page_title')
            <div class="row">
                <div class="col-sm-9">
                    <h1>
                <span>
                @if(strpos($rental->ticket_list, '1 hour') !== false)
                        1 Hr
                    @endif
                    @if(strpos($rental->ticket_list, '2 hour') !== false)
                        2 Hr
                    @endif
                    @if(strpos($rental->ticket_list, '3 hour') !== false)
                        3 Hr
                    @endif
                    @if(strpos($rental->ticket_list, '4 hour') !== false)
                        HD
                    @endif
                    @if(strpos($rental->ticket_list, '8 hour') !== false)
                        FD
                    @endif
                    @if(strpos($rental->ticket_list, '9 hour') !== false)
                        FD
                    @endif
                    @if(strpos($rental->ticket_list, 'Full Day') !== false)
                        FD
                    @endif
                    @if(strpos($rental->ticket_list, 'Half Day') !== false)
                        HD
                    @endif
                    @if(strpos($rental->ticket_list, '1 Day') !== false)
                        1 D
                    @endif
                    @if(strpos($rental->ticket_list, '2 Day') !== false)
                        2 D
                    @endif
                    @if(strpos($rental->ticket_list, '3 Day') !== false)
                        3 D
                    @endif
                    @if(strpos($rental->ticket_list, '4 Day') !== false)
                        4 D
                    @endif
                    @if(strpos($rental->ticket_list, '5 Day') !== false)
                        5 D
                    @endif
                    @if(strpos($rental->ticket_list, '6 Day') !== false)
                        6 D
                    @endif
                    @if(strpos($rental->ticket_list, '7 Day') !== false)
                        7 D
                    @endif
                    @if(strpos($rental->ticket_list, '8 Day') !== false)
                        8 D
                    @endif
                    @if(strpos($rental->ticket_list, '9 Day') !== false)
                        9 D
                    @endif
                    @if(strpos($rental->ticket_list, '10 Day') !== false)
                        10 D
                    @endif
                    @if(strpos($rental->ticket_list, '11 Day') !== false)
                        11 D
                    @endif
                    @if(strpos($rental->ticket_list, '12 Day') !== false)
                        12 D
                    @endif
                    @if(strpos($rental->ticket_list, '13 Day') !== false)
                        13 D
                    @endif
                    @if(strpos($rental->ticket_list, '14 Day') !== false)
                        14 D
                    @endif
                 </span>
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
                        <span> | {{$rental->first_name}} {{$rental->last_name}}</span></h1>
                </div>
                <div class="col-sm-3">
                    <h1 class="text-right mt-1">

                        @if($rental->invoice_number == '')
                           &nbsp;
                        @else
                            #{{$rental->invoice_number}}
                        @endif
                    </h1>
                </div>
            </div>
    @endsection

    @section('content')
    <!-- RENTAL INFORMATION -->
        <div class="card mb-4 my-3 shadow">
            <div class="card-header">
                <div class="row">
                    <div class="col-xs-6 col-sm-6">
                        <h3 class="card-title">Rental Information  </h3>
                    </div>
                    <div class="col-xs-6 col-sm-6">
                        <h3 class="card-title text-right status">{{$rental->status}} </h3>
                    </div>
                </div>
            </div>
            <div class="card-body">

                <!-- Rental Information -->
                <div class="card-rental-info">
                    <div class="row">
                        <!-- Renter Info -->
                        <div class="col-sm-6">
                            <div class="area-box">
                               <div class="row">

                                   <!-- Item -->
                                   <div class="col-6 col-sm-12">
                                       <div class="row">
                                           <div class="col-sm-4 col-md-3">
                                               <p class="item-title">Booking ID:</p>
                                           </div>
                                           <div class="col-sm-8 col-md-9">
                                               <p class="item">{{$rental->booking_id}}</p>
                                           </div>
                                       </div>
                                   </div>
                                   <!-- /Item -->
                                   <!-- Item -->
                                  <div class="col-6 col-sm-12">
                                      <div class="row">
                                          <div class="col-sm-4 col-md-3">
                                              <p class="item-title">Vehicle:</p>
                                          </div>
                                          <div class="col-sm-8 col-md-9">
                                              <p class="item">{{$rental->activity_item}}</p>
                                          </div>
                                      </div>
                                  </div>
                                   <!-- /Item -->
                                   <!-- Item -->
                                   <div class="col-6 col-sm-12">
                                       <div class="row">
                                           <div class="col-sm-4 col-md-3">
                                               <p class="item-title">Rental Date:</p>
                                           </div>
                                           <div class="col-sm-8 col-md-9">
                                               <p class="item">{{\Carbon\Carbon::parse($rental->activity_date)->format('M d, Y')}}</p>
                                           </div>
                                       </div>
                                   </div>
                                   <!-- /Item -->
                                   <!-- Item -->
                                   <div class="col-6 col-sm-12">
                                       <div class="row">
                                           <div class="col-sm-4 col-md-3">
                                               <p class="item-title">Ticket List:</p>
                                           </div>
                                           <div class="col-sm-8 col-md-9">
                                               <p class="item">{{$rental->ticket_list}}</p>
                                           </div>
                                       </div>
                                   </div>
                                   <!-- /Item -->
                                   <!-- Item -->
                                   <div class="col-6 col-sm-12">
                                       <div class="row">
                                           <div class="col-sm-4 col-md-3">
                                               <p class="item-title">Purchase Type:</p>
                                           </div>
                                           <div class="col-sm-8 col-md-9">
                                               <p class="item">{{$rental->purchase_type}}</p>
                                           </div>
                                       </div>
                                   </div>
                                   <!-- /Item -->
                                   <!-- Item -->
                                   <div class="col-6 col-sm-12">
                                       <div class="row">
                                           <div class="col-sm-4 col-md-3">
                                               <p class="item-title">Payment Status:</p>
                                           </div>
                                           <div class="col-sm-8 col-md-9">
                                               <p class="item">{{$rental->payment_status}}</p>
                                           </div>
                                       </div>
                                   </div>
                                   <!-- /Item -->
                                   <!-- Item -->
                                   <div class="col-6 col-sm-12">
                                       <div class="row">
                                           <div class="col-sm-4 col-md-3">
                                               <p class="item-title">Total Charge:</p>
                                           </div>
                                           <div class="col-sm-8 col-md-9">
                                               <p class="item">{{$rental->total_charge}}</p>
                                           </div>
                                       </div>
                                   </div>
                                   <!-- /Item -->
                                   <!-- Item -->
                                   @if($rental->toy_fee == '')

                                   @else
                                       <div class="row">
                                           <div class="col-sm-3">
                                               <p class="item-title">Toy Fee:</p>
                                           </div>
                                           <div class="col-sm-9">
                                               <p class="item">${{$rental->toy_fee}} ({{$rental->toy_fee_type}})</p>
                                           </div>
                                       </div>

                                   @endif
                               <!-- /Item -->

                                   <!-- Item -->
                                   @if($rental->trailer_fee == '')

                                   @else
                                       <div class="row">
                                           <div class="col-sm-3">
                                               <p class="item-title">Trailer Fee:</p>
                                           </div>
                                           <div class="col-sm-9">
                                               <p class="item">${{$rental->trailer_fee}} ({{$rental->trailer_fee_type}})</p>
                                           </div>
                                       </div>

                                   @endif
                                  <!-- /Item -->

                                   <!-- Item -->
                                   @if($rental->late_fee == '')

                                   @else
                                       <div class="row">
                                           <div class="col-sm-3">
                                               <p class="item-title">Late Fee:</p>
                                           </div>
                                           <div class="col-sm-9">
                                               <p class="item">${{$rental->late_fee}} ({{$rental->late_fee_type}})</p>
                                           </div>
                                       </div>

                                   @endif
                                 <!-- /Item -->

                                   <!-- Item -->
                                   @if($rental->no_wake_fee == '')

                                   @else
                                       <div class="row">
                                           <div class="col-sm-3">
                                               <p class="item-title">No Wake Fee:</p>
                                           </div>
                                           <div class="col-sm-9">
                                               <p class="item">${{$rental->no_wake_fee}} ({{$rental->no_wake_fee_type}})</p>
                                           </div>
                                       </div>

                                   @endif
                                   <!-- /Item -->

                                   <!-- Item -->
                                   @if($rental->cleaning_fee == '')

                                   @else
                                       <div class="row">
                                           <div class="col-sm-3">
                                               <p class="item-title">Cleaning Fee:</p>
                                           </div>
                                           <div class="col-sm-9">
                                               <p class="item">${{$rental->cleaning_fee}} ({{$rental->cleaning_fee_type}})</p>
                                           </div>
                                       </div>

                                   @endif
                                  <!-- /Item -->

                                   <!-- Item -->
                                   @if($rental->sar_fee == '')

                                   @else
                                       <div class="row">
                                           <div class="col-sm-3">
                                               <p class="item-title">Search & Rescue Fee:</p>
                                           </div>
                                           <div class="col-sm-9">
                                               <p class="item">${{$rental->sar_fee}} ({{$rental->sar_fee_type}})</p>
                                           </div>
                                       </div>

                               @endif
                               <!-- /Item -->

                                   <!-- Item -->
                                   <div class="col-12 col-sm-12">
                                       <div class="row">
                                           <div class="col-sm-4 col-md-3">
                                               <p class="item-title">Notes:</p>
                                           </div>
                                           <div class="col-sm-8 col-md-9">
                                               <p class="item">{{$rental->customer_notes}}</p>
                                           </div>
                                       </div>
                                   </div>
                                   <!-- /Item -->
                               </div>

                            </div>
                        </div>
                        <!-- /Renter Info -->
                        <!-- Rental Info -->
                        <div class="col-sm-6">
                            <div class="area-box">
                                <div class="row">
                                    <!-- Item -->
                                    <div class="col-6 col-sm-12">
                                        <div class="row">
                                            <div class="hidden-sm col-md-2"></div>
                                            <div class="col-sm-5 col-md-3">
                                                <p class="item-title">First Name:</p>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="item">{{$rental->first_name}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="col-6 col-sm-12">
                                        <div class="row">
                                            <div class="hidden-sm col-md-2"></div>
                                            <div class="col-sm-5 col-md-3">
                                                <p class="item-title">Last Name:</p>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="item">{{$rental->last_name}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="col-6 col-sm-12">
                                        <div class="row">
                                            <div class="hidden-sm col-md-2"></div>
                                            <div class="col-sm-5 col-md-3">
                                                <p class="item-title">Email:</p>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="item">{{$rental->email}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="col-6 col-sm-12">
                                        <div class="row">
                                            <div class="hidden-sm col-md-2"></div>
                                            <div class="col-sm-5 col-md-3">
                                                <p class="item-title">Phone:</p>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="item">{{$rental->phone}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="col-6 col-sm-12">
                                        <div class="row">
                                            <div class="hidden-sm col-md-2"></div>
                                            <div class="col-sm-5 col-md-3">
                                                <p class="item-title">Zip Code:</p>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="item">{{$rental->zip_code}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                </div>




                            @foreach($rental->vehicles as $rental_vehicle)
                                <!-- Item -->
                                    <div class="row">
                                        <div class="hidden-sm col-md-2"></div>
                                        <div class="col-sm-5 col-md-3">
                                            <p class="item-title">Vehicle:</p>
                                        </div>
                                        <div class="col-sm-7">
                                            <p class="item">
                                                {{$rental_vehicle->vehicle_type}}
                                                {{$rental_vehicle->internal_vehicle_id}}
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /Item -->

                            @endforeach

                            <div class="area-box">
                                <div class="row">
                                    <!-- PreCheck by -->
                                    @if($rental->precheck_by !== '')
                                        @foreach($users as $user)
                                            @if($rental->precheck_by == $user->id)
                                                <!-- Item -->
                                                <div class="col-6 col-sm-12">
                                                    <div class="row">
                                                        <div class="hidden-sm col-md-2"></div>
                                                        <div class="col-sm-5 col-md-3">
                                                            <p class="item-title">Pre-Checked By:</p>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <p class="item">{{$user->firstname}} {{$user->lastname}}</p>
                                                        </div>
                                                    </div>
                                                    <!-- /Item -->
                                                    <!-- Item -->
                                                    <div class="row">
                                                        <div class="hidden-sm col-md-2"></div>
                                                        <div class="col-sm-5 col-md-3">
                                                            <p class="item-title">Pre-Checked Time:</p>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <p class="item">
                                                                {{ \Carbon\Carbon::parse($rental->precheck_time)->format('F j, Y - h:i:s A') }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                            @endif
                                        @endforeach
                                    @endif
                                    <!-- /PreCheck by -->


                                    <!-- Checked in by -->
                                    @if($rental->check_in_by == '')
                                        &nbsp;
                                @else
                                    @foreach($users as $user)
                                        @if($rental->check_in_by == $user->id)
                                            <!-- Item -->
                                                <div class="col-6 col-sm-12">
                                                    <div class="row">
                                                        <div class="hidden-sm col-md-2"></div>
                                                        <div class="col-sm-5 col-md-3">
                                                            <p class="item-title">Checked In By:</p>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <p class="item">{{$user->firstname}} {{$user->lastname}}</p>
                                                        </div>
                                                    </div>
                                                    <!-- /Item -->
                                                    <!-- Item -->
                                                    <div class="row">
                                                        <div class="hidden-sm col-md-2"></div>
                                                        <div class="col-sm-5 col-md-3">
                                                            <p class="item-title">Check In Time:</p>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <p class="item">
                                                                {{ \Carbon\Carbon::parse($rental->check_in_time)->format('F j, Y - h:i:s A') }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                        @endif
                                    @endforeach
                                @endif
                                <!-- /Checked in by -->
                                    <!-- Launched by -->
                                    @if($rental->launched_by == '')
                                        &nbsp;
                                @else
                                    @foreach($users as $user)
                                        @if($rental->launched_by == $user->id)
                                           <div class="col-6 col-sm-12">
                                               <!-- Item -->
                                               <div class="row">
                                                   <div class="hidden-sm col-md-2"></div>
                                                   <div class="col-sm-5 col-md-3">
                                                       <p class="item-title">Launched By:</p>
                                                   </div>
                                                   <div class="col-sm-7">
                                                       <p class="item">{{$user->firstname}} {{$user->lastname}}</p>
                                                   </div>
                                               </div>
                                               <!-- /Item -->
                                               <!-- Item -->
                                               <div class="row">
                                                   <div class="hidden-sm col-md-2"></div>
                                                   <div class="col-sm-5 col-md-3">
                                                       <p class="item-title">Launch Time:</p>
                                                   </div>
                                                   <div class="col-sm-7">
                                                       <p class="item">
                                                           {{ \Carbon\Carbon::parse($rental->launched_time)->format('F j, Y - h:i:s A') }}
                                                           {{--                                                            {{ \Carbon\Carbon::parse($rental->launched_time)->format('l - F j,   Y h:i:s A') }}--}}
                                                       </p>
                                                   </div>
                                               </div>
                                               <!-- /Item -->
                                           </div>
                                        @endif
                                    @endforeach
                                @endif
                                <!-- /Launched by -->
                                <!-- Cleared by -->
                                @if($rental->cleared_by == '')
                                    &nbsp;
                                @else
                                    @foreach($users as $user)
                                        @if($rental->cleared_by == $user->id)
                                            <!-- Item -->
                                               <div class="col-6 col-sm-12">
                                                   <div class="row">
                                                       <div class="hidden-sm col-md-2"></div>
                                                       <div class="col-sm-5 col-md-3">
                                                           <p class="item-title">Cleared By:</p>
                                                       </div>
                                                       <div class="col-sm-7">
                                                           <p class="item">{{$user->firstname}} {{$user->lastname}}</p>
                                                       </div>
                                                   </div>
                                               </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="col-6 col-sm-12">
                                                    <div class="row">
                                                        <div class="hidden-sm col-md-2"></div>
                                                        <div class="col-sm-5 col-md-3">
                                                            <p class="item-title">Clear Time:</p>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <p class="item">
                                                                {{ \Carbon\Carbon::parse($rental->cleared_time)->format('F j, Y - h:i:s A') }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                        @endif
                                    @endforeach
                                @endif
                                <!-- /Cleared by -->
                                </div>




                            </div>

                            </div>
                        </div>
                        <!-- /Rental Info -->
                    </div>
                </div>
                <!-- /Rental Information -->
            </div>
        </div>
        <!-- /RENTAL INFORMATION -->


        <!-- CUSTOMER INFORMATION -->
        <div class="card mb-4 shadow">
            <div class="card-header">
                <h3 class="card-title">Customer Information</h3>
            </div>

            <div class="card-body">
                @foreach($rental->customers as $rental_customer)
                    @if($rental_customer->customer_id == $rental->customer_id)

                        <div class="row">
                            <!-- Renter Info -->
                            <div class="col-sm-6 col-md-4">
                                <div class="area-box">
                                    <div class="row">

                                        <!-- Item -->
                                        <div class="col-6 col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <p class="item-title">First Name:</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <p class="item">{{$rental_customer->first_name}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                        <div class="col-6 col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <p class="item-title">Last Name:</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <p class="item">{{$rental_customer->last_name}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                        <div class="col-6 col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <p class="item-title">Email:</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <p class="item">{{$rental_customer->email}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                        <div class="col-6 col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <p class="item-title">Phone:</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <p class="item">{{$rental_customer->phone}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                        <div class="col-6 col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <p class="item-title">Birth Date:</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <p class="item">{{\Carbon\Carbon::parse($rental_customer->birth_date)->format('M d, Y')}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                        <div class="col-6 col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <p class="item-title">How Heard:</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <p class="item">{{$rental_customer->how_heard}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Item -->

                                    </div>

                                </div>
                            </div>
                            <!-- /Renter Info -->

                            <!-- Rental Info -->
                            <div class="col-sm-6 col-md-4">
                                <div class="area-box">
                                    <div class="row">

                                        <!-- Item -->
                                        <div class="col-6 col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <p class="item-title">Address</p>
                                                </div>
                                                <div class="col-sm-6 col-md-8">
                                                    <p class="item">{{$rental_customer->address_1}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                        <div class="col-6 col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <p class="item-title">City:</p>
                                                </div>
                                                <div class="col-sm-6 col-md-8">
                                                    <p class="item">{{$rental_customer->city}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                        <div class="col-6 col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <p class="item-title">State:</p>
                                                </div>
                                                <div class="col-sm-6 col-md-8">
                                                    <p class="item">{{$rental_customer->state}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                        <div class="col-6 col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <p class="item-title">Zip Code:</p>
                                                </div>
                                                <div class="col-sm-6 col-md-8">
                                                    <p class="item">{{$rental_customer->zip_code}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                        <div class="col-6 col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <p class="item-title">License State:</p>
                                                </div>
                                                <div class="col-sm-6 col-md-8">
                                                    <p class="item">{{$rental_customer->driver_license_state}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                        <div class="col-6 col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4">
                                                    <p class="item-title">License Number:</p>
                                                </div>
                                                <div class="col-sm-6 col-md-8">
                                                    <p class="item">{{$rental_customer->driver_license_number}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Item -->

                                    </div>

                                </div>
                            </div>

                            <div class="col-sm-6 offset-sm-3 col-md-4 offset-md-0">
                                <div class="mb-4 mt-4">
                                    @if($rental_customer->license_front == 'null')
                                        &nbsp;
                                    @else
                                        <img class="img-responsive" src="{{asset('storage/' . $rental_customer->license_front)}}" height="150px" width="auto"  alt="{{$rental_customer->first_name}} {{$rental_customer->last_name}} License not uploaded yet... "/>
                                    @endif
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="modal-footer pb-0">


                                    </div>
                                </div>
                            </div>
                            <!-- /Rental Info -->
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="modal-footer pb-0">
                                    <a class="btn btn-secondary"
                                       href="#"
                                       class="customer-update-modal"
                                       data-toggle="modal"
                                       data-target="#customer_update{{$rental_customer->id}}">Update Customer</a>

                                    <a href="{{route('office.customerProfile', $rental_customer->id)}}" class="btn btn-primary">
                                       View Customer
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Update Customer Modal -->
                        <div class="modal fade" id="customer_update{{$rental_customer->id}}" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{route('office.updateCustomer', $rental_customer->id)}}" enctype="multipart/form-data" class="addCustomer-form">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="first_name">First Name</label>
                                                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{$rental_customer->first_name}}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="last_name">Last Name</label>
                                                        <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{$rental_customer->last_name}}">
                                                        @error('last_name')
                                                        <span>{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="phone">Phone Number</label>
                                                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{$rental_customer->phone}}">
                                                        @error('phone')
                                                        <span>{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$rental_customer->email}}">
                                                        @error('email')
                                                        <span>{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="address_1">Address</label>
                                                        <input type="text" class="form-control " name="address_1" value="{{$rental_customer->address_1}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- Left Side -->
                                                <div class="col-sm-6">

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label for="city">City</label>
                                                                <input type="text" class="form-control" name="city" value="{{$rental_customer->city}}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <label for="state">State</label>
                                                                <input type="text" class="form-control" name="state" value="{{$rental_customer->state}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label for="zip_code">Zip Code</label>
                                                                <input type="text" class="form-control" name="zip_code" value="{{$rental_customer->zip_code}}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label for="driver_license_state">DL State</label>
                                                                <input type="text" class="form-control" name="driver_license_state" value="{{$rental_customer->driver_license_state}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <label for="driver_license_number">DL Number</label>
                                                                <input type="text" class="form-control" name="driver_license_number" value="{{$rental_customer->driver_license_number}}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label for="birth_date">Birthdate</label>
                                                                <input type="text" class="form-control" name="birth_date" value="{{$rental_customer->birth_date}}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">

                                                    </div>

                                                </div>
                                                <!-- /Left Side -->

                                                <!-- Right Side -->
                                                <div class="col-sm-6">
                                                    <div class="col-sm-12">
                                                        <div class="form-group mb-4">
                                                            <label for="license_front">Driver License Front</label>
                                                            <input type="file" class="form-control" name="license_front">
                                                        </div>
                                                        <div class="mb-4">
                                                            <img class="img-responsive" src="{{asset('storage/' . $rental_customer->license_front)}}" height="150px" width="auto">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Right Side -->
                                            </div>



                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                                                <form action="#" method="post">
                                                    @csrf
                                                    <button  class="btn btn-primary" type="submit">UPDATE CUSTOMER</button>
                                                </form>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Update Customer Modal -->
                    @else
                       <h3>Customer not added yet...</h3>
                    @endif


                @endforeach

            </div>

        </div>
        <!-- /CUSTOMER INFORMATION -->


        <!-- COC INFORMATION -->
        @if($rental->status == 'COC')
            <div class="card mb-4 shadow">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3 class="card-title">Change of Condition</h3>
                            </div>
                            <div class="col-sm-6">
                                <h3 class="card-title vehicle text-right">
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
                                            <span>{{$vehicle->internal_vehicle_id}}</span>
                                        @endif
                                    @endforeach
                                    <span class="text-gray-600">&nbsp; | &nbsp; {{$rental->coc_status}}</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="area-box">
                            <div class="row">

                                <div class="col-sm-4">
                                    <img class="img-responsive" src="{{asset('storage/' . $rental->image_1)}}" height="150px" width="auto">
                                </div>
                                <div class="col-sm-5">
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">Incident:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{$rental->incident}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->

                                @foreach($maintenances as $maintenance)
                                    @if($maintenance->rental_invoice == $rental->invoice_number)
                                        <!-- /Item -->
                                            @if($maintenance->date_submitted)
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <p class="item-title">Date Submitted:</p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p class="item">{{\Carbon\Carbon::parse($maintenance->date_submitted)->format('M d, Y')}}</p>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <p class="item-title">Submitted By:</p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p class="item">
                                                            @foreach($users as $user)
                                                                @if($maintenance->submitted_by == $user->id)
                                                                    <span>{{$user->firstname}} {{$user->lastname}}</span>
                                                                @endif
                                                            @endforeach
                                                        </p>
                                                    </div>
                                                </div>
                                            @endif

                                            @if($maintenance->invoice)
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <p class="item-title">Date Invoice Submitted:</p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p class="item">{{\Carbon\Carbon::parse($maintenance->date_invoiced)->format('M d, Y')}}</p>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <p class="item-title">Invoice Submitted By:</p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p class="item">
                                                            @foreach($users as $user)
                                                                @if($maintenance->invoiced_by == $user->id)
                                                                    <span>{{$user->firstname}} {{$user->lastname}}</span>
                                                                @endif
                                                            @endforeach
                                                        </p>
                                                    </div>
                                                </div>
                                            @else
                                            @endif
                                            @if($maintenance->status == 'Completed')

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <p class="item-title">Date Completed:</p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p class="item">{{\Carbon\Carbon::parse($maintenance->date_completed)->format('M d, Y')}}</p>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <p class="item-title">Invoice Accepted By:</p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p class="item">
                                                            @foreach($users as $user)
                                                                @if($maintenance->approved_by == $user->id)
                                                                    <span>{{$user->firstname}} {{$user->lastname}}</span>
                                                                @endif
                                                            @endforeach
                                                        </p>
                                                    </div>
                                                </div>
                                            @endif



                                        @endif
                                    @endforeach
                                </div>
                                <div class="col-sm-3">
                                    <!-- /Item -->
                                    @foreach($maintenances as $maintenance)
                                        @if($maintenance->rental_invoice == $rental->invoice_number && $maintenance->service_status !== '')
                                                <!-- Item -->
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p class="item-title">Service Status:</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p class="item text-right text-red">{{$maintenance->status}}</p>
                                                        </div>
                                                    </div>
                                                    <!-- /Item -->
                                                    <!-- Item -->
                                                    @if($maintenance->invoice)
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <p class="item-title">Service Invoice #:</p>
                                                            </div>
                                                            <div class="col-6">
                                                                <p class="item">{{$maintenance->service_invoice}}</p>
                                                            </div>
                                                        </div>
                                                    @else
                                                    @endif
                                                    <!-- /Item -->
                                                   <!-- Item -->
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <p class="item-title">Service Notes:</p>
                                                        </div>
                                                        <div class="col-12">
                                                            <p class="item">{{$maintenance->service_notes}}</p>
                                                        </div>
                                                    </div>
                                                    <!-- /Item -->
                                                    @if($maintenance->date_invoiced)
                                                        <a href="#" class="btn btn-primary auto-height align-right mt-3" data-toggle="modal" data-target="#invoiceModal">View Invoice</a>
                                                    @endif
                                            @else
                                        @endif
                                    @endforeach
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="modal-footer pb-0">
                                        <a class="btn btn-primary-red"
                                           href="#"
                                           class="customer-update-modal"
                                           data-toggle="modal"
                                           data-target="#cocUpdate">Update COC</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endif
        <!-- /COC INFORMATION -->





    @endsection


    @section('sidebar')
        <!-- Update COC Modal -->
        <div class="modal fade" id="cocUpdate" tabindex="-1" role="dialog" aria-labelledby="cocUpdateModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3><span>Update: </span> COC</h3>
                        </div>
                        <form action="{{route('rental.rentalCocUpdate', $rental)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="modal-body">

                                <div class="form-group">
                                    <label for="incident">Update Incident Description</label>
                                    <textarea name="incident" id="incident" cols="30" rows="5">{{$rental->incident}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="image_1">Update Image</label>
                                    <input type="file" class="form-control" name="image_1">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                                <button class="btn btn-primary" type="submit">update COC</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        <!-- Invoice Modal -->
        <div class="modal fade" id="invoiceModal" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg mt-0" role="document">
                @foreach($maintenances as $maintenance)
                    @if($maintenance->rental_invoice == $rental->invoice_number)
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3><span>Change of Condition: </span> Service Invoice #{{$maintenance->service_invoice}}</h3>
                            </div>
                            <div class="modal-body">
                                <iframe src="{{asset('storage/' . $maintenance->invoice)}}" style="width: 100%;height: 800px;border: none;"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">close</button>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <!-- /Invoice Modal -->

        <!-- Recent Announcement Widget -->
        @foreach($posts as $post)
            <div class="card my-4 shadow">
                <h5 class="card-header text-center">{{$post->title}}</h5>
                <div class="card-body">
                    {{\Illuminate\Support\Str::limit($post->body, '200', '...')}}
                </div>
                <a href="{{route('post', $post->id)}}" class="btn btn-primary-red">Read More</a>
            </div>
        @endforeach
    @endsection



    @section('scripts')
    <!-- Page level plugins -->
        <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('js/demo/datatables-scripts.js')}}"></script>
    @endsection

</x-office-master>
