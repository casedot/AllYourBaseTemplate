<?php get_header(); 

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts($query_string .'&posts_per_page=30&paged=' . $paged);

if(array_key_exists("cat", $_GET)) {
	$cat_filter = htmlspecialchars($_GET["cat"]);
	global $wp_query;
	$args = array_merge( $wp_query->query, array( 'category_name' => htmlspecialchars($_GET["cat"]) ) );
	query_posts( $args );
}


?>

			

			<div id="content">

			

				<div id="inner-content" class="row">

				

					<div class="large-3 medium-3 columns">

						<h1 class="page-title bold"><?php the_archive_title();?></h1>

						<?php the_archive_description('<div class="subtitle taxonomy-description">', '</div>');?>

	    					<?php get_sidebar(); ?>

					</div>

				    <div id="main" class="large-9 medium-9 columns first" role="main">

					    

				    	<!--<header>		    		

				    	</header>-->

				

				    	<!-- To see additional archive styles, visit the /parts directory -->



				    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
							<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">					
								<header class="article-header">
									<h2 class="normal bold entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
										<?php the_title(); ?></a>
									</h2>
									<p class="align-right small italic"><span><?php the_time('F j, Y') ?></span></p>
								</header> <!-- end article header -->    						
							</article> <!-- end article -->
						
						<?php endwhile; ?>	
											
						<?php joints_page_navi(); ?>
						
						<?php else : ?>
							<?php get_template_part( 'parts/content', 'missing' ); ?>
						<?php endif; ?>	

			

    				</div> <!-- end #main -->					

                

                </div> <!-- end #inner-content -->

                

			</div> <!-- end #content -->



<?php get_footer(); ?>