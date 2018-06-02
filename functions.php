<?php
/*
Theme Name: sccitprograms
Author: Seattle central college IT programs
Description: Seattle central college IT programs
Version: 0.0.1
Tags: scc
*/
// Register My Menus
register_nav_menus(array(
	'main-menu' => __( 'Main' ),
));
//
// Create Post Thumbnails
add_theme_support( 'post-thumbnails' );
//
// Create Page Excerpts
add_post_type_support( 'page', 'excerpt' );
//

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

add_theme_support( 'menus' );

//  register_nav_menu('Sccit-menu',__( 'Sccit Menu' ));

register_nav_menus( array(
		'main-menu' => __('Sccit')));

//Custom Header Images
$args = array(
  'flex-width'    => true,
	'width'         => 1250,
	'flex-height'   => true,
	'height'        => 300,
	'default-image' => '',
	'uploads'       => true,
);
add_theme_support( 'custom-header', $args );

// Get My Title Tag
function get_my_title_tag() {

	global $post; // make sure you make this a global variable

	if ( is_front_page() ) {  // for the site’s Front Page

		bloginfo('description'); // retrieve the site tagline

	}

	elseif ( is_page() || is_single() ) { // for your site’s Pages or Postings

		the_title(); // retrieve the page or posting title

	}

	else { // for everything else

		bloginfo('description'); // retrieve the site tagline

	}

	if ( $post->post_parent ) { // for your site’s Parent Pages

		echo ' | '; // separator with spaces
		echo get_the_title($post->post_parent);  // retrieve the parent page title

	}
	echo ' | '; // separator with spaces
	bloginfo('name'); // retrieve the site name
	echo ' | '; // separator with spaces
	echo 'Seattle, WA.'; // write in the location

}

if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Footer', 'sccitprograms'),
        'description' => __('Footer widget ', 'sccitprograms'),
        'id' => 'widget-area-footer',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
	));
}

// Get Attachment Images and Display as Flexslider Gallery
function get_flexslider_gallery() {

    global $post;// IMPORTANT !!! VARIABLE SCOPE

    $attachments = get_children(array('post_parent' => $post->ID , 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order'));

    if($attachments) {

        echo '<div class="flexslider poster">';
        echo '<ul class="slides">';

        foreach ($attachments as $attachment){

            echo '<li>';
            echo wp_get_attachment_image($attachment->ID, 'large') ;
            echo '<p>'.get_post_field('post_excerpt', $attachment->ID).'</p>';
            echo '</li>';
        }
    }
}

remove_filter( 'the_content', 'wpautop' );
//removes the <p> wrapper from the_content()

function load_js_scripts() {
    global $post;
	//$page = $post->post_name;
	
	if ( is_front_page() ){
		
		wp_enqueue_script('flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'), '', false);
		
	}

    elseif( is_page() || is_single() )
    {

		wp_enqueue_script($post->post_name, get_template_directory_uri() . '/js/' . $post->post_name . '.js', array('jquery'), '', false);
    }
}

add_action('wp_enqueue_scripts', 'load_js_scripts');

