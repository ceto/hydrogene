  <header class="refarchive__header niceheading niceheading--ashero">
    <div class="wrapper wrapper--wide">
      <section class="niceheading__preinfo animated fadeInUp">
        <span class="feat">Egyedi munkák, weben és nyomtatásban</span>          
      </section>
      <h1 class="singlepost__title niceheading__title animated fadeInUp">Arculati és webdesign referencia</h1>
      <p class="niceheading__disclaimer animated fadeInUp">
        Több tucat sikeres projekt áll a hátunk mögött. Számos vállalkozást segítettünk honlappal vagy arculattal. Változatos feladataink közül megmutatjuk a kedvenceinket. Hasonlót szeretnél?
      </p>
      <a class="readmore animated fadeInUp" href="<?php echo get_permalink(58); ?>">Lépj velünk a kapcsolatba…</a>
      <!-- <hr> -->
    </div>
  </header>

<section class="reflist animated fadeInUp">
  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class('reference--listelem'); ?>>
      <?php get_template_part('templates/reference', 'widerow'); ?>
    </article>
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
 