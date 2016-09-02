<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

					<div id="main" class="eightcol first clearfix" role="main">

						<article id="post-not-found" class="hentry clearfix">

							<header class="article-header">

								<h1><?php _e( '404 - Page Not Found', 'bonestheme' ); ?></h1>

							</header>

							<section class="entry-content">

								<p>Sorry, but the page you requested has not been found.</p>
								<p>I'm not blaming you, but have you checked your address bar? There might be a typo in the URL.</p>
								<p>If there isn't, you could try searching my website for the content you were looking for:</p>

							</section>

							<section class="search">

									<p><?php get_search_form(); ?></p>

									<p>Alternatively, you can go to <a href="http://www.cristinarobinson.net">my home page</a> or <a href="http://www.cristinarobinson.net/archives/">browse my archives</a></p>
									<p>One last thing, if you're feeling so kind, please <a href="http://www.cristinarobinson.net/contact/">tell me</a> about this error, so that I can fix it. Thanks!</p>

							</section>

						</article>

					</div>

				</div>

			</div>

<?php get_footer(); ?>
