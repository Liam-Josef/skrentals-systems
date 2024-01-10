<x-home-master>

    @section('styles')

    @endsection

    @foreach($applications as $application)

    @section('browser_title')

        Kayak & SUP Rentals | {{$application->name}}
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
                <h1 class="page-title">Kayak & Paddleboard Rentals</h1>
                <div class="breadcrumbs">
                    <p>
                        <a href="{{route('home.index')}}" class="link">Home </a>
                        <i class="fa fa-chevron-right"></i> Rentals <i class="fa fa-chevron-right"></i> Kayak & SUP Rentals
                    </p>
                </div>
                <!-- /Title -->

                <div class="row">
                    <div class="col-sm-4">
                        <!-- Single Info -->
                        <img src="{{asset('/storage/app-images/single-kayak.jpg')}}" alt="A single kayak with a white background" class="page-img-80" />
                        <h2 class="section-header mt-3">SINGLE KAYAKS</h2>

                        <p class="text-center">
                            2hr - $30/3hr - $40
                            <br>
                            4hr - $50
                            <br>
                            Full Day - $65
                            <br>
                            2 Days - $120
                            <br>
                            +$40/day each additional day
                        </p>

                        <a href="#" class="btn btn-book-3">Click to Book Now</a>
                        <!-- /Single Info -->
                    </div>
                    <div class="col-sm-4">
                        <!-- Double Info -->
                        <img src="{{asset('/storage/app-images/double-kayak.jpg')}}" alt="A double kayak with a white background" class="page-img-80" />
                        <h2 class="section-header mt-3">DOUBLE KAYAKS</h2>

                        <p class="text-center">
                            2hr - $45 / 3hr - $60
                            <br>
                            4hr - $75
                            <br>
                            Full Day - $95
                            <br>
                            2 Days - $165
                            <br>
                            +$40/day each additional day
                        </p>

                        <a href="#" class="btn btn-book-3">Click to Book Now</a>
                        <!-- /Double Info -->
                    </div>
                    <div class="col-sm-4">
                        <!-- Paddleboard Info -->
                        <img src="{{asset('/storage/app-images/paddleboard.jpg')}}" alt="A paddleboard with a white background" class="page-img-80" />
                        <h2 class="section-header mt-3">PADDLE BOARD</h2>

                        <p class="text-center">
                            2hr - $30/3hr - $40
                            <br>
                            4hr - $50
                            <br>
                            Full Day - $65
                            <br>
                            2 Days - $120
                            <br>
                            +$40/day each additional day
                        </p>

                        <a href="#" class="btn btn-book-3">Click to Book Now</a>
                        <!-- /Paddleboard Info -->
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
                    Our dock and operation is located on the East bank of the Willamette River between the Ross Island Bridge and the
                    Tilikum Crossing, one block south of the OMSI Max Station.  Our Rental Office is the Red Shed located at the entrance
                    of the parking lot for Polaris of Portland/SKNW Powersports dealership.
                </p>
                <h4 class="text-yellow">
                    PARKING
                </h4>
                <p>
                    Parking is limited! We recommend carpooling and/or using ride-share services such as Uber and Lyft. Customer may
                    park along buildings in the Division Place 'alley' wherever you find an open spot, but please be respectful of
                    the neighboring businesses down here to not block access to gates, garage doors, etc.  We have been asked NOT to
                    park in The Dealership parking lot during their business hours Tuesday thru Saturday.  Outside our Division Place
                    'alley' surrounding blocks are Zone G -  Free 2hr parking Mon-Fri, with no limits on weekends!  There are also
                    surrounding parking lots from OMSI to the Train Museum on days they are closed for additional options.  Come to
                    the Rental Office for direction if need additional help.
                </p>
                <h4 class="text-yellow">
                    CHECKING IN
                </h4>
                <p>
                    We recommend dropping off items you do not wish to carry and using our carts at the Rental Office (Red Shed) before parking.
                    Customers are to stay near the parking lot and NOT go down to our dock until instructed to do so by staff.  Once parked,
                    just walk up to our Rental Office where we do all the paper work; asking for identification, collect rental fee, damage
                    deposit (carbon copy of card), sign waivers, etc. This will require the cardholder for the rental to be present.
                </p>
                <h4 class="text-yellow">
                    DAMAGE DEPOSIT
                </h4>
                <p class="">
                    An imprint of your credit/debit card will be taken, as well as a pre-authorization for the listed damage deposit amount,
                    verifying the funds and freezing them for up to 5 business days. Some modern “security cards” no longer come with raised
                    lettering, making them un-imprint able. Without the imprint, we cannot Pre-Authorize and must treat the deposit card as
                    we would cash. Pre-Auth deposits require half the amount of the listed damage deposit, refunding the deposit upon safe return of the Snowmobile.
                </p>
                <h4 class="text-yellow">
                    ARRIVING AT THE DOCK
                </h4>
                <p class="">
                    From here, we will escort customers down to the dock and provide all safety related items (life jackets, throw cushions, etc.)
                    and we have charts of the river to view out surrounding waterways. We encourage customers to wear foot protection and appropriate
                    clothing based upon conditions.  All operators are then taken down to the equipment to be rented.  Staff will at this time review
                    our safety check out list covering operational topics, condition of equipment, safety items location, overview of rules and laws,
                    and items to avoid damage.
                </p>
                <p>
                    From our dock near Downtown Portland it is a 20-45 minute ride depending upon conditions and which craft your rent to reach
                    the Columbia River or Oregon City Falls.  We have been doing watercraft rentals since 1994.  Our fleet is one of the nicest
                    you will find anywhere in this region of the country.  Happy boating!
                </p>
                <h4 class="text-yellow">
                    CANCELLATIONS
                </h4>
                <p class="pb-5">
                    Customers have up to 5 days / 120 hrs before the rental to cancel. If you cancel before 5 days prior to the rental date we do
                    not charge you any penalty, but once we are within 5 days of the scheduled rental and you decide to cancel we then charge $100
                    or half of the rental fee which ever one is greater.
                </p>
            </div>
        </div>
    @endsection



    @section('scripts')

    @endsection

</x-home-master>
