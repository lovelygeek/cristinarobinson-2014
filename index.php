<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="eightcol first clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

								<header class="article-header twelvecol clearfix">
								
									<div class="threecol first"> 
										<div class="circledate text-center">
											<span class="day"><?php the_time('d');?></span><br />
											<?php the_time('F');?><br />
											<?php the_time('Y');?>
										</div>
										
										<div class="circlelink text-center">
											<a href="<?php echo wp_get_shortlink(); ?>"><span class="entypo-link"></span></a>
										</div>	
										
										<div class="circlecomment text-center">
											<?php wp_link_pages(); ?><a href="<?php comments_link(); ?>" title="Leave a Comment"><?php comments_number('0','1','%'); ?></a>
										</div>
									
									</div>
									

									
									<div class="ninecol last">
										<h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
										<p class="byline vcard"><?php
										printf( __( 'Filed under %4$s.', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', '));
									?></p>
									</div>

								</header>

								<section class="entry-content clearfix">
									<?php the_content(); ?>
									

								</section>

								<footer class="article-footer">
									<p class="tags text-center">&hearts; <?php wp_link_pages(); ?><a href="<?php comments_link(); ?>"><?php comments_number('Leave a Comment','1 Comment','% Comments'); ?></a> | <?php the_tags( '<span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '' ); ?></p>

								</footer>

								<?php // comments_template(); // uncomment if you want to use them ?>

							</article>

							<?php endwhile; ?>

									<?php if ( function_exists( 'bones_page_navi' ) ) { ?>
											<?php bones_page_navi(); ?>
									<?php } else { ?>
											<nav class="wp-prev-next">
													<ul class="clearfix">
														<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
														<li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
													</ul>
											</nav>
									<?php } ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry clearfix">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div>

						<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
