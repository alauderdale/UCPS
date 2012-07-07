$(document).ready(function() {
  $("li.back-to-top a").click(function() {
    $("html, body").animate({ scrollTop:0 });
    return false;
   });
});