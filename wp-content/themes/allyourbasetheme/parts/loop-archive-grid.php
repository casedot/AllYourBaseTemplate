

<?php foreach (array_chunk($posts, 3, true) as $posts) :  ?>



    <div class="row" data-equalizer> <!--Begin Row:--> 

    

            <?php foreach( $posts as $post ) : setup_postdata($post); ?>



        <!--Item: -->

		<div class="large-4 medium-4 columns" data-equalizer-watch>

        

			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">

			

				<header class="article-header">

					<h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>	

					<?php if (has_excerpt()) { ?><div class="entry-subtitle subtitle"><?php the_excerpt(); ?> </div> <?php } ?>

					<div class="entry-byline row">
						<div class="large-10 medium-10 columns">
							<?php get_template_part( 'parts/content', 'byline' ); ?>
						</div>
						<div class="large-2 medium-2 columns">					
							<ul class="hlist right small">
								<?php if (is_archive()) { ?><li><a href="<?php the_permalink() ?>"><i class="fa fa-share"></i></a></li> <?php } ?>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>				

				</header> <!-- end article header -->	

								

				<section class="entry-content" itemprop="articleBody">

					<?php the_content('<button class="tiny">Continue Reading</button>'); ?> 

				</section> <!-- end article section -->

								    							

			</article> <!-- end article -->

			

		</div>

		

	 <?php endforeach; ?>

	<hr />

	</div>  <!--End Row: --> 

	

<?php endforeach; ?>    



<?php wp_reset_postdata(); ?>

					     

<?php joints_page_navi(); ?>		



<?php if ($posts = 0) : ?>



	<?php get_template_part( 'parts/content', 'missing' ); ?>



<?php endif; ?>