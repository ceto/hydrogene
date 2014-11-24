<header class="banner" role="banner">
  <div class="container">
    <a class="banner__brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    
    <input type="checkbox" id="nav-toggle">
    <label class="nav-toggle" for="nav-toggle"><i class="ss-icon"></i><span>Menü</span></label>
    <nav class="navigation--main" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav--main nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>
