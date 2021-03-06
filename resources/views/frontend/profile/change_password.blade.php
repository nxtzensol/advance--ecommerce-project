@extends('frontend.main_master')
@section('content')

<div class="body-content">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <br/><br/>
                <img src="{{ (!empty($user->profile_photo_path)) ? url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg')  }}" alt="" class="card-img-top" style="border-radius: 50%;" height="100%" width="100%">
                <br/><br/>
                <ul class="list-group list-group-flush">
                    <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm btn-block">Home</a>
                    <a href="{{ route('user.profile') }}" class="btn btn-primary btn-sm btn-block">Profile Update</a>
                    <a href="{{ route('change.password') }}" class="btn btn-primary btn-sm btn-block">Change Password</a>
                    <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>
                </ul>
            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-6">
                <div class="card">
                    <h3 class="text-center">
                        <span class="text-danger">
                            Change Password
                        </span>
                    </h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('user.password.update')}}" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label class="info-title" for="old_password">Current Password</label>
                                <input type="password" id="old_password" name="oldpassword" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="current_password">New Password</label>
                                <input type="password" name="current_password" id="current_password" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="password_confirmation">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" required=""  id="password_confirmation" >
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger">Update</button>
                            </div>
                        </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
