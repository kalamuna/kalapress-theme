<?php

// Move Yoast to bottom of admin pages

function yoasttobottom() {
    return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');