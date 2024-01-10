<li class="nav-item {{ Request::is('admin/index*') ? 'active' : '' }}">
    <a class="nav-link" href="{{route('admin.index')}}">
        <i class="fas fa-fw fa-tachometer-alt sm-lg">
        </i>
        <span class="hidden-xs-contents">Admin Dashboard</span>
        <span class="visible-xs">Dashboard</span>
    </a>
</li>
