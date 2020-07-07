(function($){
	$(document).ready(function(){


		CKEDITOR.replace('text_editor');



		// Delete button setup 
		$("button#delete_button_set").click(function(){

			let con = confirm('Are you sure ?');

			if (con) {
				return true;
			}else {
				return false;
			}

		});


		// Logout System 
		$("#logout-btn").click(function(){

			$('#logout-form').submit();
			return false;
		});



		

	});
})(jQuery)