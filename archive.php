<div class="wrapper wrapper--wide">
  <header class="refarchive__header niceheading niceheading--ashero">

      <div class="niceheading__preinfo animated fadeInUp">
        <span class="feat"><?php echo roots_subtitle(); ?></span>          
      </div>
      <h1 class="singlepost__title niceheading__title animated fadeInUp">
        <?php echo roots_title(); ?>
      </h1>
      <p class="niceheading__disclaimer animated fadeInUp">
        <?php echo roots_description(); ?>
      </p>
      <a class="readmore animated fadeInUp" href="<?php echo roots_actionlink(); ?>"><?php echo roots_actiontext(); ?></a>
      <!-- <hr> -->
  </header>
</div>
<section class="reflist animated fadeInUp">
  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', get_post_format()); ?>
  <?php endwhile; ?>
</section>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>
 