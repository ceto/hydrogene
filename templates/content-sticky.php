<article <?php post_class('singlepost'); ?>>
  <header class="singlepost__header niceheading niceheading--ashero">
    <div class="wrapper wrapper--wide">
      <section class="niceheading__preinfo">
        <?php get_template_part('templates/entry-meta'); ?>          
      </section>
      <h2 class="singlepost__title niceheading__title">
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h2>
      <p class="niceheading__disclaimer">
        <?php echo get_the_excerpt(); ?>
      </p>
      <a class="readmore" href="<?php the_permalink();?>"><?php _e('Tovább olvasom…','h2') ?></a>
      <hr>
    </div>
  </header>
</article>

