<?php

// Add Custom Tab
	function woo_add_custom_admin_product_tab() {
	 	?>
	 	<li class="custom_tab"><a href="#custom_tab_data"><?php _e('Additional Information', 'woocommerce'); ?></a></li>
	 	<?php
	}
		add_action( 'woocommerce_product_write_panel_tabs', 'woo_add_custom_admin_product_tab' );

// Display Fields on Pet Details Tab below this section
function woo_add_custom_admin_fields() {
	global $woocommerce, $post;

	echo '<div id="custom_tab_data" class="panel woocommerce_options_panel">';
	echo '<div class="options_group">';


		    echo '<div class="pet_group">';
		    	woocommerce_wp_select( array(
		        'id'      => '_select_gwk',
		        'label'   => __( 'Is Pet good with kids', 'woocommerce' ),
		        'desc_tip'    => 'true',
		        'description' => __( 'Is this Pet good with children.', 'woocommerce' ),
		        'options' => array(
						''   => __( 'Is this Pet good with children...', 'woocommerce' ),
						'Yes'   => __( 'Yes', 'woocommerce' ),
						'No'   => __( 'No', 'woocommerce' ),
						'Not Sure'   => __( 'Not Sure', 'woocommerce' )
						)
		    	) );
		    echo '</div>';

		    echo '<div class="pet_group">';
		    	woocommerce_wp_select( array(
		        'id'      => '_select_gwc',
		        'label'   => __( 'Is Pet good with cats', 'woocommerce' ),
		        'desc_tip'    => 'true',
		        'description' => __( 'Is this Pet good with cats.', 'woocommerce' ),
		        'options' => array(
						''   => __( 'Is this Pet good with cats...', 'woocommerce' ),
						'Yes'   => __( 'Yes', 'woocommerce' ),
						'No'   => __( 'No', 'woocommerce' ),
						'Not Sure'   => __( 'Not Sure', 'woocommerce' )
						)
		    	) );
		    echo '</div>';

		    echo '<div class="pet_group">';
		    	woocommerce_wp_select( array(
		        'id'      => '_select_gwd',
		        'label'   => __( 'Is Pet good with dogs', 'woocommerce' ),
		        'desc_tip'    => 'true',
		        'description' => __( 'Is this Pet good with dogs.', 'woocommerce' ),
		        'options' => array(
						''   => __( 'Is this Pet good with dogs...', 'woocommerce' ),
						'Yes'   => __( 'Yes', 'woocommerce' ),
						'No'   => __( 'No', 'woocommerce' ),
						'Not Sure'   => __( 'Not Sure', 'woocommerce' )
						)
		    	) );
		    echo '</div>';

		    echo '<div class="pet_group">';
		    	woocommerce_wp_select( array(
		        'id'      => '_select_special_needs',
		        'label'   => __( 'Special Needs', 'woocommerce' ),
		        'desc_tip'    => 'true',
		        'description' => __( 'Does this Pet have special needs.', 'woocommerce' ),
		        'options' => array(
						''   => __( 'Does this Pet have special needs...', 'woocommerce' ),
						'Yes'   => __( 'Yes', 'woocommerce' ),
						'No'   => __( 'No', 'woocommerce' ),
						'Not Sure'   => __( 'Not Sure', 'woocommerce' )
						)
		    	) );
		    echo '</div>';

		    echo '<div class="pet_group">';
		    	woocommerce_wp_select( array(
		        'id'      => '_select_exp_adopt',
		        'label'   => __( 'Experianced Adopter', 'woocommerce' ),
		        'desc_tip'    => 'true',
		        'description' => __( 'Does this Pet need an experianced adopter.', 'woocommerce' ),
		        'options' => array(
						''   => __( 'Does this Pet need an experianced adopter...', 'woocommerce' ),
						'Yes'   => __( 'Yes', 'woocommerce' ),
						'No'   => __( 'No', 'woocommerce' ),
						'Not Sure'   => __( 'Not Sure', 'woocommerce' )
						)
		    	) );
		    echo '</div>';

		    echo '<div class="dog_group">';
		    	woocommerce_wp_select( array(
		        'id'      => '_select_housetrained',
		        'label'   => __( 'Housetrained', 'woocommerce' ),
		        'desc_tip'    => 'true',
		        'description' => __( 'Is this Pet housetrained', 'woocommerce' ),
		        'options' => array(
						''   => __( 'Is this Pet housetrained...', 'woocommerce' ),
						'Yes'   => __( 'Yes', 'woocommerce' ),
						'No'   => __( 'No', 'woocommerce' ),
						'Not Sure'   => __( 'Not Sure', 'woocommerce' )
						)
		    	) );
		    echo '</div>';

		    echo '<div class="dog_group">';
		    	woocommerce_wp_select( array(
		        'id'      => '_select_cratetrained',
		        'label'   => __( 'Crate trained', 'woocommerce' ),
		        'desc_tip'    => 'true',
		        'description' => __( 'Is this Pet Crate Trained', 'woocommerce' ),
		        'options' => array(
						''   => __( 'Is this Pet Crate Trained...', 'woocommerce' ),
						'Yes'   => __( 'Yes', 'woocommerce' ),
						'No'   => __( 'No', 'woocommerce' ),
						'Not Sure'   => __( 'Not Sure', 'woocommerce' )
						)
		    	) );
		    echo '</div>';

		    echo '<div class="cat_group">';
		    	woocommerce_wp_select( array(
		        'id'      => '_select_declawed',
		        'label'   => __( 'Decalwed', 'woocommerce' ),
		        'desc_tip'    => 'true',
		        'description' => __( 'Is this Pet declawed', 'woocommerce' ),
		        'options' => array(
						''   => __( 'Is this Pet declawed...', 'woocommerce' ),
						'Yes'   => __( 'Yes', 'woocommerce' ),
						'No'   => __( 'No', 'woocommerce' ),
						'Not Sure'   => __( 'Not Sure', 'woocommerce' )
						)
		    	) );
		    echo '</div>';


	echo '</div>';
	echo '</div>';
}

add_action( 'woocommerce_product_data_panels', 'woo_add_custom_admin_fields' );