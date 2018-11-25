<?php

/*
	Template Name: Landing Page
*/

get_header();  ?>

<div class="banner">
	<div class="container">
   <a href="/"><img src="https://www.westmaneditorial.com/hubfs/Logo/WestmanLogo.png" alt=""></a>
		<h1><?php the_title(); ?></h1>
	</div> <!-- .container -->
</div>

<div class="lpContent">
		<div class="readMoreDiv">
			<a href="#" class="readMore">Read More <i class="fa fa-plus"></i><i class="fa fa-minus"></i></a>
		</div>
		<div class="container">
			<div class="row-fluid">
				<div class="span8">
					<div class="lpContentText">
						<?php // Start the loop ?>
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile; // end the loop?>
					</div>
				</div>
				<div class="span4">
					<div class="lpForm">
						<h3><?php the_field('form_title'); ?></h3>
					</div> <!-- .lpForm -->
				</div> <!-- .span4 -->
			</div> <!-- .row-fluid -->
		</div> <!-- .container -->
	</div>

<?php get_footer(); ?>