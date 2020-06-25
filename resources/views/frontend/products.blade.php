@extends('frontend.layouts.app')
@section('main-content')
@include("frontend.layouts.page-title-banner")

	<!-- all products   -->
	<section class="all-products">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="section-title">Our Products</h2>
				</div>
			</div>
			<div class="row">


				@foreach( $products as $pro )
				<div class="col-md-3">
					<div pid="{{ $pro -> id }}" class="product-items">
						<div class="product-featured">
							<a href="#"><img class="w-100" style="" src="{{ URL::to('') }}/public/media/products/{{  $pro -> product_image }}" alt=""></a>

							<ul>
								<li><a href="#"><i class="ti-bag"></i></a></li>
								<li><a href="#"><i class="ti-eye"></i></a></li>
								<li><a href="#"><i class="ti-heart"></i></a></li>
							</ul>
						</div>
						<div class="product-info">
							<span class="cat-name">

							</span>
							<h4><a href="#">{{ $pro -> name }}</a></h4>
							<div class="price-amount">
								@if( $pro -> sale_price == null ) 
									<span class="product-price">$ {{ $pro -> regular_price }}</span>
								@else 
									<del>${{ $pro -> sale_price }}</del>
									<span class="product-price">$ {{ $pro -> regular_price }}</span>
								@endif
								
							</div>
						</div>
					</div>
				</div>
				@endforeach





				
			</div>
		</div>
	</section>
@endsection 

	
