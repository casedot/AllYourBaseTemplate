<div class="show-for-medium-up contain-to-grid">
	<nav class="top-bar" data-topbar>
		<ul class="title-area">
			<!-- Title Area -->
			<li class="name">
				<a href="<?php echo home_url(); ?>" rel="nofollow" class="site-logo"><img src="<?php echo get_bloginfo('template_directory');?>/assets/images/logo.png" alt="Fisheye Consulting logo" /></a>
			</li>
		</ul>		
		<section class="top-bar-section right">
			<?php joints_top_nav(); ?>
		</section>
	</nav>
</div>

<div class="show-for-small-only">
	<nav class="tab-bar">
		<section class="left tab-bar-section">
			<a href="<?php echo home_url(); ?>" rel="nofollow" class="site-logo"><img src="<?php echo get_bloginfo('template_directory');?>/assets/images/logo.png" alt="Fisheye Consulting logo" /></a>
		</section>
		<section class="right-small">
			<a href="#" class="right-off-canvas-toggle menu-icon" ><span></span></a>
		</section>
	</nav>
</div>