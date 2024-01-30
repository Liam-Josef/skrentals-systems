<x-admin-master>

    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection


        @foreach($applications as $application)

        @section('page_title')
            <h1>Rental Calendar</h1>
        @endsection

        @section('browser_title')
            <title>Rental Calendar | {{$application->name}}</title>
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
                <h1>Rental Calendar</h1>
            </div>
        </div>

       <div class="row">
           <div class="col-12">
               <div id="calendar"></div>
           </div>
       </div>

        <!-- Modals -->
            <!-- View Calendar Event -->
            <div id="calendarViewBookModal" class="modal fade">
                <div class="modal-dialog modal-lg mt-0" role="document">
                   <div class="modal-content">

                       <div class="modal-header">
                           <h3>Adding Event</h3>
                       </div>
                       <div class="modal-body">

                       </div>
                       <div class="modal-footer">
                           <button class="btn btn-secondary" type="button" data-dismiss="modal">close</button>
                       </div>
                   </div>
                </div>
            </div>
            <!-- /View Calendar Event -->
            <!-- Add Calendar Event -->
            <div id="calendarAddBookModal" class="modal fade">
                <div class="modal-dialog modal-lg mt-0" role="document">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h3>Adding Event</h3>
                        </div>
                        <div class="modal-body">

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Add Calendar Event -->
        <!-- /Modals -->
    @endsection


    @section('scripts')
        <!-- Page level plugins -->
            <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

            <!-- Page level custom scripts -->
            <script src="{{asset('js/demo/datatables-scripts.js')}}"></script>

            <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.10/index.global.min.js"></script>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var calendarEl = document.getElementById('calendar');
                    var calendar = new FullCalendar.Calendar(calendarEl, {
                        headerToolbar: { center: 'timeGridDay,timeGridWeek,dayGridMonth,dayGridWeek' }, // buttons for switching between views
                        initialView: 'timeGridWeek',
                        slotMinTime: '07:00:00',
                        slotMaxTime: '24:00:00',
                        events: @json($bookings),
                        nowIndicator: 'true',
                        dateClick: function() {
                            // $('#calendarAddBookModal').modal();
                        },
                        eventClick: function(event, jsEvent, view) {
                            // $('#calendarViewBookModal').modal();
                            if (event.url) {
                                //if you want to open url in the same tab
                                location.href = "/";
                                //if you want to open url in another window / tab, use the commented code below
                                //window.open(event.url);
                                return false;
                            }
                        }
                    });

                    // Dynamic Date Click - https://fullcalendar.io/docs/handlers
                    // calendar.on('dateClick', function(info) {
                    //     console.log('clicked on ' + info.dateStr);
                    // });

                    calendar.render();
                });
            </script>
    @endsection




</x-admin-master>
