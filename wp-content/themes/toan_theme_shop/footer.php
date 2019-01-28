			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<div class="container">
				<!-- copyright -->
					<div class="row row_footer">
						<div class="col-md-6">
						<?php dynamic_sidebar( 'footer 1' ); ?>
						</div>
						<div class="col-md-6">
						<?php dynamic_sidebar( 'footer 2' ); ?>
						</div>
					</div>
				</div>
				<div class="footer_33">
					<div class="container">
						<div class="row">
							<div class="col-md-12 ">
									<?php dynamic_sidebar( 'footer 3' ); ?>
							</div>
						</div>
					</div>
				</div>
			
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
