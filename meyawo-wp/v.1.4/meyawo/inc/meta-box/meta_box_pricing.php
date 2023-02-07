<?php
add_action('cmb2_admin_init', 'pricing_metabox');

function pricing_metabox()
{
    $tableName = 'pricing';
    $pricing_box = new_cmb2_box(array(
        'id' => $tableName . '_box',
        'title' => __('pricing', 'cmb2'),
        'object_types' => array('pricing'), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'fields' => array(
            array(
                'name' => 'Service pricing',
                'desc' => 'Enter the price of this service only in numbers',
                'id' => $tableName . '_sevice',
                'type' => 'text_money',
            ),
            array(
                'name' => 'Service duration',
                'desc' => 'Day/Week/Month/Year',
                'id' => $tableName . 'duration_sevice',
                'type' => 'select',
                'options' => array(
                    1 => 'Day',
                    7 => 'Week',
                    30 => 'Month',
                    365 => 'Year',
                ),
            ),
            array(
                'name' => 'Botton Name',
                'desc' => 'Enter the name of the service purchase button',
                'id' => $tableName . 'purchase_button_sevice',
                'type' => 'text_small',
            ),
            array(
                'name' => 'Botton Url',
                'desc' => 'Link to the buy button',
                'id' => $tableName . 'link_button_sevice',
                'type' => 'text_url',
            ),
        ),
    ));
}
