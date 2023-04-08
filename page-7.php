<?php get_header(); ?>
Detta är undersida 2
		<main>
			<section>
                <div class="container">
                    <div class="row">
                        <div id="primary" class="col-xs-12 col-md-9 col-md-push-3">
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_content(); ?></p>
						</div>
                        <?php get_sidebar(); ?>
					</div>
				</div>
			</section>
		</main>
<?php get_footer(); ?>
		