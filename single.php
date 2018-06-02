<?php get_header(); ?>

<div id="wrapper" class="row"> 
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />


    <?php if ( function_exists( 'bread_crumb' )) { bread_crumb(); } ?>

    <div class="col-md-12">
        <div class="text">
        </div>
    <!-- Begin Content -->
    <div id="content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
        <article id="post-<?php the_ID(); ?>" class="post">    
            <h2>
            <?php the_title(); // the posting title ?>
            </h2> 
            <?php the_post_thumbnail( 'large' ); // the featured image ?>    
            <?php the_content(''); // posting written content ?>
        
        </article>
            <?php endwhile; endif; // end the loop ?>
    <small>single.php</small>
    </div>
    </div>
    </div><!--End Wrapper-->
    
    <!-- End Content -->
    
    
        
<?php get_footer(); ?>