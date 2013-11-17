<?php defined('_JEXEC') or die('Restricted access'); // no direct access ?>
<?php if ($params->get('jquery')) : ?>
<?php
$document = &JFactory::getDocument();
$document->addScript( 'http://code.jquery.com/jquery-latest.min.js' );
$document->addScriptDeclaration("jQuery.noConflict();");
?>
<?php endif; ?>
<script type="text/javascript">

var name                    = "#social-slider-menu";
var sidebar_top_limit       = <?php echo ($topLimit); ?>;
var sidebar_top_margin      = <?php echo ($topMargin); ?>;
var sidebar_slide_duration  = <?php echo ($duration); ?>;


jQuery(window).scroll(function() {
 
	offset = jQuery(document).scrollTop() + sidebar_top_margin;
	 
	if(offset < sidebar_top_limit)
	    offset = sidebar_top_limit;
	 
	jQuery(name).animate({top:offset},{duration:sidebar_slide_duration,queue:false});
	
});
</script>