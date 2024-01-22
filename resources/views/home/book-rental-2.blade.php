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
                        <i class="fa fa-chevron-right"></i> Book
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
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="rental_date">Rental Date</label>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="text-right">{{Carbon\Carbon::parse($bucket->rental_date)->format('D, M d, Y')}}</h6>
                                    </div>
                                </div>
                                <input type="text" class="form-control datepicker rentalDate" name="rental_date" id="datepicker" value="{{$bucket->rental_date}}" placeholder="Select Date">
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-8">
                       @if($amAvailHD > 0)
                            <form action="#" method="post">
                                @csrf
                                @method('PUT')

                                <button class="btn btn-alert" type="submit">10:15am</button>
                            </form>
                       @endif
                    </div>
                </div>
                <!-- /Booking Step 2 -->

                <!-- Info Section -->
                <div class="row">
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
