<?php get_header();?>
<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<article class="image">

								<?php while (have_posts()){
									the_post();
										the_post_thumbnail('large');?>
										<h1 class="title"><?php the_title(); ?></h1>
										<?php get_template_part('article');
										the_content();
									} ?>

							</article>
						</div>
						<?php get_sidebar(); ?>
						<!-- <aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
									<li>
										<form method="get" id="searchform" class="searchform" action="">
											<div>
												<?php get_search_form(); ?>
											</div>
										</form>
									</li>
								</ul>
								<ul role="navigation">
									<li class="pagenav">
										<h2>Sidor</h2>
										<ul>
											<li class="page_item current_page_item">
										</ul> 
										?php dynamic_sidebar('rightWidget1'); ?>
									</li>
									<li>
										<h2>Arkiv</h2>
										<ul>
											?php dynamic_sidebar('rightWidget2'); ?>
										</ul>
									</li>
									<li class="categories">
										<h2>Kategorier</h2>
										<ul>
											<li class="cat-item">
											?php dynamic_sidebar('rightWidget3');?>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</aside> -->
					</div>
				</div>
			</section>
		</main>


