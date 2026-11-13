<?php
/**
 * Content engine: reads an editable field for a page, falling back to the
 * theme's own default text/image when nothing has been entered yet.
 */

defined( 'ABSPATH' ) || exit;

/** Page IDs by view slug, resolved once per request. */
function bvk_page_id( $slug ) {
	static $cache = array();
	if ( array_key_exists( $slug, $cache ) ) {
		return $cache[ $slug ];
	}
	$page             = get_page_by_path( $slug );
	$cache[ $slug ]   = $page ? $page->ID : 0;
	return $cache[ $slug ];
}

/** An editable text/textarea field, or the theme default if not yet set. */
function bvk_field( $view, $key, $default ) {
	$id = bvk_page_id( $view );
	if ( $id && function_exists( 'get_field' ) ) {
		$value = get_field( $key, $id );
		if ( is_string( $value ) && trim( $value ) !== '' ) {
			return $value;
		}
	}
	return $default;
}

/** Print a text field, escaped. */
function bvk_text( $view, $key, $default ) {
	echo esc_html( bvk_field( $view, $key, $default ) );
}

/**
 * Print a textarea field as paragraphs (split on blank lines), allowing
 * basic inline HTML. Pass $first_class (e.g. "lead") to style the opening
 * paragraph the way the theme's hardcoded copy did.
 */
function bvk_rich( $view, $key, $default, $first_class = '' ) {
	$value      = bvk_field( $view, $key, $default );
	$paragraphs = preg_split( '/\n\s*\n/', trim( $value ) );
	foreach ( $paragraphs as $i => $p ) {
		$class = ( 0 === $i && $first_class ) ? ' class="' . esc_attr( $first_class ) . '"' : '';
		echo '<p' . $class . '>' . wp_kses_post( trim( $p ) ) . '</p>';
	}
}

/** An editable image field (src + alt), or the theme default if not yet set. */
function bvk_image_data( $view, $key, $default_src, $default_alt ) {
	$id = bvk_page_id( $view );
	if ( $id && function_exists( 'get_field' ) ) {
		$value = get_field( $key, $id );
		if ( is_array( $value ) && ! empty( $value['url'] ) ) {
			return array(
				'src' => $value['url'],
				'alt' => ! empty( $value['alt'] ) ? $value['alt'] : $default_alt,
			);
		}
	}
	return array( 'src' => $default_src, 'alt' => $default_alt );
}
