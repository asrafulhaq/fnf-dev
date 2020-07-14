<link rel="stylesheet" href="{{ asset('public/frontend/assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/frontend/assets/css/style.css') }}">

	<div class="in-body">
		<div class="container">
			@if( isset($message) )
			<p class="alert alert-success"> {{ $message }} <button type="submit" data-dismiss="alert" class="close">&times;</button></p>
			@endif
		</div>
		<br>
		<div style="width:70%;" class="container ">
			<div class="invoice shadow-sm">
				<a class="btn btn-primary btn-sm" href="{{ url('/') }}">Back to Shop</a>
				<div class="row">
					
					<div class="col-md-12">
						<div class="fnf-info">
							<img src="{{ URL::to('/') }}/public/frontend/assets/media/img/logo.png" alt="">
						</div>
					</div>

					<div class="col-md-12">
						<h2>Invoice # {{ $order_data -> id }}</h2>
						<div class="user-info">
							<h3>{{ $order_data -> name }}</h3>
							<h5>{{ $order_data -> cell }}</h3>
							@if( !empty($order_data -> email) )
							<h5>{{ $order_data -> email }}</h3>
							@endif
						</div>
					</div>



					

				</div>
			</div>
		</div>
		<br>
		<br>
	
		
	</div>

	
	
