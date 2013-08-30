//Functions
$(document).ready(function () {
x=0;
y=0;



//Menu Contact Form
$('.contact_form').ajaxForm(function() { }); 
$('.menu_box_submit').click(function(){
  $('.contact_form').animate({	"height": "0px" }, 0 );
  $('.contact_form_thank').delay(100).animate({	"opacity": "1" }, 200 );
})


//On Load
$('.feature_txt').animate({ "opacity": "1","margin-left": "-500px" }, 1000 );
$('.feature_btn').delay(200).animate({ "opacity": "1","margin-left": "-500px" }, 1000 );


//Fancybox
$('.fancybox-contact').fancybox({
	minWidth : '700px',
	fitToView : 'false',
	autoResize : 'false'
});
$('.fancybox-team').fancybox({
	minWidth : '900px',
	fitToView : 'false',
	autoResize : 'false'
});


//Home - Team - Blayne
$("#team_blayne").mouseover(function() {
			$('#team_blayne_overlay').animate({ "opacity": "1" }, 300 );
});
$("#team_blayne").mouseleave(function() {
			$('#team_blayne_overlay').animate({ "opacity": "0" }, 300 );
});


//Home - Team - Ajay
$("#team_ajay").mouseover(function() {
			$('#team_ajay_overlay').animate({ "opacity": "1" }, 300 );
});
$("#team_ajay").mouseleave(function() {
			$('#team_ajay_overlay').animate({ "opacity": "0" }, 300 );
});


//Home - Team - Steve
$("#team_steve").mouseover(function() {
			$('#team_steve_overlay').animate({ "opacity": "1" }, 300 );
});
$("#team_steve").mouseleave(function() {
			$('#team_steve_overlay').animate({ "opacity": "0" }, 300 );
});


//Home - Team - Mary
$("#team_mary").mouseover(function() {
			$('#team_mary_overlay').animate({ "opacity": "1" }, 300 );
});
$("#team_mary").mouseleave(function() {
			$('#team_mary_overlay').animate({ "opacity": "0" }, 300 );
});


//Home - Team - Mark
$("#team_mark").mouseover(function() {
			$('#team_mark_overlay').animate({ "opacity": "1" }, 300 );
});
$("#team_mark").mouseleave(function() {
			$('#team_mark_overlay').animate({ "opacity": "0" }, 300 );
});


//Recent Work - Main A
$("#recent_work_left_top_a").mouseover(function() {
			$('#recent_work_left_top_show_more_a').animate({ "bottom": "-100px" }, 300 );
			$('#recent_work_left_top_more_a').delay(300).animate({ "right": "0px" }, 300 );
});
$("#recent_work_left_top_a").mouseleave(function() {
			$('#recent_work_left_top_more_a').animate({ "right": "-660px" }, 300 );
			$('#recent_work_left_top_show_more_a').delay(300).animate({ "bottom": "0" }, 300 );
});


//Recent Work - Main B
$("#recent_work_left_top_b").mouseover(function() {
			$('#recent_work_left_top_show_more_b').animate({ "bottom": "-100px" }, 300 );
			$('#recent_work_left_top_more_b').delay(300).animate({ "right": "0px" }, 300 );
});
$("#recent_work_left_top_b").mouseleave(function() {
			$('#recent_work_left_top_more_b').animate({ "right": "-660px" }, 300 );
			$('#recent_work_left_top_show_more_b').delay(300).animate({ "bottom": "0" }, 300 );
});


//Recent Work - Right A
$("#recent_work_right_a").mouseover(function() {
			$('#recent_work_right_show_more_a').animate({ "bottom": "-100px" }, 300 );
			$('#recent_work_right_more_a').delay(300).animate({ "right": "0px" }, 300 );
});
$("#recent_work_right_a").mouseleave(function() {
			$('#recent_work_right_more_a').animate({ "right": "-320px" }, 300 );
			$('#recent_work_right_show_more_a').delay(300).animate({ "bottom": "0" }, 300 );
});


//Recent Work - Right B
$("#recent_work_right_b").mouseover(function() {
			$('#recent_work_right_show_more_b').animate({ "bottom": "-100px" }, 300 );
			$('#recent_work_right_more_b').delay(300).animate({ "right": "0px" }, 300 );
});
$("#recent_work_right_b").mouseleave(function() {
			$('#recent_work_right_more_b').animate({ "right": "-320px" }, 300 );
			$('#recent_work_right_show_more_b').delay(300).animate({ "bottom": "0" }, 300 );
});


//Recent Work - Sub 1 A
$("#recent_work_left_btm_sec1_a").mouseover(function() {
			$('#recent_work_left_btm_sec1_show_more_a').animate({ "bottom": "-100px" }, 300 );
			$('#recent_work_left_btm_sec1_more_a').delay(300).animate({ "right": "0px" }, 300 );
});
$("#recent_work_left_btm_sec1_a").mouseleave(function() {
			$('#recent_work_left_btm_sec1_more_a').animate({ "right": "-320px" }, 300 );
			$('#recent_work_left_btm_sec1_show_more_a').delay(300).animate({ "bottom": "0" }, 300 );
});


//Recent Work - Sub 1 B
$("#recent_work_left_btm_sec1_b").mouseover(function() {
			$('#recent_work_left_btm_sec1_show_more_b').animate({ "bottom": "-100px" }, 300 );
			$('#recent_work_left_btm_sec1_more_b').delay(300).animate({ "right": "0px" }, 300 );
});
$("#recent_work_left_btm_sec1_b").mouseleave(function() {
			$('#recent_work_left_btm_sec1_more_b').animate({ "right": "-320px" }, 300 );
			$('#recent_work_left_btm_sec1_show_more_b').delay(300).animate({ "bottom": "0" }, 300 );
});


//Recent Work - Sub 2 A
$("#recent_work_left_btm_sec2_a").mouseover(function() {
			$('#recent_work_left_btm_sec2_show_more_a').animate({ "bottom": "-100px" }, 300 );
			$('#recent_work_left_btm_sec2_more_a').delay(300).animate({ "right": "0px" }, 300 );
});
$("#recent_work_left_btm_sec2_a").mouseleave(function() {
			$('#recent_work_left_btm_sec2_more_a').animate({ "right": "-320px" }, 300 );
			$('#recent_work_left_btm_sec2_show_more_a').delay(300).animate({ "bottom": "0" }, 300 );
});

//Recent Work - Sub 2 B
$("#recent_work_left_btm_sec2_b").mouseover(function() {
			$('#recent_work_left_btm_sec2_show_more_b').animate({ "bottom": "-100px" }, 300 );
			$('#recent_work_left_btm_sec2_more_b').delay(300).animate({ "right": "0px" }, 300 );
});
$("#recent_work_left_btm_sec2_b").mouseleave(function() {
			$('#recent_work_left_btm_sec2_more_b').animate({ "right": "-320px" }, 300 );
			$('#recent_work_left_btm_sec2_show_more_b').delay(300).animate({ "bottom": "0" }, 300 );
});



//BX Slider
$('.bxslider').bxSlider({
  pagerCustom: '#bx-pager',
  auto: true,
  mode: 'fade',
  easing: 'linear'
});


//Waypoint Feature - Disappear
$('.trigger_btn').waypoint(function(event, direction) {
   if (direction === 'down') {
      $('.feature_btn').animate({
	    opacity: '1'
	  }, 200, function() {
	    // Animation complete.
	  });
   }
   else {
   $('.feature_btn').animate({		
	    opacity: '0'
	  }, 200, function() {
	    // Animation complete.
	  });
   }
});
$('.trigger_txt').waypoint(function(event, direction) {
   if (direction === 'down') {
      $('.feature_txt').animate({
	    opacity: '1'
	  }, 200, function() {
	    // Animation complete.
	  });
   }
   else {
   $('.feature_txt').animate({		
	    opacity: '0'
	  }, 200, function() {
	    // Animation complete.
	  });
   }
});
$('.trigger_border').waypoint(function(event, direction) {
   if (direction === 'down') {
	 $('#main_menu').removeClass("menu_active").addClass("menu");
   }
   else {
	 $('#main_menu').removeClass("menu").addClass("menu_active");
   }
});


//Waypoint Feature - Reappear
$('.trigger_blank').waypoint(function(event, direction) {
   if (direction === 'down') {
      $('.feature_btn').animate({
	    opacity: '0'
	  }, 200, function() {
	    // Animation complete.
	  });
   }
   else {
   $('.feature_btn').animate({		
	    opacity: '1'
	  }, 200, function() {
	    // Animation complete.
	  });
   }
});
$('.trigger_btn').waypoint(function(event, direction) {
   if (direction === 'down') {
      $('.feature_txt').animate({
	    opacity: '0'
	  }, 200, function() {
	    // Animation complete.
	  });
   }
   else {
   $('.feature_txt').animate({		
	    opacity: '1'
	  }, 200, function() {
	    // Animation complete.
	  });
   }
});
$('.trigger_txt').waypoint(function(event, direction) {
   if (direction === 'down') {
	 $('#main_menu').removeClass("menu").addClass("menu_active");
   }
   else {
	 $('#main_menu').removeClass("menu_active").addClass("menu");
   }
});









});

