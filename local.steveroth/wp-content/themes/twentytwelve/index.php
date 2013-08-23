<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

 ?>

<body onload="MM_preloadImages('/wp-content/themes/twentytwelve/images/social/facebook_down.jpg','/wp-content/themes/twentytwelve/images/social/twitter_down.jpg','/wp-content/themes/twentytwelve/images/social/youtube_down.jpg','/wp-content/themes/twentytwelve/images/social/soundcloud_down.jpg','/wp-content/themes/twentytwelve/images/social/myspace_down.jpg')">
<link rel="stylesheet" href="/wp-content/themes/twentytwelve/styles/css/main/design.css" type="text/css" />
<div id="wrapper">
<div id="content">
<div id="space"></div>
<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentytwelve/blocks/home-slider.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentytwelve/blocks/home-video.php'); ?>


<div id="tours">


<div id="split_sections" style="margin-top:19px;">
<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentytwelve/blocks/home-facebook.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentytwelve/blocks/home-twitter.php'); ?>
</div>


<div id="split_sections" style="margin-top:48px;">
<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentytwelve/blocks/home-blog.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentytwelve/blocks/home-store.php'); ?>
</div>

</div>
<div id="title1" style="background-image:url(/wp-content/themes/twentytwelve/images/titles/instagram.png);background-position:center center;background-repeat:no-repeat;"></div>
<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentytwelve/blocks/instagram.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentytwelve/blocks/footer.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentytwelve/blocks/header.php'); ?>

<script type="text/javascript">var _gaq=_gaq||[];_gaq.push(["_setAccount","UA-11237348-29"]);_gaq.push(["_trackPageview"]);(function(){var e=document.createElement("script");e.type="text/javascript";e.async=true;e.src=("https:"==document.location.protocol?"https://ssl":"http://www")+".google-analytics.com/ga.js";var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)})()</script>
<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentytwelve/blocks/js.php'); ?>


</body>
