<?php
defined( 'ABSPATH' ) || exit;
get_header();
?>
  <section class="section">
    <div class="wrap maxw mx-auto">
      <?php
      while ( have_posts() ) :
        the_post();
        ?>
        <h1><?php the_title(); ?></h1>
        <div class="text-block stack"><?php the_content(); ?></div>
        <?php
      endwhile;
      ?>
    </div>
  </section>
<?php get_footer(); ?>
