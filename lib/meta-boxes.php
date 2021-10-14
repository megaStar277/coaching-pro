<?php
/* Custom Metaboxes for the Coaching Pro theme.
----------------------------------------------------------------------------- */

// Transparent Header metabox.
add_action( 'add_meta_boxes', 'coachingpro_add_transparentheader_mbox' );
if ( ! function_exists( 'coachingpro_add_transparentheader_mbox' ) ) {

	function coachingpro_add_transparentheader_mbox() {

        // Add the metabox.
		add_meta_box(
            'coachingpro_transheader_control_meta_box',             // id
            esc_html__( 'Transparent Header', 'coachingpro' ),      // title
            'coachingpro_transheader_metabox_controls',             // callback
            'page',                                                 // screen
            'side',                                                 // context
            'default'                                               // priority
        );

	}

}

// Add controls to Transparent Header metabox.
if ( ! function_exists( 'coachingpro_transheader_metabox_controls' ) ) {

	function coachingpro_transheader_metabox_controls( $post ) {

		$meta = get_post_meta( $post->ID );
		$page_transparent_header_value = ( isset( $meta['page_transparent_header_value'][0] ) &&  '1' === $meta['page_transparent_header_value'][0] ) ? 1 : 0;

		wp_nonce_field( 'coachingpro_transheader_control_meta_box', 'coachingpro_transheader_control_meta_box_nonce' );
		?>
		<style type="text/css">
            .post_meta_extras input[type=checkbox] {
                height: 20px;
                width: 20px;
                background: #fff;
                border: 1px solid #1e1e1e;
                border-radius: 2px;
            }
            .post_meta_extras input[type=checkbox]:checked::before {
                width: 24px;
                height: 24px;
            }
		</style>
		<div class="post_meta_extras">
            <div class="components-panel__row">
                <div class="components-base-control components-checkbox-control">
        			<div class="components-base-control__field">
                        <span class="components-checkbox-control__input-container">
                            <input type="checkbox" name="page_transparent_header_value" value="1" class="" <?php checked( $page_transparent_header_value, 1 ); ?> />
                        </span>
                        <label for="page_transparent_header_value" class="components-checkbox-control__label"><?php esc_attr_e( 'Enable transparent header', 'coachingpro' ); ?></label>
        			</div>
                </div>
            </div>
		<?php
	}

}

// Save the setting for the Transparent Header metabox.
add_action( 'save_post', 'coachingpro_transheader_save_metaboxes' );
if ( ! function_exists( 'coachingpro_transheader_save_metaboxes' ) ) {

	function coachingpro_transheader_save_metaboxes( $post_id ) {

        // Verify the nonce.
		if ( ! isset( $_POST['coachingpro_transheader_control_meta_box_nonce'] ) || ! wp_verify_nonce( sanitize_key( $_POST['coachingpro_transheader_control_meta_box_nonce'] ), 'coachingpro_transheader_control_meta_box' ) ) {
			return $post_id;
		}

		// Check the user's permissions.
		if ( isset( $_POST['post_type'] ) && 'page' === $_POST['post_type'] ) {
			if ( ! current_user_can( 'edit_page', $post_id ) ) {
				return $post_id;
			}
		} else {
			if ( ! current_user_can( 'edit_post', $post_id ) ) {
				return $post_id;
			}
		}

		// If this is an autosave, our form has not been submitted, don't do anything.
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return $post_id;
		}

        // Get the saved value, or use the default.
		$transheader_checkbox_value = ( isset( $_POST['page_transparent_header_value'] ) && '1' === $_POST['page_transparent_header_value'] ) ? 1 : 0; // Input var okay.

        // Update the meta.
		update_post_meta( $post_id, 'page_transparent_header_value', esc_attr( $transheader_checkbox_value ) );

	}
}
