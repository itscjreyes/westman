<?php get_header(); ?>

<div class="pageBanner">
	<div class="container">
		<h1>Blog</h1>
	</div> <!-- .container -->
</div>

<div class="container">
  <div class="row-fluid">

    <div class="span8">
      <div class="blog-section">
        <div class="post-listing">
          <?php
          // If a user has filled out their description, show a bio on their entries.
          if ( get_the_author_meta('description') ) : ?>

            <h2><?php single_cat_title(); ?></h2>
            <br>

          <?php endif; ?>
          <div class="post-group">    		  
            <?php 
              if( have_posts() ) {
                while( have_posts() ) {
                  the_post();
                ?>
                <div class="post-item">
                  <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail( $post->ID ) ): ?>
                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                        <span class="postImg" style="background-image: url('<?php echo $image[0]; ?>')">
                        </span>
                      <?php endif; ?>
                      <span class="postText">
                        <p><?php the_date(); ?></p>
                        <h3 class="postTitle"><?php the_title(); ?></h3>
                        <p class="simpleAngleLink">Read More <i class="fa fa-angle-right"></i></p>
                      </span>
                  </a>
                </div>
                <?php 
                }
              }
            ?>
          </div>
        </div>
        <div class="blog-pagination">
          <?php numeric_posts_nav(); ?>
        </div>
      </div>
    </div>
    
    <div class="span4 sidebar">
      <?php get_sidebar(); ?>
    </div>

  </div>
</div>

<?php get_footer(); ?>