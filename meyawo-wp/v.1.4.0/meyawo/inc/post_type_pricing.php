<?php

// pricing post type
function post_type_meyawo_pricing()
{
    $labels = array(
        'name' => __('pricing'),
        'singular_name' => __('pricing'),
        'add_new' => __('Add New pricing'),
        'add_new_item' => __('Add New Item pricing'),
        'edit_item' => __('Edit Item pricing'),
        'new_item' => __('New pricing'),
        'view_item ' => __('View pricing'),
        'view_items ' => __('View pricing'),
        'search_items' => __('Search pricing'),
        'not_found' => __('Not found pricing'),
        // 'not_found_in_trash ' => __(''),
        // 'parent_item_colon' => __(''),
        'all_items' => __('All pricing'),
        'archives ' => __('Archives pricing'),
        'menu_name' => __('Pricing'),
        'items_list' => __('pricing list'),
        'item_published' => __('pricing published'),
        'item_updated' => __('pricing updated'),
        'item_link' => __('pricing link'),
        'item_link_description' => __('pricing link description'),
    );
    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'emty description'),
        'public' => true,
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => null,
        'menu_icon' => 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBVcGxvYWRlZCB0bzogU1ZHIFJlcG8sIHd3dy5zdmdyZXBvLmNvbSwgR2VuZXJhdG9yOiBTVkcgUmVwbyBNaXhlciBUb29scyAtLT4NCjxzdmcgaGVpZ2h0PSI4MDBweCIgd2lkdGg9IjgwMHB4IiB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiANCgkgdmlld0JveD0iMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHBvbHlnb24gc3R5bGU9ImZpbGw6I0ZGNTgzRTsiIHBvaW50cz0iMjg1LjkzMiwxMzYuMTkyIDE0Ny43MDgsMCA5LjQ4NCwxMzYuMTkyIDY4LjgwNCwxMzYuMTkyIDY4LjgwNCwzMjIuMzI4IDIyNi42MTIsMzIyLjMyOCANCgkyMjYuNjEyLDEzNi4xOTIgIi8+DQo8cGF0aCBzdHlsZT0iZmlsbDojMzJCRUE2OyIgZD0iTTM3NS4yMDQsNDE1Ljg4OHYtOTUuNDE2Yy0yOS43NjgtOC41MDQtNTEuNTg0LTIxLjM2OC02NS40OC0zOC42DQoJYy0xMy44ODgtMTcuMjMyLTIwLjgzMi0zOC4xNTItMjAuODMyLTYyLjc0NGMwLTI0LjkwNCw3Ljg0OC00NS44MDgsMjMuNTY4LTYyLjc0NGMxNS43Mi0xNi45MiwzNi42MjQtMjYuNjcyLDYyLjc0NC0yOS4yNjR2LTIyLjU0NA0KCWgzMy4wMjR2MjIuNTQ0YzI0LjEzNiwyLjg4OCw0My4zNDQsMTEuMTIsNTcuNjE2LDI0LjcxMmMxNC4yNTYsMTMuNTkyLDIzLjM3NiwzMS43NzYsMjcuMzI4LDU0LjUzNmwtNTcuNjE2LDcuNTINCgljLTMuNDk2LTE3LjkyLTEyLjYwOC0zMC4wNjQtMjcuMzI4LTM2LjQ0djg5LjA0OGMzNi40MzIsOS44NzIsNjEuMjU2LDIyLjY2NCw3NC40NjQsMzguMzc2DQoJYzEzLjIsMTUuNzA0LDE5LjgyNCwzNS44NjQsMTkuODI0LDYwLjQ1NmMwLDI3LjQ4LTguMzEyLDUwLjY0LTI0Ljk1Miw2OS40NjRjLTE2LjYyNCwxOC44MjQtMzkuNzI4LDMwLjM2LTY5LjMzNiwzNC42MTZWNTEyDQoJaC0zMy4wMjR2LTQxLjQ1NmMtMjYuMjcyLTMuMTg0LTQ3LjU5Mi0xMi45ODQtNjMuOTkyLTI5LjM4NGMtMTYuNC0xNi4zODQtMjYuODgtMzkuNTM2LTMxLjQzMi02OS40NTZsNTkuNDQ4LTYuMzc2DQoJYzIuNDI0LDEyLjE0NCw2Ljk3NiwyMi42MzIsMTMuNjY0LDMxLjQzMkMzNTkuNTY0LDQwNS41NjgsMzY2Ljk5Niw0MTEuOTQ0LDM3NS4yMDQsNDE1Ljg4OHogTTM3NS4yMDQsMTc2Ljc2OA0KCWMtOC45NjgsMy4wMzItMTYuMTA0LDguMTkyLTIxLjQwOCwxNS40OTZjLTUuMzIsNy4yODgtNy45NjgsMTUuMzI4LTcuOTY4LDI0LjEzNmMwLDguMDQ4LDIuNDI0LDE1LjUyLDcuMjg4LDIyLjQ0DQoJYzQuODY0LDYuOTEyLDEyLjIyNCwxMi40ODgsMjIuMDk2LDE2Ljc0NHYtNzguODE2SDM3NS4yMDR6IE00MDguMjI4LDQxOS4wODhjMTEuMzc2LTIuMTI4LDIwLjY0LTcuNDA4LDI3Ljc3Ni0xNS44MzINCgljNy4xMzYtOC40MTYsMTAuNzA0LTE4LjMzNiwxMC43MDQtMjkuNzJjMC0xMC4xNjgtMy0xOC45MjgtOC45OTItMjYuMzA0Yy01Ljk5Mi03LjM2LTE1LjgyNC0xMy4wMDgtMjkuNDg4LTE2Ljk2OFY0MTkuMDg4eiIvPg0KPC9zdmc+',
        'supports' => array('title', 'editor', 'thumbnail'),
        'capability_type' => 'post',
        'publicly_queryable' => true,
        'has_archive' => true,
        'query_var' => true,
    );
    register_post_type('pricing', $args);
}
add_action('init', 'post_type_meyawo_pricing');

// // taxonomy pricing post type
// function taxonomy_pricing()
// {
//     $labels = array(
//         'name' => __('Category pricing'),
//         'singular_name' => __('Category pricing'),
//         'all_items' => __('All Category pricing'),
//         'search_items' => __('Search Category pricing'),
//         'parent_item' => __('Parent Category pricing'),
//         'edit_item' => __('Edit Category pricing'),
//         'view_item' => __('View Category pricing'),
//         'add_new_item' => __('Add Category pricing'),
//     );
//     $args = array(
//         'labels' => $labels,
//         'public' => true,
//         'hierarchical ' => false,
//         'show_ui' => true,
//         'show_admin_column' => true,
//         'query_var' => true,
//     );

//     register_taxonomy('category_pricing', 'pricing', $args);
// }
// add_action('init', 'taxonomy_pricing');
