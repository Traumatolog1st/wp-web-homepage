jQuery(document).ready(function(){
	jQuery(".burger").click(function(){
		if (jQuery('.nav').css('display') == 'none') {
			// jQuery('.nav').css('opacity','1');
			// jQuery('.nav').fadeIn(300).css('display','block');
			jQuery('.nav').css('display','block');
		}else{
			// jQuery('.nav').css('opacity','0');
			// jQuery('.nav').fadeOut(300).css('display','none');
			jQuery('.nav').css('display','none');
		}
		// $(".menu").fadeIn();
	});
});