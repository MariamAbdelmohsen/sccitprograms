<?php
/**
* Template Name: IT-Programs Page
*
* Designer: SCC IT Programs Team
*
*/
 

 get_header(); ?>

  <div class="banner">
        <img src="<?php bloginfo('template_directory'); ?>/images/seattle.jpg">
    </div><!--end of banner-->			

    <div id="wrapper" class="row">
        <div class="intro col-md-12">
            <div class="text">
				<small> 
    <?php if ( function_exists( 'bread_crumb' )) { bread_crumb(); } ?>
</small>
                <h3  class="highlight1"><?php the_title(); ?></h3>
               <?php 
				if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
   endwhile;
endif; ?>
            </div><!--end of text-->     
        </div><!--end of intro-->
		
		 <?php query_posts( 'category_name=itPrograms' ); ?>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
        <div id="box" class="col-md-4 col-sm-12">
			<a href="<?php echo get_permalink($post);?>" class="more">
            <?php //if (has_post_thumbnail()) : the_post_thumbnail('thumbnail'); endif;?>
            <?php
	   			if (has_post_thumbnail( $page->ID ) ):
  				echo '<span>' . get_the_post_thumbnail( $page->ID ) . '</span>';
				//grabs thumbnail if there is one
	   			endif;
				?>
            <div class="text">
				<h4><? the_title();?></h4></a>
                <? the_excerpt();?>
                <a class="more" href="<?php echo get_permalink($post);?>">Read More.</a>
            </div><!--end of text-->    
        </div><!--end of box-->
		<?php endwhile; ?>
        </div>
    </div><!--end of wrapper-->


<? endif; get_footer();

		