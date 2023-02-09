<?php
function MainfileHeader()
{
    // css files add header
    wp_enqueue_style('style', get_stylesheet_uri(), array(), false, 'all');
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=Baloo+Paaji|Open+Sans:300,300i,400,400i,600,600i,700,700i', array(), false, 'all');
    wp_enqueue_style('themify-icons', get_stylesheet_uri() . '/assets/vendors/themify-icons/css/themify-icons.css', array(), false, 'all');

// javascript add footer
    wp_enqueue_script('jq', get_template_directory_uri() . '/assets/vendors/jquery/jquery-3.4.1.js', array(), false, true);
    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.bundle.js', array('jq'), false, true);
    wp_enqueue_script('bootstrap-affix', get_template_directory_uri() . '/assets/vendors/bootstrap/bootstrap.affix.js', array(), false, true);
    wp_enqueue_script('meyawo', get_template_directory_uri() . '/assets/js/meyawo.js', array(), false, true);
    wp_enqueue_script('animejs', get_template_directory_uri() . '/assets/js/anime.min.js', array(), false, true);
    wp_enqueue_script('anime-code-custome', get_template_directory_uri() . '/assets/js/anime-code-custome.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'MainfileHeader');

// title
function meyawo_setup_theme()
{
// image size
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_image_size('artical', 350, 335, true);
    add_image_size('icon', 55, 55, true);
    add_image_size('portfolio', 349, 349, true);
    add_image_size('pricing', 70, 70, true);
    // menu panel admin
    register_nav_menus(
        array(
            'header-nav' => __('Header Nav'),
            'footer-nav' => __('Footer Nav'),
        )
    );
}
add_action('after_setup_theme', 'meyawo_setup_theme');
// lenght excerpt
function custome_excerpt_length()
{
    return 20;
}
add_filter('excerpt_length', 'custome_excerpt_length', 999);

include_once 'inc/post_type_service.php';
// include_once 'inc/meta_box_service.php';

include_once 'inc/post_type_portfolio.php';
//
include_once 'inc/post_type_pricing.php';
include_once 'inc/meta-box/meta_box_pricing.php';
