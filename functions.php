<?php
    function wptutsplus_register_theme_menu() {
        register_nav_menu( 'primary', 'Main Navigation Menu' );
    }
    add_action( 'init', 'wptutsplus_register_theme_menu' );
?>
<?php
$args = array(
	'numberposts' => 4,
	'offset' => 0,
	'category' => 0,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'include' => '',
	'exclude' => '',
	'meta_key' => '',
	'meta_value' =>'',
	'post_type' => 'post',
	'post_status' => 'draft, publish, future, pending, private',
	'suppress_filters' => true
);

$recent_posts = wp_get_recent_posts( $args, ARRAY_A );

?>
<?php 
    #enable post-thumbnails
    add_theme_support('post-thumbnails') 
?>
<?php
        
    #read also 2 random posts
    function wpb_rand_posts() { 

    $args = array(
        'post_type' => 'post',
        'orderby'   => 'rand',
        'posts_per_page' => 2, 
        );

    $the_query = new WP_Query( $args );
       
    //i created classes for randompost e.g. randompost0, randompost1
    $zmienna = 0;

    if ( $the_query->have_posts() ) {

    $string .= '<div class="row">';
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($the_query->ID), 'large' );
            $string .= '<div class="col-sm-6 post' . ' random randompost' . $zmienna . '"><a href="'. get_permalink() .'">' . '<div class="readAlsoImage" style="background-image: url(' . $thumb['0'] . ')"' .'><div class="postText"><h6 class="postDate">' . get_the_date('d/m/Y') . '</h6><h3 class="postTitle">' . get_the_title() .'</h3></div></div></a></div>';
            $zmienna = $zmienna + 1;
        }
        $string .= '</div>';
        
        /* Restore original Post Data */
        wp_reset_postdata();
    } else {

    $string .= 'no posts found';
    }

    return $string; 
    }  

?>
<?php

    #read also 2 random posts
    function wpb_mainpage_posts() { 

    $args = array(
        'post_type' => 'post',
        'orderby'   => 'title',
        'posts_per_page' => 4, 
        );

    $the_query = new WP_Query( $args );
       
    //i created classes for randompost e.g. randompost0, randompost1
    $zmienna1 = 0;

    if ( $the_query->have_posts() ) {

    $string1 .= '<div class="row">';
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($the_query->ID), 'large' );
            $string1 .= '<div class="col-sm-6 post' . ' random randompost' . $zmienna1 . '"><a href="'. get_permalink() .'">' . '<div class="readAlsoImage" style="background-image:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(' . $thumb['0'] . ')"' .'><div class="postText"><h6 class="postDate">' . get_the_date('d/m/Y') . '</h6><h3 class="postTitle">' . get_the_title() .'</h3></div></div></a></div>';
            $zmienna1 = $zmienna1 + 1;
        }
        $string1 .= '</div>';
        
        /* Restore original Post Data */
        wp_reset_postdata();
    } else {

    $string1 .= 'no posts found';
    }

    return $string1; 
    }  
?>