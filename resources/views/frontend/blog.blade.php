@extends('frontend.layouts.app')

@section('main-content')
@include('frontend.layouts.page-title-banner')

	<section class="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="blog-post">
						
						@foreach( $all_post as $posts )
						<article>
							<div class="blog-section">
								<div class="blog-featured-image">
									<a href="#"><img class="shadow" src="{{ URL::to('/') }}/public/media/blog/{{ $posts -> featured_image }}" alt=""></a>
								</div>
								<div class="blog-content">
									<h2>{{ $posts -> title }}</h2>
									<p>{!! htmlspecialchars_decode($posts -> content) !!}</p>
									<a class="btn btn-primary" style="background-color: #fd7e14; border:1px solid #fd7e14;" href="#">Read More</a>
								</div>
							</div>
						</article>
						@endforeach
												
						
			

					</div>



				</div>
				<div class="col-md-3">
					<div class="sidebar">
							
						<div class="blog-search">
							<h3>Search </h3>
							<hr>
							<div class="search-form">
								<form action="">
									<input type="text">
									<button><i class="fas fa-search"></i></button>
								</form>
							</div>
						</div>

						<div class="blog-search">
							<h3>Categoryes </h3>
							<hr>
							<div class="category">
								<ul>

									@php
										$category  = App\Model\PostCat::latest() -> get();

										foreach( $category as $cat ) :
									@endphp
									<li><a href="#">{{ $cat -> name }}</a></li>
									@php
										endforeach;
									@endphp



								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	
@endsection 




	