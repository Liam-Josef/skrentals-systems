<x-dock-master>

    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection

    @foreach($applications as $application)
        @section('page_title')
            <title>{{$application->operations_name}}</title>
        @endsection

        @section('browser_title')
            <title>{{$application->operations_name}} | {{$application->name}}</title>
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
                Dock
        </h1>


        <div class="row">

            <div class="col-sm-6">
                <h2 class="section-title">Departing</h2>

                @foreach($rentalDepart as $rental)
                    @if($rental->status == 'Checked In' && strpos($rental->activity_date, $today) !== false)
                        <div class="card mb-4 shadow card-od">
                        <div class="card-header">
                            <h3>
                                <a href="#" class="departing" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                    <div class="row">
                                        <div class="col-4 col-sm-3">
                                            <div class="header-left">
                                                 #{{$rental->invoice_number}}
                                            </div>
                                        </div>
                                        <div class="col-8 col-sm-9">
                                            <div class="header-right">
                                                {{$rental->last_name}}, {{$rental->first_name}}
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </h3>
                        </div>
                        <div class="dock card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="body-left">
                                        <h4 class="card-title text-center">
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
                                <div class="col-sm-4">
                                    <div class="body-center">
                                        <a href="#" data-toggle="modal" data-target="#launchModal{{$rental->id}}" class="btn btn-launch">Launch</a>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="body-right">
                                        <a class="btn-tel" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a>
                                        <p class="card-text">
                                            <br />
                                            Checked in: <br class="hidden-xs" />
                                            <span class="time">
                                                    {{ $newLaunch = \Carbon\Carbon::parse($rental->check_in_time)->format('h:i A')}}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <h4 class="rental-time">
                                            {{ $launchTime = \Carbon\Carbon::parse($newLaunch)->addMinutes(30)->format('h:i A') }}
                                            -
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


                        <!-- Launch Modal // Controller 2 -->
                        <div class="modal fade" id="launchModal{{$rental->id}}" tabindex="-1" role="dialog" aria-labelledby="launchModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="launchModalLabel">
                                            {{$rental->first_name}} {{$rental->last_name}}
                                            <span>
                                                |
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
                                            </span>
                                        </h3>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <form method="post" action="{{route('dock.launchRental', $rental)}}">

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

                                                        @if(strpos($rental->ticket_list, '2x') !== false)
                                                            <select name="vehicle1" id="vehicle1" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                            <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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
                                                        @endif

                                                        @if(strpos($rental->ticket_list, '3x') !== false)
                                                            <select name="vehicle1" id="vehicle1" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                            <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle2" id="vehicle2" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                            <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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
                                                        @endif

                                                        @if(strpos($rental->ticket_list, '4x') !== false)
                                                            <select name="vehicle1" id="vehicle1" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                            <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle2" id="vehicle2" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                            <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle3" id="vehicle3" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                            <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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
                                                        @endif

                                                        @if(strpos($rental->ticket_list, '5x') !== false)
                                                            <select name="vehicle1" id="vehicle1" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                            <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle2" id="vehicle2" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                            <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle3" id="vehicle3" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                            <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle4" id="vehicle4" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                            <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                        @endif

                                                        @if(strpos($rental->ticket_list, '6x') !== false)
                                                            <select name="vehicle1" id="vehicle1" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle2" id="vehicle2" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle3" id="vehicle3" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle4" id="vehicle4" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle5" id="vehicle5" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                        @endif

                                                        @if(strpos($rental->ticket_list, '7x') !== false)
                                                            <select name="vehicle1" id="vehicle1" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle2" id="vehicle2" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle3" id="vehicle3" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle4" id="vehicle4" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle5" id="vehicle5" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle6" id="vehicle6" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                        @endif

                                                        @if(strpos($rental->ticket_list, '8x') !== false)
                                                            <select name="vehicle1" id="vehicle1" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle2" id="vehicle2" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle3" id="vehicle3" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle4" id="vehicle4" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle5" id="vehicle5" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle6" id="vehicle6" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle7" id="vehicle7" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                        @endif

                                                        @if(strpos($rental->ticket_list, '9x') !== false)
                                                            <select name="vehicle1" id="vehicle1" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle2" id="vehicle2" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle3" id="vehicle3" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle4" id="vehicle4" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle5" id="vehicle5" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle6" id="vehicle6" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle7" id="vehicle7" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle8" id="vehicle8" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                        @endif

                                                        @if(strpos($rental->ticket_list, '10x') !== false)
                                                            <select name="vehicle1" id="vehicle1" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle2" id="vehicle2" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle3" id="vehicle3" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle4" id="vehicle4" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle5" id="vehicle5" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle6" id="vehicle6" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle7" id="vehicle7" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle8" id="vehicle8" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                            <select name="vehicle9" id="vehicle9" class="form-control mb-3">

                                                                @if(strpos($rental->activity_item, 'Scarab') !== false)
                                                                    @foreach($vehicleScarab as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'SeaDoo') !== false)
                                                                    @foreach($vehicleSeaDoo as $vehicle)
                                                                        <option value="{{$vehicle->id}}">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</option>
                                                                    @endforeach
                                                                @endif

                                                                @if(strpos($rental->activity_item, 'Pontoon') !== false)
                                                                    @foreach($vehiclePontoon as $vehicle)
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

                                                        @endif

                                                    </div>
                                                    <div class="form-group">
                                                        <label for="launched_by">Select Yourself...</label>
                                                        <select name="launched_by" id="launched_by" class="form-control">
                                                            @foreach($users as $user)
                                                                <option value="{{$user->id}}">{{$user->firstname}} {{$user->lastname}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="customer_notes">Customer Notes</label>
                                                    <textarea name="customer_notes" id="customer_notes" cols="30" rows="10"
                                                              class="form-control mb-3">{{$rental->customer_notes}}</textarea>
                                                </div>
                                            </div>



{{--                                            <input type="file" accept="image/*" capture="camera" />--}}

                                            <input type="hidden" value="On Water" name="status">
                                            <div class="modal-footer">
                                                <input type="hidden" value="{{$dateNow}}" name="launched_time">
                                                <button class="btn btn-primary-red" type="submit">LAUNCH</button>
                                            </div>
                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>

                    <!-- Dock Modal -->
                    <div class="modal fade" id="dock{{$rental->id}}" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 id="modal_rental_title" class="modal-title"><span>Check In: </span>{{$rental->activity_item}} | {{$rental->first_name}} {{$rental->last_name}} &nbsp;
                                        <span class="status">
                                        @if($rental->status == 'Pre-Check')
                                                |
                                            @endif
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
                                                                    <p class="modal-item-title">Email:</p>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <p class="modal-item">{{$rental->email}}</p>
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
                                                                    <p class="modal-item">{{$rental->phone}}</p>
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
                                                   <div class="row">
                                                       <!-- Item -->
                                                       <div class="col-6 col-sm-12">
                                                           <div class="row">
                                                               <div class="col-sm-4">
                                                                   <p class="modal-item-title">Booking ID:</p>
                                                               </div>
                                                               <div class="col-sm-8">
                                                                   <p class="modal-item">{{$rental->booking_id}}</p>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <!-- /Item -->
                                                       <!-- Item -->
                                                       <div class="col-6 col-sm-12">
                                                           <div class="row">
                                                               <div class="col-sm-4">
                                                                   <p class="modal-item-title">Activity Item:</p>
                                                               </div>
                                                               <div class="col-sm-8">
                                                                   <p class="modal-item">{{$rental->activity_item}}</p>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <!-- /Item -->
                                                       <!-- Item -->
                                                       <div class="col-6 col-sm-12">
                                                           <div class="row">
                                                               <div class="col-sm-4">
                                                                   <p class="modal-item-title">Activity Date:</p>
                                                               </div>
                                                               <div class="col-sm-8">
                                                                   <p class="modal-item">{{$rental->activity_date}}</p>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <!-- /Item -->
                                                       <!-- Item -->
                                                       <div class="col-6 col-sm-12">
                                                           <div class="row">
                                                               <div class="col-sm-4">
                                                                   <p class="modal-item-title">Ticket List:</p>
                                                               </div>
                                                               <div class="col-sm-8">
                                                                   <p class="modal-item">{{$rental->ticket_list}}</p>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <!-- /Item -->
                                                       <!-- Item -->
                                                       <div class="col-sm-12">
                                                           <div class="row">
                                                               <div class="col-sm-4">
                                                                   <p class="modal-item-title">Activity Item:</p>
                                                               </div>
                                                               <div class="col-sm-8">
                                                                   <p class="modal-item">{{$rental->activity_item}}</p>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <!-- /Item -->
                                                       <!-- Checked in by -->
                                                       @if($rental->check_in_by == '')
                                                           &nbsp;
                                                       @else
                                                           @foreach($users as $user)
                                                               @if($rental->check_in_by == $user->id)
                                                                   <!-- Item -->
                                                                       <div class="col-6 col-sm-12">
                                                                           <div class="row">
                                                                               <div class="col-sm-4">
                                                                                   <p class="modal-item-title">Checked In By:</p>
                                                                               </div>
                                                                               <div class="col-sm-8">
                                                                                   <p class="modal-item">{{$user->firstname}} {{$user->lastname}}</p>
                                                                               </div>
                                                                           </div>
                                                                       </div>
                                                                       <!-- /Item -->
                                                                       <!-- Item -->
                                                                       <div class="col-6 col-sm-12">
                                                                           <div class="row">
                                                                               <div class="col-sm-4">
                                                                                   <p class="modal-item-title">Check In Time:</p>
                                                                               </div>
                                                                               <div class="col-sm-8">
                                                                                   <p class="modal-item">
                                                                                       {{ \Carbon\Carbon::parse($rental->check_in_time)->format('F j, Y - h:i:s A') }}
                                                                                   </p>
                                                                               </div>
                                                                           </div>
                                                                       </div>
                                                                       <!-- /Item -->
                                                               @endif
                                                           @endforeach
                                                       @endif
                                                       <!-- /Checked in by -->
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
                                                <div class="col-sm-12">
                                                    <h4 class="modal-section-title">Change of Condition</h4>
                                                    <hr class="rounded" />
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

                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">CLOSE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Dock Modal -->
                    @endif
                @endforeach
            </div>

            <!-- Returning -->
            <div class="col-sm-6">
                <h2 class="section-title">Returning</h2>
                @foreach($rentalReturn as $rental)
                    <div class="status-section">
                        @if($rental->status === 'On Dock' && strpos($rental->activity_date, $today) !== false)
                            <div class="card mb-4 shadow card-od">
                                <div class="card-header">
                                    <h3><a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                            <div class="row">
                                                <div class="col-4 col-sm-3">
                                                    <div class="header-left">
                                                        #{{$rental->invoice_number}}
                                                    </div>
                                                </div>
                                                <div class="col-8 col-sm-9">
                                                    <div class="header-right">
                                                        {{$rental->last_name}}, {{$rental->first_name}}
                                                    </div>
                                                </div>
                                            </div>
                                        </a></h3>
                                </div>
                                <div class="office card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
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
                                             <h4 class="">
                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                        -
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
                                        </span>
                                        <span class="right"><a class="text-dark" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                    </h4>
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
                                                @foreach($rental->vehicles as $rental_vehicle)
                                                    {{$rental_vehicle->internal_vehicle_id}}
                                                @endforeach
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
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="cleared_by">Select Yourself...</label>
                                                            <select name="cleared_by" id="cleared_by" class="form-control">
                                                                @foreach($users as $user)
                                                                    <option value="{{$user->id}}">{{$user->firstname}} {{$user->lastname}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="customer_notes">Notes:</label>
                                                    <textarea name="customer_notes" id="customer_notes" cols="30"
                                                              rows="8">{{$rental->customer_notes}}</textarea>
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
                                                <div class="col-sm-6">
                                                    <form action="{{route('dock.vehicleClearMulti', $rental->id)}}" method="post">
                                                        @csrf
                                                        @method('PUT')

                                                        @foreach($rental->vehicles as $rental_vehicle)

                                                            @if($rental_vehicle->launched == true)
                                                                <div class="row mb-3">
                                                                    <div class="col-sm-6">
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="hidden" name="vehicle" value="{{$rental_vehicle->id}}">
                                                                        <input type="hidden" name="coc_vehicle" value="{{$rental_vehicle->id}}">
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endforeach

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
                                                                " type="submit">CLEAR RENTAL</button>
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
                                                            @foreach($rental->vehicles as $rental_vehicle)
                                                                {{$rental_vehicle->internal_vehicle_id}}
                                                                <input type="hidden" name="coc_vehicle" value="{{$rental_vehicle->id}}">
                                                            @endforeach
                                                        </span>


                                                    </h3>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

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
                                                        <input type="file" class="form-control" name="image_1">
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="incident">Incident Information <em>(Required)</em></label>
                                                        <textarea name="incident" id="incident" cols="30" rows="10" width="100% !important;"></textarea>
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
                                                                   <input type="file" class="form-control" name="image_1">
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

                        @endif
                    </div>

                    <div class="status-section">
                        @if($rental->status == 'On Water' && strpos($rental->activity_date, $today) !== false)
                            <div class="card mb-4 shadow card-od">
                                <div class="card-header">
                                    <h3><a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                            <div class="row">
                                                <div class="col-4 col-sm-3">
                                                    <div class="header-left">
                                                        #{{$rental->invoice_number}}
                                                    </div>
                                                </div>
                                                <div class="col-8 col-sm-9">
                                                    <div class="header-right">
                                                        {{$rental->last_name}}, {{$rental->first_name}}
                                                    </div>
                                                </div>
                                            </div>
                                        </a></h3>
                                </div>
                                <div class="office card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
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
                                             <h4 class="">
                                        {{ $launchTime = \Carbon\Carbon::parse($rental->launched_time)->format('h:i A') }}
                                        -
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
                                        </span>
                                        <span class="right"><a class="text-dark" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a></span>
                                    </h4>
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
                                                    @foreach($rental->vehicles as $rental_vehicle)
                                                        {{$rental_vehicle->internal_vehicle_id}}
                                                    @endforeach
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
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label for="cleared_by">Select Yourself...</label>
                                                                <select name="cleared_by" id="cleared_by" class="form-control">
                                                                    @foreach($users as $user)
                                                                        <option value="{{$user->id}}">{{$user->firstname}} {{$user->lastname}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="customer_notes">Notes:</label>
                                                        <textarea name="customer_notes" id="customer_notes" cols="30"
                                                                  rows="8">{{$rental->customer_notes}}</textarea>
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
                                                    <div class="col-sm-6">
                                                        <form action="{{route('dock.vehicleClearMulti', $rental->id)}}" method="post">
                                                            @csrf
                                                            @method('PUT')

                                                            @foreach($rental->vehicles as $rental_vehicle)

                                                                @if($rental_vehicle->launched == true)
                                                                    <div class="row mb-3">
                                                                        <div class="col-sm-6">
                                                                            <h3>
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
                                                                    " type="submit">CLEAR RENTAL</button>
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
                                                        @foreach($rental->vehicles as $rental_vehicle)
                                                            {{$rental_vehicle->internal_vehicle_id}}
                                                        <input type="hidden" name="coc_vehicle" value="{{$rental_vehicle->id}}">
                                                        @endforeach
                                                        </span>
                                                    </h3>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

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
                                                        <input type="file" class="form-control" name="image_1">
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="incident">Incident Information <em>(Required)</em></label>
                                                        <textarea name="incident" id="incident" cols="30" rows="10" width="100% !important;"></textarea>
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
                                                                    <input type="file" class="form-control" name="image_1">
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




                        @endif
                    </div>


                    <div class="status-section">
                        @if($rental->status == 'COC' && strpos($rental->activity_date, $today) !== false)
                            <div class="card mb-4 shadow card-od">
                                <div class="card-header">
                                    <h3><a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                            <div class="row">
                                                <div class="col-4 col-sm-3">
                                                    <div class="header-left">
                                                        #{{$rental->invoice_number}}
                                                    </div>
                                                </div>
                                                <div class="col-8 col-sm-9">
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
                                        <div class="col-6 col-sm-6">
                                            <div class="body-center">
                                                <div class="row">
                                                    <div class="col-sm-12 pl-0 pt-2">
                                                        <h2 class="dock rental-status text-uppercase">{{$rental->status}}</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-2"></div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <h4>
                                        <span class="left">
                                             <h4 class="">
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
                                        </span>
                                        <span class="right">
                                        <a class="text-dark" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a>
                                    </span>
                                    </h4>
                                </div>
                            </div>
                        @endif
                    </div>


                   <div class="status-section">
                       @if($rental->status == 'Clear' && strpos($rental->activity_date, $today) !== false)
                           <div class="card mb-4 shadow card-od">
                               <div class="card-header">
                                   <h3><a href="#" class="returning" data-toggle="modal" data-target="#dock{{$rental->id}}">
                                           <div class="row">
                                               <div class="col-4 col-sm-3">
                                                   <div class="header-left">
                                                       #{{$rental->invoice_number}}
                                                   </div>
                                               </div>
                                               <div class="col-8 col-sm-9">
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
                                       <div class="col-6 col-sm-6">
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
                                            <h4 class="">
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
                                       </span>
                                       <span class="right">
                                            <a class="visible-xs text-dark" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a>
                                        </span>
                                   </h4>
                               </div>
                           </div>
                           <br />




                       @endif
                   </div>


                    <!-- Dock Modal -->
                    <div class="modal fade" id="dock{{$rental->id}}" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 id="modal_rental_title" class="modal-title"><span>Check In: </span>{{$rental->activity_item}} | {{$rental->first_name}} {{$rental->last_name}} &nbsp;
                                        <span class="status">
                                        @if($rental->status == 'Pre-Check')
                                                |
                                            @endif
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
                                                                    <p class="modal-item-title">Email:</p>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <p class="modal-item">{{$rental->email}}</p>
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
                                                                    <p class="modal-item">{{$rental->phone}}</p>
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
                                                    <div class="row">
                                                        <!-- Item -->
                                                        <div class="col-6 col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <p class="modal-item-title">Booking ID:</p>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <p class="modal-item">{{$rental->booking_id}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /Item -->
                                                        <!-- Item -->
                                                        <div class="col-6 col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <p class="modal-item-title">Activity Item:</p>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <p class="modal-item">{{$rental->activity_item}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /Item -->
                                                        <!-- Item -->
                                                        <div class="col-6 col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <p class="modal-item-title">Activity Date:</p>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <p class="modal-item">{{$rental->activity_date}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /Item -->
                                                        <!-- Item -->
                                                        <div class="col-6 col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <p class="modal-item-title">Ticket List:</p>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <p class="modal-item">{{$rental->ticket_list}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /Item -->
                                                        <!-- Item -->
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <p class="modal-item-title">Activity Item:</p>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <p class="modal-item">{{$rental->activity_item}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /Item -->
                                                        <!-- Checked in by -->
                                                        @if($rental->check_in_by == '')
                                                            &nbsp;
                                                    @else
                                                        @foreach($users as $user)
                                                            @if($rental->check_in_by == $user->id)
                                                                <!-- Item -->
                                                                   <div class="col-6 col-sm-12">
                                                                       <div class="row">
                                                                           <div class="col-sm-4">
                                                                               <p class="modal-item-title">Checked In By:</p>
                                                                           </div>
                                                                           <div class="col-sm-8">
                                                                               <p class="modal-item">{{$user->firstname}} {{$user->lastname}}</p>
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                                    <!-- /Item -->
                                                                    <!-- Item -->
                                                                    <div class="col-6 col-sm-12">
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <p class="modal-item-title">Check In Time:</p>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <p class="modal-item">
                                                                                    {{ \Carbon\Carbon::parse($rental->check_in_time)->format('F j, Y - h:i:s A') }}
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
                                                                            <div class="col-sm-4">
                                                                                <p class="modal-item-title">Launched By:</p>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <p class="modal-item">{{$user->firstname}} {{$user->lastname}}</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /Item -->
                                                                    <!-- Item -->
                                                                    <div class="col-6 col-sm-12">
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <p class="modal-item-title">Launch Time:</p>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <p class="modal-item">
                                                                                    {{ \Carbon\Carbon::parse($rental->launched_time)->format('F j, Y - h:i:s A') }}
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
                                                                            <div class="col-sm-4">
                                                                                <p class="modal-item-title">Cleared By:</p>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <p class="modal-item">{{$user->firstname}} {{$user->lastname}}</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /Item -->
                                                                    <!-- Item -->
                                                                    <div class="col-6 col-sm-12">
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <p class="modal-item-title">Clear Time:</p>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <p class="modal-item">
                                                                                    {{ \Carbon\Carbon::parse($rental->cleared_time)->format('F j, Y - h:i:s A') }}
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
                                                <div class="col-sm-12">
                                                    <h4 class="modal-section-title">Change of Condition</h4>
                                                    <hr class="rounded" />
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
                                                <div class="col-sm-6">
                                                    <h3>
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
                                                        {{$rental_vehicle->internal_vehicle_id}}
                                                    </h3>
                                                </div>
                                                <div class="col-sm-6">
                                                    <form method="post" action="{{route('dock.detachVehicleChange', $rental->id)}}">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="hidden" name="vehicle" value="{{$rental_vehicle->id}}">
                                                        <input type="hidden" name="rental" value="{{$rental->id}}">
                                                        <button  class="btn btn-danger align-right"
                                                                 @if($rental_vehicle->launched == '0')
                                                                 hidden
                                                                 @endif
                                                                 type="submit">Delete Vehicle</button>
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
            </div>
        </div>





    @endsection

    @section('sidebar')



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

                    @foreach($officePrecheck as $rental)
                        <div class="office-pre-check-line">
                            <div class="row">
                                <div class="col-3 col-sm-2">
                                    <h3 class="red">
                                        <!-- Rental Duration UPDATED -->
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
