<!-- <section class="topmenubg"></section> -->
<?php while (have_posts()) : the_post(); ?>

  <article <?php post_class('refsingle'); ?>>
    <header class="refsingle__header">
      <?php get_template_part('templates/reference', 'singlehead'); ?>
    </header>
    <!-- <a name="singletop" id="singletop"></a> -->



    <section class="niceheading niceheading--refheading">
  <div class="wrapper wrapper--wide">
      <h3 class="niceheading__title"><small>így készült</small><?php the_title(); ?></h3>
      <p class="niceheading__disclaimer"><?php echo get_post_meta( get_the_ID(), '_refdata_excerpt', 1 ); ?></p>
  </div>
</section>

    <section id="singletop" class="refsingle__reallife">
      <div class="wrapper wrapper--wide">
<!--         <div class="wrapper wrapper--wide">
          <h3 class="whiteblock__title">
            <small><?php the_title(); ?></small>
            <?php echo get_post_meta( get_the_ID(), '_refdata_subtitle', 1 ); ?>
            </h3>
          <p class="whiteblock__disclaimer">
            <?php echo get_post_meta( get_the_ID(), '_refdata_excerpt', 1 ); ?>
          </p>
        </div> -->
        
        <?php
          $realimage = wp_get_attachment_image( get_post_meta( get_the_ID(), '_refdata_reallife_id', 1 ), 'full');
          //var_dump($realimage);
        ?>
        <?php echo $realimage; ?>
      </div>
    </section>

    <div class="wrapper wrapper--normal">
      <div class="refsingle__content">
        <?php the_content(); ?>
      </div>
    </div>


    <section class="refsingle__quoteblock">
      <div class="wrapper wrapper--wide">
        <blockquote class="refsingle__quote">
          <p>
            Referenciájuk alapján választottunk ki a Hydrogenet. A online jelentkezések száma, és az ügyfélkör ugrásszerű növekedése &mdash; az új arculatnak és weblapnak köszönhetően &mdash; jócskán felülmúlta várakozásunkat.
          </p>
          <cite>Koczó Levente, <span class="titulus">Somnocenter ügyvezető igazgató</span></cite>          
        </blockquote>
      </div>
    </section>



    <?php get_template_part('templates/reference', 'connect'); ?>

    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>

    </footer>
  </article>
<?php endwhile; ?>
<!-- <section class="pageheader">
  <div class="wrapper wrapper--wide">
    <div class="pageheader__content">
      <h3 class="pageheader__title">nézd meg a következőt</h3>
    </div>
  </div>
</section> -->

<?php get_template_part('templates/reference','navigation'); ?>