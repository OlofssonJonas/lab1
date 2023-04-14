<?php get_header(); ?>

		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1><?php the_author(); ?></h1>
							 
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
						<?php get_sidebar(); ?>
					</div>
				</div>
			</section>
		</main>

		<?php get_footer(); ?>