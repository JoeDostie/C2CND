<?php


// Display Extra Fields on General Tab Section
add_action( 'woocommerce_product_options_general_product_data', 'woo_add_custom_general_fields' );
function woo_add_custom_general_fields() {
    global $woocommerce, $post, $product;


// Dog Breed Dropdown menu ==============================
    // Set HERE the product attribute taxonomy
    $dog_breed_taxonomy = 'pa_dog-breed';

    // Get the selected value  <== <== (updated)
    $primary_dog_breed_value = get_post_meta( $post->ID, '_primary_dog_breed', true );
    if( empty( $primary_dog_breed_value ) ) $primary_dog_breed_value = '';

    // Get the selected value  <== <== (updated)
    $second_dog_breed_value = get_post_meta( $post->ID, '_second_dog_breed', true );
    if( empty( $second_dog_breed_value ) ) $second_dog_breed_value = '';    

    $dog_breeds = get_terms( $dog_breed_taxonomy, array(
        'hide_empty' => false,
        'order' => 'ASC',
        'fields' => 'names'
    ) );

    $dog_breed_options[''] = __( 'Select a Breed', 'woocommerce');

    foreach ($dog_breeds as $key => $dog_breed_term)
        $dog_breed_options[$dog_breed_term] = $dog_breed_term;
	// Dog Breed Dropdown menu ==============================


// Cat Breed Dropdown menu ==============================
 	
 	$cat_breed_taxonomy = 'pa_cat-breed';

    $cat_breed_value = get_post_meta( $post->ID, '_cat_breed', true );
    if( empty( $cat_breed_value ) ) $cat_breed_value = '';

    $cat_breeds = get_terms( $cat_breed_taxonomy, array(
        'hide_empty' => false,
        'order' => 'ASC',
        'fields' => 'names'
    ) );

    $cat_breed_options[''] = __( 'Select a Breed', 'woocommerce');

    foreach ($cat_breeds as $key => $cat_breed_term)
        $cat_breed_options[$cat_breed_term] = $cat_breed_term;
	// Cat Breed Dropdown menu ==============================


// Dog Color Dropdown menu ==============================
 	
 	$dog_color_taxonomy = 'pa_dog-color';

    $dog_color_value = get_post_meta( $post->ID, '_dog_color', true );
    if( empty( $dog_color_value ) ) $dog_color_value = '';

    $dog_color = get_terms( $dog_color_taxonomy, array(
        'hide_empty' => false,
        'order' => 'ASC',
        'fields' => 'names'
    ) );

    $dog_color_options[''] = __( 'Select a Dog Color', 'woocommerce');

    foreach ($dog_color as $key => $dog_color_term)
        $dog_color_options[$dog_color_term] = $dog_color_term;
	// Dog Color Dropdown menu ==============================


// Cat Color Dropdown menu ==============================
    
    $cat_color_taxonomy = 'pa_cat-color';

    $cat_color_value = get_post_meta( $post->ID, '_cat_color', true );
    if( empty( $cat_color_value ) ) $cat_color_value = '';

    $cat_color = get_terms( $cat_color_taxonomy, array(
        'hide_empty' => false,
        'order' => 'ASC',
        'fields' => 'names'
    ) );

    $cat_color_options[''] = __( 'Select a Cat Color', 'woocommerce');

    foreach ($cat_color as $key => $cat_color_term)
        $cat_color_options[$cat_color_term] = $cat_color_term;
	// Cat Color Dropdown menu ==============================



    echo '<div class="options_group">';

        // Text Field - Pet Name
        woocommerce_wp_text_input(
            array(
                'id'          => '_pet_name',
                'label'       => __( 'Pet Name', 'woocommerce' ),
                'placeholder' => 'Enter Pet Name...',
                'desc_tip'    => 'true',
                'description' => __( 'Enter the pet name here.', 'woocommerce' )
                )
            );

        woocommerce_wp_select( array(
            'id'      => '_species',
            'label'   => __( 'Select Species', 'woocommerce' ),
            'options' =>  array (
                    '' => __( 'Select a Species', 'woocommerce'),
                    'Dog' => __( 'Dog', 'woocommerce'),
                    'Cat' => __( 'Cat', 'woocommerce')
                )
         ) );

	    woocommerce_wp_select( array(
	        'id'      => '_primary_dog_breed',
	        'label'   => __( 'Primay Dog Breed', 'woocommerce' ),
	        'options' =>  $dog_breed_options,
	        'value'   => $primary_dog_breed_value,
	    ) );

	    woocommerce_wp_select( array(
	        'id'      => '_second_dog_breed',
	        'label'   => __( 'Secondery Dog Breed', 'woocommerce' ),
	        'options' =>  $dog_breed_options,
	        'value'   => $second_dog_breed_value,
	    ) );


	    woocommerce_wp_select( array(
	        'id'      => '_cat_breed',
	        'label'   => __( 'Cat Breed', 'woocommerce' ),
	        'options' =>  $cat_breed_options,
	        'value'   => $cat_breed_value,
	    ) );

	    woocommerce_wp_select( array(
	        'id'      => '_dog_color',
	        'label'   => __( 'Dog Color', 'woocommerce' ),
	        'options' =>  $dog_color_options,
	        'value'   => $dog_color_value,
	    ) );


	    woocommerce_wp_select( array(
	        'id'      => '_cat_color',
	        'label'   => __( 'Cat Color', 'woocommerce' ),
	        'options' =>  $cat_color_options,
	        'value'   => $cat_color_value,
	    ) );

        // Select Gender
        woocommerce_wp_select(
        array(
            'id'      => '_select_gender',
            'label'   => __( 'Select Gender', 'woocommerce' ),
            'options' => array(
                ''   => __( 'Please Select an option...', 'woocommerce' ),
                'Female'   => __( 'Female', 'woocommerce' ),
                'Male'   => __( 'Male', 'woocommerce' )
                )
            )
        );        

        // Select Age
        woocommerce_wp_select(
        array(
            'id'      => '_select_age',
            'label'   => __( 'Select Age', 'woocommerce' ),
            'options' => array(
                ''   => __( 'Please Select an option...', 'woocommerce' ),
                'Puppy'   => __( 'Puppy (Dog Only)', 'woocommerce' ),
                'Kitten'   => __( 'Kitten (Cat Only)', 'woocommerce' ),
                'Young'   => __( 'Young', 'woocommerce' ),
                'Adult'   => __( 'Adult', 'woocommerce' ),
                'Senior'   => __( 'Senior', 'woocommerce' )
                )
            )
        );

        // Select Status
        woocommerce_wp_select(
        array(
            'id'      => '_select_status',
            'label'   => __( 'Select Status', 'woocommerce' ),
            'options' => array(
                ''   => __( 'Please Select an option...', 'woocommerce' ),
                'Available'   => __( 'Available for Adoption', 'woocommerce' ),
                'Adopted'   => __( 'Adopted', 'woocommerce' ),
                'Deleted'   => __( 'Deleted', 'woocommerce' ),                  
                'Hidden'   => __( 'Hidden', 'woocommerce' )
                )
            )
        );

        // Select Status
        woocommerce_wp_select(
        array(
            'id'      => '_select_fixed',
            'label'   => __( 'Spayed/Neutered', 'woocommerce' ),
            'options' => array(
                ''   => __( 'Please Select an option...', 'woocommerce' ),
                'Yes'   => __( 'Yes', 'woocommerce' ),
                'No'   => __( 'No', 'woocommerce' )
                )
            )
        );

        // Select shots
        woocommerce_wp_select(
        array(
            'id'      => '_select_shots',
            'label'   => __( 'Shots current', 'woocommerce' ),
            'options' => array(
                ''   => __( 'Please Select an option...', 'woocommerce' ),
                'Yes'   => __( 'Yes', 'woocommerce' ),
                'No'   => __( 'No', 'woocommerce' )
                )
            )
        );


    echo '</div>';

}
