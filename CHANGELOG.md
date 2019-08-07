# Coaching Pro Theme Changelog

## [1.3.4]  
- Fixed bug where opacity on overlay of front page images could not be set to 0.

## [1.3.3]  
- Fixed bug where featured image still appears on single post or page even after removing the featured image.

## [1.3.2]
- Fixed bug where frontpage background overlay opacity was not set to default on install.

## [1.3.1]  
- Changed border-bottom style on links from dotted to solid.

## [1.3.0]  
- Changed max width of interior pages to 1280px from 1440px.
- Updated footer widget 2 area to format multiple widgets in that section.
- Added option to remove decorative arrows on the home page via Customizer General Settings.
- Added a new class center-mobile to force an image to be centered on screen when width is 414px or less. Add the class to any image that is already using the alignright or alignleft class.

To remove left border on home page welcome enter this in the customizer Additional CSS:

```
.home .front-page-welcome:before {
    border: 0!important;
}
```

To remove borders on home page testimonial section enter this in the customizer Additional CSS:

```
.home .front-page-testimonials {
  border: 0;
}
```

To include a light grey background color with the testimonials:

```
.home .front-page-testimonials {
  border: 0;
  background-color: #e7e7e7;
}
```

## [1.2.0] - Jan 22, 2018
- Theme renamed to Coaching Pro 

## [1.1.0] - Oct 3, 2017
- Changed Customizer Header Settings to General Settings, added checkbox to that section for using the minified stylesheet. Default is not to use the minified stylesheets (home.min.css and style.min.css)
- Adjusted wrap max-width for easier readability on full page widget content.
- Changed max-height for the home welcome widget.
- Removed sourcemap from style.css and home.css.

## [1.0.0] - July 19, 2017
* Initial Release.

## [0.9.8]
- Finished moving color schemes into separate scss files, code for output of color in demo and updated output.php.

## [0.9.6]
- Styling adjustments and rename several functions in theme-setup.php with `coaching_pro_` prefix.

## [0.9.5]
- Code Review Submission
