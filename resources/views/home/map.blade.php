<x-home-master>

    @section('styles')

    @endsection

    @foreach($applications as $application)

    @section('browser_title')
        Map & Hours | {{$application->name}}
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
                <h1 class="page-title"> Map & Hours</h1>
                <div class="breadcrumbs">
                    <p>
                        <a href="{{route('home.index')}}" class="link">Home </a>
                        <i class="fa fa-chevron-right"></i> Operation Info <i class="fa fa-chevron-right"></i>  About Us
                    </p>
                </div>
                <!-- /Title -->

                <div class="row">
                    <div class="col-sm-8">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2796.2580059083953!2d-122.66595542326291!3d45.50488463072251!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5495a6741f42449f%3A0x8c31bef24cb809db!2sSK%20Watercraft%20Rentals!5e0!3m2!1sen!2sus!4v1704523560579!5m2!1sen!2sus"
                                width="100%" height="550" style="border:0; margin-bottom: 20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-sm-4">

                        <style>
                            .div-1 {
                                background-image: url("{{asset('/storage/app-images/maps-1.jpg')}}");
                            }
                            .div-2 {
                                background-image: url("{{asset('/storage/app-images/maps-2.jpg')}}");
                            }
                            .div-3 {
                                background-image: url("{{asset('/storage/app-images/maps-3.jpg')}}");
                            }
                            .div-4 {
                                background-image: url("{{asset('/storage/app-images/maps-4.jpg')}}");
                            }
                            .div-5 {
                                background-image: url("{{asset('/storage/app-images/maps-5.jpg')}}");
                            }
                        </style>

                        <!-- Dock Carousel -->
                        <div id="carouselIndicators" class="carousel slide carousel-fade carousel-format-sm" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="img-div div-1"></div>
                                </div>
                                <div class="carousel-item">
                                    <div class="img-div div-2"></div>
                                </div>
                                <div class="carousel-item">
                                    <div class="img-div div-3"></div>
                                </div>
                                <div class="carousel-item">
                                    <div class="img-div div-4"></div>
                                </div>
                                <div class="carousel-item">
                                    <div class="img-div div-5"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /Dock Carousel -->

                        <!-- Company Info -->
                        <div class="card side-card">
                            <div class="card-header">
                                <h3>Store Information</h3>
                            </div>

                            <div class="card-body">
                                <div class="gray b-bottom">
                                    <div class="row">
                                        <div class="col-4">
                                            <p>
                                                Address:
                                            </p>
                                        </div>
                                        <div class="col-8">
                                            <p>
                                                250 SE Division Pl
                                                <br>
                                                Portland, OR 97202
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="white b-bottom">
                                    <div class="row">
                                        <div class="col-4">
                                            <p>
                                                Phone:
                                            </p>
                                        </div>
                                        <div class="col-8">
                                            <p>
                                                <a href="tel:503-284-6447">(503)284-6447</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Company Info -->

                        <!-- Store Hours -->
                        <div class="card side-card mt-3">
                            <div class="card-header">
                                <h3>Store Information</h3>
                            </div>
                            <div class="card-body">
                                <div class="gray b-bottom">
                                    <div class="row">
                                        <div class="col-4">
                                            <p>
                                                Mon
                                            </p>
                                        </div>
                                        <div class="col-8">
                                            <p>
                                                9:30 AM - 7:00 PM
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="white b-bottom">
                                    <div class="row">
                                        <div class="col-4">
                                            <p>
                                                Tue
                                            </p>
                                        </div>
                                        <div class="col-8">
                                            <p>
                                                9:30 AM - 7:00 PM
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gray b-bottom">
                                    <div class="row">
                                        <div class="col-4">
                                            <p>
                                                Wed
                                            </p>
                                        </div>
                                        <div class="col-8">
                                            <p>
                                                9:30 AM - 7:00 PM
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="white b-bottom">
                                    <div class="row">
                                        <div class="col-4">
                                            <p>
                                                Thurs
                                            </p>
                                        </div>
                                        <div class="col-8">
                                            <p>
                                                9:30 AM - 7:00 PM
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gray b-bottom">
                                    <div class="row">
                                        <div class="col-4">
                                            <p>
                                                Fri
                                            </p>
                                        </div>
                                        <div class="col-8">
                                            <p>
                                                9:30 AM - 7:00 PM
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="white b-bottom">
                                    <div class="row">
                                        <div class="col-4">
                                            <p>
                                                Sat
                                            </p>
                                        </div>
                                        <div class="col-8">
                                            <p>
                                                9:30 AM - 7:00 PM
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="gray">
                                    <div class="row">
                                        <div class="col-4">
                                            <p>
                                                Sun
                                            </p>
                                        </div>
                                        <div class="col-8">
                                            <p>
                                                9:30 AM - 7:00 PM
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Store Hours -->
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
