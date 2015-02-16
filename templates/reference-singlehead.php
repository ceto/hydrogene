<div class="refrow">
	<div class="wrapper wrapper--wide">
		<?php $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'nemtudommeg');  ?>
		<style>
			@media only screen and (min-width: 768px) {
				.refsingle.reference-<?php echo get_the_ID(); ?> .refrow__figure {
					background-image: url(<?php echo $imgsrc[0]; ?>);
				}
			}
			
			.single-reference .banner.scrolled {
				background-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>, 0.95);
			}

			.connect__cumo,
			.refsingle.reference-<?php echo get_the_ID(); ?> .refrow,
			.refsingle__quote cite:before,
			.single-reference .topmenubg {
				background-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,1);
			}

		/*	.reference-<?php echo get_the_ID(); ?> .refrow .refrow__title{
				color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,1);
			}*/
			.refsingle.reference-<?php echo get_the_ID(); ?> .refrow .refrow__figure a:after {
				background-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,0.333);
			}

			
			/*.refsingle__quoteblock {
				border-top: 10px solid rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,0.333);
			}*/
			/*.refrow__actions .btn,*/
			.refsingle__shareblock .btn  {
				background-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,0.875	);
			}
			
			/*.refrow__actions .btn:before,*/
			.connect__bigtitle span,
			.refsingle__shareblock .btn:before,
			.refsingle__shareblock {
				border-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,0.2	);
			}

			/*.infopanel__taskelements li .ion {
				background-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,0.2	);
			}
*/
			.btn--circle, 
			.niceheading--refheading .niceheading__title:before,
			.refsingle.reference-<?php echo get_the_ID(); ?> .refrow:after,
			.inverseblock,
			.refsingle__content ul li:before,
			.refsingle__content > h1:before,
			.refsingle__content > h2:before,
			.refsingle__content > h3:before,
			.refsingle__content > h4:before,
			.refsingle__content > h5:before,
			.refsingle__content > h6:before,
			.shareblock__nav .nav-tabs li:before {
				background-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,1);
			}
			
			.pagenav a,
			/*.refsingle__content h1, .refsingle__content h2, .refsingle__content h3,*/
			.datahead__title,
			.datahead__url a,
			.refsingle__quoteblock cite,
			/*.connect__bigtitle,*/
			.refsingle__content ol li:before,
			.refsingle__content a,
			.refsingle__quote:before {
				color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,1);
			}


			.whiteblock__title,
			.darkblock__title,
			.refsingle__quote,
			.refsingle__content > blockquote,
			.refsingle__content a:hover {
				border-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,1);
			}

/*		.refsingle__reallife {
			border-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,0.5);
		}*/
			
/*			.refsingle__contactopener .btn--pseudo, .refsingle__infoblock .btn--pseudo {
				background-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,1);
			}*/

			/*.refsingle__shareblock {
				border-left: 10px solid rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,0.333);
			}
*/


		</style>
			<figure class="refrow__figure">
				<a href="#"><?php the_post_thumbnail('large'); ?></a>
			</figure>
			<header class="refrow__header">
				<div class="innerwrap">
			    <h3 class="refrow__subtitle">
			    	<?php echo get_post_meta( get_the_ID(), '_refdata_subtitle', 1 ); ?>
			    </h3>
					<h2 class="refrow__title"><?php the_title(); ?></h2>
					<div class="refsingle__lead">
						<?php echo get_post_meta( get_the_ID(), '_refdata_excerpt', 1 ); ?>
					</div>
 			    <div class="refrow__actions">
						<a class="btn btn--pseudo" href="#singletop">
							<?php _e('Felfedezés indul','h2'); ?>
						</a>
			    </div>
			  </div>
			</header>


	</div>
</div>





