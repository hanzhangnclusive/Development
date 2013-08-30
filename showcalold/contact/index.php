<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Contact - Showcall</title>
<meta name="author" content="NCLUSIVE, inc., Los Angeles, CA" />
<meta name="copyright" content="Copyright &amp;copy; 2012 NCLUSIVE, inc., Los Angeles, CA. All Rights Reserved" />
<meta name="publisher" content="NCLUSIVE, inc., Los Angeles, CA" />
<meta name="organization" content="NCLUSIVE, inc., Los Angeles, CA" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="icon" href="/images/other/favicon.png" type="image/x-icon" />
<link rel="stylesheet" href="/css/design.css" type="text/css" />
<link rel="stylesheet" href="/css/fonts.css" type="text/css" />
<style>
.map{display:none;opacity:0;}
</style>
</head>

<body>


<div class="feature">
	<div class="feature_txt">We have the equipment,</br>people &amp; planning experience</br>to help make your</br><span class="feature_txt_focus">VISIONS</span> A <span class="feature_txt_focus">REALITY</span>.</div>
	<div class="feature_btn"><div class="feature_btn_inside">Learn More</div></div>
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
							<div class="contact_left_map"><iframe src="/maps/us.php"></iframe></div>
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
	
	
	<?php include($_SERVER['DOCUMENT_ROOT'].'/blocks/footer.php'); ?>
</div>



<?php include($_SERVER['DOCUMENT_ROOT'].'/blocks/menu.php'); ?>

</div>



<?php include($_SERVER['DOCUMENT_ROOT'].'/blocks/js.php'); ?>
</body>
</html>