<x-home-master>

    @section('styles')

    @endsection

    @foreach($applications as $application)

    @section('browser_title')

        About Us | {{$application->name}}
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
                <h1 class="page-title"> About Us</h1>
                <div class="breadcrumbs">
                    <p>
                        <a href="{{route('home.index')}}" class="link">Home </a>
                        <i class="fa fa-chevron-right"></i> Operation Info <i class="fa fa-chevron-right"></i>  About Us
                    </p>
                </div>
                <!-- /Title -->

                <div class="row">

                    <div class="col-sm-3">
                        <img src="{{asset('/storage/app-images/original-location.jpg')}}" alt="Sk Watercraft Rentals second location on Marine Dr" class="img-responsive mt-3">
                    </div>
                    <div class="col-sm-9">
                        <p class="mt-0">
                            Our origin into renting personal watercraft began in the Spring of 1994, when Shawn started SK Jet Ski Rentals renting two personal watercraft to his
                            fraternity at Oregon State University. The business grew from just one fraternity to include many fraternities of both Oregon State and U of O, and
                            then onto the general public. Our fleet went from two, to six, to eleven, to seventeen, into the mid-thirty’s! By 1998, we were the largest rental
                            operation in the State of Oregon with three locations around the Portland Area (Columbia River, Hagg Lake, and Wilsonville).
                        </p>
                    </div>

                    <div class="col-12">
                        <p>
                            SK Watercraft Rentals, Inc. is the business name today, is still renting personal watercraft on the Columbia River just as we did in the mid-1990's.
                            But now we have added to our services with rentals of 21ft Ski Boats, Pontoon Boats, Fishing Boats, Can-am Spyder Roadster, and Segway Rentals along
                            the Portland Waterfront.  In the winter we rent Ski-doo Snowmobiles.  We offer many recreational activities to enjoy the outdoors here in Oregon.
                        </p>
                    </div>

                    <div class="col-sm-9">
                        <p>
                            We also do Corporate Events!  From the simple gathering of 20 to very large events with thousands with full staff at a site of your choice as well.
                        </p>
                        <p>
                            We have now been in operation for over 25yrs!  Thank you for our customers continued support.
                        </p>
                        <p>
                            In a continuous expansion of services to our customers, we have added another online website to our portfolio.
                            <br>
                            <a href="http://www.sourcepowersports.com/" target="_blank">  Source Powersports offers a full selection of BRP replacement parts and accessories for Ski-Doo snowmobiles and Sea-Doo watercraft.</a>
                        </p>

                    </div>
                    <div class="col-sm-3">
                        ]<img src="{{asset('/storage/app-images/original-sk.jpg')}}" alt="Sk Watercraft Rentals original location on Marine Dr" class="img-responsive mt-3">
                    </div>

                </div>

                <p class="pb-5">
                   &nbsp;
                </p>
            </div>
        </div>
    @endsection



    @section('scripts')

    @endsection

</x-home-master>
