<header class="banner" role="banner">
    <div class="wrapper wrapper--wide">
    <a class="banner__brand" href="<?php echo esc_url(home_url('/')); ?>">
      <img src="<?php echo get_stylesheet_directory_uri().'/assets/img/logo_black.png'; ?>" alt="Hydrogene">
    </a>
    <?php h2_pagetitle(); ?>
    <input type="checkbox" id="nav-toggle">
    <label class="nav-toggle" for="nav-toggle"><i class="ss-icon"></i><span>Menü</span></label>
    <nav class="navigation--main" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav--main nav navbar-nav'));
        endif;
      ?>
    </nav>
    <hr>
    </div>
</header>
