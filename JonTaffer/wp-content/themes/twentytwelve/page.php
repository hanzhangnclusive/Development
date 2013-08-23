<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<link rel="stylesheet" href="/wp-content/themes/twentytwelve/css/design.css" type="text/css" />
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=225507450809781";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="container">

<div class="slider_wrapper">
	<div id="slider" class="nivoSlider">
		<img src="/wp-content/themes/twentytwelve/images/slider/1.jpg" alt="" />
		<img src="/wp-content/themes/twentytwelve/images/slider/1.jpg" alt="" />
		<!--<a href="http://www.ontherockslasvegas.com" target="_blank<"><img src="images/slider/4.jpg" alt="" /></a>-->
	</div>
</div>



<div class="content">
	
	<div class="content_left">
		<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentytwelve/blocks/middle.php'); ?>
	</div>
	<div class="content_right">
		<!--<a href="http://www.ontherockslasvegas.com/" target="_blank"><div class="content_right_box" style="background: url(images/ontherocks.jpg);"></div></a>-->
		<div class="content_right_box" style="height:330px;background: url(/wp-content/themes/twentytwelve/images/connectwithjohn.jpg);">
			<a href="https://youtube.com/jontaffer" target="_blank"><div class="social_youtube" style="background-image:url(/wp-content/themes/twentytwelve/images/social/youtube-logo.png);"></div></a>
			<a href="https://facebook.com/OfficialJonTaffer" target="_blank"><div class="social_facebook" style="background-image:url(/wp-content/themes/twentytwelve/images/social/facebook-logo.png);"></div></a>
			<a href="https://twitter.com/jontaffer" target="_blank"> <div class="social_twitter" style="background-image:url(/wp-content/themes/twentytwelve/images/social/twitter-logo.png);"></div></a>
		</div>
	</div>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentytwelve/blocks/home-shop.php'); ?>
	<div class="clear"></div>
	
</div>

	</div>


<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentytwelve/blocks/js.php'); ?>
</body>
<?php get_footer(); ?>