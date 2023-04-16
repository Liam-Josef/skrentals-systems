<x-admin-master>

    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection


        @foreach($applications as $application)

        @section('page_title')
            <h1>Employees</h1>
        @endsection

        @section('browser_title')
            <title>Employees | {{$application->name}}</title>
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
                    <h1>Employees</h1>
                </div>
            </div>

            <!-- Employees Table -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="usersTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th class="hidden-xs-table"></th>
                                <th>First</th>
                                <th>Last</th>
                                <th class="hidden-xs-table">Phone</th>
                                <th class="hidden-xs-table">Email</th>
                                <th class="hidden-xs-table">Role</th>
                                <th class="no-border-right">&nbsp;</th>
                                <th class="no-border-right">&nbsp;</th>
                                <th class="hidden-xs-table">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($users as $user)
                                <tr>
                                    <td class="rounded-image no-border-right hidden-xs-table"><img class="responsive rounded-circle" height="50px" width="50px" src="{{$user->avatar}}" alt="{{$user->firstname}}" /></td>
                                    <td class="name no-border-right pt-4">{{$user->firstname}}</td>
                                    <td class="name no-border-right pt-4">{{$user->lastname}}</td>
                                    <td class="no-border-right pt-4 hidden-xs-table">{{$user->phone}}</td>
                                    <td class="no-border-right pt-4 hidden-xs-table">{{$user->email}}</td>
                                    <td class="no-border-right pt-4 hidden-xs-table">
                                        @foreach($user->roles as $user_role)
                                           @if($user_role->name == 'Dev')

                                            @else
                                                {{$user_role->name}} &nbsp;
                                            @endif
                                        @endforeach
                                    </td>
                                    <td class="no-border-right pt-7"><a href="{{route('user.profile.show', $user->id)}}" class="btn btn-primary-red width-100">View</a></td>
                                    <td class="no-border-right pt-7"><a href="#" class="btn btn-secondary width-100" data-toggle="modal" data-target="#editEmployee{{$user->id}}">Edit</a></td>
                                    <td class="pt-7 hidden-xs-table">
                                        <form action="{{route('user.disable', $user->id)}}" method="post"
                                              @if($user->is_active == '0')
                                              hidden
                                            @endif
                                              @if($user->id == '2' or $user->id == '1')
                                              hidden
                                            @endif
                                        >
                                            @csrf
                                            @method('PUT')
                                            <button class="btn btn-primary width-100">Disable</button>
                                        </form>
                                        <form action="{{route('user.enable', $user->id)}}" method="post"
                                              @if($user->is_active == '1')
                                              hidden
                                            @endif
                                        >
                                            @csrf
                                            @method('PUT')
                                            <button class="btn btn-primary width-100">Enable</button>
                                        </form>
                                        <form action="{{route('user.destroy', $user->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger hidden">Delete</button>
                                        </form>
                                    </td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        @foreach($users as $user)
                <div class="modal fade" id="editEmployee{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 id="modal_rental_title" class="modal-title"><span>Edit: </span>{{$user->firstname}} {{$user->lastname}}</h3>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <!-- Main Info -->
                                <div class="row">
                                    <!-- Update Password -->
                                    <div class="row mt-5">
                                        <div class="col-12">
                                            <h5 class="mb-3">Employee Information</h5>
                                        </div>
                                    </div>
                                    <form method="post" action="{{route('user.profile.update', $user)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="username">Username</label>
                                                    <input type="text" class="form-control format @error('username') is-invalid @enderror" name="username" id="" aria-describedby="" placeholder="" value="{{$user->username}}" />
                                                    @error('username')
                                                    <div class="invalid-feedback">{{$message}}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="firstname">First Name</label>
                                                    <input type="text" class="form-control format @error('firstname') is-invalid @enderror" name="firstname" id="" aria-describedby="" placeholder="" value="{{$user->firstname}}" />
                                                    @error('firstname')
                                                    <div class="invalid-feedback">{{$message}}</div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="lastname">Last Name</label>
                                                    <input type="text" class="form-control format @error('lastname') is-invalid @enderror" name="lastname" id="" aria-describedby="" placeholder="" value="{{$user->lastname}}" />
                                                    @error('lastname')
                                                    <div class="invalid-feedback">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="format-div">
                                                    <div class="mb-4">
                                                        <img class="img-profile" src="{{$user->avatar}}" width="100%" height="auto">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="file" name="avatar" class="form-control-file" />
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-6 col-sm-4">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="text" class="form-control format @error('email') is-invalid @enderror" name="email" id="" aria-describedby="" placeholder="" value="{{$user->email}}" />
                                                    @error('email')
                                                    <div class="invalid-feedback">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6 col-sm-4">
                                                <div class="form-group">
                                                    <label for="phone">Phone</label>
                                                    <input type="text" class="form-control format @error('phone') is-invalid @enderror" name="phone" id="phone" value="{{$user->phone}}" />
                                                    @error('phone')
                                                    <div class="invalid-feedback">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                               <div class="form-group">
                                                   <label for="">&nbsp;</label>
                                                   <button type="submit" class="btn btn-primary width-100">Update Info</button>
                                               </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>

                                <hr class="light" />

                                <!-- Update Password -->
                                <div class="row mt-5">
                                    <h5>Update Password</h5>
                                </div>

                                <form action="{{route('team.updatePassword', $user->id)}}" method="post" class="mt-3">
                                    @csrf
                                    @method('PUT')

                                    <div class="row">

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" name="password" >
                                                @error('password')
                                                <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="password-confirm">Confirm Password</label>
                                                <input type="password" name="password_confirmation" id="password-confirm" class="form-control @error('password-confirm') is-invalid @enderror">
                                                @error('password-confirm')
                                                <div class="invalid-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="">&nbsp;</label>
                                                <button class="btn btn-primary width-100" type="submit">Update Password</button>
                                            </div>
                                        </div>

                                    </div>

                                </form>
                                <!-- /Update Password -->

                                <hr class="light" />

                                <!-- User Roles -->
                                <div class="row mt-3 mb-5
                                    @if($user->is_active == '0')
                                        hidden
                                    @endif
                                    ">
                                    <!-- Update Password -->
                                    <div class="row">
                                        <div class="col-12">
                                            <h5>Employee Roles</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-3">
                                        <div class="card card-dark shadow mb-4">
                                            <div class="card-header py-3 text-center">
                                                <h6 class="m-0 font-weight-bold text-white font-left">
                                                    <span style="color:transparent">SK</span>
                                                    Select Employee's Role(s)
                                                </h6>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered" id="empRole" width="100%" cellspacing="0">
                                                        <thead>
                                                        <tr>
                                                            <th>Attach Role</th>
                                                            <th>Name</th>
                                                            <th>Atach</th>
                                                            <th>Detach</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($roles as $role)
                                                            <tr>
                                                                <td><input type="checkbox" disabled
                                                                           @foreach($user->roles as $user_role)
                                                                           @if($user_role->slug == $role->slug)
                                                                           checked
                                                                        @endif
                                                                        @endforeach

                                                                    ></td>
                                                                <td>{{$role->name}}</td>
                                                                <td>
                                                                    <form method="post" action="{{route('user.role.attach', $user)}}">
                                                                        @method('PUT')
                                                                        @csrf
                                                                        <input type="hidden" name="role" value="{{$role->id}}">

                                                                        <button class="btn btn-primary"
                                                                                @if($user->roles->contains($role))
                                                                                disabled
                                                                            @endif
                                                                        >Attach</button>
                                                                    </form>
                                                                </td>
                                                                <td>
                                                                    <form method="post" action="{{route('user.role.detach', $user)}}">
                                                                        @method('PUT')
                                                                        @csrf
                                                                        <input type="hidden" name="role" value="{{$role->id}}">

                                                                        <button class="btn btn-secondary"
                                                                                @if(!$user->roles->contains($role))
                                                                                disabled
                                                                            @endif
                                                                        >detach</button>
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


                            </div>

                        </div>
                    </div>
                </div>
        @endforeach
    @endsection


        <!--Edit Employee Modal -->
{{--        @foreach($users as $user)--}}
{{--           --}}

{{--        @endforeach--}}
            <!-- /Edit Employee Modal -->


        @section('scripts')
        <!-- Page level plugins -->
            <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

            <!-- Page level custom scripts -->
            <script src="{{asset('js/demo/datatables-scripts.js')}}"></script>
        @endsection

</x-admin-master>
