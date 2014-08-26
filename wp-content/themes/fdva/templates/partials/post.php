<div class="post">
	<?php 
		if(has_post_thumbnail()) { 
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
	?>
		<div class="thumb" style="background-image:url(<?php echo $thumb[0]; ?>)"></div>
	<?php } ?>
	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	<div class="date"><?php the_time('F j, Y'); ?></div>
	<?php pxl::excerpt("length=50 class='read-more' text='READ MORE &raquo;' inline=true"); ?>
	<hr>
</div>