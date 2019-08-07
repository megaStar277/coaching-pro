(function($) {
  $(window).on('load', function() {

    var hideCustomColors = function() {
      $("#customize-control-coaching_pro_theme_color1_setting").hide();
      $("#customize-control-coaching_pro_theme_color2_setting").hide();
      $("#customize-control-coaching_pro_theme_color3_setting").hide();
      $("#customize-control-coaching_pro_theme_color4_setting").hide();
      $('#customize-control-coaching_pro_theme_nav_text_color_setting').hide();
      $('#customize-control-coaching_pro_theme_nav_text_hover_color_setting').hide();
    }
    hideCustomColors();

    var showCustomColors = function() {
      $("#customize-control-coaching_pro_theme_color1_setting").show();
      $("#customize-control-coaching_pro_theme_color2_setting").show();
      $("#customize-control-coaching_pro_theme_color3_setting").show();
      $("#customize-control-coaching_pro_theme_color4_setting").show();
      $('#customize-control-coaching_pro_theme_nav_text_color_setting').show();
      $('#customize-control-coaching_pro_theme_nav_text_hover_color_setting').show();
    }

    var addActiveClass = function(elem) {
      $("label").removeClass('active');
      $(elem).addClass('active');
    }

    /* Add shaded background to selected Color Scheme radio item  */
    if ($('#coaching_pro_colorscheme_settingcustom').is(':checked')) {
      showCustomColors();
      addActiveClass('label[for="coaching_pro_colorscheme_settingcustom"]');
    } else {
      hideCustomColors();
    }

    if ($('#coaching_pro_colorscheme_setting1').is(':checked')) {
      addActiveClass('label[for="coaching_pro_colorscheme_setting1"]');
    }

    if ($('#coaching_pro_colorscheme_setting2').is(':checked')) {
      addActiveClass('label[for="coaching_pro_colorscheme_setting2"]');
    }

    if ($('#coaching_pro_colorscheme_setting3').is(':checked')) {
      addActiveClass('label[for="coaching_pro_colorscheme_setting3"]');
    }

    if ($('#coaching_pro_colorscheme_setting4').is(':checked')) {
      addActiveClass('label[for="coaching_pro_colorscheme_setting4"]');
    }

    // When 'Color Scheme' customizer control is toggled
    wp.customize('coaching_pro_colorscheme_setting', function(value) {

      value.bind(function(newval) {

        if ('1' == newval) {
          hideCustomColors();
          addActiveClass('label[for="coaching_pro_colorscheme_setting1"]');
        }
        if ('2' == newval) {
          hideCustomColors();
          addActiveClass('label[for="coaching_pro_colorscheme_setting2"]');
        }
        if ('3' == newval) {
          hideCustomColors();
          addActiveClass('label[for="coaching_pro_colorscheme_setting3"]');
        }
        if ('4' == newval) {
          hideCustomColors();
          addActiveClass('label[for="coaching_pro_colorscheme_setting4"]');
        }
        if ('custom' == newval) {
          showCustomColors();
          addActiveClass('label[for="coaching_pro_colorscheme_settingcustom"]');
        }
      });
    });

  });

})(jQuery);
