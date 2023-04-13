
							  			<!-- <?php wp_nav_menu(
											array(
												'menu' => "side",									
												'theme_location' => "side",
												'items_wrap' => '<ul class="side-menu">%3$s</ul>'
												)
											); 
											?> -->


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
											
					