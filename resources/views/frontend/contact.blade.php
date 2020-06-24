@extends('frontend.layouts.app')

@section('main-content')

	<!-- .contact Us Section -->
	<section class="contact-us">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="contact-us-details">
						<h3>Head Office</h3>
						<ul>
							<li><i class="ti-location-pin"></i> 45 Grand Central Terminal New York,NY 1017 United State USA</li>

							<li><i class="ti-mobile"></i> +8801700000000</li>

							<li><i class="ti-email"></i> info@fishnfood.com</li>

							<li><i class="ti-timer"></i> 9 am - 6 pm</li>
						</ul>
						


					</div>
				</div>
				<div class="col-md-4">
					<div class="contact-us-details">
						<h3>Send Message</h3>
						
						<div class="send-message">
							<form action="">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Name">
								</div>

								<div class="form-group">
									<input class="form-control" type="text" placeholder="Email">
								</div>

								<div class="form-group">
									<input class="form-control" type="text" placeholder="Cell">
								</div>
								<div class="form-group">
									<textarea name="" id="" class="form-control" placeholder="Message"></textarea>
								</div>
								<div class="form-group">
									<input class="btn btn-block cart-btn" type="submit" value="Send Message">
								</div>
							</form>
						</div>
						


					</div>
				</div>
			</div>
		</div>
	</section>
@endsection 
	

