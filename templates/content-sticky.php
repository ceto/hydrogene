<article <?php post_class('singlepost'); ?>>
  <div class="wrapper wrapper--wide">
    <header class="singlepost__header niceheading niceheading--ashero">
        <section class="niceheading__preinfo animated fadeInUp">
          <?php get_template_part('templates/entry-meta'); ?>          
        </section>
        <h2 class="singlepost__title niceheading__title animated fadeInUp">
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h2>
        <p class="niceheading__disclaimer animated fadeInUp">
          <?php echo get_the_excerpt(); ?>
        </p>
        <a class="readmore animated fadeInUp" href="<?php the_permalink();?>"><?php _e('Tovább olvasom…','h2') ?></a>
        <hr class="animated fadeInUp">
    </header>
  </div>
</article>

