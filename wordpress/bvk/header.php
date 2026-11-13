<?php
defined( 'ABSPATH' ) || exit;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ============ HEADER ============ -->
<header class="site-header<?php echo is_front_page() ? ' transparent' : ''; ?>">
  <div class="wrap nav">
    <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Borman Village Kids, home">
      <span class="brand-logo" aria-hidden="true"></span>
    </a>
    <button class="nav-toggle" aria-label="Open menu" aria-expanded="false" aria-controls="menu">
      <span></span><span></span><span></span>
    </button>
    <nav class="nav-menu" id="menu" aria-label="Main navigation">
      <?php bvk_nav_list(); ?>
      <a class="btn btn-primary nav-cta" href="<?php echo esc_url( BVK_ENQUIRY_URL ); ?>" target="_blank" rel="noopener">Enquire</a>
    </nav>
  </div>
</header>
<div class="nav-backdrop"></div>

<main id="main">
