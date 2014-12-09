<header class="pageheader">
  <div class="wrapper wrapper--normal">
    <div class="pageheader__content">
      <h2 class="pageheader__subtitle">A feladatok különböznek ahogyan a megoldások</h2>
      <h1 class="pageheader__title">Nézd meg miket csinálunk</h1>
      <p class="pageheader__intro">
      Árvíztűrő tükörfúrógép és természetesen fifike effektezik. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad sapiente iusto consectetur explicabo odit, ducimus quasi voluptatum quod dignissimos quia. Minus sed, ex harum labore.</p>
    </div>
  </div>
</header>

<section class="whiteblock">
  <div class="wrapper wrapper--normal">
    <h3 class="whiteblock--title"><small>egyedi munkák</small>weben, mobilon és offline</h3>
    Munkánk során nagy hangsúlyt fektetünk a tervezésre, szeretünk kísérletezni és új módszereket, technológiákat kipróbálni. Valljuk, hogy a hosszabb fejlesztési időszak, elengedhetetlen az <em>emlékezetes és használható</em> weboldal, arculat vagy nyomdai termék létrehozásában.
</section>
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <?php get_template_part('templates/reference', 'widerow'); ?>
  </article>
<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>
 