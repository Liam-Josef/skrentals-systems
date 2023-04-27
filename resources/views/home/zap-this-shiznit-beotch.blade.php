<x-home-nh-master>

    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection



    @foreach($applications as $application)
    @section('page_title')
        <h1>{{$application->name}}</h1>
    @endsection

    @section('browser_title')
        <title>Zap | {{$application->name}}
        </title>
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
        @yield('page_title')

        <div class="card mb-4 shadow">
            @if(Session::has('message'))
                <h3 class="text-center mb-0">
                    {{Session::get('message')}}
                </h3>
            @endif
           <div class="card-body">
               <form action="{{route('rental.store')}}" method="post" enctype="multipart/form-data">
                   @method('POST')
                   @csrf

                   <div class="form-group">
                       <label for="booking_id">Booking ID</label>
                       <input type="text" class="form-control" name="booking_id" id="booking_id">
                   </div>
{{--                   <div class="form-group">--}}
{{--                       <label for="purchase_date">Purchase Date</label>--}}
{{--                       <input type="text" class="form-control" name="purchase_date" id="purchase_date">--}}
{{--                   </div>--}}
{{--                   <div class="form-group">--}}
{{--                       <label for="activity_date">Activity Date</label>--}}
{{--                       <input type="text" class="form-control" name="activity_date" id="activity_date">--}}
{{--                   </div>--}}
                   <div class="form-group">
                       <label for="activity_item">Activity Item</label>
                       <input type="text" class="form-control" name="activity_item" id="activity_item">
                   </div>
                   <div class="form-group">
                       <label for="first_name">First Name</label>
                       <input type="text" class="form-control" name="first_name" id="first_name">
                   </div>
                   <div class="form-group">
                       <label for="last_name">Last Name</label>
                       <input type="text" class="form-control" name="last_name" id="last_name">
                   </div>
                   <div class="form-group">
                       <label for="zip_code">Zip</label>
                       <input type="text" class="form-control" name="zip_code" id="zip_code">
                   </div>
                   <div class="form-group">
                       <label for="payment_status">Payment Status</label>
                       <input type="text" class="form-control" name="payment_status" id="payment_status">
                   </div>
                   <div class="form-group">
                       <label for="ticket_list">Ticket List</label>
                       <input type="text" class="form-control" name="ticket_list" id="ticket_list">
                   </div>
                   <div class="form-group">
                       <label for="email">Email</label>
                       <input type="text" class="form-control" name="email" id="email">
                   </div>
                   <div class="form-group">
                       <label for="phone">Phone</label>
                       <input type="text" class="form-control" name="phone" id="phone">
                   </div>
                   <div class="form-group">
                       <label for="source">Source</label>
                       <input type="text" class="form-control" name="source" id="source">
                   </div>
                   <input type="text" class="hidden" name="activity_date" id="activity_date" value="2023-04-26 18:0:0">
                   <input type="text" class="hidden" name="purchase_date" id="purchase_date" value="2023-04-24 18:0:0">
                   <input type="text" class="hidden" name="purchase_type" id="purchase_type" value="Peek">
                   <input type="text" class="hidden" name="payment_type" id="payment_type" value="Peek">
                   <input type="text" class="hidden" name="list_price" id="list_price" value="$0.00">
                   <input type="text" class="hidden" name="total_discount_amount" id="total_discount_amount" value="$0.00">
                   <input type="text" class="hidden" name="customer_fees" id="customer_fees" value="$0.00">
                   <input type="text" class="hidden" name="total_charge" id="total_charge" value="$0.00">
                   <button class="btn btn-primary" type="submit">Submit</button>
               </form>
           </div>

        </div>


    @endsection

    @section('sidebar-post')

    @endsection

    @section('scripts')
    <!-- Page level plugins -->
        <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('js/demo/datatables-scripts.js')}}"></script>
    @endsection

</x-home-nh-master>
