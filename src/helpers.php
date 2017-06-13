<?php

if (!function_exists('__checked_selected_helper')) {

	/**
	 * Private helper function for checked, selected, and disabled.
	 *
	 * Compares the first two arguments and if identical marks as $type
	 */
	function __checked_selected_helper( $helper, $current, $echo, $type ) {
		if ( $helper == $current )
			$result = " $type='$type'";
		else
			$result = '';

		if ( $echo )
			echo $result;

		return $result;
	}
}

if (!function_exists('selected')) {

	/**
	 * Outputs the html selected attribute.
	 */
    function selected($selected, $current = true, $echo = false)
    {
        return __checked_selected_helper($selected, $current, $echo, 'selected');
    }
}

if (!function_exists('checked')) {

	/**
	 * Outputs the html checked attribute.
	 */
    function checked($checked, $current = true, $echo = false)
    {
        return __checked_selected_helper($checked, $current, $echo, 'checked');
    }
}

if (!function_exists('disabled')) {

	/**
	 * Outputs the html disabled attribute.
	 */
    function disabled( $disabled, $current = true, $echo = false ) {
		return __checked_selected_helper( $disabled, $current, $echo, 'disabled' );
	}
}