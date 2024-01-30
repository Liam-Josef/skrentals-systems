<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar" class="homeSidebarOne">
        <button type="button" id="sidebarCollapseInt" class="btn btn-outline-primary" style="position: absolute; right: 10px; top: 10px ">
            <i class="fas fa-align-right"></i>
        </button>

            <div class="sidebar-header">
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center mt-5 mb-3" href="{{route('home.index')}}">
                    <div class="sidebar-brand-icon">
                        <img src=" {{asset('storage/app-images/M7AS6bo6gOSp4T9dpivOcFp8rk28m0K5vQs5jKpb.png')}}" alt="SK Watercraft Admin Logo" class="img-responsive" />
                    </div>
                </a>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="list-unstyled components customer-menu-mobile">
                        <li class="nav-item smaller mt-1">
                            <a class="nav-link" href="{{route('admin.index')}}">Home</a>
                        </li>
                        <li class="{{ Request::is('rentals/*') ? 'active' : '' }}">
                            <a href="#rentals-Submenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                Rentals
                            </a>
                            <!-- Dropdown - User Information -->
                            <ul class="collapse list-unstyled right {{ Request::is('rentals/*') ? 'show' : '' }}" id="rentals-Submenu">
                                <li>
                                    <a href="{{route('home.seadoo')}}">
                                        SeaDoo Rentals
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('home.boat')}}">
                                        Boat Rentals
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('home.segway')}}">
                                        Segway Rentals
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('home.spyder')}}">
                                        Spyder Rentals
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('home.snowmobile')}}">
                                        Snowmobile Rentals
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('home.kayak')}}">
                                        Kayak & Paddleboard Rentals
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('operation-info/*') ? 'active' : '' }}">
                            <a href="#operation-info-Submenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                Operation Info
                            </a>
                            <!-- Dropdown - User Information -->
                            <ul class="collapse list-unstyled right {{ Request::is('operation-info/*') ? 'show' : '' }}" id="operation-info-Submenu">
                                <li>
                                    <a href="{{route('home.about_us')}}">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('home.maps')}}">
                                        SK Rentals Maps & Hours
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ Request::is('customer-corner/*') ? 'active' : '' }}">
                            <a href="#customer-corner-Submenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                Customer Corner
                            </a>
                            <!-- Dropdown - User Information -->
                            <ul class="collapse list-unstyled right {{ Request::is('customer-corner/*') ? 'show' : '' }}" id="customer-corner-Submenu">
                                <li>
                                    <a href="{{route('home.gallery')}}">
                                        Photo Gallery
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('home.survey')}}">
                                        Customer Survey
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('home.testimonials')}}">
                                        Testimonials
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('home.know')}}" class="">
                                        Know Before You Go
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item smaller mt-1">
                            <a class="nav-link" href="{{route('home.contact')}}">Contact</a>
                        </li>
                        @if(Auth::check())
                            <li>
                                <hr>
                                <h4 class="underline text-center"><b>Staff Menu</b></h4>
                            </li>

                        @endif
                        @if(Auth::check())
                            @else
                            <li class="">
                                <a  href="#loginSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                    Login
                                </a>
                                <!-- Dropdown - User Information -->
                                <ul class="collapse list-unstyled right" id="loginSubmenu1">
                                    <li>
                                        <form class="visible-xs visible-sm" method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div class="row mb-3">
                                                <label for="email" class="col-form-label text-md-end">{{ __('Email Address') }}</label>

                                                <div class="col-12">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>

                                                <div class="col-12">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3" style="display: none !important;">
                                                <div class="col-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                        <label class="form-check-label" for="remember">
                                                            {{ __('Remember Me') }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-0">
                                                <div class="col-12">

                                                    <button type="submit" class="btn btn-primary width-100">
                                                        {{ __('Login') }}
                                                    </button>
                                                    @if (Route::has('password.request'))
                                                        {{--                            <a class="btn btn-link text-right width-100 text-gray-300" href="{{ route('password.request') }}">--}}
                                                        <a class="btn btn-link text-right width-100 text-gray-300" href="mailto:liam.skrentals@gmail.com">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        <div class="row">
            <div class="col-12">
                @if(Auth::check())
                    <ul class="list-unstyled components">
                        @if(auth()->user()->userHasRole('Admin'))
                            <li class="nav-item smaller mt-1">
                                <a class="nav-link" href="{{route('admin.index')}}">Admin Dashboard</a>
                            </li>
                        @endif
                        @if(!auth()->user()->userHasRole('Service') && !auth()->user()->userHasRole('Zapier'))
                            <li class="">
                                <a class="" href="{{route('team.index')}}">Team Dashboard</a>
                            </li>
                        @endif
                        @if(auth()->user()->userHasRole('Office'))
                            <li class="{{ Request::is('team/office*') ? 'active' : '' }}">
                                <a href="#officeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                    Office
                                </a>
                                <!-- Dropdown - User Information -->
                                <ul class="collapse list-unstyled right" id="officeSubmenu">
                                    <li>
                                        <a class="" href="{{route('office.index')}}">
                                            Schedule
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="{{route('office.precheckin')}}">
                                            Pre-Check In
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="{{route('office.rentalHistory')}}">
                                            Rental History
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="{{route('office.customers')}}">
                                            Customers
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="{{route('office.coc')}}">
                                            Change of Condition
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        @if(auth()->user()->userHasRole('Dock'))
                            <li class="">
                                <a  href="#dockSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                    Dock
                                </a>
                                <!-- Dropdown - User Information -->
                                <ul class="collapse list-unstyled right" id="dockSubmenu">
                                    <li>
                                        <a class="" href="{{route('dock.departing')}}">
                                            Departing
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="{{route('dock.returning')}}">
                                            Returning
                                        </a>
                                    </li>
                                    <li>
                                        <a class="" href="#" data-toggle="modal" data-target="#office_precheck">
                                            Office Pre-Check
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{route('dock.hourCounts')}}">
                                            Hour Counts
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        @if(!auth()->user()->userHasRole('Service'))
                            <li class="nav-item smaller mt-1 {{ Request::is('team/runnerview/index*') ? 'active' : '' }}">
                                <a class="nav-link" href="{{route('runnerview.index')}}">Master View</a>
                            </li>
                        @endif
                        <li>
                            <!-- Nav Item - User Information -->
                            <div class="row mt-5">
                                <div class="col-12">
                                    <a href="#userSubmenu" data-toggle="collapse" aria-expanded="false" class="text-center width-100">
                                        <h4 class="text-center width-100">
                                            <i class="fa fa-user"></i>
                                            <br>
                                            @if(Auth::check())
                                                {{auth()->user()->firstname}}
                                            @endif
                                        </h4>
                                    </a>
                                </div>
                            </div>
                            <ul class="collapse list-unstyled right" id="userSubmenu">
                                <li>
                                    @if(!auth()->user()->userHasRole('Service'))
                                        <a class="text-center" href="{{route('team.profile', auth()->user()->id)}}">
                                            Profile
                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        </a>
                                    @endif
                                </li>
                                <li>
                                    <a class="text-center" href="#" data-toggle="modal" data-target="#logoutModal">
                                        Logout
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>





                        {{--                <li class="active">--}}
                        {{--                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>--}}
                        {{--                    <ul class="collapse list-unstyled" id="homeSubmenu">--}}
                        {{--                        <li>--}}
                        {{--                            <a href="#">Home 1</a>--}}
                        {{--                        </li>--}}
                        {{--                        <li>--}}
                        {{--                            <a href="#">Home 2</a>--}}
                        {{--                        </li>--}}
                        {{--                        <li>--}}
                        {{--                            <a href="#">Home 3</a>--}}
                        {{--                        </li>--}}
                        {{--                    </ul>--}}
                        {{--                </li>--}}
                        {{--            end Auth::check()--}}
                    </ul>

                @else
                    <form class="hidden-xs hidden-sm" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3" style="display: none !important;">
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-12">

                                <button type="submit" class="btn btn-primary width-100">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    {{--                            <a class="btn btn-link text-right width-100 text-gray-300" href="{{ route('password.request') }}">--}}
                                    <a class="btn btn-link text-right width-100 text-gray-300" href="mailto:liam.skrentals@gmail.com">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>

                @endif
            </div>
        </div>
    </nav>

</div>
