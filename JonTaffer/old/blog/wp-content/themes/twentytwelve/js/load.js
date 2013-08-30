//Functions
$(document).ready(function () {






//Slides
$('#slides').slides({
	preload: true,
	preloadImage: 'img/loading.gif',
	play: 3000,
	pause: 2500,
	hoverPause: true,
	effect: 'fade',
	fadeSpeed: 1000
});


//Community Fancybox Scroll
$("div#makeMeScrollable").smoothDivScroll({
	mousewheelScrolling: "allDirections",
	manualContinuousScrolling: true,
});
$('.fancybox').fancybox();





})





