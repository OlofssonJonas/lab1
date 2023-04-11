

							<!-- <ul class="side-menu"> -->
								<!-- <li> -->
									<!-- <a href="undersida.html">Undersida</a>
								</li>
								<li>
									<a href="undersida2.html">Undersida 2</a>
								</li>
								<li>
									<a href="undersida3.html">Undersida 3</a>
								</li>
								<li>
									<a href="undersida4.html">Undersida 4</a> -->
								<!-- </li>  -->
							  			<?php wp_nav_menu(
											array(
												'menu' => "side",
												'container' => "",
												'theme_location' => "side",
												'items_wrap' => '<ul class="side-menu">%3$s</ul>'
												)
											); 
							?> 
							<!-- </ul> -->
					