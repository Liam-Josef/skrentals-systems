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

                    <small>{{$booking->quantity}} x</small>
                 @foreach($durations as $duration)
                    {{$duration->abbreviation}}
                @endforeach

                @foreach($types as $type)
                    {{$type->name}}
                @endforeach
                    | {{$booking->first}} {{$booking->last}}</span></h1>
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
                        <h3 class="card-title text-right status">{{$booking->status}} </h3>
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
                                        <p class="item">{{$booking->id}}</p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="item-title">Vehicle:</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="item">
                                            @foreach($types as $type)
                                                {{$type->name}}
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="item-title">Rental Date:</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="item">{{\Carbon\Carbon::parse($booking->activity_date_start)->format('M d, Y')}}</p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="item-title">Ticket List:</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="item">{{$booking->quantity}}x
                                            @foreach($durations as $duration)
                                                {{$duration->name}}
                                            @endforeach
                                            @foreach($types as $type)
                                                {{$type->name}}
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="item-title">Purchase Type:</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="item">{{$booking->purchase_type}}</p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="item-title">Payment Status:</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="item">
                                            @if($booking->total_owed > 0)
                                                <span class="text-red">COLLECT PAYMENT ( $
                                                    @php
                                                        echo number_format($booking->total_owed, 2);
                                                    @endphp
                                                                    )</span>
                                            @else
                                                Paid
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="item-title">Total Charge:</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="item">{{$booking->total_cost}}</p>
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
                                        <p class="item">{{$booking->first}}</p>
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
                                        <p class="item">{{$booking->last}}</p>
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
                                        <p class="item">{{$booking->email}}</p>
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
                                        <p class="item">{{$booking->phone = substr($booking->phone, 2)}}</p>
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
                                        <p class="item">{{$booking->zip_code}}</p>
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
                <div class="row">
                    <div class="col-sm-8">
                        <h3 class="card-title">Customer Information</h3>
                        <p class="card-title-sub">This is the info for the person doing the deposit...</p>
                    </div>
                    <div class="col-sm-4">
                        @foreach($booking->customers as $booking_customer)
                            @if($booking_customer->customer_id == $booking->customer_id)
                                <form method="post" action="{{route('office.customer.detach', $booking)}}">
                                    @csrf
                                    @method('PUT')

                                    <input type="hidden" name="customer" value="{{$booking_customer->id}}">
                                    <button  class="btn btn-outline-primary align-right mt-3 text-white"
                                             @if(!$booking->customers->contains($booking_customer))
                                             hidden
                                             @endif
                                             type="submit">Change Customer</button>
                                </form>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="card-body">
                @foreach($booking->customers as $booking_customer)
                    @if($booking_customer->customer_id == $booking->customer_id)

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
                                            <p class="item">{{$booking_customer->first_name}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">Last Name:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{$booking_customer->last_name}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">Email:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{$booking_customer->email}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">Phone:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{$booking_customer->phone}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">Birth Date:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{\Carbon\Carbon::parse($booking_customer->birth_date)->format('M d, Y')}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->

                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">How Heard:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{$booking_customer->how_heard}}</p>
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
                                            <p class="item">{{$booking_customer->address_1}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">City:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{$booking_customer->city}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">State:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{$booking_customer->state}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">Zip Code:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{$booking_customer->zip_code}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->

                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">License State:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{$booking_customer->driver_license_state}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->

                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="item-title">License Number:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{$booking_customer->driver_license_number}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="mb-4">
                                    @if($booking_customer->license_front == 'null')
                                        &nbsp;
                                    @else
                                        <img class="img-responsive" src="{{asset('storage/' . $booking_customer->license_front)}}" height="150px" width="auto"  alt="{{$booking_customer->first_name}} {{$booking_customer->last_name}} License not uploaded yet... "/>
                                    @endif
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="modal-footer pb-0">
                                        <div class="row width-100">
                                            <div class="col-sm-4 offset-sm-8">
                                                <a class="btn btn-secondary"
                                                   @if(!$booking->customers->contains($booking_customer))
                                                   hidden
                                                   @endif
                                                   href="#"
                                                   class="customer-update-modal"
                                                   data-toggle="modal"
                                                   data-target="#customer_update{{$booking_customer->id}}">Update Customer</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- /Rental Info -->
                        </div>

                        <!-- Update Customer Modal -->
                        <div class="modal fade" id="customer_update{{$booking_customer->id}}" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{route('office.updateCustomer', $booking_customer->id)}}" enctype="multipart/form-data" class="addCustomer-form">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="first_name">First Name</label>
                                                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{$booking_customer->first_name}}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="last_name">Last Name</label>
                                                        <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{$booking_customer->last_name}}">
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
                                                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{$booking_customer->phone}}">
                                                        @error('phone')
                                                        <span>{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$booking_customer->email}}">
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
                                                        <input type="text" class="form-control " name="address_1" value="{{$booking_customer->address_1}}">
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
                                                                <input type="text" class="form-control" name="city" value="{{$booking_customer->city}}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <label for="state">State</label>
                                                                <input type="text" class="form-control" name="state" value="{{$booking_customer->state}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label for="zip_code">Zip Code</label>
                                                                <input type="text" class="form-control" name="zip_code" value="{{$booking_customer->zip_code}}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label for="driver_license_state">Driver License State</label>
                                                                <input type="text" class="form-control" name="driver_license_state" value="{{$booking_customer->driver_license_state}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <label for="driver_license_number">Driver License Number</label>
                                                                <input type="text" class="form-control" name="driver_license_number" value="{{$booking_customer->driver_license_number}}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label for="birth_date">Birthdate</label>
                                                                <input type="date" class="form-control" name="birth_date" value="{{$booking_customer->birth_date}}">
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
                                                            <img class="img-responsive" src="{{asset('storage/' . $booking_customer->license_front)}}" height="150px" width="auto">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Right Side -->
                                            </div>



                                            <div class="modal-footer">
                                                <div class="row width-100">
                                                    <div class="col-6">
                                                        <button class="btn btn-secondary width-100" type="button" data-dismiss="modal">Close</button>
                                                    </div>
                                                    <div class="col-6">
                                                        <button class="btn btn-primary width-100" type="submit">UPDATE CUSTOMER</button>
                                                    </div>
                                                </div>
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
                @foreach($booking->customers as $booking_customer)
            @if($booking_customer->customer_id == $booking->customer_id)
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
                                                            <form method="post" action="{{route('office.customer.attach', $booking)}}">
                                                                @csrf
                                                                @method('PUT')

                                                                <input type="hidden" name="customer" value="{{$customer->id}}">
                                                                <input type="hidden" name="booking_id" value="{{$booking->id}}">
                                                                <button
                                                                    class="btn btn-secondary"
                                                                    @if($booking->customers->contains($customer))
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
                                <form method="post" action="{{route('office.customer.storeNew', $booking)}}" enctype="multipart/form-data" class="addCustomer-form">
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

        <!-- ADDITIONAL -->
        @foreach($types as $type)
            <div class="card mb-4 my-3 shadow">
                <div class="card-header">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6">
                            <h3 class="card-title">Additions  </h3>
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <h3 class="card-title text-right status">{{$booking->status}} </h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-sm-6">
                            @foreach($additions as $addition)
                                @if(!$type->additions->contains($addition))

                                    <div class="row additionRow">
                                        <div class="col-8 col-sm-6">
                                            <div class="row">
                                                <div class="col-8">
                                                    <h4>{{$addition->name}}</h4>
                                                </div>
                                                <div class="col-4">
                                                    <h4>{{$addition->cost}}</h4>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="col-1 col-sm-2">
                                            <input type="text" class="form-control mb-3 addition" id="addition" name="fuel_count" value="" placeholder="Qty">
                                            <div id="additionID" class="hidden additionID">{{$addition->id}}</div>{{$addition->id}}
                                            <div id="additionCost" class="hidden additionCost">{{$addition->cost}}</div>

                                        </div>
                                        <div class="col-sm-2">
                                            <div class="totalCost">

                                            </div>
                                            @php



                                                @endphp
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="col-sm-6">
                            <div class="row mt-3">

                                <div class="col-3 text-right">

                                    <!-- ROW 1 Unit Price-->
                                    <h4 class="">$ <span id="durCost">{{$booking->cost_per}}</span></h4>
                                    <!-- ROW 1 Unit Price-->

                                    <!-- ROW 2 Quantity -->
                                    <h4 class=""><span class="text-gray-500">x</span> <span id="quantity1out">{{$booking->quantity}}</span></h4>
                                    <!-- ROW 2 Quantity -->

                                    <!-- ROW 2 Duration -->
                                    @if($duration->hour == '1')
                                        <h4 class=""><span class="text-gray-500">x</span> <span id="duration1out">{{$booking->hour}}</span></h4>
                                        <!-- ROW 2 Duration -->
                                @else

                                @endif
                                <!-- ROW 2 Additions -->
                                    <h4 class=""><span class="text-gray-500">$</span> <span id="addition1out"></span></h4>
                                    <!-- ROW 2 Additions -->


                                    <!-- ROW 3 Fees -->
                                    <h4 class="">
                                        <span class="text-gray-500">$</span>
                                        <span id="fee1out">
                                    @php
                                        echo number_format($booking->fees, 2);
                                    @endphp
                                    </span>
                                    </h4>
                                    <!-- ROW 3 Fees -->

                                </div>
                                <div class="col-9">
                                    <!-- ROW 1 Unit Price -->
                                    <h4 class="">
                                        <span class="text-gray-500">each</span>
                                        {{$type->name}}
                                        <span class="text-gray-500">for</span>
                                        {{$duration->hour}}
                                        <span class="text-gray-500">hour(s)</span>
                                    </h4>
                                    <!-- ROW 1 Unit Price -->

                                    <!-- ROW 2 Quantity -->
                                    <h4 class="">
                                        {{$type->name}}<span class="text-gray-500">(s)</span>
                                    </h4>
                                    <!-- ROW 2 Quantity -->

                                    <!-- ROW 2 Quantity -->
                                    @if($duration->hour == '1')
                                        <h4 class="">
                                            Hour<span class="text-gray-500">(s)</span>
                                        </h4>
                                @else

                                @endif
                                <!-- ROW 2 Quantity -->

                                    <!-- ROW 23 Quantity -->
                                    <h4 class="">
                                        Addition <span class="text-gray-500">(s)</span>
                                    </h4>
                                    <!-- ROW 23 Quantity -->

                                    <!-- ROW 23 Quantity -->
                                    <h4 class="">
                                        Processing <span class="text-gray-500">&</span> Taxes
                                    </h4>
                                    <!-- ROW 23 Quantity -->
                                </div>
                            </div>
                            <!-- ROW TOTAL -->
                            <div class="row mt-3">
                                <div class="col-12">
                                    <h3 class="text-center"><span class="text-gray-500">$</span>
                                        <span id="total1out">
                                        @php
                                            echo number_format($booking->total_cost, 2);
                                        @endphp
                                    </span>
                                    </h3>
                                </div>
                            </div>
                            <!-- ROW TOTAL -->
                        </div>
                    </div>

                </div>
            </div>
        @endforeach
    <!-- /ADDITIONAL -->

        <!-- CHECK IN BUTTONS -->
        <div class="card mt-4 mb-5 shadow">
            <div class="modal-footer">
                <div class="row width-100">
                    <div class="col-sm-4">
                        <button class="btn btn-outline-primary" type="button" data-toggle="modal" data-target="#cancel_rental{{$booking->id}}">CANCEL RENTAL</button>
                    </div>
                    <div class="col-sm-4">

                    </div>
                    <div class="col-sm-4">
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#checkin{{$booking->id}}">CHECK IN</button>
                    </div>

                </div>

            </div>
        </div>
        <!-- /CHECK IN BUTTONS -->


        <form action="{{route('office.checkInRental', $booking->id)}}" method="post">
            @csrf
            @method('PUT')


            <div class="modal fade checkin-modal" id="checkin{{$booking->id}}" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">

                </div>
            </div>
        </form>


        <!-- Cancel Rental Modal -->
        <div class="modal fade" id="cancel_rental{{$booking->id}}" tabindex="-1" role="dialog" aria-labelledby="cancelModalLabel" aria-hidden="true">
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
                                <h3><span>{{$booking->first_name}} {{$booking->last_name}}</span> <br> {{$booking->activity_item}}</h3>
                                <h5>{{$booking->booking_id}}</h5>
                                <p class="italic mt-4">This action can NOT be undone!</p>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">NEVERMIND...</button>

                        <form action="{{route('office.cancelRental', $booking->id)}}" method="post">
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

        <script>
            $(document).ready(function() {

                // var id = $("#additionID").html();
                // alert(id);
                //
                // $("#additionID").each(function(id) {
                //
                //     alert(id);
                //
                // });

                $('.additionRow').each(function() {

                    // alert(dInput);

                    $('.addition').keypress(function() {
                        var id = $("#additionID").html();
                        var dInput = this.value;

                        $( this ).each(function() {
                            var add_cost = $(".additionCost").html();

                            $('.totalCost').html(add_cost);
                            alert(id);
                            // outFirst.value = inputFirst.value;

                        });

                    });


                });



// close
//                 $('.addition').keypress(function() {
//                     var dInput = this.value;
//                     // alert(dInput);
//                     var id = $("#additionID").html();
//
//                     $( this ).each(function() {
//                         var inputVar = dInput;
//                         var add_cost = $("#additionCost").html();
//
//
//                         alert(add_cost);
//                         // outFirst.value = inputFirst.value;
//
//                     });
//
//
//                 });

                // $( ".addition" ).on( "keyup", function(value) {
                //     alert();
                // } );

                //
                // $('.addition').onKeyup(function() {
                //
                //     // var start_time = $(".startTimeFormat").data("my-variable");
                //     // var availIncrem = "15";
                //     // var availIncrem = $('.availIncrem').html();
                //
                //     // var total = start_time + (availIncrem * 10000);
                //     //
                //     // alert(total);
                //
                //
                //     $( this ).each(function() {
                //         var id = $("#additionID").html();
                //         // ++i;
                //
                //         alert(id);
                //         // outFirst.value = inputFirst.value;
                //
                //
                //     });



                let inputFirst = document.getElementById('addition'+id);
                let outFirst = document.getElementById('addition1out');
                inputFirst.onkeyup = function () {

                    outFirst.value = inputFirst.value;

                }
            });
        </script>
    @endsection

</x-office-master>
