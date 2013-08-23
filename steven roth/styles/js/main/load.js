//Functions
$(document).ready(function () {
	


//Instagram Fancybox Carousel
$(".demo").simpleInstagramFancybox({captionOn:true,mode:"user",accessToken:"23450620.ab103e5.52ac6afe29084b329672476b512daca0",userID:"23450620"});$(".start-demo").click(function(){$(window).scrollTop(600)});prettyPrint()

$(function(){
	var e=$("#social_inside").bxSlider({displaySlideQty:20,moveSlideQty:1,auto:true,pager:false})
});


	
//Fancybox
$("a[rel=videos]").fancybox({
   'width'       : 938,
   'height'      : 558,
   'padding'     : 1,
   'scrolling'   : 'no',
   'autoScale'	 : false,
   'type'		 : 'iframe',
   'overlayOpacity' : 0.7,
   'overlayColor': '#000'
  });
$("a[rel=flyers]").fancybox({
   'padding'     : 1,
   'overlayOpacity' : 0.7,
   'overlayColor': '#000'
  });


$('#slider').nivoSlider({
    playTime: 4000, // How long each slide will show
    controlNav: false,
	prevText: '&lsaquo;', // Prev directionNav text
	nextText: '&rsaquo;' // Next directionNav text
});

//Supersized
 jQuery(function($){
 $.supersized({
  // Functionality
   slide_interval: 4000,	
   transition_speed: 1000,
   transition    : 1,
   start_slide   : 1,
  // Components							
   slide_links	 : 'blank',
   slides 		 : [ {image : '../images/bg-slider/1.jpg'},
   					 {image : '../images/bg-slider/2.jpg'},
					 {image : '../images/bg-slider/3.jpg'} ]				
  });
});



//Video Slider
$(function(){
  var slider = $('#video_slider').bxSlider({
    controls: false,
    displaySlideQty: 3,
    moveSlideQty: 3,
    pager: false
  });
  $('#go-prev').click(function(){
    slider.goToPreviousSlide();
    return false;
  });
  $('#go-next').click(function(){
    slider.goToNextSlide();
    return false;
  });
});



//Flyer Slider
$(function(){
  var slider = $('#flyer_slider').bxSlider({
    controls: false,
    displaySlideQty: 2,
    moveSlideQty: 1,
    pager: false
  });
  $('#go-prev2').click(function(){
    slider.goToPreviousSlide();
    return false;
  });
  $('#go-next2').click(function(){
    slider.goToNextSlide();
    return false;
  });
});



//Store Slider
$(function(){
  var slider = $('#store_slider').bxSlider({
    controls: false,
    displaySlideQty: 2,
    moveSlideQty: 1,
    pager: false
  });
  $('#go-prev3').click(function(){
    slider.goToPreviousSlide();
    return false;
  });
  $('#go-next3').click(function(){
    slider.goToNextSlide();
    return false;
  });
});





//Stratus
$.stratus({
    color: "000000",
    auto_play: true,
    randomize: false,
	  align: 'top',
    links: [
      { url: 'http://soundcloud.com/StevenRoth/last-song' } ]
});



});