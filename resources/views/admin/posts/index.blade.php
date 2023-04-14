<x-admin-master>

    @section('styles')
        <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection


        @foreach($applications as $application)

        @section('page_title')
            <h1>Announcements</h1>
        @endsection

        @section('browser_title')
            <title>Announcemenets | {{$application->name}}</title>
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
                <h1>Announcements</h1>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
{{--            <div class="card-header py-3 text-center">--}}
{{--                <h6 class="m-0 font-weight-bold text-white">--}}
{{--                    <span style="color:transparent">SK</span>--}}
{{--                    @if(session('message'))--}}
{{--                            {{session('message')}}--}}
{{--                    @elseif(session('post-created-message'))--}}
{{--                            {{session('post-created-message')}}--}}
{{--                    @elseif(session('post-updated-message'))--}}
{{--                            {{session('post-updated-message')}}--}}
{{--                    @endif--}}
{{--                </h6>--}}
{{--            </div>--}}
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="postTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>
                                    <span class="visible-xs-table">&nbsp;</span>
                                    <div class="row hidden-xs-flex">
                                        <div class="col-sm-3">Title</div>
                                        <div class="col-sm-1">Image</div>
                                        <div class="col-sm-3">Submitted By</div>
                                        <div class="col-sm-3">Created</div>
                                        <div class="col-sm-2">Update</div>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($posts as $post)
                            <tr>
                                <td>
                                    <a href="#" class="table-li-link" data-target="#viewPost{{$post->id}}" data-toggle="modal">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="sm-md">
                                                    {{$post->title}}
                                                </p>
                                            </div>
                                            <div class="col-sm-1">
                                                <img class="responsive" height="40px" src="{{$post->post_image}}" alt="{{$post->title}}" />
                                            </div>
                                            <div class="col-sm-3">
                                                <p>
                                                    {{$post->user->firstname}} {{$post->user->lastname}}
                                                </p>
                                            </div>
                                            <div class="col-sm-3">
                                                <p>
                                                    {{$post->created_at->diffForHumans()}}
                                                </p>
                                            </div>
                                            <div class="col-sm-2">
                                                @can('view', $post)
                                                    <a href="#" class="btn btn-primary-red height-auto" data-target="#updatePost{{$post->id}}" data-toggle="modal">Update</a>
                                                @endcan
                                            </div>
                                        </div>
                                    </a>
                                </td>
                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @foreach($posts as $post)
            <!-- View Announcement Modal -->
                <div class="modal fade" id="viewPost{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 id="modal_rental_title" class="modal-title"><span class="white">{{$post->title}}</span></h3>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">

                              <div class="row">
                                  <div class="col-sm-12">
                                      <img height="100" src="{{$post->post_image}}" alt="{{$post->title}}" class="img-responsive img-thumbnail">
                                  </div>
                              </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="text-center mt-3">
                                        {{$post->body}}
                                    </h4>
                                </div>
                            </div>


                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">CLOSE</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /View Announcement Modal -->

                <!-- Update Announcement Modal -->
                <div class="modal fade" id="updatePost{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3><span>Update: </span>{{$post->title}}</h3>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form method="POST" action="{{route('post.update', $post->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" class="form-control" id="" aria-describedby="" placeholder="Enter Title" value="{{$post->title}}" />
                                        </div>
                                    <br />

                                    <div class="form-group">
                                        <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{$post->body}}</textarea>
                                    </div>

                                    <div class="form-group mt-5">
                                        <div><img height="100" src="{{asset('storage/' . $post->post_image)}}" alt="{{$post->title}}" class="img-responsive"></div>
                                        <label for="post_image">Upload an Image</label>
                                        <input type="file" class="form-control" name="post_image" id="post_image" />
                                    </div>


                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                                        <button class="btn btn-primary" type="submit">Submit Announcement</button>
                                    </div>

                                </form>



                            </div>

                        </div>
                    </div>
                </div>
                <!-- /Update Announcement Modal -->
        @endforeach

    @endsection

    @section('scripts')
        <!-- Page level plugins -->
        <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('js/demo/datatables-scripts.js')}}"></script>
    @endsection


</x-admin-master>
