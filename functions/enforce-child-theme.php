<?php

add_action( 'wp', 'kalapress_enforce_child_theme' );


function kalapress_enforce_child_theme() {

	if (get_option('stylesheet') == 'kalapress') {

		include( get_template_directory() . '/child-theme-warning.php');
		exit;

	}

}