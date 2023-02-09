<?php

// portfolio post type
function post_type_meyawo_portfolio()
{
    $labels = array(
        'name' => __('Portfolio'),
        'singular_name' => __('Portfolio'),
        'add_new' => __('Add New portfolio'),
        'add_new_item' => __('Add New Item portfolio'),
        'edit_item' => __('Edit Item portfolio'),
        'new_item' => __('New portfolio'),
        'view_item ' => __('View portfolio'),
        'view_items ' => __('View portfolios'),
        'search_items' => __('Search portfolio'),
        'not_found' => __('Not found portfolio'),
        // 'not_found_in_trash ' => __(''),
        // 'parent_item_colon' => __(''),
        'all_items' => __('All portfolio'),
        'archives ' => __('Archives portfolio'),
        'menu_name' => __('Portfolio'),
        'items_list' => __('portfolio list'),
        'item_published' => __('portfolio published'),
        'item_updated' => __('portfolio updated'),
        'item_link' => __('portfolio link'),
        'item_link_description' => __('portfolio link description'),
    );
    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'emty description'),
        'public' => true,
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => null,
        'menu_icon' => 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBVcGxvYWRlZCB0bzogU1ZHIFJlcG8sIHd3dy5zdmdyZXBvLmNvbSwgR2VuZXJhdG9yOiBTVkcgUmVwbyBNaXhlciBUb29scyAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIGZpbGw9IiMwMDAwMDAiIGhlaWdodD0iODAwcHgiIHdpZHRoPSI4MDBweCIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiANCgkgdmlld0JveD0iMCAwIDQzNy43NDQgNDM3Ljc0NCIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8cGF0aCBkPSJNNDA1Ljg1MiwxMDAuODc5aC0zLjM1OGMtMy44NTktNy4xMi0xMS4zOTktMTEuOTY3LTIwLjA1MS0xMS45NjdoLTYxLjU2N1Y3OC41OTRjMC0xMy4yNDUtMTAuNzc1LTI0LjAyMS0yNC4wMi0yNC4wMjENCgloLTE1NS45NmMtMTMuMjUsMC0yNC4wMywxMC43NzUtMjQuMDMsMjQuMDIxdjEwLjMxOEg1NS4zMDFjLTguNjUyLDAtMTYuMTkyLDQuODQ3LTIwLjA1MSwxMS45NjdoLTMuMzU4DQoJQzE0LjMwNywxMDAuODc5LDAsMTE1LjE4NiwwLDEzMi43NzF2MjE4LjUwN2MwLDE3LjU4NiwxNC4zMDcsMzEuODkzLDMxLjg5MiwzMS44OTNoMzczLjk2YzE3LjU4NSwwLDMxLjg5Mi0xNC4zMDcsMzEuODkyLTMxLjg5Mw0KCVYxMzIuNzcxQzQzNy43NDQsMTE1LjE4Niw0MjMuNDM3LDEwMC44NzksNDA1Ljg1MiwxMDAuODc5eiBNMTMwLjg2NSw3OC41OTRjMC01LjUyNSw0LjUtMTAuMDIxLDEwLjAzLTEwLjAyMWgxNTUuOTYNCgljNS41MjUsMCwxMC4wMiw0LjQ5NSwxMC4wMiwxMC4wMjF2MTAuMzE4aC0xNzYuMDFWNzguNTk0eiBNNDYuNTExLDExMS43MDJjMC00Ljg0NywzLjk0My04Ljc5LDguNzktOC43OWgzMjcuMTQxDQoJYzQuODQ3LDAsOC43OSwzLjk0Myw4Ljc5LDguNzl2MTY2LjI0NWMwLDIzLjEwNC0xOC43OTcsNDEuOTAxLTQxLjkwMSw0MS45MDFoLTgyLjY2OGw0LjQxNy0yNS4zOTZIMTY2LjY1OGw0LjQxNywyNS4zOTZIODguNDEzDQoJYy0yMy4xMDQsMC00MS45MDEtMTguNzk3LTQxLjkwMS00MS45MDFWMTExLjcwMnogTTI1NC40MzUsMzA4LjQ1M2wtNS4zNTgsMzAuODA4aC02MC40MTVsLTUuMzU4LTMwLjgwOEgyNTQuNDM1eiBNNDIzLjc0NCwzNTEuMjc4DQoJYzAsOS44NjYtOC4wMjYsMTcuODkzLTE3Ljg5MiwxNy44OTNIMzEuODkyYy05Ljg2NSwwLTE3Ljg5Mi04LjAyNi0xNy44OTItMTcuODkzVjEzMi43NzFjMC05Ljg2NSw4LjAyNi0xNy44OTIsMTcuODkyLTE3Ljg5MmgwLjYyDQoJdjE2My4wNjhjMCwzMC44MjQsMjUuMDc3LDU1LjkwMSw1NS45MDEsNTUuOTAxaDg1LjA5N2wzLjM3NiwxOS40MTJoODMuOTY2bDMuMzc2LTE5LjQxMmg4NS4xMDMNCgljMzAuODI0LDAsNTUuOTAxLTI1LjA3Nyw1NS45MDEtNTUuOTAxVjExNC44NzloMC42MmM5Ljg2NSwwLDE3Ljg5Miw4LjAyNiwxNy44OTIsMTcuODkyVjM1MS4yNzh6Ii8+DQo8L3N2Zz4=',
        'supports' => array('title', 'editor', 'comments', 'excerpt', 'thumbnail'),
        'capability_type' => 'post',
        'publicly_queryable' => true,
        'has_archive' => true,
        'query_var' => true,
    );
    register_post_type('portfolio', $args);
}
add_action('init', 'post_type_meyawo_portfolio');

// taxonomy portfolio post type
function taxonomy_portfolio()
{
    $labels = array(
        'name' => __('Category portfolios'),
        'singular_name' => __('Category portfolios'),
        'all_items' => __('All Category portfolios'),
        'search_items' => __('Search Category portfolios'),
        'parent_item' => __('Parent Category portfolios'),
        'edit_item' => __('Edit Category portfolios'),
        'view_item' => __('View Category portfolios'),
        'add_new_item' => __('Add Category portfolios'),
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'hierarchical ' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
    );

    register_taxonomy('category_portfolio', 'portfolio', $args);
}
add_action('init', 'taxonomy_portfolio');
