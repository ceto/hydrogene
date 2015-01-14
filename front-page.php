<?php while (have_posts()) : the_post(); ?>
<header class="home__hero hero">
	<div class="wrapper wrapper--wide">
		<div class="hero__textblock">
			<h1 class="hero__title">Az ügyfeleid</h1>
			<h2 class="hero__subtitle">Szeretni fognak</h2>
			<p class="hero__disclaimer"><strong>Felhasználóbarát honlappal és arculattal</strong> segítjük céged növekedését.  Kreatív műhelyünkben kiemelkedő minőségű és hatékony web/mobil oldalakat és print termékeket tervezünk. 
			</p>
			<p><a href="?page_id=69" class="btn btn--pseudo">Nézd meg hogyan</a></p>
		</div>
		<div class="heroright">
			
		</div>
	</div>
</header>

<div class="storyitem whatwedo">
	<div class="wrapper wrapper--wide">	
		<header class="storyitem__head">
			<h5 class="storyitem__subtitle">Szolgáltatásaink</h5>
			<h4 class="storyitem__title">
				Átfogó szemlélettel állunk a feladathoz és együttes megoldást keresünk
			</h4>
			<div class="storyitem__icons">
				<div class="storyitem__thirdicon">	
					<img src="<?php echo get_stylesheet_directory_uri().'/assets/img/ikon_arculat.svg';?>" alt="Arculat">
					<h4>Arculat</h4>
				</div>
				<div class="storyitem__thirdicon">
					<img src="<?php echo get_stylesheet_directory_uri().'/assets/img/ikon_mobilweb.svg';?>" alt="Web/Mobil">
					<h4>Web/Mobil</h4>
				</div>
				<div class="storyitem__thirdicon">
					<img src="<?php echo get_stylesheet_directory_uri().'/assets/img/ikon_strategia.svg';?>" alt="Stratégia">
					<h4>Stratégia</h4>
				</div>
			</div> 
		</header>
		<div class="storyitem__desc">
			<h6>Stratégia</h6>
			<p>Gusztáv ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Axcepteur sint occaecat cupidatat non proident. Lorem ipsum dolor sint amet Ernőbácsi orem ipsum marika ámen</p>
			<h6>Design</h6>
			<p>Gusztáv ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Axcepteur sint occaecat cupidatat non proident. Lorem ipsum dolor sint amet Ernőbácsi orem ipsum marika ámen</p>
			<h6>Web/Mobil</h6>
			<p>Gusztáv ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p>Axcepteur sint occaecat cupidatat non proident. Lorem ipsum dolor sint amet Ernőbácsi orem ipsum marika ámen</p>
		</div>
	</div>
</div>





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
