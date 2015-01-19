<?php
  if ( !($next_reference = get_adjacent_post( false, '', true )) ) {
    $the_firstref = new WP_Query ( array(
      'post_type' => array('reference'),
      'post_per_page' => 1,
    ));
    $the_firstref->the_post();
    $next_reference=get_post();
  }
?>

<div class="reference-<?php echo $next_reference->ID; ?>">
	<div class="refrow">
		<div class="wrapper wrapper--wide">
			<?php $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id($next_reference->ID) , 'nemtudommeg');  ?>
			<style>
				@media only screen and (min-width: 768px) {
					.reference-<?php echo $next_reference->ID; ?> .refrow__figure {
						background-image: url(<?php echo $imgsrc[0]; ?>);
					}
				}

				.reference-<?php echo $next_reference->ID; ?> .refrow .refrow__title {
					color: rgba(<?php echo get_post_meta( $next_reference->ID, '_refdata_color', 1 ); ?>,1);
				}
				
	  
	  
				.reference-<?php echo $next_reference->ID; ?> .refrow .refrow__figure a:after {
					background-color: rgba(<?php echo get_post_meta( $next_reference->ID, '_refdata_color', 1 ); ?>,0.333);
				}

				.reference-<?php echo $next_reference->ID; ?> .refrow .btn--pseudo {
					background-color: rgba(<?php echo get_post_meta( $next_reference->ID, '_refdata_color', 1 ); ?>,1);
				}
				.reference-<?php echo $next_reference->ID; ?> .refrow .btn--pseudo:before {
					background-color: rgba(<?php echo get_post_meta( $next_reference->ID, '_refdata_color', 1 ); ?>,0.333);
				}
			</style>
				<figure class="refrow__figure">
					<a href="<?php echo get_the_permalink($next_reference->ID); ?>">
						<?php echo get_the_post_thumbnail($next_reference->ID, 'large'); ?>
					</a>
				</figure>
				<header class="refrow__header">
					<div class="innerwrap">
				    
				    <h3 class="refrow__subtitle">
				    	<a href="<?php echo get_the_permalink($next_reference->ID); ?>">
				    		Nézd meg a következőt<br>
							</a>
				    </h3>
				    <h2 class="refrow__title"><a href="<?php echo get_the_permalink($next_reference->ID); ?>">
				    <?php echo get_the_title( $next_reference); ?></a></h2>

				    <div class="refrow__summary"><?php echo get_post_meta( $next_reference->ID, '_refdata_excerpt', 1 ); ?></div>
						
				    <div class="refrow__actions">
				    	<a class="btn btn--pseudo" href="<?php echo get_the_permalink($next_reference->ID); ?>"><?php _e('Projekt részletek','hydrogene'); ?></a>&nbsp;&nbsp;&nbsp;
				    	<a class="btn btn--pseudo" href="<?php echo get_post_type_archive_link('reference'); ?>"><?php _e('Mutasd mindet','hydrogene'); ?></a>
				    </div>
				  </div>
				</header>

		</div>
	</div>

</div>


<!-- <aside class="refnav">
	<div class="wrapper wrapper--normal">
			<h3 class="refnav__blocktitle"><span>Nézd meg a </span>következő munkát</h3>

			<div class="refnav__item reference-<?php echo $next_reference->ID; ?>">
			<style>
				.reference-<?php echo $next_reference->ID; ?> .teteje {
					background-color: rgba(<?php echo get_post_meta( $next_reference->ID, '_refdata_color', 1 ); ?>,1);
				}
				.reference-<?php echo $next_reference->ID; ?> .alja {
					border-color: rgba(<?php echo get_post_meta( $next_reference->ID, '_refdata_color', 1 ); ?>,0.2);	
				}
				.reference-<?php echo $next_reference->ID; ?> .btn {
					background-color: rgba(<?php echo get_post_meta( $next_reference->ID, '_refdata_color', 1 ); ?>,0.75);	
				}
				.reference-<?php echo $next_reference->ID; ?> .btn:before {
					border-color: rgba(<?php echo get_post_meta( $next_reference->ID, '_refdata_color', 1 ); ?>,0.2);	
				}

			</style>
				<header class="refnav__header">
					<div class="teteje">
					    <h3 class="refnav__subtitle">
					    	<?php echo get_post_meta( $next_reference->ID, '_refdata_subtitle', 1 ); ?>
					    </h3>
					    <h2 class="refnav__title">
					    	<a href="<?php echo get_the_permalink($next_reference->ID); ?>">
					    		<?php echo get_the_title( $next_reference); ?>
					    	</a>
					    </h2>
				    </div>
				    <div class="alja">
				    	<div class="refnav__summary">
				    		<?php echo get_post_meta( $next_reference->ID, '_refdata_excerpt', 1 ); ?>
				    	</div>
							<div class="refnav__actions">
								<a class="btn btn--pseudo" href="<?php echo get_the_permalink($next_reference->ID); ?>">
									<?php _e('Projekt részletek','hydrogene'); ?>
								</a>
				    	</div>
				  </div>
				</header>


				<figure class="refnav__figure">
					<a href="<?php echo get_the_permalink($next_reference->ID); ?>">
						<?php echo get_the_post_thumbnail($next_reference->ID, 'large'); ?>
					</a>
				</figure>
			</div>
	</div>
</aside> -->