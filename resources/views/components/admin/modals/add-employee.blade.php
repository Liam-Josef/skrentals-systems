<!--Add Employee Modal -->
<div class="modal fade" id="addEmployee" tabindex="-1" role="dialog" aria-labelledby="checkinModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="modal_rental_title" class="modal-title"><span>Add an Employee </span></h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

                <form method="post" action="{{route('user.store')}}">
                    @csrf
                    @method('POST')

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="username">UserName</label>
                                <input type="text" name="username" id="username" class="form-control format @error('username') is-invalid @enderror"  />
                                <div>
                                    @error('username')
                                    <span><strong>{{$message}}</strong></span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 hidden">
                            <div class="form-group">
                                <label for="avatar">Emp Picture</label>
                                <input type="hidden" name="avatar" id="avatar" class="form-control format" value="images/ZaFLQgUaXiOfYAVPuNxrNiBnOv0dErdAAwnRXoQX.jpg" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" name="firstname" id="firstname" class="form-control format @error('firstname') is-invalid @enderror" />
                                <div>
                                    @error('firstname')
                                    <span><strong>{{$message}}</strong></span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" name="lastname" id="last name" class="form-control format @error('lastname') is-invalid @enderror" />
                                <div>
                                    @error('lastname')
                                    <span><strong>{{$message}}</strong></span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control format @error('email') is-invalid @enderror" />
                                <div>
                                    @error('year')
                                    <span><strong>{{$message}}</strong></span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control format @error('phone') is-invalid @enderror" />
                                <div>
                                    @error('model')
                                    <span><strong>{{$message}}</strong></span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control format @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control format" name="password_confirmation" required autocomplete="new-password">
                                @error('password-confirmation')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="is_active" value="1">

                    <div class="modal-footer">
                        <input type="hidden" name="avatar" id="avatar" value="app-images/placeholder-avatar.jpg" />
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">CANCEL</button>
                        <button type="submit" class="btn btn-primary">Add Employee</button>
                    </div>
                </form>


            </div>

        </div>
    </div>
</div>
<!-- /Add Employee Modal -->
