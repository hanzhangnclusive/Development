
<div class="wrapper">
		<div class="wrapper_top">
					<div class="wrapper_button_header" style="word-spacing: 5px;letter-spacing: -1px;">THE LATEST FROM JON</div>
					<div class="wrapper_button" id="button_3">NEWS</div>
					<div class="wrapper_button" id="button_2">GALLERY</div>
					<div class="wrapper_button_active" id="button_1">VIDEO</div>
		</div>
		<div class="wrapper_btm">
					<div class="wrapper_content" id="content_1">
     
    <?php echo get_new_royalslider(1); ?>
           
                    </div>
                    <div class="wrapper_content" id="content_2" style="width:0px;opacity:0">
					<?php echo do_shortcode('[nggallery id=1]'); ?>
                    </div>
					
                    <div class="wrapper_content" id="content_3" style="width:0px;opacity:0">         
                    	<div class="news">
						 <a href="http://blog.jontaffer.com/bar-rescue-host-bar-owner-fight-it-out/"><div class="news_img" style="background: url(/wp-content/themes/twentytwelve/images/blog/2-6.jpg);"></div></a>
						 <div class="news_right">
					 	 <div class="news_title">‘Bar Rescue’ host, bar owner fight it out</div>
					 	 <div class="news_text">Taffer and Zanzibar Billiards Club owner Ami Benari had to be physically restrained so that the shoving match they got into didn’t escalate into a knock-down, drag-out fist fight.<a href="http://blog.jontaffer.com/bar-rescue-host-bar-owner-fight-it-out/" style="text-decoration:underline;color: #c84b27;">Read More</a></div></div></div>

                    	<?php query_posts('offset=0'); if ( have_posts() ) : ?>

						
						<?php while ( have_posts() ) : the_post(); ?>
						
						<div class="news">
						 <a href="http://blog.jontaffer.com/bar-rescue-host-bar-owner-fight-it-out/">
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						<div class="news_img" style="background: url('<?php echo $image[0]; ?>') no-repeat center center;
							-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;"></div></a>
						 <div class="news_right">
					 	 <div class="news_title"><?php echo get_the_title(); ?> </div>
					 	 <div class="news_text"><?php the_excerpt(); ?><a href="<?php echo get_permalink(); ?> " style="text-decoration:underline;color: #c84b27;">Read More</a></div></div></div>
						<?php endwhile; ?>
						<?php endif; // end have_posts() check ?>


					</div>
		</div>
</div>	

