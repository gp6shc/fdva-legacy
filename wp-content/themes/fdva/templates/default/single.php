<div class="row">
	<div class="span4">
		<h2>News</h2>
		<?php get_sidebar(); ?>
	</div>
	<div class="span8 content post">
		<?php 
			if(has_post_thumbnail()) { 
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
		?>
			<div class="thumb" style="background-image:url(<?php echo $thumb[0]; ?>)"></div>
		<?php } ?>
		<h3><?php the_title(); ?></h3>
		<div class="date"><?php the_time('F j, Y'); ?></div>
		<?php the_content(); ?>
		
	</div>
</div>