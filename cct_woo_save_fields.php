<?php

// Save Fields
add_action( 'woocommerce_process_product_meta', 'woo_add_custom_general_fields_save' );
function woo_add_custom_general_fields_save( $post_id ){

// Text Field - Pet Name
    $petname_text_field = $_POST['_pet_name'];
    if( !empty( $petname_text_field ) ){
        update_post_meta( $post_id, '_pet_name', esc_attr( $petname_text_field ) );
    }

// Save Species
    $species_select = $_POST['_species'];
    if( !empty( $species_select ) )
        update_post_meta( $post_id, '_species', esc_attr( $species_select ) );
    else {
        update_post_meta( $post_id, '_species',  NULL );
    }

// Save Primary Dog Breed
    $primary_dog_breed_select = $_POST['_primary_dog_breed'];
    if( !empty( $primary_dog_breed_select ) )
        update_post_meta( $post_id, '_primary_dog_breed', esc_attr( $primary_dog_breed_select ) );
    else {
        update_post_meta( $post_id, '_primary_dog_breed',  NULL );
    }


// Save Second Dog Breed
    $second_dog_breed_select = $_POST['_second_dog_breed'];
    if( !empty( $second_dog_breed_select ) )
        update_post_meta( $post_id, '_second_dog_breed', esc_attr( $second_dog_breed_select ) );
    else {
        update_post_meta( $post_id, '_second_dog_breed',  NULL );
    }

// Save Cat Breed
    $cat_breed_select = $_POST['_cat_breed'];
    if( !empty( $cat_breed_select ) )
        update_post_meta( $post_id, '_cat_breed', esc_attr( $cat_breed_select ) );
    else {
        update_post_meta( $post_id, '_cat_breed',  NULL );
    }

// Save Dog Color
    $dog_color_select = $_POST['_dog_color'];
    if( !empty( $dog_color_select ) )
        update_post_meta( $post_id, '_dog_color', esc_attr( $dog_color_select ) );
    else {
        update_post_meta( $post_id, '_dog_color',  NULL );
    }

// Save Cat Color
    $cat_color_select = $_POST['_cat_color'];
    if( !empty( $cat_color_select ) )
        update_post_meta( $post_id, '_cat_color', esc_attr( $cat_color_select ) );
    else {
        update_post_meta( $post_id, '_cat_color',  NULL );
    }

// Save Gender
    $gender_select = $_POST['_select_gender'];
    if( !empty( $gender_select ) )
        update_post_meta( $post_id, '_select_gender', esc_attr( $gender_select ) );
    else {
        update_post_meta( $post_id, '_select_gender',  NULL );
    }

// Save Age
    $age_select = $_POST['_select_age'];
    if( !empty( $age_select ) )
        update_post_meta( $post_id, '_select_age', esc_attr( $age_select ) );
    else {
        update_post_meta( $post_id, '_select_age',  NULL );
    }

// Save Status
    $status_select = $_POST['_select_status'];
    if( !empty( $status_select ) )
        update_post_meta( $post_id, '_select_status', esc_attr( $status_select ) );
    else {
        update_post_meta( $post_id, '_select_status',  NULL );
    }

// Save Spay/Neuter
    $fixed_select = $_POST['_select_fixed'];
    if( !empty( $fixed_select ) )
        update_post_meta( $post_id, '_select_fixed', esc_attr( $fixed_select ) );
    else {
        update_post_meta( $post_id, '_select_fixed',  NULL );
    }

// Save Shots
    $shots_select = $_POST['_select_shots'];
    if( !empty( $shots_select ) )
        update_post_meta( $post_id, '_select_shots', esc_attr( $shots_select ) );
    else {
        update_post_meta( $post_id, '_select_shots',  NULL );
    }    


// Aditional Information Tab Below

// Text Field - Good with kids
    $gwk_select = $_POST['_select_gwk'];
    if( !empty( $gwk_select ) )
        update_post_meta( $post_id, '_select_gwk', esc_attr( $gwk_select ) );
    else {
        update_post_meta( $post_id, '_select_gwk',  NULL );
    }

    // Text Field - Good with cats
    $gwc_select = $_POST['_select_gwc'];
    if( !empty( $gwc_select ) )
        update_post_meta( $post_id, '_select_gwc', esc_attr( $gwc_select ) );
    else {
        update_post_meta( $post_id, '_select_gwc',  NULL );
    }
    
    // Text Field - Good with dogs
    $gwd_select = $_POST['_select_gwd'];
    if( !empty( $gwd_select ) )
        update_post_meta( $post_id, '_select_gwd', esc_attr( $gwd_select ) );
    else {
        update_post_meta( $post_id, '_select_gwd',  NULL );
    }

    // Text Field - Special Needs
    $special_needs_select = $_POST['_select_special_needs'];
    if( !empty( $special_needs_select ) )
        update_post_meta( $post_id, '_select_special_needs', esc_attr( $special_needs_select ) );
    else {
        update_post_meta( $post_id, '_select_special_needs',  NULL );
    }

    // Text Field - Experianced Adopter
    $exp_adopt_select = $_POST['_select_exp_adopt'];
    if( !empty( $exp_adopt_select ) )
        update_post_meta( $post_id, '_select_exp_adopt', esc_attr( $exp_adopt_select ) );
    else {
        update_post_meta( $post_id, '_select_exp_adopt',  NULL );
    }

    // Text Field - Housetrained
    $housetrained_select = $_POST['_select_housetrained'];
    if( !empty( $housetrained_select ) )
        update_post_meta( $post_id, '_select_housetrained', esc_attr( $housetrained_select ) );
    else {
        update_post_meta( $post_id, '_select_housetrained',  NULL );
    }

    // Text Field - Housetrained
    $cratetrained_select = $_POST['_select_cratetrained'];
    if( !empty( $cratetrained_select ) )
        update_post_meta( $post_id, '_select_cratetrained', esc_attr( $cratetrained_select ) );
    else {
        update_post_meta( $post_id, '_select_cratetrained',  NULL );
    }

    // Text Field - Housetrained
    $declawed_select = $_POST['_select_declawed'];
    if( !empty( $declawed_select ) )
        update_post_meta( $post_id, '_select_declawed', esc_attr( $declawed_select ) );
    else {
        update_post_meta( $post_id, '_select_declawed',  NULL );
    }
}