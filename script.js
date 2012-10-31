function validateText(str,len){
  return str.length >= len;
}

function validateEmail(str){
  var emailPattern = /^[a-z0-9+_%.-]+@(?:[a-z0-9-]+\.)+[a-z]{2,6}$/i ;

  return emailPattern.test(str);
}
$(function(){
var animateDue = 600;
slides = $('div.tabs div');
slides.last().css({'padding-right':'200px'});

slides.mouseover(function(){ 
    $(this).addClass('burn');
    slides.animate({width:'105px'},animateDue); 
    $(this).animate({ 
        width:'490px'},animateDue);
    $('.burn figure').animate({
        opacity:0
    });
}).mouseout(function(){
    slides.animate({width:'158px'},animateDue);
    $(this).removeClass('burn');
    $('div.tabs figure').animate({
        opacity:1
    });

});
//================= script for project->left menu
  var train = $('.gallery-pro > div'),
      lists = $('div.left-top ul li');

  go2slide = function(n){
    train.animate({
      opacity:0
    },2000,'ease-in-out');
    
    train.eq(n).animate({
      opacity:1
    },2000,'ease-in-out');
  }

  lists.click(function(){
    go2slide1(0);
    go2slide( $(this).index() );
    $(this).removeClass('active');
    $(this).addClass('active');
  });
//==================================== for project -> slide show
  var train1 = $('div.slide1 div.train1'),
      lists1 = $('div.slide1 div.train1 > div'),
      currentSlide = 0;
    
    go2slide1 = function(n1){
    if(n1>lists1.length-1) n1=0;
    if(n1<0) n1 = lists1.length-1;
    train1.animate({
      left:-648*n1
    },500,'ease-in-out');
    currentSlide=n1;
  }

  $('div.slide1 .right-pic').click(function(){
    go2slide1(currentSlide+1);
  });

  $('div.slide1 .left-pic').click(function(){
    go2slide1(currentSlide-1);
  });
//==================================== contact page
$('#contact-form').submit(function(){
    var target, err = false;
    alert(1);
    target = $('#name');
    if( validateText(target.val(),3) ){
      target.removeClass('err').addClass('ok');
    }else{
      target.removeClass('ok').addClass('err');
      err = true;
    }

    target = $('#company');
    if( validateText(target.val(),3) ){
      target.removeClass('err').addClass('ok');
    }else{
      target.removeClass('ok').addClass('err');
      err = true;
    }

    target = $('#Email');
    if( validateEmail(target.val()) ){
      target.removeClass('err').addClass('ok');
    }else{
      target.removeClass('ok').addClass('err');
      err = true;
    }

    target = $('#txt');
    if( validateText(target.val(),10) ){
      target.removeClass('err').addClass('ok');
    }else{
      target.removeClass('ok').addClass('err');
      err = true;
    }

    return !err;

  });
});