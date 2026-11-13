<?php
/**
 * First-time setup: creates the four inner pages with their templates
 * assigned, if they don't already exist. Runs once, on theme activation.
 */

defined( 'ABSPATH' ) || exit;

add_action( 'after_switch_theme', 'bvk_create_pages' );

// Also run on every theme update (a zip "replace" doesn't fire after_switch_theme),
// so new editable pages/fields are picked up without needing a real theme switch.
add_action(
	'admin_init',
	static function () {
		if ( get_option( 'bvk_setup_version' ) !== BVK_VERSION ) {
			bvk_create_pages();
			update_option( 'bvk_setup_version', BVK_VERSION );
		}
	}
);

function bvk_create_pages() {
	$pages = array(
		'about'     => array( 'title' => 'About Us', 'template' => 'templates/about.php' ),
		'team'      => array( 'title' => 'Our Team', 'template' => 'templates/team.php' ),
		'enrolment' => array( 'title' => 'Enrolment', 'template' => 'templates/enrolment.php' ),
		'contact'   => array( 'title' => 'Contact', 'template' => 'templates/contact.php' ),
		// Not a page template of its own (front-page.php always renders the homepage);
		// this page exists only so the homepage's editable text/photos have somewhere to live.
		'home'      => array( 'title' => 'Home (page content)', 'template' => '' ),
	);

	foreach ( $pages as $slug => $info ) {
		$existing = get_page_by_path( $slug );
		if ( $existing ) {
			if ( $info['template'] ) {
				update_post_meta( $existing->ID, '_wp_page_template', $info['template'] );
			}
			continue;
		}
		$id = wp_insert_post(
			array(
				'post_title'   => $info['title'],
				'post_name'    => $slug,
				'post_status'  => 'publish',
				'post_type'    => 'page',
				'post_content' => '',
			)
		);
		if ( $id && ! is_wp_error( $id ) && $info['template'] ) {
			update_post_meta( $id, '_wp_page_template', $info['template'] );
		}
	}

	// Clean permalinks (/about/ instead of /?page_id=) if the site is still on the default structure.
	if ( '' === get_option( 'permalink_structure' ) ) {
		update_option( 'permalink_structure', '/%postname%/' );
	}
	flush_rewrite_rules();
}
