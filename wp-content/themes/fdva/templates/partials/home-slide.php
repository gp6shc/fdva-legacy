<li>
	<div class="image">
		<?php pxl::timthumb( 'post_thumbnail', array( 'w' => 630, 'h' => 290 ), 'original' ); ?>
	</div>
	<div class="text">
		<h3><?php the_title() ?></h3>
		<?php pxl::excerpt("length=65 class=button inline=false content=excerpt sep=''"); ?>
	</div>
</li>