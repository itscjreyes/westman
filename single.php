<?php get_header(); ?>

<div class="pageBanner">
	<div class="container">
		<h1>Blog</h1>
	</div> <!-- .container -->
</div>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div class="container">
  <div class="row-fluid">
    <div class="span8">
      <div class="blog-section">
        <div class="section post-header clearfix">
          <?php if (has_post_thumbnail( $post->ID ) ): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <div class="postFeaturedImage" style="background-image: url('<?php echo $image[0]; ?>')">
            </div>
          <?php endif; ?>
           <h2><?php the_title(); ?></h1>
           <p><?php hackeryou_posted_on(); ?> on <?php the_date(); ?></p>
        </div>

        <div class="section post-body">
          <?php the_content(); ?>
        </div>
      </div>

      <?php endwhile; // end of the loop. ?>

    </div>

    <div class="span4 sidebar">
      <?php get_sidebar(); ?>
    </div>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>