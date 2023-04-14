{{--@foreach($rentals as $rental)--}}

{{--<div class="modal fade" id="rental_checkin{{$rental->id}}" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">--}}
{{--    <div class="modal-dialog modal-lg" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h3 id="modal_rental_title" class="modal-title"><span>Check In: </span>{{$rental->activity_item}} | {{$rental->first_name}} {{$rental->last_name}}</h3>--}}
{{--                <button class="close" type="button" data-dismiss="modal" aria-label="Close">--}}
{{--                    <span aria-hidden="true">×</span>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}

{{--                <!-- Rental Information -->--}}
{{--                <!-- Modal Section Title -->--}}
{{--                <div class="row">--}}
{{--                    <div class="col-sm-12">--}}
{{--                        <h4 class="modal-section-title">Rental Information</h4>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- /Modal Section Title -->--}}

{{--                <div class="modal-rental-info">--}}
{{--                    <div class="row">--}}
{{--                        <!-- Renter Info -->--}}
{{--                        <div class="col-sm-6 col-md-4">--}}
{{--                            <div class="area-box">--}}
{{--                                <!-- Item -->--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <p class="modal-item-title">First Name:</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <p class="modal-item">{{$rental->first_name}}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Item -->--}}
{{--                                <!-- Item -->--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <p class="modal-item-title">Last Name:</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <p class="modal-item">{{$rental->last_name}}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Item -->--}}
{{--                                <!-- Item -->--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <p class="modal-item-title">Email:</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <p class="modal-item">{{$rental->email}}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Item -->--}}
{{--                                <!-- Item -->--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <p class="modal-item-title">Phone:</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <p class="modal-item">{{$rental->phone}}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Item -->--}}
{{--                                <!-- Item -->--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <p class="modal-item-title">Zip Code:</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <p class="modal-item">{{$rental->zip_code}}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Item -->--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- /Renter Info -->--}}
{{--                        <!-- Rental Status -->--}}
{{--                        <div class="col-sm-6 col-md-4">--}}
{{--                            &nbsp;--}}
{{--                        </div>--}}
{{--                        <!-- /Rental Status -->--}}
{{--                        <!-- Rental Info -->--}}
{{--                        <div class="col-sm-6 col-md-4">--}}
{{--                            <div class="area-box">--}}
{{--                                <!-- Item -->--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <p class="modal-item-title">Booking ID:</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <p class="modal-item">{{$rental->booking_id}}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Item -->--}}
{{--                                <!-- Item -->--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <p class="modal-item-title">Activity Item:</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <p class="modal-item">{{$rental->activity_item}}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Item -->--}}
{{--                                <!-- Item -->--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <p class="modal-item-title">Activity Date:</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <p class="modal-item">{{$rental->activity_date}}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Item -->--}}
{{--                                <!-- Item -->--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <p class="modal-item-title">Ticket List:</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <p class="modal-item">{{$rental->ticket_list}}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Item -->--}}
{{--                                <!-- Item -->--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <p class="modal-item-title">Activity Item:</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <p class="modal-item">{{$rental->activity_item}}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Item -->--}}
{{--                                <!-- Item -->--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <p class="modal-item-title">Purchase Type:</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <p class="modal-item">{{$rental->purchase_type}}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Item -->--}}
{{--                                <!-- Item -->--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <p class="modal-item-title">Payment Status:</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <p class="modal-item">{{$rental->payment_status}}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Item -->--}}
{{--                                <!-- Item -->--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <p class="modal-item-title">Total Charge:</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <p class="modal-item">{{$rental->total_charge}}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /Item -->--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- /Rental Info -->--}}
{{--                    </div>--}}
{{--                    <!-- Connect Rental Customer -->--}}
{{--                    <!-- Modal Section Title -->--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-sm-12">--}}
{{--                            <h4 class="modal-section-title">Customer Information</h4>--}}
{{--                            <p class="modal-section-title-sub">This is the info for the person doing the deposit...</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- /Modal Section Title -->--}}
{{--                --}}{{--                                        <div class="row">--}}
{{--                --}}{{--                                            <div class="col-sm-12">--}}
{{--                --}}{{--                                                <ul class="nav nav-tabs" id="myTab{{$rental->id}}" role="tablist">--}}
{{--                --}}{{--                                                    <li class="nav-item">--}}
{{--                --}}{{--                                                        <a class="nav-link active" id="search-customer-tab{{$rental->id}}" data-toggle="tab" href="#search-customer{{$rental->id}}" role="tab" aria-controls="search-customer{{$rental->id}}"--}}
{{--                --}}{{--                                                           aria-selected="true">Returning Customer</a>--}}
{{--                --}}{{--                                                    </li>--}}
{{--                --}}{{--                                                    <li class="nav-item">--}}
{{--                --}}{{--                                                        <a class="nav-link" id="add-customer-tab{{$rental->id}}" data-toggle="tab" href="#add-customer{{$rental->id}}" role="tab" aria-controls="add-customer{{$rental->id}}"--}}
{{--                --}}{{--                                                           aria-selected="false">New Customer</a>--}}
{{--                --}}{{--                                                    </li>--}}
{{--                --}}{{--                                                </ul>--}}
{{--                --}}{{--                                                <div class="tab-content" id="myTabContent{{$rental->id}}">--}}
{{--                --}}{{--                                                    <div class="tab-pane fade show active" id="search-customer{{$rental->id}}" role="tabpanel" aria-labelledby="search-customer-tab{{$rental->id}}">--}}
{{--                --}}{{--                                                        <div class="col-sm-12">--}}
{{--                --}}{{--                                                            <div class="card-body">--}}
{{--                --}}{{--                                                                <div class="table-responsive">--}}
{{--                --}}{{--                                                                    <table class="table table-bordered" id="customersTable" width="100% !important;" cellspacing="0">--}}
{{--                --}}{{--                                                                        <thead>--}}
{{--                --}}{{--                                                                        <tr>--}}
{{--                --}}{{--                                                                            <th>First Name</th>--}}
{{--                --}}{{--                                                                            <th>Last Name</th>--}}
{{--                --}}{{--                                                                            <th>Email</th>--}}
{{--                --}}{{--                                                                            <th>Phone</th>--}}
{{--                --}}{{--                                                                            <th># of Rentals</th>--}}
{{--                --}}{{--                                                                            <th>Last Rental</th>--}}
{{--                --}}{{--                                                                            <th>View Profile</th>--}}
{{--                --}}{{--                                                                            <th>Edit Customer</th>--}}
{{--                --}}{{--                                                                        </tr>--}}
{{--                --}}{{--                                                                        </thead>--}}
{{--                --}}{{--                                                                        <tbody>--}}

{{--                --}}{{--                                                                        @foreach($customers as $customer)--}}
{{--                --}}{{--                                                                            <tr>--}}
{{--                --}}{{--                                                                                <td>{{$customer->first_name}}</td>--}}
{{--                --}}{{--                                                                                <td>{{$customer->last_name}}</td>--}}
{{--                --}}{{--                                                                                <td>{{$customer->email}}</td>--}}
{{--                --}}{{--                                                                                <td>{{$customer->phone}}</td>--}}
{{--                --}}{{--                                                                                <td>$nbsp;</td>--}}
{{--                --}}{{--                                                                                <td>$nbsp;</td>--}}
{{--                --}}{{--                                                                                <td class="no-border-right">--}}
{{--                --}}{{--                                                                                    <a href="{{route('customers.profile.view', $customer->id)}}" class="btn btn-primary">View Profile</a>--}}
{{--                --}}{{--                                                                                </td>--}}
{{--                --}}{{--                                                                                <td class="no-border-right">--}}
{{--                --}}{{--                                                                                    <a href="#" class="btn btn-secondary">Attach</a>--}}
{{--                --}}{{--                                                                                </td>--}}
{{--                --}}{{--                                                                                <td class="">--}}
{{--                --}}{{--                                                                                    <a href="#" class="btn btn-secondary">Detach</a>--}}
{{--                --}}{{--                                                                                </td>--}}
{{--                --}}{{--                                                                            </tr>--}}
{{--                --}}{{--                                                                        @endforeach--}}

{{--                --}}{{--                                                                        </tbody>--}}
{{--                --}}{{--                                                                    </table>--}}
{{--                --}}{{--                                                                </div>--}}
{{--                --}}{{--                                                            </div>--}}
{{--                --}}{{--                                                        </div>--}}
{{--                --}}{{--                                                    </div>--}}
{{--                --}}{{--                                                    <div class="tab-pane fade" id="add-customer{{$rental->id}}" role="tabpanel" aria-labelledby="add-customer-tab{{$rental->id}}">--}}
{{--                --}}{{--                                                        <form method="post" action="">--}}
{{--                --}}{{--                                                            <div class="form-group">--}}
{{--                --}}{{--                                                                <label for="last_name">LN : {{$rental->last_name}}</label>--}}
{{--                --}}{{--                                                                <input id="last_name" type="text" name="last_name" value="{{$rental->last_name}}" />--}}
{{--                --}}{{--                                                            </div>--}}
{{--                --}}{{--                                                            <button class="btn btn-secondary">Add Customer</button>--}}
{{--                --}}{{--                                                        </form>--}}
{{--                --}}{{--                                                    </div>--}}
{{--                --}}{{--                                                </div>--}}
{{--                --}}{{--                                            </div>--}}
{{--                --}}{{--                                        </div>--}}
{{--                <!-- /Connect Rental Customer -->--}}
{{--                </div>--}}
{{--                <!-- /Rental Information -->--}}
{{--            </div>--}}
{{--            <div class="modal-footer">--}}
{{--                <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>--}}
{{--                <form action="#" method="post">--}}
{{--                    @csrf--}}
{{--                    <button class="btn btn-primary-red">CHECK IN</button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


{{--@endforeach--}}
