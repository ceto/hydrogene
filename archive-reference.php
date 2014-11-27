<div class="refarchive__header">
  <div class="wrapper wrapper--normal">
    <div class="innerwrap">
      <h1 class="refarchive__title"><?php _e('Kiemelt munkák','h2'); ?></h1>
      <div class="refarchive__headdesc">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, odio, quidem. Cum nisi, recusandae corporis, molestiae doloribus enim rerum nulla omnis eaque laborum delectus aliquam nobis iusto repudiandae minima sint.</p>
      </div>
    </div>
  </div>
</div>

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
