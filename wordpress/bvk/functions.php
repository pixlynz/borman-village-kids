<?php
/**
 * Borman Village Kids theme.
 *
 * header.php / footer.php    shared chrome (nav, footer)
 * front-page.php              Home
 * templates/*.php             About, Our Team, Enrolment, Contact page templates
 * inc/setup.php                first-time setup: creates the pages on activation
 * inc/content.php              reads an editable field, falling back to the theme default
 * inc/editor.php                registers the Secure Custom Fields editing screens
 */

defined( 'ABSPATH' ) || exit;

define( 'BVK_VERSION', '1.1.0' );

require_once __DIR__ . '/inc/setup.php';
require_once __DIR__ . '/inc/content.php';
require_once __DIR__ . '/inc/editor.php';

add_action(
	'after_setup_theme',
	static function () {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
		add_theme_support( 'responsive-embeds' );
	}
);

/** Asset URL helper. */
function bvk_asset( $path ) {
	return get_template_directory_uri() . '/assets/' . ltrim( $path, '/' );
}

/* ------------------------------------------------------------------ which page is this */

function bvk_view() {
	if ( is_front_page() ) {
		return 'home';
	}
	if ( is_page() ) {
		$slug = get_post_field( 'post_name', get_queried_object_id() );
		if ( in_array( $slug, array( 'about', 'team', 'enrolment', 'contact' ), true ) ) {
			return $slug;
		}
	}
	return 'page';
}

/* ------------------------------------------------------------------ styles and scripts */

add_action(
	'wp_enqueue_scripts',
	static function () {
		$v = BVK_VERSION;
		wp_enqueue_style( 'bvk-fonts', 'https://fonts.googleapis.com/css2?family=Baloo+2:wght@500;600;700;800&family=Nunito+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400&display=swap', array(), null ); // phpcs:ignore WordPress.WP.EnqueuedResourceParameters
		wp_enqueue_style( 'bvk-styles', bvk_asset( 'styles.css' ), array(), $v );

		// The designed pages don't use core block styles
		wp_dequeue_style( 'wp-block-library' );
		wp_dequeue_style( 'global-styles' );
		wp_dequeue_style( 'classic-theme-styles' );

		wp_enqueue_script( 'bvk-main', bvk_asset( 'main.js' ), array(), $v, array( 'in_footer' => true, 'strategy' => 'defer' ) );
	}
);

/* ------------------------------------------------------------------ head: SEO and sharing */

/** Per-page title, description and share text, matching the original static site. */
function bvk_seo_data() {
	$site_desc = "Borman Village Kids is a purpose-built early childhood centre. Nutritious kai made on-site, 100% qualified kaiako, and a warm programme guided by Te Wh\xc4\x81riki. Open Monday to Friday, 7.30am\xe2\x80\x935.30pm.";
	return array(
		'home'      => array(
			'title'       => 'Borman Village Kids | A home away from home for your little one',
			'description' => $site_desc,
			'path'        => '/',
		),
		'about'     => array(
			'title'       => 'About Us | Borman Village Kids',
			'description' => "Borman Village Kids reflects all we have learnt in early childhood, family focus, purpose-built spaces, and a programme guided by Te Wh\xc4\x81riki. Meet the village behind your child's day.",
			'path'        => '/about/',
		),
		'team'      => array(
			'title'       => 'Our Team | Borman Village Kids',
			'description' => 'Our kaiako are 100% qualified early childhood teachers. We staff above the government-regulated ratios, with primary-trained and trainee teachers too, so there is always time for your child.',
			'path'        => '/team/',
		),
		'enrolment' => array(
			'title'       => 'Enrolment | Borman Village Kids',
			'description' => 'How to enrol at Borman Village Kids, come and see if we are the right fit, make an enquiry, then complete your enrolment application. 20 Hours ECE and WINZ subsidies available.',
			'path'        => '/enrolment/',
		),
		'contact'   => array(
			'title'       => 'Contact | Borman Village Kids',
			'description' => 'Get in touch with Borman Village Kids. Open Monday to Friday, 7.30am\xe2\x80\x935.30pm, with an open-door policy. Make an enquiry to arrange a visit.',
			'path'        => '/contact/',
		),
	);
}

add_filter(
	'document_title_separator',
	static function () {
		return '|';
	}
);

add_filter(
	'pre_get_document_title',
	static function ( $title ) {
		$data = bvk_seo_data();
		$view = bvk_view();
		return isset( $data[ $view ] ) ? $data[ $view ]['title'] : $title;
	},
	9999
);

// Jetpack/WordPress.com SEO tools can also set the title via this filter; run after them too.
add_filter(
	'wpcom_seo_meta_description',
	static function ( $desc ) {
		$data = bvk_seo_data();
		$view = bvk_view();
		return isset( $data[ $view ] ) ? $data[ $view ]['description'] : $desc;
	},
	9999
);
add_filter(
	'wp_title',
	static function ( $title ) {
		$data = bvk_seo_data();
		$view = bvk_view();
		return isset( $data[ $view ] ) ? $data[ $view ]['title'] : $title;
	},
	9999
);

