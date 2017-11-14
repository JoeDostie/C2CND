<?php

// Create a DEFAULT TITLE in the Pet Page ;
function cct_default_title( $post_title, $post ){
	$date = new DateTime();
	$today = $date->getTimestamp();
	$custom_post_type = 'product';

  // do it only on your custom post type(s)
  if( $post->post_type !== $custom_post_type )
    return $post_title;

	// create your preferred title here
	$post_title = $today;

  return $post_title;
}
add_filter( 'default_title', 'cct_default_title', 10, 2 );