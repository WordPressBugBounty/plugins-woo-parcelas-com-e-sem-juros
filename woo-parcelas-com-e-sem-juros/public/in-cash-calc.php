<?php
/**
 * Do in cash payment calculation
 */
if(!defined('ABSPATH')){
	exit;
}

$prefix         = $this->settings['in_cash_prefix'];
$discount_value = $this->settings['in_cash_discount'];
$discount_type  = $this->settings['in_cash_discount_type'];
$suffix         = $this->settings['in_cash_suffix'];

if('variable' == $product->get_type()){
    /**
     * Deal with in cash value in single variable product
     * that has children with different prices
     */
    if($product->get_variation_price('min') != $product->get_variation_price('max')){
        if(is_product()){
        	/**
	         * Calculate and display in cash value for each child in variation product
	         */
	        add_action('woocommerce_before_single_variation', array($this, 'fswp_variable_in_cash_calculation'), 100);
        }    
    }
}

/**
 * Get product final price
 *
 * @var     string  $price
 */
$price = wc_get_price_including_tax($product);

$factor = str_replace(',', '.', $discount_value);

if($discount_type == 0){ // %    	
	$factor = 1 - ($factor / 100);

	$discount_price = $price * $factor;
}
else if($discount_type == 1){ // Fixed
	$discount_price = $price - $discount_value;
}

$in_cash_html  = "<div class='fswp_in_cash_price $class'>";
	$in_cash_html .= "<p class='price fswp_calc'>";
		$in_cash_html .= "<span class='fswp_in_cash_prefix'>" . $prefix . "</span> " . wc_price($discount_price) . " <span class='fswp_in_cash_suffix'>" . $suffix . "</span>";
	$in_cash_html .= "</p>";
$in_cash_html .= "</div>";

echo apply_filters('fswp_in_cash_calc_output', $in_cash_html, $prefix, $discount_price, $suffix);