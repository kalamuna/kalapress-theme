<?php

// Workaround For Select Field Returning an Array When Not Set
// Taken from here: https://support.advancedcustomfields.com/forums/topic/get_field-returning-array-for-select-when-no-value-exists-in-database/

function kalapress_coerce_array_to_value( $value, $post_id, $field ) {
	if (
		$field['return_format'] === 'value' &&
		!$field['multiple'] &&
		is_array( $value ) &&
		array_key_exists( 0, $value )
	) {
		$value = $value[0];
	}

	return $value;
}

add_filter( 'acf/load_value/type=select', 'kalapress_coerce_array_to_value', 10, 3 );