<!-- <section class="topmenubg"></section> -->
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class('refsingle'); ?>>
    <header class="refsingle__header">
      <?php get_template_part('templates/reference', 'singlehead'); ?>
    </header>
    <!-- <a name="singletop" id="singletop"></a> -->



  <section id="singletop" class="refsingle__datahead">
    <div class="wrapper wrapper--normal">
      <h3 class="datahead__title">A feladat elemei</h3>

      <ul class="tasks__elements">
        <?php 
          $the_tasks=get_the_terms( get_the_ID(), 'tasks');
          foreach ( $the_tasks as $task ) {  ?>
            <li>
              <a href="<?php echo get_term_link( $task ); ?>">
                <?php echo $task->name; ?>
              </a>
            </li>
        <?php } ?>
      </ul>

      <p class="datahead__year">Készült: <span><?php echo get_post_meta( get_the_ID(), '_refdata_year', 1 ); ?></span></p>
  
    </div>
  </section>

    <section class="refsingle__reallife">
      <div class="wrapper wrapper--wide wrapper--nopadding">
        <?php
          $realimage_id = get_post_meta( get_the_ID(), '_refdata_reallife_id', 1 );
          $realimage = wp_get_attachment_image_src( $realimage_id , 'thumbnail');
        ?>

        <img src="<?php echo $realimage[0]; ?>" width="<?php echo $realimage[1]; ?>" height="<?php echo $realimage[2]; ?>" alt="<?php the_title(); ?>" <?php echo tevkori_get_srcset_string( $realimage_id, 'full' ); ?> sizes="<?php echo tevkori_get_sizes( $realimage_id, 'thumbnail' ); ?>">

        <?php if (strlen(get_post_meta( get_the_ID(), '_refdata_url', 1 ))>1) : ?>
          <p class="datahead__url">
            <i class="ion ion-link"></i>
            Nézd meg élesben:
            <a href="<?php echo get_post_meta( get_the_ID(), '_refdata_url', 1 ); ?>" target="_blank">
              <?php echo substr(get_post_meta( get_the_ID(), '_refdata_url', 1 ),7); ?>
            </a>
          </p>
        <?php endif; ?>

      </div>
    </section>

    <div class="wrapper wrapper--normal">
      <div class="refsingle__content">
        <?php the_content(); ?>
      </div>
    </div>

    <?php if (get_post_meta( get_the_ID(), '_refdata_quotetext', 1 )) : ?>

    <section class="refsingle__quoteblock">
      <div class="wrapper wrapper--wide">
        <blockquote class="refsingle__quote">
          <p>
            <?php echo get_post_meta( get_the_ID(), '_refdata_quotetext', 1 ); ?>
          </p>
          <cite><?php echo get_post_meta( get_the_ID(), '_refdata_quotename', 1 ); ?>
            <span class="titulus">
              <?php echo get_post_meta( get_the_ID(), '_refdata_quotetitle', 1 ); ?>
            </span>
          </cite>          
        </blockquote>
      </div>
    </section>
    <?php endif; ?>

        <?php get_template_part('templates/reference', 'pagenav'); ?>
    <?php get_template_part('templates/reference', 'connect'); ?>


    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>

    </footer>
  </article>
<?php endwhile; ?>

<?php //get_template_part('templates/reference','navigation'); ?>