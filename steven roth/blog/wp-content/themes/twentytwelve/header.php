<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>

<script type="text/javascript" src="http://use.typekit.com/wdx7pwi.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<script type="text/javascript" src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
<script type="text/javascript" src="http://stevenrothmusic.com/styles/js/main/supersized.3.2.4.min.js"></script>
<script type="text/javascript" src="http://stevenrothmusic.com/styles/js/main/supersized.shutter.min.js"></script>
<script type="text/javascript" src="http://stratus.sc/stratus.js"></script>
<script>jQuery(function(e){e.supersized({slide_interval:4e3,transition_speed:1e3,transition:1,start_slide:1,slide_links:"blank",slides:[{image:"http://stevenrothmusic.com/images/bg-slider/1.jpg"},{image:"http://stevenrothmusic.com/images/bg-slider/2.jpg"},{image:"http://stevenrothmusic.com/images/bg-slider/3.jpg"}]})})</script>
<script>$(document).ready(function(){$.stratus({color:"000000",auto_play:true,randomize:false,align:"top",links:"http://soundcloud.com/StevenRoth/last-song"})})</script>
</head>

<body <?php body_class(); ?>>
	<div id="menu">
	 <div id="menu_center">
	  <div id="header">
	   <div id="header_btns">	
	    <a href="/blog/category/blog"><div id="header_btn" style="margin-top:28px;float:left;text-align:right;padding-right:10px;color:#ffffff;text-shadow: 0px -1px 0px #000000;font-style:italic;background-image: url(../images/other/menu_dots.png);background-position:left -1px;background-repeat:repeat;background-color:#999;width:170px;">Blog</div></a>
	    <a href="/photos/"><div id="header_btn" class="menu" style="margin-top:4px;float:left;text-align:right;padding-right:10px;">Photos</div></a>   
	    <a href="http://stevenroth.bandcamp.com"><div id="header_btn" class="menu" style="margin-top:4px;float:left;text-align:right;padding-right:10px;">Music</div></a>
	    <a href="/videos/"><div id="header_btn" class="menu" style="margin-top:4px;float:left;text-align:right;padding-right:10px;">Videos</div></a></div>
	   <a href="http://stevenrothmusic.com/"><div id="header_logo"></div></a>
	   <div id="header_btns">
	    <a href="/blog/category/press"><div id="header_btn" class="menu" style="margin-top:28px;float:right;text-align:left;padding-left:10px;">Press</div></a>
	    <a href="/tour/"><div id="header_btn" class="menu" style="margin-top:4px;float:right;text-align:left;padding-left:10px;">Tour</div>
	    <a href="/blog/"><div id="header_btn" class="menu" style="margin-top:4px;float:right;text-align:left;padding-left:10px;">About</div>
	    <a href="/contact/"><div id="header_btn" class="menu" style="margin-top:4px;float:right;text-align:left;padding-left:10px;">Contact</div></a></div></div>
	  <div id="social">
	   <div id="social_btn" style="width:400px;"><div id="mc_embed_signup">
	<form action="http://stevenrothstein.us2.list-manage.com/subscribe/post?u=1ae1b199b98455b45af41500a&amp;id=b6f6b1c60e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
	<div class="mc-field-group" style="float:left">
		<input type="email" value="Enter your email..." onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Enter your email...':this.value;" name="EMAIL" class="subscribe_input" id="mce-EMAIL">
	</div>
		<div id="mce-responses" style="float:left" class="clear">
			<div class="response" id="mce-error-response" style="display:none"></div>
			<div class="response" id="mce-success-response" style="display:none"></div>
		</div>	<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="subscribe_submit"></div>
	</form>
	</div>
	</div>
	   <a href="https://twitter.com/share?url=http%3A%2F%2Fstevenroth.com%2F&text=Check+Out+The+New+Website+of+@StevenRothMusic" target="_blank" data-via="StevenRothMusic" data-related="NCLUSIVEinc"><div id="social_btn" style="width:297px;margin-left:4px;" class="tweet_social">
	   <div id="social_btn_inside" style="width:202px;text-indent:10px;font-family:museo-slab,serif;font-style:italic;font-weight:100;font-size: 11px;" class="tweet_input">Check Out The New Website...</div>
	   <div id="social_btn_inside" style="width:95px;font-family:museo-slab,serif;font-style:normal;font-weight:700;font-size:15px;text-shadow: 0px -1px 0px #000000;text-align:center;" class="tweet_button">Tweet</div></div></a>
	   <a href="http://www.facebook.com/stevenrothmusic" target="_blank"><div id="social_btn" style="width:35px;margin-left:4px;" class="social_facebook"></div></a>
	   <a href="http://twitter.com/#!/StevenRothMusic" target="_blank"><div id="social_btn" style="width:35px;margin-left:4px;" class="social_twitter"></div></a>
	   <a href="http://www.youtube.com/StevenRothMusic" target="_blank"><div id="social_btn" style="width:35px;margin-left:4px;" class="social_youtube"></div></a>
	   <a href="http://soundcloud.com/StevenRoth" target="_blank"><div id="social_btn" style="width:35px;margin-left:4px;" class="social_soundcloud"></div></a>
	   <a href="http://stevenroth.bandcamp.com" target="_blank"><div id="social_btn" style="width:35px;margin-left:4px;" class="social_myspace"></div></a>
	   <a href="https://itunes.apple.com/us/album/let-it-in/id599765019" target="_blank"><div id="social_btn" style="width:100px;margin-left:4px;font-family:museo-slab,serif;font-style:normal;font-weight:700;font-size:15px;text-shadow: 0px -1px 0px #000000;text-align:center;" class="social">iTunes</div></a></div></div></div>
	

<div id="soundcloud">Loading...</div>
	
	
<div id="page" class="hfeed site"><!-- #masthead -->

	<div id="main" class="wrapper">