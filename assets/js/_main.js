/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can 
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

// Use this variable to set up the common and page specific functions. If you 
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
      // JavaScript to be fired on all pages
    }
  },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page
    }
  },
  // About us page, note the change from about-us to about_us.
  about_us: {
    init: function() {
      // JavaScript to be fired on the about us page
    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);
//$(".pageheader").fitVids();
})(jQuery); // Fully reference jQuery after this point.


//********** Scroll Direction Check *************//
var felcsoki=0;
var lecsoki=0;
var mousewheelevt = (/Firefox/i.test(navigator.userAgent)) ? "DOMMouseScroll" : "mousewheel"; //FF doesn't recognize mousewheel as of FF3.x
$(document).bind(mousewheelevt, function(e) {
        var evt = window.event || e; //equalize event object     
        evt = evt.originalEvent ? evt.originalEvent : evt; //convert to originalEvent if possible               
        var delta = evt.detail ? evt.detail*(-40) : evt.wheelDelta; //check for detail first, because it is used by Opera and FF
        if(delta > 0)
            {
            //console.log('Felfele');
            if (felcsoki++ >= 4 ) {
              lecsoki=0;
              $('.banner').addClass('ison');
            }
            }
        else
            {
            //console.log('Lefele');
            if (lecsoki++ > 2 ) {
              felcsoki=0;
              $('.banner').removeClass('ison');
            }
            }
    }
);

/************* Main header Fixing ***********/
// var htop = $('.banner').offset().top - parseFloat($('.banner').css('marginTop').replace(/auto/, 0));
var htop=0;
$(window).scroll(function (event) {
  var y = $(this).scrollTop();
  if (y-40 >= htop) {
    $('.banner').addClass('scrolled');
  } else {
    $('.banner').removeClass('scrolled');
  }
  //$('body').attr('data-offset' ,  $('.banner').height() );
});
/************* End of fixing ***********/




$(document).ready(function(){


  $('.mapinfo__close').click(function(e){
    e.preventDefault();
    $('.mapblock__content').removeClass('is_show');
    $('.map-overlay').removeClass('is_show');
  });

  // var waypoint = new Waypoint({
  //   element: document.getElementById('reference-17'),
  //   offset: '75%',
  //   handler: function(direction) {
  //     console.log('Scrolled '+ direction + ' to waypoint!');
  //     $(this.element).addClass('is-inview');
  //   }
  // });

  $('a:not([href*=#])').click(function(e) {
    //e.preventDefault();
    $('.body').removeClass('animated');
    $('.body').removeClass('fadeIn');
    $('.body').addClass('fade');
  });

});




