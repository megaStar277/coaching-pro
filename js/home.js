;
(function($) {
  'use strict';
  // any scripts needed for home page goes here
  //
  if ($(document).scrollTop() > 0) {
    $('.custom-header-background').addClass('light');
  }

  // Add opacity class to site header
  $(document).on('scroll', function() {

    if ($(document).scrollTop() > 0) {
      $('.custom-header-background').addClass('light');

    } else {
      $('.custom-header-background').removeClass('light');
    }

  });

  var imageLinks = [
    '.coaching-pro-video a.widget_sp_image-image-link'

  ];

  $.each(imageLinks, function(index, value) {
    $(value).attr({
      'data-featherlight': 'iframe',
      'data-featherlight-iframe-width': '960',
      'data-featherlight-iframe-height': '540'
    });
  });

})(jQuery);
