<x-admin-master>

    @section('styles')

    @endsection


    @foreach($websites as $website)

    @section('page_title')
        <h1>Rental Settings</h1>
    @endsection

    @section('browser_title')
        <title>Rental Settings | {{$website->name}}</title>
    @endsection

    @section('logo-square')
        <img src="{{asset('storage/'. $website->logo_square_1)}}" alt="{{$website->name}} Logo" height="30px" width="auto">
    @endsection

    @section('logo-horizontal')
        <img src="{{asset('storage/'. $website->logo_horizontal_1)}}" alt="{{$website->name}} Logo" height="30px" width="auto">
    @endsection

    @section('logo_horizontal_1')
        {{asset('storage/'. $website->logo_horizontal_1)}}
    @endsection
    @section('logo_horizontal_2')
        {{asset('storage/'. $website->logo_horizontal_2)}}
    @endsection
    @section('logo_square_1')
        {{asset('storage/'. $website->logo_square_1)}}
    @endsection
    @section('logo_square_2')
        {{asset('storage/'. $website->logo_square_2)}}
    @endsection
    @section('favicon')
        {{asset('storage/'. $website->favicon)}}
    @endsection

    @section('analytic_tag')
        {{$website->analytic_link_1}}
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
                    {{--                    @if($website->analytic_link_1 != '')--}}
                    {{--                        <a class="collapse-item" href="{{$website->analytic_link_1}}" target="_blank">Analytics <span class="text-primary">Main</span></a>--}}
                    {{--                    @endif--}}
                    @if($website->analytic_link_2 != '')
                        <a class="collapse-item" href="{{$website->analytic_link_2}}" target="_blank"><span class="text-primary">Reports</span> Snapshot</a>
                    @endif
                    @if($website->analytic_link_3 != '')
                        <a class="collapse-item" href="{{$website->analytic_link_3}}" target="_blank"><span class="text-primary">Acquisition</span> Overview</a>
                    @endif
                    @if($website->analytic_link_4 != '')
                        <a class="collapse-item" href="{{$website->analytic_link_4}}" target="_blank"><span class="text-primary">Engagement</span> Overview</a>
                    @endif
                    @if($website->analytic_link_5 != '')
                        <a class="collapse-item" href="{{$website->analytic_link_5}}" target="_blank"><span class="text-primary">Demographics</span> Overview</a>
                    @endif
                </div>
            </div>
        </li>
    @endsection

    @endforeach


    @section('content')

        <h1>Duration: <span class="text-primary">{{$duration->name}}</span> Settings</h1>

        <!-- Rental Durations -->
        <div class="card shadow mb-3">
            <div class="card-header">
                <h3 class="mb-0">Rental Duration Settings</h3>
            </div>
            <div class="card-body">

                <div class="row">
                    <form action="{{route('duration.update', $duration)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="name" class="">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{$duration->name}}" aria-label="duration_name">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="hour" class="">Hours</label>
                                        <input type="number" class="form-control" name="hour" value="{{$duration->hour}}">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="day" class="">Days</label>
                                        <input type="number" class="form-control" name="day" value="{{$duration->day}}">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="night" class="">Nights</label>
                                        <input type="number" class="form-control" name="night" value="{{$duration->night}}">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="form-group">
                                        <label for="before_hour" class="">Buffer Before Hours</label>
                                        <input type="number" class="form-control" name="before_hour" value="{{$duration->before_hour}}">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="form-group">
                                        <label for="before_minute" class="">Buffer Before Minutes</label>
                                        <input type="number" class="form-control" name="before_minute" value="{{$duration->before_minute}}">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="form-group">
                                        <label for="after_hour" class="">Buffer After Hours</label>
                                        <input type="number" class="form-control" name="after_hour" value="{{$duration->after_hour}}">
                                    </div>
                                </div>
                                <div class="col-6 col-sm-3">
                                    <div class="form-group">
                                        <label for="after_minute" class="">Buffer After Minutes</label>
                                        <input type="number" class="form-control" name="after_minute" value="{{$duration->after_minute}}">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancel </button>
                            <button class="btn btn-primary" type="submit">Update </button>


                        </div>
                    </form>
                </div>

            </div>
            <div class="card-footer">

            </div>
        </div>
        <!-- /Rental Durations -->

        <!-- Rental Duration Availability -->


        <div class="row">
            <div class="col-sm-4">
                <div class="card shadow mb-3">
                    <div class="card-header">
                        <h3 class="mb-0"><span>{{$duration->name}}</span> Availabilies</h3>
                    </div>
                    <div class="card-body">
                       @foreach($availabils as $availabil)

                                @if(!$duration->availabils->contains($availabil))
{{--                                    <h5 class="text-center">--}}
{{--                                        No Availability has been attached to <strong>{{$duration->name}}</strong>--}}
{{--                                    </h5>--}}
                                @else
                                    <div class="card shadow mb-3">
                                        <a href="#" class="card-body" data-toggle="modal" data-target="#availabilModal{{$availabil->id}}">
                                           <h4 class="text-center text-secondary-dk">
                                               Repeats
                                               @if($availabil->repeat_day == '1')
                                                   DAILY
                                               @elseif($availabil->repeat_day == '0')
                                                   WEEKLY
                                               @endif
                                               every {{$availabil->start_min_increm}} min
                                               <br>
                                               from {{\Carbon\Carbon::parse($availabil->start_time)->format('h:i A')}}
                                               to {{\Carbon\Carbon::parse($availabil->end_time)->format('h:i A')}}
                                           </h4>
                                        </a>
                                    </div>

                                @endif

                                <!-- Edit Availability Modal -->
                                <div class="modal fade mt-5" id="availabilModal{{$availabil->id}}" tabindex="-1" role="dialog" aria-labelledby="availabilModal" aria-hidden="true">
                                    <div class="modal-dialog modal-md" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3>Edit:
                                                    <span>
                                                         Repeats
                                                        @if($availabil->repeat_day == '1')
                                                            DAILY
                                                        @elseif($availabil->repeat_day == '0')
                                                            WEEKLY
                                                        @endif
                                                           every {{$availabil->start_min_increm}} min
                                                           from {{\Carbon\Carbon::parse($availabil->start_time)->format('h:i A')}}
                                                           to {{\Carbon\Carbon::parse($availabil->end_time)->format('h:i A')}}
                                                    </span>
                                                </h3>
                                            </div>
                                            <form action="{{route('availabil.update', $availabil)}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h4 class="text-secondary">
                                                                <em>This will effect all durations with this availability</em>
                                                            </h4>
                                                        </div>
                                                    </div>

                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="form-group mt-2">
                                                                    <label for="start_min_increm">Start Increments (Min)</label>
                                                                    <br>
                                                                    <select name="start_min_increm" id="start_min_increm" class="form-control">
                                                                        <option value="15"
                                                                            @if($availabil->start_min_increm == '15')
                                                                                selected
                                                                            @endif
                                                                        >15 Minutes</option>
                                                                        <option value="30"
                                                                            @if($availabil->start_min_increm == '30')
                                                                                selected
                                                                            @endif
                                                                        >30 Minutes</option>
                                                                        <option value="60"
                                                                            @if($availabil->start_min_increm == '60')
                                                                                selected
                                                                            @endif
                                                                        >60 Minutes</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group mb-0">
                                                                    <div class="row">
                                                                        <div class="col-3">
                                                                            <input type="radio" class="form-control" name="repeat_day" id="repeat_day" value="1"
                                                                               @if($availabil->repeat_day == '1')
                                                                                   checked
                                                                               @endif
                                                                            >
                                                                        </div>
                                                                        <div class="col-9">
                                                                            <label for="repeat_day">
                                                                                <h5 class="mt-2">Repeat Daily</h5>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-3">
                                                                            <input type="radio" class="form-control" name="repeat_day" id="repeat_day" value="0"
                                                                               @if($availabil->repeat_day == '0')
                                                                                   checked
                                                                               @endif
                                                                            >
                                                                        </div>
                                                                        <div class="col-9">
                                                                            <label for="repeat_day">
                                                                                <h5 class="mt-2">Repeat Weekly <br>
                                                                                    <span class="text-secondary">
                                                                                        <em>(in development)</em>
                                                                                    </span>
                                                                                </h5>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <label for="start_time">Between</label>
                                                                <input type="time" class="form-control" name="start_time" value="{{$availabil->start_time}}">
                                                            </div>
                                                            <div class="col-6">
                                                                <label for="end_time">And</label>
                                                                <input type="time" class="form-control" name="end_time" value="{{$availabil->end_time}}">
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                   <div class="row mt-3 width-100">
                                                       <div class="col-sm-4">
                                                           <button class="btn btn-secondary width-100" type="button" data-dismiss="modal">CANCEL</button>
                                                       </div>
                                                       <div class="col-sm-4">
                                                           @if($duration->availabils->contains($availabil))
                                                               <a href="#" class="btn btn-outline-secondary width-100" data-dismiss="modal" data-toggle="modal" data-target="#availabilDetach{{$availabil->id}}">Detach</a>
                                                           @else
                                                               &nbsp;

                                                           @endif
                                                       </div>
                                                       <div class="col-sm-4">
                                                           <button class="btn btn-primary width-100 btn-right" type="submit">Update</button>
                                                       </div>
                                                   </div>
                                               </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Edit Availability Modal -->

                                <!-- Availability Detach Confirmation Modal -->
                                <div class="modal fade mt-5" id="availabilDetach{{$availabil->id}}" tabindex="-1" role="dialog" aria-labelledby="availabilDetach" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3>
                                                    Detach from
                                                    <span>{{$duration->name}}</span>
                                                </h3>
                                            </div>
                                            <div class="modal-body">
                                                <h4>Are you sure you want to detach:
                                                    <span class="text-white">
                                                         Repeats
                                                        @if($availabil->repeat_day == '1')
                                                                    DAILY
                                                                @elseif($availabil->repeat_day == '0')
                                                                    WEEKLY
                                                                @endif
                                                           every {{$availabil->start_min_increm}} min
                                                           from {{\Carbon\Carbon::parse($availabil->start_time)->format('h:i A')}}
                                                           to {{\Carbon\Carbon::parse($availabil->end_time)->format('h:i A')}}
                                                    </span>
                                                </h4>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="row mt-3 width-100">
                                                    <div class="col-6">
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                                                    </div>
                                                    <div class="col-6">
                                                        <form action="{{route('duration.detachAvail', $duration)}}" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="text" class="hidden" name="availabil_id" value="{{$availabil->id}}">
                                                            <button class="btn btn-primary width-100 btn-right" type="submit">Detach</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Availability Detach Confirmation Modal -->

                        @endforeach


                    </div>
                </div>
            </div>
            <div class="col-sm-8">

                <div class="row">
                    <div class="col-sm-6">
                        <div class="card shadow mb-3">
                            <div class="card-header">
                                <h3 class="mb-0">Add Availability</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{route('availabil.store', $duration)}}" method="post" enctype="multipart/form-data" id="addAvail">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group mt-2">
                                                <label for="start_min_increm">Start Increments (Min)</label>
                                                <br>
                                                <select name="start_min_increm" id="start_min_increm" class="form-control">
                                                    <option value="15" default>15 Minutes</option>
                                                    <option value="30">30 Minutes</option>
                                                    <option value="60">60 Minutes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                           <div class="form-group mb-0">
                                               <div class="row">
                                                   <div class="col-3">
                                                       <input type="radio" class="form-control" name="repeat_day" id="repeat_day" value="1" checked>
                                                   </div>
                                                   <div class="col-9">
                                                       <label for="repeat_day">
                                                           <h5 class="mt-2">Repeat Daily</h5>
                                                       </label>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="form-group">
                                               <div class="row">
                                                   <div class="col-3">
                                                       <input type="radio" class="form-control" name="repeat_day" id="drepeat_dayay" value="0">
                                                   </div>
                                                   <div class="col-9">
                                                       <label for="repeat_day">
                                                           <h5 class="mt-2">Repeat Weekly</h5>
                                                       </label>
                                                   </div>
                                               </div>
                                           </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="start_time">Between</label>
                                            <input type="time" class="form-control" name="start_time">
                                        </div>
                                        <div class="col-6">
                                            <label for="end_time">And</label>
                                            <input type="time" class="form-control" name="end_time">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <input type="text" class="hidden" name="duration_id" value="{{$duration->id}}">
                                            <input type="text" class="hidden" name="repeat_week" value="0">
                                            <button class="btn btn-primary btn-right" type="submit">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card shadow mb-3">
                            <div class="card-header">
                                <h3 class="mb-0">Attach Availability</h3>
                            </div>
                            <div class="card-body">
                                @foreach($availabils as $availabil)

                                    @if($duration->availabils->contains($availabil))
{{--                                       <h5 class="text-center">--}}
{{--                                           All Pre-Made Availabilities have been attached to <strong>{{$duration->name}}</strong>--}}
{{--                                       </h5>--}}
                                    @else
                                            <a href="#" class="btn btn-outline-primary-black width-100 mb-3" data-toggle="modal" data-target="#availabilChooseModal{{$availabil->id}}">
                                                Repeats
                                                @if($availabil->repeat_day == '1')
                                                    DAILY
                                                @elseif($availabil->repeat_day == '0')
                                                    WEEKLY
                                                @endif
                                                every {{$availabil->start_min_increm}} min
                                                <br>
                                                from {{\Carbon\Carbon::parse($availabil->start_time)->format('h:i A')}}
                                                to {{\Carbon\Carbon::parse($availabil->end_time)->format('h:i A')}}
                                                <br>
                                                @foreach($availabil->durations as $availabil_duration)
                                                    <span class="text-secondary">{{$availabil_duration->name}}</span>  &nbsp;
                                                @endforeach
                                            </a>

                                    @endif

                                    <!-- Availability Attach Confirmation Modal -->
                                    <div class="modal fade mt-5" id="availabilChooseModal{{$availabil->id}}" tabindex="-1" role="dialog" aria-labelledby="availabilModal" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3>
                                                        Repeats
                                                        <span>
                                                                        @if($availabil->repeat_day == '1')
                                                                DAILY
                                                            @elseif($availabil->repeat_day == '0')
                                                                WEEKLY
                                                            @endif
                                                                        every {{$availabil->start_min_increm}} min
                                                                        from {{\Carbon\Carbon::parse($availabil->start_time)->format('h:i A')}}
                                                                        to {{\Carbon\Carbon::parse($availabil->end_time)->format('h:i A')}}
                                                        </span>
                                                    </h3>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <h4>Availabilities:</h4>
                                                            <ul class="text-white">
                                                                @foreach($duration->availabils as $availabil)
                                                                    <li>
                                                                        Repeats
                                                                        @if($availabil->repeat_day == '1')
                                                                            DAILY
                                                                        @elseif($availabil->repeat_day == '0')
                                                                            WEEKLY
                                                                        @endif
                                                                        every {{$availabil->start_min_increm}} min
                                                                        from {{\Carbon\Carbon::parse($availabil->start_time)->format('h:i A')}}
                                                                        to {{\Carbon\Carbon::parse($availabil->end_time)->format('h:i A')}}
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h4>Attached to:</h4>
                                                            <ul class="text-white">
                                                                @foreach($duration->types as $duration_type)
                                                                    <li>
                                                                        {{$duration_type->name}}
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="row mt-3 width-100">
                                                        <div class="col-sm-4">
                                                            <button class="btn btn-secondary width-100" type="button" data-dismiss="modal">CANCEL</button>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <a href="#" class="btn btn-outline-secondary width-100" data-dismiss="modal" data-toggle="modal" data-target="#availabilModal{{$availabil->id}}">Edit Availability</a>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <form action="{{route('duration.attachAvail', $duration)}}" method="post">
                                                                @csrf
                                                                @method("PUT")
                                                                <input type="text" class="hidden" name="availabil_id" value="{{$availabil->id}}">
                                                                <button class="btn btn-primary width-100 mb-3" type="submit">
                                                                    Attach to {{$duration->name}}
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Availability Attach Confirmation Modal -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- /Rental Duration Availability -->

    @endsection


    @section('scripts')


    @endsection



</x-admin-master>
