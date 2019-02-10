<?php
/*
Plugin Name:shortcode
Version:1.0 
Author:Tanzim Ibthesam
*/
function c4_shortcode_init(){
        function c4_short_code(){
        echo "<h2>We are creating a shortcode</h2>";
}
add_shortcode('header_tag','c4_short_code');
}
add_action('init','c4_shortcode_init');
// add_shortcode($tag,$callback);
