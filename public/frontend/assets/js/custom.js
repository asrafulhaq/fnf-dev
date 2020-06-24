(function($){
	$(document).ready(function(){

		// Top bar hide action 
		$("a#top-bar").click(function(){
			$("img#top-bar-img").hide();
			return false;
		});

		// Site main banner 
		$('#site-main-banner').owlCarousel({
			items : 1,
			loop : true, 
			autoplay: true

		});

		// Site main banner 
		$('#product-slider-best-seller').owlCarousel({
			items : 5,
			loop : true, 
			margin: 10,
			autoplay: true


		});

		// Site main banner 
		$('#product-slider-water-fish').owlCarousel({
			items : 4,
			loop : true,
			margin: 10,
			autoplay: true
			

		});


		// Site main banner 
		$('#product-slider-s-offer').owlCarousel({
			items : 2,
			loop : true,
			margin: 10,
			autoplay: true
			

		});

		// Site main banner 
		$('.brands-slider').owlCarousel({
			items : 5,
			loop : true,
			margin: 10,
			autoplay: true
			

		});


		// Site main banner 
		$('#related-product').owlCarousel({
			items : 5,
			loop : true,
			margin: 10,
			autoplay: true
			

		});
		

		




		// Product pop up dynamic
		$(document).on('click','.product-items',function(e){
			
			let pid = $(this).attr('pid');
			
			

			$.ajax({
				url : "popup-product/" + pid,
				dataType : "json",
				success : function(data){
					
					// Data transfer to POPUP 
					
					$("h1#pppidid").html(pid);
					$("input#ppidid").val(pid);
					$("#pp-name").html(data.name);

					// Sale price manage 
					if(data.sale_price == null){
						$('h3#pp-price').html(data.regular_price);
					}else{
						$('h3#pp-price').html("<del>$" + data.sale_price +  "</del>$" + data.regular_price);
					}
					
					$("#pp-desc").html(data.desc);
					$("#pp-photo").attr('src', 'public/media/products/' + data.product_image);
					
					
					
				}
			});

			$('#p-modal').modal('show');

			return false;
		});




		
		
		

		
		

	});
})(jQuery)