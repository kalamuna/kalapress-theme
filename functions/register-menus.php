<?php

add_action('after_setup_theme', 'kalapress_register_parent_menus');
function kalapress_register_parent_menus() {
    register_nav_menus(array(
        'mobile-menu' => __('Mobile Menu', 'kalapress'),
    ));
}