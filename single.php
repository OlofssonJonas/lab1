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
										<?php get_template_part('/template-part/part', 'article');
										the_content();
										
									} 
									?>

							</article>
						</div>
						<?php get_sidebar(); ?>
					</div>
				</div>
			</section>
		</main>
		<?php get_footer(); ?>


