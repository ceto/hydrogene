<div id="reference-<?php echo get_the_ID(); ?>" class="refrow">
	<div class="wrapper wrapper--wide">
	<div class="bele">

		<?php 
			$imgsrc['small'] = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'small_11_nc');
			$imgsrc['med'] = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium_11_nc');
			$imgsrc['large'] = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large_11_nc');

		?>
		<style>
			@media only screen and (min-width: 768px) {
				.reference-<?php echo get_the_ID(); ?> .refrow__figure {
					background-image: url(<?php echo $imgsrc['small'][0]; ?>);
				}
			}
			@media only screen and (min-width: 1280px) {
				.reference-<?php echo get_the_ID(); ?> .refrow__figure {
					background-image: url(<?php echo $imgsrc['med'][0]; ?>);
				}
			}
			@media only screen and (min-width: 1600px) {
				.reference-<?php echo get_the_ID(); ?> .refrow__figure {
					background-image: url(<?php echo $imgsrc['large'][0]; ?>);
				}
			}

		</style>
			<figure class="refrow__figure">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small_11_nc'); ?></a>
			</figure>
			<header class="refrow__header">
				<div class="innerwrap">
			    
			    <h3 class="refrow__subtitle">
			    	<a href="<?php the_permalink(); ?>">
			    		<?php echo get_post_meta( get_the_ID(), '_refdata_subtitle', 1 ); ?>
						</a>
			    </h3>
			    <h2 class="refrow__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					
			    <div class="refrow__summary">
			    	<?php echo get_the_excerpt();	 ?>
			    	<?php //echo get_post_meta( get_the_ID(), '_refdata_excerpt', 1 ); ?>
			    </div>
					
			    <div class="refrow__actions">
			    	<a class="btn btn--sima" href="<?php the_permalink(); ?>/#singletop"><?php _e('Projekt részletek','hydrogene'); ?>…</a>
			    </div>
			  </div>
			</header>
		</div>
	</div>
</div>
