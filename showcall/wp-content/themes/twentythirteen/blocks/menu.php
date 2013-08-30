<div class="menu" id="main_menu">
	<div class="menu_middle">
			<a href="/"><div class="menu_logo">Plan, Communicate, Execute.</div></a>
			<div class="menu_btns"><!---<a href="/what-we-do/">WHAT WE DO.</a><a href="/how-we-do-it/">HOW WE DO IT.</a><a href="/work/">OUR WORK.</a><a href="/team/">OUR TEAM.</a><a href="/resources/">RESOURCES.</a><a href="/contact/">CONTACT.</a> --> <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
</div>
			<div class="menu_social">
				<a class="fancybox-contact" href="#menu_contact"><div class="menu_social_btns"><img src="/wp-content/themes/twentythirteen/images/social/menu_email.png"></div></a>
				<a href="http://twitter.com/showcall/" target="_blank"><div class="menu_social_btns"><img src="/wp-content/themes/twentythirteen/images/social/menu_twitter.png"></div></a>
				<a href="http://www.facebook.com/pages/Showcall/134942529884320" target="_blank"><div class="menu_social_btns" style="marign-right:0"><img src="/wp-content/themes/twentythirteen/images/social/menu_facebook.png"></div></a>
			</div>
</div>
</div>


<div class="contact_expand" id="menu_contact" style="display:none;">
	<h1>SAY HELLO!</h1>
	<p>Fill out below, hit submit and we'll get back to you shortly.</p>
	<form action="/wp-content/themes/twentythirteen/forms/menu_contact.php" method="post" class="contact_form">
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
</div>