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


    @yield('styles')

<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-V2HB7CGVTH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-V2HB7CGVTH');
    </script>
</head>

<body style="padding-right :0px !important;">

<!-- Navigation -->
<x-team.header.team-header></x-team.header.team-header>

<!-- Page Content -->
<div class="container-fluid">
    <div class="page-min-height">
        <div class="row">

    @yield('page_title')
    <!-- Dock/Office Sidebar Widgets Column -->
        <div class="col-md-2">
            <div class="row">
                <div class="col-sm-6 col-md-12">
                    <ul class="navbar-nav sidebar-post accordion my-3 shadow" id="accordionSidebar">

                        <li class="nav-item bg-dark mb-2">
                            <a href="{{route('office.index')}}" class="nav-link collapsed bg-dark {{ Request::is('team/office/index*') ? 'dkred disabled' : '' }}">
                                <span>Office Schedule</span>
                            </a>
                        </li>

                        <li class="nav-item bg-dark mb-2">
                            <a href="{{route('office.precheckin')}}" class="nav-link collapsed bg-dark {{ Request::is('team/office/precheckin*') ? 'dkred disabled' : '' }}">
                                <span>Pre - Check In</span>
                            </a>
                        </li>

                        <li class="nav-item bg-dark mb-2">
                            <a href="{{route('office.rentalHistory')}}" class="nav-link collapsed bg-dark {{ Request::is('team/office/rental-history*') ? 'dkred disabled' : '' }}">
                                <span>Rental History</span>
                            </a>
                        </li>

                        <li class="nav-item bg-dark mb-2">
                            <a href="{{route('office.customers')}}" class="nav-link collapsed bg-dark {{ Request::is('team/office/customers*') ? 'dkred disabled' : '' }} {{ Request::is('team/office/customer*') ? 'dkred' : '' }}">
                                <span>Customers</span>
                            </a>
                        </li>

                        <li class="nav-item bg-dark mb-2">
                            <a href="{{route('office.coc')}}" class="nav-link collapsed bg-dark {{ Request::is('team/office/coc*') ? 'dkred disabled' : '' }}">
                                <span>Change of Condition</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="col-sm-6 col-md-12">
                    @yield('sidebar')
                </div>
            </div>






        </div>
        <!-- Dock/Office Entries Column -->
        <div class="col-md-10">
            <div class="">
                @yield('content')
            </div>
        </div>

    </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<x-footer></x-footer>

<!-- Logout Modal-->
<x-modal.logout></x-modal.logout>
<!-- Bootstrap core JavaScript -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Page level custom scripts -->
@yield('scripts')

</body>

</html>
