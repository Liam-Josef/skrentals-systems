<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="">

    <title> @yield('browser_title')</title>
    <meta name="robots" content="index, follow">
    <meta name="description" content="@yield('meta_description')">
    <link rel="canonical" href="https://skwatercraftrentals.com">


    <link rel="icon" href="@yield('favicon')">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Custom fonts for this template-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,900;1,700&display=swap" rel="stylesheet">
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics - DO NOT USE FOR ZAPIER -->
</head>

<body style="padding-top: 0px !important;">

<!-- Navigation -->
<x-home.home-header-sk></x-home.home-header-sk>

<!-- Page Content -->
<div class="container-fluid pl-0 pr-0">

    <!-- Home Content -->
    @yield('content')

    <x-home.home-sidebar-sk></x-home.home-sidebar-sk>

</div>
<!-- /.container -->

<!-- Footer -->
<x-footer></x-footer>

<!-- Logout Modal-->
<x-modal.logout></x-modal.logout>
<!-- Bootstrap core JavaScript -->
{{--<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>--}}
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

<!-- Page level custom scripts -->
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
@yield('scripts')

</body>

</html>
