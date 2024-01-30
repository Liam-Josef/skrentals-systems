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
                                            <p class="item">{{\Carbon\Carbon::parse($booking->activity_date_start)->format('M d, Y h:i A')}}</p>
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
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">Booking Fee:</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="item" id="originalFee">$ {{$booking->fees}}</p>
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
                                            <p class="item">{{\Carbon\Carbon::parse($reschedule->activity_date_end)->format('D, M. d, Y h:i A')}}</p>
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

        <!-- Booking Step 4 - Additions -->
        <div class="card shadow mb-4 my-3">
            <div class="card-header">
                <h3>
                    <h3><span>Reschedule:</span> Select Additions</h3>
                </h3>
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
                                            <input type="text" class="hidden" name="duration_id" value="{{$duration->id}}">
                                            <input type="text" class="hidden" name="duration_name" value="{{$duration->name}}">
                                        @endforeach
                                        <input type="text" class="hidden" name="activity_date_end" value=" ">
                                        <input type="text" class="hidden" name="type_id" value="{{$type->id}}">
                                        <input type="text" class="hidden" name="type_name" value="{{$type->slug}}">
                                        <input type="text" class="form-control datepicker rentalDate" name="activity_date_start" id="datepicker" value="{{$reschedule->rental_date}}" placeholder="Select Date">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /Change Date -->

                        <!-- Change Buttons -->
                        <div class="row mb-3">
                            <div class="col-sm-11 mb-3">
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
                            <div class="col-sm-11 mb-3">
                                <a href="{{route('office.reschedule_booking_time', $reschedule)}}" class="btn btn-outline-primary text-black btn-100"><small>Change</small> &nbsp; <b>Time</b></a>
                            </div>
                        </div>
                        <!-- /Change Buttons -->

                    </div>
                    <div class="col-sm-8">
                        <div class="row mt-4">

                            <div class="col-sm-6">
                                <h2 class=" ">
                                    <span class="text-gray-500"> START: </span>{{\Carbon\Carbon::parse($reschedule->activity_date_start)->format('D, M. d, Y')}}
                                    <br>
                                    <span class="text-gray-500"> FROM: </span> {{\Carbon\Carbon::parse($reschedule->activity_date_start)->format('h:i A')}}
                                </h2>
                            </div>
                            <div class="col-sm-6">
                                <h2 class="  text-right">
                                    {{\Carbon\Carbon::parse($reschedule->activity_date_end)->format('D, M. d, Y')}} <span class="text-gray-500"> :END </span>
                                    <br>
                                    {{\Carbon\Carbon::parse($reschedule->activity_date_end)->format('h:i A')}} <span class="text-gray-500"> :TO </span>
                                </h2>
                            </div>

                        </div>

                        <div class="col-8">
                            <!-- Booking Calculator -->
                            <div class="row mt-5">

                                <!-- Calculator -->
                                <div class="col-3 col-sm-5 text-right">
                                @foreach($prices as $price)
                                    @if($price->type_id == $reschedule->type_id && $price->duration_id == $reschedule->duration_id)

                                        <!-- ROW 1 Unit Price-->
                                            <h4 class=" ">$ <span id="durCost">{{$price->amount}}</span></h4>
                                            <!-- ROW 1 Unit Price-->

                                            <!-- ROW 2 Quantity -->
                                            <h4 class=" "><span class="text-gray-500">x</span> <span id="quantity1out">1</span></h4>
                                            <!-- ROW 2 Quantity -->

                                            <!-- ROW 2 Quantity -->
                                            @if($duration->hour == '1')
                                                <h4 class=" "><span class="text-gray-500">x</span> <span id="duration1out">1</span></h4>
                                            @else

                                            @endif
                                        <!-- ROW 2 Quantity -->

                                            <!-- ROW 3 Fees -->
                                            <h4 class=" ">
                                                <span class="text-gray-500">+</span>
                                                <span id="fee1out">
                                                @foreach($websites as $website)
                                                        @php
                                                            $percent = '.0'.$website->fee_percent;

                                                            $cost = $price->amount;
                                                            $fee = $percent;
                                                            $total0 = $cost * $fee;

                                                             echo number_format($total0, 2);
                                                        @endphp
                                                    @endforeach
                                            </span>
                                            </h4>
                                            <!-- ROW 3 Fees -->

                                        @endif
                                    @endforeach
                                </div>
                                <!-- /Calculator -->
                                <!-- Calculator Text -->
                                <div class="col-8 col-sm-7">
                                @foreach($prices as $price)
                                    @if($price->type_id == $reschedule->type_id && $price->duration_id == $reschedule->duration_id)

                                        <!-- ROW 1 Unit Price -->
                                            <h4 class=" ">
                                                <span class="text-gray-500">each</span>
                                                {{$type->name}}
                                                <span class="text-gray-500">for</span>
                                                {{$duration->hour}}
                                                <span class="text-gray-500">hour(s)</span>
                                            </h4>
                                            <!-- ROW 1 Unit Price -->

                                            <!-- ROW 2 Quantity -->
                                            <h4 class=" ">
                                                {{$type->name}}<span class="text-gray-500">(s)</span>
                                            </h4>
                                            <!-- ROW 2 Quantity -->

                                            <!-- ROW 2 Quantity -->
                                            @if($duration->hour == '1')
                                                <h4 class=" ">
                                                    Hour<span class="text-gray-500">(s)</span>
                                                </h4>
                                            @else

                                            @endif
                                        <!-- ROW 2 Quantity -->

                                            <!-- ROW 23 Quantity -->
                                            <h4 class=" ">
                                                Processing <span class="text-gray-500">&</span> Taxes
                                            </h4>
                                            <!-- ROW 23 Quantity -->

                                        @endif
                                    @endforeach
                                </div>
                                <!-- /Calculator Text -->
                            </div>
                        </div>

                        <!-- Calculator Total -->
                        <div class="row mt-3">
                            <div class="col-8">
                                <h3 class="  text-center"><span class="text-gray-500">$</span>
                                    <span id="total1out">
                                @php
                                    $totalE = $cost + $total0;
                                    echo number_format($totalE, 2);
                                @endphp
                            </span>
                                </h3>
                            </div>
                        </div>
                        <!-- /Calculator Total -->
                        <!-- /Booking Calculator -->
                    </div>
                </div>



                <!-- Booking Request -->
                <div class="row mt-5 mb-5">
                    <div class="
                        @if($duration->hour == '1')
                        col-sm-8 offset-sm-2
