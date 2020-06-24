@extends('frontend.layouts.app')
@section('main-content')
@include("frontend.layouts.slider")

@php
	$home_page_data  = App\Model\HomePage::find(1);
@endphp
<!-- Best Sell section  -->
<section class="best-seller">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="section-title">Best Sellers</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">

				<div id="product-slider-best-seller" class="products-slider owl-carousel">
		
					

					@foreach( $products as $pro )
		
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
									@foreach( json_decode($pro -> categories) as $cat )
										{{ $cat }} , 
									@endforeach

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

					@endforeach



				</div>


			</div>
		</div>
	</div>
</section>



<!-- Best Sell section  -->
<section class="best-seller ">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="section-title">Special Offer</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">

				<div id="product-slider-s-offer" class="products-slider owl-carousel">
					
					@php
						$offers = App\Model\Offer::latest() -> get();
					@endphp

					@foreach( $offers as $offer )
					<div class="product-items">
						<div class="product-featured">
							<a href="#"><img class="w-100" src="{{ URL::to('/') }}/public/media/offer/{{ $offer  -> offer_img }}" alt=""></a>
						</div>
					</div>
					@endforeach

					
					
				</div>


			</div>
		</div>
	</div>
</section>



<!-- Best Sell section  -->
<section class="best-seller ">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="section-title">Fresh Water Fish</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">

				<div id="product-slider-water-fish" class="products-slider owl-carousel">

					
					@php
						$best_data   = App\Model\Product::latest() -> get();
					@endphp

					@foreach( $best_data as $data )
					<div pid="{{ $pro -> id }}" class="product-items">
						<div class="product-featured">
							<a href="#"><img class="w-100" style="" src="{{ URL::to('') }}/public/media/products/{{  $data -> product_image }}" alt=""></a>

							<ul>
								<li><a href="#"><i class="ti-bag"></i></a></li>
								<li><a href="#"><i class="ti-eye"></i></a></li>
								<li><a href="#"><i class="ti-heart"></i></a></li>
							</ul>
						</div>
						<div class="product-info">
							<span class="cat-name">
								@foreach( json_decode($data -> categories) as $cat )
									{{ $cat }} , 
								@endforeach

							</span>
							<h4><a href="#">{{ $data -> name }}</a></h4>
							<div class="price-amount">
								@if( $data -> sale_price == null ) 
									<span class="product-price">$ {{ $data -> regular_price }}</span>
								@else 
									<del>${{ $data -> sale_price }}</del>
									<span class="product-price">$ {{ $data -> regular_price }}</span>
								@endif
								
							</div>
						</div>
					</div>
					@endforeach

					

				</div>


			</div>
		</div>
	</div>
</section>


<!-- Brand Carousel  -->
<section class="brands">
	<div class="container">
		<div class="brands-slider owl-carousel">
			
			@php
				$partners = App\Model\Partner::latest() -> get();
			@endphp

			@foreach($partners  as $partner)
			<img src="{{ URL::to('/') }}/public/media/partner/{{ $partner -> partner_img }}" alt="">
			@endforeach

		</div>
	</div>
</section>


<!-- Newslater	 -->
<section class="newslater" style="background-size:cover;background-image: url('{{ URL::to('/')  }}/public/media/home/{{ $home_page_data -> newsletter_bg  }}')">
	<div class="newslater-box">
		<h3>{{ $home_page_data -> newsletter_title  }}</h3>
		<p>{{ $home_page_data -> newsletter_desc  }}</p>
		<div class="subscribe">
			<form action="{{ url('subscriber-upload') }}" method="POST">
				@csrf
				<input name="subscriber" type="text" placeholder="Your email address">
				<button><i class="fas fa-paper-plane"></i></button>
			</form>
		</div>
	</div>
</section>

@endsection