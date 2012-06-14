$(document).ready(function(){

$('.events-title a').mouseover(function(){

	$('.arrow').addClass('blue');


});

$('.events-title a').mouseout(function(){

	$('.arrow').removeClass('blue');


});

$('ul#filters li a').click(function(){

  $('ul#filters li a').removeClass('active');    
   $(this).addClass('active');



});

});