<?php

add_filter( 'woocommerce_product_tabs', 'wpb_new_product_tab' );
function wpb_new_product_tab( $tabs ) {
    // Add the new tab
    $tabs['test_tab'] = array(
        'title'       => __( 'Pet Detail', 'text-domain' ),
        'priority'    => 50,
        'callback'    => 'wpb_new_product_tab_content'
    );
    return $tabs;
}

function wpb_new_product_tab_content() {
    // The new tab content
    echo '<h2>Pet Detail</h2>';
    
    echo '<div class="post-content">';
	    echo '<div class="fusion-fullwidth fullwidth-box fusion-blend-mode nonhundred-percent-fullwidth">';
		    echo '<div class="fusion-builder-row fusion-row">';
		    	
			    if ( !empty ( get_post_meta ( get_the_ID(), '_select_gwk', true ))){
			    	echo '<div class="fusion-layout-column fusion_builder_column fusion_builder_column_1_3  fusion-one-third 1_3">';
			    		echo '<div class="fusion-column-wrapper">';
			    		
			    			if ( get_post_meta ( get_the_ID(), '_select_gwk' , true ) == 'No')  {
			    				echo '<p><img class="aligncenter size-full" src="' . plugins_url( 'images/kids_no.png', __FILE__) . '" ></p> ';
			    			}
			    			if ( get_post_meta ( get_the_ID(), '_select_gwk' , true ) == 'Not Sure')  {
			    				echo '<p><img class="aligncenter size-full" src="' . plugins_url( 'images/kids_no.png', __FILE__) . '" ></p> ';
			    			}

			    			if ( get_post_meta ( get_the_ID(), '_select_gwk' , true ) == 'Yes' ) {
			    				echo '<p><img class="aligncenter size-full" src="' . plugins_url( 'images/kids_Yes.png', __FILE__) . '" ></p> ';
			    			}

			    			echo '<p style="text-align: center;">Good with Kids: ' .  get_post_meta ( get_the_ID(), '_select_gwk' , true) . '</p>';

			    			echo '<div class="fusion-clearfix"></div>';
			    		echo '</div>';
			    	echo '</div>';
			   	}

			    if ( !empty ( get_post_meta ( get_the_ID(), '_select_gwc', true ))){
			    	echo '<div class="fusion-layout-column fusion_builder_column fusion_builder_column_1_3  fusion-one-third 1_3">';
			    		echo '<div class="fusion-column-wrapper">';
			    		
			    			if ( get_post_meta ( get_the_ID(), '_select_gwc' , true ) == 'No')  {
			    				echo '<p><img class="aligncenter size-full" src="' . plugins_url( 'images/cat_no.png', __FILE__) . '" ></p> ';
			    			}
			    			if ( get_post_meta ( get_the_ID(), '_select_gwc' , true ) == 'Not Sure')  {
			    				echo '<p><img class="aligncenter size-full" src="' . plugins_url( 'images/cat_no.png', __FILE__) . '" ></p> ';
			    			}

			    			if ( get_post_meta ( get_the_ID(), '_select_gwc' , true ) == 'Yes' ) {
			    				echo '<p><img class="aligncenter size-full" src="' . plugins_url( 'images/cat_Yes.png', __FILE__) . '" ></p> ';
			    			}

			    			echo '<p style="text-align: center;">Good with Cats: ' .  get_post_meta ( get_the_ID(), '_select_gwc' , true) . '</p>';

			    			echo '<div class="fusion-clearfix"></div>';
			    		echo '</div>';
			    	echo '</div>';
			   	}

			    if ( !empty ( get_post_meta ( get_the_ID(), '_select_gwd', true ))){
			    	echo '<div class="fusion-layout-column fusion_builder_column fusion_builder_column_1_3  fusion-one-third 1_3">';
			    		echo '<div class="fusion-column-wrapper">';
			    		
			    			if ( get_post_meta ( get_the_ID(), '_select_gwd' , true ) == 'No')  {
			    				echo '<p><img class="aligncenter size-full" src="' . plugins_url( 'images/dog_no.png', __FILE__) . '" ></p> ';
			    			}
			    			if ( get_post_meta ( get_the_ID(), '_select_gwd' , true ) == 'Not Sure')  {
			    				echo '<p><img class="aligncenter size-full" src="' . plugins_url( 'images/dog_no.png', __FILE__) . '" ></p> ';
			    			}

			    			if ( get_post_meta ( get_the_ID(), '_select_gwd' , true ) == 'Yes' ) {
			    				echo '<p><img class="aligncenter size-full" src="' . plugins_url( 'images/dog_yes.png', __FILE__) . '" ></p> ';
			    			}

			    			echo '<p style="text-align: center;">Good with Dogs: ' .  get_post_meta ( get_the_ID(), '_select_gwd' , true) . '</p>';

			    			echo '<div class="fusion-clearfix"></div>';
			    		echo '</div>';
			    	echo '</div>';
			   	}

			    if ( !empty ( get_post_meta ( get_the_ID(), '_select_special_needs', true ))){
			    	echo '<div class="fusion-layout-column fusion_builder_column fusion_builder_column_1_3  fusion-one-third 1_3">';
			    		echo '<div class="fusion-column-wrapper">';
			    		
			    			if ( get_post_meta ( get_the_ID(), '_select_special_needs' , true ) == 'No')  {
			    				echo '<p><img class="aligncenter size-full" src="' . plugins_url( 'images/special_needs.png', __FILE__) . '" ></p> ';
			    			}
			    			if ( get_post_meta ( get_the_ID(), '_select_special_needs' , true ) == 'Not Sure')  {
			    				echo '<p><img class="aligncenter size-full" src="' . plugins_url( 'images/special_needs.png', __FILE__) . '" ></p> ';
			    			}

			    			if ( get_post_meta ( get_the_ID(), '_select_special_needs' , true ) == 'Yes' ) {
			    				echo '<p><img class="aligncenter size-full" src="' . plugins_url( 'images/special_needs.png', __FILE__) . '" ></p> ';
			    			}

			    			echo '<p style="text-align: center;">Special Needs: ' .  get_post_meta ( get_the_ID(), '_select_special_needs' , true) . '</p>';

			    			echo '<div class="fusion-clearfix"></div>';
			    		echo '</div>';
			    	echo '</div>';
			   	}

			    if ( !empty ( get_post_meta ( get_the_ID(), '_select_exp_adopt', true ))){
			    	echo '<div class="fusion-layout-column fusion_builder_column fusion_builder_column_1_3  fusion-one-third 1_3">';
			    		echo '<div class="fusion-column-wrapper">';
			    		
			    			if ( get_post_meta ( get_the_ID(), '_select_exp_adopt' , true ) == 'No')  {
			    				echo '<p><img class="aligncenter size-full" src="' . plugins_url( 'images/Experiance.png', __FILE__) . '" ></p> ';
			    			}
			    			if ( get_post_meta ( get_the_ID(), '_select_exp_adopt' , true ) == 'Not Sure')  {
			    				echo '<p><img class="aligncenter size-full" src="' . plugins_url( 'images/Experiance.png', __FILE__) . '" ></p> ';
			    			}

			    			if ( get_post_meta ( get_the_ID(), '_select_exp_adopt' , true ) == 'Yes' ) {
			    				echo '<p><img class="aligncenter size-full" src="' . plugins_url( 'images/Experiance.png', __FILE__) . '" ></p> ';
			    			}

			    			echo '<p style="text-align: center;">Experienced Adopter Required: ' .  get_post_meta ( get_the_ID(), '_select_exp_adopt' , true) . '</p>';

			    			echo '<div class="fusion-clearfix"></div>';
			    		echo '</div>';
			    	echo '</div>';
			   	}

			    if ( !empty ( get_post_meta ( get_the_ID(), '_select_housetrained', true ))){
			    	echo '<div class="fusion-layout-column fusion_builder_column fusion_builder_column_1_3  fusion-one-third 1_3">';
			    		echo '<div class="fusion-column-wrapper">';
			    		
			    			if ( get_post_meta ( get_the_ID(), '_select_housetrained' , true ) == 'No')  {
			    				echo '<p><img class="aligncenter size-full" src="' . plugins_url( 'images/houe_trained_no.png', __FILE__) . '" ></p> ';
			    			}
			    			if ( get_post_meta ( get_the_ID(), '_select_housetrained' , true ) == 'Not Sure')  {
			    				echo '<p><img class="aligncenter size-full" src="' . plugins_url( 'images/houe_trained_no.png', __FILE__) . '" ></p> ';
			    			}

			    			if ( get_post_meta ( get_the_ID(), '_select_housetrained' , true ) == 'Yes' ) {
			    				echo '<p><img class="aligncenter size-full" src="' . plugins_url( 'images/houe_trained_yes.png', __FILE__) . '" ></p> ';
			    			}

			    			echo '<p style="text-align: center;">Housetrained: ' .  get_post_meta ( get_the_ID(), '_select_housetrained' , true) . '</p>';

			    			echo '<div class="fusion-clearfix"></div>';
			    		echo '</div>';
			    	echo '</div>';
			   	}

			    if ( !empty ( get_post_meta ( get_the_ID(), '_select_fixed', true ))){
			    	echo '<div class="fusion-layout-column fusion_builder_column fusion_builder_column_1_3  fusion-one-third 1_3">';
			    		echo '<div class="fusion-column-wrapper">';
			    		
			    			if ( get_post_meta ( get_the_ID(), '_select_fixed' , true ) == 'No')  {
			    				echo '<p><img class="aligncenter size-full" src="' . plugins_url( 'images/Doctor_No.png', __FILE__) . '" ></p> ';
			    			}

			    			if ( get_post_meta ( get_the_ID(), '_select_fixed' , true ) == 'Yes' ) {
			    				echo '<p><img class="aligncenter size-full" src="' . plugins_url( 'images/Doctor_Yes.png', __FILE__) . '" ></p> ';
			    			}

			    			echo '<p style="text-align: center;">Spayed/Neutered: ' .  get_post_meta ( get_the_ID(), '_select_fixed' , true) . '</p>';

			    			echo '<div class="fusion-clearfix"></div>';
			    		echo '</div>';
			    	echo '</div>';
			   	}


			    if ( !empty ( get_post_meta ( get_the_ID(), '_select_shots', true ))){
			    	echo '<div class="fusion-layout-column fusion_builder_column fusion_builder_column_1_3  fusion-one-third 1_3">';
			    		echo '<div class="fusion-column-wrapper">';
			    		
			    			if ( get_post_meta ( get_the_ID(), '_select_shots' , true ) == 'No')  {
			    				echo '<p><img class="aligncenter size-full" src="' . plugins_url( 'images/shots_no.png', __FILE__) . '" ></p> ';
			    			}
			    			if ( get_post_meta ( get_the_ID(), '_select_shots' , true ) == 'Yes' ) {
			    				echo '<p><img class="aligncenter size-full" src="' . plugins_url( 'images/shots_yes.png', __FILE__) . '" ></p> ';
			    			}

			    			echo '<p style="text-align: center;">Shots Current: ' .  get_post_meta ( get_the_ID(), '_select_shots' , true) . '</p>';

			    			echo '<div class="fusion-clearfix"></div>';
			    		echo '</div>';
			    	echo '</div>';
			   	}

			    if ( !empty ( get_post_meta ( get_the_ID(), '_select_cratetrained', true ))){
			    	echo '<div class="fusion-layout-column fusion_builder_column fusion_builder_column_1_3  fusion-one-third 1_3">';
			    		echo '<div class="fusion-column-wrapper">';
			    		
			    			if ( get_post_meta ( get_the_ID(), '_select_cratetrained' , true ) == 'No')  {
			    				echo '<p><img class="aligncenter size-full" src="' . plugins_url( 'images/crate_trained_no.png', __FILE__) . '" ></p> ';
			    			}

			    			if ( get_post_meta ( get_the_ID(), '_select_cratetrained' , true ) == 'Not Sure')  {
			    				echo '<p><img class="aligncenter size-full" src="' . plugins_url( 'images/crate_trained_no.png', __FILE__) . '" ></p> ';
			    			}

			    			if ( get_post_meta ( get_the_ID(), '_select_cratetrained' , true ) == 'Yes' ) {
			    				echo '<p><img class="aligncenter size-full" src="' . plugins_url( 'images/crate_trained_yes.png', __FILE__) . '" ></p> ';
			    			}

			    			echo '<p style="text-align: center;">Crate Trained: ' .  get_post_meta ( get_the_ID(), '_select_cratetrained' , true) . '</p>';

			    			echo '<div class="fusion-clearfix"></div>';
			    		echo '</div>';
			    	echo '</div>';
			   	}

			    if ( !empty ( get_post_meta ( get_the_ID(), '_select_declawed', true ))){
			    	echo '<div class="fusion-layout-column fusion_builder_column fusion_builder_column_1_3  fusion-one-third 1_3">';
			    		echo '<div class="fusion-column-wrapper">';
			    		
			    			if ( get_post_meta ( get_the_ID(), '_select_declawed' , true ) == 'No')  {
			    				echo '<p><img class="aligncenter size-full" src="' . plugins_url( 'images/declaw_no.png', __FILE__) . '" ></p> ';
			    			}
			    			
			    			if ( get_post_meta ( get_the_ID(), '_select_declawed' , true ) == 'Not Sure')  {
			    				echo '<p><img class="aligncenter size-full" src="' . plugins_url( 'images/declaw_no.png', __FILE__) . '" ></p> ';
			    			}

			    			if ( get_post_meta ( get_the_ID(), '_select_declawed' , true ) == 'Yes' ) {
			    				echo '<p><img class="aligncenter size-full" src="' . plugins_url( 'images/declaw_yes.png', __FILE__) . '" ></p> ';
			    			}

			    			echo '<p style="text-align: center;">Declawed: ' .  get_post_meta ( get_the_ID(), '_select_declawed' , true) . '</p>';

			    			echo '<div class="fusion-clearfix"></div>';
			    		echo '</div>';
			    	echo '</div>';
			   	}


		    echo '</div>';
	    echo '</div>';
    echo '</div>';
}