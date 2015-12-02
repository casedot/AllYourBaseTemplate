jQuery(document).foundation();

jQuery(document).ready(function( $ ){  
  $('.main-slider').slick({
    autoplay: true,
    autoplaySpeed: 6500,
    dots: true,
	  infinite: true,
    draggable: false,
	  speed: 420,
	  slidesToShow: 6,
    slidesToScroll: 6,
    cssEase: 'linear',
	  adaptiveHeight: false,
    responsive: [
    {
      breakpoint: 1440,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 640,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        adaptiveHeight: true,       
      }
    }]
  });
  
    
});