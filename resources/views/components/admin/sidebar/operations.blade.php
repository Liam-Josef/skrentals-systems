<!-- Heading -->
<div class="sidebar-heading hidden-xs">
    Operations
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item {{ Request::is('admin/rentals*') ? 'active' : '' }}">
    <a class="nav-link {{ Request::is(['admin/index*', 'admin/roles*', 'admin/maintenance*', 'admin/users*', 'admin/posts*', 'admin/coc*', 'admin/customers*', 'admin/training*', 'admin/vehicles*', 'admin/dev*']) ? 'collapsed' : '' }}" href="#" data-toggle="collapse" data-target="#collapseRentals" aria-expanded="true" aria-controls="collapseRentals">
        <i class="fa-solid fa-ship"></i>
        <span>Rentals</span>
    </a>
    <div id="collapseRentals" class="collapse {{ Request::is('admin/rentals*') ? 'show' : '' }}" aria-labelledby="headingRentals" data-parent="#accordionSidebar">
        <div class="py-2 collapse-inner rounded">
            <h6 class="collapse-header">Rentals Menu:</h6>
            <a class="inactive collapse-item {{ Request::is('admin/rentals/index*') ? 'active' : '' }}" href="{{route('rental.index')}}">Rentals Main</a>
            <a class="collapse-item {{ Request::is('admin/rentals/rentals-today*') ? 'active' : '' }}" href="{{route('rental.today')}}">Rentals Today</a>
            <a class="collapse-item {{ Request::is('admin/rentals/rental-history*') ? 'active' : '' }}" href="{{route('rental.history')}}">Rental History</a>
            <a class="collapse-item {{ Request::is('admin/rentals/rental-settings*') ? 'active' : '' }}" href="{{route('rental.settings')}}">Rental Settings</a>
        </div>
    </div>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item {{ Request::is('admin/customers*') ? 'active' : '' }}">
    <a class="nav-link {{ Request::is(['admin/index*', 'admin/roles*', 'admin/maintenance*', 'admin/users*', 'admin/posts*', 'admin/rentals*', 'admin/coc*', 'admin/training*', 'admin/vehicles*', 'admin/dev*']) ? 'collapsed' : '' }}" href="#" data-toggle="collapse" data-target="#collapseCustomers" aria-expanded="true" aria-controls="collapseCustomers">
        <i class="fa-solid fa-robot"></i>
        <span>Customers</span>
    </a>
    <div id="collapseCustomers" class="collapse {{ Request::is('admin/customers*') ? 'show' : '' }}" aria-labelledby="headingCustomers" data-parent="#accordionSidebar">
        <div class="py-2 collapse-inner rounded">
            <h6 class="collapse-header">Customer Menu:</h6>
            <a class="inactive collapse-item {{ Request::is('admin/customers/index*') ? 'active' : '' }}" href="{{route('customers.index')}}">Customers Main</a>
            <a class="collapse-item {{ Request::is('admin/customers/show*') ? 'active' : '' }}" href="{{route('customers.show')}}">View Customers</a>
            <a class="collapse-item" href="#" data-toggle="modal" data-target="#addCustomer">Add Customer</a>
            <a class="inactive collapse-item {{ Request::is('admin/customers/coc*') ? 'active' : '' }}" href="{{route('customers.coc')}}">COC Customers</a>
        </div>
    </div>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item {{ Request::is('admin/coc*') ? 'active' : '' }}">
    <a class="nav-link visible-sm {{ Request::is(['admin/index*', 'admin/roles*', 'admin/maintenance*', 'admin/users*', 'admin/posts*', 'admin/rentals*', 'admin/customers*', 'admin/training*', 'admin/vehicles*', 'admin/dev*']) ? 'collapsed' : '' }}" href="#" data-toggle="collapse" data-target="#collapseCOC" aria-expanded="true" aria-controls="collapseCOC">
        <i class="fa-solid fa-person-drowning"></i>
        <span>COC</span>
    </a>
    <a class="nav-link visible-md {{ Request::is(['admin/index*', 'admin/roles*', 'admin/maintenance*', 'admin/users*', 'admin/posts*', 'admin/rentals*', 'admin/customers*', 'admin/training*', 'admin/vehicles*', 'admin/dev*']) ? 'collapsed' : '' }}" href="#" data-toggle="collapse" data-target="#collapseCOC" aria-expanded="true" aria-controls="collapseCOC">
        <i class="fa-solid fa-person-drowning"></i>
        <span>C<span>hange</span> O<span>f</span> C<span>onditions</span></span>
    </a>
    <div id="collapseCOC" class="collapse {{ Request::is('admin/coc*') ? 'show' : '' }}" aria-labelledby="headingCOC" data-parent="#accordionSidebar">
        <div class="py-2 collapse-inner rounded">
            <h6 class="collapse-header">COC Menu:</h6>
            <a class="collapse-item {{ Request::is('admin/coc/index*') ? 'active' : '' }}" href="{{route('coc.index')}}">COC Stats</a>
            <a class="collapse-item {{ Request::is('admin/coc/current*') ? 'active' : '' }}" href="{{route('coc.current')}}">Current COC's</a>
            {{--                <a class="inactive collapse-item {{ Request::is('admin/coc/create*') ? 'active' : '' }}" href="{{route('coc.create')}}">Add COC</a>--}}
            <a class="collapse-item {{ Request::is('admin/coc/history*') ? 'active' : '' }}" href="{{route('coc.history')}}">COC History</a>
            {{--                <a class="inactive collapse-item {{ Request::is('admin/coc/customers*') ? 'active' : '' }}" href="{{route('coc.customers')}}">COC Customers</a>--}}
        </div>
    </div>
</li>
