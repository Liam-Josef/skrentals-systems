{{--<x-admin-master>--}}

{{--    @section('styles')--}}

{{--    @endsection--}}


{{--    @section('browser_title')--}}
{{--        <title>Add Employee | SK Watercraft Rentals</title>--}}
{{--    @endsection--}}


{{--    @section('content')--}}
{{--        <h1>Add Employee</h1>--}}



{{--           <div class="card shadow">--}}
{{--              <div class="card-body">--}}
{{--                  <form method="post" action="{{route('user.store')}}">--}}
{{--                      @csrf--}}
{{--                      @method('POST')--}}

{{--                      <div class="form-group">--}}
{{--                          <label for="username">UserName</label>--}}
{{--                          <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror"  />--}}
{{--                          <div>--}}
{{--                              @error('username')--}}
{{--                              <span><strong>{{$message}}</strong></span>--}}
{{--                              @enderror--}}
{{--                          </div>--}}
{{--                      </div>--}}

{{--                      <div class="form-group">--}}
{{--                          <label for="firstname">First Name</label>--}}
{{--                          <input type="text" name="firstname" id="firstname" class="form-control @error('firstname') is-invalid @enderror" />--}}
{{--                          <div>--}}
{{--                              @error('firstname')--}}
{{--                              <span><strong>{{$message}}</strong></span>--}}
{{--                              @enderror--}}
{{--                          </div>--}}
{{--                      </div>--}}

{{--                      <div class="form-group">--}}
{{--                          <label for="lastname">Last Name</label>--}}
{{--                          <input type="text" name="lastname" id="last name" class="form-control @error('lastname') is-invalid @enderror" />--}}
{{--                          <div>--}}
{{--                              @error('lastname')--}}
{{--                              <span><strong>{{$message}}</strong></span>--}}
{{--                              @enderror--}}
{{--                          </div>--}}
{{--                      </div>--}}

{{--                      <div class="form-group">--}}
{{--                          <label for="email">Email</label>--}}
{{--                          <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" />--}}
{{--                          <div>--}}
{{--                              @error('year')--}}
{{--                              <span><strong>{{$message}}</strong></span>--}}
{{--                              @enderror--}}
{{--                          </div>--}}
{{--                      </div>--}}

{{--                      <div class="form-group">--}}
{{--                          <label for="phone">Phone</label>--}}
{{--                          <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" />--}}
{{--                          <div>--}}
{{--                              @error('model')--}}
{{--                              <span><strong>{{$message}}</strong></span>--}}
{{--                              @enderror--}}
{{--                          </div>--}}
{{--                      </div>--}}

{{--                      <div class="row mb-3">--}}
{{--                          <div class="col-md-6">--}}
{{--                              <div class="form-group">--}}
{{--                                  <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}
{{--                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                  @error('password')--}}
{{--                                  <div class="invalid-feedback">{{$message}}</div>--}}
{{--                                  @enderror--}}
{{--                              </div>--}}
{{--                          </div>--}}
{{--                      </div>--}}

{{--                      <div class="row mb-3">--}}
{{--                          <div class="col-md-6">--}}
{{--                              <div class="form-group">--}}
{{--                                  <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>--}}
{{--                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                                  @error('password-confirmation')--}}
{{--                                  <div class="invalid-feedback">{{$message}}</div>--}}
{{--                                  @enderror--}}
{{--                              </div>--}}
{{--                          </div>--}}
{{--                      </div>--}}


{{--                      <div class="mb-4">--}}
{{--                          <img class="img-profile rounded-circle" src="{{$user->avatar}}" width="100px" height="100px">--}}
{{--                      </div>--}}

{{--                      <input type="hidden" name="is_active" value="1">--}}

{{--                      <button type="submit" class="btn btn-primary">Add Employee</button>--}}
{{--                  </form>--}}
{{--              </div>--}}
{{--           </div>--}}



{{--                        <form method="POST" action="{{ route('register') }}">--}}
{{--                @csrf--}}

{{--                <div class="row mb-3">--}}

{{--                    <div class="col-sm-6">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>--}}
{{--                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>--}}

{{--                            @error('username')--}}
{{--                            <div class="invalid-feedback">{{$message}}</div>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="row mb-3">--}}
{{--                    <div class="col-sm-6">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="firstname" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>--}}
{{--                            <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>--}}

{{--                            @error('firstname')--}}
{{--                            <div class="invalid-feedback">{{$message}}</div>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="row mb-3">--}}
{{--                    <div class="col-sm-6">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="lastname" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>--}}
{{--                            <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>--}}

{{--                            @error('lastname')--}}
{{--                            <div class="invalid-feedback">{{$message}}</div>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}



{{--                <div class="row mb-3">--}}
{{--                    <div class="col-sm-6">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}
{{--                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                            @error('email')--}}
{{--                            <div class="invalid-feedback">{{$message}}</div>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>--}}
{{--                            <input id="phone" type="phone" class="form-control" name="phone" />--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="row mb-3">--}}
{{--                    <div class="col-md-6">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}
{{--                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                            @error('password')--}}
{{--                            <div class="invalid-feedback">{{$message}}</div>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="row mb-3">--}}
{{--                    <div class="col-md-6">--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>--}}
{{--                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            @error('password-confirmation')--}}
{{--                            <div class="invalid-feedback">{{$message}}</div>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="row mb-0">--}}
{{--                    <div class="col-md-6 offset-md-4">--}}
{{--                        <button type="submit" class="btn btn-primary">--}}
{{--                            {{ __('Register') }}--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}






{{--    @endsection--}}


{{--    @section('scripts')--}}

{{--    @endsection--}}



{{--</x-admin-master>--}}
