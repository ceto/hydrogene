<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

<?php if ( WP_ENV == 'production' && !current_user_can('manage_options')) : ?>
  <!-- Google Tag Manager -->
  <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NDCBRN"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-NDCBRN');</script>
  <!-- End Google Tag Manager -->
<?php endif; ?>

  <!--[if lt IE 9]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>

  <div class="document" role="document">
      <main class="main" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar" role="complementary">
          <div class="wrapper wrapper--wide">
            <?php include roots_sidebar_path(); ?>
          </div>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
  </div><!-- /.wrap -->
  
  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>
  
  <!-- auto-hide mobile address bar !-->
  <script type="application/x-javascript">
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1);
    }
  </script> 

</body>
</html>
