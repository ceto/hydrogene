<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>

  <div class="wrap container" role="document">
    <div class="content row">
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
    </div><!-- /.content -->
  </div><!-- /.wrap -->
  <?php get_template_part('templates/footer','contact'); ?>
  
  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

  <?php if (is_page_template('template-contact.php')): ?>
    <!-- Google MAps -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script>

      function initialize() {
        var mapOptions = {
          styles: [
            {
              "stylers": [
                //{"invert_lightness": true},
                { "saturation": -100 },
                { "gamma": 1.94 }
              ]
            }
          ],
          zoom: 16,
          disableDefaultUI: true,
          mapTypeControl: false,
          // mapTypeControlOptions: {
          //   style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
          // },
          scrollwheel: false,
          zoomControl: false,
          // zoomControlOptions: {
          //   style: google.maps.ZoomControlStyle.SMALL
          // },
          center: new google.maps.LatLng(47.505175, 19.054692)
        };
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        var image = '<?php echo get_stylesheet_directory_uri(); ?>/assets/img/flag.png';
        var myLatLng = new google.maps.LatLng(62.756715, 7.274334);
        var beachMarker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          icon: image
        });
      }

      google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  <?php endif; ?>
  <div id="fb-root"></div>
  <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.async=true;
      js.src = "//connect.facebook.net/hu_HU/sdk.js#xfbml=1&appId=171677096215391&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>

  <script src="https://apis.google.com/js/platform.js" async defer>
    {lang: 'hu'}
  </script>

  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>


</body>
</html>
