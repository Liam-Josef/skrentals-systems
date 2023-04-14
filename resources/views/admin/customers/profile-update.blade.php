<x-admin-master>

    @section('styles')

    @endsection

        @foreach($applications as $application)

        @section('page_title')
            <h1>Update Customer: {{$customer->first_name}} {{$customer->last_name}} </h1>
        @endsection

        @section('browser_title')
            <title>Update Customer: {{$customer->first_name}} {{$customer->last_name}} | {{$application->name}}</title>
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
                <h1>Update Customer</h1>
            </div>
        </div>

        <form method="post" action="{{route('customers.profile.update', $customer)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" value="{{$customer->first_name}}" class="form-control @error('first_name') is-invalid @enderror" name="first_name">
                @error('first_name')
                <span>{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" value="{{$customer->last_name}}" class="form-control @error('last_name') is-invalid @enderror" name="last_name">
                @error('last_name')
                <span>{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" value="{{$customer->phone}}" class="form-control @error('phone') is-invalid @enderror" name="phone">
                @error('phone')
                <span>{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" value="{{$customer->email}}" class="form-control @error('email') is-invalid @enderror" name="email">
                @error('email')
                <span>{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="address_1">Address Line 1</label>
                <input type="text" value="{{$customer->address_1}}" class="form-control " name="address_1">
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" value="{{$customer->city}}" class="form-control" name="city">
            </div>
            <div class="form-group">
                <label for="state">State</label>
                <input type="text" value="{{$customer->state}}" class="form-control" name="state">
            </div>
            <div class="form-group">
                <label for="zip_code">Zip Code</label>
                <input type="text" value="{{$customer->zip_code}}" class="form-control" name="zip_code">
            </div>
            <div class="form-group">
                <label for="driver_license_state">Driver License State</label>
                <input type="text" {{$customer->driver_license_state}} class="form-control" name="driver_license_state">
            </div>
            <div class="form-group">
                <label for="driver_license_number">Driver License Number</label>
                <input type="text" value="{{$customer->driver_license_number}}" class="form-control" name="driver_license_number">
            </div>
            <div class="form-group">
                <label for="birth_date">Birthdate</label>
                <input type="text" value="{{$customer->birthdate}}" class="form-control" name="birth_date">
            </div>
            <div class="form-group">
                <label for="license_front">Driver License Front</label>
                <img class="img-profile" src="{{$customer->license_front}}" width="400px" height="200px">
            </div>
            <div class="form-group">
                <input type="file" name="license_front" />
            </div>
            <div class="form-group">
                <label for="how_heard">How Heard</label>
                <input type="text" value="{{$customer->how_heard}}" class="form-control" name="how_heard" value="&nbsp;" >
            </div>

            <button class="btn btn-primary" type="submit">Submit</button>
        </form>



    @endsection


    @section('scripts')

    @endsection



</x-admin-master>
