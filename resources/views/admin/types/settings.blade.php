<x-admin-master>

    @section('styles')

    @endsection



    @foreach($websites as $website)

        @section('page_title')
            <h1>{{$type->name}} Settings</h1>
        @endsection

        @section('browser_title')
            <title>{{$type->name}} Settings | {{$website->name}}</title>
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

            <h1><span class="text-primary">{{$type->name}}</span> Settings</h1>

            <!-- Rental Durations -->
            <div class="card shadow mb-3">
                <div class="card-header">
                    <h3 class="mb-0">{{$type->name}} Durations</h3>
                </div>
                <div class="card-body">


                    <div class="row">
                        <div class="col-sm-6">
                            <form action="{{route('type.duration', $type)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="name" class="form-control" name="name" id="name">
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
                            @foreach($durations as $duration)

                                <form method="post" action="{{route('attach.duration', $type)}}" class="
                                    @if($type->durations->contains($duration))
                                        hidden
                                    @endif
                                    ">
                                    @method('PUT')
                                    @csrf
                                    <input type="hidden" name="duration" value="{{$duration->id}}">

                                    <button class="card shadow mt-0 my-2 width-100" type="submit">
                                        <div class="card-body">
                                            <div class="row">
                                                <h1>{{$duration->name}}</h1>
                                            </div>
                                        </div>
                                    </button>


                                </form>

                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <!-- /Rental Durations -->


            <!-- Rental Pricing -->
            <div class="card shadow mb-3">
                <div class="card-header">
                    <h3 class="mb-0">{{$type->name}} Duration Pricing</h3>
                </div>
                <div class="card-body">
                        <div class="row">
                               @foreach($durations as $duration)
                                   @if($type->durations->contains($duration))
                                    <div class="card shadow mt-0 my-2 width-100">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h2 >{{$duration->name}}</h2>
                                                </div>

                                                <div class="col-sm-6">
                                                    @if($duration->has('prices'))

                                                        @foreach($duration->prices as $price)
                                                            @if($duration->id == $price->duration_id && $type->id == $price->type_id)
                                                                <form method="post" action="{{route('price.update', $price)}}"

                                                                >
                                                                    @method('PUT')
                                                                    @csrf
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <input type="number" min="0.00" step="0.01" name="amount" placeholder="$$" class="form-control" value="{{$price->amount}}" />
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <input type="text" class="hidden" name="duration_id" value="{{$duration->id}}">
                                                                            <input type="text" class="hidden" name="type_id" value="{{$type->id}}">
                                                                            <button class="btn btn-secondary" type="submit">Update Price</button>
                                                                        </div>
                                                                    </div>

                                                                </form>
                                                            @endif
                                                        @endforeach
                                                    @endif

                                                    <form method="post" action="{{route('price.store.attach', $duration)}}" class="
                                                         @if($duration->has('prices'))
                                                            @foreach($duration->prices as $price)
                                                                @if($duration->id == $price->duration_id && $type->id == $price->type_id)
                                                                    hidden
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                        ">
                                                        @method('PUT')
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <input type="number" min="0.00" step="0.50" name="amount" placeholder="Enter Price" class="form-control" />
                                                            </div>
                                                            <div class="col-6">
                                                                <input type="hidden" name="duration_id" value="{{$duration->id}}">
                                                                <input type="hidden" name="type_id" value="{{$type->id}}">
                                                                <button class="btn btn-primary" type="submit">Add Price</button>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>


                                                <div class="col-sm-1">
                                                    @foreach($prices as $price)
                                                        @if($price->duration_id == $duration->id && $price->type_id == $type->id)
                                                            <h3 class="mt-2">
                                                                ${{$price->amount}}
                                                            </h3>
                                                        @else
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   @endif
                               @endforeach
                        </div>

                </div>
            </div>
            <!-- /Rental Pricing -->


    @endsection


    @section('scripts')
            <script>

                // $(document).ready(function(){
                //     $('#v-pills-tab li:first-child button').tab('active') // Select first tab
                // });

                // $('#v-pills-tabContent li:first-child button').tab('active') // Select first tab
                $('#v-pills-tab li button').on('click', function (event) {
                    event.preventDefault()
                    $(this).toggleClass('show')
                    $(this).toggleClass('active')
                })
            </script>


    @endsection



</x-admin-master>
