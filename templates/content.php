<article <?php post_class('archiveentry'.is_sticky()?' sticky':''); ?>>
    <header class="archiveentry__header niceheading ">
      <div class="wrapper wrapper--normal">

        <h2 class="archiveentry__title niceheading__title">
        	<a href="<?php the_permalink(); ?>">
        		<?php the_title(); ?>
        	</a>
        </h2>
                <section class="niceheading__preinfo archiveentry__meta">
          <?php get_template_part('templates/entry-meta'); ?>          
        </section>

        <p class="archiveentry__summary niceheading__disclaimer">
          <?php echo get_the_excerpt(); ?>
        </p>
      </div>
    </header>
</article>
