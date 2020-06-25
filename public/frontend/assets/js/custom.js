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
					
					$("input#ppidid").val(pid);
					$("#pp-name").html(data.name);

					// Sale price manage 
					if(data.sale_price == null){
						$('h3#pp-price').html(data.regular_price);
					}else{
						$('h3#pp-price').html("<del>$" + data.regular_price +  "</del>$" + data.sale_price);
					}
					
					$("#pp-desc").html(data.desc);
					$("#pp-photo").attr('src', 'public/media/products/' + data.product_image);
					
					
					
				}
			});

			$('#p-modal').modal('show');

			return false;
		});



		// Cart page loading 
		function cart_page(){

			$.ajax({
				url : "cart-load/",
				success : function(data){
					
					$('.cart-all').html(data);
					
				}
			});



		}

		cart_page();


		// Cart items update real time 
		$(document).on('change', 'input#cart_item_num', function(e){

			

			let quan_items = $(this).val();
			let id_items = $(this).attr('items_id');

 			$.ajax({
				url : "cart/update/" + id_items,
				data : { quan_items : quan_items },
				success : function(data){
					
					
					cart_page();
					
				}
			});



		});

		// Cart items Delete real time 
		$(document).on('click', 'a#cart_del_item', function(e){

			e.preventDefault();

			let del_id = $(this).attr('del'); 			

			$.ajax({
				url : "cart/delete/" + del_id,
				success : function(data){
					
					cart_page();
					
				}
			});

			

		});



		// Product Carrt Page pop up dynamic
		$(document).on('click','#cart-item',function(e){
			
			let pid = $(this).attr('pid');
			
			

			$.ajax({
				url : "http://localhost/fnf-dev/popup-product/" + pid,
				dataType : "json",
				success : function(data){
					
					// Data transfer to POPUP 
					
					$("input#ppidid").val(pid);
					$("#pp-name").html(data.name);

					// Sale price manage 
					if(data.sale_price == null){
						$('h3#pp-price').html(data.regular_price);
					}else{
						$('h3#pp-price').html("<del>$" + data.regular_price +  "</del>$" + data.sale_price);
					}
					
					$("#pp-desc").html(data.desc);
					$("#pp-photo").attr('src', 'http://localhost/fnf-dev/public/media/products/' + data.product_image);
					
					
					
				}
			});

			$('#p-modal').modal('show');

			return false;
		});



		

	});
})(jQuery)