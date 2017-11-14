<?php


// Hide the WooCommerce default Admin Panel
// function cct_admin_panel() {
//   echo '<style>
//     #woocommerce-product-data {
//       display:none!important;
//     } 
//   </style>';
// }
// add_action('admin_head', 'cct_admin_panel');


// Replace the title with the name of the pet
function cct_title( $title, $id ) {
  if ( ( is_shop() || is_product_tag() || is_product_category() ) && get_post_type( $id ) === 'product' ) {
  //if ( ( is_shop() ) && get_post_type( $id ) === 'product' ) {  
	$newtitle = str_replace($title, ( get_post_meta( get_the_ID(),'_pet_name' , true )), $title);
	return $newtitle;
   } 
   return $title;
}
add_filter( 'the_title', 'cct_title', 10, 2 ); 

// Start Remove unwanted and unused Tabs from Woo Admin
	function remove_linked_products($tabs){
	    unset($tabs['inventory']);
	    unset($tabs['shipping']);
		unset($tabs['linked_product']);
		unset($tabs['attribute']);
		unset($tabs['advanced']);
		unset($tabs['variations']);
	    return($tabs);
	}
	add_filter('woocommerce_product_data_tabs', 'remove_linked_products', 10, 1);

// This filter will make all items out of stock so the add to cart does not appear
	function cct_hide_add_cart(){
		return false;
	}
	add_filter( 'woocommerce_is_purchasable', 'cct_hide_add_cart' );

// Start Remove the Reviews Tab
	add_filter( 'woocommerce_product_tabs', 'wcs_woo_remove_reviews_tab', 98 );
		function wcs_woo_remove_reviews_tab($tabs) {
			unset($tabs['reviews']);
			return $tabs;
	}


// Start Change Woo Information
	add_filter('gettext', 'translate_text');
	add_filter('ngettext', 'translate_text');

		function translate_text($translated) {
		 $translated = str_ireplace('SKU', 'Pet ID', $translated);
		 $translated = str_ireplace('Regular Price', 'Adoption Price', $translated);
		 $translated = str_ireplace('Product', 'Pet', $translated);
		 $translated = str_ireplace('Products', 'Pets', $translated);
		 return $translated;
	}

/*  This section will put the "Adoption Fee" text beside the price on the single-product page
	Start "Adoption Fee area" */
	function add_adoption_fee( $price ) {
		$textbefore = 'Adoption Fee: ';
		return $textbefore . $price . '<br /><span class="price-description">' . '</span>';
}
	add_filter( 'woocommerce_get_price_html', 'add_adoption_fee' );
