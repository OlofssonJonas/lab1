<?php 
/*
Template Name: Undersida 4
*/
;?>

<?php get_header(); ?>

<!-- Det här är undersida 4 -->
		<main>
			<section>
				<div class="container">
					<div class="row">

							<div class="col-xs-12 col-sm-8 col-md-6">
							<h1><?php the_title(); ?></h1>
							<p><?php the_content(); ?></p>					
							</div>
							
						<div class="col-xs-12 col-sm-4 col-md-6 image" >
							<?php the_post_thumbnail('large'); ?>
						</div>
					</div>
				</div>
			</section>
		</main>
<?php get_footer(); ?>