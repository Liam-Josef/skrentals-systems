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
                        <i class="fa fa-chevron-right"></i> Duration
                    </p>
                </div>
                <!-- /Title -->

                <!-- SeaDoo Info -->
                <img src="{{asset('storage/' . $type->image)}}" alt="{{$type->img_alt}}" class="page-img" />
                @if($type->description != '')
                    <h2 class="section-header">{{$type->description}}</h2>
                    <h3 class="text-center">Select Duration</h3>
                @else
                    <h2 class="section-header">{{$type->name}}</h2>
                    <h3 class="text-center">Select Duration</h3>
                @endif


            <!-- Booking Step 2 -->
                <div class="row">
                    <div class="col-sm-4">
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
                                <input type="text" class="hidden" name="duration_id" value="0">
                                <input type="text" class="hidden" name="duration_name" value="none">
                                <input type="text" class="hidden" name="type_id" value="{{$type->id}}">
                                <input type="text" class="hidden" name="type_name" value="{{$type->slug}}">
                                <input type="text" class="form-control datepicker rentalDate" name="rental_date" id="datepicker" value="{{$bucket->rental_date}}" placeholder="Select Date">
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-8">
                        <div class="row">

                            {{--                            {{$durationAvailabils}}--}}

                            @foreach($durations as $duration)
                                @if($type->durations->contains($duration))

                                    <div class="col-sm-4">
                                        <form action="{{route('bucket.duration', $bucket)}}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="text" class="hidden" name="duration_id" value="{{$duration->id}}">
                                            <input type="text" class="hidden" name="duration_name" value="{{$duration->slug}}">
                                            <input type="text" class="hidden" name="hour" value="{{$duration->hour}}">

                                            @foreach($duration->availabils as $durAvail)
                                                <input type="text" class="hidden" name="avail_id" value="{{$durAvail->id}}">
                                            @endforeach
                                            <button class="btn btn-book" type="submit">

                                                @if(strpos($duration->name, 'SeaDoo') !== false)
                                                    Half Day
                                                @else
                                                    {{$duration->name}}
                                                @endif
                                            </button>
                                        </form>
                                        <br>

                                        @foreach($duration->availabils as $durAvail)
                                            {{$durAvail->start_time}} - {{$durAvail->end_time}}
                                            <br>

                                        @endforeach


                                        Hr: {{$duration->hour}}

                                        <br>


                                    </div>

                                @endif
                            @endforeach

                        </div>
                    </div>
                </div>
                <!-- /Booking Step 2 Duration -->

                <!-- Info Section -->
                <div class="row mt-5 hidden">
                    <div class="col-3">

                        <h5>Hourly</h5>
                        {{$hrQty}}
                        <br>
                        {{$currentBucketHR}}
                        <br>
                        {{$availableBucketHR}}

                    </div>
                    <div class="col-3">

                        <h5>Half Day</h5>
                        <div class="row">
                            <div class="col-4">
                                {{$hdQty}}
                                <br>
                                {{$currentBucketHD}}
                                <br>
                                {{$availableBucketHD}}
                            </div>
                            <div class="col-8">
                                A:   {{$amAvailableHD}}
                                <br>
                                P:   {{$pmAvailableHD}}
                                <br>
                                AM:   {{$amAvailHD}}
                                <br>
                                PM:   {{$pmAvailHD}}
                            </div>
                        </div>

                    </div>
                    <div class="col-3">

                        <h5>Full Day</h5>
                        {{$fdQty}}
                        <br>
                        {{$currentBucketFD}}
                        <br>
                        {{$availableBucketFD}}

                    </div>
                    <div class="col-3">
                        TOT:    {{$availableSlots}}
                        <br>
                        HR:    {{$availableHR}}
                        <br>
                        HD:    {{$availableHD}}
                        <br>
                        FD:    {{$availableFD}}
                    </div>
                </div>
                <!-- /Info Section -->


                <!-- SeaDoo Info -->
                {{--                @if($type->has('durations'))--}}
                {{--                    @foreach($type->durations as $duration)--}}
                {{--                        <p class="text-center">--}}
                {{--                            @if($duration->has('prices'))--}}
                {{--                                @foreach($duration->prices as $price)--}}
                {{--                                    @if($duration->id == $price->duration_id && $type->id == $price->type_id)--}}
                {{--                                        ${{$price->amount}} ---}}
                {{--                                        {{$duration->name}} ( {{$duration->hour}} hour--}}
                {{--                                        @if($price->notes != '')--}}
                {{--                                            - {{$price->notes}}--}}
                {{--                                        @endif--}}
                {{--                                     )--}}
                {{--                                    @endif--}}
                {{--                                @endforeach--}}
                {{--                            @endif--}}
                {{--                        </p>--}}


                {{--                    @endforeach--}}
                {{--                @else--}}
                {{--                    No Duration--}}
                {{--                @endif--}}

                <p class="text-center">
                    Ask Us About Our Multiple Day Discounts
                </p>
                {{--                                        <a href="#" class="btn btn-book" data-toggle="modal" data-target="#booknow{{$type->id}}">Click to Book Now</a>--}}
                <a href="#" class="btn btn-book">Click to Book Now</a>



                <!-- Confirmation Modal -->
                <div class="modal fade mt-5" id="booknow" tabindex="-1" role="dialog" aria-labelledby="bookNow" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                {{--                                <h3>Book a <span>{{$type->name}}</span></h3>--}}
                            </div>
                            <div class="modal-body">
                                <div class="row">


                                </div>
                            </div>
                            <div class="modal-footer">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Confirmation Modal -->





                <!-- /SeaDoo Info -->

            </div>
        </div>
    @endsection



    @section('scripts')
        <script src="{{asset('js/sb-admin-2.js')}}"></script>

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




        </script>
    @endsection

</x-home-master>
