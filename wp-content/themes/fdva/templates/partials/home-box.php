<div class="span4 grid">
	<div class="thumb"> <a href="<?php the_permalink(); ?>"><?php pxl::timthumb( 'post_thumbnail', array( 'w' => 286, 'h' => 126 ) ); ?></a> </div>
	<h4><?php the_title() ?></h4>
	<?php pxl::excerpt("length=60 class=read-more sep='&nbsp;' text='READ MORE &raquo;'"); ?>
</div>