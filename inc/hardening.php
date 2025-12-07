<?php
/**
 * Harden the theme against plugin/theme detection without impacting performance.
 */

// Remove noisy tags that leak environment details.
add_action(
    'init',
    function () {
        remove_action( 'wp_head', 'wp_generator' );
        remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
        remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
        remove_action( 'wp_head', 'rsd_link' );
        remove_action( 'wp_head', 'wlwmanifest_link' );
        remove_action( 'wp_head', 'wp_shortlink_wp_head', 10 );
        remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10 );
        add_filter( 'the_generator', '__return_empty_string' );
    },
    1
);

// Strip version query strings from assets to make signature-based scanners less reliable.
function adstm_strip_asset_version( $src ) {
    if ( empty( $src ) ) {
        return $src;
    }

    return remove_query_arg( 'ver', $src );
}

add_filter( 'style_loader_src', 'adstm_strip_asset_version', 9999 );
add_filter( 'script_loader_src', 'adstm_strip_asset_version', 9999 );

// Block REST endpoints that expose theme and plugin details.
add_filter(
    'rest_endpoints',
    function ( $endpoints ) {
        $blocked = [
            '/wp/v2/themes',
            '/wp/v2/themes/(?P<stylesheet>[\\w-]+)',
            '/wp/v2/plugins',
            '/wp/v2/plugins/(?P<plugin>[\\w-]+)',
        ];

        foreach ( $blocked as $route ) {
            if ( isset( $endpoints[ $route ] ) ) {
                unset( $endpoints[ $route ] );
            }
        }

        return $endpoints;
    }
);

// Disable XML-RPC to avoid metadata disclosure and additional attack surface.
add_filter( 'xmlrpc_enabled', '__return_false' );

// Return 404 for readme and license files often used by detectors.
add_action(
    'template_redirect',
    function () {
        $request_path = parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH );

        if ( ! is_string( $request_path ) ) {
            return;
        }

        $basename = strtolower( basename( $request_path ) );
        $blocked  = [ 'readme.txt', 'readme.html', 'license.txt', 'license.md' ];

        if ( in_array( $basename, $blocked, true ) ) {
            status_header( 404 );
            exit;
        }
    }
);
