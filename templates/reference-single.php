<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('refsingle'); ?>>
    <header>
      <?php $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large');  ?>
      <style>
        @media only screen and (min-width: 1024px) {
          .post-<?php echo get_the_ID(); ?> .refsingle__hero {
            background-image: url(<?php echo $imgsrc[0]; ?>);
          }
        }
      </style>
      <figure class="refsingle__hero">
        <?php the_post_thumbnail(); ?>
      </figure>
      <div class="wrapper wrapper--normal">
        <h1 class="refsingle__title"><?php the_title(); ?></h1>
      </div>
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
