
<?php get_header(); ?>

<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<div id="wrapper" class="row">        
    <?php if ( function_exists( 'bread_crumb' ) ) { bread_crumb(); } ?>
    <div class="col-md-12">
            <div class="text">
            </div>
<!-- Begin Content -->
    <div id="content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
    <article id="post-excerpt-<?php the_ID(); ?>" class="post-excerpt">
        
    <h2>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2> 
    <small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?></small>
        
    <a href="<?php the_permalink();?>">
        <?php the_post_thumbnail( 'thumbnail' );  ?></a>
    <?php the_excerpt();  ?>
    <p class="read-more"><a href="<?php the_permalink();  ?>">Read More &raquo;</a></p>
    </article>
    <?php endwhile; endif; // end the loop ?>

    </div>
    <!-- End Content -->
    </div><!--End col-md-12-->
    </div> <!--End Wrapper--> 
<?php get_footer(); ?>