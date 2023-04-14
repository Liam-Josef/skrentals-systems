<x-admin-master>



        @foreach($applications as $application)

            @section('page_title')
                <h1>Update Employee - {{$user->firstname}} {{$user->lastname}}</h1>
            @endsection

            @section('browser_title')
                <title>Update Employee - {{$user->firstname}} {{$user->lastname}} | {{$application->name}}</title>
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
                <div class="row"></div>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <!-- Main Info -->
                <form method="post" action="{{route('user.profile.update', $user)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <img class="img-profile rounded-circle" src="{{$user->avatar}}" width="100px" height="100px">
                    </div>
                    <div class="form-group">
                        <input type="file" name="avatar" />
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="" aria-describedby="" placeholder="" value="{{$user->username}}" />
                        @error('username')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" id="" aria-describedby="" placeholder="" value="{{$user->firstname}}" />
                        @error('firstname')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" id="" aria-describedby="" placeholder="" value="{{$user->lastname}}" />
                        @error('lastname')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="" aria-describedby="" placeholder="" value="{{$user->email}}" />
                        @error('email')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" value="{{$user->phone}}" />
                        @error('phone')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" />
                        @error('password')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password-confirmation">Confirm Password</label>
                        <input type="password-confirmation" class="form-control @error('password-confirmation') is-invalid @enderror" name="password-confirmation" id="password-confirmation" />
                        @error('password-confirmation')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                <!-- User Roles -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 text-center">
                                <h6 class="m-0 font-weight-bold text-white font-left">
                                    <span style="color:transparent">SK</span>
                                    Select Employee's Role
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="usersTable" width="100%" cellspacing="0">
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


    @endsection


</x-admin-master>
