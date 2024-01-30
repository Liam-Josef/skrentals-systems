<x-home-master>

    @section('styles')

    @endsection

    @foreach($applications as $application)

    @section('browser_title')
        @foreach($type as $type)
            Book a {{$type->name}} Rental | {{$application->name}}
        @endforeach
        Book a Rental | {{$application->name}}
    @endsection

    @section('meta_description')

    @endsection

    @section('navbar_rental_type')
        Our
        @if($application->rental_type != '')
            {{$application->rental_type}}
        @else
            Rentals
        @endif
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

    @section('content')
        <style>
            .main-body {
                background-image: url("{{asset('/storage/app-images/home-background.jpg')}}");
            }
        </style>
        <div class="main-body">
            <div class="container main">

                <!-- Title -->
                <h1 class="page-title">{{$type->name}} Rentals</h1>
                <div class="breadcrumbs">
                    <p>
                        <a href="{{route('home.index')}}" class="link">Home </a>
                        <i class="fa fa-chevron-right"></i> Rentals
                        <i class="fa fa-chevron-right"></i> {{$type->name}} Rentals
                        <i class="fa fa-chevron-right"></i> Booking
                        <i class="fa fa-chevron-right"></i> Additions
                    </p>
                </div>
                <!-- /Title -->

                <!-- Page Info -->
                <img src="{{asset('storage/' . $type->image)}}" alt="{{$type->img_alt}}" class="page-img" />
                @if($type->description != '')
                     @foreach($durations as $duration)
                        <h2 class="section-header">{{$duration->name}} {{$type->name}} Rental</h2>
                                @endforeach
                    <h3 class="text-center">Additions</h3>
                    @else
                     @foreach($durations as $duration)
                        <h2 class="section-header">{{$duration->name}} {{$type->name}} Rental</h2>
                                @endforeach
                    <h3 class="text-center">Additions</h3>
                 @endif
                <!-- /Page Info -->

                <!-- Booking Step 4 - Additions -->
                <div class="row">
                    <div class="col-sm-4">
                       <!-- Change Date -->
                        <div class="row mb-3">
                            <div class="col-sm-11">
                                <form action="{{route('bucket.update_date', $bucket)}}" id="bookStage2" method="post">
                                    @csrf
                                    @method("PUT")
                                    <div class="form-group mt-4">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="rental_date">Change Rental Date</label>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="text-right">{{Carbon\Carbon::parse($bucket->rental_date)->format('D, M d, Y')}}</h6>
                                            </div>
                                        </div>
                                        <input type="text" class="hidden" name="rental_time" value="00:00:00">
                                        @foreach($durations as $duration)
                                            <input type="text" class="hidden" name="duration_id" value="{{$duration->id}}">
                                            <input type="text" class="hidden" name="duration_name" value="{{$duration->name}}">
                                        @endforeach
                                        <input type="text" class="hidden" name="activity_date_start" value="">
                                        <input type="text" class="hidden" name="activity_date_end" value=" ">
                                        <input type="text" class="hidden" name="type_id" value="{{$type->id}}">
                                        <input type="text" class="hidden" name="type_name" value="{{$type->slug}}">
                                        <input type="text" class="form-control datepicker rentalDate" name="rental_date" id="datepicker" value="{{$bucket->rental_date}}" placeholder="Select Date">
                                    </div>
                                </form>
                            </div>
                        </div>
                       <!-- /Change Date -->

                        <!-- Change Buttons -->
                        <div class="row mb-3">
                            <div class="col-sm-11 mb-3">
                                <form action="{{route('bucket.changeDuration', $bucket)}}" method="post">
                                    @csrf
                                    @method("PUT")
                                    @foreach($durations as $duration)
                                        @if($duration->id == $bucket->duration_id)
                                            <input type="text" class="hidden" name="duration_id" value="{{$duration->id}}">
                                        @endif
                                    @endforeach
                                    <button type="submit" class="btn btn-outline-primary text-white btn-100"><small>Change</small> &nbsp; <b>Duration</b></button>
                                </form>
                            </div>
                            <div class="col-sm-11 mb-3">
                                    <a href="{{route('home.book_rental_time', $bucket)}}" class="btn btn-outline-primary text-white btn-100"><small>Change</small> &nbsp; <b>Time</b></a>
                            </div>
                        </div>
                        <!-- /Change Buttons -->
                    </div>
                    <div class="col-sm-8">
                        <div class="row mt-4">

                            <div class="col-sm-6">
                                <h2 class="text-white">
                                   <span class="text-gray-500"> START: </span>{{\Carbon\Carbon::parse($bucket->activity_date_start)->format('D, M. d, Y')}}
                                    <br>
                                    <span class="text-gray-500"> FROM: </span> {{\Carbon\Carbon::parse($bucket->activity_date_start)->format('h:i A')}}
                                </h2>
                            </div>
                            <div class="col-sm-6">
                                <h2 class="text-white text-right">
                                    {{\Carbon\Carbon::parse($bucket->activity_date_end)->format('D, M. d, Y')}} <span class="text-gray-500"> :END </span>
                                    <br>
                                    {{\Carbon\Carbon::parse($bucket->activity_date_end)->format('h:i A')}} <span class="text-gray-500"> :TO </span>
                                </h2>
                            </div>

                        </div>

                       <div class="col-8">
                           <!-- Booking Calculator -->
                           <div class="row mt-5">

                               <!-- Calculator -->
                               <div class="col-3 col-sm-5 text-right">
                               @foreach($prices as $price)
                                   @if($price->type_id == $bucket->type_id && $price->duration_id == $bucket->duration_id)

                                       <!-- ROW 1 Unit Price-->
                                           <h4 class="text-white">$ <span id="durCost">{{$price->amount}}</span></h4>
                                           <!-- ROW 1 Unit Price-->

                                           <!-- ROW 2 Quantity -->
                                           <h4 class="text-white"><span class="text-gray-500">x</span> <span id="quantity1out">1</span></h4>
                                           <!-- ROW 2 Quantity -->

                                           <!-- ROW 2 Quantity -->
                                           @if($duration->hour == '1')
                                               <h4 class="text-white"><span class="text-gray-500">x</span> <span id="duration1out">1</span></h4>
                                           @else

                                           @endif
                                       <!-- ROW 2 Quantity -->

                                       <!-- ROW 3 Fees -->
                                       <h4 class="text-white">
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
                                   @if($price->type_id == $bucket->type_id && $price->duration_id == $bucket->duration_id)

                                       <!-- ROW 1 Unit Price -->
                                           <h4 class="text-white">
                                               <span class="text-gray-500">each</span>
                                               {{$type->name}}
                                               <span class="text-gray-500">for</span>
                                               {{$duration->hour}}
                                               <span class="text-gray-500">hour(s)</span>
                                           </h4>
                                           <!-- ROW 1 Unit Price -->

                                           <!-- ROW 2 Quantity -->
                                           <h4 class="text-white">
                                               {{$type->name}}<span class="text-gray-500">(s)</span>
                                           </h4>
                                           <!-- ROW 2 Quantity -->

                                           <!-- ROW 2 Quantity -->
                                           @if($duration->hour == '1')
                                               <h4 class="text-white">
                                                   Hour<span class="text-gray-500">(s)</span>
                                               </h4>
                                           @else

                                           @endif
                                       <!-- ROW 2 Quantity -->

                                           <!-- ROW 23 Quantity -->
                                           <h4 class="text-white">
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
                                <h3 class="text-white text-center"><span class="text-gray-500">$</span>
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
                                        I &nbsp; want
                                    </h3>
                                </div>
                                <div class="col-6 offset-3 col-sm-2 offset-sm-0 pl-sm-0 pr-sm-0">
                                    <input id="quantity1" type="number" class="form-control" placeholder="# of {{$type->name}}'s" value="1" min="1" max="{{$type->quantity}}">
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
                                                <span class="text-white">{{$duration->name}}</span>
                                            @endif
                                        @endif
                                        &nbsp;
                                        <span class="text-white">{{$type->name}}<span class="text-gray-500"><small>(s)</small></span>
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
                <form action="{{route('home.book_rental_additions', $bucket)}}" method="post">
                    @csrf
                    @method("PUT")

                    <input type="text" class="bookQty hidden" name="quantity" value="1">
                    @foreach($prices as $price)
                        @if($price->type_id == $bucket->type_id && $price->duration_id == $bucket->duration_id)
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
                           @if($type->slug == 'seadoo' && $bucket->hour < '4')
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
                    <input type="text" class=" hidden" name="activity_date_start" value="{{$bucket->activity_date_start}}">
                    <input type="text" class=" hidden" name="activity_date_end" value="{{$bucket->activity_date_end}}">
                    <input type="text" class=" hidden" name="end_time" value="{{\Carbon\Carbon::parse($bucket->activity_date_end)->format('H:i:s')}}">
                    <button class="btn btn-book btn-sm mt-53 p-2" type="submit">Next</button>
                </form>
                <!-- /Next Button -->



                <!-- Additions -->
{{--                <div class="row mt-3">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="modal-content">--}}
{{--                            <div class="modal-header">--}}
{{--                                <h3>Additions</h3>--}}
{{--                            </div>--}}
{{--                            <div class="modal-body">--}}
{{--                                <div class="row">--}}
{{--                                    @foreach($type->additions as $type_addition)--}}
{{--                                        @if($bucket->hours >= '48')--}}
{{--                                            @if($type_addition->visible == '1')--}}
{{--                                                <div class="col-4">--}}
{{--                                                    <div class="card shadow mt-3">--}}
{{--                                                        <div class="card-body">--}}

