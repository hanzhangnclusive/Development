<?php
/**
 * Template Name: work.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<body>


<div class="feature">
	<?php if( function_exists('bxslider') ) bxslider('32'); ?>

</div>

<div class="wrapper">
	<div class="trigger_blank"></div>
	<div class="trigger_btn"></div>
	<div class="trigger_txt"></div>
	<div class="trigger_border"></div>
	<div class="main">
		<div class="recent_work_sub1">
				<div class="recent_work_title2">OUR WORK</div>
				<div class="recent_work_left">
						<div class="recent_work_left_top" id="recent_work_left_top_a">
							 <div class="recent_work_show_more" id="recent_work_left_top_show_more_a"></div>
							 <div class="recent_work_more" id="recent_work_left_top_more_a" style="right:-660px"><div class="recent_work_title">Title of Event</div><div class="recent_work_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sollicitudin elit et quam iaculis congue. Vivamus eleifend posuere eros ut cursus. Aliquam erat volutpat.</div></div>
						</div>
						<div class="recent_work_left_btm">
								<div class="recent_work_left_btm_sec1" id="recent_work_left_btm_sec1_a">
									 	<div class="recent_work_show_more" id="recent_work_left_btm_sec1_show_more_a"></div>
										<div class="recent_work_more" id="recent_work_left_btm_sec1_more_a" style="right:-320px"><div class="recent_work_title">Title of Event</div><div class="recent_work_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sollicitudin elit et quam iaculis congue. Vivamus eleifend posuere eros ut cursus. Aliquam erat volutpat.</div></div></div>
								<div class="recent_work_left_btm_sec2" id="recent_work_left_btm_sec2_a">
										<div class="recent_work_show_more" id="recent_work_left_btm_sec2_show_more_a"></div>
										<div class="recent_work_more" id="recent_work_left_btm_sec2_more_a" style="right:-320px"><div class="recent_work_title">Title of Event</div><div class="recent_work_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sollicitudin elit et quam iaculis congue. Vivamus eleifend posuere eros ut cursus. Aliquam erat volutpat.</div></div></div></div></div>
				<div class="recent_work_right" id="recent_work_right_a">
							<div class="recent_work_show_more" id="recent_work_right_show_more_a"></div>
							<div class="recent_work_more" id="recent_work_right_more_a" style="right:-320px"><div class="recent_work_title">Title of Event</div><div class="recent_work_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sollicitudin elit et quam iaculis congue. Vivamus eleifend posuere eros ut cursus. Aliquam erat volutpat.</div></div></div>
		<div class="recent_work_clear"></div>
		</div>
		<div class="recent_work_sub2">
			<div class="recent_work_right" id="recent_work_right_b">
						<div class="recent_work_show_more" id="recent_work_right_show_more_b"></div>
						<div class="recent_work_more" id="recent_work_right_more_b" style="right:-320px"><div class="recent_work_title">Title of Event</div><div class="recent_work_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sollicitudin elit et quam iaculis congue. Vivamus eleifend posuere eros ut cursus. Aliquam erat volutpat.</div></div></div>
				<div class="recent_work_left" style="margin:0 0 0 20px;">
						<div class="recent_work_left_top" id="recent_work_left_top_b">
							 <div class="recent_work_show_more" id="recent_work_left_top_show_more_b"></div>
							 <div class="recent_work_more" id="recent_work_left_top_more_b" style="right:-660px"><div class="recent_work_title">Title of Event</div><div class="recent_work_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sollicitudin elit et quam iaculis congue. Vivamus eleifend posuere eros ut cursus. Aliquam erat volutpat.</div></div>
						</div>
						<div class="recent_work_left_btm">
								<div class="recent_work_left_btm_sec1" id="recent_work_left_btm_sec1_b">
									 	<div class="recent_work_show_more" id="recent_work_left_btm_sec1_show_more_b"></div>
										<div class="recent_work_more" id="recent_work_left_btm_sec1_more_b" style="right:-320px"><div class="recent_work_title">Title of Event</div><div class="recent_work_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sollicitudin elit et quam iaculis congue. Vivamus eleifend posuere eros ut cursus. Aliquam erat volutpat.</div></div></div>
								<div class="recent_work_left_btm_sec2" id="recent_work_left_btm_sec2_b">
										<div class="recent_work_show_more" id="recent_work_left_btm_sec2_show_more_b"></div>
										<div class="recent_work_more" id="recent_work_left_btm_sec2_more_b" style="right:-320px"><div class="recent_work_title">Title of Event</div><div class="recent_work_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sollicitudin elit et quam iaculis congue. Vivamus eleifend posuere eros ut cursus. Aliquam erat volutpat.</div></div></div></div></div>
		<div class="recent_work_clear"></div>
		</div>
	</div>
	
	
	<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentythirteen/blocks/footer.php'); ?>
</div>



<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentythirteen/blocks/menu.php'); ?>

</div>



<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentythirteen/blocks/js.php'); ?>
</body>
