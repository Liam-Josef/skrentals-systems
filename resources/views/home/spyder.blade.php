<x-home-master>

    @section('styles')

    @endsection

    @foreach($applications as $application)

    @section('browser_title')

        Spyder Rentals | {{$application->name}}
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
                <h1 class="page-title">Spyder Rentals</h1>
                <div class="breadcrumbs">
                    <p>
                        <a href="{{route('home.index')}}" class="link">Home </a>
                        <i class="fa fa-chevron-right"></i> Rentals <i class="fa fa-chevron-right"></i> Spyder Rentals
                    </p>
                </div>
                <!-- /Title -->

                <div class="row">
                    <div class="col-sm-12">
                        <!-- Spyder Info -->
                        @foreach($spyder as $spyder)
                            <img src="{{asset('storage/' . $spyder->image)}}" alt="{{$spyder->img_alt}}" class="page-img-60" />
                            @if($spyder->description != '')
                                <h2 class="section-header">{{$spyder->description}}</h2>
                            @else
                                <h2 class="section-header">{{$spyder->name}}</h2>
                            @endif

                            @if($spyder->has('durations'))
                                @foreach($spyder->durations as $duration)
                                    <p class="text-center">
                                        @if($duration->has('prices'))
                                            @foreach($duration->prices as $price)
                                                @if($duration->id == $price->duration_id && $spyder->id == $price->type_id)
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
                                + $25/per day motorcycle insurance
                                <br>
                                Ask Us About Our Multiple Day Discounts
                            </p>

                            <a href="#" class="btn btn-book">Click to Book Now</a>

                            <p class="text-center">
                                $2000 Damage Deposit per Unit <br>
                                All Half Day and Full Day rentals do not include fuel
                            </p>

                            <p class="text-center">
                                To Rent:
                                <br>
                                Must have Motorcycle Endorsement
                                <br>
                                Must be 18 years of age
                                <br>
                                Call <a href="tel:503-284-6447">(503) 284-6447</a> to setup Reservation or for further questions
                            </p>

                            <img src="{{asset('/storage/app-images/3-Spyders.jpg')}}" alt="A group\ three-wheel Spyder motorcycle driving down the road" class="page-img-60" />

                            <h3 class="section-header mt-3 mb-3">SPECS</h3>
                            <p class="text-center">
                                6.6 gallon tank
                                <br>
                                100HP engine
                                <br>
                                Semi-auto Transmission
                                <br>
                                Adjustable Rear Air Suspension
                                <br>
                                Rider Floorboards
                                <br>
                                Ultra comfort saddle
                                <br>
                                Roadster Touring
                            </p>
                            <br>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/m7BAxf5NtBA?si=nBuC3xbypu-vU5fB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                            <!-- /Spyder Carousel -->
                        @endforeach
                        <!-- /Spyder Info -->
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
                    Customers will come to 250 SE Division Place in Portland on the Willamette River three blocks South of OMSI.
                    Our dock and operation is located on the East bank of the Willamette River between the Ross Island Bridge and the Tilikum Crossing,
                    one block south of the OMSI Max Station.  Our Rental Office is the Red Shed located at the entrance of the parking lot for
                    Polaris of Portland/SKNW Powersports dealership.
                </p>
                <h4 class="text-yellow">
                    PARKING
                </h4>
                <p>
                    Parking is limited! We recommend carpooling and/or using ride-share services such as Uber and Lyft. Customer may park along
                    buildings in the Division Place 'alley' wherever you find an un-marked spot, but please be respectful
                    of the neighboring businesses down here to not block access to gates, garage doors, etc.
                    We have been asked NOT to park in The Dealership parking lot during their business hours Tuesday thru Saturday.
                    Outside our Division Place 'alley' surrounding blocks are Zone G -  Free 2hr parking Mon-Fri, with no limits on weekends!
                    There are also surrounding parking lots from OMSI to the Train Museum on days they are closed for additional options.
                    Come to the Rental Office for direction if you need additional help.
                </p>
                <h4 class="text-yellow">
                    CHECKING IN
                </h4>
                <p>
                    Once parked, just walk up to our Rental Office where we do all the paper work; asking for identification,
                    damage deposit (verify funds available $2000/per Spyder), sign waivers, and collect rental fee (if walk-up).
                    This will require the cardholder for the rental, as well as any additional riders to be present.
                </p>
                <h4 class="text-yellow">
                    DAMAGE DEPOSIT
                </h4>
                <p class="pb-5">
                    An imprint of your credit/debit card will be taken, as well as a pre-authorization for the listed damage deposit amount,
                    verifying the funds and freezing them for up to 5 business days. Some modern “security cards” no longer come with raised
                    lettering, making them un-imprint able. Without the imprint, we cannot Pre-Authorize and must treat the deposit card as
                    we would cash. Pre-Auth deposits require half the amount of the listed damage deposit, refunding the deposit upon safe return of the Spyder.
                </p>
                <!-- /SeaDoo Info -->
            </div>
        </div>
    @endsection



    @section('scripts')

    @endsection

</x-home-master>
