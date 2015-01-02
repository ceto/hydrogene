<?php while (have_posts()) : the_post(); ?>
<header class="home__hero hero">
	<div class="wrapper wrapper--wide">
		<div class="hero__textblock">
			<h1 class="hero__title">Különleges vagy</h1>
			<h2 class="hero__subtitle"><span>A weben</span></h2>
			<p class="hero__disclaimer">A <strong>HYDROGENE</strong> egy két személyes design műhely. Kiemelkedő minőségű egyedi weboldalakat tervezünk hagyományos és mobil eszközökre. Van egy jó projekted? Itt vagyunk, segítünk.
			</p>
			<p><a href="?post_type=reference" class="btn btn--pseudo">Nézd meg a munkáinkat</a></p>
		</div>
		<div class="heroright">
			
		</div>
	</div>
</header>
<section class="whiteblock">
	<div class="wrapper wrapper--normal">
			<h3 class="whiteblock__title"><small>Kreatív műhelymunka</small>Az üzleti sikerért</h3>
			<p class="whiteblock__disclaimer">A <strong>HYDROGENE</strong> egy két személyes design műhely. Kiemelkedő minőségű egyedi weboldalakat tervezünk hagyományos és mobil eszközökre. Van egy jó projekted? Itt vagyunk, segítünk.</p>
	</div>
</section>
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
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
