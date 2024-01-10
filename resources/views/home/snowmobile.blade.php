<x-home-master>

    @section('styles')

    @endsection

    @foreach($applications as $application)

    @section('browser_title')

        Snowmobile Rentals | {{$application->name}}
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
                <h1 class="page-title">Snowmobile Rentals</h1>
                <div class="breadcrumbs">
                    <p>
                        <a href="{{route('home.index')}}" class="link">Home </a>
                        <i class="fa fa-chevron-right"></i> Rentals <i class="fa fa-chevron-right"></i> Snowmobile Rentals
                    </p>
                </div>
                <!-- /Title -->

                <div class="row">
                    <div class="col-sm-6">
                        <!-- Summit Info -->
                        <img src="{{asset('/storage/app-images/summit.jpg')}}" alt="A group three-wheel Snowmobile motorcycle driving down the road" class="page-img-80" />
                        <h2 class="section-header mt-3">SUMMIT 154 SP</h2>

                        <p class="text-center">
                            $300 Full Day
                            <br>
                            Single Seat
                            <br>
                            Ask Us About Our Multiple Day Discounts
                        </p>

                        <a href="#" class="btn btn-book">Click to Book Now</a>
                        <!-- /Summit Info -->
                    </div>
                    <div class="col-sm-6">
                        <!-- Renegade Info -->
                        <img src="{{asset('/storage/app-images/renegade.jpg')}}" alt="A group three-wheel Snowmobile motorcycle driving down the road" class="page-img-80" />
                        <h2 class="section-header mt-3">RENEGADE BACKCOUNTRY</h2>

                        <p class="text-center">
                            $325 Full Day
                            <br>
                            Two Seater
                            <br>
                            Ask Us About Our Multiple Day Discounts
                        </p>

                        <a href="#" class="btn btn-book">Click to Book Now</a>
                        <!-- /Renegade Info -->
                    </div>
                </div>

                <div class="row">
                    <p class="text-center">
                        $1000 - $2000 Security Deposit per Unit <br>
                        600 E-TEC engine <br>
                        11 gallon tank <br>
                        Trailer Included
                    </p>

                    <p class="text-center">
                        ** Book your reservation to start on the first day you want to ride, the snowmobile(s) will be picked up at 5:15pm the day prior and returned at 5pm the on last day of the rental **
                    </p>

                    <div class="row">
                        <div class="col-6 col-sm-3">
                            <img src="{{asset('storage/app-images/sled-1.jpg')}}" alt="Summit snowmobile jumping in the air" class="img-responsive mb-3" />
                        </div>
                        <div class="col-6 col-sm-3">
                            <img src="{{asset('storage/app-images/sled-2.jpg')}}" alt="Summit snowmobile with white background" class="img-responsive mb-3" />
                        </div>
                        <div class="col-6 col-sm-3">
                            <img src="{{asset('storage/app-images/sled-3.jpg')}}" alt="Renegade snowmobile jumping in the air" class="img-responsive mb-3" />
                        </div>
                        <div class="col-6 col-sm-3">
                            <img src="{{asset('storage/app-images/sled-4.jpg')}}" alt="Renegade snowmobile with white background" class="img-responsive mb-3" />
                        </div>
                    </div>
                    <br>
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
                    Customers will pick up the Snowmobile to be rented the night before they go at 5:15pm to 250 SE Divison Place (just south of OMSI).
                    At that point we will do paper work. We will need a copy of customer’s photo id (driver’s license), imprint of credit card
                    (which we will verify the funds available for the damage deposit on the card), and receive rental fee. Renters need to be 24
                    years old to rent. After the paper work is completed an orientation on operating the equipment and a condition review of the
                    unit will be conducted. Then the equipment is loaded onto the trailer to prepare for departure.
                </p>
                <p class="text-center">
                    Helmets and Trailers are provided <br>
                    Trailers take a 2 in ball (which is not provided) and a four prong flat light connection
                </p>
                <h4 class="text-yellow">
                    CHECKING IN
                </h4>
                <p>
                    Once parked, just walk up to our Rental Office where we do all the paper work; asking for identification,
                    damage deposit (verify funds available $2000/per Snowmobile), sign waivers, and collect rental fee (if walk-up).
                    This will require the cardholder for the rental, as well as any additional riders to be present.
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
                    CANCELLATIONS
                </h4>
                <p class="pb-5">
                    Customers have up to 5 days / 120 hrs before the rental to cancel. If you cancel before 5 days prior to the rental date we do
                    not charge you any penalty, but once we are within 5 days of the scheduled rental and you decide to cancel we then charge $100
                    or half of the rental fee which ever one is greater.
                </p>
                <p class="text-center">
                    Call <a href="tel:503-284-6447">(503) 284-6447</a> for Reservation or for further information.
                </p>


                <style>
                    .div-1 {
                        background-image: url("{{asset('/storage/app-images/social-snow-1.jpg')}}");
                    }
                    .div-2 {
                        background-image: url("{{asset('/storage/app-images/social-snow-2.jpg')}}");
                    }
                    .div-3 {
                        background-image: url("{{asset('/storage/app-images/social-snow-3.jpg')}}");
                    }
                    .div-4 {
                        background-image: url("{{asset('/storage/app-images/social-snow-4.jpg')}}");
                    }
                </style>

                <!-- Snowmobile Carousel -->
                <div id="carouselIndicators" class="carousel slide carousel-fade carousel-format" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="img-div div-1">
{{--                                <img src="{{asset('/storage/app-images/social-snow-1.jpg')}}" class="d-block w-100" alt="Someone riding on a snowmobile">--}}
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="img-div div-2">
{{--                                <img src="{{asset('/storage/app-images/social-snow-2.jpg')}}" class="d-block w-100" alt="Someone riding on a snowmobile">--}}
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="img-div div-3">
{{--                                <img src="{{asset('/storage/app-images/social-snow-3.jpg')}}" class="d-block w-100" alt="Someone riding on a snowmobile">--}}
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="img-div div-4">
{{--                                <img src="{{asset('/storage/app-images/social-snow-4.jpg')}}" class="d-block w-100" alt="Someone ridin/g on a snowmobile">--}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Snowmobile Carousel -->
                <!-- /Snowmobile Info -->

                <div class="row mt-3 mb-0 pb-3">
                    <div class="col-sm-6">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/dI4EXkZa3UU?si=M6scKLr5LKlPE_9C" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="col-sm-6">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/SQR7przk7VE?si=4gJlcVvmZnIIdLAq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </div>
    @endsection



    @section('scripts')

    @endsection

</x-home-master>
