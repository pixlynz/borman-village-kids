<?php
defined( 'ABSPATH' ) || exit;
get_header();
?>

  <!-- ============ HERO ============ -->
  <?php $bvk_hero = bvk_image_data( 'home', 'hero_image', bvk_asset( 'images/outdoor-wide.webp' ), "The natural outdoor play space at Borman Village Kids, with timber boardwalks, shade sails and young trees under a clear blue sky." ); ?>
  <section class="hero">
    <div class="hero-media">
      <img src="<?php echo esc_url( $bvk_hero['src'] ); ?>" alt="<?php echo esc_attr( $bvk_hero['alt'] ); ?>" fetchpriority="high">
    </div>
    <div class="wrap hero-inner">
      <span class="kicker">Ng&#257; mihi nui, welcome</span>
      <h1><?php bvk_text( 'home', 'hero_heading', 'A home away from home, for your little one.' ); ?></h1>
      <p class="hero-sub"><?php bvk_text( 'home', 'hero_text', 'A purpose-built early learning village where your tamariki are cared for, known by name, and free to explore.' ); ?></p>
      <div class="hero-actions">
        <a class="btn btn-primary btn-lg" href="<?php echo esc_url( BVK_ENQUIRY_URL ); ?>" target="_blank" rel="noopener">Enquire about a place <span class="arrow">&rarr;</span></a>
        <a class="btn btn-ghost-light btn-lg" href="<?php echo esc_url( home_url( '/about/' ) ); ?>">Take a look around</a>
      </div>
    </div>
  </section>

  <!-- ============ WELCOME ============ -->
  <section class="section">
    <div class="wrap">
      <div class="split">
        <div class="split-body reveal">
          <span class="kicker">Our village</span>
          <h2>A calm, happy place where your child belongs.</h2>
          <div class="text-block stack">
            <?php bvk_rich( 'home', 'welcome_text', "Somewhere your child feels safe and settled, and somewhere you do too.\n\nWe are a small community of tamariki, wh\xc4\x81nau and kaiako. We take the time to know your family and reflect your hopes for your child. Our door is always open.", 'lead' ); ?>
          </div>
        </div>
        <?php $bvk_welcome_img = bvk_image_data( 'home', 'welcome_image', bvk_asset( 'images/baby.webp' ), 'A young child in a floral dress smiling as she plays with a wooden puzzle at a low table.' ); ?>
        <div class="split-media reveal d1">
          <div class="framed">
            <img loading="lazy" decoding="async" src="<?php echo esc_url( $bvk_welcome_img['src'] ); ?>" alt="<?php echo esc_attr( $bvk_welcome_img['alt'] ); ?>">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ THREE PILLARS ============ -->
  <section class="section band-sand">
    <div class="wrap">
      <div class="eyebrow-row">
        <div>
          <span class="kicker coral">What matters to us</span>
          <h2 class="mt-s">The things that make the days good.</h2>
        </div>
        <p class="maxw"><?php bvk_text( 'home', 'pillars_intro', 'Small choices, made with care every day, from the kai on the table to the people in the room.' ); ?></p>
      </div>
      <?php
      $bvk_kai_img = bvk_image_data( 'home', 'pillar_kai_image', bvk_asset( 'images/kai-comp.webp' ), 'A child choosing from colourful plates of fresh fruit and vegetables at mealtime.' );
      $bvk_curr_img = bvk_image_data( 'home', 'pillar_curriculum_image', bvk_asset( 'images/home-gallery-1.webp' ), 'Two young children exploring and sorting together at a table.' );
      $bvk_teach_img = bvk_image_data( 'home', 'pillar_teachers_image', bvk_asset( 'images/teachers.webp' ), 'Two Borman Village Kids teachers smiling together in their branded t-shirts.' );
      ?>
      <div class="grid-3">
        <article class="card card-photo accent-sun reveal">
          <!-- COMP ONLY: watermarked Unsplash+ preview for client approval. Replace with the licensed file once rights are purchased. -->
          <div class="card-photo-top">
            <img loading="lazy" decoding="async" src="<?php echo esc_url( $bvk_kai_img['src'] ); ?>" alt="<?php echo esc_attr( $bvk_kai_img['alt'] ); ?>">
          </div>
          <details class="card-photo-body expander" open>
            <summary><h3>Nutritious kai, made on-site</h3></summary>
            <p><?php bvk_text( 'home', 'pillar_kai_text', 'Morning tea, lunch and afternoon tea, cooked fresh here each day. Organic where we can, and every dietary need catered for.' ); ?></p>
          </details>
        </article>
        <article class="card card-photo accent-leaf reveal d1">
          <div class="card-photo-top">
            <img loading="lazy" decoding="async" src="<?php echo esc_url( $bvk_curr_img['src'] ); ?>" alt="<?php echo esc_attr( $bvk_curr_img['alt'] ); ?>">
          </div>
          <details class="card-photo-body expander" open>
            <summary><h3>Guided by Te Wh&#257;riki</h3></summary>
            <p><?php bvk_text( 'home', 'pillar_curriculum_text', "Aotearoa's early childhood curriculum, weaving care and learning together so children grow into confident learners." ); ?></p>
          </details>
        </article>
        <article class="card card-photo accent-coral reveal d2">
          <div class="card-photo-top">
            <img loading="lazy" decoding="async" src="<?php echo esc_url( $bvk_teach_img['src'] ); ?>" alt="<?php echo esc_attr( $bvk_teach_img['alt'] ); ?>" style="object-position: center 22%">
          </div>
          <details class="card-photo-body expander" open>
            <summary><h3>100% qualified kaiako</h3></summary>
            <p><?php bvk_text( 'home', 'pillar_teachers_text', 'Every teacher in our required ratio is fully qualified. We add more on top too, primary-trained and in training, so there is always time for your child.' ); ?></p>
          </details>
        </article>
      </div>
    </div>
  </section>

  <!-- ============ OUR VILLAGE STORY ============ -->
  <section class="section">
    <div class="wrap">
      <div class="split reverse">
        <div class="split-media reveal">
          <div class="framed leaf tr">
            <video class="framed-media" autoplay muted loop playsinline preload="metadata"
                   poster="<?php echo esc_url( bvk_asset( 'images/outdoor-poster.webp' ) ); ?>"
                   aria-label="A walkthrough of the purpose-built Borman Village Kids centre.">
              <source src="<?php echo esc_url( bvk_asset( 'images/outdoor.mp4' ) ); ?>" type="video/mp4">
            </video>
          </div>
        </div>
        <div class="split-body reveal d1">
          <span class="kicker leaf">Purpose built, by us</span>
          <h2>A centre designed around how children actually grow.</h2>
          <div class="text-block stack">
            <?php bvk_rich( 'home', 'story_text', "We designed our centre ourselves, with classrooms shaped to each age and spaces that exceed the Ministry's requirement for room per child.\n\nInside and out, we use natural materials and leave plenty of room to explore, dig, build and rest." ); ?>
          </div>
          <a class="btn btn-outline mt-m" href="<?php echo esc_url( home_url( '/about/' ) ); ?>">Our story <span class="arrow">&rarr;</span></a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ KAI BAND ============ -->
  <section class="section band-primary">
    <div class="wrap">
      <div class="split">
        <div class="reveal">
          <span class="kicker on-dark">Kai made with love</span>
          <p class="pull mt-s">Good food is the heart of a good day. <span class="hl">Ours is cooked fresh, right here.</span></p>
        </div>
        <div class="reveal d1">
          <ul class="ticks on-dark">
            <li><span><strong>Three meals, every day</strong>Morning tea, lunch and afternoon tea, prepared on-site.</span></li>
            <li><span><strong>Organic and whole foods</strong>We choose fresh, whole ingredients wherever possible.</span></li>
            <li><span><strong>Every child catered for</strong>Allergies and dietary requirements are always looked after.</span></li>
            <li><span><strong>Shared at the table</strong>Kai time is a calm, social part of learning together.</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ AGE STAGES ============ -->
  <section class="section">
    <div class="wrap">
      <div class="center maxw mx-auto reveal">
        <span class="kicker">One village, three stages</span>
        <h2 class="mt-s">From first steps to school-ready.</h2>
        <p class="mt-s mx-auto">As your child grows, they move gently through spaces built for each stage.</p>
      </div>
      <div class="grid-3 mt-l">
        <article class="card card-top-rule reveal" style="border-top-color: var(--kowhai)">
          <details class="expander" open>
            <summary><h3>Infants</h3></summary>
            <p>Unhurried care for our youngest tamariki, with warm routines and teachers who follow their rhythms.</p>
          </details>
        </article>
        <article class="card card-top-rule reveal d1" style="border-top-color: var(--leaf)">
          <details class="expander" open>
            <summary><h3>Toddlers</h3></summary>
            <p>A busy, curious stage. We support confident transitions as little ones find their feet and their friendships.</p>
          </details>
        </article>
        <article class="card card-top-rule reveal d2" style="border-top-color: var(--coral)">
          <details class="expander" open>
            <summary><h3>Preschool</h3></summary>
            <p>A rich programme building the skills and confidence children carry to school and beyond.</p>
          </details>
        </article>
      </div>
    </div>
  </section>

  <!-- ============ GALLERY MOSAIC ============ -->
  <section class="section band-sand">
    <div class="wrap wrap-wide">
      <div class="eyebrow-row">
        <div>
          <span class="kicker leaf">A day at the village</span>
          <h2 class="mt-s">Precious moments, precious tamariki.</h2>
        </div>
        <a class="btn btn-outline" href="<?php echo esc_url( home_url( '/enrolment/' ) ); ?>">Come and visit <span class="arrow">&rarr;</span></a>
      </div>
      <div class="mosaic reveal">
        <figure class="m-a"><img loading="lazy" decoding="async" src="<?php echo esc_url( bvk_asset( 'images/home-gallery-1.webp' ) ); ?>" alt="Two young children sorting coloured objects into glass jars at a table."></figure>
        <figure class="m-b"><img loading="lazy" decoding="async" src="<?php echo esc_url( bvk_asset( 'images/room.webp' ) ); ?>" alt="A bright classroom with a plywood table and colourful stools."></figure>
        <figure class="m-c"><img loading="lazy" decoding="async" src="<?php echo esc_url( bvk_asset( 'images/craft.webp' ) ); ?>" alt="A craft table set with jars of coloured pencils and natural wooden pieces."></figure>
        <figure class="m-d"><img loading="lazy" decoding="async" src="<?php echo esc_url( bvk_asset( 'images/bikes.webp' ) ); ?>" alt="Two trikes parked on the grass beside a stop sign in the play area."></figure>
        <figure class="m-e"><img loading="lazy" decoding="async" src="<?php echo esc_url( bvk_asset( 'images/outdoor.webp' ) ); ?>" alt="The outdoor boardwalk and planted play space."></figure>
        <figure class="m-f"><img loading="lazy" decoding="async" src="<?php echo esc_url( bvk_asset( 'images/play.webp' ) ); ?>" alt="A child concentrating on a wooden puzzle."></figure>
      </div>
    </div>
  </section>

  <!-- ============ STORYPARK ============ -->
  <?php $bvk_sp_img = bvk_image_data( 'home', 'storypark_image', bvk_asset( 'images/craft.webp' ), 'A tidy craft area with jars of coloured pencils, ready for the day.' ); ?>
  <section class="section">
    <div class="wrap">
      <div class="split">
        <div class="split-media reveal">
          <div class="framed coral">
            <img loading="lazy" decoding="async" src="<?php echo esc_url( $bvk_sp_img['src'] ); ?>" alt="<?php echo esc_attr( $bvk_sp_img['alt'] ); ?>">
          </div>
        </div>
        <div class="split-body reveal d1">
          <span class="kicker coral">Stay close, every day</span>
          <h2>See the little moments, as they happen.</h2>
          <div class="text-block stack">
            <?php bvk_rich( 'home', 'storypark_text', "We record your child's learning through <strong>Storypark</strong>, a secure online space where we share photos, stories and progress, privately with you.\n\nLocal walks and excursions are part of our curriculum, and our open-door policy means you are welcome any time." ); ?>
          </div>
          <div class="chips mt-m">
            <span class="chip">Secure &amp; private</span>
            <span class="chip">Photos &amp; stories</span>
            <span class="chip">Open-door policy</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ CTA ============ -->
  <section class="section cta-band">
    <div class="wrap center">
      <span class="kicker on-dark" style="justify-content:center">We would love to meet you</span>
      <h2 class="mt-s">Come and see if we are the right fit.</h2>
      <p class="maxw mx-auto mt-s">The best way to know is to visit. Enrolment is subject to availability, so send an enquiry and we will be in touch.</p>
      <div class="cta-actions">
        <a class="btn btn-primary btn-lg" href="<?php echo esc_url( BVK_ENQUIRY_URL ); ?>" target="_blank" rel="noopener">Enquire now <span class="arrow">&rarr;</span></a>
        <a class="btn btn-ghost-light btn-lg" href="<?php echo esc_url( home_url( '/enrolment/' ) ); ?>">How enrolment works</a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
