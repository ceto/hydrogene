<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('refsingle'); ?>>
    <header class="refsingle__header refrow">  
      <?php get_template_part('templates/reference', 'widerow'); ?>
    </header>
    <div class="wrapper wrapper--normal">
      <div class="refsingle__content">
        <?php the_content(); ?>
      </div>
    </div>
    
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
  </article>
<?php endwhile; ?>
