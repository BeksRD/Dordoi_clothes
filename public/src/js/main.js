$(document).ready(function(){


  // init FlexSlider
  // ------------------------------------------------------------------------
  $('.flexslider').flexslider({
    slideshow: true,
    directionNav: false
  });


  // Toggle search
  // ------------------------------------------------------------------------
  $(".reveal-search").on('click', function(e) {
    $(".search-wrapper").addClass("show-search");
    $(".search-form input:text").first().focus();
    e.preventDefault();
  });

  /*esc button to close search*/
  // if($('.search-wrapper').hasClass('show-search')) {
    $('body').keydown( function( event ) {
      if ( event.which == 27 ) {
        $(".search-wrapper").removeClass("show-search");
      }
    });
  // }       

  // Styled drop down
  // ------------------------------------------------------------------------
  $('.styled-drop-down').dropkick();

  // Toggle Main Nav (smaller screens)
  // ------------------------------------------------------------------------
  $(".toggle-nav").on('click', function(e) {
    $(".main-nav, .header-controls").slideToggle("slow");
    e.preventDefault();
  });


  $('#contact').on('click',function (event){
    event.preventDefault();
    let id  = $(this).attr('href'),
    top = $(id).offset().top;
    $('body,html').animate({scrollTop: top}, 1500);
  });

});
