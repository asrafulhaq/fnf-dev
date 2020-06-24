@extends('frontend.layouts.app')

@section('main-content')

	<section class="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="blog-post">
						
						@foreach( $all_post as $posts )
						<article>
							<a href="#"><img src="{{ URL::to('/') }}/public/media/blog/{{ $posts -> featured_image }}" alt=""></a>
							<h2>{{ $posts -> title }}</h2>
							{!! htmlspecialchars_decode($posts -> content) !!}
							{{-- <a class="rmore" href="#">Read More</a> --}}
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
									<li><a href="#">Category name</a></li>
									<li><a href="#">Category name</a></li>
									<li><a href="#">Category name</a></li>
									<li><a href="#">Category name</a></li>
									<li><a href="#">Category name</a></li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	
@endsection 




	