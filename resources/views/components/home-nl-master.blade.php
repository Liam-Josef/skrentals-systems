<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    @yield('browser_title')

    <link rel="icon" href="@yield('favicon')">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-V2HB7CGVTH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-V2HB7CGVTH');
    </script>
</head>

<body>
@yield('style')
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

<!-- Navigation -->
{{--<x-home.home-nl-header></x-home.home-nl-header>--}}

<!-- Page Content -->
<div class="container-login">
    <div class="container">

        <div class="row">

            <!-- Home Entries Column -->
            <div class="col-md-12">
                <div class="mb-5">
                    @yield('content')
                </div>
            </div>

            <!-- Home Sidebar Widgets Column -->
            {{--        <div class="col-md-4">--}}

            {{--            @yield('sidebar-post')--}}
            {{--        </div>--}}


        </div>
        <!-- /.row -->

    </div>
</div>
<!-- /.container -->

<!-- Footer -->
{{--<x-home.home-footer-nl></x-home.home-footer-nl>--}}

<!-- Logout Modal-->
<x-modal.logout></x-modal.logout>
<!-- Bootstrap core JavaScript -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Page level custom scripts -->
@yield('scripts')

</body>

</html>
