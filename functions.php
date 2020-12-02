<?php 

function theme_supports (){
    add_theme_support('title-tag'); 
    add_theme_support('post-thumbnails'); 
    add_theme_support('menus');
    register_nav_menu('header','En tête du menu');
    register_nav_menu('footer','Pied de page');


}

// function theme_register_assets (){
//     wp_register_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"',[]);
//     wp_register_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"',['pooper','jquery'],false,true);
//     wp_register_script( 'pooper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"', false,true);
//     wp_deregister_script('jquerymin');
//     wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js"', false,true);

//     wp_enqueue_style('bootstrap');
//     wp_enqueue_script('bootstrap');


// }

function theme_title($title){
    return'Salut'. $title;
}

function theme_menu_class($classes){
    $classes[]= 'nav-item';
    return $classes;
}

function theme_menu_link_class($attrs){
    $attrs['class']= 'nav-link';
    return $attrs;
}



register_post_type('articleacf',[
    'label' => 'articleacf',
    'public' => true,
    'menu_position' => 4,
    'menu_icon' => 'dashicons-smiley',
]);


add_action('after_setup_theme','theme_supports');
// add_action('wp_enqueue_scripts','theme_register_assets');
add_filter('wp_title','theme_title');
add_filter('nav_menu_css_class','theme_menu_class');
add_filter('nav_menu_link_attributes','theme_menu_link_class');
