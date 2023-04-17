<?php get_header();?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero image">
							
									 <?php the_post_thumbnail('full'); ?>
									 
									<div class="text">
									<p><?php the_content(); ?></p>
									
							</div>
						</div>
					</div>
				</div> 
                </section>
		</main>
<?php get_footer();?>
		 