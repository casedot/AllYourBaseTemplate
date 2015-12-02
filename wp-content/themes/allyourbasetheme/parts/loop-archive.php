<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">					
		<header class="article-header">
			<h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><span class="entry-thumb"><?php the_post_thumbnail('large'); ?></span><br /><?php the_title(); ?></a></h2>
			<?php if (has_excerpt()) { ?><div class="entry-subtitle subtitle"><?php the_excerpt(); ?> </div> <?php } ?>
			<div class="entry-byline row">
				<div class="large-8 medium-8 columns">
					<?php get_template_part( 'parts/content', 'byline' ); ?>
				</div>
				<div class="large-4 medium-4 columns">					
					<ul class="hlist right small">
						<?php if (is_archive()) { ?><li><a href="<?php the_permalink() ?>"><i class="fa fa-share"></i></a></li> <?php } ?>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			
		</header> <!-- end article header -->
						
		<!--<section class="entry-content" itemprop="articleBody">			-->
			<?php //the_content('<button class="tiny">Read more...</button>'); ?>
		<!--</section>-->
		 <!-- end article section -->
							
		<footer class="article-footer">
	    	<p class="tags"><?php the_tags('<span class="tags-title">TAGS</span> ', '', ''); ?></p>
		</footer> <!-- end article footer -->				    						
	</article> <!-- end article -->

<?php endwhile; ?>	
					
<?php joints_page_navi(); ?>

<?php else : ?>
	<?php get_template_part( 'parts/content', 'missing' ); ?>
<?php endif; ?>