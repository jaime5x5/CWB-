<?php
/**
 * This file contains any WooCommerce functions that we want to use to override the default WC ones.
 */

/**
 * Show a shop page description on product archives
 */
function woocommerce_product_archive_description() {
	if ( is_post_type_archive( 'product' ) && get_query_var( 'paged' ) == 0 ) {
		$shop_page   = get_post( woocommerce_get_page_id( 'shop' ) );
		if ( $shop_page ) {
			$description = apply_filters( 'the_content', $shop_page->post_content );
			if ( $description ) {
				echo '<div class="post-content">' . $description . '</div>';
			}
		}
	}
}
array(
      'number' => 'null',
      'orderby' => 'name',
      'order' => 'ASC',
      'columns' => '6',
      'hide_empty' => '1',
      'parent' => '',
      'ids' => ''
 )


// Omit closing PHP tag to avoid "Headers already sent" issues.
// Move product tabs
 
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 60 );

