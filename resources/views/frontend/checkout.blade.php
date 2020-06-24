@extends('frontend.layouts.app')

@section('main-content')

	<br>

	
	<section class="cart-page">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="user-address">
						<h3>Put your shipping Address</h3>
						<form action="">
							<div class="form-group">
								<label for="">Name</label>
								<input type="text" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Email</label>
								<input type="text" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Cell</label>
								<input type="text" class="form-control">
							</div>
							<div class="form-group">
								<label for="">City</label>
								<input type="text" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Address</label>
								<textarea name="" id="" class="form-control"></textarea>
							</div>
							<div class="form-group">
								<label for=""></label>
								<input type="submit" class="btn btn-primary" value="Place Order">
							</div>
						</form>

						
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
									<tr>
										<td><img style="width: 50px;height:50px;" src="assets/media/img/product.jpg" alt=""></td>
										<td>Product Name</td>
										<td>$ 100</td>
									</tr>

									<tr>
										<td><img style="width: 50px;height:50px;" src="assets/media/img/product.jpg" alt=""></td>
										<td>Product Name</td>
										<td>$ 100</td>
									</tr>

									<tr>
										<td><img style="width: 50px;height:50px;" src="assets/media/img/product.jpg" alt=""></td>
										<td>Product Name</td>
										<td>$ 100</td>
									</tr>

								</tbody>
							</table>
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