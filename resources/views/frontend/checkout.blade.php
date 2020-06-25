@extends('frontend.layouts.app')

@section('main-content')
@include('frontend.layouts.page-title-banner')
	<br>
	
	<div class="container">
		@include('validate')
	</div>

	<form action="{{ route('checkout.store') }}" method="POST">
		@csrf
	<section class="cart-page">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="user-address">
						<h3>Put your shipping Address</h3>
						


							<div class="form-group">
								<label for="">Name</label>
								<input name="customer_name" type="text" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Cell</label>
								<input name="customer_cell" type="text" class="form-control">
							</div>

							<div class="form-group">
								<label for="">Email</label>
								<input name="customer_email" type="text" class="form-control">
							</div>

							<div class="form-group">
								<label for="">District</label>
								<input name="customer_dist"  type="text" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Home Address</label>
								<textarea name="customer_address"  name="" id="" class="form-control"></textarea>
							</div>
							


						

						
					</div>
				</div>
				<div class="col-md-4">
					<div class="cart">
						<div class="cart-items">
							<h3>Order Details</h3>
							<br>
							

							<table class="table">
								<thead>
									<tr>
										<th>Photo</th>
										<th>Name</th>
										<th>Amount</th>
									</tr>
								</thead>
								<tbody>
									@php
										$total = 0;
									@endphp
									@foreach( $checkout_cart as $checkout )
									@php
										$total += $checkout -> product_amount;
									@endphp
									<tr>
										<td><img style="width: 50px;height:50px;" src="{{ URL::to('/') }}/public/media/products/{{ $checkout -> product_photo  }}" alt=""></td>
										<td>{{ $checkout -> product_name }}</td>
										<td>{{ $checkout -> product_amount }}</td>
									</tr>

									@endforeach

									<tr>
										<td colspan="2" class="text-right">Total :</td>
										<td>{{ $total }}</td>

										<input type="hidden" name="total_amount" value="{{ $total }}">
									</tr>

								</tbody>
							</table>
						</div>
					</div>
					
					<div class="payment">
						<div class="payment-items">
							<h3>Select Payment Getway</h3>
							<br>
							
							<ul>
								<li><label for="cod"> <input id="cod" name="payment" value="Cash on delivery" type="radio"> Cash on Delivery</label></li>
								<li><label for="br"> <input id="br" name="payment" value="bKash / Rocket" type="radio"> bKash / Roket </label></li>
								<li><label for="card"> <input  id="card" name="payment" type="radio"> Visa / Master - Card </label></li>
							</ul>
						</div>
					</div>

					<div class="place-order">
					<input class="btn btn-lg btn-danger" type="submit" value="Place Order">
				</div>


				</div>

				
			</div>
		</div>
	</section>

	</form>
	<br>
	<br>
	<br>
	
	@endsection 