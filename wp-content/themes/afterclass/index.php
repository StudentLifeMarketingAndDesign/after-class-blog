<?php get_header(); ?>

			
			<div id="content">

				<div id="inner-content" class="wrap clearfix">
			
					<div id="main" class="eightcol clearfix" role="main">
					
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
							<header>
								
								<h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
								<p class="meta"><time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>.</p>
						


							</header> <!-- end article header -->
							<section class="post-content clearfix">
								<?php if ( has_post_thumbnail() ) { ?>
									<?php the_post_thumbnail('large'); ?>
								<?php } ?>
								
							</section>

							
							
							<section class="post-content clearfix">
							<?php the_excerpt(); ?>

						
							</section> <!-- end article section -->
							
							<footer>
					
								<p class="tags"><?php the_tags('Tagged as: ', ', ', ''); ?></p>
								
							</footer> <!-- end article footer -->
							
							<?php comments_template(); ?>
						
						</article> <!-- end article -->
						<?php endwhile; ?>	
						
						<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
							
							<?php page_navi(); // use the page navi function ?>
							
						<?php } else { // if it is disabled, display regular wp prev & next links ?>
							<nav class="wp-prev-next">
								<ul class="clearfix">
									<li class="next-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
									<li class="prev-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
								</ul>
							</nav>
						<?php } ?>		
						
						<?php else : ?>
						
						<article id="post-not-found">
						    <header>
						    	<h1>Not Found</h1>
						    </header>
						    <section class="post-content">
						    	<p>Sorry, but the requested resource was not found on this site.</p>
						    </section>
						    <footer>
						    </footer>
						</article>
						
						<?php endif; ?>
					
					</div> <!-- end #main -->
    				
					<?php get_sidebar(); // sidebar 1 ?>
					
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>