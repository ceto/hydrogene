<?php if (is_home() && is_sticky()) : ?>
  <?php get_template_part('templates/content', 'sticky'); ?>
<?php else : ?>
<article <?php post_class('archiveentry animated fadeInUp'); ?>>
  <header class="archiveentry__header niceheading">
    <div class="wrapper wrapper--normal">

      <h2 class="archiveentry__title niceheading__title">
      	<a href="<?php the_permalink(); ?>">
      		<?php the_title(); ?>
      	</a>
      </h2>
      <div class="niceheading__preinfo archiveentry__meta">
        <?php get_template_part('templates/entry-meta'); ?>          
      </div>

      <p class="archiveentry__summary niceheading__disclaimer">
        <?php echo get_the_excerpt(); ?>
      </p>

      <a class="readmore" href="<?php the_permalink();?>"><?php _e('Tovább olvasom…','h2') ?></a>
    </div>
  </header>
</article>
<?php endif; ?>