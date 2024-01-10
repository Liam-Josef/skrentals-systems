<x-home-master>

    @section('styles')

    @endsection

    @foreach($applications as $application)

    @section('browser_title')
        Photo Gallery | {{$application->name}}
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
                <h1 class="page-title">Photo Gallery</h1>
                <div class="breadcrumbs">
                    <p>
                        <a href="{{route('home.index')}}" class="link">Home </a>
                        <i class="fa fa-chevron-right"></i> Customer Corner <i class="fa fa-chevron-right"></i>  Photo Gallery
                    </p>
                </div>
                <!-- /Title -->

               <!-- Photo Gallery -->
                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-12 d-flex justify-content-center mb-5">

                        <ul class="nav nav-tabs nav-justified mb-3 dock-depart sidebar-tab-list" id="runnerView" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="view-gallery-tab" data-toggle="tab" href="#gallery-tab" role="tab" aria-controls="gallery-tab"
                                   aria-selected="true">
                                    Gallery
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="view-office-tab" data-toggle="tab" href="#office-tab" role="tab" aria-controls="office-tab"
                                   aria-selected="true">
                                    Office
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="view-dock-tab" data-toggle="tab" href="#dock-tab" role="tab" aria-controls="dock-tab"
                                   aria-selected="true">
                                    Docks
                                </a>
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

                <!-- Gallery Tab Content -->
                <div class="tab-content" id="myTabContent">

                    <!-- Gallery -->
                    <div class="tab-pane fade show active" id="gallery-tab" role="tabpanel" aria-labelledby="gallery-tab">

                        <!-- Grid row -->
                        <div class="gallery" id="gallery">

                            <!-- Gallery Image -->
                            <div class="mb-3 pics animation all 2">
                                <img class="img-fluid" src="{{asset('storage/app-images/gallery-1.jpg')}}" alt="Card image cap">
                            </div>
                            <!-- Gallery Image -->
                            <!-- Gallery Image -->
                            <div class="mb-3 pics animation all 2">
                                <img class="img-fluid" src="{{asset('storage/app-images/gallery-2.jpg')}}" alt="Card image cap">
                            </div>
                            <!-- Gallery Image -->
                            <!-- Gallery Image -->
                            <div class="mb-3 pics animation all 2">
                                <img class="img-fluid" src="{{asset('storage/app-images/gallery-3.jpg')}}" alt="Card image cap">
                            </div>
                            <!-- Gallery Image -->
                            <!-- Gallery Image -->
                            <div class="mb-3 pics animation all 2">
                                <img class="img-fluid" src="{{asset('storage/app-images/gallery-4.jpg')}}" alt="Card image cap">
                            </div>
                            <!-- Gallery Image -->
                        </div>
                        <!-- Grid row -->
                    </div>
                    <!-- /Gallery -->
                    <!-- Rental Office -->
                    <div class="tab-pane fade show" id="office-tab" role="tabpanel" aria-labelledby="office-tab">
                        <div class="gallery" id="gallery">
                            <!-- Gallery Image -->
                            <div class="mb-3 pics animation all 2">
                                <img class="img-fluid" src="{{asset('storage/app-images/office-4.jpg')}}" alt="Card image cap">
                            </div>
                            <!-- Gallery Image -->
                            <!-- Gallery Image -->
                            <div class="mb-3 pics animation all 2">
                                <img class="img-fluid" src="{{asset('storage/app-images/office-1.jpg')}}" alt="Card image cap">
                            </div>
                            <!-- Gallery Image -->
                            <div class="mb-3 pics animation all 2">
                                <img class="img-fluid" src="{{asset('storage/app-images/gallery-office.jpg')}}" alt="Card image cap">
                            </div>
                            <!-- Gallery Image -->
                            <!-- Gallery Image -->
                            <div class="mb-3 pics animation all 2">
                                <img class="img-fluid" src="{{asset('storage/app-images/office-2.jpg')}}" alt="Card image cap">
                            </div>
                            <!-- Gallery Image -->
                            <!-- Gallery Image -->
                            <div class="mb-3 pics animation all 2">
                                <img class="img-fluid" src="{{asset('storage/app-images/office-3.jpg')}}" alt="Card image cap">
                            </div>
                            <!-- Gallery Image -->
                        </div>
                    </div>
                    <!-- /Rental Office -->
                    <!-- Dock -->
                    <div class="tab-pane fade show" id="dock-tab" role="tabpanel" aria-labelledby="dock-tab">
                        <div class="gallery" id="gallery">
                            <!-- Gallery Image -->
                            <div class="mb-3 pics animation all 2">
                                <img class="img-fluid" src="{{asset('storage/app-images/dock-1.jpg')}}" alt="Card image cap">
                            </div>
                            <!-- Gallery Image -->
                            <!-- Gallery Image -->
                            <div class="mb-3 pics animation all 2">
                                <img class="img-fluid" src="{{asset('storage/app-images/dock-2.jpg')}}" alt="Card image cap">
                            </div>
                            <!-- Gallery Image -->
                        </div>
                    </div>
                    <!-- /Dock -->

                </div>
                <!-- /Gallery Tab Content -->


               <!-- /Photo Gallery -->
            </div>
    @endsection



    @section('scripts')

    @endsection

</x-home-master>
