<x-home-nh-master>

    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection



    @foreach($applications as $application)
{{--        @section('page_title')--}}
{{--            <h1>{{$application->name}}</h1>--}}
{{--        @endsection--}}

        @section('browser_title')
            <title> {{$application->name}} </title>
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
        @yield('page_title')

            <div id="carouselIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('/storage/app-images/people-riding-seadoo.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('/storage/app-images/people-on-pontoon.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('/storage/app-images/scarab-on-water.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('/storage/app-images/snowmobile.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('/storage/app-images/women-on-kayaks.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('/storage/app-images/spyders-driving-on-road.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselIndicators" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselIndicators" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>


            <style>
                .img-1 {
                    background-image: url("{{asset('/storage/app-images/sm-1-people-riding-seadoo.jpg')}}");
                }
                .img-2 {
                    background-image: url("{{asset('/storage/app-images/sm-2-scarab.jpg')}}");
                }
                .img-3 {
                    background-image: url("{{asset('/storage/app-images/sm-3-kayaks.jpg')}}");
                }
                .img-4 {
                    background-image: url("{{asset('/storage/app-images/sm-4-pontoons.jpg')}}");
                }
                .img-5 {
                    background-image: url("{{asset('/storage/app-images/sm-5-segways.jpg')}}");
                }
                .img-6 {
                    background-image: url("{{asset('/storage/app-images/sm-6-snowmobile.jpg')}}");
                }
                .map {
                    background-image: url("{{asset('/storage/app-images/map.jpg')}}");
                }
                .sled {
                    background-image: url("{{asset('/storage/app-images/sled.jpg')}}");
                }
                .main-body {
                    background-color: #000000;
                    background-image: url("{{asset('/storage/app-images/home-background.jpg')}}");
                    background-repeat: no-repeat;
                    background-size: contain;
                    background-position: fixed;
                }
            </style>
        <div class="main-body">
            <div class="container">
                <div class="cont-top">
                    <div class="row">
                        <div class="col-12">
                            <h3>
                                <i class="fa fa-map-marker"></i>
                                250 SE Division Pl</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 img">
                        <a class="img-back img-1" href="#">
                            <div class="overlay"></div>
                            <span class="img-text">
                                Sea-Doo
                                <span class="hover-text">
                                    Rentals
                                    <i class="fa fa-angle-double-right"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-6 img">
                        <a class="img-back img-2" href="#">
                            <div class="overlay"></div>
                            <span class="img-text">
                                Jet Boat
                                <span class="hover-text">
                                    Rentals
                                    <i class="fa fa-angle-double-right"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-6 img">
                        <a class="img-back img-3" href="#">
                            <div class="overlay"></div>
                            <span class="img-text">
                                Kayak/Stand-up Paddleboard
                                <span class="hover-text">
                                    Rentals
                                    <i class="fa fa-angle-double-right"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-6 img">
                        <a class="img-back img-4" href="#">
                            <div class="overlay"></div>
                            <span class="img-text">
                                Pontoon Boat
                                <span class="hover-text">
                                    Rentals
                                    <i class="fa fa-angle-double-right"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-6 img">
                        <a class="img-back img-5" href="#">
                            <div class="overlay"></div>
                            <span class="img-text">
                                2 Wheel On-Road
                                <span class="hover-text">
                                    Rentals
                                    <i class="fa fa-angle-double-right"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-6 img">
                        <a class="img-back img-6" href="#">
                            <div class="overlay"></div>
                            <span class="img-text">
                                Snowmobile
                                <span class="hover-text">
                                    Rentals
                                    <i class="fa fa-angle-double-right"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-12 img">
                        <a class="img-back map" href="#">
                            <div class="overlay"></div>
                            <span class="img-text">
                                Map &
                                <span class="hover-text">
                                    Hours
                                    <i class="fa fa-angle-double-right"></i>
                                </span>
                            </span>
                        </a>
                    </div>

                </div>

                <div class="row">
                    <div class="col-12">
                        <h1 class="border-bottom-5">Welcome to SK Watercraft Rentals</h1>
                        <p class="text-center">
                            SK Watercraft Rentals - <a href="tel:503-284-6447">503-284-6447</a>
                        </p>
                        <p>
                            We offer Watercraft Rentals, Jet Ski's Rentals / WaveRunner Rentals / Sea-Doo Rentals.
                        </p>
                        <p>
                            We Rent Pontoon Boats, Ski Boats, Fishing Boats.  Pontoon Boat Rentals, Runabout Boat Rentals, Aluminum Fishing Boat rentals near downtown Portland Oregon.  Walk down to our dock and Go!
                        </p>
                        <p>
                            Located in Portland Oregon on the Willamette River. We are open 7 days a week from 9:30am-7:00pm during the summer (Mid-June - Mid-Sept).  We still rent early and late season by appointment only. We also offer rentals of Pontoon Boats, Ski Boats, Fishing Boats!  Stand up Paddle Boards SUPs, Kayak Rentals.
                        </p>
                        <p>
                            Snowmobile Rentals are offered during the winter. Trailer a Snowmobile up to a snow covered winter wonderland and make tracks where ever your adventure takes you.  We also rent the Can-am Spyder Roadsters.
                        </p>
                        <p class="yellow text-center">
                            We Do Corporate & Group Events!
                        </p>
                        <p class="text-center">
                            COME JOIN THE FUN ANY TIME OF YEAR!!
                        </p>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-sm-6 img">
                        <a class="img-back sled" href="mailto:info@skwatercraftrentals.com">
                            <div class="overlay"></div>
                            <span class="sled-text">
                               <h3> Reservation & Info Request</h3>
                               <h4>
                                   Click to email us
                                <br><br>or
                                <br><br>call us at
                                <br><br><i class="fa fa-phone"></i> (503)284-6447</h4>
                            </span>
                        </a>
                    </div>
                    <div class="col-sm-6">

                        <a href="#" class="btn btn-large btn-primary width-100 mt-5">
                            <h1>Book Now</h1>
                        </a>
                        <a href="#" class="btn btn-large btn-primary width-100 mt-5">
                            <h1>Gift Card</h1>
                        </a>
                    </div>
                </div>
            </div>
        </div>


    @endsection



    @section('scripts')
    <!-- Page level plugins -->
        <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('js/demo/datatables-scripts.js')}}"></script>
    @endsection

</x-home-nh-master>
