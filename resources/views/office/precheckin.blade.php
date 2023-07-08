<x-office-master>
    @section('styles')

    @endsection


        @foreach($applications as $application)
        @section('page_title')
            <h1>Pre-Check</h1>
        @endsection

        @section('browser_title')
            <title>Pre-Checkin | {{$application->name}}</title>
        @endsection

        @section('app_name')
            {{$application->name}}
        @endsection

        @section('favicon')
            {{asset('storage/'. $application->favicon)}}
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
    <div class="mt-3" style="min-height: 700px">

        <div class="row">
            <!-- Precheck Tablist -->
            <ul class="nav nav-tabs nav-justified mb-3 dock-depart" id="runnerView" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="view-all-depart-tab" data-toggle="tab" href="#all-depart-tab" role="tab" aria-controls="all-depart-tab"
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

                @if($rentalTypeSkiDoo)
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
                <div class="tab-pane fade show active" id="all-depart-tab" role="tabpanel" aria-labelledby="all-depart-tab">

                    @foreach($rentalPrecheck as $rental)
                        @if($rental->status == '' && strpos($rental->activity_date, $today) !== false)

                            <div class="card mb-4 shadow card-od pre-check-card" >
                                <div class="card-body precheckin">
                                    <div class="row">
                                        <div class="col-12 col-sm-2">
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
                                                    @if(strpos($rental->ticket_list, '1 d') !== false)
                                                        1 D
                                                    @elseif(strpos($rental->ticket_list, '1 D') !== false)
                                                        1 D
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '2 d') !== false)
                                                        2 D
                                                    @elseif(strpos($rental->ticket_list, '2 D') !== false)
                                                        2 D
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '3 d') !== false)
                                                        3 D
                                                    @elseif(strpos($rental->ticket_list, '3 D') !== false)
                                                        3 D
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '4 d') !== false)
                                                        4 D
                                                    @elseif(strpos($rental->ticket_list, '4 D') !== false)
                                                        4 D
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '5 d') !== false)
                                                        5 D
                                                    @elseif(strpos($rental->ticket_list, '5 D') !== false)
                                                        5 D
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '6 d') !== false)
                                                        6 D
                                                    @elseif(strpos($rental->ticket_list, '6 D') !== false)
                                                        6 D
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '7 d') !== false)
                                                        7 D
                                                    @elseif(strpos($rental->ticket_list, '7 D') !== false)
                                                        7 D
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '8 d') !== false)
                                                        8 D
                                                    @elseif(strpos($rental->ticket_list, '8 D') !== false)
                                                        8 D
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '9 d') !== false)
                                                        9 D
                                                    @elseif(strpos($rental->ticket_list, '9 D') !== false)
                                                        9 D
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '10 d') !== false)
                                                        10 D
                                                    @elseif(strpos($rental->ticket_list, '10 D') !== false)
                                                        10 D
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '11 d') !== false)
                                                        11 D
                                                    @elseif(strpos($rental->ticket_list, '11 D') !== false)
                                                        11 D
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '12 d') !== false)
                                                        12 D
                                                    @elseif(strpos($rental->ticket_list, '12 D') !== false)
                                                        12 D
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '13 d') !== false)
                                                        13 D
                                                    @elseif(strpos($rental->ticket_list, '13 D') !== false)
                                                        13 D
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '14 d') !== false)
                                                        14 D
                                                    @elseif(strpos($rental->ticket_list, '14 D') !== false)
                                                        14 D
                                                @endif
                                                <!-- /Rental Duration -->
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="body-center text-center">
                                                <h2>{{$rental->first_name}} {{$rental->last_name}} <br />
                                                    <span>
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
                                                    </span>
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="body-right text-right">
                                                <a href="{{route('office.precheckShow', $rental->id)}}" class="btn btn-primary" >Pre-Check</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endif
                    @endforeach

                </div>

                <div class="tab-pane fade show" id="scarab-tab" role="tabpanel" aria-labelledby="scarab-tab">

                    @foreach($rentalScarab as $rental)

                            <div class="card mb-4 shadow card-od pre-check-card" >
                                <div class="card-body precheckin">
                                    <div class="row">
                                        <div class="col-12 col-sm-2">
                                            <div class="body-left">
                                                <h4 class="card-title text-center">
                                                    @if($rental->activity_item == 'Scarab 215')
                                                        Scarab
                                                    @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Scarab') !== false)
                                                        Scarab
                                                    @else
                                                        <br>

                                                    @endif
                                                </h4>
                                                <h2 class="card-duration text-center">
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
                                                    @if(strpos($rental->ticket_list, '1 d') !== false)
                                                        1 D
                                                    @elseif(strpos($rental->ticket_list, '1 D') !== false)
                                                        1 D
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '2 d') !== false)
                                                        2 D
                                                    @elseif(strpos($rental->ticket_list, '2 D') !== false)
                                                        2 D
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '3 d') !== false)
                                                        3 D
                                                    @elseif(strpos($rental->ticket_list, '3 D') !== false)
                                                        3 D
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '4 d') !== false)
                                                        4 D
                                                    @elseif(strpos($rental->ticket_list, '4 D') !== false)
                                                        4 D
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '5 d') !== false)
                                                        5 D
                                                    @elseif(strpos($rental->ticket_list, '5 D') !== false)
                                                        5 D
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '6 d') !== false)
                                                        6 D
                                                    @elseif(strpos($rental->ticket_list, '6 D') !== false)
                                                        6 D
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '7 d') !== false)
                                                        7 D
                                                    @elseif(strpos($rental->ticket_list, '7 D') !== false)
                                                        7 D
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '8 d') !== false)
                                                        8 D
                                                    @elseif(strpos($rental->ticket_list, '8 D') !== false)
                                                        8 D
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '9 d') !== false)
                                                        9 D
                                                    @elseif(strpos($rental->ticket_list, '9 D') !== false)
                                                        9 D
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '10 d') !== false)
                                                        10 D
                                                    @elseif(strpos($rental->ticket_list, '10 D') !== false)
                                                        10 D
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '11 d') !== false)
                                                        11 D
                                                    @elseif(strpos($rental->ticket_list, '11 D') !== false)
                                                        11 D
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '12 d') !== false)
                                                        12 D
                                                    @elseif(strpos($rental->ticket_list, '12 D') !== false)
                                                        12 D
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '13 d') !== false)
                                                        13 D
                                                    @elseif(strpos($rental->ticket_list, '13 D') !== false)
                                                        13 D
                                                    @endif
                                                    @if(strpos($rental->ticket_list, '14 d') !== false)
                                                        14 D
                                                    @elseif(strpos($rental->ticket_list, '14 D') !== false)
                                                        14 D
                                                @endif
                                                <!-- /Rental Duration -->
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="body-center text-center">
                                                <h2>{{$rental->first_name}} {{$rental->last_name}} <br />
                                                    <span>
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
                                                    </span>
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="body-right text-right">
                                                <a href="{{route('office.precheckShow', $rental->id)}}" class="btn btn-primary" >Pre-Check</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    @endforeach

                </div>


                <div class="tab-pane fade show" id="pontoon-tab" role="tabpanel" aria-labelledby="pontoon-tab">

                    @foreach($rentalPontoon as $rental)

                        <div class="card mb-4 shadow card-od pre-check-card" >
                            <div class="card-body precheckin">
                                <div class="row">
                                    <div class="col-12 col-sm-2">
                                        <div class="body-left">
                                            <h4 class="card-title text-center">
                                                @if($rental->activity_item == '23ft. Pontoon Boat')
                                                    Pontoon
                                                @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Pontoon') !== false)
                                                    Pontoon
                                                @else
                                                    <br>

                                                @endif
                                            </h4>
                                            <h2 class="card-duration text-center">
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
                                                @if(strpos($rental->ticket_list, '1 d') !== false)
                                                    1 D
                                                @elseif(strpos($rental->ticket_list, '1 D') !== false)
                                                    1 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '2 d') !== false)
                                                    2 D
                                                @elseif(strpos($rental->ticket_list, '2 D') !== false)
                                                    2 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '3 d') !== false)
                                                    3 D
                                                @elseif(strpos($rental->ticket_list, '3 D') !== false)
                                                    3 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '4 d') !== false)
                                                    4 D
                                                @elseif(strpos($rental->ticket_list, '4 D') !== false)
                                                    4 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '5 d') !== false)
                                                    5 D
                                                @elseif(strpos($rental->ticket_list, '5 D') !== false)
                                                    5 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '6 d') !== false)
                                                    6 D
                                                @elseif(strpos($rental->ticket_list, '6 D') !== false)
                                                    6 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '7 d') !== false)
                                                    7 D
                                                @elseif(strpos($rental->ticket_list, '7 D') !== false)
                                                    7 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '8 d') !== false)
                                                    8 D
                                                @elseif(strpos($rental->ticket_list, '8 D') !== false)
                                                    8 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '9 d') !== false)
                                                    9 D
                                                @elseif(strpos($rental->ticket_list, '9 D') !== false)
                                                    9 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '10 d') !== false)
                                                    10 D
                                                @elseif(strpos($rental->ticket_list, '10 D') !== false)
                                                    10 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '11 d') !== false)
                                                    11 D
                                                @elseif(strpos($rental->ticket_list, '11 D') !== false)
                                                    11 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '12 d') !== false)
                                                    12 D
                                                @elseif(strpos($rental->ticket_list, '12 D') !== false)
                                                    12 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '13 d') !== false)
                                                    13 D
                                                @elseif(strpos($rental->ticket_list, '13 D') !== false)
                                                    13 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '14 d') !== false)
                                                    14 D
                                                @elseif(strpos($rental->ticket_list, '14 D') !== false)
                                                    14 D
                                            @endif
                                            <!-- /Rental Duration -->
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="body-center text-center">
                                            <h2>{{$rental->first_name}} {{$rental->last_name}} <br />
                                                <span>
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
                                                    </span>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="body-right text-right">
                                            <a href="{{route('office.precheckShow', $rental->id)}}" class="btn btn-primary" >Pre-Check</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>

                <div class="tab-pane fade show" id="seadoo-tab" role="tabpanel" aria-labelledby="seadoo-tab">

                    @foreach($rentalSeaDoo as $rental)

                        <div class="card mb-4 shadow card-od pre-check-card" >
                            <div class="card-body precheckin">
                                <div class="row">
                                    <div class="col-12 col-sm-2">
                                        <div class="body-left">
                                            <h4 class="card-title text-center">
                                                @if($rental->activity_item == 'SeaDoo')
                                                    SeaDoo
                                                @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- SeaDoo') !== false)
                                                    SeaDoo
                                                @else
                                                    <br>

                                                @endif
                                            </h4>
                                            <h2 class="card-duration text-center">
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
                                                @if(strpos($rental->ticket_list, '1 d') !== false)
                                                    1 D
                                                @elseif(strpos($rental->ticket_list, '1 D') !== false)
                                                    1 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '2 d') !== false)
                                                    2 D
                                                @elseif(strpos($rental->ticket_list, '2 D') !== false)
                                                    2 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '3 d') !== false)
                                                    3 D
                                                @elseif(strpos($rental->ticket_list, '3 D') !== false)
                                                    3 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '4 d') !== false)
                                                    4 D
                                                @elseif(strpos($rental->ticket_list, '4 D') !== false)
                                                    4 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '5 d') !== false)
                                                    5 D
                                                @elseif(strpos($rental->ticket_list, '5 D') !== false)
                                                    5 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '6 d') !== false)
                                                    6 D
                                                @elseif(strpos($rental->ticket_list, '6 D') !== false)
                                                    6 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '7 d') !== false)
                                                    7 D
                                                @elseif(strpos($rental->ticket_list, '7 D') !== false)
                                                    7 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '8 d') !== false)
                                                    8 D
                                                @elseif(strpos($rental->ticket_list, '8 D') !== false)
                                                    8 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '9 d') !== false)
                                                    9 D
                                                @elseif(strpos($rental->ticket_list, '9 D') !== false)
                                                    9 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '10 d') !== false)
                                                    10 D
                                                @elseif(strpos($rental->ticket_list, '10 D') !== false)
                                                    10 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '11 d') !== false)
                                                    11 D
                                                @elseif(strpos($rental->ticket_list, '11 D') !== false)
                                                    11 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '12 d') !== false)
                                                    12 D
                                                @elseif(strpos($rental->ticket_list, '12 D') !== false)
                                                    12 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '13 d') !== false)
                                                    13 D
                                                @elseif(strpos($rental->ticket_list, '13 D') !== false)
                                                    13 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '14 d') !== false)
                                                    14 D
                                                @elseif(strpos($rental->ticket_list, '14 D') !== false)
                                                    14 D
                                            @endif
                                            <!-- /Rental Duration -->
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="body-center text-center">
                                            <h2>{{$rental->first_name}} {{$rental->last_name}} <br />
                                                <span>
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
                                                    </span>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="body-right text-right">
                                            <a href="{{route('office.precheckShow', $rental->id)}}" class="btn btn-primary" >Pre-Check</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>

                <div class="tab-pane fade show" id="segway-tab" role="tabpanel" aria-labelledby="segway-tab">

                    @foreach($rentalSegway as $rental)

                        <div class="card mb-4 shadow card-od pre-check-card" >
                            <div class="card-body precheckin">
                                <div class="row">
                                    <div class="col-12 col-sm-2">
                                        <div class="body-left">
                                            <h4 class="card-title text-center">
                                                @if($rental->activity_item == 'Segway i2')
                                                    Segway
                                                @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Segway') !== false)
                                                    Segway
                                                @else
                                                    <br>

                                                @endif
                                            </h4>
                                            <h2 class="card-duration text-center">
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
                                                @if(strpos($rental->ticket_list, '1 d') !== false)
                                                    1 D
                                                @elseif(strpos($rental->ticket_list, '1 D') !== false)
                                                    1 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '2 d') !== false)
                                                    2 D
                                                @elseif(strpos($rental->ticket_list, '2 D') !== false)
                                                    2 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '3 d') !== false)
                                                    3 D
                                                @elseif(strpos($rental->ticket_list, '3 D') !== false)
                                                    3 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '4 d') !== false)
                                                    4 D
                                                @elseif(strpos($rental->ticket_list, '4 D') !== false)
                                                    4 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '5 d') !== false)
                                                    5 D
                                                @elseif(strpos($rental->ticket_list, '5 D') !== false)
                                                    5 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '6 d') !== false)
                                                    6 D
                                                @elseif(strpos($rental->ticket_list, '6 D') !== false)
                                                    6 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '7 d') !== false)
                                                    7 D
                                                @elseif(strpos($rental->ticket_list, '7 D') !== false)
                                                    7 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '8 d') !== false)
                                                    8 D
                                                @elseif(strpos($rental->ticket_list, '8 D') !== false)
                                                    8 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '9 d') !== false)
                                                    9 D
                                                @elseif(strpos($rental->ticket_list, '9 D') !== false)
                                                    9 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '10 d') !== false)
                                                    10 D
                                                @elseif(strpos($rental->ticket_list, '10 D') !== false)
                                                    10 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '11 d') !== false)
                                                    11 D
                                                @elseif(strpos($rental->ticket_list, '11 D') !== false)
                                                    11 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '12 d') !== false)
                                                    12 D
                                                @elseif(strpos($rental->ticket_list, '12 D') !== false)
                                                    12 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '13 d') !== false)
                                                    13 D
                                                @elseif(strpos($rental->ticket_list, '13 D') !== false)
                                                    13 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '14 d') !== false)
                                                    14 D
                                                @elseif(strpos($rental->ticket_list, '14 D') !== false)
                                                    14 D
                                            @endif
                                            <!-- /Rental Duration -->
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="body-center text-center">
                                            <h2>{{$rental->first_name}} {{$rental->last_name}} <br />
                                                <span>
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
                                                    </span>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="body-right text-right">
                                            <a href="{{route('office.precheckShow', $rental->id)}}" class="btn btn-primary" >Pre-Check</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>

                <div class="tab-pane fade show" id="spyder-tab" role="tabpanel" aria-labelledby="spyder-tab">

                    @foreach($rentalSpyder as $rental)

                        <div class="card mb-4 shadow card-od pre-check-card" >
                            <div class="card-body precheckin">
                                <div class="row">
                                    <div class="col-12 col-sm-2">
                                        <div class="body-left">
                                            <h4 class="card-title text-center">
                                                @if($rental->activity_item == 'Spyder RT-S SE6')
                                                    Spyder
                                                @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Spyder') !== false)
                                                    Spyder
                                                @else
                                                    <br>

                                                @endif
                                            </h4>
                                            <h2 class="card-duration text-center">
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
                                                @if(strpos($rental->ticket_list, '1 d') !== false)
                                                    1 D
                                                @elseif(strpos($rental->ticket_list, '1 D') !== false)
                                                    1 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '2 d') !== false)
                                                    2 D
                                                @elseif(strpos($rental->ticket_list, '2 D') !== false)
                                                    2 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '3 d') !== false)
                                                    3 D
                                                @elseif(strpos($rental->ticket_list, '3 D') !== false)
                                                    3 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '4 d') !== false)
                                                    4 D
                                                @elseif(strpos($rental->ticket_list, '4 D') !== false)
                                                    4 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '5 d') !== false)
                                                    5 D
                                                @elseif(strpos($rental->ticket_list, '5 D') !== false)
                                                    5 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '6 d') !== false)
                                                    6 D
                                                @elseif(strpos($rental->ticket_list, '6 D') !== false)
                                                    6 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '7 d') !== false)
                                                    7 D
                                                @elseif(strpos($rental->ticket_list, '7 D') !== false)
                                                    7 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '8 d') !== false)
                                                    8 D
                                                @elseif(strpos($rental->ticket_list, '8 D') !== false)
                                                    8 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '9 d') !== false)
                                                    9 D
                                                @elseif(strpos($rental->ticket_list, '9 D') !== false)
                                                    9 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '10 d') !== false)
                                                    10 D
                                                @elseif(strpos($rental->ticket_list, '10 D') !== false)
                                                    10 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '11 d') !== false)
                                                    11 D
                                                @elseif(strpos($rental->ticket_list, '11 D') !== false)
                                                    11 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '12 d') !== false)
                                                    12 D
                                                @elseif(strpos($rental->ticket_list, '12 D') !== false)
                                                    12 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '13 d') !== false)
                                                    13 D
                                                @elseif(strpos($rental->ticket_list, '13 D') !== false)
                                                    13 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '14 d') !== false)
                                                    14 D
                                                @elseif(strpos($rental->ticket_list, '14 D') !== false)
                                                    14 D
                                            @endif
                                            <!-- /Rental Duration -->
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="body-center text-center">
                                            <h2>{{$rental->first_name}} {{$rental->last_name}} <br />
                                                <span>
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
                                                    </span>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="body-right text-right">
                                            <a href="{{route('office.precheckShow', $rental->id)}}" class="btn btn-primary" >Pre-Check</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>

                <div class="tab-pane fade show" id="kayak-tab" role="tabpanel" aria-labelledby="kayak-tab">

                    @foreach($rentalKayak as $rental)

                        <div class="card mb-4 shadow card-od pre-check-card" >
                            <div class="card-body precheckin">
                                <div class="row">
                                    <div class="col-12 col-sm-2">
                                        <div class="body-left">
                                            <h4 class="card-title text-center">
                                                @if($rental->activity_item == 'Kayak Single')
                                                    Single Kayak
                                                @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Kayak Single') !== false)
                                                    Single Kayak
                                                @elseif($rental->activity_item == 'Double Kayak')
                                                    Double Kayak
                                                @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Double Kayak') !== false)
                                                    Double Kayak
                                                @else
                                                    <br>

                                                @endif
                                            </h4>
                                            <h2 class="card-duration text-center">
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
                                                @if(strpos($rental->ticket_list, '1 d') !== false)
                                                    1 D
                                                @elseif(strpos($rental->ticket_list, '1 D') !== false)
                                                    1 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '2 d') !== false)
                                                    2 D
                                                @elseif(strpos($rental->ticket_list, '2 D') !== false)
                                                    2 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '3 d') !== false)
                                                    3 D
                                                @elseif(strpos($rental->ticket_list, '3 D') !== false)
                                                    3 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '4 d') !== false)
                                                    4 D
                                                @elseif(strpos($rental->ticket_list, '4 D') !== false)
                                                    4 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '5 d') !== false)
                                                    5 D
                                                @elseif(strpos($rental->ticket_list, '5 D') !== false)
                                                    5 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '6 d') !== false)
                                                    6 D
                                                @elseif(strpos($rental->ticket_list, '6 D') !== false)
                                                    6 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '7 d') !== false)
                                                    7 D
                                                @elseif(strpos($rental->ticket_list, '7 D') !== false)
                                                    7 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '8 d') !== false)
                                                    8 D
                                                @elseif(strpos($rental->ticket_list, '8 D') !== false)
                                                    8 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '9 d') !== false)
                                                    9 D
                                                @elseif(strpos($rental->ticket_list, '9 D') !== false)
                                                    9 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '10 d') !== false)
                                                    10 D
                                                @elseif(strpos($rental->ticket_list, '10 D') !== false)
                                                    10 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '11 d') !== false)
                                                    11 D
                                                @elseif(strpos($rental->ticket_list, '11 D') !== false)
                                                    11 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '12 d') !== false)
                                                    12 D
                                                @elseif(strpos($rental->ticket_list, '12 D') !== false)
                                                    12 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '13 d') !== false)
                                                    13 D
                                                @elseif(strpos($rental->ticket_list, '13 D') !== false)
                                                    13 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '14 d') !== false)
                                                    14 D
                                                @elseif(strpos($rental->ticket_list, '14 D') !== false)
                                                    14 D
                                            @endif
                                            <!-- /Rental Duration -->
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="body-center text-center">
                                            <h2>{{$rental->first_name}} {{$rental->last_name}} <br />
                                                <span>
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
                                                    </span>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="body-right text-right">
                                            <a href="{{route('office.precheckShow', $rental->id)}}" class="btn btn-primary" >Pre-Check</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>

                <div class="tab-pane fade show" id="sup-tab" role="tabpanel" aria-labelledby="sup-tab">

                    @foreach($rentalSup as $rental)

                        <div class="card mb-4 shadow card-od pre-check-card" >
                            <div class="card-body precheckin">
                                <div class="row">
                                    <div class="col-12 col-sm-2">
                                        <div class="body-left">
                                            <h4 class="card-title text-center">
                                                @if($rental->activity_item == 'Stand Up Paddleboard')
                                                    SUP
                                                @elseif(strpos($rental->activity_item, '**Multi-Day Rental-- Stand Up') !== false)
                                                    SUP
                                                @else
                                                    <br>

                                                @endif
                                            </h4>
                                            <h2 class="card-duration text-center">
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
                                                @if(strpos($rental->ticket_list, '1 d') !== false)
                                                    1 D
                                                @elseif(strpos($rental->ticket_list, '1 D') !== false)
                                                    1 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '2 d') !== false)
                                                    2 D
                                                @elseif(strpos($rental->ticket_list, '2 D') !== false)
                                                    2 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '3 d') !== false)
                                                    3 D
                                                @elseif(strpos($rental->ticket_list, '3 D') !== false)
                                                    3 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '4 d') !== false)
                                                    4 D
                                                @elseif(strpos($rental->ticket_list, '4 D') !== false)
                                                    4 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '5 d') !== false)
                                                    5 D
                                                @elseif(strpos($rental->ticket_list, '5 D') !== false)
                                                    5 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '6 d') !== false)
                                                    6 D
                                                @elseif(strpos($rental->ticket_list, '6 D') !== false)
                                                    6 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '7 d') !== false)
                                                    7 D
                                                @elseif(strpos($rental->ticket_list, '7 D') !== false)
                                                    7 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '8 d') !== false)
                                                    8 D
                                                @elseif(strpos($rental->ticket_list, '8 D') !== false)
                                                    8 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '9 d') !== false)
                                                    9 D
                                                @elseif(strpos($rental->ticket_list, '9 D') !== false)
                                                    9 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '10 d') !== false)
                                                    10 D
                                                @elseif(strpos($rental->ticket_list, '10 D') !== false)
                                                    10 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '11 d') !== false)
                                                    11 D
                                                @elseif(strpos($rental->ticket_list, '11 D') !== false)
                                                    11 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '12 d') !== false)
                                                    12 D
                                                @elseif(strpos($rental->ticket_list, '12 D') !== false)
                                                    12 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '13 d') !== false)
                                                    13 D
                                                @elseif(strpos($rental->ticket_list, '13 D') !== false)
                                                    13 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '14 d') !== false)
                                                    14 D
                                                @elseif(strpos($rental->ticket_list, '14 D') !== false)
                                                    14 D
                                            @endif
                                            <!-- /Rental Duration -->
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="body-center text-center">
                                            <h2>{{$rental->first_name}} {{$rental->last_name}} <br />
                                                <span>
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
                                                    </span>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="body-right text-right">
                                            <a href="{{route('office.precheckShow', $rental->id)}}" class="btn btn-primary" >Pre-Check</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>

                <div class="tab-pane fade show" id="aluminum-tab" role="tabpanel" aria-labelledby="aluminum-tab">

                    @foreach($rentalAluminum as $rental)

                        <div class="card mb-4 shadow card-od pre-check-card" >
                            <div class="card-body precheckin">
                                <div class="row">
                                    <div class="col-12 col-sm-2">
                                        <div class="body-left">
                                            <h4 class="card-title text-center">
                                                @if(strpos($rental->activity_item, 'Aluminum'))
                                                    Aluminum
                                                @else
                                                    <br>

                                                @endif
                                            </h4>
                                            <h2 class="card-duration text-center">
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
                                                @if(strpos($rental->ticket_list, '1 d') !== false)
                                                    1 D
                                                @elseif(strpos($rental->ticket_list, '1 D') !== false)
                                                    1 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '2 d') !== false)
                                                    2 D
                                                @elseif(strpos($rental->ticket_list, '2 D') !== false)
                                                    2 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '3 d') !== false)
                                                    3 D
                                                @elseif(strpos($rental->ticket_list, '3 D') !== false)
                                                    3 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '4 d') !== false)
                                                    4 D
                                                @elseif(strpos($rental->ticket_list, '4 D') !== false)
                                                    4 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '5 d') !== false)
                                                    5 D
                                                @elseif(strpos($rental->ticket_list, '5 D') !== false)
                                                    5 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '6 d') !== false)
                                                    6 D
                                                @elseif(strpos($rental->ticket_list, '6 D') !== false)
                                                    6 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '7 d') !== false)
                                                    7 D
                                                @elseif(strpos($rental->ticket_list, '7 D') !== false)
                                                    7 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '8 d') !== false)
                                                    8 D
                                                @elseif(strpos($rental->ticket_list, '8 D') !== false)
                                                    8 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '9 d') !== false)
                                                    9 D
                                                @elseif(strpos($rental->ticket_list, '9 D') !== false)
                                                    9 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '10 d') !== false)
                                                    10 D
                                                @elseif(strpos($rental->ticket_list, '10 D') !== false)
                                                    10 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '11 d') !== false)
                                                    11 D
                                                @elseif(strpos($rental->ticket_list, '11 D') !== false)
                                                    11 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '12 d') !== false)
                                                    12 D
                                                @elseif(strpos($rental->ticket_list, '12 D') !== false)
                                                    12 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '13 d') !== false)
                                                    13 D
                                                @elseif(strpos($rental->ticket_list, '13 D') !== false)
                                                    13 D
                                                @endif
                                                @if(strpos($rental->ticket_list, '14 d') !== false)
                                                    14 D
                                                @elseif(strpos($rental->ticket_list, '14 D') !== false)
                                                    14 D
                                            @endif
                                            <!-- /Rental Duration -->
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="body-center text-center">
                                            <h2>{{$rental->first_name}} {{$rental->last_name}} <br />
                                                <span>
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
                                                    </span>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="body-right text-right">
                                            <a href="{{route('office.precheckShow', $rental->id)}}" class="btn btn-primary" >Pre-Check</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>

            </div>






        </div>

    </div>

    @endsection


    @section('sidebar')

        <!-- Instruction Widget -->
        <div class="card my-4 shadow">
            <h5 class="card-header text-center">Customer ID Required</h5>
            <div class="card-body">
                <p>
                    You will be asking for the ID of the person who will be providing the deposit.
                </p>
            </div>
        </div>

        <!-- Pre-Check Widget -->
        <div class="card my-4 shadow">
            <h5 class="card-header text-center">Pre-Checked In</h5>
            @if($rentalPreCheckShowCount > 0)
                @foreach($rentalPreCheckShow as $rental)
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h3 class="text-red">{{$rental->last_name}}</h3>
                            </div>
                            <div class="col-6">
                                <h6 class="mt-2">
                                    <!-- Rental Duration UPDATED -->
                                    <span class="gray">
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
                                        <br />

                                    @endif</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
                    @elseif($rentalPreCheckShowCount <= 0)
                       <div class="card-body">
                           <div class="row">
                               <div class="col-12">
                                   <div class="row">
                                       <div class="col-12">
                                           <h3 class="text-center text-red">Nothing Pre-Checked</h3>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
            @endif
        </div>

    @endsection




    @section('scripts')

    @endsection


</x-office-master>
