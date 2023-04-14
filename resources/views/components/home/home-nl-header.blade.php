<nav class="navbar navbar-expand-lg navbar-dark bg-gradient-secondary fixed-top team-header">
    <div class="container">
        <a class="navbar-brand" href="{{route('home.index')}}"><img src="@yield('logo-horizontal-2')" alt="RentalGuru Logo" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item smaller {{ Request::is('/*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('home.index')}}">Main</a>
                </li>
                <li class="nav-item smaller {{ Request::is('book-now*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('home.book_now')}}">Book Now</a>
                </li>
                <li class="nav-item smaller {{ Request::is('our-fleet*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('home.our_rentals')}}">@yield('navbar_rental_type')</a>
                </li>
                <li class="nav-item smaller {{ Request::is('about-us*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('home.about_us')}}">About Us</a>
                </li>
                <li class="nav-item smaller {{ Request::is('contact-us*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('home.contact')}}">Contact</a>
                </li>
{{--                @if(Auth::check())--}}
{{--                    <li class="nav-item smaller">--}}
{{--                        <a class="nav-link" href="{{route('team.index')}}">Team Portal</a>--}}
{{--                    </li>--}}
{{--                @endif--}}
{{--                @if(auth()->user()->userHasRole('Admin', 'Office Dock 1'))--}}
{{--                    <li class="nav-item smaller">--}}
{{--                        <a class="nav-link" href="{{route('admin.index')}}">Admin</a>--}}
{{--                    </li>--}}
{{--                @endif--}}


                <!-- Nav Item - User Information -->
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
            </ul>
        </div>
    </div>
</nav>
