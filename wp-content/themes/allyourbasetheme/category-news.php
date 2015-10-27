<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row">
			
				    <div id="main" class="large-12 medium-12 columns" role="main">
						
						<h1 class="page-title bold align-center">LATEST NEWS</h1>

						<?php the_archive_description('<div class="subtitle taxonomy-description align-center">', '</div>');?>
						
						<hr />
						
						<!-- To see additional archive styles, visit the /parts directory -->
					    <?php get_template_part( 'parts/loop', 'archive-grid' ); ?>
								
				    </div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>