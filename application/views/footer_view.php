			<footer>
				<div class="footer-top">
					<div class="container clearfix">
						<div class="download-now">
							<h2 class="bottom-2">Still Waiting, Why not get it now</h2>
						</div>
					</div><!-- edn .container -->
     			</div><!-- end .footer-top -->
				<div class="footer-down">
					<div class="container clearfix">
						<div class="eight columns">
							<span class="copyright">&copy; Copyright 2015 <a href="index.html">Deeberdee</a>. All Rights Reserved. by <a href="javascript: void(0);" target="_blank">BoonStudio</a></span>
						</div>
						<div class="eight columns">
							<div class="social">
								<?php
									foreach ($social_network_list as $social_network) {
										if ((int)strpos($social_network['option_value'], '|') > 0) {
											$item = explode('|', $social_network['option_value']);
										}
										echo "<a href=\"$item[1]\" target=\"_blank\"><i class=\"$item[0] s-18\"></i></a>";
									}
								?>
							</div><!-- end .social -->
						</div><!-- end .eight.columns -->
					</div><!-- end .container -->
				</div><!-- end .footer-down -->
			</footer>
		</div><!-- end #wrap .boxed -->
		<script src="<?php echo base_url('assets/js/jquery-1.9.1.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.easing.1.3.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/jquery-ui/jquery.ui.core.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/jquery-ui/jquery.ui.widget.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/jquery-ui/jquery.ui.accordion.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/jquery-cookie.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/ddsmoothmenu.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.flexslider.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/colortip.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/tytabs.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.ui.totop.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/carousel.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.isotope.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/doubletaptogo.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/fancybox/jquery.fancybox.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.sticky.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
	</body>
</html>