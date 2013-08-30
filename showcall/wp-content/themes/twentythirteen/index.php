<?php
/**
 * The main template file.
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
						<div class="recent_work_left_top" id="recent_work_left_top_a">
							 <div class="recent_work_show_more" id="recent_work_left_top_show_more_a"></div>
							 <div class="recent_work_more" id="recent_work_left_top_more_a" style="right:-660px"><div class="recent_work_title">About US</div><div class="recent_work_desc"><p>We have the equipment, people and planning experience to help make your visions a reality.</p><p>We work with you from the conceptual stage to design and plan your event. At Showcall we communicate with our clients every step of the way to ensure they are apprised of all developments. And finally, we execute your event flawlessly....every time. From designing and installing video, lighting and audio systems to planning conferences and meetings to providing advance services for political principals and celebrities...Showcall is your answer.</p></div></div>
						</div>
						<div class="recent_work_left_btm">
								<div class="recent_work_left_btm_sec1" id="recent_work_left_btm_sec1_a">
									 	<div class="recent_work_show_more" id="recent_work_left_btm_sec1_show_more_a"></div>
										<div class="recent_work_more" id="recent_work_left_btm_sec1_more_a" style="right:-320px"><div class="recent_work_title">Broadcast</div><div class="recent_work_desc"><p>Showcall’s Broadcast Division provides a range of services to the broadcast and special event industries. From turnkey design, production and execution of made for TV content to providing pooled host broadcast services, post production packages, mobile applications and webcasting. The broadcast team has been a part of some of the largest and most high profile summits and conferences in the world.</p></div></div></div>
								<div class="recent_work_left_btm_sec2" id="recent_work_left_btm_sec2_a">
										<div class="recent_work_show_more" id="recent_work_left_btm_sec2_show_more_a"></div>
										<div class="recent_work_more" id="recent_work_left_btm_sec2_more_a" style="right:-320px"><div class="recent_work_title">Broadcast</div><div class="recent_work_desc"><p>Showcall’s Broadcast Division provides a range of services to the broadcast and special event industries. From turnkey design, production and execution of made for TV content to providing pooled host broadcast services, post production packages, mobile applications and webcasting. The broadcast team has been a part of some of the largest and most high profile summits and conferences in the world.</p></div></div></div></div></div>
				<div class="recent_work_right" id="recent_work_right_a">
							<div class="recent_work_show_more" id="recent_work_right_show_more_a"></div>
							<div class="recent_work_more" id="recent_work_right_more_a" style="right:-320px"><div class="recent_work_title">Security Services</div><div class="recent_work_desc"><p>Showcall’s Security Division is easily the most experienced in the country at providing security assets and infrastructure in support of federal, state and local law enforcement agencies.  In just the past few years, Showcall has served as the General Contractor for the last (11) National Specially Secured Events, such as the past two Presidential Inaugurations, APEC, NATO, G8, G20, Nuclear Summit, the Annapolis Mid East Peace Conference and the 2012 DNC and RNC Conventions.</p><p>Our experienced security staff has provided a wide array of security services for clients, including anti-scaling fencing, magnetometers, bike rack, generators, portable lighting, golf carts, portable bathrooms, mobile delta barricades, concrete barricades, tenting, line of sight lighting countermeasures, threat assessments, development of emergency action plans and uniformed & plainclothes security forces. </p></div></div></div>
				<div class="recent_work_clear"></div>
		</div>
		
	</div>
	
		<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentythirteen/blocks/footer.php'); ?>

</div>



<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentythirteen/blocks/menu.php'); ?>

</div>






<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentythirteen/blocks/js.php'); ?>
</body>
