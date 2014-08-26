<div class="box">
	<?php if(has_post_thumbnail()) : ?>
	<div class="thumb"> <a href="<?php the_permalink(); ?>"><?php pxl::timthumb( 'post_thumbnail', array( 'w' => 246, 'h' =>120 ) ); ?></a> </div>
	<?php endif; ?>
	<h4><?php the_title(); ?></h4>
	<?php pxl::excerpt("length=30 class=read-more text='read more &raquo;'"); ?>
</div>