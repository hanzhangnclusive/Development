<div id="split_sections_side" style="margin-right:40px;">
	<div id="split_sections_side_title" style="background-image:url(/wp-content/themes/twentytwelve/images/titles/blog.png);background-position:center center;background-repeat:no-repeat;"></div>
	<div id="split_sections_side_box" class="blog">
		<div id="split_sections_side_box_code" ><div id="rssincl-box-488504"><div class="rssincl-content"><?php query_posts('offset=0'); if ( have_posts() ) : ?>

						
						<?php while ( have_posts() ) : the_post(); ?>
						
						<div class="rssincl-entry">
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						
						
					 	 <p class="rssincl-itemtitle"><a href="<?php echo get_permalink(); ?> " ><?php echo get_the_title(); ?> </a></p>
					 	<p class="rssincl-itemdesc"> <?php the_excerpt(); ?></p>
						<p class="rssincl-itemdate">	<?php the_time('l, F jS, Y') ?></p>
					 	</div>
						<?php endwhile; ?>
						<?php endif; // end have_posts() check ?>
						</div>
						</div>
					</div>
		<div id="split_sections_side_box_code_border"></div>
	</div>
</div>
