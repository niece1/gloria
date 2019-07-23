<?php
function gl_custom_post_type_slider() {
    $labels = array(
        'name'                  => _x( 'Sliders', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Slider', 'Post type singular name', 'textdomain' ),
      
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'slider' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );
 
    register_post_type( 'slider', $args );
}
 
add_action( 'init', 'gl_custom_post_type_slider' );


function gl_custom_post_type_request() {
    $labels = array(
        'name'                  => _x( 'Request Section', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Request Section', 'Post type singular name', 'textdomain' ),
      
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'request' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );
 
    register_post_type( 'request', $args );
}
add_action( 'init', 'gl_custom_post_type_request' );
?>