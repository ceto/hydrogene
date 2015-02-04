<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('singlepost'); ?>>
    <header class="singlepost__header niceheading niceheading--ashero">
      <div class="wrapper wrapper--wide">
        <section class="niceheading__preinfo">
          <?php get_template_part('templates/entry-meta'); ?>          
        </section>
        <h1 class="singlepost__title niceheading__title"><?php the_title(); ?></h1>
        <p class="niceheading__disclaimer">
          <?php echo get_the_excerpt(); ?>
        </p>
        <hr>
      </div>
    </header>
    <div class="singlepost__content">
      <div class="wrapper wrapper--normal">
        <?php the_content(); ?>
      </div>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php //comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
