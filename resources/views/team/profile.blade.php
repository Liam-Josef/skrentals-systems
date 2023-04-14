<x-team-master>

    @foreach($applications as $application)

        @section('app_name')
            {{$application->name}}
        @endsection

        @section('favicon')
            {{asset('storage/'. $application->favicon)}}
        @endsection

        @section('logo-square-1')
            {{asset('storage/'. $application->logo_square_1)}}
        @endsection

        @section('logo-square-2')
            {{asset('storage/'. $application->logo_square_2)}}
        @endsection

        @section('logo-horizontal-1')
            {{asset('storage/'. $application->logo_horizontal_1)}}
        @endsection

        @section('logo-horizontal-2')
            {{asset('storage/'. $application->logo_horizontal_1)}}
        @endsection

        @section('navbar-operations')
            @if($application->operations_name == '')
                Operations
            @else
                {{$application->operations_name}}
            @endif
        @endsection

    @endforeach


    @section('browser_title')
        <title>{{$user->firstname}} {{$user->lastname}} | SK Watercraft Rentals</title>
    @endsection


    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection

    @section('page_title')
        <div class="row">
            <div class="col-sm-12">
                <h1><span>Employee Profile:</span> {{$user->firstname}} {{$user->lastname}} <small>({{$user->username}})</small></h1>
            </div>
        </div>
    @endsection

    @section('content-right')

        <div class="card format shadow mt-4 mb-4">
            <div class="card-header">
                <h3>Employee Information</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-4">
                                <h4 class="lighter-title">Phone</h4>
                            </div>
                            <div class="col-8">
                                <h4 class="lighter">
                                    {{$user->phone}}
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-3">
                                <h4 class="lighter-title">Email</h4>
                            </div>
                            <div class="col-8">
                                <h4 class="lighter">
                                    {{$user->email}}
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card format shadow mb-4">
            <div class="card-header">
                <h3>Update Information</h3>
            </div>
            <div class="card-body">
                <form action="{{route('team.updateUser', $user->id)}}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="row">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" name="firstname" class="form-control" value="{{$user->firstname}}" disabled>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" name="lastname" class="form-control" value="{{$user->lastname}}" disabled>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{$user->phone}}">
                                @error('phone')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$user->email}}">
                                @error('email')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">Update Info</button>
                    </div>


                </form>
            </div>
        </div>

        <div class="card format shadow mb-4">
                <div class="card-header">
                    <h3>Change Password &nbsp; &nbsp;
                    <span class="m-0 font-weight-bold text-white text-right">
                        <small>
                            @if(session('password-updated'))
                                {{session('password-updated')}}
                            @endif
                        </small>
                    </span>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{route('team.updatePassword', $user->id)}}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="row">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" name="password" >
                                    @error('password')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="password-confirm">Confirm Password</label>
                                    <input type="password" name="password_confirmation" id="password-confirm" class="form-control @error('password-confirm') is-invalid @enderror">
                                    @error('password-confirm')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">Update Password</button>
                        </div>


                    </form>
                </div>
            </div>

        <div class="card format mb-4 visible-sm">
            <div class="modal-footer">
                <div class="row">
                    <div class="col-12">
                        <form action="/logout" method="post">
                            @csrf
                            <button class="btn btn-primary-red">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>



    @endsection

    @section('sidebar')

        <div class="card format shadow card-dark text-center mb-4">
            <div class="card-header">
                <h3>Rentals Checked In</h3>
            </div>
            <div class="card-body">
                @if($rentalCheckedIn)
                    <h1 class="text-white">{{$rentalCheckedIn}}</h1>
                @else
                    <h1 class="text-white">0</h1>
                @endif
            </div>
        </div>

        <div class="card format shadow card-dark text-center mb-4">
            <div class="card-header">
                <h3>Rentals Launched</h3>
            </div>
            <div class="card-body">
                @if($rentalLaunched)
                    <h1 class="text-white">{{$rentalLaunched}}</h1>
                @else
                    <h1 class="text-white">0</h1>
                @endif
            </div>
        </div>

        <div class="card format shadow card-dark text-center mb-4">
            <div class="card-header">
                <h3>Rentals Cleared</h3>
            </div>
            <div class="card-body">
                @if($rentalCleared)
                    <h1 class="text-white">{{$rentalCleared}}</h1>
                @else
                    <h1 class="text-white">0</h1>
                @endif
            </div>
        </div>

    @endsection
</x-team-master>
