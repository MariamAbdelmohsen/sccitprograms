<?php get_header(); ?>
<div class="banner">
   <!-- <img src="<?php bloginfo('template_directory'); ?>/images/seattle.jpg"> -->
   <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

</div>
<!--end of banner-->			
<div id="wrapper" class="row">
   <div class="intro col-md-12">
      <div class="text">
         <small> 
         <?php if ( function_exists( 'bread_crumb' )) { bread_crumb(); } ?>
         </small>
      </div>
      <!-- Bread crumbs -->
          <!-- Begin Content -->
    <div id="content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
        <div class="col-md-12 col-sm-12">
        <article id="post-<?php the_ID(); ?>" class="post">    
            <h3>
           <b> <?php the_title(); // the posting title ?></b>
            </h3> 
            <?php the_post_thumbnail( 'medium' ); // the featured image ?>  
            <div class="col-md-8 col-sm-12">
            <p><?php the_content(''); // posting written content ?> </p>
            </div>  
        </article>
        </div>
            <?php endwhile; endif; // end the loop ?>
    </div>
    </div>
    </div><!--End Wrapper-->
    
    <!-- End Content -->
    
    
        
<?php get_footer(); ?>