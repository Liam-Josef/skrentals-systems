<x-home-master>

    @section('styles')

    @endsection

    @foreach($applications as $application)

        @section('browser_title')
            SeaDoo Rentals | {{$application->name}}
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
                <h1 class="page-title">Sea-Doo Rentals</h1>
                <div class="breadcrumbs">
                    <p>
                        <a href="{{route('home.index')}}" class="link">Home </a>
                        <i class="fa fa-chevron-right"></i> Rentals <i class="fa fa-chevron-right"></i> Sea-Doo Rentals
                    </p>
                </div>
                <!-- /Title -->

                <!-- SeaDoo Info -->
                @foreach($type as $type)
                    <img src="{{asset('storage/' . $type->image)}}" alt="{{$type->img_alt}}" class="page-img" />
                    @if($type->description != '')
                        <h2 class="section-header">{{$type->description}}</h2>
                    @else
                        <h2 class="section-header">{{$type->name}}</h2>
                    @endif

                    @if($type->has('durations'))
                        @foreach($type->durations as $duration)
                            <p class="text-center">
                                @if($duration->has('prices'))
                                    @foreach($duration->prices as $price)
                                        @if($duration->id == $price->duration_id && $type->id == $price->type_id)
                                            ${{$price->amount}} -
                                            {{$duration->name}} ( {{$duration->hour}} hour
                                            @if($price->notes != '')
                                                - {{$price->notes}}
                                            @endif
                                         )
                                        @endif
                                    @endforeach
                                @endif
                            </p>


                        @endforeach
                    @else
                        No Duration
                    @endif

                    <p class="text-center">
                        Ask Us About Our Multiple Day Discounts
                    </p>
{{--                    <a href="#" class="btn btn-book" data-toggle="modal" data-target="#booknow{{$type->id}}">Click to Book Now</a>--}}
                    <a href="{{route('home.book_rental', $type)}}" class="btn btn-book">Click to Book Now</a>

                    <p class="text-center">
                        $2000 Damage Deposit per unit.  Life Vests and required Safety items are provided.  Capacity 2 adults 1 child maximum 19 gallon fuel tank.  All Hourly rentals include fuel.  Half Day and Full Day rentals DO NOT include fuel.
                    </p>

                    <p class="text-center">
                        Drivers License or Photo identification with address are required upon rental.  MUST BE 18 or OVER to rent.  We offer trailer-a-way for Multi-day Rentals.  Boaters Education card are NOT required.
                    </p>

                    <p class="text-center">
                        Alcohol consumption while operating a motor vehicle is PROHIBITED on the water. A designated driver is required on all vehicles with alcohol.
                    </p>

                    <p class="text-center">
                        Call <a href="tel:503-284-6447" class="text-primary">(503)284-64478</a>
                    </p>

                    <img src="{{asset('/storage/app-images/sea-doo-seadoo-pg.png')}}" alt="Two people riding on a SeaDoo" class="page-img img-responsive" />

                    <iframe width="100%" height="450" src="https://www.youtube.com/embed/uhNCJLRKVVw?si=zSBLMc5lfVx20-fD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                    <img src="{{asset('/storage/app-images/sea-doo-seadoo-pg-2.png')}}" alt="Two people riding on a SeaDoo" class="page-img img-responsive" />

                    <iframe width="100%" height="450" src="https://www.youtube.com/embed/JHfKdNDfzF0?si=xt6QXDi9uop7I7tl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                    <p class="large text-center">
                        LOCATION: 250 SE DIVISION PLACE PORTLAND OR 97202
                    </p>
                    <p class="large text-center">
                        HOURS OF OPERATION: 9:30AM-7:00PM
                    </p>
                    <p class="med text-center">
                        7 DAYS A WEEK (DURING SUMMER)
                    </p>
                    <h3 class="large text-center mt-5 text-primary">
                        HOW IT WORKS
                    </h3>
                    <h4 class="text-yellow">
                        Getting Here
                    </h4>
                    <p>
                        Customers will come to 250 SE Division Place in Portland on the Willamette River three blocks South of OMSI.  Our dock and operation is located on the East bank of the Willamette River between the Ross Island Bridge and the Tilikum Crossing, one block south of the OMSI Max Station.  Our Rental Office is the Red Shed located at the entrance of the parking lot for Polaris of Portland/SKNW Powersports dealership.
                    </p>
                    <h4 class="text-yellow">
                        PARKING
                    </h4>
                    <p>
                        Parking is limited! We recommend carpooling and/or using ride-share services such as Uber and Lyft. Customer may park along buildings in the Division Place 'alley' wherever you find an un-marked spot, but please be respectful of the neighboring businesses down here to not block access to gates, garage doors, etc.  We have been asked NOT to park in The Dealership parking lot during their business hours Tuesday thru Saturday.  Outside our Division Place 'alley' surrounding blocks are Zone G -  Free 2hr parking Mon-Fri, with no limits on weekends!  There are also surrounding parking lots from OMSI to the Train Museum on days they are closed for additional options.  Come to the Rental Office for direction if you need additional help.
                    </p>
                    <h4 class="text-yellow">
                        CHECKING IN
                    </h4>
                    <p>
                        We recommend dropping off items you do not wish to carry and using our carts at the Rental Office (Red Shed) before parking.  Customers are to stay near the parking lot and NOT go down to our dock until instructed to do so by staff.  Once parked, just walk up to our Rental Office where we do all the paper work; asking for identification, collect rental fee, damage deposit (verify funds available $500-$2000 depending upon model), sign waivers, fill out a form for OSMB, etc. This will require the cardholder for the rental, as well as any additional drivers to be present.
                    </p>
                    <p>
                        Alcohol consumption while operating a motor vehicle is PROHIBITED on the water. A designated driver is required on all vehicles with alcohol.
                    </p>
                    <h4 class="text-yellow">
                        DAMAGE DEPOSIT
                    </h4>
                    <p>
                        An imprint of your credit/debit card will be taken, as well as a pre-authorization for the listed damage deposit amount, verifying the funds and freezing them for up to 5 business days. Some modern “security cards” no longer come with raised lettering, making them un-imprint able. Without the imprint, we cannot Pre-Authorize and must treat the deposit card as we would cash. Pre-Auth deposits require half the amount of the listed damage deposit, refunding the deposit upon safe return of the vessel.
                    </p>

                    <h4 class="text-yellow">
                        ARRIVING AT THE DOCK
                    </h4>
                    <p>
                        We recommend dropping off items you do not wish to carry and using our carts at the Rental Office (Red Shed) before parking.  Customers are to stay near the parking lot and NOT go down to our dock until instructed to do so by staff.  Once parked, just walk up to our Rental Office where we do all the paper work; asking for identification, collect rental fee, damage deposit (verify funds available $500-$2000 depending upon model), sign waivers, fill out a form for OSMB, etc. This will require the cardholder for the rental, as well as any additional drivers to be present.
                    </p>
                    <p>
                        From our dock near Downtown Portland it is a 20-45 minute ride depending upon conditions and which craft your rent to reach the Columbia River or Oregon City Falls.  We have been doing watercraft rentals since 1994.  Our fleet is one of the nicest you will find anywhere in this region of the country.  Happy boating!
                    </p>
                    <h4 class="text-yellow">
                        CANCELLATIONS
                    </h4>
                    <p class="pb-5 mb-0">
                        Customers have up to 5 days / 120 hrs before the rental to cancel. If you cancel before 5 days prior to the rental date we do not charge you any penalty, but once we are within 5 days of the scheduled rental and you decide to cancel we then charge $100 or half of the rental fee which ever one is greater.
                    </p>



