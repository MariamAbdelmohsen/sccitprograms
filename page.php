
<?php get_header(); ?>
<div class="banner">
        <img src="<?php bloginfo('template_directory'); ?>/images/seattle.jpg">
    </div><!--end of banner-->			
    <div id="wrapper" class="row">
   <div class="intro col-md-12">
      <div class="text">
         <small> 
         <?php if ( function_exists( 'bread_crumb' )) { bread_crumb(); } ?>
         </small>
      </div>
      <!-- Bread crumbs -->
   </div>
   <!-- intro -->
   <div class="col-md-12 col-sm-12">
             <div class="underline">
                <h3 class="underline"><?php $custom_fields = get_post_custom($page->ID); echo $custom_fields['Title Display'][0];
					?></h3>
                </div>
				<?php echo get_post_field('post_content', $id);?>
           
            </div>
                </div><!--end page-->
</div><!--end wrapper-->
    <!-- End Content -->
    
<?php get_footer(); ?>