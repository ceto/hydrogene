<article <?php post_class('blogentry'); ?>>
  <header>
    <h2 class="blogentry__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="blogentry__summary">
    <?php the_excerpt(); ?>
  </div>
</article>
