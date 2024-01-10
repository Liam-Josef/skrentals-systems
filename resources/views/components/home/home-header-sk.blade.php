<nav class="home-header">
    <section class="upper-header">
        <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-outline-primary" style="position: absolute; right: 10px; ">
                <i class="fas fa-align-right"></i>
            </button>

        </div>
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
                    <li class="nav-item smaller {{ Request::is('home/index*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('home.index')}}">Home</a>
                    </li>
                    <li class="nav-item smaller dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="rentalsDropdown" href="#">Rentals</a>
                        <!-- Dropdown - Rental Menu -->
                        <div class="dropdown-menu dropdown-menu-left shadow animated-grow-in" aria-labelledby="rentalsDropdown">
                            <a href="{{route('home.seadoo')}}" class="dropdown-item {{ Request::is('/rentals/sea-doo-rentals*') ? 'active' : '' }}">
{{--                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>--}}
                                SeaDoo Rentals
                            </a>
                            <a href="{{route('home.boat')}}" class="dropdown-item {{ Request::is('/rentals/boat-rentals*') ? 'active' : '' }}">
{{--                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>--}}
                                Boat Rentals
                            </a>
                            <a href="{{route('home.segway')}}" class="dropdown-item {{ Request::is('/rentals/sea-doo-rentals*') ? 'active' : '' }}">
{{--                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>--}}
                                Segway Rentals
                            </a>
                            <a href="{{route('home.spyder')}}" class="dropdown-item {{ Request::is('/rentals/spyder-rentals*') ? 'active' : '' }}">
{{--                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>--}}
                                Spyder Rentals
                            </a>
                            <a href="{{route('home.snowmobile')}}" class="dropdown-item {{ Request::is('/rentals/snowmobile-rentals*') ? 'active' : '' }}">
{{--                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>--}}
                                Snowmobile Rentals
                            </a>
                            <a href="{{route('home.kayak')}}" class="dropdown-item {{ Request::is('/rentals/kayak-paddleboard-rentals*') ? 'active' : '' }}">
{{--                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>--}}
                                Kayak & Paddleboard Rentals
                            </a>
                        </div>
                    </li>
                    <li class="nav-item smaller dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="operationsDropdown" href="#">Operation Info</a>
                        <!-- Dropdown - Rental Menu -->
                        <div class="dropdown-menu dropdown-menu-left shadow animated--grow-in" aria-labelledby="operationsDropdown">
                            <a href="{{route('home.about_us')}}" class="dropdown-item {{ Request::is('/operation-info/about-us*') ? 'active' : '' }}">
                                About Us
                            </a>
                            <a href="{{route('home.maps')}}" class="dropdown-item {{ Request::is('/operation-info/map-hours*') ? 'active' : '' }}">
                                SK Rentals Maps & Hours
                            </a>
                        </div>
                    </li>
                    <li class="nav-item smaller dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="customersDropdown" href="#">Customer Corner</a>
                        <!-- Dropdown - Rental Menu -->
                        <div class="dropdown-menu dropdown-menu-left shadow animated--grow-in" aria-labelledby="customersDropdown">
                            <a href="{{route('home.gallery')}}" class="dropdown-item {{ Request::is('/customer-corner/photo-gallery*') ? 'active' : '' }}">
                                Photo Gallery
                            </a>
                            <a href="{{route('home.survey')}}" class="dropdown-item {{ Request::is('/customer-corner/customer-survey*') ? 'active' : '' }}">
                                Customer Survey
                            </a>
                            <a href="{{route('home.testimonials')}}" class="dropdown-item {{ Request::is('/customer-corner/testimonials*') ? 'active' : '' }}">
                                Testimonials
                            </a>
                            <a href="{{route('home.know')}}" class="dropdown-item {{ Request::is('/customer-corner/know-before-you-go*') ? 'active' : '' }}">
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
