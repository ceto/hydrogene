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
<aside class="refnav">
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
									<?php _e('Projekt bemutatása','hydrogene'); ?> <i class="ion ion-clipboard"></i>
									</a>
				    	</div>
				  </div>
<!-- 				  											    	<a class="backtoallref" href="<?php echo esc_url(home_url('/')); ?>?post_type=reference">
								<?php _e('Mutasd mindet','hydrogene'); ?> <i class="ion ion-images"></i>
							</a> -->
				</header>


				<figure class="refnav__figure">
					<a href="<?php echo get_the_permalink($next_reference->ID); ?>">
						<?php echo get_the_post_thumbnail($next_reference->ID, 'large'); ?>
					</a>
				</figure>
			</div>
	</div>
</aside>