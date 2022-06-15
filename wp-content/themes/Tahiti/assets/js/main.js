let $ = jQuery;

$(document).ready(function(){
  $('.slider').slick({
    dots: false, 
    infinite: true,
    speed: 500,
    autoplay: true,
    arrows: false,
    draggable: false,
    adaptiveHeight: true
  });
});