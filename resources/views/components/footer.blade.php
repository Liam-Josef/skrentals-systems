<footer class="py-5 bg-dark">
    <div class="container">
{{--        <img src="@yield('logo-square-2')" alt="" class="img-responsive img-square" />--}}
        <p class="m-0 text-center text-white"><span>@yield('app_name')</span> | Copyright &copy; {{Carbon\Carbon::now()->format('Y')}}</p>
    </div>
</footer>



<div class="mobile-nav visible-sm">
    <div class="container">
        <div class="row text-center">
            <div class="col-2 pl-0 pr-0 b-l b-r">
               <a href="{{route('team.index')}}" class="fa-button {{ Request::is('/*') ? 'active' : '' }}">
                   <i class="fa fa-tachometer-alt fa-1x"></i>
                   <span>Dash</span>
               </a>
            </div>
            @if(auth()->user()->userHasRole('Office'))
                <div class="col-2 pl-0 pr-0 b-r">
                    <a href="{{route('office.index')}}" class="fa-button {{ Request::is('team/office/index*') ? 'active' : '' }}">
                        <i class="fa fa-paperclip fa-1x"></i>
                        <span>Office</span>
                    </a>
                </div>
            @endif
            @if(auth()->user()->userHasRole('Dock'))
                <div class="col-2 pl-0 pr-0 b-r">
                    <a href="{{route('dock.departing')}}" class="fa-button {{ Request::is('team/dock/*') ? 'active' : '' }}">
                        <i class="fa fa-anchor fa-1x"></i>
                        <span>Dock</span>
                    </a>
                </div>
            @endif
            <div class="col-2 pl-0 pr-0 b-r">
                <a href="{{route('runnerview.index')}}" class="fa-button {{ Request::is('team/runnerview/index*') ? 'active' : '' }}">
                    <i class="fa fa-clipboard fa-1x"></i>
                    <span>Run</span>
                </a>
            </div>
            @if(auth()->user()->userHasRole('Admin'))
                <div class="col-2 pl-0 pr-0 b-r">
                    <a href="{{route('admin.index')}}" class="fa-button {{ Request::is('admin/index*') ? 'active' : '' }}">
                        <i class="fa fa-user-secret fa-1x"></i>
                        <span>Admin</span>
                    </a>
                </div>
            @endif
            <div class="col-2 pl-0 pr-0 b-r">
                <a href="{{route('team.profile', auth()->user()->id)}}" class="fa-button {{ Request::is('team/'. auth()->user()->id . '/profile') ? 'active' : '' }}">
                    <i class="fa fa-user fa-1x"></i>
                    <span>User</span>
                </a>
            </div>
        </div>
    </div>
</div>
