<?php
/**
 * Created by PhpStorm.
 * User: cenk_
 * Date: 23-5-2019
 * Time: 16:03
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

global $product;

// Get the prices
$price_excl_tax = wc_get_price_excluding_tax( $product ); // price without VAT
$price_incl_tax = wc_get_price_including_tax( $product );  // price with VAT
$tax_amount     = $price_incl_tax - $price_excl_tax; // VAT amount

// Display the prices
?>
<p class="price-excl"><?php echo wc_price( $price_excl_tax ); ?>(excl. BTW)</p>
<p class="tax-price"><?php  echo wc_price( $tax_amount ); ?> (BTW prijs)</p>
<p class="price-incl"><?php echo wc_price( $price_incl_tax ); ?> (incl. BTW)</p>