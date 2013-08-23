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
<div class="content" style="height:800px;">
<div class="media"> 
  <div class="media_top">
  <a href="/media/" class="media_button" style="text-decoration:none;" id="mbtn_1">PHOTOS</a>
     <a href="/video/"class="media_button_active" id="mbtn_2" style="margin-left:15px; text-decoration:none;">VIDEOS</a></div>
  
  <div class="media_content" id="mcontent_1">
    <a class="fancybox_video"  rel="video_gallery" href="http://www.youtube.com/watch?v=AOEhrYxktQc?autoplay=1"><div class="media_gallery_video"><img src="/wp-content/themes/twentytwelve/images/video/1.png"/><p class="media_gallery_video_title">Meet&nbsp; Jon&nbsp; Taffer</p></div></a>
    <a class="fancybox_video"  rel="video_gallery" href="http://www.youtube.com/watch?v=fUGKe2klsEU?autoplay=1"><div class="media_gallery_video"><img src="/wp-content/themes/twentytwelve/images/video/2.png"/><p class="media_gallery_video_title">Taffer&nbsp; Tips</p></div></a>
    <a class="fancybox_video"  rel="video_gallery" href="http://www.youtube.com/watch?v=1cPzKj-bokc?autoplay=1"><div class="media_gallery_video"><img src="/wp-content/themes/twentytwelve/images/video/3.png"/><p class="media_gallery_video_title">Jon&nbsp; Taffer&nbsp; Is&nbsp; The&nbsp; Best&nbsp; In&nbsp; The&nbsp; Business</p></div></a>
    <a class="fancybox_video"  rel="video_gallery" href="http://www.youtube.com/watch?v=hmN4efJsB0M?autoplay=1"><div class="media_gallery_video"><img src="/wp-content/themes/twentytwelve/images/video/4.png"/><p class="media_gallery_video_title">2012&nbsp; Nightclub&nbsp; Bar&nbsp; Show&nbsp; with&nbsp; Jon&nbsp; Taffer</p></div></a>
    <a class="fancybox_video"  rel="video_gallery" href="http://www.youtube.com/watch?v=B1nqVW2DH5U?autoplay=1"><div class="media_gallery_video"><img src="/wp-content/themes/twentytwelve/images/video/5.png"/><p class="media_gallery_video_title">Jon&nbsp; on&nbsp; MSNBC</p></div></a>
    <a class="fancybox_video"  rel="video_gallery" href="http://www.youtube.com/watch?v=x05hIBr_39M?autoplay=1"><div class="media_gallery_video"><img src="/wp-content/themes/twentytwelve/images/video/6.png"/><p class="media_gallery_video_title">Hotmixology&nbsp; Lounge</p></div></a>
    <a class="fancybox_video"  rel="video_gallery" href="http://www.youtube.com/watch?v=KLT-Svht1m8?autoplay=1"><div class="media_gallery_video"><img src="/wp-content/themes/twentytwelve/images/video/7.png"/><p class="media_gallery_video_title">Las&nbsp; Vegas&nbsp; Backstage&nbsp; Now</p></div></a>
    <a class="fancybox_video"  rel="video_gallery" href="http://www.youtube.com/watch?v=eC3RarFvPZk?autoplay=1"><div class="media_gallery_video"><img src="/wp-content/themes/twentytwelve/images/video/8.png"/><p class="media_gallery_video_title">Taffer&nbsp; Takes&nbsp; Over</p></div></a>
    <a class="fancybox_video"  rel="video_gallery" href="http://www.youtube.com/watch?v=NbioccGEJ0E?autoplay=1"><div class="media_gallery_video"><img src="/wp-content/themes/twentytwelve/images/video/9.png"/><p class="media_gallery_video_title">Meet Jon&nbsp; Taffer</p></div></a>
  </div>

    <div class="media_content" id="mcontent_2" style="width:0px;opacity:0">
   
    <?php echo do_shortcode('[nggallery id=2]'); ?>

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