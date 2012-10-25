$(function(){
 var animateDue = 600;

  slides = $('div.tabs div');

  slides.mouseover(function(){
    slides.animate({width:'105px'},animateDue);
    $(this).animate({
    	width:'490px'},animateDue);
    $('div.tabs figure').animate({
    	opacity:0
    });
  }).mouseout(function(){
    slides.animate({width:'158px'},animateDue);
        $('div.tabs figure').animate({
    	opacity:1
    });
  });
})
