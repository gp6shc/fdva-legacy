<div class="row">
	<div class="span4">
		<h2>News</h2>
		<div id="sidebar">
			<ul>
				<li class="cat-item cat-item-1"><a href="http://floridavets.org/?cat=1" title="View all posts filed under FDVA News">FDVA News</a></li>

				<li><a href="http://floridavets.org/?page_id=96">eFlorida Vets</a></li>
			</ul>

			<hr>

			<div class="box connect"><h4>Connect with FDVA Online</h4><hr> <a href="http://facebook.com/Floridaveterans" class="social facebook" target="_blank">facebook</a> <a href="http://youtube.com/user/thefdva" class="social youtube" target="_blank">youtube</a></div></div>

		</div>
	<div class="span8 content">
		<?php pxl::loop( 'post' ); ?>
		<div id="nav-<?php echo $nav; ?>" class="navigation">
	<div class="nav-previous"><?php next_posts_link( __( "<span class=\"meta-nav\">&larr;</span> $prev", 'parapxl' ) ); ?></div>
	<div class="nav-next"><?php previous_posts_link( __( "$next <span class=\"meta-nav\">&rarr;</span>", 'parapxl' ) ); ?></div>
</div>
	</div>
</div>



