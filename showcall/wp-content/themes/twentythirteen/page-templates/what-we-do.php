<?php
/**
 * Template Name: what-we-do.
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
		<div class="resources">
			<div class="resources_title">What We Do.</div>
			<div class="resources_desc">We work with you from the conceptual stage to design and plan your event. At showcall we communicate with our clients every step of the way to ensure they are apprised of all developments. And finally, we execute your event flawlessly....every time. From designing and installing video, lighting and audio systems to planning conferences and meetings to providing advance services for political principals and celebrities...showcall is your answer.</div>
		</div>
		
	</div>
	
	
	<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentythirteen/blocks/footer.php'); ?>
</div>



<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentythirteen/blocks/menu.php'); ?>

</div>





<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentythirteen/blocks/js.php'); ?>
</body>