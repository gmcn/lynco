( function($) {

  $('.bxslider').bxSlider({
    controls: false,
  });

  $('.servicegallery').bxSlider({
    pagerCustom: '#bx-pager',
  });

  /**
   * Match Height (Including Safari onload fix)
   */
  function startMatchHeight() {
    $('.matchheight').matchHeight();
    $('.featureheight').matchHeight();
    $('.servicesheight').matchHeight();
    $('.projectheight').matchHeight();
    $('.content_wrapper').matchHeight();
  }
  window.onload = startMatchHeight;

  $(document).ready(function() {
		$(".fancybox").fancybox();
	});

} ) (jQuery);

window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#1583c6"
    },
    "button": {
      "background": "#143243"
    }
  },
  "content": {
    "href": "/privacy-policy"
  }
})});

/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
