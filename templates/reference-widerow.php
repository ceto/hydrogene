

<article <?php post_class('reference--widerow'); ?>>
<?php $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large');  ?>
<style>
	@media only screen and (min-width: 1024px) {
		.post-<?php echo get_the_ID(); ?> .reference__figure {
			background-image: url(<?php echo $imgsrc[0]; ?>);
		}
	}
</style>
  <figure class="reference__figure">
  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
  </figure>
  <header class="reference__header">
  	<div class="innerwrap">
	    <h3 class="reference__subtitle">Subtitle text is coming here</h3>
	    <h2 class="reference__title"><?php the_title(); ?></h2>
	    <div class="reference__summary"><?php the_excerpt(); ?></div>
	    <div class="reference__actions">
	    	<a class="btn" href="<?php the_permalink(); ?>"><?php _e('Projekt bemutása','hydrogene'); ?></a>
	    	<a class="btn" target="_blank" href="#"><?php _e('Weboldal megnyitása','hydrogene'); ?></a>
	    </div>
	    <div class="reference__tags">
	    	<ul>
	    		<li>Arculattervezés</li>
	    		<li>Weboldal tervezés</li>
	    		<li>Responsive webdesign</li>
	    		<li>Wordpress weboldalkészítés</li>    		
	    	</ul>
	    </div>
    </div>
  </header>
</article>