@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="container-full">
    <section class="content">
        <!-- Basic Forms -->
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Admin Password Change</h4>
            </div>
			<!-- /.box-header -->
			<div class="box-body">
                <form method="post" action="{{ route('admin.password.update') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5>Current Password <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="password" id="old_password" name="oldpassword" class="form-control" required="">
                                    <div class="help-block" ></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5>New Password <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="password" name="current_password" id="current_password" class="form-control" required="">
                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <h5>Confirm Password <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="password" name="password_confirmation" class="form-control" required=""  id="password_confirmation" >
                                    <div class="help-block"></div>
                                </div>
                                <!-- @error('current_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror -->
                            </div>
                        </div>
                    </div>
                    <div class="text-xs-right">
                        <button type="submit" class="btn btn-rounded btn-info">Submit</button>
                    </div>

				</form>
            </div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
    </section>
</div>

@endsection
