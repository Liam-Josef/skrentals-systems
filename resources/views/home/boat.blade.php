<x-home-master>

    @section('styles')

    @endsection

    @foreach($applications as $application)

        @section('browser_title')
            Boat Rentals | {{$application->name}}
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
                <h1 class="page-title">Boat Rentals</h1>
                <div class="breadcrumbs">
                    <p>
                        <a href="{{route('home.index')}}" class="link">Home </a>
                        <i class="fa fa-chevron-right"></i> Rentals <i class="fa fa-chevron-right"></i> Boat Rentals
                    </p>
                </div>
                <!-- /Title -->

                <div class="row">
                    <div class="col-sm-6">
                        <!-- Scarab Info -->
                        @foreach($scarab as $scarab)
                            <img src="{{asset('storage/' . $scarab->image)}}" alt="{{$scarab->img_alt}}" class="page-img" />
                            @if($scarab->description != '')
                                <h2 class="section-header">{{$scarab->description}}</h2>
                            @else
                                <h2 class="section-header">{{$scarab->name}}</h2>
                            @endif


                            @if($scarab->has('durations'))
                                @foreach($scarab->durations as $duration)
                                    <p class="text-center">
                                        @if($duration->has('prices'))
                                            @foreach($duration->prices as $price)
                                                @if($duration->id == $price->duration_id && $scarab->id == $price->type_id)
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
                            <a href="{{route('home.book_rental', $scarab)}}" class="btn btn-book">Click to Book Now</a>

                            <p class="text-center">
                                $2000 Damage Deposit Required.  Fuel is NOT included.  Drivers License or Picture Identification with address required.  MUST BE 18 or OVER to rent.  We encourage the customer to use On-Site but will allow 'trailer aways' for multi-day rentals.  Boaters Education Cards are NOT Required.
                            </p>

                            <p class="text-center">
                                Alcohol consumption while operating a motor vehicle is PROHIBITED on the water. A designated driver is required on all vehicles with alcohol.
                            </p>


                            <img src="{{asset('/storage/app-images/215-red-top-boat-pg.jpg')}}" alt="Two people riding on a SeaDoo" class="page-img img-responsive" />

                            <p class="large text-center">
                                SPECS
                            </p>
                            <p class="text-center">
                                10 person capacity 310 HP / 44-gallon tank / Bimini Top for shade Swim Platform Built-in Stereo / Radio with USB/Aux/Bluetooth connectivity Capable of pulling towables!
                            </p>

                            <!-- Scarab Carousel -->
                            <div id="carouselIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{asset('/storage/app-images/scarab-1.jpg')}}" class="d-block w-100" alt="People riding on a SeaDoo">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('/storage/app-images/scarab-2.jpg')}}" class="d-block w-100" alt="People riding on a Pontoon Boat">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('/storage/app-images/scarab-3.jpg')}}" class="d-block w-100" alt="People riding on a Scarab Jetboat">
                                    </div>
                                </div>
                            </div>
                            <!-- /Scarab Carousel -->
                        @endforeach
                    <!-- /Scarab Info -->
                    </div>
                    <div class="col-sm-6">
                        <!-- Pontoon Info -->
                        @foreach($pontoon as $pontoon)
                            <img src="{{asset('storage/' . $pontoon->image)}}" alt="{{$pontoon->img_alt}}" class="page-img" />
                            @if($pontoon->description != '')
                                <h2 class="section-header">{{$pontoon->description}}</h2>
                            @else
                                <h2 class="section-header">{{$pontoon->name}}</h2>
                            @endif

                            @if($pontoon->has('durations'))
                                @foreach($pontoon->durations as $duration)
                                    <p class="text-center">
                                        @if($duration->has('prices'))
                                            @foreach($duration->prices as $price)
                                                @if($duration->id == $price->duration_id && $pontoon->id == $price->type_id)
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
                            <a href="{{route('home.book_rental', $pontoon)}}" class="btn btn-book">Click to Book Now</a>

                            <p class="text-center">
                                $2000 Damage Deposit Required.  Fuel is included on half-day rentals, but NOT on full-day rentals.  Drivers License or Picture Identification with address required.  MUST BE 18 or OVER to rent.  Boaters Education Cards are NOT Required.
                            </p>

                            <p class="text-center">
                                Alcohol consumption while operating a motor vehicle is PROHIBITED on the water. A designated driver is required on all vehicles with alcohol.
                            </p>


                            <img src="{{asset('/storage/app-images/pontoon-overhead.jpg')}}" alt="Two people riding on a SeaDoo" class="page-img img-responsive" />

                            <p class="large text-center">
                                SPECS
                            </p>
                            <p class="text-center">
                                12 person capacity 60 HP engine 39-gallon tank Built-in Radio with USB/Aux/Bluetooth Bimini Top for shade.
                            </p>

                            <!-- Scarab Carousel -->
                            <div id="carouselIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{asset('/storage/app-images/pontoon-1.jpg')}}" class="d-block w-100" alt="People riding on a SeaDoo">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('/storage/app-images/pontoon-2.jpg')}}" class="d-block w-100" alt="People riding on a Pontoon Boat">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('/storage/app-images/pontoon-3.jpg')}}" class="d-block w-100" alt="People riding on a Scarab Jetboat">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('/storage/app-images/pontoon-4.jpg')}}" class="d-block w-100" alt="People riding on a Scarab Jetboat">
                                    </div>
                                </div>
                            </div>
                            <!-- /Pontoon Carousel -->
                        @endforeach
                        <!-- /Pontoon Info -->
                    </div>
                </div>



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

                <!-- /Boat Info -->
            </div>
        </div>
    @endsection



    @section('scripts')

    @endsection

</x-home-master>
