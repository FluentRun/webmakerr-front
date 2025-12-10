<?php
/**
 * Webmakerr Cart counter helpers.
 */

if ( ! function_exists( 'webmakerr_cart_get_install_count' ) ) {
    /**
     * Retrieve the current install count from the database.
     *
     * @return int
     */
    function webmakerr_cart_get_install_count() {
        $stored_value = get_option( 'webmakerr_cart_active_installs', null );

        if ( false === $stored_value ) {
            $stored_value = 0;
            add_option( 'webmakerr_cart_active_installs', $stored_value );
        }

        return max( 0, (int) $stored_value );
    }
}

if ( ! function_exists( 'webmakerr_cart_increment_install_count' ) ) {
    /**
     * Increment and persist the install count.
     *
     * @return int The updated count after incrementing.
     */
    function webmakerr_cart_increment_install_count() {
        $current_count = webmakerr_cart_get_install_count();
        $updated_count = $current_count + 1;

        update_option( 'webmakerr_cart_active_installs', $updated_count );

        return $updated_count;
    }
}

if ( ! function_exists( 'webmakerr_cart_handle_increment_ajax' ) ) {
    /**
     * AJAX handler for incrementing the install count.
     */
    function webmakerr_cart_handle_increment_ajax() {
        if ( ! isset( $_POST['nonce'] ) ) {
            wp_send_json_error( array( 'message' => 'Missing request nonce.' ), 400 );
        }

        check_ajax_referer( 'webmakerr_cart_install_increment', 'nonce' );

        $updated_count = webmakerr_cart_increment_install_count();

        wp_send_json_success(
            array(
                'count' => $updated_count,
            )
        );
    }
}

add_action( 'wp_ajax_webmakerr_cart_increment', 'webmakerr_cart_handle_increment_ajax' );
add_action( 'wp_ajax_nopriv_webmakerr_cart_increment', 'webmakerr_cart_handle_increment_ajax' );

