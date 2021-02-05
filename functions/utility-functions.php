<?php

function is_parent() {
	global $post;
	$pages = get_pages("child_of=".$post->ID);
	if ($pages) return true;
}

function is_ancestor($post_id) {
	global $wp_query;
	$ancestors = $wp_query->post->ancestors;
	if ( in_array($post_id, $ancestors)) {
		return true;
	} else {
		return false;
	}
}

function is_child($post_id) {
	global $post;
	if(is_page()&&($post->post_parent==$post_id))
		return true;
	else
		return false;
}

function str_replace_deep($search, $replace, $subject) {
	if (is_array($subject))
	{
		foreach($subject as &$oneSubject)
			$oneSubject = str_replace_deep($search, $replace, $oneSubject);
		unset($oneSubject);
		return $subject;
	} else {
		return str_replace($search, $replace, $subject);
	}
}

// remove width and height attributes from images
add_filter( 'post_thumbnail_html', 'kalapress_remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'kalapress_remove_thumbnail_dimensions', 10 );
add_filter( 'the_content', 'kalapress_remove_thumbnail_dimensions', 10 );
function kalapress_remove_thumbnail_dimensions( $html ) {
	$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
	return $html;
}

function kalapress_format_phone_number($phoneNumber) {

    $phoneNumber = preg_replace('/[^0-9]/','',$phoneNumber);
    $areaCode = substr($phoneNumber, 0, 3);
    $nextThree = substr($phoneNumber, 3, 3);
    $lastFour = substr($phoneNumber, 6, 4);
    $phoneNumber = '('.$areaCode.') '.$nextThree.'-'.$lastFour;

    return $phoneNumber;

}