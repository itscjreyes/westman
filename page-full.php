<?php

/*
	Template Name: Inner Page
*/

get_header();  ?>

<div class="pageBanner">
	<div class="container">
		<h1><?php the_title(); ?></h1>
	</div> <!-- .container -->
</div>

<?php

// check if the flexible content field has rows of data
if( have_rows('content') ):

     // loop through the rows of data
    while ( have_rows('content') ) : the_row();

        if( get_row_layout() == '2_block_text' ):
          ?>
          <div class="textTwo">
            <div class="container">
              <div class="row-fluid">
                <div class="span6">
                  <?php the_sub_field('left_text'); ?>
                </div>
                <div class="span6">
                  <?php the_sub_field('right_text'); ?>
                </div>
              </div>
            </div>
          </div>

          <?php
        elseif( get_row_layout() == '3_block_text' ): 
        ?>

          <div class="textThree">
            <div class="container">
              <div class="row-fluid">
                <div class="span4">
                  <?php the_sub_field('left_text'); ?>
                </div>
                <div class="span4">
                  <?php the_sub_field('center_text'); ?>
                </div>
                <div class="span4">
                  <?php the_sub_field('right_text'); ?>
                </div>
              </div>
            </div>
          </div>

          <?php
        elseif( get_row_layout() == 'right_text' ): 
        ?>
          <div class="textRight">
            <div class="container">
              <div class="row-fluid">
                <div class="span6">
                  <img src="<?php the_sub_field('image'); ?>">
                </div>
                <div class="span6">
                  <?php the_sub_field('right_text'); ?>
                </div>
              </div>
            </div>
          </div>

          <?php
        elseif( get_row_layout() == 'left_text' ): 
        ?>
          <div class="textLeft">
            <div class="container">
              <div class="row-fluid">
                <div class="span6">
                  <?php the_sub_field('left_text'); ?>
                </div>
                <div class="span6">
                  <img src="<?php the_sub_field('image'); ?>">
                </div>
              </div>
            </div>
          </div>

          <?php
        elseif( get_row_layout() == 'center_text' ): 
        ?>
          <div class="centerText">
            <div class="container">
              <div class="centerWrapper">
                <?php the_sub_field('center_text'); ?>
              </div> 
            </div>
          </div>

          <?php
          elseif( get_row_layout() == 'banner_cta_text'):
            ?>
            <div class="hireWritersCTA">
              <div class="container">
                  <div class="centerWrapper">
                      <?php the_sub_field('text'); ?>
                      <a href="/hire-writers" class="fullButton">Hire Writers</a>
                  </div>
              </div>
          </div>

          <?php
        endif;

    endwhile;

else :

    // no layouts found

endif;

?>

<?php get_footer(); ?>