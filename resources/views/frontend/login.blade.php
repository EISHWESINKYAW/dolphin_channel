@extends('frontend')
@section('maincontent')
<div class="landing-hero">
	<div class="row landing-hero-text mt-5">
		<h2>LOG IN</h2>
	</div>
</div>
<div class="container">
	<div class="col-md-6" align="justify-content-between">
		
		<form method="POST" action="{{ route('login') }}">
			@csrf
			<div class="form-group">
				<label class="small mb-1" for="inputEmailAddress">Email</label>
				<input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Enter email address" name="email" />
			</div>

			<div class="form-group">
				<label class="small mb-1" for="inputPassword">Password</label>
				<input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="password" />
			</div>

			<div class="form-group">
				<div class="custom-control custom-checkbox">
					<input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
					<label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
				</div>
				<a class="small" href="#">Forgot Password?</a><a href="{{route('signuppage')}}">Register!</a>
			</div>
			<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
				<button type="submit" class="btn btn-secondary mainfullbtncolor btn-block">Login</button>
			</div>
		</form>
		
	</div>
</div>
@endsection