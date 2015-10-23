<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="row">
			
				    <div id="main" class="large-9 medium-8 columns" role="main">
					
					    	<?php get_template_part( 'parts/loop', 'page' ); ?>
					    					
    				</div> <!-- end #main -->
    
				    <div class="large-3 medium-4 columns">
	    				<?php get_sidebar(); ?>
					</div>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>