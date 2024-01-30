<x-office-master>

    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection


    @foreach($applications as $application)
    @section('page_title')
        <h1>Office</h1>
    @endsection

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


    @section('content')
        <div class="row">
            <ul class="nav nav-tabs nav-justified mb-3 dock-depart" id="runnerView" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="view-scarab-tab" data-toggle="tab" href="#all-tab" role="tab" aria-controls="all-tab"
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
                        <a class="nav-link" id="view-sup-tab" data-toggle="tab" href="#paddleboard-tab" role="tab" aria-controls="sup-tab"
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
        </div>

        <div class="row">
            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="all-tab" role="tabpanel" aria-labelledby="all-tab">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2 class="section-title">Departing</h2>

                            @foreach($bookings as $booking)
                                @if($booking->status == 'Pre-Check' && strpos($booking->activity_date_start, $today) !== false)
                                    <div class="card mb-4 shadow card-od card-dark">
                                        <div class="card-header">
                                            <h3>
                                                <a href="#"
                                                   class="rental-modal"
                                                   data-toggle="modal"
                                                   data-target="#rental_checkin{{$booking->id}}"
                                                   data-id="{{$booking->id}}" >
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <div class="header-left">

                                                            </div>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <div class="header-right">
                                                                {{$booking->last}}, {{$booking->first}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></h3>
                                        </div>
                                        <div class="office card-body">
                                            <div class="row">
                                                <div class="col-6 col-sm-4">
                                                    <div class="body-left">
                                                        <h4 class="card-title text-center">
                                                            @foreach($types as $type)
                                                                @if($type->id == $booking->type_id)
                                                                    {{$type->name}}
                                                                @endif
                                                            @endforeach
                                                        </h4>
                                                        <h2 class="card-duration text-center">

                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4">
                                                    <div class="body-center">
                                                        <h3 class="text-center text-uppercase">{{$booking->status}}</h3>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="body-right">
                                                        <a class="btn-tel" href="tel:{{$booking->phone}}">{{$booking->phone}}</a>
                                                        <a href="{{route('office.show', $booking->id)}}" class="btn btn-primary-red btn-modal">Check In</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            <!-- Departing Time TODO get rid of (0)4:30 PM -->
                                            <h4>
                                                <!-- Duration Add Time -->
                                                {{ $launchTime = \Carbon\Carbon::parse($booking->activity_date_start)->format('h:i A') }}
                                                -
                                            {{ $newLaunch = \Carbon\Carbon::parse($booking->activity_date_end)->format('h:i A')}}
                                            <!-- /Duration Add Time -->


                                        </div>
                                    </div>
                                @endif

                                @if($booking->status == '' && strpos($booking->activity_date_start, $today) !== false)
                                    <div class="card mb-4 shadow card-od card-dark">
                                        <div class="card-header">
                                            <h3>
                                                <a href="#"
                                                   class="rental-modal"
                                                   data-toggle="modal"
                                                   data-target="#rental_checkin{{$booking->id}}"
                                                   data-id="{{$booking->id}}" >
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <div class="header-left">

                                                            </div>
                                                        </div>
                                                        <div class="col-sm-9">
                                                            <div class="header-right">
                                                                {{$booking->last}}, {{$booking->first}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></h3>
                                        </div>
                                        <div class="office card-body">
                                            <div class="row">
                                                <div class="col-6 col-sm-4">
                                                    <div class="body-left">
                                                        <h4 class="card-title text-center">
                                                            @foreach($types as $type)
                                                                @if($type->id == $booking->type_id)
                                                                    {{$type->name}}
                                                                @endif
                                                            @endforeach
                                                        </h4>
                                                        <h2 class="card-duration text-center">
                                                            <!-- Rental Duration UPDATED -->
                                                            @if($booking->hour == '1')
                                                                1 Hr
                                                            @endif
                                                            @if($booking->hour == '2')
                                                                2 Hr
                                                            @endif
                                                            @if($booking->hour == '3')
                                                                3 Hr
                                                            @endif
                                                            @if($booking->hour == '4')
                                                                HD
                                                            @endif
                                                            @if($booking->hour == '8')
                                                                FD
                                                            @endif
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4">
                                                    <div class="body-center">
                                                        <h3 class="text-center text-uppercase">{{$booking->status}}</h3>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="body-right">
                                                        <a class="btn-tel" href="tel:{{$booking->phone}}">{{$booking->phone}}</a>
                                                        <a href="{{route('office.show', $booking->id)}}" class="btn btn-primary-red btn-modal" >Check In</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            <!-- Departing Time TODO get rid of (0)4:30 PM -->
                                            <h4>
                                                <!-- Duration Add Time -->
                                                {{ $launchTime = \Carbon\Carbon::parse($booking->activity_date_start)->format('h:i A') }}
                                                -
                                            {{ $newLaunch = \Carbon\Carbon::parse($booking->activity_date_end)->format('h:i A')}}
                                            <!-- /Duration Add Time -->
                                            </h4>
                                            <!-- /Departing Time -->


                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                        <div class="col-sm-6">
                            <h2 class="section-title">Returning</h2>
                            @foreach($rentalReturn as $rental)
                                @if($rental->status == 'On Dock' && strpos($rental->activity_date, $today) !== false)
                                    <div class="card mb-4 shadow card-od card-dark">
                                        <div class="card-header">
                                            <h3><a href="#"
                                                   class="returning"
                                                   data-toggle="modal"
                                                   data-target="#returning{{$rental->id}}"
                                                   data-id="{{$rental->id}}">
                                                    <div class="row">
                                                        <div class="col-4 col-sm-4">
                                                            <div class="header-left">
                                                                #{{$rental->invoice_number}}
                                                            </div>
                                                        </div>
                                                        <div class="col-8 col-sm-8">
                                                            <div class="header-right">
                                                                {{$rental->last_name}}, {{$rental->first_name}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></h3>
                                        </div>
                                        <div class="office card-body">
                                            <div class="row">
                                                <div class="col-6 col-sm-4">
                                                    <div class="body-left">
                                                        <h4 class="card-title text-center">
                                                            @if($rental->activity_item == 'Scarab 215')
                                                                Scarab
                                                            @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Scarab') !== false)
                                                                Scarab
                                                            @elseif($rental->activity_item == '23ft. Pontoon Boat')
                                                                Pontoon
                                                            @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Pontoon') !== false)
                                                                Pontoon
                                                            @elseif($rental->activity_item == 'Renegade BC 600ETec')
                                                                Renegade
                                                            @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Renegade') !== false)
                                                                Renegade
                                                            @elseif($rental->activity_item == 'Summit 154 SP')
                                                                Summit
                                                            @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Summit') !== false)
                                                                Summit
                                                            @elseif($rental->activity_item == '14ft. Aluminum Boat')
                                                                Aluminum
                                                            @elseif($rental->activity_item == 'Kayak Single')
                                                                Single Kayak
                                                            @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Kayak Single') !== false)
                                                                Single Kayak
                                                            @elseif($rental->activity_item == 'Double Kayak')
                                                                Double Kayak
                                                            @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Double Kayak') !== false)
                                                                Double Kayak
                                                            @elseif($rental->activity_item == 'Stand Up Paddleboard')
                                                                SUP
                                                            @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Stand Up') !== false)
                                                                SUP
                                                            @elseif($rental->activity_item == 'Segway i2')
                                                                Segway
                                                            @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Segway') !== false)
                                                                Segway
                                                            @elseif($rental->activity_item == 'Spyder RT-S SE6')
                                                                Spyder
                                                            @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Spyder') !== false)
                                                                Spyder
                                                            @elseif($rental->activity_item == 'SeaDoo')
                                                                SeaDoo
                                                            @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- SeaDoo') !== false)
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
                                                <div class="col-6 col-sm-4">
                                                    <div class="body-center">
                                                        <h3 class="text-center text-uppercase">{{$rental->status}}</h3>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="body-right">
                                                        <a class="btn-tel" href="tel:{{$rental->phone}}">{{$rental->phone = substr($rental->phone, 2)}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="body-right returning">
                                                <h4 class="text-center">
                                                    <!-- Duration Add Time -->
                                                    {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                    -
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
                                                @if(strpos($rental->ticket_list, '2 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '2 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '3 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '3 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '4 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '4 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '5 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '5 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '6 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '6 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '7 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '7 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '8 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '8 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '9 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '9 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '10 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '10 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '11 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '11 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '12 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '12 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '13 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '13 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '14 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '14 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A (m/d)')}}
                                                @endif
                                                <!-- /UPDATED -->
                                                    <!-- /Duration Add Time -->
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if($rental->status == 'COC' && strpos($rental->activity_date, $today) !== false)
                                    <div class="card mb-4 shadow card-od card-dark">
                                        <div class="card-header">
                                            <h3><a href="#"
                                                   class="returning"
                                                   data-toggle="modal"
                                                   data-target="#returning{{$rental->id}}"
                                                   data-id="{{$rental->id}}">
                                                    <div class="row">
                                                        <div class="col-4 col-sm-4">
                                                            <div class="header-left">
                                                                #{{$rental->invoice_number}}
                                                            </div>
                                                        </div>
                                                        <div class="col-8 col-sm-8">
                                                            <div class="header-right">
                                                                {{$rental->last_name}}, {{$rental->first_name}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></h3>
                                        </div>
                                        <div class="office card-body">
                                            <div class="row">
                                                <div class="col-6 col-sm-4">
                                                    <div class="body-left">
                                                        <h4 class="card-title text-center">
                                                            @if($rental->activity_item == 'Scarab 215')
                                                                Scarab
                                                            @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Scarab') !== false)
                                                                Scarab
                                                            @elseif($rental->activity_item == '23ft. Pontoon Boat')
                                                                Pontoon
                                                            @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Pontoon') !== false)
                                                                Pontoon
                                                            @elseif($rental->activity_item == 'Renegade BC 600ETec')
                                                                Renegade
                                                            @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Renegade') !== false)
                                                                Renegade
                                                            @elseif($rental->activity_item == 'Summit 154 SP')
                                                                Summit
                                                            @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Summit') !== false)
                                                                Summit
                                                            @elseif($rental->activity_item == '14ft. Aluminum Boat')
                                                                Aluminum
                                                            @elseif($rental->activity_item == 'Kayak Single')
                                                                Single Kayak
                                                            @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Kayak Single') !== false)
                                                                Single Kayak
                                                            @elseif($rental->activity_item == 'Double Kayak')
                                                                Double Kayak
                                                            @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Double Kayak') !== false)
                                                                Double Kayak
                                                            @elseif($rental->activity_item == 'Stand Up Paddleboard')
                                                                SUP
                                                            @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Stand Up') !== false)
                                                                SUP
                                                            @elseif($rental->activity_item == 'Segway i2')
                                                                Segway
                                                            @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Segway') !== false)
                                                                Segway
                                                            @elseif($rental->activity_item == 'Spyder RT-S SE6')
                                                                Spyder
                                                            @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Spyder') !== false)
                                                                Spyder
                                                            @elseif($rental->activity_item == 'SeaDoo')
                                                                SeaDoo
                                                            @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- SeaDoo') !== false)
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
                                                <div class="col-6 col-sm-4">
                                                    <div class="body-center">
                                                        <h3 class="text-center text-uppercase">{{$rental->status}}</h3>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="body-right">
                                                        <a class="btn-tel" href="tel:{{$rental->phone}}">{{$rental->phone = substr($rental->phone, 2)}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="body-right returning">
                                                <h4 class="text-center">
                                                    <!-- Duration Add Time -->
                                                    {{ $launchTime = \Carbon\Carbon::parse($rental->activity_date)->format('h:i A') }}
                                                    -
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
                                                @if(strpos($rental->ticket_list, '1 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
                                                @elseif(strpos($rental->ticket_list, '1 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '2 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '2 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '3 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '3 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '4 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '4 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '5 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '5 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '6 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '6 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '7 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '7 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '8 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '8 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '9 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '9 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '10 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '10 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '11 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '11 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '12 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '12 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '13 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '13 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '14 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '14 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A (m/d)')}}
                                                @endif
                                                <!-- /UPDATED -->
                                                    <!-- /Duration Add Time -->
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if($rental->status == 'Clear' && strpos($rental->activity_date, $today) !== false)
                                    <div class="card mb-4 shadow card-od card-dark">
                                        <div class="card-header">
                                            <h3><a href="#"
                                                   class="returning"
                                                   data-toggle="modal"
                                                   data-target="#returning{{$rental->id}}"
                                                   data-id="{{$rental->id}}">
                                                    <div class="row">
                                                        <div class="col-4 col-sm-4">
                                                            <div class="header-left">
                                                                #{{$rental->invoice_number}}
                                                            </div>
                                                        </div>
                                                        <div class="col-8 col-sm-8">
                                                            <div class="header-right">
                                                                {{$rental->last_name}}, {{$rental->first_name}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></h3>
                                        </div>
                                        <div class="office card-body">
                                            <div class="row">
                                                <div class="col-6 col-sm-4">
                                                    <div class="body-left">
                                                        <h4 class="card-title text-center">
                                                            @if($rental->activity_item == 'Scarab 215')
                                                                Scarab
                                                            @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Scarab') !== false)
                                                                Scarab
                                                            @elseif($rental->activity_item == '23ft. Pontoon Boat')
                                                                Pontoon
                                                            @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Pontoon') !== false)
                                                                Pontoon
                                                            @elseif($rental->activity_item == 'Renegade BC 600ETec')
                                                                Renegade
                                                            @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Renegade') !== false)
                                                                Renegade
                                                            @elseif($rental->activity_item == 'Summit 154 SP')
                                                                Summit
                                                            @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Summit') !== false)
                                                                Summit
                                                            @elseif($rental->activity_item == '14ft. Aluminum Boat')
                                                                Aluminum
                                                            @elseif($rental->activity_item == 'Kayak Single')
                                                                Single Kayak
                                                            @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Kayak Single') !== false)
                                                                Single Kayak
                                                            @elseif($rental->activity_item == 'Double Kayak')
                                                                Double Kayak
                                                            @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Double Kayak') !== false)
                                                                Double Kayak
                                                            @elseif($rental->activity_item == 'Stand Up Paddleboard')
                                                                SUP
                                                            @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Stand Up') !== false)
                                                                SUP
                                                            @elseif($rental->activity_item == 'Segway i2')
                                                                Segway
                                                            @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Segway') !== false)
                                                                Segway
                                                            @elseif($rental->activity_item == 'Spyder RT-S SE6')
                                                                Spyder
                                                            @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Spyder') !== false)
                                                                Spyder
                                                            @elseif($rental->activity_item == 'SeaDoo')
                                                                SeaDoo
                                                            @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- SeaDoo') !== false)
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
                                                <div class="col-6 col-sm-4">
                                                    <div class="body-center">
                                                        <h3 class="text-center text-uppercase">{{$rental->status}}</h3>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="body-right">
                                                        <a class="btn-tel" href="tel:{{$rental->phone}}">{{$rental->phone = substr($rental->phone, 2)}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="body-right returning">
                                                <h4 class="text-center">
                                                    <!-- Duration Add Time -->
                                                    {{ $launchTime = \Carbon\Carbon::parse($rental->activity_date)->format('h:i A') }}
                                                    -
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
                                                @if(strpos($rental->ticket_list, '1 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
                                                @elseif(strpos($rental->ticket_list, '1 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addHours(24)->format('h:i A')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '2 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '2 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(2)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '3 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '3 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(3)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '4 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '4 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(4)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '5 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '5 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(5)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '6 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '6 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(6)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '7 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '7 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(7)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '8 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '8 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(8)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '9 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '9 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(9)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '10 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '10 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(10)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '11 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '11 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(11)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '12 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '12 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(12)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '13 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '13 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(13)->format('h:i A (m/d)')}}
                                                @endif
                                                @if(strpos($rental->ticket_list, '14 day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A (m/d)')}}
                                                @elseif(strpos($rental->ticket_list, '14 Day') !== false)
                                                    {{ $newLaunch = \Carbon\Carbon::parse($launchTime)->addDays(14)->format('h:i A (m/d)')}}
                                                @endif
                                                <!-- /UPDATED -->
                                                    <!-- /Duration Add Time -->
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if($rental->status == 'On Water' && strpos($rental->activity_date, $today) !== false)
                                    <div class="card mb-4 shadow card-od card-dark">
                                        <div class="card-header">
                                            <h3><a href="#"
                                                   class="returning"
                                                   data-toggle="modal"
                                                   data-target="#returning{{$rental->id}}"
                                                   data-id="{{$rental->id}}">
                                                    <div class="row">
                                                        <div class="col-4 col-sm-4">
                                                            <div class="header-left">
                                                                #{{$rental->invoice_number}}
                                                            </div>
                                                        </div>
                                                        <div class="col-8 col-sm-8">
                                                            <div class="header-right">
                                                                {{$rental->last_name}}, {{$rental->first_name}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></h3>
                                        </div>
                                        <div class="office card-body">
                                            <div class="row">
                                                <div class="col-6 col-sm-4">
                                                    <div class="body-left">
                                                        <h4 class="card-title text-center">
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
                                                <div class="col-6 col-sm-4">
                                                    <div class="body-center">
                                                        <h3 class="text-center text-uppercase">{{$rental->status}}</h3>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="body-right">
                                                        <a class="btn-tel" href="tel:{{$rental->phone}}">{{$rental->phone = substr($rental->phone, 2)}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="body-right returning">
                                                <h4 class="text-center">
                                                    <!-- Duration Add Time -->
                                                    {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                                    -
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
                                                    <!-- /Duration Add Time -->
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

                @foreach($types as $type)
                    <div class="tab-pane fade show" id="{{$type->slug}}-tab" role="tabpanel" aria-labelledby="{{$type->slug}}-tab">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2 class="section-title">Departing <span><small>({{$type->name}})</small></span></h2>
                                @foreach($bookings as $booking)
                                    @if($booking->status == 'Pre-Check' && strpos($booking->activity_date_start, $today) !== false)
                                        <div class="card mb-4 shadow card-od card-dark">
                                            <div class="card-header">
                                                <h3>
                                                    <a href="#"
                                                       class="rental-modal"
                                                       data-toggle="modal"
                                                       data-target="#rental_checkin{{$booking->id}}"
                                                       data-id="{{$booking->id}}" >
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <div class="header-left">

                                                                </div>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <div class="header-right">
                                                                    {{$booking->last_name}}, {{$booking->first_name}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a></h3>
                                            </div>
                                            <div class="office card-body">
                                                <div class="row">
                                                    <div class="col-6 col-sm-4">
                                                        <div class="body-left">
                                                            <h4 class="card-title text-center">
                                                                {{$type->name}}
                                                            </h4>
                                                            <h2 class="card-duration text-center">
                                                                <!-- Rental Duration UPDATED -->
                                                                @if($booking->hour == '1')
                                                                    1 Hr
                                                                @endif
                                                                @if($booking->hour == '2')
                                                                    2 Hr
                                                                @endif
                                                                @if($booking->hour == '3')
                                                                    3 Hr
                                                                @endif
                                                                @if($booking->hour == '4')
                                                                    HD
                                                                @endif
                                                                @if($booking->hour == '8')
                                                                    FD
                                                            @endif
                                                            <!-- /Rental Duration -->
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-sm-4">
                                                        <div class="body-center">
                                                            <h3 class="text-center text-uppercase">{{$booking->status}}</h3>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4">
                                                        <div class="body-right">
                                                            <a class="btn-tel" href="tel:{{$booking->phone}}">{{$booking->phone}}</a>
                                                            <a href="{{route('office.show', $booking->id)}}" class="btn btn-primary-red btn-modal" >Check In</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer text-center">
                                                <!-- Departing Time TODO get rid of (0)4:30 PM -->
                                                <h4>
                                                    <!-- Duration Add Time -->
                                                    {{ $launchTime = \Carbon\Carbon::parse($booking->activity_date_start)->format('h:i A') }}
                                                    -
                                                    {{ $newLaunch = \Carbon\Carbon::parse($booking->activity_date_end)->format('h:i A')}}
                                                    <!-- /Duration Add Time -->
                                                </h4>
                                                <!-- /Departing Time -->


                                            </div>
                                        </div>
                                    @endif

                                    @if($booking->status == '' && strpos($booking->activity_date_start, $today) !== false)
                                       @if($booking->type_id == $type->id)
                                                <div class="card mb-4 shadow card-od card-dark">
                                                    <div class="card-header">
                                                        <h3>
                                                            <a href="#"
                                                               class="rental-modal"
                                                               data-toggle="modal"
                                                               data-target="#rental_checkin{{$booking->id}}"
                                                               data-id="{{$booking->id}}" >
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <div class="header-left">

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <div class="header-right">
                                                                            {{$booking->last}}, {{$booking->first}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a></h3>
                                                    </div>
                                                    <div class="office card-body">
                                                        <div class="row">
                                                            <div class="col-6 col-sm-4">
                                                                <div class="body-left">
                                                                    <h4 class="card-title text-center">
                                                                        {{$type->name}}
                                                                    </h4>
                                                                    <h2 class="card-duration text-center">
                                                                        <!-- Rental Duration UPDATED -->
                                                                        @if($booking->hour == '1')
                                                                            1 Hr
                                                                        @endif
                                                                        @if($booking->hour == '2')
                                                                            2 Hr
                                                                        @endif
                                                                        @if($booking->hour == '3')
                                                                            3 Hr
                                                                        @endif
                                                                        @if($booking->hour == '4')
                                                                            HD
                                                                        @endif
                                                                        @if($booking->hour == '8')
                                                                            FD
                                                                    @endif
                                                                    <!-- /Rental Duration -->
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-sm-4">
                                                                <div class="body-center">
                                                                    <h3 class="text-center text-uppercase">{{$booking->status}}</h3>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-sm-4">
                                                                <div class="body-right">
                                                                    <a class="btn-tel" href="tel:{{$booking->phone}}">{{$booking->phone}}</a>
                                                                    <a href="{{route('office.show', $booking->id)}}" class="btn btn-primary-red btn-modal" >Check In</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer text-center">
                                                        <!-- Departing Time TODO get rid of (0)4:30 PM -->
                                                        <h4>
                                                            <!-- Duration Add Time -->
                                                            {{ $launchTime = \Carbon\Carbon::parse($booking->activity_date_start)->format('h:i A') }}
                                                            -
                                                        {{ $launchTime = \Carbon\Carbon::parse($booking->activity_date_end)->format('h:i A') }}
                                                        <!-- /Duration Add Time -->
                                                        </h4>
                                                        <!-- /Departing Time -->


                                                    </div>
                                                </div>
                                       @endif
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-6">
                                <h2 class="section-title">Returning <span><small>(Scarabs)</small></span></h2>
                                @foreach($rentalReturn as $rental)
                                    <div class="card mb-4 shadow card-od card-dark">
                                        <div class="card-header">
                                            <h3><a href="#"
                                                   class="returning"
                                                   data-toggle="modal"
                                                   data-target="#returning{{$rental->id}}"
                                                   data-id="{{$rental->id}}">
                                                    <div class="row">
                                                        <div class="col-4 col-sm-4">
                                                            <div class="header-left">
                                                                #{{$rental->invoice_number}}
                                                            </div>
                                                        </div>
                                                        <div class="col-8 col-sm-8">
                                                            <div class="header-right">
                                                                {{$rental->last_name}}, {{$rental->first_name}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></h3>
                                        </div>
                                        <div class="office card-body">
                                            <div class="row">
                                                <div class="col-6 col-sm-4">
                                                    <div class="body-left">
                                                        <h4 class="card-title text-center">
                                                            @foreach($types as $type)
                                                                @if($type->id == $rental->type_id)
                                                                    {{$type->name}}
                                                                @endif
                                                            @endforeach
                                                        </h4>
                                                        <h2 class="card-duration text-center">
                                                            @foreach($rental->vehicles as $rental_vehicle)
                                                                {{$rental_vehicle->internal_vehicle_id}}
                                                            @endforeach
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-4">
                                                    <div class="body-center">
                                                        <h3 class="text-center text-uppercase">{{$rental->status}}</h3>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="body-right">
                                                        <a class="btn-tel" href="tel:{{$rental->phone}}">{{$rental->phone}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="body-right returning">
                                                <h4 class="text-center">
                                                    <!-- Duration Add Time -->
                                                    {{ \Carbon\Carbon::parse($rental->activity_date_start)->format('h:i A') }}
                                                    -

                                                    {{ \Carbon\Carbon::parse($rental->activity_date_end)->format('h:i A')}}
                                                    <!-- /Duration Add Time -->
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>


        <div class="row">

        @foreach($bookings as $booking)

            <!-- Check in Modal -->
                <div class="modal fade" id="rental_checkin{{$booking->id}}" tabindex="-1" role="dialog" aria-labelledby="rental_checkinModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 id="modal_rental_title" class="modal-title"><span>Check In: </span>
                                    <small>
                                        <!-- Rental Duration UPDATED -->
                                        @if($booking->hour < '4')
                                                {{$booking->hour}} Hr
                                            @elseif($booking->hour >= '4' && $booking->hour < '8')
                                                HD
                                            @else
                                        @endif
                                        @if($booking->hour == '8')
                                            FD
                                            @else
                                        @endif

                                    </small>
                                    @foreach($types as $type)
                                        @if($type->id == $booking->type_id)
                                            {{$type->name}}
                                        @endif
                                    @endforeach
                                    | {{$booking->first}} {{$booking->last}} &nbsp;
                                    <span class="status">
                                                @if($booking->status == 'Pre-Check')
                                            |
                                        @endif
                                                &nbsp; {{$booking->status}}</span>
                                </h3>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <!-- Rental Information -->
                                <!-- Modal Section Title -->
                                <div class="row mt-3">
                                    <div class="col-sm-12">
                                        <h4 class="modal-section-title">Booking Information</h4>
                                        <hr class="rounded" />
                                    </div>
                                </div>
                                <!-- /Modal Section Title -->

                                <!-- /Rental Information -->
                                <div class="modal-rental-info">
                                    <div class="row">
                                        <!-- Renter Info -->
                                        <div class="col-6">
                                            <div class="area-box">
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">First Name:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item">{{$booking->first}}</p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">Last Name:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item">{{$booking->last}}</p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">Email:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item">{{$booking->email}}</p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">Phone:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item">{{$booking->phone}}</p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">Zip Code:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item">{{$booking->zip_code}}</p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">Notes:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item">{{$booking->customer_notes}}</p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                            </div>
                                        </div>
                                        <!-- /Renter Info -->
                                        <!-- Rental Info -->
                                        <div class="col-6 mobile-border">
                                            <div class="area-box">
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">Booking ID:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item">{{$booking->id}}</p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">Vehicle:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item">
                                                           @foreach($types as $type)
                                                                @if($type->id == $booking->type_id)
                                                                    {{$type->name}}
                                                                @endif
                                                           @endforeach
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">Payment Status:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item">
                                                        @if($booking->total_owed == '0')
                                                            Paid
                                                            @else
                                                           <h3 class="text-yellow"> Collect Payment ( $ {{$booking->total_owed}} )</h3>
                                                            @endif
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->

                                                <!-- PreCheck by -->
                                            @foreach($users as $user)
{{--                                                @if($booking->precheck_by == $user->id)--}}
{{--                                                    <!-- Item -->--}}
{{--                                                        <div class="row">--}}
{{--                                                            <div class="col-sm-4">--}}
{{--                                                                <p class="modal-item-title">Pre-Checked By:</p>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="col-sm-8">--}}
{{--                                                                @if($rental->precheck_by !== '')--}}
{{--                                                                    <p class="modal-item">{{$user->firstname}} {{$user->lastname}}</p>--}}
{{--                                                                @else--}}
{{--                                                                    <p class="modal-title">Not Pre-Checked</p>--}}
{{--                                                                @endif--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- /Item -->--}}
{{--                                                        <!-- Item -->--}}
{{--                                                        <div class="row">--}}
{{--                                                            <div class="col-sm-4">--}}
{{--                                                                <p class="modal-item-title">Pre-Checked Time:</p>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="col-sm-8">--}}
{{--                                                                <p class="modal-item">--}}
{{--                                                                    {{ \Carbon\Carbon::parse($rental->precheck_time)->format('h:i A') }}--}}
{{--                                                                </p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <!-- /Item -->--}}
{{--                                                @endif--}}
                                            @endforeach
                                            <!-- /PreCheck by -->
                                            </div>
                                        </div>
                                        <!-- /Rental Info -->
                                    </div>

                                </div>
                                <!-- /Rental Information -->


                                <!-- Customer Info -->
                                @foreach($booking->customers as $rental_customer)
                                    <div class="modal-customer-info mt-5">
                                        <!-- Modal Section Title -->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h4 class="modal-section-title">Customer Info</h4>
                                            </div>
                                            <div class="col-sm-6">
                                                <a href="{{route('office.customerProfile', $rental_customer->id)}}" class="btn btn-outline-primary text-white btn-right">View Customer</a>
                                            </div>
                                            <div class="col-sm-12">
                                                <hr class="rounded" />
                                            </div>
                                        </div>
                                        <!-- /Modal Section Title -->

                                        <div class="row">
                                            <div class="col-6 col-sm-4">

                                                <div class="row">
                                                    <div class="col-sm-12">

                                                        <!-- Item -->
                                                        <div class="row">
                                                            <div class="col-sm-5">
                                                                <p class="modal-item-title">
                                                                    First Name
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <p class="modal-item">
                                                                    {{$rental_customer->first_name}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!-- /Item -->

                                                        <!-- Item -->
                                                        <div class="row">
                                                            <div class="col-sm-5">
                                                                <p class="modal-item-title">
                                                                    Last Name
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <p class="modal-item">
                                                                    {{$rental_customer->last_name}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!-- /Item -->

                                                        <!-- Item -->
                                                        <div class="row">
                                                            <div class="col-sm-5">
                                                                <p class="modal-item-title">
                                                                    Phone
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <p class="modal-item">
                                                                    {{$rental_customer->phone}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!-- /Item -->

                                                        <!-- Item -->
                                                        <div class="row">
                                                            <div class="col-sm-5">
                                                                <p class="modal-item-title">
                                                                    Email
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <p class="modal-item">
                                                                    {{$rental_customer->email}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!-- /Item -->

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-6 mobile-border col-sm-4">

                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <p class="modal-item-title">
                                                            License State
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <p class="modal-item">
                                                            {{$rental_customer->driver_license_state}}
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->

                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <p class="modal-item-title">
                                                            License Number
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <p class="modal-item">
                                                            {{$rental_customer->driver_license_number}}
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->

                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <p class="modal-item-title">
                                                            D.O.B
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <p class="modal-item">
                                                            {{\Carbon\Carbon::parse($rental_customer->birth_date)->format('m/d/Y')}}
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->

                                            </div>

                                            <div class="col-sm-4">

                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <img class="img-responsive" src="{{asset('storage/' . $rental_customer->license_front)}}" height="auto" width="100%">
                                                    </div>
                                                </div>
                                                <!-- /Item -->

                                            </div>
                                        </div>


                                    </div>
                            @endforeach
                            <!-- /Customer Info -->

                            </div>
                            <div class="modal-footer">
                              <div class="row width-100">
                                  <div class="col-sm-4">
                                      <button class="btn btn-secondary btn-100" type="button" data-dismiss="modal">CLOSE</button>
                                  </div>
                                  <div class="col-sm-4">
                                      <a href="{{route('office.update_booking', $booking)}}" class="btn btn-outline-primary btn-100 text-white">Update</a>
                                  </div>
                                  <div class="col-sm-4">
                                      <a href="{{route('office.show', $booking->id)}}" class="btn btn-primary-red btn-modal btn-100">CHECK IN</a>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Check in Modal -->

        @endforeach




        @foreach($rentalReturn as $rental)


            <!-- Returning Modal -->
                <div class="modal fade" id="returning{{$rental->id}}" tabindex="-1" role="dialog" aria-labelledby="returningModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 id="modal_rental_title" class="modal-title left">
                                                 <span class="gray">
                                                     @if(strpos($rental->ticket_list, '1x') !== false)
                                                         1x
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
                                    <span class="large">
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
                                                    </span>
                                    <span class="gray">
                                                        @foreach($rental->vehicles as $rental_vehicle)
                                            ( {{$rental_vehicle->internal_vehicle_id}} ) &nbsp;
                                        @endforeach
                                                    </span>
                                    &nbsp;
                                    {{$rental->first_name}} {{$rental->last_name}}  &nbsp;
                                    <span class="status">| &nbsp;
                                            @if($rental->status == 'COC')
                                            Change of Condition
                                        @else
                                            {{$rental->status}}
                                        @endif
                                            </span></h3>

                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <!-- Rental Information -->
                                <!-- Modal Section Title -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h4 class="modal-section-title">Rental Information</h4>
                                    </div>
                                    <div class="hidden-xs col-sm-6">
                                        <a href="#" class="btn btn-primary btn-right" data-toggle="modal" data-target="#rentalUpdate{{$rental->id}}">Update Rental</a>
                                    </div>
                                    <div class="col-sm-12">
                                        <hr class="rounded mt-0" />
                                    </div>
                                </div>
                                <!-- /Modal Section Title -->

                                <div class="modal-rental-info">
                                    <div class="row">
                                        <!-- Renter Info -->
                                        <div class="col-6 col-sm-4">
                                            <div class="area-box">
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">First Name:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item">{{$rental->first_name}}</p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">Last Name:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item">{{$rental->last_name}}</p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">Email:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item">{{$rental->email}}</p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">Phone:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item">{{$rental->phone}}</p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">Zip Code:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item">{{$rental->zip_code}}</p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <p class="modal-item-title">Notes:</p>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <p class="modal-item">{{$rental->customer_notes}}</p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                            </div>
                                        </div>
                                        <!-- /Renter Info -->
                                        <!-- Rental Info -->
                                        <div class="col-6 col-sm-4">
                                            <div class="area-box center">
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <p class="modal-item-title">Invoice:</p>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="modal-item">#{{$rental->invoice_number}}</p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <p class="modal-item-title">Booking ID:</p>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="modal-item">{{$rental->booking_id}}</p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <p class="modal-item-title">Vehicle:</p>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="modal-item">{{$rental->activity_item}}</p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->
                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <p class="modal-item-title">Payment Status:</p>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="modal-item">{{$rental->payment_status}}</p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->

                                                <!-- Item -->
                                                @if($rental->toy_fee == '')

                                                @else
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <p class="modal-item-title">Toy Fee:</p>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <p class="modal-item">${{$rental->toy_fee}} ({{$rental->toy_fee_type}})</p>
                                                        </div>
                                                    </div>

                                                @endif
                                            <!-- /Item -->

                                                <!-- Item -->
                                                @if($rental->trailer_fee == '')

                                                @else
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <p class="modal-item-title">Trailer Fee:</p>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <p class="modal-item">${{$rental->trailer_fee}} ({{$rental->trailer_fee_type}})</p>
                                                        </div>
                                                    </div>

                                                @endif
                                            <!-- /Item -->

                                                <!-- Item -->
                                                @if($rental->late_fee == '')

                                                @else
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <p class="modal-item-title">Late Fee:</p>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <p class="modal-item">${{$rental->late_fee}} ({{$rental->late_fee_type}})</p>
                                                        </div>
                                                    </div>

                                                @endif
                                            <!-- /Item -->

                                                <!-- Item -->
                                                @if($rental->no_wake_fee == '')

                                                @else
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <p class="modal-item-title">No Wake Fee:</p>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <p class="modal-item">${{$rental->no_wake_fee}} ({{$rental->no_wake_fee_type}})</p>
                                                        </div>
                                                    </div>

                                                @endif
                                            <!-- /Item -->

                                                <!-- Item -->
                                                @if($rental->cleaning_fee == '')

                                                @else
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <p class="modal-item-title">Cleaning Fee:</p>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <p class="modal-item">${{$rental->cleaning_fee}} ({{$rental->cleaning_fee_type}})</p>
                                                        </div>
                                                    </div>

                                                @endif
                                            <!-- /Item -->

                                                <!-- Item -->
                                                @if($rental->sar_fee == '')

                                                @else
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <p class="modal-item-title">Search & Rescue Fee:</p>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <p class="modal-item">${{$rental->sar_fee}} ({{$rental->sar_fee_type}})</p>
                                                        </div>
                                                    </div>

                                            @endif
                                            <!-- /Item -->



                                            </div>
                                        </div>
                                        <!-- /Rental Info -->
                                        <!-- Vehicle Info -->
                                        <div class="col-12 col-sm-4">
                                            <div class="visible-xs row">
                                                <div class="col-sm-12">
                                                    <h4 class="modal-section-title">Rental</h4>
                                                    <hr class="rounded" />
                                                </div>
                                            </div>

                                            <div class="area-box">
                                                <div class="row">

                                                    <!-- PreCheck by -->
                                                @if($rental->precheck_by !== '')
                                                    @foreach($users as $user)
                                                        @if($rental->precheck_by == $user->id)
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
                                        <!-- /Vehicle Info -->
                                    </div>

                                </div>
                                <!-- /Rental Information -->



                                <!-- COC Info -->
                                @if($rental->status == 'COC')

                                    <div class="modal-coc-info mt-5">
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
                                                <h3>@foreach($vehicles as $vehicle)
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
                                                    @endforeach</h3>
                                                <p class="card-text">
                                                    {{$rental->incident}}
                                                </p>
                                            </div>

                                        </div>

                                    </div>
                                @endif
                            <!-- /COC Info -->

                                <!-- Customer Info -->
                                @foreach($rental->customers as $rental_customer)
                                    <div class="modal-customer-info mt-5">
                                        <!-- Modal Section Title -->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h4 class="modal-section-title">Customer Info</h4>
                                            </div>
                                            <div class="hidden-xs col-sm-6">
                                                <a href="{{route('office.customerProfile', $rental_customer->id)}}" class="btn btn-outline-primary text-white btn-right">View Customer</a>
                                            </div>
                                            <div class="col-sm-12">
                                                <hr class="rounded mt-0" />
                                            </div>
                                        </div>
                                        <!-- /Modal Section Title -->

                                        <div class="row">
                                            <div class="col-6 col-sm-4">

                                                <div class="row">
                                                    <div class="col-sm-12">

                                                        <!-- Item -->
                                                        <div class="row">
                                                            <div class="col-sm-5">
                                                                <p class="modal-item-title">
                                                                    First Name
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <p class="modal-item">
                                                                    {{$rental_customer->first_name}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!-- /Item -->

                                                        <!-- Item -->
                                                        <div class="row">
                                                            <div class="col-sm-5">
                                                                <p class="modal-item-title">
                                                                    Last Name
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <p class="modal-item">
                                                                    {{$rental_customer->last_name}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!-- /Item -->

                                                        <!-- Item -->
                                                        <div class="row">
                                                            <div class="col-sm-5">
                                                                <p class="modal-item-title">
                                                                    Phone
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <p class="modal-item">
                                                                    {{$rental_customer->phone}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!-- /Item -->

                                                        <!-- Item -->
                                                        <div class="row">
                                                            <div class="col-sm-5">
                                                                <p class="modal-item-title">
                                                                    Email
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <p class="modal-item">
                                                                    {{$rental_customer->email}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!-- /Item -->

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="col-6 mobile-border col-sm-4">

                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <p class="modal-item-title">
                                                            License State
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <p class="modal-item">
                                                            {{$rental_customer->driver_license_state}}
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->

                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <p class="modal-item-title">
                                                            License Number
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <p class="modal-item">
                                                            {{$rental_customer->driver_license_number}}
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->

                                                <!-- Item -->
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <p class="modal-item-title">
                                                            D.O.B
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <p class="modal-item">
                                                            {{\Carbon\Carbon::parse($rental_customer->birth_date)->format('m/d/Y')}}
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /Item -->

                                            </div>

                                            <div class="col-12 col-sm-4">

                                                <!-- Item -->
                                                <div class="row mt-2">
                                                    <div class="col-sm-12">
                                                        <img class="img-responsive" src="{{asset('storage/' . $rental_customer->license_front)}}" height="auto" width="100%">
                                                    </div>
                                                </div>
                                                <!-- /Item -->

                                            </div>
                                        </div>


                                    </div>
                                    <div class="row visible-xs">
                                        <div class="col-12">
                                            <a href="{{route('office.customerProfile', $rental_customer->id)}}" class="btn btn-primary btn-right btn-100 mt-5 mb-5">View Customer</a>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">CLOSE</button>
                                {{--                                        <a href="{{route('office.show', $rental->id)}}" class="btn btn-primary-red btn-modal">CHECK IN</a>--}}
                            </div>
                            <!-- /Customer Info -->


                        </div>
                    </div>
                </div>
                <!-- /Returning Modal -->


                <!-- Update Rental Modal -->
                <div class="modal fade" id="rentalUpdate{{$rental->id}}" tabindex="-1" role="dialog" aria-labelledby="rentalUpdateModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3><span>Update: </span> Rental</h3>
                            </div>
                            <form action="{{route('rental.updateRental', $rental)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="modal-body">

                                    <div class="row">
                                        <div class="col-sm-1">&nbsp;</div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="cleaning_fee"><h5>Cleaning Fee&nbsp;</h5></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <h5 class="text-right">
                                                            <span>$</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" name="cleaning_fee" placeholder="75-$150">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <select id="cleaning_fee_type" name="cleaning_fee_type" style="width: 100%;">
                                                <option value="blank" default> Payment Type</option>
                                                <option value="Visa">Visa</option>
                                                <option value="MasterCard">MasterCard</option>
                                                <option value="Cash">Cash</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-1">&nbsp;</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-1">&nbsp;</div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="late_fee"><h5>Late Fee &nbsp;</h5></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <h5 class="text-right">
                                                            <span>$</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" name="late_fee" placeholder="135/hr">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <select id="late_fee_type" name="late_fee_type" style="width: 100%;">
                                                    <option value="blank" default> Payment Type</option>
                                                    <option value="Visa">Visa</option>
                                                    <option value="MasterCard">MasterCard</option>
                                                    <option value="Cash">Cash</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">&nbsp;</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-1">&nbsp;</div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="no_wake_fee"><h5>No Wake Fee   &nbsp;</h5></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <h5 class="text-right">
                                                            <span>$</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" name="no_wake_fee" placeholder="100">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <select id="no_wake_fee_type" name="no_wake_fee_type" style="width: 100%;">
                                                    <option value="blank" default> Payment Type</option>
                                                    <option value="Visa">Visa</option>
                                                    <option value="MasterCard">MasterCard</option>
                                                    <option value="Cash">Cash</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">&nbsp;</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-1">&nbsp;</div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="sar_fee"><h5>Search & Rescue Fee &nbsp;</h5></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <h5 class="text-right">
                                                            <span>$</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" name="sar_fee" placeholder="135/hr">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <select id="sar_fee_type" name="sar_fee_type" style="width: 100%;">
                                                <option value="blank" default> Payment Type</option>
                                                <option value="Visa">Visa</option>
                                                <option value="MasterCard">MasterCard</option>
                                                <option value="Cash">Cash</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-1">&nbsp;</div>
                                    </div>



                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                                    <button class="btn btn-primary" type="submit">update Rental</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Update Rental Modal -->


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
                                        <input type="file" class="form-control" name="image_1">
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
                <!-- /Update COC Modal -->
            @endforeach
        </div>
        </div>


    @endsection

    @section('sidebar')

    <!-- R ecent Announcement Widget -->
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




        {{--        // AJAX Modal--}}
        {{--        <script type="text/javascript">--}}
        {{--            // alert('not broken');--}}
        {{--            $(document).ready(function() {--}}
        {{--                $('.rental-modal').click(function() {--}}
        {{--                    const id = $(this).attr('data-id');--}}
        {{--                    console.log(id);--}}
        {{--                    // alert("works!");--}}
        {{--                    $.ajax({--}}
        {{--                        url: 'rental_checkin/' + id,--}}
        {{--                        type: 'GET',--}}
        {{--                        data: {--}}
        {{--                            "id":id--}}
        {{--                        },--}}
        {{--                        success: function (data) {--}}
        {{--                            console.log(data);--}}
        {{--                            $('#rental_checkin_title').html(data.order_id);--}}
        {{--                            $('#rental_first_name').html(data.first_name);--}}
        {{--                            // $('#rental_last_name').html(data.last_name);--}}
        {{--                        }--}}
        {{--                    })--}}
        {{--                });--}}
        {{--            });--}}



        {{--        </script>--}}

    @endsection

</x-office-master>
