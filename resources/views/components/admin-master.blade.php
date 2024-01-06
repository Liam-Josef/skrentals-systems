<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    @yield('browser_title')
    <meta name="robots" content="noindex, nofollow">

    <link rel="icon" href="@yield('favicon')">
    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    @yield('styles')

    <style type="text/css">
        .card .card-header {
            background: #151515 !important;
        }
    </style>

    <script type="text/javascript">
        $( document ).ready(function() {
            new WOW().init();
        });

    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-V2HB7CGVTH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-V2HB7CGVTH');
    </script>

</head>

<body id="page-top" style="padding-top: 0px;">
@if(auth()->user(['role:admin']))
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion wow animated animated-fade-in"  style="animation-delay: 2s;
    animation-name: fadeIn; " id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center mt-5 mb-3" href="{{route('home.index')}}">
                <div class="sidebar-brand-icon">
                    <img src="@yield('logo_square_1')" alt="RentalGuru Admin Logo" class="img-responsive" />
                </div>
            </a>

            <div class="sidebar-container-scroll">
                <hr class="sidebar-divider my-0 mt-2 hidden-xs">

                <x-admin.sidebar.dashboard></x-admin.sidebar.dashboard>

                <hr class="sidebar-divider hidden-xs">

                <x-admin.sidebar.operations></x-admin.sidebar.operations>

                <hr class="sidebar-divider hidden-xs">

                <x-admin.sidebar.employees></x-admin.sidebar.employees>

                <hr class="sidebar-divider hidden-xs">

                <x-admin.sidebar.vehicles></x-admin.sidebar.vehicles>


{{--                <x-admin.sidebar.application></x-admin.sidebar.application>--}}

                <x-admin.sidebar.website></x-admin.sidebar.website>


                <!-- Nav Item - Utilities Collapse Menu -->
                @yield('analytic_links')

            </div>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>

        <x-admin.modals.create-post></x-admin.modals.create-post>
        <x-admin.modals.add-vehicle></x-admin.modals.add-vehicle>
        <x-admin.modals.add-customer></x-admin.modals.add-customer>
        <x-admin.modals.add-employee></x-admin.modals.add-employee>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <x-admin.header.admin-header></x-admin.header.admin-header>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    @yield('content')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <x-admin.footer.admin-footer></x-admin.footer.admin-footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <x-modal.logout></x-modal.logout>
@endif

<!-- Bootstrap core JavaScript-->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="https://kit.fontawesome.com/cf1eb2c218.js" crossorigin="anonymous"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('js/sb-admin-2.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>


<!-- Page level custom scripts -->
@yield('scripts')





</body>

</html>
