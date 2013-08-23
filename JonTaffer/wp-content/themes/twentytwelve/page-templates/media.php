<?php
/**
 * Template Name: Media
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
<div class="main_images" style="height: 434px;background: url(/wp-content/themes/twentytwelve/images/slider/media.jpg);">    
</div>
<div class="content" style="height:auto;">
<div class="media"> 
  <div class="media_top">
    <a href="/media1/" class="media_button_active" style="text-decoration:none;" id="mbtn_1">PHOTOS</a>
     <a href="/video/"class="media_button" id="mbtn_2" style="margin-left:15px; text-decoration:none;">VIDEOS</a></div>
  
  <div class="media_content" id="mcontent_1">
   <?php echo do_shortcode('[nggallery id=1]'); ?>
  </div>

   

</div>





</div>
<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentytwelve/blocks/js.php'); ?>


<div class="clear"></div>
  </div>
 <script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11237348-41']);
  _gaq.push(['_setDomainName', 'jontaffer.com']);
  _gaq.push(['_trackPageview']);
      (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>

<?php get_footer(); ?>