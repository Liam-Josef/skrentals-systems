<x-dock-master>

    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection

        @foreach($applications as $application)
        @section('page_title')
            <title>Hour Counts</title>
        @endsection

        @section('browser_title')
            <title>Hour Counts | {{$application->name}}</title>
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
{{--        @foreach($posts as $post)--}}
{{--            <div class="card my-4 shadow">--}}
{{--                <h5 class="card-header text-center">{{$post->title}}</h5>--}}
{{--                <div class="card-body">--}}
{{--                    {{Str::limit($post->body, '200', '...')}}--}}
{{--                </div>--}}
{{--                <a href="{{route('post', $post->id)}}" class="btn btn-secondary">Read More</a>--}}
{{--            </div>--}}
{{--        @endforeach--}}
    @endsection


    @section('content')
        <h1>
            @if(auth()->user()->userHasRole('Dock'))
                <button type="button" class="btn btn-dk-sidebar" data-toggle="modal" data-target="#dockSidebar">
                    <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
                </button>
            @endif
                Hour Counts
        </h1>



       <div class="row">
           <div class="col-12 col-sm-1"></div>
           <div class="col-12 col-sm-10">
               <div class="card shadow card-dark mb-4">
                   <div class="card-header">
                       <!-- Departing Tablist -->
                       <ul class="nav nav-tabs nav-justified dock-depart" id="runnerView" role="tablist">
                           <li class="nav-item mb-0">
                               <a class="nav-link active" id="view-pontoon-tab" data-toggle="tab" href="#pontoon-tab" role="tab" aria-controls="pontoon-tab"
                                  aria-selected="true">
                                   Pont<span class="hidden-xs-inline">oon</span>
                               </a>
                           </li>
                           <li class="nav-item mb-0">
                               <a class="nav-link" id="view-scarab-tab" data-toggle="tab" href="#scarab-tab" role="tab" aria-controls="scarab-tab"
                                  aria-selected="true">
                                   Scarab
                               </a>
                           </li>
                           <li class="nav-item mb-0">
                               <a class="nav-link" id="view-seadoo-tab" data-toggle="tab" href="#seadoo-tab" role="tab" aria-controls="seadoo-tab"
                                  aria-selected="true">
                                   SeaDoo
                               </a>
                           </li>
                       </ul>
                   </div>
                   <div class="card-body">
                       <div class="tab-content" id="myTabContent">
                           <div class="tab-pane fade show" id="scarab-tab" role="tabpanel" aria-labelledby="scarab-tab">

                               @foreach($vehicleScarab as $vehicle)
                                   <form method="post" action="{{route('vehicle.updateHours', $vehicle)}}">
                                       @csrf
                                       @method('PUT')
                                       <div class="row">
                                           <div class="col-sm-1"></div>
                                           <div class="col-sm-5"><h3 class="text-white text-center mt-1">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</h3></div>
                                           <span class="hidden">{{$updatedDate = \Carbon\Carbon::now()->addDay()}}</span>
                                           @if(strpos($vehicle->hours_updated, $today) !== false)
                                                <div class="col-sm-3">
                                                    <h3 class="mt-1">  {{$vehicle->current_hours}}</h3>
                                                </div>
                                               @else
                                               <div class="col-6 col-sm-1">
                                                   <input type="text" class="form-control" name="current_hours" value="{{$vehicle->current_hours}}" />
                                                   <input type="hidden" class="form-control" name="hours_updated" value="{{$dateNow}}" />
                                                   <input type="hidden" class="form-control" name="id" value="{{$vehicle->id}}" />
                                               </div>
                                               <div class="col-6 col-sm-2">
                                                   <button type="submit" class="btn btn-primary-red">Update</button>
                                               </div>
                                           @endif

                                           <div class="col-sm-2">
                                               @if($vehicle->launched == '1')
                                                   <h4 class="mt-2">( On Rental )</h4>
                                               @endif
                                           </div>
                                           <hr class="rounded mt-3" />
                                       </div>
                                   </form>
                               @endforeach

                           </div>
                           <div class="tab-pane fade show active" id="pontoon-tab" role="tabpanel" aria-labelledby="pontoon-tab">
                               @foreach($vehiclePontoon as $vehicle)
                                    <form method="post" action="{{route('vehicle.updateHours', $vehicle)}}">
                                   @csrf
                                   @method('PUT')
                                   <div class="row">
                                       <div class="col-sm-1"></div>
                                       <div class="col-sm-5"><h3 class="text-white text-center mt-1">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</h3></div>
                                       <span class="hidden">{{$updatedDate = \Carbon\Carbon::now()->addDay()}}</span>
                                       @if(strpos($vehicle->hours_updated, $today) !== false)
                                           <div class="col-sm-3">
                                               <h3 class="mt-1">  {{$vehicle->current_hours}}</h3>
                                           </div>
                                       @else
                                           <div class="col-6 col-sm-1">
                                               <input type="text" class="form-control" name="current_hours" value="{{$vehicle->current_hours}}" />
                                               <input type="hidden" class="form-control" name="hours_updated" value="{{Carbon\Carbon::now('PST')}}" />
                                               <input type="hidden" class="form-control" name="id" value="{{$vehicle->id}}" />
                                           </div>
                                           <div class="col-6 col-sm-2">
                                               <button type="submit" class="btn btn-primary-red">Update</button>
                                           </div>
                                       @endif

                                       <div class="col-sm-2">
                                           @if($vehicle->launched == '1')
                                               <h4 class="mt-2">( On Rental )</h4>
                                           @endif
                                       </div>
                                       <hr class="rounded mt-3" />
                                   </div>
                               </form>
                               @endforeach
                           </div>
                           <div class="tab-pane fade show" id="seadoo-tab" role="tabpanel" aria-labelledby="seadoo-tab">
                               @foreach($vehicleSeaDoo as $vehicle)
                                    <form method="post" action="{{route('vehicle.updateHours', $vehicle)}}">
                                   @csrf
                                   @method('PUT')
                                   <div class="row">
                                       <div class="col-sm-1"></div>
                                       <div class="col-sm-5"><h3 class="text-white text-center mt-1">{{$vehicle->vehicle_type}} {{$vehicle->internal_vehicle_id}}</h3></div>
                                       <span class="hidden">{{$updatedDate = \Carbon\Carbon::now()->addDay()}}</span>
                                       @if(strpos($vehicle->hours_updated, $today) !== false)
                                           <div class="col-sm-3">
                                               <h3 class="mt-1">  {{$vehicle->current_hours}}</h3>
                                           </div>
                                       @else
                                           <div class="col-6 col-sm-1">
                                               <input type="text" class="form-control" name="current_hours" value="{{$vehicle->current_hours}}" />
                                               <input type="hidden" class="form-control" name="hours_updated" value="{{Carbon\Carbon::now('PST')}}" />
                                               <input type="hidden" class="form-control" name="id" value="{{$vehicle->id}}" />
                                           </div>
                                           <div class="col-6 col-sm-2">
                                               <button type="submit" class="btn btn-primary-red">Update</button>
                                           </div>
                                       @endif

                                       <div class="col-sm-2">
                                           @if($vehicle->launched == '1')
                                               <h4 class="mt-2">( On Rental )</h4>
                                           @endif
                                       </div>
                                       <hr class="rounded mt-3" />
                                   </div>
                               </form>
                               @endforeach
                           </div>
                       </div>
                   </div>
               </div>
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
