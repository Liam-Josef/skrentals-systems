<x-admin-master>

    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection


        @foreach($applications as $application)

        @section('page_title')
            <h1>Vehicles</h1>
        @endsection

        @section('browser_title')
            <title>Vehicles | {{$application->name}}</title>
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
        <h1>Vehicles</h1>

            <!-- Vehicles Table -->
            <div class="card shadow mb-4">
{{--                <div class="card-header py-3 text-center" style="display: none !important;">--}}
{{--                    <h6 class="m-0 font-weight-bold text-white">--}}
{{--                        <span style="color:transparent">SK</span>--}}
{{--                        @if(session('message'))--}}
{{--                            {{session('message')}}--}}
{{--                        @elseif(session('vehicle-created-message'))--}}
{{--                            {{session('vehicle-created-message')}}--}}
{{--                        @elseif(session('vehicle-updated-message'))--}}
{{--                            {{session('vehicle-updated-message')}}--}}
{{--                        @endif--}}
{{--                    </h6>--}}
{{--                </div>--}}
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="vehiclesTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Vehicle</th>
                                <th>Year</th>
                                <th>Vin</th>
                                <th>OR-Number</th>
                                <th>Hours</th>
                                <th>Expected</th>
                                <th>Location</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($vehicles as $vehicle)
                                <tr>
                                    <td class="no-border-right pt-6">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</td>
                                    <td class="no-border-right pt-6">{{$vehicle->year}}</td>
                                    <td class="no-border-right pt-6">{{$vehicle->vin}}</td>
                                    <td class="no-border-right pt-6">{{$vehicle->or_number}}</td>
                                    <td class="no-border-right pt-6">{{$vehicle->current_hours}}</td>
                                    <td class="no-border-right pt-6">{{$vehicle->expected_hours}}</td>
                                    <td class="no-border-right pt-6">
                                        @if($vehicle->launched == '1')
                                            On Rental
                                        @else
                                            {{$vehicle->location}}
                                        @endif
                                    </td>
                                    <td class="no-border-right">
                                        <form method="post" action="{{route('vehicle.view', $vehicle->id)}}">
                                            @csrf
                                            @method('GET')

                                            <button type="submit" class="btn btn-primary-red">View </button>
                                        </form>
                                    </td>
                                    <td class="no-border-right">

                                            <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#editVehicle{{$vehicle->id}}">Edit</a>
                                    </td>
                                    <td>
                                        <form method="post" action="">
                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-primary" type="submit"
                                                @if(auth()->user()->userHasRole('Supervisor'))
                                                disabled
                                                @else
                                                @endif>DeComm</button>
                                        </form>
{{--                                        <form method="post" action="{{route('vehicle.delete', $vehicle->id)}}">--}}
{{--                                            @csrf--}}
{{--                                            @method('DELETE')--}}

{{--                                            <button class="btn btn-danger" type="submit">Delete</button>--}}
{{--                                        </form>--}}
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        @foreach($vehicles as $vehicle)
            <!--edit Vehicle Modal -->
                <div class="modal fade" id="editVehicle{{$vehicle->id}}" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 id="modal_rental_title" class="modal-title"><span>Update </span>{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</h3>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form method="post" action="{{route('vehicle.update', $vehicle->id)}}">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-sm-3 col-md-2">
                                            <div class="form-group">
                                                <label for="internal_vehicle_id">Identifier</label>
                                                <input type="text" name="internal_vehicle_id" id="internal_vehicle_id" class="form-control @error('internal_vehicle_id') is-invalid @enderror" value="{{$vehicle->internal_vehicle_id}}" disabled/>
                                                <div>
                                                    @error('internal_vehicle_id')
                                                    <span><strong>{{$message}}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 xol-md-10">
                                            <div class="form-group">
                                                <label for="vehicle_type">Type</label>
                                                <input name="vehicle_type" id="vehicle_type" class="form-control @error('vehicle_type') is-invalid @enderror" value="{{$vehicle->vehicle_type}}" disabled>
                                                <div>
                                                    @error('vehicle_type')
                                                    <span><strong>{{$message}}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3 col-md-2">
                                            <div class="form-group">
                                                <label for="year">Year</label>
                                                <input type="text" name="year" id="year" class="form-control @error('year') is-invalid @enderror" value="{{$vehicle->year}}" disabled/>
                                                <div>
                                                    @error('year')
                                                    <span><strong>{{$message}}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 col-md-10">
                                            <div class="form-group">
                                                <label for="model">Model</label>
                                                <input name="model" id="model" class="form-control @error('model') is-invalid @enderror" value="{{$vehicle->model}}" disabled>

                                                <div>
                                                    @error('model')
                                                    <span><strong>{{$message}}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="vin">VIN</label>
                                                <input type="text" name="vin" id="vin" class="form-control @error('vin') is-invalid @enderror" value="{{$vehicle->vin}}" disabled/>
                                                <div>
                                                    @error('vin')
                                                    <span><strong>{{$message}}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="location">Location</label>
                                                <select name="location" id="location" class="form-control @error('location') is-invalid @enderror" value="{{$vehicle->location}}">
                                                    <option value="Dock">Dock</option>
                                                    <option value="Island">Island</option>
                                                    <option value="Service">Service</option>
                                                    <option value="Zeta">Zeta</option>
                                                    <option value="Incoming">Incoming</option>
                                                </select>
                                                <div>
                                                    @error('location')
                                                    <span><strong>{{$message}}</strong></span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="or_number">OR Number</label>
                                                <input type="text" name="or_number" id="or_number" class="form-control" value="{{$vehicle->or_number}}" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="last_serviced">Last Serviced</label>
                                                <input type="text" name="last_serviced" id="last_serviced" class="form-control" value="{{$vehicle->last_serviced}}" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="current_hours">Current Hours</label>
                                                <input type="number" name="current_hours" id="current_hours" class="form-control" value="{{$vehicle->current_hours}}" />
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="expected_hours">Expected Hours</label>
                                                <input type="number" name="expected_hours" id="expected_hours" class="form-control" value="{{$vehicle->expected_hours}}" />
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="remaining_hours">Remaining Hours</label>
                                                <input type="number" name="remaining_hours" id="remaining_hours" class="form-control" value="{{$vehicle->remaining_hours}}" />
                                            </div>
                                        </div>
                                    </div>



                                    <div class="modal-footer">
                                        <div class="row width-100">
                                            <div class="col-10">
                                                <textarea name="notes" id="notes" cols="10" rows="2"
                                                          class="form-control" placeholder="Add Notes...">{{$vehicle->notes}}</textarea>
                                            </div>
                                            <div class="col-2">
                                                <button class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>


                            </div>

                        </div>
                    </div>
                </div>
                <!-- /edit Vehicle Modal -->
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
