<x-admin-master>

    @section('styles')

    @endsection


        @foreach($applications as $application)

        @section('page_title')
            <h1>Roles</h1>
        @endsection

        @section('browser_title')
            <title>Roles | {{$application->name}}</title>
        @endsection

        @section('logo-square')
            <img src="{{asset('storage/'. $application->logo_square_1)}}" alt="{{$application->name}} Logo" height="30px" width="auto">
        @endsection

        @section('logo-horizontal')
            <img src="{{asset('storage/'. $application->logo_horizontal_1)}}" alt="{{$application->name}} Logo" height="30px" width="auto">
        @endsection

        @section('logo_horizontal_1')
            {{asset('storage/'. $application->logo_horizontal_1)}}
        @endsection
        @section('logo_horizontal_2')
            {{asset('storage/'. $application->logo_horizontal_2)}}
        @endsection
        @section('logo_square_1')
            {{asset('storage/'. $application->logo_square_1)}}
        @endsection
        @section('logo_square_2')
            {{asset('storage/'. $application->logo_square_2)}}
        @endsection
        @section('favicon')
            {{asset('storage/'. $application->favicon)}}
        @endsection

        @section('analytic_links')
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/index*') ? 'collapsed' : '' }}" href="#" data-toggle="collapse" data-target="#collapseAnalytics" aria-expanded="" aria-controls="collapseAnalytics">
                    <i class="fas fa-fw fa-solid fa-code-branch"></i>
                    <span>Analytics</span>
                </a>
                <div id="collapseAnalytics" class="collapse" aria-labelledby="headingAnalytics" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <h6 class="collapse-header">Google Analytics: </h6>
                        @if($application->analytic_link_1 != '')
                            <a class="collapse-item" href="{{$application->analytic_link_1}}" target="_blank">Analytics <span class="text-primary">Main</span></a>
                        @endif
                        @if($application->analytic_link_2 != '')
                            <a class="collapse-item" href="{{$application->analytic_link_2}}" target="_blank"><span class="text-primary">Reports</span> Snapshot</a>
                        @endif
                        @if($application->analytic_link_3 != '')
                            <a class="collapse-item" href="{{$application->analytic_link_3}}" target="_blank"><span class="text-primary">Acquisition</span> Overview</a>
                        @endif
                        @if($application->analytic_link_4 != '')
                            <a class="collapse-item" href="{{$application->analytic_link_4}}" target="_blank"><span class="text-primary">Engagement</span> Overview</a>
                        @endif
                        @if($application->analytic_link_5 != '')
                            <a class="collapse-item" href="{{$application->analytic_link_5}}" target="_blank"><span class="text-primary">Demographics</span> Overview</a>
                        @endif
                    </div>
                </div>
            </li>
        @endsection

        @endforeach


    @section('content')
            <div class="row">
                <div class="col-12">
                    <h1>Roles</h1>
                </div>
            </div>

        <div class="row">
            <div class="col-sm-3">
                <form method="post" action="{{route('roles.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror " />
                        <div>
                            @error('name')
                                <span><strong>{{$message}}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Role</button>
                </form>
            </div>
            <div class="col-sm-9">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 text-center">
                        <h6 class="m-0 font-weight-bold text-white">
                            <span style="color:transparent">SK</span>
                            @if(session()->has('role-deleted'))
                                {{session('role-deleted')}}
                            @endif
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="rolessTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>



                                @foreach($roles as $role)
                                    <tr>
                                       <td>{{$role->id}}</td>
                                       <td>{{$role->name}}</td>
                                       <td>{{$role->slug}}</td>
                                        <td>
                                            <form method="post" action="{{route('roles.edit', $role->id)}}">
                                                @csrf
                                                @method('GET')

                                                <button type="submit" class="btn btn-danger">View / Edit</button>
                                            </form>
                                        </td>
                                       <td>
                                           <form method="post" action="{{route('roles.delete', $role->id)}}">
                                               @csrf
                                               @method('DELETE')

                                               <button type="submit" class="btn btn-danger">Delete</button>
                                           </form>
                                       </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('scripts')

    @endsection

</x-admin-master>
