<div class="refrow">
	<div class="wrapper wrapper--wide">
		<?php $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'nemtudommeg');  ?>
		<style>
			@media only screen and (min-width: 768px) {
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

			
			.refsingle__infoblock {
				border-top: 10px solid rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,0.333);
			}
			.refsingle__infoblock .btn {
				background-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,0.75	);
			}
			.refsingle__infoblock .btn:before{
				border-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,0.2	);
			}

			/*.infopanel__taskelements li .ion {
				background-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,0.2	);
			}
*/
			.refsingle__shareblock{
				background-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,1);
			}
			.refsingle__quote {
				border-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,1);
			}

			.refsingle__contactopener {
				border-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,0.333);
			}
			
/*			.refsingle__contactopener .btn--pseudo, .refsingle__infoblock .btn--pseudo {
				background-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,1);
			}*/

			/*.refsingle__shareblock {
				border-left: 10px solid rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,0.333);
			}
*/


		</style>
			<figure class="refrow__figure">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
			</figure>
			<header class="refrow__header">
				<div class="innerwrap">
			    <h3 class="refrow__subtitle"><?php echo get_post_meta( get_the_ID(), '_refdata_subtitle', 1 ); ?></h3>
			    <h2 class="refrow__title"><?php the_title(); ?></h2>
			    <div class="refrow__summary"><?php echo get_post_meta( get_the_ID(), '_refdata_excerpt', 1 ); ?></div>
			  </div>
			</header>


	</div>
</div>
<section class="refsingle__infoblock">
	<div class="wrapper wrapper--wide">
		<div class="inner">
			<div class="infoblock__detailspanel">
				<h3 class="infopanel__subtitle">A feladat elemei</h3>
				<ul class="infopanel__taskelements">
					<li><i class="ion ion-lightbulb"></i>Arculattervezés</li>
					<li><i class="ion ion-pinpoint"></i>Tartalom stratégia</li>
					<li><i class="ion ion-monitor"></i>Weboldal tervezés</li>
					<li><i class="ion ion-iphone"></i>Mobil verzió</li>
					<li><i class="ion ion-social-wordpress"></i>Wordpress</li>    		
				</ul>
							<a class="btn btn--pseudo" target="_blank" href="#"><?php _e('Megnézem a weboldalt','hydrogene'); ?> <i class="ion ion-monitor"></i></a>


			</div>
			<div class="infoblock__textpanel">
				<h3 class="infopanel__subtitle">Projekt adatok</h3>
				<p>Reprehenderit doloribus, tempore adipisci consequuntur quaerat, est sunt iusto doloremque corporis architecto! Veritatis maxime molestiae voluptates adipisci ipsam quas, voluptatibus illum molestias.</p>
			</div>
		</div>
	</div>
</section>
