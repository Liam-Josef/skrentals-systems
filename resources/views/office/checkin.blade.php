<x-office-master>

    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection

        @foreach($applications as $application)

            @section('browser_title')
                <title>Office | {{$application->name}}</title>
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


    @section('page_title')
            <h1>Check In: <span>
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
                    | {{$rental->first_name}} {{$rental->last_name}}</span></h1>
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
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="item-title">Booking ID:</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="item">{{$rental->booking_id}}</p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="item-title">Vehicle:</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="item">{{$rental->activity_item}}</p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="item-title">Rental Date:</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="item">{{\Carbon\Carbon::parse($rental->activity_date)->format('M d, Y')}}</p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="item-title">Ticket List:</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="item">{{$rental->ticket_list}}</p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="item-title">Purchase Type:</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="item">{{$rental->purchase_type}}</p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="item-title">Payment Status:</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="item">{{$rental->payment_status}}</p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="item-title">Total Charge:</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="item">{{$rental->total_charge}}</p>
                                    </div>
                                </div>
                                <!-- /Item -->
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
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-3">
                                        <p class="item-title">First Name:</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="item">{{$rental->first_name}}</p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-3">
                                        <p class="item-title">Last Name:</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="item">{{$rental->last_name}}</p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-3">
                                        <p class="item-title">Email:</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="item">{{$rental->email}}</p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-3">
                                        <p class="item-title">Phone:</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="item">{{$rental->phone = substr($rental->phone, 2)}}</p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-3">
                                        <p class="item-title">Zip Code:</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="item">{{$rental->zip_code}}</p>
                                    </div>
                                </div>
                                <!-- /Item -->
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
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">First Name:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{$rental_customer->first_name}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">Last Name:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{$rental_customer->last_name}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">Email:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{$rental_customer->email}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">Phone:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{$rental_customer->phone}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">Birth Date:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{\Carbon\Carbon::parse($rental_customer->birth_date)->format('M d, Y')}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->

                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">How Heard:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{$rental_customer->how_heard}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                </div>
                            </div>
                            <!-- /Renter Info -->

                            <!-- Rental Info -->
                            <div class="col-sm-4">
                                <div class="area-box">
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">Address</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{$rental_customer->address_1}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">City:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{$rental_customer->city}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">State:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{$rental_customer->state}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">Zip Code:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{$rental_customer->zip_code}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->

                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">License State:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{$rental_customer->driver_license_state}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->

                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">License Number:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{$rental_customer->driver_license_number}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="mb-4">
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
                                                    <button  class="btn btn-primary-red align-right"
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
                                                                <label for="driver_license_state">Driver License State</label>
                                                                <input type="text" class="form-control" name="driver_license_state" value="{{$rental_customer->driver_license_state}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <label for="driver_license_number">Driver License Number</label>
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
                        <div class="tab-pane fade show active search-customer" id="search-customer" role="tabpanel" aria-labelledby="search-customer-tab">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="rentalCustomersTable" width="100% !important;" cellspacing="0">
                                                <thead>
                                                <tr>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th class="hidden-xs-table">Email</th>
                                                    <th class="hidden-xs-table">Phone</th>
                                                    {{--                                                            <th># of Rentals</th>--}}
                                                    {{--                                                            <th>Last Rental</th>--}}
                                                    <th>&nbsp;</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($customers as $customer)
                                                    <tr>
                                                        <td class="no-border-right">{{$customer->first_name}}</td>
                                                        <td class="no-border-right">{{$customer->last_name}}</td>
                                                        <td class="no-border-right hidden-xs-table">{{$customer->email}}</td>
                                                        <td class="no-border-right hidden-xs-table">{{$customer->phone}}</td>
                                                        {{--                                                                        <td>$nbsp;</td>--}}
                                                        {{--                                                                        <td>$nbsp;</td>--}}
                                                        <td class="no-border-right">
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
                                <form method="post" action="{{route('office.customer.storeNew', $rental)}}" enctype="multipart/form-data" class="addCustomer-form">
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
                                                <input type="hidden" class="form-control" name="license_front" value="Add license in Pre-Check">
{{--                                                <div class="col-sm-6">--}}
{{--                                                    <div class="modal-footer mt-4">--}}
{{--                                                        <button  class="btn btn-danger submit" type="submit">ADD CUSTOMER</button>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
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
                <button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#cancel_rental{{$rental->id}}">CANCEL RENTAL</button>
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#checkin{{$rental->id}}">CHECK IN</button>

            </div>
        </div>
        <!-- /CHECK IN BUTTONS -->


        <form action="{{route('office.checkInRental', $rental->id)}}" method="post">
            @csrf
            @method('PUT')

            <!-- Check In - Step 1 - Security Deposit -->
            <div class="modal fade" id="checkin{{$rental->id}}" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3><span>Security</span> Deposit</h3>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                            <div class="modal-body">

                                <!-- Security Deposit -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4>Either:</h4>
                                        <ul>
                                            <li>
                                                <h5>
                                                    @if($rental->activity_item == 'Scarab 215')
                                                        @if(strpos($rental->ticket_list, '1x') !== false)
                                                            $1000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '2x') !== false)
                                                            $2000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '3x') !== false)
                                                            $3000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '4x') !== false)
                                                            $4000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '5x') !== false)
                                                            $5000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '6x') !== false)
                                                            $6000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '7x') !== false)
                                                            $7000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '8x') !== false)
                                                            $8000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '9x') !== false)
                                                            $9000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '10x') !== false)
                                                            $10000
                                                        @endif
                                                    @endif
                                                    @if($rental->activity_item == '23ft. Pontoon Boat')
                                                        @if(strpos($rental->ticket_list, '1x') !== false)
                                                            $1000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '2x') !== false)
                                                            $2000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '3x') !== false)
                                                            $3000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '4x') !== false)
                                                            $4000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '5x') !== false)
                                                            $5000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '6x') !== false)
                                                            $6000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '7x') !== false)
                                                            $7000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '8x') !== false)
                                                            $8000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '9x') !== false)
                                                            $9000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '10x') !== false)
                                                            $10000
                                                        @endif
                                                    @endif
                                                    @if($rental->activity_item == 'SeaDoo')
                                                        @if(strpos($rental->ticket_list, '1x') !== false)
                                                            $1000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '2x') !== false)
                                                            $2000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '3x') !== false)
                                                            $3000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '4x') !== false)
                                                            $4000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '5x') !== false)
                                                            $5000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '6x') !== false)
                                                            $6000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '7x') !== false)
                                                            $7000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '8x') !== false)
                                                            $8000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '9x') !== false)
                                                            $9000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '10x') !== false)
                                                            $10000
                                                        @endif
                                                    @endif
                                                    @if($rental->activity_item == '14ft. Aluminum Boat')
                                                        $500
                                                    @endif
                                                    @if($rental->activity_item == 'Segway i2')
                                                        @if(strpos($rental->ticket_list, '1x') !== false)
                                                            $500
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '2x') !== false)
                                                            $1000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '3x') !== false)
                                                            $1500
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '4x') !== false)
                                                            $2000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '5x') !== false)
                                                            $2500
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '6x') !== false)
                                                            $3000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '7x') !== false)
                                                            $3500
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '8x') !== false)
                                                            $4000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '9x') !== false)
                                                            $4500
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '10x') !== false)
                                                            $5000
                                                        @endif
                                                    @endif
                                                    @if($rental->activity_item == 'Spyder RT-S SE6')
                                                        @if(strpos($rental->ticket_list, '1x') !== false)
                                                            $1000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '2x') !== false)
                                                            $2000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '3x') !== false)
                                                            $3000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '4x') !== false)
                                                            $4000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '5x') !== false)
                                                            $5000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '6x') !== false)
                                                            $6000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '7x') !== false)
                                                            $7000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '8x') !== false)
                                                            $8000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '9x') !== false)
                                                            $9000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '10x') !== false)
                                                            $10000
                                                        @endif
                                                    @endif
                                                    @if($rental->activity_item == 'Renegade BC 600ETec')
                                                        @if(strpos($rental->ticket_list, '1x') !== false)
                                                            $1000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '2x') !== false)
                                                            $2000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '3x') !== false)
                                                            $3000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '4x') !== false)
                                                            $4000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '5x') !== false)
                                                            $5000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '6x') !== false)
                                                            $6000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '7x') !== false)
                                                            $7000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '8x') !== false)
                                                            $8000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '9x') !== false)
                                                            $9000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '10x') !== false)
                                                            $10000
                                                        @endif
                                                    @endif
                                                    @if($rental->activity_item == 'Summit 154 SP')
                                                        @if(strpos($rental->ticket_list, '1x') !== false)
                                                            $1000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '2x') !== false)
                                                            $2000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '3x') !== false)
                                                            $3000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '4x') !== false)
                                                            $4000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '5x') !== false)
                                                            $5000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '6x') !== false)
                                                            $6000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '7x') !== false)
                                                            $7000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '8x') !== false)
                                                            $8000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '9x') !== false)
                                                            $9000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '10x') !== false)
                                                            $10000
                                                        @endif
                                                    @endif
                                                    @if($rental->activity_item == 'Kayak Single')
                                                        @if(strpos($rental->ticket_list, '1x') !== false)
                                                            $100
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '2x') !== false)
                                                            $200
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '3x') !== false)
                                                            $300
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '4x') !== false)
                                                            $400
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '5x') !== false)
                                                            $500
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '6x') !== false)
                                                            $600
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '7x') !== false)
                                                            $700
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '8x') !== false)
                                                            $800
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '9x') !== false)
                                                            $900
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '10x') !== false)
                                                            $1000
                                                        @endif
                                                    @endif
                                                    @if($rental->activity_item == 'Double Kayak')
                                                        @if(strpos($rental->ticket_list, '1x') !== false)
                                                            $100
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '2x') !== false)
                                                            $200
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '3x') !== false)
                                                            $300
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '4x') !== false)
                                                            $400
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '5x') !== false)
                                                            $500
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '6x') !== false)
                                                            $600
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '7x') !== false)
                                                            $700
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '8x') !== false)
                                                            $800
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '9x') !== false)
                                                            $900
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '10x') !== false)
                                                            $1000
                                                        @endif
                                                    @endif
                                                    @if($rental->activity_item == 'Stand Up Paddleboard')
                                                        @if(strpos($rental->ticket_list, '1x') !== false)
                                                            $100
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '2x') !== false)
                                                            $200
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '3x') !== false)
                                                            $300
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '4x') !== false)
                                                            $400
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '5x') !== false)
                                                            $500
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '6x') !== false)
                                                            $600
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '7x') !== false)
                                                            $700
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '8x') !== false)
                                                            $800
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '9x') !== false)
                                                            $900
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '10x') !== false)
                                                            $1000
                                                        @endif
                                                    @endif

                                                    (raised card - Pre-Auth)
                                                </h5>
                                            </li>
                                            <li>
                                                <h5>
                                                    @if($rental->activity_item == 'Scarab 215')
                                                        @if(strpos($rental->ticket_list, '1x') !== false)
                                                            $2000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '2x') !== false)
                                                            $4000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '3x') !== false)
                                                            $6000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '4x') !== false)
                                                            $8000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '5x') !== false)
                                                            $10000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '6x') !== false)
                                                            $12000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '7x') !== false)
                                                            $14000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '8x') !== false)
                                                            $16000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '9x') !== false)
                                                            $18000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '10x') !== false)
                                                            $20000
                                                        @endif
                                                    @endif
                                                    @if($rental->activity_item == '23ft. Pontoon Boat')
                                                        @if(strpos($rental->ticket_list, '1x') !== false)
                                                            $2000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '2x') !== false)
                                                            $4000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '3x') !== false)
                                                            $6000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '4x') !== false)
                                                            $8000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '5x') !== false)
                                                            $10000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '6x') !== false)
                                                            $12000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '7x') !== false)
                                                            $14000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '8x') !== false)
                                                            $16000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '9x') !== false)
                                                            $18000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '10x') !== false)
                                                            $20000
                                                        @endif
                                                    @endif
                                                    @if($rental->activity_item == 'SeaDoo')
                                                        @if(strpos($rental->ticket_list, '1x') !== false)
                                                            $2000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '2x') !== false)
                                                            $4000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '3x') !== false)
                                                            $6000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '4x') !== false)
                                                            $8000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '5x') !== false)
                                                            $10000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '6x') !== false)
                                                            $12000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '7x') !== false)
                                                            $14000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '8x') !== false)
                                                            $16000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '9x') !== false)
                                                            $18000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '10x') !== false)
                                                            $20000
                                                        @endif
                                                    @endif
                                                    @if($rental->activity_item == '14ft. Aluminum Boat')
                                                        $1000
                                                    @endif
                                                    @if($rental->activity_item == 'Segway i2')
                                                        @if(strpos($rental->ticket_list, '1x') !== false)
                                                            $1000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '2x') !== false)
                                                            $2000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '3x') !== false)
                                                            $3000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '4x') !== false)
                                                            $4000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '5x') !== false)
                                                            $5000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '6x') !== false)
                                                            $6000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '7x') !== false)
                                                            $7000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '8x') !== false)
                                                            $8000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '9x') !== false)
                                                            $9000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '10x') !== false)
                                                            $10000
                                                        @endif
                                                    @endif
                                                    @if($rental->activity_item == 'Spyder RT-S SE6')
                                                        @if(strpos($rental->ticket_list, '1x') !== false)
                                                            $2000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '2x') !== false)
                                                            $4000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '3x') !== false)
                                                            $6000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '4x') !== false)
                                                            $8000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '5x') !== false)
                                                            $10000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '6x') !== false)
                                                            $12000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '7x') !== false)
                                                            $14000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '8x') !== false)
                                                            $16000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '9x') !== false)
                                                            $18000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '10x') !== false)
                                                            $20000
                                                        @endif
                                                    @endif
                                                    @if($rental->activity_item == 'Renegade BC 600ETec')
                                                        @if(strpos($rental->ticket_list, '1x') !== false)
                                                            $2000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '2x') !== false)
                                                            $4000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '3x') !== false)
                                                            $6000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '4x') !== false)
                                                            $8000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '5x') !== false)
                                                            $10000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '6x') !== false)
                                                            $12000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '7x') !== false)
                                                            $14000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '8x') !== false)
                                                            $16000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '9x') !== false)
                                                            $18000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '10x') !== false)
                                                            $20000
                                                        @endif
                                                    @endif
                                                    @if($rental->activity_item == 'Summit 154 SP')
                                                        @if(strpos($rental->ticket_list, '1x') !== false)
                                                            $2000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '2x') !== false)
                                                            $4000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '3x') !== false)
                                                            $6000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '4x') !== false)
                                                            $8000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '5x') !== false)
                                                            $10000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '6x') !== false)
                                                            $12000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '7x') !== false)
                                                            $14000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '8x') !== false)
                                                            $16000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '9x') !== false)
                                                            $18000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '10x') !== false)
                                                            $20000
                                                        @endif
                                                    @endif
                                                    @if($rental->activity_item == 'Kayak Single')
                                                        @if(strpos($rental->ticket_list, '1x') !== false)
                                                            $200
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '2x') !== false)
                                                            $400
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '3x') !== false)
                                                            $600
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '4x') !== false)
                                                            $800
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '5x') !== false)
                                                            $1000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '6x') !== false)
                                                            $1200
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '7x') !== false)
                                                            $1400
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '8x') !== false)
                                                            $1600
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '9x') !== false)
                                                            $1800
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '10x') !== false)
                                                            $2000
                                                        @endif
                                                    @endif
                                                    @if($rental->activity_item == 'Double Kayak')
                                                        @if(strpos($rental->ticket_list, '1x') !== false)
                                                            $200
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '2x') !== false)
                                                            $400
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '3x') !== false)
                                                            $600
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '4x') !== false)
                                                            $800
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '5x') !== false)
                                                            $1000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '6x') !== false)
                                                            $1200
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '7x') !== false)
                                                            $1400
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '8x') !== false)
                                                            $1600
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '9x') !== false)
                                                            $1800
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '10x') !== false)
                                                            $2000
                                                        @endif
                                                    @endif
                                                    @if($rental->activity_item == 'Stand Up Paddleboard')
                                                        @if(strpos($rental->ticket_list, '1x') !== false)
                                                            $200
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '2x') !== false)
                                                            $400
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '3x') !== false)
                                                            $600
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '4x') !== false)
                                                            $800
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '5x') !== false)
                                                            $1000
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '6x') !== false)
                                                            $1200
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '7x') !== false)
                                                            $1400
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '8x') !== false)
                                                            $1600
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '9x') !== false)
                                                            $1800
                                                        @endif
                                                        @if(strpos($rental->ticket_list, '10x') !== false)
                                                            $2000
                                                        @endif
                                                    @endif

                                                    (flat - Sale)
                                                </h5>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-12">
                                        <h5 class="text-gray-300 mt-4">Please enter amounts and type of payment(s) collected...</h5>
                                        <div class="col-sm-10 offset-sm-1 mt-4">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="security_deposit"> Security Deposit (Required)</label>
                                                        <input type="text" class="form-control" name="security_deposit" placeholder="Numbers Only" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="security_deposit_type">Deposit Type  (Required)</label>
                                                        <select id="security_deposit_type" name="security_deposit_type" style="width: 100%;" required>
                                                            <option value="blank" default>Select One</option>
                                                            <option value="Sale">Sale</option>
                                                            <option value="Pre-Auth">Pre-Auth</option>
                                                            <option value="Cash">Cash</option>
                                                            <option value="Check">Check</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <ul class="navbar-nav accordion" id="deposit2">

                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseAnnouncements" aria-expanded="true" aria-controls="collapseAnnouncements">
                                                            <span>
                                                                <h5 class="text-right">Add Deposit Type</h5>
                                                            </span>
                                                        </a>
                                                        <div id="collapseAnnouncements" class="collapse" aria-labelledby="headingAnnouncements" data-parent="#deposit2">
                                                            <div class="col-sm-10 offset-sm-1">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="security_deposit_2"> Security Deposit </label>
                                                                            <input type="text" class="form-control" name="security_deposit_2" placeholder="Enter $$" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="security_deposit_type_2">Deposit Type:</label>
                                                                            <select id="security_deposit_type_2" name="security_deposit_type_2" style="width: 100%;">
                                                                                <option value="blank" default>Select One</option>
                                                                                <option value="Sale">Sale</option>
                                                                                <option value="Pre-Auth">Pre-Auth</option>
                                                                                <option value="Cash">Cash</option>
                                                                                <option value="Check">Check</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- /Security Deposit -->

                            </div>
                            <div class="modal-footer">
                                <p>Next: Fuel Deposit</p>
                                <p class="mr-2 text-bold">
                                    @if($rental->activity_item == 'Scarab 215')
                                        @if(strpos($rental->ticket_list, '1x') !== false)
                                            $308
                                            <input type="hidden" name="fuel_count" value="44">
                                        @endif
                                        @if(strpos($rental->ticket_list, '2x') !== false)
                                            $924
                                            <input type="hidden" name="fuel_count" value="88">
                                        @endif
                                        @if(strpos($rental->ticket_list, '3x') !== false)
                                            $1232
                                            <input type="hidden" name="fuel_count" value="132">
                                        @endif
                                        @if(strpos($rental->ticket_list, '4x') !== false)
                                            $1540
                                            <input type="hidden" name="fuel_count" value="176">
                                        @endif
                                        @if(strpos($rental->ticket_list, '5x') !== false)
                                            $1848
                                            <input type="hidden" name="fuel_count" value="120">
                                        @endif
                                    @endif


                                    @if($rental->activity_item == '23ft. Pontoon Boat' && strpos($rental->ticket_list, 'Full Day') !== false)
                                        @if(strpos($rental->ticket_list, '1x') !== false)
                                            $273
                                            <input type="hidden" name="fuel_count" value="39">
                                        @endif
                                        @if(strpos($rental->ticket_list, '2x') !== false)
                                            $546
                                            <input type="hidden" name="fuel_count" value="78">
                                        @endif
                                        @if(strpos($rental->ticket_list, '3x') !== false)
                                            $819
                                            <input type="hidden" name="fuel_count" value="117">
                                        @endif
                                        @if(strpos($rental->ticket_list, '4x') !== false)
                                            $1092
                                            <input type="hidden" name="fuel_count" value="156">
                                        @endif
                                        @if(strpos($rental->ticket_list, '5x') !== false)
                                            $1365
                                            <input type="hidden" name="fuel_count" value="195">
                                        @endif
                                    @elseif($rental->activity_item == '23ft. Pontoon Boat' && strpos($rental->ticket_list, '4 hour') !== false)
                                        $0
                                    @endif


                                    @if($rental->activity_item == 'SeaDoo')
                                        @if(strpos($rental->ticket_list, 'Full Day') !== false or strpos($rental->ticket_list, '4 hour') !== false or strpos($rental->ticket_list, '8 hour') !== false or strpos($rental->ticket_list, '9 hour') !== false)
                                            @if(strpos($rental->ticket_list, '1x') !== false)
                                                $133
                                                <input type="hidden" name="fuel_count" value="19">
                                            @endif
                                            @if(strpos($rental->ticket_list, '2x') !== false)
                                                $266
                                                <input type="hidden" name="fuel_count" value="38">
                                            @endif
                                            @if(strpos($rental->ticket_list, '3x') !== false)
                                                $399
                                                <input type="hidden" name="fuel_count" value="57">
                                            @endif
                                            @if(strpos($rental->ticket_list, '4x') !== false)
                                                $532
                                                <input type="hidden" name="fuel_count" value="76">
                                            @endif
                                            @if(strpos($rental->ticket_list, '5x') !== false)
                                                $665
                                                <input type="hidden" name="fuel_count" value="95">
                                            @endif
                                            @if(strpos($rental->ticket_list, '6x') !== false)
                                                $798
                                                <input type="hidden" name="fuel_count" value="114">
                                            @endif
                                            @if(strpos($rental->ticket_list, '7x') !== false)
                                                $913
                                                <input type="hidden" name="fuel_count" value="133">
                                            @endif
                                            @if(strpos($rental->ticket_list, '8x') !== false)
                                                $1064
                                                <input type="hidden" name="fuel_count" value="152">
                                            @endif
                                            @if(strpos($rental->ticket_list, '9x') !== false)
                                                $1197
                                                <input type="hidden" name="fuel_count" value="171">
                                            @endif
                                            @if(strpos($rental->ticket_list, '10x') !== false)
                                                $1330
                                                <input type="hidden" name="fuel_count" value="190">
                                            @endif
                                        @else
                                            $0
                                        @endif

                                    @endif


                                    @if($rental->activity_item == '14ft. Aluminum Boat')
                                        $42
                                        <input type="hidden" name="fuel_count" value="6">
                                    @endif


                                    @if($rental->activity_item == 'Spyder RT-S SE6')
                                        @if(strpos($rental->ticket_list, '1x') !== false)
                                            $49
                                            <input type="hidden" name="fuel_count" value="7">
                                        @endif
                                        @if(strpos($rental->ticket_list, '2x') !== false)
                                            $98
                                            <input type="hidden" name="fuel_count" value="14">
                                        @endif
                                        @if(strpos($rental->ticket_list, '3x') !== false)
                                            $147
                                            <input type="hidden" name="fuel_count" value="21">
                                        @endif
                                        @if(strpos($rental->ticket_list, '4x') !== false)
                                            $196
                                            <input type="hidden" name="fuel_count" value="28">
                                        @endif
                                        @if(strpos($rental->ticket_list, '5x') !== false)
                                            $245
                                            <input type="hidden" name="fuel_count" value="35">
                                        @endif
                                    @endif


                                    @if($rental->activity_item == 'Renegade BC 600ETec' or $rental->activity_item == 'Summit 154 SP')
                                        @if(strpos($rental->ticket_list, '1x') !== false)
                                            $77
                                            <input type="hidden" name="fuel_count" value="11">
                                        @endif
                                        @if(strpos($rental->ticket_list, '2x') !== false)
                                            $154
                                            <input type="hidden" name="fuel_count" value="22">
                                        @endif
                                        @if(strpos($rental->ticket_list, '3x') !== false)
                                            $231
                                            <input type="hidden" name="fuel_count" value="33">
                                        @endif
                                        @if(strpos($rental->ticket_list, '4x') !== false)
                                            $308
                                            <input type="hidden" name="fuel_count" value="44">
                                        @endif
                                        @if(strpos($rental->ticket_list, '5x') !== false)
                                            $385
                                            <input type="hidden" name="fuel_count" value="55">
                                        @endif
                                    @endif


                                    @if($rental->activity_item == 'Kayak Single' or $rental->activity_item == 'Double Kayak' or $rental->activity_item == 'Stand Up Paddleboard' or $rental->activity_item == 'Segway i2')
                                        $0
                                    @endif

                                </p>
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>

                                <!-- Here -->
                                @if($rental->activity_item == 'Scarab 215' or $rental->activity_item == 'Spyder RT-S SE6' or $rental->activity_item == 'Renegade BC 600ETec' or $rental->activity_item == 'Summit 154 SP')
                                    <button class="btn btn-primary-red btn-modal" type="button" data-toggle="modal" data-dismiss="modal" data-target="#checkin-2{{$rental->id}}">Next</button>
                                @elseif($rental->activity_item == '23ft. Pontoon Boat' && strpos($rental->ticket_list, 'Full Day') !== false)
                                    <button class="btn btn-primary-red btn-modal" type="button" data-toggle="modal" data-dismiss="modal" data-target="#checkin-2{{$rental->id}}">Next</button>
                                @elseif($rental->activity_item == 'SeaDoo')
                                    @if(strpos($rental->ticket_list, 'Full Day') !== false or strpos($rental->ticket_list, '4 hour') !== false or strpos($rental->ticket_list, '8 hour') !== false or strpos($rental->ticket_list, '9 hour') !== false)
                                        <button class="btn btn-primary-red btn-modal" type="button" data-toggle="modal" data-dismiss="modal" data-target="#checkin-2{{$rental->id}}">Next</button>
                                    @endif

                                @else

                                    <input type="hidden" value="Checked In" name="status">
                                    @if(Auth::check())
                                        <input type="hidden" value="{{auth()->user()->id}}" name="check_in_by">
                                    @endif
                                    <input type="hidden" value="{{$dateNow}}" name="check_in_time">

                                    <button class="btn btn-primary-red btn-modal" type="submit">CHECK IN</button>

                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            <!-- /Check In - Step 1 - Security Deposit -->

            <!-- Check In - Step 2 - Fuel Deposit -->
            <div class="modal fade" id="checkin-2{{$rental->id}}" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3><span>Fuel</span> Deposit</h3>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <!-- Fuel Deposit Amount -->
                            <div class="row">
                                <div class="col-sm-10 offset-sm-1">
                                    <h4 class="text-center">Amount:</h4>
                                    <div class="deposit-amt">
                                        <h3 class="text-center">

                                            @if($rental->activity_item == 'Scarab 215')
                                                @if(strpos($rental->ticket_list, '1x') !== false)
                                                    $308
                                                    <input type="hidden" name="fuel_count" value="44">
                                                @endif
                                                @if(strpos($rental->ticket_list, '2x') !== false)
                                                    $924
                                                    <input type="hidden" name="fuel_count" value="88">
                                                @endif
                                                @if(strpos($rental->ticket_list, '3x') !== false)
                                                    $1232
                                                    <input type="hidden" name="fuel_count" value="132">
                                                @endif
                                                @if(strpos($rental->ticket_list, '4x') !== false)
                                                    $1540
                                                    <input type="hidden" name="fuel_count" value="176">
                                                @endif
                                                @if(strpos($rental->ticket_list, '5x') !== false)
                                                    $1848
                                                    <input type="hidden" name="fuel_count" value="120">
                                                @endif
                                            @endif


                                            @if($rental->activity_item == '23ft. Pontoon Boat' && strpos($rental->ticket_list, 'Full Day') !== false)
                                                @if(strpos($rental->ticket_list, '1x') !== false)
                                                    $273
                                                    <input type="hidden" name="fuel_count" value="39">
                                                @endif
                                                @if(strpos($rental->ticket_list, '2x') !== false)
                                                    $546
                                                    <input type="hidden" name="fuel_count" value="78">
                                                @endif
                                                @if(strpos($rental->ticket_list, '3x') !== false)
                                                    $819
                                                    <input type="hidden" name="fuel_count" value="117">
                                                @endif
                                                @if(strpos($rental->ticket_list, '4x') !== false)
                                                    $1092
                                                    <input type="hidden" name="fuel_count" value="156">
                                                @endif
                                                @if(strpos($rental->ticket_list, '5x') !== false)
                                                    $1365
                                                    <input type="hidden" name="fuel_count" value="195">
                                                @endif
                                            @elseif($rental->activity_item == '23ft. Pontoon Boat' && strpos($rental->ticket_list, '4 hour') !== false)
                                                $0
                                            @endif


                                            @if($rental->activity_item == 'SeaDoo')
                                                @if(strpos($rental->ticket_list, 'Full Day') !== false or strpos($rental->ticket_list, '4 hour') !== false or strpos($rental->ticket_list, '8 hour') !== false or strpos($rental->ticket_list, '9 hour') !== false)
                                                    @if(strpos($rental->ticket_list, '1x') !== false)
                                                        $133
                                                        <input type="hidden" name="fuel_count" value="19">
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '2x') !== false)
                                                        $266
                                                        <input type="hidden" name="fuel_count" value="38">
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '3x') !== false)
                                                        $399
                                                        <input type="hidden" name="fuel_count" value="57">
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '4x') !== false)
                                                        $532
                                                        <input type="hidden" name="fuel_count" value="76">
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '5x') !== false)
                                                        $665
                                                        <input type="hidden" name="fuel_count" value="95">
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '6x') !== false)
                                                        $798
                                                        <input type="hidden" name="fuel_count" value="114">
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '7x') !== false)
                                                        $913
                                                        <input type="hidden" name="fuel_count" value="133">
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '8x') !== false)
                                                        $1064
                                                        <input type="hidden" name="fuel_count" value="152">
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '9x') !== false)
                                                        $1197
                                                        <input type="hidden" name="fuel_count" value="171">
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '10x') !== false)
                                                        $1330
                                                        <input type="hidden" name="fuel_count" value="190">
                                                    @endif
                                                @else
                                                    $0
                                                @endif

                                            @endif


                                            @if($rental->activity_item == '14ft. Aluminum Boat')
                                                $42
                                                <input type="hidden" name="fuel_count" value="6">
                                            @endif


                                            @if($rental->activity_item == 'Spyder RT-S SE6')
                                                @if(strpos($rental->ticket_list, '1x') !== false)
                                                    $49
                                                    <input type="hidden" name="fuel_count" value="7">
                                                @endif
                                                @if(strpos($rental->ticket_list, '2x') !== false)
                                                    $98
                                                    <input type="hidden" name="fuel_count" value="14">
                                                @endif
                                                @if(strpos($rental->ticket_list, '3x') !== false)
                                                    $147
                                                    <input type="hidden" name="fuel_count" value="21">
                                                @endif
                                                @if(strpos($rental->ticket_list, '4x') !== false)
                                                    $196
                                                    <input type="hidden" name="fuel_count" value="28">
                                                @endif
                                                @if(strpos($rental->ticket_list, '5x') !== false)
                                                    $245
                                                    <input type="hidden" name="fuel_count" value="35">
                                                @endif
                                            @endif


                                            @if($rental->activity_item == 'Renegade BC 600ETec' or $rental->activity_item == 'Summit 154 SP')
                                                @if(strpos($rental->ticket_list, '1x') !== false)
                                                    $77
                                                    <input type="hidden" name="fuel_count" value="11">
                                                @endif
                                                @if(strpos($rental->ticket_list, '2x') !== false)
                                                    $154
                                                    <input type="hidden" name="fuel_count" value="22">
                                                @endif
                                                @if(strpos($rental->ticket_list, '3x') !== false)
                                                    $231
                                                    <input type="hidden" name="fuel_count" value="33">
                                                @endif
                                                @if(strpos($rental->ticket_list, '4x') !== false)
                                                    $308
                                                    <input type="hidden" name="fuel_count" value="44">
                                                @endif
                                                @if(strpos($rental->ticket_list, '5x') !== false)
                                                    $385
                                                    <input type="hidden" name="fuel_count" value="55">
                                                @endif
                                            @endif


                                            @if($rental->activity_item == 'Kayak Single' or $rental->activity_item == 'Double Kayak' or $rental->activity_item == 'Stand Up Paddleboard' or $rental->activity_item == 'Segway i2')
                                                $0
                                            @endif

                                        </h3>
                                    </div>
                                    <h5 class="text-gray-300 mt-4">Please select payment type...</h5>

                                    @if($rental->activity_item == 'Scarab 215' or $rental->activity_item == 'Spyder RT-S SE6' or $rental->activity_item == 'Renegade BC 600ETec' or $rental->activity_item == 'Summit 154 SP')
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="fuel_deposit"> Fuel Deposit </label>
                                                    <input type="text" class="form-control" name="fuel_deposit" placeholder="Numbers Only" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="fuel_deposit_type">Deposit Type:</label>
                                                    <select id="fuel_deposit_type" name="fuel_deposit_type" style="width: 100%;">
                                                        <option value="blank" default>Select One</option>
                                                        <option value="Visa">Visa</option>
                                                        <option value="MasterCard">MasterCard</option>
                                                        <option value="Cash">Cash</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if($rental->activity_item == '23ft. Pontoon Boat')
                                        @if(strpos($rental->ticket_list, 'Full Day') !== false)
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="fuel_deposit"> Fuel Deposit </label>
                                                        <input type="text" class="form-control" name="fuel_deposit" placeholder="Numbers Only" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="fuel_deposit_type">Deposit Type:</label>
                                                        <select id="fuel_deposit_type" name="fuel_deposit_type" style="width: 100%;">
                                                            <option value="blank" default>Select One</option>
                                                            <option value="Visa">Visa</option>
                                                            <option value="MasterCard">MasterCard</option>
                                                            <option value="Cash">Cash</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        @else

                                        @endif

                                    @endif

                                    @if($rental->activity_item == 'SeaDoo')
                                        @if(strpos($rental->ticket_list, 'Full Day') !== false or strpos($rental->ticket_list, '4 hour') !== false or strpos($rental->ticket_list, '8 hour') !== false or strpos($rental->ticket_list, '9 hour') !== false)
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="fuel_deposit"> Fuel Deposit </label>
                                                        <input type="text" class="form-control" name="fuel_deposit" placeholder="Numbers Only" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="fuel_deposit_type">Deposit Type:</label>
                                                        <select id="fuel_deposit_type" name="fuel_deposit_type" style="width: 100%;">
                                                            <option value="blank" default>Select One</option>
                                                            <option value="Visa">Visa</option>
                                                            <option value="MasterCard">MasterCard</option>
                                                            <option value="Cash">Cash</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        @else

                                        @endif

                                    @endif


                                </div>
                            </div>
                            <!-- /Fuel Deposit Amount -->

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary btn-left" type="button" data-toggle="modal" data-dismiss="modal">CANCEL</button>
                            <a href="#" class="btn btn-info" type="button" data-toggle="modal" data-dismiss="modal" data-target="#checkin{{$rental->id}}">Back</a>

                            <input type="hidden" value="Checked In" name="status">


                            <button class="btn btn-primary-red btn-modal" type="button" data-toggle="modal" data-dismiss="modal" data-target="#checkin-3{{$rental->id}}">Next</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Check In - Step 2 - Fuel Deposit -->

            <!-- Check In - Step 3 - Additional -->
            <div class="modal fade" id="checkin-3{{$rental->id}}" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3><span>Options</span>...</h3>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Options -->
                            @if($rental->activity_item == 'Scarab 215')
                                <div class="row mt-3">
                                    <div class="col-sm-10 offset-sm-1 mt-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="toy_fee"><h4>Add <span>Toy?</span></h4></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <input type="checkbox" class="radio" name="toy_fee" value="50"> &nbsp; <span class="text-white">Yes</span> <span class="ml-4"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <select id="toy_fee_type" name="toy_fee_type" style="width: 100%;">
                                                        <option value="blank" default>Payment Type</option>
                                                        <option value="Sale">Sale</option>
                                                        <option value="Pre-Auth">Pre-Auth</option>
                                                        <option value="Cash">Cash</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if($rental->activity_item == 'Scarab 215')
                                @if(strpos($rental->ticket_list, 'Full Day')!== false or strpos($rental->ticket_list, '2 day') !== false or strpos($rental->ticket_list, '3 day') !== false or strpos($rental->ticket_list, '4 day') !== false or strpos($rental->ticket_list, '5 day') !== false or strpos($rental->ticket_list, '6 day') !== false or strpos($rental->ticket_list, '7 day') !== false or strpos($rental->ticket_list, '8 day') !== false or strpos($rental->ticket_list, '9 day') !== false or strpos($rental->ticket_list, '10 day') !== false or strpos($rental->ticket_list, '11 day') !== false or strpos($rental->ticket_list, '12 day') !== false or strpos($rental->ticket_list, '13 day') !== false or strpos($rental->ticket_list, '14 day') !== false)
                                    <div class="row mt-3">
                                        <div class="col-sm-10 offset-sm-1 mt-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="trailer_fee"><h4>Add <span>Trailer?</span></h4></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <input type="checkbox" class="radio" name="trailer_fee" value="50"> &nbsp; <span class="text-white">Yes</span> <span class="ml-4"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <select id="toy_fee_type" name="toy_fee_type" style="width: 100%;">
                                                        <option value="blank" default>Payment Type</option>
                                                        <option value="Sale">Sale</option>
                                                        <option value="Pre-Auth">Pre-Auth</option>
                                                        <option value="Cash">Cash</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif

                            @if($rental->activity_item == 'SeaDoo')
                                @if(strpos($rental->ticket_list, 'Full Day') !== false or strpos($rental->ticket_list, '2 day') !== false or strpos($rental->ticket_list, '3 day') !== false or strpos($rental->ticket_list, '4 day') !== false or strpos($rental->ticket_list, '5 day') !== false or strpos($rental->ticket_list, '6 day') !== false or strpos($rental->ticket_list, '7 day') !== false or strpos($rental->ticket_list, '8 day') !== false or strpos($rental->ticket_list, '9 day') !== false or strpos($rental->ticket_list, '10 day') !== false or strpos($rental->ticket_list, '11 day') !== false or strpos($rental->ticket_list, '12 day') !== false or strpos($rental->ticket_list, '13 day') !== false or strpos($rental->ticket_list, '14 day') !== false)
                                    <div class="row mt-3">
                                        <div class="col-sm-10 offset-sm-1 mt-4">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="trailer_fee"><h4>Add <span>Trailer?</span></h4></label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <input type="checkbox" class="radio" name="trailer_fee" value="50"> &nbsp; <span class="text-white">Yes</span> <span class="ml-4"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <select id="toy_fee_type" name="toy_fee_type" style="width: 100%;">
                                                            <option value="blank" default>Payment Type</option>
                                                            <option value="Sale">Sale</option>
                                                            <option value="Pre-Auth">Pre-Auth</option>
                                                            <option value="Cash">Cash</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else

                                @endif
                            @endif

                            @if($rental->activity_item == '14ft. Aluminum Boat')
                                @if(strpos($rental->ticket_list, 'Full Day') !== false or strpos($rental->ticket_list, '2 day') !== false or strpos($rental->ticket_list, '3 day') !== false or strpos($rental->ticket_list, '4 day') !== false or strpos($rental->ticket_list, '5 day') !== false or strpos($rental->ticket_list, '6 day') !== false or strpos($rental->ticket_list, '7 day') !== false or strpos($rental->ticket_list, '8 day') !== false or strpos($rental->ticket_list, '9 day') !== false or strpos($rental->ticket_list, '10 day') !== false or strpos($rental->ticket_list, '11 day') !== false or strpos($rental->ticket_list, '12 day') !== false or strpos($rental->ticket_list, '13 day') !== false or strpos($rental->ticket_list, '14 day') !== false)
                                    <div class="row mt-3">
                                        <div class="col-sm-10 offset-sm-1 mt-4">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="trailer_fee"><h4>Add <span>Trailer?</span></h4></label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <input type="checkbox" class="radio" name="trailer_fee" value="50"> &nbsp; <span class="text-white">Yes</span> <span class="ml-4"></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <select id="toy_fee_type" name="toy_fee_type" style="width: 100%;">
                                                            <option value="blank" default>Payment Type</option>
                                                            <option value="Sale">Sale</option>
                                                            <option value="Pre-Auth">Pre-Auth</option>
                                                            <option value="Cash">Cash</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else

                                @endif
                            @endif

                            @if($rental->activity_item == 'Renegade BC 600ETec' or $rental->activity_item == 'Summit 154 SP')
                                <div class="row mt-3">
                                    <div class="col-sm-10 offset-sm-1 mt-4">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="trailer_fee"><h4>Add <span>Trailer?</span></h4></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <input type="checkbox" class="radio" name="trailer_fee" value="50"> &nbsp; <span class="text-white">Yes</span> <span class="ml-4"></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <select id="toy_fee_type" name="toy_fee_type" style="width: 100%;">
                                                        <option value="blank" default>Payment Type</option>
                                                        <option value="Sale">Sale</option>
                                                        <option value="Pre-Auth">Pre-Auth</option>
                                                        <option value="Cash">Cash</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endif

                            <!-- /Options -->

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary btn-left" type="button" data-toggle="modal" data-dismiss="modal">CANCEL</button>
                            <a href="#" class="btn btn-info" type="button" data-toggle="modal" data-dismiss="modal" data-target="#checkin-2{{$rental->id}}">Back</a>

                            <input type="hidden" value="Checked In" name="status">
                            @if(Auth::check())
                                <input type="hidden" value="{{auth()->user()->id}}" name="check_in_by">
                            @endif
                            <input type="hidden" value="{{$dateNow}}" name="check_in_time">

                            <button class="btn btn-primary-red btn-modal" type="submit">CHECK IN</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Check In - Step 4 - Additional  -->




        </form>



        <!-- Check In Rental Modal TODO dynamic security and fuel deposit -->
        <div class="modal fade" id="checkin-template{{$rental->id}}" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3><span>Deposits</span> & Fee's</h3>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="{{route('office.checkInRental', $rental->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">

                            <!-- Security & Fuel Deposit Deposit -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4>Security Deposit:</h4>

                                    <ul>
                                        <li>
                                            <h5>
                                                @if($rental->activity_item == 'Scarab 215')
                                                    @if(strpos($rental->ticket_list, '1x') !== false)
                                                        $1000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '2x') !== false)
                                                        $2000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '3x') !== false)
                                                        $3000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '4x') !== false)
                                                        $4000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '5x') !== false)
                                                        $5000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '6x') !== false)
                                                        $6000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '7x') !== false)
                                                        $7000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '8x') !== false)
                                                        $8000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '9x') !== false)
                                                        $9000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '10x') !== false)
                                                        $10000
                                                    @endif
                                                @endif
                                                @if($rental->activity_item == '23ft. Pontoon Boat')
                                                    @if(strpos($rental->ticket_list, '1x') !== false)
                                                        $1000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '2x') !== false)
                                                        $2000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '3x') !== false)
                                                        $3000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '4x') !== false)
                                                        $4000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '5x') !== false)
                                                        $5000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '6x') !== false)
                                                        $6000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '7x') !== false)
                                                        $7000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '8x') !== false)
                                                        $8000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '9x') !== false)
                                                        $9000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '10x') !== false)
                                                        $10000
                                                    @endif
                                                @endif
                                                @if($rental->activity_item == 'SeaDoo')
                                                    @if(strpos($rental->ticket_list, '1x') !== false)
                                                        $1000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '2x') !== false)
                                                        $2000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '3x') !== false)
                                                        $3000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '4x') !== false)
                                                        $4000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '5x') !== false)
                                                        $5000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '6x') !== false)
                                                        $6000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '7x') !== false)
                                                        $7000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '8x') !== false)
                                                        $8000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '9x') !== false)
                                                        $9000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '10x') !== false)
                                                        $10000
                                                    @endif
                                                @endif
                                                @if($rental->activity_item == '14ft. Aluminum Boat')
                                                    $500
                                                @endif
                                                @if($rental->activity_item == 'Segway i2')
                                                    @if(strpos($rental->ticket_list, '1x') !== false)
                                                        $500
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '2x') !== false)
                                                        $1000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '3x') !== false)
                                                        $1500
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '4x') !== false)
                                                        $2000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '5x') !== false)
                                                        $2500
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '6x') !== false)
                                                        $3000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '7x') !== false)
                                                        $3500
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '8x') !== false)
                                                        $4000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '9x') !== false)
                                                        $4500
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '10x') !== false)
                                                        $5000
                                                    @endif
                                                @endif
                                                @if($rental->activity_item == 'Spyder RT-S SE6')
                                                    @if(strpos($rental->ticket_list, '1x') !== false)
                                                        $1000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '2x') !== false)
                                                        $2000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '3x') !== false)
                                                        $3000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '4x') !== false)
                                                        $4000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '5x') !== false)
                                                        $5000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '6x') !== false)
                                                        $6000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '7x') !== false)
                                                        $7000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '8x') !== false)
                                                        $8000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '9x') !== false)
                                                        $9000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '10x') !== false)
                                                        $10000
                                                    @endif
                                                @endif
                                                @if($rental->activity_item == 'Renegade BC 600ETec')
                                                    @if(strpos($rental->ticket_list, '1x') !== false)
                                                        $1000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '2x') !== false)
                                                        $2000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '3x') !== false)
                                                        $3000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '4x') !== false)
                                                        $4000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '5x') !== false)
                                                        $5000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '6x') !== false)
                                                        $6000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '7x') !== false)
                                                        $7000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '8x') !== false)
                                                        $8000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '9x') !== false)
                                                        $9000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '10x') !== false)
                                                        $10000
                                                    @endif
                                                @endif
                                                @if($rental->activity_item == 'Summit 154 SP')
                                                    @if(strpos($rental->ticket_list, '1x') !== false)
                                                        $1000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '2x') !== false)
                                                        $2000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '3x') !== false)
                                                        $3000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '4x') !== false)
                                                        $4000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '5x') !== false)
                                                        $5000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '6x') !== false)
                                                        $6000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '7x') !== false)
                                                        $7000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '8x') !== false)
                                                        $8000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '9x') !== false)
                                                        $9000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '10x') !== false)
                                                        $10000
                                                    @endif
                                                @endif
                                                @if($rental->activity_item == 'Kayak Single')
                                                    @if(strpos($rental->ticket_list, '1x') !== false)
                                                        $100
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '2x') !== false)
                                                        $200
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '3x') !== false)
                                                        $300
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '4x') !== false)
                                                        $400
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '5x') !== false)
                                                        $500
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '6x') !== false)
                                                        $600
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '7x') !== false)
                                                        $700
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '8x') !== false)
                                                        $800
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '9x') !== false)
                                                        $900
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '10x') !== false)
                                                        $1000
                                                    @endif
                                                @endif
                                                @if($rental->activity_item == 'Double Kayak')
                                                    @if(strpos($rental->ticket_list, '1x') !== false)
                                                        $100
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '2x') !== false)
                                                        $200
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '3x') !== false)
                                                        $300
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '4x') !== false)
                                                        $400
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '5x') !== false)
                                                        $500
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '6x') !== false)
                                                        $600
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '7x') !== false)
                                                        $700
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '8x') !== false)
                                                        $800
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '9x') !== false)
                                                        $900
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '10x') !== false)
                                                        $1000
                                                    @endif
                                                @endif
                                                @if($rental->activity_item == 'Stand Up Paddleboard')
                                                    @if(strpos($rental->ticket_list, '1x') !== false)
                                                        $100
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '2x') !== false)
                                                        $200
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '3x') !== false)
                                                        $300
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '4x') !== false)
                                                        $400
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '5x') !== false)
                                                        $500
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '6x') !== false)
                                                        $600
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '7x') !== false)
                                                        $700
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '8x') !== false)
                                                        $800
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '9x') !== false)
                                                        $900
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '10x') !== false)
                                                        $1000
                                                    @endif
                                                @endif

                                                (raised card - pre-auth)
                                            </h5>
                                        </li>
                                        <li>
                                            <h5>
                                                @if($rental->activity_item == 'Scarab 215')
                                                    @if(strpos($rental->ticket_list, '1x') !== false)
                                                        $2000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '2x') !== false)
                                                        $4000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '3x') !== false)
                                                        $6000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '4x') !== false)
                                                        $8000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '5x') !== false)
                                                        $10000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '6x') !== false)
                                                        $12000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '7x') !== false)
                                                        $14000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '8x') !== false)
                                                        $16000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '9x') !== false)
                                                        $18000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '10x') !== false)
                                                        $20000
                                                    @endif
                                                @endif
                                                @if($rental->activity_item == '23ft. Pontoon Boat')
                                                    @if(strpos($rental->ticket_list, '1x') !== false)
                                                        $2000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '2x') !== false)
                                                        $4000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '3x') !== false)
                                                        $6000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '4x') !== false)
                                                        $8000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '5x') !== false)
                                                        $10000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '6x') !== false)
                                                        $12000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '7x') !== false)
                                                        $14000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '8x') !== false)
                                                        $16000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '9x') !== false)
                                                        $18000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '10x') !== false)
                                                        $20000
                                                    @endif
                                                @endif
                                                @if($rental->activity_item == 'SeaDoo')
                                                    @if(strpos($rental->ticket_list, '1x') !== false)
                                                        $2000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '2x') !== false)
                                                        $4000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '3x') !== false)
                                                        $6000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '4x') !== false)
                                                        $8000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '5x') !== false)
                                                        $10000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '6x') !== false)
                                                        $12000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '7x') !== false)
                                                        $14000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '8x') !== false)
                                                        $16000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '9x') !== false)
                                                        $18000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '10x') !== false)
                                                        $20000
                                                    @endif
                                                @endif
                                                @if($rental->activity_item == '14ft. Aluminum Boat')
                                                    $1000
                                                @endif
                                                @if($rental->activity_item == 'Segway i2')
                                                    @if(strpos($rental->ticket_list, '1x') !== false)
                                                        $1000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '2x') !== false)
                                                        $2000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '3x') !== false)
                                                        $3000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '4x') !== false)
                                                        $4000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '5x') !== false)
                                                        $5000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '6x') !== false)
                                                        $6000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '7x') !== false)
                                                        $7000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '8x') !== false)
                                                        $8000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '9x') !== false)
                                                        $9000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '10x') !== false)
                                                        $10000
                                                    @endif
                                                @endif
                                                @if($rental->activity_item == 'Spyder RT-S SE6')
                                                    @if(strpos($rental->ticket_list, '1x') !== false)
                                                        $2000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '2x') !== false)
                                                        $4000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '3x') !== false)
                                                        $6000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '4x') !== false)
                                                        $8000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '5x') !== false)
                                                        $10000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '6x') !== false)
                                                        $12000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '7x') !== false)
                                                        $14000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '8x') !== false)
                                                        $16000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '9x') !== false)
                                                        $18000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '10x') !== false)
                                                        $20000
                                                    @endif
                                                @endif
                                                @if($rental->activity_item == 'Renegade BC 600ETec')
                                                    @if(strpos($rental->ticket_list, '1x') !== false)
                                                        $2000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '2x') !== false)
                                                        $4000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '3x') !== false)
                                                        $6000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '4x') !== false)
                                                        $8000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '5x') !== false)
                                                        $10000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '6x') !== false)
                                                        $12000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '7x') !== false)
                                                        $14000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '8x') !== false)
                                                        $16000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '9x') !== false)
                                                        $18000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '10x') !== false)
                                                        $20000
                                                    @endif
                                                @endif
                                                @if($rental->activity_item == 'Summit 154 SP')
                                                    @if(strpos($rental->ticket_list, '1x') !== false)
                                                        $2000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '2x') !== false)
                                                        $4000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '3x') !== false)
                                                        $6000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '4x') !== false)
                                                        $8000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '5x') !== false)
                                                        $10000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '6x') !== false)
                                                        $12000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '7x') !== false)
                                                        $14000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '8x') !== false)
                                                        $16000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '9x') !== false)
                                                        $18000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '10x') !== false)
                                                        $20000
                                                    @endif
                                                @endif
                                                @if($rental->activity_item == 'Kayak Single')
                                                    @if(strpos($rental->ticket_list, '1x') !== false)
                                                        $200
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '2x') !== false)
                                                        $400
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '3x') !== false)
                                                        $600
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '4x') !== false)
                                                        $800
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '5x') !== false)
                                                        $1000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '6x') !== false)
                                                        $1200
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '7x') !== false)
                                                        $1400
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '8x') !== false)
                                                        $1600
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '9x') !== false)
                                                        $1800
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '10x') !== false)
                                                        $2000
                                                    @endif
                                                @endif
                                                @if($rental->activity_item == 'Double Kayak')
                                                    @if(strpos($rental->ticket_list, '1x') !== false)
                                                        $200
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '2x') !== false)
                                                        $400
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '3x') !== false)
                                                        $600
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '4x') !== false)
                                                        $800
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '5x') !== false)
                                                        $1000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '6x') !== false)
                                                        $1200
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '7x') !== false)
                                                        $1400
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '8x') !== false)
                                                        $1600
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '9x') !== false)
                                                        $1800
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '10x') !== false)
                                                        $2000
                                                    @endif
                                                @endif
                                                @if($rental->activity_item == 'Stand Up Paddleboard')
                                                    @if(strpos($rental->ticket_list, '1x') !== false)
                                                        $200
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '2x') !== false)
                                                        $400
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '3x') !== false)
                                                        $600
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '4x') !== false)
                                                        $800
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '5x') !== false)
                                                        $1000
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '6x') !== false)
                                                        $1200
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '7x') !== false)
                                                        $1400
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '8x') !== false)
                                                        $1600
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '9x') !== false)
                                                        $1800
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '10x') !== false)
                                                        $2000
                                                    @endif
                                                @endif

                                                (flat - sale)
                                            </h5>
                                        </li>
                                    </ul>
                                    <h4>Fuel Deposit:</h4>
                                    <h5>

                                        @if($rental->activity_item == 'Scarab 215')
                                            @if(strpos($rental->ticket_list, '1x') !== false)
                                                $308
                                                <input type="hidden" name="fuel_count" value="44">
                                            @endif
                                            @if(strpos($rental->ticket_list, '2x') !== false)
                                                $924
                                                <input type="hidden" name="fuel_count" value="88">
                                            @endif
                                            @if(strpos($rental->ticket_list, '3x') !== false)
                                                $1232
                                                <input type="hidden" name="fuel_count" value="132">
                                            @endif
                                            @if(strpos($rental->ticket_list, '4x') !== false)
                                                $1540
                                                <input type="hidden" name="fuel_count" value="176">
                                            @endif
                                            @if(strpos($rental->ticket_list, '5x') !== false)
                                                $1848
                                                <input type="hidden" name="fuel_count" value="120">
                                            @endif
                                        @endif


                                        @if($rental->activity_item == '23ft. Pontoon Boat' && strpos($rental->ticket_list, 'Full Day') !== false)
                                            @if(strpos($rental->ticket_list, '1x') !== false)
                                                $273
                                                <input type="hidden" name="fuel_count" value="39">
                                            @endif
                                            @if(strpos($rental->ticket_list, '2x') !== false)
                                                $546
                                                <input type="hidden" name="fuel_count" value="78">
                                            @endif
                                            @if(strpos($rental->ticket_list, '3x') !== false)
                                                $819
                                                <input type="hidden" name="fuel_count" value="117">
                                            @endif
                                            @if(strpos($rental->ticket_list, '4x') !== false)
                                                $1092
                                                <input type="hidden" name="fuel_count" value="156">
                                            @endif
                                            @if(strpos($rental->ticket_list, '5x') !== false)
                                                $1365
                                                <input type="hidden" name="fuel_count" value="195">
                                            @endif
                                        @elseif($rental->activity_item == '23ft. Pontoon Boat' && strpos($rental->ticket_list, '4 hour') !== false)
                                            $0
                                        @endif


                                        @if($rental->activity_item == 'SeaDoo')
                                            @if(strpos($rental->ticket_list, 'Full Day') !== false or strpos($rental->ticket_list, '4 hour') !== false or strpos($rental->ticket_list, '8 hour') !== false or strpos($rental->ticket_list, '9 hour') !== false)
                                                @if(strpos($rental->ticket_list, '1x') !== false)
                                                    $133
                                                    <input type="hidden" name="fuel_count" value="19">
                                                @endif
                                                @if(strpos($rental->ticket_list, '2x') !== false)
                                                    $266
                                                    <input type="hidden" name="fuel_count" value="38">
                                                @endif
                                                @if(strpos($rental->ticket_list, '3x') !== false)
                                                    $399
                                                    <input type="hidden" name="fuel_count" value="57">
                                                @endif
                                                @if(strpos($rental->ticket_list, '4x') !== false)
                                                    $532
                                                    <input type="hidden" name="fuel_count" value="76">
                                                @endif
                                                @if(strpos($rental->ticket_list, '5x') !== false)
                                                    $665
                                                    <input type="hidden" name="fuel_count" value="95">
                                                @endif
                                                @if(strpos($rental->ticket_list, '6x') !== false)
                                                    $798
                                                    <input type="hidden" name="fuel_count" value="114">
                                                @endif
                                                @if(strpos($rental->ticket_list, '7x') !== false)
                                                    $913
                                                    <input type="hidden" name="fuel_count" value="133">
                                                @endif
                                                @if(strpos($rental->ticket_list, '8x') !== false)
                                                    $1064
                                                    <input type="hidden" name="fuel_count" value="152">
                                                @endif
                                                @if(strpos($rental->ticket_list, '9x') !== false)
                                                    $1197
                                                    <input type="hidden" name="fuel_count" value="171">
                                                @endif
                                                @if(strpos($rental->ticket_list, '10x') !== false)
                                                    $1330
                                                    <input type="hidden" name="fuel_count" value="190">
                                                @endif
                                            @else
                                                $0
                                            @endif

                                        @endif


                                        @if($rental->activity_item == '14ft. Aluminum Boat')
                                            $42
                                            <input type="hidden" name="fuel_count" value="6">
                                        @endif


                                        @if($rental->activity_item == 'Spyder RT-S SE6')
                                            @if(strpos($rental->ticket_list, '1x') !== false)
                                                $49
                                                <input type="hidden" name="fuel_count" value="7">
                                            @endif
                                            @if(strpos($rental->ticket_list, '2x') !== false)
                                                $98
                                                <input type="hidden" name="fuel_count" value="14">
                                            @endif
                                            @if(strpos($rental->ticket_list, '3x') !== false)
                                                $147
                                                <input type="hidden" name="fuel_count" value="21">
                                            @endif
                                            @if(strpos($rental->ticket_list, '4x') !== false)
                                                $196
                                                <input type="hidden" name="fuel_count" value="28">
                                            @endif
                                            @if(strpos($rental->ticket_list, '5x') !== false)
                                                $245
                                                <input type="hidden" name="fuel_count" value="35">
                                            @endif
                                        @endif


                                        @if($rental->activity_item == 'Renegade BC 600ETec' or $rental->activity_item == 'Summit 154 SP')
                                            @if(strpos($rental->ticket_list, '1x') !== false)
                                                $77
                                                <input type="hidden" name="fuel_count" value="11">
                                            @endif
                                            @if(strpos($rental->ticket_list, '2x') !== false)
                                                $154
                                                <input type="hidden" name="fuel_count" value="22">
                                            @endif
                                            @if(strpos($rental->ticket_list, '3x') !== false)
                                                $231
                                                <input type="hidden" name="fuel_count" value="33">
                                            @endif
                                            @if(strpos($rental->ticket_list, '4x') !== false)
                                                $308
                                                <input type="hidden" name="fuel_count" value="44">
                                            @endif
                                            @if(strpos($rental->ticket_list, '5x') !== false)
                                                $385
                                                <input type="hidden" name="fuel_count" value="55">
                                            @endif
                                        @endif


                                        @if($rental->activity_item == 'Kayak Single' or $rental->activity_item == 'Double Kayak' or $rental->activity_item == 'Stand Up Paddleboard' or $rental->activity_item == 'Segway i2')
                                            $0
                                        @endif

                                    </h5>
                                    <h5 class="text-gray-300 mt-4">Please enter amounts and type of payment(s) collected...</h5>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="security_deposit"> Security Deposit </label>
                                                <input type="text" class="form-control" name="security_deposit" placeholder="No $" />
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label for="security_deposit_type"> Security Deposit Type </label><br />
                                                <input type="checkbox" class="" name="security_deposit_type" value="Sale" /> &nbsp; <span class="text-white">Sale</span> <span class="ml-4"></span>
                                                <input type="checkbox" class="" name="security_deposit_type" value="Pre-Auth" /> &nbsp; <span class="text-white">Pre-Auth</span> <span class="ml-4"></span>
                                                <input type="checkbox" class="" name="security_deposit_type" value="Cash" /> &nbsp; <span class="text-white">Cash</span> <span class="ml-4"></span>
                                                <input type="checkbox" class="" name="security_deposit_type" value="Check" /> &nbsp; <span class="text-white">Check</span> <span class="ml-4"></span>
                                            </div>
                                        </div>
                                    </div>

                                    @if($rental->activity_item == 'Scarab 215' or $rental->activity_item == 'Spyder RT-S SE6' or $rental->activity_item == 'Renegade BC 600ETec' or $rental->activity_item == 'Summit 154 SP')
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="fuel_deposit"> Fuel Deposit </label>
                                                    <input type="text" class="form-control" name="fuel_deposit" placeholder="No $" />
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-group">
                                                    <label for="fuel_deposit_type"> Fuel Deposit Type </label><br />
                                                    <input type="checkbox" class="" name="fuel_deposit_type" value="Card" /> &nbsp; <span class="text-white">Card</span> <span class="ml-4"></span>
                                                    <input type="checkbox" class="" name="fuel_deposit_type" value="Cash" /> &nbsp; <span class="text-white">Cash</span> <span class="ml-4"></span>
                                                    <input type="checkbox" class="" name="fuel_deposit_type" value="Check" /> &nbsp; <span class="text-white">Check</span> <span class="ml-4"></span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if($rental->activity_item == '23ft. Pontoon Boat')
                                        @if(strpos($rental->ticket_list, 'Full Day') !== false)
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="security_deposit"> Fuel Deposit </label>
                                                        <input type="text" class="form-control" name="fuel_deposit" placeholder="Only Amount, No $" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label for="fuel_deposit_type"> Fuel Deposit Type </label><br />
                                                        <input type="checkbox" class="" name="fuel_deposit_type" value="Card" /> &nbsp; <span class="text-white">Card</span> <span class="ml-4"></span>
                                                        <input type="checkbox" class="" name="fuel_deposit_type" value="Cash" /> &nbsp; <span class="text-white">Cash</span> <span class="ml-4"></span>
                                                        <input type="checkbox" class="" name="fuel_deposit_type" value="Check" /> &nbsp; <span class="text-white">Check</span> <span class="ml-4"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        @else

                                        @endif

                                    @endif

                                    @if($rental->activity_item == 'SeaDoo')
                                        @if(strpos($rental->ticket_list, 'Full Day') !== false or strpos($rental->ticket_list, '4 hour') !== false or strpos($rental->ticket_list, '8 hour') !== false or strpos($rental->ticket_list, '9 hour') !== false)
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="security_deposit"> Fuel Deposit </label>
                                                        <input type="text" class="form-control" name="fuel_deposit" placeholder="Only Amount, No $" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label for="fuel_deposit_type"> Fuel Deposit Type </label><br />
                                                        <input type="checkbox" class="" name="fuel_deposit_type" value="Card" /> &nbsp; <span class="text-white">Card</span> <span class="ml-4"></span>
                                                        <input type="checkbox" class="" name="fuel_deposit_type" value="Cash" /> &nbsp; <span class="text-white">Cash</span> <span class="ml-4"></span>
                                                        <input type="checkbox" class="" name="fuel_deposit_type" value="Check" /> &nbsp; <span class="text-white">Check</span> <span class="ml-4"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        @else

                                        @endif

                                    @endif

                                    @if($rental->activity_item == 'Scarab 215')
                                        <div class="row mt-3">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="toy_fee"><h4>Add Toy?</h4></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-group">
                                                    <input type="checkbox" class="radio" name="toy_fee" value="50"> &nbsp; <span class="text-white">Yes</span> <span class="ml-4"></span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if($rental->activity_item == 'Scarab 215')
                                        @if(strpos($rental->ticket_list, 'Full Day') !== false or strpos($rental->ticket_list, '2 day') !== false or strpos($rental->ticket_list, '3 day') !== false or strpos($rental->ticket_list, '4 day') !== false or strpos($rental->ticket_list, '5 day') !== false or strpos($rental->ticket_list, '6 day') !== false or strpos($rental->ticket_list, '7 day') !== false or strpos($rental->ticket_list, '8 day') !== false or strpos($rental->ticket_list, '9 day') !== false or strpos($rental->ticket_list, '10 day') !== false or strpos($rental->ticket_list, '11 day') !== false or strpos($rental->ticket_list, '12 day') !== false or strpos($rental->ticket_list, '13 day') !== false or strpos($rental->ticket_list, '14 day') !== false)
                                            <div class="row mt-3">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="trailer_fee"><h4>Add Trailer?</h4></label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <input type="checkbox" class="radio" name="trailer_fee" value="50"> &nbsp; <span class="text-white">Yes</span> <span class="ml-4"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endif

                                    @if($rental->activity_item == 'SeaDoo')
                                        @if(strpos($rental->ticket_list, 'Full Day') !== false or strpos($rental->ticket_list, '2 day') !== false or strpos($rental->ticket_list, '3 day') !== false or strpos($rental->ticket_list, '4 day') !== false or strpos($rental->ticket_list, '5 day') !== false or strpos($rental->ticket_list, '6 day') !== false or strpos($rental->ticket_list, '7 day') !== false or strpos($rental->ticket_list, '8 day') !== false or strpos($rental->ticket_list, '9 day') !== false or strpos($rental->ticket_list, '10 day') !== false or strpos($rental->ticket_list, '11 day') !== false or strpos($rental->ticket_list, '12 day') !== false or strpos($rental->ticket_list, '13 day') !== false or strpos($rental->ticket_list, '14 day') !== false)
                                            <div class="row mt-3">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="trailer_fee"><h4>Add Trailer?</h4></label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <input type="checkbox" class="radio" name="trailer_fee" value="50"> &nbsp; <span class="text-white">Yes</span> <span class="ml-4"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        @else

                                        @endif
                                    @endif

                                    @if($rental->activity_item == '14ft. Aluminum Boat')
                                        @if(strpos($rental->ticket_list, 'Full Day') !== false or strpos($rental->ticket_list, '2 day') !== false or strpos($rental->ticket_list, '3 day') !== false or strpos($rental->ticket_list, '4 day') !== false or strpos($rental->ticket_list, '5 day') !== false or strpos($rental->ticket_list, '6 day') !== false or strpos($rental->ticket_list, '7 day') !== false or strpos($rental->ticket_list, '8 day') !== false or strpos($rental->ticket_list, '9 day') !== false or strpos($rental->ticket_list, '10 day') !== false or strpos($rental->ticket_list, '11 day') !== false or strpos($rental->ticket_list, '12 day') !== false or strpos($rental->ticket_list, '13 day') !== false or strpos($rental->ticket_list, '14 day') !== false)
                                            <div class="row mt-3">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="trailer_fee"><h4>Add Trailer?</h4></label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <input type="checkbox" class="radio" name="trailer_fee" value="50"> &nbsp; <span class="text-white">Yes</span> <span class="ml-4"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        @else

                                        @endif
                                    @endif

                                    @if($rental->activity_item == 'Renegade BC 600ETec' or $rental->activity_item == 'Summit 154 SP')
                                        <div class="row mt-3">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label for="trailer_fee"><h4>Add Trailer?</h4></label>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="form-group">
                                                    <input type="checkbox" class="radio" name="trailer_fee" value="50"> &nbsp; <span class="text-white">Yes</span> <span class="ml-4"></span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <!-- /Security & Fuel Deposit -->

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>

                                <input type="hidden" value="Checked In" name="status">
                                @if(Auth::check())
                                    <input type="hidden" value="{{auth()->user()->id}}" name="check_in_by">
                                @endif
                                <input type="hidden" value="{{$dateNow}}" name="check_in_time">

                                <button class="btn btn-primary-red btn-modal" type="submit">CHECK IN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Check In Rental Modal -->

        <!-- Cancel Rental Modal -->
        <div class="modal fade" id="cancel_rental{{$rental->id}}" tabindex="-1" role="dialog" aria-labelledby="cancelModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h4 class="mb-4">Are you sure you want to cancel:</h4>
                                <h3><span>{{$rental->first_name}} {{$rental->last_name}}</span> <br> {{$rental->activity_item}}</h3>
                                <h5>{{$rental->booking_id}}</h5>
                                <p class="italic mt-4">This action can NOT be undone!</p>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">NEVERMIND...</button>

                        <form action="{{route('office.cancelRental', $rental->id)}}" method="post">
                            @csrf
                            @method('PUT')

                            @if(Auth::check())
                                <input type="hidden" value="{{auth()->user()->id}}" name="check_in_by">
                            @endif
                            <input type="hidden" value="{{$dateNow}}" name="check_in_time">
                            <input type="hidden" value="Canceled" name="status">

                            <button class="btn btn-primary-red" type="submit">CANCEL RENTAL</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Cancel Rental Modal -->



    @endsection




    @section('scripts')
    <!-- Page level plugins -->
        <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('js/demo/datatables-scripts.js')}}"></script>
    @endsection

</x-office-master>
