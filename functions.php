<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// FJERNE LAZYLOAD FOR AT KUNNE SUPPORTE FORSIDEN
add_filter( 'wp_lazy_loading_enabled', '__return_false' );

// WISHLIST NON RESPONSIVE
add_filter( 'yith_wcwl_is_wishlist_responsive', '__return_false' );



// END ENQUEUE PARENT ACTION

