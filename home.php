<?php get_header() ;?>
		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1><?php wp_title($sep=''); ?></h1>
							

								<?php while (have_posts()){ ?>
									<article class="image">
									<?php the_post();
									the_post_thumbnail('large');
									get_template_part('links');
									get_template_part('article');
									the_excerpt(); 
									?>
									</article>
									<?php
								}
								?>	

							<nav class="navigation pagination">
								<h2 class="screen-reader-text">Inläggsnavigering</h2>
								<a class="prev page-numbers" href="">Föregående</a>
								<span class="page-numbers current">1</span>
								<a class="page-numbers" href="">2</a>
								<a class="next page-numbers" href="">Nästa</a>
							</nav>
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
									<li>
										<form method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/'));?>">								
											<div>
												<label class="screen-reader-text">Sök efter:</label>
												</div>
												<?php get_search_form(); ?>
										</form>
									</li>
								</ul>
								<ul role="navigation">
									<li class="pagenav">
										<h2>Sidor</h2>
										<ul>
											<li class="page_item current_page_item">
											<?php dynamic_sidebar('rightWidget1'); ?>
												
											</li>
										</ul>
									</li>
									<li>
										<h2>Arkiv</h2>
										<ul>
											<li>
											<?php dynamic_sidebar('rightWidget2'); ?>
											</li>
										</ul>
									</li>
									<li class="categories">
										<h2>Kategorier</h2>
										<ul>
											<li class="cat-item">
												<?php dynamic_sidebar('rightWidget3');?>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</section>
		</main>
	<?php get_footer();