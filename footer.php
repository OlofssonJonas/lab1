<footer id="footer">
	<div class="container">
		<div class="row top">
			<div class="col-xs-12 col-sm-6 col-md-4">
				
				<?php dynamic_sidebar('footWidget1'); ?>
			
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						
						<?php dynamic_sidebar('footWidget2'); ?>
						
					</div
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						
						<ul class="social">
							<?php dynamic_sidebar('footWidget3'); ?>
							
						</ul>
					</div>
				</div>
				<div class="row bottom">
					<div class="col-xs-12">
						
						<!-- det här är koden för att få in widgets -->
						<?php dynamic_sidebar('footWidget4'); ?>
					</div>
				</div>
			</div>
		</footer>
		<div>
			
		</div>
		
	</body>
	<?php wp_footer(); ?>
</html>