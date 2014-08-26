<div id="sidebar">
	<?php if ( is_single() || is_home()){ ?>
		<ul>
			<?php 
				$args = array(
					'style'              => 'list',
					'use_desc_for_title' => 1,
					'hierarchical'       => false,
					'title_li'           => __( '' ),
					'show_option_none'   => __('No categories'),
					'number'             => null,
					'echo'               => 1,
				);
				wp_list_categories( $args ); 
				$blog_id = get_option('page_for_posts'); echo do_shortcode("[posts type=page loop=page-child show=-1 post_parent=$blog_id orderby=menu_order]");
			?>
		</ul>
	<?php } ?>
	<?php if ( is_page() && $post->post_parent == 0 ){ ?>
		<ul>
			<?php echo do_shortcode("[posts type=page loop=page-child show=-1 post_parent=$post->ID orderby=menu_order]"); ?>
		</ul>
	<?php } elseif ( is_page() && $post->post_parent ){ 
		$parent = $post->post_parent;
	?>
		<ul>
			<?php echo do_shortcode("[posts type=page loop=page-child show=-1 post_parent=$parent orderby=menu_order]"); ?>
		</ul>
	<?php } ?>
	<hr>
	<?php
		if ( is_page()) {
			$cfs = get_post_custom($post->ID);
			if (isset($cfs['featured_page']) && $cfs['featured_page'] && ($cfs['featured_page'][0] != 0) ) {
				$featured_page_id = $cfs['featured_page'][0];
				echo do_shortcode("[posts type=page loop=sidebar-box show=1 p=$featured_page_id]");
				echo '<hr>';
			}
		}
	?>
	<?php get_template_part( '/templates/partials/connect' ); ?>
</div>