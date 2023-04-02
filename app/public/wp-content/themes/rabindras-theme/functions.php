<?php 

function my_first_wpp_files(){

    wp_enqueue_style('my_first_wpp_mainstyles',get_stylesheet_uri());
    
}

add_action('wp_enqueue_scripts','my_first_wpp_files');

?>