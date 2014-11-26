<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('refsingle'); ?>>
    <header class="refsingle__header">
      <div class="wrapper wrapper--normal">
        <h3 class="refsingle__subtitle"><?php echo get_post_meta( get_the_ID(), '_refdata_subtitle', 1 ); ?></h3>
        <h1 class="refsingle__title"><?php the_title(); ?></h1>
        <p class="refsingle__summary"><?php echo get_post_meta( get_the_ID(), '_refdata_excerpt', 1 ); ?></p>
      </div>
      <?php $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large');  ?>
      <style>
        @media only screen and (min-width: 1024px) {
          .post-<?php echo get_the_ID(); ?> .refsingle__hero {
            background-image: url(<?php echo $imgsrc[0]; ?>);
          }
        }
      </style>
      <style>
        .refsingle__header {
          background-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,1);
        }
        /*.refsingle__infopanel {
          background-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,1);
        }*/
        .refsingle__hero:after {
          background-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,0.333);
        }
        /*.refsingle__subtitle {
          color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,1);
        }*/
      </style>
      <figure class="refsingle__hero">
        <?php the_post_thumbnail(); ?>
      </figure>
      <aside class="refsingle__infopanel">
        <div class="innerwrap">
          <p class="infopanel__data"><span>Megrendelő</span><?php echo get_post_meta( get_the_ID(), '_refdata_subtitle', 1 ); ?></p>
          <p class="infopanel__data"><span>Év</span><?php echo get_post_meta( get_the_ID(), '_refdata_year', 1 ); ?></p>
          <p class="infopanel__data"><span>Büdzsé</span>700 000 - 1 000 000 Ft.</p>
          
          <div class="infopanel__tags">
            <h4 class="infopanel__tags__title">Feladat elemei</h4>
            <ul>
              <li>Arculattervezés</li>
              <li>Weboldal tervezés</li>
              <li>Responsive webdesign</li>
              <li>Wordpress weboldalkészítés</li>       
            </ul>
          </div>
        </div> 
      </aside>
      
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
