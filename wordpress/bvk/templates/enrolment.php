<?php
/**
 * Template Name: Enrolment
 */

defined( 'ABSPATH' ) || exit;
get_header();
?>

  <!-- ============ PAGE HERO ============ -->
  <?php $bvk_hero = bvk_image_data( 'enrolment', 'hero_image', bvk_asset( 'images/bikes.webp' ), 'Two trikes on the grass beside a stop sign, ready for play in the outdoor area.' ); ?>
  <section class="page-hero">
    <div class="page-hero-media">
      <img fetchpriority="high" src="<?php echo esc_url( $bvk_hero['src'] ); ?>" alt="<?php echo esc_attr( $bvk_hero['alt'] ); ?>">
    </div>
    <div class="wrap">
      <p class="crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> &nbsp;/&nbsp; Enrolment</p>
      <span class="kicker">Nau mai, join us</span>
      <h1>Finding the right fit for your wh&#257;nau.</h1>
      <p>Enrolling is simple, and it starts with a visit. Here is how it works, step by step.</p>
    </div>
  </section>

  <!-- ============ STEPS ============ -->
  <section class="section">
    <div class="wrap">
      <div class="center maxw mx-auto reveal">
        <span class="kicker">Three simple steps</span>
        <h2 class="mt-s">From first visit to first day.</h2>
      </div>
      <div class="steps mt-l" style="max-width:920px;margin-inline:auto">
        <div class="step reveal">
          <div class="step-num">1</div>
          <div>
            <h3>Come and take a look</h3>
            <p>Make sure we are the right fit for your family. Come in, look around, meet the team, and get a feel for the place.</p>
          </div>
        </div>
        <div class="step reveal">
          <div class="step-num">2</div>
          <div>
            <h3>Make an enquiry</h3>
            <p>Enrolment is subject to availability. Fill in an enquiry and we will contact you to talk through what your wh&#257;nau needs.</p>
            <a class="btn btn-blue step-cta" href="<?php echo esc_url( BVK_ENQUIRY_URL ); ?>" target="_blank" rel="noopener">Enquire here <span class="arrow">&rarr;</span></a>
          </div>
        </div>
        <div class="step reveal">
          <div class="step-num">3</div>
          <div>
            <h3>Complete your enrolment</h3>
            <p>Fill in the enrolment application and we will be in touch. For a future start, the first week's fees may be required to confirm your place.</p>
            <a class="btn btn-primary step-cta" href="<?php echo esc_url( BVK_ENROL_URL ); ?>" target="_blank" rel="noopener">Start enrolment application <span class="arrow">&rarr;</span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ FEES / FUNDING ============ -->
  <section class="section band-primary">
    <div class="wrap">
      <div class="split">
        <div class="reveal">
          <span class="kicker on-dark">Fees &amp; funding</span>
          <h2>Support to make it work.</h2>
          <p class="lead mt-s">We want quality early education to be within reach. A couple of options can help with the cost of care.</p>
        </div>
        <div class="reveal d1">
          <ul class="ticks on-dark">
            <li><span><strong>20 Hours ECE</strong>Available for eligible children, helping with the cost of your weekly hours.</span></li>
            <li><span><strong>WINZ subsidies</strong>Work and Income childcare subsidies are available for families who qualify.</span></li>
            <li><span><strong>Securing a future start</strong>For enrolments starting later, the first week's fees may be required to hold your place.</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ STORYPARK ============ -->
  <section class="section">
    <div class="wrap">
      <div class="split reverse">
        <?php $bvk_sp_img = bvk_image_data( 'enrolment', 'storypark_image', bvk_asset( 'images/walk-vests.webp' ), 'Tamariki sitting together in their Borman Village Kids hi-vis vests, ready for a walk.' ); ?>
        <div class="split-media reveal">
          <div class="framed">
            <img loading="lazy" decoding="async" src="<?php echo esc_url( $bvk_sp_img['src'] ); ?>" alt="<?php echo esc_attr( $bvk_sp_img['alt'] ); ?>">
          </div>
        </div>
        <div class="split-body reveal d1">
          <span class="kicker">Once you are with us</span>
          <h2>A window into your child's days.</h2>
          <div class="text-block stack">
            <?php bvk_rich( 'enrolment', 'storypark_text', "We record your child's learning through <strong>Storypark</strong>, a secure online space, shared privately with you as it happens.\n\nLocal walks and excursions are part of our curriculum, and our open-door policy means you are welcome any time." ); ?>
          </div>
          <div class="chips mt-m">
            <span class="chip">Secure portfolio</span>
            <span class="chip">Shared privately</span>
            <span class="chip">Open-door policy</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ WHAT WE OFFER RECAP ============ -->
  <section class="section band-sand">
    <div class="wrap">
      <div class="eyebrow-row">
        <div>
          <span class="kicker leaf">Good to know</span>
          <h2 class="mt-s">What is included in your child's day.</h2>
        </div>
      </div>
      <div class="grid-3">
        <article class="card card-top-rule reveal" style="border-top-color:var(--kowhai)">
          <details class="expander" open>
            <summary><h3>Meals made on-site</h3></summary>
            <p>Nutritious morning tea, lunch and afternoon tea, with allergies and dietary needs catered for.</p>
          </details>
        </article>
        <article class="card card-top-rule reveal d1" style="border-top-color:var(--leaf)">
          <details class="expander" open>
            <summary><h3>A Te Wh&#257;riki programme</h3></summary>
            <p>Care and learning woven together, following your child's interests and building confidence.</p>
          </details>
        </article>
        <article class="card card-top-rule reveal d2" style="border-top-color:var(--coral)">
          <details class="expander" open>
            <summary><h3>Qualified teachers</h3></summary>
            <p>100% qualified kaiako, staffed above the required ratios, for care you can trust.</p>
          </details>
        </article>
      </div>
    </div>
  </section>

  <!-- ============ CTA ============ -->
  <section class="section cta-band">
    <div class="wrap center">
      <span class="kicker on-dark" style="justify-content:center">Ready when you are</span>
      <h2 class="mt-s">Let's get started.</h2>
      <p class="maxw mx-auto mt-s">Begin with an enquiry so we can talk through availability, or jump straight to the enrolment application.</p>
      <div class="cta-actions">
        <a class="btn btn-primary btn-lg" href="<?php echo esc_url( BVK_ENQUIRY_URL ); ?>" target="_blank" rel="noopener">Make an enquiry <span class="arrow">&rarr;</span></a>
        <a class="btn btn-ghost-light btn-lg" href="<?php echo esc_url( BVK_ENROL_URL ); ?>" target="_blank" rel="noopener">Enrolment application</a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
