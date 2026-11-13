<?php
/**
 * Template Name: About
 */

defined( 'ABSPATH' ) || exit;
get_header();
?>

  <!-- ============ PAGE HERO ============ -->
  <?php $bvk_hero = bvk_image_data( 'about', 'hero_image', bvk_asset( 'images/outdoor.webp' ), 'The natural outdoor play area with boardwalks, shade sails and young trees.' ); ?>
  <section class="page-hero">
    <div class="page-hero-media">
      <img fetchpriority="high" src="<?php echo esc_url( $bvk_hero['src'] ); ?>" alt="<?php echo esc_attr( $bvk_hero['alt'] ); ?>">
    </div>
    <div class="wrap">
      <p class="crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> &nbsp;/&nbsp; About</p>
      <span class="kicker">Ko wai m&#257;tou, who we are</span>
      <h1>Everything we have learnt, in one village.</h1>
      <p>Borman Village Kids reflects all that we have gathered over our years in early childhood, and what we believe is best practice for tamariki and their wh&#257;nau.</p>
    </div>
  </section>

  <!-- ============ INTRO ============ -->
  <section class="section">
    <div class="wrap center maxw mx-auto reveal">
      <p class="lead"><?php bvk_text( 'about', 'intro_lead', "We have a community where parents and children feel supported and can thrive, where you have a voice and we reflect your family's values and hopes." ); ?></p>
    </div>
  </section>

  <!-- ============ FAMILY FOCUS ============ -->
  <section class="section band-sand">
    <div class="wrap">
      <div class="split">
        <?php $bvk_family_img = bvk_image_data( 'about', 'family_image', bvk_asset( 'images/todd-owner.webp' ), 'Todd, the owner of Borman Village Kids, smiling warmly.' ); ?>
        <div class="split-media reveal">
          <div class="framed">
            <img loading="lazy" decoding="async" src="<?php echo esc_url( $bvk_family_img['src'] ); ?>" alt="<?php echo esc_attr( $bvk_family_img['alt'] ); ?>">
          </div>
        </div>
        <div class="split-body reveal d1">
          <span class="kicker">Family focus</span>
          <h2>Run by a family, for families.</h2>
          <div class="text-block stack">
            <?php bvk_rich( 'about', 'family_text', "Our owner is a father of four and has been a centre owner-operator since May 2000. That experience shapes everything here.\n\nBorman Village Kids is decades of learning about what helps children, and families, feel settled, safe and ready to thrive." ); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ PURPOSE BUILT ============ -->
  <section class="section">
    <div class="wrap">
      <div class="split reverse">
        <?php $bvk_purpose_img = bvk_image_data( 'about', 'purpose_image', bvk_asset( 'images/explore.webp' ), 'Aerial view of the purpose-built Borman Village Kids centre, with car park, covered decks and a large planted outdoor play area.' ); ?>
        <div class="split-media reveal">
          <div class="framed leaf tr">
            <img loading="lazy" decoding="async" src="<?php echo esc_url( $bvk_purpose_img['src'] ); ?>" alt="<?php echo esc_attr( $bvk_purpose_img['alt'] ); ?>">
          </div>
        </div>
        <div class="split-body reveal d1">
          <span class="kicker leaf">Purpose-built design</span>
          <h2>Spaces designed around your child.</h2>
          <div class="text-block stack">
            <?php bvk_rich( 'about', 'purpose_text', 'We designed our centre ourselves, with classrooms shaped to the developmental needs of each age.' . "\n\n" . "We focus on infant care, toddler transitions and preschool, in calm, natural spaces that exceed the Ministry's requirement for room per child." ); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ SPACE NUMBERS ============ -->
  <section class="section band-primary">
    <div class="wrap">
      <div class="center maxw mx-auto reveal">
        <span class="kicker on-dark" style="justify-content:center">Built with room to breathe</span>
        <h2 class="mt-s">More space, more nature, more time.</h2>
      </div>
      <!-- Desktop: full stats -->
      <div class="numbers numbers-desktop mt-l reveal d1">
        <div>
          <div class="n">3</div>
          <div class="l">Distinct stages, for infants, toddlers and preschool.</div>
        </div>
        <div>
          <div class="n">100<span class="u">%</span></div>
          <div class="l">Qualified teachers for our required teacher to child ratio.</div>
        </div>
        <div>
          <div class="n">26<span class="u">+</span></div>
          <div class="l">Years owned and operated by an early childhood family.</div>
        </div>
      </div>
      <!-- Mobile: compact stats -->
      <div class="numbers numbers-mobile mt-l reveal d1">
        <div>
          <div class="n">3</div>
          <div class="l">Age stages</div>
        </div>
        <div>
          <div class="n">100<span class="u">%</span></div>
          <div class="l">Qualified teachers</div>
        </div>
        <div>
          <div class="n">26<span class="u">+</span></div>
          <div class="l">Years' experience</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ TE WH&#256;RIKI ============ -->
  <section class="section">
    <div class="wrap">
      <div class="split">
        <div class="split-body reveal">
          <span class="kicker">Our curriculum</span>
          <h2>Learning woven through the day.</h2>
          <div class="text-block stack">
            <?php bvk_rich( 'about', 'curriculum_text', "Our programme is based on <strong>Te Wh\xc4\x81riki</strong>, New Zealand's early childhood curriculum, weaving care and education through planned and everyday moments.\n\nThose moments build the knowledge, skills and attitudes that grow confident, capable learners." ); ?>
          </div>
          <ul class="ticks mt-m">
            <li><span><strong>Care and education together</strong>Not one or the other, both, all day.</span></li>
            <li><span><strong>Planned and spontaneous</strong>We follow children's interests as they unfold.</span></li>
            <li><span><strong>Local walks and excursions</strong>The neighbourhood is part of our classroom.</span></li>
          </ul>
        </div>
        <?php $bvk_curr_img2 = bvk_image_data( 'about', 'curriculum_image', bvk_asset( 'images/walk-excursion.webp' ), 'Tamariki walking together in hi-vis vests on a local neighbourhood walk.' ); ?>
        <div class="split-media reveal d1">
          <div class="framed tr">
            <img loading="lazy" decoding="async" src="<?php echo esc_url( $bvk_curr_img2['src'] ); ?>" alt="<?php echo esc_attr( $bvk_curr_img2['alt'] ); ?>">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ KAI ============ -->
  <section class="section band-sand">
    <div class="wrap">

      <!-- Desktop: original cards -->
      <div class="kai-desktop">
        <div class="eyebrow-row">
          <div>
            <span class="kicker">Kai</span>
            <h2 class="mt-s">Nourishing food, made on-site.</h2>
          </div>
          <p class="maxw">Cooked here each day with organic and whole foods where possible, and every dietary need catered for.</p>
        </div>
        <div class="grid-3">
          <article class="card accent-sun reveal">
            <span class="card-badge" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="square"><path d="M4 11h16a8 8 0 0 1-16 0Z"/><path d="M6 11V7M10 11V6M14 11V7"/><path d="M4 20h16"/></svg></span>
            <h3>Three meals a day</h3>
            <p>Morning tea, a hot lunch and afternoon tea, freshly prepared in our own kitchen.</p>
          </article>
          <article class="card accent-leaf reveal d1">
            <span class="card-badge" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="square"><path d="M12 21c0-7 4-11 9-12-1 8-5 11-9 12Z"/><path d="M12 21C7 21 3 17 3 9c5 1 8 4 9 8"/><path d="M12 21v-6"/></svg></span>
            <h3>Whole &amp; organic</h3>
            <p>We choose fresh, whole and organic ingredients wherever we can.</p>
          </article>
          <article class="card accent-coral reveal d2">
            <span class="card-badge" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="square"><path d="M12 21s-7-4.5-7-10a4 4 0 0 1 7-2.5A4 4 0 0 1 19 11c0 5.5-7 10-7 10Z"/></svg></span>
            <h3>Everyone catered for</h3>
            <p>Allergies and dietary requirements are always carefully looked after.</p>
          </article>
        </div>
      </div>

      <!-- Mobile: compact icon row -->
      <div class="kai-mobile">
        <span class="kicker">Kai</span>
        <h2 class="mt-s">Nourishing food, made on-site.</h2>
        <div class="kai-row mt-l reveal">
          <div class="kai-item">
            <span class="kai-ico sun" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="square"><path d="M4 11h16a8 8 0 0 1-16 0Z"/><path d="M6 11V7M10 11V6M14 11V7"/><path d="M4 20h16"/></svg></span>
            <p><strong>Three meals a day.</strong> Morning tea, lunch and afternoon tea.</p>
          </div>
          <div class="kai-item">
            <span class="kai-ico leaf" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="square"><path d="M12 21c0-7 4-11 9-12-1 8-5 11-9 12Z"/><path d="M12 21C7 21 3 17 3 9c5 1 8 4 9 8"/><path d="M12 21v-6"/></svg></span>
            <p><strong>Whole and organic.</strong> Whole food ingredients wherever we can.</p>
          </div>
          <div class="kai-item">
            <span class="kai-ico coral" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="square"><path d="M12 21s-7-4.5-7-10a4 4 0 0 1 7-2.5A4 4 0 0 1 19 11c0 5.5-7 10-7 10Z"/></svg></span>
            <p><strong>Everyone catered for.</strong> Every allergy and dietary need.</p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ============ VALUES / OPEN DOOR ============ -->
  <section class="section">
    <div class="wrap">
      <div class="split">
        <div class="split-body reveal">
          <span class="kicker leaf">Our promise to you</span>
          <h2>An open door, and a listening ear.</h2>
          <div class="text-block stack">
            <?php bvk_rich( 'about', 'opendoor_text', "We have an open-door policy. Wh\xc4\x81nau are welcome to visit, share, and be part of the day, as much as they like.\n\nWe share your child's learning through Storypark, a secure online portfolio, privately with your family." ); ?>
          </div>
        </div>
        <div class="split-body reveal d1">
          <ul class="ticks">
            <li><span><strong>Your voice matters</strong>We listen, and reflect your family's values and aspirations.</span></li>
            <li><span><strong>Come in any time</strong>Families are always welcome, take a look, stay a while.</span></li>
            <li><span><strong>A true community</strong>A place where children and parents feel supported to thrive.</span></li>
            <li><span><strong>Shared learning</strong>Photos and stories through Storypark, privately with you.</span></li>
          </ul>
          <a class="btn btn-outline mt-m" href="<?php echo esc_url( home_url( '/team/' ) ); ?>">Meet our team <span class="arrow">&rarr;</span></a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ CTA ============ -->
  <section class="section cta-band">
    <div class="wrap center">
      <span class="kicker on-dark" style="justify-content:center">Nau mai, haere mai</span>
      <h2 class="mt-s">Feel it for yourself.</h2>
      <p class="maxw mx-auto mt-s">The best way to know our village is to visit. We would love to show you around.</p>
      <div class="cta-actions">
        <a class="btn btn-primary btn-lg" href="<?php echo esc_url( BVK_ENQUIRY_URL ); ?>" target="_blank" rel="noopener">Book a look around <span class="arrow">&rarr;</span></a>
        <a class="btn btn-ghost-light btn-lg" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Get in touch</a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
