					<footer class="footer" role="contentinfo">
						<div id="contact-tools">
							<div class="row">
								<div class="large-2 medium-2 columns social">
									<h3>Connect</h3>
									<div class="social-icons clearfix">
										<ul class="hlist left">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>	
											<li><a href="#"><i class="fa fa-instagram"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>											
										</ul>
									</div>
								</div>
								<div class="large-8 medium-7 columns newsletter">
									<div class="newsletter-form clearfix">
										<h3>Join Our Mailing List</h3>
										<?php echo do_shortcode( '[contact-form-7 id="34" title="Newsletter Signup Form"]' ); ?>
									</div>
								</div>
								<div class="large-2 medium-3 columns subscribe">
									<h3><i class="fa fa-rss"></i>&nbsp;Subscribe</h3>
									<ul class="hlist left small">
										<li><a href="#">Blog</a></li>
										<li><a href="#">News</a></li>
										<li><a href="#">Events</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div id="inner-footer">
							<div class="row">
								<div class="large-6 medium-6 columns">
									<ul class="hlist left">
										<li><a href="#"><i class="fa fa-home"></i>&nbsp;Home</a></li>
										<li><a href="#">Blog</a></li>
										<li><a href="#">Terms of Use</a></li>
										<li><a href="#">Privacy Policy</a></li>
									</ul>
								</div>
								<div class="large-6 medium-6 columns">
									<ul class="hlist right copyright">
										<li><i class="fa fa-copyright"></i> <?php echo date('Y'); ?> <?php bloginfo('name'); ?></li>
									</ul>
								</div>
							</div>
						</div> <!-- end #inner-footer -->
					</footer> <!-- end .footer -->
				</div> <!-- end #container -->
			</div> <!-- end .inner-wrap -->
		</div> <!-- end .off-canvas-wrap -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->


