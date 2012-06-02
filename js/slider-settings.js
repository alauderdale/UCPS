$(function(){ 
 $('#slider3') 
  .anythingSlider() 
  /* this "custom" code is the equivalent of the base caption functions */ 
  .anythingSliderFx({ 
   inFx: { 
    '.caption-top'    : { top: 0, opacity: 1, duration: 400 }, 
    '.caption-right'  : { right: 0, opacity: 1, duration: 400 }, 
    '.caption-bottom' : { bottom: 0, opacity: 1, duration: 400 }, 
    '.caption-left'   : { left: 0, opacity: 1, duration: 400 } 
   }, 
   outFx: { 
    '.caption-top'    : { top: -50, opacity: 0, duration: 350 }, 
    '.caption-right'  : { right: -150, opacity: 0, duration: 350 }, 
    '.caption-bottom' : { bottom: -50, opacity: 0, duration: 350 }, 
    '.caption-left'   : { left: -150, opacity: 0, duration: 350 } 
   } 
  }) 
  /* add a close button (x) to the caption */ 
  .find('div[class*=caption]') 
    .css({ position: 'absolute' }) 
    .prepend('<span class="close"></span>') 
    .find('.close').click(function(){ 
     var cap = $(this).parent(), 
       ani = { bottom : -50 }; // bottom 
      if (cap.is('.caption-top')) { ani = { top: -50 }; } 
      if (cap.is('.caption-left')) { ani = { left: -150 }; } 
      if (cap.is('.caption-right')) { ani = { right: -150 }; } 
      cap.animate(ani, 400, function(){ cap.hide(); } ); 
    }); 
});