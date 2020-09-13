@extends('frontend')
@section('maincontent')
<div class="page-single-2">
	<div class="container">
		<div class="row ipad-width">
			<div class="left-content mt-5">
				<a href="index-2.html"><img class="md-logo" src="#" alt=""></a>
				<h1>Coming soon</h1>
				<p>We are working hard to get back to you in</p>
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="coming-ct">
							<div id="clockdiv" class="time">
								<div class="it-time">
									<span class="days"></span><br>
									<p>days</p>
								</div>
								
								<div class="it-time">
									<span class="hours"></span><br>		
									<p>hours</p>
								</div>
								<div class="it-time">
									<span class="minutes">				
									</span><br>	
									<p>Minutes</p>
								</div>
								<div class="it-time">
									<span class="seconds">							
									</span><br>
									<p>Seconds</p>
								</div>
							</div>	
						</div>
						<h3>Nofication me</h3>
						<form action="#">
							<input class="email" type="text" placeholder="Enter your email">
							<input class="redbtn" type="submit" placeholder="subscribe">
						</form>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<img class="cm-img" src="images/uploads/cm-img.png" alt="">
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
@endsection