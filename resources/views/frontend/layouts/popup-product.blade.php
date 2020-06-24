
<!-- Product Modal -->
<div id="p-modal" class="modal fade">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
			</div>
			<div class="modal-body">

				<section class="single-product">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="single-product-image easyzoom easyzoom--overlay">
									<a href="public/frontend/assets/media/img/product.jpg">
										<img id="pp-photo" class="w-100" src="" alt="">
									</a>
								</div>
							</div>
							<div class="col-md-6">
								
								
								<span id="testid"></span>


								<div class="product-title">

									<h1 id="pppidid"></h1>
									<h2 id="pp-name"></h2>
								</div>

								<div class="pricing">
									<h3 id="pp-price" class="price"></h3>
								</div>

								<div id="pp-desc" class="short-desc">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, facere eligendi aperiam quod placeat impedit quo inventore ex obcaecati vero.</p>

								</div>

								<div class="add-to-cart">
									
									<form action="{{ route('cart.store') }}" method="POST">
										@csrf
										<input name="pid" id="ppidid" type="hidden">
										<input name="pquantity" id="product_cart_id" min="1" type="number" value="1">
										<button class="btn btn-lg btn-danger">Add to Cart</button>
									</form>

								</div>

								<div class="stock-status">
									Stock : <span>In Stock</span>
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
								<h2 class="section-title text-left">Related Products</h2>
								<div id="related-product" class="products-slider owl-carousel">
									
									@php
										$products = App\Model\Product::latest() -> get();
									@endphp

									@foreach($products as $pro ) 
									<div class="product-items">
										<div class="product-featured">
											<a href="#"><img class="w-100" src="{{ URL::to('') }}/public/media/products/{{  $pro -> product_image }}" alt=""></a>

											<ul>
												<li><a href="#"><i class="ti-bag"></i></a></li>
												<li><a href="#"><i class="ti-eye"></i></a></li>
												<li><a href="#"><i class="ti-heart"></i></a></li>
											</ul>
										</div>
										<div class="product-info">
											<h4><a href="#">{{  $pro -> name }}</a></h4>
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
			</div>
		</div>
	</div>
</div>
