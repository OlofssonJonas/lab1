<footer id="footer">
	<div class="container">
		<div class="row top">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<?php dynamic_sidebar('footWidget1'); ?>
				<!-- <h4>Kort om oss</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex.</p>
						<p>Phasellus tristique nunc in leo faucibus, a consequat nulla sagittis.</p> -->
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<?php dynamic_sidebar('footWidget2'); ?>
						
					</div
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<h4>Social media</h4>
						<ul class="social">
							<?php dynamic_sidebar('footWidget3'); ?>
							<li>
								<!-- <i class="fa fa-facebook"></i><a href="">Facebook</a>
							</li>
							<li>
								<i class="fa fa-twitter"></i> <a href="">Twitter</a>
							</li>
							<li>
								<i class="fa fa-instagram"></i> <a href="">Instagram</a>
							</li>
							<li>
								<i class="fa fa-linkedin"></i> <a href="">LinkedIn</a> -->
							</li>
						</ul>
					</div>
				</div>
				<div class="row bottom">
					<div class="col-xs-12">
						<p>Copyright &copy; Grupp X, 2016</p>
					</div>
				</div>
			</div>
		</footer>
		<div>
			<!-- det här är koden för att få in widgets -->
			
		</div>
		
	</body>
	<?php wp_footer(); ?>
</html>