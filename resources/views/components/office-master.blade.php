<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="robots" content="noindex, nofollow">

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

    <script>
        $(document).ready(function () {

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
            $('#sidebarCollapseInt').on('click', function () {
                $('#sidebar').toggleClass('active');
            });

        });
    </script>
    @yield('styles')

<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-V2HB7CGVTH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-V2HB7CGVTH');
    </script>
    <!-- Logout Modal-->
    <x-modal.logout></x-modal.logout>
    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

    <!-- Page level custom scripts -->
    @yield('scripts')
    <script>
        $(document).ready(function () {

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
            $('#sidebarCollapseInt').on('click', function () {
                $('#sidebar').toggleClass('active');
            });

        });
    </script>
</head>

<body style="padding-right :0px !important;">

<!-- Navigation -->
<x-team.header.team-header></x-team.header.team-header>

<!-- Page Content -->
<div class="container-fluid">
    <!-- Mobile Sidebar Button -->
    <div class="col-12">
        <div class="teamSidebar">
            <div class="row">
                <div class="col-12">
                    <button type="button" id="sidebarCollapse" class="btn btn-outline-primary" style="position: absolute; right: 10px; ">
                        <i class="fas fa-align-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Mobile Sidebar Button -->
    <div class="page-min-height">
        <div class="row">

    @yield('page_title')
    <!-- Dock/Office Sidebar Widgets Column -->
        <div class="col-md-2">
            <div class="row">
                <div class="col-sm-6 col-md-12">
                    <ul class="navbar-nav sidebar-post accordion my-3 shadow" id="accordionSidebar">

                        <li class="nav-item bg-dark mb-2">
                            <a id="officeSchedule" href="{{route('office.index')}}" class="nav-link collapsed bg-dark {{ Request::is('team/office/index*') ? 'dkred disabled' : '' }}">
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

    <x-team.team-sidebar-mobile></x-team.team-sidebar-mobile>

</div>
<!-- /.container -->

<!-- Footer -->
<x-footer></x-footer>



</body>

</html>
