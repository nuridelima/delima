<?php
/**
 * Flatsome functions and definitions
 *
 * @package flatsome
 */

require get_template_directory() . '/inc/init.php';

/**
 * Note: Do not add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * http://codex.wordpress.org/Child_Themes
 */

add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );    // 2.1 +
 
function woo_custom_cart_button_text() {
 
        return __( 'My Button Text', 'woocommerce' );
 
}

//* Change the Add To Cart Link
add_filter( 'woocommerce_loop_add_to_cart_link', 'sfws_add_product_link' );
function sfws_add_product_link( $link ) {
 global $product;
 $product_id = $product->id;
 $product_sku = $product->get_sku();
// $link = '<a href="'.get_permalink().'" rel="nofollow" data-product_id="'.$product_id.'" data-product_sku="'.$product_sku.'" data-quantity="1" class="button add_to_cart_button product_type_variable">BELI</a>';
 $link = '<div class="add-to-cart-button">'
         . '<a href="/contact-us" rel="nofollow" data-product_id="'.$product_id.'" class="add_to_cart_button product_type_simple button alt-button small clearfix">BELI</a>'
         . '</div>';
 return $link;
}