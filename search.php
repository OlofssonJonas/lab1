
    <?php get_header(); ?>

    <main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">
							<h1><?php echo "Sökresultat för: "; the_search_query(); ?></h1>
							<div class="searchform-wrap">
								<form id="searchform" class="searchform">

                                    <?php get_search_form(); ?>

								</form>
								<?php while (have_posts()){ ?>
									<article class="image">
										<?php the_post();?>
										<?php the_post_thumbnail('large'); ?>
										<?php get_template_part('template-part/part', 'links'); ?>
										<?php  get_template_part('/template-part/part','article'); ?>

										<ul class="meta">
											<?php get_template_part('article'); ?>
										</ul>
										<?php the_excerpt(); ?>
									</article>
									<?php
							}
							echo "No results"
							?>
							</div>
							
							<nav class="navigation pagination">
								<h2 class="screen-reader-text">Inläggsnavigering</h2>
								<a class="prev page-numbers" href="">Föregående</a>
								<span class="page-numbers current">1</span>
								<a class="page-numbers" href="">2</a>
								<a class="next page-numbers" href="">Nästa</a>
							</nav>
						</div>
					</div>
				</div>
			</section>
		</main>
	<?php get_footer(); ?> 
		




