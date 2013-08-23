<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<!-- 
	</div>#main .wrapper
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<div class="wp_footer">

<div class="wp_left">
<div class="wp_title">Follow Jon on Facebook</div>
<div class="fb-like fb_edge_widget_with_comment fb_iframe_widget" data-href="https://www.facebook.com/OfficialJonTaffer" data-send="true" data-width="450" data-show-faces="false" data-font="verdana" data-colorscheme="dark" fb-xfbml-state="rendered"><span style="height: 24px; width: 450px; "><iframe id="f16a297d04" name="f2953ef17" scrolling="no" style="border: none; overflow: hidden; height: 24px; width: 450px; " title="Like this content on Facebook." class="fb_ltr" src="http://www.facebook.com/plugins/like.php?api_key=225507450809781&amp;locale=en_US&amp;sdk=joey&amp;channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D18%23cb%3Df18c5142f8%26origin%3Dhttp%253A%252F%252Fjontaffer.com%252Ff8a4394%26domain%3Djontaffer.com%26relation%3Dparent.parent&amp;href=https%3A%2F%2Fwww.facebook.com%2FOfficialJonTaffer&amp;node_type=link&amp;width=450&amp;font=verdana&amp;layout=standard&amp;colorscheme=dark&amp;show_faces=false&amp;send=true&amp;extended_social_context=false"></iframe></span></div>
<!----
<div class="wp_twitt_container" style="width:650px;height:90px;">
<div class="wp_twit_bird" style="width: 50px;height: 80px;padding: 10px 0 0;background:url(http://dev.jontaffer.com.vhost.zerolag.com/images/social/twitter-logo.png) no-repeat center center;float:left;"></div>
<div id="wp_twitter" style="width: 600px;height: 140px;z-index: 2;position: relative;padding: 10px 0 0;float:left;">
   <div id="wp_twitter_code">
     <div id="wp_twitter-wrap" style="width:600px;text-align:left;font-family: Verdana, Geneva, sans-serif;font-weight:normal;text-decoration:none;font-style:italic;color:#fff;display:inline;">
     <ul id="wp_twitter_update_list" style="width:600px;font-size:14px;line-height:24px;text-align:left;list-style-type:none;">
     <li>Loading Tweets..</li>
     </ul></div></div>
   <div id="wp_twitter_line"></div>
   <div id="wp_twitter_overlay"></div></div>
</div>---->
</div>

<div class="wp_right">
   <a href="/partners/"><div class="wp_menu">Partners</div></a>
   <a href="/products/"><div class="wp_menu">Products</div></a>
   <a href="/blog/"><div class="wp_menu">Blog</div></a>
   <a href="/contact/"><div class="wp_menu">Contact</div></a>
   </div>
<div class="wp_right" style="margin-right: 6px;">
   <a href="/"><div class="wp_menu">Home</div></a>
   <a href="/schedule/"><div class="wp_menu">Schedule</div></a>
   <a href="/media/"><div class="wp_menu">Media</div></a>
   <a href="/about/" target="_blank"><div class="wp_menu">About</div></a>
</div></div>
<div class="wp_credits">
<div class="wp_copyright">© 2013 Jon Taffer. All Rights Reserved.</div>
 <a href="http://nclusiveinc.com" target="_blank"><div class="wp_site_credits" style="color: #000;">An NCLUSIVE Digital Partner</div></a></div>
<?php wp_footer(); ?>
</body>
</html>