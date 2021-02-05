<?php

add_action('wp_enqueue_scripts', 'kalapress_enqueue_parent_scripts');
function kalapress_enqueue_parent_scripts() {

	global $kalapress;

	wp_enqueue_script('kalapress-scripts', get_template_directory_uri() . '/dist/js/kalapress-scripts.min.js', array('jquery'), '1.0', true);


}