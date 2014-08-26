<div class="row">
	<div class="span4">
		<h2>Search for: &ldquo;<?php the_search_query(); ?>&rdquo;</h2>
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
		<div id="nav-<?php echo $nav; ?>" class="navigation">
	<div class="nav-previous"><?php next_posts_link( __( "<span class=\"meta-nav\">&larr;</span> $prev", 'parapxl' ) ); ?></div>
	<div class="nav-next"><?php previous_posts_link( __( "$next <span class=\"meta-nav\">&rarr;</span>", 'parapxl' ) ); ?></div>
</div>
	</div>
</div>