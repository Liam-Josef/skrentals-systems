<x-office-master>



    @foreach($applications as $application)

        @section('page_title')
            <h1>Pre-Check - {{$rental->first_name}} {{$rental->last_name}}</h1>
        @endsection

        @section('browser_title')
            <title>Pre-Check - {{$rental->first_name}} {{$rental->last_name}} | {{$application->name}}</title>
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


    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection


    @section('page_title')
            <h1>Pre-Check:
                <span>
                    <!-- Rental Duration UPDATED -->
                    @if(strpos($rental->ticket_list, '1 Hour') !== false)
                        1 Hr
                    @elseif(strpos($rental->ticket_list, '1 hour') !== false)
                        1 Hr
                    @endif
                    @if(strpos($rental->ticket_list, '2 hour') !== false)
                        2 Hr
                    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
                        2 Hr
                    @endif
                    @if(strpos($rental->ticket_list, '3 Hour') !== false)
                        3 Hr
                    @elseif(strpos($rental->ticket_list, '3 hour') !== false)
                        3 Hr
                    @endif
                    @if(strpos($rental->ticket_list, '4 Hour') !== false)
                        HD
                    @elseif(strpos($rental->ticket_list, '4 hour') !== false)
                        HD
                    @endif
                    @if(strpos($rental->ticket_list, '8 Hour') !== false)
                        FD
                    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
                        FD
                    @endif
                    @if(strpos($rental->ticket_list, '9 Hour') !== false)
                        FD
                    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
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
                    | {{$rental->first_name}} {{$rental->last_name}}</span>
            </h1>
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
                                            <div class="col-sm-4">
                                                <p class="item-title">Booking ID:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item">{{$rental->booking_id}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">Vehicle:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{$rental->activity_item}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">Rental Date:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{\Carbon\Carbon::parse($rental->activity_date)->format('M d, Y')}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="col-6 col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p class="item-title">Ticket List:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item">{{$rental->ticket_list}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="col-6 col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p class="item-title">Purchase Type:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item">{{$rental->purchase_type}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="col-6 col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p class="item-title">Payment Status:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item">{{$rental->payment_status}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <div class="col-6 col-sm-12">
                                        <!-- Item -->
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p class="item-title">Total Charge:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item">{{$rental->total_charge}}</p>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /Renter Info -->
                        <div class="col-sm-1">
                            <div class="area-box">

                            </div>
                        </div>
                        <!-- Rental Info -->
                        <div class="col-sm-5">
                            <div class="area-box">
                                <div class="row">
                                    <!-- Item -->
                                    <div class="col-6 col-sm-12">
                                        <div class="row">
                                            <div class="hidden-sm col-md-1"></div>
                                            <div class="col-sm-4 col-md-3">
                                                <p class="item-title">First Name:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item">{{$rental->first_name}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                   <div class="col-6 col-sm-12">
                                       <div class="row">
                                           <div class="hidden-sm col-sm-1"></div>
                                           <div class="col-sm-4 col-md-3">
                                               <p class="item-title">Last Name:</p>
                                           </div>
                                           <div class="col-sm-8">
                                               <p class="item">{{$rental->last_name}}</p>
                                           </div>
                                       </div>
                                   </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="col-6 col-sm-12">
                                        <div class="row">
                                            <div class="hidden-sm col-sm-1"></div>
                                            <div class="col-sm-4 col-md-3">
                                                <p class="item-title">Email:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item">{{$rental->email}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="col-6 col-sm-12">
                                        <div class="row">
                                            <div class="hidden-sm col-sm-1"></div>
                                            <div class="col-sm-4 col-md-3">
                                                <p class="item-title">Phone:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item">{{$rental->phone = substr($rental->phone, 2)}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="col-6 col-sm-12">
                                        <div class="row">
                                            <div class="hidden-sm col-sm-1"></div>
                                            <div class="col-sm-4 col-md-3">
                                                <p class="item-title">Zip Code:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item">{{$rental->zip_code}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Item -->
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
                <p class="card-title-sub">This is the info for the person doing the deposit...</p>
            </div>

            <div class="card-body">
                @foreach($rental->customers as $rental_customer)
                    @if($rental_customer->customer_id == $rental->customer_id)

                        <div class="row">
                            <!-- Renter Info -->
                            <div class="col-sm-4">
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
                                                   <p class="item">{{$rental_customer->birth_date}}</p>
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
                            <div class="col-sm-4">
                                <div class="area-box">
                                    <div class="row">

                                        <!-- Item TODO - Dynamic customer address-->
                                        <div class="col-6 col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <p class="item-title">Address</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <p class="item">{{$rental_customer->address_1}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                        <div class="col-6 col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <p class="item-title">City:</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <p class="item">{{$rental_customer->city}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                        <div class="col-6 col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <p class="item-title">State:</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <p class="item">{{$rental_customer->state}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                        <div class="col-6 col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <p class="item-title">Zip Code:</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <p class="item">{{$rental_customer->zip_code}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                       <div class="col-6 col-sm-12">
                                           <div class="row">
                                               <div class="col-sm-4">
                                                   <p class="item-title">License State:</p>
                                               </div>
                                               <div class="col-sm-8">
                                                   <p class="item">{{$rental_customer->driver_license_state}}</p>
                                               </div>
                                           </div>
                                       </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                        <div class="col-6 col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <p class="item-title">License Number:</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <p class="item">{{$rental_customer->driver_license_number}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Item -->

                                    </div>

                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="mb-4">
                                    @if($rental_customer->license_front == 'null')
                                        &nbsp;
                                    @else
                                        <img class="img-responsive" src="{{asset('storage/' . $rental_customer->license_front)}}" height="150px" width="auto"  alt="{{$rental_customer->first_name}} {{$rental_customer->last_name}}"/>
                                    @endif
                                </div>
                            </div>





                            <div class="">
                                <div class="col-sm-12">
                                    <div class="modal-footer pb-0">
                                        <a class="btn btn-secondary"
                                           @if(!$rental->customers->contains($rental_customer))
                                           hidden
                                           @endif
                                           href="#"
                                           class="customer-update-modal"
                                           data-toggle="modal"
                                           data-target="#customer_update{{$rental_customer->id}}">Update Customer</a>
                                        @foreach($rental->customers as $rental_customer)
                                            @if($rental_customer->customer_id == $rental->customer_id)
                                                <form method="post" action="{{route('office.customer.detach', $rental)}}">
                                                    @csrf
                                                    @method('PUT')

                                                    <input type="hidden" name="customer" value="{{$rental_customer->id}}">
                                                    <button class="btn btn-primary-red align-right"
                                                             @if(!$rental->customers->contains($rental_customer))
                                                             hidden
                                                             @endif
                                                             type="submit">Change Customer</button>
                                                </form>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- /Rental Info -->
                        </div>

                        <!-- Update Customer Modal -->
                        <div class="modal fade" id="customer_update{{$rental_customer->id}}" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3>Update: <span>{{$rental_customer->first_name}} {{$rental_customer->last_name}}</span></h3>
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
                                                                <!-- TODO - Add Select -  If rental customer state = state value - then create default selected item -->

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
                                                                <input type="date" class="form-control" name="birth_date" value="{{$rental_customer->birth_date}}">
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
                                                            <input type="file" class="form-control" name="license_front" id="license_front" accept="image/*" capture="camera">
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
                        NOT WORKING!
                    @endif

                @endforeach

            </div>

            <div class="row
                @foreach($rental->customers as $rental_customer)
            @if($rental_customer->customer_id == $rental->customer_id)
                hidden
@endif
            @endforeach
                ">
                <div class="col-sm-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="search-customer-tab" data-toggle="tab" href="#search-customer" role="tab" aria-controls="search-customer"
                               aria-selected="true">Returning Customer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="add-customer-tab" data-toggle="tab" href="#add-customer" role="tab" aria-controls="add-customer"
                               aria-selected="false">New Customer</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="search-customer" role="tabpanel" aria-labelledby="search-customer-tab">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="rentalCustomersTable" width="100% !important;" cellspacing="0">
                                                <thead>
                                                <tr>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <!-- Remved hidden-xs-table -->
                                                    <th class="hidden-xs-table">Email</th>
                                                    <th class="hidden-xs-table">Phone</th>
                                                    <th>&nbsp;</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($customers as $customer)
                                                    <tr>
                                                        <td class="no-border-right">{{$customer->first_name}}</td>
                                                        <td class="no-border-right">{{$customer->last_name}}</td>
                                                        <!-- Remved hidden-xs-table -->
                                                        <td class="no-border-right hidden-xs-table">{{$customer->email}}</td>
                                                        <td class="no-border-right hidden-xs-table">{{$customer->phone}}</td>
                                                        <td>
                                                            <form method="post" action="{{route('office.customer.attach', $rental)}}">
                                                                @csrf
                                                                @method('PUT')

                                                                <input type="hidden" name="customer" value="{{$customer->id}}">
                                                                <button
                                                                    class="btn btn-secondary"
                                                                    @if($rental->customers->contains($customer))
                                                                    disabled
                                                                    @endif
                                                                    type="submit">Select</button>
                                                            </form>
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
                        <div class="tab-pane fade" id="add-customer" role="tabpanel" aria-labelledby="add-customer-tab">
                            <div class="card-form">
                                <form method="post" action="{{route('office.customer.store', $rental)}}" enctype="multipart/form-data" class="addCustomer-form">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="first_name">First Name</label>
                                                <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="last_name">Last Name</label>
                                                <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name">
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
                                                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone">
                                                @error('phone')
                                                <span>{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email">
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
                                                <input type="text" class="form-control " name="address_1">
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
                                                        <input type="text" class="form-control" name="city">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label for="state">State</label>
                                                        <select id="state" name="state" class="form-control @error('state') is-invalid @enderror">
                                                            <option value="Oregon">Oregon</option>
                                                            <option value="Washington">Washington</option>
                                                            <option value="California">California</option>
                                                            <option default>-----</option>
                                                            <option value="Alabama">Alabama</option>
                                                            <option value="Alaska">Alaska</option>
                                                            <option value="arizona">Arizona</option>
                                                            <option value="Arkansas">Arkansas</option>
                                                            <option value="Colorado">Colorado</option>
                                                            <option value="Connecticut">Connecticut</option>
                                                            <option value="Delaware">Delaware</option>
                                                            <option value="Florida">Florida</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Hawaii">Hawaii</option>
                                                            <option value="Idaho">Idaho</option>
                                                            <option value="Illinois">Illinois</option>
                                                            <option value="Indiana">Indiana</option>
                                                            <option value="Iowa">Iowa</option>
                                                            <option value="Kansas">Kansas</option>
                                                            <option value="Kentucky">Kentucky</option>
                                                            <option value="Louisiana">Louisiana</option>
                                                            <option value="Maine">Maine</option>
                                                            <option value="Maryland">Maryland</option>
                                                            <option value="Massachusetts">Massachusetts</option>
                                                            <option value="Michigan">Michigan</option>
                                                            <option value="Minnesota">Minnesota</option>
                                                            <option value="Mississippi">Mississippi</option>
                                                            <option value="Missouri">Missouri</option>
                                                            <option value="Montana">Montana</option>
                                                            <option value="Nebraska">Nebraska</option>
                                                            <option value="Nevada">Nevada</option>
                                                            <option value="New Hampshire">New Hampshire</option>
                                                            <option value="New Jersey">New Jersey</option>
                                                            <option value="New Mexico">New Mexico</option>
                                                            <option value="New York">New York</option>
                                                            <option value="North Carolina">North Carolina</option>
                                                            <option value="North Dakota">North Dakota</option>
                                                            <option value="Ohio">Ohio</option>
                                                            <option value="Oklahoma">Oklahoma</option>
                                                            <option value="Pennsylvania">Pennsylvania</option>
                                                            <option value="Rhode Island">Rhode Island</option>
                                                            <option value="South Carolina">South Carolina</option>
                                                            <option value="South Dakota">South Dakota</option>
                                                            <option value="Tennessee">Tennessee</option>
                                                            <option value="Texas">Texas</option>
                                                            <option value="Utah">Utah</option>
                                                            <option value="Vermont">Vermont</option>
                                                            <option value="West Virgina">West Virgina</option>
                                                            <option value="Wisconsin">Wisconsin</option>
                                                            <option value="Wyoming">Wyoming</option>
                                                            <option value="Not Available">N/A - Use Address Section</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="zip_code">Zip Code</label>
                                                        <input type="text" class="form-control" name="zip_code">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- /Left Side -->

                                        <!-- Right Side -->
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="driver_license_state">Driver License State</label>
                                                        <select id="driver_license_state" name="driver_license_state" class="form-control @error('driver_license_state') is-invalid @enderror">
                                                            <option value="Oregon">Oregon</option>
                                                            <option value="Washington">Washington</option>
                                                            <option value="California">California</option>
                                                            <option default>-----</option>
                                                            <option value="Alabama">Alabama</option>
                                                            <option value="Alaska">Alaska</option>
                                                            <option value="arizona">Arizona</option>
                                                            <option value="Arkansas">Arkansas</option>
                                                            <option value="Colorado">Colorado</option>
                                                            <option value="Connecticut">Connecticut</option>
                                                            <option value="Delaware">Delaware</option>
                                                            <option value="Florida">Florida</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Hawaii">Hawaii</option>
                                                            <option value="Idaho">Idaho</option>
                                                            <option value="Illinois">Illinois</option>
                                                            <option value="Indiana">Indiana</option>
                                                            <option value="Iowa">Iowa</option>
                                                            <option value="Kansas">Kansas</option>
                                                            <option value="Kentucky">Kentucky</option>
                                                            <option value="Louisiana">Louisiana</option>
                                                            <option value="Maine">Maine</option>
                                                            <option value="Maryland">Maryland</option>
                                                            <option value="Massachusetts">Massachusetts</option>
                                                            <option value="Michigan">Michigan</option>
                                                            <option value="Minnesota">Minnesota</option>
                                                            <option value="Mississippi">Mississippi</option>
                                                            <option value="Missouri">Missouri</option>
                                                            <option value="Montana">Montana</option>
                                                            <option value="Nebraska">Nebraska</option>
                                                            <option value="Nevada">Nevada</option>
                                                            <option value="New Hampshire">New Hampshire</option>
                                                            <option value="New Jersey">New Jersey</option>
                                                            <option value="New Mexico">New Mexico</option>
                                                            <option value="New York">New York</option>
                                                            <option value="North Carolina">North Carolina</option>
                                                            <option value="North Dakota">North Dakota</option>
                                                            <option value="Ohio">Ohio</option>
                                                            <option value="Oklahoma">Oklahoma</option>
                                                            <option value="Pennsylvania">Pennsylvania</option>
                                                            <option value="Rhode Island">Rhode Island</option>
                                                            <option value="South Carolina">South Carolina</option>
                                                            <option value="South Dakota">South Dakota</option>
                                                            <option value="Tennessee">Tennessee</option>
                                                            <option value="Texas">Texas</option>
                                                            <option value="Utah">Utah</option>
                                                            <option value="Vermont">Vermont</option>
                                                            <option value="West Virgina">West Virgina</option>
                                                            <option value="Wisconsin">Wisconsin</option>
                                                            <option value="Wyoming">Wyoming</option>
                                                            <option value="Not Available">N/A - Use Address Section</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="driver_license_number">Driver License Number</label>
                                                        <input type="text" class="form-control" name="driver_license_number">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="birth_date">Birth Date</label>
                                                        <input type="date" class="form-control" name="birth_date">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="how_heard">How Heard</label>
                                                        <input type="text" class="form-control" name="how_heard">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group mb-4">
                                                        <label for="license_front">Driver License Front (required)</label>
                                                        <input type="file" class="form-control" name="license_front">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Right Side -->
                                    </div>



                                    <div class="modal-footer">
{{--                                        <input type="hidden" name="customer" value="{{$customer->id}}">--}}


                                        <button  class="btn btn-danger" type="submit">ADD CUSTOMER</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /CUSTOMER INFORMATION -->


        <!-- CHECK IN BUTTONS -->
        <div class="card mt-4 mb-5 shadow">
            <div class="modal-footer">
                <form action="{{route('office.rentalStatusPreCheck', $rental->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    {{--                        <input type="hidden" value="{{$rental->user->firstname}}" name="checked_in_by">--}}
                    <input type="hidden" value="Pre-Check" name="status">
                    <input type="hidden" value="{{$dateNow}}" name="precheck_time">
                    @if(Auth::check())
                        <input type="hidden" value="{{auth()->user()->id}}" name="precheck_by">
                    @endif
                    <button class="btn btn-primary" type="submit">PRE-CHECK</button>
                </form>
            </div>
        </div>
        <!-- /CHECK IN BUTTONS -->



    @endsection


    @section('sidebar')
    <!-- Pre-Check Widget -->
        <div class="card my-4 shadow">
            <h5 class="card-header text-center">Pre-Checked In</h5>
            @if($rentalPreCheckShowCount > 0)
                @foreach($rentalPreCheckShow as $rental)
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <h3 class="text-red">{{$rental->last_name}}</h3>
                            </div>
                            <div class="col-4">
                                <h6 class="mt-2">
                                    <!-- Rental Duration UPDATED -->
                                    <span class="gray">
                                @if(strpos($rental->ticket_list, '1 Hour') !== false)
                                            1 Hr
                                        @elseif(strpos($rental->ticket_list, '1 hour') !== false)
                                            1 Hr
                                        @endif
                                        @if(strpos($rental->ticket_list, '2 hour') !== false)
                                            2 Hr
                                        @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
                                            2 Hr
                                        @endif
                                        @if(strpos($rental->ticket_list, '3 Hour') !== false)
                                            3 Hr
                                        @elseif(strpos($rental->ticket_list, '3 hour') !== false)
                                            3 Hr
                                        @endif
                                        @if(strpos($rental->ticket_list, '4 Hour') !== false)
                                            HD
                                        @elseif(strpos($rental->ticket_list, '4 hour') !== false)
                                            HD
                                        @endif
                                        @if(strpos($rental->ticket_list, '8 Hour') !== false)
                                            FD
                                        @elseif(strpos($rental->ticket_list, '8 hour') !== false)
                                            FD
                                        @endif
                                        @if(strpos($rental->ticket_list, '9 Hour') !== false)
                                            FD
                                        @elseif(strpos($rental->ticket_list, '9 hour') !== false)
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

                                    @endif</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            @elseif($rentalPreCheckShowCount <= 0)
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="text-center text-red">Nothing Pre-Checked</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    @endsection




    @section('scripts')
    <!-- Page level plugins -->
        <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('js/demo/datatables-scripts.js')}}"></script>
    @endsection

</x-office-master>
