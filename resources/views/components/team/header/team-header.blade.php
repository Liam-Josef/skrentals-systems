<nav class="navbar navbar-expand-lg navbar-dark bg-gradient-secondary fixed-top team-header">
    <div class="container-fluid">
        <div class="team-header">
            <a class="navbar-brand" href="{{route('home.index')}}">
                <img src="@yield('logo-horizontal-2')" alt="RentalGuru Logo Light" />
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                @if(!auth()->user()->userHasRole('Service') && !auth()->user()->userHasRole('Zapier'))
                    <li class="nav-item smaller mt-1 {{ Request::is('/*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('team.index')}}">Dashboard</a>
                    </li>
                @endif
                @if(auth()->user()->userHasRole('Office'))
                    <li class="nav-item smaller mt-1 {{ Request::is('team/office*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('office.index')}}">Office</a>
                    </li>
                @endif
                @if(auth()->user()->userHasRole('Operations'))
                    <li class="nav-item dropdown no-arrow mt-1">
                        <a class="nav-link dropdown-toggle" href="#" id="operationsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Operations
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="operationsDropdown">

                                <a class="dropdown-item" href="{{route('dock.departing')}}">
                                  Departing
                                </a>

                                <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="{{route('dock.returning')}}">
                                Returning
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#office_precheck">
                                Office Pre-Check
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="{{route('dock.hourCounts')}}">
                               Hour Counts
                            </a>


                        </div>
                    </li>

                @endif
{{--                @if(!auth()->user()->userHasRole('Service') && !auth()->user()->userHasRole('Zapier'))--}}
                @if(!auth()->user()->userHasRole('Service'))
                    <li class="nav-item smaller mt-1 {{ Request::is('team/runnerview/index*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('runnerview.index')}}">Master View</a>
                    </li>
                @endif
                @if(auth()->user()->userHasRole('Admin'))
                    <li class="nav-item smaller mt-1">
                        <a class="nav-link" href="{{route('admin.index')}}">Admin</a>
                    </li>
                @endif

                <div class="topbar-divider d-none d-sm-block"></div>

                @if(Auth::check())
                <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle nav-user-link pt-1" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 smaller">
                                @if(Auth::check())
                                    {{auth()->user()->firstname}}
                                @endif
                            </span>
                            <img class="img-profile rounded-circle hidden-xs-inline" src="{{auth()->user()->avatar}}" height="25px" width="25px" />
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            @if(!auth()->user()->userHasRole('Service'))
                                <a class="dropdown-item" href="{{route('team.profile', auth()->user()->id)}}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                            @endif
                            {{--                            <a class="dropdown-item" href="#">--}}
                            {{--                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>--}}
                            {{--                                Activity Log--}}
                            {{--                            </a>--}}
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                @else
                        <li class="nav-item dropdown no-arrow pt-05rem">
                            <a class="nav-link dropdown-toggle nav-user-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-none d-lg-inline text-gray-600 smaller">
                                Login
                            </span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-item">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="row mb-3">
                                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3" style="display: none !important;">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-0">
                                            <div class="col-md-8">

                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Login') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
