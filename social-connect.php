<?php
/*
Plugin Name:social icons
Version:1.0
Author:Tanzim Ibthesam
*/
function c4_social_connect($atts,$content=null){
    ob_start();
    $attr=extract(shortcode_atts(array(
        'href'=>'#',
        'sname'=>'facebook',
        'target'=>'_blank',
        'class'=>''


    ),$atts));

    return '<a class="'.$class.'" href=" '.$href.'"target="'.$target.'">'.$sname.'</a>';
    ?>
<?php
return ob_get_clean();
}

 function c4_social_init(){
    add_shortcode('c4_social','c4_social_connect');
 }
add_action('init','c4_social_init');
