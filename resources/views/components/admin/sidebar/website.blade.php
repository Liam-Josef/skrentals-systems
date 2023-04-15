



<!-- Website -->
@if(auth()->user()->userHasRole('Dev'))

    <hr class="sidebar-divider hidden-xs">

    <!-- Heading -->
    <div class="sidebar-heading hidden-xs">
        Website
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item {{ Request::is('admin/app*') ? 'active' : '' }}">
        <a class="nav-link {{ Request::is(['admin/index*', 'admin/employee*', 'admin/rentals*', 'admin/posts*', 'admin/maintenance*', 'admin/coc*', 'admin/customers*', 'admin/training*', 'admin/vehicles*', 'admin/roles*']) ? 'collapsed' : '' }}" href="#" data-toggle="collapse" data-target="#collapseAuth" aria-expanded="true" aria-controls="collapseAuth">
            {{--            <i class="fas fa-fw fa-wrench"></i>--}}
            <i class="fa-solid fa-people-group"></i>
            <span class="hidden-xs-contents">Website</span>
            <span class="visible-xs">App</span>
        </a>
        <div id="collapseAuth" class="collapse {{ Request::is('admin/app*') ? 'show' : '' }}" aria-labelledby="headingAuth" data-parent="#accordionSidebar">
            <div class="py-2 collapse-inner rounded">
                <h6 class="collapse-header">Website Menu:</h6>
{{--                <a class="collapse-item {{ Request::is('admin/app/info*') ? 'active' : '' }}" href="{{route('application.info')}}">App Info</a>--}}
                <a class="collapse-item {{ Request::is('admin/roles/permissions*') ? 'active' : '' }}" href="{{route('roles.permissions')}}">Permissions</a>
            </div>
        </div>
    </li>
@endif
