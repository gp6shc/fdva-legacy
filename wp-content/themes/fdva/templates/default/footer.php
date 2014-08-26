</div>
<div class="callout">
	<div class="wrapper">
		<span><?php themeinfo('footer-line'); ?></span>
	</div>
</div>
<footer>
	<div class="wrapper">
		<div class="row">
			<div class="span4">
				<?php echo do_shortcode("[posts type=post loop=post-small show=1]"); ?>
				<?php echo do_shortcode("[posts type=page loop=post-small show=1 tax_query=box/footer orderby=menu_order]"); ?>
			</div>
			<?php dynamic_sidebar( 'sidebar-form' ); ?>
			<div class="span4">
				<h4>En Espa&ntilde;ol</h4>
				<p><?php themeinfo('footer-espanol'); ?></p>
				<div class="copyright">
					<p>&copy; <?php echo date("Y"); ?> Florida Department of Veterans’ Affairs. <?php themeinfo('footer-copy'); ?></p>
				</div>
			</div>
		</div>
	</div>
</footer>