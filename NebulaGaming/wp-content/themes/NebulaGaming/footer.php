<footer class="_footer">
  <div class="container">
    <div class="row footer-top">
      <div class="col-md-4">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nebulalogo.png" alt="Nebula Logo" class="footer-logo">
        <p class="footer-tagline">Level up. Lock in. Let’s dominate.</p>
      </div>
      <div class="col-md-4">
        <h5>Quick Links</h5>
        <?php
          wp_nav_menu(array(
            'theme_location' => 'secondary',
            'menu_class' => 'footer-menu',
            'container' => false,
          ));
        ?>
      </div>
      <div class="col-md-4">
        <h5>Follow Us</h5>
        <ul class="social-icons">
          <li><a href="#"><i class="ph ph-twitch-logo"></i></a></li>
          <li><a href="#"><i class="ph ph-discord-logo"></i></a></li>
          <li><a href="#"><i class="ph ph-twitter-logo"></i></a></li>
          <li><a href="#"><i class="ph ph-youtube-logo"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom text-center">
      <p>&copy; <?php echo date('Y'); ?> Nebula Gaming. All rights reserved.</p>
    </div>
  </div>
</footer>
