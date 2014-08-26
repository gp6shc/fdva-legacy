<div class="row">
	<div class="span4">
		<?php if ( is_page() && $post->post_parent ) {
		    echo '<h2>'.get_the_title($post->post_parent).'</h2>';
		} elseif ( is_single() || is_home()){
			echo '<h2>News</h2>';
		} else {
			echo '<h2>'.get_the_title().'</h2>';
		} ?>
		<?php get_sidebar(); ?>
	</div>
	<div class="span8<?php if ( is_page() ) echo " content"; ?>">
		<?php 
			if ( is_home() || is_search() ) {
				pxl::loop( 'post' ); pxl::paging( 'bottom' );
			}else {
				if ( is_page() ) {
				    echo '<h2>'.get_the_title().'</h2>';
				} else {
				    // This is not a subpage
				}
				the_content();
			}
		?>
	</div>
</div>