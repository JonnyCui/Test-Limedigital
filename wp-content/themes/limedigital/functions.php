<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );



function enqueue_parent_styles() {

   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );

   wp_enqueue_style( 'bootrap-style','https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' );

}





function lime_adding_custom_scripts() {

    wp_register_script('my_amazing_script', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery'),'1.1', true);

    wp_enqueue_script('my_amazing_script');

    

    wp_register_script('custom_script', '/wp-content/themes/limedigital/js/custom.js', array('jquery'),'1.1', true);

    wp_enqueue_script('custom_script');
    
    wp_register_script('menu_script', '/wp-content/themes/limedigital/js/menu.js', array('jquery'),'1.1', true);

    wp_enqueue_script('menu_script');

    

} 

 add_action( 'wp_enqueue_scripts', 'lime_adding_custom_scripts', 999 ); 

 
