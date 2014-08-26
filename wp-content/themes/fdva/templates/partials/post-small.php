<?php $url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail'); ?>
<div class="news-block">
	<?php if( isset($url[0]) ) : ?> <a href="<?php the_permalink(); ?>"><?php pxl::timthumb( 'post_thumbnail', array( 'w' => 80, 'h' => 80 ), 'thumbnail' ); ?></a> <?php endif; ?>
	<div>
		<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
		<?php pxl::excerpt("length=15 class=read-more link=false"); ?>
	</div>
</div>