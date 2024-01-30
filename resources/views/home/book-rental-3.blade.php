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
                        <i class="fa fa-chevron-right"></i> Time
                    </p>
                </div>
                <!-- /Title -->

                <!-- Page Info -->
                <img src="{{asset('storage/' . $type->image)}}" alt="{{$type->img_alt}}" class="page-img" />
                @if($type->description != '')
                    <h2 class="section-header">{{$type->description}}</h2>
                    <h3 class="text-center">
                        @foreach($durations as $duration)
                            <span class="text-white">{{$duration->name}}</span>
                        @endforeach
                            on <span class="text-white">{{Carbon\Carbon::parse($bucket->rental_date)->format('D, M d, Y')}}</span>
                    </h3>
                @else
                    <h2 class="section-header">{{$type->name}}</h2>
                    <h3 class="text-center">Select Rental Time - @foreach($durations as $duration)
                            <span class="text-white">{{$duration->name}}</span>
                        @endforeach
                        on <span class="text-white">{{Carbon\Carbon::parse($bucket->rental_date)->format('D, M d, Y')}}</span>
                    </h3>
                @endif
                <!-- /Page Info -->


                <!-- Booking Step 3 Time -->
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
                                            @if($duration->id == $bucket->duration_id)
                                                <input type="text" class="hidden" name="duration_id" value="{{$duration->id}}">
                                                <input type="text" class="hidden" name="duration_name" value="{{$duration->name}}">
                                            @endif
                                        @endforeach
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
                            <div class="col-sm-11">
                                <form action="{{route('bucket.changeDuration', $bucket)}}" method="post">
                                    @csrf
                                    @method("PUT")
                                    @foreach($durations as $duration)
                                        @if($duration->id == $bucket->duration_id)
                                             <input type="text" class="hidden" name="duration_id" value="{{$duration->id}}">
                                        @endif
                                    @endforeach
                                    <button type="submit" class="btn btn-outline-primary text-white btn-100"><small>Change</small> &nbsp;<b>Duration</b></button>
                                </form>
                            </div>
                        </div>
                        <!-- /Change Buttons -->

                        <!-- PHP HELPER -->
                            <!-- PHP Variables -->
{{--                            @foreach($durations as $duration)--}}
{{--                                @if($duration->id == $bucket->duration_id)--}}
{{--                                    <div class="row">--}}
{{--                                        @foreach($availabils as $availabil)--}}
{{--                                            @if($duration->availabils->contains($availabil))--}}
{{--                                                <div class="col-4 #">--}}
{{--                                                    <div class="startTime" data-my-variable="{{$availabil->start_time}}">{{\Carbon\Carbon::parse($availabil->start_time)->format('h:i:s')}}</div>--}}
{{--                                                    <div class="startTimeFormat" data-my-variable="{{\Carbon\Carbon::parse($availabil->start_time)->format('h.i')}}">{{\Carbon\Carbon::parse($availabil->start_time)->format('h.i')}}</div>--}}
{{--                                                    <div class="startDateTime" data-my-variable="{{$bucket->rental_date}} {{$availabil->start_time}}">{{$bucket->rental_date}} {{$availabil->start_time}}</div>--}}
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
{{--                                    $bookings = \App\Models\Bucket::where('reserved', '=', '1')->where('rental_date', '=', $bucket->rental_date)->where('type_id', '=', $bucket->type_id)->get();--}}
{{--                                    $startTime = \Carbon\Carbon::parse(\App\Models\Bucket::value('activity_date_start'))->format('h.i');--}}
{{--                                    $endTime =\Carbon\Carbon::parse(\App\Models\Bucket::value('activity_date_end'))->format('H.i');--}}



