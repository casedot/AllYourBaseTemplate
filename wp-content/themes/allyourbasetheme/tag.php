<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row">
					
					<div class="large-3 medium-3 columns">

						<h1 class="page-title bold"><?php the_archive_title();?></h1>

						<?php the_archive_description('<div class="subtitle taxonomy-description">', '</div>');?>

	    					<?php get_sidebar(); ?>

					</div>
			
				    <div id="main" class="large-9 medium-9 columns" role="main">
						
						<!-- To see additional archive styles, visit the /parts directory -->
					    <?php get_template_part( 'parts/loop', 'archive' ); ?>
								
				    </div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>