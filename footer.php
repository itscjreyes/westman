<footer>
	<div class="container">
		<div class="row-fluid">

			<div class="span4">
				<a href="http://westmaneditorial-2759183.hs-sites.com/?__hstc=153362535.e80f62b216ee0ae0a5614226c74d4cf4.1525267298453.1526065862663.1526320635985.4&amp;__hssc=153362535.1.1526320635985&amp;__hsfp=182673874"><img src="https://www.westmaneditorial.com/hubfs/Logo/logo-White-Transparent-Background.png?t=1525970425256" alt="Logo" class="logo"></a>
				<div class="footerContact">
					<a href="tel:9479668463">647.966.8463</a>
					<p>
						70 Distillery Lane 
						<br>
						Suite 602 
						<br>
						Toronto, ON 
						<br>
						M5A 0E3
					</p>
				</div>
			</div>

			<div class="span4 quickLinks">
				<h3>Quick Links</h3>
				<span id="hs_cos_wrapper_module_1480706280274916" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_menu" style="" data-hs-cos-general-type="widget" data-hs-cos-type="menu"><div id="hs_menu_wrapper_module_1480706280274916" class="hs-menu-wrapper active-branch flyouts hs-menu-flow-horizontal" role="navigation" data-sitemap-name="default">
 <ul>
  <li class="hs-menu-item hs-menu-depth-1"><a href="//www.westmaneditorial.com/what-we-do">What We Do</a></li>
  <li class="hs-menu-item hs-menu-depth-1"><a href="//www.westmaneditorial.com/about-us">About Us</a></li>
  <li class="hs-menu-item hs-menu-depth-1"><a href="//www.westmaneditorial.com/writing-jobs">Writing Jobs</a></li>
  <li class="hs-menu-item hs-menu-depth-1"><a href="/blog">Blog</a></li>
  <li class="hs-menu-item hs-menu-depth-1"><a href="//www.westmaneditorial.com/contact">Contact</a></li>
  <li class="hs-menu-item hs-menu-depth-1"><a href="//www.westmaneditorial.com/get-a-quote">Get a Quote</a></li>
 </ul>
</div></span>
			</div>

			<div class=" span4 latestPosts">
				<h3>Latest Posts</h3>
				<ul>
					<?php
					$args = array(
						'numberposts' => 3,
						'offset' => 0,
						'category' => 0,
						'orderby' => 'post_date',
						'order' => 'DESC',
						'include' => '',
						'exclude' => '',
						'meta_key' => '',
						'meta_value' =>'',
						'post_type' => 'post',
						'post_status' => 'publish',
						'suppress_filters' => true
					);

					$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
					?>
					<?php
						$recent_posts = wp_get_recent_posts();
						foreach( $recent_posts as $recent ){
							echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
						}
						wp_reset_query();
					?>
				</ul>
			</div>

		</div> <!-- .row-fluid -->
	</div> <!-- .container -->

	<div class="copyright">
		<p>© 2018. All Rights Reserved | <a href="/privacy-policy">Privacy Policy</a></p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>