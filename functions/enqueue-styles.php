<?php

add_action('wp_enqueue_scripts', 'kalapress_enqueue_parent_styles');
function kalapress_enqueue_parent_styles() {

	wp_enqueue_style( 'styles', get_template_directory_uri() . '/dist/css/master.css', false,'all');

}