{{--                                    foreach ($bookings as $booking) {--}}
{{--                                         $startTime = \Carbon\Carbon::parse($booking->activity_date_start)->format('h.i');--}}
{{--                                         $endTime =\Carbon\Carbon::parse($booking->activity_date_end)->format('H.i');--}}

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
                                @if($duration->id == $bucket->duration_id)

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
                                                        <form action="{{route('bucket.update_time', $bucket)}}" method="post">
                                                            @csrf
                                                            @method("PUT")
                                                            <input type="text" class="hidden" name="activity_date_start" value="{{$bucket->rental_date}} {{$phpFormatStr}}">
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
                                                        <form action="{{route('bucket.update_time', $bucket)}}" method="post">
                                                            @csrf
                                                            @method("PUT")
                                                            <input type="text" class="hidden" name="activity_date_start" value="{{$bucket->rental_date}} {{$phpFormatStr0}}">
                                                            <input type="text" class="hidden" name="activity_date_end" value="{{\Carbon\Carbon::parse($phpFormatStr0)->addHour($duration->hour)}}">
                                                            <input type="text" class="hidden" name="avail_id" value="{{$availabil->id}}">
                                                            <input type="text" class="hidden" name="rental_time" value="{{$phpFormatStr0}}">
                                                            @php
                                                                echo "<button class='btn btn-book width-100' type='submit'>$repStr0</button>" ;
                                                            @endphp
                                                        </form>
                                                    </div>
                                                @endif
                                                @if($diffMinDiv >= '3')
                                                    <div class="col-6 col-sm-3 timeBtn" data-my-variable="{{$formatStr1}}">
                                                        <form action="{{route('bucket.update_time', $bucket)}}" method="post">
                                                            @csrf
                                                            @method("PUT")
                                                            <input type="text" class="hidden" name="activity_date_start" value="{{$bucket->rental_date}} {{$phpFormatStr1}}">
                                                            <input type="text" class="hidden" name="activity_date_end" value="{{\Carbon\Carbon::parse($phpFormatStr1)->addHour($duration->hour)}}">
                                                            <input type="text" class="hidden" name="avail_id" value="{{$availabil->id}}">
                                                            <input type="text" class="hidden" name="rental_time" value="{{$phpFormatStr1}}">
                                                            @php
                                                                echo "<button class='btn btn-book width-100' type='submit'>$repStr1</button>" ;
                                                            @endphp
                                                        </form>
                                                    </div>
                                                @endif
                                                @if($diffMinDiv >= '4')
                                                    <div class="col-6 col-sm-3 timeBtn" data-my-variable="{{$formatStr2}}">
                                                        <form action="{{route('bucket.update_time', $bucket)}}" method="post">
                                                            @csrf
                                                            @method("PUT")
                                                            <input type="text" class="hidden" name="activity_date_start" value="{{$bucket->rental_date}} {{$phpFormatStr2}}">
                                                            <input type="text" class="hidden" name="activity_date_end" value="{{\Carbon\Carbon::parse($phpFormatStr2)->addHour($duration->hour)}}">
                                                            <input type="text" class="hidden" name="avail_id" value="{{$availabil->id}}">
                                                            <input type="text" class="hidden" name="rental_time" value="{{$phpFormatStr2}}">
                                                            @php
                                                                echo "<button class='btn btn-book width-100' type='submit'>$repStr2</button>" ;
                                                            @endphp
                                                        </form>
                                                    </div>
                                                @endif
                                                @if($diffMinDiv >= '5')
                                                    <div class="col-6 col-sm-3 timeBtn" data-my-variable="{{$formatStr3}}">
                                                        <form action="{{route('bucket.update_time', $bucket)}}" method="post">
                                                            @csrf
                                                            @method("PUT")
                                                            <input type="text" class="hidden" name="activity_date_start" value="{{$bucket->rental_date}} {{$phpFormatStr3}}">
                                                            <input type="text" class="hidden" name="activity_date_end" value="{{\Carbon\Carbon::parse($phpFormatStr3)->addHour($duration->hour)}}">
                                                            <input type="text" class="hidden" name="avail_id" value="{{$availabil->id}}">
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
                <!-- /Booking Step 3 Time -->


{{--                <!-- Info Section -->--}}
{{--                <div class="row mt-5">--}}
{{--                    <div class="col-3">--}}

{{--                        <h5>Hourly</h5>--}}
{{--                        {{$hrQty}}--}}
{{--                        <br>--}}
{{--                        {{$currentBucketHR}}--}}
{{--                        <br>--}}
{{--                        {{$availableBucketHR}}--}}

{{--                    </div>--}}
{{--                    <div class="col-3">--}}

{{--                        <h5>Half Day</h5>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-4">--}}
{{--                                {{$hdQty}}--}}
{{--                                <br>--}}
{{--                                {{$currentBucketHD}}--}}
{{--                                <br>--}}
{{--                                {{$availableBucketHD}}--}}
{{--                            </div>--}}
{{--                            <div class="col-8">--}}
{{--                                A:   {{$amAvailableHD}}--}}
{{--                                <br>--}}
{{--                                P:   {{$pmAvailableHD}}--}}
{{--                                <br>--}}
{{--                                AM:   {{$amAvailHD}}--}}
{{--                                <br>--}}
{{--                                PM:   {{$pmAvailHD}}--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="col-3">--}}

{{--                        <h5>Full Day</h5>--}}
{{--                        {{$fdQty}}--}}
{{--                        <br>--}}
{{--                        {{$currentBucketFD}}--}}
{{--                        <br>--}}
{{--                        {{$availableBucketFD}}--}}

{{--                    </div>--}}
{{--                    <div class="col-3">--}}
{{--                        TOT:    {{$availableSlots}}--}}
{{--                        <br>--}}
{{--                        HR:    {{$availableHR}}--}}
{{--                        <br>--}}
{{--                        HD:    {{$availableHD}}--}}
{{--                        <br>--}}
{{--                        FD:    {{$availableFD}}--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- /Info Section -->--}}



            </div>
        </div>
    @endsection



    @section('scripts')
        <script src="{{asset('js/sb-admin-2.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment.min.js" integrity="sha512-hUhvpC5f8cgc04OZb55j0KNGh4eh7dLxd/dPSJ5VyzqDWxsayYbojWyl5Tkcgrmb/RVKCRJI1jNlRbVP4WWC4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
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

                var availVehicles = $(".whatever").data("my-variable");
                var availIncrem = $('.availIncrem').html();
                var minDiff = $('.minDiff').html();
                var a = 5;
                var b = 10;
                var c = 2;
                var d = 3;

                var total = availIncrem * minDiff;

                if (availVehicles < 1) {
                    $('.timeBtn').addClass(".hidden");
                }

                // alert(availVehicles);

                // $('.startTime').each(function() {
                //     var start_time = $(".startTimeFormat").data("my-variable");
                //     var availIncrem = "15";
                //     // var availIncrem = $('.availIncrem').html();
                //
                //     var total = start_time + (availIncrem * 10000);
                //
                //     alert(total);
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




                // $(".timeBtn").on("load", function(){
                //     $(this).addClass('hidden');
                // });


                // $('.startTime').each(function() {
                //
                //     $( this ).each(function() {
                //         $availIncrem = $('.availIncrem').html();
                //         $startTime = $('.start_time').html();
                //         $startDateTime = $('.start_date_time').html();
                //         $endTime = $('.end_time').html();
                //         $minDiff = $('.minDiff').html();
                //
                //         // $newDateTime = moment($startDateTime, "YYYY-MM-DD hh:mm:ss").add(10, 'minutes').format('hh:mm:ss');
                //
                //         alert($startDateTime);
                //
                //         // var currentDateTime = moment().add(10, 'minutes')
                //         //     .format('hh:mm:ss');
                //         // console.log(currentDateTime);
                //
                //
                //
                //         $('<div id="' + $( this ).html() + '"> ' + $( this ).html() + ' </div> <br>').appendTo("#newTimes"); //appendTo: Append at inside bottom
                //
                //     });
                //
                //
                // });






            });

            // Works!
            //
            // $('.startTime').each(function() {
            //
            //     $( this ).each(function() {
            //         $hour = $('.varHour').html();
            //
            //         $('<div id="' + $( this ).html() + '"> ' + $( this ).html() + ' </div> <br>' +
            //             '<div id="' + $( this ).html() + '"> ' + $( this ).html() + ' </div> <br>' +
            //             '<div id="' + $( this ).html() + '"> ' + $( this ).html() + ' </div> <br>').appendTo("#newTimes"); //appendTo: Append at inside bottom
            //
            //     });
            //
            //
            // });


            // WORKS!
            // $startT = $('.startTime').each(function() {
            //
            //     $('<div> ' + $( this ).html() + ' </div>').appendTo("#newTimes"); //appendTo: Append at inside bottom
            //
            //
            // });



            // $(document).ready(function() {
            //     $("#button").click(function() {
            //         var paraId = "firstpara";
            //         var spanId = "span";
            //         $("#" + paraId).append($("#" + spanId).html());
            //     });
            // })



        </script>
    @endsection

</x-home-master>
