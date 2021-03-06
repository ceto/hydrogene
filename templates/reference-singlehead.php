<div class="refrow">
	<div class="wrapper wrapper--wide">
	<div class="bele">

		<?php
			$post_thumb_id = get_post_thumbnail_id( $post->ID );
			$imgsrc['thumbnail'] = wp_get_attachment_image_src( $post_thumb_id, 'tiny'); 
		?>

		<style>
			
			.single-reference .banner.scrolled {
				background-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>, 0.95);
			}

			.pagefooter--dark,
			.connect__cumo,
			.refsingle.reference-<?php echo get_the_ID(); ?> .refrow,
			.refsingle__quote cite:before,
			.single-reference .topmenubg {
				background-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,1);
			}

			.refsingle.reference-<?php echo get_the_ID(); ?> .refrow .refrow__figure a:after {
				background-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,0.333);
			}

			.connect__bigtitle span {
				border-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,0.2	);
			}

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
			.refsingle__content > h6:before {
				background-color: rgba(<?php echo get_post_meta( get_the_ID(), '_refdata_color', 1 ); ?>,1);
			}
			
			.refrow__actions .lenyil,
			.tasks__elements li a:hover,
			.tasks__elements li a:focus,
			.pagenav a,
			.datahead__title,
			.datahead__url a,
			.refsingle__quoteblock cite,
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


		</style>
		<figure class="refrow__figure animated fadeInRight">
			<a href="<?php the_permalink(); ?>">
				<img src="<?php echo $imgsrc['thumbnail'][0]; ?>" width="<?php echo $imgsrc['thumbnail'][1]; ?>" height="<?php echo $imgsrc['thumbnail'][2]; ?>" alt="<?php the_title(); ?>" <?php echo tevkori_get_srcset_string( $post_thumb_id, 'full' ); ?> sizes="(min-width: 768px) 48vw, (min-width: 1600px) 768px, 15em">
			</a>
		</figure>
		<div class="refrow__header animated fadeInDown">
			<div class="innerwrap">
		    <h3 class="refrow__subtitle">
		    	<?php echo get_post_meta( get_the_ID(), '_refdata_subtitle', 1 ); ?>
		    </h3>
				<h2 class="refrow__title"><?php the_title(); ?></h2>
				<div class="refsingle__lead">
					<?php echo get_the_excerpt();	 ?>
				</div>
			  <div class="refrow__actions">
					<a class="lenyil animated fadeInUp" href="#singletop">
						<i class="icon  icon--arrow-thin-down"></i>
					</a>
		    </div>
		  </div>
		</div>
	</div><!-- /.bele -->
	</div>
</div>





