<?php

function bootstraping(){
    load_theme_textdomain("ePortfolio");
    add_theme_support("title-tag");
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');
    add_theme_support( 'custom-logo', array(
        'height' => 180,
        'width'  => 120,
    ) );
    register_nav_menu('topMenu',__('Top Menu', 'ePortfolio'));
    register_nav_menu('footerMenu',__('Footer Menu', 'ePortfolio'));
}
add_action('after_setup_theme', 'bootstraping');

// Assets

function theme_assets(){
    wp_enqueue_style('themecss', get_stylesheet_uri(),'','1.0.0');
    wp_enqueue_style('bootstarp', '//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('featherlight-css', '//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css" type="text/css');

    wp_enqueue_script('featherlight-js', '//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js', array('jquery'), '0.0.1', true);
    wp_enqueue_script('bootstarpjs', '//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js');
    

    // wp_enqueue_script('themejquery', 'js/jquery.js');
}
add_action("wp_enqueue_scripts","theme_assets");

// sidebar ragister

function sidebar(){
    register_sidebar(array(
        'name' =>__('Single Post Sidebar', 'ePortfolio'),
        'id' =>'sidebar-01',
        'description' =>__('Right Sidebar', 'ePortfolio'),
        'before_widget' =>'<section>',
        'after_widget' =>'</section>',
        'before_title' =>'<h2>',
        'after_title' =>'</h2>',
    ));
    // Footer Left Sidebar
    register_sidebar(array(
        'name' =>__('Footer Left Sidebar', 'ePortfolio'),
        'id' =>'footer-left',
        'description' =>__('Footer Left Sidebar', 'ePortfolio'),
        'before_widget' =>'<section>',
        'after_widget' =>'</section>',
        'before_title' =>'',
        'after_title' =>'',
    ));
    // Footer Right Sidebar
    register_sidebar(array(
        'name' =>__('Footer Right Sidebar', 'ePortfolio'),
        'id' =>'footer-right',
        'description' =>__('Footer Right Sidebar', 'ePortfolio'),
        'before_widget' =>'<section>',
        'after_widget' =>'</section>',
        'before_title' =>'',
        'after_title' =>'',
    ));
    
}
add_action('widgets_init', 'sidebar');

function ePortfolio_menu_item_class($classes , $item){
    $classes [] = 'list-inline-item';
    return $classes;
}
add_filter('nav_menu_css_class', 'ePortfolio_menu_item_class', 10, 2);