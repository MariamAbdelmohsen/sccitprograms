<?php
   /**
   * The template for displaying Programs Details single posts
   * Template Name: Programs Details Page
   *
   * Designer: SCC IT Programs Team
   *   
   * Template Post Type: post
   */
   ?>
<?php get_header(); ?>
<div class="banner">
   <!-- <img src="<?php bloginfo('template_directory'); ?>/images/seattle.jpg"> -->
   <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

</div>
<!--end of banner-->			
<div id="wrapper" class="row programs-details">
   <div class="intro col-md-12">
      <div class="text">
         <small> 
         <?php if ( function_exists( 'bread_crumb' )) { bread_crumb(); } ?>
         </small>
      </div>
      <!-- Bread crumbs -->
   </div>
   <!-- intro -->
   <!-- Begin Content -->
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
   <!-- <div class="container1"> -->
      <div class="col-md-12 col-sm-12">
         <article id="post-<?php the_ID(); ?>" class="post">
            <div class="underline">
               <h3 class="highlight">
                  <b> <?php the_title(); // the posting title ?> 
                  </b> 
               </h3>
            </div >
            <!-- underline -->
            <?php the_content(''); // posting written content ?>
      </div>
   <!-- </div> -->
   <!-- container -->
   </article>
   <?php endwhile; endif; // end the loop ?>
   <!-- &nbsp; -->
   
   <div class="enroll">
   <?php echo get_post_field('post_content', 280);?>
   </div>
      <!-- <small>detail-post.php</small> -->

</div><!--End Wrapper-->
<!-- </div> -->
</div>
<!-- End Content-->
<?php get_footer(); ?>