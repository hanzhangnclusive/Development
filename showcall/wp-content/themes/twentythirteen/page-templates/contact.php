<?php
/**
 * Template Name: contact.
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

		<div class="contact">
			<div class="contact_title">WE'D LOVE TO HEAR FROM YOU...</div>
			<div class="contact_middle">
					<div class="contact_left">
							<div class="contact_left_map"><iframe src="/wp-content/themes/twentythirteen/maps/us.php"></iframe></div>
							<div class="contact_left_title">Washington, D.C.</div>
							<div class="contact_left_desc">19566 Amaranth Dr</br>Germantown, MD 20874</br>+1 202.443.7000</br>+1 240.235.4236</div></div>
					<div class="contact_right">
						<p>Fill out below, hit submit and we'll get back to you shortly.</p>
						<form action="/forms/menu_contact.php" method="post" class="contact_form">
								<div class="menu_form_title">Full Name</div> 
								<input type="text" name="name" class="menu_contact_form_input">
								<div class="menu_form_title">Email</div> 
								<input type="text" name="email" class="menu_contact_form_input">
								<div class="menu_form_title">Phone</div> 
								<input type="text" name="phone" class="menu_contact_form_input">
								<div class="menu_form_title">Comments</div> 
								<textarea name="message" rows="6" cols="25" class="menu_contact_form_para"></textarea><br />
								<input type="submit" value="Submit" class="menu_box_submit">
						</form>
						<p><span class="contact_form_thank" style="opacity:0">Your message has been sent...</span></p>
					</div></div>
		</div>


	</div>
	
	
	<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentythirteen/blocks/footer.php'); ?>
</div>



<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentythirteen/blocks/menu.php'); ?>

</div>



<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/twentythirteen/blocks/js.php'); ?>
</body>