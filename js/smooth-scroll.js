jQuery(document).ready(function ($) {

    /* De-Bouncer script: pause resize calculations until last resize event is finished */
	/* http://www.hnldesign.nl/work/code/debouncing-events-with-jquery/ */
	var deBouncer = function($,cf,of, interval){
		var debounce = function (func, threshold, execAsap) {
			var timeout;
			return function debounced () {
				var obj = this, args = arguments;
				function delayed () {
					if (!execAsap)
						func.apply(obj, args);
					timeout = null;
				}
				if (timeout)
					clearTimeout(timeout);
				else if (execAsap)
					func.apply(obj, args);
				timeout = setTimeout(delayed, threshold || interval);
			};
		};
		jQuery.fn[cf] = function(fn){  return fn ? this.bind(of, debounce(fn)) : this.trigger(cf); };
	};

	// Register DeBouncing functions
	// deBouncer(jQuery,'new eventname', 'original event', timeout);
	// Note: keep the jQuery namespace in mind, don't overwrite existing functions!
	deBouncer(jQuery,'smartresize', 'resize', 50);
    deBouncer(jQuery,'smartscroll', 'scroll', 50);

	/**
     * Adds smooth scrolling functionality to the site.
     * Supports URL hashes.
     *
     */

    // taken from: https://css-tricks.com/snippets/jquery/smooth-scrolling/
    // Select all links with hashes
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
        // On-page links
        if ( location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
				// Get header height
				var headerheight = getSiteHeaderHeight();
				var targetoffset = target.offset().top - parseFloat(headerheight);
                $('html, body').animate({
                    scrollTop: targetoffset
                }, 2000, function() {
                    // Callback after animation
                    // Must change focus!
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                    } else {
                        $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                    };
                });
            }
        }
    });

	// Function to add a class to the site header when the user scrolls down the page.
	function addScrolled() {
		if (window.innerWidth > 1022) {
			if ( $( document ).scrollTop() > 0 ){
				$( '.site-header.sticky' ).addClass( 'scrolled' );
			} else {
				$( '.site-header.sticky' ).removeClass( 'scrolled' );
			}
		}
	};

	addScrolled();

	// Get the current .site-header height in px
	function getSiteHeaderHeight() {

		// Only needed above 1023px
		if (window.innerWidth > 1023) {

			// The SiteHeader element to target
			var sh = $( ".site-header" );

			// Set OuterHeight var
			var oh = $( sh ).outerHeight();

		} else {

			// Set OuterHeight var
			var oh = 0;

		}

		// Return the val
		return oh;

	}

	$( window ).on('scroll', function(e) {
    // $( window ).smartscroll( function(e) {
        addScrolled();
    } );

	$( window ).on('resize', function(e) {
    // $( window ).smartresize( function(e) {
        addScrolled();
    } );

});
