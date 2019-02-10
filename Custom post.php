<?php
/*
Plugin Name: Custompost

Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Tanzim Ibthesam
Version: 1.0

*/
function custom_post(){
    register_post_type('cpost',
    array(
        'labels'=>array(
                 'name' => __('Tut'),
                 'singular_name'=> __('cpost'),
                 'add_new'=> __('Add post'),
                 'add_new_item'=> __('Add new post'),
        ),
        'taxonomies'=>array('category','post_tag'),
        'public'=>true,
         'supports'=>array('title','editor','thumbnail','excert','comments'),

    )
    
    
    );
}
add_action('init','custom_post');
add_action('init','tut_shortcode_init');
function tut_shortcode_init(){
    add_shortcode('tut','tut_shortcode_register');
    function tut_shortcode_register(){
        $args=array(
            'post_type'=>'cpost'
           );
           
           $postloop=new WP_Query($args);
    
           if($postloop->have_posts()){
               while($postloop->have_posts()){
                $postloop->the_post();
                ?>
                <h3><?php the_title(); ?></h3>
                <?php the_post_thumbnail();
                 the_excerpt();?>
                 <?php 
    
               }
               wp_reset_postdata();
           }else{
               echo "Nothing found in his post type";
           }
    
    }
}
add_action('init','cpost_tax_invoke');
function cpost_tax_invoke(){
    register_taxonomy('cposttax','cpost',
    array(
        'label' => __( 'Tutorial category' ),
        'rewrite' => array( 'slug' => 'genre' ),
        'hierarchical'=>true,
    
        
    
    
    
    
    ));
}


?>