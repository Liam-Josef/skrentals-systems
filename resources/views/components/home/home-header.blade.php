<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{route('admin.index')}}"><img src="{{asset('http://127.0.0.1:8000/storage/images/rentalLogo_new_square.png')}}" alt="SK Watercraft Rentals" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item smaller {{ Request::is('team/index*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('team.index')}}">Dashboard</a>
                </li>
                <li class="nav-item smaller {{ Request::is('office/index*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('office.index')}}">Office</a>
                </li>
                <li class="nav-item smaller {{ Request::is('dock/index*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('dock.index')}}">Dock</a>
                </li>
                @if(auth()->user()->userHasRole('Admin', 'Office Dock 1'))
                <li class="nav-item smaller">
                    <a class="nav-link" href="{{route('admin.index')}}">Admin</a>
                </li>
                @endif

            @if(Auth::check())
                <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle nav-user-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 large">
                                @if(Auth::check())
                                    {{auth()->user()->firstname}}
                                @endif
                            </span>
                            <img class="img-profile rounded-circle" src="{{auth()->user()->avatar}}" height="25px" width="25px" />
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
