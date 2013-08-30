<?php
/**
 * Template Name: showcall.
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
		<div class="words">
				<div class="words_title">
					<div id="bx-pager">
					  <a data-slide-index="0" href=""><img src="/wp-content/themes/twentythirteen/images/words/plan.png" /> PLAN.</a>
					  <a data-slide-index="1" href=""><img src="/wp-content/themes/twentythirteen/images/words/communication.png" /> COMMUNICATE.</a>
					  <a data-slide-index="2" href=""><img src="/wp-content/themes/twentythirteen/images/words/execute.png" /> EXECUTE.</a>
					</div>
				</div>
				<div class="words_seperator">•••</div>
				<div class="words_desc">
					<ul class="bxslider">
					  <li>We work with you from the concept stage to the design phase, and help you plan your event to perfection.</li>
					  <li>Using project management software and broad communication networks, we communicate with our clients throughout every step of the planning process</li>
					  <li>With logistics that include sets, sound, lighting, audio, video, and even special effects, Showcall produces high profile, large scale events with ease.</li>
					</ul>
				</div>
		</div>
		<div class="recent_work">
				<div class="recent_work_left">
						<div class="recent_work_left_advance" id="recent_work_left_top_a">
							 <div class="recent_work_show_more" id="recent_work_left_top_show_more_a"></div>
							 <div class="recent_work_more" id="recent_work_left_top_more_a" style="right:-660px"><div class="recent_work_title">Advance</div><div class="recent_work_desc"><p>Concert, Corporate, Political Advance. From venue selection to local vendor acquisition and site build out, we plan every movement and every minute of our principals time, be they Government Officials, Political Candidates, Corporate Executives or Celebrities.</p></div></div>
						</div>
						<div class="recent_work_left_btm">
								<div class="recent_work_left_btm_event" id="recent_work_left_btm_sec1_a">
									 	<div class="recent_work_show_more" id="recent_work_left_btm_sec1_show_more_a"></div>
										<div class="recent_work_more" id="recent_work_left_btm_sec1_more_a" style="right:-320px"><div class="recent_work_title">Event Production</div><div class="recent_work_desc"><p>Meetings, Conferences, Awards shows, Concerts, Fundraisers and Broadcast Events all require precise timing and formatting to achieve maximum ROI. Rely on our vast, multi-faceted experience to create smooth message-direct event experiences...turn key.</p></div></div></div>
								<div class="recent_work_left_btm_meeting" id="recent_work_left_btm_sec2_a">
										<div class="recent_work_show_more" id="recent_work_left_btm_sec2_show_more_a"></div>
										<div class="recent_work_more" id="recent_work_left_btm_sec2_more_a" style="right:-320px"><div class="recent_work_title">Meeting Planning</div><div class="recent_work_desc"></div></div></div></div></div>
				<div class="recent_work_right" id="recent_work_right_a">
							<div class="recent_work_show_more" id="recent_work_right_show_more_a"></div>
							<div class="recent_work_more" id="recent_work_right_more_a" style="right:-320px"><div class="recent_work_title">Graphic Design & Planning</div><div class="recent_work_desc"></div></div></div>
				<div class="recent_work_clear"></div>
		</div>
		
	</div>
	
		<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentythirteen/blocks/footer.php'); ?>

</div>



<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentythirteen/blocks/menu.php'); ?>

</div>






<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentythirteen/blocks/js.php'); ?>
</body>
