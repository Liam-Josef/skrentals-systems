{{--<x-team-master>--}}


{{--<!-- Zapier Integration -->--}}
{{--@section('zap-content')--}}
{{--    <div class="card shadow mt-4 mb-5">--}}
{{--        <div class="card-body">--}}
{{--            <form method="post" action="{{route('rental.addRental')}}">--}}
{{--                @csrf--}}
{{--                @method('PUT')--}}

{{--                <div class="row">--}}


{{--                    <div class="col-6 col-sm-4 col-md-3">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="booking_id">Booking ID</label>--}}
{{--                            <input type="text" class="form-control" name="booking_id">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-6 col-sm-4 col-md-3">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="purchase_type">Purchase Type</label>--}}
{{--                            <input type="text" class="form-control" name="purchase_type">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-6 col-sm-4 col-md-3">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="purchase_date">Purchase Date</label>--}}
{{--                            <input type="text" class="form-control" name="purchase_date">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-6 col-sm-4 col-md-3">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="activity_date">Activity Date</label>--}}
{{--                            <input type="text" class="form-control" name="activity_date">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-6 col-sm-4 col-md-3">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="activity_item">Activity Item</label>--}}
{{--                            <input type="text" class="form-control" name="activity_item">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-6 col-sm-4 col-md-3">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="first_name">First Name</label>--}}
{{--                            <input type="text" class="form-control" name="first_name">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-6 col-sm-4 col-md-3">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="last_name">Last Name</label>--}}
{{--                            <input type="text" class="form-control" name="last_name">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-6 col-sm-4 col-md-3">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="zip_code">Zip Code</label>--}}
{{--                            <input type="text" class="form-control" name="zip_code">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-6 col-sm-4 col-md-3">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="payment_type">Payment Type</label>--}}
{{--                            <input type="text" class="form-control" name="payment_type">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-6 col-sm-4 col-md-3">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="payment_status">Payment Status</label>--}}
{{--                            <input type="text" class="form-control" name="payment_status">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-6 col-sm-4 col-md-3">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="ticket_list">Ticket List</label>--}}
{{--                            <input type="text" class="form-control" name="ticket_list">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-6 col-sm-4 col-md-3">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="email">Email</label>--}}
{{--                            <input type="text" class="form-control" name="email">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-6 col-sm-4 col-md-3">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="phone">Phone</label>--}}
{{--                            <input type="text" class="form-control" name="phone">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-6 col-sm-4 col-md-3">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="source">Source</label>--}}
{{--                            <input type="text" class="form-control" name="source">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-6 col-sm-4 col-md-3">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="list_price">List Price</label>--}}
{{--                            <input type="text" class="form-control" name="list_price">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-6 col-sm-4 col-md-3">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="total_discount_amount">Total Discount</label>--}}
{{--                            <input type="text" class="form-control" name="total_discount_amount">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-6 col-sm-4 col-md-3">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="customer_fees">Customer Fee's</label>--}}
{{--                            <input type="text" class="form-control" name="customer_fees">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-6 col-sm-4 col-md-3">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="total_charge">Total Charge</label>--}}
{{--                            <input type="text" class="form-control" name="total_charge">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-6 col-sm-4 col-md-3">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="status">Status</label>--}}
{{--                            <input type="text" class="form-control" name="status">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-6 col-sm-4 col-md-3">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="customer_notes">Customer Notes</label>--}}
{{--                            <textarea type="text" class="form-control" name="customer_notes"></textarea>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <input type="hidden" name="precheck_by" value="0">--}}
{{--                    <button class="btn btn-primary" type="submit">Submit</button>--}}

{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
{{--<!-- /Zapier Integration -->--}}
{{--</x-team-master>--}}
