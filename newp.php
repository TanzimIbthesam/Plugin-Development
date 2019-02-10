<?php

/*
 * Plugin Name:NEWP
 *  Plugin URI:  https://example.com/plugins/the-basics/
 * Description: We are learning Wordpress Plugin development
 * Version:     20160911
 * Author:      WordPress.org
 * Author URI:  https://author.example.com/
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: basicplugin
 * Domain Path: /languages
 */
add_action('wp_footer','c4_add_title');

function c4_add_title(){
// echo "<h1 style=text-align:center;>This is a new admin title<h1>";
echo "<marquee>A scrolling text from one side to another.</marquee>";
}
// / function hideAll(){
    // 
    
    
    /* // </style> */
    /* // <//?php
    }
    // add_action('wp_head','hideAll');
    // add_action('init','hideAll');
    // add_action('admin_init','hideAll');
    // add_action('wp_head','hideAll'); */
    //Some important notes
    //For showing in WP header(front end)-wp_head
    //For showing in Wp footer(front end)-wp_footer
