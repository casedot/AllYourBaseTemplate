<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header">	
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
    </header> <!-- end article header -->
					
    <section class="entry-content" itemprop="articleBody">
		<?php the_post_thumbnail('full'); ?>
		<?php the_content(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		<p class="tags"><?php the_tags('<span class="tags-title">' . __('TAGS', 'jointstheme') . '</span> ', '', ''); ?></p>	</footer> <!-- end article footer -->
									
	<div class="row">
		<div class="post-comments large-9 medium-8 columns">
			<?php comments_template(); ?>
		</div>
		<div class="post-sidebar large-3 medium-4 columns">
			<?php get_sidebar(); ?>
		</div>
	
													
</article> <!-- end article -->