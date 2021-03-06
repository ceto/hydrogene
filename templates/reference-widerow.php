<div id="reference-<?php echo get_the_ID(); ?>" class="refrow">
	<div class="wrapper wrapper--wide">
	<div class="bele">

		<?php
			$post_thumb_id = get_post_thumbnail_id( $post->ID );
			$imgsrc['thumbnail'] = wp_get_attachment_image_src( $post_thumb_id, 'tiny'); 
		?>

			<figure class="refrow__figure">
				<a href="<?php the_permalink(); ?>">
					<img src="<?php echo $imgsrc['thumbnail'][0]; ?>" width="<?php echo $imgsrc['thumbnail'][1]; ?>" height="<?php echo $imgsrc['thumbnail'][2]; ?>" alt="<?php the_title(); ?>" <?php echo tevkori_get_srcset_string( $post_thumb_id, 'full' ); ?> sizes="(min-width: 768px) 48vw, (min-width: 1600px) 768px, 15em">
				</a>
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
			    </div>
					
			    <div class="refrow__actions">
			    	<a class="btn btn--sima" href="<?php the_permalink(); ?>"><?php _e('Projekt részletek','hydrogene'); ?>…</a>
			    </div>
			  </div>
			</header>
		</div>
	</div>
</div>
