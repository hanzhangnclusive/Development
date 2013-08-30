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

<link rel="stylesheet" href="/wp-content/themes/twentytwelve/fonts.css" type="text/css">
<script src="/wp-content/themes/twentytwelve/js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/wp-content/themes/twentytwelve/js/blogger.min.js"></script>
 <script type="text/javascript" language="javascript" src="http://malsup.github.com/jquery.cycle.all.js"></script>
<script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline/jontaffer.json?callback=twitterCallback2&count=5"></script>
<script>$("ul#twitter_update_list").cycle({next:"ul#twitter_update_list",fx:"fade",delay:-5e3})</script>
<script src="/wp-content/themes/twentytwelve/js/slides.min.jquery.js" type="text/javascript"></script>
<script src="/wp-content/themes/twentytwelve/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="/wp-content/themes/twentytwelve/js/jquery-ui-1.8.23.custom.min.js" type="text/javascript"></script>
<script src="/wp-content/themes/twentytwelve/js/jquery.smoothdivscroll-1.3-min.js" type="text/javascript"></script>
<script src="/wp-content/themes/twentytwelve/js/jquery.mousewheel.min.js" type="text/javascript"></script>
<script src="/wp-content/themes/twentytwelve/js/jquery.fancybox.js" type="text/javascript"></script>
<script src="/wp-content/themes/twentytwelve/js/load.js" type="text/javascript"></script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<div class="logo" style="width: 150px;height: 103px;float: left;background: url(/wp-content/themes/twentytwelve/images/logo/logo.png) top center no-repeat;margin-top: 5px;"></div>
		<div class="main-navigation">
		<?php wp_nav_menu(); ?>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation" style="display:none;">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
	</header><!-- #masthead -->

    		
          
		