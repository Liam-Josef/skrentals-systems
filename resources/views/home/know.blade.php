<x-home-master>

    @section('styles')

    @endsection

    @foreach($applications as $application)

    @section('browser_title')
        Know Before You Go | {{$application->name}}
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
                <h1 class="page-title">Know Before You Go</h1>
                <div class="breadcrumbs">
                    <p>
                        <a href="{{route('home.index')}}" class="link">Home </a>
                        <i class="fa fa-chevron-right"></i> Customer Corner <i class="fa fa-chevron-right"></i>  Know Before You Go
                    </p>
                </div>
                <!-- /Title -->

                <!-- Know Before You Go -->
                <div class="row">
                    <div class="col-12">
                       <div class="div-border-5 mt-4">
                           <h2 class="section-header-left border-bottom-5">INFORMATION</h2>
                       </div>
                    </div>
                    <div class="col-12">
                        <p>
                            <a href="http://www.boatus.org/oregon/" target="_blank"> Online Boaters Safety Course! </a>
                        </p>
                        <p>
                            <a href="https://www.accuweather.com/en/us/portland-or/97209/daily-weather-forecast/350473" target="_blank">Today's Weather in Portland, OR! </a>
                        </p>
                        <p>
                            <a href="https://geo.maps.arcgis.com/apps/webappviewer/index.html?id=841da68081294bb2a6b50f93b1a12f05" target="_blank">Interactive Boaters Map! </a>
                        </p>
                        <p>
                            <a href="https://water.weather.gov/ahps2/hydrograph.php?wfo=pqr&gage=prto3" target="_blank">Willamette River Levels </a>
                        </p>
                        <p>
                            <a href="https://tidesandcurrents.noaa.gov/noaatidepredictions.html?id=9440083" target="_blank">Columbia River Levels </a>
                        </p>
                        <p>
                            <a href="https://www.portland.gov/parks/docks" target="_blank">Boat Launches  </a>
                        </p>
                    </div>
                </div>
                <!-- /Know Before You Go -->
            </div>
    @endsection



    @section('scripts')

    @endsection

</x-home-master>
