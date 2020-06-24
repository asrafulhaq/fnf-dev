	@php
		$home_page_data  = App\Model\HomePage::find(1);
	@endphp

	<!-- TOP BAR BANNER  -->
	<section class="page-title-banner">
	  <div class="container">
	  	<div style="background-image: url('{{ URL::to('/') }}/public/media/home/{{$home_page_data -> page_banner }}') ;" class="page-title-banner-img"></div>
	  </div>
	</section>