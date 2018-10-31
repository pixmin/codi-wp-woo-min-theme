<?php

add_action('after_setup_theme', 'customtheme_add_woocommerce_support');
function customtheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}

// Remove WooCommerce CSS
add_filter('woocommerce_enqueue_styles', '__return_empty_array');
