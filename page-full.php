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

<main>
<?php

// check if the flexible content field has rows of data
if( have_rows('content') ):

     // loop through the rows of data
    while ( have_rows('content') ) : the_row();

        if( get_row_layout() == '2_block_text' ):
          ?>
          <section class="textTwo">
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
        </section>

          <?php
        elseif( get_row_layout() == '3_block_text' ): 
        ?>

          <section class="textThree">
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
          </section>

          <?php
        elseif( get_row_layout() == 'right_text' ): 
        ?>
          <section class="textRight">
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
          </section>

          <?php
        elseif( get_row_layout() == 'left_text' ): 
        ?>
          <section class="textLeft">
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
          </section>

          <?php
        elseif( get_row_layout() == 'center_text' ): 
        ?>
          <section class="centerText">
            <div class="container">
              <div class="centerWrapper">
                <?php the_sub_field('center_text'); ?>
              </div> 
            </div>
          </section>

          <?php
          elseif( get_row_layout() == 'banner_cta_text'):
            ?>
            <section class="hireWritersCTA">
              <div class="container">
                  <div class="centerWrapper">
                      <?php the_sub_field('text'); ?>
                      <a href="/hire-writers" class="fullButton">Hire Writers</a>
                  </div>
              </div>
          </section>

          <?php
        endif;

    endwhile;

else :

    // no layouts found

endif;

?>
</main>

<?php get_footer(); ?>