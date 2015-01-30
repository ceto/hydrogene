<?php while (have_posts()) : the_post(); ?>
<header class="niceheading niceheading--ashero niceheading--homehero">
  <div class="wrapper wrapper--wide">
      <h3 class="niceheading__title"><small>felhasználói élményt tervezünk</small>Weben és offline</h3>
      <p><a href="<?php echo get_post_type_archive_link('reference'); ?>" class="btn btn--pseudo btn--opaque ">Nézd meg a munkáinkat</a></p>
  </div>
</header>


<div class="storyitem whatwedo">
	<div class="wrapper wrapper--wide">	
		<header class="storyitem__head">
			<h5 class="storyitem__subtitle">Átfogó arculat és karakteres honlap</h5>
			<h4 class="storyitem__title">
				Komplett tervezés
			</h4>
		</header>
		<div class="storyitem__desc">
			<p>Segítjük céged növekedésétÁtfogó szemlélet és együttes megoldás. Kreatív műhelyünkben, hatékony és felhasználóbarát web/mobil oldalakat tervezünk.</p>
			<p>Axcepteur sint occaecat cupidatat non proident. Lorem ipsum dolor sint amet Ernőbácsi orem ipsum marika ámen</p>
			<p><a href="<?php echo get_the_permalink('69'); ?>" class="btn btn--pseudo btn--opaque ">Nézd meg hogyan</a></p>

		</div>
	</div>
</div>

<section class="allwedo">
	<div class="wrapper wrapper--wide">	
		<div class="servicegroup">
			<img src="<?php echo get_stylesheet_directory_uri().'/assets/img/ikon_arculat.svg' ?>" alt="Grafikai és vizuális tervezés" class="servicegroup__ill">
			<h4 class="servicegroup__name"><span>2.</span> Grafikai tervezés</h4>
			<ul class="servicelist">
				<li>Arculattervezés</li>
				<li>Logó</li>
				<li>Névjegykártya</li>
				<li>Kiadvány szerkesztés</li>
				<li>Csomagolás tervezés</li>
				<li>Plakát és brossúra</li>
				<li>Belsőépítészet</li>
				<li>3D látványtervezés</li>
				<li>Illusztráció</li>
			</ul>
		</div>
		<div class="servicegroup">
		<img src="<?php echo get_stylesheet_directory_uri().'/assets/img/ikon_mobilweb.svg' ?>" alt="Honlap és webfejlesztés" class="servicegroup__ill">
			<h4 class="servicegroup__name"><span>3.</span> Webfejlesztés</h4>
			<ul class="servicelist">
				<li>Webdesign</li>
				<li>Sitebuild</li>
				<li>Front End fejlesztés</li>				
				<li>UX tervezés</li>
				<li>Tartalom tervezés</li>
				<li>Honlap stratégia</li>
				<li>Információ építészet</li>
				<li>Egyedi sablon készítés</li>
				<li>Reszponzív honlap</li>
				<li>Mikroszájtok</li>
				<li>Kampányoldalak</li>
				<li>Hírlevél sablon</li>
			</ul>
		</div>
	</div>
</section>


<section class="home__references">
	<?php 
		$the_refs = new WP_Query( array(
			'post_type' => 'reference',
			'posts_per_page' => 1,
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
