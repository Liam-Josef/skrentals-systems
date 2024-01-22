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

        <h1><span class="text-primary">Rental</span> Settings</h1>


        <!-- Rental Types -->
        <div class="card shadow mb-3">
                <div class="card-header">
                    <h3 class="mb-0">Rental Types</h3>
                </div>
                <div class="card-body">


                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Add Rental Type</h3>
                            <form action="{{route('type.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="name" class="form-control" name="name" value="{{$website->name}}" aria-label="type_name">
                                </div>
                                <div class="form-group">
                                    <label for="is_active">Is Active</label>
                                    <select name="is_active" id="is_active">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary btn-right" type="submit">Add</button>
                            </form>
                        </div>
                        <div class="col-sm-6">
                            <h3>Select for Settings</h3>
                            @foreach($types as $type)
                                <div class="card shadow mt-0 my-2">
                                    <a href="{{route('type.settings', $type->id)}}" class="card-link nav-link">
                                        <div class="card-body p-2">
                                            <div class="row">
                                                <h3 class="mb-0">{{$type->name}}</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="card-footer">

                </div>
            </div>
        <!-- /Rental Types -->

        <!-- Rental Durations -->
        <div class="card shadow mb-3">
            <div class="card-header">
                <h3 class="mb-0">Rental Duration Settings</h3>
            </div>
            <div class="card-body">


                <div class="row">
                    <div class="col-sm-6">
                        <h3>Add Duration</h3>
                        <form action="{{route('duration.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="name" class="form-control" name="name">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="hour">Hour Duration</label>
                                        <input type="number" class="form-control" name="hour">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group mt-4">
                                        <label for="is_active">Is Active</label>
                                        <select name="is_active" id="is_active">
                                            <option value="1" selected>Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-right" type="submit">Add</button>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <h3>Edit Duration</h3>
                        @foreach($durations as $duration)
                            <div class="card shadow mt-0 my-2">
                                <a href="{{route('rental.duration_settings', $duration)}}" class="card-link nav-link ">
                                    <div class="card-body">
                                        <div class="row">
                                            <h2 class="mb-0">{{$duration->name}}</h2>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="card-footer">

            </div>
        </div>
        <!-- /Rental Durations -->
    @endsection


    @section('scripts')

    @endsection


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
                    <div class="col-6">
                        <div class="form-group">
                            <label for="before_hour" class="">Buffer Before Hours</label>
                            <input type="number" class="form-control" name="before_hour" value="{{$duration->before_hour}}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="before_minute" class="">Buffer Before Minutes</label>
                            <input type="number" class="form-control" name="before_minute" value="{{$duration->before_minute}}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="after_hour" class="">Buffer After Hours</label>
                            <input type="number" class="form-control" name="after_hour" value="{{$duration->after_hour}}">
                        </div>
                    </div>
                    <div class="col-6">
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
</x-admin-master>
