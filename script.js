$(function(){
 var animateDue      = 600;

  slides = $('div.tabs div');

  slides.mouseover(function(){
    slides.animate({width:'105px'},animateDue);
    $(this).animate({width:'423px'},animateDue);
  }).mouseout(function(){
    slides.animate({width:'158px'},animateDue);
  });


})
