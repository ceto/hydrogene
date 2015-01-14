<header class="refarchive__hero hero">
  <div class="wrapper wrapper--wide">
    <div class="hero__textblock">
      <h1 class="hero__title">Egyedi munkák</h1>
      <h2 class="hero__subtitle">weben mobilon és offline</h2>
      <p class="hero__disclaimer">
        <strong>Nézd meg miket csinálunk.</strong> A feladatok külöbözőek, akárcsak a megoldások. Több tucat sikeres projekt közül megmutatjuk a kedvenceinket. Hasonlót szeretnél? Vedd fel velünk a <a href="<?php echo get_permalink(58); ?>">kapcsolatot.</a>
      </p>
    </div>
  </div>
</header>
<section class="reflist">
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
 