<x-office-master>

    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection

    @foreach($applications as $application)

    @section('browser_title')
        <title>Reschedule {{$reschedule->last}} {{$reschedule->first}} | {{$application->name}}</title>
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


        @section('page_title')
            <div class="row">
                <div class="col-sm-2">
                    <form action="{{route('reschedule.reschedule_cancel', $reschedule->id)}}" method="post">
                        @csrf
                        @method('PUT')

                        <input type="hidden" value="{{$reschedule->id}}" name="reschedule_id">

                        <button class="btn btn-primary-red mt-2" type="submit">
                            <h3 class="mt-2">
                                <i class="fa fa-chevron-circle-left"></i> Schedule
                            </h3>
                        </button>
                    </form>
                </div>
                <div class="col-sm-10">
                    <h1>Reschedule: <span>

                <small>{{$reschedule->quantity}} x</small>
                        @foreach($durations as $duration)
                                @if($duration->id == $reschedule->orig_duration_id)
                                    {{$duration->abbreviation}}
                                @endif
                            @endforeach
                            @foreach($types as $type)
                                {{$type->name}}
                            @endforeach
            | @foreach($bookings as $booking)
                                {{$booking->first}} {{$booking->last}}</span>
                        @endforeach
                    </h1>
                </div>
            </div>
        @endsection

        @section('content')
        <!-- RENTAL INFORMATION -->
            @foreach($bookings as $booking)
                <div class="card mb-4 my-3 shadow">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6">
                                <h3 class="card-title">Rental Information  </h3>
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <h3 class="card-title text-right status">{{$booking->status}} </h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <!-- Rental Information -->
                        <div class="card-rental-info">
                            <div class="row">
                                <!-- Renter Info -->
                                <div class="col-sm-4">
                                    <div class="area-box">
                                        <!-- Item -->
                                        <div class="row">
                                            <div class="col-sm-4 text-right">
                                                <p class="item-title">Vehicle:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item">
                                                    @foreach($types as $type)
                                                        {{$type->name}}
                                                    @endforeach
                                                </p>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                        <div class="row">
                                            <div class="col-sm-4 text-right">
                                                <p class="item-title">Rental Date:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item">{{\Carbon\Carbon::parse($booking->activity_date_start)->format('M d, Y')}}</p>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                        <div class="row">
                                            <div class="col-sm-4 text-right">
                                                <p class="item-title">Ticket List:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item">{{$booking->quantity}}x
                                                    @foreach($durations as $duration)
                                                        @if($duration->id == $reschedule->orig_duration_id)
                                                            {{$duration->name}}
                                                        @endif
                                                    @endforeach
                                                    @foreach($types as $type)
                                                        {{$type->name}}
                                                    @endforeach
                                                </p>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                        <div class="row">
                                            <div class="col-sm-4 text-right">
                                                <p class="item-title">Payment Status:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item">
                                                    @if($booking->total_owed > 0)
                                                        <span class="text-red">COLLECT PAYMENT ( $
                                                    @php
                                                        echo number_format($booking->total_owed, 2);
                                                    @endphp
                                                                    )</span>
                                                    @else
                                                        Paid
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                        <div class="row">
                                            <div class="col-sm-4 text-right">
                                                <p class="item-title">Charged at Booking:</p>
                                            </div>
                                            <div class="col-sm-4">
                                                <p class="item">$ {{$booking->total_cost}}</p>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                    </div>
                                </div>
                                <!-- /Renter Info -->
                                <div class="col-sm-4">
                                    <div class="area-box">
                                        <!-- Item -->
                                        <div class="row">
                                            <div class="col-sm-4 text-right">
                                                <p class="item-title">Vehicle:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item">
                                                    @foreach($types as $type)
                                                        {{$type->name}}
                                                    @endforeach
                                                </p>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                        <div class="row">
                                            <div class="col-sm-4 text-right">
                                                <p class="item-title">New Rental Date:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item">{{\Carbon\Carbon::parse($reschedule->activity_date_start)->format('M d, Y')}}</p>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                        <div class="row">
                                            <div class="col-sm-4 text-right">
                                                <p class="item-title">New Ticket List:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item">{{$booking->quantity}}x
                                                    @foreach($durations as $duration)
                                                        @if($duration->id == $reschedule->duration_id)
                                                            {{$duration->name}}
                                                        @endif
                                                    @endforeach
                                                    @foreach($types as $type)
                                                        {{$type->name}}
                                                    @endforeach
                                                </p>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                        <div class="row">
                                            <div class="col-sm-4 text-right">
                                                <p class="item-title">New Pay Status:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item">
                                                    @php
                                                        $cost = $reschedule->cost_per;
                                                        $quantity = $reschedule->quantity;
                                                        $oldTotal = $reschedule->orig_cost_per;
                                                        $oldFees = $reschedule->orig_fees;

                                                        $oqTotalDiff = $oldTotal * $quantity;
                                                        $cqTotalDiff = $cost * $quantity;

                                                        $difference = $oqTotalDiff - $cqTotalDiff;
                                                        $diffTotal = $difference - $oldFees;


                                                        if ($oqTotalDiff < $cqTotalDiff) {
                                                            echo ('<span class="text-red">Collect $ '. $difference . '</span>');
                                                        } else {
                                                            echo ('<span class="text-black">Overpaid $ '. $difference . '</span>');
                                                        };

                                                    @endphp
                                                </p>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                        <div class="row">
                                            <div class="col-sm-4 text-right">
                                                <p class="item-title">New Total:</p>
                                            </div>
                                            <div class="col-sm-4">
                                                <p class="item">$
                                                 @php
                                                    $cost = $reschedule->cost_per;
                                                    $quantity = $reschedule->quantity;

                                                    $cqTotal = $cost * $quantity;

                                                    echo ($cqTotal);

                                                 @endphp
                                                </p>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                    </div>
                                </div>
                                <!-- Rental Info -->
                                <div class="col-sm-4">
                                    <div class="area-box">
                                        <!-- Item -->
                                        <div class="row">
                                            <div class="col-sm-4 text-right">
                                                <p class="item-title">First Name:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item">{{$booking->first}}</p>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                        <div class="row">
                                            <div class="col-sm-4 text-right">
                                                <p class="item-title">Last Name:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item">{{$booking->last}}</p>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                        <div class="row">
                                            <div class="col-sm-4 text-right">
                                                <p class="item-title">Email:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item">{{$booking->email}}</p>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                        <div class="row">
                                            <div class="col-sm-4 text-right">
                                                <p class="item-title">Phone:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item">{{$booking->phone = substr($booking->phone, 2)}}</p>
                                            </div>
                                        </div>
                                        <!-- /Item -->
                                        <!-- Item -->
                                        <div class="row">
                                            <div class="col-sm-4 text-right">
                                                <p class="item-title">Zip Code:</p>
                                            </div>
                                            <div class="col-sm-8">
                                                <p class="item">{{$booking->zip_code}}</p>
                                            </div>
                                        </div>
                                        <!-- /Item -->

                                    </div>
                                </div>
                                <!-- /Rental Info -->
                            </div>
                        </div>
                        <!-- /Rental Information -->
                    </div>
                </div>
            @endforeach
        <!-- /RENTAL INFORMATION -->

        <!-- Booking Step 3 Time -->
        <div class="card shadow mb-4 my-3">
            <div class="card-header">
                <h3><span>Reschedule:</span> Select Time</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <!-- Change Date -->
                        <div class="row mb-3">
                            <div class="col-sm-11">
                                <form action="{{route('bucket.update_date', $reschedule)}}" id="bookStage2" method="post">
                                    @csrf
                                    @method("PUT")
                                    <div class="form-group mt-4">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="rental_date">Change Rental Date</label>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="text-right">{{Carbon\Carbon::parse($reschedule->rental_date)->format('D, M d, Y')}}</h6>
                                            </div>
                                        </div>
                                        <input type="text" class="hidden" name="rental_time" value="00:00:00">
                                        @foreach($durations as $duration)
                                            @if($duration->id == $reschedule->duration_id)
                                                <input type="text" class="hidden" name="duration_id" value="{{$duration->id}}">
                                                <input type="text" class="hidden" name="duration_name" value="{{$duration->name}}">
                                            @endif
                                        @endforeach
                                        <input type="text" class="hidden" name="type_id" value="{{$type->id}}">
                                        <input type="text" class="hidden" name="type_name" value="{{$type->slug}}">
                                        <input type="text" class="form-control datepicker rentalDate" name="rental_date" id="datepicker" value="{{$reschedule->rental_date}}" placeholder="Select Date">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /Change Date -->

                        <!-- Change Buttons -->
                        <div class="row mb-3">
                            <div class="col-sm-11">
                                <form action="{{route('reschedule.change_duration', $reschedule)}}" method="post">
                                    @csrf
                                    @method("PUT")
                                    @foreach($durations as $duration)
                                        @if($duration->id == $reschedule->duration_id)
                                            <input type="text" class="hidden" name="duration_id" value="{{$duration->id}}">
                                        @endif
                                    @endforeach
                                    <button type="submit" class="btn btn-outline-primary text-black btn-100"><small>Change</small> &nbsp;<b>Duration</b></button>
                                </form>
                            </div>
                        </div>
                        <!-- /Change Buttons -->

                        <!-- PHP HELPER -->
                        <!-- PHP Variables -->
                    {{--                            @foreach($durations as $duration)--}}
                    {{--                                @if($duration->id == $reschedule->duration_id)--}}
                    {{--                                    <div class="row">--}}
                    {{--                                        @foreach($availabils as $availabil)--}}
                    {{--                                            @if($duration->availabils->contains($availabil))--}}
                    {{--                                                <div class="col-4 #">--}}
                    {{--                                                    <div class="startTime" data-my-variable="{{$availabil->start_time}}">{{\Carbon\Carbon::parse($availabil->start_time)->format('h:i:s')}}</div>--}}
                    {{--                                                    <div class="startTimeFormat" data-my-variable="{{\Carbon\Carbon::parse($availabil->start_time)->format('h.i')}}">{{\Carbon\Carbon::parse($availabil->start_time)->format('h.i')}}</div>--}}
                    {{--                                                    <div class="startDateTime" data-my-variable="{{$reschedule->rental_date}} {{$availabil->start_time}}">{{$reschedule->rental_date}} {{$availabil->start_time}}</div>--}}
                    {{--                                                    <div class="endTime">{{$availabil->end_time}}</div>--}}
                    {{--                                                    <div class="availIncrem">{{$availabil->start_min_increm}}</div>--}}
                    {{--                                                    <div class="minDiff">--}}
                    {{--                                                        @php--}}
                    {{--                                                            echo $diffMinDiv;--}}
                    {{--                                                        @endphp--}}
                    {{--    --}}
                    {{--                                                        <br>--}}
                    {{--                                                        <div class="availIncrem" data-my-variable="{{$availabil->start_time}}"></div>--}}
                    {{--    --}}
                    {{--                                                    </div>--}}
                    {{--    --}}
                    {{--                                                </div>--}}
                    {{--                                            @endif--}}
                    {{--                                        @endforeach--}}
                    {{--                                    </div>--}}
                    {{--                            @endif--}}
                    {{--                        @endforeach--}}
                    <!-- PHP Variables -->
                        <!-- PHP Vehicle Script -->
                        <div class="">
                            {{--                                @php--}}


                            {{--                                    $reqTimeStart = '10.30';--}}
                            {{--                                    $reqTimeEnd = '11.30';--}}
                            {{--                                    $reschedules = \App\Models\Bucket::where('reserved', '=', '1')->where('rental_date', '=', $reschedule->rental_date)->where('type_id', '=', $reschedule->type_id)->get();--}}
                            {{--                                    $startTime = \Carbon\Carbon::parse(\App\Models\Bucket::value('activity_date_start'))->format('h.i');--}}
                            {{--                                    $endTime =\Carbon\Carbon::parse(\App\Models\Bucket::value('activity_date_end'))->format('H.i');--}}



                            {{--                                    foreach ($reschedules as $reschedule) {--}}
                            {{--                                         $startTime = \Carbon\Carbon::parse($reschedule->activity_date_start)->format('h.i');--}}
                            {{--                                         $endTime =\Carbon\Carbon::parse($reschedule->activity_date_end)->format('H.i');--}}

                            {{--                                        if ($reqTimeStart >= $startTime && $reqTimeEnd <= $endTime) {--}}
                            {{--                                             $newQty = $quantity - 1;--}}
                            {{--                                             $quantity = floor($newQty);--}}

                            {{--                                        } else {--}}
                            {{--                                            $noQ = $quantity;--}}
                            {{--                                            $quantity = $noQ;--}}
                            {{--                                        }--}}
                            {{--                                    };--}}

                            {{--                                     $doc = new \DomDocument();--}}
                            {{--                                     $doc->loadHTML('<div class="whatever" data-my-variable="' . $quantity . '">Vehicles Left: '. $quantity .' - Php Script</div>');--}}

                            {{--                                     echo $doc->saveHTML();--}}
                            {{--                                     echo "<br><br>";--}}




                            {{--                                    echo "<br><br>";--}}

                            {{--                                @endphp--}}
                        </div>
                        <!-- PHP Vehicle Script -->
                        <!-- PHP HELPER -->
                    </div>
                    <div class="col-sm-8">
                        <div class="row">

                            {{--                            {{$durationAvailabils}}--}}



                            <br>
                            <!-- Time Buttons -->
                            @foreach($durations as $duration)
                                @if($duration->id == $reschedule->duration_id)

                                    <div class="row">
                                        @foreach($availabils as $availabil)
                                            @if($duration->availabils->contains($availabil))

                                                @php
                                                    $availMinIncrem  = $availabil->start_min_increm;
                                                    $availStartTime  = $availabil->start_time;
                                                    $availEndTime  = $availabil->end_time;
                                                    $availTime = \Carbon\Carbon::parse($availStartTime)->format('H:i:s');
                                                    $availStartP = \Carbon\Carbon::parse($availStartTime)->format('H:i:s');
                                                    $availEndP = \Carbon\Carbon::parse($availEndTime)->format('H:i:s');
                                                    $availStartIncrem = \Carbon\Carbon::parse($availEndP)->diffInMinutes($availStartP);
                                                    $diffMinDiv = $availStartIncrem / $availMinIncrem + 1;

                                                    $repStr = \Carbon\Carbon::parse($availabil->start_time)->format('h:i A');
                                                    $repStr0 = \Carbon\Carbon::parse($repStr)->addMinute($availMinIncrem)->format('h:i A');
                                                    $repStr1 = \Carbon\Carbon::parse($repStr0)->addMinute($availMinIncrem)->format('h:i A');
                                                    $repStr2 = \Carbon\Carbon::parse($repStr1)->addMinute($availMinIncrem)->format('h:i A');
                                                    $repStr3 = \Carbon\Carbon::parse($repStr2)->addMinute($availMinIncrem)->format('h:i A');

                                                    $phpFormatStr = \Carbon\Carbon::parse($availabil->start_time)->format('H:i:s');
                                                    $phpFormatStr0 = \Carbon\Carbon::parse($repStr)->addMinute($availMinIncrem)->format('H:i:s');
                                                    $phpFormatStr1 = \Carbon\Carbon::parse($repStr0)->addMinute($availMinIncrem)->format('H:i:s');
                                                    $phpFormatStr2 = \Carbon\Carbon::parse($repStr1)->addMinute($availMinIncrem)->format('H:i:s');
                                                    $phpFormatStr3 = \Carbon\Carbon::parse($repStr2)->addMinute($availMinIncrem)->format('H:i:s');

                                                    $formatStr = \Carbon\Carbon::parse($repStr)->format('H.i');
                                                    $formatStr0 = \Carbon\Carbon::parse($repStr0)->format('H.i');
                                                    $formatStr1 = \Carbon\Carbon::parse($repStr1)->format('H.i');
                                                    $formatStr2 = \Carbon\Carbon::parse($repStr2)->format('H.i');
                                                    $formatStr3 = \Carbon\Carbon::parse($repStr3)->format('H.i');


                                                @endphp


                                                @if($diffMinDiv >= '1')
                                                    <div class="col-6 col-sm-3 timeBtn" data-my-variable="{{$formatStr}}">
                                                        <form action="{{route('reschedule.update_time', $reschedule)}}" method="post">
                                                            @csrf
                                                            @method("PUT")
                                                            <input type="text" class="hidden" name="activity_date_start" value="{{$reschedule->rental_date}} {{$phpFormatStr}}">
                                                            <input type="text" class="hidden" name="activity_date_end" value="{{\Carbon\Carbon::parse($phpFormatStr)->addHour($duration->hour)}}">
                                                            <input type="text" class="hidden" name="avail_id" value="{{$availabil->id}}">
                                                            <input type="text" class="hidden" name="rental_time" value="{{$phpFormatStr}}">
                                                            @php
                                                                echo "<button class='btn btn-book width-100' type='submit'>$repStr</button>" ;
                                                            @endphp

                                                        </form>
                                                    </div>
                                                @endif
                                                @if($diffMinDiv >= '2')
                                                    <div class="col-6 col-sm-3 timeBtn" data-my-variable="{{$formatStr0}}">
                                                        <form action="{{route('reschedule.update_time', $reschedule)}}" method="post">
                                                            @csrf
                                                            @method("PUT")
                                                            <input type="text" class="hidden" name="activity_date_start" value="{{$reschedule->rental_date}} {{$phpFormatStr0}}">
                                                            <input type="text" class="hidden" name="activity_date_end" value="{{\Carbon\Carbon::parse($phpFormatStr0)->addHour($duration->hour)}}">

                                                            <input type="text" class="hidden" name="rental_time" value="{{$phpFormatStr0}}">
                                                            @php
                                                                echo "<button class='btn btn-book width-100' type='submit'>$repStr0</button>" ;
                                                            @endphp
                                                        </form>
                                                    </div>
                                                @endif
                                                @if($diffMinDiv >= '3')
                                                    <div class="col-6 col-sm-3 timeBtn" data-my-variable="{{$formatStr1}}">
                                                        <form action="{{route('reschedule.update_time', $reschedule)}}" method="post">
                                                            @csrf
                                                            @method("PUT")
                                                            <input type="text" class="hidden" name="activity_date_start" value="{{$reschedule->rental_date}} {{$phpFormatStr1}}">
                                                            <input type="text" class="hidden" name="activity_date_end" value="{{\Carbon\Carbon::parse($phpFormatStr1)->addHour($duration->hour)}}">

                                                            <input type="text" class="hidden" name="rental_time" value="{{$phpFormatStr1}}">
                                                            @php
                                                                echo "<button class='btn btn-book width-100' type='submit'>$repStr1</button>" ;
                                                            @endphp
                                                        </form>
                                                    </div>
                                                @endif
                                                @if($diffMinDiv >= '4')
                                                    <div class="col-6 col-sm-3 timeBtn" data-my-variable="{{$formatStr2}}">
                                                        <form action="{{route('reschedule.update_time', $reschedule)}}" method="post">
                                                            @csrf
                                                            @method("PUT")
                                                            <input type="text" class="hidden" name="activity_date_start" value="{{$reschedule->rental_date}} {{$phpFormatStr2}}">
                                                            <input type="text" class="hidden" name="activity_date_end" value="{{\Carbon\Carbon::parse($phpFormatStr2)->addHour($duration->hour)}}">

                                                            <input type="text" class="hidden" name="rental_time" value="{{$phpFormatStr2}}">
                                                            @php
                                                                echo "<button class='btn btn-book width-100' type='submit'>$repStr2</button>" ;
                                                            @endphp
                                                        </form>
                                                    </div>
                                                @endif
                                                @if($diffMinDiv >= '5')
                                                    <div class="col-6 col-sm-3 timeBtn" data-my-variable="{{$formatStr3}}">
                                                        <form action="{{route('reschedule.update_time', $reschedule)}}" method="post">
                                                            @csrf
                                                            @method("PUT")
                                                            <input type="text" class="hidden" name="activity_date_start" value="{{$reschedule->rental_date}} {{$phpFormatStr3}}">
                                                            <input type="text" class="hidden" name="activity_date_end" value="{{\Carbon\Carbon::parse($phpFormatStr3)->addHour($duration->hour)}}">

                                                            <input type="text" class="hidden" name="rental_time" value="{{$phpFormatStr3}}">
                                                            @php
                                                                echo "<button class='btn btn-book width-100' type='submit'>$repStr3</button>" ;
                                                            @endphp
                                                        </form>
                                                    </div>
                                                @endif

                                            @endif
                                        @endforeach
                                    </div>


                                @endif
                            @endforeach
                        <!-- /Time Buttons -->

                            <br><br>


                            {{--                            <!-- Times Buttons Script -->--}}
                            {{--                            <div id="newTimes">--}}
                            {{--                                <div class="newTime"></div>--}}
                            {{--                            </div>--}}
                            {{--                            <!-- Times Buttons Script -->--}}

                            <br><br>



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Booking Step 3 Time -->

        <!-- CHECK IN BUTTONS -->
        <div class="card mt-4 mb-5 shadow">
            <div class="modal-footer">
                <div class="row width-100">
                    <div class="col-sm-4">
                        <button class="btn btn-outline-primary" type="button" data-toggle="modal" data-target="#cancel_rental{{$reschedule->id}}">CANCEL RESCHEDULE</button>
                    </div>
                    <div class="col-sm-4">

                    </div>
                    <div class="col-sm-4">
{{--                        <a href="#" class="btn btn-secondary text-white" type="button">Update</a>--}}
                    </div>

                </div>

            </div>
        </div>
        <!-- /CHECK IN BUTTONS -->


        <form action="{{route('office.checkInRental', $reschedule->id)}}" method="post">
            @csrf
            @method('PUT')


            <div class="modal fade checkin-modal" id="checkin{{$reschedule->id}}" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">

                </div>
            </div>
        </form>


        <!-- Cancel Rental Modal -->
        <div class="modal fade" id="cancel_rental{{$reschedule->id}}" tabindex="-1" role="dialog" aria-labelledby="cancelModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    @foreach($bookings as $booking)
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                        <h4 class="mb-4">Are you sure you want to cancel this reschedule:</h4>
                                        <h3><span>{{$booking->first}} {{$booking->last}}</span> <br> {{$booking->activity_item}}</h3>
                                        <h5>{{$reschedule->id}}</h5>
                                        <p class="italic mt-4">This action can NOT be undone!</p>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">NEVERMIND...</button>

                            <form action="{{route('reschedule.reschedule_cancel', $booking)}}" method="post">
                                @csrf
                                @method('PUT')

                                <input type="hidden" value="{{$reschedule->id}}" name="reschedule_id">

                                <button class="btn btn-primary-red" type="submit">CANCEL RESCHEDULE</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- /Cancel Rental Modal -->



    @endsection




    @section('scripts')
    <!-- Page level plugins -->
        <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('js/demo/datatables-scripts.js')}}"></script>

        <script>
            $(document).ready(function() {
                $('#officeSchedule').addClass('hidden');
            });
            $(document).ready(function() {
                $('.datepicker').datepicker('show');
            });
            $(document).ready(function() {


                let totalOut = document.getElementById('addition1out');
                let total1Out = document.getElementById('total1out');
                let inputQtyFuel = document.getElementById('fuelQty');
                let inputQtyToy = document.getElementById('toyQty');
                var inputCostToy = $(".toyCost").data("my-variable");
                var inputCostFuel = $(".fuelCost").data("my-variable");
                var totalCost = $(".totalIn").data("my-variable");


                inputQtyFuel.onkeyup = function () {
                    var fuelQty = inputQtyFuel.value;
                    var fuelTotal = inputCostFuel * fuelQty;
                    var toyQty = inputQtyToy.value;
                    var toyTotal = inputCostToy * toyQty;

                    $('.totalCostFuel').html(fuelTotal);
                    $('input.grandFuel').val(fuelTotal);

                    $('.totalCostToy').html(toyTotal);
                    $('input.grandToy').val(toyTotal);

                    grandTotal = fuelTotal + toyTotal;

                    totalOut.innerHTML = grandTotal;

                    grandMaster = grandTotal + totalCost;

                    total1Out.innerHTML = grandMaster;
                    totalOut.innerHTML = grandTotal;
                    // alert(fuelTotal);
                }
                inputQtyFuel.onclick = function () {
                    var fuelQty = inputQtyFuel.value;
                    var fuelTotal = inputCostFuel * fuelQty;
                    var toyQty = inputQtyToy.value;
                    var toyTotal = inputCostToy * toyQty;

                    $('.totalCostFuel').html(fuelTotal);
                    $('input.grandFuel').val(fuelTotal);

                    $('.totalCostToy').html(toyTotal);
                    $('input.grandToy').val(toyTotal);

                    grandTotal = fuelTotal + toyTotal;

                    totalOut.innerHTML = grandTotal;

                    grandMaster = grandTotal + totalCost;

                    total1Out.innerHTML = grandMaster;
                    totalOut.innerHTML = grandTotal;
                    // alert(fuelTotal);
                }

                inputQtyToy.onkeyup = function () {
                    var fuelQty = inputQtyFuel.value;
                    var fuelTotal = inputCostFuel * fuelQty;
                    var toyQty = inputQtyToy.value;
                    var toyTotal = inputCostToy * toyQty;

                    $('.totalCostFuel').html(fuelTotal);
                    $('input.grandFuel').val(fuelTotal);

                    $('.totalCostToy').html(toyTotal);
                    $('input.grandToy').val(toyTotal);

                    grandTotal = fuelTotal + toyTotal;

                    totalOut.innerHTML = grandTotal;

                    grandMaster = grandTotal + totalCost;

                    total1Out.innerHTML = grandMaster;
                    // alert(toyTotal);
                }
                inputQtyToy.onclick = function () {
                    var fuelQty = inputQtyFuel.value;
                    var fuelTotal = inputCostFuel * fuelQty;
                    var toyQty = inputQtyToy.value;
                    var toyTotal = inputCostToy * toyQty;

                    $('.totalCostFuel').html(fuelTotal);
                    $('input.grandFuel').val(fuelTotal);

                    $('.totalCostToy').html(toyTotal);
                    $('input.grandToy').val(toyTotal);

                    grandTotal = fuelTotal + toyTotal;

                    totalOut.innerHTML = grandTotal;

                    grandMaster = grandTotal + totalCost;

                    total1Out.innerHTML = grandMaster;
                    // alert(toyTotal);
                }

                jQuery(function(){
                    jQuery('#fuelQty').click();
                    jQuery('#ToyQty').click();
                });

                $(document).ready(function() {

                    $('.datepicker').datepicker('show');
                    $('.dynamicAvail').addClass('hidden');
                });



            });
        </script>

        <script>
            $(function() {
                $date = $( "#datepicker" ).datepicker("getDate");
                $('#datepicker').datepicker({
                    changeMonth: true,
                    changeYear: true,
                    numberOfMonths: 3,
                    showButtonPanel: true,
                    dateFormat: "yy-mm-dd",
                    value: "yy-mm-dd",
                    altField: "#alternate",
                    altFormat: "DD, MM d, yy",
                    onSelect: function() {
                        $date = $("#datepicker").datepicker({ dateFormat: 'dd-mm-yy' }).val();

                        $('.rentalDate').append('<input id="datepicker" value=' + $date  + '>');

                        $('#bookStage1').submit(); // <-- SUBMIT

                    }
                });
            });
        </script>
    @endsection

</x-office-master>
