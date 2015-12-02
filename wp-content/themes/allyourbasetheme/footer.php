					<footer class="footer" role="contentinfo">
						<div id="contact-tools">
							<div class="ct-container row collapse">
								<div class="large-2 medium-3 columns social">
									<h3>Connect</h3>
									<div class="social-icons clearfix">
										<ul class="hlist left">
											<li><a href="#" data-tooltip aria-haspopup="true" title="Facebook"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#" data-tooltip aria-haspopup="true" title="Twitter"><i class="fa fa-twitter"></i></a></li>	
											<li><a href="#" data-tooltip aria-haspopup="true" title="Instagram"><i class="fa fa-instagram"></i></a></li>
											<li><a href="#" data-tooltip aria-haspopup="true" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>												
										</ul>
									</div>
								</div>																
								<div class="large-8 medium-6 columns newsletter">
									<div class="row">
										<div class="large-12 medium-12 columns">
											<div class="row">
												<div class="newsletter-form large-12 medium-12 columns">
														<h3>Join Our Mailing List</h3>
														<?php echo do_shortcode( '[contact-form-7 id="34" title="Newsletter Signup Form"]' ); ?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="large-2 medium-3 columns subscribe">
									<h3><i class="fa fa-rss"></i>&nbsp;Subscribe</h3>
									<ul class="hlist left small">
										<li><a href="/posts/blog/feed/">Blog</a></li>
										<li><a href="/posts/news/feed/">News</a></li>
										<li><a href="/events/feed/">Events</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div id="inner-footer">
							<div class="row">
								<div class="large-6 medium-6 columns">
									<ul class="hlist left">
										<li><a href="<?php bloginfo('url'); ?>"><i class="fa fa-home"></i>&nbsp;Home</a></li>
										<li><a href="/posts/blog/">Blog</a></li>
										<li><a href="#">Terms of Use</a></li>
										<li><a href="#">Privacy Policy</a></li>
										<li><a href="/contact">Contact Us</a></li>
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
		<div id="connect-overlay" class="overlay overlay-default hide-for-small-only">
			<button type="button" class="overlay-close"><i class="fa fa-times"></i></button>
			<div class="overlay-content">
				<div class="row">
					<h2 class="text-center">Connect with Us</h2>
					<div class="large-12 medium-12 columns">
						<div class="social-icons clearfix">
							<ul class="hlist center">
								<li><a href="#" data-tooltip aria-haspopup="true" title="Facebook"><i class="fa fa-facebook large-icon"></i></a></li>
								<li><a href="#" data-tooltip aria-haspopup="true" title="Twitter"><i class="fa fa-twitter large-icon"></i></a></li>	
								<li><a href="#" data-tooltip aria-haspopup="true" title="Instagram"><i class="fa fa-instagram large-icon"></i></a></li>
								<li><a href="#" data-tooltip aria-haspopup="true" title="LinkedIn"><i class="fa fa-linkedin large-icon"></i></a></li>											
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
					<br />
					<h2 class="text-center">Send us an Email</h2>
					<div class="large-6 medium-12 columns">
						<p class="big">
                          <a href="#">hello@emailaddress.com</a>
						</p>
					</div>
					<div class="large-6 medium-12 columns">
						<p class="big">
                          <a href="#">holla@emailaddress.com</a>
						</p>
					</div>
					<div class="clearfix"></div>
					<!--<br />
					<h2 class="text-center">Office Locations</h2>
					<div class="large-4 medium-4 columns">
						<p class="text-left">1111 S Figueroa St <br />Los Angeles, CA 90015 <br />(213) 742-7100</p>
					</div>
					<div class="large-4 medium-4 columns">
						<p class="text-left">24200 Dana Point Harbor Dr <br />Dana Point, CA 92629 <br />(949) 496-2274</p>
					</div>
					<div class="large-4 medium-4 columns">
						<p class="text-left">8901 Sunset Blvd <br />West Hollywood, CA 90069 <br />(310) 652-4202</p>
					</div>
					<div class="clearfix"></div>-->
				</div>
			</div>
		</div>
		<div id="language-overlay" class="overlay overlay-default hide-for-small-only">
			<button type="button" class="overlay-close"><i class="fa fa-times"></i></button>
			<div class="overlay-content">
				<h2 class="text-center">Choose Your Region</h2>
				<div class="flag-icons row collapse">
					<div class="large-4 medium-4 columns">
						<p><a href="#"><span class="flag-icon flag-icon-us"></span><br />United States</a></p>
					</div>
					<div class="large-4 medium-4 columns">
						<p><a href="#"><span class="flag-icon flag-icon-gb"></span><br />United Kingdom</a></p>
					</div>					
					<div class="large-4 medium-4 columns">
						<p><a href="#"><span class="flag-icon flag-icon-jp"></span><br />Japan</a></p>
					</div>
				</div>
				<div class="flag-icons row collapse">
					<div class="large-4 medium-4 columns">
						<p><a href="#"><span class="flag-icon flag-icon-ca"></span><br />Canada</a></p>
					</div>
					<div class="large-4 medium-4 columns">
						<p><a href="#"><span class="flag-icon flag-icon-in"></span><br />India</a></p>
					</div>					
					<div class="large-4 medium-4 columns">
						<p><a href="#"><span class="flag-icon flag-icon-cn"></span><br />China</a></p>
					</div>
					
				</div>
			</div>
		</div>
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->


