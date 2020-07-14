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
						<h2>Invoice # 02</h2>
						<div class="user-info">
							<h3>{{ $order_data -> name }}</h3>
							<h5>{{ $order_data -> cell }}</h3>
							@if( isset($order_data -> email) )
							<h5>{{ $order_data -> email }}</h3>
							@endif
						</div>
					</div>


					<div class="col-md-12">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>Product Name</th>
									<th>Product Price</th>
									<th>Quantity</th>
									<th>Amount</th>
								</tr>
							</thead>
							<tbody>
								
								@php
									$total = 0;
								@endphp
								@foreach( $cart_data as $cart )
								@php
									$total += $cart -> product_amount;
								@endphp
								<tr>
									<td>{{ $loop -> index + 1 }}</td>
									<td>{{ $cart -> product_name }}</td>
									<td>{{ $cart -> product_price }}</td>
									<td>{{ $cart -> product_quantity }}</td>
									<td>{{ $cart -> product_amount }}</td>
								</tr>
								@endforeach
								<tr>
									
									<td colspan="4" style="text-align:right;">Total : </td>
									<td>{{ $total }}</td>
								</tr>
							</tbody>
						</table>
					</div>

					

				</div>
			</div>
		</div>
		<br>
		<br>
	
		
	</div>

	
	
