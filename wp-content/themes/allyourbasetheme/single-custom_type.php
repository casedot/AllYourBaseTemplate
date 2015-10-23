<?php
/*
This is the custom post type post template.
If you edit the post type name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom post type is called
register_post_type( 'bookmarks',
then your single template should be
single-bookmarks.php

*/
?>

<?php get_header(); ?>
			
			<div id="content">

				<div id="inner-content" class="row">
			
					<div id="main" class="large-9 medium-8 columns first" role="main">
					
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    	<?php get_template_part( 'parts/loop', 'single' ); ?>
					    					
					    <?php endwhile; else : ?>
					
					   		<?php get_template_part( 'parts/content', 'missing' ); ?>

					    <?php endif; ?>
			
					</div> <!-- end #main -->
					
					<div id="main" class="large-3 medium-4 columns">
    
						<?php get_sidebar(); ?>
					
					</div>

				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>