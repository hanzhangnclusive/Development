<?php
/**
 * Template Name: Photo
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Photos - Steven Roth</title>
<meta name="author" content="NCLUSIVE, inc., Los Angeles, CA" />
<meta name="copyright" content="Copyright &amp;copy; 2011 NCLUSIVE, inc., Los Angeles, CA. All Rights Reserved" />
<meta name="publisher" content="NCLUSIVE, inc., Los Angeles, CA" />
<meta name="organization" content="NCLUSIVE, inc., Los Angeles, CA" />
<meta name="keywords" content="steven roth, stephen roth, steven roth band, stephen roth band, rock and roll band la, la rock and roll band, red stone hall, redstone hall" />
<meta name="description" content="Latest news, upcoming tour dates, music videos, downloads and more..." />
<meta name="robots" content="index, follow" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="icon" href="/wp-content/themes/twentytwelve/images/other/favicon.png" type="image/x-icon" />
<link rel="stylesheet" href="/wp-content/themes/twentytwelve/styles/css/main/design.css" type="text/css" />
</head>

<body onload="MM_preloadImages('/wp-content/themes/twentytwelve/images/social/facebook_down.jpg','//wp-content/themes/twentytwelveimages/social/twitter_down.jpg','/wp-content/themes/twentytwelve/images/social/youtube_down.jpg','/wp-content/themes/twentytwelve/images/social/soundcloud_down.jpg','/wp-content/themes/twentytwelve/images/social/myspace_down.jpg')">
<div id="wrapper">
 <div id="content">
  <div id="space"></div>
  <div id="content_title" style="background-image:url(/wp-content/themes/twentytwelve/images/titles/sub-page/photos.png);background-position:left left;background-repeat:no-repeat;"></div>
  <div id="content_space">
  
  <div id="sub_photos">
 
<?php echo do_shortcode('[nggallery id=1]'); ?>
</div>
  
  </div>
<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentytwelve/blocks/footer.php'); ?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentytwelve/blocks/header.php'); ?>


<script type="text/javascript">var _gaq=_gaq||[];_gaq.push(["_setAccount","UA-11237348-29"]);_gaq.push(["_trackPageview"]);(function(){var e=document.createElement("script");e.type="text/javascript";e.async=true;e.src=("https:"==document.location.protocol?"https://ssl":"http://www")+".google-analytics.com/ga.js";var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)})()</script>
<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentytwelve/blocks/js.php'); ?>
</body>
</html>