@else
                        col-sm-6 offset-sm-3
@endif
                        ">
                        <div class="reqText">
                            <div class="row">
                                <div class="col-sm-3 pl-0 pr-0">
                                    <h3 class="text-center">
                                        QTY:
                                    </h3>
                                </div>
                                <div class="col-6 offset-3 col-sm-2 offset-sm-0 pl-sm-0 pr-sm-0">
                                    <input id="quantity1" type="number" class="form-control" placeholder="# of {{$type->name}}'s" value="{{$reschedule->quantity}}" min="1" max="{{$type->quantity}}">
                                </div>
                                <div class="
                                     @if($duration->hour == '1')
                                    col-sm-4
@else
                                    col-sm-7
@endif
                                    pl-0 pr-0">
                                    <h3 class="text-center">
                                        @if(strpos($duration->name, 'SeaDoo') !== false)
                                            Half Day
                                        @else
                                            @if($duration->hour == '1')
                                            @else
                                                <span class=" ">{{$duration->name}}</span>
                                            @endif
                                        @endif
                                        &nbsp;
                                        <span class=" ">{{$type->name}}<span class="text-gray-500"><small>(s)</small></span>
                                             @if($duration->hour == '1')
                                                &nbsp; for
                                            @else
                                            @endif
                                            </span>
                                    </h3>
                                </div>
                                @if($duration->hour == '1')
                                    <div class="col-6 offset-3 col-sm-2 offset-sm-0 pl-sm-0 pr-sm-0">
                                        <input id="duration1" type="number" class="form-control" placeholder="Quantity of Duration" value="1" min="1" max="{{$type->quantity}}">
                                    </div>
                                    <div class="col-sm-1">
                                        <h3 class="text-center">
                                            hours
                                        </h3>
                                    </div>
                                @else

                                @endif

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Booking Request -->


                <!-- Next Button -->
                <form action="{{route('office.book_rental_additions', $reschedule)}}" method="post">
                    @csrf
                    @method("PUT")

                    <input type="text" class="bookQty hidden" name="quantity" value="1">
                    @foreach($prices as $price)
                        @if($price->type_id == $reschedule->type_id && $price->duration_id == $reschedule->duration_id)
                            <input type="text" class="bookCost hidden" name="cost_per" value="{{$price->amount}}">
                        @endif
                    @endforeach
                    @foreach($websites as $website)
                        <input type="text" class="bookFee hidden" name="fees" value="@php
                            $percent = '.0'.$website->fee_percent;

                            $cost = $price->amount;
                            $fee = $percent;
                            $total0 = $cost * $fee;

                             echo number_format($total0, 2);
                        @endphp
                            ">
                    @endforeach
                    <input type="text" class="bookHrs hidden" name="hour"
                           @if($type->slug == 'seadoo' && $reschedule->hour < '4')
                           value="1"
                           @else
                           value="{{$duration->hour}}"
                        @endif
                    >
                    <input type="text" class="bookTotal hidden" name="total_cost" value="@php
                        $totalE = $cost + $total0;
                        echo number_format($totalE, 2);
                    @endphp
                        ">
                    <input type="text" class=" hidden" name="activity_date_start" value="{{$reschedule->activity_date_start}}">
                    <input type="text" class=" hidden" name="activity_date_end" value="{{$reschedule->activity_date_end}}">
                    <input type="text" class=" hidden" name="end_time" value="{{\Carbon\Carbon::parse($reschedule->activity_date_end)->format('H:i:s')}}">
                    <button class="btn btn-book btn-sm mt-53 p-2" type="submit">Next</button>
                </form>
                <!-- /Next Button -->
            </div>
        </div>
        <!-- /Booking Step 4 - Additions -->

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
                        {{--                        <a href="#" class="btn btn-secondary  " type="button">Update</a>--}}
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

                </script>
                <script>

                    $(document).ready(function() {

                    let input = document.getElementById('quantity1');
                    let out = document.getElementById('quantity1out');
                    let durInput = document.getElementById('duration1');
                    let durOut = document.getElementById('duration1out');
                    // let hrInput = document.getElementById('hrQuantity1');
                    var durCost = $("#durCost").html();


                    input.onkeyup = function () {
                    out.innerHTML = input.value;
                    newI = input.value;

                    total = durCost * newI;
                    console.log(total);

                    fee1 = total * 0.00;
                    fee = fee1.toFixed(2);
                    console.log(fee);

                    newTotal1 = total + fee1;

                    newTotal = newTotal1.toFixed(2);
                    total1out.innerHTML = newTotal;

                    fee1out.innerHTML = fee;
                    $('input.durInput').val('1');
                    $('input.bookQty').val(newI);
                    $('input.bookFee').val(fee);
                    $('input.bookTotal').val(newTotal);
                }
                    input.onclick = function () {
                    out.innerHTML = input.value;
                    newI = input.value;

                    total = durCost * newI;
                    console.log(total);

                    fee1 = total * 0.00;
                    fee = fee1.toFixed(2);
                    console.log(fee);

                    newTotal1 = total + fee1;

                    newTotal = newTotal1.toFixed(2);
                    total1out.innerHTML = newTotal;

                    fee1out.innerHTML = fee;
                    $('input.durInput').val('1');
                    $('input.bookQty').val(newI);
                    $('input.bookFee').val(fee);
                    $('input.bookTotal').val(newTotal);
                }

                    durInput.onkeyup = function () {
                    durOut.innerHTML = durInput.value;
                    newI = input.value;
                    newD = durInput.value;

                    total1 = durCost * newI;
                    total = total1 * newD;
                    console.log(total);

                    fee1 = total * 0.00;
                    fee = fee1.toFixed(2);
                    console.log(fee);

                    newTotal1 = total + fee1;

                    newTotal = newTotal1.toFixed(2);
                    total1out.innerHTML = newTotal;

                    fee1out.innerHTML = fee;
                    $('input.bookHrs').val(newD);
                    $('input.bookTotal').val(newTotal);
                }
                    durInput.onclick = function () {
                    durOut.innerHTML = durInput.value;
                    newI = input.value;
                    newD = durInput.value;

                    total1 = durCost * newI;
                    total = total1 * newD;
                    console.log(total);

                    fee1 = total * 0.00;
                    fee = fee1.toFixed(2);
                    console.log(fee);

                    newTotal1 = total + fee1;

                    newTotal = newTotal1.toFixed(2);
                    total1out.innerHTML = newTotal;

                    fee1out.innerHTML = fee;
                    $('input.bookHrs').val(newD);
                    $('input.bookTotal').val(newTotal);
                }
                    // $("#total1out").text(newTotal);


                    // // var addCost = $("#addCost").html();
                    //
                    //
                    // $('.addCost').onclick(function() {
                    //
                    //
                    //     // var start_time = $(".startTimeFormat").data("my-variable");
                    //     // var availIncrem = "15";
                    //     // var availIncrem = $('.availIncrem').html();
                    //
                    //     // var total = start_time + (availIncrem * 10000);
                    //     //
                    //     // alert(total);
                    //
                    //
                    //     $( this ).each(function() {
                    //
                    //         $('<button class="btn btn-book" name="rental_time" value="' + $( this ).html() + '" id="' + $( this ).html() + '"> ' + $( this ).html() + ' </button> <br>').appendTo("#newTimes"); //appendTo: Append at inside bottom
                    //
                    //     });
                    //
                    //
                    // });



                });


                    $(document).ready(function() {

                    $('.datepicker').datepicker('show');
                });
                    $(function() {
                    $date = $( "#datepicker" ).datepicker("getDate");
                    $('#datepicker').datepicker({
                    changeMonth: true,
                    changeYear: true,
                    numberOfMonths: 3,
                    showButtonPanel: true,
                    dateFormat: "yy-mm-dd",
                    altField: "#alternate",
                    altFormat: "DD, MM d, yy",
                    onSelect: function() {
                    // $date = $("#datepicker").datepicker({ dateFormat: 'dd-mm-yy' }).val();
                    //
                    // $('.results').html($date);

                    $('#bookStage2').submit(); // <-- SUBMIT

                }
                });
                });

                    jQuery(function(){
                        jQuery('#quantity1').click();
                    });

        </script>
    @endsection

</x-office-master>
