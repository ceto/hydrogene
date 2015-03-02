<?php while (have_posts()) : the_post(); ?>
<header class="niceheading niceheading--ashero niceheading--homehero">
  <div class="wrapper wrapper--wide">
  		<section class="niceheading__preinfo">
        <span class="feat">Piciny műhelyünkben élményt tervezünk</span>          
      </section>
      <h3 class="niceheading__title">Honlap és arculat</h3>
      <p class="niceheading__disclaimer">
        Karakteres arculattal, és — abba szervesen illeszkedő — felhasználóbarát honlappal segítjük céged növekedését. Felfedezés indul.
      </p>
      <a href="<?php echo get_post_type_archive_link('reference'); ?>" class="readmore">Nézd meg a munkáinkat</a>
      <hr>
  </div>
</header>


<div class="storyitem whatwedo">
	<div class="wrapper wrapper--wide">	
		<header class="storyitem__head">
<!-- 			<h5 class="storyitem__subtitle">Legyen ez egy hosszan tartó, eredményes barátság kezdete</h5> -->
			<img class="storyitem__signo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo_text_black.png" alt="Hydrogene">
			<h4 class="storyitem__title">
				Kreatív stúdiónk honlaptervezési és arculati szolgáltatásait, azon cégeknek ajánljuk, akik ügynökségi minőséget szeretnének emberi léptékű árakkal.
			</h4>


		</header>
		<div class="storyitem__desc">
			<h5>Cégarculat és honlap tervezés egy kézben</h5>
			<p>A személyes kapcsolat a tervezővel, és a kis létszámú műhelymunka lehetővé teszi, hogy nagyszerű és egyedi dolgok szülessenek weben és nyomtatásban.</p>
			<p>Legyen ez egy hosszan tartó, eredményes barátság kezdete.</p>
			<p><a href="<?php echo get_the_permalink('69'); ?>" class="btn btn--sima">Hogyan dolgozunk</a></p>

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
  <?php // get_template_part('templates/footer','contact'); ?>

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
