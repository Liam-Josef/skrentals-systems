<x-admin-master>
    @section('styles')

    @endsection

    @foreach($applications as $application)

    @section('page_title')
        <h1> @if($booking->invoice_number == '')
                {{$booking->booking_id}}
            @else
                #{{$booking->invoice_number}}
            @endif - {{$booking->first}} {{$booking->last}}</h1>
    @endsection

    @section('browser_title')
        <title>
            @if($booking->invoice_number == '')
                {{$booking->booking_id}}
            @else
                #{{$booking->invoice_number}}
            @endif - {{$booking->first_name}} {{$booking->last_name}} | {{$application->name}}
        </title>
    @endsection

    @section('logo-square')
        <img src="{{asset('storage/'. $application->logo_square_1)}}" alt="{{$application->name}} Logo" height="30px" width="auto">
    @endsection

    @section('logo-horizontal')
        <img src="{{asset('storage/'. $application->logo_horizontal_1)}}" alt="{{$application->name}} Logo" height="30px" width="auto">
    @endsection

    @section('logo_horizontal_1')
        {{asset('storage/'. $application->logo_horizontal_1)}}
    @endsection
    @section('logo_horizontal_2')
        {{asset('storage/'. $application->logo_horizontal_2)}}
    @endsection
    @section('logo_square_1')
        {{asset('storage/'. $application->logo_square_1)}}
    @endsection
    @section('logo_square_2')
        {{asset('storage/'. $application->logo_square_2)}}
    @endsection
    @section('favicon')
        {{asset('storage/'. $application->favicon)}}
    @endsection

    @section('analytic_links')
        <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/index*') ? 'collapsed' : '' }}" href="#" data-toggle="collapse" data-target="#collapseAnalytics" aria-expanded="" aria-controls="collapseAnalytics">
                <i class="fas fa-fw fa-solid fa-code-branch"></i>
                <span>Analytics</span>
            </a>
            <div id="collapseAnalytics" class="collapse" aria-labelledby="headingAnalytics" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">

                    <h6 class="collapse-header">Google Analytics: </h6>
                    @if($application->analytic_link_1 != '')
                        <a class="collapse-item" href="{{$application->analytic_link_1}}" target="_blank">Analytics <span class="text-primary">Main</span></a>
                    @endif
                    @if($application->analytic_link_2 != '')
                        <a class="collapse-item" href="{{$application->analytic_link_2}}" target="_blank"><span class="text-primary">Reports</span> Snapshot</a>
                    @endif
                    @if($application->analytic_link_3 != '')
                        <a class="collapse-item" href="{{$application->analytic_link_3}}" target="_blank"><span class="text-primary">Acquisition</span> Overview</a>
                    @endif
                    @if($application->analytic_link_4 != '')
                        <a class="collapse-item" href="{{$application->analytic_link_4}}" target="_blank"><span class="text-primary">Engagement</span> Overview</a>
                    @endif
                    @if($application->analytic_link_5 != '')
                        <a class="collapse-item" href="{{$application->analytic_link_5}}" target="_blank"><span class="text-primary">Demographics</span> Overview</a>
                    @endif
                </div>
            </div>
        </li>
    @endsection

    @endforeach



    @section('content')
        <div class="row">
            <div class="col-sm-3">
                <a href="{{route('rental.index')}}">
                   <h3>
                       <i class="fa fa-chevron-circle-left"></i> Calendar
                   </h3>
                </a>
            </div>
            <div class="col-sm-6">
                <h1 class="text-center">Booking:
                    <span>
                        @foreach($types as $type)
                            {{$type->name}}
                        @endforeach
                       |  {{$booking->last}}, {{$booking->first}}
                    </span>
                </h1>
            </div>
            <div class="col-sm-3">
                <h1 class="text-right mt-1">

                   {{\Carbon\Carbon::parse($booking->activity_start_date)->format('M, d, Y')}}
                </h1>
            </div>
        </div>


        <!-- CUSTOMER INFORMATION -->
        <div class="card mb-4 shadow">
            <div class="card-header">
                <h3 class="card-title">
                    @foreach($durations as $duration)
                        {{$duration->name}} Rental
                    @endforeach
                     <span>from</span>
                        {{\Carbon\Carbon::parse($booking->activity_date_start)->format('h:i A')}}
                    <span>to</span>
                        {{\Carbon\Carbon::parse($booking->activity_date_end)->format('h:i A')}}
                </h3>
            </div>

            <div class="card-body">

                <div class="row">
                    <div class="col-12">
                        @foreach($types as $type)
                            <img src="{{asset('storage/'. $type->image)}}" alt="{{$type->img_alt}}" class="img-responsive">
                        @endforeach
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-4 mt-3">
                                <a href="#" class="btn btn-outline-primary btn-100" data-toggle="modal" data-target="#cancel{{$booking->id}}">Cancel Booking</a>
                            </div>
                            <div class="col-sm-4 mt-3">

                            </div>
                            <div class="col-sm-4 mt-3">
                                <a href="#" class="btn btn-outline-secondary btn-100">Edit Booking</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- /CUSTOMER INFORMATION -->



        <!-- Cancel Booking Modal -->
        <div class="modal fade" id="cancel{{$booking->id}}" tabindex="-1" role="dialog" aria-labelledby="cancelModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg mt-0" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Cancel: {{$booking->last}}</h3>
                    </div>
                    <div class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <div class="row width-100">
                            <div class="col-6">
                                <button class="btn btn-secondary btn-100" type="button" data-dismiss="modal">close</button>
                            </div>
                            <div class="col-6">
                                <form action="{{route('booking.cancel', $booking)}}" method="post">
                                    @csrf
                                    @method("PUT")
                                    <button class="btn btn-primary btn-100" type="submit">Cancel Booking</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Cancel Booking Modal -->



    @endsection


</x-admin-master>
