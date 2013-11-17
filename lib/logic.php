<?php defined('_JEXEC') or die('Restricted access'); // no direct access ?>
<?php if ($params->get('jquery')) : ?>
<?php
$document = &JFactory::getDocument();
$document->addScript( 'http://code.jquery.com/jquery-latest.min.js' );
$document->addScriptDeclaration("jQuery.noConflict();");
?>
<?php endif; ?>

<?php
$document = &JFactory::getDocument();
$document->addScript( 'http://code.jquery.com/ui/1.8.23/jquery-ui.min.js' );
?>
<script type="text/javascript">

var name                    = ".social-slider-menu";
var sidebar_top_limit       = <?php echo ($topLimit); ?>;
var sidebar_top_margin      = <?php echo ($topMargin); ?>;
var sidebar_slide_duration  = <?php echo ($duration); ?>;


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
				jQuery("#crew-inside-panel").show("slide", { direction: "<?php echo ($leftRight); ?>" }, 500);
				jQuery(this).animate({left: "<?php if ($leftRight == "left"){ echo "+"; }else{ echo "-"; } ?>=<?php if ($digg_btn == "DiggWide"){echo "165";}elseif($twitter_btn == "horizontal"){echo "165";}else{echo "103";} ?>"}, 500);
				jQuery(this).addClass("social_active");
			},
			function() {
				jQuery("#crew-inside-panel").hide("slide", { direction: "<?php echo ($leftRight); ?>" }, 1000);
				jQuery(this).animate({left: "<?php if ($leftRight == "left"){ echo "-"; }else{ echo "+"; } ?>=<?php if ($digg_btn == "DiggWide"){echo "165";}elseif($twitter_btn == "horizontal"){echo "165";}else{echo "103";} ?>"}, 1000);
				jQuery(this).removeClass("social_active");
			}
		);
});


</script>