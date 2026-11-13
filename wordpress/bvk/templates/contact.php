<?php
/**
 * Template Name: Contact
 */

defined( 'ABSPATH' ) || exit;
get_header();
?>

  <!-- ============ PAGE HERO ============ -->
  <?php $bvk_hero = bvk_image_data( 'contact', 'hero_image', bvk_asset( 'images/location.webp' ), 'Aerial view of Borman Village Kids, showing the centre, car park and large outdoor play space.' ); ?>
  <section class="page-hero">
    <div class="page-hero-media">
      <img fetchpriority="high" src="<?php echo esc_url( $bvk_hero['src'] ); ?>" alt="<?php echo esc_attr( $bvk_hero['alt'] ); ?>">
    </div>
    <div class="wrap">
      <p class="crumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> &nbsp;/&nbsp; Contact</p>
      <span class="kicker">Kia ora, say hello</span>
      <h1>We would love to hear from you.</h1>
      <p>Whether you are ready to enrol or just have a question, our door, and our inbox, is always open.</p>
    </div>
  </section>

  <!-- ============ CONTACT DETAILS ============ -->
  <section class="section">
    <div class="wrap">
      <div class="split">
        <div class="split-body reveal">
          <span class="kicker">Get in touch</span>
          <h2>Come and visit our village.</h2>
          <p class="lead mt-s"><?php bvk_text( 'contact', 'intro_lead', 'The best way to know is to come and see us. Make an enquiry and we will arrange a time that suits.' ); ?></p>

          <div class="contact-list mt-l">
            <div class="contact-row">
              <span class="c-ico" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="square"><path d="M12 21s-7-6-7-11a7 7 0 0 1 14 0c0 5-7 11-7 11Z"/><circle cx="12" cy="10" r="2.4"/></svg></span>
              <div>
                <span class="lbl">Find us</span>
                <a class="val" href="https://maps.google.com/?q=70+Hare+Puke+Drive,+Hamilton+3210" target="_blank" rel="noopener">70 Hare Puke Drive, Hamilton 3210</a>
              </div>
            </div>
            <div class="contact-row">
              <span class="c-ico" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="square"><path d="M5 4h4l2 5-3 2a12 12 0 0 0 5 5l2-3 5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2Z"/></svg></span>
              <div>
                <span class="lbl">Phone</span>
                <a class="val" href="tel:+6479602125">07 960 2125</a>
              </div>
            </div>
            <div class="contact-row">
              <span class="c-ico" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="square"><path d="M3 6h18v12H3z"/><path d="m3 7 9 6 9-6"/></svg></span>
              <div>
                <span class="lbl">Email</span>
                <a class="val" href="mailto:todd@bormanvillagekids.co.nz">todd@bormanvillagekids.co.nz</a>
              </div>
            </div>
            <div class="contact-row">
              <span class="c-ico" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="square"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></span>
              <div>
                <span class="lbl">Opening hours</span>
                <span class="val">Monday to Friday, 7.30am &ndash; 5.30pm</span>
              </div>
            </div>
          </div>

          <div class="cta-actions" style="justify-content:flex-start;margin-top:2.2rem">
            <a class="btn btn-primary" href="<?php echo esc_url( BVK_ENQUIRY_URL ); ?>" target="_blank" rel="noopener">Make an enquiry <span class="arrow">&rarr;</span></a>
            <a class="btn btn-outline" href="<?php echo esc_url( BVK_ENROL_URL ); ?>" target="_blank" rel="noopener">Enrolment application</a>
          </div>
        </div>

        <?php $bvk_contact_img = bvk_image_data( 'contact', 'contact_image', bvk_asset( 'images/contact-centre.webp' ), 'A bright, airy classroom inside Borman Village Kids, with natural light, low shelves and a play teepee.' ); ?>
        <div class="split-media reveal d1">
          <div class="framed leaf tr">
            <img loading="lazy" decoding="async" src="<?php echo esc_url( $bvk_contact_img['src'] ); ?>" alt="<?php echo esc_attr( $bvk_contact_img['alt'] ); ?>">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ OPEN DOOR ============ -->
  <section class="section band-sand">
    <div class="wrap">
      <div class="split">
        <div class="reveal">
          <span class="kicker coral">Our open-door policy</span>
          <p class="pull mt-s">You are always welcome. <span class="hl">Any day, any time.</span></p>
        </div>
        <div class="reveal d1">
          <div class="text-block stack">
            <?php bvk_rich( 'contact', 'opendoor_text', 'We have an open-door policy. Families are welcome to be involved as much as they like.' . "\n\n" . 'Drop in to see the space, share a morning, or simply say kia ora. You and your tamariki are part of our community.', 'lead' ); ?>
          </div>
          <ul class="ticks mt-m">
            <li><span><strong>Visit any time</strong>No appointment needed to take a look around.</span></li>
            <li><span><strong>Stay involved</strong>Be as much a part of the day as you would like.</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ CTA ============ -->
  <section class="section cta-band">
    <div class="wrap center">
      <span class="kicker on-dark" style="justify-content:center">Nau mai, haere mai</span>
      <h2 class="mt-s">Start the conversation.</h2>
      <p class="maxw mx-auto mt-s">Send us an enquiry and we will be in touch to arrange a visit.</p>
      <div class="cta-actions">
        <a class="btn btn-primary btn-lg" href="<?php echo esc_url( BVK_ENQUIRY_URL ); ?>" target="_blank" rel="noopener">Enquire now <span class="arrow">&rarr;</span></a>
        <a class="btn btn-ghost-light btn-lg" href="<?php echo esc_url( home_url( '/enrolment/' ) ); ?>">How enrolment works</a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
