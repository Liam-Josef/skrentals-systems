<x-admin-master>



        @foreach($applications as $application)

            @section('page_title')
                <h1>Edit Role - {{$role->name}}</h1>
            @endsection

            @section('browser_title')
                <title>Edit Role - {{$role->name}} | {{$application->name}}</title>
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
                    <h1>Edit Role: {{$role->name}}</h1>
                </div>
            </div>


       <div class="row">
           <div class="col-sm-6">
               @if(session()->has('role-updated'))
                   <div class="alert alert-danger">
                       {{session('role-updated')}}
                   </div>

               @endif
               <form method="post" action="{{route('roles.update', $role->id)}}">
                   @csrf
                   @method('PUT')
                   <div class="form-group">
                       <label for="name">Name</label>
                       <input type="text" value="{{$role->name}}" id="name" name="name" class="form-control" />
                   </div>
                   <div class="form-group">
                       <label for="slug">Slug</label>
                       <input type="text" value="{{$role->slug}}" id="slug" name="slug" class="form-control" />
                   </div>
                   <button class="btn btn-primary">Update</button>
               </form>
           </div>
           <div class="col-sm-6">
              @if($permissions->isNotEmpty())
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
                               <table class="table table-bordered" id="roleEditTable" width="100%" cellspacing="0">
                                   <thead>
                                   <tr>
                                       <th>Options</th>
                                       <th>ID</th>
                                       <th>Name</th>
                                       <th>Slug</th>
                                       <th>Attach</th>
                                       <th>Detach</th>
                                       <th>Delete</th>
                                   </tr>
                                   </thead>
                                   <tbody>



                                   @foreach($permissions as $permission)
                                   <tr>
                                       <td><input type="checkbox" disabled
                                                  @foreach($role->permissions as $role_permission)
                                                  @if($role_permission->slug == $permission->slug)
                                                  checked
                                               @endif
                                               @endforeach

                                       ></td>
                                       <td>{{$permission->id}}</td>
                                       <td>{{$permission->name}}</td>
                                       <td>{{$permission->slug}}</td>
                                       <td>
                                           <form method="post" action="{{route('roles.permission.attach', $role)}}">
                                               @method('PUT')
                                               @csrf
                                               <input type="hidden" name="permission" value="{{$permission->id}}">

                                               <button class="btn btn-primary"
                                                       @if($role->permissions->contains($permission))
                                                       disabled
                                                   @endif
                                               >Attach</button>
                                           </form>
                                       </td>
                                       <td>
                                           <form method="post" action="{{route('roles.permission.detach', $role)}}">
                                               @method('PUT')
                                               @csrf
                                               <input type="hidden" name="permission" value="{{$permission->id}}">

                                               <button class="btn btn-primary"
                                                       @if(!$role->permissions->contains($permission))
                                                       disabled
                                                   @endif
                                               >Detach</button>
                                           </form>
                                       </td>
                                       <td><button class="btn btn-danger">Delete</button></td>
                                   </tr>
                                   @endforeach

                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
               @endif
           </div>
       </div>

    @endsection


</x-admin-master>
