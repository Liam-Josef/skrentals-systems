<x-admin-master>

    @foreach($websites as $website)

    @section('square-logo')
        <img src="{{asset('storage/'. $website->logo_square_1)}}" alt="{{$website->name}}" height="30px" width="auto">
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

    @section('navbar-brand')
        {{$website->name}}
    @endsection

    @section('analytic-links')
        <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/index*') ? 'collapsed' : '' }}" href="#" data-toggle="collapse" data-target="#collapseAnalytics" aria-expanded="" aria-controls="collapseAnalytics">
                <i class="fas fa-fw fa-solid fa-code-branch"></i>
                <span>Analytics</span>
            </a>
            <div id="collapseAnalytics" class="collapse" aria-labelledby="headingAnalytics" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">

                    <h6 class="collapse-header">Google Analytics: </h6>
                    @if($website->google_link_1 != '')
                        <a class="collapse-item" href="{{$website->google_link_1}}" target="_blank">Analytics <span class="text-primary">Main</span></a>
                    @endif
                    @if($website->google_link_2 != '')
                        <a class="collapse-item" href="{{$website->google_link_2}}" target="_blank"><span class="text-primary">Reports</span> Snapshot</a>
                    @endif
                    @if($website->google_link_3 != '')
                        <a class="collapse-item" href="{{$website->google_link_3}}" target="_blank"><span class="text-primary">Acquisition</span> Overview</a>
                    @endif
                    @if($website->google_link_4 != '')
                        <a class="collapse-item" href="{{$website->google_link_4}}" target="_blank"><span class="text-primary">Engagement</span> Overview</a>
                    @endif
                    @if($website->google_link_5 != '')
                        <a class="collapse-item" href="{{$website->google_link_5}}" target="_blank"><span class="text-primary">Demographics</span> Overview</a>
                    @endif
                </div>
            </div>
        </li>
    @endsection
    @endforeach


    @section('page-name')
        App Info
    @endsection


    @section('styles')

    @endsection


    @section('content')

        <h1><span class="text-primary">App</span> Info</h1>


        @foreach($websites as $website)
            <form action="{{route('admin.dev.siteInfo.update', $website->id)}}" method="post" enctype="multipart/form-data">
                <div class="card shadow mb-3">
                    <div class="card-header">
                        <h3 class="mb-0">Contact Info</h3>
                    </div>
                    <div class="card-body">
                        @csrf
                        @method('PATCH')

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name">App Name</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{$website->name}}">
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs">
                                &nbsp;
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" value="{{$website->email}}">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" name="phone" id="phone" value="{{$website->phone}}">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control" name="country" id="country" value="{{$website->country}}">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="address_line_1">Address 1</label>
                                    <input type="text" class="form-control" name="address_line_1" id="address_line_1" value="{{$website->address_line_1}}">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="address_line_2">Address 2</label>
                                    <input type="text" class="form-control" name="address_line_2" id="address_line_2" value="{{$website->address_line_2}}">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" name="city" id="city" value="{{$website->city}}">
                                </div>
                            </div>
                            <div class="col-6 col-sm-2">
                                <div class="form-group">
                                    <label for="state">State</label>
                                    <input type="text" class="form-control" name="state" id="state" value="{{$website->state}}">
                                </div>
                            </div>
                            <div class="col-6 col-sm-2">
                                <div class="form-group">
                                    <label for="zip">Zip</label>
                                    <input type="text" class="form-control" name="zip" id="zip" value="{{$website->zip}}">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card shadow mb-3">
                    <div class="card-header">
                        <h3 class="mb-0">Social Links</h3>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" id="facebook" value="{{$website->facebook}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="instagram">Instagram</label>
                                    <input type="text" class="form-control" name="instagram" id="instagram" value="{{$website->instagram}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="tiktok">TikTok</label>
                                    <input type="text" class="form-control" name="tiktok" id="tiktok" value="{{$website->tiktok}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="linkedin">LinkedIn</label>
                                    <input type="text" class="form-control" name="linkedin" id="linkedin" value="{{$website->linkedin}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="twitter">Twitter</label>
                                    <input type="text" class="form-control" name="twitter" id="twitter" value="{{$website->twitter}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="google">Google Plus</label>
                                    <input type="text" class="form-control" name="google" id="google" value="{{$website->google}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="youtube">Youtube</label>
                                    <input type="text" class="form-control" name="youtube" id="youtube" value="{{$website->youtube}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="vimeo">Vimeo</label>
                                    <input type="text" class="form-control" name="vimeo" id="vimeo" value="{{$website->vimeo}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="etsy">Etsy</label>
                                    <input type="text" class="form-control" name="etsy" id="etsy" value="{{$website->etsy}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="website_url">Website URL</label>
                                    <input type="text" class="form-control" name="website_url" id="website_url" value="{{$website->website_url}}">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card shadow mb-3">
                    <div class="card-header">
                        <h3 class="mb-0">Images</h3>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group">
                                    <label for="logo_square_1">Square Logo 1</label>
                                    <input type="file" class="form-control-file" name="logo_square_1" id="logo_square_1">
                                    <img src="{{asset('storage/'. $website->logo_square_1)}}" alt="{{$website->name}}" height="auto" class="img-responsive mt-3">
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group">
                                    <label for="logo_square_2">Square Logo 2</label>
                                    <input type="file" class="form-control-file" name="logo_square_2" id="logo_square_2">
                                    <img src="{{asset('storage/'. $website->logo_square_2)}}" alt="{{$website->name}}" height="auto" class="img-responsive mt-3">
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group">
                                    <label for="logo_horizontal_1">Square Horizontal 1</label>
                                    <input type="file" class="form-control-file" name="logo_horizontal_1" id="logo_horizontal_1">
                                    <img src="{{asset('storage/'. $website->logo_horizontal_1)}}" alt="{{$website->name}}" height="auto" class="img-responsive mt-3">
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group">
                                    <label for="logo_horizontal_2">Square Horizontal 2</label>
                                    <input type="file" class="form-control-file" name="logo_horizontal_2" id="logo_horizontal_2">
                                    <img src="{{asset('storage/'. $website->logo_horizontal_2)}}" alt="{{$website->name}}" height="auto" class="img-responsive mt-3">
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="form-group">
                                    <label for="favicon">Favicon</label>
                                    <input type="file" class="form-control-file" name="favicon" id="favicon">
                                    <img src="{{asset('storage/'. $website->favicon)}}" alt="{{$website->name}}" height="auto" class="img-responsive mt-3">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card shadow mb-3">
                    <div class="card-header">
                        <h3 class="mb-0">Analytics</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="analytics" class="hidden">Analytics</label>
                                    <textarea name="analytics" id="analytics" cols="30" rows="3" class="form-control">{{$website->analytics}}</textarea>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="google_link_1" class="">Analytics</label>
                                    <textarea name="google_link_1" id="google_link_1" cols="30" rows="3" class="form-control">{{$website->google_link_1}}</textarea>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="google_link_2" class="">Analytics</label>
                                    <textarea name="google_link_2" id="google_link_2" cols="30" rows="3" class="form-control">{{$website->google_link_2}}</textarea>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="google_link_3" class="">Analytics</label>
                                    <textarea name="google_link_3" id="google_link_3" cols="30" rows="3" class="form-control">{{$website->google_link_3}}</textarea>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="google_link_4" class="">Analytics</label>
                                    <textarea name="google_link_4" id="google_link_4" cols="30" rows="3" class="form-control">{{$website->google_link_4}}</textarea>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="google_link_5" class="">Analytics</label>
                                    <textarea name="google_link_5" id="google_link_5" cols="30" rows="3" class="form-control">{{$website->google_link_5}}</textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card shadow mb-5">
                    <div class="card-footer">
                        <button class="btn btn-primary btn-right" type="submit">Update</button>
                    </div>
                </div>


            </form>
        @endforeach


    @endsection


    @section('scripts')

    @endsection

</x-admin-master>
