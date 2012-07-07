$(document).ready(function(){

  $(function(){

       $(window).scroll(function(){


         var divOffset = $('#heading').offset();

         hasNotReachedIt = true;

         if(window.scrollY > divOffset.top && hasNotReachedIt){

            $('#hidden-menu').fadeIn(300);

             console.log('you made it to me');
             hasNotReachedIt = false;

         }

         if(window.scrollY < divOffset.top){

            $('#hidden-menu').css('display','none');

             console.log('you are above me');
             hasNotReachedIt = false;

         }

      });
  });

});