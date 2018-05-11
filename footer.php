<footer>
	<div class="container">
		<div class="row-fluid">

			<div class="span4">
				<a href="http://westmaneditorial-2759183.hs-sites.com"><img src="https://cdn2.hubspot.net/hubfs/2759183/Logo/westman-editorial-white-logo.png" alt="Logo" class="logo"></a>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quas nobis error delectus dicta voluptatibus.</p>
				<div class="footerContact">
					<a href="tel:9479668463">647.966.8463</a>
					<p>
						90 Trinity St 
						<br>
						Suite 706 
						<br>
						Toronto, ON 
						<br>
						M5A 0E4
					</p>
				</div>
			</div>

			<div class="span4 quickLinks">
				<h3>Quick Links</h3>
				{% menu "module_1480706280274916" flow='horizontal', max_levels=2, overrideable=false, label='Advanced Menu' %}
			</div>

			<div class=" span4 latestPosts">
				<h3>Latest Posts</h3>
				<ul>
				{% set posts = blog_recent_posts('default', 3) %}
				{% for post in posts %}
					<li>
						<a href="{{ post.absolute_url }}">{{ post.name }}</a>
					</li>
				{% endfor %}
				</ul>
			</div>

		</div> <!-- .row-fluid -->
	</div> <!-- .container -->

	<div class="copyright">
		<p>&copy; 2017. All Rights Reserved.</p>
	</div>
</footer>


<!-- Main.js : all custom js -->

<!-- Flickity -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<!-- Odometer -->
<script src="http://github.hubspot.com/odometer/odometer.js"></script>

<?php wp_footer(); ?>
</body>
</html>