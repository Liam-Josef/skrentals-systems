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
                        <h3>Add Duration</h3>
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
                        <h3>Select Duration</h3>
                        @foreach($durations as $duration)

                                <a href="#" class="card shadow mt-0 my-2 width-100
                                    @if($type->durations->contains($duration))
                                        hidden
                                    @endif
                                    " type="submit" data-toggle="modal" data-target="#durationModal{{$duration->id}}">
                                    <div class="card-body">
                                        <div class="row">
                                           <div class="col-4">
                                               <h3 class="mb-0">{{$duration->name}}</h3>
                                           </div>
                                            <div class="col-8">
                                                <span class="text-secondary">
                                                    @foreach($duration->availabils as $availabil)
                                                        Repeats
                                                        @if($availabil->repeat_day == '1')
                                                            DAILY
                                                        @elseif($availabil->repeat_day == '0')
                                                            WEEKLY
                                                        @endif
                                                        every {{$availabil->start_min_increm}} min
                                                        from {{\Carbon\Carbon::parse($availabil->start_time)->format('h:i A')}}
                                                        to {{\Carbon\Carbon::parse($availabil->end_time)->format('h:i A')}}
                                                        <br>
                                                    @endforeach
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            <!-- Duration Modal -->
                            <div class="modal fade mt-5" id="durationModal{{$duration->id}}" tabindex="-1" role="dialog" aria-labelledby="durationModal" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3>
                                                {{$duration->name}}
                                            </h3>
                                        </div>
                                        <div class="modal-body">
                                           <div class="row">
                                               <div class="col-sm-6">
                                                   <h4>Availabilities:</h4>
                                                   <ul>
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
                                                   <ul>
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
                                                    <a href="{{route('rental.duration_settings', $duration)}}" class="btn btn-outline-secondary width-100">Edit Duration</a>
                                                </div>
                                                <div class="col-sm-4">
                                                    <form method="post" action="{{route('attach.duration', $type)}}" class="
                                                        @if($type->durations->contains($duration))
                                                            hidden
                                                        @endif
                                                        ">
                                                        @method('PUT')
                                                        @csrf
                                                        <input type="hidden" name="duration" value="{{$duration->id}}">

                                                        <button class="btn btn-primary" type="submit">
                                                            Attach Duration to {{$type->name}}
                                                        </button>


                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Duration Modal -->
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

                                        <div class="col-sm-4">
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

                                        <div class="col-sm-4">
                                            @if($duration->has('prices'))

                                                @foreach($duration->prices as $price)
                                                    @if($duration->id == $price->duration_id && $type->id == $price->type_id)
                                                        <form method="post" action="{{route('price.note', $price)}}">
                                                            @method('PUT')
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <input type="text" name="notes" placeholder="Add price note..." class="form-control" value="{{$price->notes}}" />
                                                                </div>
                                                                <div class="col-6">
                                                                    @if($price->notes != '')
                                                                        <button class="btn btn-outline-secondary" type="submit">Update Note</button>
                                                                    @else
                                                                        <button class="btn btn-outline-secondary" type="submit">Add Note</button>
                                                                    @endif
                                                                </div>
                                                            </div>

                                                        </form>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </div>


                                        <div class="col-sm-1">
                                            @foreach($prices as $price)
                                                @if($price->duration_id == $duration->id && $price->type_id == $type->id)
                                                    <h3 class="mt-2 text-primary">
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

        <!-- Rental Type Info -->
        <div class="card shadow mb-3">
            <div class="card-header">
                <h3 class="mb-0">{{$type->name}} Info</h3>
            </div>
            <div class="card-body">


                <div class="row">
                    <form action="{{route('type.update', $type)}}" method="post" enctype="multipart/form-data" class="width-100">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="name" id="name" value="{{$type->name}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <input type="text" class="form-control" name="description" id="description" value="{{$type->description}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="booking_buffer_hr">Hour Buffer</label>
                                            <div class="row">
                                                <div class="col-9 pr-0">
                                                    <input type="number" class="form-control" name="booking_buffer_hr" id="booking_buffer_hr" value="{{$type->booking_buffer_hr}}">
                                                </div>
                                                <div class="col-3">
                                                    <h3>hrs</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="quantity">Quantity</label>
                                            <input type="number" class="form-control" name="quantity" id="quantity" value="{{$type->quantity}}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="capacity_count">Capacity Count</label>
                                            <div class="row">
                                                <div class="col-9 pr-0">
                                                    <input type="number" class="form-control" name="capacity_count" id="capacity_count" value="{{$type->capacity_count}}">
                                                </div>
                                                <div class="col-3">
                                                    <h3>lbs</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="weight_capacity">Weight Capacity</label>
                                            <div class="row">
                                                <div class="col-9 pr-0">
                                                    <input type="number" class="form-control" name="weight_capacity" id="weight_capacity" value="{{$type->weight_capacity}}">
                                                </div>
                                                <div class="col-3">
                                                    <h3>lbs</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="image">{{$type->name}} Image</label>
                                            <input type="file" class="form-control-file" name="image">
                                        </div>
                                        <div class="col-6">
                                            <img class="img-center mt-3" src="{{asset('storage/' . $type->image)}}" width="60%" height="auto" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="img_alt">Image Alt Text</label>
                                    <input type="text" class="form-control" name="img_alt" value="{{$type->img_alt}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h3 class="mt-4">Additional Info</h3>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="cancel_policy">Cancellation Policy</label>
                                    <textarea name="cancel_policy" id="cancel_policy" cols="30" rows="5">{{$type->cancel_policy}}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mt-3">
                                    <label for="pickup_details">Pickup Details</label>
                                    <input type="text" class="form-control" name="pickup_details" id="pickup_details" value="{{$type->pickup_details}}">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="pickup_address">Pickup Address</label>
                                    <input type="text" class="form-control" name="pickup_address" id="pickup_address" value="{{$type->pickup_address}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="what_to_know">What to Know</label>
                                    <textarea name="what_to_know" id="what_to_know" cols="30" rows="5">{{$type->what_to_know}}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="what_to_bring">What to Bring</label>
                                    <textarea name="what_to_bring" id="what_to_bring" cols="30" rows="5">{{$type->what_to_bring}}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="suggested_attire">Suggested Attire</label>
                                    <textarea name="suggested_attire" id="suggested_attire" cols="30" rows="2">{{$type->suggested_attire}}</textarea>
                                </div>
                            </div>


                        </div>


                        <div class="row">
                            <div class="col-6">
                                <label for="is_active">Active </label>
                                <select name="is_active" id="is_active">
                                    <option value="1"
                                        @if($type->is_active == '1')
                                            selected
                                        @endif
                                    >Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <input type="text" class="hidden" name="archive" value="0">
                                <button class="btn btn-primary btn-right" type="submit">Update</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- /Rental Type Info -->



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
