jQuery(document).foundation();

jQuery(document).ready(function(){
  jQuery('.main-slider').slick({
    autoplay: true,
    autoplaySpeed: 6500,
    dots: false,
	  infinite: true,
    draggable: false,
	  speed: 420,
	  slidesToShow: 1,
    fade: true,
    cssEase: 'linear',
	  adaptiveHeight: true
  });
});