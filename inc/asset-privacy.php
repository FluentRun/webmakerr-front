<?php
/**
 * Asset privacy layer: rename exposed handles and proxy asset URLs through
 * neutral aliases so automated scanners cannot infer plugins or theme names.
 */

if ( ! defined( 'CODEX_ASSET_ALIAS_KEY' ) ) {
    define( 'CODEX_ASSET_ALIAS_KEY', 'static-bundle' );
}

/**
 * Recursively copy a directory when symlinks are not available.
 *
 * @param string $source
 * @param string $destination
 */
function codex_recursive_copy( $source, $destination ) {
    if ( is_dir( $source ) ) {
        if ( ! file_exists( $destination ) ) {
            wp_mkdir_p( $destination );
        }

        $directory = opendir( $source );

        if ( ! $directory ) {
            return;
        }

        while ( false !== ( $entry = readdir( $directory ) ) ) {
            if ( in_array( $entry, [ '.', '..' ], true ) ) {
                continue;
            }

            $src_path  = trailingslashit( $source ) . $entry;
            $dest_path = trailingslashit( $destination ) . $entry;

            if ( is_dir( $src_path ) ) {
                codex_recursive_copy( $src_path, $dest_path );
            } else {
                copy( $src_path, $dest_path );
            }
        }

        closedir( $directory );
    } elseif ( file_exists( $source ) ) {
        $dest_directory = dirname( $destination );

        if ( ! file_exists( $dest_directory ) ) {
            wp_mkdir_p( $dest_directory );
        }

        copy( $source, $destination );
    }
}

/**
 * Prepare a neutral, cacheable alias for theme assets inside uploads.
 */
function codex_prepare_asset_aliases() {
    static $prepared = false;

    if ( $prepared ) {
        return;
    }

    $uploads    = wp_upload_dir();
    $alias_dir  = trailingslashit( $uploads['basedir'] ) . CODEX_ASSET_ALIAS_KEY;
    $theme_root = get_template_directory();

    if ( ! file_exists( $alias_dir ) ) {
        wp_mkdir_p( $alias_dir );
    }

    $paths = [ 'assets', 'js', 'frontend-libs', 'fonts', 'images' ];

    foreach ( $paths as $path ) {
        $source = trailingslashit( $theme_root ) . $path;
        $target = trailingslashit( $alias_dir ) . $path;

        if ( ! file_exists( $source ) ) {
            continue;
        }

        if ( file_exists( $target ) ) {
            continue;
        }

        if ( function_exists( 'symlink' ) && @symlink( $source, $target ) ) {
            continue;
        }

        codex_recursive_copy( $source, $target );
    }

    $prepared = true;
}

/**
 * Get the neutral base URL for public assets.
 *
 * @return string
 */
function codex_get_asset_base_url() {
    $uploads = wp_upload_dir();

    return trailingslashit( $uploads['baseurl'] ) . CODEX_ASSET_ALIAS_KEY;
}

/**
 * Build an obfuscated asset URL based on a relative path.
 *
 * @param string $relative
 *
 * @return string
 */
function codex_asset_url( $relative ) {
    codex_prepare_asset_aliases();

    return trailingslashit( codex_get_asset_base_url() ) . ltrim( $relative, '/' );
}

/**
 * Generate generic handles for scripts and styles.
 *
 * @param string $handle
 *
 * @return string
 */
function codex_generic_handle( $handle ) {
    static $map = [
        'adstm'                  => 'app-shell',
        'rap_lity'               => 'ui-overlay',
        'ttlazy'                 => 'lazy-engine',
        'ttgallery'              => 'gallery-engine',
        'baguetteBox'            => 'lightbox-engine',
        'selects'                => 'form-engine',
        'slideout'               => 'drawer-engine',
        'common-tmpl'            => 'common-shell',
        'home-tmpl'              => 'home-shell',
        'header-tmpl'            => 'header-shell',
        'single-product-tmpl'    => 'product-shell',
        'blog-tmpl'              => 'blog-shell',
        'facebook'               => 'social-sdk',
        'bootstrap-tmpl'         => 'vendor-bundle',
        'bootstrap-init'         => 'vendor-init',
        'socials'                => 'social-bridge',
        'front-cart'             => 'cart-shell',
        'front-account'          => 'account-shell',
        'front-userlogin'        => 'login-shell',
        'front-orders'           => 'orders-shell',
        'front-pagination'       => 'pagination-shell',
        'front-recaptcha-script' => 'recaptcha-shell',
        'front-register-account' => 'registration-shell',
    ];

    if ( isset( $map[ $handle ] ) ) {
        return $map[ $handle ];
    }

    return 'asset-' . substr( md5( $handle ), 0, 8 );
}

/**
 * Swap publicly exposed handles with generic identifiers in rendered tags.
 *
 * @param string $html
 * @param string $handle
 *
 * @return string
 */
function codex_filter_style_loader_tag( $html, $handle ) {
    $generic  = codex_generic_handle( $handle ) . '-css';
    $search   = [ "id=\"{$handle}-css\"", "id='{$handle}-css'" ];
    $replace  = [ "id=\"{$generic}\"", "id='{$generic}'" ];

    return str_replace( $search, $replace, $html );
}
add_filter( 'style_loader_tag', 'codex_filter_style_loader_tag', 10, 2 );

/**
 * Swap publicly exposed handles with generic identifiers in rendered tags.
 *
 * @param string $html
 * @param string $handle
 *
 * @return string
 */
function codex_filter_script_loader_tag( $html, $handle ) {
    $generic  = codex_generic_handle( $handle ) . '-js';
    $search   = [ "id=\"{$handle}-js\"", "id='{$handle}-js'" ];
    $replace  = [ "id=\"{$generic}\"", "id='{$generic}'" ];

    return str_replace( $search, $replace, $html );
}
add_filter( 'script_loader_tag', 'codex_filter_script_loader_tag', 10, 2 );

/**
 * Obfuscate asset URLs by swapping theme paths with neutral aliases.
 *
 * @param string $src
 *
 * @return string
 */
function codex_obfuscate_asset_src( $src ) {
    $template_uri = trailingslashit( get_template_directory_uri() );

    if ( strpos( $src, $template_uri ) !== 0 ) {
        return $src;
    }

    $relative = ltrim( substr( $src, strlen( $template_uri ) ), '/' );

    return codex_asset_url( $relative );
}
add_filter( 'style_loader_src', 'codex_obfuscate_asset_src' );
add_filter( 'script_loader_src', 'codex_obfuscate_asset_src' );

