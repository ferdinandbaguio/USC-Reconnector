// SLIDESHOW SCRIPT  START--------------------------
$("#slideshow > div:gt(0)").hide();
setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(0)
    .next()
    .fadeIn(2000)
    .end()
    .appendTo('#slideshow');
}, 5000);
// Map SCRIPT -------------------------->