{{--                TODO - Need to finish dynamic modal--}}
                    <div class="modal fade mt-5" id="booknow{{$type->id}}" tabindex="-1" role="dialog" aria-labelledby="bookNow" aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3>Book a <span>{{$type->name}}</span></h3>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <label for="rental_date">Rental Date</label>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="text" id="alternate" class="form-control-plaintext">
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control datepicker rentalDate" id="datepicker">
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="div1" class="dynamicAvail">
                                                <div class="results"></div>
                                                <div class="row">


                                                    {{$seadooHD}}




                                                    <?php

//                                                    $unit_id = (isset($_POST['name'])) ? $_POST['name'] : 'Not Yet...';

                                                    if (isset($_POST["name"])):
                                                        $unit_id = $_POST["name"];
                                                    else:
                                                        $unit_id = 'Not Yet...';
                                                    endif;

                                                    $unit_id

                                                    ?>
                                                    <div id="<?= $unit_id; ?>">
                                                        <?= $unit_id; ?>
                                                    </div>



                                                    @foreach($buckets as $bucket)
                                                        @if($bucket->rental_date == $unit_id )
                                                            {{$seadooHD}}
                                                        @endif
                                                    @endforeach


{{--                                                    @foreach($seadooHD as $type)--}}
{{--                                                        @foreach($buckets as $bucket)--}}
{{--                                                            @if($bucket->rental_date == Form::input('type', 'datepicker', ['class'=>'datepicker']) )--}}
{{--                                                                <div class="col-4">--}}




{{--    --}}{{--                                                                @foreach($buckets as $bucket)--}}
{{--    --}}{{--                                                                    {{$bucket->rental_date}}--}}
{{--    --}}{{--                                                                    $rental->status == 'Pre-Check' && strpos($rental->activity_date, $today) !== false)--}}
{{--    --}}{{--                                                                    @if($bucket->rental_date == '2024-01-02')--}}
{{--    --}}{{--                                                                        {{$seadooHD}}--}}
{{--    --}}{{--                                                                    @else--}}
{{--    --}}{{--                                                                        Nothing--}}
{{--    --}}{{--                                                                    @endif--}}
{{--    --}}{{--                                                                @endforeach--}}

{{--    --}}{{--                                                                {{$seadooHD}}--}}
{{--                                                                </div>--}}
{{--                                                            @endif--}}
{{--                                                        @endforeach--}}
{{--                                                    @endforeach--}}

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">

                                </div>
                            </div>
                        </div>
                    </div>




                @endforeach

                <!-- /SeaDoo Info -->

            </div>
        </div>
    @endsection



    @section('scripts')
        <script src="{{asset('js/sb-admin-2.js')}}"></script>

        <script>
            $(document).ready(function() {

                $('.datepicker').datepicker('show');
                $('.dynamicAvail').addClass('hidden');
            });
            $(function() {
                $date = $( "#datepicker" ).datepicker("getDate");
                $('#datepicker').datepicker({
                    changeMonth: true,
                    changeYear: true,
                    numberOfMonths: 3,
                    showButtonPanel: true,
                    dateFormat: "yy-m-dd",
                    altField: "#alternate",
                    altFormat: "DD, MM d, yy",
                    onSelect: function() {
                        $date = $("#datepicker").datepicker({ dateFormat: 'dd-mm-yy' }).val();

                        $('.results').html($date);

                        $('.dynamicAvail').append('<div id= ' + $date  + '>');

                        var unit_id = $date;

                        console.log(unit_id);
                        $.ajax({
                            url: '/rentals/sea-doo-rentals',
                            type: 'POST',
                            data: {name: unit_id},
                            success: function(data){
                                console.log(data);
                            }
                        });

                    }
                });
            });




        </script>
    @endsection

</x-home-master>
