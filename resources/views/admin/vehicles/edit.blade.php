<x-admin-master>



    @foreach($applications as $application)

    @section('page_title')
        <h1>Update Vehicle</h1>
    @endsection

    @section('browser_title')
        <title>Update Vehicle | {{$application->name}}</title>
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
        <h1>Edit Vehicle: {{$vehicle->internal_vehicle_id}}</h1>


        <div class="row">
            <div class="col-sm-6">
                @if(session()->has('vehicle-updated'))
                    <div class="alert alert-danger">
                        {{session('vehicle-updated')}}
                    </div>

                @endif
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
                                <input type="date" name="last_serviced" id="last_serviced" class="form-control" value="{{$vehicle->last_serviced}}" />
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



                    <button class="btn btn-primary">Update</button>
                </form>
            </div>

        </div>

    @endsection


</x-admin-master>
