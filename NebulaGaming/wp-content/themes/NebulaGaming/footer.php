<footer class="_footer">
  <div class="container">
    <div class="row footerTop">
      <div class="col-md-4">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nebulalogo.png" alt="Nebula Logo">
        <p class="footerTagline">Level up. Lock in. Let’s dominate.</p>
      </div>
      <div class="col-md-4">
        <h5>Quick Links</h5>
        <?php
          wp_nav_menu(array(
            'theme_location' => 'secondary',
            'menu_class' => 'footerMenu',
            'container' => false,
          ));
        ?>
      </div>
      <div class="col-md-4">
        <h5>Follow Us</h5>
        <ul class="socialIcons">
          <li><a href="#"><i class="ph ph-twitch-logo"></i></a></li>
          <li><a href="#"><i class="ph ph-discord-logo"></i></a></li>
          <li><a href="#"><i class="ph ph-x-logo"></i></a></li>
          <li><a href="#"><i class="ph ph-youtube-logo"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="footerBottom text-center">
      <p>&copy; <?php echo date('Y'); ?> Nebula Gaming. All rights reserved.</p>
    </div>
  </div>
</footer>
