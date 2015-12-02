<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- Icons & Favicons -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	    <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>
		<div class="off-canvas-wrap" data-offcanvas>
			<div class="inner-wrap">
				<div id="container" class="<?php global $post; $slug = get_post( $post )->post_name; echo $slug; ?>">
					<div class="head-container <?php if ( is_front_page() ) {echo "video-bg--home";} ?>">
						<div class="toolbar show-for-medium-up">
							<div class="row">
								<div class="large-6 medium-6 columns">
									<ul class="hlist left">
										<li><a href="<?php bloginfo('url'); ?>"><i class="fa fa-home"></i>All Your Base Theme</a></li>
										<li>
											<a href="#" class="trigger-overlay" data-href="language-overlay" data-dropdown="language-drop" onclick="return false"><i class="fa fa-globe"></i>Region</a>
										</li>
									</ul>
								</div>
								<div class="large-6 medium-6 columns">
									<ul class="hlist right">
										<li><a href="/contact/" class="trigger-overlay" data-href="connect-overlay" onclick="return false">Connect with Us<i class="fa fa-paper-plane"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<header class="header" role="banner">
								
							<!-- This navs will be applied to the topbar, above all content 
								To see additional nav styles, visit the /parts directory -->
							<?php get_template_part( 'parts/nav', 'top-offcanvas' ); ?>
										
						</header> <!-- end .header -->						
						
						<?php if ( is_front_page() ) : ?>
						<div class="statement">
							<h1 class="text-center"><a href="/dark-matter-is-a-hypothetical-kind-of-matter/"><span class="gigantic bold">Dark Matter </span><br />
							<span class="big subtitle secondary label">a hypothetical kinda of matter</span><br /><span class="big"><i class="fa fa-diamond text-white"></i></span></a></h1>							 
						</div>
						<!--<div class="video-bg-overlay"></div>-->
						<video id="video-bg" class="video-bg__video" poster="<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/mountain-layers.jpg" autoplay muted loop>
							<source src="<?php echo get_template_directory_uri(); ?>/assets/videos/epic-clouds.mp4" type="video/mp4">
							<source src="<?php echo get_template_directory_uri(); ?>/assets/videos/epic-clouds.ogv" type="video/ogg">
							<source src="<?php echo get_template_directory_uri(); ?>/assets/videos/epic-clouds.webm" type="video/webm">
						</video><!-- /video -->
						<?php endif; ?>
						
					</div>
					
					<aside class="right-off-canvas-menu show-for-small-only">
						<ul class="off-canvas-list">
							<li><label>menu<br /><i class="fa fa-diamond"></i></label></li>
								<?php joints_off_canvas(); ?>    
						</ul>
					</aside>
					<a class="exit-off-canvas"></a>
