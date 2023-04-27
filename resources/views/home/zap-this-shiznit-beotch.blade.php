<x-home-nh-master>


    @section('content')

               <form action="{{route('rental.store')}}" method="post" enctype="multipart/form-data">
                   @method('POST')
                   @csrf


                       <input type="text" class="form-control" name="booking_id" id="booking_id">
{{--                   <div class="form-group">--}}
{{--                       <label for="purchase_date">Purchase Date</label>--}}
{{--                       <input type="text" class="form-control" name="purchase_date" id="purchase_date">--}}
{{--                   </div>--}}
{{--                   <div class="form-group">--}}
{{--                       <label for="activity_date">Activity Date</label>--}}
{{--                       <input type="text" class="form-control" name="activity_date" id="activity_date">--}}
{{--                   </div>--}}
                   <input type="text" class="form-control" name="email" id="email">
                       <input type="text" class="form-control" name="first_name" id="first_name">
                       <input type="text" class="form-control" name="last_name" id="last_name">
                       <input type="text" class="form-control" name="zip_code" id="zip_code">
                   <input type="text" class="form-control" name="activity_item" id="activity_item" value="sometrhing">
                   <input type="text" class="form-control" name="ticket_list" id="ticket_list" value="something">
                       <input type="text" class="form-control" name="payment_status" id="payment_status" value="Paid">
                       <input type="text" class="form-control" name="phone" id="phone" value="502-333-4533">
                       <input type="text" class="form-control" name="source" id="source" value="Widget">
                   <input type="text" class="hidden" name="activity_date" id="activity_date" value="2023-04-26 18:0:0">
                   <input type="text" class="hidden" name="purchase_date" id="purchase_date" value="2023-04-24 18:0:0">
                   <input type="text" class="hidden" name="purchase_type" id="purchase_type" value="Peek">
                   <input type="text" class="hidden" name="payment_type" id="payment_type" value="Peek">
                   <input type="text" class="hidden" name="list_price" id="list_price" value="$0.00">
                   <input type="text" class="hidden" name="total_discount_amount" id="total_discount_amount" value="$0.00">
                   <input type="text" class="hidden" name="customer_fees" id="customer_fees" value="$0.00">
                   <input type="text" class="hidden" name="total_charge" id="total_charge" value="$0.00">
                   <input type="submit" value="Submit"/>
               </form>

    @endsection

    @section('sidebar-post')

    @endsection

    @section('scripts')

    @endsection

</x-home-nh-master>
