{{--<x-admin-master>--}}

{{--    @section('styles')--}}

{{--    @endsection--}}


{{--    @section('browser_title')--}}
{{--        <title>Add Vehicle | SK Watercraft Rentals</title>--}}
{{--    @endsection--}}


{{--    @section('content')--}}
{{--        <h1>Add Vehicle</h1>--}}

{{--           <div class="card shadow">--}}
{{--               <div class="card-body">--}}
{{--                   <form method="post" action="{{route('vehicle.store')}}">--}}
{{--                       @csrf--}}
{{--                       @method('POST')--}}

{{--                       <div class="row">--}}
{{--                           <div class="col-sm-3 col-md-2">--}}
{{--                               <div class="form-group">--}}
{{--                                   <label for="internal_vehicle_id">Identifier</label>--}}
{{--                                   <input type="text" name="internal_vehicle_id" id="internal_vehicle_id" class="form-control @error('internal_vehicle_id') is-invalid @enderror" />--}}
{{--                                   <div>--}}
{{--                                       @error('internal_vehicle_id')--}}
{{--                                       <span><strong>{{$message}}</strong></span>--}}
{{--                                       @enderror--}}
{{--                                   </div>--}}
{{--                               </div>--}}
{{--                           </div>--}}
{{--                           <div class="col-sm-9 xol-md-10">--}}
{{--                               <div class="form-group">--}}
{{--                                   <label for="vehicle_type">Type</label>--}}
{{--                                   <select name="vehicle_type" id="vehicle_type" class="form-control @error('vehicle_type') is-invalid @enderror">--}}
{{--                                       <option value="SeaDoo">SeaDoo</option>--}}
{{--                                       <option value="Pontoon">Pontoon</option>--}}
{{--                                       <option value="Scarab">Scarab</option>--}}
{{--                                       <option value="Spyder">Spyder</option>--}}
{{--                                       <option value="SkiDoo">SkiDoo</option>--}}
{{--                                       <option value="Aluminum">Aluminum</option>--}}
{{--                                   </select>--}}
{{--                                   <div>--}}
{{--                                       @error('vehicle_type')--}}
{{--                                       <span><strong>{{$message}}</strong></span>--}}
{{--                                       @enderror--}}
{{--                                   </div>--}}
{{--                               </div>--}}
{{--                           </div>--}}
{{--                       </div>--}}

{{--                       <div class="row">--}}
{{--                           <div class="col-sm-3 col-md-2">--}}
{{--                               <div class="form-group">--}}
{{--                                   <label for="year">Year</label>--}}
{{--                                   <input type="text" name="year" id="year" class="form-control @error('year') is-invalid @enderror" />--}}
{{--                                   <div>--}}
{{--                                       @error('year')--}}
{{--                                       <span><strong>{{$message}}</strong></span>--}}
{{--                                       @enderror--}}
{{--                                   </div>--}}
{{--                               </div>--}}
{{--                           </div>--}}
{{--                           <div class="col-sm-9 col-md-10">--}}
{{--                               <div class="form-group">--}}
{{--                                   <label for="model">Model</label>--}}
{{--                                   <select name="model" id="model" class="form-control @error('model') is-invalid @enderror">--}}
{{--                                       <option value="GTX Pro">GTX Pro</option>--}}
{{--                                       <option value="Starcraft EX 22">Starcraft EX 22</option>--}}
{{--                                       <option value="Scarab 215">Scarab 215</option>--}}
{{--                                       <option value="Spyder RT-S">Spyder RT-S</option>--}}
{{--                                       <option value="Summit 154">Summit 154</option>--}}
{{--                                       <option value="BackCountry 154">BackCountry 154</option>--}}
{{--                                       <option value="Yamaha">Yamaha</option>--}}
{{--                                   </select>--}}
{{--                                   <div>--}}
{{--                                       @error('model')--}}
{{--                                       <span><strong>{{$message}}</strong></span>--}}
{{--                                       @enderror--}}
{{--                                   </div>--}}
{{--                               </div>--}}
{{--                           </div>--}}
{{--                       </div>--}}

