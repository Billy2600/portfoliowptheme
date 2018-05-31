<article class="blogpost">
	<?php 
		$thumbnail = get_post_thumbnail_id( $post->ID );
	?>
	<?php echo get_the_post_thumbnail($post) ?>
	<?php the_content("Continue reading &raquo;") ?>
</article>