<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/bootstrap.min.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/animate.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/responsive.css' );

}

register_nav_menus( array(
'Top' => 'Menu principale',
) );


 ?>
