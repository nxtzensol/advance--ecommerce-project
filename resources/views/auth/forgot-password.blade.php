@extends('frontend.main_master')
@section('content')

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="{{ url('/') }}">Home</a></li>
				<li class='active'>Forget Password</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">
				<!-- Sign-in -->
                <div class="col-md-12 col-sm-12 sign-in">
                    <h4 class="">Forget Password</h4>
                    <p class="">Forgot your password? No Problem</p>
                    <form method="post" action="{{ route('password.email') }}">

                        @csrf
                        <div class="form-group">
                            <label class="info-title" for="email">Email Address <span>*</span></label>
                            <input type="email" name="email" class="form-control unicase-form-control text-input" id="email" value="{{ old('email') }}">
                        </div>
                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button"> {{ __('Email Password Reset Link') }}</button>
                    </form>
                </div>
                <!-- Sign-in -->


                <!-- create a new account -->
            </div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
            @include('frontend.body.brands');
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->

@endsection
