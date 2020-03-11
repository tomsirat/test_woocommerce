<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

register_sidebar( array(
    'id' => 'newsletter-sidebar',
    'name' => 'newsletter',
    'before_widget'  => '<div class="site__sidebar__widget %2$s">',
    'after_widget'  => '</div>',
    'before_title' => '<p class="site__sidebar__widget__title">',
    'after_title' => '</p>',
) );


wp_enqueue_script( 'popper', get_stylesheet_directory_uri() . '/node_modules/popper.js/dist/popper.min.js', array( 'jquery' ), null, true );
wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/node_modules/jquery/dist/jquery.min.js', array( 'jquery' ), null, true );
wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array( 'jquery' ), null, true );
wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css' );