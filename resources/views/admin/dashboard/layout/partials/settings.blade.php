@extends('admin.default')
@section('home_content')

<div class="main-panel">
    <div class="page-wrapper">
        <div class="col-md-12">
            <div class="row card">
                @include('admin.common.flush-message');
                <form class="form-horizontal" action="{{url('/admin/update-password')}}" method="post">
                {{csrf_field()}}
                    <div class="col-6">
                        <div class="card-body">
                            <h4 class="card-title">Change password</h4>
                            <div class="form-group row">
                                 <label for="lname" class="col-sm-6 text-right control-label col-form-label">Current Password</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" name="current_password" id="currentPassword" placeholder="Password"  required>
                                <span id="checkPassword"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-6 text-right control-label col-form-label">New Password</label>
                            <div class="col-sm-6">
                                 <input type="password" class="form-control" name="new_password" id="newPassword" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lname" class="col-sm-6 text-right control-label col-form-label">Confirm Password</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" name="confirm_password" id="confirmPassword" placeholder="Confirm Password" required>
                            </div>
                        </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                  <button type="submit" class="btn btn-primary" id="submitPassword">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection