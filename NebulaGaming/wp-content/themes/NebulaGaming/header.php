<header>
  <div class="container-fluid">
    <div class="row">
      <div class="col-5">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/nebulalogo.png" alt="Nebula logo">
        </a>
      </div>
      <div class="col-7">
        <nav>
          <?php
            wp_nav_menu(array(
              'theme_location' => 'primary'
            ));
          ?>
        </nav>
      </div>
    </div>
  </div>
  <div class="header-border"></div>
</header>
