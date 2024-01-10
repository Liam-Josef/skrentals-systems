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
        <div class="">
            @yield('page-title')
            @yield('content')
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
