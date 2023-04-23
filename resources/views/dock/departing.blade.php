<x-dock-master>

    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection

        @foreach($applications as $application)
        @section('page_title')
            <title>Departing</title>
        @endsection

        @section('browser_title')
            <title>Departing | {{$application->name}}</title>
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
                Departing <span class="hidden-xs-contents">Rentals</span>
        </h1>


        <div class="row">
            <!-- Departing Tablist -->
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

                    <div class="offset-sm-2 col-sm-8">
                        <h2 class="section-title">All Departing Rentals</h2>

                        @foreach($rentalDepart as $rental)
                            @if($rental->status == 'Checked In' && strpos($rental->activity_date, $today) !== false)
                                <div class="card mb-4 shadow card-od card-dark">
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
                                                            <h4 class="rental-time">
                                                                Checked in:
                                                                <span class="time">
                                                                  {{ $newLaunch = \Carbon\Carbon::parse($rental->check_in_time)->format('h:i A')}}
                                                                 </span>
                                                            </h4>
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
                                                    <h4 class="card-title-name text-center visible-xs">{{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    <h4 class="card-title text-center mt-2">
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
                                                    <h4 class="card-title-name hidden-xs">{{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    <a class="btn-tel rent-depart" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>

                </div>
                <div class="tab-pane fade show" id="scarab-tab" role="tabpanel" aria-labelledby="scarab-tab">

                    <div class="offset-sm-2 col-sm-8">
                        <h2 class="section-title">Scarabs</h2>

                        @foreach($rentalDepartScarab as $rental)
                            @if($rental->status == 'Checked In' && strpos($rental->activity_date, $today) !== false)
                                <div class="card mb-4 shadow card-od card-dark">
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
                                                            <h4 class="rental-time">
                                                                Checked in:
                                                                <span class="time">
                                                                  {{ $newLaunch = \Carbon\Carbon::parse($rental->check_in_time)->format('h:i A')}}
                                                                 </span>
                                                            </h4>
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
                                                    <h4 class="card-title-name text-center visible-xs">{{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    <h4 class="card-title text-center mt-2">
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
                                                    <h4 class="card-title-name hidden-xs">{{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    <a class="btn-tel rent-depart" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>

                </div>

                <div class="tab-pane fade show" id="pontoon-tab" role="tabpanel" aria-labelledby="pontoon-tab">

                    <div class="offset-sm-2 col-sm-8">
                        <h2 class="section-title">Pontoons</h2>

                        @foreach($rentalDepartPontoon as $rental)
                            @if($rental->status == 'Checked In' && strpos($rental->activity_date, $today) !== false)
                                <div class="card mb-4 shadow card-od card-dark">
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
                                                            <h4 class="rental-time">
                                                                Checked in:
                                                                <span class="time">
                                                                  {{ $newLaunch = \Carbon\Carbon::parse($rental->check_in_time)->format('h:i A')}}
                                                                 </span>
                                                            </h4>
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
                                                    <h4 class="card-title-name text-center visible-xs">{{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    <h4 class="card-title text-center mt-2">
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
                                                    <h4 class="card-title-name hidden-xs">{{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    <a class="btn-tel rent-depart" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>

                </div>

                <div class="tab-pane fade show" id="seadoo-tab" role="tabpanel" aria-labelledby="seadoo-tab">

                    <div class="offset-sm-2 col-sm-8">
                        <h2 class="section-title">SeaDoos</h2>

                        @foreach($rentalDepartSeaDoo as $rental)
                            @if($rental->status == 'Checked In' && strpos($rental->activity_date, $today) !== false)
                                <div class="card mb-4 shadow card-od card-dark">
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
                                                            <h4 class="rental-time">
                                                                Checked in:
                                                                <span class="time">
                                                                  {{ $newLaunch = \Carbon\Carbon::parse($rental->check_in_time)->format('h:i A')}}
                                                                 </span>
                                                            </h4>
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
                                                    <h4 class="card-title-name text-center visible-xs">{{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    <h4 class="card-title text-center mt-2">
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
                                                    <h4 class="card-title-name hidden-xs">{{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    <a class="btn-tel rent-depart" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="tab-pane fade show" id="aluminum-tab" role="tabpanel" aria-labelledby="aluminum-tab">

                    <div class="offset-sm-2 col-sm-8">
                        <h2 class="section-title">Aluminum Boat</h2>

                        @foreach($rentalDepartAluminum as $rental)
                            @if($rental->status == 'Checked In' && strpos($rental->activity_date, $today) !== false)
                                <div class="card mb-4 shadow card-od card-dark">
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
                                                            <h4 class="rental-time">
                                                                Checked in:
                                                                <span class="time">
                                                                  {{ $newLaunch = \Carbon\Carbon::parse($rental->check_in_time)->format('h:i A')}}
                                                                 </span>
                                                            </h4>
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
                                                    <h4 class="card-title-name text-center visible-xs">{{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    <h4 class="card-title text-center mt-2">
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
                                                    <h4 class="card-title-name hidden-xs">{{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    <a class="btn-tel rent-depart" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="tab-pane fade show" id="sup-tab" role="tabpanel" aria-labelledby="sup-tab">

                    <div class="offset-sm-2 col-sm-8">
                        <h2 class="section-title">Stand Up Paddleboards</h2>

                        @foreach($rentalDepartSup as $rental)
                            @if($rental->status == 'Checked In' && strpos($rental->activity_date, $today) !== false)
                                <div class="card mb-4 shadow card-od card-dark">
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
                                                            <h4 class="rental-time">
                                                                Checked in:
                                                                <span class="time">
                                                                  {{ $newLaunch = \Carbon\Carbon::parse($rental->check_in_time)->format('h:i A')}}
                                                                 </span>
                                                            </h4>
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
                                                    <h4 class="card-title-name text-center visible-xs">{{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    <h4 class="card-title text-center mt-2">
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
                                                    <h4 class="card-title-name hidden-xs">{{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    <a class="btn-tel rent-depart" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="tab-pane fade show" id="kayak-tab" role="tabpanel" aria-labelledby="kayak-tab">

                    <div class="offset-sm-2 col-sm-8">
                        <h2 class="section-title">Kayaks</h2>

                        @foreach($rentalDepartKayak as $rental)
                            @if($rental->status == 'Checked In' && strpos($rental->activity_date, $today) !== false)
                                <div class="card mb-4 shadow card-od card-dark">
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
                                                            <h4 class="rental-time">
                                                                Checked in:
                                                                <span class="time">
                                                                  {{ $newLaunch = \Carbon\Carbon::parse($rental->check_in_time)->format('h:i A')}}
                                                                 </span>
                                                            </h4>
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
                                                    <h4 class="card-title-name text-center visible-xs">{{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    <h4 class="card-title text-center mt-2">
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
                                                    <h4 class="card-title-name hidden-xs">{{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    <a class="btn-tel rent-depart" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="tab-pane fade show" id="spyder-tab" role="tabpanel" aria-labelledby="spyder-tab">

                    <div class="offset-sm-2 col-sm-8">
                        <h2 class="section-title">Spyders</h2>

                        @foreach($rentalDepartSpyder as $rental)
                            @if($rental->status == 'Checked In' && strpos($rental->activity_date, $today) !== false)
                                <div class="card mb-4 shadow card-od card-dark">
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
                                                            <h4 class="rental-time">
                                                                Checked in:
                                                                <span class="time">
                                                                  {{ $newLaunch = \Carbon\Carbon::parse($rental->check_in_time)->format('h:i A')}}
                                                                 </span>
                                                            </h4>
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
                                                    <h4 class="card-title-name text-center visible-xs">{{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    <h4 class="card-title text-center mt-2">
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
                                                    <h4 class="card-title-name hidden-xs">{{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    <a class="btn-tel rent-depart" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>
                </div>

                <div class="tab-pane fade show" id="segway-tab" role="tabpanel" aria-labelledby="segway-tab">

                    <div class="offset-sm-2 col-sm-8">
                        <h2 class="section-title">Segways</h2>

                        @foreach($rentalDepartSegway as $rental)
                            @if($rental->status == 'Checked In' && strpos($rental->activity_date, $today) !== false)
                                <div class="card mb-4 shadow card-od card-dark">
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
                                                            <h4 class="rental-time">
                                                                Checked in:
                                                                <span class="time">
                                                                  {{ $newLaunch = \Carbon\Carbon::parse($rental->check_in_time)->format('h:i A')}}
                                                                 </span>
                                                            </h4>
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
                                                    <h4 class="card-title-name text-center visible-xs">{{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    <h4 class="card-title text-center mt-2">
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
                                                    <h4 class="card-title-name hidden-xs">{{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    <a class="btn-tel rent-depart" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="tab-pane fade show" id="skidoo-tab" role="tabpanel" aria-labelledby="skidoo-tab">

                    <div class="offset-sm-2 col-sm-8">
                        <h2 class="section-title">Snowmobiles</h2>

                        @foreach($rentalDepartSkiDoo as $rental)
                            @if($rental->status == 'Checked In' && strpos($rental->activity_date, $today) !== false)
                                <div class="card mb-4 shadow card-od card-dark">
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
                                                            <h4 class="rental-time">
                                                                Checked in:
                                                                <span class="time">
                                                                  {{ $newLaunch = \Carbon\Carbon::parse($rental->check_in_time)->format('h:i A')}}
                                                                 </span>
                                                            </h4>
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
                                                    <h4 class="card-title-name text-center visible-xs">{{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    <h4 class="card-title text-center mt-2">
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
                                                    <h4 class="card-title-name hidden-xs">{{$rental->last_name}}, {{$rental->first_name}}</h4>
                                                    <a class="btn-tel rent-depart" href="tel:{{$rental->phone = substr($rental->phone, 1)}}">{{$rental->phone = substr($rental->phone, 2)}}</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>

                </div>


            </div>


        </div>





    @endsection

    @section('sidebar')

    @foreach($rentalDepart as $rental)
        <!-- Launch Modal // Controller 2 -->
        <form method="post" action="{{route('dock.launchRental', $rental)}}">
            @csrf
            @method('PUT')

            <!-- Launch Modal - Step 1 - Staff Info -->
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
                                        @endif
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

                                                @if(strpos($rental->activity_item, 'Renegade') !== false)
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
                                                <label for="vehicle1">Select Second Vehicle</label>
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
                                                <label for="vehicle1">Select Second Vehicle</label>
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

                                                <label for="vehicle2">Select Third Vehicle</label>
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
                                                <label for="vehicle1">Select Second Vehicle</label>
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

                                                <label for="vehicle2">Select Third Vehicle</label>
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

                                                <label for="vehicle3">Select Fourth Vehicle</label>
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
                                                <label for="vehicle1">Select Second Vehicle</label>
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

                                                <label for="vehicle2">Select Third Vehicle</label>
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

                                                <label for="vehicle3">Select Fourth Vehicle</label>
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

                                                <label for="vehicle4">Select Fifth Vehicle</label>
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
                                                <label for="vehicle1">Select Second Vehicle</label>
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

                                                <label for="vehicle2">Select Third Vehicle</label>
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

                                                <label for="vehicle3">Select Fourth Vehicle</label>
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

                                                <label for="vehicle4">Select Fifth Vehicle</label>
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

                                                <label for="vehicle5">Select Sixth Vehicle</label>
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
                                                <label for="vehicle1">Select Second Vehicle</label>
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

                                                <label for="vehicle2">Select Third Vehicle</label>
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

                                                <label for="vehicle3">Select Fourth Vehicle</label>
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

                                                <label for="vehicle4">Select Fifth Vehicle</label>
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

                                                <label for="vehicle5">Select Sixth Vehicle</label>
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

                                                <label for="vehicle6">Select Seventh Vehicle</label>
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
                                                <label for="vehicle1">Select Second Vehicle</label>
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

                                                <label for="vehicle2">Select Third Vehicle</label>
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

                                                <label for="vehicle3">Select Fourth Vehicle</label>
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

                                                <label for="vehicle4">Select Fifth Vehicle</label>
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

                                                <label for="vehicle5">Select Sixth Vehicle</label>
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

                                                <label for="vehicle6">Select Seventh Vehicle</label>
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

                                                <label for="vehicle7">Select Eighth Vehicle</label>
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
                                                <label for="vehicle1">Select Second Vehicle</label>
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

                                                <label for="vehicle2">Select Third Vehicle</label>
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

                                                <label for="vehicle3">Select Fourth Vehicle</label>
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

                                                <label for="vehicle4">Select Fifth Vehicle</label>
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

                                                <label for="vehicle5">Select Sixth Vehicle</label>
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

                                                <label for="vehicle6">Select Seventh Vehicle</label>
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

                                                <label for="vehicle7">Select Eighth Vehicle</label>
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

                                                <label for="vehicle8">Select Ninth Vehicle</label>
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
                                                <label for="vehicle1">Select Second Vehicle</label>
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

                                                <label for="vehicle2">Select Third Vehicle</label>
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

                                                <label for="vehicle3">Select Fourth Vehicle</label>
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

                                                <label for="vehicle4">Select Fifth Vehicle</label>
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

                                                <label for="vehicle5">Select Sixth Vehicle</label>
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

                                                <label for="vehicle6">Select Seventh Vehicle</label>
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

                                                <label for="vehicle7">Select Eighth Vehicle</label>
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

                                                <label for="vehicle8">Select Ninth Vehicle</label>
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

                                                <label for="vehicle9">Select Tenth Vehicle</label>
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
                                <input type="hidden" value="On Water" name="status">


                                <div class="modal-footer">
                                    <input type="hidden" value="{{$dateNow}}" name="launched_time">
                                    <button class="btn btn-secondary btn-left" type="button" data-toggle="modal" data-dismiss="modal">CANCEL</button>
                                    <button class="btn btn-primary-red btn-modal" type="button" data-toggle="modal" data-dismiss="modal" data-target="#launchModal-2{{$rental->id}}">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- /Launch Modal - Step 1 - Staff Info -->

            <!-- Launch Modal - Step 2 - Customer Info -->
            <div class="modal fade" id="launchModal-2{{$rental->id}}" tabindex="-1" role="dialog" aria-labelledby="launchModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
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
                                    @endif
                                            </span>
                            </h3>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <form class="signature-pad-form" action="#" method="POST">
                                            <h1>Customer Agrees to: </h1>

                                            <ul class="customer-agree-list">
                                                <li class="mb-3">
                                                    <h5>
                                                        Pay a Damage Deposit which will be applied toward the repair or replacement of any
                                                        damaged or missing equipment. The customer understands they are fully responsible for
                                                        the full amount of damage done to the equipment even if it exceeds the deposit.
                                                    </h5>
                                                </li>
                                                <li class="mb-3">
                                                    <h5>
                                                        If there is any failure of equipment due to the customer negligence or error the full rental
                                                        fee will still be charged. We charge $135/hr for a Flooded Engine & $135/hr for a Search & Rescue.
                                                    </h5>
                                                </li>
                                                <li>
                                                    <h5>
                                                        Other fees: We charge $100 for breaking the slow no wake zone! We charge $135/hr for returning late or
                                                        after hours of the business - Ask our staff when you are due back!
                                                    </h5>
                                                </li>
                                            </ul>

                                            <p><b>Signature</b></p>
                                            <canvas height="40" width="300" class="signature-pad"></canvas>
                                            <p><a href="#" class="clear-button">Clear</a></p>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary-red" type="submit">SUBMIT</button>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <input type="hidden" value="On Water" name="status">
                                <input type="hidden" value="{{$dateNow}}" name="launched_time">
                                <button class="btn btn-secondary btn-left" type="button" data-toggle="modal" data-dismiss="modal">CANCEL</button>
                                <a href="#" class="btn btn-info" type="button" data-toggle="modal" data-dismiss="modal" data-target="#launchModal{{$rental->id}}">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Launch Modal - Step 2 - Customer Info -->



        </form>

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
                                        <img class="img-responsive" src="{{asset('storage/' . $rental->image_1)}}" height="150px" width="auto" alt="COC {{$rental->booking_id}}">
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

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Dock Modal -->
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
        <script src="{{asset('js/custom.js')}}"></script>
    @endsection

</x-dock-master>
