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
									get_template_part('/template-part/part','links');
									get_template_part('/template-part/part','article'); 
									the_excerpt(); 
									?>
									</article>
									<?php
								}
								?>	

							<nav class="navigation pagination">
									<?php echo paginate_links(); ?>
									
							</nav>
						</div>
						<?php get_sidebar();?>
						
					</div>
				</div>
			</section>
			
		</main>
	<?php get_footer();