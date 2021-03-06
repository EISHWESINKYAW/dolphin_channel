@extends('frontend')
@section('maincontent')
<div class="landing-hero">
	<div class="row landing-hero-text">
		<h2>SIGN UP</h2>
	</div>
</div>
<div class="container">
	<div class="row justify-content-center" >
		{{-- <h2>LOGIN</h2> --}}
		<form method="POST" action="{{ route('register') }}">
			@csrf
			<div class="form-row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="small mb-1" for="inputName"> Name</label>
						<input class="form-control py-4" id="inputName" type="text" placeholder="Enter Name" name="name" />
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
				<label class="small mb-1" for="inputEmailAddress">Email</label>
				<input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="email" />
			</div>
				</div>
			</div>

			
			<div class="form-row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="small mb-1" for="inputPassword">Password</label>
						<input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="password" />
						<font id="error" color="red"></font>
					</div>

				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
						<input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" name="password_confirmation" />
						<font id="cerror" color="red"></font>

					</div>
				</div>
			</div>

			{{-- <div class="form-group">
				<label class="small mb-1" for="address"> Address </label>
				<textarea class="form-control" name="address"></textarea>
			</div> --}}

			<div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0 ml-5">

				<button type="submit" class="btn btn-secondary mainfullbtncolor btn-block"> Create Account </button>
			</div>
		</form>
		
	</div>
</div>
@endsection