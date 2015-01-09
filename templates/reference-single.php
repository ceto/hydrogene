<?php while (have_posts()) : the_post(); ?>

  <article <?php post_class('refsingle'); ?>>
    <header class="refsingle__header">
      <?php get_template_part('templates/reference', 'singlehead'); ?>
    </header>
    <!-- <a name="singletop" id="singletop"></a> -->
    <section id="singletop" class="refsingle__reallife">
      <div class="wrapper wrapper--fullwidth">
        <div class="wrapper wrapper--wide">
          <h3 class="whiteblock__title">
            <small><?php the_title(); ?></small>
            <?php echo get_post_meta( get_the_ID(), '_refdata_subtitle', 1 ); ?>
            </h3>
          <p class="whiteblock__disclaimer">
            <?php echo get_post_meta( get_the_ID(), '_refdata_excerpt', 1 ); ?>
          </p>
        </div>
        
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
        <figure class="quotefigure">
          <img src="http://placehold.it/80/80" alt="">
          <figcaption>
            <span class="name">Koczó Levente</span>
            <span class="titulus">ügyvezető igazgatója</span>
          </figcaption>
        </figure>

        <blockquote class="refsingle__quote">
          <p>
            Komolyabb ráncfelvarrással kerestük meg a Hydrogenet akiket a referenciájuk alapján választottunk ki. Központjainkba történő jelentkezések, és az ügyfélkör ugrásszerű növekedése &mdash; az új arculatnak és weblapnak köszönhetően &mdash; jócskán felülmúlta várakozásunkat.
          </p>
          <!-- <cite>Koczó Levente<span class="titulus">a lorem ipsum ügyvezető igazgató</span></cite> -->
        </blockquote>
      </div>
    </section>


    <aside class="refsingle__shareblock">
      <div class="wrapper wrapper--wide">
        <?php get_template_part('templates/reference', 'share'); ?>
      </div>
    </aside>

    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>

    </footer>
  </article>
<?php endwhile; ?>
<?php get_template_part('templates/reference','navigation'); ?>