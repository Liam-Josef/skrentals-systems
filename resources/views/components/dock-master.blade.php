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

<!-- Navigation -->
<x-team.header.team-header></x-team.header.team-header>


<!-- Page Content -->
<div class="container-fluid">

    <div class="page-min-height">
        <div class="row">

        @yield('page-title')
        <!-- Dock/Office Sidebar Widgets Column -->
        @yield('sidebar')
        <!-- Dock/Office Entries Column -->
            <div class="col-md-12">
                <div class="">
                    @yield('page-title')
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




<!-- Modal -->
<div class="modal left fade" id="dockSidebar" tabindex="-1" role="dialog" aria-labelledby="dockSidebarLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel2"><br /></h4>
            </div>

            <div class="modal-body">
                <ul class="navbar-nav sidebar-post dock accordion shadow" id="accordionSidebar">

{{--                    <li class="nav-item bg-dark mb-2">--}}
{{--                        <a href="{{route('dock.index')}}" class="nav-link collapsed bg-dark {{ Request::is('team/dock/index*') ? 'dkred disabled' : '' }}">--}}
{{--                            <span>Dock Schedule</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}

                    <li class="nav-item bg-dark mb-2">
                        <a href="{{route('dock.departing')}}" class="nav-link collapsed bg-dark {{ Request::is('team/dock/departing*') ? 'dkred disabled' : '' }}">
                            <span>Departing</span>
                        </a>
                    </li>

                    <li class="nav-item bg-dark mb-2">
                        <a href="{{route('dock.returning')}}" class="nav-link collapsed bg-dark {{ Request::is('team/dock/returning*') ? 'dkred disabled' : '' }}">
                            <span>Returning</span>
                        </a>
                    </li>

                    <li class="nav-item bg-dark mb-2">
                        <a href="#" class="nav-link collapsed bg-dark"
                           class="rental-modal"
                           data-toggle="modal"
                           data-target="#office_precheck">
                            <span>Office Pre-Check</span>
                        </a>
                    </li>

                    <li class="nav-item bg-dark mb-2">
                        <a href="{{route('dock.hourCounts')}}" class="nav-link collapsed bg-dark {{ Request::is('team/dock/hour-counts*') ? 'dkred disabled' : '' }}">
                            <span>Hour Counts</span>
                        </a>
                    </li>

                </ul>
                @yield('dock_sidebar')
            </div>

        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div><!-- modal -->




<!-- Logout Modal-->
<x-modal.logout></x-modal.logout>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Page level custom scripts -->
@yield('scripts')

</body>

</html>
