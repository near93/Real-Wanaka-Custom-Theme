$(document).ready(function(){
  $(".epl-shortcode-listing-feature").addClass("bxSlider"); 
  
  $('.bxSlider').bxSlider({
    minSlides: 2,
    maxSlides: 3,
    moveSlides: 2,
    slideWidth: 330,
    slideMargin: 30,
    pager: false,
    nextText: '<i class="fa fa-caret-right"></i>',
    prevText: '<i class="fa fa-caret-left"></i>'
  });

  $(".show-sm .epl-shortcode-listing-feature").removeClass("bxSlider");
});

$("#property-search-btn").click(function(){
	$(this).toggleClass("active");
	$(".search-property").animate({width: 'toggle'}, 300);
});

$(".close-search").click(function(){
	$(".search-property").animate({width: 'toggle'}, 300);
});

