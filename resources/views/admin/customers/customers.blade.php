<x-admin-master>

    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection


        @foreach($applications as $application)

        @section('page_title')
            <h1>View Customers</h1>
        @endsection

        @section('browser_title')
            <title>View Customers | {{$application->name}}</title>
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
               <h1>Customers</h1>
           </div>
        </div>

            <div class="card my-3 shadow">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="customersTable" width="100% !important;" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th class="hidden-xs-table hidden-sm">Email</th>
                                        <th class="hidden-xs-table">Phone</th>
{{--                                        <th># of Rentals</th>--}}
{{--                                        <th>Last Rental</th>--}}
                                        <th>View Profile</th>
                                        <th class="hidden-xs-table">Edit Customer</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($customers as $customer)
                                        <tr>
                                            <td class="no-border-right pt-6">{{$customer->first_name}}</td>
                                            <td class="no-border-right pt-6">{{$customer->last_name}}</td>
                                            <td class="no-border-right pt-6 hidden-xs-table">{{$customer->email}}</td>
                                            <td class="no-border-right pt-6 hidden-xs-table">{{$customer->phone}}</td>
{{--                                            <td class="no-border-right pt-6">--}}
{{--                                                @if($rentalCount)--}}
{{--                                                    {{$rentalCount}}--}}
{{--                                                @endif--}}

{{--                                            </td>--}}
{{--                                            <td class="no-border-right pt-6">$nbsp;</td>--}}
                                            <td class="no-border-right">
                                                <a href="{{route('customers.profile.view', $customer->id)}}" class="btn btn-primary">View Profile</a>
                                            </td>
                                            <td class="no-border-right hidden-xs">
                                                <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#updateCustomer{{$customer->id}}">Edit Profile</a>
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


            <!-- Update Customer Modal -->
            @foreach($customers as $customer)
                <div class="modal fade" id="updateCustomer{{$customer->id}}" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
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
                                                        <label for="driver_license_state">Driver License State</label>
                                                        <input type="text" class="form-control" name="driver_license_state" value="{{$customer->driver_license_state}}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label for="driver_license_number">Driver License Number</label>
                                                        <input type="text" class="form-control" name="driver_license_number" value="{{$customer->driver_license_number}}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="birth_date">Birthdate</label>
                                                        <input type="text" class="form-control" name="birth_date" value="{{$customer->birth_date}}">
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
            @endforeach
            <!-- /Update Customer Modal -->

    @endsection


    @section('scripts')
        <!-- Page level plugins -->
            <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

            <!-- Page level custom scripts -->
            <script src="{{asset('js/demo/datatables-scripts.js')}}"></script>
    @endsection



</x-admin-master>
