<x-office-master>
    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection


        @foreach($applications as $application)
            @section('page_title')
                <h1>Rental History</h1>
            @endsection

            @section('browser_title')
                <title>Rental History | {{$application->name}}</title>
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


    @section('content')

        <!-- Rentals Table -->
        <div class="card my-3 shadow mb-4">
            <div class="row">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered li-link-table" id="maintRentalTable">
                            <thead>
                                <tr>
                                    <th>
                                        <span class="visible-xs-table">&nbsp;</span>
                                        <div class="row hidden-xs-flex">
                                            <div class="col-sm-2 col-md-1">Invoice</div>
                                            <div class="col-sm-2 col-md-1">Vehicle</div>
                                            <div class="col-sm-2">Date</div>
                                            <div class="hidden-sm col-md-1">Last Name</div>
                                            <div class="col-sm-3 col-md-2">Email</div>
                                            <div class="col-sm-2">Phone</div>
                                            <div class="col-sm-1 text-center pr-0">Status</div>
                                            <div class="hidden-sm col-md-2 text-center pr-0">Customer Notes</div>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($rentals as $rental)
                                    <tr>
                                        <td>
                                            <a href="{{route('office.rentalProfile', $rental)}}" class="table-li-link">
                                                <div class="row">
                                                    <div class="col-6 col-sm-2 col-md-1">
                                                        <p>
                                                            #{{$rental->invoice_number}}
                                                        </p>
                                                    </div>
                                                    <div class="col-6 col-sm-2 col-md-1">
                                                        <p class="sm-md">
                                                            @if($rental->activity_item == 'Scarab 215')
                                                                Scarab
                                                            @elseif($rental->activity_item == '23ft. Pontoon Boat')
                                                                Pontoon
                                                            @elseif($rental->activity_item == '23ft. Pontoon Boat')
                                                                Pontoon
                                                            @elseif($rental->activity_item == 'Renegade BC 600ETec')
                                                                Renegade
                                                            @elseif($rental->activity_item == 'Summit 154 SP')
                                                                Summit
                                                            @elseif($rental->activity_item == '14ft. Aluminum Boat')
                                                                Aluminum
                                                            @elseif($rental->activity_item == 'Kayak Single')
                                                                Single Kayak
                                                            @elseif($rental->activity_item == 'Double Kayak')
                                                                Double Kayak
                                                            @elseif($rental->activity_item == 'Stand Up Paddleboard')
                                                                SUP
                                                            @elseif($rental->activity_item == 'Segway i2')
                                                                Segway
                                                            @elseif($rental->activity_item == 'Spyder RT-S SE6')
                                                                Spyder
                                                            @elseif($rental->activity_item == 'SeaDoo')
                                                                SeaDoo
                                                            @else
                                                                <br />

                                                            @endif
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <p>
                                                            {{ \Carbon\Carbon::parse( $rental->activity_date )->format('M d' . ', '. 'Y') }}
                                                        </p>
                                                    </div>
                                                    <div class="hidden-sm col-md-2">
                                                        <p>
                                                            {{$rental->last_name}}
                                                        </p>
                                                    </div>
                                                    <div class="visible-xs">
                                                        <p class="sm-lg">
                                                            {{$rental->last_name}}
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-3 col-md-1">
                                                        <p class="xs-center">
                                                            {{$rental->email}}
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-2 pr-0">
                                                        <p class="">
                                                            {{$rental->phone = substr($rental->phone, 2)}}
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <p class="sm-red text-center-small">
                                                            {{$rental->status}}
                                                        </p>
                                                    </div>
                                                    <div class="hidden-sm visible-xs col-md-2 pl-0">
                                                        <p>
                                                            {{$rental->customer_notes}}
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
        </div>

    @endsection


    @section('sidebar')
        <!-- Recent Announcement Widget -->
            @foreach($posts as $post)
                <div class="card my-4 shadow">
                    <h5 class="card-header text-center">{{$post->title}}</h5>
                    <div class="card-body">
                        {{Str::limit($post->body, '200', '...')}}
                    </div>
                    <a href="{{route('post', $post->id)}}" class="btn btn-primary-red">Read More</a>
                </div>
            @endforeach
    @endsection


    @section('scripts')
        <!-- Page level plugins -->
            <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

            <!-- Page level custom scripts -->
            <script src="{{asset('js/demo/datatables-scripts.js')}}"></script>
    @endsection


</x-office-master>
