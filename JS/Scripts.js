$(document).ready(function(){
    $('#Products .slick-carousel').slick({
      autoplay: true,
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 3,
      autoplaySpeed: 3000,
      speed: 1000,
      appendArrows: $('#Products'),
      prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
      nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>'
    });
  });