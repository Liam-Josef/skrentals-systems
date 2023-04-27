<!DOCTYPE html>
<html lang="en">


<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Home Entries Column -->
        <div class="col-md-8">
            <div class="div-container">
                @yield('content')
            </div>
        </div>

        <!-- Home Sidebar Widgets Column -->
        <div class="col-md-4">

            @yield('sidebar-post')
        </div>


    </div>
    <!-- /.row -->

</div>
<!-- /.container -->


<!-- Logout Modal-->
<x-modal.logout></x-modal.logout>
<!-- Bootstrap core JavaScript -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Page level custom scripts -->
@yield('scripts')

</body>

</html>
