<?php

function pet_info_below_meta() {

	echo '<ul class="fusion-checklist fusion-checklist-1">';

		if (get_post_meta( get_the_ID(), '_pet_name', true ) <> '' ) : ?>
				<li class="fusion-li-item"><i class="fa fa-check" aria-hidden="true"></i>
					<span class="species_wrapper">
						<?php _e( 'Pet Name:', 'woocommerce' ); ?>
							<span class='petname' itemprop="petname">
				   				<?php echo get_post_meta( get_the_ID(), '_pet_name', true ); ?>
							</span>
					</span>
				</li>
			<?php endif;

		if ( !empty ( get_post_meta( get_the_ID(), '_species', true ) ) ) : ?>
				<li class="fusion-li-item"><i class="fa fa-check" aria-hidden="true"></i>
					<span class="dog_color_wrapper">
						<?php _e( 'Species: ', 'woocommerce' ); ?>
						<span class='_species' itemprop="_species">
				   			<?php echo get_post_meta( get_the_ID(), '_species' , true ); ?>
						</span>
					</span>
				</li>
			<?php endif;

		if (get_post_meta( get_the_ID(), '_primary_dog_breed', true ) <> '' ) : ?>
				<li class="fusion-li-item"><i class="fa fa-check" aria-hidden="true"></i>
					<span class="breed1_wrapper">
						<?php _e( 'Breed:', 'woocommerce' ); ?>
						<span class='breed1' itemprop="breed1">
				   			<?php echo get_post_meta( get_the_ID(), '_primary_dog_breed' , true ); ?>
				   		
							<?php	if ( !empty ( get_post_meta( get_the_ID(), '_second_dog_breed', true ) ) ) : 
									echo '& ' . get_post_meta( get_the_ID(), '_second_dog_breed' , true ) . ' Mix'; ?>
									
									<?php endif; ?>
				   		</span>
				   	</span>
			   	</li>
		<?php endif;

		if ( !empty ( get_post_meta( get_the_ID(), '_dog_color', true ) ) ) : ?>
				<li class="fusion-li-item"><i class="fa fa-check" aria-hidden="true"></i>
					<span class="dog_color_wrapper">
						<?php _e( 'Dog Color: ', 'woocommerce' ); ?>
						<span class='_dog_color' itemprop="_dog_color">
				   			<?php echo get_post_meta( get_the_ID(), '_dog_color' , true ); ?>
						</span>
					</span>
				</li>
			<?php endif;

		if ( !empty ( get_post_meta( get_the_ID(), '_cat_color', true ) ) ) : ?>
				<li class="fusion-li-item"><i class="fa fa-check" aria-hidden="true"></i>
					<span class="dog_color_wrapper">
						<?php _e( 'Cat Color: ', 'woocommerce' ); ?>
						<span class='_cat_color' itemprop="_cat_color">
				   			<?php echo get_post_meta( get_the_ID(), '_cat_color' , true ); ?>
						</span>
					</span>
				</li>
			<?php endif;

		if ( !empty ( get_post_meta( get_the_ID(), '_select_gender', true ) ) ) : ?>
				<li class="fusion-li-item"><i class="fa fa-check" aria-hidden="true"></i>
					<span class="dog_color_wrapper">
						<?php _e( 'Gender: ', 'woocommerce' ); ?>
						<span class='_select_gender' itemprop="_select_gender">
				   			<?php echo get_post_meta( get_the_ID(), '_select_gender' , true ); ?>
						</span>
					</span>
				</li>
			<?php endif;

		if ( !empty ( get_post_meta( get_the_ID(), '_select_age', true ) ) ) : ?>
				<li class="fusion-li-item"><i class="fa fa-check" aria-hidden="true"></i>
					<span class="dog_color_wrapper">
						<?php _e( 'Age: ', 'woocommerce' ); ?>
						<span class='_select_age' itemprop="_select_age">
				   			<?php echo get_post_meta( get_the_ID(), '_select_age' , true ); ?>
						</span>
					</span>
				</li>
			<?php endif;

		if ( !empty ( get_post_meta( get_the_ID(), '_select_status', true ) ) ) : ?>
				<li class="fusion-li-item"><i class="fa fa-check" aria-hidden="true"></i>
					<span class="dog_color_wrapper">
						<?php _e( 'Status: ', 'woocommerce' ); ?>
						<span class='_select_status' itemprop="_select_status">
				   			<?php echo get_post_meta( get_the_ID(), '_select_status' , true ); ?>
						</span>
					</span>
				</li>
			<?php endif;

	echo '</ul>';
	echo '<div class="product-border"></div>';
}

add_action( 'woocommerce_product_meta_start', 'pet_info_below_meta', 41 );
