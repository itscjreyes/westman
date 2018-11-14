<?php get_header(); ?>

<div class="fullBanner">
    <div class="container">
        <div class="wrapper">
            <?php the_field('banner_text'); ?>
            <a href="/get-a-quote" class="fullButton">Get a Quote</a>
            <a href="/writing-jobs" class="fullButton">Writing Jobs</a>
        </div>
    </div> <!-- .container -->
</div>

<?php
$how = get_field('how_section');	
if( $how ): ?>
<div class="group3">
    <div class="container">
        <div class="centerWrapper">
            <h2><?php echo $how['how_title']; ?></h2>
        </div>
        <div class="row-fluid">
            <div class="span4">
                <h3>1.</h3>
                <p><?php echo $how['text_1']; ?></p>
            </div>
            <div class="span4">
                <h3>2.</h3>
                <p><?php echo $how['text_2']; ?></p>
            </div>
            <div class="span4">
                <h3>3.</h3>
                <p><?php echo $how['text_3']; ?></p>
            </div>
        </div>
        <a href="/hire-writers" class="fullButton">Get Started</a>
    </div> <!-- .container -->
</div>
<?php endif; ?>

<?php
$expand = get_field('expanded_text_section');	
if( $expand ): ?>
<div class="reachGoals">
    <div class="container">
        <div class="centerWrapper">
            <?php echo $expand['visible_text']; ?>
            <div class="hiddenDesc">
                <a href="#" class="fullButton continue">Continue Reading</a>
                <?php echo $expand['hidden_text']; ?>
                <a href="/hire-writers" class="fullButton">Hire Writers</a>
            </div>
        </div>
    </div> <!-- .container -->
</div>
<?php endif; ?>

<?php
$stats = get_field('statistics');	
if( $stats ): ?>
<div class="group6 stats">
    <div class="container">
        <div class="centerWrapper">
            <h2><?php echo $stats['stats_title']; ?></h2>
        </div>
        <div class="row-fluid">
            <div class="span4">
                <img src="<?php echo $stats['image_1']; ?>" alt="" class="statIcon">
                <div class="row-fluid">
                    <div class="span3">
                        <h3><?php echo $stats['number_1']; ?></h3>
                    </div>
                    <div class="span9">
                        <p><?php echo $stats['text_1']; ?></p>
                    </div>
                </div>
            </div>
            <div class="span4">
                <img src="<?php echo $stats['image_2']; ?>" alt="" class="statIcon">
                <div class="row-fluid">
                    <div class="span3">
                        <h3><?php echo $stats['number_2']; ?></h3>
                    </div>
                    <div class="span9">
                        <p><?php echo $stats['text_2']; ?></p>
                    </div>
                </div>
            </div>
            <div class="span4">
                <img src="<?php echo $stats['image_3']; ?>" alt="" class="statIcon">
                <div class="row-fluid">
                    <div class="span3">
                        <h3><?php echo $stats['number_3']; ?></h3>
                    </div>
                    <div class="span9">
                        <p><?php echo $stats['text_3']; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span4">
                <img src="<?php echo $stats['image_4']; ?>" alt="" class="statIcon">
                <div class="row-fluid">
                    <div class="span3">
                        <h3><?php echo $stats['number_4']; ?></h3>
                    </div>
                    <div class="span9">
                        <p><?php echo $stats['text_4']; ?></p>
                    </div>
                </div>
            </div>
            <div class="span4">
                <img src="<?php echo $stats['image_5']; ?>" alt="" class="statIcon">
                <div class="row-fluid">
                    <div class="span3">
                        <h3><?php echo $stats['number_5']; ?></h3>
                    </div>
                    <div class="span9">
                        <p><?php echo $stats['text_5']; ?></p>
                    </div>
                </div>
            </div>
            <div class="span4">
                <img src="<?php echo $stats['image_6']; ?>" alt="" class="statIcon">
                <div class="row-fluid">
                    <div class="span3">
                        <h3><?php echo $stats['number_6']; ?></h3>
                    </div>
                    <div class="span9">
                        <p><?php echo $stats['text_6']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .container -->
</div>
<?php endif; ?>

<div class="testimonials">
    <div class="container">
        <div class="row-fluid">
            <div class="span1"></div>
            <div class="span3"><h2>Testimonials</h2></div>
            <div class="span8">
                <span id="hs_cos_wrapper_Testimonials">
                    <?php
                        if( have_rows('testimonials') ):
                            while ( have_rows('testimonials') ) : the_row();

                            $number = get_sub_field('number');
                            $quote = get_sub_field('quote');
                            $name = get_sub_field('name');
                            $title = get_sub_field('title');

                            ?>
                            <div>
                                <h3><?php echo $number; ?></h3>
                                <div class="quote"><?php echo $quote; ?></div>
                                <p class="quoteName"><?php echo $name; ?></p>
                                <p class="quoteTitle"><?php echo $title; ?></p>
                            </div>
                            <?php  
                            endwhile;
                        else :
                        endif;
                        ?>
                </span>
            </div>
        </div>
    </div>
</div>

<div class="latestPosts">
    <div class="container">
        <h2>Latest Blog Posts</h2>
        <div class="row-fluid">
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
                    $post_thumbnail_id = get_post_thumbnail_id($recent["ID"]);
                    $post_thumbnail_url = wp_get_attachment_thumb_url( $post_thumbnail_id );
                    $date = get_the_date(d);
                    $month = get_the_date(M);
                    echo '<div class="span4"><a href="' . get_permalink($recent["ID"]) . '">
                        <span class="postImg" style="background-image: url(\'' . $post_thumbnail_url . '\');">
                            <div class="dateGroup">
                                <p class="dateDay">' . $date . '</p>
                                <p class="dateMonth">' . $month . '</p>
                            </div>
                        </span>
                        <span class="postText">
                            <h3 class="postTitle">' . $recent["post_title"] .'</h3>
                            <p class="simpleAngleLink">Read More <i class="fa fa-angle-right"></i></p>
                        </span>
                    </a></div>';
                }
                wp_reset_query();
            ?>
        </div>
        <a href="/blog" class="fullButton">View All</a>
    </div>
</div>

<div class="hireWritersCTA">
    <div class="container">
        <div class="centerWrapper">
            <?php the_field('banner_cta'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>