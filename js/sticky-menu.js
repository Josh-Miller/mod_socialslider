
var name                    = "#social-slider-menu";
var sidebar_top_limit       = 13;
var sidebar_top_margin      = 120;
var sidebar_slide_duration  = 600;


jQuery(window).scroll(function() {
 
	offset = jQuery(document).scrollTop() + sidebar_top_margin;
	 
	if(offset < sidebar_top_limit)
	    offset = sidebar_top_limit;
	 
	jQuery(name).animate({top:offset},{duration:sidebar_slide_duration,queue:false});
	
});
jQuery.noConflict();
jQuery(document).ready(function(){
		jQuery("#crew-share").toggle(
			function() {
				jQuery("#crew-inside-panel").show("slide", { direction: "right" }, 500);
				jQuery(this).animate({left: "-=103"}, 500);
				jQuery(this).addClass("social_active");
			},
			function() {
				jQuery("#crew-inside-panel").hide("slide", { direction: "right" }, 1000);
				jQuery(this).animate({left: "+=103"}, 1000);
				jQuery(this).removeClass("social_active");
			}
			
			
			
		);





	
	
});
