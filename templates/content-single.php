<article <?php post_class('singlepost'); ?>>
  <div class="wrapper wrapper--wide">
    <header class="singlepost__header niceheading niceheading--ashero">
        <div class="niceheading__preinfo animated fadeInUp">
          <?php get_template_part('templates/entry-meta'); ?>          
        </div>
        <h1 class="singlepost__title niceheading__title animated fadeInUp"><?php the_title(); ?></h1>
        <p class="niceheading__disclaimer animated fadeInUp">
          <?php echo get_the_excerpt(); ?>
        </p>
        <hr class="animated fadeInUp">
    </header>
  </div>
  <div class="singlepost__content animated fadeInUp">
    <div class="wrapper wrapper--normal">
      <?php the_content(); ?>
    </div>
  </div>
  <footer>
    <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
  </footer>
  
  </article>

