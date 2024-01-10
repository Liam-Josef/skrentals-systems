<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    @yield('browser_title')
    <meta name="robots" content="noindex, nofollow">

    <link rel="icon" href="@yield('favicon')">

    <!-- Bootstrap core CSS -->
    <link rel="icon" href="{{asset('storage/' . 'images/favicon-duo.png')}}">

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

<body>

<!-- Navigation -->
<x-team.header.team-header></x-team.header.team-header>

<!-- Page Content -->
<div class="container-fluid">
    <div class="page-min-height">
        <div class="row">

        @yield('page_title')

        </div>


        @if(!auth()->user()->userHasRole('Service'))
             <div class="row">

            <!-- Home Entries Column -->
            <div class="col-md-3">
                <div class="">
                    @yield('sidebar')
                </div>
            </div>

            <!-- Home Sidebar Widgets Column -->
            <div class="col-md-9">

                @yield('content-right')
            </div>

            <!-- Home Entries Column -->
            <div class="col-md-8">
                <div class="">
                    @yield('content')
                </div>
            </div>

            <!-- Home Sidebar Widgets Column -->
            <div class="col-md-4">

                @yield('sidebar-post')
            </div>


        </div>
        @endif




        <!-- Service Section -->
        @if(auth()->user()->userHasRole('Service'))
            <div class="row">
                <div class="col-12">
                    @yield('content')
                </div>
            </div>
        @endif


{{--    <!-- Service Section -->--}}
{{--        @if(auth()->user()->userHasRole('Zapier'))--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    @yield('zap-content')--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endif--}}
    </div>

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
