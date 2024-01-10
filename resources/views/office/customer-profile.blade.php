<x-office-master>
    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection

    @foreach($applications as $application)
        @section('page_title')
            <h1>Customer: <span>{{$customer->first_name}} {{$customer->last_name}}</h1>
        @endsection

        @section('browser_title')
            <title>Customer: <span>{{$customer->first_name}} {{$customer->last_name}} | {{$application->name}}</title>
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

            <!-- CUSTOMER INFORMATION -->
            <div class="card mb-4 my-3 shadow">
                <div class="card-header">
                    <h3 class="card-title">Customer Information</h3>
                </div>

                <div class="card-body">
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
                                                <p class="item">{{$customer->first_name}}</p>
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
                                                <p class="item">{{$customer->last_name}}</p>
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
                                                <p class="item">{{$customer->email}}</p>
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
                                                <p class="item">{{$customer->phone}}</p>
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
                                                <p class="item">{{\Carbon\Carbon::parse($customer->birth_date)->format('M d, Y')}}</p>
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
                                                <p class="item">{{$customer->how_heard}}</p>
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
                                                <p class="item">{{$customer->address_1}}</p>
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
                                               <p class="item">{{$customer->city}}</p>
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
                                                <p class="item">{{$customer->state}}</p>
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
                                                <p class="item">{{$customer->zip_code}}</p>
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
                                               <p class="item">{{$customer->driver_license_state}}</p>
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
                                                <p class="item">{{$customer->driver_license_number}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Item -->

                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6 offset-sm-3 col-md-4 offset-md-0">
                            <div class="mb-4 mt-4">
                                @if($customer->license_front == 'null')
                                    &nbsp;
                                @else
                                    <img class="img-responsive" src="{{asset('storage/' . $customer->license_front)}}" height="150px" width="auto"  alt="{{$customer->first_name}} {{$customer->last_name}} License not uploaded yet... "/>
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
                                   data-target="#customer_update{{$customer->id}}">Update Customer</a>


                            </div>
                        </div>
                    </div>

                    <!-- Update Customer Modal -->
                    <div class="modal fade" id="customer_update{{$customer->id}}" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{route('office.updateCustomer', $customer->id)}}" enctype="multipart/form-data" class="addCustomer-form">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="first_name">First Name</label>
                                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{$customer->first_name}}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="last_name">Last Name</label>
                                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{$customer->last_name}}">
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
                                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{$customer->phone}}">
                                                    @error('phone')
                                                    <span>{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$customer->email}}">
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
                                                    <input type="text" class="form-control " name="address_1" value="{{$customer->address_1}}">
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
                                                            <input type="text" class="form-control" name="city" value="{{$customer->city}}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <label for="state">State</label>
                                                            <input type="text" class="form-control" name="state" value="{{$customer->state}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="zip_code">Zip Code</label>
                                                            <input type="text" class="form-control" name="zip_code" value="{{$customer->zip_code}}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label for="driver_license_state">DL State</label>
                                                            <input type="text" class="form-control" name="driver_license_state" value="{{$customer->driver_license_state}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="form-group">
                                                            <label for="driver_license_number">DL Number</label>
                                                            <input type="text" class="form-control" name="driver_license_number" value="{{$customer->driver_license_number}}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="birth_date">Birthdate</label>
                                                            <input type="date" class="form-control" name="birth_date" value="{{$customer->birth_date}}">
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
                                                        <img class="img-responsive" src="{{asset('storage/' . $customer->license_front)}}" height="150px" width="auto">
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


                </div>

            </div>
            <!-- /CUSTOMER INFORMATION -->

            <!-- CUSTOMER RENTALS -->
            <div class="card mb-4 shadow">
                <div class="card-header">
                    <h3 class="card-title">Rental History</h3>
                </div>

                <div class="card-body">
                    <div class="area-box border-bottom-1 hidden-xs">
                        <div class="row">
                            <div class="hidden-sm col-md-2">
                                <p class="item-title text-center">Booking ID</p>
                            </div>
                            <div class="col-4 col-sm-3 col-md-1">
                                <p class="item-title text-center">Vehicle</p>
                            </div>
                            <div class="col-4 col-sm-4  col-md-3">
                                <p class="item-title text-center">Reservation Name</p>
                            </div>
                            <div class="col-4 col-sm-3 col-md-4">
                                <p class="item-title">Status</p>
                            </div>
                            <div class="hidden-xs col-sm-2 col-md-1"></div>
                        </div>
                    </div>
                    @foreach($rentals as $rental)
                        <div class="area-box rental-history-item text-center">
                            <div class="row">
                                <div class="hidden-sm col-md-2">
                                    <p class="item pt-2 text-center">{{$rental->booking_id}}</p>
                                </div>
                                <div class="col-12 col-sm-2 col-md-1">
                                    <p class="item pt-2 sm-lg">
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
                                <div class="col-12 col-sm-3 col-md-3">
                                    <p class="item pt-2 text-center">
                                        {{$rental->first_name}} {{$rental->last_name}}
                                    </p>
                                </div>
                                <div class="col-12 col-sm-5 col-md-4">
                                    <div class="row">
                                        <div class="col-12 col-sm-4">
                                            <p class="item pt-2">{{$rental->status}}</p>
                                        </div>
                                        <div class="col-12 col-sm-8">
                                            @if($rental->coc_status == '')
                                                &nbsp;
                                            @else
                                                <div class="row">
                                                    <div class="col-6 col-sm-7 text-right">
                                                        <p class="item pt-2 text-red">COC Status:</p>
                                                    </div>
                                                    <div class="col-6 col-sm-5 text-left">
                                                        <p class="item pt-2">{{$rental->coc_status}}</p>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-2">
                                    <a href="{{route('office.rentalProfile', $rental)}}" class="btn btn-primary btn-100">View</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- /CUSTOMER RENTALS -->

        @endsection

    @section('sidebar')
    <!-- Recent Announcement Widget -->
        @foreach($posts as $post)
            <div class="card my-4 shadow">
                <h5 class="card-header text-center">{{$post->title}}</h5>
                <div class="card-body">
                    {{Str::limit($post->body, '200', '...')}}
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
