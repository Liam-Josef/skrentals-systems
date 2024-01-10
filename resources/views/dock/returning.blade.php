<x-dock-master>

    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection

    @foreach($applications as $application)
        @section('page_title')
            <title>Returning</title>
        @endsection

        @section('browser_title')
            <title>Returning | {{$application->name}}</title>
        @endsection

        @section('favicon')
            {{asset('storage/'. $application->favicon)}}
        @endsection

        @section('app_name')
            {{$application->name}}
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

    @section('dock_sidebar')
        @foreach($posts as $post)
            <div class="card my-4 shadow">
                <h5 class="card-header text-center">{{$post->title}}</h5>
                <div class="card-body">
                    {{Str::limit($post->body, '200', '...')}}
                </div>
                <a href="{{route('post', $post->id)}}" class="btn btn-secondary">Read More</a>
            </div>
        @endforeach
    @endsection


    @section('content')
        <h1>
            @if(auth()->user()->userHasRole('Dock'))
                <button type="button" class="btn btn-dk-sidebar" data-toggle="modal" data-target="#dockSidebar">
                    <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
                </button>
            @endif
                Returning <span class="hidden-xs-contents">Rentals</span>
        </h1>


        <div class="row">


            <!-- Returning -->
            <!-- Returning Tab List -->
            <ul class="nav nav-tabs nav-justified mb-3 dock-depart" id="runnerView" role="tablist">

                <li class="nav-item">
                    <a class="nav-link active" id="view-all-tab" data-toggle="tab" href="#all-tab" role="tab" aria-controls="all-tab"
                       aria-selected="true">
                        All
                    </a>
                </li>

                @if($rentalTypeScarab)
                    <li class="nav-item">
                        <a class="nav-link" id="view-scarab-tab" data-toggle="tab" href="#scarab-tab" role="tab" aria-controls="scarab-tab"
                           aria-selected="true">
                            Scarab
                        </a>
                    </li>
                @endif

                @if($rentalTypePontoon)
                    <li class="nav-item">
                        <a class="nav-link" id="view-pontoon-tab" data-toggle="tab" href="#pontoon-tab" role="tab" aria-controls="pontoon-tab"
                           aria-selected="true">
                            Pontoon
                        </a>
                    </li>
                @endif

                @if($rentalTypeSeaDoo)
                    <li class="nav-item">
                        <a class="nav-link" id="view-seadoo-tab" data-toggle="tab" href="#seadoo-tab" role="tab" aria-controls="seadoo-tab"
                           aria-selected="true">
                            SeaDoo
                        </a>
                    </li>
                @endif

                @if($rentalTypeAluminum)
                    <li class="nav-item">
                        <a class="nav-link" id="view-aluminum-tab" data-toggle="tab" href="#aluminum-tab" role="tab" aria-controls="aluminum-tab"
                           aria-selected="true">
                            Aluminum
                        </a>
                    </li>
                @endif

                @if($rentalTypeSup)
                    <li class="nav-item">
                        <a class="nav-link" id="view-sup-tab" data-toggle="tab" href="#sup-tab" role="tab" aria-controls="sup-tab"
                           aria-selected="true">
                            SUP
                        </a>
                    </li>
                @endif

                @if($rentalTypeKayak)
                    <li class="nav-item">
                        <a class="nav-link" id="view-kayak-tab" data-toggle="tab" href="#kayak-tab" role="tab" aria-controls="kayak-tab"
                           aria-selected="true">
                            Kayak
                        </a>
                    </li>
                @endif

                @if($rentalTypeSpyder)
                    <li class="nav-item">
                        <a class="nav-link" id="view-spyder-tab" data-toggle="tab" href="#spyder-tab" role="tab" aria-controls="spyder-tab"
                           aria-selected="true">
                            Spyder
                        </a>
                    </li>
                @endif

                @if($rentalTypeSegway)
                    <li class="nav-item">
                        <a class="nav-link" id="view-segway-tab" data-toggle="tab" href="#segway-tab" role="tab" aria-controls="segway-tab"
                           aria-selected="true">
                            Segway
                        </a>
                    </li>
                @endif

                @if($rentalTypeRenegade or $rentalTypeSummit)
                    <li class="nav-item">
                        <a class="nav-link" id="view-skidoo-tab" data-toggle="tab" href="#skidoo-tab" role="tab" aria-controls="skidoo-tab"
                           aria-selected="true">
                            SkiDoo
                        </a>
                    </li>
                @endif
            </ul>

            <!-- Returning Tab Content -->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="all-tab" role="tabpanel" aria-labelledby="all-tab">

                    <div class="offset-sm-2 col-sm-8">
                        <h2 class="section-title">All Returning Rentals</h2>
                        @foreach($rentalReturn as $rental)
                            <div class="status-section">
                                @if($rental->status === 'On Dock' && strpos($rental->activity_date, $today) !== false)
                                    <div class="card mb-4 shadow card-od card-dark">
                                        <div class="card-header">
                                            <h3>
                                                <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                    <div class="row">
                                                         <div class="col-12 col-sm-3">
                                                            <div class="header-left">
                                                                #{{$rental->invoice_number}}
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-9">
                                                            <div class="header-right">
                                                                <h4 class="">
                                                                    <span>Launched: </span>
                                                                    {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                    <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                    <span>Due: </span>
                                                                    <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="office card-body">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="body-left">
                                                        <h4 class="card-title text-center mt-2">
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
                                                        </h4>
                                                        <h2 class="card-duration text-center">
                                                            @foreach($rental->vehicles as $rental_vehicle)
                                                                {{$rental_vehicle->internal_vehicle_id}}
                                                            @endforeach
                                                        </h2>

                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="body-center">
                                                        <div class="row">
                                                            <div class="col-sm-4 pl-0">
                                                                &nbsp;
                                                            </div>
                                                            <div class="col-sm-4 pl-0 mobile-padding">
                                                                <button href="#" data-toggle="modal" data-target="#clearModal{{$rental->id}}" class="btn btn-clear btn-dock">Clear</button>
                                                            </div>
                                                            <div class="col-sm-4 pl-0 mobile-padding">
                                                                <a href="#" data-toggle="modal" data-target="#cocModal{{$rental->id}}" class="btn btn-coc btn-dock">COC</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <h4>
                                                    <span class="left">
                                                        <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    </span>
                                                <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                            </h4>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <div class="status-section">
                                @if($rental->status == 'On Water' && strpos($rental->activity_date, $today) !== false)
                                    <div class="card mb-4 shadow card-od card-dark">
                                        <div class="card-header">
                                            <h3>
                                                <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                    <div class="row">
                                                         <div class="col-12 col-sm-3">
                                                            <div class="header-left">
                                                                #{{$rental->invoice_number}}
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-9">
                                                            <div class="header-right">
                                                                <h4 class="">
                                                                    <span>Launched: </span>
                                                                    {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                    <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                    <span>Due: </span>
                                                                    <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="office card-body">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="body-left">
                                                        <h4 class="card-title text-center mt-2">
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
                                                        </h4>
                                                        <h2 class="card-duration text-center">
                                                            @foreach($rental->vehicles as $rental_vehicle)
                                                                {{$rental_vehicle->internal_vehicle_id}}
                                                            @endforeach
                                                        </h2>

                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="body-center">
                                                        <div class="row">
                                                            <div class="col-sm-4 pl-0 mobile-padding">
                                                                <form action="{{route('dock.vehicleOnDock', $rental->id)}}" method="post">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    {{--                        <input type="hidden" value="{{$rental->user->firstname}}" name="checked_in_by">--}}
                                                                    <input type="hidden" value="On Dock" name="status">
                                                                    <button class="btn btn-on-deck btn-dock" type="submit">On Dock</button>
                                                                </form>
                                                            </div>
                                                            <div class="col-sm-4 pl-0 mobile-padding">
                                                                <a href="#" data-toggle="modal" data-target="#clearModal{{$rental->id}}" class="btn btn-clear btn-dock">Clear</a>
                                                            </div>
                                                            <div class="col-sm-4 pl-0 mobile-padding">
                                                                <a href="#" data-toggle="modal" data-target="#cocModal{{$rental->id}}" class="btn btn-coc btn-dock">COC</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <h4>
                                                    <span class="left">
                                                        <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    </span>
                                                <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                            </h4>
                                        </div>
                                    </div>
                                @endif
                            </div>


                            <div class="status-section">
                                @if($rental->status == 'COC' && strpos($rental->activity_date, $today) !== false)
                                    <div class="card mb-4 shadow card-od card-dark">
                                        <div class="card-header">
                                            <h3>
                                                <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                    <div class="row">
                                                         <div class="col-12 col-sm-3">
                                                            <div class="header-left">
                                                                #{{$rental->invoice_number}}
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-9">
                                                            <div class="header-right">
                                                                <h4 class="">
                                                                    <span>Launched: </span>
                                                                    {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                    <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                    <span>Due: </span>
                                                                    <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="office card-body">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="body-left">
                                                        <h4 class="card-title text-center mt-2">
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
                                                        </h4>
                                                        <h2 class="card-duration text-center">
                                                            @foreach($rental->vehicles as $rental_vehicle)
                                                                {{$rental_vehicle->internal_vehicle_id}}
                                                            @endforeach
                                                        </h2>

                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="body-center">
                                                        <div class="row">
                                                            <div class="col-sm-12 pl-0 pt-2">
                                                                <h2 class="dock rental-status text-uppercase text-sm-center">{{$rental->status}}</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <h4>
                                                    <span class="left">
                                                        <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    </span>
                                                <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                            </h4>
                                        </div>
                                    </div>
                                @endif
                            </div>


                            <div class="status-section">
                                @if($rental->status == 'Clear' && strpos($rental->activity_date, $today) !== false)
                                    <div class="card mb-4 shadow card-od card-dark">
                                        <div class="card-header">
                                            <h3>
                                                <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                    <div class="row">
                                                         <div class="col-12 col-sm-3">
                                                            <div class="header-left">
                                                                #{{$rental->invoice_number}}
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-9">
                                                            <div class="header-right">
                                                                <h4 class="">
                                                                    <span>Launched: </span>
                                                                    {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                    <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                    <span>Due: </span>
                                                                    <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="office card-body">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="body-left">
                                                        <h4 class="card-title text-center mt-2">
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
                                                        </h4>
                                                        <h2 class="card-duration text-center">
                                                            @foreach($rental->vehicles as $rental_vehicle)
                                                                {{$rental_vehicle->internal_vehicle_id}}
                                                            @endforeach
                                                        </h2>

                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="body-center">
                                                        <div class="row">
                                                            <div class="col-sm-12 pl-0 pt-2">
                                                                <h2 class="dock rental-status text-uppercase">{{$rental->status}}</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <h4>
                                                    <span class="left">
                                                        <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    </span>
                                                <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                            </h4>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>

                @if($rentalTypeScarab)
                    <div class="tab-pane fade show" id="scarab-tab" role="tabpanel" aria-labelledby="scarab-tab">

                        <div class="offset-sm-2 col-sm-8">
                            <h2 class="section-title">Scarabs</h2>
                            @foreach($rentalReturnScarab as $rental)
                                <div class="status-section">
                                    @if($rental->status === 'On Dock' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <button href="#" data-toggle="modal" data-target="#clearModal{{$rental->id}}" class="btn btn-clear btn-dock">Clear</button>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal{{$rental->id}}" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                                    <span class="left">
                                                        <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                <div class="status-section">
                                    @if($rental->status == 'On Water' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <form action="{{route('dock.vehicleOnDock', $rental->id)}}" method="post">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        {{--                        <input type="hidden" value="{{$rental->user->firstname}}" name="checked_in_by">--}}
                                                                        <input type="hidden" value="On Dock" name="status">
                                                                        <button class="btn btn-on-deck btn-dock" type="submit">On Dock</button>
                                                                    </form>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#clearModal{{$rental->id}}" class="btn btn-clear btn-dock">Clear</a>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal{{$rental->id}}" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                                    <span class="left">
                                                        <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>


                                <div class="status-section">
                                    @if($rental->status == 'COC' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
                                                                    @if(strpos($rental->ticket_list, '1 hour') !== false)
                                                                        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
                                                                    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
                                                                        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
                                                                    @endif
                                                                    @if(strpos($rental->ticket_list, '2 hour') !== false)
                                                                        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
                                                                    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
                                                                        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
                                                                    @endif
                                                                    @if(strpos($rental->ticket_list, '3 hour') !== false)
                                                                        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
                                                                    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
                                                                        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
                                                                    @endif
                                                                    @if(strpos($rental->ticket_list, '4 hour') !== false)
                                                                        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
                                                                    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
                                                                        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
                                                                    @endif
                                                                    @if(strpos($rental->ticket_list, '8 Hour') !== false)
                                                                        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
                                                                    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
                                                                        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
                                                                    @endif
                                                                    @if(strpos($rental->ticket_list, '9 Hour') !== false)
                                                                        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
                                                                    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
                                                                        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
                                                                    @endif
                                                                    @if(strpos($rental->ticket_list, 'Full Day') !== false)
                                                                        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
                                                                    @endif
                                                                    @if(strpos($rental->ticket_list, 'Half Day') !== false)
                                                                        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
                                                                    @endif
                                                                    @if(strpos($rental->ticket_list, '1 Day') !== false)
                                                                        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
                                                                    @endif
                                                                    @if(strpos($rental->ticket_list, '2 Day') !== false)
                                                                        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
                                                                    @endif
                                                                    @if(strpos($rental->ticket_list, '3 Day') !== false)
                                                                        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
                                                                    @endif
                                                                    @if(strpos($rental->ticket_list, '4 Day') !== false)
                                                                        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
                                                                    @endif
                                                                    @if(strpos($rental->ticket_list, '5 Day') !== false)
                                                                        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
                                                                    @endif
                                                                    @if(strpos($rental->ticket_list, '6 Day') !== false)
                                                                        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
                                                                    @endif
                                                                    @if(strpos($rental->ticket_list, '7 Day') !== false)
                                                                        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
                                                                    @endif
                                                                    @if(strpos($rental->ticket_list, '8 Day') !== false)
                                                                        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
                                                                    @endif
                                                                    @if(strpos($rental->ticket_list, '9 Day') !== false)
                                                                        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
                                                                    @endif
                                                                    @if(strpos($rental->ticket_list, '10 Day') !== false)
                                                                        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
                                                                    @endif
                                                                    @if(strpos($rental->ticket_list, '11 Day') !== false)
                                                                        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
                                                                    @endif
                                                                    @if(strpos($rental->ticket_list, '12 Day') !== false)
                                                                        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
                                                                    @endif
                                                                    @if(strpos($rental->ticket_list, '13 Day') !== false)
                                                                        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
                                                                    @endif
                                                                    @if(strpos($rental->ticket_list, '14 Day') !== false)
                                                                        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
                                                                    @endif
                                                                    <!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                   <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase">{{$rental->status}}</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                                    <span class="left">
                                                        <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>


                                <div class="status-section">
                                    @if($rental->status == 'Clear' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                   <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase">{{$rental->status}}</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                                    <span class="left">
                                                        <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                @if($rentalTypePontoon)
                    <div class="tab-pane fade show" id="pontoon-tab" role="tabpanel" aria-labelledby="pontoon-tab">

                    <div class="offset-sm-2 col-sm-8">
                        <h2 class="section-title">Pontoons</h2>
                        @foreach($rentalReturnPontoon as $rental)
                            <div class="status-section">
                                @if($rental->status === 'On Dock' && strpos($rental->activity_date, $today) !== false)
                                    <div class="card mb-4 shadow card-od card-dark">
                                        <div class="card-header">
                                            <h3>
                                                <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                    <div class="row">
                                                         <div class="col-12 col-sm-3">
                                                            <div class="header-left">
                                                                #{{$rental->invoice_number}}
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-9">
                                                            <div class="header-right">
                                                                <h4 class="">
                                                                    <span>Launched: </span>
                                                                    {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                    <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                    <span>Due: </span>
                                                                    <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="office card-body">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="body-left">
                                                        <h4 class="card-title text-center mt-2">
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
                                                        </h4>
                                                        <h2 class="card-duration text-center">
                                                            @foreach($rental->vehicles as $rental_vehicle)
                                                                {{$rental_vehicle->internal_vehicle_id}}
                                                            @endforeach
                                                        </h2>

                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="body-center">
                                                        <div class="row">
                                                            <div class="col-sm-4 pl-0">
                                                                &nbsp;
                                                            </div>
                                                            <div class="col-sm-4 pl-0 mobile-padding">
                                                                <button href="#" data-toggle="modal" data-target="#clearModal{{$rental->id}}" class="btn btn-clear btn-dock">Clear</button>
                                                            </div>
                                                            <div class="col-sm-4 pl-0 mobile-padding">
                                                                <a href="#" data-toggle="modal" data-target="#cocModal{{$rental->id}}" class="btn btn-coc btn-dock">COC</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <h4>
                                                    <span class="left">
                                                        <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    </span>
                                                <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                            </h4>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <div class="status-section">
                                @if($rental->status == 'On Water' && strpos($rental->activity_date, $today) !== false)
                                    <div class="card mb-4 shadow card-od card-dark">
                                        <div class="card-header">
                                            <h3>
                                                <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                    <div class="row">
                                                         <div class="col-12 col-sm-3">
                                                            <div class="header-left">
                                                                #{{$rental->invoice_number}}
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-9">
                                                            <div class="header-right">
                                                                <h4 class="">
                                                                    <span>Launched: </span>
                                                                    {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                    <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                    <span>Due: </span>
                                                                    <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="office card-body">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="body-left">
                                                        <h4 class="card-title text-center mt-2">
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
                                                        </h4>
                                                        <h2 class="card-duration text-center">
                                                            @foreach($rental->vehicles as $rental_vehicle)
                                                                {{$rental_vehicle->internal_vehicle_id}}
                                                            @endforeach
                                                        </h2>

                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="body-center">
                                                        <div class="row">
                                                            <div class="col-sm-4 pl-0 mobile-padding">
                                                                <form action="{{route('dock.vehicleOnDock', $rental->id)}}" method="post">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    {{--                        <input type="hidden" value="{{$rental->user->firstname}}" name="checked_in_by">--}}
                                                                    <input type="hidden" value="On Dock" name="status">
                                                                    <button class="btn btn-on-deck btn-dock" type="submit">On Dock</button>
                                                                </form>
                                                            </div>
                                                            <div class="col-sm-4 pl-0 mobile-padding">
                                                                <a href="#" data-toggle="modal" data-target="#clearModal{{$rental->id}}" class="btn btn-clear btn-dock">Clear</a>
                                                            </div>
                                                            <div class="col-sm-4 pl-0 mobile-padding">
                                                                <a href="#" data-toggle="modal" data-target="#cocModal{{$rental->id}}" class="btn btn-coc btn-dock">COC</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <h4>
                                                    <span class="left">
                                                        <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    </span>
                                                <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                            </h4>
                                        </div>
                                    </div>
                                @endif
                            </div>


                            <div class="status-section">
                                @if($rental->status == 'COC' && strpos($rental->activity_date, $today) !== false)
                                    <div class="card mb-4 shadow card-od card-dark">
                                        <div class="card-header">
                                            <h3>
                                                <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                    <div class="row">
                                                         <div class="col-12 col-sm-3">
                                                            <div class="header-left">
                                                                #{{$rental->invoice_number}}
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-9">
                                                            <div class="header-right">
                                                                <h4 class="">
                                                                    <span>Launched: </span>
                                                                    {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                    <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                    <span>Due: </span>
                                                                    <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="office card-body">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="body-left">
                                                        <h4 class="card-title text-center mt-2">
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
                                                        </h4>
                                                        <h2 class="card-duration text-center">
                                                            @foreach($rental->vehicles as $rental_vehicle)
                                                                {{$rental_vehicle->internal_vehicle_id}}
                                                            @endforeach
                                                        </h2>

                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="body-center">
                                                        <div class="row">
                                                            <div class="col-sm-12 pl-0 pt-2">
                                                                <h2 class="dock rental-status text-uppercase">{{$rental->status}}</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <h4>
                                                    <span class="left">
                                                        <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    </span>
                                                <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                            </h4>
                                        </div>
                                    </div>
                                @endif
                            </div>


                            <div class="status-section">
                                @if($rental->status == 'Clear' && strpos($rental->activity_date, $today) !== false)
                                    <div class="card mb-4 shadow card-od card-dark">
                                        <div class="card-header">
                                            <h3>
                                                <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                    <div class="row">
                                                         <div class="col-12 col-sm-3">
                                                            <div class="header-left">
                                                                #{{$rental->invoice_number}}
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-9">
                                                            <div class="header-right">
                                                                <h4 class="">
                                                                    <span>Launched: </span>
                                                                    {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                    <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                    <span>Due: </span>
                                                                    <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="office card-body">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="body-left">
                                                        <h4 class="card-title text-center mt-2">
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
                                                        </h4>
                                                        <h2 class="card-duration text-center">
                                                            @foreach($rental->vehicles as $rental_vehicle)
                                                                {{$rental_vehicle->internal_vehicle_id}}
                                                            @endforeach
                                                        </h2>

                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="body-center">
                                                        <div class="row">
                                                            <div class="col-sm-12 pl-0 pt-2">
                                                                <h2 class="dock rental-status text-uppercase">{{$rental->status}}</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <h4>
                                                    <span class="left">
                                                        <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    </span>
                                                <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                            </h4>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
                @endif

                @if($rentalTypeSeaDoo)
                    <div class="tab-pane fade show" id="seadoo-tab" role="tabpanel" aria-labelledby="seadoo-tab">

                        <div class="offset-sm-2 col-sm-8">
                            <h2 class="section-title">SeaDoos</h2>
                            @foreach($rentalReturnSeaDoo as $rental)
                                <div class="status-section">
                                    @if($rental->status === 'On Dock' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <button href="#" data-toggle="modal" data-target="#clearModal{{$rental->id}}" class="btn btn-clear btn-dock">Clear</button>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal{{$rental->id}}" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                                <span class="left">
                                                    <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                <div class="status-section">
                                    @if($rental->status == 'On Water' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <form action="{{route('dock.vehicleOnDock', $rental->id)}}" method="post">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        {{--                        <input type="hidden" value="{{$rental->user->firstname}}" name="checked_in_by">--}}
                                                                        <input type="hidden" value="On Dock" name="status">
                                                                        <button class="btn btn-on-deck btn-dock" type="submit">On Dock</button>
                                                                    </form>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#clearModal{{$rental->id}}" class="btn btn-clear btn-dock">Clear</a>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal{{$rental->id}}" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                                <span class="left">
                                                    <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>


                                <div class="status-section">
                                    @if($rental->status == 'COC' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                   <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase">{{$rental->status}}</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                                <span class="left">
                                                    <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>


                                <div class="status-section">
                                    @if($rental->status == 'Clear' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                   <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase">{{$rental->status}}</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                                <span class="left">
                                                    <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                @if($rentalTypeSup)
                    <div class="tab-pane fade show" id="sup-tab" role="tabpanel" aria-labelledby="sup-tab">

                        <div class="offset-sm-2 col-sm-8">
                            <h2 class="section-title">SUPs</h2>
                            @foreach($rentalReturnSup as $rental)
                                <div class="status-section">
                                    @if($rental->status === 'On Dock' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <button href="#" data-toggle="modal" data-target="#clearModal{{$rental->id}}" class="btn btn-clear btn-dock">Clear</button>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal{{$rental->id}}" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                            <span class="left">
                                                <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                            </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                <div class="status-section">
                                    @if($rental->status == 'On Water' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <form action="{{route('dock.vehicleOnDock', $rental->id)}}" method="post">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        {{--                        <input type="hidden" value="{{$rental->user->firstname}}" name="checked_in_by">--}}
                                                                        <input type="hidden" value="On Dock" name="status">
                                                                        <button class="btn btn-on-deck btn-dock" type="submit">On Dock</button>
                                                                    </form>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#clearModal{{$rental->id}}" class="btn btn-clear btn-dock">Clear</a>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal{{$rental->id}}" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                            <span class="left">
                                                <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                            </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>


                                <div class="status-section">
                                    @if($rental->status == 'COC' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                   <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase">{{$rental->status}}</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                            <span class="left">
                                                <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                            </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>


                                <div class="status-section">
                                    @if($rental->status == 'Clear' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                   <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase">{{$rental->status}}</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                            <span class="left">
                                                <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                            </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                @if($rentalTypeKayak)
                    <div class="tab-pane fade show" id="kayak-tab" role="tabpanel" aria-labelledby="kayak-tab">

                        <div class="offset-sm-2 col-sm-8">
                            <h2 class="section-title">Kayaks</h2>
                            @foreach($rentalReturnKayak as $rental)
                                <div class="status-section">
                                    @if($rental->status === 'On Dock' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <button href="#" data-toggle="modal" data-target="#clearModal{{$rental->id}}" class="btn btn-clear btn-dock">Clear</button>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal{{$rental->id}}" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                        <span class="left">
                                            <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                        </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                <div class="status-section">
                                    @if($rental->status == 'On Water' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <form action="{{route('dock.vehicleOnDock', $rental->id)}}" method="post">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        {{--                        <input type="hidden" value="{{$rental->user->firstname}}" name="checked_in_by">--}}
                                                                        <input type="hidden" value="On Dock" name="status">
                                                                        <button class="btn btn-on-deck btn-dock" type="submit">On Dock</button>
                                                                    </form>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#clearModal{{$rental->id}}" class="btn btn-clear btn-dock">Clear</a>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal{{$rental->id}}" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                        <span class="left">
                                            <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                        </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>


                                <div class="status-section">
                                    @if($rental->status == 'COC' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                   <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase">{{$rental->status}}</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                        <span class="left">
                                            <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                        </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>


                                <div class="status-section">
                                    @if($rental->status == 'Clear' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                   <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase">{{$rental->status}}</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                        <span class="left">
                                            <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                        </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                @if($rentalTypeSpyder)
                    <div class="tab-pane fade show" id="spyder-tab" role="tabpanel" aria-labelledby="spyder-tab">

                        <div class="offset-sm-2 col-sm-8">
                            <h2 class="section-title">Spyders</h2>
                            @foreach($rentalReturnSpyder as $rental)
                                <div class="status-section">
                                    @if($rental->status === 'On Dock' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <button href="#" data-toggle="modal" data-target="#clearModal{{$rental->id}}" class="btn btn-clear btn-dock">Clear</button>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal{{$rental->id}}" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                    <span class="left">
                                        <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                    </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                <div class="status-section">
                                    @if($rental->status == 'On Water' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <form action="{{route('dock.vehicleOnDock', $rental->id)}}" method="post">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        {{--                        <input type="hidden" value="{{$rental->user->firstname}}" name="checked_in_by">--}}
                                                                        <input type="hidden" value="On Dock" name="status">
                                                                        <button class="btn btn-on-deck btn-dock" type="submit">On Dock</button>
                                                                    </form>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#clearModal{{$rental->id}}" class="btn btn-clear btn-dock">Clear</a>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal{{$rental->id}}" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                    <span class="left">
                                        <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                    </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>


                                <div class="status-section">
                                    @if($rental->status == 'COC' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                   <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase">{{$rental->status}}</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                    <span class="left">
                                        <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                    </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>


                                <div class="status-section">
                                    @if($rental->status == 'Clear' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                   <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase">{{$rental->status}}</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                    <span class="left">
                                        <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                    </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                @if($rentalTypeSegway)
                    <div class="tab-pane fade show" id="segway-tab" role="tabpanel" aria-labelledby="segway-tab">

                        <div class="offset-sm-2 col-sm-8">
                            <h2 class="section-title">Segways</h2>
                            @foreach($rentalReturnSegway as $rental)
                                <div class="status-section">
                                    @if($rental->status === 'On Dock' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <button href="#" data-toggle="modal" data-target="#clearModal{{$rental->id}}" class="btn btn-clear btn-dock">Clear</button>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal{{$rental->id}}" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                <span class="left">
                                    <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                <div class="status-section">
                                    @if($rental->status == 'On Water' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <form action="{{route('dock.vehicleOnDock', $rental->id)}}" method="post">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        {{--                        <input type="hidden" value="{{$rental->user->firstname}}" name="checked_in_by">--}}
                                                                        <input type="hidden" value="On Dock" name="status">
                                                                        <button class="btn btn-on-deck btn-dock" type="submit">On Dock</button>
                                                                    </form>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#clearModal{{$rental->id}}" class="btn btn-clear btn-dock">Clear</a>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal{{$rental->id}}" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                <span class="left">
                                    <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>


                                <div class="status-section">
                                    @if($rental->status == 'COC' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                   <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase">{{$rental->status}}</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                <span class="left">
                                    <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>


                                <div class="status-section">
                                    @if($rental->status == 'Clear' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                   <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase">{{$rental->status}}</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                <span class="left">
                                    <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                @if($rentalTypeSkiDoo)
                    <div class="tab-pane fade show" id="skidoo-tab" role="tabpanel" aria-labelledby="skidoo-tab">

                        <div class="offset-sm-2 col-sm-8">
                            <h2 class="section-title">Snowmobiles</h2>
                            @foreach($rentalReturnSkiDoo as $rental)
                                <div class="status-section">
                                    @if($rental->status === 'On Dock' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <button href="#" data-toggle="modal" data-target="#clearModal{{$rental->id}}" class="btn btn-clear btn-dock">Clear</button>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal{{$rental->id}}" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                            <span class="left">
                                <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                            </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                <div class="status-section">
                                    @if($rental->status == 'On Water' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <form action="{{route('dock.vehicleOnDock', $rental->id)}}" method="post">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        {{--                        <input type="hidden" value="{{$rental->user->firstname}}" name="checked_in_by">--}}
                                                                        <input type="hidden" value="On Dock" name="status">
                                                                        <button class="btn btn-on-deck btn-dock" type="submit">On Dock</button>
                                                                    </form>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#clearModal{{$rental->id}}" class="btn btn-clear btn-dock">Clear</a>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal{{$rental->id}}" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                            <span class="left">
                                <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                            </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>


                                <div class="status-section">
                                    @if($rental->status == 'COC' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                   <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase">{{$rental->status}}</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                            <span class="left">
                                <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                            </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>


                                <div class="status-section">
                                    @if($rental->status == 'Clear' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                   <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase">{{$rental->status}}</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                            <span class="left">
                                <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                            </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                @if($rentalTypeAluminum)
                    <div class="tab-pane fade show" id="aluminum-tab" role="tabpanel" aria-labelledby="aluminum-tab">

                        <div class="offset-sm-2 col-sm-8">
                            <h2 class="section-title">Aluminum Boat</h2>
                            @foreach($rentalReturnAluminum as $rental)
                                <div class="status-section">
                                    @if($rental->status === 'On Dock' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0">
                                                                    &nbsp;
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <button href="#" data-toggle="modal" data-target="#clearModal{{$rental->id}}" class="btn btn-clear btn-dock">Clear</button>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal{{$rental->id}}" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                        <span class="left">
                            <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                        </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                <div class="status-section">
                                    @if($rental->status == 'On Water' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <form action="{{route('dock.vehicleOnDock', $rental->id)}}" method="post">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        {{--                        <input type="hidden" value="{{$rental->user->firstname}}" name="checked_in_by">--}}
                                                                        <input type="hidden" value="On Dock" name="status">
                                                                        <button class="btn btn-on-deck btn-dock" type="submit">On Dock</button>
                                                                    </form>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#clearModal{{$rental->id}}" class="btn btn-clear btn-dock">Clear</a>
                                                                </div>
                                                                <div class="col-sm-4 pl-0 mobile-padding">
                                                                    <a href="#" data-toggle="modal" data-target="#cocModal{{$rental->id}}" class="btn btn-coc btn-dock">COC</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                                            <span class="left">
                                                <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                                            </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>


                                <div class="status-section">
                                    @if($rental->status == 'COC' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase">{{$rental->status}}</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                        <span class="left">
                            <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                        </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>


                                <div class="status-section">
                                    @if($rental->status == 'Clear' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                                        <div class="row">
                                                            <div class="col-4 col-sm-3">
                                                                <div class="header-left">
                                                                    #{{$rental->invoice_number}}
                                                                </div>
                                                            </div>
                                                            <div class="col-8 col-sm-9">
                                                                <div class="header-right">
                                                                    <h4 class="">
                                                                        <span>Launched: </span>
                                                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                        <span class="spacer">&nbsp;</span> <br class="visible-xs" />
                                                                        <span>Due: </span>
                                                                        <!-- UPDATED -->
@if(strpos($rental->ticket_list, '1 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(1)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '8 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Hour') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
    @elseif(strpos($rental->ticket_list, '9 hour') !== false)
        {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Full Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, 'Half Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '1 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '2 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '3 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '4 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '5 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '6 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '7 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '8 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '9 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '10 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '11 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '12 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '13 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A')}}
@endif
@if(strpos($rental->ticket_list, '14 Day') !== false)
    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A')}}
@endif
<!-- /UPDATED -->
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center mt-2">
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
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                @foreach($rental->vehicles as $rental_vehicle)
                                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                                @endforeach
                                                            </h2>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="body-center">
                                                            <div class="row">
                                                                <div class="col-sm-12 pl-0 pt-2">
                                                                    <h2 class="dock rental-status text-uppercase">{{$rental->status}}</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h4>
                        <span class="left">
                            <h4 class="dark-card-name"> {{$rental->last_name}}, {{$rental->first_name}}</h4>
                        </span>
                                                    <span class="right"><a class="footer-phone btn-tel width-100" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

            </div>
            <!-- /Returning -->

        </div>





    @endsection

    @section('sidebar')

        @foreach($rentalReturn as $rental)
             <!-- Dock Modal -->
             <div class="modal fade" id="dock{{$rental->id}}" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 id="modal_rental_title" class="modal-title"><span>{{$rental->activity_item}}</span> | {{$rental->first_name}} {{$rental->last_name}} &nbsp;
                                <span class="status">
                                        |
                                    &nbsp; {{$rental->status}}</span></h3>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <!-- /Rental Information -->
                            <div class="modal-rental-info">
                                <div class="row">
                                    <!-- Renter Info -->
                                    <div class="col-sm-6">
                                        <div class="area-box">
                                            <h4 class="modal-section-title">Customer Info</h4>
                                            <div class="row">
                                                <!-- Item -->
                                                <div class="col-6 col-sm-12">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <p class="modal-item-title">First Name:</p>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <p class="modal-item">{{$rental->first_name}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="col-6 col-sm-12">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <p class="modal-item-title">Last Name:</p>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <p class="modal-item">{{$rental->last_name}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="col-6 col-sm-12">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <p class="modal-item-title">Phone:</p>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <p class="modal-item">{{$rental->phone = substr($rental->phone, 0)}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="col-6 col-sm-12">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <p class="modal-item-title">Zip Code:</p>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <p class="modal-item">{{$rental->zip_code}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="col-6 col-sm-12">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <p class="modal-item-title">Notes:</p>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <p class="modal-item">{{$rental->customer_notes}}</p>
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
                                            <h4 class="modal-section-title">Rental Info</h4>
                                            <div class="row">
                                                <!-- PreCheck by -->
                                                @if($rental->precheck_by == '')
                                                    &nbsp;
                                                @else
                                                    @foreach($users as $user)
                                                        @if($rental->check_in_by == $user->id)
                                                        <!-- Item -->
                                                            <div class="col-6 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-sm-5">
                                                                        <p class="modal-item-title">Pre-Check By:</p>
                                                                    </div>
                                                                    <div class="col-sm-7">
                                                                        <p class="modal-item">{{$user->firstname}} {{$user->lastname}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /Item -->
                                                            <!-- Item -->
                                                            <div class="col-6 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-sm-5">
                                                                        <p class="modal-item-title">Pre-Check Time:</p>
                                                                    </div>
                                                                    <div class="col-sm-7">
                                                                        <p class="modal-item">
                                                                            {{ \Carbon\Carbon::parse($rental->precheck_time)->format('h:i A') }}
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
                                                                    <div class="col-sm-5">
                                                                        <p class="modal-item-title">Checked In By:</p>
                                                                    </div>
                                                                    <div class="col-sm-7">
                                                                        <p class="modal-item">{{$user->firstname}} {{$user->lastname}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /Item -->
                                                            <!-- Item -->
                                                            <div class="col-6 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-sm-5">
                                                                        <p class="modal-item-title">Check In Time:</p>
                                                                    </div>
                                                                    <div class="col-sm-7">
                                                                        <p class="modal-item">
                                                                            {{ \Carbon\Carbon::parse($rental->check_in_time)->format('h:i A') }}
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
                                                    &nbsp;
                                                @else
                                                    @foreach($users as $user)
                                                        @if($rental->launched_by == $user->id)
                                                        <!-- Item -->
                                                            <div class="col-6 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-sm-5">
                                                                        <p class="modal-item-title">Launched By:</p>
                                                                    </div>
                                                                    <div class="col-sm-7">
                                                                        <p class="modal-item">{{$user->firstname}} {{$user->lastname}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /Item -->
                                                            <!-- Item -->
                                                            <div class="col-6 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-sm-5">
                                                                        <p class="modal-item-title">Launch Time:</p>
                                                                    </div>
                                                                    <div class="col-sm-7">
                                                                        <p class="modal-item">
                                                                            {{ \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                                            {{--                                                            {{ \Carbon\Carbon::parse($rental->launched_time)->format('l - F j,   Y h:i:s A') }}--}}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /Item -->
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
                                                                    <div class="col-sm-5">
                                                                        <p class="modal-item-title">Cleared By:</p>
                                                                    </div>
                                                                    <div class="col-sm-7">
                                                                        <p class="modal-item">{{$user->firstname}} {{$user->lastname}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /Item -->
                                                            <!-- Item -->
                                                            <div class="col-6 col-sm-12">
                                                                <div class="row">
                                                                    <div class="col-sm-5">
                                                                        <p class="modal-item-title">Clear Time:</p>
                                                                    </div>
                                                                    <div class="col-sm-7">
                                                                        <p class="modal-item">
                                                                            {{ \Carbon\Carbon::parse($rental->cleared_time)->format('h:i A') }}
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
                                    <!-- /Rental Info -->
                                </div>

                            </div>
                            <!-- /Rental Information -->

                            <!-- COC Info -->
                            @if($rental->status == 'COC')

                                <div class="modal-coc-info">
                                    <!-- Modal Section Title -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h4 class="modal-section-title">Change of Condition</h4>
                                        </div>
                                        <div class="hidden-xs col-sm-6">
                                            <a href="#" class="btn btn-primary btn-right" data-toggle="modal" data-target="#cocUpdate{{$rental->id}}">Update COC</a>
                                        </div>
                                        <div class="col-sm-12">
                                            <hr class="rounded mt-0" />
                                        </div>
                                    </div>
                                    <!-- /Modal Section Title -->

                                    <div class="row">

                                        <div class="col-sm-6">
                                            <img class="img-responsive" src="{{asset('storage/' . $rental->image_1)}}" height="150px" width="auto">
                                        </div>
                                        <div class="col-sm-6">
                                            <h3>
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
                                            </h3>
                                            <p class="card-text">
                                                {{$rental->incident}}
                                            </p>
                                        </div>

                                    </div>

                                </div>
                        @endif
                        <!-- /COC Info -->



                        </div>
                        <div class="modal-footer">
                            @if($rental->status == 'On Water')
                                <button class="btn btn-danger" data-toggle="modal" data-target="#changeVehicle{{$rental->id}}">Change Vehicle</button>
                            @elseif($rental->status == 'On Dock')
                                <button class="btn btn-primary-red btn-modal" data-toggle="modal" data-target="#changeVehicle{{$rental->id}}">Change Vehicle</button>
                            @else

                            @endif
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
             <!-- /Dock Modal -->


         <!-- Update COC Modal -->
         <div class="modal fade" id="cocUpdate{{$rental->id}}" tabindex="-1" role="dialog" aria-labelledby="cocUpdateModalLabel" aria-hidden="true">
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
                                 <input type="file" class="form-control" name="image_1" id="image_1" accept="image/*" capture="camera">
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

             <!-- Clear Modal -->
             <div class="modal fade" id="clearModal{{$rental->id}}" tabindex="-1" role="dialog" aria-labelledby="clearModalLabel" aria-hidden="true">
                 <div class="modal-dialog
                                @if(strpos($rental->ticket_list, '1x') !== false)
                     modal-md
    @else
                     modal-lg
    @endif

                     " role="document">
                 @if(strpos($rental->ticket_list, '1x') !== false)
                     <!-- Single Vehicle Rental -->
                         <div class="modal-content">


                             <div class="modal-header">
                                 <h3 class="modal-title" id="clearModalLabel">Clear Vehicle:

                                     <span>
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
                                     </span>
                                 </h3>
                                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">×</span>
                                 </button>
                             </div>
                             <form action="{{route('dock.vehicleClear', $rental->id)}}" method="post">
                                 @csrf
                                 @method('PUT')
                                 <div class="modal-body">

                                     <div class="row">
                                         <div class="col-sm-6">
                                             <div class="form-group">
                                                 <label for="cleared_by">Select Yourself...</label>
                                                 <select name="cleared_by" id="cleared_by" class="form-control">
                                                     @foreach($users as $user)
                                                         <option value="{{$user->id}}">{{$user->firstname}} {{$user->lastname}}</option>
                                                     @endforeach
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="col-sm-6">
                                             <div class="form-group">
                                                 <label for="customer_notes">Notes:</label>
                                                 <textarea name="customer_notes" id="customer_notes" cols="30"
                                                           rows="8">{{$rental->customer_notes}}</textarea>
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                                 <div class="modal-footer">
                                     <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>

                                     {{--                        <input type="hidden" value="{{$rental->user->firstname}}" name="checked_in_by">--}}
                                     <input type="hidden" value="Clear" name="status">
                                     <input type="hidden" value="{{$dateNow}}" name="cleared_time">
                                     <button class="btn btn-primary" type="submit">CLEAR VEHICLE</button>
                                 </div>
                             </form>
                         </div>
                         <!-- /Single Vehicle Rental -->

                 @else
                     <!-- Multi Vehicle Rental -->
                         <div class="modal-content">

                             <div class="modal-header">
                                 <h3 class="modal-title" id="clearModalLabel">Clear Vehicles</h3>
                                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">×</span>
                                 </button>
                             </div>
                             <div class="modal-body">
                                 <div class="row">
                                     <div class="col-sm-6">
                                         <label for="vehicle">Clear Vehicle</label>
                                         @foreach($rental->vehicles as $rental_vehicle)

                                             <div class="row mb-3">
                                                 <div class="col-sm-6">
                                                     <h3>
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
                                                         {{$rental_vehicle->internal_vehicle_id}}
                                                     </h3>
                                                 </div>
                                                 <div class="col-sm-6">
                                                     <form method="post" action="{{route('dock.detachVehicleOne', $rental_vehicle->id)}}">
                                                         @csrf
                                                         @method('PUT')
                                                         <input type="hidden" name="vehicle" value="{{$rental_vehicle->id}}">
                                                         <button  class="btn btn-danger align-right"
                                                                  @if($rental_vehicle->launched == '0')
                                                                  hidden
                                                                  @endif
                                                                  type="submit">Clear Vehicle</button>
                                                     </form>
                                                 </div>
                                             </div>
                                         @endforeach

                                     </div>
{{--                                     TODO - Need way to update cleared rental that ended up having damage--}}
                                     <div class="col-sm-6">
                                         <form action="{{route('dock.vehicleClearMulti', $rental->id)}}" method="post">
                                             @csrf
                                             @method('PUT')

                                             <div class="form-group">
                                                 <label for="customer_notes">Rental Notes</label>
                                                 <textarea name="customer_notes" id="customer_notes" cols="30" rows="5">{{$rental->customer_notes}}</textarea>
                                             </div>

                                             <div class="form-group">
                                                 <label for="cleared_by">Select Yourself...</label>
                                                 <select name="cleared_by" id="cleared_by" class="form-control">
                                                     @foreach($users as $user)
                                                         <option value="{{$user->id}}">{{$user->firstname}} {{$user->lastname}}</option>
                                                     @endforeach
                                                 </select>
                                             </div>

                                             <input type="hidden" value="Clear" name="status">
                                             <input type="hidden" value="{{$dateNow}}" name="cleared_time">

                                             <div class="modal-footer border-top-0">
                                                 <button class="btn btn-secondary btn-multi" type="button" data-dismiss="modal">CANCEL</button>
                                                         <button class="btn btn-primary btn-multi
                                                            @foreach($rental->vehicles as $rental_vehicle)
                                                                 @if($rental_vehicle->launched == '1')
                                                                     hidden
                                                                    @endif
                                                             @endforeach
                                                             " type="submit">CLEAR RENTAL
                                                         </button>
                                             </div>


                                         </form>
                                     </div>
                                 </div>
                             </div>

                         </div>
                         <!-- /Multi Vehicle Rental -->

                     @endif

                 </div>
             </div>
             <!--/ Clear Modal -->

             <!-- COC Modal -->
             <div class="modal fade" id="cocModal{{$rental->id}}" tabindex="-1" role="dialog" aria-labelledby="cocModalLabel" aria-hidden="true">
                 <div class="modal-dialog" role="document">
                     <!-- COC Single Form -->
                     @if(strpos($rental->ticket_list, '1x') !== false)
                         <form action="{{route('dock.vehicleCOC', $rental)}}" method="post" enctype="multipart/form-data" class="addCustomer-form">
                             @csrf
                             @method('PUT')
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h3 class="modal-title" id="launchModalLabel">Change of Condition:
                                         <span>
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
                                                {{$rental_vehicle->vehicle_type}} {{$rental_vehicle->internal_vehicle_id}}
                                                 <input type="hidden" name="coc_vehicle" value="{{$rental_vehicle->id}}">
                                             @endforeach
                                                    </span>
                                     </h3>
                                     <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">×</span>
                                     </button>
                                 </div>
                                 <div class="modal-body">

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="cleared_by">Select Yourself...</label>
                                                <select name="cleared_by" id="cleared_by" class="form-control">
                                                    @foreach($users as $user)
                                                        <option value="{{$user->id}}">{{$user->firstname}} {{$user->lastname}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="image_1">Upload Image <em>(Required)</em></label>
                                                <input type="file" class="form-control" name="image_1" id="image_1" accept="image/*" capture="camera">
                                            </div>

                                            <div class="form-group mt-4">
                                                <div class="row">
                                                    <div class="col-6">
                                                            <label for="coc_hours">Vehicle Hour Count <em>(Req)</em> </label>
                                                    </div>
                                                    <div class="col-6">
                                                            <input type="text" class="form-control" name="coc_hours" id="coc_hours" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="incident">Incident Information <em>(Required)</em></label>
                                                <textarea name="incident" id="incident" cols="30" rows="10" width="100% !important;"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                 </div>
                                 <div class="modal-footer">
                                     <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                                     <input type="hidden" value="COC" name="status">
                                     {{--                                                        <input type="hidden" name="rental" value="{{$rental->id}}">--}}
                                     <input type="hidden" name="last_four" value="0000">
                                     <input type="hidden" name="coc_status" value="New">
                                     <input type="hidden" value="{{$dateNow}}" name="cleared_time">
                                     <button class="btn btn-primary" type="submit">SUBMIT COC</button>
                                 </div>
                             </div>
                         </form>

                         <!-- COC Multi Form -->
                     @else

                         <div class="modal-content">
                             <div class="modal-header">
                                 <h3 class="modal-title" id="launchModalLabel">Change of Condition </h3>
                                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">×</span>
                                 </button>
                             </div>
                             <div class="modal-body">
                             </div>
                             <form action="{{route('dock.vehicleCOC', $rental)}}" method="post" enctype="multipart/form-data" class="addCustomer-form">
                                 @csrf
                                 @method('PUT')
                                 <div class="modal-body">
                                     <div class="row">

                                         @foreach($rental->vehicles as $rental_vehicle)

                                             @if($rental_vehicle->launched == true)
                                                 <div class="row mb-3">
                                                     <div class="col-sm-6">
                                                         <h3>
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
                                                             {{$rental_vehicle->internal_vehicle_id}}
                                                         </h3>
                                                     </div>
                                                     <div class="col-sm-6">
                                                         <input type="hidden" name="vehicle" value="{{$rental_vehicle->id}}">
                                                         <input type="hidden" name="coc_vehicle" value="{{$rental_vehicle->id}}">
                                                     </div>
                                                 </div>
                                             @endif
                                         @endforeach

                                         <div class="col-sm-12">
                                             <div class="form-group">
                                                 <label for="image_1">Upload Image <em>(Required)</em></label>
                                                 <input type="file" class="form-control" name="image_1" id="image_1" accept="image/*" capture="camera">
                                             </div>

                                             <div class="form-group">
                                                 <label for="incident">Incident Information <em>(Required)</em></label>
                                                 <textarea name="incident" id="incident" cols="30" rows="10" width="100% !important;"></textarea>
                                             </div>

                                             <div class="form-group">
                                                 <label for="cleared_by">Select Yourself...</label>
                                                 <select name="cleared_by" id="cleared_by" class="form-control">
                                                     @foreach($users as $user)
                                                         <option value="{{$user->id}}">{{$user->firstname}} {{$user->lastname}}</option>
                                                     @endforeach
                                                 </select>
                                             </div>

                                             <div class="form-group mt-4">
                                                 <div class="row">
                                                     <div class="col-6">
                                                         <label for="coc_hours">Vehicle Hour Count <em>(Req)</em> </label>
                                                     </div>
                                                     <div class="col-6">
                                                         <input type="text" class="form-control" name="coc_hours" id="coc_hours" />
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>

                                 </div>
                                 <div class="modal-footer">
                                     <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                                     <input type="hidden" value="COC" name="status">
                                     <input type="hidden" name="last_four" value="0000">
                                     <input type="hidden" name="coc_status" value="New">
                                     <input type="hidden" value="{{$dateNow}}" name="cleared_time">
                                     <button class="btn btn-primary" type="submit">SUBMIT COC</button>
                                 </div>

                             </form>

                         </div>
                         <!-- /COC Multi Form -->
                     @endif
                 </div>
             </div>
             <!-- COC Modal -->

             <!-- Change Vehicle Modal -->
            <div class="modal fade" id="changeVehicle{{$rental->id}}" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3>Change Vehicle: <span>{{$rental->first_name}} {{$rental->last_name}}</span></h3>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-sm-12">
                                    <h4>1. Select New Vehicle</h4>
                                    <hr class="rounded">
                                </div>
                            </div>
                            <form method="post" action="{{route('dock.changeVehicle', $rental)}}">

                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="vehicle">Select Vehicle</label>
                                            <select name="vehicle" id="vehicle" class="form-control mb-3">
                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                    @foreach($vehicleScarab as $vehicle)
                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                    @endforeach
                                                @endif

                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                    @foreach($vehiclePontoon as $vehicle)
                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                    @endforeach
                                                @endif

                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                    @endforeach
                                                @endif

                                                @if(strpos($rental->activity_item, 'Spyder') !== false)
                                                    @foreach($vehicleSpyder as $vehicle)
                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                    @endforeach
                                                @endif

                                                @if(strpos($rental->activity_item, 'Aluminum') !== false)
                                                    @foreach($vehicleAluminum as $vehicle)
                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                    @endforeach
                                                @endif

                                                @if(strpos($rental->activity_item, 'SkiDoo') !== false)
                                                    @foreach($vehicleSkiDoo as $vehicle)
                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                    @endforeach
                                                @endif

                                                @if(strpos($rental->activity_item, 'Segway') !== false)
                                                    @foreach($vehicleSegway as $vehicle)
                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                    @endforeach
                                                @endif

                                                @if(strpos($rental->activity_item, 'Stand') !== false)
                                                    @foreach($vehicleStand as $vehicle)
                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                    @endforeach
                                                @endif

                                                @if(strpos($rental->activity_item, 'Kayak') !== false)
                                                    @foreach($vehicleKayak as $vehicle)
                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                    @endforeach
                                                @endif

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">Choose VEHICLE</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="customer_notes">Customer Notes</label>
                                        <textarea name="customer_notes" id="customer_notes" cols="30" rows="5"
                                                  class="form-control mb-3">{{$rental->customer_notes}}</textarea>
                                    </div>
                                </div>


                            </form>

                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="white">2. Remove Vehicle</h4>
                                    <hr class="rounded">
                                </div>
                            </div>
                            @foreach($rental->vehicles as $rental_vehicle)

                                @if($rental_vehicle->launched == true)
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <h3>
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
                                                {{$rental_vehicle->internal_vehicle_id}}
                                            </h3>
                                        </div>
                                        <div class="col-6">
                                            <form method="post" action="{{route('dock.detachVehicleChange', $rental->id)}}">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="vehicle" value="{{$rental_vehicle->id}}">
                                                <input type="hidden" name="rental" value="{{$rental->id}}">
                                                <button  class="btn btn-danger align-right"
                                                         @if($rental_vehicle->launched == '0')
                                                         hidden
                                                         @endif
                                                         type="submit">Remove Vehicle</button>
                                            </form>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                        <div class="modal-footer border-top-0">
                            <button class="btn btn-secondary btn-multi" type="button" data-dismiss="modal">CANCEL</button>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /Change Vehicle Modal -->
        @endforeach



        <!-- Office Pre-Check Modal -->
        <div class="modal fade" id="office_precheck" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 id="modal_rental_title" class="modal-title">Office <span>Pre-Check </span></h3>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body office-pre-check">

                        <!-- Rental Information -->

                        @if($officePrecheckCount > 0)
                            @foreach($officePrecheck as $rental)
                                <div class="office-pre-check-line">
                                    <div class="row">
                                        <div class="col-3 col-sm-2">
                                            <h3 class="red">
                                                <!-- Rental Duration -->
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
                                            <!-- /Rental Duration -->
                                            </h3>
                                        </div>
                                        <div class="col-9 col-sm-4">
                                            <h3 class="white">
                                <span>
                                    @if(strpos($rental->ticket_list, '1x') !== false)

                                    @endif
                                    @if(strpos($rental->ticket_list, '2x') !== false)
                                        2x
                                    @endif
                                    @if(strpos($rental->ticket_list, '3x') !== false)
                                        3x
                                    @endif
                                    @if(strpos($rental->ticket_list, '4x') !== false)
                                        4x
                                    @endif
                                    @if(strpos($rental->ticket_list, '5x') !== false)
                                        5x
                                    @endif
                                    @if(strpos($rental->ticket_list, '6x') !== false)
                                        6x
                                    @endif
                                    @if(strpos($rental->ticket_list, '7x') !== false)
                                        7x
                                    @endif
                                    @if(strpos($rental->ticket_list, '8x') !== false)
                                        8x
                                    @endif
                                    @if(strpos($rental->ticket_list, '9x') !== false)
                                        9x
                                    @endif
                                    @if(strpos($rental->ticket_list, '10x') !== false)
                                        10x
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
                                                    <br>

                                                @endif
                                            </h3>
                                        </div>
                                        <div class="col-sm-6">
                                            <h3>
                                                {{$rental->first_name}}  {{$rental->last_name}}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        @elseif($officePrecheckCount <= 0)
                            <h3 class="text-center text-gray-400">Nothing Pre-Checked In...</h3>
                        @endif


                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Office Pre-Check Modal -->



    @endsection

    @section('scripts')
    <!-- Page level plugins -->
        <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('js/demo/datatables-scripts.js')}}"></script>
    @endsection

</x-dock-master>
