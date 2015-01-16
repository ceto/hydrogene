<section class="topmenubg"></section>
<section class="niceheading">
  <div class="wrapper wrapper--wide">
      <h3 class="niceheading__title"><small>Egyedi munkák</small>weben mobilon és offline</h3>
      <p class="niceheading__disclaimer"><strong>Nézd meg miket csinálunk.</strong> A feladatok külöbözőek, akárcsak a megoldások. Több tucat sikeres projekt közül megmutatjuk a kedvenceinket. Hasonlót szeretnél? Vedd fel velünk a <a href="<?php echo get_permalink(58); ?>">kapcsolatot.</a></p>
  </div>
</section>
<div class="wrapper wrapper--normal">
  <?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
    </div>
    <?php get_search_form(); ?>
  <?php endif; ?>

  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', get_post_format()); ?>
  <?php endwhile; ?>

  <?php if ($wp_query->max_num_pages > 1) : ?>
    <nav class="post-nav">
      <ul class="pager">
        <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
        <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
      </ul>
    </nav>
  <?php endif; ?>
</div>