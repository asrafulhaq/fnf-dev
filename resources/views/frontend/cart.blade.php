@extends('frontend.layouts.app')
@section('main-content')
	<br>
	<br>
	<br>
	<section class="cart-page">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="cart">
						<div class="cart-items">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th></th>
										<th>Photo</th>
										<th>Name</th>
										<th>Quantity</th>
										<th>Price</th>
										<th>Amount</th>
									</tr>
								</thead>
								<tbody>
				
									@foreach( $cart_details as $cart )
									<tr>
										<td><a href="{{ route('cart.destroy', $cart -> id) }}"><i class="ti-close"></i></a></td>
										<td><img style="width: 50px;height:50px;" src="{{ URL::to('/') }}/public/media/products/{{ $cart -> product_photo }}" alt=""></td>
										<td>{{ $cart -> product_name }}</td>

										<td><input type="number" value="{{ $cart -> product_quantity }}">

										</td>
										<td>{{ $cart -> product_price }}</td>
										<td>{{ $cart -> product_amount }}</td>
									</tr>
									@endforeach

								</tbody>
							</table>
						</div>
						<div class="cart-info">
							<a class="btn btn-info" href="{{ url('shop') }}">Continue Shop</a> 
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="cart-note">
						<div class="card">
							<div class="card-body">
								<h3>Cart Note</h3>
								<textarea class="form-control" name="" id=""></textarea>

								<div class="cart-price">
									<a class="btn btn-primary" href="{{ route('checkout') }}">Checkout</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<br>
	<br>
	<br>
	
@endsection 