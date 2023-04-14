<x-runnerview-master>
    @section('styles')

    @endsection

        @foreach($applications as $application)
            @section('page_title')
                <title>Departing</title>
            @endsection

            @section('browser_title')
                <title>Departing | {{$application->name}}</title>
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
        <h1>Runner View</h1>

          <div class="row">
              <!-- Pre-Check -->
              <ul class="nav nav-tabs nav-justified mb-3" id="runnerView" role="tablist">
                  <li class="nav-item">
                      <a class="nav-link active" id="view-office-tab" data-toggle="tab" href="#office-tab" role="tab" aria-controls="office-tab"
                         aria-selected="true">Office</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" id="view-dock-tab" data-toggle="tab" href="#dock-tab" role="tab" aria-controls="dock-tab"
                         aria-selected="false">Dock</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" id="view-cleared-tab" data-toggle="tab" href="#cleared-tab" role="tab" aria-controls="cleared-tab"
                         aria-selected="false">Cleared</a>
                  </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="office-tab" role="tabpanel" aria-labelledby="office-tab">
                     <div class="row">
                         <div class="col-sm-6">
                            <h2 class="text-dark text-center">Pre-Checkin</h2>
                             @foreach($rentals as $rental)
                                 @if($rental->status == 'Pre-Check' && strpos($rental->activity_date, $today) !== false)
                                     <div class="card shadow my-1 mb-2">
                                         <a href="#" class="runnerview-box">
                                             <div class="card-header">
                                                 <div class="row">
                                                     <div class="col-3 col-sm-2">
                                                         <h4 class="text-center text-red">
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
                                                         </h4>
                                                     </div>
                                                     <div class="col-8 col-sm-3 pl-0 pr-0">
                                                         <h4>
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
                                          </span>
                                                         </h4>
                                                     </div>
                                                     <div class="col-12 col-sm-7">
                                                         <div class="row">
                                                             <div class="visible-xs col-1"></div>
                                                             <div class="col-5 col-lg-7">
                                                                 <h4 class="text-right font-weight-lighter">Scheduled:</h4>
                                                             </div>
                                                             <div class="col-6 col-lg-5">
                                                                 <h4 class="text-center text-gray-500">
                                                                     {{ $launchTime = \Carbon\Carbon::parse($rental->activity_date)->format('h:i a') }}
                                                                 </h4>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="card-body">
                                                 <div class="row">
                                                     <div class="col-sm-12">
                                                         <h2 class="text-center font-weight-bolder">{{$rental->first_name}} {{$rental->last_name}}</h2>
                                                     </div>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                 @endif
                             @endforeach
                         </div>
                         <div class="col-sm-6">
                            <h2 class="text-dark text-center">Checked In</h2>
                             @foreach($rentals as $rental)
                                 @if($rental->status == 'Checked In' && strpos($rental->activity_date, $today) !== false)
                                     <div class="card shadow my-1 mb-2">
                                         <a href="#" class="runnerview-box" data-toggle="modal" data-target="#rental_modal{{$rental->id}}">
                                             <div class="card-header">
                                                 <div class="row">
                                                     <div class="col-3 col-sm-2">
                                                         <h4 class="text-center text-red">
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
                                                         </h4>
                                                     </div>
                                                     <div class="col-8 col-sm-3 pl-0 pr-0">
                                                         <h4>
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
                                                                     <br />

                                                                 @endif
                                          </span>
                                                         </h4>
                                                     </div>
                                                     <div class="col-12 col-sm-7">
                                                         <div class="row">
                                                             <div class="visible-xs col-1"></div>
                                                             <div class="col-5 col-lg-7">
                                                                 <h4 class="text-right font-weight-lighter">Check In:</h4>
                                                             </div>
                                                             <div class="col-6 col-lg-5">
                                                                 <h4 class="text-center text-gray-500">
                                                                     {{ \Carbon\Carbon::parse($rental->check_in_time)->format('h:i a')}}
                                                                 </h4>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="card-body">
                                                 <div class="row">
                                                     <div class="col-sm-12">
                                                         <h2 class="text-center font-weight-bolder">{{$rental->first_name}} {{$rental->last_name}}</h2>
                                                     </div>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                 @endif
                             @endforeach
                         </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="dock-tab" role="tabpanel" aria-labelledby="dock-tab">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2 class="text-dark text-center">On Water</h2>
                                @foreach($rentals as $rental)
                                    @if($rental->status == 'On Water' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card shadow my-1 mb-2">
                                            <a href="#" class="runnerview-box" data-toggle="modal" data-target="#rental_modal{{$rental->id}}">
                                                <div class="card-header">
                                                    <div class="row">
                                                        <div class="col-3 col-sm-2">
                                                            <h4 class="text-center text-red">
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
                                                            </h4>
                                                        </div>
                                                        <div class="col-8 col-sm-3 pl-0 pr-0">
                                                            <h4>
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
                                          </span>
                                                            </h4>
                                                        </div>
                                                        <div class="col-12 col-sm-7">
                                                            <div class="row">
                                                                <div class="visible-xs col-1"></div>
                                                                <div class="col-5 col-lg-7">
                                                                    <h4 class="text-right font-weight-lighter">Due:</h4>
                                                                </div>
                                                                <div class="col-6 col-lg-5">
                                                                    <h4 class="text-center text-gray-500">
                                                                        <h4 class="text-center text-gray-500">
                                                                            <!-- UPDATED -->
                                                                                @if(strpos($rental->ticket_list, '1 hour') !== false)
                                                                                    {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(1)->format('h:i a')}}
                                                                                @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
                                                                                    {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(1)->format('h:i a')}}
                                                                                @endif
                                                                                @if(strpos($rental->ticket_list, '2 hour') !== false)
                                                                                    {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(2)->format('h:i a')}}
                                                                                @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
                                                                                    {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(2)->format('h:i a')}}
                                                                                @endif
                                                                                @if(strpos($rental->ticket_list, '3 hour') !== false)
                                                                                    {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(3)->format('h:i a')}}
                                                                                @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
                                                                                    {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(3)->format('h:i a')}}
                                                                                @endif
                                                                                @if(strpos($rental->ticket_list, '4 hour') !== false)
                                                                                    {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(4)->format('h:i a')}}
                                                                                @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
                                                                                    {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(4)->format('h:i a')}}
                                                                                @endif
                                                                                @if(strpos($rental->ticket_list, '8 Hour') !== false)
                                                                                    {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(8)->format('h:i a')}}
                                                                                @elseif(strpos($rental->ticket_list, '8 hour') !== false)
                                                                                    {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(8)->format('h:i a')}}
                                                                                @endif
                                                                                @if(strpos($rental->ticket_list, '9 Hour') !== false)
                                                                                    {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(9)->format('h:i a')}}
                                                                                @elseif(strpos($rental->ticket_list, '9 hour') !== false)
                                                                                    {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(9)->format('h:i a')}}
                                                                                @endif
                                                                                @if(strpos($rental->ticket_list, 'Full Day') !== false)
                                                                                    {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(8)->format('h:i a')}}
                                                                                @endif
                                                                                @if(strpos($rental->ticket_list, 'Half Day') !== false)
                                                                                    {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(4)->format('h:i a')}}
                                                                                @endif
                                                                                @if(strpos($rental->ticket_list, '1 Day') !== false)
                                                                                    {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(24)->format('h:i a')}}
                                                                                @endif
                                                                                @if(strpos($rental->ticket_list, '2 Day') !== false)
                                                                                    {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(2)->format('h:i a')}}
                                                                                @endif
                                                                                @if(strpos($rental->ticket_list, '3 Day') !== false)
                                                                                    {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(3)->format('h:i a')}}
                                                                                @endif
                                                                                @if(strpos($rental->ticket_list, '4 Day') !== false)
                                                                                    {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(4)->format('h:i a')}}
                                                                                @endif
                                                                                @if(strpos($rental->ticket_list, '5 Day') !== false)
                                                                                    {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(5)->format('h:i a')}}
                                                                                @endif
                                                                                @if(strpos($rental->ticket_list, '6 Day') !== false)
                                                                                    {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(6)->format('h:i a')}}
                                                                                @endif
                                                                                @if(strpos($rental->ticket_list, '7 Day') !== false)
                                                                                    {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(7)->format('h:i a')}}
                                                                                @endif
                                                                                @if(strpos($rental->ticket_list, '8 Day') !== false)
                                                                                    {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(8)->format('h:i a')}}
                                                                                @endif
                                                                                @if(strpos($rental->ticket_list, '9 Day') !== false)
                                                                                    {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(9)->format('h:i a')}}
                                                                                @endif
                                                                                @if(strpos($rental->ticket_list, '10 Day') !== false)
                                                                                    {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(10)->format('h:i a')}}
                                                                                @endif
                                                                                @if(strpos($rental->ticket_list, '11 Day') !== false)
                                                                                    {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(11)->format('h:i a')}}
                                                                                @endif
                                                                                @if(strpos($rental->ticket_list, '12 Day') !== false)
                                                                                    {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(12)->format('h:i a')}}
                                                                                @endif
                                                                                @if(strpos($rental->ticket_list, '13 Day') !== false)
                                                                                    {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(13)->format('h:i a')}}
                                                                                @endif
                                                                                @if(strpos($rental->ticket_list, '14 Day') !== false)
                                                                                    {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(14)->format('h:i a')}}
                                                                                @endif
                                                                                <!-- /UPDATED -->
                                                                        </h4>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <h2 class="text-center font-weight-bolder">{{$rental->first_name}} {{$rental->last_name}}</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-6">
                                <h2 class="text-dark text-center">On Dock</h2>
                                @foreach($rentals as $rental)
                                    @if($rental->status == 'On Dock' && strpos($rental->activity_date, $today) !== false)
                                        <div class="card shadow my-1 mb-2">
                                            <a href="#" class="runnerview-box" data-toggle="modal" data-target="#rental_modal{{$rental->id}}">
                                                <div class="card-header">
                                                    <div class="row">
                                                        <div class="col-3 col-sm-2">
                                                            <h4 class="text-center text-red">
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
                                                            </h4>
                                                        </div>
                                                        <div class="col-8 col-sm-3 pl-0 pr-0">
                                                            <h4>
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
                                          </span>
                                                            </h4>
                                                        </div>
                                                        <div class="col-12 col-sm-7">
                                                            <div class="row">
                                                                <div class="visible-xs col-1"></div>
                                                                <div class="col-5 col-lg-7">
                                                                    <h4 class="text-right font-weight-lighter">Due:</h4>
                                                                </div>
                                                                <div class="col-6 col-lg-5">
                                                                    <h4 class="text-center text-gray-500">
                                                                        <h4 class="text-center text-gray-500">
                                                                            <!-- UPDATED -->
                                                                        @if(strpos($rental->ticket_list, '1 hour') !== false)
                                                                            {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(1)->format('h:i a')}}
                                                                        @elseif(strpos($rental->ticket_list, '1 Hour') !== false)
                                                                            {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(1)->format('h:i a')}}
                                                                        @endif
                                                                        @if(strpos($rental->ticket_list, '2 hour') !== false)
                                                                            {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(2)->format('h:i a')}}
                                                                        @elseif(strpos($rental->ticket_list, '2 Hour') !== false)
                                                                            {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(2)->format('h:i a')}}
                                                                        @endif
                                                                        @if(strpos($rental->ticket_list, '3 hour') !== false)
                                                                            {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(3)->format('h:i a')}}
                                                                        @elseif(strpos($rental->ticket_list, '3 Hour') !== false)
                                                                            {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(3)->format('h:i a')}}
                                                                        @endif
                                                                        @if(strpos($rental->ticket_list, '4 hour') !== false)
                                                                            {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(4)->format('h:i a')}}
                                                                        @elseif(strpos($rental->ticket_list, '4 Hour') !== false)
                                                                            {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(4)->format('h:i a')}}
                                                                        @endif
                                                                        @if(strpos($rental->ticket_list, '8 Hour') !== false)
                                                                            {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(8)->format('h:i a')}}
                                                                        @elseif(strpos($rental->ticket_list, '8 hour') !== false)
                                                                            {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(8)->format('h:i a')}}
                                                                        @endif
                                                                        @if(strpos($rental->ticket_list, '9 Hour') !== false)
                                                                            {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(9)->format('h:i a')}}
                                                                        @elseif(strpos($rental->ticket_list, '9 hour') !== false)
                                                                            {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(9)->format('h:i a')}}
                                                                        @endif
                                                                        @if(strpos($rental->ticket_list, 'Full Day') !== false)
                                                                            {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(8)->format('h:i a')}}
                                                                        @endif
                                                                        @if(strpos($rental->ticket_list, 'Half Day') !== false)
                                                                            {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(4)->format('h:i a')}}
                                                                        @endif
                                                                        @if(strpos($rental->ticket_list, '1 Day') !== false)
                                                                            {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addHours(24)->format('h:i a')}}
                                                                        @endif
                                                                        @if(strpos($rental->ticket_list, '2 Day') !== false)
                                                                            {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(2)->format('h:i a')}}
                                                                        @endif
                                                                        @if(strpos($rental->ticket_list, '3 Day') !== false)
                                                                            {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(3)->format('h:i a')}}
                                                                        @endif
                                                                        @if(strpos($rental->ticket_list, '4 Day') !== false)
                                                                            {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(4)->format('h:i a')}}
                                                                        @endif
                                                                        @if(strpos($rental->ticket_list, '5 Day') !== false)
                                                                            {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(5)->format('h:i a')}}
                                                                        @endif
                                                                        @if(strpos($rental->ticket_list, '6 Day') !== false)
                                                                            {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(6)->format('h:i a')}}
                                                                        @endif
                                                                        @if(strpos($rental->ticket_list, '7 Day') !== false)
                                                                            {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(7)->format('h:i a')}}
                                                                        @endif
                                                                        @if(strpos($rental->ticket_list, '8 Day') !== false)
                                                                            {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(8)->format('h:i a')}}
                                                                        @endif
                                                                        @if(strpos($rental->ticket_list, '9 Day') !== false)
                                                                            {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(9)->format('h:i a')}}
                                                                        @endif
                                                                        @if(strpos($rental->ticket_list, '10 Day') !== false)
                                                                            {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(10)->format('h:i a')}}
                                                                        @endif
                                                                        @if(strpos($rental->ticket_list, '11 Day') !== false)
                                                                            {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(11)->format('h:i a')}}
                                                                        @endif
                                                                        @if(strpos($rental->ticket_list, '12 Day') !== false)
                                                                            {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(12)->format('h:i a')}}
                                                                        @endif
                                                                        @if(strpos($rental->ticket_list, '13 Day') !== false)
                                                                            {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(13)->format('h:i a')}}
                                                                        @endif
                                                                        @if(strpos($rental->ticket_list, '14 Day') !== false)
                                                                            {{ $newLaunch = \Carbon\Carbon::parse($rental->launched_time)->addDays(14)->format('h:i a')}}
                                                                        @endif
                                                                        <!-- /UPDATED -->
                                                                        </h4>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <h2 class="text-center font-weight-bolder">{{$rental->first_name}} {{$rental->last_name}}</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                  </div>
                  <div class="tab-pane fade" id="cleared-tab" role="tabpanel" aria-labelledby="cleared-tab">
                      <div class="row">
                          <div class="col-sm-6">
                              <h2 class="text-dark text-center">Clear</h2>
                              @foreach($rentals as $rental)
                                  @if($rental->status == 'Clear' && strpos($rental->activity_date, $today) !== false)
                                      <div class="card shadow my-1 mb-2">
                                          <a href="#" class="runnerview-box" data-toggle="modal" data-target="#rental_modal{{$rental->id}}">
                                              <div class="card-header">
                                                  <div class="row">
                                                      <div class="col-3 col-sm-2">
                                                          <h4 class="text-center text-red">
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
                                                          </h4>
                                                      </div>
                                                      <div class="col-8 col-sm-3 pl-0 pr-0">
                                                          <h4>
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
                                          </span>
                                                          </h4>
                                                      </div>
                                                      <div class="col-12 col-sm-7">
                                                          <div class="visible-xs col-1"></div>
                                                          <div class="row">
                                                              <div class="col-5 col-lg-7">
                                                                  <h4 class="text-right font-weight-lighter">Cleared:</h4>
                                                              </div>
                                                              <div class="col-6 col-lg-5">
                                                                  <h4 class="text-center text-gray-500">
                                                                      {{ \Carbon\Carbon::parse($rental->cleared_time)->format('h:i a')}}
                                                                  </h4>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="card-body">
                                                  <div class="row">
                                                      <div class="col-sm-12">
                                                          <h2 class="text-center font-weight-bolder">{{$rental->first_name}} {{$rental->last_name}}</h2>
                                                      </div>
                                                  </div>
                                              </div>
                                          </a>
                                      </div>
                                  @endif
                              @endforeach
                          </div>
                          <div class="col-sm-6">
                              <h2 class="text-dark text-center">Change of Condition</h2>
                              @foreach($rentals as $rental)
                                  @if($rental->status == 'COC' && strpos($rental->activity_date, $today) !== false)
                                      <div class="card shadow my-1 mb-2">
                                          <a href="#" class="runnerview-box" data-toggle="modal" data-target="#rental_modal{{$rental->id}}">
                                              <div class="card-header">
                                                  <div class="row">
                                                      <div class="col-3 col-sm-2">
                                                          <h4 class="text-center text-red">
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
                                                          </h4>
                                                      </div>
                                                      <div class="col-8 col-sm-3 pl-0 pr-0">
                                                          <h4>
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
                                          </span>
                                                          </h4>
                                                      </div>
                                                      <div class="col-12 col-sm-7">
                                                          <div class="row">
                                                              <div class="visible-xs col-1"></div>
                                                              <div class="col-5 col-lg-7">
                                                                  <h4 class="text-right font-weight-lighter">Cleared:</h4>
                                                              </div>
                                                              <div class="col-6 col-lg-5">
                                                                  <h4 class="text-center text-gray-500">
                                                                      {{ \Carbon\Carbon::parse($rental->cleared_time)->format('h:i a')}}
                                                                  </h4>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="card-body">
                                                  <div class="row">
                                                      <div class="col-sm-12">
                                                          <h2 class="text-center font-weight-bolder">{{$rental->first_name}} {{$rental->last_name}}</h2>
                                                      </div>
                                                  </div>
                                              </div>
                                          </a>
                                      </div>
                                  @endif
                              @endforeach
                          </div>
                      </div>
                  </div>
              </div>
              <!-- /Pre-Check -->
          </div>

        @foreach($rentals as $rental)
        <!-- Rental Modal -->
        <div class="modal fade" id="rental_modal{{$rental->id}}" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 id="modal_rental_title" class="modal-title text-red">
                            {{$rental->first_name}} {{$rental->last_name}}
                            <span>  | </span>
                            <span class="small gray">
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
                        <span>

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
                        </span>

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
                        </span>

                         <span class="text-gray-700">
                             @if($rental->launched_by)
                                 @foreach($rental->vehicles as $rental_vehicle)
                                     ( {{$rental_vehicle->internal_vehicle_id}} )&nbsp;
                                 @endforeach
                             @endif
                         </span>
                        </h3>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <!-- Modal Item -->
                        @if($rental->check_in_by)
                            <div class="rental-modal-item">
                                <div class="row">
                                    <div class="col-6">
                                        <h3 class="text-gray-600">Checked In By:</h3>
                                    </div>
                                    <div class="col-6">
                                        @foreach($users as $user)
                                            @if($rental->check_in_by == $user->id)
                                                 <h3>{{$user->firstname}} {{$user->lastname}}</h3>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="rental-modal-item">
                                <div class="row">
                                    <div class="col-6">
                                        <h3 class="text-gray-600">Checked In Time:</h3>
                                    </div>
                                    <div class="col-6">
                                        <h3>{{\Carbon\Carbon::parse($rental->check_in_time)->format('h:m a')}}</h3>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <!-- /Modal Item -->

                        <!-- Modal Item -->
                        @if($rental->launched_by)
                            <hr class="rounded">
                            <div class="rental-modal-item">
                                <div class="row">
                                    <div class="col-6">
                                        <h3 class="text-gray-600">Checked In By:</h3>
                                    </div>
                                    <div class="col-6">
                                        @foreach($users as $user)
                                            @if($rental->launched_by == $user->id)
                                                <h3>{{$user->firstname}} {{$user->lastname}}</h3>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="rental-modal-item">
                                <div class="row">
                                    <div class="col-6">
                                        <h3 class="text-gray-600">Launch Time:</h3>
                                    </div>
                                    <div class="col-6">
                                        <h3>{{\Carbon\Carbon::parse($rental->launched_time)->format('h:m a')}}</h3>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <!-- /Modal Item -->

                        <!-- Modal Item -->
                        @if($rental->cleared_by)
                            <hr class="rounded">
                            <div class="rental-modal-item">
                                <div class="row">
                                    <div class="col-6">
                                        <h3 class="text-gray-600">Checked In By:</h3>
                                    </div>
                                    <div class="col-6">
                                        @foreach($users as $user)
                                            @if($rental->cleared_by == $user->id)
                                                <h3>{{$user->firstname}} {{$user->lastname}}</h3>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="rental-modal-item">
                                <div class="row">
                                    <div class="col-6">
                                        <h3 class="text-gray-600">Launch Time:</h3>
                                    </div>
                                    <div class="col-6">
                                        <h3>{{\Carbon\Carbon::parse($rental->cleared_time)->format('h:m a')}}</h3>
                                    </div>
                                </div>
                            </div>
                    @endif
                    <!-- /Modal Item -->


                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Rental Modal -->
        @endforeach

    @endsection


    @section('scripts')

    @endsection


</x-runnerview-master>
