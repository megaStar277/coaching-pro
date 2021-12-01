<?php
/**
 * A custom control to display a separator.
 *
 * @package Coaching Pro Theme
 */

if ( class_exists( 'WP_Customize_Control' ) ) {
	/**
	 * Defines the control to display a separator.
	 */
	class Separator_Control extends WP_Customize_Control {
		/**
		 * Renders the control.
		 */
		public function render_content() {
			?>
			<label><hr></label>
			<?php
		}
	}
}
