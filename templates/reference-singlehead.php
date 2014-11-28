<div class="refrow">
	<div class="wrapper wrapper--wide">
		<?php $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'nemtudommeg');  ?>
		<style>
			@media only screen and (min-width: 1024px) {
				.reference-<?php echo get_the_ID(); ?> .refrow__figure {
					background-image: url(<?php echo $imgsrc[0]; ?>);
				}
			}

			.reference-<?php echo get_the_ID(); ?> .refrow{
				background-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,1);
			}
			.reference-<?php echo get_the_ID(); ?> .refrow .refrow__figure a:after {
				background-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,0.333);
			}
			
			.refsingle--infoblock {
				border-top: 10px solid rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,0.333);
			}

		</style>
			<header class="refrow__header">
				<div class="innerwrap">
			    <h3 class="refrow__subtitle"><?php echo get_post_meta( get_the_ID(), '_refdata_subtitle', 1 ); ?></h3>
			    <h2 class="refrow__title"><?php the_title(); ?></h2>
			    <div class="refrow__summary"><?php echo get_post_meta( get_the_ID(), '_refdata_excerpt', 1 ); ?></div>
			  </div>
			</header>

			<figure class="refrow__figure">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
			</figure>
	</div>
</div>
<section class="refsingle--infoblock">
	<div class="wrapper wrapper--wide">
		<div class="refsingle--infopanel">
			<h3 class="infopanel--subtitle">A feladat elemei</h3>
			<ul class="infopanel--taskelements">
				<li><i class="ion ion-lightbulb"></i>Arculattervezés</li>
				<li><i class="ion ion-monitor"></i>Weboldal tervezés</li>
				<li><i class="ion ion-iphone"></i>Mobil megjelenés</li>
				<li><i class="ion ion-social-wordpress"></i>Wordpress</li>    		
			</ul>
			<h3 class="infopanel--subtitle">Projekt adatok</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit doloribus, tempore adipisci consequuntur quaerat, est sunt iusto doloremque corporis architecto! Veritatis maxime molestiae voluptates adipisci ipsam quas, voluptatibus illum molestias.</p>
		</div>
		<div class="refsingle--actions">
					<a class="btn--pseudo" target="_blank" href="#"><?php _e('Ugrok a weboldalra','hydrogene'); ?> <i class="ion ion-monitor"></i></a>
		</div>
	</div>
</section>
