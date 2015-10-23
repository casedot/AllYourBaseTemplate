<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header">	
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<?php if (has_excerpt()) { ?><div class="entry-subtitle subtitle"><?php the_excerpt(); ?> </div> <?php } ?>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
    </header> <!-- end article header -->
					
    <section class="entry-content" itemprop="articleBody">
		<p><?php the_post_thumbnail('full'); ?></p>
		<?php the_content(); ?>
		<p class="normal align-center">
			<i class="fa fa-diamond"></i>
		</p>
	</section> <!-- end article section -->
						
	<footer class="article-footer entry-tags">
		<p class="tags"><?php the_tags('<span class="tags-title">TAGS</span> ', '', ''); ?></p>	</footer> <!-- end article footer -->
									
	<div class="row">
		<div class="post-comments large-9 medium-8 columns">
			<?php comments_template(); ?>
		</div>
		<div class="post-sidebar large-3 medium-4 columns">
			<?php get_sidebar(); ?>
		</div>
	
													
</article> <!-- end article -->