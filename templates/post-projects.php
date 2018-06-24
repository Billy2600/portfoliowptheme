<span class="projecttile">
	<a href="javascript:showmodal(jQuery('#project_<?php echo $post->ID ?>').html())"><?php echo get_the_post_thumbnail($post,array(150,150),array("style","float:left")) ?></a>
</span>

<div id="project_<?php echo $post->ID ?>" style="display:none">
	<?php echo get_the_post_thumbnail($post,"post-thumbnail",array("style","float:left")) ?>
	<?php the_content() ?>
</div>