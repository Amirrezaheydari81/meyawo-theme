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
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_image_size('artical', 350, 335, true);
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

// service post type
function post_type_meyawo_service()
{
    $labels = array(
        'name' => __('Service'),
        'singular_name' => __('Service'),
        'add_new' => __('Add New Service'),
        'add_new_item' => __('Add New Item Service'),
        'edit_item' => __('Edit Item Service'),
        'new_item' => __('New Service'),
        'view_item ' => __('View Service'),
        'view_items ' => __('View Services'),
        'search_items' => __('Search Service'),
        'not_found' => __('Not found Service'),
        // 'not_found_in_trash ' => __(''),
        // 'parent_item_colon' => __(''),
        'all_items' => __('All Service'),
        'archives ' => __('Archives Service'),
        'menu_name' => __('Service'),
        'items_list' => __('Service list'),
        'item_published' => __('Service published'),
        'item_updated' => __('Service updated'),
        'item_link' => __('Service link'),
        'item_link_description' => __('Service link description'),
    );
    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'emty description'),
        'public' => true,
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => null,
        'menu_icon' => 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBVcGxvYWRlZCB0bzogU1ZHIFJlcG8sIHd3dy5zdmdyZXBvLmNvbSwgR2VuZXJhdG9yOiBTVkcgUmVwbyBNaXhlciBUb29scyAtLT4NCjxzdmcgZmlsbD0iIzAwMDAwMCIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgDQoJIHZpZXdCb3g9IjAgMCA0OTYgNDk2IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxnPg0KCQk8Zz4NCgkJCTxwYXRoIGQ9Ik00ODIuMzQ0LDI2NC45NjhDNDkxLjAyNCwyNTYuMjg4LDQ5NiwyNDQuMjcyLDQ5NiwyMzJjMC0xMi4yNzItNC45NzYtMjQuMjg4LTEzLjY1Ni0zMi45NjhMNDE2LDEzMi42ODhMMzQwLjY4OCwyMDgNCgkJCQlsMzIsMzJMMjQwLDM3Mi42ODhsLTMyLTMyTDEzMi42ODgsNDE2bDY2LjM0NCw2Ni4zNDRDMjA3LjcxMiw0OTEuMDI0LDIxOS43MjgsNDk2LDIzMiw0OTZjMTIuMjcyLDAsMjQuMjg4LTQuOTc2LDMyLjk2OC0xMy42NTYNCgkJCQlsMTguNDU2LTE4LjQ1NkMzMDYuODI0LDQ4NC41NzYsMzM2LjUwNCw0OTYsMzY4LDQ5NmM3MC41NzYsMCwxMjgtNTcuNDI0LDEyOC0xMjhjMC0zMS41MDQtMTEuNDI0LTYxLjE5Mi0zMi4xMTItODQuNTc2DQoJCQkJTDQ4Mi4zNDQsMjY0Ljk2OHogTTM2My4zMTIsMjA4TDQxNiwxNTUuMzEyTDQyOC42ODgsMTY4TDM3NiwyMjAuNjg4TDM2My4zMTIsMjA4eiBNMTU1LjMxMiw0MTZMMjA4LDM2My4zMTJMMjIwLjY4OCwzNzYNCgkJCQlMMTY4LDQyOC42ODhMMTU1LjMxMiw0MTZ6IE0yNzEuODMyLDQ1Mi44NDhsLTE4LjE3NiwxOC4xODRDMjQ3Ljk1Miw0NzYuNzM2LDI0MC4wNjQsNDgwLDIzMiw0ODANCgkJCQljLTguMDY0LDAtMTUuOTUyLTMuMjY0LTIxLjY1Ni04Ljk2OEwxNzkuMzEyLDQ0MEwyMzIsMzg3LjMxMmw4LDhMMzk1LjMxMiwyNDBsLTgtOEw0NDAsMTc5LjMxMmwzMS4wMzIsMzEuMDMyDQoJCQkJQzQ3Ni43MzYsMjE2LjA0OCw0ODAsMjIzLjkzNiw0ODAsMjMyYzAsOC4wNjQtMy4yNjQsMTUuOTUyLTguOTY4LDIxLjY1NmwtMTguMTc2LDE4LjE3NkwyNzEuODMyLDQ1Mi44NDh6IE00ODAsMzY4DQoJCQkJYzAsNjEuNzYtNTAuMjQsMTEyLTExMiwxMTJjLTI3LjIzMiwwLTUyLjk4NC05LjY1Ni03My4zNDQtMjcuMzQ0bDE1OC0xNThDNDcwLjM0NCwzMTUuMDA4LDQ4MCwzNDAuNzYsNDgwLDM2OHoiLz4NCgkJCTxwYXRoIGQ9Ik0yMDgsMzM2di0yOS43OTJjMTAuMjMyLTIuOTYsMjAuMDk2LTcuMDQ4LDI5LjQ0LTEyLjIwOGwyMS4wNzIsMjEuMDhsNTYuNTY4LTU2LjU2OEwyOTQsMjM3LjQ0DQoJCQkJYzUuMTY4LTkuMzQ0LDkuMjQ4LTE5LjIsMTIuMjA4LTI5LjQ0SDMzNnYtODBoLTI5Ljc5MmMtMi45Ni0xMC4yMzItNy4wNDgtMjAuMDk2LTEyLjIwOC0yOS40NGwyMS4wOC0yMS4wNzJMMjU4LjUxMiwyMC45Mg0KCQkJCUwyMzcuNDQsNDJjLTkuMzQ0LTUuMTY4LTE5LjItOS4yNDgtMjkuNDQtMTIuMjA4VjBoLTgwdjI5Ljc5MkMxMTcuNzY4LDMyLjc1MiwxMDcuOTA0LDM2Ljg0LDk4LjU2LDQyTDc3LjQ4OCwyMC45MkwyMC45Miw3Ny40ODgNCgkJCQlMNDIsOTguNTZjLTUuMTY4LDkuMzQ0LTkuMjQ4LDE5LjItMTIuMjA4LDI5LjQ0SDB2ODBoMjkuNzkyYzIuOTYsMTAuMjMyLDcuMDQ4LDIwLjA5NiwxMi4yMDgsMjkuNDRsLTIxLjA4LDIxLjA3Mmw1Ni41NjgsNTYuNTY4DQoJCQkJTDk4LjU2LDI5NGM5LjM0NCw1LjE2OCwxOS4yLDkuMjQ4LDI5LjQ0LDEyLjIwOFYzMzZIMjA4eiBNMTAxLjQzMiwyNzcuMTY4bC01LjM3Ni0zLjI4bC0xOC41NiwxOC41NjhsLTMzLjk0NC0zMy45NDQNCgkJCQlsMTguNTY4LTE4LjU2bC0zLjI4LTUuMzc2Yy02LjkyLTExLjMyOC0xMi4wMDgtMjMuNTkyLTE1LjEyLTM2LjQ0OEw0Mi4yNCwxOTJIMTZ2LTQ4aDI2LjI0bDEuNDgtNi4xMjgNCgkJCQljMy4xMTItMTIuODQ4LDguMTkyLTI1LjEyLDE1LjEyLTM2LjQ0OGwzLjI4LTUuMzc2bC0xOC41NjgtMTguNTZsMzMuOTQ0LTMzLjk0NGwxOC41NiwxOC41NjhsNS4zNzYtMy4yOA0KCQkJCWMxMS4zMjgtNi45MiwyMy41OTItMTIuMDA4LDM2LjQ0OC0xNS4xMkwxNDQsNDIuMjRWMTZoNDh2MjYuMjRsNi4xMjgsMS40OGMxMi44NDgsMy4xMTIsMjUuMTIsOC4xOTIsMzYuNDQ4LDE1LjEybDUuMzc2LDMuMjgNCgkJCQlsMTguNTYtMTguNTY4bDMzLjk0NCwzMy45NDRsLTE4LjU2OCwxOC41NmwzLjI4LDUuMzc2YzYuOTIsMTEuMzI4LDEyLjAwOCwyMy41OTIsMTUuMTIsMzYuNDQ4bDEuNDcyLDYuMTJIMzIwdjQ4aC0yNi4yNA0KCQkJCWwtMS40OCw2LjEyOGMtMy4xMTIsMTIuODQ4LTguMTkyLDI1LjEyLTE1LjEyLDM2LjQ0OGwtMy4yOCw1LjM3NmwxOC41NjgsMTguNTZsLTMzLjk0NCwzMy45NDRsLTE4LjU2LTE4LjU2OGwtNS4zNzYsMy4yOA0KCQkJCWMtMTEuMzI4LDYuOTItMjMuNTkyLDEyLjAwOC0zNi40NDgsMTUuMTJMMTkyLDI5My43NlYzMjBoLTQ4di0yNi4yNGwtNi4xMjgtMS40OA0KCQkJCUMxMjUuMDI0LDI4OS4xNjgsMTEyLjc2LDI4NC4wODgsMTAxLjQzMiwyNzcuMTY4eiIvPg0KCQkJPHBhdGggZD0iTTI1NiwxNjhjMC00OC41Mi0zOS40OC04OC04OC04OHMtODgsMzkuNDgtODgsODhzMzkuNDgsODgsODgsODhTMjU2LDIxNi41MiwyNTYsMTY4eiBNOTYsMTY4YzAtMzkuNzA0LDMyLjI5Ni03Miw3Mi03Mg0KCQkJCXM3MiwzMi4yOTYsNzIsNzJzLTMyLjI5Niw3Mi03Miw3MlM5NiwyMDcuNzA0LDk2LDE2OHoiLz4NCgkJCQ0KCQkJCTxyZWN0IHg9IjIzMS45OTUiIHk9IjMyNC42OSIgdHJhbnNmb3JtPSJtYXRyaXgoLTAuNzA3MSAwLjcwNzEgLTAuNzA3MSAtMC43MDcxIDY0Ny4yODY0IDQwMy44ODg0KSIgd2lkdGg9IjE2IiBoZWlnaHQ9IjIyLjYyNCIvPg0KCQkJDQoJCQkJPHJlY3QgeD0iMzI0LjY4MyIgeT0iMjMxLjk5OCIgdHJhbnNmb3JtPSJtYXRyaXgoLTAuNzA3MSAtMC43MDcxIDAuNzA3MSAtMC43MDcxIDQwMy44NzUyIDY0Ny4yODc0KSIgd2lkdGg9IjIyLjYyNCIgaGVpZ2h0PSIxNiIvPg0KCQk8L2c+DQoJPC9nPg0KPC9nPg0KPC9zdmc+',
        'supports' => array('title', 'editor', 'comments', 'excerpt', 'thumbnail'),
        'capability_type' => 'post',
        'publicly_queryable' => true,
        'has_archive' => true,
        'query_var' => true,
    );
    register_post_type('service', $args);
}
add_action('init', 'post_type_meyawo_service');

// taxonomy service post type
function taxonomy_service()
{
    $labels = array(
        'name' => __('Category Services'),
        'singular_name' => __('Category Services'),
        'all_items' => __('All Category Services'),
        'search_items' => __('Search Category Services'),
        'parent_item' => __('Parent Category Services'),
        'edit_item' => __('Edit Category Services'),
        'view_item' => __('View Category Services'),
        'add_new_item' => __('Add Category Services'),
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'hierarchical ' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
    );

    register_taxonomy('category_service', 'service', $args);
}
add_action('init', 'taxonomy_service');
