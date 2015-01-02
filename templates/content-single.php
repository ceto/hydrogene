<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header class="single__header">
      <div class="wrapper wrapper--wide">
        <h1 class="single__title"><?php the_title(); ?></h1>
        <?php get_template_part('templates/entry-meta'); ?>
      </div>
    </header>
    <div class="single__content">
      <div class="wrapper wrapper--normal">
        <?php the_content(); ?>
      </div>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
