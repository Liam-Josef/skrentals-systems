<x-office-master>

    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection

    @foreach($applications as $application)

    @section('browser_title')
        <title>Update {{$booking->last}} {{$booking->first}} | {{$application->name}}</title>
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
                <a href="{{route('office.index')}}">
                    <h3 class="mt-3">
                        <i class="fa fa-chevron-circle-left"></i> Schedule
                    </h3>
                </a>
            </div>
            <div class="col-sm-10">
                <h1>Update: <span>

                <small>{{$booking->quantity}} x</small>
                 @foreach($durations as $duration)
                    {{$duration->abbreviation}}
                @endforeach

                @foreach($types as $type)
                    {{$type->name}}
                @endforeach
            | {{$booking->first}} {{$booking->last}}</span></h1>
            </div>
        </div>
    @endsection

    @section('content')
    <!-- RENTAL INFORMATION -->
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
                        <div class="col-sm-6">
                            <div class="area-box">
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="item-title">Booking ID:</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="item">{{$booking->id}}</p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="item-title">Vehicle:</p>
                                    </div>
                                    <div class="col-sm-9">
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
                                    <div class="col-sm-3">
                                        <p class="item-title">Rental Date:</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="item">{{\Carbon\Carbon::parse($booking->activity_date_start)->format('M d, Y')}}</p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="item-title">Ticket List:</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="item">{{$booking->quantity}}x
                                            @foreach($durations as $duration)
                                                {{$duration->name}}
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
                                    <div class="col-sm-3">
                                        <p class="item-title">Purchase Type:</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="item">{{$booking->purchase_type}}</p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="item-title">Payment Status:</p>
                                    </div>
                                    <div class="col-sm-9">
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
                                    <div class="col-sm-3">
                                        <p class="item-title">Charged at Booking:</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="item">$ {{$booking->total_cost}}</p>
                                    </div>
                                </div>
                                <!-- /Item -->
                            </div>
                        </div>
                        <!-- /Renter Info -->
                        <div class="col-sm-1">
                            <div class="area-box">

                            </div>
                        </div>
                        <!-- Rental Info -->
                        <div class="col-sm-5">
                            <div class="area-box">
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-3">
                                        <p class="item-title">First Name:</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="item">{{$booking->first}}</p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-3">
                                        <p class="item-title">Last Name:</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="item">{{$booking->last}}</p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-3">
                                        <p class="item-title">Email:</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="item">{{$booking->email}}</p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-3">
                                        <p class="item-title">Phone:</p>
                                    </div>
                                    <div class="col-sm-8">
                                        <p class="item">{{$booking->phone = substr($booking->phone, 2)}}</p>
                                    </div>
                                </div>
                                <!-- /Item -->
                                <!-- Item -->
                                <div class="row">
                                    <div class="col-sm-1"></div>
                                    <div class="col-sm-3">
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
                    <div class="row">
                        <div class="col-sm-3 offset-sm-9">
{{--                            <a href="#" class="btn btn-outline-secondary width-100" data-toggle="modal" data-target="#updateCustomer">Update Customer Info</a>--}}
                        </div>
                    </div>
                </div>
                <!-- /Rental Information -->
            </div>
        </div>
        <!-- /RENTAL INFORMATION -->



        <!-- CHECK IN BUTTONS -->
        <div class="card mt-4 mb-5 shadow">
            <div class="modal-footer">
                <div class="row width-100">
                    <div class="col-sm-4">
                        <button class="btn btn-outline-primary" type="button" data-toggle="modal" data-target="#cancel_rental{{$booking->id}}">CANCEL RENTAL</button>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{route('office.reschedule_booking', $booking)}}" class="btn btn-outline-secondary" type="button">RESCHEDULE</a>
                    </div>
                    <div class="col-sm-4">
                        <a href="#" class="btn btn-secondary text-white" type="button">Update</a>
                    </div>

                </div>

            </div>
        </div>
        <!-- /CHECK IN BUTTONS -->

        <!-- Update Customer Modal -->
        <div class="modal fade" id="updateCustomer" tabindex="-1" role="dialog" aria-labelledby="cancelModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="{{route('booking.update_booking_customer', $booking)}}" method="post">
                        @csrf
                        @method("PUT")

                        <div class="modal-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="first">First Name</label>
                                        <input type="text" class="form-control" name="first" value="{{$booking->first}}">
                                    </div>
                                    <div class="col-6">
                                        <label for="last">Last Name</label>
                                        <input type="text" class="form-control" name="last" value="{{$booking->last}}">
                                    </div>
                                    <div class="col-12">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" name="email" value="{{$booking->email}}">
                                    </div>
                                    <div class="col-12">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" name="phone" value="{{$booking->phone}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="row width-100">
                                <div class="col-6">
                                    <button class="btn btn-secondary btn-100" type="button" data-dismiss="modal">Close</button>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-primary-red btn-100" type="submit">Update Info</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Update Customer Modal -->


        <!-- Cancel Rental Modal -->
        <div class="modal fade" id="cancel_rental{{$booking->id}}" tabindex="-1" role="dialog" aria-labelledby="cancelModalLabel" aria-hidden="true">
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
                                <h4 class="mb-4">Are you sure you want to cancel:</h4>
                                <h3><span>{{$booking->first_name}} {{$booking->last_name}}</span> <br> {{$booking->activity_item}}</h3>
                                <h5>{{$booking->booking_id}}</h5>
                                <p class="italic mt-4">This action can NOT be undone!</p>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">NEVERMIND...</button>

                        <form action="{{route('office.cancel', $booking->id)}}" method="post">
                            @csrf
                            @method('PUT')

                            @if(Auth::check())
                                <input type="hidden" value="{{auth()->user()->id}}" name="check_in_by">
                            @endif
                            <input type="hidden" value="{{$dateNow}}" name="check_in_time">
                            <input type="hidden" value="Canceled" name="status">

                            <button class="btn btn-primary-red" type="submit">CANCEL RENTAL</button>
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


                let totalOut = document.getElementById('addition1out');
                let total1Out = document.getElementById('total1out');
                let inputQtyFuel = document.getElementById('fuelQty');
                let inputQtyToy = document.getElementById('toyQty');
                var inputCostToy = $(".toyCost").data("my-variable");
                var inputCostFuel = $(".fuelCost").data("my-variable");
                var totalCost = $(".totalIn").data("my-variable");


                inputQtyFuel.onkeyup = function () {
                    var fuelQty = inputQtyFuel.value;
                    var fuelTotal = inputCostFuel * fuelQty;
                    var toyQty = inputQtyToy.value;
                    var toyTotal = inputCostToy * toyQty;

                    $('.totalCostFuel').html(fuelTotal);
                    $('input.grandFuel').val(fuelTotal);

                    $('.totalCostToy').html(toyTotal);
                    $('input.grandToy').val(toyTotal);

                    grandTotal = fuelTotal + toyTotal;

                    totalOut.innerHTML = grandTotal;

                    grandMaster = grandTotal + totalCost;

                    total1Out.innerHTML = grandMaster;
                    totalOut.innerHTML = grandTotal;
                    // alert(fuelTotal);
                }
                inputQtyFuel.onclick = function () {
                    var fuelQty = inputQtyFuel.value;
                    var fuelTotal = inputCostFuel * fuelQty;
                    var toyQty = inputQtyToy.value;
                    var toyTotal = inputCostToy * toyQty;

                    $('.totalCostFuel').html(fuelTotal);
                    $('input.grandFuel').val(fuelTotal);

                    $('.totalCostToy').html(toyTotal);
                    $('input.grandToy').val(toyTotal);

                    grandTotal = fuelTotal + toyTotal;

                    totalOut.innerHTML = grandTotal;

                    grandMaster = grandTotal + totalCost;

                    total1Out.innerHTML = grandMaster;
                    totalOut.innerHTML = grandTotal;
                    // alert(fuelTotal);
                }

                inputQtyToy.onkeyup = function () {
                    var fuelQty = inputQtyFuel.value;
                    var fuelTotal = inputCostFuel * fuelQty;
                    var toyQty = inputQtyToy.value;
                    var toyTotal = inputCostToy * toyQty;

                    $('.totalCostFuel').html(fuelTotal);
                    $('input.grandFuel').val(fuelTotal);

                    $('.totalCostToy').html(toyTotal);
                    $('input.grandToy').val(toyTotal);

                    grandTotal = fuelTotal + toyTotal;

                    totalOut.innerHTML = grandTotal;

                    grandMaster = grandTotal + totalCost;

                    total1Out.innerHTML = grandMaster;
                    // alert(toyTotal);
                }
                inputQtyToy.onclick = function () {
                    var fuelQty = inputQtyFuel.value;
                    var fuelTotal = inputCostFuel * fuelQty;
                    var toyQty = inputQtyToy.value;
                    var toyTotal = inputCostToy * toyQty;

                    $('.totalCostFuel').html(fuelTotal);
                    $('input.grandFuel').val(fuelTotal);

                    $('.totalCostToy').html(toyTotal);
                    $('input.grandToy').val(toyTotal);

                    grandTotal = fuelTotal + toyTotal;

                    totalOut.innerHTML = grandTotal;

                    grandMaster = grandTotal + totalCost;

                    total1Out.innerHTML = grandMaster;
                    // alert(toyTotal);
                }

                jQuery(function(){
                    jQuery('#fuelQty').click();
                    jQuery('#ToyQty').click();
                });



            });
        </script>
    @endsection

</x-office-master>
