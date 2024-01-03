<nav class="home-header">
    <section class="upper-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <a href="#" class="phone">(503)284-6447</a>
                </div>
                <div class="col-sm-4">
                    <a class="" href="{{route('admin.index')}}">
                        <img src="@yield('logo-horizontal-1')" alt="SK Watercraft Rentals" class="brand" />
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="#" class="address">
                        250 SE Division Place
                        <br>
                        Portland, OR 97202
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="lower-header">
        <nav class="navbar navbar-expand-lg">

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item smaller {{ Request::is('team/index*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('team.index')}}">Home</a>
                    </li>
                    <li class="nav-item smaller dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="rentalsDropdown" href="#">Rentals</a>
                        <!-- Dropdown - Rental Menu -->
                        <div class="dropdown-menu dropdown-menu-left shadow animated--grow-in" aria-labelledby="rentalsDropdown">
                            <a class="dropdown-item" href="#">
{{--                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>--}}
                                SeaDoo Rentals
                            </a>
                            <a class="dropdown-item" href="#">
{{--                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>--}}
                                Boat Rentals
                            </a>
                            <a class="dropdown-item" href="#">
{{--                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>--}}
                                Segway Rentals
                            </a>
                            <a class="dropdown-item" href="#">
{{--                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>--}}
                                Spyder Rentals
                            </a>
                            <a class="dropdown-item" href="#">
{{--                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>--}}
                                Snowmobile Rentals
                            </a>
                            <a class="dropdown-item" href="#">
{{--                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>--}}
                                Kayak & Paddleboard Rentals
                            </a>
                        </div>
                    </li>
                    <li class="nav-item smaller dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="operationsDropdown" href="#">Operation Info</a>
                        <!-- Dropdown - Rental Menu -->
                        <div class="dropdown-menu dropdown-menu-left shadow animated--grow-in" aria-labelledby="operationsDropdown">
                            <a class="dropdown-item" href="#">
                                About Us
                            </a>
                            <a class="dropdown-item" href="#">
                                SK Rentals Maps & Hours
                            </a>
                        </div>
                    </li>
                    <li class="nav-item smaller dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="customersDropdown" href="#">Customer Corner</a>
                        <!-- Dropdown - Rental Menu -->
                        <div class="dropdown-menu dropdown-menu-left shadow animated--grow-in" aria-labelledby="customersDropdown">
                            <a class="dropdown-item" href="#">
                                Photo Gallery
                            </a>
                            <a class="dropdown-item" href="#">
                                Customer Survey
                            </a>
                            <a class="dropdown-item" href="#">
                                Testimonials
                            </a>
                            <a class="dropdown-item" href="#">
                                Know Before You Go
                            </a>
                        </div>
                    </li>
                    <li class="nav-item smaller {{ Request::is('/contact-us*') ? 'active' : '' }}">
                        <a class="nav-link no-border-right" href="{{route('home.contact')}}">Contact Us</a>
                    </li>

                </ul>
            </div>
        </nav>
    </section>
</nav>
