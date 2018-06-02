<?php get_header(); ?>

    <div class="flex"><!--changed from class="banner" due to conflicts-->
		
        <!-- Begin Flex Slider -->
        <?php get_flexslider_gallery(); 		
		?>
   		 <!-- End Flex Slider -->
    </div><!--end banner-->

	
    <div id="wrapper" class="row">
		<?php
		//$home = get_page_by_title('home');
		function main_exclude($exclude){
			$excluded = get_page_by_title( $exclude );
			return $excluded->ID;
		}
		$args = array(
			'sort_order' => 'desc',
			//'sort_column' => 'ID',
			'exclude' => array(main_exclude('Resources'),
				 main_exclude('Home')),
			); 
$pages = get_pages($args); 
   foreach ($pages as $page) :
      //loops through all the "pages"
	  //var_dump($pages)
   ?>
        <div id="box" class="col-md-4 col-sm-12">
			<a href="<?php echo get_permalink($page);
			//wraps the thumbnail and the page title in <a> from permalink
					 ?>"><?php
	   			if (has_post_thumbnail( $page->ID ) ):
  				echo '<span>' . get_the_post_thumbnail( $page->ID ) . '</span>';
				//grabs thumbnail if there is one
	   			endif;
				?>
            	<div class="text">
				<h4><?php $custom_fields = get_post_custom($page->ID); echo $custom_fields['Title Display'][0];
					?></h4></a>
                <p><?php echo $page->post_excerpt; 
					//Post_excerpt is the blurb for page shown
					//var_dump($page);
					?></p>
                
            </div><!--end of text-->    
        </div><!--end of box1-->
		<?php endforeach; ?>
		
		
    </div><!--end of wrapper-->
    
 

<?php get_footer(); ?>

