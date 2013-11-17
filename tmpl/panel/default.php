<?php defined('_JEXEC') or die('Restricted access'); // no direct access ?>

<?php
    include_once(JPATH_ROOT . "/modules/mod_socialslider/lib/logic.php");	
?>
<?php
$document = &JFactory::getDocument();
$document->addStyleSheet( 'modules/mod_socialslider/tmpl/panel/style.css' );
?>
	<div class="social-slider-menu <?php echo $moduleclass_sfx; ?>" style="<?php echo $params->get('left-right') ?>:<?php echo $params->get('padding-left') ?>;z-index:9999;">
		<a href="#"><span id="crew-share"></span></a>
		<div id="crew-panel">
			<div id="crew-inside-panel" style="display: none;float:<?php if ($leftRight == left){echo "left";}else{echo "right";} ?>;<?php if ($leftRight == right){echo "position:absolute;";}; ?><?php if($twitter_btn == "horizontal"){echo "width:146px";}; ?>">
				<div id="crew-panel-top-left"><div id="crew-panel-top-right"><div id="crew-panel-top"></div></div></div>
					<div id="crew-panel-left">
						<div id="crew-panel-right">
							<div id="crew-panel-inside" <?php if($twitter_btn == "horizontal"){echo "style='width:124px'";}; ?> >
							<?php if ($params->get('twitter')) : ?>
							<a style="float:left;margin-top:5px;" href="<?php echo $params->get('twitter-link'); ?>" target="_blank"><img src="modules/mod_socialslider/tmpl/panel/images/twitter.png" alt="Twitter" width="32px" height="32px" /></a>
							<?php endif; ?>
							<?php if ($params->get('facebook')) : ?>
							<a style="float:left;margin-top:5px;" href="<?php echo $params->get('facebook-link'); ?>" target="_blank"><img src="modules/mod_socialslider/tmpl/panel/images/facebook.png" alt="Facebook" width="32px" height="32px" /></a>
							<?php endif; ?>
							<?php if ($params->get('linkedin')) : ?>
							<a style="float:left;margin-top:5px;" href="<?php echo $params->get('linkedin-link'); ?>" target="_blank"><img src="modules/mod_socialslider/tmpl/panel/images/linkedin.png" alt="Linked-In" width="32px" height="32px" /></a>
							<?php endif; ?>
							<?php if ($params->get('youtube')) : ?>
							<a style="float:left;margin-top:5px;" href="<?php echo $params->get('youtube-link'); ?>" target="_blank"><img src="modules/mod_socialslider/tmpl/panel/images/youtube.png" alt="Youtube" width="32px" height="32px" /></a>
							<?php endif; ?>
							<?php if ($params->get('myspace')) : ?>
							<a style="float:left;margin-top:5px;" href="<?php echo $params->get('myspace-link'); ?>" target="_blank"><img src="modules/mod_socialslider/tmpl/panel/images/myspace.png" alt="MySpace" width="32px" height="32px" /></a>
							<?php endif; ?>
							<?php if ($params->get('digg')) : ?>
							<a style="float:left;margin-top:5px;" href="<?php echo $params->get('digg-link'); ?>" target="_blank"><img src="modules/mod_socialslider/tmpl/panel/images/digg.png" alt="Digg" width="32px" height="32px" /></a>
							<?php endif; ?>
							<?php if ($params->get('skype')) : ?>
							<a style="float:left;margin-top:5px;" href="<?php echo $params->get('skype-link'); ?>" target="_blank"><img src="modules/mod_socialslider/tmpl/panel/images/skype.png" alt="Skype" width="32px" height="32px" /></a>
							<?php endif; ?>
							<?php if ($params->get('delicious')) : ?>
							<a style="float:left;margin-top:5px;" href="<?php echo $params->get('delicious-link'); ?>" target="_blank"><img src="modules/mod_socialslider/tmpl/panel/images/delicious.png" alt="Delicious" width="32px" height="32px" /></a>
							<?php endif; ?>
							<?php if ($params->get('tumblr')) : ?>
							<a style="float:left;margin-top:5px;" href="<?php echo $params->get('tumblr-link'); ?>" target="_blank"><img src="modules/mod_socialslider/tmpl/panel/images/tumblr.png" alt="Tumblr" width="32px" height="32px" /></a>
							<?php endif; ?>
							<?php if ($params->get('orkut')) : ?>
							<a style="float:left;margin-top:5px;" href="<?php echo $params->get('orkut-link'); ?>" target="_blank"><img src="modules/mod_socialslider/tmpl/panel/images/orkut.png" alt="Orkut" width="32px" height="32px" /></a>
							<?php endif; ?>
							<?php if ($params->get('stumbleupon')) : ?>
							<a style="float:left;margin-top:5px;" href="<?php echo $params->get('stumbleupon-link'); ?>" target="_blank"><img src="modules/mod_socialslider/tmpl/panel/images/stumbleupon.png" alt="StumbleUpon" width="32px" height="32px" /></a>
							<?php endif; ?>
							<?php if ($params->get('vimeo')) : ?>
							<a style="float:left;margin-top:5px;" href="<?php echo $params->get('vimeo-link'); ?>" target="_blank"><img src="modules/mod_socialslider/tmpl/panel/images/vimeo.png" alt="Vimeo" width="32px" height="32px" /></a>
							<?php endif; ?>
							<div class="social-clear"></div>
							<?php if ($params->get('tweet-this')) : ?>
							<div style="text-align: center;padding: 5px 0;"><a href="http://twitter.com/share" class="twitter-share-button" data-count="<?php echo ($twitter_btn); ?>" data-via="<?php echo ($twittername); ?>">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div>
							<?php endif; ?>
							<div class="clear"></div>
							</div>
						</div>
					</div>
				<div id="crew-panel-bottom-left"><div id="crew-panel-bottom-right"><div id="crew-panel-bottom"></div></div></div>
				
			</div>
			
		
		</div>
	</div>