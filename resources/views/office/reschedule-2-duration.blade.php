<x-office-master>

    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection

    @foreach($applications as $application)

    @section('browser_title')
        <title>Reschedule {{$reschedule->last}} {{$reschedule->first}} | {{$application->name}}</title>
    @endsection

    @section('app_name')
        {{$application->name}}
    @endsection

    @section('favicon')
        {{asset('storage/'. $application->favicon)}}
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


    @section('page_title')
        <div class="row">
            <div class="col-sm-2">
                <form action="{{route('reschedule.reschedule_cancel', $reschedule->id)}}" method="post">
                    @csrf
                    @method('PUT')

                    <input type="hidden" value="{{$reschedule->id}}" name="reschedule_id">

                    <button class="btn btn-primary-red mt-2" type="submit">
                        <h3 class="mt-2">
                            <i class="fa fa-chevron-circle-left"></i> Schedule
                        </h3>
                    </button>
                </form>
            </div>
            <div class="col-sm-10">
                <h1>Reschedule: <span>

                <small>{{$reschedule->quantity}} x</small>
                        @foreach($durations as $duration)
                            @if($duration->id == $reschedule->orig_duration_id)
                                {{$duration->abbreviation}}
                            @endif
                        @endforeach
                        @foreach($types as $type)
                            {{$type->name}}
                        @endforeach
            | @foreach($bookings as $booking)
                            {{$booking->first}} {{$booking->last}}</span>
              @endforeach
                </h1>
            </div>
        </div>
    @endsection

    @section('content')
    <!-- RENTAL INFORMATION -->
        @foreach($bookings as $booking)
            <div class="card mb-4 my-3 shadow">
                <div class="card-header">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6">
                            <h3 class="card-title">Rental Information  </h3>
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <h3 class="card-title text-right status">{{$booking->status}} </h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <!-- Rental Information -->
                    <div class="card-rental-info">
                        <div class="row">
                            <!-- Renter Info -->
                            <div class="col-sm-4">
                                <div class="area-box">
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                        <p class="item-title">Vehicle:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">
                                                @foreach($types as $type)
                                                    {{$type->name}}
                                                @endforeach
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">Rental Date:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{\Carbon\Carbon::parse($booking->activity_date_start)->format('M d, Y')}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">Ticket List:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{$booking->quantity}}x
                                                @foreach($durations as $duration)
                                                    @if($duration->id == $reschedule->orig_duration_id)
                                                        {{$duration->name}}
                                                    @endif
                                                @endforeach
                                                @foreach($types as $type)
                                                    {{$type->name}}
                                                @endforeach
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">Payment Status:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">
                                                @if($booking->total_owed > 0)
                                                    <span class="text-red">COLLECT PAYMENT ( $
                                                    @php
                                                        echo number_format($booking->total_owed, 2);
                                                    @endphp
                                                                    )</span>
                                                @else
                                                    Paid
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">Charged at Booking:</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="item">$ {{$booking->total_cost}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                </div>
                            </div>
                            <!-- /Renter Info -->
                            <div class="col-sm-4">
                                <div class="area-box">
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">Vehicle:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">
                                                @foreach($types as $type)
                                                    {{$type->name}}
                                                @endforeach
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">New Rental Date:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{\Carbon\Carbon::parse($booking->activity_date_start)->format('M d, Y')}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">New Ticket List:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{$booking->quantity}}x
                                                @foreach($durations as $duration)
                                                    @if($duration->id == $reschedule->orig_duration_id)
                                                        {{$duration->name}}
                                                    @endif
                                                @endforeach
                                                @foreach($types as $type)
                                                    {{$type->name}}
                                                @endforeach
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">New Pay Status:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">

                                                   Paid
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">New Total:</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="item">$ {{$booking->total_cost}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                </div>
                            </div>
                            <!-- Rental Info -->
                            <div class="col-sm-4">
                                <div class="area-box">
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">First Name:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{$booking->first}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">Last Name:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{$booking->last}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">Email:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{$booking->email}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">Phone:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{$booking->phone = substr($booking->phone, 2)}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->
                                    <!-- Item -->
                                    <div class="row">
                                        <div class="col-sm-4 text-right">
                                            <p class="item-title">Zip Code:</p>
                                        </div>
                                        <div class="col-sm-8">
                                            <p class="item">{{$booking->zip_code}}</p>
                                        </div>
                                    </div>
                                    <!-- /Item -->

                                </div>
                            </div>
                            <!-- /Rental Info -->
                        </div>
                    </div>
                    <!-- /Rental Information -->
                </div>
            </div>
        @endforeach
        <!-- /RENTAL INFORMATION -->

        <div class="card shadow mb-4 my-3">
            <div class="card-header">
                <h3><span>Reschedule: </span>Select Duration</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <!-- Change Date -->
                        <div class="row">
                            <div class="col-sm-11">
                                <form action="{{route('reschedule.update_date', $reschedule)}}" id="bookStage2" method="post">
                                    @csrf
                                    @method("PUT")
                                    <div class="form-group mt-4">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="rental_date">Change Rental Date</label>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="text-right">{{Carbon\Carbon::parse($reschedule->activity_date_start)->format('D, M d, Y')}}</h6>
                                            </div>
                                        </div>
                                        <input type="text" class="hidden" name="duration_id" value="0">
                                        <input type="text" class="form-control datepicker rentalDate" name="activity_date_start" id="datepicker" value="{{$reschedule->activity_date_start}}" placeholder="Select Date">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /Change Date -->
                    </div>
                    <div class="col-sm-8">
                        <div class="row">

                            {{--                            {{$durationAvailabils}}--}}

                            @foreach($durations as $duration)
                                @if($type->durations->contains($duration))

                                    <div class="col-sm-4">
                                        <form action="{{route('reschedule.add_duration', $reschedule)}}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="text" class="hidden" name="duration_id" value="{{$duration->id}}">

                                            <input type="text" class="hidden" name="cost_per"
                                            @foreach($prices as $price)
                                                @if($price->type_id == $reschedule->type_id && $price->duration_id == $duration->id)
                                                    value="{{$price->amount}}"
                                                    @endif
                                                @endforeach
                                            >

                                            <input type="text" class="hidden" name="hour" value="{{$duration->hour}}">

                                            @foreach($duration->availabils as $durAvail)
                                                <input type="text" class="hidden" name="avail_id" value="{{$durAvail->id}}">
                                            @endforeach
                                            <button class="btn btn-book" type="submit">

                                                @if(strpos($duration->name, 'SeaDoo') !== false)
                                                    Half Day
                                                @else
                                                    {{$duration->name}}
                                                @endif
                                            </button>
                                        </form>

                                    </div>

                                @endif
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CHECK IN BUTTONS -->
        <div class="card mt-4 mb-5 shadow">
            <div class="modal-footer">
                <div class="row width-100">
                    <div class="col-sm-4">
                        <button class="btn btn-outline-primary" type="button" data-toggle="modal" data-target="#cancel_rental{{$reschedule->id}}">CANCEL RESCHEDULE</button>
                    </div>
                    <div class="col-sm-4">

                    </div>
                    <div class="col-sm-4">
{{--                        <a href="#" class="btn btn-secondary text-white" type="button">Update</a>--}}
                    </div>

                </div>

            </div>
        </div>
        <!-- /CHECK IN BUTTONS -->


        <form action="{{route('office.checkInRental', $booking->id)}}" method="post">
            @csrf
            @method('PUT')


            <div class="modal fade checkin-modal" id="checkin{{$booking->id}}" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">

                </div>
            </div>
        </form>


        <!-- Cancel Rental Modal -->
        <div class="modal fade" id="cancel_rental{{$reschedule->id}}" tabindex="-1" role="dialog" aria-labelledby="cancelModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                @foreach($bookings as $booking)
                                    <h4 class="mb-4">Are you sure you want to cancel this reschedule:</h4>
                                    <h3><span>{{$booking->first}} {{$booking->last}}</span> <br> {{$booking->activity_item}}</h3>
                                    <h5>{{$reschedule->id}}</h5>
                                    <p class="italic mt-4">This action can NOT be undone!</p>
                                @endforeach
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">NEVERMIND...</button>

                        <form action="{{route('reschedule.reschedule_cancel', $reschedule->id)}}" method="post">
                            @csrf
                            @method('PUT')

                            <input type="hidden" value="{{$reschedule->id}}" name="reschedule_id">

                            <button class="btn btn-primary-red" type="submit">CANCEL RESCHEDULE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Cancel Rental Modal -->



    @endsection




    @section('scripts')
    <!-- Page level plugins -->
        <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('js/demo/datatables-scripts.js')}}"></script>

        <script>
            $(document).ready(function() {
                $('#officeSchedule').addClass('hidden');
            });
            $(document).ready(function() {
                $('.datepicker').datepicker('show');
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
                        $date = $("#datepicker").datepicker({ dateFormat: 'dd-mm-yy hh:mm:ss' }).val();

                        $('.rentalDate').append('<input id="datepicker" value=' + $date  + '>');

                        $('#bookStage2').submit(); // <-- SUBMIT

                    }
                });
            });
        </script>


    @endsection

</x-office-master>
