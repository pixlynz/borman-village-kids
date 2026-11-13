<?php
defined( 'ABSPATH' ) || exit;
get_header();
?>
  <section class="section cta-band">
    <div class="wrap center">
      <h1>Page not found.</h1>
      <p class="maxw mx-auto mt-s">Sorry, we couldn't find that page.</p>
      <div class="cta-actions">
        <a class="btn btn-primary btn-lg" href="<?php echo esc_url( home_url( '/' ) ); ?>">Back to home</a>
      </div>
    </div>
  </section>
<?php get_footer(); ?>
