<x-home-master>

    @section('styles')

    @endsection

    @foreach($applications as $application)

    @section('browser_title')
      Book a {{$type->name}} Rental | {{$application->name}}
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
                <h1 class="page-title">{{$type->name}} Rentals</h1>
                <div class="breadcrumbs">
                    <p>
                        <a href="{{route('home.index')}}" class="link">Home </a>
                        <i class="fa fa-chevron-right"></i> Rentals
                        <i class="fa fa-chevron-right"></i> Sea-Doo Rentals
                        <i class="fa fa-chevron-right"></i> Book
                    </p>
                </div>
                <!-- /Title -->

                <!-- SeaDoo Info -->
                <img src="{{asset('storage/' . $type->image)}}" alt="{{$type->img_alt}}" class="page-img" />
                @if($type->description != '')
                    <h2 class="section-header">{{$type->description}}</h2>
                    <h3 class="text-center">Select Date</h3>
                @else
                    <h2 class="section-header">{{$type->name}}</h2>
                    <h3 class="text-center">Select Date</h3>
                @endif


                <!-- Booking Step 1 -->
                <form action="{{route('bucket.one', $type)}}" id="bookStage1" method="post">
                    @csrf
                    @method("PUT")

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="rental_date">Rental Date</label>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" id="alternate" class="form-control-plaintext">
                                    </div>
                                </div>
                                <input type="text" class="hidden" name="rental_time" value="00:00:00">
                                <input type="text" class="hidden" name="duration_id" value="0">
                                <input type="text" class="hidden" name="duration_name" value="none">
                                <input type="text" class="hidden" name="type_id" value="{{$type->id}}">
                                <input type="text" class="hidden" name="type_name" value="{{$type->slug}}">
                                <input type="text" class="form-control datepicker rentalDate" name="rental_date" id="datepicker" value="" placeholder="Select Date">
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /Booking Step 1 -->




                <!-- Confirmation Modal -->
                <div class="modal fade mt-5" id="booknow" tabindex="-1" role="dialog" aria-labelledby="bookNow" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3>Book a <span>{{$type->name}}</span></h3>
                            </div>
                            <div class="modal-body">
                                <div class="row">


                                </div>
                            </div>
                            <div class="modal-footer">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Confirmation Modal -->

            </div>
        </div>
    @endsection



    @section('scripts')
        <script src="{{asset('js/sb-admin-2.js')}}"></script>

        <script>
            $(document).ready(function() {

                $('.datepicker').datepicker('show');
                $('.dynamicAvail').addClass('hidden');
            });
            $(function() {
                $date = $( "#datepicker" ).datepicker("getDate");
                $('#datepicker').datepicker({
                    changeMonth: true,
                    changeYear: true,
                    numberOfMonths: 3,
                    showButtonPanel: true,
                    dateFormat: "yy-mm-dd",
                    value: "yy-mm-dd",
                    altField: "#alternate",
                    altFormat: "DD, MM d, yy",
                    onSelect: function() {
                        $date = $("#datepicker").datepicker({ dateFormat: 'dd-mm-yy' }).val();

                        $('.rentalDate').append('<input id="datepicker" value=' + $date  + '>');

                        $('#bookStage1').submit(); // <-- SUBMIT

                    }
                });
            });




        </script>
    @endsection

</x-home-master>
