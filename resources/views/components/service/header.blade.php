<nav class="navbar navbar-expand-lg navbar-dark bg-gradient-secondary fixed-top team-header">
    <div class="container-fluid">
        <div class="team-header">
            <a class="navbar-brand" href="
            @if(auth()->user()->userHasRole('admin'))
            {{route('admin.index')}}
            @else
            {{route('team.index')}}
            @endif
                "><img src="{{asset('storage/' . 'images/rentalLogo_new.png')}}" alt="SK Watercraft Rentals" /></a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <div class="topbar-divider d-none d-sm-block"></div>

                @if(Auth::check())
                <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle nav-user-link pt-1" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600">
                                @if(Auth::check())
                                    {{auth()->user()->firstname}}
                                @endif
                            </span>
                            <img class="img-profile rounded-circle hidden-xs-inline" src="{{auth()->user()->avatar}}" height="25px" width="25px" />
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{route('team.profile', auth()->user()->id)}}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
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
