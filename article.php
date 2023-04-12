<ul class="meta">
		<li>
			<i class="fa fa-calendar"></i> <?php the_date(); ?>
		</li>
		<li>
			<i class="fa fa-user"></i> <a href="<?php the_permalink(); ?>"><?php the_author_posts_link(); ?></a>
		</li>
		<li>
			<i class="fa fa-tag"></i> <?php the_category($separator = ', '); ?>
		</li>
	</ul>