{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-6">--}}
{{--                                                                    <h4 class="text-secondary-dk mb-0">{{$type_addition->name}}</h4>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-6">--}}
{{--                                                                    <h4 class="text-secondary-dk mb-0 text-right">{{$type_addition->cost}}</h4>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            @endif--}}
{{--                                        @else--}}
{{--                                            @if($type_addition->visible == '1' && $type_addition->multi_only == '0')--}}
{{--                                                <div class="col-4">--}}
{{--                                                    <div class="card shadow mt-3">--}}
{{--                                                        <div class="card-body">--}}

{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-6">--}}
{{--                                                                    <h4 class="text-secondary-dk mb-0">{{$type_addition->name}}</h4>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-6">--}}
{{--                                                                    <h4 class="text-secondary-dk mb-0 text-right">{{$type_addition->cost}}</h4>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}

{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            @endif--}}
{{--                                        @endif--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!-- /Additions -->


                <!-- /Booking Step 4 - Additions -->





            </div>
        </div>
    @endsection



    @section('scripts')
        <script src="{{asset('js/sb-admin-2.js')}}"></script>

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

                    fee1 = total * .05;
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

                    fee1 = total * .05;
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

                    fee1 = total * .05;
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

                    fee1 = total * .05;
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

            $(document).ready(function() {


                // var availVehicles = $(".whatever").data("my-variable");


            });

        </script>
    @endsection

</x-home-master>
