(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$(".toggle-password").click(function() {

	  $(this).toggleClass("fa-eye fa-eye-slash");
	  var input = $($(this).attr("toggle"));
	  if (input.attr("type") == "password") {
	    input.attr("type", "text");
	  } else {
	    input.attr("type", "password");
	  }
	});

})(jQuery);


//my jquery
$(document).ready(function(e){
    $(document).on("keypress",".numeric",function(e){
         return 8!=e.which&&110!=e.which&&0!=e.which&&(e.which<48||e.which>57)?!1:void 0
    });

	$('#btn').on('click', function () {
		var check = 0;
			$('.required').each(function () {
				if ($(this).val() == '') {
					check++;
				} 
			})
		if(check > 0){
			alert('Please Fill All Mandetory Fields');
			return false;
		}
	});
});


