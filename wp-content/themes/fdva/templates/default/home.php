<div class="row">
	<div class="span8 home-content">
		<?php the_content(); ?>
	</div>
	<div class="span4">
		<?php get_template_part( '/templates/partials/connect' ); ?>
	</div>
	<hr class="span12">
	<?php echo do_shortcode("[posts type=page show=3 loop=home-box tax_query=box/home meta_key=order-home orderby=meta_value_num order=ASC]"); ?>
	<hr class="span12 middle">
	<?php echo do_shortcode("[posts type=page show=3 loop=home-box tax_query=box/home offset=3 meta_key=order-home orderby=meta_value_num order=ASC]"); ?>
	<div class="span12">
		<hr>
		<div class="thumb small align-left">
		
		<!--<img src="http://sachsdigital.com/test/fdva/wp-content/timthumb.php?src=http://sachsdigital.com/test/fdva/wp-content/uploads/2012/08/foundation.jpg" />-->
		
		
		<?php pxl::timthumb( get_themeinfo('donate_img'), array( 'w' => 130, 'h' => 130 ), 'thumbnail' ); ?></div>
		
		
		<h4>Florida Veterans Foundation</h4>
		<p><?php echo get_themeinfo('donate'); ?></p>
		<a class="button" href="<?php themeinfo('donate_link'); ?>">Donate Today</a>
	</div>
</div>