<?php
/**
 * The Headerhome for our theme.
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
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>

<script>
function resize() {
    //get element

    var height = document.getElementById('successpost').style.height;
    
    //transform element from string to integer

    height = height.replace("px", "");
    height =+height;
    console.log(height);
    //change height
    var n = height
    height = n + 410 + 'px';
    if ( height > 1630)
    {
		alert('Reach Max Height');
	};
    

    document.getElementById('successpost').style.height = height
	
	
	}
   
</script>


<script>
	jQuery(function(){
jQuery(".outborder .post a").append("<div class='gallery_overlay'></div><div class='gallery_zoom'></div>");


//Gallery Hover
jQuery(".outborder .post a").hover(
  function () {
  	jQuery(this).find('.gallery_overlay, .gallery_zoom').animate({ 'opacity': '1' }, 500 ); 
  },
  function () {
  	jQuery(this).find('.gallery_overlay').animate({ 'opacity': '0' }, 500 ); 
  	jQuery(this).find('.gallery_zoom').animate({ 'opacity': '0.0' }, 500 ); 
  }
);
});
</script>


</head>

<body <?php body_class(); ?>>

<div class="sub_header gradient"><div class="middle">
	<a href="https://clients.mindbodyonline.com/ASP/home.asp?studioid=22285" target="blank" class=""><div class="sign_up">Sign Up Now</div></a>
	<?php mailchimpSF_signup_form(); ?>

	
	<div class="social" id="social_last"><a target="blank" href="http://www.yelp.com/biz/cave-crossfit-los-angeles"><img src="/wp-content/themes/cave-crossfit/images/header/yelp.png"></a></div>
	<div class="social"><a target="blank" href="http://www.youtube.com/user/CaveCrossFit"><img src="/wp-content/themes/cave-crossfit/images/header/youtube.png"></a></div>
	<div class="social"><a target="blank" href="https://twitter.com/CaveCrossFit"><img src="/wp-content/themes/cave-crossfit/images/header/twitter.png"></a></div>
	<div class="social"><a target="blank" href="https://www.facebook.com/CaveCrossFit"><img src="/wp-content/themes/cave-crossfit/images/header/facebook.png"></a></div>
	<div class="social"><a id="reeboklink" href="http://www.shareasale.com/r.cfm?b=326744&amp;u=601927&amp;m=34288&amp;urllink=&amp;afftrack=" target="_blank">
		 <img id='reebok' src="/wp-content/themes/cave-crossfit/images/reebok-crossfit.png" alt="CrossFit Journal: The Performance-Based Lifestyle Resource" />
	</a></div>
	<div class="clear"></div>
</div></div>	

<div class="fancybox-hidden" style="display:none">
<div id="login" style="">
<div id="signupform"> <?php echo do_shortcode( '[insert_ajaxcontact id=6515]' ) ?></div></div>
</div>

<div class="header"><div class="middle">
	<a href="/"><div class="logo"></div></a>
	<div class="right">
		<div class="menu"><?php wp_nav_menu( $args ); ?></div>
		<div class="sub_menu"><a href="/get-started/the-cave-process/" class="transition" id="the-cave-process">The Cave Process</a><span>//</span><a href="/get-started/membership-policies/" class="transition" id="membership-policies">Membership Policies</a><span>//</span><a href="/get-started/sign-up-and-pricing/" class="transition" id="sign-up-and-pricing">SIGN UP AND PRICING</a><span>//</span><a href="/get-started/faqs/" class="transition" id="faqs">FAQ's</a></div>
	</div>
	<div class="clear"></div>
</div></div>	

	
	
