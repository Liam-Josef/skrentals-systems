<x-admin-master>

    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection


        @foreach($applications as $application)

        @section('page_title')
            <h1>Cancelled Bookings</h1>
        @endsection

        @section('browser_title')
            <title>Cancelled Bookings | {{$application->name}}</title>
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
           <div class="col-12">
               <h1>Cancelled Bookings</h1>
           </div>
       </div>

        <!-- Rentals Table -->
        <div class="card shadow mb-4 my-3">
            <div class="card-header py-3 text-center">
                <h6 class="m-0 font-weight-bold text-white">
                    <span style="color:transparent">SK</span>
                    @if(session('rental-deleted'))
                        {{session('rental-deleted')}}
                    @endif
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="rentalsTodayTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>
                                <span class="visible-xs-table">&nbsp;</span>
                                <div class="row hidden-xs-flex">
                                    <div class="col-sm-1">Booking ID</div>
                                    <div class="col-sm-3">Vehicle</div>
                                    <div class="col-sm-1">Date</div>
                                    <div class="col-sm-1">First</div>
                                    <div class="col-sm-1">Last</div>
                                    <div class="col-sm-2">Email</div>
                                    <div class="col-sm-2">Phone</div>
                                    <div class="col-sm-1">Status</div>
                                </div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($rentals as $rental)
                           <tr>
                                   <td>
                                       <a href="{{route('rental.show', $rental)}}" class="table-li-link">
                                           <div class="row">
                                               <div class="col-sm-1">
                                                   <p>
                                                       {{$rental->booking_id}}
                                                   </p>
                                               </div>
                                               <div class="col-sm-3">
                                                   <p>
                                                           <span>
                                               @foreach($types as $type)
                                                   @if($type->id == $rental->type_id)
                                                       {{$type->name}}
                                                   @endif
                                               @endforeach
                                          </span>
                                                   </p>
                                               </div>
                                               <div class="col-sm-1">
                                                   <p class="sm-md">
                                                       {{ \Carbon\Carbon::parse( $rental->activity_date )->format('M d' . ', '. 'Y') }}
                                                   </p>
                                               </div>
                                               <div class="col-sm-1">
                                                   {{$rental->first}}
                                                   <span class="hidden">
                                                           {{Str::lower($rental->first)}}
                                                       </span>
                                               </div>
                                               <div class="col-sm-1">
                                                   <p class="xs-center">
                                                       {{$rental->last}}
                                                       <span class="hidden">
                                                           {{Str::lower($rental->last)}}
                                                       </span>
                                                   </p>
                                               </div>
                                               <div class="col-sm-2">
                                                   <p>
                                                       {{$rental->email}}
                                                   </p>
                                               </div>
                                               <div class="col-sm-2">
                                                   <p>
                                                       {{$rental->phone = substr($rental->phone, 2)}}
                                                   </p>
                                               </div>
                                               <div class="col-sm-1">
                                                   <p>
                                                       {{$rental->status}}
                                                       <span class="hidden">
                                                           {{Str::lower($rental->status)}}
                                                       </span>
                                                   </p>
                                               </div>
                                           </div>
                                       </a>
                                   </td>
                               </tr>
                        @endforeach

                        </tbody>
                    </table>
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


</x-admin-master>
