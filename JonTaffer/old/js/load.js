$(document).ready(function () {
	
	
	//Btn 1
	$('#button_1').click(function(){
		$("#button_1").removeClass("wrapper_button").addClass("wrapper_button_active");	
		$("#button_2").removeClass("wrapper_button_active").addClass("wrapper_button");
		$("#button_3").removeClass("wrapper_button_active").addClass("wrapper_button");
		$('#content_1').animate({ width: "700px" }, 0 );
		$('#content_1').delay(200).animate({ opacity: "1" }, 400 );
	  $('#content_2').animate({ opacity: "0" }, 400 );
	  $('#content_2').delay(200).animate({ width: "0" }, 0 );   
	  $('#content_3').animate({ opacity: "0" }, 400 );
	  $('#content_3').delay(200).animate({ width: "0" }, 0 );
	});


	//Btn 2
	$('#button_2').click(function(){
	  $("#button_1").removeClass("wrapper_button_active").addClass("wrapper_button");
	  $("#button_2").removeClass("wrapper_button").addClass("wrapper_button_active");
	  $("#button_3").removeClass("wrapper_button_active").addClass("wrapper_button");
	  $('#content_1').animate({ opacity: "0" }, 400 );
	  $('#content_1').delay(200).animate({ width: "0" }, 0 );   
	  $('#content_2').animate({ width: "700px" }, 0 );
	  $('#content_2').delay(200).animate({ opacity: "1" }, 400 );
	  $('#content_3').animate({ opacity: "0" }, 400 );
	  $('#content_3').delay(200).animate({ width: "0" }, 0 );
	});


	//Btn 3
	$('#button_3').click(function(){
		$("#button_1").removeClass("wrapper_button_active").addClass("wrapper_button");
		$("#button_2").removeClass("wrapper_button_active").addClass("wrapper_button");
		$("#button_3").removeClass("wrapper_button").addClass("wrapper_button_active");
	  $('#content_1').animate({ opacity: "0" }, 400 );
	  $('#content_1').delay(200).animate({ width: "0" }, 0 );   
	  $('#content_2').animate({ opacity: "0" }, 400 );
	  $('#content_2').delay(200).animate({ width: "0" }, 0 );
	  $('#content_3').animate({ width: "700px" }, 0 );
	  $('#content_3').delay(200).animate({ opacity: "1" }, 400 );
	});





 //Media Section
$('#mbtn_1').click(function(){
	$("#mbtn_1").removeClass("media_button").addClass("media_button_active");	
	$("#mbtn_2").removeClass("media_button_active").addClass("media_button");
	$('#mcontent_1').animate({ width: "955px" }, 0 );
	$('#mcontent_1').delay(200).animate({ opacity: "1" }, 400 );
	$('#mcontent_2').animate({ opacity: "0" }, 400 );
	$('#mcontent_2').animate({ width: "0" }, 400 );
	$('#mcontent_2').delay(200).animate({ opacity: "0" }, 0 ); 
});

//Media Section
$('#mbtn_2').click(function(){
	$("#mbtn_1").removeClass("media_button_active").addClass("media_button");	
	$("#mbtn_2").removeClass("media_button").addClass("media_button_active");
	$('#mcontent_1').animate({ opacity: "0" }, 400 );
	$('#mcontent_1').animate({ width: "0" }, 400 );
	$('#mcontent_1').delay(200).animate({ width: "0" }, 0 );   
	$('#mcontent_2').animate({ width: "955px" }, 0 );
	$('#mcontent_2').delay(200).animate({ opacity: "1" }, 400 );
 });

//Fancybox
$(".fancybox").fancybox();

$(".fancybox-effects-a").fancybox({
    helpers: {
        title: {
            type: "outside"
        },
        overlay: {
            speedOut: 0
        }
    }
});
$(".fancybox-buttons").fancybox({
    openEffect: "none",
    closeEffect: "none",
    prevEffect: "none",
    nextEffect: "none",
    closeBtn: false,
    helpers: {
        title: {
            type: "inside"
        },
        buttons: {}
    },
    afterLoad: function () {
        this.title = "Image " + (this.index + 1) + " of " + this.group.length + (this.title ? " - " + this.title : "")
    }
});
$(".fancybox-thumbs").fancybox({
    prevEffect: "none",
    nextEffect: "none",
    closeBtn: false,
    arrows: false,
    nextClick: true,
    helpers: {
        thumbs: {
            width: 50,
            height: 50
        }
    }
});
$(".fancybox-media").attr("rel", "media-gallery").fancybox({
    openEffect: "none",
    closeEffect: "none",
    prevEffect: "none",
    nextEffect: "none",
    arrows: false,
    helpers: {
        media: {},
        buttons: {}
    }
}) 
 



$('#ad_close').toggle(
function()
{
	$('.ad_slider_background').animate({
		marginRight:-180
	}, 500);
},
function()
{
	$('.ad_slider_background').animate({
		marginRight:0 //340
	 }, 500);
});







 //Play Video
$('#video_play').click(function(){
  $('#video_play').animate({ "opacity": "0" }, 400 );
  $('#video_play').delay(400).animate({ "width": "0px" }, 400 );
  $('#video_code').animate({ "opacity": "1" }, 400 );
	$('#video_code').find("iframe").attr("src","http://www.youtube.com/embed/gGCvmCEO5TQ?HD=1;rel=0;showinfo=0;controls=1&autoplay=1");		
});


$(".fancybox_video").click(function() {
    $.fancybox({
       'padding'       : 0,
        'autoScale'     : true,
        'transitionIn'  : 'none',
        'transitionOut' : 'none',
        'href'          : this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
		'height'		: 450,
        'type'          : 'swf',
        'swf'           : {
        'wmode'             : 'transparent',
        'allowfullscreen'   : 'true'
        }
    });
    return false;
});


$('#slider').nivoSlider({
        effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
        slices: 15, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed: 1000, // Slide transition speed
        pauseTime: 3000, // How long each slide will show
        startSlide: 0, // Set starting Slide (0 index)
        directionNav: false, // Next & Prev navigation
        directionNavHide: false, // Only show on hover
        controlNav: true, // 1,2,3... navigation
        controlNavThumbs: false, // Use thumbnails for Control Nav
        controlNavThumbsFromRel: false, // Use image rel for thumbs
        controlNavThumbsSearch: '.jpg', // Replace this with...
        controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
        keyboardNav: true, // Use left & right arrows
        pauseOnHover: true, // Stop animation while hovering
        manualAdvance: false, // Force manual transitions
        captionOpacity: 0.8, // Universal caption opacity
        prevText: 'Prev', // Prev directionNav text
        nextText: 'Next', // Next directionNav text
        randomStart: true, // Start on a random slide
});





});





