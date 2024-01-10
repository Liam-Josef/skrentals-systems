
<!-- Website -->
@if(auth()->user()->userHasRole('Dev'))

    <hr class="sidebar-divider hidden-xs">

    <!-- Heading -->
    <div class="sidebar-heading hidden-xs">
        Website
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item {{ Request::is('admin/dev*') ? 'active' : '' }}">
        <a class="nav-link {{ Request::is(['admin/index*', 'admin/employee*', 'admin/rentals*', 'admin/posts*', 'admin/maintenance*', 'admin/coc*', 'admin/customers*', 'admin/training*', 'admin/vehicles*', 'admin/roles*']) ? 'collapsed' : '' }}" href="#" data-toggle="collapse" data-target="#collapseApp" aria-expanded="true" aria-controls="collapseApph">
            {{--            <i class="fas fa-fw fa-wrench"></i>--}}
            <i class="fa-solid fa-people-group"></i>
            <span class="hidden-xs-contents">App</span>
            <span class="visible-xs">App</span>
        </a>
        <div id="collapseApp" class="collapse {{ Request::is('admin/dev*') ? 'show' : '' }}" aria-labelledby="headingApp" data-parent="#accordionSidebar">
            <div class="py-2 collapse-inner rounded">
                <h6 class="collapse-header">Website Menu:</h6>
                <a class="collapse-item {{ Request::is('admin/dev/app-info*') ? 'active' : '' }}" href="{{route('admin.dev.siteInfo')}}">App Info</a>
                <h6 class="collapse-header mt-2">Authorizations Menu:</h6>
                <a class="collapse-item {{ Request::is(['admin/dev/index*', 'roles/edit*']) ? 'active' : '' }}" href="{{route('roles.index')}}">Roles</a>
                <a class="collapse-item {{ Request::is('admin/dev/permissions*') ? 'active' : '' }}" href="{{route('roles.permissions')}}">Permissions</a>
            </div>
        </div>
    </li>

@endif
