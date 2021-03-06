<?php
/**
* Template Name: Stories Page
*
* Designer: SCC IT Programs Team
*
*/

 get_header(); ?>
    <div class="banner">
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

        <!-- <img src="<?php bloginfo('template_directory'); ?>/images/seattle.jpg"> -->
    </div>
    <!--end of banner-->

    <div id="wrapper">
        <div class="col-md-12 col-sm-12 success-stories">
            <div class="text">
				<small> 
				<?php if ( function_exists( 'bread_crumb' )) { bread_crumb(); } ?>
				</small>
                <div class="underline">
				<h3  class="highlight"><?php $custom_fields = get_post_custom($page->ID); echo $custom_fields['Title Display'][0];?></h3>
                </div>
            <?php echo get_post_field('post_content', $id);?>
            </div>
            <?php 
						$pic_size = array(250,250);
						query_posts( array(
							'category_name' => 'Stories'));
						if (have_posts() ) : $counter=0;
						while ( have_posts() ):  the_post(); $counter += 1;
						if($counter%2!=0): ?>

            <div class="col-md-12 col-sm-12 success-stories-box">
            
                <div id-"stories-pic-1" class="col-md-4">
                <a href="<?php echo get_permalink($post);?>" class="more">
                        <?php if (has_post_thumbnail()):
  						the_post_thumbnail($pic_size); 
						endif;
						?></a>
                </div>
                <div class="col-md-8 col-sm-12 quote">

                    <p><i class="fa fa-quote-left" aria-hidden="true"></i>
                        <?php the_content();
						// get page or posting written content ?>
                        <i class="fa fa-quote-right" aria-hidden="true"></i></p>
                        <a href="<?php echo get_permalink($post);?>" class="more">
                        <p class="student">

                            <? echo the_title(); ?>
                        </p></a>
                    </div>
                </div>
                <?php elseif ($counter%2==0):?>
                    <div class="col-md-12 col-sm-12 success-stories-box">
                        <div id="stories-pic-2" class="col-md-4 col-sm-12 last-story" >
                        <a href="<?php echo get_permalink($post);?>" class="more">
                            <?php if (has_post_thumbnail()):
  				the_post_thumbnail($pic_size); 
				endif;
				?></a>
                        </div>
                        <div class="col-md-8 col-sm-12 quote">
                            <p><i class="fa fa-quote-left" aria-hidden="true"></i>
                                <?php the_content(); 
						// get page or posting written content ?>
                                    <i class="fa fa-quote-right" aria-hidden="true"></i></p>
                            <p class="student">
                            <a href="<?php echo get_permalink($post);?>" class="more">
                                <? echo the_title(); ?> </a>
                            </p>
                        </div>

                    </div>

                    <?php endif; endwhile; else : ?>
                        <p>
                            <?php esc_html_e( 'Make some content!' ); ?>
                        </p>
                        <?php endif; ?>

        </div>
    </div>
    <!--end of wrapper-->

    <?php get_footer(); ?>