<?php						
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;	
	$args = array (
		'posts_per_page' => 9,
		'category' => get_query_var('cat'),
		'paged' => $paged,
	);
	$posts = get_posts( $args );
?>

<?php foreach (array_chunk($posts, 3, true) as $posts) :  ?>

    <div class="row" data-equalizer> <!--Begin Row:--> 
    
            <?php foreach( $posts as $post ) : setup_postdata($post); ?>

        <!--Item: -->
		<div class="large-4 medium-4 columns panel" data-equalizer-watch>
        
			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
			
				<!--<section class="featured-image" itemprop="articleBody">
					<?php //the_post_thumbnail('full'); ?>
				</section> -->
				<!-- end article section -->
			
				<header class="article-header">
					<h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><span class="entry-thumb"><?php the_post_thumbnail('full'); ?></span><br /><?php the_title(); ?></a></h2>
					<?php if (has_excerpt()) { ?><div class="entry-subtitle subtitle"><?php the_excerpt(); ?> </div> <?php } ?>		
					<?php get_template_part( 'parts/content', 'byline' ); ?>				
				</header> <!-- end article header -->	
								
				<section class="entry-content" itemprop="articleBody">
					<?php the_content('<button class="tiny">Continue Reading</button>'); ?> 
				</section> <!-- end article section -->
								    							
			</article> <!-- end article -->
			
		</div>
		
	 <?php endforeach; ?>
	
	</div>  <!--End Row: --> 
	
<?php endforeach; ?>    

<?php wp_reset_postdata(); ?>
					     
<?php joints_page_navi(); ?>		

<?php if ($posts = 0) : ?>

	<?php get_template_part( 'parts/content', 'missing' ); ?>

<?php endif; ?>
