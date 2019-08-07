(function($) {

  jQuery(document).ready(function($) {

    wp.customize('coaching_pro_theme_color1_setting', function(value) {
      value.bind(function(final_value) {
        final_value = final_value ? final_value : '#000';
        var new_css = '';
        new_css = '#scheme_custom_original_colors .color-block.block-1 .block { background-color: ' + final_value + ' !important; }';

        if ($(document).find('#customizer-preview-custom-color1-css').length) {
          $(document).find('#customizer-preview-custom-color1-css').remove();
        }

        $(document).find('head').append($('<style id="customizer-preview-custom-color1-css">' + new_css + '</style>'));
      });
    });

    wp.customize('coaching_pro_theme_color2_setting', function(value) {
      value.bind(function(final_value) {
        final_value = final_value ? final_value : '#000';
        var new_css = '';
        new_css = '#scheme_custom_original_colors .color-block.block-2 .block { background-color: ' + final_value + ' !important; }';

        if ($(document).find('#customizer-preview-custom-color2-css').length) {
          $(document).find('#customizer-preview-custom-color2-css').remove();
        }

        $(document).find('head').append($('<style id="customizer-preview-custom-color2-css">' + new_css + '</style>'));
      });
    });

    wp.customize('coaching_pro_theme_color3_setting', function(value) {
      value.bind(function(final_value) {
        final_value = final_value ? final_value : '#000';
        var new_css = '';
        new_css = '#scheme_custom_original_colors .color-block.block-3 .block { background-color: ' + final_value + ' !important; }';

        if ($(document).find('#customizer-preview-custom-color3-css').length) {
          $(document).find('#customizer-preview-custom-color3-css').remove();
        }

        $(document).find('head').append($('<style id="customizer-preview-custom-color3-css">' + new_css + '</style>'));
      });
    });

    wp.customize('coaching_pro_theme_color4_setting', function(value) {
      value.bind(function(final_value) {
        final_value = final_value ? final_value : '#000';
        var new_css = '';
        new_css = '#scheme_custom_original_colors .color-block.block-4 .block { background-color: ' + final_value + ' !important; }';

        if ($(document).find('#customizer-preview-custom-color4-css').length) {
          $(document).find('#customizer-preview-custom-color4-css').remove();
        }

        $(document).find('head').append($('<style id="customizer-preview-custom-color4-css">' + new_css + '</style>'));
      });
    });

  });

})(jQuery);
