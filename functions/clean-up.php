<?php

//Remove All Meta Generators  //////////////////////////////////////////////////////////////////////////////////////////

remove_action( 'wp_head', 'wp_generator' );
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);
remove_action ('wp_head', 'rsd_link');
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'wp_shortlink_wp_head');


// Disable gutenberg style in Front ////////////////////////////////////////////////////////////////////////////////////

add_action( 'wp_print_styles', 'kalapress_deregister_gutenberg_styles', 100 );
function kalapress_deregister_gutenberg_styles() {
    wp_dequeue_style( 'wp-block-library' );
}

// Disable wp-embed.min.js from being automatically enqueued ///////////////////////////////////////////////////////////

add_action( 'wp_footer', 'kalapress_deregister_wp_embed' );
function kalapress_deregister_wp_embed(){
    wp_deregister_script( 'wp-embed' );
}

// Disable WP Emoji Scripts ////////////////////////////////////////////////////////////////////////////////////////////

add_action( 'init', 'kalapress_disable_emojis' );
function kalapress_disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    add_filter( 'tiny_mce_plugins', 'kalapress_disable_emojis_tinymce' );
    add_filter( 'wp_resource_hints', 'kalapress_disable_emojis_remove_dns_prefetch', 10, 2 );

}

/**
 * Filter function used to remove the tinymce emoji plugin.
 *
 * @param array $plugins
 * @return array Difference betwen the two arrays
 */
function kalapress_disable_emojis_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.
 */
function kalapress_disable_emojis_remove_dns_prefetch( $urls, $relation_type )
{
    if ('dns-prefetch' == $relation_type) {
        /** This filter is documented in wp-includes/formatting.php */
        $emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/');

        $urls = array_diff($urls, array($emoji_svg_url));
    }

    return $urls;
}


/**
 * Disable Yoast's Hidden love letter about using the WordPress SEO plugin.
 */
add_action( 'template_redirect', function () {

    if ( ! class_exists( 'WPSEO_Frontend' ) ) {
        return;
    }

    $instance = WPSEO_Frontend::get_instance();

    // make sure, future version of the plugin does not break our site.
    if ( ! method_exists( $instance, 'debug_mark') ) {
        return ;
    }

    // ok, let us remove the love letter.
    remove_action( 'wpseo_head', array( $instance, 'debug_mark' ), 2 );
}, 9999 );
