<?php
/**
 * Template Name: Our Team
 */

defined( 'ABSPATH' ) || exit;
get_header();
?>

  <!-- ============ PAGE HERO ============ -->
  <?php $bvk_hero = bvk_image_data( 'team', 'hero_image', bvk_asset( 'images/room.webp' ), 'A calm classroom with a natural plywood table and colourful child-sized stools.' ); ?>
  <section class="page-hero">
    <div class="page-hero-media">
      <img fetchpriority="high" src="<?php echo esc_url( $bvk_hero['src'] ); ?>" alt="<?php echo esc_attr( $bvk_hero['alt'] ); ?>">
    </div>
    <div class="wrap">
      <p class="crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> &nbsp;/&nbsp; Our Team</p>
      <span class="kicker">&#332; m&#257;tou kaiako, our teachers</span>
      <h1>The people who make it a village.</h1>
      <p>Warm, qualified and genuinely present. Our team is the reason children settle quickly and families feel at ease.</p>
    </div>
  </section>

  <!-- ============ INTRO / QUALIFIED ============ -->
  <section class="section">
    <div class="wrap">
      <div class="split">
        <div class="split-body reveal">
          <span class="kicker">Fully qualified</span>
          <h2>100% qualified early childhood teachers.</h2>
          <div class="text-block stack">
            <p class="lead"><?php bvk_text( 'team', 'intro_lead', 'Every centre has to meet a required minimum ratio of adults to children. We take it a step further: every teacher who counts towards our ratio is a fully qualified early childhood educator, which is not always the case.' ); ?></p>
          </div>
        </div>
        <?php $bvk_intro_img = bvk_image_data( 'team', 'intro_image', bvk_asset( 'images/team-play.webp' ), 'The Borman Village Kids teaching team together, smiling in festive Santa hats.' ); ?>
        <div class="split-media reveal d1">
          <div class="framed primary tr">
            <img loading="lazy" decoding="async" src="<?php echo esc_url( $bvk_intro_img['src'] ); ?>" alt="<?php echo esc_attr( $bvk_intro_img['alt'] ); ?>">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ ABOVE RATIOS ============ -->
  <section class="section band-primary">
    <div class="wrap">
      <div class="center maxw mx-auto reveal">
        <span class="kicker on-dark" style="justify-content:center">Above the minimum</span>
        <h2 class="mt-s">More teachers than required, on purpose.</h2>
        <p class="mt-s mx-auto">We staff above the minimum adult-to-child ratio, adding more teachers on top including primary-trained teachers and teachers still in training. So there is always an extra pair of hands, and always time for your child.</p>
      </div>
      <div class="grid-3 mt-l">
        <article class="card reveal">
          <span class="card-badge accent" style="background:var(--kowhai);color:#fff" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="square"><path d="M4 8l8-4 8 4-8 4-8-4Z"/><path d="M8 10v5c0 1 1.8 2 4 2s4-1 4-2v-5"/><path d="M20 8v5"/></svg></span>
          <details class="expander" open>
            <summary><h3>Qualified kaiako</h3></summary>
            <p>Our core team are all qualified early childhood teachers, meeting the regulated ratios in full.</p>
          </details>
        </article>
        <article class="card reveal d1">
          <span class="card-badge" style="background:var(--leaf);color:#fff" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="square"><path d="M4 19V7l8-3 8 3v12"/><path d="M4 19h16"/><path d="M9 19v-5h6v5"/></svg></span>
          <details class="expander" open>
            <summary><h3>Primary-trained teachers</h3></summary>
            <p>Additional teachers include primary-trained educators, adding depth as children prepare for school.</p>
          </details>
        </article>
        <article class="card reveal d2">
          <span class="card-badge" style="background:var(--coral);color:#fff" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="square"><path d="M12 3v4M12 17v4M3 12h4M17 12h4"/><circle cx="12" cy="12" r="4"/></svg></span>
          <details class="expander" open>
            <summary><h3>Teachers in training</h3></summary>
            <p>Teachers in training work alongside our qualified team, growing the next generation of kaiako.</p>
          </details>
        </article>
      </div>
    </div>
  </section>

  <!-- ============ WHAT TO EXPECT ============ -->
  <section class="section">
    <div class="wrap">
      <div class="split reverse">
        <?php $bvk_expect_img = bvk_image_data( 'team', 'expect_image', bvk_asset( 'images/home-gallery-1.webp' ), 'Two children exploring coloured pieces together, supported by their teachers.' ); ?>
        <div class="split-media reveal">
          <div class="framed leaf">
            <img loading="lazy" decoding="async" src="<?php echo esc_url( $bvk_expect_img['src'] ); ?>" alt="<?php echo esc_attr( $bvk_expect_img['alt'] ); ?>">
          </div>
        </div>
        <div class="split-body reveal d1">
          <span class="kicker leaf">What you can expect</span>
          <h2>Teachers who truly know your child.</h2>
          <ul class="ticks mt-s">
            <li><span><strong>Warm, unhurried care</strong>Time to settle, connect and follow each child's rhythm.</span></li>
            <li><span><strong>Learning made visible</strong>Stories and photos shared with you through Storypark.</span></li>
            <li><span><strong>Consistent, familiar faces</strong>Relationships that help tamariki feel safe and confident.</span></li>
            <li><span><strong>A team that listens</strong>We reflect your family's values and aspirations.</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ OWNER NOTE ============ -->
  <section class="section band-sand">
    <div class="wrap center maxw mx-auto reveal">
      <span class="kicker" style="justify-content:center">From our owner</span>
      <p class="pull mx-auto mt-s" style="max-width:26ch">A father of four, and a centre owner-operator since <span class="hl" style="color:var(--kowhai)">May 2000.</span></p>
      <p class="mt-m mx-auto"><?php bvk_text( 'team', 'owner_text', 'Borman Village Kids reflects everything we have learnt over our years in early childhood, and what we believe is best practice. It is built to be a community where children and parents feel comfortable, supported, and able to thrive.' ); ?></p>
      <a class="btn btn-outline mt-l" href="<?php echo esc_url( home_url( '/about/' ) ); ?>">Read our story <span class="arrow">&rarr;</span></a>
    </div>
  </section>

  <!-- ============ CTA ============ -->
  <section class="section cta-band">
    <div class="wrap center">
      <span class="kicker on-dark" style="justify-content:center">Come and meet us</span>
      <h2 class="mt-s">The warmest welcome is in person.</h2>
      <p class="maxw mx-auto mt-s">Pop in to meet the team and see how your child might settle in. Enrolment is subject to availability, start with a quick enquiry.</p>
      <div class="cta-actions">
        <a class="btn btn-primary btn-lg" href="<?php echo esc_url( BVK_ENQUIRY_URL ); ?>" target="_blank" rel="noopener">Enquire now <span class="arrow">&rarr;</span></a>
        <a class="btn btn-ghost-light btn-lg" href="<?php echo esc_url( home_url( '/enrolment/' ) ); ?>">How enrolment works</a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
