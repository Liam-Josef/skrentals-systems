<x-team-master>

    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection

    @foreach($applications as $application)

        @section('browser_title')
            @if(!auth()->user()->userHasRole('Service'))
                <title>Dashboard | {{$application->name}}</title>
            @elseif(auth()->user()->userHasRole('Service'))
                <h1>Service Requests | {{$application->name}}</h1>
            @endif
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

        @section('page_title')
            @if(!auth()->user()->userHasRole('Service'))
                <h1>Team Dashboard</h1>
            @elseif(auth()->user()->userHasRole('Service'))
                <h1>Service Requests</h1>
            @endif
        @endsection

    @endforeach


    @if(!auth()->user()->userHasRole('Service'))

    @section('content')
    <!-- Today's Rentals -->
        <div class="card shadow mt-4 my-3">
            <!-- Bar Chart -->
            <div class="card-header">
                <h3>Rentals Today</h3>
            </div>

            <div class="row">
                <div class="col-12 col-sm-4">
                    @if($rentalCounts)
                        <div class="card shadow m-3">
                            <div class="card-body text-center">
                                <h4>Total Rentals</h4>
                                <h2 class="text-dk-red">{{$rentalCounts}}</h2>
                            </div>
                        </div>
                    @else
                        <div class="card shadow m-3">
                            <div class="card-body text-center">
                                <h4>Total Rentals</h4>
                                <h2 class="text-dk-red">{{$rentalCounts}}</h2>
                            </div>
                        </div>
                    @endif
                </div>

                <div class="col-12 col-sm-8">
                    <div class="row">
                        @if($scarabCount)
                            <div class="col-12  col-md-4">
                                <div class="card shadow m-3">
                                    <div class="card-body text-center">
                                        <h4>Scarab</h4>
                                        <h2 class="text-dk-red">{{$scarabCount}}</h2>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-12  col-md-4">
                                <div class="card shadow m-3">
                                    <div class="card-body text-center">
                                        <h4>Scarab</h4>
                                        <h2 class="text-dk-red">{{$scarabCount}}</h2>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if($pontoonCount)
                            <div class="col-12 col-md-4">
                                <div class="card shadow m-3">
                                    <div class="card-body text-center">
                                        <h4>Pontoon</h4>
                                        <h2 class="text-dk-red">{{$pontoonCount}}</h2>
                                    </div>
                                </div>
                            </div>
                            @else
                                <div class="col-12 col-md-4">
                                    <div class="card shadow m-3">
                                        <div class="card-body text-center">
                                            <h4>Pontoon</h4>
                                            <h2 class="text-dk-red">0</h2>
                                        </div>
                                    </div>
                                </div>
                        @endif

                        @if($seadooCount)
                            <div class="col-12 col-md-4">
                                <div class="card shadow m-3">
                                    <div class="card-body text-center">
                                        <h4>SeaDoo</h4>
                                        <h2 class="text-dk-red">{{$seadooCount}}</h2>
                                    </div>
                                </div>
                            </div>
                            @else
                                <div class="col-12 col-md-4">
                                    <div class="card shadow m-3">
                                        <div class="card-body text-center">
                                            <h4>SeaDoo</h4>
                                            <h2 class="text-dk-red">0</h2>
                                        </div>
                                    </div>
                                </div>
                        @endif

                        @if($supCount)
                            <div class="col-12 col-md-4">
                                <div class="card shadow m-3">
                                    <div class="card-body text-center">
                                        <h4>SUP</h4>
                                        <h2 class="text-dk-red">{{$supCount}}</h2>
                                    </div>
                                </div>
                            </div>
                            @else
                                <div class="col-12 col-md-4">
                                    <div class="card shadow m-3">
                                        <div class="card-body text-center">
                                            <h4>SUP</h4>
                                            <h2 class="text-dk-red">{{$supCount}}</h2>
                                        </div>
                                    </div>
                                </div>
                        @endif

                        @if($kayakCount)
                            <div class="col-12 col-md-4">
                                <div class="card shadow m-3">
                                    <div class="card-body text-center">
                                        <h4>Kayak</h4>
                                        <h2 class="text-dk-red">{{$kayakCount}}</h2>
                                    </div>
                                </div>
                            </div>
                            @else
                                <div class="col-12 col-md-4">
                                    <div class="card shadow m-3">
                                        <div class="card-body text-center">
                                            <h4>Kayak</h4>
                                            <h2 class="text-dk-red">{{$kayakCount}}</h2>
                                        </div>
                                    </div>
                                </div>
                        @endif

                        @if($spyderCount)
                            <div class="col-12 col-md-4">
                                <div class="card shadow m-3">
                                    <div class="card-body text-center">
                                        <h4>Spyder</h4>
                                        <h2 class="text-dk-red">{{$spyderCount}}</h2>
                                    </div>
                                </div>
                            </div>
                            @else
                                <div class="col-12 col-md-4">
                                    <div class="card shadow m-3">
                                        <div class="card-body text-center">
                                            <h4>Spyder</h4>
                                            <h2 class="text-dk-red">{{$spyderCount}}</h2>
                                        </div>
                                    </div>
                                </div>
                        @endif

                        @if($segwayCount)
                            <div class="col-12 col-md-4">
                                <div class="card shadow m-3">
                                    <div class="card-body text-center">
                                        <h4>Segway</h4>
                                        <h2 class="text-dk-red">{{$segwayCount}}</h2>
                                    </div>
                                </div>
                            </div>
                            @else
                                <div class="col-12 col-md-4">
                                    <div class="card shadow m-3">
                                        <div class="card-body text-center">
                                            <h4>Segway</h4>
                                            <h2 class="text-dk-red">{{$segwayCount}}</h2>
                                        </div>
                                    </div>
                                </div>
                        @endif

                        @if($backcountryCount)
                            <div class="col-12 col-md-4">
                                <div class="card shadow m-3">
                                    <div class="card-body text-center">
                                        <h4>BC</h4>
                                        <h2 class="text-dk-red">{{$backcountryCount}}</h2>
                                    </div>
                                </div>
                            </div>
                            @else
                                <div class="col-12 col-md-4">
                                    <div class="card shadow m-3">
                                        <div class="card-body text-center">
                                            <h4>BC</h4>
                                            <h2 class="text-dk-red">{{$backcountryCount}}</h2>
                                        </div>
                                    </div>
                                </div>
                        @endif

                        @if($summitCount)
                            <div class="col-12 col-md-4">
                                <div class="card shadow m-3">
                                    <div class="card-body text-center">
                                        <h4>Summit</h4>
                                        <h2 class="text-dk-red">{{$summitCount}}</h2>
                                    </div>
                                </div>
                            </div>
                            @else
                                <div class="col-12 col-md-4">
                                    <div class="card shadow m-3">
                                        <div class="card-body text-center">
                                            <h4>Summit</h4>
                                            <h2 class="text-dk-red">{{$summitCount}}</h2>
                                        </div>
                                    </div>
                                </div>
                        @endif

                        @if($alumCount)
                            <div class="col-12 col-md-4">
                                <div class="card shadow m-3">
                                    <div class="card-body text-center">
                                        <h4>Alum</h4>
                                        <h2 class="text-dk-red">{{$alumCount}}</h2>
                                    </div>
                                </div>
                            </div>
                            @else
                                <div class="col-12 col-md-4">
                                    <div class="card shadow m-3">
                                        <div class="card-body text-center">
                                            <h4>Alum</h4>
                                            <h2 class="text-dk-red">{{$alumCount}}</h2>
                                        </div>
                                    </div>
                                </div>
                        @endif

                    </div>
                </div>
            </div>


        </div>
        <!-- /Today's Rentals -->


        <!-- Change of Condition -->
        <div class="card shadow my-3 mt-4">
            <div class="card-header">
                <h3>Change of Conditions</h3>
            </div>
            <div class="card-body p-3">

                @if($cocRentalCount > 0)
                    @foreach($cocRental as $rental)
                        <div class="coc-item">
                            <div class="row">
                                <div class="col-4 col-sm-2">
                                    <h5 class="mt-2">#{{$rental->invoice_number}}</h5>
                                </div>
                                <div class="col-8 col-sm-2">
                                    <h5 class="mt-2 text-red sm-md float-sm-right">
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

                                        @foreach($rental->vehicles as $rental_vehicle)
                                            {{$rental_vehicle->internal_vehicle_id}}
                                        @endforeach
                                    </h5>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <h5 class="coc-incident mt-2">{{$rental->incident}}</h5>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <h5 class="mt-2">{{$rental->phone = substr($rental->phone, 2)}}</h5>
                                </div>
                                <div class="col-12 col-sm-2">
                                    <a href="{{route('office.rentalProfile', $rental)}}" class="btn btn-primary align-right">View</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h1 class="text-center text-gray">Damage-Free Day...</h1>
                @endif

            </div>
        </div>
        <!-- /Change of Condition -->

        <!-- Employee Roster -->
        <div class="card shadow mt-4 my-3">
            <!-- Bar Chart -->
            <div class="card-header">
                <h3>Employee Roster</h3>
            </div>

            <div class="card-body p-3">

                @if($userCount > 0)
                    @foreach($users as $user)
                        @if($user->id != '2' && $user->id != '3')
                            @if($user->id != '15')
                                <div class="coc-item">
                                    <div class="row">
                                        <div class="col-6 col-sm-3">
                                            <h5 class="mt-2">{{$user->firstname}}</h5>
                                        </div>
                                        <div class="col-6 col-sm-3">
                                            <h5 class="mt-2">{{$user->lastname}}</h5>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <h5 class="mt-2"><a href="tel:{{$user->phone}}">{{$user->phone}}</a></h5>
                                        </div>
                                        <div class="col-12 col-sm-3">
                                            <h5 class="coc-incident mt-2"><a href="mailto:{{$user->email}}">{{$user->email}}</a></h5>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                    @endforeach
                @else
                    <h1 class="text-center text-black">Module Malfunction... Please contact <a href="mailto:support@rentalguru.us">RentalGuru</a></h1>
                @endif

            </div>
        </div>
        <!-- /Employee Roster -->


    @endsection

    @section('sidebar-post')
        <div class="card mt-4 shadow mb-4">
            <div class="card-header">
                <h3>Announcements</h3>
            </div>
            <div class="card-body">
                <ul class="navbar-nav sidebar-post accordion my-4 shadow" id="accordionSidebar">

                    <!-- Nav Item - Pages Collapse Menu -->
                    @foreach($posts as $post)
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAnnouncements{{$post->id}}" aria-expanded="true" aria-controls="collapseAnnouncements{{$post->id}}">
                                <span>{{$post->title}}</span>
                            </a>
                            <div id="collapseAnnouncements{{$post->id}}" class="collapse" aria-labelledby="headingAnnouncements" data-parent="#accordionSidebar">
                                <div class="bg-white pt-2 collapse-inner rounded">
                                    <div class="collapse-body">
                                        {{Str::limit($post->body, '200', '...')}}

                                        <img class="card-img-top mt-2" src="{{$post->post_image}}" alt="{{$post->title}}">

                                        <a href="{{route('post', $post->id)}}" class="btn btn-primary btn-100 mt-2">Read More</a>

                                    </div>

                                    <div class="collapse-footer mt-2">
                                        <div class="row">
                                            <div class="col-xs-7 col-sm-7 col-md-7">
                                                <span>{{$post->created_at->diffForHumans()}}</span>
                                            </div>
                                            <div class="col-xs-5 col-xs-5 col-md-5">
                                                <span class="text-primary">{{$post->user->firstname}} {{$post->user->lastname}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>

        <div class="card shadow mb-4">
                <div class="card-header">
                    <h3>Submit <span>Service Request</span></h3>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-12">
                            <!-- Vehicle List -->
                            <ul class="nav nav-tabs nav-justified mb-3 dock-depart sidebar-tab-list" id="runnerView" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="view-seadoo-tab" data-toggle="tab" href="#seadoo-tab" role="tab" aria-controls="seadoo-tab"
                                       aria-selected="true">
                                        SeaDoo
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="view-pontoon-tab" data-toggle="tab" href="#pontoon-tab" role="tab" aria-controls="pontoon-tab"
                                       aria-selected="true">
                                        Pontoon
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="view-scarab-tab" data-toggle="tab" href="#scarab-tab" role="tab" aria-controls="scarab-tab"
                                       aria-selected="true">
                                        Scarab
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Vehicle List Content -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="seadoo-tab" role="tabpanel" aria-labelledby="seadoo-tab">
                            <form action="{{route('maintenance.submitMaintReqOffice')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="service_type">Select Request Type</label>
                                            <select name="service_type" id="service_type" class="form-control">
                                                <option value="Repair">Repair</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="vehicle_id">Select SeaDoo</label>
                                                <select name="vehicle_id" id="vehicle_id" class="form-control">
                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                        <option id="{{$vehicle->id}}" value="{{$vehicle->id}}"> {{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row hidden">
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="description">Request Description</label>
                                            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="image">Attach an Image</label>
                                            <input type="file" name="image" id="image" class="form-control" accept="image/*"/>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="vehicle_type" value="SeaDoo">
                                <div class="modal-footer">
                                    <input type="hidden" name="is_active" value="0">
                                    <input type="hidden" name="status" value="Created">
                                    <input type="hidden" name="internal_vehicle_id" value="Ac">
                                    <input type="hidden" name="submitted_by" value="{{auth()->user()->id}}">
                                    <input type="hidden" name="date_submitted" value="{{$dateNow}}">
                                    <button class="btn btn-primary-red" type="submit">Submit Request</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade show" id="pontoon-tab" role="tabpanel" aria-labelledby="pontoon-tab">
                            <form action="{{route('maintenance.submitMaintReqOffice')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="service_type">Select Request Type</label>
                                            <select name="service_type" id="service_type" class="form-control">
                                                <option value="Repair">Repair</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="vehicle_id">Select Pontoon</label>
                                                <select name="vehicle_id" id="vehicle_id" class="form-control">
                                                    @foreach($vehiclePontoon as $vehicle)
                                                        <option id="{{$vehicle->id}}" value="{{$vehicle->id}}"> {{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row hidden">
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="description">Request Description</label>
                                            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="image">Attach an Image</label>
                                            <input type="file" name="image" id="image" class="form-control" accept="image/*" />
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="vehicle_type" value="23ft. Pontoon Boat">
                                <div class="modal-footer">
                                    <input type="hidden" name="is_active" value="0">
                                    <input type="hidden" name="status" value="Created">
                                    <input type="hidden" name="internal_vehicle_id" value="Z">
                                    <input type="hidden" name="submitted_by" value="{{auth()->user()->id}}">
                                    <input type="hidden" name="date_submitted" value="{{$dateNow}}">
                                    <button class="btn btn-primary-red" type="submit">Submit Request</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade show" id="scarab-tab" role="tabpanel" aria-labelledby="scarab-tab">
                            <form action="{{route('maintenance.submitMaintReqAdmin')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="service_type">Select Request Type</label>
                                            <select name="service_type" id="service_type" class="form-control">
                                                <option value="Repair">Repair</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="vehicle_id">Select Scarab</label>
                                                <select name="vehicle_id" id="vehicle_id" class="form-control">
                                                    @foreach($vehicleScarab as $vehicle)
                                                        <option id="{{$vehicle->id}}" value="{{$vehicle->id}}"> {{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row hidden">
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="description">Request Description</label>
                                            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="image">Attach an Image</label>
                                            <input type="file" name="image" class="form-control" accept="image/*">
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="vehicle_type" value="Scarab 215">
                                <div class="modal-footer">
                                    <input type="hidden" name="is_active" value="0">
                                    <input type="hidden" name="status" value="Created">
                                    <input type="hidden" name="internal_vehicle_id" value="Z">
                                    <input type="hidden" name="submitted_by" value="{{auth()->user()->id}}">
                                    <input type="hidden" name="date_submitted" value="{{$dateNow}}">
                                    <button class="btn btn-primary-red" type="submit">Submit Request</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
    @endsection

    @endif



    wa<!-- Service Section -->
    @if(auth()->user()->userHasRole('Service'))

        @section('content')

             <!-- Service Requests -->
            <div class="row">

                <div class="col-6 col-sm-3">
                    <div class="card shadow mt-3">
                        <div class="card-header">
                            <h3 class="text-center">Active Requests</h3>
                        </div>
                        <div class="card-body">
                            @if($serviceTotalCount)
                                <h1 class="text-red text-center">{{$serviceTotalCount}}</h1>
                            @else
                                <h1 class="text-red text-center">0</h1>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-3">
                    <div class="card shadow mt-3">
                        <div class="card-header">
                            <h3 class="text-center">New Requests</h3>
                        </div>
                        <div class="card-body">
                            @if($serviceNewCount)
                                <h1 class="text-red text-center">{{$serviceNewCount}}</h1>
                            @else
                                <h1 class="text-red text-center">0</h1>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-3">
                    <div class="card shadow mt-3">
                        <div class="card-header">
                            <h3 class="text-center">Need Invoice</h3>
                        </div>
                        <div class="card-body">
                            @if($serviceInvoiceCount)
                                <h1 class="text-red text-center">{{$serviceInvoiceCount}}</h1>
                            @else
                                <h1 class="text-red text-center">0</h1>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-3">
                    <div class="card shadow mt-3">
                        <div class="card-header">
                            <h3 class="text-center">Awaiting Approval</h3>
                        </div>
                        <div class="card-body">
                            @if($serviceAppCount)
                                <h1 class="text-red text-center">{{$serviceAppCount}}</h1>
                            @else
                                <h1 class="text-red text-center">0</h1>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
            <!-- /Service Requests -->


            <!-- New Requests -->
            <div class="card shadow my-3">
                <div class="card-header">
                    <h3>New Requests</h3>
                </div>
                <div class="card-body p-3">

                    @if($serviceNewCount)
                        @foreach($serviceInvReq as $service)
                            <div class="coc-item">
                                <div class="row mb-3">
                                    <div class="col-4 col-sm-2">
                                        @foreach($vehicles as $vehicle)
                                            @if($service->vehicle_id == $vehicle->id)
                                                <h5 class="mt-2">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</h5>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="col-8 col-sm-2">
                                        <h5 class="mt-2 sm-lg sm-red">
    {{--                                        @if($service->vehicle == 'Scarab 215')--}}
    {{--                                            Scarab--}}
    {{--                                        @elseif($service->vehicle == '23ft. Pontoon Boat')--}}
    {{--                                            Pontoon--}}
    {{--                                        @elseif($service->vehicle == '23ft. Pontoon Boat')--}}
    {{--                                            Pontoon--}}
    {{--                                        @elseif($service->vehicle == 'Renegade BC 600ETec')--}}
    {{--                                            Renegade--}}
    {{--                                        @elseif($service->vehicle == 'Summit 154 SP')--}}
    {{--                                            Summit--}}
    {{--                                        @elseif($service->vehicle == '14ft. Aluminum Boat')--}}
    {{--                                            Aluminum--}}
    {{--                                        @elseif($service->vehicle == 'Kayak Single')--}}
    {{--                                            Single Kayak--}}
    {{--                                        @elseif($service->vehicle == 'Double Kayak')--}}
    {{--                                            Double Kayak--}}
    {{--                                        @elseif($service->vehicle == 'Stand Up Paddleboard')--}}
    {{--                                            SUP--}}
    {{--                                        @elseif($service->vehicle == 'Segway i2')--}}
    {{--                                            Segway--}}
    {{--                                        @elseif($service->vehicle == 'Spyder RT-S SE6')--}}
    {{--                                            Spyder--}}
    {{--                                        @elseif($service->vehicle == 'SeaDoo')--}}
    {{--                                            SeaDoo--}}
    {{--                                        @else--}}
    {{--                                            {{$service->vehicle_type}}--}}

    {{--                                        @endif--}}

    {{--                                        @foreach($service->vehicles as $service_vehicle)--}}
    {{--                                            {{$service_vehicle->internal_vehicle_id}}--}}
    {{--                                        @endforeach--}}
                                        </h5>
                                    </div>
                                    <div class="hidden-xs col-sm-3">
                                        <h5 class="coc-incident mt-2">{{$service->description}}</h5>
                                    </div>
                                    <div class="col-6 col-sm-3">

                                    </div>
                                    <div class="col-6 col-sm-2">
                                        <a href="#" class="btn btn-primary align-right" data-toggle="modal" data-target="#serviceModal{{$service->id}}">View</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Service Modal -->
                            <div class="modal fade" id="serviceModal{{$service->id}}" tabindex="-1" role="dialog" aria-labelledby="cocIntake" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            @foreach($vehicles as $vehicle)
                                                @if($service->vehicle_id == $vehicle->id)
                                                    <h3><span>{{$vehicle->vehicle_type}} </span> ({{$vehicle->internal_vehicle_id}})</h3>
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    @if($service->image == '')
                                                        <img class="img-responsive" src="{{asset('storage/' . 'images/no-image.jpg')}}" height="auto" width="100%" />
                                                    @else
                                                        <img class="img-responsive" src="{{asset('storage/' . $service->image)}}" height="auto" width="100%" />
                                                    @endif
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5>Status: &nbsp;</h5>
                                                        </div>
                                                        <div class="col-6">
                                                            <h5><span>{{$service->status}}</span></h5>
                                                        </div>
                                                    </div>
                                                    @if($service->rental_invoice == '')

                                                    @else
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5>Rental Invoice: &nbsp;</h5>
                                                        </div>
                                                        <div class="col-6">
                                                            <h5><span>#{{$service->rental_invoice}}</span></h5>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5>VIN: &nbsp;</h5>
                                                        </div>
                                                        <div class="col-6">
                                                            <h5>
                                                                 <span>
                                                                        @foreach($vehicles as $vehicle)
                                                                         @if($vehicle->id == $service->vehicle_id)
                                                                             {{$vehicle->vin}}
                                                                         @endif
                                                                     @endforeach
                                                                </span>
                                                            </h5>
                                                        </div>
                                                    </div>

                                                    <br />

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5>Recent Hours: &nbsp;</h5>
                                                        </div>
                                                        <div class="col-6">
                                                            <h5>
                                                                 <span>
                                                                     @foreach($vehicles as $vehicle)
                                                                         @if($vehicle->id == $service->vehicle_id)
                                                                             {{$vehicle->current_hours}}
                                                                         @endif
                                                                     @endforeach
                                                                </span>
                                                            </h5>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5> Hours Updated: &nbsp;</h5>
                                                        </div>
                                                        <div class="col-6">
                                                            <h5>
                                                                <span>
                                                                    @foreach($vehicles as $vehicle)
                                                                        @if($vehicle->id == $service->vehicle_id)
                                                                            {{\Carbon\Carbon::parse($vehicle->hours_updated)->format('M d, Y')}}
                                                                        @endif
                                                                    @endforeach
                                                                </span>
                                                            </h5>
                                                        </div>
                                                    </div>

                                                    <br />

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5>Submitted By: &nbsp;</h5>
                                                        </div>
                                                        <div class="col-6">
                                                            <h5><span>
                                                                    @foreach($users as $user)

                                                                        @if($user->id == $service->submitted_by)
                                                                            {{$user->firstname}} {{$user->lastname}}
                                                                        @endif
                                                                    @endforeach
                                                                </span></h5>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5>Date Submitted: &nbsp;</h5>
                                                        </div>
                                                        <div class="col-6">
                                                            <h5><span>{{\Carbon\Carbon::parse($service->date_submitted)->format('M d, Y')}}</span></h5>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5>Service Type: &nbsp;</h5>
                                                        </div>
                                                        <div class="col-6">
                                                            <h5>
                                                                {{$service->service_type}}
                                                            </h5>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5>Service Description: &nbsp;</h5>
                                                        </div>
                                                        <div class="col-6">
                                                            <h5>
                                                                {{$service->description}}
                                                            </h5>
                                                        </div>
                                                    </div>


                                                    @if($service->invoice)
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5>Date Invoice Submitted: &nbsp;</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <h5><span>{{\Carbon\Carbon::parse($service->date_invoiced)->format('M d, Y')}}</span></h5>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5>Invoice Submitted By: &nbsp;</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <h5>
                                                                    @foreach($users as $user)
                                                                        @if($service->invoiced_by == $user->id)
                                                                            <span>{{$user->firstname}} {{$user->lastname}}</span>
                                                                        @endif
                                                                    @endforeach
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    @if($service->status == 'Completed')

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5>Date Completed: &nbsp;</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <h5><span>{{\Carbon\Carbon::parse($service->date_completed)->format('M d, Y')}}</span></h5>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5>Invoice Accepted By: &nbsp;</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <h5>
                                                                    @foreach($users as $user)
                                                                        @if($service->approved_by == $user->id)
                                                                            <span>{{$user->firstname}} {{$user->lastname}}</span>
                                                                        @endif
                                                                    @endforeach
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    @endif

                                                    <div class="row mt-5">
                                                        <div class="col-12">
                                                            @if(auth()->user()->userHasRole('Service') && $service->status == 'Created')
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <h5>Accept Service Job?</h5>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <form action="{{route('maintenance.acceptMaintReqCoc', $service)}}" method="post">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <div class="form-group width-100">
                                                                                <button type="submit" class="btn btn-primary width-100 p-3">Yes</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <form action="#" method="post">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <div class="form-group width-100">
                                                                                <button type="submit" class="btn btn-secondary width-100 p-3">No</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            @elseif(auth()->user()->userHasRole('Admin') && $service->status == 'Created')
                                                                <h5>Waiting for Service to Accept...</h5>
                                                            @endif


                                                            @if(auth()->user()->userHasRole('Service') && $service->status == 'In Service')
                                                                <form action="{{route('maintenance.attachInvoice', $service)}}" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="form-group">
                                                                        <label for="service_notes">Service Notes: </label>
                                                                        <textarea name="service_notes" id="service_notes" cols="30" rows="5">{{$service->service_notes}}</textarea>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <label for="service_invoice">Invoice Number</label>
                                                                            <input type="text" class="form-control" name="service_invoice" value="{{$service->service_invoice}}">
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <label for="invoice">Upload Invoice - <small>{{$service->service_invoice}}.pdf</small></label>
                                                                            <input type="file" class="form-control" name="invoice">
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden" class="form-control" name="invoiced_by" value="{{auth()->user()->id}}">
                                                                    <input type="hidden" class="form-control" name="date_invoiced" value="{{$dateNow}}">
                                                                    <button type="submit" class="btn btn-primary width-100 p-3 mt-3">Attach Invoice</button>
                                                                </form>
                                                            @elseif(auth()->user()->userHasRole('Admin') && $service->status == 'In Service')
                                                                <h5>Waiting for the Service Invoice</h5>
                                                            @endif

                                                            @if($service->status == 'Completed')
                                                                <form action="{{route('maintenance.updateInvoice', $service)}}" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="form-group">
                                                                        <label for="service_notes">Service Notes: </label>
                                                                        <textarea name="service_notes" id="service_notes" cols="30" rows="5">{{$service->service_notes}}</textarea>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <label for="service_invoice">Invoice Number</label>
                                                                            <input type="text" class="form-control" name="service_invoice" value="{{$service->service_invoice}}">
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <label for="invoice">Upload Invoice - <small>{{$service->service_invoice}}.pdf</small></label>
                                                                            <input type="file" class="form-control" name="invoice">
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden" class="form-control" name="invoiced_by" value="{{auth()->user()->id}}">
                                                                    <input type="hidden" class="form-control" name="date_invoiced" value="{{$dateNow}}">
                                                                    <button type="submit" class="btn btn-primary width-100 p-3 mt-3">Update</button>
                                                                </form>
                                                            @endif
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Service Modal -->

                        @endforeach
                    @else
                        <h1 class="text-center text-gray">No New Requests</h1>
                    @endif


                </div>
            </div>
            <!-- /New Requests -->


            <!-- All Requests -->
            <div class="card my-3 shadow mb-4 service">
                <div class="row">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered li-link-table" id="maintRentalTable">
                                <thead>
                                    <tr>
                                        <th>
                                            <span class="visible-xs-table">&nbsp;</span>
                                            <div class="row hidden-xs-flex">
                                                <div class="col-sm-1">Image</div>
                                                <div class="col-sm-1">Date</div>
                                                <div class="col-sm-2">Vehicle Type</div>
                                                <div class="col-sm-1">Vehicle ID</div>
                                                <div class="col-sm-2">Description</div>
                                                <div class="col-sm-1">Service Invoice #</div>
                                                <div class="col-sm-1">Service Type</div>
                                                <div class="col-sm-1 text-center pr-0">Status</div>
                                                <div class="col-sm-2 text-center pr-0">&nbsp;</div>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($maintenances as $maintenance)
                                        <tr>
                                            <td>
                                                <a href="#" class="table-li-link" data-toggle="modal" data-target="#maintModal{{$maintenance->id}}">
                                                    <div class="row">
                                                        <div class="col-sm-1">
                                                            @if($maintenance->image == '')

                                                            @else
                                                                <img class="img-responsive" src="{{asset('storage/' . $maintenance->image)}}" height="auto" width="100%" />
                                                            @endif
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <p>
                                                                {{ \Carbon\Carbon::parse( $maintenance->date )->format('m/d/y') }}
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <p>
                                                                {{$maintenance->vehicle_type}}
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <p class="sm-md">
                                                            @foreach($vehicles as $vehicle)
                                                                @if($maintenance->vehicle_id == $vehicle->id)
                                                                        {{$vehicle->internal_vehicle_id}}
                                                                @endif
                                                            @endforeach
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            {{$maintenance->description}}
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <p class="xs-center">
                                                                {{$maintenance->service_invoice}}
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-1 pr-0">
                                                            <p>
                                                                {{$maintenance->service_type}}
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <p>{{$maintenance->status}}</p>
                                                        </div>
                                                        <div class="col-sm-2 pl-0">
                                                            <div class="form-div">
                                                                @if($maintenance->status == 'Created')
                                                                    <h4 class="text-red">Need to Accept</h4>
                                                                @elseif($maintenance->invoice == '')
                                                                    <h4 class="text-gray-700">Upload Invoice</h4>
                                                                @elseif($maintenance->status == 'Invoice Submitted')
                                                                    <h4 class="text-gray-600">Invoice Waiting Approval</h4>
                                                                @else
                                                                    <h4 class="text-gray-400"></h4>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                            @foreach($maintenances as $maintenance)

                                <!-- Maint Modal -->
                                <div class="modal fade" id="maintModal{{$maintenance->id}}" tabindex="-1" role="dialog" aria-labelledby="cocIntake" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                @foreach($vehicles as $vehicle)
                                                    @if($service->vehicle_id == $vehicle->id)
                                                        <h3><span>{{$vehicle->vehicle_type}} </span> ({{$vehicle->internal_vehicle_id}})</h3>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        @if($maintenance->image == '')
                                                            <img class="img-responsive" src="{{asset('storage/' . 'images/no-image.jpg')}}" height="auto" width="100%" />
                                                        @else
                                                            <img class="img-responsive" src="{{asset('storage/' . $maintenance->image)}}" height="auto" width="100%" />
                                                        @endif
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5>Status: &nbsp;</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <h5><span>{{$maintenance->status}}</span></h5>
                                                            </div>
                                                        </div>
                                                        @if($maintenance->rental_invoice == '')
                                                            @else
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <h5>Rental Invoice: &nbsp;</h5>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h5><span>#{{$maintenance->rental_invoice}}</span></h5>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5>VIN: &nbsp;</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <h5>
                                                                         <span>
                                                                                @foreach($vehicles as $vehicle)
                                                                                 @if($vehicle->id == $maintenance->vehicle_id)
                                                                                     {{$vehicle->vin}}
                                                                                 @endif
                                                                             @endforeach
                                                                        </span>
                                                                </h5>
                                                            </div>
                                                        </div>

                                                        <br />

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5>Recent Hours: &nbsp;</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <h5>
                                                                         <span>
                                                                                @foreach($vehicles as $vehicle)
                                                                                 @if($vehicle->id == $maintenance->vehicle_id)
                                                                                     {{$vehicle->current_hours}}
                                                                                 @endif
                                                                             @endforeach
                                                                            </span>
                                                                </h5>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5> Hours Updated: &nbsp;</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <h5>
                                                                        <span>
                                                                                @foreach($vehicles as $vehicle)
                                                                                @if($vehicle->id == $maintenance->vehicle_id)
                                                                                    {{\Carbon\Carbon::parse($vehicle->hours_updated)->format('M d, Y')}}
                                                                                @endif
                                                                            @endforeach
                                                                            </span>
                                                                </h5>
                                                            </div>
                                                        </div>

                                                        <br />

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5>Submitted By: &nbsp;</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <h5><span>
                                                                    @foreach($users as $user)

                                                                            @if($user->id == $service->submitted_by)
                                                                                {{$user->firstname}} {{$user->lastname}}
                                                                            @endif
                                                                        @endforeach
                                                                </span></h5>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5>Date Submitted: &nbsp;</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <h5><span>{{\Carbon\Carbon::parse($maintenance->date_submitted)->format('M d, Y')}}</span></h5>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5>Service Type: &nbsp;</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <h5>
                                                                    {{$maintenance->service_type}}
                                                                </h5>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <h5>Service Description: &nbsp;</h5>
                                                            </div>
                                                            <div class="col-6">
                                                                <h5>
                                                                    {{$maintenance->description}}
                                                                </h5>
                                                            </div>
                                                        </div>


                                                        @if($maintenance->invoice)
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <h5>Date Invoice Submitted: &nbsp;</h5>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h5><span>{{\Carbon\Carbon::parse($maintenance->date_invoiced)->format('M d, Y')}}</span></h5>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <h5>Invoice Submitted By: &nbsp;</h5>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h5>
                                                                        @foreach($users as $user)
                                                                            @if($maintenance->invoiced_by == $user->id)
                                                                                <span>{{$user->firstname}} {{$user->lastname}}</span>
                                                                            @endif
                                                                        @endforeach
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if($maintenance->status == 'Completed')

                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <h5>Date Completed: &nbsp;</h5>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h5><span>{{\Carbon\Carbon::parse($maintenance->date_completed)->format('M d, Y')}}</span></h5>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <h5>Invoice Accepted By: &nbsp;</h5>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h5>
                                                                        @foreach($users as $user)
                                                                            @if($maintenance->approved_by == $user->id)
                                                                                <span>{{$user->firstname}} {{$user->lastname}}</span>
                                                                            @endif
                                                                        @endforeach
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        @endif

                                                        <div class="row mt-5">
                                                            <div class="col-12">
                                                                @if($maintenance->status == 'Created')
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <h5>Accept Service Job?</h5>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <form action="{{route('maintenance.acceptMaintReqCoc', $maintenance)}}" method="post">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <div class="form-group width-100">
                                                                                    <button type="submit" class="btn btn-primary width-100 p-3">Yes</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <form action="#" method="post">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <div class="form-group width-100">
                                                                                    <button type="submit" class="btn btn-secondary width-100 p-3">No</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                @elseif($maintenance->invoice == '')
                                                                    <form action="{{route('maintenance.attachInvoice', $maintenance)}}" method="post" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="form-group">
                                                                            <label for="service_notes">Service Notes: </label>
                                                                            <textarea name="service_notes" id="service_notes" cols="30" rows="5">{{$maintenance->service_notes}}</textarea>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-4">
                                                                                <label for="service_invoice">Invoice Number</label>
                                                                                <input type="text" class="form-control" name="service_invoice" value="{{$maintenance->service_invoice}}">
                                                                            </div>
                                                                            <div class="col-8">
                                                                                <label for="invoice">Upload Invoice - <small>{{$maintenance->service_invoice}}.pdf</small></label>
                                                                                <input type="file" class="form-control" name="invoice">
                                                                            </div>
                                                                        </div>
                                                                        <input type="hidden" class="form-control" name="invoiced_by" value="{{auth()->user()->id}}">
                                                                        <input type="hidden" class="form-control" name="date_invoiced" value="{{$dateNow}}">
                                                                        <button type="submit" class="btn btn-primary width-100 p-3 mt-3">Attach Invoice</button>
                                                                    </form>
                                                                @else
                                                                    <form action="{{route('maintenance.updateInvoice', $maintenance)}}" method="post" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="form-group">
                                                                            <label for="service_notes">Service Notes: </label>
                                                                            <textarea name="service_notes" id="service_notes" cols="30" rows="5">{{$maintenance->service_notes}}</textarea>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-4">
                                                                                <label for="service_invoice">Invoice Number</label>
                                                                                <input type="text" class="form-control" name="service_invoice" value="{{$maintenance->service_invoice}}">
                                                                            </div>
                                                                            <div class="col-8">
                                                                                <label for="invoice">Upload Invoice - <small>{{$maintenance->service_invoice}}.pdf</small></label>
                                                                                <input type="file" class="form-control" name="invoice">
                                                                            </div>
                                                                        </div>
                                                                        <input type="hidden" class="form-control" name="invoiced_by" value="{{auth()->user()->id}}">
                                                                        <input type="hidden" class="form-control" name="date_invoiced" value="{{$dateNow}}">
                                                                        <button type="submit" class="btn btn-primary width-100 p-3 mt-3">Update</button>
                                                                    </form>

                                                                @endif
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Maint Modal -->

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- /All Requests -->

        @endsection

    @endif


    <!-- Zapier Integration -->
     @if(auth()->user()->userHasRole('zapier'))
         @section('zap-content')
            <div class="card shadow mt-4 mb-5">
                <div class="card-body">
                    <form method="post" action="{{route('rental.addRental')}}">
                        @csrf
                        @method('PUT')

                        <div class="row">


                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="booking_id">Booking ID</label>
                                    <input type="text" class="form-control" name="booking_id">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="purchase_type">Purchase Type</label>
                                    <input type="text" class="form-control" name="purchase_type">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="purchase_date">Purchase Date</label>
                                    <input type="text" class="form-control" name="purchase_date">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="activity_date">Activity Date</label>
                                    <input type="text" class="form-control" name="activity_date">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="activity_item">Activity Item</label>
                                    <input type="text" class="form-control" name="activity_item">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control" name="first_name">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control" name="last_name">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="zip_code">Zip Code</label>
                                    <input type="text" class="form-control" name="zip_code">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="payment_type">Payment Type</label>
                                    <input type="text" class="form-control" name="payment_type">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="payment_status">Payment Status</label>
                                    <input type="text" class="form-control" name="payment_status">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="ticket_list">Ticket List</label>
                                    <input type="text" class="form-control" name="ticket_list">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" name="phone">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="source">Source</label>
                                    <input type="text" class="form-control" name="source">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="list_price">List Price</label>
                                    <input type="text" class="form-control" name="list_price">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="total_discount_amount">Total Discount</label>
                                    <input type="text" class="form-control" name="total_discount_amount">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="customer_fees">Customer Fee's</label>
                                    <input type="text" class="form-control" name="customer_fees">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="total_charge">Total Charge</label>
                                    <input type="text" class="form-control" name="total_charge">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <input type="text" class="form-control" name="status">
                                </div>
                            </div>

                            <div class="col-6 col-sm-4 col-md-3">
                                <div class="form-group">
                                    <label for="customer_notes">Customer Notes</label>
                                    <textarea type="text" class="form-control" name="customer_notes"></textarea>
                                </div>
                            </div>

                            <input type="hidden" name="precheck_by" value="0">
                            <button class="btn btn-primary" type="submit">Submit</button>

                        </div>
                    </form>
                </div>
            </div>
        @endsection
    @endif
    <!-- /Zapier Integration -->





    @section('scripts')
    <!-- Page level plugins -->
        <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>


        <!-- Page level custom scripts -->
        <script src="{{asset('js/demo/datatables-scripts.js')}}"></script>
        <script src="{{asset('js/demo/chart-bar-scripts.js')}}"></script>

        <script type="text/javascript">
            $( document ).ready(function() {
                // $('ul#accordionSidebar li:first-child a.nav-link').toggleClass('active');
                $('ul#accordionSidebar li:first-child a.nav-link').removeClass('collapsed');
                $('ul#accordionSidebar li:first-child .collapse').addClass('show');
            });
        </script>
    @endsection

</x-team-master>
