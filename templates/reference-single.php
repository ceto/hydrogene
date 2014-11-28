<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('refsingle'); ?>>
    <header class="refsingle__header">  
      <?php get_template_part('templates/reference', 'singlehead'); ?>
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
