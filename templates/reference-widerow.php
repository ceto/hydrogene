<div class="refrow">
	<div class="wrapper wrapper--wide">
		<?php $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'nemtudommeg');  ?>
		<style>
			@media only screen and (min-width: 768px) {
				.reference-<?php echo get_the_ID(); ?> .refrow__figure {
					background-image: url(<?php echo $imgsrc[0]; ?>);
				}
			}

			.reference-<?php echo get_the_ID(); ?> .refrow .refrow__title a:hover,
			.reference-<?php echo get_the_ID(); ?> .refrow .refrow__title a:focus {
				color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,1);
			}
			
  
  
			.reference-<?php echo get_the_ID(); ?> .refrow .refrow__figure a:after {
				background-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,0.333);
			}

			.reference-<?php echo get_the_ID(); ?> .refrow .btn--pseudo {
				background-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,1);
			}
			.reference-<?php echo get_the_ID(); ?> .refrow .btn--pseudo:before {
				background-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,0.333);
			}
		</style>
					<figure class="refrow__figure">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
			</figure>
			<header class="refrow__header">
				<div class="innerwrap">
			    
			    <h3 class="refrow__subtitle">
			    	<a href="<?php the_permalink(); ?>">
			    		<?php echo get_post_meta( get_the_ID(), '_refdata_subtitle', 1 ); ?>
						</a>
			    </h3>
			    <h2 class="refrow__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					
<!-- 			    <div class="refrow__tags">
						<ul>
							<li>Arculattervezés</li>
							<li>Weboldal tervezés</li>
							<li>Responsive webdesign</li>
							<li>Wordpress weboldalkészítés</li>    		
						</ul>
					</div> -->
			    <div class="refrow__summary"><?php echo get_post_meta( get_the_ID(), '_refdata_excerpt', 1 ); ?></div>
					
			    <div class="refrow__actions">
			    	<a class="btn--pseudo" href="<?php the_permalink(); ?>"><?php _e('Projekt részletek','hydrogene'); ?></a>
			    </div>
			  </div>
			</header>

	</div>
</div>
