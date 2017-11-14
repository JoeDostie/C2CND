<?php

/* This function will place buttons on the individual page of each pet */

function cct_action_buttons () {

$url = site_url();

echo '<div id="cct_woo_buttons_div">';
	echo '<h2>Take Action:</h2>';
	
	echo '<div class = "fusion-button-wrapper fusion-alignleft">';
		echo '<a href="' . $url . '/inquire/" class="fusion-button button-flat button-round button-large button-default button-1">Inquire</a>';
	echo '</div>';
	

	echo '<div class = "fusion-button-wrapper fusion-alignleft">';
		echo '<a href="' . $url . '/volunteer/" class="fusion-button button-flat button-round button-large button-default button-1">Volunteer</a>';
	echo '</div>';

	echo '<div class = "fusion-button-wrapper fusion-alignleft">';
		echo '<a href="' . $url . '/donate/" class="fusion-button button-flat button-round button-large button-default button-1">Donate</a>';
	echo '</div>';	

echo '</div>';

}
add_action( 'woocommerce_product_meta_end', 'cct_action_buttons' );