{{--                       <div class="row">--}}
{{--                           <div class="col-sm-6">--}}
{{--                               <div class="form-group">--}}
{{--                                   <label for="vin">VIN</label>--}}
{{--                                   <input type="text" name="vin" id="vin" class="form-control @error('vin') is-invalid @enderror" />--}}
{{--                                   <div>--}}
{{--                                       @error('vin')--}}
{{--                                       <span><strong>{{$message}}</strong></span>--}}
{{--                                       @enderror--}}
{{--                                   </div>--}}
{{--                               </div>--}}
{{--                           </div>--}}
{{--                           <div class="col-sm-6">--}}
{{--                               <div class="form-group">--}}
{{--                                   <label for="location">Location</label>--}}
{{--                                   <select name="location" id="location" class="form-control @error('location') is-invalid @enderror">--}}
{{--                                       <option value="Dock">Dock</option>--}}
{{--                                       <option value="Island">Island</option>--}}
{{--                                       <option value="Service">Service</option>--}}
{{--                                       <option value="Zeta">Zeta</option>--}}
{{--                                       <option value="Incoming">Incoming</option>--}}
{{--                                   </select>--}}
{{--                                   <div>--}}
{{--                                       @error('location')--}}
{{--                                       <span><strong>{{$message}}</strong></span>--}}
{{--                                       @enderror--}}
{{--                                   </div>--}}
{{--                               </div>--}}
{{--                           </div>--}}
{{--                       </div>--}}




{{--                       --}}{{--                <div class="form-group">--}}
{{--                       --}}{{--                    <label for="or_number">OR Number</label>--}}
{{--                       --}}{{--                    <input type="text" name="or_number" id="or_number" class="form-control" />--}}
{{--                       --}}{{--                </div>--}}

{{--                       --}}{{--                <div class="form-group">--}}
{{--                       --}}{{--                    <label for="hours_updated">Hours Updated</label>--}}
{{--                       --}}{{--                    <input type="text" name="hours_updated" id="hours_updated" class="form-control" />--}}
{{--                       --}}{{--                </div>--}}

{{--                       --}}{{--                <div class="form-group">--}}
{{--                       --}}{{--                    <label for="current_hours">Current Hours</label>--}}
{{--                       --}}{{--                    <input type="text" name="current_hours" id="current_hours" class="form-control" />--}}
{{--                       --}}{{--                </div>--}}

{{--                       --}}{{--                <div class="form-group">--}}
{{--                       --}}{{--                    <label for="expected_hours">Expected Hours</label>--}}
{{--                       --}}{{--                    <input type="text" name="expected_hours" id="expected_hours" class="form-control" />--}}
{{--                       --}}{{--                </div>--}}

{{--                       --}}{{--                <div class="form-group">--}}
{{--                       --}}{{--                    <label for="remaining_hours">Remaining Hours</label>--}}
{{--                       --}}{{--                    <input type="text" name="remaining_hours" id="remaining_hours" class="form-control" />--}}
{{--                       --}}{{--                </div>--}}

{{--                       --}}{{--                <div class="form-group">--}}
{{--                       --}}{{--                    <label for="previous_hours">Previous Hours</label>--}}
{{--                       --}}{{--                    <input type="text" name="previous_hours" id="previous_hours" class="form-control" />--}}
{{--                       --}}{{--                </div>--}}

{{--                       --}}{{--                <div class="form-group">--}}
{{--                       --}}{{--                    <label for="last_serviced">Last Serviced</label>--}}
{{--                       --}}{{--                    <input type="text" name="last_serviced" id="last_serviced" class="form-control" />--}}
{{--                       --}}{{--                </div>--}}

{{--                       --}}{{--                <div class="form-group">--}}
{{--                       --}}{{--                    <label for="launched">Launched</label>--}}
{{--                       --}}{{--                    <input type="text" name="launched" id="launched" class="form-control" />--}}
{{--                       --}}{{--                </div>--}}







{{--                       <button type="submit" class="btn btn-primary">Create Vehicle</button>--}}
{{--                   </form>--}}
{{--               </div>--}}
{{--           </div>--}}



{{--    @endsection--}}


{{--    @section('scripts')--}}

{{--    @endsection--}}



{{--</x-admin-master>--}}
