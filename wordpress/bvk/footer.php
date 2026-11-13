<?php
defined( 'ABSPATH' ) || exit;
?>
</main>

<!-- ============ FOOTER ============ -->
<footer class="site-footer">
  <div class="wrap footer-top">
    <div class="footer-brand">
      <img loading="lazy" decoding="async" class="f-logo" src="<?php echo esc_url( bvk_asset( 'images/logo-white.avif' ) ); ?>" alt="Borman Village Kids">
      <p>A home away from home for your little one, a purpose-built early learning village where tamariki and wh&#257;nau feel welcome, supported, and free to thrive.</p>
      <div class="footer-social">
        <a href="https://www.facebook.com/bormanvillagekids" target="_blank" rel="noopener" aria-label="Borman Village Kids on Facebook">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="square"><path d="M15 8h-2a2 2 0 0 0-2 2v10M9 13h4"/><path d="M15 3h-3a5 5 0 0 0-5 5v14"/></svg>
        </a>
        <a href="https://www.instagram.com/bormanvillagekids/" target="_blank" rel="noopener" aria-label="Borman Village Kids on Instagram">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="square"><rect x="3" y="3" width="18" height="18"/><circle cx="12" cy="12" r="4.2"/><path d="M17.2 6.8h.01"/></svg>
        </a>
      </div>
    </div>
    <div class="footer-col">
      <h4>Explore</h4>
      <ul>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
        <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About us</a></li>
        <li><a href="<?php echo esc_url( home_url( '/team/' ) ); ?>">Our team</a></li>
        <li><a href="<?php echo esc_url( home_url( '/enrolment/' ) ); ?>">Enrolment</a></li>
        <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
      </ul>
    </div>
    <div class="footer-col footer-hours">
      <h4>Visit us</h4>
      <ul>
        <li><span class="lbl">Open</span><span>Monday to Friday</span></li>
        <li><span class="lbl">Hours</span><span>7.30am &ndash; 5.30pm</span></li>
        <li style="margin-top:1rem">Our door is always open, you are welcome any time.</li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Get in touch</h4>
      <ul>
        <li><a href="https://maps.google.com/?q=70+Hare+Puke+Drive,+Hamilton+3210" target="_blank" rel="noopener">70 Hare Puke Drive, Hamilton 3210</a></li>
        <li><a href="tel:+6479602125">07 960 2125</a></li>
        <li><a href="<?php echo esc_url( BVK_ENQUIRY_URL ); ?>" target="_blank" rel="noopener">Make an enquiry</a></li>
        <li><a href="<?php echo esc_url( BVK_ENROL_URL ); ?>" target="_blank" rel="noopener">Enrolment application</a></li>
        <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Find us &amp; hours</a></li>
      </ul>
    </div>
  </div>
  <div class="wrap footer-bar">
    <span>&copy; <span data-year><?php echo esc_html( gmdate( 'Y' ) ); ?></span> Borman Village Kids. Ng&#257; mihi.</span>
    <div class="footer-bar-right">
      <div class="chips-mini">
        <span>20 Hours ECE</span>
        <span>WINZ subsidies</span>
        <span>Mon&ndash;Fri 7.30am&ndash;5.30pm</span>
      </div>
      <a class="credit" href="https://pixly.co.nz" target="_blank" rel="noopener">Website by Pixly</a>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