add_action(
	'wp_head',
	static function () {
		$data  = bvk_seo_data();
		$view  = bvk_view();
		$entry = $data[ $view ] ?? null;
		if ( ! $entry ) {
			return;
		}
		$url   = home_url( $entry['path'] );
		$image = bvk_asset( 'images/og-share.jpg' );

		echo "\n";
		echo '<meta name="description" content="' . esc_attr( $entry['description'] ) . '">' . "\n";
		echo '<link rel="canonical" href="' . esc_url( $url ) . '">' . "\n";
		echo '<meta property="og:type" content="website">' . "\n";
		echo '<meta property="og:site_name" content="Borman Village Kids">' . "\n";
		echo '<meta property="og:locale" content="en_NZ">' . "\n";
		echo '<meta property="og:title" content="' . esc_attr( $entry['title'] ) . '">' . "\n";
		echo '<meta property="og:description" content="' . esc_attr( $entry['description'] ) . '">' . "\n";
		echo '<meta property="og:url" content="' . esc_url( $url ) . '">' . "\n";
		echo '<meta property="og:image" content="' . esc_url( $image ) . '">' . "\n";
		echo '<meta property="og:image:width" content="1200">' . "\n";
		echo '<meta property="og:image:height" content="630">' . "\n";
		echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
		echo '<meta name="twitter:title" content="' . esc_attr( $entry['title'] ) . '">' . "\n";
		echo '<meta name="twitter:description" content="' . esc_attr( $entry['description'] ) . '">' . "\n";
		echo '<meta name="twitter:image" content="' . esc_url( $image ) . '">' . "\n";
		echo '<meta name="theme-color" content="#255B77">' . "\n";
		echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
		echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
		if ( ! has_site_icon() ) {
			echo '<link rel="icon" href="' . esc_url( bvk_asset( 'images/favicon.ico' ) ) . '" sizes="any">' . "\n";
			echo '<link rel="icon" type="image/png" sizes="32x32" href="' . esc_url( bvk_asset( 'images/favicon-32.png' ) ) . '">' . "\n";
			echo '<link rel="icon" type="image/png" sizes="16x16" href="' . esc_url( bvk_asset( 'images/favicon-16.png' ) ) . '">' . "\n";
			echo '<link rel="apple-touch-icon" href="' . esc_url( bvk_asset( 'images/apple-touch-icon.png' ) ) . '">' . "\n";
		}

		if ( in_array( $view, array( 'home', 'contact' ), true ) ) {
			bvk_schema_json();
		}
	},
	1
);

/** Structured data so search engines know this is a childcare centre. */
function bvk_schema_json() {
	$data = array(
		'@context'                  => 'https://schema.org',
		'@type'                     => 'ChildCare',
		'name'                      => 'Borman Village Kids',
		'image'                     => bvk_asset( 'images/og-share.jpg' ),
		'url'                       => home_url( '/' ),
		'telephone'                 => '+64 7 960 2125',
		'email'                     => 'todd@bormanvillagekids.co.nz',
		'priceRange'                => '$$',
		'address'                   => array(
			'@type'           => 'PostalAddress',
			'streetAddress'   => '70 Hare Puke Drive',
			'addressLocality' => 'Hamilton',
			'postalCode'      => '3210',
			'addressCountry'  => 'NZ',
		),
		'openingHoursSpecification' => array(
			'@type'     => 'OpeningHoursSpecification',
			'dayOfWeek' => array( 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday' ),
			'opens'     => '07:30',
			'closes'    => '17:30',
		),
		'sameAs'                    => array(
			'https://www.facebook.com/bormanvillagekids',
			'https://www.instagram.com/bormanvillagekids/',
		),
	);
	echo '<script type="application/ld+json">' . wp_json_encode( $data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
}

/* ------------------------------------------------------------------ menu */

/** Main nav items: url, label, current (for aria-current / active class). */
function bvk_nav_items() {
	$view = bvk_view();
	return array(
		array( 'url' => home_url( '/' ), 'label' => 'Home', 'current' => 'home' === $view ),
		array( 'url' => home_url( '/about/' ), 'label' => 'About', 'current' => 'about' === $view ),
		array( 'url' => home_url( '/team/' ), 'label' => 'Our Team', 'current' => 'team' === $view ),
		array( 'url' => home_url( '/enrolment/' ), 'label' => 'Enrolment', 'current' => 'enrolment' === $view ),
		array( 'url' => home_url( '/contact/' ), 'label' => 'Contact', 'current' => 'contact' === $view ),
	);
}

function bvk_nav_list() {
	foreach ( bvk_nav_items() as $it ) {
		printf(
			'<a class="nav-link%s" href="%s">%s</a>',
			$it['current'] ? ' active' : '',
			esc_url( $it['url'] ),
			esc_html( $it['label'] )
		);
	}
}

define( 'BVK_ENQUIRY_URL', 'https://www.discoverchildcare.co.nz/widget/enquiry?centreToken=dceecf94-3225-4d97-84d3-f07caacab0c3' );
define( 'BVK_ENROL_URL', 'https://www.discoverchildcare.co.nz/widget/enrolmentForm?centreToken=dceecf94-3225-4d97-84d3-f07caacab0c3' );

/* ------------------------------------------------------------------ tidy-ups */

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'wp_generator' );

/** The site is in New Zealand English even before the English (NZ) language pack is installed. */
add_filter(
	'language_attributes',
	static function ( $output ) {
		return preg_replace( '/lang="en(-[A-Z]{2})?"/', 'lang="en-NZ"', $output );
	}
);
