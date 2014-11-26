<article <?php post_class('refrow'); ?>>
	<div class="wrapper wrapper--wide">
		<?php $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large');  ?>
		<style>
			@media only screen and (min-width: 1024px) {
				.post-<?php echo get_the_ID(); ?> .refrow__figure {
					background-image: url(<?php echo $imgsrc[0]; ?>);
				}
			}
		</style>
		<style>
			.refrow.post-<?php echo get_the_ID(); ?> {
				background-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,1);
			}
			.refrow.post-<?php echo get_the_ID(); ?> .refrow__figure a:after {
				background-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,0.333);
			}
		</style>
		  <figure class="refrow__figure">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
			</figure>
			<header class="refrow__header">
				<div class="innerwrap">
			    <h3 class="refrow__subtitle"><?php echo get_post_meta( get_the_ID(), '_refdata_subtitle', 1 ); ?></h3>
			    <h2 class="refrow__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			    <div class="refrow__tags">
						<!-- <h3 class="refrow__tags__title">Alkalmazott technológiák</h3> -->
						<ul>
							<li>Arculattervezés</li>
							<li>Weboldal tervezés</li>
							<li>Responsive webdesign</li>
							<li>Wordpress weboldalkészítés</li>    		
						</ul>
					</div>
			    <div class="refrow__summary"><?php echo get_post_meta( get_the_ID(), '_refdata_excerpt', 1 ); ?></div>
					
			    <div class="refrow__actions">
			    	<a class="btn" href="<?php the_permalink(); ?>"><?php _e('Projekt bemutása','hydrogene'); ?></a>
			    	<a class="btn" target="_blank" href="#"><?php _e('Weboldal megnyitása','hydrogene'); ?></a>
			    </div>
			  </div>
			</header>
	</div>
</article>
