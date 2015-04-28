<?php while (have_posts()) : the_post(); ?>
<div class="wrapper wrapper--wide">
	<header class="niceheading niceheading--ashero niceheading--homehero">
  		<section class="niceheading__preinfo animated fadeInUp">
        <span class="feat">Élményt tervezünk</span>          
      </section>
      <h3 class="niceheading__title animated fadeInUp">Honlap és arculat</h3>
      <p class="niceheading__disclaimer animated fadeInUp">
        Piciny digitális műhelyünk, karakteres arculattal, és — szervesen illeszkedő — felhasználóbarát honlappal segíti céged növekedését. 
      </p>
      <a href="<?php echo get_post_type_archive_link('reference'); ?>" class="readmore animated fadeInUp">Nézd meg a munkáinkat…</a>
      <hr class="animated fadeInUp">
	</header>
</div>

<div class="storyitem whatwedo animated fadeInUp">
	<div class="wrapper wrapper--wide">	
		<header class="storyitem__head">
			<h4 class="storyitem__title">
				Kreatív stúdiónk honlaptervezési és arculati szolgáltatásait, azon cégeknek ajánljuk, akik ügynökségi minőséget szeretnének emberi léptékű árakkal.
			</h4>
		</header>
		<div class="storyitem__desc">
			<h5>Cégarculat és honlap tervezés egy kézben</h5>
			<p>A személyes kapcsolat a tervezővel, és a kis létszámú műhelymunka lehetővé teszi, hogy nagyszerű és egyedi dolgok szülessenek weben és nyomtatásban.</p>
			<p>Legyen ez egy hosszan tartó, eredményes barátság kezdete.</p>
			<p><a href="<?php echo get_the_permalink('69'); ?>" class="btn btn--sima">Hogyan dolgozunk…</a></p>

		</div>
	</div>
</div>

<section class="allwedo animated fadeInUp">
	<div class="wrapper wrapper--wide">	
		<div class="servicegroup">
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
 
 
<?php endwhile; ?>
