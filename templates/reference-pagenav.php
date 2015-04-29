<nav class="pagenav">
	<div class="wrapper wrapper--wide">
	<hr>

		<?php next_post_link('%link','<i class="icon icon--arrow-thin-left"></i><p class="navtext">%title</p>'); ?>

		<a href="<?php echo get_post_type_archive_link('reference'); ?>" class="pagenav__all">
			<i class="icon icon--arrow-thin-up"></i>
			<p class="navtext">Mutasd mindet</p>
		</a>
		

<?php previous_post_link('%link','<p class="navtext">%title</p><i class="icon icon--arrow-thin-right"></i>'); ?>

	</div>
</nav>