<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<title>Showcall - Plan. Communicate. Execute.</title>
<meta name="author" content="NCLUSIVE, inc., Los Angeles, CA" />
<meta name="copyright" content="Copyright &amp;copy; 2012 NCLUSIVE, inc., Los Angeles, CA. All Rights Reserved" />
<meta name="publisher" content="NCLUSIVE, inc., Los Angeles, CA" />
<meta name="organization" content="NCLUSIVE, inc., Los Angeles, CA" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="icon" href="/wp-content/themes/twentythirteen/images/other/favicon.png" type="image/x-icon" />
<link rel="stylesheet" href="/wp-content/themes/twentythirteen/css/design.css" type="text/css" />
<link rel="stylesheet" href="/wp-content/themes/twentythirteen/css/fonts.css" type="text/css" />
</head>

