<header class="primary">
	<div class="wrapper">
		<div class="row">
			<div class="span8">
				<h1><a href="/">FDVA - Florida Department of Veterans' Affairs</a></h1>
			</div>
			<div class="span4 bottom">
				<?php get_search_form(); ?>
				<a class="rss" href="<?php bloginfo('rss2_url') ?>">RSS</a>
			</div>
		</div>
	</div>
</header>
<nav class="primary">
	<div class="wrapper">
		<?php wp_nav_menu( array( 'theme_location' => 'main', 'container' => false, 'echo' => true, 'fallback_cb' => false, ) ); ?>
	</div>
</nav>
<div id="banner">
	<div class="wrapper">
		<?php if (is_front_page()) : ?>
			<div id="slideshow">
				<ul class="bjqs">
					<?php echo do_shortcode("[posts type=page show=-1 loop=home-slide tax_query=box/slider meta_key=order-slide orderby=meta_value_num order=ASC]]"); ?>
				</ul>
			</div>
		<?php else: ?>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/resources/images/backgrounds/banner.jpg" width="970" height="140" alt="Banner">
		<?php endif; ?>
		<div class="light-top"></div>
	</div>
</div>
<div class="grad">
	<div class="wrapper">
		<div class="light-top"></div>
		<div class="light-bottom"></div>