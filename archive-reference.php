<?php get_template_part('templates/page', 'header'); ?>
<section class="whiteblock">
  <div class="wrapper wrapper--normal">
    <h3 class="whiteblock--title"><small>legújabb webes és arculati</small>munkáink</h3>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat recusandae sequi animi tempore asperiores fuga repellendus, iure mollitia, hic veritatis ipsum cum culpa consequatur numquam minima illum esse, optio velit.
  </div>
</section>
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <?php get_template_part('templates/reference', 'widerow'); ?>
  </article>
<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>
