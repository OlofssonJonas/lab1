

						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
									<li>
										<form method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/'));?>">								
											<div>
												<h2>Sök efter:</h2>
												<?php get_search_form(); ?>
												
											</div>
										</form>
									</li>
								</ul>
								<ul role="navigation">
									<li class="pagenav">
										<ul>
											<?php dynamic_sidebar('rightWidget1'); ?>
											<li class="page_item current_page_item"> 
												
											</li>
										</ul>
									</li>
									<li>
										<ul>
											<li>
											<?php dynamic_sidebar('rightWidget2'); ?>
											</li>
										</ul>
									</li>
									<li class="categories">
										<ul>
											<li class="cat-item">
												<?php dynamic_sidebar('rightWidget3');?>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</aside>
											
					