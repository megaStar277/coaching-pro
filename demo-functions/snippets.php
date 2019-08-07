<?php
/* These code snippets are required for the demo site to work properly. Add them to the indicated files to enable demo funcitonality. /*


// This code should only be added for the demo site that shows the different color schemes on the front end.

/* -----------------------------------------------------------------------------
https://demo.coaching-pro.thebrandid.com
----------------------------------------------------------------------------- */

/* ---------------------------- FOR DEMO ONLY ------------------------------- */

/* Add this to the end of the functions.php */
if (file_exists( CHILD_THEME_DIR . '/demo-functions/load-demo.php' )) {
	include_once( CHILD_THEME_DIR . '/demo-functions/load-demo.php' );
}
/* ---------------------------- END DEMO ONLY ------------------------------- */

/* ---------------------------- FOR DEMO ONLY ------------------------------- */
/* Insert at line 22 of output-colors.php */
if (function_exists( 'coaching_pro_demo_in_use' )) {
	$selected_scheme = coaching_pro_demo_in_use( $selected_scheme );
}
/* ---------------------------- END DEMO ONLY ------------------------------- */

/* ---------------------------- FOR DEMO ONLY ------------------------------- */
// Add 'demo' to the end of the version number in the main style.css.
/* ---------------------------- END DEMO ONLY ------------------------------- */
