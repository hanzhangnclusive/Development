<?php
/**
 * Template Name: how-we-do.
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
			<div class="resources_title">HOW WE DO IT.</div>
			<div class="resources_desc" style="padding-bottom:30px">Showcall's stable of producers, project managers, designers, programmers and engineers are some of the brightest and best in the industry. With the flexibility to expand or contract as necessary, showcall's team can be customized for your specific needs.</div>
			<div class="resources_desc">Bring showcall into your event process at the onset. We can play an integral role in your communications process as early as the conceptual stages, by working with you to design your event to effectively communicate your message. From venue considerations to technical elements to program design, showcall can best guide you to a successful end.</div>
		</div>
		
	</div>
	
	
	<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentythirteen/blocks/footer.php'); ?>
</div>



<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentythirteen/blocks/menu.php'); ?>

</div>





<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentythirteen/blocks/js.php'); ?>
</body>