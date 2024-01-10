<x-home-master>

    @section('styles')

    @endsection

    @foreach($applications as $application)

    @section('browser_title')
        Testimonials | {{$application->name}}
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
                <h1 class="page-title">Testimonials</h1>
                <div class="breadcrumbs">
                    <p>
                        <a href="{{route('home.index')}}" class="link">Home </a>
                        <i class="fa fa-chevron-right"></i> Customer Corner <i class="fa fa-chevron-right"></i>  Testimonials
                    </p>
                </div>
                <!-- /Title -->

                <!-- Testimonials -->

                <div class="row">
                    <div class="col-12">
                        <div class='sk-ww-google-reviews' data-embed-id='251809'></div><script src='https://widgets.sociablekit.com/google-reviews/widget.js' async defer></script>
{{--                        https://www.sociablekit.com/app/users/widgets/update_embed/251809#reviews--}}
                    </div>
                </div>
            {{--                <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>--}}
            {{--                <div class="elfsight-app-bcd62754-2f5c-49d3-9b7b-f21ed9fbe4dc" data-elfsight-app-lazy></div>--}}
            <!-- /Testimonials -->
            </div>
    @endsection



    @section('scripts')

    @endsection

</x-home-master>
<a aria-label="286 reviews" target="_blank" jstcache="30" href="https://search.google.com/local/reviews?placeid=ChIJn0RCH3SmlVQR2wm4TPK-MYw&q=SK+Watercraft+Rentals&hl=en&gl=US" jsaction="mouseup:placeCard.reviews" class="review-box-link" jsan="0.aria-label,7.review-box-link,8.href,0.target,22.jsaction">286 reviews</a>
