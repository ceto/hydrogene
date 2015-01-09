<?php while (have_posts()) : the_post(); ?>
<header class="home__hero hero">
	<div class="wrapper wrapper--wide">
		<div class="hero__textblock">
			<h1 class="hero__title">Különleges vagy</h1>
			<h2 class="hero__subtitle">Mutasd meg</h2>
			<p class="hero__disclaimer"><strong>Egyedi honlappal és arculattal</strong> segítjük céged növekedését.  Kreatív műhelyünkben kiemelkedő minőségű web/mobil oldalakat és print termékeket tervezünk. 
			</p>
			<p><a href="?page_id=69" class="btn btn--pseudo">Nézd meg hogyan</a></p>
		</div>
		<div class="heroright">
			
		</div>
	</div>
</header>
<section class="whiteblock">
	<div class="wrapper wrapper--wide">
			<h3 class="whiteblock__title"><small>Kreatív műhelymunka</small>Az üzleti sikerért</h3>
			<p class="whiteblock__disclaimer">Megértéssel, szakértelemmel, kreativitással jól működő megoldást nyújtunk ügyfeleinknek weben mobilon és offline, hogy még sikeresebbek lehessenek.</p>
	</div>
</section>

<div class="storyitem">
	<div class="wrapper wrapper--wide">	
		<header class="storyitem__head">
			<h5 class="storyitem__subtitle">Szolgáltatásaink</h5>
			<h4 class="storyitem__title">Inspirálj bennünket, hogy cégednek a legjobbat hozzuk</h4>
			<div class="storyitem__icons">
				<img src="http://placehold.it/120x120&text=Arculat" alt="">
				<img src="http://placehold.it/120x120&text=Web+Mobil" alt="">
				<img src="http://placehold.it/120x120&text=Stratégia" alt="">
			</div>

		</header>
		<div class="storyitem__desc">
			<h5>Karakteres arculatokat és felhasználóbarát weboldalakat tervezünk</h5>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto maiores eum accusamus temporibus consequuntur! Dicta nesciunt voluptates laboriosam aperiam quasi corporis a excepturi. Placeat accusamus, eius repudiandae maxime quibusdam natus.</p>
			<h6>Arculat</h6>
			<p>Gusztáv ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Axcepteur sint occaecat cupidatat non proident. Lorem ipsum dolor sint amet Ernőbácsi orem ipsum marika ámen</p>
			<h6>Web/Mobil</h6>
			<p>Gusztáv ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Axcepteur sint occaecat cupidatat non proident. Lorem ipsum dolor sint amet Ernőbácsi orem ipsum marika ámen</p>
			<h6>Stratégia</h6>
			<p>Gusztáv ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Axcepteur sint occaecat cupidatat non proident. Lorem ipsum dolor sint amet Ernőbácsi orem ipsum marika ámen</p>
		</div>
	</div>
</div>

<section class="home__references">
<?php 
	$the_refs = new WP_Query( array(
		'post_type' => 'reference',
		'posts_per_page' => 2,
	));
?>
	<?php while ($the_refs->have_posts()) : $the_refs->the_post(); ?>
	  <article <?php post_class(); ?>>
	    <?php get_template_part('templates/reference', 'widerow'); ?>
	  </article>
	<?php endwhile; ?>
</section>
  <?php // get_template_part('templates/page', 'header'); ?>
  <?php // get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
