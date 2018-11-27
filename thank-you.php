<?php

/*
	Template Name: Thank You
*/

get_header();  ?>

<div class="pageBanner">
	<div class="container">
		<h1>Thank You</h1>
	</div> <!-- .container -->
</div>

<div class="centerText">
	<div class="container">
		<div class="centerWrapper">
			<?php // Start the loop ?>
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile; // end the loop?>
		</div>
	</div>
</div>

<?php get_footer(); ?>