<?php while (have_posts()) : the_post(); ?>
<header class="niceheading niceheading--inverse niceheading--ashero niceheading--homehero">
  <div class="wrapper wrapper--wide">
      <h3 class="niceheading__title"><small>Egységes megjelenés</small>weben mobilon és offline</h3>
      <p class="niceheading__disclaimer"><strong>Karakteres honlappal és arculattal</strong> segítjük céged növekedését.  Kreatív műhelyünkben, hatékony és felhasználóbarát web/mobil oldalakat tervezünk. Válassz dizájnert referencia alapján!</p>
      <p><a href="<?php echo get_post_type_archive_link('reference'); ?>" class="btn btn--pseudo btn--opaque ">Ugrok a munkákra</a></p>
  </div>
</header>


<div class="storyitem whatwedo">
	<div class="wrapper wrapper--wide">	
		<header class="storyitem__head">
			<h5 class="storyitem__subtitle">Szolgáltatásaink</h5>
			<h4 class="storyitem__title">
				Átfogó szemlélettel állunk a feladathoz és együttes megoldást keresünk
			</h4>
		</header>
		<div class="storyitem__desc">
			<h6><span>1.</span> Átfogó arculat- és weboldal tervezés</h6>
			<p>Gusztáv ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Axcepteur sint occaecat cupidatat non proident. Lorem ipsum dolor sint amet Ernőbácsi orem ipsum marika ámen</p>
		</div>
	</div>
</div>

<section class="allwedo">
	<div class="wrapper wrapper--wide">	
		<div class="servicegroup">
			<h4 class="servicegroup__name"><span>2.</span> Grafikai és vizuális tervezés</h4>
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
			<h4 class="servicegroup__name"><span>3.</span> Honlap és webfejlesztés</h4>
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
