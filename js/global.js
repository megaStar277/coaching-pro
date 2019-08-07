// any global scripts needed for theme goes here
;
(function($) {
  'use strict';

  $("body").addClass(" js");

  // add a class to the links with image so we can remove border styling
  $("a > img").parent().addClass("link-has-image");

})(jQuery);
